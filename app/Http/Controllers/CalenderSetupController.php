<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use QRCode;
use Mail;

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
            		'updated_at'=>Carbon::now()
        		]);

        if($result == 1){
        	return redirect('/calender/settings')->with('messagem','New Holyday Add successfully done');
        }else{
        	return redirect('/calender/settings')->with('messagem','Please setup month first');
        }
    }

    public function daye_s(){

    	$date_ck = DB::table('calender')
                   ->Select('calender_id', 'STATUS', 'CL_DATE')
                   ->where('STATUS', '=', 'N')
                   ->orwhere('STATUS', '=', '0')
                   ->first();

    	$data = DB::table('calender')->get();
    	return view('BackEnd.pages.calender.dayes', ['data' => $data, 'date_ck' => $date_ck]);
    }

    public function dayStart($id){

    	DB::table('calender')
       	->where('calender_id', '=', $id)
        ->update([
            'STATUS' => 'O',
            'updated_at'=>Carbon::now()
        ]);

        return redirect('/calender/dayedays')->with('message','Day Start successfully done');
    }

    public function dayEnd($id){

    	DB::table('calender')
       	->where('calender_id', '=', $id)
        ->update([
            'STATUS' => 'C',
            'NOTE' => 'Close',
            'updated_at'=>Carbon::now()
        ]);

        return redirect('/calender/dayedays')->with('message','Day End successfully done');
    }
}
