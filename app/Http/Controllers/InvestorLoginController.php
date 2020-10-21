<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use QRCode;
use Mail;

class InvestorLoginController extends Controller
{
    public function invlogin(Request $request){

        $id = $request->regno;
        $id_first = substr($request->regno, 0, -11);
        $pass = md5($request->password);

        if($id_first == 1 || $id_first == 3){
            $inv = DB::table('principal_applicant')
                   ->where('REGISTRATION_NO', $id)
                   ->where('PASSWORD', $pass)
                   ->first();

            if($inv){
                Session::put('inv_name', $inv->NAME);
                Session::put('inv_id', $inv->REGISTRATION_NO);
                Session::put('bank', $inv->BANK_NAME);
                Session::put('acno', $inv->ACCOUNT_NO);
                Session::put('invmail', $inv->EMAIL);
                Session::put('invpass', $inv->PASSWORD);
                Session::put('ta', $inv->TA_REG_NO);
                return redirect('/inv');
            }
            else{
                return Redirect::back()->withErrors(['Wrong User ID or Password!!! Please Try Again']);
            }
        }
        elseif($id_first == 2){
            $inv = DB::table('inst_app')
                   ->where('REGISTRATION_NO', $id)
                   ->where('PASSWORD', $pass)
                   ->first();

            if($inv){
                Session::put('inv_name', $inv->INSTNAME);
                Session::put('inv_id', $inv->REGISTRATION_NO);
                Session::put('bank', $inv->BANK_NAME);
                Session::put('acno', $inv->ACCOUNT_NO);
                Session::put('invmail', $inv->EMAIL);
                Session::put('invpass', $inv->PASSWORD);
                Session::put('ta', $inv->TA_REG_NO);
                return redirect('/inv');
            }
            else{
                return Redirect::back()->withErrors(['Wrong User ID or Password!!! Please Try Again']);
            }
        }
        else{
            return Redirect::back()->withErrors(['Wrong User ID or Password!!! Please Try Again']);
        }

    }

    public function inv_dashboard(){

        $invreg=Session::get('inv_id');
        if($invreg == null){
            $useragent=$_SERVER['HTTP_USER_AGENT'];
            if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

            return redirect('/appslogin');
        }else{
            return redirect('http://capmbd.com');
        }

        }
        $portfolios = DB::table('portfolio_registration')->get();
        $rates = DB::table('price_rate')
                ->join('portfolio_registration', 'price_rate.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('price_rate.BUY_RATE', 'price_rate.SELL_RATE', 'portfolio_registration.PORTFOLIO_NAME')
                ->get();

        return view('BackEnd.pages.investor.dashboard',['portfolios' => $portfolios, 'rates'=>$rates]);
    }

    public function invlogout(){
        Session::put('inv_name',null);
        Session::put('inv_id',null);
        Session::put('bank', null);
        Session::put('acno', null);
        Session::put('ta',null);
        Session::put('invpass',null);
        Session::put('invmail',null);

        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

            return redirect('/appslogin');
        }else{
            return redirect('http://capmbd.com');
        }
    }

    public function inv_buy($id, $proid){
        $invreg=Session::get('inv_id');
        if($invreg == null){
            return redirect('http://capmbd.com');
        }

        $id = decrypt($id);
        
        $data = DB::table('principal_applicant')
                ->select('REGISTRATION_NO', 'GENDER', 'NAME', 'BANK_NAME', 'ACCOUNT_NO')
                ->where('REGISTRATION_NO', '=', $id)
                ->first();
        $portfolios = DB::table('portfolio_registration')->get();
        $port = DB::table('portfolio_registration')
                ->select('PRO_REG_ID', 'PORTFOLIO_NAME')
                ->where('PRO_REG_ID', '=', $proid)
                ->first();
        return view('BackEnd.pages.investor.buy',['data' => $data, 'portfolios' => $portfolios, 'port' => $port]);
    }

    public function inv_sell($id, $proid){
        $invreg=Session::get('inv_id');
        if($invreg == null){
            return redirect('http://capmbd.com');
        }

        $id = decrypt($id);
        
        $data = DB::table('principal_applicant')
                ->select('REGISTRATION_NO', 'GENDER', 'NAME', 'BANK_NAME', 'ACCOUNT_NO')
                ->where('REGISTRATION_NO', '=', $id)
                ->first();
        $portfolios = DB::table('portfolio_registration')->get();
        $port = DB::table('portfolio_registration')
                ->select('PRO_REG_ID', 'PORTFOLIO_NAME')
                ->where('PRO_REG_ID', '=', $proid)
                ->first();

        $holding = DB::table('funds')
               ->select('TOTAL_UNITS')
               ->where('REGISTRATION_NO', '=', $id)
               ->where('FUND_ID', '=', $proid)
               ->first();

        $pend = DB::table('funds')
               ->select('SELL_PADDING_UNIT')
               ->where('REGISTRATION_NO', '=', $id)
               ->where('FUND_ID', '=', $proid)
               ->first();

        $block = DB::table('funds')
               ->select('BLOCK_UNITS')
               ->where('REGISTRATION_NO', '=', $id)
               ->where('FUND_ID', '=', $proid)
               ->first();

        if($holding != '' && $pend != '' && $block != ''){
            $temp = $holding->TOTAL_UNITS - $block->BLOCK_UNITS;
            $rem = $temp - $pend->SELL_PADDING_UNIT;
        }else{
            $rem = 0;
        }


        return view('BackEnd.pages.investor.sell',['data' => $data, 'portfolios' => $portfolios, 'port' => $port, 'holding' => $holding, 'rem' => $rem, 'block' => $block]);
    }

    public function pass_reset(Request $request){

        $user_id = $request->user_id;
        $old_pass = md5($request->old_password);
        $new_pass = md5($request->new_password);

        $id_first = substr($user_id, 0, -11);
        if($id_first == 1 || $id_first == 3){
            $result = DB::table('principal_applicant')
                  ->where('REGISTRATION_NO', '=', $user_id)
                  ->where('PASSWORD', '=', $old_pass )
                  ->update([
                        'PASSWORD' => $new_pass
                  ]);
        }
        elseif($id_first == 2){
           $result = DB::table('inst_app')
                  ->where('REGISTRATION_NO', '=', $user_id)
                  ->where('PASSWORD', '=', $old_pass )
                  ->update([
                        'PASSWORD' => $new_pass
                  ]); 
        }
        else{
            echo "Not Found";
        }

        

        if($result == 1){
            return redirect('/inv-logout');
        }
        else{
            return redirect('/inv')->with('messagend','Reset Not Done!!! Please Try Again');
        }
    }

    public function getBuyRate($f_id){

        $result = DB::table('price_rate')
                  ->select('BUY_RATE')
                  ->where('PRO_REG_ID',$f_id)
                  ->get();

        return response()->json($result);
    }

    public function getSellRate($f_id){

        $result = DB::table('price_rate')
                  ->select('SELL_RATE')
                  ->where('PRO_REG_ID',$f_id)
                  ->get();

        return response()->json($result);
    }

    public function getBuySellRate($f_id, $r_id){

        $result = DB::table('price_rate')
                  ->join('funds', 'price_rate.PRO_REG_ID', '=', 'funds.FUND_ID')
                  ->join('unit_purchase', 'funds.REGISTRATION_NO', '=', 'unit_purchase.REGISTRATION_NO')
                  ->select('price_rate.BUY_RATE', 'price_rate.SELL_RATE', 'funds.BUY_PADDING_UNIT' ,'funds.TOTAL_UNITS', 'funds.AVG_RATE', 'funds.SELL_PADDING_UNIT', DB::raw('SUM(unit_purchase.RATE * unit_purchase.REMAINING_UNITS) as rc'), DB::raw('SUM(unit_purchase.REMAINING_UNITS) as rt'))
                  ->where('price_rate.PRO_REG_ID',$f_id)
                  ->where('funds.REGISTRATION_NO',$r_id)
                  ->where('unit_purchase.SC_CNF_FLAG', '=', 'A')
                  ->where('funds.FUND_ID',$f_id)
                  ->where('unit_purchase.SPONSOR_ID',$f_id)
                  ->get();

        return response()->json($result);
    }

    public function inv_buy_store(Request $request){

        $SPONSOR_ID = $request->fund;
        $UNIT = $request->quantity;
        $RATE = $request->BUYRATE;
        $TOTAL_AMOUNT = $request->TOTALAMOUNT;
        $PURCHASE_PERSON_ID = $request->id_no;
        $REGISTRATION_NO = $request->id_no;
        $REMAINING_UNITS = $request->quantity;
        $SALESCENTER_ID = $request->SC_ID;
        $MODE_PAY = $request->pay_mode;
        $BCPODDTC_NO = $request->BCPODDTC_NO;
        $BCPODDTC_DATE = $request->BCPODDTC_DATE;
        $BANK = $request->BANK;

        $apl_name = $request->apl_name;
        $appl_bank = $request->appl_bank;
        $appl_ac = $request->appl_ac;
        $appl_mail = $request->appl_mail;

        $buy_count = DB::table('unit_purchase')->count();
        $PURCHASE_NO = $buy_count + 1;

        $id_first = substr($request->id_no, 0, -11);
        if($id_first == 1 || $id_first == 3){
            $INVESTOR_TYPE = 'indv';
        }
        elseif($id_first == 2){
           $INVESTOR_TYPE = 'inst'; 
        }
        else{
            echo "Not Found";
        }
        
        $fund_exist = DB::table('funds')
                    ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
                    ->where('FUND_ID', '=', $SPONSOR_ID)
                    ->count();
        if($fund_exist){
            $holding_info = DB::table('funds')
                    ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
                    ->where('FUND_ID', '=', $SPONSOR_ID)
                    ->first();
                
                $BUY_PADDING_UNIT=$holding_info->BUY_PADDING_UNIT;
                $TOTAL_BUY_PADDING_UNIT=$BUY_PADDING_UNIT+$UNIT;
                
            $update_buy_pandding = DB::table('funds')
              ->where('REGISTRATION_NO', $REGISTRATION_NO)
              ->where('FUND_ID', $SPONSOR_ID)
              ->update(['BUY_PADDING_UNIT' => $TOTAL_BUY_PADDING_UNIT,'created_at'=>     Carbon::now()]);
            }else{


                DB::table('funds')->insert(
                ['REGISTRATION_NO' => $REGISTRATION_NO, 'FUND_ID' => $SPONSOR_ID, 'BUY_PADDING_UNIT' => $UNIT,'created_at'=>Carbon::now()]
               );
            }

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'UNIT'=>$UNIT,
            'RATE'=>$RATE,
            'TOTAL_AMOUNT'=>$TOTAL_AMOUNT,
            'PURCHASE_NO'=>$PURCHASE_NO,
            'PURCHASE_PERSON_ID'=>$PURCHASE_PERSON_ID,
            'REGISTRATION_NO'=>$REGISTRATION_NO,
            'REMAINING_UNITS'=>$REMAINING_UNITS,
            'SALESCENTER_ID'=>$SALESCENTER_ID,
            'MODE_PAY'=>$MODE_PAY,
            'BCPODDTC_NO'=>$BCPODDTC_NO,
            'BCPODDTC_DATE'=>$BCPODDTC_DATE,
            'BANK'=>$BANK,
            'INVESTOR_TYPE'=>$INVESTOR_TYPE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        $fund_name = DB::table('portfolio_registration')
                  ->select('PORTFOLIO_NAME', 'SYMBOL')
                  ->where('PRO_REG_ID',$SPONSOR_ID)
                  ->first();

        $inv_info=array(
            'apl_name'=>$apl_name,
            'appl_bank'=>$appl_bank,
            'appl_ac'=>$appl_ac
        );

        $existing = DB::table('funds')
                  ->select('TOTAL_UNITS', 'BUY_PADDING_UNIT')
                  ->where('REGISTRATION_NO',$REGISTRATION_NO)
                  ->where('FUND_ID',$SPONSOR_ID)
                  ->first();

        $fund_bank_info = DB::table('bank_account')
                  ->join('bank', 'bank_account.BANK_ID', '=', 'bank.BANK_ID')
                  ->select('bank_account.*','bank.BANK_NAME')
                  ->where('bank_account.SPONSOR_ID',$SPONSOR_ID)
                  ->get();

        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $SPONSOR_ID)
                ->first();

        $cust_mail = $cust->CUSTODIAN_EMAIL;

        $total_ex = $existing->TOTAL_UNITS + $existing->BUY_PADDING_UNIT;

        $qr_code_name = $PURCHASE_PERSON_ID.$PURCHASE_NO;

        $info = 'Fund: '.$fund_name->PORTFOLIO_NAME.', Investor Name: '.$apl_name.', Investor ID: '.$REGISTRATION_NO.', Trade Date: '.date("F d, Y").', Bank Name: '.$appl_bank.', No. of Units: '.$UNIT.', Rate Per Unit: '.$RATE.', Total Amount: '.$TOTAL_AMOUNT.', Existing Unit: '.$existing->TOTAL_UNITS.', Total Pending: '.$existing->BUY_PADDING_UNIT.', Grand Total: '.$total_ex;

        $file = public_path('/qr_code/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();

        $reg_date=date("Y-m-d");
        $uploadPath ='./investor/'.$REGISTRATION_NO.'/';
        $file_prefix = $fund_name->SYMBOL.'-SPA-'.$qr_code_name;
        $file_name = $file_prefix.date('Y-m-d_H-i',time());

        $pdf = PDF::loadView('BackEnd.pages.reports.buy_pdf', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf');


    $jarFileLocation = './pdfSigner/SignPDFJar.jar';
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
    
    $dsignfile = "DigitallySigned_".$file_name;

        
        $my_file = $file_name.".csv";
                   $fpath=$uploadPath.$my_file;
                   $trd_date = date(' F j, Y ',strtotime($reg_date));
                   $list = array (
                   array('Trade Date','Investor Name', 'Reg No', 'Subscribed Units', 'Transaction Id'),
                       array($trd_date, $apl_name, $REGISTRATION_NO, $UNIT, $qr_code_name)
                   );
                   $handle = fopen($fpath, 'w') or die('Cannot open file:  '.$my_file);
                       foreach ($list as $fields) {
                       fputcsv($handle, $fields);
                   }
                   fclose($handle);
        
        DB::table('unit_purchase')->insert($data);

        $mail_data = array(
            'fund'=>$fund_name->PORTFOLIO_NAME
        );

        $emails = [$appl_mail];
        $custmail = [$cust_mail,'amc_custodian@capmbd.com'];

        try{
            Mail::send('mail.buy_email_inv', $mail_data, function($message) use ($emails, $uploadPath, $dsignfile, $apl_name, $REGISTRATION_NO){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Payment Advice on Unit Subscription Request '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
                $message->attach($uploadPath.$dsignfile.'.pdf');
            });

            Mail::send([], [], function($message) use ($uploadPath, $file_name, $custmail, $apl_name, $REGISTRATION_NO)
            {
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($custmail);
                $message->subject('Payment Advice on Unit Subscription Request '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
                $message->setBody('Please find Registration No: '.$REGISTRATION_NO.' and Applicant name: '.$apl_name.' information attached.');
                $message->attach($uploadPath.$file_name.'.csv');
            });
        }

        catch(\Exception $e){
            return view('BackEnd.pages.reports.buy_print_inv', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'));
        }
            

        return view('BackEnd.pages.reports.buy_print_inv', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'));
    }

    public function inv_sell_store(Request $request){

        $SPONSOR_ID = $request->fund;
        $UNIT = $request->quantity;
        $RATE = $request->SELLRATE;
        $TOTAL_AMOUNT = $request->TOTALAMOUNT;
        $SALES_PERSON_ID = $request->id_no;
        $REGISTRATION_NO = $request->id_no;
        $SALESCENTER_ID = $request->SC_ID;
        $MODE_PAY = $request->pay_mode;
        $MB_AC = $request->mb_ac;
        $MB_NO = $request->m_no;
        $BANKS = $request->banks;

        $apl_name = $request->apl_name;
        $appl_bank = $request->appl_bank;
        $appl_ac = $request->appl_ac;
        $appl_mail = $request->appl_mail;
          
      
        $sell_count = DB::table('unit_sell')->count();
        $SALE_NO = $sell_count + 1;

            $HOLDING_INFO = DB::table('funds')
                    ->where('REGISTRATION_NO', '=', $REGISTRATION_NO)
                    ->where('FUND_ID', '=', $SPONSOR_ID)
                    ->first();
                
                $SELL_PADDING_UNIT=$HOLDING_INFO->SELL_PADDING_UNIT;
                $TOTAL_SELL_PADDING_UNIT=$SELL_PADDING_UNIT+$UNIT;
                
            $update_buy_pandding = DB::table('funds')
              ->where('REGISTRATION_NO', $REGISTRATION_NO)
              ->where('FUND_ID', $SPONSOR_ID)
              ->update(['SELL_PADDING_UNIT' => $TOTAL_SELL_PADDING_UNIT,'created_at'=>   Carbon::now()]);
            

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'REGISTRATION_NO'=>$REGISTRATION_NO,
            'UNIT'=>$UNIT,
            'RATE'=>$RATE,
            'TOTAL_AMOUNT'=>$TOTAL_AMOUNT,
            'SALE_NO'=>$SALE_NO,
            'SALES_PERSON_ID'=>$SALES_PERSON_ID,
            'SALESCENTER_ID'=>$SALESCENTER_ID,
            'MODE_PAY'=>$MODE_PAY,
            'MB_NO'=>$MB_AC,
            'MB_DATE'=>$MB_NO,
            'BANK'=>$BANKS,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        $fund_name = DB::table('portfolio_registration')
                    ->select('PORTFOLIO_NAME', 'SYMBOL')
                    ->where('PRO_REG_ID',$SPONSOR_ID)
                    ->first();

        $inv_info=array(
            'apl_name'=>$apl_name,
            'appl_bank'=>$appl_bank,
            'appl_ac'=>$appl_ac
        );

        $existing = DB::table('funds')
                  ->select('TOTAL_UNITS', 'SELL_PADDING_UNIT')
                  ->where('REGISTRATION_NO',$REGISTRATION_NO)
                  ->where('FUND_ID',$SPONSOR_ID)
                  ->first();

        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $SPONSOR_ID)
                ->first();

        $cust_mail = $cust->CUSTODIAN_EMAIL;

        $existing_unit = $existing->TOTAL_UNITS - $existing->SELL_PADDING_UNIT;

        $totalunit = $existing_unit + $existing->SELL_PADDING_UNIT;

        $qr_code_name = $SALES_PERSON_ID.$SALE_NO;

        $info = 'Fund: '.$fund_name->PORTFOLIO_NAME.', Investor Name: '.$apl_name.', Investor ID: '.$REGISTRATION_NO.', Trade Date: '.date("F d, Y").', Bank Name: '.$appl_bank.', No. of Units: '.$UNIT.', Rate Per Unit: '.$RATE.', Total Amount: '.$TOTAL_AMOUNT.', Existing Unit: '.$existing_unit.', Total Pending: '.$existing->SELL_PADDING_UNIT.', Grand Total: '.$totalunit;

        $file = public_path('/qr_code/sell/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();

        $reg_date=date("Y-m-d");
        $uploadPath ='./investor/'.$REGISTRATION_NO.'/';
        $file_prefix = $fund_name->SYMBOL.'-RPA-'.$qr_code_name;
        $file_name = $file_prefix.date('Y-m-d_H-i',time());

        $pdf = PDF::loadView('BackEnd.pages.reports.sell_pdf', compact('fund_name', 'inv_info', 'data','existing','existing_unit', 'totalunit', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf' );

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

        
        $my_file = $file_name.".csv";
                   $fpath=$uploadPath.$my_file;
                   $trd_date = date(' F j, Y ',strtotime($reg_date));
                   $list = array (
                   array('Trade Date','Investor Name', 'Reg No', 'Surrendered Units', 'Transaction Id'),
                       array($trd_date, $apl_name, $REGISTRATION_NO, $UNIT, $qr_code_name)
                   );
                   $handle = fopen($fpath, 'w') or die('Cannot open file:  '.$my_file);
                       foreach ($list as $fields) {
                       fputcsv($handle, $fields);
                   }
                   fclose($handle);

        DB::table('unit_sell')->insert($data);

        $mail_data = array(
            'fund'=>$fund_name->PORTFOLIO_NAME
        );

        $emails = [$appl_mail];
        $custmail = [$cust_mail];

        try{
            Mail::send('mail.sell_email_inv', $mail_data, function($message) use ($emails, $uploadPath, $file_name, $apl_name, $REGISTRATION_NO){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Surrender Acknowledgement '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
                $message->attach($uploadPath.$file_name.'.pdf');
            });

            Mail::send([], [], function($message) use ($uploadPath, $file_name, $custmail, $apl_name, $REGISTRATION_NO)
            {
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($custmail);
                $message->subject('Surrender Acknowledgement '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
                $message->setBody('Please find Registration No: '.$REGISTRATION_NO.' and Applicant name: '.$apl_name.' information attached.');
                $message->attach($uploadPath.$file_name.'.csv');
            });
        }

        catch(\Exception $e){
            return view('BackEnd.pages.reports.sell_print_inv', compact('fund_name', 'inv_info', 'data','existing','existing_unit', 'totalunit', 'qr_code_name'));
        }
        

        return view('BackEnd.pages.reports.sell_print_inv', compact('fund_name', 'inv_info', 'data','existing','existing_unit', 'totalunit', 'qr_code_name'));
    }

    public function inv_pass_id($id){

        $id_first = substr($id, 0, -11);

        if($id_first == 1 || $id_first == 3){

            $num = rand(1000,9999);
            $pre = substr($id, -3);
            $sfl = str_shuffle($pre);
            $code = $num.$sfl;
            $inv = DB::table('principal_applicant')
                     ->select('NAME', 'EMAIL')
                     ->where('REGISTRATION_NO',$id)
                     ->first();
            $name = $inv->NAME;
            $mail = $inv->EMAIL;
            DB::table('principal_applicant')
                  ->where('REGISTRATION_NO', '=', $id)
                  ->update([
                        'CODE' => $code
                  ]);

            Mail::send([], [], function($message) use ($name, $mail, $id, $code){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($mail);
                $message->subject('Password Reset Code of '.$name.', Applicant ID: '.$id);
                $message->setBody('Password Reset Code: '.$code);
            });

            $result = 'Check Your Mail & Enter Code For Reset';
        }
        elseif($id_first == 2){

            $num = rand(1000,9999);
            $pre = substr($id, -3);
            $sfl = str_shuffle($pre);
            $code = $num.$sfl;
            $inv = DB::table('inst_app')
                     ->select('INSTNAME as NAME', 'EMAIL')
                     ->where('REGISTRATION_NO',$id)
                     ->first();
            $name = $inv->NAME;
            $mail = $inv->EMAIL;
            DB::table('inst_app')
                  ->where('REGISTRATION_NO', '=', $id)
                  ->update([
                        'CODE' => $code
                  ]);

            Mail::send([], [], function($message) use ($name, $mail, $id, $code){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($mail);
                $message->subject('Password Reset Code of '.$name.', Applicant ID: '.$id);
                $message->setBody('Password Reset Code: '.$code);
            });

            $result = 'Check Your Mail & Enter Code For Reset';
        }
        else{
            $result = 'Your Inserted Id Is Not Found';
        }

        return $result;
    }

    public function inv_pass_code($code, $id, $pass){

        $id_first = substr($id, 0, -11);

        if(preg_match("#.*^(?=.{6})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $pass)){
            if($id_first == 1 || $id_first == 3){

                $password = md5($pass);
                $reset = DB::table('principal_applicant')
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('CODE', '=', $code)
                        ->update([
                            'PASSWORD' => $password,
                            'CODE' =>NULL
                        ]);

                if($reset == 1){
                    $result = 'Your Password Successfully Changed';
                }
                else{
                    $result = 'Enter Correct User Id & Security Code';
                }
            }
            elseif($id_first == 2){

                $password = md5($pass);
                $reset = DB::table('inst_app')
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('CODE', '=', $code)
                        ->update([
                            'PASSWORD' => $password,
                            'CODE' =>NULL
                        ]);

                if($reset == 1){
                    $result = 'Your Password Successfully Changed';
                }
                else{
                    $result = 'Enter Correct User Id & Security Code';
                }
            }
            else{
                $result = 'Enter Correct User Id & Security Code';
            }

            return $result;
        }else{
            $result = 'Password must contain at least 6 characters, one digit, one lowercase and one uppercase';
            return $result;
        }
    }

    public function invSubReport(){

        $invreg=Session::get('inv_id');
        if($invreg == null){
            return redirect('http://capmbd.com');
        }
        
        $approve = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_purchase.SC_CNF_FLAG', '=', 'A')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        $disapprove = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '=', 'DA')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        $panding = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                   ->where('unit_purchase.SC_CNF_FLAG', '=', 'N')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        return view('BackEnd.pages.investor.sub_report', ['approve' => $approve, 'disapprove' => $disapprove, 'panding' => $panding]);
    }

    public function invSurReport(){

        $invreg=Session::get('inv_id');
        if($invreg == null){
            return redirect('http://capmbd.com');
        }

        $approve = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_sell.PAY_CLR_FLAG', '=', 'A')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();

        $disapprove = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_sell.DP_TRAN_CONF_FLAG', '=', 'DA')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();

        $panding = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.REGISTRATION_NO', '=', $invreg)
                   ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                   ->where('unit_sell.PAY_CLR_FLAG', '=', 'N')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();
        
        return view('BackEnd.pages.investor.sur_report', ['approve' => $approve, 'disapprove' => $disapprove, 'panding' => $panding]);
    }

    public function getDown($f_id, $r_id, $c_name){

        $data = DB::table('funds')
                  ->join('portfolio_registration', 'funds.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                  ->select('funds.BUY_PADDING_UNIT', 'funds.TOTAL_UNITS', 'funds.SELL_PADDING_UNIT', 'portfolio_registration.PORTFOLIO_NAME')
                  ->where('funds.REGISTRATION_NO',$r_id)
                  ->where('funds.FUND_ID',$f_id)
                  ->first();

        if(empty($data)){
            return Redirect::back()->withErrors(['For This Report You Have To Subscription First !']);
        }else{
            $customPaper = array(0,0,595,400);
            $pdf = PDF::loadView('BackEnd.pages.reports.hold_down', compact('r_id', 'c_name', 'data'))->setPaper($customPaper, 'portrait');
            return $pdf->download('Holding Report.pdf');
        }
    }

}