<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

class PortfolioParameterSetupController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isExecutive']);
    }

    public function parameters(){
        return view('BackEnd.pages.parameters_setup');
    }

    /*--- Portfolio Type ---*/

    public function pro_type(){
    	$pro_types = DB::table('portfolio_type')->paginate(5);
    	return view('BackEnd.pages.parametersetup.portfolio_type', ['pro_types' => $pro_types]);
    }

    public function pro_type_store(Request $request){

    	$PORTFOLIO_TYPE = $request->PORTFOLIO_TYPE;
    	$OPEN_CLOSE_FLAG = $request->OPEN_CLOSE_FLAG;
    	$INCOMEREST_FLAG = $request->INCOMEREST_FLAG;

    	$data=array(
    		'PORTFOLIO_TYPE'=>$PORTFOLIO_TYPE,
    		'OPEN_CLOSE_FLAG'=>$OPEN_CLOSE_FLAG,
    		'INCOMEREST_FLAG'=>$INCOMEREST_FLAG,
    		'created_at'=>Carbon::now(),
    		'updated_at'=>Carbon::now()
    	);

    	DB::table('portfolio_type')->insert($data);

    	return redirect('/parameters-setup/portfolio-type')->with('message','Portfolio type save successfully done');

    }

    public function pro_type_edit($PORTFOLIO_TYPE_ID){

        $PORTFOLIO_TYPE_ID = decrypt($PORTFOLIO_TYPE_ID);

    	$data = DB::table('portfolio_type')
                ->where('PORTFOLIO_TYPE_ID', '=', $PORTFOLIO_TYPE_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.portfolio_type_update', ['data' => $data]);
    }

    public function pro_type_update(Request $request){

        $id = $request->ptypeid;
        $PORTFOLIO_TYPE = $request->PORTFOLIO_TYPE;
        $OPEN_CLOSE_FLAG = $request->OPEN_CLOSE_FLAG;
        $INCOMEREST_FLAG = $request->INCOMEREST_FLAG;
        $updated_at = Carbon::now();

        DB::update('update portfolio_type set PORTFOLIO_TYPE = ?, OPEN_CLOSE_FLAG = ?, INCOMEREST_FLAG = ?, updated_at = ? where PORTFOLIO_TYPE_ID = ?',[$PORTFOLIO_TYPE, $OPEN_CLOSE_FLAG, $INCOMEREST_FLAG, $updated_at, $id]);

        return redirect('/parameters-setup/portfolio-type')->with('message','Portfolio type update successfully done');
    }

    /*--- Sponsor ---*/

    public function sponsor(){

        $sponsors = DB::table('spon')->paginate(3);
        return view('BackEnd.pages.parametersetup.sponsor_add', ['sponsors' => $sponsors]);
    }

    public function sponsor_store(Request $request){

        $COMPANY_NAME = $request->COMPANY_NAME;
        $SPON_CONTACT_PERSON = $request->SPON_CONTACT_PERSON;
        $SPON_CONTACT_PERSON_MOBILE = $request->SPON_CONTACT_PERSON_MOBILE;
        $SPON_CONTACT_ADDRESS = $request->SPON_CONTACT_ADDRESS;
        $SPON_CONTACT_PHONE = $request->SPON_CONTACT_PHONE;
        $SPON_CONTACT_MOBILE = $request->SPON_CONTACT_MOBILE;
        $SPON_EMAIL = $request->SPON_EMAIL;

        $data=array(
            'COMPANY_NAME'=>$COMPANY_NAME,
            'SPON_CONTACT_PERSON'=>$SPON_CONTACT_PERSON,
            'SPON_CONTACT_PERSON_MOBILE'=>$SPON_CONTACT_PERSON_MOBILE,
            'SPON_CONTACT_ADDRESS'=>$SPON_CONTACT_ADDRESS,
            'SPON_CONTACT_PHONE'=>$SPON_CONTACT_PHONE,
            'SPON_CONTACT_MOBILE'=>$SPON_CONTACT_MOBILE,
            'SPON_EMAIL'=>$SPON_EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('spon')->insert($data);

        return redirect('/parameters-setup/sponsor-add')->with('message','Sponsor save successfully done');

    }

    public function sponsor_edit($SPON_ID){

        $SPON_ID = decrypt($SPON_ID);

        $data = DB::table('spon')
                ->where('SPON_ID', '=', $SPON_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.sponsor_update', ['data' => $data]);
    }

    public function sponsor_update(Request $request){

        $id = $request->sponid;
        $COMPANY_NAME = $request->COMPANY_NAME;
        $SPON_CONTACT_PERSON = $request->SPON_CONTACT_PERSON;
        $SPON_CONTACT_PERSON_MOBILE = $request->SPON_CONTACT_PERSON_MOBILE;
        $SPON_CONTACT_ADDRESS = $request->SPON_CONTACT_ADDRESS;
        $SPON_CONTACT_PHONE = $request->SPON_CONTACT_PHONE;
        $SPON_CONTACT_MOBILE = $request->SPON_CONTACT_MOBILE;
        $SPON_EMAIL = $request->SPON_EMAIL;
        $updated_at = Carbon::now();

        DB::update('update spon set COMPANY_NAME = ?, SPON_CONTACT_PERSON = ?, SPON_CONTACT_PERSON_MOBILE = ?, SPON_CONTACT_ADDRESS = ?, SPON_CONTACT_PHONE = ?, SPON_CONTACT_MOBILE = ?, SPON_EMAIL = ?, updated_at = ? where SPON_ID = ?',[$COMPANY_NAME, $SPON_CONTACT_PERSON, $SPON_CONTACT_PERSON_MOBILE, $SPON_CONTACT_ADDRESS, $SPON_CONTACT_PHONE, $SPON_CONTACT_MOBILE, $SPON_EMAIL, $updated_at, $id]);

        return redirect('/parameters-setup/sponsor-add')->with('message','Sponsor update successfully done');
    }

    /*--- Asset Manager ---*/


    public function asset_mgr(){

        $managers = DB::table('asset_manager')->paginate(3);
        return view('BackEnd.pages.parametersetup.asset_manager', ['managers' => $managers]);
    }

    public function asset_mgr_store(Request $request){

        $MANAGER_COMPANY_NAME = $request->MANAGER_COMPANY_NAME;
        $MANAGER_CONTACT_PERSON = $request->MANAGER_CONTACT_PERSON;
        $MANAGER_CONTACT_PERSON_MOBILE = $request->MANAGER_CONTACT_PERSON_MOBILE;
        $MANAGER_CONTACT_ADDRESS = $request->MANAGER_CONTACT_ADDRESS;
        $MANAGER_CONTACT_PHONE = $request->MANAGER_CONTACT_PHONE;
        $MANAGER_CONTACT_MOBILE = $request->MANAGER_CONTACT_MOBILE;
        $MANAGER_EMAIL = $request->MANAGER_EMAIL;

        $data=array(
            'MANAGER_COMPANY_NAME'=>$MANAGER_COMPANY_NAME,
            'MANAGER_CONTACT_PERSON'=>$MANAGER_CONTACT_PERSON,
            'MANAGER_CONTACT_PERSON_MOBILE'=>$MANAGER_CONTACT_PERSON_MOBILE,
            'MANAGER_CONTACT_ADDRESS'=>$MANAGER_CONTACT_ADDRESS,
            'MANAGER_CONTACT_PHONE'=>$MANAGER_CONTACT_PHONE,
            'MANAGER_CONTACT_MOBILE'=>$MANAGER_CONTACT_MOBILE,
            'MANAGER_EMAIL'=>$MANAGER_EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('asset_manager')->insert($data);

        return redirect('/parameters-setup/assetmanager')->with('message','Asset Manager save successfully done');

    }

    public function asset_mgr_edit($MANAGER_ID){

        $MANAGER_ID = decrypt($MANAGER_ID);

        $data = DB::table('asset_manager')
                ->where('MANAGER_ID', '=', $MANAGER_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.asset_manager_update', ['data' => $data]);
    }

    public function asset_mgr_update(Request $request){

        $id = $request->assetid;
        $MANAGER_COMPANY_NAME = $request->MANAGER_COMPANY_NAME;
        $MANAGER_CONTACT_PERSON = $request->MANAGER_CONTACT_PERSON;
        $MANAGER_CONTACT_PERSON_MOBILE = $request->MANAGER_CONTACT_PERSON_MOBILE;
        $MANAGER_CONTACT_ADDRESS = $request->MANAGER_CONTACT_ADDRESS;
        $MANAGER_CONTACT_PHONE = $request->MANAGER_CONTACT_PHONE;
        $MANAGER_CONTACT_MOBILE = $request->MANAGER_CONTACT_MOBILE;
        $MANAGER_EMAIL = $request->MANAGER_EMAIL;
        $updated_at = Carbon::now();

        DB::update('update asset_manager set MANAGER_COMPANY_NAME = ?, MANAGER_CONTACT_PERSON = ?, MANAGER_CONTACT_PERSON_MOBILE = ?, MANAGER_CONTACT_ADDRESS = ?, MANAGER_CONTACT_PHONE = ?, MANAGER_CONTACT_MOBILE = ?, MANAGER_EMAIL = ?, updated_at = ? where MANAGER_ID = ?',[$MANAGER_COMPANY_NAME, $MANAGER_CONTACT_PERSON, $MANAGER_CONTACT_PERSON_MOBILE, $MANAGER_CONTACT_ADDRESS, $MANAGER_CONTACT_PHONE, $MANAGER_CONTACT_MOBILE, $MANAGER_EMAIL, $updated_at, $id]);

        return redirect('/parameters-setup/assetmanager')->with('message','Asset Manager update successfully done');
    }

    /*--- Trustee ---*/

    public function trustee_add(){

        $trustees = DB::table('trustee')->paginate(3);
        return view('BackEnd.pages.parametersetup.trustee_add', ['trustees' => $trustees]);
    }

    public function trustee_store(Request $request){

        $TRUSTEE_COMPANY_NAME = $request->TRUSTEE_COMPANY_NAME;
        $TRUSTEE_CONTACT_PERSON = $request->TRUSTEE_CONTACT_PERSON;
        $TRUSTEE_CONTACT_PERSON_MOBILE = $request->TRUSTEE_CONTACT_PERSON_MOBILE;
        $TRUSTEE_CONTACT_ADDRESS = $request->TRUSTEE_CONTACT_ADDRESS;
        $TRUSTEE_CONTACT_PHONE = $request->TRUSTEE_CONTACT_PHONE;
        $TRUSTEE_CONTACT_MOBILE = $request->TRUSTEE_CONTACT_MOBILE;
        $TRUSTEE_EMAIL = $request->TRUSTEE_EMAIL;

        $data=array(
            'TRUSTEE_COMPANY_NAME'=>$TRUSTEE_COMPANY_NAME,
            'TRUSTEE_CONTACT_PERSON'=>$TRUSTEE_CONTACT_PERSON,
            'TRUSTEE_CONTACT_PERSON_MOBILE'=>$TRUSTEE_CONTACT_PERSON_MOBILE,
            'TRUSTEE_CONTACT_ADDRESS'=>$TRUSTEE_CONTACT_ADDRESS,
            'TRUSTEE_CONTACT_PHONE'=>$TRUSTEE_CONTACT_PHONE,
            'TRUSTEE_CONTACT_MOBILE'=>$TRUSTEE_CONTACT_MOBILE,
            'TRUSTEE_EMAIL'=>$TRUSTEE_EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('trustee')->insert($data);

        return redirect('/parameters-setup/trustee')->with('message','Trustee save successfully done');

    }

    public function trustee_edit($TRUSTEE_ID){

        $TRUSTEE_ID = decrypt($TRUSTEE_ID);

        $data = DB::table('trustee')
                ->where('TRUSTEE_ID', '=', $TRUSTEE_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.trustee_update', ['data' => $data]);
    }

    public function trustee_update(Request $request){

        $id = $request->trsid;
        $TRUSTEE_COMPANY_NAME = $request->TRUSTEE_COMPANY_NAME;
        $TRUSTEE_CONTACT_PERSON = $request->TRUSTEE_CONTACT_PERSON;
        $TRUSTEE_CONTACT_PERSON_MOBILE = $request->TRUSTEE_CONTACT_PERSON_MOBILE;
        $TRUSTEE_CONTACT_ADDRESS = $request->TRUSTEE_CONTACT_ADDRESS;
        $TRUSTEE_CONTACT_PHONE = $request->TRUSTEE_CONTACT_PHONE;
        $TRUSTEE_CONTACT_MOBILE = $request->TRUSTEE_CONTACT_MOBILE;
        $TRUSTEE_EMAIL = $request->TRUSTEE_EMAIL;
        $updated_at = Carbon::now();

        DB::update('update trustee set TRUSTEE_COMPANY_NAME = ?, TRUSTEE_CONTACT_PERSON = ?, TRUSTEE_CONTACT_PERSON_MOBILE = ?, TRUSTEE_CONTACT_ADDRESS = ?, TRUSTEE_CONTACT_PHONE = ?, TRUSTEE_CONTACT_MOBILE = ?, TRUSTEE_EMAIL = ?, updated_at = ? where TRUSTEE_ID = ?',[$TRUSTEE_COMPANY_NAME, $TRUSTEE_CONTACT_PERSON, $TRUSTEE_CONTACT_PERSON_MOBILE, $TRUSTEE_CONTACT_ADDRESS, $TRUSTEE_CONTACT_PHONE, $TRUSTEE_CONTACT_MOBILE, $TRUSTEE_EMAIL, $updated_at, $id]);

        return redirect('/parameters-setup/trustee')->with('message','Trustee update successfully done');
    }


    /*--- Auditor ---*/

    public function auditor_add(){

        $auditors = DB::table('auditor')
                    ->join('portfolio_registration', 'auditor.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('auditor.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                   ->paginate(2);

        $ports = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.parametersetup.auditor_add', ['auditors' => $auditors, 'ports' => $ports]);
    }

    public function auditor_store(Request $request){

        $SPONSOR_ID = $request->SPONSOR_ID;
        $COMPANY_NAME = $request->COMPANY_NAME;
        $CONTACT_PERSON = $request->CONTACT_PERSON;
        $CONTACT_PERSON_MOBILE = $request->CONTACT_PERSON_MOBILE;
        $CONTACT_ADDRESS = $request->CONTACT_ADDRESS;
        $CONTACT_PHONE = $request->CONTACT_PHONE;
        $CONTACT_MOBILE = $request->CONTACT_MOBILE;
        $EMAIL = $request->EMAIL;

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'COMPANY_NAME'=>$COMPANY_NAME,
            'CONTACT_PERSON'=>$CONTACT_PERSON,
            'CONTACT_PERSON_MOBILE'=>$CONTACT_PERSON_MOBILE,
            'CONTACT_ADDRESS'=>$CONTACT_ADDRESS,
            'CONTACT_PHONE'=>$CONTACT_PHONE,
            'CONTACT_MOBILE'=>$CONTACT_MOBILE,
            'EMAIL'=>$EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('auditor')->insert($data);

        return redirect('/parameters-setup/auditor')->with('message','Auditor save successfully done');

    }

    public function auditor_edit($AUDITOR_ID){

        $AUDITOR_ID = decrypt($AUDITOR_ID);

        $data = DB::table('auditor')
                ->join('portfolio_registration', 'auditor.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('auditor.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('AUDITOR_ID', '=', $AUDITOR_ID)
                ->first();
        $ports = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.parametersetup.auditor_update', ['data' => $data, 'ports' => $ports]);
    }

    public function auditor_update(Request $request){

        $id = $request->adtrid;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $COMPANY_NAME = $request->COMPANY_NAME;
        $CONTACT_PERSON = $request->CONTACT_PERSON;
        $CONTACT_PERSON_MOBILE = $request->CONTACT_PERSON_MOBILE;
        $CONTACT_ADDRESS = $request->CONTACT_ADDRESS;
        $CONTACT_PHONE = $request->CONTACT_PHONE;
        $CONTACT_MOBILE = $request->CONTACT_MOBILE;
        $EMAIL = $request->EMAIL;
        $updated_at = Carbon::now();

        DB::update('update auditor set SPONSOR_ID = ?, COMPANY_NAME = ?, CONTACT_PERSON = ?, CONTACT_PERSON_MOBILE = ?, CONTACT_ADDRESS = ?, CONTACT_PHONE = ?, CONTACT_MOBILE = ?, EMAIL = ?, updated_at = ? where AUDITOR_ID = ?',[$SPONSOR_ID, $COMPANY_NAME, $CONTACT_PERSON, $CONTACT_PERSON_MOBILE, $CONTACT_ADDRESS, $CONTACT_PHONE, $CONTACT_MOBILE, $EMAIL, $updated_at, $id]);

        return redirect('/parameters-setup/auditor')->with('message','Auditor update successfully done');
    }


    /*--- Custodian ---*/

    public function custodian_add(){

        $custodians = DB::table('custodian')->paginate(5);
        return view('BackEnd.pages.parametersetup.custodian_add', ['custodians' => $custodians]);
    }

    public function custodian_store(Request $request){

        $CUSTODIAN_COMPANY_NAME = $request->CUSTODIAN_COMPANY_NAME;
        $CUSTODIAN_CONTACT_PERSON = $request->CUSTODIAN_CONTACT_PERSON;
        $CUST_CONTACT_PERSON_MOBILE = $request->CUST_CONTACT_PERSON_MOBILE;
        $CUSTODIAN_CONTACT_ADDRESS = $request->CUSTODIAN_CONTACT_ADDRESS;
        $CUSTODIAN_CONTACT_PHONE = $request->CUSTODIAN_CONTACT_PHONE;
        $CUSTODIAN_CONTACT_MOBILE = $request->CUSTODIAN_CONTACT_MOBILE;
        $CUSTODIAN_EMAIL = $request->CUSTODIAN_EMAIL;

        $data=array(
            'CUSTODIAN_COMPANY_NAME'=>$CUSTODIAN_COMPANY_NAME,
            'CUSTODIAN_CONTACT_PERSON'=>$CUSTODIAN_CONTACT_PERSON,
            'CUST_CONTACT_PERSON_MOBILE'=>$CUST_CONTACT_PERSON_MOBILE,
            'CUSTODIAN_CONTACT_ADDRESS'=>$CUSTODIAN_CONTACT_ADDRESS,
            'CUSTODIAN_CONTACT_PHONE'=>$CUSTODIAN_CONTACT_PHONE,
            'CUSTODIAN_CONTACT_MOBILE'=>$CUSTODIAN_CONTACT_MOBILE,
            'CUSTODIAN_EMAIL'=>$CUSTODIAN_EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('custodian')->insert($data);

        return redirect('/parameters-setup/custodian')->with('message','Custodian save successfully done');

    }

    public function custodian_edit($CUSTODIAN_ID){

        $CUSTODIAN_ID = decrypt($CUSTODIAN_ID);

        $data = DB::table('custodian')
                ->where('CUSTODIAN_ID', '=', $CUSTODIAN_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.custodian_update', ['data' => $data]);
    }

    public function custodian_update(Request $request){

        $id = $request->custid;
        $CUSTODIAN_COMPANY_NAME = $request->CUSTODIAN_COMPANY_NAME;
        $CUSTODIAN_CONTACT_PERSON = $request->CUSTODIAN_CONTACT_PERSON;
        $CUST_CONTACT_PERSON_MOBILE = $request->CUST_CONTACT_PERSON_MOBILE;
        $CUSTODIAN_CONTACT_ADDRESS = $request->CUSTODIAN_CONTACT_ADDRESS;
        $CUSTODIAN_CONTACT_PHONE = $request->CUSTODIAN_CONTACT_PHONE;
        $CUSTODIAN_CONTACT_MOBILE = $request->CUSTODIAN_CONTACT_MOBILE;
        $CUSTODIAN_EMAIL = $request->CUSTODIAN_EMAIL;
        $updated_at = Carbon::now();

        DB::update('update custodian set CUSTODIAN_COMPANY_NAME = ?, CUSTODIAN_CONTACT_PERSON = ?, CUST_CONTACT_PERSON_MOBILE = ?, CUSTODIAN_CONTACT_ADDRESS = ?, CUSTODIAN_CONTACT_PHONE = ?, CUSTODIAN_CONTACT_MOBILE = ?, CUSTODIAN_EMAIL = ?, updated_at = ? where CUSTODIAN_ID = ?',[$CUSTODIAN_COMPANY_NAME, $CUSTODIAN_CONTACT_PERSON, $CUST_CONTACT_PERSON_MOBILE, $CUSTODIAN_CONTACT_ADDRESS, $CUSTODIAN_CONTACT_PHONE, $CUSTODIAN_CONTACT_MOBILE, $CUSTODIAN_EMAIL, $updated_at, $id]);

        return redirect('/parameters-setup/custodian')->with('message','Custodian update successfully done');
    }


    /*--- Bank ---*/

    public function bank_add(){

        $banks = DB::table('bank')->paginate(5);
        return view('BackEnd.pages.parametersetup.bank_add', ['banks' => $banks]);
    }

    public function bank_store(Request $request){

        $BANK_NAME = $request->BANK_NAME;

        $data=array(
            'BANK_NAME'=>$BANK_NAME,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('bank')->insert($data);

        return redirect('/parameters-setup/bank')->with('message','Bank save successfully done');

    }

    public function bank_edit($BANK_ID){

        $BANK_ID = decrypt($BANK_ID);

        $data = DB::table('bank')
                ->where('BANK_ID', '=', $BANK_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.bank_update', ['data' => $data]);
    }

    public function bank_update(Request $request){

        $id = $request->bankid;
        $BANK_NAME = $request->BANK_NAME;
        $updated_at = Carbon::now();

        DB::update('update bank set BANK_NAME = ? , updated_at = ? where BANK_ID = ?',[$BANK_NAME, $updated_at, $id]);

        return redirect('/parameters-setup/bank')->with('message','Bank update successfully done');
    }

    /*--- Bank Account ---*/


    public function bank_account_add(){

        $banks = DB::table('bank')->get();
        $accounts = DB::table('bank_account')
                    ->join('bank', 'bank_account.BANK_ID', '=', 'bank.BANK_ID')
                    ->join('portfolio_registration', 'bank_account.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->select('bank_account.*', 'bank.BANK_NAME', 'portfolio_registration.PORTFOLIO_NAME')
                    ->paginate(3);
                    $ports = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.parametersetup.bank_account_add', ['banks' => $banks, 'accounts' => $accounts, 'ports' => $ports]);
    }

    public function bank_account_store(Request $request){

        $BANK_ID = $request->BANK_ID;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $ACCOUNT_NAME = $request->ACCOUNT_NAME;
        $BRANCH = $request->BRANCH;
        $ACCOUNT_NO = $request->ACCOUNT_NO;
        $ROUTING_NO = $request->ROUTING_NO;
        $ACCOUNT_TYPE = $request->ACCOUNT_TYPE;
        $INTEREST_RATE = $request->INTEREST_RATE;

        $data=array(
            'BANK_ID'=>$BANK_ID,
            'SPONSOR_ID'=>$SPONSOR_ID,
            'ACCOUNT_NAME'=>$ACCOUNT_NAME,
            'BRANCH'=>$BRANCH,
            'ACCOUNT_NO'=>$ACCOUNT_NO,
            'ROUTING_NO'=>$ROUTING_NO,
            'ACCOUNT_TYPE'=>$ACCOUNT_TYPE,
            'INTEREST_RATE'=>$INTEREST_RATE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('bank_account')->insert($data);
        return redirect('/parameters-setup/bank-account')->with('message','Bank Account save successfully done');

    }

    public function bank_account_edit($BANK_ACCOUNT_ID){

        $BANK_ACCOUNT_ID = decrypt($BANK_ACCOUNT_ID);

        $banks = DB::table('bank')->get();
        $data = DB::table('bank_account')
                ->join('bank', 'bank_account.BANK_ID', '=', 'bank.BANK_ID')
                ->join('portfolio_registration', 'bank_account.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('bank_account.*', 'bank.BANK_ID as bid', 'bank.BANK_NAME as bname', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('bank_account.BANK_ACCOUNT_ID', '=', $BANK_ACCOUNT_ID)
                ->first();
                $ports = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.parametersetup.bank_account_update', ['banks' => $banks,'data' => $data, 'ports' => $ports]);
    }

    public function bank_account_update(Request $request){

        $id = $request->baid;
        $BANK_ID = $request->BANK_ID;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $ACCOUNT_NAME = $request->ACCOUNT_NAME;
        $BRANCH = $request->BRANCH;
        $ACCOUNT_NO = $request->ACCOUNT_NO;
        $ROUTING_NO = $request->ROUTING_NO;
        $ACCOUNT_TYPE = $request->ACCOUNT_TYPE;
        $INTEREST_RATE = $request->INTEREST_RATE;
        $updated_at = Carbon::now();

        DB::update('update bank_account set BANK_ID = ?, SPONSOR_ID = ?, ACCOUNT_NAME = ?, BRANCH = ?, ACCOUNT_NO = ?, ROUTING_NO = ?, ACCOUNT_TYPE = ?, INTEREST_RATE = ?, updated_at = ? where BANK_ACCOUNT_ID = ?',[$BANK_ID, $SPONSOR_ID, $ACCOUNT_NAME, $BRANCH, $ACCOUNT_NO, $ROUTING_NO, $ACCOUNT_TYPE, $INTEREST_RATE, $updated_at, $id]);

        return redirect('/parameters-setup/bank-account')->with('message','Bank Account update successfully done');
    }


    /*--- District ---*/


    public function district_add(){

        $districts = DB::table('district')->paginate(5);
        return view('BackEnd.pages.parametersetup.district_add', ['districts' => $districts]);
    }

    public function district_store(Request $request){

        $DISTRICT = $request->DISTRICT;
        $REMARKS = $request->REMARKS;

        $data=array(
            'DISTRICT'=>$DISTRICT,
            'REMARKS'=>$REMARKS,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('district')->insert($data);
        return redirect('/parameters-setup/district')->with('message','District save successfully done');

    }

    public function district_edit($DISTRICT_ID){

        $DISTRICT_ID = decrypt($DISTRICT_ID);

        $data = DB::table('district')
                ->where('DISTRICT_ID', '=', $DISTRICT_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.district_update', ['data' => $data]);
    }

    public function district_update(Request $request){

        $id = $request->disid;
        $DISTRICT = $request->DISTRICT;
        $REMARKS = $request->REMARKS;
        $updated_at = Carbon::now();

        DB::update('update district set DISTRICT = ?, REMARKS = ?, updated_at = ? where DISTRICT_ID = ?',[$DISTRICT, $REMARKS, $updated_at, $id]);

        return redirect('/parameters-setup/district')->with('message','District update successfully done');
    }

    /*--- Agent Area ---*/


    public function agentarea_add(){

        $districts = DB::table('district')->get();
        $areas = DB::table('agent_area')
                ->join('district', 'agent_area.DISTRICT_ID', '=', 'district.DISTRICT_ID')
                ->select('agent_area.*', 'district.DISTRICT as dist_name')
                ->paginate(5);

        return view('BackEnd.pages.parametersetup.agentarea_add', ['districts' => $districts , 'areas' => $areas]);
    }

    public function agentarea_store(Request $request){

        $value = DB::table('agent_area')
                ->select('AREA_CODE')
                ->orderBy('AGENT_AREA_ID', 'desc')
                ->first();

        $new_value = $value->AREA_CODE + 1;

        $DISTRICT_ID = $request->DISTRICT_ID;
        $AGENT_AREA = $request->AGENT_AREA;
        $AREA_CODE_ALPHA = $request->AREA_CODE_ALPHA;

        $data=array(
            'DISTRICT_ID'=>$DISTRICT_ID,
            'AGENT_AREA'=>$AGENT_AREA,
            'AREA_CODE_ALPHA'=>$AREA_CODE_ALPHA,
            'AREA_CODE'=>$new_value,
            'AREA_CODE_NUM'=>$new_value,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('agent_area')->insert($data);
        return redirect('/parameters-setup/agentarea')->with('message','Agent Area save successfully done');
    }

    public function agentarea_edit($AGENT_AREA_ID){

        $AGENT_AREA_ID = decrypt($AGENT_AREA_ID);

        $districts = DB::table('district')->get();
        $data = DB::table('agent_area')
                ->join('district', 'agent_area.DISTRICT_ID', '=', 'district.DISTRICT_ID')
                ->select('agent_area.*', 'district.DISTRICT as name','district.DISTRICT_ID as id')
                ->where('AGENT_AREA_ID', '=', $AGENT_AREA_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.agentarea_update', ['data' => $data, 'districts' => $districts]);
    }

    public function agentarea_update(Request $request){

        $id = $request->areaid;
        $DISTRICT_ID = $request->DISTRICT_ID;
        $AGENT_AREA = $request->AGENT_AREA;
        $AREA_CODE_ALPHA = $request->AREA_CODE_ALPHA;
        $updated_at = Carbon::now();

        DB::update('update agent_area set DISTRICT_ID = ?, AGENT_AREA = ?, AREA_CODE_ALPHA = ?, updated_at = ? where AGENT_AREA_ID = ?',[$DISTRICT_ID, $AGENT_AREA, $AREA_CODE_ALPHA, $updated_at, $id]);

        return redirect('/parameters-setup/agentarea')->with('message','Agent Area update successfully done');
    }

    /*--- Investor Type ---*/

    public function investortype_add(){

        $inv_type = DB::table('investor_type')->paginate(5);
        return view('BackEnd.pages.parametersetup.investortype_add', ['inv_type' => $inv_type]);
    }

    public function investortype_store(Request $request){

        $INVESTOR_TYPE = $request->INVESTOR_TYPE;
        $FLAG = $request->FLAG;

        $data=array(
            'INVESTOR_TYPE'=>$INVESTOR_TYPE,
            'FLAG'=>$FLAG,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('investor_type')->insert($data);
        return redirect('/parameters-setup/investor-type')->with('message','Investor Type save successfully done');
    }

    public function investortype_edit($INVESTOR_TYPE_ID){

        $INVESTOR_TYPE_ID = decrypt($INVESTOR_TYPE_ID);

        $data = DB::table('investor_type')
                ->where('INVESTOR_TYPE_ID', '=', $INVESTOR_TYPE_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.investortype_update', ['data' => $data]);
    }

    public function investortype_update(Request $request){

        $id = $request->invid;
        $INVESTOR_TYPE = $request->INVESTOR_TYPE;
        $FLAG = $request->FLAG;
        $updated_at = Carbon::now();

        DB::update('update investor_type set INVESTOR_TYPE = ?, FLAG = ?, updated_at = ? where INVESTOR_TYPE_ID = ?',[$INVESTOR_TYPE, $FLAG, $updated_at, $id]);

        return redirect('/parameters-setup/investor-type')->with('message','Investor Type update successfully done');
    }

    /*--- Management Fee Rule ---*/


    public function mgmtfeerule_add(){

        $mfrs = DB::table('managementfee_rule')
                ->join('portfolio_registration', 'managementfee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('managementfee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->paginate(5);
        $ports = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.parametersetup.mgmt_fee_add', ['mfrs' => $mfrs, 'ports' => $ports]);
    }

    public function mgmtfeerule_store(Request $request){

        $SPONSOR_ID = $request->SPONSOR_ID;
        $MAXLIMIT = $request->MAXLIMIT;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'MAXLIMIT'=>$MAXLIMIT,
            'PAYMENT_TERM_FLAG'=>$PAYMENT_TERM_FLAG,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('managementfee_rule')->insert($data);
        return redirect('/parameters-setup/mgmtfeerule')->with('message','Management Fee Rule save successfully done');
    }

    public function mgmtfeerule_edit($MANAGEMENTFEE_RULE_ID){

        $MANAGEMENTFEE_RULE_ID = decrypt($MANAGEMENTFEE_RULE_ID);

        $data = DB::table('managementfee_rule')
                ->join('portfolio_registration', 'managementfee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('managementfee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('MANAGEMENTFEE_RULE_ID', '=', $MANAGEMENTFEE_RULE_ID)
                ->first();
        $ports = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.parametersetup.mgmt_fee_update', ['data' => $data, 'ports' => $ports]);
    }

    public function mgmtfeerule_update(Request $request){

        $id = $request->mgrid;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $MAXLIMIT = $request->MAXLIMIT;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;
        $updated_at = Carbon::now();

        DB::update('update managementfee_rule set SPONSOR_ID = ?, MAXLIMIT = ? , PAYMENT_TERM_FLAG = ?, updated_at = ? where MANAGEMENTFEE_RULE_ID = ?',[$SPONSOR_ID, $MAXLIMIT, $PAYMENT_TERM_FLAG, $updated_at, $id]);

        return redirect('/parameters-setup/mgmtfeerule')->with('message','Management Fee Rule update successfully done');
    }


    /*--- Custodian Fee Rule ---*/

    public function custfeerule_add(){

        $custfs = DB::table('custodianfee_rule')
                  ->join('portfolio_registration', 'custodianfee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                  ->select('custodianfee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                  ->paginate(3);
        $ports = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.parametersetup.cust_fee_add', ['custfs' => $custfs, 'ports' => $ports]);
    }

    public function custfeerule_store(Request $request){

        $SPONSOR_ID = $request->SPONSOR_ID;
        $TRANSECTION_FEE = $request->TRANSECTION_FEE;
        $MAXLIMIT = $request->MAXLIMIT;
        $ANNUALFEERATE = $request->ANNUALFEERATE;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'TRANSECTION_FEE'=>$TRANSECTION_FEE,
            'MAXLIMIT'=>$MAXLIMIT,
            'ANNUALFEERATE'=>$ANNUALFEERATE,
            'PAYMENT_TERM_FLAG'=>$PAYMENT_TERM_FLAG,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('custodianfee_rule')->insert($data);
        return redirect('/parameters-setup/custfeerule')->with('message','Custodian Fee Rule save successfully done');
    }

    public function custfeerule_edit($CUSTODIANFEE_RULE_ID){

        $CUSTODIANFEE_RULE_ID = decrypt($CUSTODIANFEE_RULE_ID);

        $data = DB::table('custodianfee_rule')
                ->join('portfolio_registration', 'custodianfee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                  ->select('custodianfee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('CUSTODIANFEE_RULE_ID', '=', $CUSTODIANFEE_RULE_ID)
                ->first();
        $ports = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.parametersetup.cust_fee_update', ['data' => $data, 'ports' => $ports]);
    }

    public function custfeerule_update(Request $request){

        $id = $request->custfid;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $TRANSECTION_FEE = $request->TRANSECTION_FEE;
        $MAXLIMIT = $request->MAXLIMIT;
        $ANNUALFEERATE = $request->ANNUALFEERATE;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;
        $updated_at = Carbon::now();

        DB::update('update custodianfee_rule set SPONSOR_ID = ?, TRANSECTION_FEE = ? , MAXLIMIT = ? , ANNUALFEERATE = ?, PAYMENT_TERM_FLAG = ?, updated_at = ? where CUSTODIANFEE_RULE_ID = ?',[$SPONSOR_ID, $TRANSECTION_FEE, $MAXLIMIT, $ANNUALFEERATE, $PAYMENT_TERM_FLAG, $updated_at, $id]);

        return redirect('/parameters-setup/custfeerule')->with('message','Custodian Fee Rule update successfully done');
    }


    /*--- Trustee Fee Rule ---*/

    public function trstfeerule_add(){

        $trfs = DB::table('trusteefee_rule')
                ->join('portfolio_registration', 'trusteefee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('trusteefee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->paginate(5);
        $ports = DB::table('portfolio_registration')->get();
        return view('BackEnd.pages.parametersetup.trst_fee_add', ['trfs' => $trfs, 'ports' => $ports]);
    }

    public function trstfeerule_store(Request $request){

        $SPONSOR_ID = $request->SPONSOR_ID;
        $MAXLIMIT = $request->MAXLIMIT;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'MAXLIMIT'=>$MAXLIMIT,
            'PAYMENT_TERM_FLAG'=>$PAYMENT_TERM_FLAG,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('trusteefee_rule')->insert($data);
        return redirect('/parameters-setup/trstfeerule')->with('message','Trustee Fee Rule save successfully done');
    }

    public function trstfeerule_edit($TRUSTEEFEE_RULE_ID){

        $TRUSTEEFEE_RULE_ID = decrypt($TRUSTEEFEE_RULE_ID);

        $data = DB::table('trusteefee_rule')
                ->join('portfolio_registration', 'trusteefee_rule.SPONSOR_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('trusteefee_rule.*', 'portfolio_registration.PRO_REG_ID', 'portfolio_registration.PORTFOLIO_NAME')
                ->where('TRUSTEEFEE_RULE_ID', '=', $TRUSTEEFEE_RULE_ID)
                ->first();
        $ports = DB::table('portfolio_registration')->get();

        return view('BackEnd.pages.parametersetup.trst_fee_update', ['data' => $data, 'ports' => $ports]);
    }

    public function trstfeerule_update(Request $request){

        $id = $request->trfid;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $MAXLIMIT = $request->MAXLIMIT;
        $PAYMENT_TERM_FLAG = $request->PAYMENT_TERM_FLAG;
        $updated_at = Carbon::now();

        DB::update('update trusteefee_rule set SPONSOR_ID = ?, MAXLIMIT = ? , PAYMENT_TERM_FLAG = ?, updated_at = ? where TRUSTEEFEE_RULE_ID = ?',[$SPONSOR_ID, $MAXLIMIT, $PAYMENT_TERM_FLAG, $updated_at, $id]);

        return redirect('/parameters-setup/trstfeerule')->with('message','Trustee Fee Rule update successfully done');
    }

    /*--- Commission for sales Agent ---*/


         /*--- Pending ---*/

     /*--- Commission for sales Agent ---*/



     /*--- Investror's Country ---*/


    public function invCountry_add(){

        $countries = DB::table('applicant_country')->paginate(3);
        return view('BackEnd.pages.parametersetup.invcountry_add', ['countries' => $countries]);
    }

    public function invCountry_store(Request $request){

        $APPLICANT_COUNTRY_NAME = $request->APPLICANT_COUNTRY_NAME;
        $APPLICANT_COUNTRY_CODE = $request->APPLICANT_COUNTRY_CODE;

        $data=array(
            'APPLICANT_COUNTRY_NAME'=>$APPLICANT_COUNTRY_NAME,
            'APPLICANT_COUNTRY_CODE'=>$APPLICANT_COUNTRY_CODE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('applicant_country')->insert($data);
        return redirect('/parameters-setup/invcountry')->with('message','Investror Country save successfully done');
    }

    public function invCountry_edit($APPLICANT_COUNTRY_ID){

        $APPLICANT_COUNTRY_ID = decrypt($APPLICANT_COUNTRY_ID);

        $data = DB::table('applicant_country')
                ->where('APPLICANT_COUNTRY_ID', '=', $APPLICANT_COUNTRY_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.invcountry_update', ['data' => $data]);
    }

    public function invCountry_update(Request $request){

        $id = $request->ctryid;
        $APPLICANT_COUNTRY_NAME = $request->APPLICANT_COUNTRY_NAME;
        $APPLICANT_COUNTRY_CODE = $request->APPLICANT_COUNTRY_CODE;
        $updated_at = Carbon::now();

        DB::update('update applicant_country set APPLICANT_COUNTRY_NAME = ?, APPLICANT_COUNTRY_CODE = ? , updated_at = ? where APPLICANT_COUNTRY_ID = ?',[$APPLICANT_COUNTRY_NAME, $APPLICANT_COUNTRY_CODE, $updated_at, $id]);

        return redirect('/parameters-setup/invcountry')->with('message','Investror Country update successfully done');
    }

    /*--- Foreign Currency ---*/

    public function currency_view(){

        $currencies = DB::table('currency_type')
                    ->join('applicant_country', 'currency_type.COUNTRY_ID', '=', 'applicant_country.APPLICANT_COUNTRY_ID')
                    ->select('currency_type.*', 'applicant_country.APPLICANT_COUNTRY_NAME as name')
                    ->paginate(5);
        return view('BackEnd.pages.parametersetup.currency', ['currencies' => $currencies]);
    }


    /*--- Investment Type ---*/


    public function inv_type_add(){

        $invst_typs = DB::table('investment_type')->paginate(4);
        return view('BackEnd.pages.parametersetup.inv_type_add', ['invst_typs' => $invst_typs]);
    }

    public function inv_type_store(Request $request){

        $INVESTMENT_TYPE = $request->INVESTMENT_TYPE;

        $data=array(
            'INVESTMENT_TYPE'=>$INVESTMENT_TYPE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('investment_type')->insert($data);
        return redirect('/parameters-setup/investment-type')->with('message','Investment Type save successfully done');
    }

    public function inv_type_edit($INVESTMENT_TYPE_ID){

        $INVESTMENT_TYPE_ID = decrypt($INVESTMENT_TYPE_ID);

        $data = DB::table('investment_type')
                ->where('INVESTMENT_TYPE_ID', '=', $INVESTMENT_TYPE_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.inv_type_update', ['data' => $data]);
    }

    public function inv_type_update(Request $request){

        $id = $request->invstid;
        $INVESTMENT_TYPE = $request->INVESTMENT_TYPE;
        $updated_at = Carbon::now();

        DB::update('update investment_type set INVESTMENT_TYPE = ? , updated_at = ? where INVESTMENT_TYPE_ID = ?',[$INVESTMENT_TYPE, $updated_at, $id]);

        return redirect('/parameters-setup/investment-type')->with('message','Investment Type update successfully done');
    }


    /*--- Portfolio Registration ---*/


    public function portfolio_reg(){

        $sponsors = DB::table('spon')->get();
        $asset_mgrs = DB::table('asset_manager')->get();
        $custs = DB::table('custodian')->get();
        $trsts = DB::table('trustee')->get();
        $por_types = DB::table('portfolio_type')->get();

        return view('BackEnd.pages.parametersetup.portfolio_reg', ['sponsors' => $sponsors, 'asset_mgrs' => $asset_mgrs, 'custs' => $custs, 'trsts' => $trsts, 'por_types' => $por_types]);
    }

    public function portfolio_store(Request $request){

        $SPONSOR_ID = $request->SPONSOR_ID;
        $PORTFOLIO_NAME = $request->PORTFOLIO_NAME;
        $PORTFOLIO_TYPE_ID = $request->PORTFOLIO_TYPE_ID;
        $SYMBOL = $request->SYMBOL;
        $FACEVALUE = $request->FACEVALUE;
        $ASSET_MANAGER_ID = $request->ASSET_MANAGER_ID;
        $CUSTODIAN_ID = $request->CUSTODIAN_ID;
        $TRUSTEE_ID = $request->TRUSTEE_ID;
        $LOT_SIZ_INDI = $request->LOT_SIZ_INDI;
        $LOT_SIZ_INST = $request->LOT_SIZ_INST;
        $INI_FUND_SIZ = $request->INI_FUND_SIZ;
        $APPL_START_DATE = $request->APPL_START_DATE;
        $APPL_END_DATE = $request->APPL_END_DATE;
        $GEN_INV_LKIN_DAY = $request->GEN_INV_LKIN_DAY;
        $SPN_INV_LKIN_DAY = $request->SPN_INV_LKIN_DAY;
        $FUND_START_DATE = $request->FUND_START_DATE;
        $INDV_SUBS = $request->INDV_SUBS;
        $INST_SUBS = $request->INST_SUBS;
        $COMMISSION = $request->COMMISSION;

        $data=array(
            'SPONSOR_ID'=>$SPONSOR_ID,
            'PORTFOLIO_NAME'=>$PORTFOLIO_NAME,
            'PORTFOLIO_TYPE_ID'=>$PORTFOLIO_TYPE_ID,
            'SYMBOL'=>$SYMBOL,
            'FACEVALUE'=>$FACEVALUE,
            'ASSET_MANAGER_ID'=>$ASSET_MANAGER_ID,
            'CUSTODIAN_ID'=>$CUSTODIAN_ID,
            'TRUSTEE_ID'=>$TRUSTEE_ID,
            'LOT_SIZ_INDI'=>$LOT_SIZ_INDI,
            'LOT_SIZ_INST'=>$LOT_SIZ_INST,
            'INI_FUND_SIZ'=>$INI_FUND_SIZ,
            'APPL_START_DATE'=>$APPL_START_DATE,
            'APPL_END_DATE'=>$APPL_END_DATE,
            'GEN_INV_LKIN_DAY'=>$GEN_INV_LKIN_DAY,
            'SPN_INV_LKIN_DAY'=>$SPN_INV_LKIN_DAY,
            'FUND_START_DATE'=>$FUND_START_DATE,
            'INDV_SUBS'=>$INDV_SUBS,
            'INST_SUBS'=>$INST_SUBS,
            'COMMISSION'=>$COMMISSION,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('portfolio_registration')->insert($data);
        return redirect('/parameters-setup/portfolio-registration')->with('message','Portfolio Registration successfully done');
    }

    public function portfolio_show(){

        $profiles = DB::table('portfolio_registration')
                ->join('portfolio_type', 'portfolio_registration.PORTFOLIO_TYPE_ID', '=', 'portfolio_type.PORTFOLIO_TYPE_ID')
                ->get();
        return view('BackEnd.pages.parametersetup.portfolio_view', ['profiles' => $profiles]);
    }

     public function portfolio_edit($PRO_REG_ID){

        $PRO_REG_ID = decrypt($PRO_REG_ID);

        $sponsors = DB::table('spon')->get();
        $asset_mgrs = DB::table('asset_manager')->get();
        $custs = DB::table('custodian')->get();
        $trsts = DB::table('trustee')->get();
        $por_types = DB::table('portfolio_type')->get();

        $profiles = DB::table('portfolio_registration')
                ->join('portfolio_type', 'portfolio_registration.PORTFOLIO_TYPE_ID', '=', 'portfolio_type.PORTFOLIO_TYPE_ID')
                ->join('spon', 'portfolio_registration.SPONSOR_ID', '=', 'spon.SPON_ID')
                ->join('asset_manager', 'portfolio_registration.ASSET_MANAGER_ID', '=', 'asset_manager.MANAGER_ID')
                ->join('custodian', 'portfolio_registration.CUSTODIAN_ID', '=', 'custodian.CUSTODIAN_ID')
                ->join('trustee', 'portfolio_registration.TRUSTEE_ID', '=', 'trustee.TRUSTEE_ID')
                ->where('portfolio_registration.PRO_REG_ID', '=', $PRO_REG_ID)
                ->first();
        return view('BackEnd.pages.parametersetup.portfolioedit', ['profiles' => $profiles, 'sponsors' => $sponsors, 'asset_mgrs' => $asset_mgrs, 'custs' => $custs, 'trsts' => $trsts, 'por_types' => $por_types]);
    }

    public function portfolio_update(Request $request){

        $id = $request->proid;
        $SPONSOR_ID = $request->SPONSOR_ID;
        $PORTFOLIO_NAME = $request->PORTFOLIO_NAME;
        $PORTFOLIO_TYPE_ID = $request->PORTFOLIO_TYPE_ID;
        $SYMBOL = $request->SYMBOL;
        $FACEVALUE = $request->FACEVALUE;
        $ASSET_MANAGER_ID = $request->ASSET_MANAGER_ID;
        $CUSTODIAN_ID = $request->CUSTODIAN_ID;
        $TRUSTEE_ID = $request->TRUSTEE_ID;
        $LOT_SIZ_INDI = $request->LOT_SIZ_INDI;
        $LOT_SIZ_INST = $request->LOT_SIZ_INST;
        $INI_FUND_SIZ = $request->INI_FUND_SIZ;
        $APPL_START_DATE = $request->APPL_START_DATE;
        $APPL_END_DATE = $request->APPL_END_DATE;
        $GEN_INV_LKIN_DAY = $request->GEN_INV_LKIN_DAY;
        $SPN_INV_LKIN_DAY = $request->SPN_INV_LKIN_DAY;
        $FUND_START_DATE = $request->FUND_START_DATE;
        $FUND_CLOSE_DATE = $request->FUND_CLOSE_DATE;
        $INDV_SUBS = $request->INDV_SUBS;
        $INST_SUBS = $request->INST_SUBS;
        $COMMISSION = $request->COMMISSION;
        $updated_at = Carbon::now();

        DB::update('update portfolio_registration set SPONSOR_ID = ?, PORTFOLIO_NAME = ?, PORTFOLIO_TYPE_ID = ?, SYMBOL = ?, FACEVALUE = ?, ASSET_MANAGER_ID = ?, CUSTODIAN_ID = ?, TRUSTEE_ID = ?, LOT_SIZ_INDI = ?, LOT_SIZ_INST = ?, INI_FUND_SIZ = ?, APPL_START_DATE = ?, APPL_END_DATE = ?, GEN_INV_LKIN_DAY = ?, SPN_INV_LKIN_DAY = ?, FUND_START_DATE = ?, FUND_CLOSE_DATE = ?, INDV_SUBS = ?, INST_SUBS = ?, COMMISSION = ?, updated_at = ? where PRO_REG_ID = ?',[$SPONSOR_ID, $PORTFOLIO_NAME, $PORTFOLIO_TYPE_ID, $SYMBOL, $FACEVALUE, $ASSET_MANAGER_ID, $CUSTODIAN_ID, $TRUSTEE_ID, $LOT_SIZ_INDI, $LOT_SIZ_INST, $INI_FUND_SIZ, $APPL_START_DATE, $APPL_END_DATE, $GEN_INV_LKIN_DAY, $SPN_INV_LKIN_DAY, $FUND_START_DATE, $FUND_CLOSE_DATE, $INDV_SUBS, $INST_SUBS, $COMMISSION, $updated_at, $id]);

        return redirect('/parameters-setup/portfolio-registration/view')->with('message','Portfolio update successfully done');
    }


    /*--- Investment Type Setup ---*/

    public function invstmnt_type(){

        $por_names = DB::table('portfolio_registration')->get();
        $inv_types = DB::table('investment_type')->get();
        $invtstups = DB::table('investment_type_setup')
                    ->join('portfolio_registration', 'investment_type_setup.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                    ->join('investment_type', 'investment_type_setup.INVESTMENT_TYPE_ID', '=', 'investment_type.INVESTMENT_TYPE_ID')
                    ->select('investment_type_setup.*', 'portfolio_registration.PORTFOLIO_NAME', 'investment_type.INVESTMENT_TYPE')
                    ->paginate(5);

        return view('BackEnd.pages.parametersetup.invstmnt_type_add', ['por_names' => $por_names,'inv_types' => $inv_types, 'invtstups' => $invtstups]);
    }

    public function invstmnt_store(Request $request){

        $PRO_REG_ID = $request->PRO_REG_ID;
        $INVESTMENT_TYPE_ID = $request->INVESTMENT_TYPE_ID;
        $MAXLIMIT = $request->MAXLIMIT;

        $data=array(
            'PRO_REG_ID'=>$PRO_REG_ID,
            'INVESTMENT_TYPE_ID'=>$INVESTMENT_TYPE_ID,
            'MAXLIMIT'=>$MAXLIMIT,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('investment_type_setup')->insert($data);
        return redirect('/parameters-setup/investmenttype')->with('message','Investment Setup successfully done');
    }

    public function invstmnt_edit($INVESTMENT_TYPE_SETUP_ID){

        $INVESTMENT_TYPE_SETUP_ID = decrypt($INVESTMENT_TYPE_SETUP_ID);

        $por_names = DB::table('portfolio_registration')->get();
        $inv_types = DB::table('investment_type')->get();
        $data = DB::table('investment_type_setup')
                ->join('portfolio_registration', 'investment_type_setup.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->join('investment_type', 'investment_type_setup.INVESTMENT_TYPE_ID', '=', 'investment_type.INVESTMENT_TYPE_ID')
                ->where('investment_type_setup.INVESTMENT_TYPE_SETUP_ID', '=', $INVESTMENT_TYPE_SETUP_ID)
                ->first();

        return view('BackEnd.pages.parametersetup.invstmnt_type_update', ['data' => $data, 'por_names' => $por_names, 'inv_types' => $inv_types]);
    }

    public function invstmnt_update(Request $request){

        $id = $request->insid;
        $PRO_REG_ID = $request->PRO_REG_ID;
        $INVESTMENT_TYPE_ID = $request->INVESTMENT_TYPE_ID;
        $MAXLIMIT = $request->MAXLIMIT;
        $updated_at = Carbon::now();

        DB::update('update investment_type_setup set PRO_REG_ID = ?, INVESTMENT_TYPE_ID = ?, MAXLIMIT = ? , updated_at = ? where INVESTMENT_TYPE_SETUP_ID = ?',[$PRO_REG_ID, $INVESTMENT_TYPE_ID, $MAXLIMIT, $updated_at, $id]);

        return redirect('/parameters-setup/investmenttype')->with('message','Investment Setup update successfully done');
    }

}
