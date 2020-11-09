<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use QRCode;
use Mail;
use Auth;

class CalenderSetupController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isExecutive']);
    }

    public function cl_set(){

    	return view('BackEnd.pages.calender.clsetup');
    }

    public function mnth_store(Request $request){

		$from = $request->START_DATE;
		$to = $request->END_DATE;

		$dates = array();
		$days = array();

		$fd = strtotime($from);
		$td = strtotime($to);

		$ck = date('Y-m-d', $fd);
		$exist = DB::table('calender')
                 ->where('CL_DATE', '=', $ck)
                 ->first();

        if(!empty($exist->calender_id)){
            return redirect('/calender/settings')->with('message','Month already inserted');
        }else{
            
	        for ($cd = $fd; $cd <= $td; $cd += (86400)){

				$date = date('Y-m-d', $cd);
				$day = date('l', $cd);

				$data=array(
		            'CL_DATE'=>$date,
		            'DAY'=>$day,
		            'NOTE' => 'Open',
		            'USER_ID' => Auth::user()->id,
		            'created_at'=>Carbon::now(),
		            'updated_at'=>Carbon::now()
	        	);

	        	DB::table('calender')->insert($data);
			}
        }

		return redirect('/calender/settings')->with('message','Month insert successfully done');
    }

    public function hd_store(Request $request){

		foreach ($request->hday as $hday) {
			
			DB::table('calender')
            ->where('DAY', '=', $hday)
            ->where('STATUS', '=', 'N')
            ->update([
                'STATUS' => 'H',
                'NOTE' => 'Weakened Close',
                'USER_ID' => Auth::user()->id,
                'updated_at'=>Carbon::now()
            ]);
		}

		return redirect('/calender/settings')->with('messageh','Holyday Setup successfully done');
    }

    public function nhd_store(Request $request){

		$ckh = date('Y-m-d', strtotime($request->H_DATE));

		$result = DB::table('calender')
        		 ->where('CL_DATE', '=', $ckh)
        		 ->where('STATUS', '=', 'N')
        		 ->update([
            		'STATUS' => 'H',
            		'NOTE' => $request->H_NOTE.' Close',
            		'USER_ID' => Auth::user()->id,
            		'updated_at'=>Carbon::now()
        		]);

        if($result == 1){
        	return redirect('/calender/settings')->with('messagem','New Holyday Add successfully done');
        }else{
        	return redirect('/calender/settings')->with('messagem','Please setup month first');
        }
    }

    public function daye_s(){

    	$month = date('m', strtotime(Carbon::now()));

    	$date_ck = DB::table('calender')
                   ->Select('calender_id', 'STATUS')
                   ->where('STATUS', '=', 'N')
                   ->orWhere('STATUS', 'O')
                   ->first();

        $sft_dt = DB::table('calender')
                   ->Select('CL_DATE')
                   ->where('STATUS', '=', 'O')
                   ->first();

        if(empty($sft_dt)){
        	$dt = '';
        }else{
        	$dt = date('d-M-Y', strtotime($sft_dt->CL_DATE));
        }

    	$data = DB::table('calender')
    			->whereMonth('CL_DATE', '=', $month)
    			->get();
    	return view('BackEnd.pages.calender.dayes', ['data' => $data, 'date_ck' => $date_ck, 'dt' => $dt]);
    }

    public function dayStart($id){

    	DB::table('calender')
       	->where('calender_id', '=', $id)
        ->update([
            'STATUS' => 'O',
            'USER_ID' => Auth::user()->id,
            'updated_at'=>Carbon::now()
        ]);

        return redirect('/calender/dayedays')->with('message','Day Start successfully done');
    }

    public function dayEnd($id){

    	DB::table('calender')
       	->where('calender_id', '=', $id)
        ->update([
            'STATUS' => 'F',
            'NOTE' => 'Close',
            'USER_ID' => Auth::user()->id,
            'updated_at'=>Carbon::now()
        ]);

        return redirect('/calender/dayedays')->with('message','Day End successfully done');
    }
}
