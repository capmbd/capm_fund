<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use DB;
use Carbon\Carbon;
use Session;
use PDF;
use Mail;
use QRCode;

class InvestmentTradeSetuptController extends Controller
{
    public function import_trade(){
        $brokers = DB::table('broker')->paginate(5);
        $fund_name = DB::table('portfolio_registration')->paginate(5);
        return view('BackEnd.pages.trading.import.tradeSetup', ['brokers' => $brokers, 'funds_name' => $fund_name]);
    }

}
