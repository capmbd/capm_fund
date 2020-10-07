<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use Mail;
use QRCode;

class CorporateActionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ca_index(){
        return view('BackEnd.pages.ca.corporate_action');
    }

    public function ex_uf(){
		$newfilename = date("d-m-Y");
		$file="Unitfund-dividend-info".$newfilename.".txt";
		header('Content-Disposition: attachment; filename="'.$file.'"');
		header('Content-type: text/plain');

        $ind_info = DB::table('principal_applicant')
                ->join('funds', 'principal_applicant.REGISTRATION_NO', '=', 'funds.REGISTRATION_NO')
                ->Select('principal_applicant.REGISTRATION_NO as reg','principal_applicant.NAME as name','principal_applicant.EMAIL as mail','principal_applicant.Type as category','principal_applicant.BANK_NAME as bank', 'principal_applicant.ACCOUNT_NAME as ac_name','principal_applicant.ACCOUNT_NO as ac_no', 'principal_applicant.ROUTING_NO as routing', 'principal_applicant.BRANCH as brnc','principal_applicant.DIVIDENT_OPT as type','funds.TOTAL_UNITS as holding')
                ->get();
                
        $inst_info = DB::table('inst_app')
                ->join('funds', 'inst_app.REGISTRATION_NO', '=', 'funds.REGISTRATION_NO')
                ->Select('inst_app.REGISTRATION_NO as reg','inst_app.INSTNAME as name','inst_app.Type as category','inst_app.EMAIL as mail','inst_app.BANK_NAME as bank', 'inst_app.ACCOUNT_NAME as ac_name','inst_app.ACCOUNT_NO as ac_no', 'inst_app.ROUTING_NO as routing', 'inst_app.BRANCH as brnc','inst_app.DIVIDENT_OPT as type','funds.TOTAL_UNITS as holding')
                ->get();
        $merge_info = $ind_info->merge($inst_info);
        $inv_info = $merge_info->all();

		foreach($inv_info as $info){
			echo $info->reg.'~';
			echo $info->name.'~';
			echo $info->mail.'~';
            echo $info->bank.'~';
            echo $info->ac_name.'~';
			echo $info->ac_no.'~';
            echo $info->routing.'~';
            echo $info->brnc.'~';
			echo $info->category.'~';
			echo $info->type.'~';
            echo $info->holding.'~';
			echo "\r\n";
		}
    }

    public function dividend_setup(){

    	$funds = DB::table('portfolio_registration')
    			->select('PRO_REG_ID','PORTFOLIO_NAME')
    			->get();
    	return view('BackEnd.pages.ca.dividend', ['funds' => $funds]);
    }

    public function dividend_store(Request $request){
    	$FUND_ID = $request->FUND_ID;
		$FACE_VALUE = $request->FACE_VALUE;
		$DIVIDEND = $request->DIVIDEND;
		$INDV_ETIN_TAX = $request->INDV_ETIN_TAX;
        $INDV_TAX = $request->INDV_TAX;
		$INST_INC_TAX = $request->INST_INC_TAX;
        $TAX_MARGIN = $request->TAX_MARGIN;
		$TC_DATE = $request->TC_DATE;
		$TCIP_DATE = $request->TCIP_DATE;
		$NET_PROFIT = $request->NET_PROFIT;
		$EARNINGS_PER_UNIT = $request->EARNINGS_PER_UNIT;
        $BUY_PRICE = $request->BUY_PRICE;
		$APRV_DATE = $request->APRV_DATE;
        $YED = $request->YED;

    	$data=array(
    		'FUND_ID'=>$FUND_ID,
    		'FACE_VALUE'=>$FACE_VALUE,
    		'DIVIDEND'=>$DIVIDEND,
    		'INDV_ETIN_TAX'=>$INDV_ETIN_TAX,
            'INDV_TAX'=>$INDV_TAX,
    		'INST_INC_TAX'=>$INST_INC_TAX,
            'TAX_MARGIN'=>$TAX_MARGIN,
    		'TC_DATE'=>$TC_DATE,
    		'TCIP_DATE'=>$TCIP_DATE,
    		'NET_PROFIT'=>$NET_PROFIT,
    		'EARNINGS_PER_UNIT'=>$EARNINGS_PER_UNIT,
            'BUY_PRICE'=>$BUY_PRICE,
    		'APRV_DATE'=>$APRV_DATE,
            'YED'=>$YED,
    		'created_at'=>Carbon::now(),
    		'updated_at'=>Carbon::now()
    	);

    	DB::table('dividend_setup')->insert($data);
    	return redirect('/corporate-action/dividend')->with('message','Dividend Setup successfully done');
    }

    public function show_dividend(){

    	$dividends = DB::table('dividend_setup')
                	->join('portfolio_registration', 'dividend_setup.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                	->Select('dividend_setup.*','portfolio_registration.PRO_REG_ID','portfolio_registration.PORTFOLIO_NAME')
                	->orderBy('DVS_ID', 'desc')
                	->get();
    	return view('BackEnd.pages.ca.dividendview', ['dividends' => $dividends]);
    }

    public function dividend_edit($DVS_ID){

    	//$DVS_ID = decrypt($DVS_ID);
    	
    	$data = DB::table('dividend_setup')
                ->join('portfolio_registration', 'dividend_setup.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->Select('dividend_setup.*','portfolio_registration.PRO_REG_ID','portfolio_registration.PORTFOLIO_NAME')
                ->where('DVS_ID', '=', $DVS_ID)
                ->first();
        $funds = DB::table('portfolio_registration')
    			->select('PRO_REG_ID','PORTFOLIO_NAME')
    			->get();

        return view('BackEnd.pages.ca.dividendupdate', ['data' => $data, 'funds' => $funds]);
    }

    public function dividend_update(Request $request){

    	$id = $request->dvid;
        $FUND_ID = $request->FUND_ID;
        $FACE_VALUE = $request->FACE_VALUE;
        $DIVIDEND = $request->DIVIDEND;
        $INDV_ETIN_TAX = $request->INDV_ETIN_TAX;
        $INDV_TAX = $request->INDV_TAX;
        $INST_INC_TAX = $request->INST_INC_TAX;
        $TAX_MARGIN = $request->TAX_MARGIN;
        $TC_DATE = $request->TC_DATE;
        $TCIP_DATE = $request->TCIP_DATE;
        $NET_PROFIT = $request->NET_PROFIT;
        $EARNINGS_PER_UNIT = $request->EARNINGS_PER_UNIT;
        $BUY_PRICE = $request->BUY_PRICE;
        $APRV_DATE = $request->APRV_DATE;
        $YED = $request->YED;
        $updated_at = Carbon::now();

        DB::update('update dividend_setup set FUND_ID = ?, FACE_VALUE = ?, DIVIDEND = ?, INDV_ETIN_TAX = ?, INDV_TAX = ?, INST_INC_TAX = ?,  TAX_MARGIN = ?, TC_DATE = ?, TCIP_DATE = ?, NET_PROFIT = ?, EARNINGS_PER_UNIT = ?, BUY_PRICE = ?, APRV_DATE = ?, YED = ?, updated_at = ? where DVS_ID = ?',[$FUND_ID, $FACE_VALUE, $DIVIDEND, $INDV_ETIN_TAX, $INDV_TAX, $INST_INC_TAX, $TAX_MARGIN, $TC_DATE, $TCIP_DATE, $NET_PROFIT, $EARNINGS_PER_UNIT, $BUY_PRICE, $APRV_DATE, $YED, $updated_at, $id]);

        return redirect('/corporate-action/view_dividend')->with('message','Dividend update successfully done'); 
    }

    public function dividend_del($DVS_ID){

    	DB::delete('delete from dividend_setup where DVS_ID = ?',[$DVS_ID]);
        return redirect('/corporate-action/view_dividend')->with('messaged','Delete Successfully Done');
    }

    public function import_text(){
    	return view('BackEnd.pages.ca.import');
    }

    public function uf_calculation(Request $request){

        $year = date("Y");
        $dividend_uf = DB::table('dividend_setup')
                       ->where('FUND_ID', '=', 1)
                       ->whereYear('created_at', '=', $year)
                       ->first();
        if($dividend_uf == ''){
            return redirect('/corporate-action/calculation')->with('message','Please Setup Dividend Before Import');
        }else{
            $facevalue = $dividend_uf->FACE_VALUE;
            $dvdnd = $dividend_uf->DIVIDEND;
            $TAX_MARGIN = $dividend_uf->TAX_MARGIN;
            $ind_tax_tin = $dividend_uf->INDV_ETIN_TAX;
            $ind_tax_wo_tin = $dividend_uf->INDV_TAX;
            $inst_tax = $dividend_uf->INST_INC_TAX;
            $buy_rate = $dividend_uf->BUY_PRICE;
            $FUND_ID = $dividend_uf->FUND_ID;

            $unit_fund = $request->unit_fund;
            $unit_fund_org_name = $unit_fund->getClientOriginalName();
            $unit_fund_name = date("d_m_Y_h_i_s_a").'_'.$unit_fund_org_name;
            $path = 'dividend/';
            $unit_fund->move($path,$unit_fund_name);

            $file = file_get_contents("dividend/".$unit_fund_name);
            $data_file=preg_split("/\\r\\n|\\r|\\n/", $file);

            foreach($data_file as $count){ 
                $arrM = explode('~',$count); 
                $reg = isset($arrM[0])? $arrM[0] : '';
                $name = isset($arrM[1])? $arrM[1] : '';
                $mail = isset($arrM[2])? $arrM[2] : '';
                $bank = isset($arrM[3])? $arrM[3] : '';
                $ac_name = isset($arrM[4])? $arrM[4] : '';
                $ac_no = isset($arrM[5])? $arrM[5] : '';
                $routing = isset($arrM[6])? $arrM[6] : '';
                $brnc = isset($arrM[7])? $arrM[7] : '';
                $category = isset($arrM[8])? $arrM[8] : '';
                $type = isset($arrM[9])? $arrM[9] : '';
                $holding = isset($arrM[10])? $arrM[10] : '';

                if($category == 'ind'){

                    $get_tin = DB::table('principal_applicant')
                               ->select('ETIN')
                               ->where('REGISTRATION_NO', '=', $reg)
                               ->first();

                    if($get_tin->ETIN == ''){
                        $ind_tax = $ind_tax_wo_tin;
                    }else{
                        $ind_tax = $ind_tax_tin;
                    }

                    if ($type == 'Cash') {
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;

                        if($dvdnd_value >= $TAX_MARGIN){
                            $tax_value = $dvdnd_value - $TAX_MARGIN;
                            $tax_ind = ($tax_value * $ind_tax) / 100;
                            $NET_DIVIDEND = $dvdnd_value - $tax_ind;
                        }else{
                            $NET_DIVIDEND = $dvdnd_value;
                            $tax_ind = 0;
                        }

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            'DED_INC_TAX'=>$tax_ind,
                            //'ENTI_CIP'=>$ENTI_CIP,
                            //'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            'PERCENTAGE'=>$ind_tax,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                    elseif($type == 'CIP'){
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;

                        $cip_temp = $dvdnd_value / $buy_rate;
                        if($cip_temp >= 10){
                            $cip_total = $cip_temp / 10;
                            $integer_cip = floor($cip_total);
                            $point_cip = $cip_total - $integer_cip;

                            $ENTI_CIP = $integer_cip * 10;
                            $fraction_temp = $point_cip * 10;
                            $fraction_value = $fraction_temp * $buy_rate;

                            if($dvdnd_value >= $TAX_MARGIN){
                                $tax_ind_cip = ($fraction_value * $ind_tax) / 100;
                                $NET_DIVIDEND = $dvdnd_value - $tax_ind_cip;
                                $PAY_FRACTIONAL = $fraction_value;
                            }else{
                                $NET_DIVIDEND = $dvdnd_value;
                                $PAY_FRACTIONAL = $fraction_value;
                                $tax_ind_cip = 0;
                            }
                        }else{
                            $NET_DIVIDEND = $dvdnd_value;
                            $PAY_FRACTIONAL = $cip_temp * $buy_rate;
                            $ENTI_CIP = 0;
                            $tax_ind_cip = 0;
                        }

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            'DED_INC_TAX'=>$tax_ind_cip,
                            'ENTI_CIP'=>$ENTI_CIP,
                            'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            'PERCENTAGE'=>$ind_tax,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                }
                elseif ($category == 'inst'){
                    if ($type == 'Cash') {
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;

                        $tax_inst = ($dvdnd_value * $inst_tax) / 100;
                        $NET_DIVIDEND = $dvdnd_value - $tax_inst;

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            'DED_INC_TAX'=>$tax_inst,
                            //'ENTI_CIP'=>$ENTI_CIP,
                            //'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            'PERCENTAGE'=>$inst_tax,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                    elseif($type == 'CIP'){
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;

                        $cip_temp = $dvdnd_value / $buy_rate;
                        if($cip_temp >= 10){
                            $cip_total = $cip_temp / 10;
                            $integer_cip = floor($cip_total);
                            $point_cip = $cip_total - $integer_cip;

                            $ENTI_CIP = $integer_cip * 10;
                            $fraction_temp = $point_cip * 10;
                            $fraction_value = $fraction_temp * $buy_rate;

                            $tax_inst_cip = ($fraction_value * $inst_tax) / 100;
                            $NET_DIVIDEND = $dvdnd_value - $tax_inst_cip;
                            $PAY_FRACTIONAL = $fraction_value;
                        }else{
                            $NET_DIVIDEND = $dvdnd_value;
                            $PAY_FRACTIONAL = $cip_temp * $buy_rate;
                            $ENTI_CIP = 0;
                            $tax_inst_cip = 0;
                        }

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            'DED_INC_TAX'=>$tax_inst_cip,
                            'ENTI_CIP'=>$ENTI_CIP,
                            'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            'PERCENTAGE'=>$inst_tax,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                }elseif($category == 'mf'){
                    if ($type == 'Cash') {
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;
                        $NET_DIVIDEND = $dvdnd_value;

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            //'DED_INC_TAX'=>$tax_inst,
                            //'ENTI_CIP'=>$ENTI_CIP,
                            //'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            //'PERCENTAGE'=>$inst_tax,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                    elseif($type == 'CIP'){
                        $FUND_VALUE = $holding * $facevalue;
                        $dvdnd_value = ($FUND_VALUE * $dvdnd) / 100;

                        $cip_temp = $dvdnd_value / $buy_rate;
                        if($cip_temp >= 10){
                            $cip_total = $cip_temp / 10;
                            $integer_cip = floor($cip_total);
                            $point_cip = $cip_total - $integer_cip;

                            $ENTI_CIP = $integer_cip * 10;
                            $fraction_temp = $point_cip * 10;
                            $fraction_value = $fraction_temp * $buy_rate;

                            $NET_DIVIDEND = $dvdnd_value;
                            $PAY_FRACTIONAL = $fraction_value;
                            
                        }else{
                            $NET_DIVIDEND = $dvdnd_value;
                            $PAY_FRACTIONAL = $cip_temp * $buy_rate;
                            $ENTI_CIP = 0;
                        }

                        $data=array(
                            'FUND_ID'=>$FUND_ID,
                            'REGISTRATION_NO'=>$reg,
                            'INVESTOR_NAME'=>$name,
                            'INVESTOR_EMAIL'=>$mail,
                            'BANK_NAME'=>$bank,
                            'AC_NAME'=>$ac_name,
                            'AC_NO'=>$ac_no,
                            'ROUTING'=>$routing,
                            'BRANCH'=>$brnc,
                            'HOLDING_UNIT'=>$holding,
                            'DIV_TYPE'=>$type,
                            'FUND_VALUE'=>$FUND_VALUE,
                            'DIVIDEND_AMOUNT'=>$dvdnd_value,
                            'NET_DIVIDEND'=>$NET_DIVIDEND,
                            //'DED_INC_TAX'=>$tax_inst_cip,
                            //'PERCENTAGE'=>$inst_tax,
                            'ENTI_CIP'=>$ENTI_CIP,
                            'PAY_FRACTIONAL'=>$PAY_FRACTIONAL,
                            'POR_CAT'=>$category,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now()
                        );
                        DB::table('dividend_calculation')->insert($data);
                    }
                }
                
            }

            return redirect('/corporate-action/calculation')->with('message','Successfully Imported');  
        } 
    }

    public function dividend_warrant(){

        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();
        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();

        $funds = DB::table('portfolio_registration')
                ->select('PRO_REG_ID','PORTFOLIO_NAME')
                ->get();

        return view('BackEnd.pages.ca.dvdnd_wrnt', ['regno' => $regno, 'funds' => $funds]);
    }

    public function get_div_wr($fund, $id, $year){

        $dividend = DB::table('dividend_calculation')
                    ->join('dividend_setup', 'dividend_calculation.FUND_ID', '=', 'dividend_setup.FUND_ID')
                    ->join('portfolio_registration', 'dividend_calculation.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->Select('dividend_calculation.*', 'dividend_setup.FACE_VALUE', 'dividend_setup.DIVIDEND', 'dividend_setup.TC_DATE', 'dividend_setup.TCIP_DATE', 'dividend_setup.NET_PROFIT', 'dividend_setup.EARNINGS_PER_UNIT', 'dividend_setup.APRV_DATE', 'dividend_setup.YED', 'portfolio_registration.PORTFOLIO_NAME')
                    ->where('dividend_calculation.FUND_ID', '=', $fund)
                    ->where('REGISTRATION_NO', '=', $id)
                    ->whereYear('dividend_calculation.created_at', '=', $year)
                    ->whereYear('dividend_setup.created_at', '=', $year)
                    ->get();

        return response()->json($dividend);
    }

    public function mail_div_wr($fund, $id, $year){
        
        $dvd_data = DB::table('dividend_calculation')
                    ->join('dividend_setup', 'dividend_calculation.FUND_ID', '=', 'dividend_setup.FUND_ID')
                    ->join('portfolio_registration', 'dividend_calculation.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->Select('dividend_calculation.*', 'dividend_setup.FACE_VALUE', 'dividend_setup.DIVIDEND', 'dividend_setup.TC_DATE', 'dividend_setup.TCIP_DATE', 'dividend_setup.NET_PROFIT', 'dividend_setup.EARNINGS_PER_UNIT', 'dividend_setup.APRV_DATE', 'dividend_setup.YED', 'portfolio_registration.PORTFOLIO_NAME')
                    ->where('dividend_calculation.FUND_ID', '=', $fund)
                    ->where('REGISTRATION_NO', '=', $id)
                    ->whereYear('dividend_calculation.created_at', '=', $year)
                    ->whereYear('dividend_setup.created_at', '=', $year)
                    ->first();

        $dividend_info=array(
            'reg'=>$dvd_data->REGISTRATION_NO,
            'name'=>$dvd_data->INVESTOR_NAME,
            'bank'=>$dvd_data->BANK_NAME,
            'ac_no'=>$dvd_data->AC_NO,
            'aprvday'=>$dvd_data->APRV_DATE,
            'yend'=>$dvd_data->YED,
            'netprof'=>$dvd_data->NET_PROFIT,
            'earn'=>$dvd_data->EARNINGS_PER_UNIT,
            'dvd_per'=>$dvd_data->DIVIDEND,
            'face'=>$dvd_data->FACE_VALUE,
            'holding'=>$dvd_data->HOLDING_UNIT,
            'dvd_type'=>$dvd_data->DIV_TYPE,
            'fund_value'=>$dvd_data->FUND_VALUE,
            'dvd_amount'=>$dvd_data->DIVIDEND_AMOUNT,
            'did_inct'=>$dvd_data->DED_INC_TAX,
            'cip_unit'=>$dvd_data->ENTI_CIP,
            'fract_val'=>$dvd_data->PAY_FRACTIONAL,
            'tcd'=>$dvd_data->TC_DATE,
            'tcipd'=>$dvd_data->TCIP_DATE,
            'fname'=>$dvd_data->PORTFOLIO_NAME,
            'porcat'=>$dvd_data->POR_CAT,
            'percen_tage'=>$dvd_data->PERCENTAGE
        );



        $uploadPath ='./dividend/pdf/';
        $file_name = $id.'_dividend'.Carbon::now()->format('Y');

        $pdf = PDF::loadView('BackEnd.pages.reports.dvd_wrn_pdf', compact('dividend_info'))->save($uploadPath.$file_name.'.pdf' );

        $client_mail = $dvd_data->INVESTOR_EMAIL;
        $yearend = date("d F, Y", strtotime($dvd_data->YED));

        $mail_data = array(
            'tcdate'=>$dvd_data->TC_DATE
        );

        //$emails = [$client_mail, 'amcuf@capmbd.com'];
        $emails = [$client_mail];
        try{
            Mail::send('mail.dvd_wrn_email', $mail_data, function($message) use ($emails, $uploadPath, $file_name, $yearend){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Dividend Notice ('.$yearend.')');
                $message->attach($uploadPath.$file_name.'.pdf');
            });

        }

        catch(\Exception $e){
            return 'Dividend Warrant Not Send';
        }

        return 'Dividend Warrant Send Successfully Done';
    }

    public function dividend_report(){
        $year = date("Y");
        $dvd_all_bank = DB::table('dividend_calculation')
                        ->Select('REGISTRATION_NO', 'INVESTOR_NAME', 'BANK_NAME', 'AC_NAME', 'AC_NO', 'BRANCH', 'ROUTING', 'DIV_TYPE', 'NET_DIVIDEND', 'PAY_FRACTIONAL', 'DED_INC_TAX', 'POR_CAT')
                        ->where('HOLDING_UNIT', '!=', 0)
                        ->where('FUND_ID', '=', 1)
                        ->whereYear('created_at', '=', $year)
                        ->get();


        $dvd_cip = DB::table('dividend_calculation')
                    ->join('dividend_setup', 'dividend_calculation.FUND_ID', '=', 'dividend_setup.FUND_ID')
                    ->Select('dividend_calculation.REGISTRATION_NO', 'dividend_calculation.INVESTOR_NAME', 'dividend_calculation.DIV_TYPE', 'dividend_calculation.ENTI_CIP', 'dividend_setup.BUY_PRICE')
                    ->where('dividend_calculation.ENTI_CIP', '!=', 0)
                    ->where('dividend_calculation.FUND_ID', '=', 1)
                    ->where('dividend_calculation.DIV_TYPE', '=', 'CIP')
                    ->whereYear('dividend_calculation.created_at', '=', $year)
                    ->whereYear('dividend_setup.created_at', '=', $year)
                    ->get();

        $dvd_trust = DB::table('dividend_calculation')
                        ->Select('REGISTRATION_NO', 'INVESTOR_NAME', 'AC_NAME', 'AC_NO', 'BRANCH', 'ROUTING', 'DIV_TYPE', 'NET_DIVIDEND', 'PAY_FRACTIONAL', 'DED_INC_TAX')
                        ->where('BANK_NAME', '=', 'Trust Bank Ltd')
                        ->where('HOLDING_UNIT', '!=', 0)
                        ->where('FUND_ID', '=', 1)
                        ->whereYear('created_at', '=', $year)
                        ->get();

        $dvd_other = DB::table('dividend_calculation')
                        ->Select('REGISTRATION_NO', 'INVESTOR_NAME', 'BANK_NAME', 'AC_NAME', 'AC_NO', 'BRANCH', 'ROUTING', 'DIV_TYPE', 'NET_DIVIDEND', 'PAY_FRACTIONAL', 'DED_INC_TAX')
                        ->where('BANK_NAME', '!=', 'Trust Bank Ltd')
                        ->where('HOLDING_UNIT', '!=', 0)
                        ->where('FUND_ID', '=', 1)
                        ->whereYear('created_at', '=', $year)
                        ->get();

        $dvd_tds = DB::table('dividend_calculation')
                        ->Select('REGISTRATION_NO', 'INVESTOR_NAME', 'DIV_TYPE', 'DIVIDEND_AMOUNT', 'NET_DIVIDEND', 'DED_INC_TAX')
                        ->where('HOLDING_UNIT', '!=', 0)
                        ->where('DED_INC_TAX', '!=', 0)
                        ->where('FUND_ID', '=', 1)
                        ->whereYear('created_at', '=', $year)
                        ->get();

        $dvd_disb = DB::table('dividend_calculation')
                        ->where('HOLDING_UNIT', '!=', 0)
                        ->where('FUND_ID', '=', 1)
                        ->whereYear('created_at', '=', $year)
                        ->get();

        $yed = DB::table('dividend_setup')    
                ->Select('YED')
                ->where('FUND_ID', '=', 1)
                ->whereYear('created_at', '=', $year)
                ->first();
        $yd = date("F d, Y", strtotime($yed->YED));

        return view('BackEnd.pages.ca.dvdnd_wrnt_rpt', ['dvd_all_bank' => $dvd_all_bank, 'dvd_cip' => $dvd_cip, 'dvd_trust' => $dvd_trust, 'dvd_other' => $dvd_other, 'dvd_tds' => $dvd_tds, 'dvd_disb' => $dvd_disb, 'yd' => $yd]);
    }

    public function recon_sl(){

        $funds = DB::table('portfolio_registration')
                ->select('PRO_REG_ID','PORTFOLIO_NAME')
                ->get();

        return view('BackEnd.pages.ca.reconciliation', ['funds' => $funds]);
    }

    public function getRecon_sl($fund, $year){

        $recon1 = DB::table('dividend_calculation')
                    ->Select(DB::raw('SUM(DIVIDEND_AMOUNT) AS dvdnd_val'), DB::raw('SUM(DED_INC_TAX) AS tds'), DB::raw('SUM(NET_DIVIDEND) AS net_dv'))
                    ->where('FUND_ID', '=', $fund)
                    ->whereYear('created_at', '=', $year)
                    ->first();

        $recon2 = DB::table('dividend_calculation')
                    ->Select(DB::raw('SUM(NET_DIVIDEND) AS net_dv_cas'))
                    ->where('DIV_TYPE', '=', 'Cash')
                    ->where('FUND_ID', '=', $fund)
                    ->whereYear('created_at', '=', $year)
                    ->first();

        $recon3 = DB::table('dividend_calculation')
                    ->Select(DB::raw('SUM(PAY_FRACTIONAL) AS payf'), DB::raw('SUM(ENTI_CIP) AS cipunit'), DB::raw('SUM(DED_INC_TAX) AS tdscip'))
                    ->where('DIV_TYPE', '=', 'CIP')
                    ->where('FUND_ID', '=', $fund)
                    ->whereYear('created_at', '=', $year)
                    ->first();

        $recon4 = DB::table('dividend_setup')
                    ->Select('BUY_PRICE')
                    ->where('FUND_ID', '=', $fund)
                    ->whereYear('created_at', '=', $year)
                    ->first();

        $recon=array([
            'dvdnd_val'=>$recon1->dvdnd_val,
            'tds'=>$recon1->tds,
            'net_dv'=>$recon1->net_dv,
            'net_dv_cas'=>$recon2->net_dv_cas,
            'payf'=>$recon3->payf,
            'tdscip'=>$recon3->tdscip,
            'cipunit'=>$recon3->cipunit,
            'BUY_PRICE'=>$recon4->BUY_PRICE
        ]);

        return response()->json($recon);
    }
}
