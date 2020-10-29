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
}
