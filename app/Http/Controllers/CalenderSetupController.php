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

		for ($cd = $fd; $cd <= $td; $cd += (86400)){

			$date = date('Y-m-d', $cd);
			$day = date('l', $cd);

			$data=array(
	            'CL_DATE'=>$date,
	            'DAY'=>$day,
	            'created_at'=>Carbon::now(),
	            'updated_at'=>Carbon::now()
        	);

        	DB::table('calender')->insert($data);
		}

		return redirect('/calender/settings')->with('message','Month insert successfully done');
    }
}
