<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use Mail;
use QRCode;

class SubscriptionRedumptionController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isExecutive']);
    }

    public function subred(){
    	return view('BackEnd.pages.subred.sub_red');
    }

    public function sa_add(){

    	return view('BackEnd.pages.subred.sa_reg');
    }

    public function sa_store(Request $request){

    	$SALESAGENT = $request->SALESAGENT;
    	$SA_TYPE = $request->SA_TYPE;
    	$SALESAGENT_CODE = $request->SALESAGENT_CODE;
    	$ADDRESS = $request->ADDRESS;
    	$CONTACT_PERSON = $request->CONTACT_PERSON;
    	$CP_DESIG = $request->CP_DESIG;
    	$TEL = $request->TEL;
    	$MOBILE = $request->MOBILE;
    	$FAX = $request->FAX;
    	$email = $request->email;

    	$data=array(
    		'SALESAGENT'=>$SALESAGENT,
    		'SA_TYPE'=>$SA_TYPE,
    		'SALESAGENT_CODE'=>$SALESAGENT_CODE,
    		'ADDRESS'=>$ADDRESS,
    		'CONTACT_PERSON'=>$CONTACT_PERSON,
    		'CP_DESIG'=>$CP_DESIG,
    		'TEL'=>$TEL,
    		'MOBILE'=>$MOBILE,
    		'FAX'=>$FAX,
    		'email'=>$email,
    		'created_at'=>Carbon::now(),
    		'updated_at'=>Carbon::now()
    	);

    	DB::table('salesagent')->insert($data);

    	return redirect('/subscription-redumption/s-a-registration')->with('message','Sales Agent Registration successfully done');
    }

    public function sa_view(){

    	$salesagents = DB::table('salesagent')->get();
    	return view('BackEnd.pages.subred.sa_view', ['salesagents' => $salesagents]);
    }

    public function sa_edit($SALESAGENT_ID){

        $SALESAGENT_ID = decrypt($SALESAGENT_ID);

        $data = DB::table('salesagent')
                ->where('SALESAGENT_ID', '=', $SALESAGENT_ID)
                ->first();

        return view('BackEnd.pages.subred.sa_update', ['data' => $data]);
    }

    public function sa_update(Request $request){

        $id = $request->said;
        $SALESAGENT = $request->SALESAGENT;
        $SA_TYPE = $request->SA_TYPE;
        $SALESAGENT_CODE = $request->SALESAGENT_CODE;
        $ADDRESS = $request->ADDRESS;
        $CONTACT_PERSON = $request->CONTACT_PERSON;
        $CP_DESIG = $request->CP_DESIG;
        $TEL = $request->TEL;
        $MOBILE = $request->MOBILE;
        $FAX = $request->FAX;
        $email = $request->email;
        $updated_at = Carbon::now();

        DB::update('update salesagent set SALESAGENT = ?, SA_TYPE = ?, SALESAGENT_CODE = ?, ADDRESS = ?, CONTACT_PERSON = ?, CP_DESIG = ?, TEL = ?, MOBILE = ?, FAX = ?, email = ?, updated_at = ? where SALESAGENT_ID = ?',[$SALESAGENT, $SA_TYPE, $SALESAGENT_CODE, $ADDRESS, $CONTACT_PERSON, $CP_DESIG, $TEL, $MOBILE, $FAX, $email, $updated_at, $id]);

        return redirect('/subscription-redumption/s-a-registration/view')->with('message','Sales Agent Update successfully done');
    }

    public function sc_add(){

        $countries = DB::table('applicant_country')->get();
        $districts = DB::table('district')->get();
        $salesagents = DB::table('salesagent')->get();
        return view('BackEnd.pages.subred.sc_reg', ['countries' => $countries, 'districts' => $districts, 'salesagents' => $salesagents]);
    }

    public function get_currency($id){

        $currency = DB::table('currency_type')
                     ->where('COUNTRY_ID',$id)
                     ->get();
        return response()->json($currency);
        
    }

    public function get_area($id){

        $currency = DB::table('agent_area')
                     ->where('DISTRICT_ID',$id)
                     ->get();
        return response()->json($currency);
        
    }

    public function sc_store(Request $request){

        $said = $request->SALESAGENT_ID;
        $areaid = $request->AGENT_AREA_ID;

        $sa_code = DB::table('salesagent')
                ->select('SALESAGENT_CODE')
                ->where('SALESAGENT_ID', '=', $said)
                ->first();
        $code = str_pad($sa_code->SALESAGENT_CODE, 2, '0', STR_PAD_LEFT);

        $area_code = DB::table('agent_area')
                ->select('AREA_CODE_ALPHA')
                ->where('AGENT_AREA_ID', '=', $areaid)
                ->first();
        $ac = $area_code->AREA_CODE_ALPHA;

        $area = DB::table('salescenter')
                   ->where('AGENT_AREA_ID', '=', $areaid)
                   ->where('SALESAGENT_ID', '=', $said)
                    ->get();
        $c = count($area);
        $count = $c + 1;
        $count_string = str_pad($count, 3, '0', STR_PAD_LEFT);

        $sc_id = $code.$ac.$count_string;

        $this->saveSC($request, $sc_id);
        return redirect('/subscription-redumption/s-c-registration')->with('message','Sales Center Registration successfully done');
    }

    protected function saveSC($request, $sc_id){

        $APPLICANT_COUNTRY_ID = $request->APPLICANT_COUNTRY_ID;
        $CURRENCY_TYPE_ID = $request->CURRENCY_TYPE_ID;
        $SALESAGENT_ID = $request->SALESAGENT_ID;
        $DISTRICT_ID = $request->DISTRICT_ID;
        $AGENT_AREA_ID = $request->AGENT_AREA_ID;
        $SCID = $sc_id;
        $SC_NAME = $request->SC_NAME;
        $SC_PHONE = $request->SC_PHONE;
        $SC_EMAIL = $request->SC_EMAIL;
        $pwd = rand(10000,100000);
        $password = md5($pwd);

        $data=array(
            'APPLICANT_COUNTRY_ID'=>$APPLICANT_COUNTRY_ID,
            'CURRENCY_TYPE_ID'=>$CURRENCY_TYPE_ID,
            'SALESAGENT_ID'=>$SALESAGENT_ID,
            'DISTRICT_ID'=>$DISTRICT_ID,
            'AGENT_AREA_ID'=>$AGENT_AREA_ID,
            'SCID'=>$SCID,
            'SC_NAME'=>$SC_NAME,
            'SC_PHONE'=>$SC_PHONE,
            'SC_EMAIL'=>$SC_EMAIL,
            'password'=>$password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('salescenter')->insert($data);

        $emails = [$SC_EMAIL];

        Mail::send([], [], function($message) use ($emails, $SC_NAME, $SCID, $pwd){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('TA Registration Confirmation For ID: '.$SCID);
                $message->setBody('<b>Welcome!!! '.$SC_NAME.'</b>, You are registred as a TA in <b>CAPM Fund Management</b> Software.<br>Your User ID: <b>'.$SCID.'</b> & Password: <b>'.$pwd.'</b>.<br>Visit: http://capmfunds.com/ this link, Use the User ID and Password. After first login, you must reset your password.', 'text/html');
        });

    }

    public function sc_view(){

        $salescenters = DB::table('salescenter')
                ->join('salesagent', 'salescenter.SALESAGENT_ID', '=', 'salesagent.SALESAGENT_ID')
                ->join('applicant_country', 'salescenter.APPLICANT_COUNTRY_ID', '=', 'applicant_country.APPLICANT_COUNTRY_ID')
                ->join('currency_type', 'salescenter.CURRENCY_TYPE_ID', '=', 'currency_type.CURRENCY_TYPE_ID')
                ->join('district', 'salescenter.DISTRICT_ID', '=', 'district.DISTRICT_ID')
                ->join('agent_area', 'salescenter.AGENT_AREA_ID', '=', 'agent_area.AGENT_AREA_ID')
                ->get();
        return view('BackEnd.pages.subred.sc_view', ['salescenters' => $salescenters]);
    }

    public function inv_view(){
        $individuals = DB::table('principal_applicant')
                     ->join('salescenter', 'principal_applicant.TA_REG_NO', '=', 'salescenter.SALESCENTER_ID')
                     ->get();

        $instutionals = DB::table('inst_app')
                     ->join('salescenter', 'inst_app.TA_REG_NO', '=', 'salescenter.SALESCENTER_ID')
                     ->get();

        return view('BackEnd.pages.subred.investors', ['individuals' => $individuals, 'instutionals' => $instutionals]);
    }

    public function inv_pro_edit($PRINCIPAL_APPLICANT_ID){

        $PRINCIPAL_APPLICANT_ID = decrypt($PRINCIPAL_APPLICANT_ID);

        $id = DB::table('principal_applicant')
                ->select('REGISTRATION_NO')
                ->where('PRINCIPAL_APPLICANT_ID', '=', $PRINCIPAL_APPLICANT_ID)
                ->first();
        $rid = substr($id->REGISTRATION_NO, 0, -11);

        if($rid == '1'){
            $data = DB::table('principal_applicant')
                ->join('nominee_info', 'principal_applicant.REGISTRATION_NO', 'nominee_info.REGISTRATION_NO')
                ->join('applicant_country', 'principal_applicant.COUNTRY', '=', 'applicant_country.APPLICANT_COUNTRY_CODE')
                ->where('principal_applicant.PRINCIPAL_APPLICANT_ID', '=', $PRINCIPAL_APPLICANT_ID)
                ->first();
        }else{
           $data = DB::table('principal_applicant')
                ->join('joint_applicant', 'principal_applicant.REGISTRATION_NO', '=', 'joint_applicant.REGISTRATION_NO')
                ->join('nominee_info', 'principal_applicant.REGISTRATION_NO', 'nominee_info.REGISTRATION_NO')
                ->join('applicant_country', 'principal_applicant.COUNTRY', '=', 'applicant_country.APPLICANT_COUNTRY_CODE')
                ->where('principal_applicant.PRINCIPAL_APPLICANT_ID', '=', $PRINCIPAL_APPLICANT_ID)
                ->first();
        }
        $countries = DB::table('applicant_country')->get();
        return view('BackEnd.pages.subred.investors_update', ['data' => $data, 'countries' => $countries]); 
    }

    public function inv_reginfo_update(Request $request){
        $id = $request->rid;

        $Appl_Gender = $request->GENDER;
        $Appl_Name = $request->NAME;
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

        $Appl_Photo = $request->IMAGE;
        if(!empty($Appl_Photo)){
            $Apl_Ext = $Appl_Photo->getClientOriginalExtension();
            $Appl_Photo_Name = $id.'user_photo.'.$Apl_Ext;
            $Appl_Path = 'investor/'.$id.'/images/';
            $Appl_Photo->move($Appl_Path,$Appl_Photo_Name);
        }else{
            $data = DB::table('principal_applicant')
                    ->select('IMAGE')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Appl_Photo_Name = $data->IMAGE;
        }

        $Appl_Sign = $request->APP_SIGN;
        if(!empty($Appl_Sign)){
            $Appl_Org_Sign = $Appl_Sign->getClientOriginalExtension();
            $Appl_Sign_Name = $id.'user_sign.'.$Appl_Org_Sign;
            $Appl_Path = 'investor/'.$id.'/images/';
            $Appl_Sign->move($Appl_Path,$Appl_Sign_Name);
        }else{
            $data = DB::table('principal_applicant')
                    ->select('APP_SIGN')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Appl_Sign_Name = $data->APP_SIGN;
        }

        $Appl_Nid = $request->NID_IMG;
        if(!empty($Appl_Nid)){
            $Appl_Org_Nid = $Appl_Nid->getClientOriginalExtension();
            $Appl_Nid_Name =  $id.'user_nid.'.$Appl_Org_Nid;
            $Appl_Path = 'investor/'.$id.'/images/';
            $Appl_Nid->move($Appl_Path,$Appl_Nid_Name);
        }else{
            $data = DB::table('principal_applicant')
                    ->select('NID_IMG')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Appl_Nid_Name = $data->NID_IMG;
        }

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

        $Second_Photo = $request->JOINT_IMAGE;
        if(!empty($Second_Photo)){
            $Second_Org_Name = $Second_Photo->getClientOriginalExtension();
            $Second_Photo_Name = $id.'joint_user.'.$Second_Org_Name;
            $Second_Path = 'investor/'.$id.'/images/';
            $Second_Photo->move($Second_Path,$Second_Photo_Name);
        }else{
            $data = DB::table('joint_applicant')
                    ->select('JOINT_IMAGE')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
                    if($data==null){
                       $Second_Photo_Name = null; 
                    }else{
                        $Second_Photo_Name = $data->JOINT_IMAGE;
                    }
        }

        $Second_Sign = $request->JOINT_APP_SIGN;
        if(!empty($Second_Sign)){
            $Second_Org_Sign = $Second_Sign->getClientOriginalExtension();
            $Second_Sign_Name = $id.'joint_user_sign.'.$Second_Org_Sign;
            $Second_Path = 'investor/'.$id.'/images/';
            $Second_Sign->move($Second_Path,$Second_Sign_Name);
        }else{
            $data = DB::table('joint_applicant')
                    ->select('JOINT_APP_SIGN')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
                    if($data==null){
                       $Second_Sign_Name = null; 
                    }else{
                        $Second_Sign_Name = $data->JOINT_APP_SIGN;
                    }
        }

        $Second_Nid = $request->JOINT_NID_IMG;
        if(!empty($Second_Nid)){
            $Second_Org_Nid = $Second_Nid->getClientOriginalExtension();
            $Second_Nid_Name = $id.'joint_user_nid.'.$Second_Org_Nid;
            $Second_Path = 'investor/'.$id.'/images/';
            $Second_Nid->move($Second_Path,$Second_Nid_Name);
        }else{
            $data = DB::table('joint_applicant')
                    ->select('JOINT_NID_IMG')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
                    if($data==null){
                       $Second_Nid_Name = null; 
                    }else{
                        $Second_Nid_Name = $data->JOINT_NID_IMG;
                    }
        }

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

        $Nom_Photo = $request->NOM_IMAGE;
        if(!empty($Nom_Photo)){
            $Nom_Org_Name = $Nom_Photo->getClientOriginalExtension();
            $Nom_Photo_Name = $id.'nom.'.$Nom_Org_Name;
            $Nom_Path = 'investor/'.$id.'/images/';
            $Nom_Photo->move($Nom_Path,$Nom_Photo_Name);
        }else{
            $data = DB::table('nominee_info')
                    ->select('NOM_IMAGE')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Nom_Photo_Name = $data->NOM_IMAGE;
        }

        $Nom_Sign = $request->NOM_APP_SIGN;
        if(!empty($Nom_Sign)){
            $Nom_Org_Sign = $Nom_Sign->getClientOriginalExtension();
            $Nom_Sign_Name = $id.'nom_sign.'.$Nom_Org_Sign;
            $Nom_Path = 'investor/'.$id.'/images/';
            $Nom_Sign->move($Nom_Path,$Nom_Sign_Name);
        }else{
            $data = DB::table('nominee_info')
                    ->select('NOM_APP_SIGN')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Nom_Sign_Name = $data->NOM_APP_SIGN;
        }

        $Nom_Nid = $request->NOM_NID_IMG;
        if(!empty($Nom_Nid)){
            $Nom_Org_Nid = $Nom_Nid->getClientOriginalExtension();
            $Nom_Nid_Name = $id.'nom_nid.'.$Nom_Org_Nid;
            $Nom_Path = 'investor/'.$id.'/images/';
            $Nom_Nid->move($Nom_Path,$Nom_Nid_Name);
        }else{
            $data = DB::table('nominee_info')
                    ->select('NOM_NID_IMG')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $Nom_Nid_Name = $data->NOM_NID_IMG;
        }


        $updated_at = Carbon::now();

        DB::update('update principal_applicant set GENDER = ?, NAME = ?, FATHER_NAME = ?, MOTHER_NAME = ?, PRESENT_ADDRESS = ?, PERMANENT_ADDRESS = ?, NATIONAL_ID = ?, CITY = ?, DISTRICT = ?, COUNTRY = ?, BIRTHDAY = ?, TELEPHONE = ?, EMAIL = ?, NATIONALITY = ?, BOID = ?, POST_CODE = ?, OCCUPATION = ?, ETIN = ?, ACCOUNT_NAME = ?, ACCOUNT_NO = ?, BANK_NAME = ?, ROUTING_NO = ?, BRANCH = ?, DIVIDENT_OPT = ?, IMAGE = ?, APP_SIGN = ?, NID_IMG = ?, updated_at = ? where REGISTRATION_NO = ?',[$Appl_Gender, $Appl_Name, $Appl_Father, $Appl_Mother, $Appl_Pres_address, $Appl_Per_Address, $Appl_NID, $Appl_Town, $Appl_District, $Appl_Country, $Appl_DOB, $Appl_Contract, $Appl_Email, $Appl_Nationality, $Appl_BOID, $Appl_Post_Code, $Appl_Occupation, $Appl_ETIN, $Appl_Account_Name, $Appl_Account_No, $Appl_Bank_Name, $Appl_Routing, $Appl_Branch, $Appl_Dividend, $Appl_Photo_Name, $Appl_Sign_Name, $Appl_Nid_Name, $updated_at, $id]);

        if(!empty($Second_Name)){
            DB::update('update joint_applicant set JOINT_NAME = ?, JOINT_FATHER_NAME = ?, JOINT_MOTHER_NAME = ?, JOINT_PRESENT_ADDRESS = ?, JOINT_PERMANENT_ADDRESS = ?, JOINT_NATIONAL_ID = ?, JOINT_BIRTHDAY = ?, JOINT_TELEPHONE = ?, JOINT_NATIONALITY = ?, JOINT_OCCUPATION = ?, JOINT_IMAGE = ?, JOINT_APP_SIGN = ?, JOINT_NID_IMG = ?, updated_at = ? where REGISTRATION_NO = ?',[$Second_Name, $Second_Father, $Second_Mother, $Second_Pres_Address, $Second_Per_Address, $Second_NID, $Second_DOB, $Second_Contract, $Second_Nationality, $Second_Occupation, $Second_Photo_Name, $Second_Sign_Name, $Second_Nid_Name, $updated_at, $id]);
        }

        DB::update('update nominee_info set NOM_NAME = ?, NOM_FATHER_NAME = ?, NOM_MOTHER_NAME = ?, RELATION_APPLICANT = ?, NOM_PRESENT_ADDRESS = ?, NOM_PERMANENT_ADDRESS = ?, NOM_NATIONAL_ID = ?, NOM_BIRTHDAY = ?, NOM_TELEPHONE = ?, NOM_COUNTRY = ?, NOM_OCCUPATION = ?, NOM_IMAGE = ?, NOM_APP_SIGN = ?, NOM_NID_IMG = ?, updated_at = ? where REGISTRATION_NO = ?',[$Nom_Name, $Nom_Father, $Nom_Mother, $Nom_Relationship, $Nom_Pres_Address, $Nom_Per_Address, $Nom_NID, $Nom_DOB, $Nom_Contract, $Nom_Country, $Nom_Occupation, $Nom_Photo_Name, $Nom_Sign_Name, $Nom_Nid_Name, $updated_at, $id]);

        return redirect('/subscription-redumption/inv-reginfo')->with('message','Investor Details Update successfully done');
    }

    public function inst_pro_edit($INSTAPP_ID){

        $INSTAPP_ID = decrypt($INSTAPP_ID);

        $data = DB::table('inst_app')
                ->where('INSTAPP_ID', '=', $INSTAPP_ID)
                ->first();
        $datas = DB::table('inst_app')
                ->join('auth_per', 'inst_app.REGISTRATION_NO', '=', 'auth_per.INSTAPP_ID')
                ->where('inst_app.INSTAPP_ID', '=', $INSTAPP_ID)
                ->get();
        return view('BackEnd.pages.subred.instupdate', ['data' => $data, 'datas' => $datas]);
    }

    public function inst_reginfo_update(Request $request){
        $id = $request->rinstid;

        $Inst_Name = $request->INSTNAME;
        $Inst_Type = $request->INST_TYPE_FLAG;
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

        $updated_at = Carbon::now();

        DB::update('update inst_app set INSTNAME = ?, INST_TYPE_FLAG = ?, TRADE_LICENSE = ?, ADDRESS = ?, TIN_NO = ?, BO_ID = ?, POST_CODE = ?, TEL = ?, EMAIL = ?, FAX = ?, ACCOUNT_NAME = ?, ACCOUNT_NO = ?, BANK_NAME = ?, ROUTING_NO = ?, BRANCH = ?, DIVIDENT_OPT = ?, updated_at = ? where REGISTRATION_NO = ?',[$Inst_Name, $Inst_Type, $Trade_License, $Inst_Address, $TIN_No, $BO_ID, $Post_Code, $Inst_Telephone, $Inst_Email, $Inst_Fax, $Inst_Account_Name, $Inst_Account_No, $Inst_Bank_Name, $Inst_Routing, $Inst_Branch, $Inst_Dividend, $updated_at, $id]);

        return redirect('/subscription-redumption/inv-reginfo')->with('message','Investor Details Update successfully done');
    }

    public function authper_add($REGISTRATION_NO){
        $regno = $REGISTRATION_NO;
        return view('BackEnd.pages.subred.authperadd', ['regno' => $regno]);
    }

    public function authper_store(Request $request){

        $id = $request->REGISTRATION_NO;
        $Reg_No = $request->REGISTRATION_NO;
        $Auth_Gender = $request->GENDER;
        $Auth_Name = $request->NAME;
        $Auth_Des = $request->DESIG;
        $Auth_Address = $request->A_ADDRESS;
        $Auth_Nid = $request->NATIONAL_ID;
        $Auth_Dob = $request->BIRTHDAY;
        $Auth_Cont = $request->MOBILE_NO;

        $Auth_Photo = $request->AUTH_IMG_PATH;
        $Auth_Org_Name = $Auth_Photo->getClientOriginalExtension();
        $Auth_Photo_Name = $id.$Auth_Name.'.'.$Auth_Org_Name;
        $Auth_Path = 'investor/'.$id.'/images/';
        $Auth_Photo->move($Auth_Path,$Auth_Photo_Name);
       
        $Sign_Photo = $request->AUTH_SIGNATURE;
        $Sign_Org_Name = $Sign_Photo->getClientOriginalExtension();
        $Sign_Photo_Name = $id.$Auth_Name.'_sign.'.$Sign_Org_Name;
        $Sign_Path = 'investor/'.$id.'/images/';
        $Sign_Photo->move($Sign_Path,$Sign_Photo_Name);

        $auth_data=array(
            'INSTAPP_ID'=>$Reg_No,
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

        DB::table('auth_per')->insert($auth_data);

        return redirect('/subscription-redumption/inv-reginfo')->with('message','Authorized Person save successfully done');

    }

    public function authper_edit($AUTH_PER_ID){

        $AUTH_PER_ID = decrypt($AUTH_PER_ID);

        $data = DB::table('auth_per')
                ->join('inst_app', 'auth_per.INSTAPP_ID', '=', 'inst_app.REGISTRATION_NO')
                ->where('AUTH_PER_ID', '=', $AUTH_PER_ID)
                ->first();
        return view('BackEnd.pages.subred.authperupdate', ['data' => $data]);
    }

    public function authper_update(Request $request){
        $id = $request->rinstid;
        $auth_id = $request->apid;

        $Auth_Gender = $request->GENDER;
        $Auth_Name = $request->NAME;
        $Auth_Des = $request->DESIG;
        $Auth_Address = $request->A_ADDRESS;
        $Auth_Nid = $request->NATIONAL_ID;
        $Auth_Dob = $request->BIRTHDAY;
        $Auth_Cont = $request->MOBILE_NO;

        $updated_at = Carbon::now();

        $Auth_Photo = $request->AUTH_IMG_PATH;
        if(!empty($Auth_Photo)){
            $Auth_Org_Name = $Auth_Photo->getClientOriginalExtension();
            $Auth_Photo_Name = $id.$Auth_Name.'.'.$Auth_Org_Name;
            $Auth_Path = 'investor/'.$id.'/images/';
            $Auth_Photo->move($Auth_Path,$Auth_Photo_Name);
        }else{
            $data = DB::table('auth_per')
                    ->select('AUTH_IMG_PATH')
                    ->where('AUTH_PER_ID', '=', $auth_id)
                    ->first();
            $Auth_Photo_Name = $data->AUTH_IMG_PATH;
        }

        $Sign_Photo = $request->AUTH_SIGNATURE;
        if(!empty($Sign_Photo)){
            $Sign_Org_Name = $Sign_Photo->getClientOriginalExtension();
            $Sign_Photo_Name = $id.$Auth_Name.'_sign.'.$Sign_Org_Name;
            $Sign_Path = 'investor/'.$id.'/images/';
            $Sign_Photo->move($Sign_Path,$Sign_Photo_Name);
        }else{
            $data = DB::table('auth_per')
                    ->select('AUTH_SIGNATURE')
                    ->where('AUTH_PER_ID', '=', $auth_id)
                    ->first();
            $Sign_Photo_Name = $data->AUTH_SIGNATURE;
        }

        DB::update('update auth_per set AUTH_GENDER = ?, AUTH_NAME = ?, AUTH_DESIG = ?, AUTH_ADDRESS = ?, AUTH_NATIONAL_ID = ?, AUTH_BIRTHDAY = ?, AUTH_MOBILE_NO = ?, AUTH_SIGNATURE = ?, AUTH_IMG_PATH = ?, updated_at = ? where AUTH_PER_ID = ?',[$Auth_Gender, $Auth_Name, $Auth_Des, $Auth_Address, $Auth_Nid, $Auth_Dob, $Auth_Cont, $Sign_Photo_Name, $Auth_Photo_Name, $updated_at, $auth_id]);

        return redirect('/subscription-redumption/inv-reginfo')->with('message','Authorized Person Details Update successfully done');
    }

    public function assign_sc(){
        $salescenters = DB::table('salescenter')->get();
        $portfolios = DB::table('portfolio_registration')->get();
        $assigneds = DB::table('assign_salescenter')
                ->join('salescenter', 'assign_salescenter.SC_ID', '=', 'salescenter.SALESCENTER_ID')
                ->join('portfolio_registration', 'assign_salescenter.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('assign_salescenter.*', 'salescenter.SCID', 'portfolio_registration.PORTFOLIO_NAME')
                ->orderBy('assign_salescenter.ASSIGN_ID', 'asc')
                ->paginate(5);

        return view('BackEnd.pages.subred.scassign' , ['salescenters' => $salescenters, 'portfolios' => $portfolios, 'assigneds' => $assigneds]);
    }

    public function save_assign_sc(Request $request){
        $SALESCENTER_ID = $request->SALESCENTER_ID;
        $PRO_REG_ID = $request->PRO_REG_ID;

        $check = DB::table('assign_salescenter')
                ->where('SC_ID', $SALESCENTER_ID)
                ->where('FUND_ID', $PRO_REG_ID)
                ->count();
        if($check > 0){
            return redirect('/subscription-redumption/assign-sc')->with('messagen','Sales Agent Already Assigned');
        }else{

            $data=array(
            'SC_ID'=>$SALESCENTER_ID,
            'FUND_ID'=>$PRO_REG_ID,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('assign_salescenter')->insert($data);

        return redirect('/subscription-redumption/assign-sc')->with('message','Sales Agent Assign Successfully Done');
        }
    }

    public function assigned_delete($id){
        DB::delete('delete from assign_salescenter where ASSIGN_ID = ?',[$id]);
        return redirect('/subscription-redumption/assign-sc')->with('message','Delete Successfully Done');
    }

    public function check_sa_code($code){

        $result = DB::table('salesagent')
                  ->where('SALESAGENT_CODE',$code)
                  ->count();

        if($result > 0){
            echo "yes";
        }else{
            echo "no";
        }
        
    }
	
	
	 public function profile_holding_view(){

        $individuals = DB::table('funds')
		              ->join('principal_applicant', 'funds.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                      ->join('portfolio_registration', 'funds.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
		              ->select('funds.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
		              ->get();

        $instutionals = DB::table('funds')
                      ->join('inst_app', 'funds.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                      ->join('portfolio_registration', 'funds.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                      ->select('funds.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME', 'portfolio_registration.PRO_REG_ID')
                      ->get();

        return view('BackEnd.pages.reports.profile_view', ['individuals' => $individuals, 'instutionals' => $instutionals]);
    }

    public function pend_purchase(){
        $indv = DB::table('unit_purchase')
                ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'N')
                ->get();

        $inst = DB::table('unit_purchase')
                ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'inst_app.INSTNAME','portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'N')
                ->get();

        return view('BackEnd.pages.subred.pendpurch', ['indv' => $indv, 'inst' => $inst]);
    }

    public function e_approve($apl_id, $id){

        $HOUSE_CNF_REC_FLAG = 'EA';
        $HOUSE_CNF_REC_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        DB::update('update unit_purchase set HOUSE_CNF_REC_FLAG = ?, HOUSE_CNF_REC_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_PURCHASE_ID = ?',[$HOUSE_CNF_REC_FLAG, $HOUSE_CNF_REC_DATE, $OPS_ID, $updated_at, $apl_id]);

        return redirect('/subscription-redumption/pending-purchase')->with('message','Send Successfully Done');
    }

    public function pend_purchase_manager(){
        $indv = DB::table('unit_purchase')
                ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'EA')
                ->get();

        $inst = DB::table('unit_purchase')
                ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_purchase.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('HOUSE_CNF_REC_FLAG', '=', 'EA')
                ->get();

        return view('BackEnd.pages.subred.pendpurchman', ['indv' => $indv, 'inst' => $inst]);
    }

    public function manager_app($apl_id, $id){

        $HOUSE_CNF_REC_FLAG = 'A';
        $HOUSE_CNF_REC_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        DB::update('update unit_purchase set HOUSE_CNF_REC_FLAG = ?, HOUSE_CNF_REC_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_PURCHASE_ID = ?',[$HOUSE_CNF_REC_FLAG, $HOUSE_CNF_REC_DATE, $OPS_ID, $updated_at, $apl_id]);

        return redirect('/subscription-redumption/pending-purchase-manager')->with('message','Approval Successfully Done');
    }

    public function manager_disapp($apl_id, $reg_no, $buy_unit, $id){
		
		$TOTAL_PANDING = DB::table('funds')
		                  ->select('funds.BUY_PADDING_UNIT','funds.FUND_ID')
						  ->where('REGISTRATION_NO', '=', $reg_no)
		                  ->first();
		$BUY_TOTAL_PADDING_UNIT=$TOTAL_PANDING->BUY_PADDING_UNIT;
		$disapprove_unit=$BUY_TOTAL_PADDING_UNIT-$buy_unit;
        $fund_id = $TOTAL_PANDING->FUND_ID;

        $HOUSE_CNF_REC_FLAG = 'DA';
        $HOUSE_CNF_REC_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        $buy_info = DB::table('unit_purchase')
                    ->select('PURCHASE_PERSON_ID', 'PURCHASE_NO')
                    ->where('UNIT_PURCHASE_ID', '=', $apl_id)
                    ->first();

        $rcpt_no = $buy_info->PURCHASE_PERSON_ID.$buy_info->PURCHASE_NO;

        $id_first = substr($reg_no, 0, -11);
        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                        ->select('NAME','EMAIL')
                        ->where('REGISTRATION_NO',$reg_no)
                        ->first();
        }
        elseif($id_first == 2){
           $applicant = DB::table('inst_app')
                        ->select('INSTNAME as NAME', 'EMAIL')
                        ->where('REGISTRATION_NO',$reg_no)
                        ->first(); 
        }
        else{
            echo "Not Found";
        }

        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $fund_id)
                ->first();

        $custmail = $cust->CUSTODIAN_EMAIL;

        $appl_name = $applicant->NAME;
        $appl_mail = $applicant->EMAIL;
		
		$update_buy_pandding = DB::table('funds')
              ->where('REGISTRATION_NO', $reg_no)
              ->update(['BUY_PADDING_UNIT' => $disapprove_unit,'updated_at'=>   Carbon::now()]);

        DB::update('update unit_purchase set HOUSE_CNF_REC_FLAG = ?, HOUSE_CNF_REC_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_PURCHASE_ID = ?',[$HOUSE_CNF_REC_FLAG, $HOUSE_CNF_REC_DATE, $OPS_ID, $updated_at, $apl_id]);

        $mail_data = array(
            'appl_name'=>$appl_name,
            'unit'=>$buy_unit,
            'rcpt_no'=>$rcpt_no,
            'type'=>'subscription'
        );

        $emails = [$appl_mail,$custmail,'amcuf@capmbd.com','amc_custodian@capmbd.com'];

        try{
            Mail::send('mail.dis_app', $mail_data, function($message) use ($emails, $reg_no, $appl_name){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Disapprove on Unit Subscription Request '.$reg_no. ', Applicant name-'.$appl_name);
            });
        }

        catch(\Exception $e){
            return redirect('/subscription-redumption/pending-purchase-manager')->with('message','Disapproved !!! But Mail Not Sent. Please Contact With IT Team');
        }

        return redirect('/subscription-redumption/pending-purchase-manager')->with('message','Disapproved !!!');
    }


    public function holding_mail($id, $f_id){

        $id_first = substr($id, 0, -11);

        if($id_first == 1 || $id_first == 3){
            $hold_info = DB::table('funds')
                        ->join('principal_applicant', 'funds.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                        ->join('portfolio_registration', 'funds.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                        ->select('funds.*', 'principal_applicant.NAME as clname', 'principal_applicant.EMAIL', 'portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                        ->where('funds.REGISTRATION_NO', '=', $id)
                        ->where('funds.FUND_ID', '=', $f_id)
                        ->first();
        }
        elseif($id_first == 2){
            $hold_info = DB::table('funds')
                        ->join('inst_app', 'funds.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                        ->join('portfolio_registration', 'funds.FUND_ID', '=', 'portfolio_registration.PRO_REG_ID')
                        ->select('funds.*', 'inst_app.INSTNAME as clname', 'inst_app.EMAIL', 'portfolio_registration.PORTFOLIO_NAME', 'portfolio_registration.PRO_REG_ID')
                        ->where('funds.REGISTRATION_NO', '=', $id)
                        ->where('funds.FUND_ID', '=', $f_id)
                        ->first();
        }

        if($id_first == 1 || $id_first == 3){
            $invt = 'Individual';
        }
        elseif($id_first == 2){
            $invt = 'Institutional';
        }

        $apl_email = $hold_info->EMAIL;
        $apl_name = $hold_info->clname;

        $qr_code_name = $id;

        $info = 'Fund: '.$hold_info->PORTFOLIO_NAME.', Investor Name: '.$hold_info->clname.', Investor ID: '.$id.', Date: '.date("F d, Y, h:i a").', Holding Unit: '.$hold_info->TOTAL_UNITS;

        $file = public_path('/qr_code/holding/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();

        $uploadPath ='./investor/'.$id.'/';
        $file_name = 'Holding Status of '.$hold_info->clname.'-'.date('Y-m-d_H-i',time());

        $pdf = PDF::loadView('BackEnd.pages.reports.holding_mail_pdf', compact('hold_info', 'invt', 'qr_code_name'))->save($uploadPath.$file_name.'.pdf');

        $mail_data = array(
            'apl_name'=>$apl_name,
            'id'=>$id
        );

        $emails = [$apl_email];

        try{
            Mail::send('mail.hold_status_email', $mail_data, function($message) use ($emails, $uploadPath, $file_name, $apl_name, $id){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Report of Total Unit Holdings Status for '.$id.', Applicant name-'.$apl_name);
                $message->attach($uploadPath.$file_name.'.pdf');
            });
        }

        catch(\Exception $e){
            return redirect('/subscription-redumption/unit-holder-profile')->with('messagen','Holdings Status Not Sent');
        }

        return redirect('/subscription-redumption/unit-holder-profile')->with('message','Holdings Status Send Successfully Done');
    }

    public function block_units($id, $f_id){

        $id = decrypt($id);
        
        $data = DB::table('funds')
                ->where('REGISTRATION_NO', '=', $id)
                ->where('FUND_ID', '=', $f_id)
                ->first();

        return view('BackEnd.pages.subred.blockunits', ['data' => $data]);
    }

    public function block_units_save(Request $request){

        $id = $request->rid;
        $fundid = $request->fid;
        $BLOCK_UNITS = $request->BLOCK_UNITS;

        DB::table('funds')
        ->where('REGISTRATION_NO', $id)
        ->where('FUND_ID', $fundid)
        ->update(['BLOCK_UNITS' => $BLOCK_UNITS,'updated_at'=> Carbon::now()]);

        return redirect('/subscription-redumption/unit-holder-profile')->with('message','Units Block Successfully Done');
    }
	
	public function pend_sell(){
        $indv = DB::table('unit_sell')
                ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_INST_FLAG', '=', 'N')
                ->get();

        $inst = DB::table('unit_sell')
                ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_INST_FLAG', '=', 'N')
                ->get();

        return view('BackEnd.pages.subred.pendsell', ['indv' => $indv, 'inst' => $inst]);
    }
	
	 public function sell_e_approve($apl_id, $id){

        $DP_INST_FLAG = 'EA';
        $DP_INST_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        DB::update('update unit_sell set DP_INST_FLAG = ?, DP_INST_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_SELL_ID = ?',[$DP_INST_FLAG, $DP_INST_DATE, $OPS_ID, $updated_at, $apl_id]);

        return redirect('/subscription-redumption/pending-sell')->with('message','Approval Successfully Done');
    }
	
	
	public function pend_sell_manager(){
        $indv = DB::table('unit_sell')
                ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_INST_FLAG', '=', 'EA')
				 ->where('DP_TRAN_CONF_FLAG', '=', 'N')
                ->get();

        $inst = DB::table('unit_sell')
                ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('unit_sell.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('DP_INST_FLAG', '=', 'EA')
				->where('DP_TRAN_CONF_FLAG', '=', 'N')
                ->get();

        return view('BackEnd.pages.subred.pendsellman', ['indv' => $indv, 'inst' => $inst]);
    }
	
	 public function manager_app_sell($apl_id, $id){

        $DP_TRAN_CONF_FLAG = 'A';
        $DP_TRAN_CONF_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        DB::update('update unit_sell set DP_TRAN_CONF_FLAG = ?, DP_TRAN_CONF_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_SELL_ID = ?',[$DP_TRAN_CONF_FLAG, $DP_TRAN_CONF_DATE, $OPS_ID, $updated_at, $apl_id]);

        return redirect('/subscription-redumption/pending-sell-manager')->with('message','Approval Successfully Done');
    }
	
	 public function manager_disapp_sell($apl_id, $reg_no, $sell_unit, $id){
		
		$TOTAL_PANDING = DB::table('funds')
		                  ->select('funds.SELL_PADDING_UNIT','funds.FUND_ID')
						    ->where('REGISTRATION_NO', '=', $reg_no)
		                    ->first();
		$SELL_TOTAL_PADDING_UNIT=$TOTAL_PANDING->SELL_PADDING_UNIT;
		$DISAPPROVE_SELL_UNIT=$SELL_TOTAL_PADDING_UNIT-$sell_unit;
        $fund_id = $TOTAL_PANDING->FUND_ID;

        $DP_TRAN_CONF_FLAG = 'DA';
        $DP_TRAN_CONF_DATE = Carbon::now();
        $OPS_ID = $id;
        $updated_at = Carbon::now();

        $sell_info = DB::table('unit_sell')
                    ->select('SALES_PERSON_ID', 'SALE_NO')
                    ->where('UNIT_SELL_ID', '=', $apl_id)
                    ->first();

        $rcpt_no = $sell_info->SALES_PERSON_ID.$sell_info->SALE_NO;

        $id_first = substr($reg_no, 0, -11);
        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                        ->select('NAME','EMAIL')
                        ->where('REGISTRATION_NO',$reg_no)
                        ->first();
        }
        elseif($id_first == 2){
           $applicant = DB::table('inst_app')
                        ->select('INSTNAME as NAME', 'EMAIL')
                        ->where('REGISTRATION_NO',$reg_no)
                        ->first(); 
        }
        else{
            echo "Not Found";
        }

        $cust = DB::table('custodian')
                ->join('portfolio_registration', 'custodian.CUSTODIAN_ID', '=', 'portfolio_registration.CUSTODIAN_ID')
                ->select('custodian.CUSTODIAN_EMAIL')
                ->where('portfolio_registration.PRO_REG_ID', '=', $fund_id)
                ->first();

        $custmail = $cust->CUSTODIAN_EMAIL;

        $appl_name = $applicant->NAME;
        $appl_mail = $applicant->EMAIL;

		$update_sell_pandding = DB::table('funds')
              ->where('REGISTRATION_NO', $reg_no)
              ->update(['SELL_PADDING_UNIT' => $DISAPPROVE_SELL_UNIT,'updated_at'=>   Carbon::now()]);

        DB::update('update unit_sell set DP_TRAN_CONF_FLAG = ?, DP_TRAN_CONF_DATE = ?, OPS_ID = ?, updated_at = ? where UNIT_SELL_ID = ?',[$DP_TRAN_CONF_FLAG, $DP_TRAN_CONF_DATE, $OPS_ID, $updated_at, $apl_id]);

        $mail_data = array(
            'appl_name'=>$appl_name,
            'unit'=>$sell_unit,
            'rcpt_no'=>$rcpt_no,
            'type'=>'surrender'
        );

        $emails = [$appl_mail,$custmail,'amcuf@capmbd.com','amc_custodian@capmbd.com'];

        try{
            Mail::send('mail.dis_app', $mail_data, function($message) use ($emails, $reg_no, $appl_name){
                $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Disapprove on Unit Surrender Request '.$reg_no. ', Applicant name-'.$appl_name);
            });
        }

        catch(\Exception $e){
            return redirect('/subscription-redumption/pending-sell-manager')->with('dmessage','Disapproved !!! But Mail Not Sent. Please Contact With IT Team');
        }
        
        return redirect('/subscription-redumption/pending-sell-manager')->with('dmessage','Disapproved !!!');
    }
	
	public function tax_certificate(){
        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();
        return view('BackEnd.pages.reports.tax_certificat', ['regno' => $regno]);
    }
    
    

    public function get_tax_cert($id, $year){
        $fdate=($year-1)."-07-01";
        $tdate=$year."-06-30";
                
         $id_first = substr($id, 0, -11);
         
        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                        ->select('NAME','EMAIL','REGISTRATION_NO','FATHER_NAME','MOTHER_NAME')
                        ->where('REGISTRATION_NO',$id)
                        ->first();
        }
        elseif($id_first == 2){
            $applicant = DB::table('inst_app')
                        ->select('INSTNAME as NAME', 'EMAIL','REGISTRATION_NO','FATHER_NAME','MOTHER_NAME')
                        ->where('REGISTRATION_NO',$id)
                        ->first();
        }
        else{
            echo "Not Found";
        }
        
        $previous_buy = DB::table('unit_purchase')
                        ->select(DB::raw('sum(UNIT) as bprev'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->where('created_at', '<', $fdate)
                        ->first();

        $previous_sell = DB::table('unit_sell')
                        ->select(DB::raw('sum(UNIT) as sprev'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('PAY_CLR_FLAG', '=', 'A')
                        ->where('created_at', '<', $fdate)
                        ->first();

        $prev = $previous_buy->bprev - $previous_sell->sprev;

                        
        $current_buy = DB::table('unit_purchase')
                        ->select(DB::raw('sum(UNIT) as bcurr'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

        $current_avg = DB::table('unit_purchase')
                        ->select(DB::raw('SUM(unit_purchase.RATE * unit_purchase.REMAINING_UNITS) as rc'), DB::raw('SUM(unit_purchase.REMAINING_UNITS) as rt'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

       $current_sell = DB::table('unit_sell')
                        ->select(DB::raw('sum(UNIT) as scurr'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('PAY_CLR_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

        $avg_rc = $current_avg->rc; 
        $avg_rt = $current_avg->rt;
        if($avg_rt == 0){
            $avg = 0;
        }else{
           $avg = $avg_rc / $avg_rt; 
        }

        $b_curr = $current_buy->bcurr - 0;
        $s_curr = $current_sell->scurr - 0;

        $sub = $prev - $s_curr;

        if($sub < 0){

            $blnc = $sub + $b_curr;
        }else{
            $blnc = $b_curr;
        }

        $rebat = $blnc * $avg;

        $qr_code_name = $id.'_'.Carbon::now()->format('H_i_s');
        $info = 'http://capmbd.com'.', Investor ID: '.$applicant->REGISTRATION_NO.', Investor Name: '.$applicant->NAME.', Tax Rebateable Investment For This Year ('.($year-1).'-'.$year.'): BDT '.number_format($rebat,2);
        $file = public_path('/qr_code/tax/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();
        $qr_name = '/qr_code/tax/'.$qr_code_name.'.png';

        $tax['name'] = $applicant->NAME;
        $tax['reg'] = $applicant->REGISTRATION_NO;
        $tax['father'] = $applicant->FATHER_NAME;
        $tax['mother'] = $applicant->MOTHER_NAME;
        $tax['prev'] = $prev;
        $tax['b_curr'] = $b_curr;
        $tax['s_curr'] = $s_curr;
        $tax['blnc'] = $blnc;
        $tax['rebat'] = $rebat;
        $tax['qr_name'] = $qr_name;
        $result[] = $tax;

        return response()->json($result);
    }


    public function send_tax_cert($id, $year){
        $fdate=($year-1)."-07-01";
        $tdate=$year."-06-30";
                
         $id_first = substr($id, 0, -11);
         
        if($id_first == 1 || $id_first == 3){
            $applicant = DB::table('principal_applicant')
                        ->select('NAME','EMAIL','REGISTRATION_NO','FATHER_NAME','MOTHER_NAME')
                        ->where('REGISTRATION_NO',$id)
                        ->first();
        }
        elseif($id_first == 2){
            $applicant = DB::table('inst_app')
                        ->select('INSTNAME as NAME', 'EMAIL','REGISTRATION_NO','FATHER_NAME','MOTHER_NAME')
                        ->where('REGISTRATION_NO',$id)
                        ->first();
        }
        else{
            echo "Not Found";
        }
        
        $previous_buy = DB::table('unit_purchase')
                        ->select(DB::raw('sum(UNIT) as bprev'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->where('created_at', '<', $fdate)
                        ->first();

        $previous_sell = DB::table('unit_sell')
                        ->select(DB::raw('sum(UNIT) as sprev'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('PAY_CLR_FLAG', '=', 'A')
                        ->where('created_at', '<', $fdate)
                        ->first();

        $prev = $previous_buy->bprev - $previous_sell->sprev;

                        
        $current_buy = DB::table('unit_purchase')
                        ->select(DB::raw('sum(UNIT) as bcurr'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

        $current_avg = DB::table('unit_purchase')
                        ->select(DB::raw('SUM(unit_purchase.RATE * unit_purchase.REMAINING_UNITS) as rc'), DB::raw('SUM(unit_purchase.REMAINING_UNITS) as rt'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('SC_CNF_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

       $current_sell = DB::table('unit_sell')
                        ->select(DB::raw('sum(UNIT) as scurr'))
                        ->where('REGISTRATION_NO', '=', $id)
                        ->where('PAY_CLR_FLAG', '=', 'A')
                        ->whereBetween(DB::raw('date(created_at)'), [$fdate, $tdate])
                        ->first();

        $appl_mail = $applicant->EMAIL;
        $avg_rc = $current_avg->rc; 
        $avg_rt = $current_avg->rt;
        if($avg_rt == 0){
            $avg = 0;
        }else{
           $avg = $avg_rc / $avg_rt; 
        }

        $b_curr = $current_buy->bcurr - 0;
        $s_curr = $current_sell->scurr - 0;

        $sub = $prev - $s_curr;

        if($sub < 0){

            $blnc = $sub + $b_curr;
        }else{
            $blnc = $b_curr;
        }

        $rebat = $blnc * $avg;

        $qr_code_name = $id.'_'.Carbon::now()->format('H_i_s');
        $info = 'http://capmbd.com'.', Investor ID: '.$applicant->REGISTRATION_NO.', Investor Name: '.$applicant->NAME.', Tax Rebateable Investment For This Year ('.($year-1).'-'.$year.'): BDT '.number_format($rebat,2);
        $file = public_path('/qr_code/tax/'.$qr_code_name.'.png');
        $qrcode = QRCode::text($info)->setOutfile($file)->png();
        $qr_name = '/qr_code/tax/'.$qr_code_name.'.png';

        $investor_info=array(
            'name'=>$applicant->NAME,
            'reg'=>$applicant->REGISTRATION_NO,
            'father'=>$applicant->FATHER_NAME,
            'mother'=>$applicant->MOTHER_NAME,
            'prev'=>$prev,
            'b_curr'=>$b_curr,
            's_curr'=>$s_curr,
            'blnc'=>$blnc,
            'rebat'=>$rebat,
            'year'=>$year,
            'pyear'=>$year - 1
        );

        $uploadPath ='./investor/'.$id.'/';
        $file_name = 'TC_'.$id.'_'.Carbon::now()->format('H_i_s');

        $pdf = PDF::loadView('BackEnd.pages.reports.tax_pdf', compact('investor_info','qr_name'))->save($uploadPath.$file_name.'.pdf' );

        $mail_data = array(
            'myear'=>$year,
            'pmyear'=>$year-1
        );

        $emails = [$appl_mail];
        try{
            Mail::send('mail.tax_email', $mail_data, function($message) use ($emails, $uploadPath, $file_name, $id, $year){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject($id.'_Tax Rebateable Investment Report of CAPM UNIT FUND For This Year( '.($year-1).'-'.$year.' )');
                $message->attach($uploadPath.$file_name.'.pdf');
            });

        }

        catch(\Exception $e){
            return 'Tax Certificate Not Send';
        }

        return 'Tax Certificate Send Successfully Done';
    }


    public function sub_report(){

        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();
        $portfolios = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.reports.subs_report', ['portfolios' => $portfolios, 'regno' => $regno]);
    }

    public function get_sub_report($id, $fid, $fd, $td){

        if($id == 'no'){
            $ind = DB::table('unit_purchase')
                     ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                     ->select('unit_purchase.REGISTRATION_NO', 'principal_applicant.NAME', 'unit_purchase.UNIT', 'unit_purchase.RATE', 'unit_purchase.TOTAL_AMOUNT', 'unit_purchase.created_at')
                     ->where('unit_purchase.SPONSOR_ID',$fid)
                     ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                     ->whereBetween(DB::raw('date(unit_purchase.created_at)'), [$fd, $td])
                     ->get();

            $ins = DB::table('unit_purchase')
                     ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                     ->select('unit_purchase.REGISTRATION_NO', 'inst_app.INSTNAME as NAME', 'unit_purchase.UNIT', 'unit_purchase.RATE', 'unit_purchase.TOTAL_AMOUNT', 'unit_purchase.created_at')
                     ->where('unit_purchase.SPONSOR_ID',$fid)
                     ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                     ->whereBetween(DB::raw('date(unit_purchase.created_at)'), [$fd, $td])
                     ->get();
            $merge_inv = $ind->merge($ins);
            $result = $merge_inv->all();
        }
        else{

            $id_first = substr($id, 0, -11);
         
            if($id_first == 1 || $id_first == 3){
                $result = DB::table('unit_purchase')
                          ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                          ->select('unit_purchase.REGISTRATION_NO', 'principal_applicant.NAME', 'unit_purchase.UNIT', 'unit_purchase.RATE', 'unit_purchase.TOTAL_AMOUNT', 'unit_purchase.created_at')
                          ->where('unit_purchase.REGISTRATION_NO',$id)
                          ->where('unit_purchase.SPONSOR_ID',$fid)
                          ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                          ->whereBetween(DB::raw('date(unit_purchase.created_at)'), [$fd, $td])
                          ->get();
            }
            else{
               $result = DB::table('unit_purchase')
                          ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                          ->select('unit_purchase.REGISTRATION_NO', 'inst_app.INSTNAME as NAME', 'unit_purchase.UNIT', 'unit_purchase.RATE', 'unit_purchase.TOTAL_AMOUNT', 'unit_purchase.created_at')
                          ->where('unit_purchase.REGISTRATION_NO',$id)
                          ->where('unit_purchase.SPONSOR_ID',$fid)
                          ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '!=', 'DA')
                          ->whereBetween(DB::raw('date(unit_purchase.created_at)'), [$fd, $td])
                          ->get(); 
            }
        }
        return response()->json($result);
    }

    public function sur_report(){

        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();
        $portfolios = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.reports.sur_report', ['portfolios' => $portfolios, 'regno' => $regno]);
    }

    public function get_sur_report($id, $fid, $fd, $td){

        if($id == 'no'){
            $ind = DB::table('unit_sell')
                     ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                     ->select('unit_sell.REGISTRATION_NO', 'principal_applicant.NAME', 'unit_sell.UNIT', 'unit_sell.RATE', 'unit_sell.TOTAL_AMOUNT', 'unit_sell.created_at')
                     ->where('unit_sell.SPONSOR_ID',$fid)
                     ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                     ->whereBetween(DB::raw('date(unit_sell.created_at)'), [$fd, $td])
                     ->get();

            $ins = DB::table('unit_sell')
                     ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                     ->select('unit_sell.REGISTRATION_NO', 'inst_app.INSTNAME as NAME', 'unit_sell.UNIT', 'unit_sell.RATE', 'unit_sell.TOTAL_AMOUNT', 'unit_sell.created_at')
                     ->where('unit_sell.SPONSOR_ID',$fid)
                     ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                     ->whereBetween(DB::raw('date(unit_sell.created_at)'), [$fd, $td])
                     ->get();
            $merge_inv = $ind->merge($ins);
            $result = $merge_inv->all();
        }
        else{

            $id_first = substr($id, 0, -11);
         
            if($id_first == 1 || $id_first == 3){
                $result = DB::table('unit_sell')
                          ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                          ->select('unit_sell.REGISTRATION_NO', 'principal_applicant.NAME', 'unit_sell.UNIT', 'unit_sell.RATE', 'unit_sell.TOTAL_AMOUNT', 'unit_sell.created_at')
                          ->where('unit_sell.REGISTRATION_NO',$id)
                          ->where('unit_sell.SPONSOR_ID',$fid)
                          ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                          ->whereBetween(DB::raw('date(unit_sell.created_at)'), [$fd, $td])
                          ->get();
            }
            else{
               $result = DB::table('unit_sell')
                          ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                          ->select('unit_sell.REGISTRATION_NO', 'inst_app.INSTNAME as NAME', 'unit_sell.UNIT', 'unit_sell.RATE', 'unit_sell.TOTAL_AMOUNT', 'unit_sell.created_at')
                          ->where('unit_sell.REGISTRATION_NO',$id)
                          ->where('unit_sell.SPONSOR_ID',$fid)
                          ->where('unit_sell.DP_TRAN_CONF_FLAG', '!=', 'DA')
                          ->whereBetween(DB::raw('date(unit_sell.created_at)'), [$fd, $td])
                          ->get(); 
            }
        }
        return response()->json($result);
    }

    public function get_purchdisap(){

        $individual = DB::table('unit_purchase')
                    ->join('principal_applicant', 'unit_purchase.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                    ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('unit_purchase.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                    ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '=', 'DA')
                    ->get();

        $instutional = DB::table('unit_purchase')
                    ->join('inst_app', 'unit_purchase.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                    ->join('portfolio_registration', 'unit_purchase.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('unit_purchase.*', 'inst_app.INSTNAME','portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                    ->where('unit_purchase.HOUSE_CNF_REC_FLAG', '=', 'DA')
                    ->get();

        return view('BackEnd.pages.reports.purch_dis_rpt', ['individual' => $individual, 'instutional' => $instutional]);
    }

    public function get_repurchdisap(){

        $individual = DB::table('unit_sell')
                    ->join('principal_applicant', 'unit_sell.REGISTRATION_NO', '=', 'principal_applicant.REGISTRATION_NO')
                    ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('unit_sell.*', 'principal_applicant.NAME', 'portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                    ->where('unit_sell.DP_TRAN_CONF_FLAG', '=', 'DA')
                    ->get();

        $instutional = DB::table('unit_sell')
                    ->join('inst_app', 'unit_sell.REGISTRATION_NO', '=', 'inst_app.REGISTRATION_NO')
                    ->join('portfolio_registration', 'unit_sell.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('unit_sell.*', 'inst_app.INSTNAME', 'portfolio_registration.PORTFOLIO_NAME','portfolio_registration.PRO_REG_ID')
                    ->where('unit_sell.DP_TRAN_CONF_FLAG', '=', 'DA')
                    ->get();

        return view('BackEnd.pages.reports.repurch_dis_rpt', ['individual' => $individual, 'instutional' => $instutional]);
    }

    public function datewise(){

        $reg_pri_app = DB::table('principal_applicant')
                       ->select('REGISTRATION_NO')
                       ->get();

        $reg_inst_app = DB::table('inst_app')
                       ->select('REGISTRATION_NO')
                       ->get();

        $merge_regno = $reg_pri_app->merge($reg_inst_app);
        $regno = $merge_regno->all();
        $portfolios = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.reports.datewiserpt', ['regno' => $regno, 'portfolios'=> $portfolios]);
    }

    public function get_datewise($fid, $hd){

        $buy_unit = DB::table('unit_purchase')
                    ->select('REGISTRATION_NO',DB::raw('sum(UNIT) as buy'))
                    ->where('SPONSOR_ID',$fid)
                    ->where('created_at', '<=', $hd)
                    ->where('HOUSE_CNF_REC_FLAG', '=', 'A')
                    ->groupBy('REGISTRATION_NO')
                    ->get();

        foreach ($buy_unit as $b_unit) {

            $id = $b_unit->REGISTRATION_NO;
            $buy = $b_unit->buy;

            $sell_unit = DB::table('unit_sell')
                    ->select(DB::raw('sum(UNIT) as sell'))
                    ->where('SPONSOR_ID',$fid)
                    ->where('created_at', '<=', $hd)
                    ->where('DP_TRAN_CONF_FLAG', '=', 'A')
                    ->where('REGISTRATION_NO', '=', $id)
                    ->first();
            $holding = $buy - $sell_unit->sell;

            $id_first = substr($id, 0, -11);
            if($id_first == 1 || $id_first == 3){
                $inv_name = DB::table('principal_applicant')
                          ->select('NAME')
                          ->where('REGISTRATION_NO', '=', $id)
                          ->first();
            }
            else{
               $inv_name = DB::table('inst_app')
                          ->select('INSTNAME as NAME')
                          ->where('REGISTRATION_NO', '=', $id)
                          ->first();
            }

            $inv = $inv_name->NAME;

            $info['id'] = $id;
            $info['name'] = $inv;
            $info['holding'] = $holding;
            $result[] = $info;
            
        }

        return response()->json($result);
    }
    

}
