<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use QRCode;
use Mail;

class PortfolioAccountsController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAccounts']);
    }

    public function accounts(){
        return view('BackEnd.pages.accounts.portfolio_accounts');
    }

    public function pend_purchase_accounts(){
        $indv = DB::table('unit_purchase')
                ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'A')
                ->where('SC_CNF_FLAG', '=', 'N')
                ->get();

        $inst = DB::table('unit_purchase')
                ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'A')
                ->where('SC_CNF_FLAG', '=', 'N')
                ->get();

        return view('BackEnd.pages.accounts.pendpurchacc', ['indv' => $indv, 'inst' => $inst]);
    }
	
	
	 public function prepared_app($apl_id, $id){

	 	$apl_id = decrypt($apl_id);
		 
		$PURCHASE_PANDING_UNIT = DB::table('unit_purchase')
		            ->select('unit_purchase.REMAINING_UNITS','unit_purchase.REGISTRATION_NO','unit_purchase.TOTAL_AMOUNT','unit_purchase.UNIT_PURCHASE_ID','unit_purchase.SPONSOR_ID','unit_purchase.PURCHASE_PERSON_ID')
				   ->where('UNIT_PURCHASE_ID', '=', $apl_id)
		           ->first();
				    $SPONSOR_ID=$PURCHASE_PANDING_UNIT->SPONSOR_ID;
				   
		$banks = DB::table('bank_account')
         ->join('bank', 'bank_account.BANK_ID', '=', 'bank.BANK_ID')
		 ->where('SPONSOR_ID', '=',  $SPONSOR_ID)
         ->get();		
        return view('BackEnd.pages.accounts.preparedpurchacc', ['PURCHASE_PANDING_UNIT' => $PURCHASE_PANDING_UNIT, 'banks' =>$banks]);
    }
	
	 public function get_ac_no($id){

        $bank_account_no = DB::table('bank_account')
                     ->where('BANK_ID',$id)
                     ->get();
        return response()->json($bank_account_no);
        
    }

    public function get_ac($id){

        $result = DB::table('bank_account')
                     ->where('ACCOUNT_NO',$id)
                     ->get();
        return response()->json($result);
        
    }
	
	
	public function accountant_app(Request $request){
          
		$id = $request->user_id;
    	$apl_id = $request->UNIT_PURCHASE_ID;
		$BANK_ID = $request->BANK_ID;
		$ACCOUNT_NO = $request->ACCOUNT_NO;
		
        $SC_CNF_FLAG = 'A';
        $SC_CNF_DATE = Carbon::now();
        $ACC_ID = $id;
        $updated_at = Carbon::now();

		
		$PT_PANDING_UNIT = DB::table('unit_purchase')
		                  ->select('unit_purchase.REMAINING_UNITS','unit_purchase.REGISTRATION_NO','unit_purchase.TOTAL_AMOUNT','unit_purchase.SPONSOR_ID','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at')
						  ->where('UNIT_PURCHASE_ID', '=', $apl_id)
		                  ->first();
						   $REGISTRATION_NO=$PT_PANDING_UNIT->REGISTRATION_NO;
						   $REMAINING_UNITS=$PT_PANDING_UNIT->REMAINING_UNITS;
						   $P_TOTAL_AMOUNT=$PT_PANDING_UNIT->TOTAL_AMOUNT;
						   $SPONSOR_ID=$PT_PANDING_UNIT->SPONSOR_ID;
						   $PURCHASE_PERSON_ID=$PT_PANDING_UNIT->PURCHASE_PERSON_ID;
						   $REQ_DATE = $PT_PANDING_UNIT->created_at;
						   
		$BUY_COMMI_RES = DB::table('portfolio_registration')
		                  ->select('portfolio_registration.COMMISSION')
						  ->where('PRO_REG_ID', '=', $SPONSOR_ID)
		                  ->first();
						  $COMMISSION_RATE=$BUY_COMMI_RES->COMMISSION;
						  $COMMISSION_AMOUNT=$P_TOTAL_AMOUNT*$COMMISSION_RATE/100;
						  
	    $COMMISSION_INSERT = DB::table('buy_sell_commission')->insert(
				       ['FUND_ID' => $SPONSOR_ID, 'REGISTRATION_NO' => $REGISTRATION_NO, 'BUY_SELL_USER_ID' => $PURCHASE_PERSON_ID, 'TOTAL_AMOUNT' => $P_TOTAL_AMOUNT, 'COMMISSION_AMOUNT' => $COMMISSION_AMOUNT, 'created_at'=>Carbon::now()]
			          );
						   
						  			   
	    $FT_PANDING_UNIT = DB::table('funds')
		                  ->select('funds.BUY_PADDING_UNIT','funds.TOTAL_UNITS','funds.TOTAL_AMOUNT')
						  ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
						  ->where('FUND_ID', $SPONSOR_ID)
		                  ->first();
						   $BUY_PADDING_UNIT=$FT_PANDING_UNIT->BUY_PADDING_UNIT;
						   $TOTAL_UNITS=$FT_PANDING_UNIT->TOTAL_UNITS;
						   $F_TOTAL_AMOUNT=$FT_PANDING_UNIT->TOTAL_AMOUNT;
				           $TOTAL_BUY_PADDING_UNIT= $BUY_PADDING_UNIT-$REMAINING_UNITS;
						   $GRANT_TOTAL_UNIT=$TOTAL_UNITS+$REMAINING_UNITS;
						   $GRANT_TOTAL_AMOUNT=$F_TOTAL_AMOUNT+$P_TOTAL_AMOUNT;
						   $UPDATE_AVG_RATE=$GRANT_TOTAL_AMOUNT/$GRANT_TOTAL_UNIT;
						   

		$UPDATE_BUY_FUND = DB::table('funds')
                              ->where('REGISTRATION_NO', $REGISTRATION_NO)
							  ->where('FUND_ID', $SPONSOR_ID)
                              ->update(['BUY_PADDING_UNIT' => $TOTAL_BUY_PADDING_UNIT,'TOTAL_UNITS' => $GRANT_TOTAL_UNIT,'AVG_RATE' => $UPDATE_AVG_RATE,'TOTAL_AMOUNT' => $GRANT_TOTAL_AMOUNT,'updated_at'=> Carbon::now()]);
							  
		$Bank_AMT = DB::table('bank_account')
		                  ->select('bank_account.BANK_AMOUNT')
						  ->where('ACCOUNT_NO', '=', $ACCOUNT_NO)
						  ->where('SPONSOR_ID', $SPONSOR_ID)
		                  ->first();
					$BANK_TOTAL_AMOUNT=$Bank_AMT->BANK_AMOUNT;  
					$UPDATE_BANK_AMOUNT=$BANK_TOTAL_AMOUNT+$P_TOTAL_AMOUNT;
					
		$Bank_update = DB::table('bank_account')
                              ->where('ACCOUNT_NO', $ACCOUNT_NO)
							  ->where('SPONSOR_ID', $SPONSOR_ID)
                              ->update(['BANK_AMOUNT' => $UPDATE_BANK_AMOUNT,'updated_at'=>  Carbon::now()]);

        DB::update('update unit_purchase set SC_CNF_FLAG = ?, SC_CNF_DATE = ?, ACC_ID = ?, updated_at = ? where UNIT_PURCHASE_ID = ?',[$SC_CNF_FLAG, $SC_CNF_DATE, $ACC_ID, $updated_at, $apl_id]);

        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $SPONSOR_ID)
                ->first();

        $custmail = $cust->CUSTODIAN_EMAIL;

        $fund_name = DB::table('portfolio_registration')
                  ->select('PORTFOLIO_NAME')
                  ->where('PRO_REG_ID',$SPONSOR_ID)
                  ->first();

        $id_first = substr($REGISTRATION_NO, 0, -11);

        if($id_first == 1 || $id_first == 3){
    	$inv_info =	DB::table('principal_applicant')
                    ->select('NAME', 'BANK_NAME', 'ACCOUNT_NO','EMAIL')
                	->where('REGISTRATION_NO',$REGISTRATION_NO)
                	->first();
    	}
    	elseif($id_first == 2){
    	$inv_info =	DB::table('inst_app')
                	->select('INSTNAME as NAME', 'BANK_NAME', 'ACCOUNT_NO','EMAIL')
                	->where('REGISTRATION_NO',$REGISTRATION_NO)
                	->first();
    	}
    	else{
    		echo "not found";
    	}

    	$apl_name = $inv_info->NAME;
    	$apl_email = $inv_info->EMAIL;

    	$existing = DB::table('funds')
                    ->select('TOTAL_UNITS')
                    ->where('REGISTRATION_NO',$REGISTRATION_NO)
                    ->where('FUND_ID',$SPONSOR_ID)
                    ->first();

        $qr_code_name = $PURCHASE_PERSON_ID.$apl_id;

        $info = 'Fund: '.$fund_name->PORTFOLIO_NAME.', Investor Name: '.$inv_info->NAME.', Investor ID: '.$REGISTRATION_NO.', Trade Confirmation Date: '.date("F d, Y, h:i a").', Bank Name: '.$inv_info->BANK_NAME.', Bank A/C: '.$inv_info->ACCOUNT_NO.', Existing Unit: '.$existing->TOTAL_UNITS;

        $file = public_path('/qr_code/buy_conf/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();

        $reg_date=date("Y-m-d");
        $uploadPath ='./investor/'.$REGISTRATION_NO.'/';
        $file_prefix = $qr_code_name;
        $file_name = 'SHC'.$file_prefix.'-'.date('Y-m-d_H-i',time());

        $pdf = PDF::loadView('BackEnd.pages.reports.holding_pdf', compact('fund_name','REGISTRATION_NO', 'inv_info', 'REQ_DATE','existing', 'REMAINING_UNITS', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf');

    /*$jarFileLocation = './pdfSigner/SignPDFJar.jar';
    $apiKey = "fecd45deae5fd23c430ae493efc2cfcf8b978b8d";
    $pdfFileName =$file_name.'.pdf';
    $pdfFileDirectory ='./investor/'.$REGISTRATION_NO.'/';
    $certificate = './pdfSigner/mcapm20181732.p12';
    $certPin = "'=6~=}C!x@jt[:y2P'";
    $reason = "none";
    $destination ='./investor/'.$REGISTRATION_NO.'/';
    $signPrefix = "DigitallySigned_";

     $executableCOde = "java -Djava.awt.headless=true -cp " 
            . $jarFileLocation . " signpdfapplet.SignPDFApplet " 
            . $apiKey ." " 
            . $pdfFileName . " " 
            . $pdfFileDirectory . " " 
            . $certificate . " " 
            . $certPin . " " 
            . $reason . " " 
            . $destination . " " 
            . $signPrefix . " ";

    exec($executableCOde, $output);
    
    $dsignfile = "DigitallySigned_".$file_name;*/

    	$mail_data = array(
    		
            'unit'=>$REMAINING_UNITS,
            'rcpt_no'=>$qr_code_name,
            'type'=>'subscription'
        );


        $emails = [$apl_email];
        $cemails = [$custmail];

        try{
        	Mail::send([], [], function($message) use ($emails, $uploadPath, $file_name, $apl_name, $REGISTRATION_NO){
	            $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
	            $message->to($emails);
	            $message->subject('Report of Total Unit Holdings for '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
	            $message->setBody('Please find Registration No: '.$REGISTRATION_NO.' and Applicant name: '.$apl_name.' information attached.');
	            $message->attach($uploadPath.$file_name.'.pdf');
	        });

	        Mail::send('mail.tr_app', $mail_data, function($message) use ($cemails, $REGISTRATION_NO, $apl_name){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($cemails);
                $message->subject('Approve on Unit Subscription Request '.$REGISTRATION_NO. ', Applicant name-'.$apl_name);
            });
        }

        catch(\Exception $e){
            return redirect('/portfolio-accounts/pending-purchase-accounts')->with('message','Receipt Successfully Done But Mail Not Sent. Please Contact With IT Team');
        }

        return redirect('/portfolio-accounts/pending-purchase-accounts')->with('message','Receipt Successfully Done');

    }
	
	public function pend_sell_accounts(){
        $indv = DB::table('unit_sell')
                ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_TRAN_CONF_FLAG', '=', 'A')
                ->where('PAY_CLR_FLAG', '=', 'N')
                ->get();

        $inst = DB::table('unit_sell')
                ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_TRAN_CONF_FLAG', '=', 'A')
                ->where('PAY_CLR_FLAG', '=', 'N')
                ->get();

        return view('BackEnd.pages.accounts.pendsellacc', ['indv' => $indv, 'inst' => $inst]);
    }
	
	public function sell_prepared_app($apl_id, $id){

		$apl_id = decrypt($apl_id);
		 
		 $ST_PANDING_UNIT = DB::table('unit_sell')
		                  ->select('unit_sell.REGISTRATION_NO','unit_sell.UNIT','unit_sell.TOTAL_AMOUNT','unit_sell.SPONSOR_ID','unit_sell.UNIT_SELL_ID','unit_sell.SALES_PERSON_ID')
						  ->where('UNIT_SELL_ID', '=', $apl_id)
		                  ->first();
		                   $SPONSOR_ID=$ST_PANDING_UNIT->SPONSOR_ID;
				   
		$banks = DB::table('bank_account')
         ->join('bank', 'bank_account.BANK_ID', '=', 'bank.BANK_ID')
		 ->where('SPONSOR_ID', '=',  $SPONSOR_ID)
         ->get();		
        return view('BackEnd.pages.accounts.preparedsellacc', ['ST_PANDING_UNIT' => $ST_PANDING_UNIT, 'banks' =>$banks]);
    }
	
	public function accountant_app_sell(Request $request){
		$id = $request->user_id;
    	$apl_id = $request->UNIT_SELL_ID;
		$BANK_ID = $request->BANK_ID;
		$ACCOUNT_NO = $request->ACCOUNT_NO;
        $PAY_CLR_FLAG = 'A';
        $PAY_CLR_DATE = Carbon::now();
        $ACC_ID = $id;
        $updated_at = Carbon::now();
		
		$ST_PANDING_UNIT = DB::table('unit_sell')
		                  ->select('unit_sell.REGISTRATION_NO','unit_sell.UNIT','unit_sell.TOTAL_AMOUNT','unit_sell.SPONSOR_ID','unit_sell.SALES_PERSON_ID','unit_sell.created_at')
						  ->where('UNIT_SELL_ID', '=', $apl_id)
		                  ->first();
						  
						  
						  
						   $REGISTRATION_NO=$ST_PANDING_UNIT->REGISTRATION_NO;
						   $SELL_PAD_UNIT=$ST_PANDING_UNIT->UNIT;
						   $S_PAD_UNIT=$SELL_PAD_UNIT;
						   $S_TOTAL_AMOUNT=$ST_PANDING_UNIT->TOTAL_AMOUNT;
						   $SPONSOR_ID=$ST_PANDING_UNIT->SPONSOR_ID;
						   $SALES_PERSON_ID=$ST_PANDING_UNIT->SALES_PERSON_ID;
						   $REQ_DATE = $ST_PANDING_UNIT->created_at;
						   
		 
		$PT_PANDING_UNITS = DB::table('unit_purchase')
		                  ->select('unit_purchase.UNIT_PURCHASE_ID','unit_purchase.REMAINING_UNITS')
						  ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
						  ->where('SC_CNF_FLAG', '=', 'A')
						  ->where('REMAINING_UNITS', '!=', '0')
						  ->orderBy('unit_purchase.UNIT_PURCHASE_ID', 'asc')
		                  ->get();
						
						
						  foreach($PT_PANDING_UNITS as $fifo){
							 $UNITS_PURCHASE_ID=$fifo->UNIT_PURCHASE_ID;
							 $REMAINING_UNITS=$fifo->REMAINING_UNITS;
							 
							 $OutcomePart = min($S_PAD_UNIT, $REMAINING_UNITS);
                               $S_PAD_UNIT = $S_PAD_UNIT-$REMAINING_UNITS;

							   if($S_PAD_UNIT >= 0){
								  $REMAINING_SELLS_PANDING=0;
							   }elseif($S_PAD_UNIT < 0){
								   $REMAINING_SELLS_PANDING=$S_PAD_UNIT;
								   $REMAINING_SELLS_PANDING = abs($REMAINING_SELLS_PANDING);
							   }
							    $UPDATE_BUY_FUND = DB::table('unit_purchase')
                              ->where('UNIT_PURCHASE_ID', $UNITS_PURCHASE_ID)
                              ->update(['REMAINING_UNITS' => $REMAINING_SELLS_PANDING]);
                                
                                  if ($S_PAD_UNIT <= 0) break;
								 }
						  
		$SELL_COMMI_RES = DB::table('portfolio_registration')
		                  ->select('portfolio_registration.COMMISSION')
						  ->where('PRO_REG_ID', '=', $SPONSOR_ID)
		                  ->first();
						  $COMMISSION_RATE=$SELL_COMMI_RES->COMMISSION;
						  $SELL_COMMISSION_AMOUNT=$S_TOTAL_AMOUNT*$COMMISSION_RATE/100;
						  
	    $SELL_COMMISSION_INSERT = DB::table('buy_sell_commission')->insert(
				       ['FUND_ID' => $SPONSOR_ID, 'REGISTRATION_NO' => $REGISTRATION_NO, 'BUY_SELL_USER_ID' => $SALES_PERSON_ID, 'TOTAL_AMOUNT' => $S_TOTAL_AMOUNT, 'COMMISSION_AMOUNT' => $SELL_COMMISSION_AMOUNT, 'created_at'=>Carbon::now()]
			          );
						   
						  			   
	    $SFT_PANDING_UNIT = DB::table('funds')
		                  ->select('funds.SELL_PADDING_UNIT','funds.TOTAL_UNITS','funds.TOTAL_AMOUNT')
						  ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
						   ->where('FUND_ID', $SPONSOR_ID)
		                  ->first();
						   $TOTAL_SELL_PADDING_UNIT=$SFT_PANDING_UNIT->SELL_PADDING_UNIT;
						   $REMAIN_SELL_PANDING=$TOTAL_SELL_PADDING_UNIT-$SELL_PAD_UNIT;
						   $TOTAL_UNITS=$SFT_PANDING_UNIT->TOTAL_UNITS;
						   $SF_TOTAL_AMOUNT=$SFT_PANDING_UNIT->TOTAL_AMOUNT;
						   $GRANT_TOTAL_UNIT=$TOTAL_UNITS-$SELL_PAD_UNIT;
						   $GRANT_TOTAL_AMOUNT=$SF_TOTAL_AMOUNT-$S_TOTAL_AMOUNT;
						   if($GRANT_TOTAL_UNIT != 0){
						   		$UPDATE_AVG_RATE=$GRANT_TOTAL_AMOUNT/$GRANT_TOTAL_UNIT;
						   }else{
						   		$UPDATE_AVG_RATE = 0;
						   }
						   


						   //print_r($FT_PANDING_UNIT);
						   //die();
		$UPDATE_BUY_FUND = DB::table('funds')
                              ->where('REGISTRATION_NO', $REGISTRATION_NO)

							   ->where('FUND_ID', $SPONSOR_ID)
                              ->update(['SELL_PADDING_UNIT' => $REMAIN_SELL_PANDING,'TOTAL_UNITS' => $GRANT_TOTAL_UNIT,'AVG_RATE' => $UPDATE_AVG_RATE,'TOTAL_AMOUNT' =>   $GRANT_TOTAL_AMOUNT,'updated_at'=> Carbon::now()]);
							  
		$Bank_AMT = DB::table('bank_account')
		                  ->select('bank_account.BANK_AMOUNT')
						  ->where('ACCOUNT_NO', '=', $ACCOUNT_NO)
						  ->where('SPONSOR_ID', $SPONSOR_ID)
		                  ->first();
					$BANK_TOTAL_AMOUNT=$Bank_AMT->BANK_AMOUNT;  
					$UPDATE_BANK_AMOUNT=$BANK_TOTAL_AMOUNT-$S_TOTAL_AMOUNT;
					
		$Bank_update = DB::table('bank_account')
                              ->where('ACCOUNT_NO', $ACCOUNT_NO)
							  ->where('SPONSOR_ID', $SPONSOR_ID)
                              ->update(['BANK_AMOUNT' => $UPDATE_BANK_AMOUNT,'updated_at'=>  Carbon::now()]);

        DB::update('update unit_sell set PAY_CLR_FLAG = ?, PAY_CLR_DATE = ?, ACC_ID = ?, updated_at = ? where UNIT_SELL_ID = ?',[$PAY_CLR_FLAG, $PAY_CLR_DATE, $ACC_ID, $updated_at, $apl_id]);


        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $SPONSOR_ID)
                ->first();

        $custmail = $cust->CUSTODIAN_EMAIL;



        $fund_name = DB::table('portfolio_registration')
                  ->select('PORTFOLIO_NAME','SYMBOL')
                  ->where('PRO_REG_ID',$SPONSOR_ID)
                  ->first();

        $id_first = substr($REGISTRATION_NO, 0, -11);

        if($id_first == 1 || $id_first == 3){
    	$inv_info =	DB::table('principal_applicant')
                    ->select('NAME', 'BANK_NAME', 'ACCOUNT_NO','EMAIL')
                	->where('REGISTRATION_NO',$REGISTRATION_NO)
                	->first();
    	}
    	elseif($id_first == 2){
    	$inv_info =	DB::table('inst_app')
                	->select('INSTNAME as NAME', 'BANK_NAME', 'ACCOUNT_NO','EMAIL')
                	->where('REGISTRATION_NO',$REGISTRATION_NO)
                	->first();
    	}
    	else{
    		echo "not found";
    	}

    	$apl_name = $inv_info->NAME;
    	$apl_email = $inv_info->EMAIL;
    	$fundname = $fund_name->PORTFOLIO_NAME;

    	$existing = DB::table('funds')
                    ->select('TOTAL_UNITS')
                    ->where('REGISTRATION_NO',$REGISTRATION_NO)
                    ->where('FUND_ID',$SPONSOR_ID)
                    ->first();

        $qr_code_name = $SALES_PERSON_ID.$apl_id;

        $info = 'Fund: '.$fund_name->PORTFOLIO_NAME.', Investor Name: '.$inv_info->NAME.', Investor ID: '.$REGISTRATION_NO.', Trade Confirmation Date: '.date("F d, Y, h:i a").', Bank Name: '.$inv_info->BANK_NAME.', Bank A/C: '.$inv_info->ACCOUNT_NO.', Existing Unit: '.$existing->TOTAL_UNITS;

        $file = public_path('/qr_code/sell_conf/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();

        $reg_date=date("Y-m-d");
        $uploadPath ='./investor/'.$REGISTRATION_NO.'/';
        $file_prefix = $qr_code_name;
        $file_name = $fund_name->SYMBOL.'-'.$file_prefix.'-'.date('Y-m-d_H-i',time());

        $pdf = PDF::loadView('BackEnd.pages.reports.sellholding_pdf', compact('fund_name','REGISTRATION_NO', 'inv_info', 'REQ_DATE','existing', 'SELL_PAD_UNIT', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf');

    /*$jarFileLocation = './pdfSigner/SignPDFJar.jar';
    $apiKey = "fecd45deae5fd23c430ae493efc2cfcf8b978b8d";
    $pdfFileName =$file_name.'.pdf';
    $pdfFileDirectory ='./investor/'.$REGISTRATION_NO.'/';
    $certificate = './pdfSigner/mcapm20181732.p12';
    $certPin = "'=6~=}C!x@jt[:y2P'";
    $reason = "none";
    $destination ='./investor/'.$REGISTRATION_NO.'/';
    $signPrefix = "DigitallySigned_";

     $executableCOde = "java -Djava.awt.headless=true -cp " 
            . $jarFileLocation . " signpdfapplet.SignPDFApplet " 
            . $apiKey ." " 
            . $pdfFileName . " " 
            . $pdfFileDirectory . " " 
            . $certificate . " " 
            . $certPin . " " 
            . $reason . " " 
            . $destination . " " 
            . $signPrefix . " ";

    exec($executableCOde, $output);
    
    $dsignfile = "DigitallySigned_".$file_name;*/

    	$mail_data = array(
            
            'unit'=>$SELL_PAD_UNIT,
            'rcpt_no'=>$qr_code_name,
            'type'=>'Surrender'
        );

        $emails = [$apl_email];
        $cemails = [$custmail];

        try{
        	Mail::send([], [], function($message) use ($emails, $uploadPath, $file_name, $apl_name, $REGISTRATION_NO, $fundname, $qr_code_name){
	            $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
	            $message->to($emails);
	            $message->subject('Holding Certificate of '.$fundname.' And Payment Clear No '.$qr_code_name.', Applicant name-'.$apl_name);
	            $message->setBody('Please find Registration No: '.$REGISTRATION_NO.' and Applicant name: '.$apl_name.' information attached.');
	            $message->attach($uploadPath.$file_name.'.pdf');
	        });

	        Mail::send('mail.tr_app', $mail_data, function($message) use ($cemails, $REGISTRATION_NO, $apl_name){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($cemails);
                $message->subject('Approve on Unit Surrender Request '.$REGISTRATION_NO. ', Applicant name-'.$apl_name);
            });
        }

        catch(\Exception $e){
            return redirect('/portfolio-accounts/pending-sell-accounts')->with('message','Payment Successfully Done But Mail Not Sent. Please Contact With IT Team');
        }

        return redirect('/portfolio-accounts/pending-sell-accounts')->with('message','Payment Successfully Done');
    }

}