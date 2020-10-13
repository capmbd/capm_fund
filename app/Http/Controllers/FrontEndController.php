<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;
use DB;
use Mail;
class FrontEndController extends Controller
{
    public function login_mgmt(){
    	return view('login.login');
    }

    public function client_home(){
        //return redirect('http://capmbd.com');
        return view('BackEnd.pages.clienthome');
    }

    public function get_apps_login(){
    	return view('login.appslogin');
    }

    public function wbinvlgin(){
        return view('login.wbinvlogin');
    }

    public function wbtalgin(){
        return view('login.wbtalogin');
    }

    public function taLoginMy(){
        return view('BackEnd.pages.clienthome');
    }


    public function forgot($email){

        $user = DB::table('users')
                ->select(DB::raw('count(*) as user_count'))
                ->where('email', '=', $email)
                ->first();

        if($user->user_count == 1){

            $code = rand(100000,999999);

            $emp = DB::table('users')->select('name')->where('email',$email)->first();
            $name = $emp->name;

            DB::table('users')
                  ->where('email', '=', $email)
                  ->update([
                        'remember_token' => $code
                  ]);

            Mail::send([], [], function($message) use ($name, $email, $code){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($email);
                $message->subject('Password Reset Code of '.$name);
                $message->setBody('Your Password Reset Code: '.$code);
            });

            $result = 'Check Your Mail & Enter Code For Reset';
        }
        else{
            $result = 'Sorry!!! Your Entered Email Is Not Registered';
        }

        return $result;
    }

    public function getReset($code, $email, $pass){

        $password = Hash::make($pass);

        $reset = DB::table('users')
                ->where('email', '=', $email)
                ->where('remember_token', '=', $code)
                ->update([
                    'password' => $password,
                    'remember_token' => NULL
            ]);

        if($reset == 1){
            $result = 'Your Password Successfully Changed';
        }
        else{
            $result = 'Enter Correct Security Code';
        }

        return $result;
    }
	
	
	
	public function digital_sign(){
	$uploadPath ='investor/';
    $file_name ='test.pdf';
	
    $jarFileLocation = './pdfSigner/SignPDFJar.jar';
    $apiKey = "fecd45deae5fd23c430ae493efc2cfcf8b978b8d";
    $pdfFileName ='test.pdf';
    $pdfFileDirectory ='./investor/';
    $certificate = './pdfSigner/mcapm20181732.p12';
    $certPin = "'=6~=}C!x@jt[:y2P'";
    $reason = "none";
    $destination ='./investor/';
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
    
    $dsignfile = "./investor/DigitallySigned_test.pdf";
	//die();
	$test_mail = ['motiur943@gmail.com'];

        Mail::send([], [], function($message) use ($test_mail)
        {
            $message->from('amcuf@capmbd.com', 'CAPM Fund Management');
            $message->to($test_mail);
            $message->subject('Teat Mail Subject');
            $message->setBody('Teat Mail Body');
			/* $message->attach('./investor/', [
                    'as' => 'DigitallySigned_test.pdf',
                    'mime' => 'application/pdf',
                ]); */
			$message->attach("./investor/DigitallySigned_test.pdf");
        });
    }		 
	 
}
