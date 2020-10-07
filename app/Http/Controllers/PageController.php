<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Carbon\Carbon;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard(){
    	return view('BackEnd.pages.dashboard');
    }

    public function ctrlpnl(){
    	return view('BackEnd.pages.controlpanel');
    }

    public function investment(){
        return view('BackEnd.pages.instruments_investment');
    }

    public function corporate(){
        return view('BackEnd.pages.corporate_action');
    }

    public function reset_pass(Request $request){

        $user_id = $request->user_id;
        $pass = Hash::make($request->password);

        $result = DB::table('users')
                  ->where('id', '=', $user_id)
                  ->update([
                        'password' => $pass
                  ]);

        if($result == 1){
            Auth::logout();
            return redirect('/admin')->with('message','Password Reset Successfully Done !!!');
        }
        else{
            return redirect('/home')->with('messagend','Reset Not Done!!! Please Try Again');
        }
    }

    public function phcn(Request $request){

        $user_id = $request->id;
        $user_photo = $request->photo;

        $usExt = $user_photo->getClientOriginalExtension();
        $upn = $user_id.'_user_photo.'.$usExt;
        $user_path = 'user_photo/';
        $user_photo->move($user_path,$upn);

        $updated_at = Carbon::now();

        DB::update('update users set photo = ?, updated_at = ? where id = ?',[$upn, $updated_at, $user_id]);

        return redirect('/home')->with('msg','Photo Update Successfully Done !!!');
    }
}
