<?php
namespace App\Http\Controllers;
use PHPExcel; 
use PHPExcel_IOFactory;
use PHPExcel_Shared_Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Session;
use PDF;
use QRCode;
use Mail;

class TALoginController extends Controller
{
	public function __construct()
    {
        
    }

    public function login(Request $request){
        
        $username = $request->username;
        $password = md5($request->password);

        $ta = DB::table('salescenter')
              ->join('salesagent', 'salescenter.SALESAGENT_ID', '=', 'salesagent.SALESAGENT_ID')
              ->where('salescenter.SCID', $username)
              ->where('salescenter.password', $password)
              ->first();

        if($ta){
            Session::put('ta_un', $ta->SCID);
            Session::put('ta_id', $ta->SALESCENTER_ID);
            Session::put('ta_code', $ta->SALESAGENT_CODE);
            Session::put('ta_pass', $ta->password);
            return redirect('/ta');
        }
        else{
            return Redirect::back()->withErrors(['Wrong User ID or Password!!! Please Try Again']);
        }
    }

    public function logout(){
        Session::put('ta_un',null);
        Session::put('ta_id',null);
        Session::put('ta_code',null);
        Session::put('ta_pass',null);
        return redirect('http://capmbd.com');
    }


    public function dashboard(){

        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }

        $rates = DB::table('price_rate')
                ->join('portfolio_registration', 'price_rate.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('price_rate.BUY_RATE', 'price_rate.SELL_RATE', 'portfolio_registration.PORTFOLIO_NAME')
                ->get();

        $ta_info_buy = DB::table('salescenter')
                    ->join('unit_purchase', 'salescenter.SCID', '=', 'unit_purchase.PURCHASE_PERSON_ID')
                    ->select('salescenter.SCID', DB::raw('COUNT("unit_purchase.PURCHASE_NO") as sub, SUM(unit_purchase.UNIT) as sub_unit, SUM(unit_purchase.TOTAL_AMOUNT) as sub_amo'))
                    ->where('unit_purchase.SC_CNF_FLAG', '=', 'A')
                    ->groupBy('salescenter.SCID')
                    ->get();

        $ta_info_sell = DB::table('salescenter')
                   ->join('unit_sell', 'salescenter.SCID', '=', 'unit_sell.SALES_PERSON_ID')
                   ->select('salescenter.SCID', DB::raw('COUNT("unit_sell.SALE_NO") as sur, SUM(unit_sell.UNIT) as sur_unit, SUM(unit_sell.TOTAL_AMOUNT) as sur_amo'))
                   ->where('unit_sell.PAY_CLR_FLAG', '=', 'A')
                   ->groupBy('salescenter.SCID')
                   ->get();

        return view('BackEnd.pages.ta.dashboard', ['rates' => $rates, 'ta_info_buy' => $ta_info_buy, 'ta_info_sell' => $ta_info_sell]);
    }

    public function indv_add(){

    /*  $test_mail = ['mehedi3555@gmail.com'];

        Mail::send([], [], function($message) use ($test_mail)
        {
            $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
            $message->to($test_mail);
            $message->subject('Teat Mail Subject');
            $message->setBody('Teat Mail Body');
        });*/
		
		

    //print_r($data);
	//die();
        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }
		$data=array(
            'app_name'=>'',
			'gender'=>'',
            'Birth_Date'=>'',
            'f_name'=>'',
            'contact'=>'',
            'm_name'=>'',
            'email'=>'',
            'present_address'=>'',
            'nationality'=>'',
            'permanent_address'=>'',
            'NID_PID'=>'',
			'BO_ID'=>'',
            'city'=>'',
            'post_code'=>'',
            'District'=>'',
            'Occupation'=>'',
			'Country_of_Resi'=>'',
			'C_code'=>'',
			'e_tin'=>'',
			'Account_Name'=>'',
			'bank_ac_no'=>'',
			'rounting_no'=>'',
			'bank_name'=>'',
			'branch_name'=>'',
			'Dividend_type'=>'',
			's_app_name'=>'',
			's_gender'=>'',
			's_f_name'=>'',
			's_phone_no'=>'',
			's_m_name'=>'',
			's_date_birth'=>'',
			's_present_address'=>'',
			's_permanent_address'=>'',
			's_nationality'=>'',
			's_nid_pid'=>'',
			's_occupation'=>'',
			'nominee_name'=>'',
			'nominee_gender'=>'',
			'nominee_contact'=>'',
			'nominee_fname'=>'',
			'nominee_mname'=>'',
			'nominee_date_birth'=>'',
			'nominee_relation'=>'',
			'nominee_present_address'=>'',
			'Issuing_Country'=>'',
			'nominee_permanent_address'=>'',
			'Issuing_C_code'=>'',
			'nominee_occupation'=>'',
			'nominee_nid_pid'=>'',
        );
        $countries = DB::table('applicant_country')->get();
        return view('BackEnd.pages.ta.indv_reg', ['countries' => $countries, 'data' => $data]);
    }

    public function indv_store(Request $request){
        $Appl_Name = $request->NAME;
        $Appl_Gender = $request->GENDER;
        $Appl_ta = $request->ta_id;
        $Appl_Father = $request->FATHER_NAME;
        $Appl_Mother = $request->MOTHER_NAME;
        $Appl_Pres_address = $request->PRESENT_ADDRESS;
        $Appl_Per_Address = $request->PERMANENT_ADDRESS;
        $Appl_NID = $request->NATIONAL_ID;
        $Appl_Town = $request->CITY;
        $Appl_District = $request->DISTRICT;
        $Appl_Country = $request->COUNTRY;
        $Appl_DOB = $request->BIRTHDAY;
        $Appl_Contract = $request->TELEPHONE;
        $Appl_Email = $request->EMAIL;
        $Appl_Nationality = $request->NATIONALITY;
        $Appl_BOID = $request->BOID;
        $Appl_Post_Code = $request->POST_CODE;
        $Appl_Occupation = $request->OCCUPATION;
        $Appl_ETIN = $request->ETIN;  
        $Appl_Account_Name = $request->ACCOUNT_NAME;
        $Appl_Account_No = $request->ACCOUNT_NO;
        $Appl_Bank_Name = $request->BANK_NAME;
        $Appl_Routing = $request->ROUTING_NO;
        $Appl_Branch = $request->BRANCH;
        $Appl_Dividend = $request->DIVIDENT_OPT;
        $pwd = rand(10000,100000);
        $password = md5($pwd);

        $Second_Name = $request->SECOND_APL_NAME;
        $Second_Father = $request->SECOND_APL_FATHER;
        $Second_Mother = $request->SECOND_APL_MOTHER;
        $Second_Pres_Address = $request->SECOND_APL_PRES;
        $Second_Per_Address = $request->SECOND_APL_PER;
        $Second_NID = $request->SECOND_APL_NID;
        $Second_DOB = $request->SECOND_APL_DOB;
        $Second_Contract = $request->SECOND_APL_CONT;
        $Second_Nationality = $request->SECOND_APL_NATION;
        $Second_Occupation = $request->SECOND_APL_OCU;

        $Nom_Name = $request->NOMINEE_NAME;
        $Nom_Father = $request->NOMINEE_FATHER;
        $Nom_Mother = $request->NOMINEE_MOTHER;
        $Nom_Relationship = $request->NOMINEE_RELATION;
        $Nom_Pres_Address = $request->NOMINEE_PRES_ADDRSS;
        $Nom_Per_Address = $request->NOMINEE_PER_ADDRESS;
        $Nom_NID = $request->NOMINEE_NID;
        $Nom_DOB = $request->NOMINEE_DOB;
        $Nom_Contract = $request->NOMINEE_CONTACT;
        $Nom_Country = $request->NOMINEE_COUNTRY;
        $Nom_Occupation = $request->NOMINEE_OCCUPATION;

        $second = $request->optional;
        $c_code = $request->COUNTRY;
        $ta = str_pad($request->ta_code, 2, '0', STR_PAD_LEFT);
        $inv = DB::table('principal_applicant')->count();
        $inv_id = $inv + 3;
        $reg_id = str_pad($inv_id, 7, '0', STR_PAD_LEFT);

        $a = 0;

        if(!empty($second)){
            $a = 3;
        }else{
            $a = 1;
        }

        $reg_no =  $a.$c_code.$ta.$reg_id;

        $dirname = "./investor/".$reg_no;
        mkdir($dirname);

        $Appl_Photo = $request->IMAGE;
        if(!empty($Appl_Photo)){
            $Apl_Ext = $Appl_Photo->getClientOriginalExtension();
            $Appl_Photo_Name = $reg_no.'user_photo.'.$Apl_Ext;
            $Appl_Path = 'investor/'.$reg_no.'/images/';
            $Appl_Photo->move($Appl_Path,$Appl_Photo_Name);
        }else{
            $Appl_Photo_Name = NULL;
        }

        $Appl_Sign = $request->APP_SIGN;
        if(!empty($Appl_Sign)){
            $Appl_Org_Sign = $Appl_Sign->getClientOriginalExtension();
            $Appl_Sign_Name = $reg_no.'user_sign.'.$Appl_Org_Sign;
            $Appl_Path = 'investor/'.$reg_no.'/images/';
            $Appl_Sign->move($Appl_Path,$Appl_Sign_Name);
        }else{
            $Appl_Sign_Name = NULL;
        }

        $Appl_Nid = $request->NID_IMG;
        if(!empty($Appl_Nid)){
            $Appl_Org_Nid = $Appl_Nid->getClientOriginalExtension();
            $Appl_Nid_Name =  $reg_no.'user_nid.'.$Appl_Org_Nid;
            $Appl_Path = 'investor/'.$reg_no.'/images/';
            $Appl_Nid->move($Appl_Path,$Appl_Nid_Name);
        }else{
            $Appl_Nid_Name = NULL;
        }

        $Second_Photo = $request->JOINT_IMAGE;
        if(!empty($Second_Photo)){
            $Second_Org_Name = $Second_Photo->getClientOriginalExtension();
            $Second_Photo_Name = $reg_no.'joint_user.'.$Second_Org_Name;
            $Second_Path = 'investor/'.$reg_no.'/images/';
            $Second_Photo->move($Second_Path,$Second_Photo_Name);
        }else{
            $Second_Photo_Name = NULL;
        }

        $Second_Sign = $request->JOINT_APP_SIGN;
        if(!empty($Second_Sign)){
            $Second_Org_Sign = $Second_Sign->getClientOriginalExtension();
            $Second_Sign_Name = $reg_no.'joint_user_sign.'.$Second_Org_Sign;
            $Second_Path = 'investor/'.$reg_no.'/images/';
            $Second_Sign->move($Second_Path,$Second_Sign_Name);
        }else{
            $Second_Sign_Name = NULL;
        }

        $Second_Nid = $request->JOINT_NID_IMG;
        if(!empty($Second_Nid)){
            $Second_Org_Nid = $Second_Nid->getClientOriginalExtension();
            $Second_Nid_Name = $reg_no.'joint_user_nid.'.$Second_Org_Nid;
            $Second_Path = 'investor/'.$reg_no.'/images/';
            $Second_Nid->move($Second_Path,$Second_Nid_Name);
        }else{
            $Second_Nid_Name = NULL;
        }

        $Nom_Photo = $request->NOM_IMAGE;
        if(!empty($Nom_Photo)){
            $Nom_Org_Name = $Nom_Photo->getClientOriginalExtension();
            $Nom_Photo_Name = $reg_no.'nom.'.$Nom_Org_Name;
            $Nom_Path = 'investor/'.$reg_no.'/images/';
            $Nom_Photo->move($Nom_Path,$Nom_Photo_Name);
        }else{
            $Nom_Photo_Name = NULL;
        }

        $Nom_Sign = $request->NOM_APP_SIGN;
        if(!empty($Nom_Sign)){
            $Nom_Org_Sign = $Nom_Sign->getClientOriginalExtension();
            $Nom_Sign_Name = $reg_no.'nom_sign.'.$Nom_Org_Sign;
            $Nom_Path = 'investor/'.$reg_no.'/images/';
            $Nom_Sign->move($Nom_Path,$Nom_Sign_Name);
        }else{
            $Nom_Sign_Name = NULL;
        }

        $Nom_Nid = $request->NOM_NID_IMG;
        if(!empty($Nom_Nid)){
            $Nom_Org_Nid = $Nom_Nid->getClientOriginalExtension();
            $Nom_Nid_Name = $reg_no.'nom_nid.'.$Nom_Org_Nid;
            $Nom_Path = 'investor/'.$reg_no.'/images/';
            $Nom_Nid->move($Nom_Path,$Nom_Nid_Name);
        }else{
            $Nom_Nid_Name = NULL;
        }

        $appl_data=array(
            'REGISTRATION_NO'=>$reg_no,
            'TA_REG_NO'=>$Appl_ta,
            'GENDER'=>$Appl_Gender,
            'NAME'=>$Appl_Name,
            'FATHER_NAME'=>$Appl_Father,
            'MOTHER_NAME'=>$Appl_Mother,
            'PRESENT_ADDRESS'=>$Appl_Pres_address,
            'PERMANENT_ADDRESS'=>$Appl_Per_Address,
            'NATIONAL_ID'=>$Appl_NID,
            'CITY'=>$Appl_Town,
            'DISTRICT'=>$Appl_District,
            'COUNTRY'=>$Appl_Country,
            'BIRTHDAY'=>$Appl_DOB,
            'TELEPHONE'=>$Appl_Contract,
            'EMAIL'=>$Appl_Email,
            'NATIONALITY'=>$Appl_Nationality,
            'BOID'=>$Appl_BOID,
            'POST_CODE'=>$Appl_Post_Code,
            'OCCUPATION'=>$Appl_Occupation,
            'ETIN'=>$Appl_ETIN,
            'ACCOUNT_NAME'=>$Appl_Account_Name,
            'ACCOUNT_NO'=>$Appl_Account_No,
            'BANK_NAME'=>$Appl_Bank_Name,
            'ROUTING_NO'=>$Appl_Routing,
            'BRANCH'=>$Appl_Branch,
            'DIVIDENT_OPT'=>$Appl_Dividend,
            'IMAGE'=>$Appl_Photo_Name,
            'APP_SIGN'=>$Appl_Sign_Name,
            'NID_IMG'=>$Appl_Nid_Name,
            'PASSWORD'=>$password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        $sec_data=array(
            'REGISTRATION_NO'=>$reg_no,
            'JOINT_NAME'=>$Second_Name,
            'JOINT_FATHER_NAME'=>$Second_Father,
            'JOINT_MOTHER_NAME'=>$Second_Mother,
            'JOINT_PRESENT_ADDRESS'=>$Second_Pres_Address,
            'JOINT_PERMANENT_ADDRESS'=>$Second_Per_Address,
            'JOINT_NATIONAL_ID'=>$Second_NID,
            'JOINT_BIRTHDAY'=>$Second_DOB,
            'JOINT_TELEPHONE'=>$Second_Contract,
            'JOINT_NATIONALITY'=>$Second_Nationality,
            'JOINT_OCCUPATION'=>$Second_Occupation,
            'JOINT_IMAGE'=>$Second_Photo_Name,
            'JOINT_APP_SIGN'=>$Second_Sign_Name,
            'JOINT_NID_IMG'=>$Second_Nid_Name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        $nom_data=array(
            'REGISTRATION_NO'=>$reg_no,
            'NOM_NAME'=>$Nom_Name,
            'NOM_FATHER_NAME'=>$Nom_Father,
            'NOM_MOTHER_NAME'=>$Nom_Mother,
            'RELATION_APPLICANT'=>$Nom_Relationship,
            'NOM_PRESENT_ADDRESS'=>$Nom_Pres_Address,
            'NOM_PERMANENT_ADDRESS'=>$Nom_Per_Address,
            'NOM_NATIONAL_ID'=>$Nom_NID,
            'NOM_BIRTHDAY'=>$Nom_DOB,
            'NOM_TELEPHONE'=>$Nom_Contract,
            'NOM_COUNTRY'=>$Nom_Country,
            'NOM_OCCUPATION'=>$Nom_Occupation,
            'NOM_IMAGE'=>$Nom_Photo_Name,
            'NOM_APP_SIGN'=>$Nom_Sign_Name,
            'NOM_NID_IMG'=>$Nom_Nid_Name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('principal_applicant')->insert($appl_data);
        if(!empty($second)){
            DB::table('joint_applicant')->insert($sec_data);
        }
        DB::table('nominee_info')->insert($nom_data);

        $mail_data = array(
            'reg_no'=>$reg_no,
            'name'=>$Appl_Name,
            'address'=>$Appl_Pres_address,
            'nid'=>$Appl_NID,
            'phn'=>$Appl_Contract,
            'pass'=>$pwd
        );
        $emails = [$Appl_Email,'amcuf@capmbd.com'];

        try{
            Mail::send('mail.inv_reg', $mail_data, function($message) use ($emails, $reg_no){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Confirmation of User Registration No is: '.$reg_no);
            });
        }

        catch(\Exception $e){
            return redirect('/ta/indv')->with('message','Investor save successfully done But Mail Not Sent. Please Contact With Your Contact Person');
        }

        return redirect('/ta/indv')->with('message','Investor save successfully done');
    }

    public function inst_add(){

        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }
		
		$data=array(
            'app_inst_name'=>'',
			'Types_of_inst'=>'',
            'Trade_License'=>'',
            'Mailing_Address'=>'',
            'Telephone_no'=>'',
            'TIN_No'=>'',
            'email'=>'',
			'BO_ID'=>'',
            'Fax'=>'',
            'post_code'=>'',
			'Account_Name'=>'',
			'bank_ac_no'=>'',
			'rounting_no'=>'',
			'bank_name'=>'',
			'branch_name'=>'',
			'Dividend_type'=>'',
			'auth_name'=>'',
			'auth_gender'=>'',
			'Designation'=>'',
			'date_birth'=>'',
			'auth_mailing_address'=>'',
			'contact_no'=>'',
			'nid_pid'=>'',
        );
		
        $countries = DB::table('applicant_country')->get();
        return view('BackEnd.pages.ta.inst_reg', ['data' => $data]);
    }

    public function inst_store(Request $request){
        $Inst_Name = $request->INSTNAME;
        $Inst_Type = $request->INST_TYPE_FLAG;
        $Inst_ta = $request->ta_id;
        $Trade_License = $request->TRADE_LICENSE;
        $Inst_Address = $request->ADDRESS;
        $TIN_No = $request->TIN_NO;
        $BO_ID = $request->BO_ID;
        $Post_Code = $request->POST_CODE;
        $Inst_Telephone = $request->TEL;
        $Inst_Email = $request->EMAIL;
        $Inst_Fax = $request->FAX;
        $Inst_Account_Name = $request->ACCOUNT_NAME;
        $Inst_Account_No = $request->ACCOUNT_NO;
        $Inst_Bank_Name = $request->BANK_NAME;
        $Inst_Routing = $request->ROUTING_NO;
        $Inst_Branch = $request->BRANCH;
        $Inst_Dividend = $request->DIVIDENT_OPT;
        $pwd = rand(10000,100000);
        $Password = md5($pwd);

        $Auth_Gender = $request->GENDER;
        $Auth_Name = $request->NAME;
        $Auth_Des = $request->DESIG;
        $Auth_Address = $request->A_ADDRESS;
        $Auth_Nid = $request->NATIONAL_ID;
        $Auth_Dob = $request->BIRTHDAY;
        $Auth_Cont = $request->MOBILE_NO;

        $inst_ta = str_pad($request->ta_code, 2, '0', STR_PAD_LEFT);
        $inst = DB::table('inst_app')->count();
        $inst_id = $inst + 1;
        $inst_reg_id = str_pad($inst_id, 7, '0', STR_PAD_LEFT);

        $inv_inst = 2;

        $inst_reg_no =  $inv_inst.'00'.$inst_ta.$inst_reg_id;

        $dirname = "./investor/".$inst_reg_no;
        mkdir($dirname);

        $Auth_Photo = $request->AUTH_IMG_PATH;
        if(!empty($Auth_Photo)){
            $Auth_Org_Name = $Auth_Photo->getClientOriginalExtension();
            $Auth_Photo_Name = $inst_reg_no.$Auth_Name.'.'.$Auth_Org_Name;
            $Auth_Path = 'investor/'.$inst_reg_no.'/images/';
            $Auth_Photo->move($Auth_Path,$Auth_Photo_Name);
        }else{
            $Auth_Photo_Name = NULL;
        }

        $Sign_Photo = $request->AUTH_SIGNATURE;
        if(!empty($Sign_Photo)){
            $Sign_Org_Name = $Sign_Photo->getClientOriginalExtension();
            $Sign_Photo_Name = $inst_reg_no.$Auth_Name.'_sign.'.$Sign_Org_Name;
            $Sign_Path = 'investor/'.$inst_reg_no.'/images/';
            $Sign_Photo->move($Sign_Path,$Sign_Photo_Name);
        }else{
            $Sign_Photo_Name = NULL;
        }

        $inst_data=array(
            'REGISTRATION_NO'=>$inst_reg_no,
            'TA_REG_NO'=>$Inst_ta,
            'INSTNAME'=>$Inst_Name,
            'INST_TYPE_FLAG'=>$Inst_Type,
            'TRADE_LICENSE'=>$Trade_License,
            'ADDRESS'=>$Inst_Address,
            'TIN_NO'=>$TIN_No,
            'BO_ID'=>$BO_ID,
            'POST_CODE'=>$Post_Code,
            'TEL'=>$Inst_Telephone,
            'EMAIL'=>$Inst_Email,
            'FAX'=>$Inst_Fax,
            'ACCOUNT_NAME'=>$Inst_Account_Name,
            'ACCOUNT_NO'=>$Inst_Account_No,
            'BANK_NAME'=>$Inst_Bank_Name,
            'ROUTING_NO'=>$Inst_Routing,
            'BRANCH'=>$Inst_Branch,
            'DIVIDENT_OPT'=>$Inst_Dividend,
            'PASSWORD'=>$Password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        $auth_data=array(
            'INSTAPP_ID'=>$inst_reg_no,
            'AUTH_GENDER'=>$Auth_Gender,
            'AUTH_NAME'=>$Auth_Name,
            'AUTH_DESIG'=>$Auth_Des,
            'AUTH_ADDRESS'=>$Auth_Address,
            'AUTH_NATIONAL_ID'=>$Auth_Nid,
            'AUTH_BIRTHDAY'=>$Auth_Dob,
            'AUTH_MOBILE_NO'=>$Auth_Cont,
            'AUTH_SIGNATURE'=>$Sign_Photo_Name,
            'AUTH_IMG_PATH'=>$Auth_Photo_Name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        

        DB::table('inst_app')->insert($inst_data);
        DB::table('auth_per')->insert($auth_data);

        $mail_data = array(
            'reg_no'=>$inst_reg_no,
            'name'=>$Inst_Name,
            'address'=>$Inst_Address,
            'trdl'=>$Trade_License,
            'phn'=>$Inst_Telephone,
            'pass'=>$pwd
        );
        $emails = [$Inst_Email,'amcuf@capmbd.com'];

        try{
            Mail::send('mail.inv_reg_ins', $mail_data, function($message) use ($emails, $inst_reg_no){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Confirmation of Institution Registration No is: '.$inst_reg_no);
            });
        }

        catch(\Exception $e){
            return redirect('/ta/inst')->with('message','Investor save successfully done But Mail Not Sent. Please Contact With Your Contact Person');
        }

        return redirect('/ta/inst')->with('message','Investor save successfully done');
    }

    public function ta_buy(){

        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }
        $portfolios = DB::table('assign_salescenter')
                      ->join('portfolio_registration', 'assign_salescenter.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                      ->where('assign_salescenter.SC_ID', $taid)
                      ->get();
        
        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();

        return view('BackEnd.pages.ta.buy', ['portfolios' => $portfolios, 'regno' => $regno]);
    }

    public function get_applicant($id, $fundid){

        $id_first = substr($id, 0, -11);

        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                     ->join('funds', 'principal_applicant.REGISTRATION_NO', '=', 'funds.REGISTRATION_NO')
                     ->select('principal_applicant.NAME','principal_applicant.BANK_NAME','principal_applicant.ACCOUNT_NO', 'principal_applicant.EMAIL','funds.TOTAL_UNITS', 'funds.SELL_PADDING_UNIT', 'funds.BLOCK_UNITS')
                     ->where('principal_applicant.REGISTRATION_NO',$id)
                     ->where('funds.FUND_ID',$fundid)
                     ->get();
        }
        elseif($id_first == 2){
            $applicant = DB::table('inst_app')
                     ->join('funds', 'inst_app.REGISTRATION_NO', '=', 'funds.REGISTRATION_NO')
                     ->select('inst_app.INSTNAME as NAME','inst_app.BANK_NAME','inst_app.ACCOUNT_NO', 'inst_app.EMAIL','funds.TOTAL_UNITS', 'funds.SELL_PADDING_UNIT', 'funds.BLOCK_UNITS')
                     ->where('inst_app.REGISTRATION_NO',$id)
                     ->where('funds.FUND_ID',$fundid)
                     ->get();
        }
        else{
            echo "Not Found";
        }

        return response()->json($applicant);
        
    }

    public function get_applicant_info($id){

        $id_first = substr($id, 0, -11);

        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                     ->select('NAME','BANK_NAME','ACCOUNT_NO','EMAIL')
                     ->where('REGISTRATION_NO',$id)
                     ->get();
        }
        elseif($id_first == 2){
            $applicant = DB::table('inst_app')
                     ->select('INSTNAME as NAME','BANK_NAME','ACCOUNT_NO','EMAIL')
                     ->where('REGISTRATION_NO',$id)
                     ->get();
        }
        else{
            echo "Not Found";
        }

        return response()->json($applicant);
        
    }

    public function ta_sell(){

        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }
        $portfolios = DB::table('assign_salescenter')
                      ->join('portfolio_registration', 'assign_salescenter.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                      ->where('assign_salescenter.SC_ID', $taid)
                      ->get();

        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();

        return view('BackEnd.pages.ta.sell', ['portfolios' => $portfolios, 'regno' => $regno]);
    }

    public function ta_pass_reset(Request $request){

        $user_id = $request->user_id;
        $old_pass = md5($request->old_password);
        $new_pass = md5($request->new_password);

        $result = DB::table('salescenter')
                  ->where('SCID', '=', $user_id)
                  ->where('password', '=', $old_pass )
                  ->update([
                        'password' => $new_pass
                  ]);

        if($result == 1){
            return redirect('/ta-logout');
        }
        else{
            return redirect('/ta')->with('messagend','Reset Not Done!!! Please Try Again');
        } 
    }

    public function getTaBuyRate($f_id){

        $result = DB::table('price_rate')
                  ->select('BUY_RATE')
                  ->where('PRO_REG_ID',$f_id)
                  ->get();

        return response()->json($result);
    }

    public function getTaSellRate($f_id){

        $result = DB::table('price_rate')
                  ->select('SELL_RATE')
                  ->where('PRO_REG_ID',$f_id)
                  ->get();

        return response()->json($result);
    }

    public function ta_buy_store(Request $request){
        $SPONSOR_ID = $request->fund;
        $UNIT = $request->quantity;
        $RATE = $request->BUYRATE;
        $TOTAL_AMOUNT = $request->TOTALAMOUNT;
        $PURCHASE_PERSON_ID = $request->person_id;
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

        $pdf = PDF::loadView('BackEnd.pages.reports.buy_pdf', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf' );

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

        $emails = [$appl_mail,'amcuf@capmbd.com'];
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
            return view('BackEnd.pages.reports.buy_print', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'));
        }

        return view('BackEnd.pages.reports.buy_print', compact('fund_name', 'inv_info', 'data','existing', 'total_ex', 'fund_bank_info', 'qr_code_name'));
    }
    
    
    
/* Motiur Start Sell Process */

public function ta_sell_store(Request $request){
        $SPONSOR_ID = $request->fund;
        $UNIT = $request->quantity;
        $RATE = $request->SELLRATE;
        $TOTAL_AMOUNT = $request->TOTALAMOUNT;
        $SALES_PERSON_ID = $request->person_id;
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

        $existing_unit = $existing->TOTAL_UNITS - $UNIT;

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

        $emails = [$appl_mail,'amcuf@capmbd.com'];
        $custmail = [$cust_mail,'amc_custodian@capmbd.com'];

        try{
            Mail::send('mail.sell_email_inv', $mail_data, function($message) use ($emails, $uploadPath, $dsignfile, $apl_name, $REGISTRATION_NO){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Surrender Acknowledgement '.$REGISTRATION_NO.' ,Applicant name-'.$apl_name);
                $message->attach($uploadPath.$dsignfile.'.pdf');
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
            return view('BackEnd.pages.reports.sell_print', compact('fund_name', 'inv_info', 'data','existing','existing_unit', 'totalunit', 'qr_code_name'));
        }
            
        return view('BackEnd.pages.reports.sell_print', compact('fund_name', 'inv_info', 'data','existing','existing_unit', 'totalunit', 'qr_code_name'));
    }

   public function app_list_view(){
        $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }
		
		$individuals = DB::table('principal_applicant')
                      ->where('TA_REG_NO',$taid)
                      ->get();

        $instutionals = DB::table('inst_app')
                     ->where('TA_REG_NO',$taid)
                     ->get();

       return view('BackEnd.pages.ta.applicant_list', ['individuals' => $individuals, 'instutionals' => $instutionals]);
    }
	
	public function sub_list_view(){
       $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }

        $ta = DB::table('salescenter')
             ->select('SCID')
             ->where('SALESCENTER_ID', '=', $taid)
             ->first();
        $ta_name = $ta->SCID;

        $approve = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.REGISTRATION_NO','unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.PURCHASE_PERSON_ID', '=', $ta_name)
                   ->where('unit_purchase.SC_CNF_FLAG', '=', 'A')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        $disapprove = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.REGISTRATION_NO','unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.PURCHASE_PERSON_ID', '=', $ta_name)
                   ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '=', 'DA')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        $panding = DB::table('unit_purchase')
                   ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_purchase.REGISTRATION_NO','unit_purchase.UNIT','unit_purchase.RATE','unit_purchase.TOTAL_AMOUNT','unit_purchase.PURCHASE_NO','unit_purchase.PURCHASE_PERSON_ID','unit_purchase.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_purchase.PURCHASE_PERSON_ID', '=', $ta_name)
                   ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                   ->where('unit_purchase.SC_CNF_FLAG', '=', 'N')
                   ->orderBy('unit_purchase.created_at', 'desc')
                   ->get();

        return view('BackEnd.pages.ta.subscription_list', ['approve' => $approve, 'disapprove' => $disapprove, 'panding' => $panding]);
    }

    public function sur_list_view(){
       $taid=Session::get('ta_id');
        if($taid == null){
            return redirect('http://capmbd.com');
        }

        $ta = DB::table('salescenter')
             ->select('SCID')
             ->where('SALESCENTER_ID', '=', $taid)
             ->first();
        $ta_name = $ta->SCID;

        $approve = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.REGISTRATION_NO','unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.SALES_PERSON_ID', '=', $ta_name)
                   ->where('unit_sell.PAY_CLR_FLAG', '=', 'A')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();

        $disapprove = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.REGISTRATION_NO','unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.SALES_PERSON_ID', '=', $ta_name)
                   ->where('unit_sell.DP_TRAN_CONF_FLAG', '=', 'DA')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();

        $panding = DB::table('unit_sell')
                   ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                   ->select('unit_sell.REGISTRATION_NO','unit_sell.UNIT','unit_sell.RATE','unit_sell.TOTAL_AMOUNT','unit_sell.SALE_NO','unit_sell.SALES_PERSON_ID','unit_sell.created_at','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                   ->where('unit_sell.SALES_PERSON_ID', '=', $ta_name)
                   ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                   ->where('unit_sell.PAY_CLR_FLAG', '=', 'N')
                   ->orderBy('unit_sell.created_at', 'desc')
                   ->get();

        return view('BackEnd.pages.ta.surrender_list', ['approve' => $approve, 'disapprove' => $disapprove, 'panding' => $panding]);
    }
	
	 public function indv_excel_import(Request $request){
	     $excel = new PHPExcel;
         $spreadsheet = $request->spreadsheet;
        if(!empty($spreadsheet)){
            $inputFile = $spreadsheet->getClientOriginalName();
			
            $extension = strtoupper(pathinfo($inputFile, PATHINFO_EXTENSION));
              if($extension == 'XLSX' || $extension == 'ODS') {
                            // Read spreadsheeet workbook
                            try {
                                $inputFile = $_FILES['spreadsheet']['tmp_name'];
                                $inputFileType = PHPExcel_IOFactory::identify($inputFile);
                                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                                $objPHPExcel = $objReader->load($inputFile);
								
                            } catch(Exception $e) {
                                die($e->getMessage());
                            };
							
							/* Start Principal Applicant's Details */									

							$app_name=$objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
							$gender=$objPHPExcel->getActiveSheet()->getCell('E18')->getValue();
							$f_name=$objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
							$E19=$objPHPExcel->getActiveSheet()->getCell('E19')->getValue();
							$Birth_Date = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($E19));
							$m_name=$objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
							$contact=$objPHPExcel->getActiveSheet()->getCell('E20')->getValue();
							$present_address=$objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
							$email=$objPHPExcel->getActiveSheet()->getCell('E21')->getValue();
							$permanent_address=$objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
							$nationality=$objPHPExcel->getActiveSheet()->getCell('E22')->getValue();
							$NID_PID=$objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
							$BO_ID=$objPHPExcel->getActiveSheet()->getCell('E23')->getValue();
							$city=$objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
							$post_code=$objPHPExcel->getActiveSheet()->getCell('E24')->getValue();
							$District=$objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
							$Occupation=$objPHPExcel->getActiveSheet()->getCell('E25')->getValue();
							$Country_of_Resi=$objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
							$e_tin=$objPHPExcel->getActiveSheet()->getCell('E26')->getValue();
							/* End Principal Applicant's Details */	
							
							/* Start Bank Details */
							$Account_Name=$objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
							$bank_ac_no=$objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
							$rounting_no=$objPHPExcel->getActiveSheet()->getCell('E31')->getValue();
							$bank_name=$objPHPExcel->getActiveSheet()->getCell('B32')->getValue();
							$branch_name=$objPHPExcel->getActiveSheet()->getCell('E32')->getValue();
							$Dividend_type=$objPHPExcel->getActiveSheet()->getCell('B36')->getValue();
                           /* End Bank Details */

						   
                          /* Start Second Applicant's Details(optional) */
						  
                            $s_app_name=$objPHPExcel->getActiveSheet()->getCell('B44')->getValue();
							$s_gender=$objPHPExcel->getActiveSheet()->getCell('E44')->getValue();
							$s_f_name=$objPHPExcel->getActiveSheet()->getCell('B45')->getValue();
							$s_phone_no=$objPHPExcel->getActiveSheet()->getCell('E45')->getValue();
							$s_m_name=$objPHPExcel->getActiveSheet()->getCell('B46')->getValue();
							$E46=$objPHPExcel->getActiveSheet()->getCell('E46')->getValue();
					        $s_date_birth = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($E46));
							$s_present_address=$objPHPExcel->getActiveSheet()->getCell('B47')->getValue();
							$s_permanent_address=$objPHPExcel->getActiveSheet()->getCell('B48')->getValue();
							$s_nationality=$objPHPExcel->getActiveSheet()->getCell('E48')->getValue();
							$s_nid_pid=$objPHPExcel->getActiveSheet()->getCell('B49')->getValue();
							$s_occupation=$objPHPExcel->getActiveSheet()->getCell('E49')->getValue();
                        						  
                         /* End Second Applicant's Details(optional) */


                         /* Start Nominee Details */
						 
						    $nominee_name=$objPHPExcel->getActiveSheet()->getCell('B53')->getValue();
							$nominee_gender=$objPHPExcel->getActiveSheet()->getCell('E53')->getValue();
							$nominee_fname=$objPHPExcel->getActiveSheet()->getCell('B54')->getValue();
							$nominee_contact=$objPHPExcel->getActiveSheet()->getCell('E54')->getValue();
							$nominee_mname=$objPHPExcel->getActiveSheet()->getCell('B55')->getValue();
							$E55=$objPHPExcel->getActiveSheet()->getCell('E55')->getValue();
							$nominee_date_birth = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($E55));
							$nominee_relation=$objPHPExcel->getActiveSheet()->getCell('B56')->getValue();
							$nominee_present_address=$objPHPExcel->getActiveSheet()->getCell('B57')->getValue();
							$nominee_permanent_address=$objPHPExcel->getActiveSheet()->getCell('B58')->getValue();
							$Issuing_Country =$objPHPExcel->getActiveSheet()->getCell('E58')->getValue();
							$nominee_nid_pid=$objPHPExcel->getActiveSheet()->getCell('B59')->getValue();
							$nominee_occupation=$objPHPExcel->getActiveSheet()->getCell('E59')->getValue();
							
							
							$country_code = DB::table('applicant_country')->where('APPLICANT_COUNTRY_NAME', $Country_of_Resi)->first();
							$c_code=$country_code->APPLICANT_COUNTRY_CODE;
							$issuing_country_code = DB::table('applicant_country')->where('APPLICANT_COUNTRY_NAME', $Issuing_Country)->first();
							$Issuing_C_code=$issuing_country_code->APPLICANT_COUNTRY_CODE;

                         /* End Nominee Details */						 
							
							
			$data=array(
            'app_name'=>$app_name,
			'gender'=>$gender,
            'Birth_Date'=>$Birth_Date,
            'f_name'=>$f_name,
            'contact'=>$contact,
            'm_name'=>$m_name,
            'email'=>$email,
            'present_address'=>$present_address,
            'nationality'=>$nationality,
            'permanent_address'=>$permanent_address,
            'NID_PID'=>$NID_PID,
			'BO_ID'=>$BO_ID,
            'city'=>$city,
            'post_code'=>$post_code,
            'District'=>$District,
            'Occupation'=>$Occupation,
			'Country_of_Resi'=>$Country_of_Resi,
			'C_code'=>$c_code,
			'e_tin'=>$e_tin,
			'Account_Name'=>$Account_Name,
			'bank_ac_no'=>$bank_ac_no,
			'rounting_no'=>$rounting_no,
			'bank_name'=>$bank_name,
			'branch_name'=>$branch_name,
			'Dividend_type'=>$Dividend_type,
			's_app_name'=>$s_app_name,
			's_gender'=>$s_gender,
			's_f_name'=>$s_f_name,
			's_phone_no'=>$s_phone_no,
			's_m_name'=>$s_m_name,
			's_date_birth'=>$s_m_name,
			's_present_address'=>$s_present_address,
			's_permanent_address'=>$s_permanent_address,
			's_nationality'=>$s_nationality,
			's_nid_pid'=>$s_nid_pid,
			's_occupation'=>$s_occupation,
			'nominee_name'=>$nominee_name,
			'nominee_gender'=>$nominee_gender,
			'nominee_contact'=>$nominee_contact,
			'nominee_fname'=>$nominee_fname,
			'nominee_mname'=>$nominee_mname,
			'nominee_date_birth'=>$nominee_date_birth,
			'nominee_relation'=>$nominee_relation,
			'nominee_present_address'=>$nominee_present_address,
			'Issuing_Country'=>$Issuing_Country,
			'nominee_permanent_address'=>$Issuing_Country,
			'Issuing_C_code'=>$Issuing_C_code,
			'nominee_occupation'=>$nominee_occupation,
			'nominee_nid_pid'=>$nominee_nid_pid,
        );
							
        }
	 }

	 $countries = DB::table('applicant_country')->get();
     return view('BackEnd.pages.ta.indv_reg', ['countries' => $countries, 'data' => $data]);
	 }
	 
	 
	 
	 public function inst_excel_import(Request $request){
	     $excel = new PHPExcel;
         $spreadsheet = $request->spreadsheet;
        if(!empty($spreadsheet)){
            $inputFile = $spreadsheet->getClientOriginalName();
			
            $extension = strtoupper(pathinfo($inputFile, PATHINFO_EXTENSION));
              if($extension == 'XLSX' || $extension == 'ODS' || $extension == 'XLSM') {
                            // Read spreadsheeet workbook
                            try {
                                $inputFile = $_FILES['spreadsheet']['tmp_name'];
                                $inputFileType = PHPExcel_IOFactory::identify($inputFile);
                                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                                $objPHPExcel = $objReader->load($inputFile);
								
                            } catch(Exception $e) {
                                die($e->getMessage());
                            };
							/* Start Principal Applicant's Details */									

							$app_inst_name=$objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
							$Types_of_inst=$objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
							$Trade_License=$objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
							$Mailing_Address=$objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
							$Telephone_no=$objPHPExcel->getActiveSheet()->getCell('E22')->getValue();
							$TIN_No=$objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
							$email=$objPHPExcel->getActiveSheet()->getCell('E23')->getValue();
							$BO_ID=$objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
							$Fax=$objPHPExcel->getActiveSheet()->getCell('E24')->getValue();
							$post_code=$objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
						
							/* End Principal Applicant's Details */	
							
							
							
							/* Start Bank Details */
							$Account_Name=$objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
							$bank_ac_no=$objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
							$rounting_no=$objPHPExcel->getActiveSheet()->getCell('E30')->getValue();
							$bank_name=$objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
							$branch_name=$objPHPExcel->getActiveSheet()->getCell('E31')->getValue();
							$Dividend_type=$objPHPExcel->getActiveSheet()->getCell('B35')->getValue();
                           /* End Bank Details */



                         /* Start Authorized Person/POA Details-1 */
						 
						    $auth_name=$objPHPExcel->getActiveSheet()->getCell('B39')->getValue();
							$auth_gender=$objPHPExcel->getActiveSheet()->getCell('E39')->getValue();
							$Designation=$objPHPExcel->getActiveSheet()->getCell('B40')->getValue();
							$E41=$objPHPExcel->getActiveSheet()->getCell('E41')->getValue();
							$date_birth = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($E41));
							$auth_mailing_address=$objPHPExcel->getActiveSheet()->getCell('B42')->getValue();
							$nid_pid =$objPHPExcel->getActiveSheet()->getCell('B43')->getValue();
							$contact_no=$objPHPExcel->getActiveSheet()->getCell('E43')->getValue();
							

                         /* End Authorized Person/POA Details-1 */					
							
			$data=array(
            'app_inst_name'=>$app_inst_name,
			'Types_of_inst'=>$Types_of_inst,
            'Trade_License'=>$Trade_License,
            'Mailing_Address'=>$Mailing_Address,
            'Telephone_no'=>$Telephone_no,
            'TIN_No'=>$TIN_No,
            'email'=>$email,
			'BO_ID'=>$BO_ID,
            'Fax'=>$Fax,
            'post_code'=>$post_code,
			'Account_Name'=>$Account_Name,
			'bank_ac_no'=>$bank_ac_no,
			'rounting_no'=>$rounting_no,
			'bank_name'=>$bank_name,
			'branch_name'=>$branch_name,
			'Dividend_type'=>$Dividend_type,
			'auth_name'=>$auth_name,
			'auth_gender'=>$auth_gender,
			'Designation'=>$Designation,
			'date_birth'=>$date_birth,
			'auth_mailing_address'=>$auth_mailing_address,
			'contact_no'=>$contact_no,
			'nid_pid'=>$nid_pid,
        );
							
        }
	 }

     return view('BackEnd.pages.ta.inst_reg', ['data' => $data]);
	 }
	 
}