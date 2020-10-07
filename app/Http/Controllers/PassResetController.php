<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PassResetController extends Controller
{
    public function passindex(){
    	return view('login.passres');
    }

    public function reset(Request $request){

    	$id = $request->regno;
    	$pass = md5($request->password);

    	DB::update('update principal_applicant set PASSWORD = ? where REGISTRATION_NO = ?',[$pass, $id]);

    	return redirect('/mpassresm')->with('message','Successfully Done!!!');
    }
}
