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

class TradingController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isExecutive']);
    }

    public function trading(){
        return view('BackEnd.pages.trading.securities_trading');
    }

    public function eod_process(){

        $portfolios = DB::table('portfolio_registration')->get();
        $assigneds = DB::table('price_rate')
                ->join('portfolio_registration', 'price_rate.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('price_rate.*', 'portfolio_registration.PORTFOLIO_NAME')
                ->orderBy('price_rate.PRICE_RATE_ID', 'asc')
                ->paginate(5);

        return view('BackEnd.pages.trading.endofday', ['portfolios' => $portfolios, 'assigneds' => $assigneds]);
    }

    public function eod_save(Request $request){

        $PRO_REG_ID = $request->PRO_REG_ID;
        $BUY_RATE = $request->BUY_RATE;
        $SELL_RATE = $request->SELL_RATE;

        $check = DB::table('price_rate')
                ->where('PRO_REG_ID', $PRO_REG_ID)
                ->count();
        if($check > 0){
            return redirect('/trading/eod')->with('messagen','NAV Already Assigned For This Fund');
        }else{

            $data=array(
            'PRO_REG_ID'=>$PRO_REG_ID,
            'BUY_RATE'=>$BUY_RATE,
            'SELL_RATE'=>$SELL_RATE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('price_rate')->insert($data);
        return redirect('/trading/eod')->with('message','NAV Assign Successfully Done');
        }
    }

    public function eod_edit($id){

        $id = decrypt($id);

        $assigneds = DB::table('price_rate')
                ->join('portfolio_registration', 'price_rate.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                ->select('price_rate.*', 'portfolio_registration.PORTFOLIO_NAME', 'portfolio_registration.PRO_REG_ID')
                ->where('price_rate.PRICE_RATE_ID', '=', $id)
                ->first();
        return view('BackEnd.pages.trading.eod_update', ['assigneds' => $assigneds]);
    }

    public function eod_update(Request $request){

        $id = $request->nav_id;
        $BUY_RATE = $request->BUY_RATE;
        $SELL_RATE = $request->SELL_RATE;
        $updated_at = Carbon::now();

        $update_date = DB::table('price_rate')
                ->select('updated_at')
                ->where('PRICE_RATE_ID', '=', $id)
                ->first();

        $today = strtotime($updated_at);
        $prev = strtotime($update_date->updated_at);
        $ntoday = date('dmY', $today);
        $nprev = date('dmY', $prev);

        if($ntoday == $nprev){
            return redirect('/trading/eod')->with('messagen','NAV Already Updated Today');
        }else{

            DB::update('update price_rate set BUY_RATE = ?, SELL_RATE = ?, updated_at = ? where PRICE_RATE_ID = ?',[$BUY_RATE, $SELL_RATE, $updated_at, $id]);

            return redirect('/trading/eod')->with('message','NAV Update Successfully Done');
        }
    }

    public function broker_setup(){

        $brokers = DB::table('broker')->paginate(5);
        return view('BackEnd.pages.trading.brokerSetup', ['brokers' => $brokers]);
    }

    public function broker_add(Request $request){

        $BROKER_NAME = $request->BROKER_NAME;
        $BROKER_CODE = $request->BROKER_CODE;
        $BROKER_EMAIL = $request->BROKER_EMAIL;

        $data=array(
            'BROKER_NAME'=>$BROKER_NAME,
            'BROKER_CODE'=>$BROKER_CODE,
            'BROKER_EMAIL'=>$BROKER_EMAIL,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('broker')->insert($data);

        return redirect('/trading/broker')->with('message','Broker save successfully done');
    }

    public function broker_edit($id){

        $id = decrypt($id);

        $broker = DB::table('broker')
                ->where('BROKER_ID', '=', $id)
                ->first();
        return view('BackEnd.pages.trading.broker_update', ['broker' => $broker]);
    }

    public function broker_update(Request $request){

        $id = $request->bid;
        $BROKER_NAME = $request->BROKER_NAME;
        $BROKER_CODE = $request->BROKER_CODE;
        $BROKER_EMAIL = $request->BROKER_EMAIL;
        $updated_at = Carbon::now();


        DB::update('update broker set BROKER_NAME = ?, BROKER_CODE = ?, BROKER_EMAIL = ?,  updated_at = ? where BROKER_ID = ?',[$BROKER_NAME, $BROKER_CODE, $BROKER_EMAIL, $updated_at, $id]);

        return redirect('/trading/broker')->with('message','Broker Update Successfully Done');
        
    }

    public function sector_setup(){

        $sectors = DB::table('sector')->paginate(5);
        return view('BackEnd.pages.trading.sectorSetup', ['sectors' => $sectors]);
    }

    public function sector_add(Request $request){

        $SECTOR_NAME = $request->SECTOR_NAME;

        $data=array(
            'SECTOR_NAME'=>$SECTOR_NAME,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('sector')->insert($data);

        return redirect('/trading/sector')->with('message','Sector save successfully done');
    }

    public function sector_edit($id){

        $id = decrypt($id);

        $sector = DB::table('sector')
                ->where('SECTOR_ID', '=', $id)
                ->first();
        return view('BackEnd.pages.trading.sector_update', ['sector' => $sector]);
    }

    public function sector_update(Request $request){

        $id = $request->cid;
        $SECTOR_NAME = $request->SECTOR_NAME;
        $updated_at = Carbon::now();


        DB::update('update sector set SECTOR_NAME = ?, updated_at = ? where SECTOR_ID = ?',[$SECTOR_NAME, $updated_at, $id]);

        return redirect('/trading/sector')->with('message','Sector Update Successfully Done');
        
    }

    public function stock_setup(){

        $stocks = DB::table('stock')
                  ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                  ->select('stock.*', 'sector.*')
                  ->paginate(5);
        $sectors = DB::table('sector')->get();
        return view('BackEnd.pages.trading.stockSetup',['stocks' => $stocks ,'sectors' => $sectors]);
    }

    public function stock_add(Request $request){

        $STOCK_NAME = $request->STOCK_NAME;
        $SECTOR_ID = $request->SECTOR_ID;

        $data=array(
            'STOCK_NAME'=>$STOCK_NAME,
            'SECTOR_ID'=>$SECTOR_ID,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('stock')->insert($data);

        return redirect('/trading/stock')->with('message','Stock save successfully done');
    }

    public function stock_edit($id){

        $id = decrypt($id);

        $sectors = DB::table('sector')->get();
        $stock = DB::table('stock')
                ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                ->select('stock.*', 'sector.*')
                ->where('stock.STOCK_ID', '=', $id)
                ->first();
        return view('BackEnd.pages.trading.stock_update', ['stock' => $stock, 'sectors' => $sectors]);
    }

    public function stock_update(Request $request){

        $id = $request->sid;
        $STOCK_NAME = $request->STOCK_NAME;
        $SECTOR_ID = $request->SECTOR_ID;
        $updated_at = Carbon::now();


        DB::update('update stock set STOCK_NAME = ?, SECTOR_ID = ?, updated_at = ? where STOCK_ID = ?',[$STOCK_NAME, $SECTOR_ID, $updated_at, $id]);

        return redirect('/trading/stock')->with('message','Stock Update Successfully Done');
        
    }

    public function torder_setup(){

        $funds = DB::table('portfolio_registration')->get();
        $brokers = DB::table('broker')->get();
        $sectors = DB::table('sector')->get();
        $stocks = DB::table('stock')->get();

        $pend_order = DB::table('trade_order')
                      ->join('portfolio_registration', 'trade_order.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                      ->join('broker', 'trade_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'trade_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('trade_order.*', 'portfolio_registration.PORTFOLIO_NAME', 'broker.BROKER_NAME', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('trade_order.STATUS', 'N')
                      ->paginate(5);
        return view('BackEnd.pages.trading.torderSetup', ['funds' => $funds, 'brokers' => $brokers, 'sectors' => $sectors, 'stocks' => $stocks, 'pend_order' => $pend_order]);
    }

    public function get_stock($id){

        $stocks = DB::table('stock')
                     ->where('SECTOR_ID',$id)
                     ->get();
        return response()->json($stocks);
        
    }

    public function torder_add(Request $request){

        $PRO_REG_ID = $request->PRO_REG_ID;
        $TRADE_DATE = $request->TRADE_DATE;
        $BROKER_ID = $request->BROKER_ID;
        $STOCK_ID = $request->STOCK_ID;
        $QUANTITY = $request->QUANTITY;
        $PRICE = $request->PRICE;

        $data=array(
            'PRO_REG_ID'=>$PRO_REG_ID,
            'TRADE_DATE'=>$TRADE_DATE,
            'BROKER_ID'=>$BROKER_ID,
            'STOCK_ID'=>$STOCK_ID,
            'QUANTITY'=>$QUANTITY,
            'PRICE'=>$PRICE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('trade_order')->insert($data);

        return redirect('/trading/torder')->with('message','Trade order successfully done');
    }

    public function torder_conf($id){

        $STATUS = 'C';
        $updated_at = Carbon::now();

        DB::update('update trade_order set STATUS = ?, updated_at = ? where TO_ID = ?',[$STATUS, $updated_at, $id]);

        return redirect('/trading/torder')->with('message','Trade Order Confirmation Successfully Done');
    }

    public function torder_conf_rpt(){

        $brokers = DB::table('broker')->get();
        return view('BackEnd.pages.trading.tradeconfreport', ['brokers' => $brokers]);
    }

    public function get_torder_rpt($brk, $trd){

        $order_info = DB::table('trade_order')
                      ->join('broker', 'trade_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'trade_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('trade_order.*', 'broker.BROKER_NAME', 'broker.BROKER_CODE', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('trade_order.STATUS', 'C')
                      ->where('trade_order.BROKER_ID', $brk)
                      ->where('trade_order.TRADE_DATE', $trd)
                      ->get();
        return response()->json($order_info);
        
    }

    public function send_torder_mail($brk, $trd){
        
        $order_info = DB::table('trade_order')
                      ->join('broker', 'trade_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'trade_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('trade_order.*', 'broker.BROKER_NAME', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('trade_order.STATUS', 'C')
                      ->where('trade_order.BROKER_ID', $brk)
                      ->where('trade_order.TRADE_DATE', $trd)
                      ->get();

        $brk_info = DB::table('broker')
                    ->select('BROKER_NAME', 'BROKER_CODE', 'BROKER_EMAIL')
                    ->where('BROKER_ID', '=', $brk)
                    ->first();
                    
        $n_status = 'S';
        $to_st_up = DB::table('trade_order')
                  ->where('BROKER_ID', '=', $brk)
                  ->where('TRADE_DATE', '=', $trd )
                  ->update([
                        'STATUS' => $n_status
                  ]);

        $brk_mail = $brk_info->BROKER_EMAIL;
        $uploadPath ='./investment/tradeorder/';
        $file_name = 'TO_'.$brk_info->BROKER_NAME.'_'.date("d_M_Y",strtotime($trd)).'_'.Carbon::now()->format('H_i_s_A');

        $pdf_url = 'investment/tradeorder/'.$file_name.'.pdf';
        $heading = date("d-M-Y",strtotime($trd)).' '.$brk_info->BROKER_NAME;
        $pdf_data=array(
            'TO_URL'=>$pdf_url,
            'HEADING'=>$heading,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );
        DB::table('to_pdf')->insert($pdf_data);

        $pdf = PDF::loadView('BackEnd.pages.reports.to_pdf', compact('order_info','brk_info', 'trd'))->save($uploadPath.$file_name.'.pdf' );

        $emails = [$brk_mail];
        try{
            Mail::send([], [], function($message) use ($emails, $uploadPath, $file_name){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Trade Order From CAPM');
                $message->attach($uploadPath.$file_name.'.pdf');
            });

        }

        catch(\Exception $e){
            return 'Trade Order Not Send';
        }

        return 'Trade Order Send Successfully Done';
    }

    public function getTOConfRpt(){

        $reports = DB::table('to_pdf')
                   ->where('TO_URL', 'like', '%' . 'tradeorder' . '%')
                   ->orderBy('TO_PDF_ID', 'DESC')
                   ->get();

        return view('BackEnd.pages.trading.trade_order_report', ['reports' => $reports]);
    }

    public function perSetup(){

        $percen = DB::table('to_per')
                   ->where('per_id', '1')
                   ->first();
        return view('BackEnd.pages.trading.percen',['percen' =>$percen]);
    }

    public function perUpdate(Request $request){

        $id = '1';
        $SECTOR_PER = $request->SECTOR_PER;
        $STOCK_PER = $request->STOCK_PER;
        $updated_at = Carbon::now();

        DB::update('update to_per set SECTOR_PER = ?, STOCK_PER = ?, updated_at = ? where per_id = ?',[$SECTOR_PER, $STOCK_PER, $updated_at, $id]);

        return redirect('/trading/persetup')->with('message','Percentage update successfully done');
    }

	/* Motiur Start */

	 public function instrument_cate_setup(){

        $instrumentCate = DB::table('instrument_cate')->paginate(5);
        return view('BackEnd.pages.trading.InstrumentCatSetup', ['instrumentCate' => $instrumentCate]);
    }

	public function instrument_cate_add(Request $request){
        $insert_employee_id =Auth::user()->id;
        $code = $request->code;
        $description = $request->description;
        $sttelment_day_dse = $request->sttelment_day_dse;
		$sttelment_day_cse = $request->sttelment_day_cse;
		$status = $request->status;

        $data=array(
            'code'=>$code,
            'description'=>$description,
            'sttelment_day_dse'=>$sttelment_day_dse,
			'sttelment_day_cse'=>$sttelment_day_cse,
			'status'=>$status,
			'insert_employee_id'=>$insert_employee_id,
			'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
	   );
	 DB::table('instrument_cate')->insert($data);

        return redirect('/trading/instrument_cate')->with('message','Instrument category save successfully done');
	}

    public function inst_cat_edit($id){

        $id = decrypt($id);

        $inst_cat = DB::table('instrument_cate')
            ->where('id', '=', $id)
            ->first();
        return view('BackEnd.pages.trading.instrumentCate_update', ['inst_cat' => $inst_cat]);
    }

    public function inst_update(Request $request){

        $id = $request->bid;
        $code = $request->code;
        $description = $request->description;
        $sttelment_day_dse = $request->sttelment_day_dse;
        $sttelment_day_cse = $request->sttelment_day_cse;
        $status = $request->status;
        $updated_at = Carbon::now();


        DB::update('update instrument_cate set code = ?, description = ?, sttelment_day_dse = ?, sttelment_day_cse = ?, status = ?,  updated_at = ? where id = ?',[$code, $description, $sttelment_day_dse, $sttelment_day_cse, $status, $updated_at, $id]);

        return redirect('/trading/instrument_cate')->with('message','Instrumnet Category Update Successfully Done');

    }

    public function instrument_setup(){

        $instrument = DB::table('instrument')->paginate(5);
        $sectors = DB::table('sector')->get();
        $instrumentCate = DB::table('instrument_cate')->get();
        //print_r($instrumentCate);
        //die();
        return view('BackEnd.pages.trading.InstrumentSetup', ['instrument' => $instrument, 'sectors' => $sectors, 'instrumentCate' => $instrumentCate]);

    }

    public function instrument_add(Request $request){
        $insert_employee_id =Auth::user()->id;
        $inst_name = $request->inst_name;
        $inst_cat = $request->inst_cat;
        $short_name = $request->short_name;
        $ISIN = $request->ISIN;
        $market_price = $request->market_price;
        $inst_type = $request->inst_type;
        $pe_ratio = $request->pe_ratio;
        $total_share = $request->total_share;
        $dec_date = $request->dec_date;
        $face_value = $request->face_value;
        $premium = $request->premium;
        $marginable_status = $request->marginable_status;
        $latest_eps = $request->latest_eps;
        $public_share = $request->public_share;
        $sector_cate = $request->sector_cate;
        $status = $request->status;

        $data=array(
            'inst_name'=>$inst_name,
            'inst_cat'=>$inst_cat,
            'short_name'=>$short_name,
            'ISIN'=>$ISIN,
            'market_price'=>$market_price,
            'inst_type'=>$inst_type,
            'pe_ratio'=>$pe_ratio,
            'total_share'=>$total_share,
            'dec_date'=>$dec_date,
            'face_value'=>$face_value,
            'premium'=>$premium,
            'marginable_status'=>($marginable_status)?($marginable_status):'FALSE',
            'latest_eps'=>$latest_eps,
            'public_share'=>$public_share,
            'sector_cate'=>$sector_cate,
            'status'=>$status,
            'insert_employee_id'=>$insert_employee_id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

        DB::table('instrument')->insert($data);

        return redirect('/trading/instrument')->with('message','Instrument save successfully done');
    }

    public function instrument_edit($id){

        $id = decrypt($id);

        $instrument= DB::table('instrument')
            ->where('id', '=', $id)
            ->first();
        $instrumentCate = DB::table('instrument_cate')->get();
        $sectors = DB::table('sector')->get();
        return view('BackEnd.pages.trading.instrument_update', ['inst' => $instrument, 'instrumentCate' => $instrumentCate, 'sectors' => $sectors]);
    }

    public function instrument_update(Request $request){

        $id = $request->bid;
        $inst_name = $request->inst_name;
        $inst_cat = $request->inst_cat;
        $short_name = $request->short_name;
        $ISIN = $request->ISIN;
        $market_price = $request->market_price;
        $inst_type = $request->inst_type;
        $sector_cate = $request->sector_cate;
        $status = $request->status;
        $updated_at = Carbon::now();


        DB::update('update instrument set inst_name = ?, inst_cat = ?, short_name = ?, ISIN = ?, market_price = ?, inst_type = ?, sector_cate = ?, status = ?,  updated_at = ? where id = ?',[$inst_name, $inst_cat, $short_name, $ISIN, $market_price, $inst_type, $sector_cate, $status, $updated_at, $id]);

        return redirect('/trading/instrument')->with('message','Instrumnet Update Successfully Done');

    }

    /* Motiur End function*/

    //start


    public function sell_order(){

        $funds = DB::table('portfolio_registration')->get();
        $brokers = DB::table('broker')->get();
        $sectors = DB::table('sector')->get();
        $stocks = DB::table('stock')->get();

        $pend_order = DB::table('sell_order')
                      ->join('portfolio_registration', 'sell_order.PRO_REG_ID', '=', 'portfolio_registration.PRO_REG_ID')
                      ->join('broker', 'sell_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'sell_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('sell_order.*', 'portfolio_registration.PORTFOLIO_NAME', 'broker.BROKER_NAME', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('sell_order.STATUS', 'N')
                      ->paginate(5);
        return view('BackEnd.pages.trading.sorderSetup', ['funds' => $funds, 'brokers' => $brokers, 'sectors' => $sectors, 'stocks' => $stocks, 'pend_order' => $pend_order]);
    }

    public function soder_add(Request $request){

        $PRO_REG_ID = $request->PRO_REG_ID;
        $TRADE_DATE = $request->TRADE_DATE;
        $BROKER_ID = $request->BROKER_ID;
        $STOCK_ID = $request->STOCK_ID;
        $QUANTITY = $request->QUANTITY;
        $PRICE = $request->PRICE;

        $data=array(
            'PRO_REG_ID'=>$PRO_REG_ID,
            'TRADE_DATE'=>$TRADE_DATE,
            'BROKER_ID'=>$BROKER_ID,
            'STOCK_ID'=>$STOCK_ID,
            'QUANTITY'=>$QUANTITY,
            'PRICE'=>$PRICE,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );

     DB::table('sell_order')->insert($data);

     return redirect('/trading/sellorder')->with('message','Sell order successfully done');
       
    }


    public function sorder_conf($id){

        $STATUS = 'C';
        $updated_at = Carbon::now();

        DB::update('update sell_order set STATUS = ?, updated_at = ? where SELLORDER_ID = ?',[$STATUS, $updated_at, $id]);

        return redirect('/trading/sellorder')->with('message','Sell Order Confirmation Successfully Done');

    }

    public function sorder_del($id){

        DB::delete('delete from sell_order where SELLORDER_ID = ?',[$id]);
        return redirect('/trading/sellorder')->with('message','Sell Order Delete Successfully Done');

    }

    public function torder_del($id){

        DB::delete('delete from trade_order where TO_ID = ?',[$id]);
        return redirect('/trading/torder')->with('message','Trade Order Delete Successfully Done');

    }

    public function sorder_conf_rpt(){

        $brokers = DB::table('broker')->get();
        return view('BackEnd.pages.trading.sellconfreport', ['brokers' => $brokers]);
    }

    public function get_sorder_rpt($brk, $trd){

        $order_info = DB::table('sell_order')
                      ->join('broker', 'sell_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'sell_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('sell_order.*', 'broker.BROKER_NAME', 'broker.BROKER_CODE', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('sell_order.STATUS', 'C')
                      ->where('sell_order.BROKER_ID', $brk)
                      ->where('sell_order.TRADE_DATE', $trd)
                      ->get();
        return response()->json($order_info);   
    }

    public function send_sorder_mail($brk, $trd){
        
        $order_info = DB::table('sell_order')
                      ->join('broker', 'sell_order.BROKER_ID', '=', 'broker.BROKER_ID')
                      ->join('stock', 'sell_order.STOCK_ID', '=', 'stock.STOCK_ID')
                      ->join('sector', 'stock.SECTOR_ID', '=', 'sector.SECTOR_ID')
                      ->select('sell_order.*', 'broker.BROKER_NAME', 'stock.STOCK_NAME', 'sector.SECTOR_NAME')
                      ->where('sell_order.STATUS', 'C')
                      ->where('sell_order.BROKER_ID', $brk)
                      ->where('sell_order.TRADE_DATE', $trd)
                      ->get();

        $brk_info = DB::table('broker')
                    ->select('BROKER_NAME', 'BROKER_CODE', 'BROKER_EMAIL')
                    ->where('BROKER_ID', '=', $brk)
                    ->first();
                    
        $n_status = 'S';
        $to_st_up = DB::table('sell_order')
                  ->where('BROKER_ID', '=', $brk)
                  ->where('TRADE_DATE', '=', $trd )
                  ->update([
                        'STATUS' => $n_status
                  ]);

        $brk_mail = $brk_info->BROKER_EMAIL;
        $uploadPath ='./investment/sellorder/';
        $file_name = 'SO_'.$brk_info->BROKER_NAME.'_'.date("d_M_Y",strtotime($trd)).'_'.Carbon::now()->format('H_i_s_A');

        $pdf_url = 'investment/sellorder/'.$file_name.'.pdf';
        $heading = date("d-M-Y",strtotime($trd)).' '.$brk_info->BROKER_NAME;
        $pdf_data=array(
            'TO_URL'=>$pdf_url,
            'HEADING'=>$heading,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        );
        DB::table('to_pdf')->insert($pdf_data);

        $pdf = PDF::loadView('BackEnd.pages.reports.so_pdf', compact('order_info','brk_info', 'trd'))->save($uploadPath.$file_name.'.pdf' );

        $emails = [$brk_mail];
        try{
            Mail::send([], [], function($message) use ($emails, $uploadPath, $file_name){
                $message->from('amcuf@capmfunds.com', 'CAPM Fund Management');
                $message->to($emails);
                $message->subject('Sell Order From CAPM');
                $message->attach($uploadPath.$file_name.'.pdf');
            });

        }

        catch(\Exception $e){
            return 'Sell Order Not Send';
        }

        return 'Sell Order Send Successfully Done';
    }

    public function getSOConfRpt(){
        $reports = DB::table('to_pdf')
                   ->where('TO_URL', 'like', '%' . 'sellorder' . '%')
                   ->orderBy('TO_PDF_ID', 'DESC')
                   ->get();

        return view('BackEnd.pages.trading.sell_order_report', ['reports' => $reports]);
    }

    //end

}