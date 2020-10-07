@extends('BackEnd.master_one')

@section('title')
    Dividend Report
@endsection

@section('class7')
    active
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/pages/data-table/css/buttons.dataTables.min.css') }} ">

    <style type="text/css">
        .my_tab{
            border-bottom: 1px solid #2b8a78;
        }
        .tbl_dta tr th{
            background: #2b8a78;
            color:#fff;
        }
        .type_head{
            font-size: 15px;
            color: #232e33;
            font-weight: 700;
        }
        .tab_pad{
            padding: 3px;
        }
    </style>

@endpush

@section('main-content')
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href=" {{ url('/corporate-action/dvdn-report') }} ">
                                    <i class="feather icon-link"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="  {{ url('/corporate-action/dvdn-report') }}">Dividend Report</a></li>
                        </ul>
                        <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card coin-price-card table-card">
                                    <div class="card-block p-b-0">
                                        <ul class="nav nav-tabs  tabs my_tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#payalb" role="tab">Payment Advice All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#paycip" role="tab">Payment Advice CIP</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#paytb" role="tab">Payment Advice TB</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#payot" role="tab">Payment Advice Other Bank</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#paytds" role="tab">Payment Advice TDS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#dvddisb" role="tab">Dividend Disbursement</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tabs card-block">
                                            <div class="tab-pane tab_pad active" id="payalb" role="tabpanel">
                                                <p class="type_head">Payment Advice All</p>
                                                <div class="table-responsive">
                                                    <table id="pay_all" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.</th>
                                                                <th>Registration No.</th>
                                                                <th>Investor Name</th>
                                                                <th>Bank Name</th>
                                                                <th>Account Name</th>
                                                                <th>Account Number</th>
                                                                <th>Branch Name</th>
                                                                <th>Routing No.</th>
                                                                <th>Transfer Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $i = 1;
                                                                $sum = 0;
                                                            ?>
                                                            @foreach($dvd_all_bank as $dvd_all_bnk)
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$dvd_all_bnk->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvd_all_bnk->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvd_all_bnk->BANK_NAME}}</td>
                                                                    <td>{{$dvd_all_bnk->AC_NAME}}</td>
                                                                    <td>{{$dvd_all_bnk->AC_NO}}</td>
                                                                    <td>{{$dvd_all_bnk->BRANCH}}</td>
                                                                    <td>{{$dvd_all_bnk->ROUTING}}</td>
                                                                    <?php
                                                                        if($dvd_all_bnk->DIV_TYPE == 'Cash'){
                                                                            $tr_am = $dvd_all_bnk->NET_DIVIDEND;
                                                                        }
                                                                        elseif($dvd_all_bnk->DIV_TYPE == 'CIP')
                                                                        {
                                                                            $tr_am = $dvd_all_bnk->PAY_FRACTIONAL - $dvd_all_bnk->DED_INC_TAX;
                                                                        }

                                                                        $sum = $sum + $tr_am;
                                                                    ?>
                                                                    <td>{{$tr_am}}</td>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($sum,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                            <div class="tab-pane tab_pad" id="paycip" role="tabpanel">
                                                <p class="type_head">Payment Advice CIP</p>
                                                <div class="table-responsive">
                                                    <table id="pay_cip" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.</th>
                                                                <th>Investor ID</th>
                                                                <th>Investor Name</th>
                                                                <th>Dividend Type</th>
                                                                <th>Units To be Subscribed</th>
                                                                <th>Subscription Price</th>
                                                                <th>Total Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $j = 1;
                                                                $cipsum = 0;
                                                                $cipusum = 0;
                                                            ?>
                                                            @foreach($dvd_cip as $dvdcip)
                                                                <tr>
                                                                    <td>{{$j++}}</td>
                                                                    <td>{{$dvdcip->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvdcip->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvdcip->DIV_TYPE}}</td>
                                                                    <td>{{$dvdcip->ENTI_CIP}}</td>
                                                                    <td>{{$dvdcip->BUY_PRICE}}</td>
                                                                    <?php
                                                                        $tot_u = $dvdcip->ENTI_CIP;
                                                                        $buy_p = $dvdcip->BUY_PRICE;
                                                                        $tot_am = $tot_u * $buy_p;

                                                                        $cipsum = $cipsum + $tot_am;
                                                                        $cipusum = $cipusum + $dvdcip->ENTI_CIP;
                                                                    ?>
                                                                    <td>{{$tot_am}}</td>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($cipusum,2)}}</th>
                                                                <th></th>
                                                                <th>{{number_format($cipsum,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                            <div class="tab-pane tab_pad" id="paytb" role="tabpanel">
                                                <p class="type_head">Payment Advice Trust Bank</p>
                                                <div class="table-responsive">
                                                    <table id="pay_tb" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.</th>
                                                                <th>Registration No.</th>
                                                                <th>Investor Name</th>
                                                                <th>Account Name</th>
                                                                <th>Account Number</th>
                                                                <th>Branch Name</th>
                                                                <th>Routing NO.</th>
                                                                <th>Transfer Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $k = 1;
                                                                $trsum = 0;
                                                            ?>
                                                            @foreach($dvd_trust as $dvdtr)
                                                                <tr>
                                                                    <td>{{$k++}}</td>
                                                                    <td>{{$dvdtr->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvdtr->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvdtr->AC_NAME}}</td>
                                                                    <td>{{$dvdtr->AC_NO}}</td>
                                                                    <td>{{$dvdtr->BRANCH}}</td>
                                                                    <td>{{$dvdtr->ROUTING}}</td>
                                                                    <?php
                                                                        if($dvdtr->DIV_TYPE == 'Cash'){
                                                                            $tru_am = $dvdtr->NET_DIVIDEND;
                                                                        }
                                                                        elseif($dvdtr->DIV_TYPE == 'CIP')
                                                                        {
                                                                            $tru_am = $dvdtr->PAY_FRACTIONAL - $dvdtr->DED_INC_TAX;
                                                                        }

                                                                        $trsum = $trsum + $tru_am;
                                                                    ?>
                                                                    <td>{{$tru_am}}</td>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($trsum,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                            <div class="tab-pane tab_pad" id="payot" role="tabpanel">
                                                <p class="type_head">Payment Advice Except Trust Bank</p>
                                                <div class="table-responsive">
                                                    <table id="pay_ot" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.</th>
                                                                <th>Registration No.</th>
                                                                <th>Investor Name</th>
                                                                <th>Bank Name</th>
                                                                <th>Account Name</th>
                                                                <th>Account Number</th>
                                                                <th>Branch Name</th>
                                                                <th>Routing NO.</th>
                                                                <th>Transfer Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $l = 1;
                                                                $otsum = 0;
                                                            ?>
                                                            @foreach($dvd_other as $dvdotr)
                                                                <tr>
                                                                    <td>{{$l++}}</td>
                                                                    <td>{{$dvdotr->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvdotr->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvdotr->BANK_NAME}}</td>
                                                                    <td>{{$dvdotr->AC_NAME}}</td>
                                                                    <td>{{$dvdotr->AC_NO}}</td>
                                                                    <td>{{$dvdotr->BRANCH}}</td>
                                                                    <td>{{$dvdotr->ROUTING}}</td>
                                                                    <?php
                                                                        if($dvdotr->DIV_TYPE == 'Cash'){
                                                                            $ot_am = $dvdotr->NET_DIVIDEND;
                                                                        }
                                                                        elseif($dvdotr->DIV_TYPE == 'CIP')
                                                                        {
                                                                            $ot_am = $dvdotr->PAY_FRACTIONAL - $dvdotr->DED_INC_TAX;
                                                                        }

                                                                        $otsum = $otsum + $ot_am;
                                                                    ?>
                                                                    <td>{{$ot_am}}</td>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($otsum,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                            <div class="tab-pane tab_pad" id="paytds" role="tabpanel">
                                                <p class="type_head">Payment Advice TDS</p>
                                                <div class="table-responsive">
                                                    <table id="pay_tds" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.</th>
                                                                <th>Registration No.</th>
                                                                <th>Investor Name</th>
                                                                <th>Dividend Type</th>
                                                                <th>Dividend Receivable</th>
                                                                <th>TDS</th>
                                                                <th>Net Dividend</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $m = 1;
                                                                $dvdsum = 0;
                                                                $tdssum = 0;
                                                                $ntdsum = 0;
                                                            ?>
                                                            @foreach($dvd_tds as $dvdtds)
                                                                <tr>
                                                                    <td>{{$m++}}</td>
                                                                    <td>{{$dvdtds->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvdtds->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvdtds->DIV_TYPE}}</td>
                                                                    <td>{{$dvdtds->DIVIDEND_AMOUNT}}</td>
                                                                    <td>{{$dvdtds->DED_INC_TAX}}</td>
                                                                    <td>{{$dvdtds->NET_DIVIDEND}}</td>
                                                                    <?php
                                                                       $dvdsum = $dvdsum + $dvdtds->DIVIDEND_AMOUNT;
                                                                       $tdssum = $tdssum + $dvdtds->DED_INC_TAX;
                                                                       $ntdsum = $ntdsum + $dvdtds->NET_DIVIDEND;
                                                                    ?>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($dvdsum,2)}}</th>
                                                                <th>{{number_format($tdssum,2)}}</th>
                                                                <th>{{number_format($ntdsum,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                            <div class="tab-pane tab_pad" id="dvddisb" role="tabpanel">
                                                <p class="type_head">Dividend Disbursement</p>
                                                <div class="table-responsive">
                                                    <table id="dvd_dis" class="table table-bordered tbl_dta tbl_dvdnd_rpt">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl. No.<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Registration No.<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Investor Name<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Total Holding<br> (Units)<br>&nbsp;</th>
                                                                <th>Dividend Type<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Dividend<br> Receivable<br>&nbsp;</th>
                                                                <th>TDS<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Net Dividend<br>&nbsp;<br>&nbsp;</th>
                                                                <th>Units<br> To Be<br> Subscribed</th>
                                                                <th>Cash For<br> Fractional CIP <br>&nbsp;</th>
                                                                <th>Total Dividend <br>Paid After <br>Dividend TDS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $n = 1;
                                                                $sum1 = 0;
                                                                $sum2 = 0;
                                                                $sum3 = 0;
                                                                $sum4 = 0;
                                                                $sum5 = 0;
                                                                $sum6 = 0;
                                                                $sum7 = 0;
                                                            ?>
                                                            @foreach($dvd_disb as $dvddisb)
                                                                <tr>
                                                                    <td>{{$n++}}</td>
                                                                    <td>{{$dvddisb->REGISTRATION_NO}}</td>
                                                                    <td>{{$dvddisb->INVESTOR_NAME}}</td>
                                                                    <td>{{$dvddisb->HOLDING_UNIT}}</td>
                                                                    <td>{{$dvddisb->DIV_TYPE}}</td>
                                                                    <td>{{$dvddisb->DIVIDEND_AMOUNT}}</td>
                                                                    <td>{{$dvddisb->DED_INC_TAX}}</td>
                                                                    <td>{{$dvddisb->NET_DIVIDEND}}</td>
                                                                    <td>{{$dvddisb->ENTI_CIP}}</td>
                                                                    <td>{{$dvddisb->PAY_FRACTIONAL}}</td>

                                                                    <?php
                                                                        if($dvddisb->DIV_TYPE == 'Cash'){
                                                                            $paynet = $dvddisb->NET_DIVIDEND;
                                                                        }
                                                                        elseif($dvddisb->DIV_TYPE == 'CIP')
                                                                        {
                                                                            $paynet = $dvddisb->PAY_FRACTIONAL - $dvddisb->DED_INC_TAX;
                                                                        }

                                                                        $sum7 = $sum7 + $paynet;
                                                                    ?>
                                                                    <td>{{$paynet}}</td>

                                                                    <?php
                                                                      $sum1 = $sum1 + $dvddisb->HOLDING_UNIT;
                                                                      $sum2 = $sum2 + $dvddisb->DIVIDEND_AMOUNT;
                                                                      $sum3 = $sum3 + $dvddisb->DED_INC_TAX;
                                                                      $sum4 = $sum4 + $dvddisb->NET_DIVIDEND;
                                                                      $sum5 = $sum5 + $dvddisb->ENTI_CIP;
                                                                      $sum6 = $sum6 + $dvddisb->PAY_FRACTIONAL;
                                                                    ?>
                                                                </tr>
                                                            @endforeach                       
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="tfpdf">
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th>{{number_format($sum1,2)}}</th>
                                                                <th></th>
                                                                <th>{{number_format($sum2,2)}}</th>
                                                                <th>{{number_format($sum3,2)}}</th>
                                                                <th>{{number_format($sum4,2)}}</th>
                                                                <th>{{number_format($sum5,2)}}</th>
                                                                <th>{{number_format($sum6,2)}}</th>
                                                                <th>{{number_format($sum7,2)}}</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <hr style="border: 1px solid #2b8a78">
                                            </div>

                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src=" asset('BackEnd/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') "></script>
    <script src=" {{ asset('BackEnd/files/assets/pages/data-table/js/jszip.min.js') }} "></script>
    <script src=" {{ asset('BackEnd/files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src=" {{ asset('BackEnd/files/assets/pages/data-table/js/bootstrap3-typeahead.js') }} "></script>
    <script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/buttons.html5.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            $('#pay_all').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Dividend For Year End '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (ALL BANK)',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Dividend For Year End '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (ALL BANK)',
                        orientation: 'landscape',
                        pageSize: 'TABLOID',
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '15',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -55, 0, 10 ],
                                width:120,
                                height:40,
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#pay_cip').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Dividend as CIP for the Year '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (CIP)',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Dividend as CIP for the Year '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (CIP)',
                        pageSize: 'LEGAL',
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '12',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -45, 0, 10 ],
                                width:90,
                                height:30,
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#pay_tb').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Dividend For Year End '+ '{{$yd}}'+' (Trust Bank)',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (Trust Bank)',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Dividend For Year End '+ '{{$yd}}'+' (Trust Bank)',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (Trust Bank)',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '15',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -55, 0, 10 ],
                                width:120,
                                height:40,
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#pay_ot').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Dividend For Year End '+ '{{$yd}}'+' (Payment Advice Except Trust Bank)',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (Payment Advice Except Trust Bank)',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Dividend For Year End '+ '{{$yd}}'+' (Payment Advice Except Trust Bank)',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (Payment Advice Except Trust Bank)',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '15',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -55, 0, 10 ],
                                width:120,
                                height:40,
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#pay_tds').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Statement of TDS for the Year '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (TDS)',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Statement of TDS for the Year '+ '{{$yd}}',
                        filename: 'Payment Advice '+new Date().getFullYear()+' (TDS)',
                        orientation: 'landscape',
                        
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '15',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -55, 0, 10 ],
                                width:120,
                                height:40,
                                alignment: 'left',
                                image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAAA9CAYAAAA9FfJ5AAAACXBIWXMAAC4jAAAuIwF4pT92AAAKTWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCMgQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqIWotVXDjuH9yntX167+3t+9f7vOec5/zOec8PgBESJpHmomoAOVKFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP/wBr28AAgBw1S4kEsfh/4O6UCZXACCRAOAiEucLAZBSAMguVMgUAMgYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkIAI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv+CpX3CFuEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJebIxNI5wNMzgwAABr50cH+OD+Q5+bk4eZm52zv9MWi/mvwbyI+IfHf/ryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3/ldM9sJoFoK0Hr5i3k4/EAenqFQyDwdHAoLC+0lYqG9MOOLPv8z4W/gi372/EAe/tt68ABxmkCZrcCjg/1xYW52rlKO58sEQjFu9+cj/seFf/2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R+W/QmTdw0ArIZPwE62B7XLbMB+7gECiw5Y0nYAQH7zLYwaC5EAEGc0Mnn3AACTv/mPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqwQQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwDrYBLWwAxqgEZrhELTBMTgN5+ASXIHrcBcGYBiewhi8hgkEQcgIE2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCapFdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqKxqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjNlhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPsCF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6EvnEeGI6sZBYRqwm7iEeIZ4lXicOE1+TSCQOyZLkTgohJZAySQtJa0jbSC2kU6Q+0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw+S3FDrFiOJMCaIkUqSUEko1ZT/lBKWfMkKZoKpRzame1AiqiDqfWkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC/pdLoJ3YMeRZfQl9Jr6Afp5+mD9HcMDYYNg8dIYigZaxl7GacYtxkvmUymBdOXmchUMNcyG5lnmA+Yb1VYKvYqfBWRyhKVOpVWlX6V56pUVXNVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndSj1DPUV+jvl/9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWclYD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax4PA52ZxKziHODc57LQMtPy2x1mqtZq1+rTfaetq+2mLtcu0W7eva73VwnUCdLJ31Om0693UJuja6UbqFutt1z+o+02PreekJ9cr1Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y/DMkGPoa5hpuNHwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxrPGFiaTLbpMSkxeS+Kc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnGueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0in1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXMdmxwvOuk4TTDqcSpw+lXZxtnoXOd8zUXpkuQyxKXdpcXU22niqdun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r+00umxvJXcM970H08PdY4nHM452nm6fC85DnL152Xlle+70eT7OcJp7WMG3I28Rb4L3Le2A6Pj1l+s7pAz7GPgKfep+Hvqa+It89viN+1n6Zfgf8nvs7+sv9j/i/4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQWNBbsGLww+FUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX+X0UKSoyqi7qUbRTdHF09yzWrORZ+2e9jvGPqYy5O9tqtnJ2Z6xqbFJsY+ybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5JpUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP+WDIEJQLxhP5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D+miGT0Z1xjMJT1IreZEZkrkj801WRNberM/ZcdktOZSclJyjUg1plrQr1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c/PbFWyFTNGjtFKuUA4WTC+oK3hbGFt4uEi9SFrUM99m/ur5IwuCFny9kLBQuLCz2Lh4WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyannc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8qF5VfrHCsqK74sEa45uJXTl/VfPV5bdra3kq3yu3rSOuk626s91m/r0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXtW8y2rNvyoTaj9nqdf13LVv2tq7e+2Sba1r/dd3vzDoMdFTve75TsvLUreFdrvUV99W7S7oLdjxpiG7q/5n7duEd3T8Wej3ulewf2Re/ranRvbNyvv7+yCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQeXBJ9+mfHvjUOihzsPcw83fmX+39QjrSHkr0jq/dawto22gPaG97+iMo50dXh1Hvrf/fu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1/3yfPe549d8Lxw9CL3Ytslt0utPa49R35w/eFIr1tv62X3y+1XPK509E3rO9Hv03/6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxdeo94r/y+2v3qB/oP6n+0/rFlwG3g+GDAYM/DWQ/vDgmHnv6U/9OH4dJHzEfVI0YjjY+dHx8bDRq98mTOk+GnsqcTz8p+Vv9563Or59/94vtLz1j82PAL+YvPv655qfNy76uprzrHI8cfvM55PfGm/K3O233vuO+638e9H5ko/ED+UPPR+mPHp9BP9z7nfP78L/eE8/sl0p8zAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAAmzUlEQVR42uydd5wdZdn3v/fU0/ds3002vReSEEiEoKEjSpOuqCD4CtjFgo8iPvLIg4CIShGkgyAIIiDFIFIMJIFUUkjZlM0m2c32PXv29DMz9/vHnG1JNtkWkvc1Vz7nk09yZubMXPfvvvp1jXjgwUcAQAASvxDiYl3TztZ0bbaqqnmKEByhI3QwSUqQUmJZVl3Wspbbtv2s4zivKoqClBIAretoTjFN466A3z/N5/Xi8XgwDANNUxEMAKx9OUUeWaT/eJACjuNgWRbpTKYglUxNTSQTl8cTibeyWes7wEddQBXi4oDf92R+Xp4RCgXx+wMEAn68Ph+maaCpGuIAklUI0FUFTRVoqgAJjiOR+8CjAgghEArYjiRrSSzHwXEOf8Yqivuc++ODEAJFgCIELttEN+khcSTYjoPtSCxbIvu5YYNedz06pI2U4Mgcr3M8706WLbGdQyMV/KaKqggsKZGOe589eIXEymZpjMSIxxIk4nFi8Tht7e2ntLVF30qlUp8BVmrAeJ/X+2BhQb5RkJ9PQUEB+QUFBAJ+dE2Dfqj++rYMW3e0s7kxzpa6GDXNSZrjGSJZGyFAERAyVIq9BqVhL6PK/Ewo8jFxeIhh+eb/ExIgnZXUR1O98qU9kSWVtoglLSLxDE2pLNkcSIQQ5Bsq+V6d8kIvZWEPRSGj3/fw7Ps1RFJZCkwdRUDA1PCaGj6PRtCn4THUHnq1OGTi15VDwq+3NzTT0JJkWNhDwKeTFzBcQQbEkxb1LSlq2lKcc3QpxUU2rZE2Wlta0DQNRYiS5hbnT+lMZq6mquqPw3mhvIJwPqWlpZSUlGB6+gaa9oTF4spm3lxXz9sbm1i9M0I2mnYliFcj4DfwezSEgGzWoT2eIRPPQMoC2wFNAa9OKM/DpPIgc0bnM3NMmEKvTmMsw6lTi5kwPDgENpBDpq0NM5w/6Gu9sqyGi+54D0wNVFe6dtc2lu3gOBKyjvucUro7tIdNJMFQCYY8TB4W5PixBZx2VCnzpxSR59f3+/ut8SyX3b8UuyHuXteRYChgaKAraKqC0v330hZfOmksD19zzMcO0qr6OOf++l1izQnwaKAp6LoKSLK2hIwNiSzkeWn+w9mEQj4Mj4nHNFAVFcdxSGcyU7OR7Fc00zTOCgT85BfkU1JagmkeGKSrqiI8trCal1fUUrUr4v5YgY9TppVwxvRS5owrYHShl/yAQTDH+EzWIdKeoa49zbrqNhZWNrFwYxObd0WI1rezrDHGsrW7XUmlKJC0eOiHnxwSoNYvWkTLGwuYeMPP0YzBSe7JFUGuPnMCO5uTbGqIsW1XG0inS70LwHYYPTKfH5wxgbJ8D8X5HjRVwZGSxpYUWxtirNweYWFlM8tW72bZihruemUjI4cFuWBOBV87eQxTR4T2+fs+Q2Xhz06kvinJzuYElY1xllQ2s3JrMyQzWKrS09ZyHJ56bzs/+OyEXq95sOi6J9cQa0mAqbo8yjhkU1mQkqLiIONH+xlV4GPqmDBBn2uFqopKfkEBtu2QSqeIJxK0t8fOE88997fWkSMqwuPGjaWwqHC/P7ymuo07Xqnk2fd3km5LgiMpLA9xzSljuWL+KCb2E1TJtM3CDU08sWgHf/tgJ6n2FOgq2A4FhX4+uu0MyvI9g2JWoi3C0uuuY2LIizXvJEZecsmQLUQqY3P7K5X899OrOwyuTil2/vyx/O37xx9AI2VZsKaB3/2jksVr6tzFlAJ/2Ms1p47jhvMnUxA8sGkgHclLy3dz9UPLaWxJgLqHWZKyuPj0CTz7rbkfG0gfe6eaK+9eAipdZpIjUXWN2y+byZc/OZLicO9CI51Os6N6BzU1NdTU1u1SFCEcw9DxeL29nmTZkpv/tpF5//0Wf/pnJel4CgyVyz49kWU3n8r/fmF6v0EK4DVVPj2rlKe+OYdFvziFE2YNJ+dpMH9y8aBBCrD0vvuxt++gcMJY4q+9SmTbtiFbDI+hcs3JYwiFvOzpCWbtAzsvQZ/OxccNZ+HPT+K3XzsWPeABTRBPpLnz+bV86qZ3+GBzy4EDLIrgc3OH8YerjkEoyt7eq6Hyt0U7WFLZ/LGAtLohzvVPr3FNnO62vOXwuTkVfP/sCfsFKYCh6ximiaKoCCG6LOzefKbdLSnOvn0RNz6xkngsBboCus6dVx3DU9+ey5hS/5A83OyxYf72veMoKfKDA6dNKxk8w95fwtbnX6AgHEb6vBSG/FTfdz/OEIYXwgGDwjzT3WDdYi5+n9bna6iq4HufncAz3zkej89wgebRWL+1iTNvWcg/VtX16TrnHVPO6IqQa/93l/CKwE5l+NHT67Dtg+z9S/jG46tprG93fZDucSgJJ0/v47oK0d32l/t1Bbc3xPn0r97l9ferwVBz9qPKvV87hus+O2HIn7Ekz2RCWRA0lTnjBuf4ZBMJFv3mN/g1DdPQkQL8YypQ161j+0svDdk9m7pCkU/fa7F8Xq3f17pg7jDu+NKsXATclYSRtgSX3f0+a7a3HfB8XVeYVBxwgaq4a9X1pcqi1bXc98a2g4rTe9/YxmtLcnjR1D1ie2JAUY6OkOY+qa41xTm/XszazQ2uxyZc0f3jC6byjdPGHrQHLc/3gE9nfGlgUNf54MEHaNu0mVAggK6q2JaNDPgpLiuh4amniO2uHTqp6tH3UrcDzed9/bSxzJlWBlm7E2CRljjfeOJDrD5IQ7+hgQRVCOaMLexSlcL9/Oy5tWyubT8oa7dhV5SfPLMGpKSgwMeoIn83TeNGPwKqMnRAlY7k/zy8knWbGtwwjGt0MXtaKf9z0dSDuiN/c9kMnvv2ceQH9AFfo3bVSlb/6Sny8sJ4VBVVVVwp5fVilBQQiifZfP8fh+ye8/wGPaL2iqDQGNj9K6rgmpPGuADruKahsmjNbhasPrAJkMoB3AF+c+l0Tp1RDhnL/VJTaGtO8O0nVncmC4aKLMvhmkdW0d4cByG48/MzOGdmmRum66lshg6oT7y7g1cXV4NH7Qwao6ncctF0DO3gBo5HFvu46BPDD5gJ65VhqSTv3HYbmpR4DQNdUVEUBZBIRUGEg4QLC0gtXkL1ggVDcs8B3z4k6iBKJOZPKcIIml3XFAKyNi8uP7AWaEhmcmaAyqRRIe65Yha+oBfsLtC/vnQn979RNaTrdtsrlby7sgaAs44fxRUnjaK40AtDtCH2Ql0iZXHzyxt7emyWw9ETijj9qBIOd1r60EM0rP2IQCCAoapoikAVAseykQJEwIcR9FHoD1D98CPEG+oHL1GDewPVp6sDvl5xwKDYv4eDJgRbGuP736S2pC3hxikLfTqGojB5eJAbL5zm2q2yywT46V/WsmV3bGh4vrmVm/76ESApLc/jD1+ZBcCwgOnGxGXO9rAl0Q6TZrBAfXt9E1u2t/b02By48NjhKOrhXUm1e/WHLH/scQKhEIaioisKqqKg5OwiIRQwDJQ8Pz6fF180SuUDDwzeRtW1PbJP4DcGDlSxT4kse6ZGe4nLxhJZAAoDJgHTPf6HZ0/gU7OH9zABIs1xrn10lZtFG0ycOmVz9SMrycZSoGvcdcUsRhb7XOc4aOZwJDs1c2aAv9ctPOVy5pVVu11DvoNTUoKpMX9S0WENUjuT5u1bb0NYNqauoytKpzQVQiDtDudERwR9GKZOOJRH9J2F7Hr7rcGp/n0BaBB7Op6xiaasnmiVcHRF3gFAY5FMWSChIGyi5aKPmqpw7+VHEwj7XMmaMwHeXLaL3y/YOqhn//lf17N6Qz1IuPK08VxyfEXndwV55l7Jh4GyRel+ASlh5Y5IT+ngSAJBk7Hl/sMaqEsfeojdq9fg8/vRFcWVpkJBFQJFVZFSIm0boarg8aAGvJiqStjrY+sfHyDZMvBgeNCTK97pKBVThOtgDZBWVkeIRlNdq+NIhN/k4uMq9g/wrE0iY4OAskDPgPpRo0L88tKjwKbLBFDhxmfXsrY6OqD7fGNNA3e+4pqJY8cWcsdlR/X4PuQ3ELlKug6EtkQygwOqqggSKZuG1lRPoEoo8RtuCOYwpfp1a1j26GP4gsGcJFXRVAW1Q6IqrgetKAqKpoGRk6q6ht/nQ2tsZuMfB24C7MtfUJSBi9Q/vlUFVjetlrb56sljmT0mvN/zommbtGUDgrLg3pmf73x6HKfMqXCLQdxFJx5Jcu2jK8la/UuCtLZnuPbRlchUBsVjcP+Vs/dK9/o1gUfT9rCjnUFKVAGJtEV7KrOXfDY0Be0wrfS3MxneuvU2nHQWQ9fRFAU9B9COT8eCO5aFVASoGng9aB4dE8gLhWj515vULl50yJ/n4be288rSnW4GUAIpi7kzyrn989MPeG5TWxpygCst8O5z89z/laPJK/R3HoehsvjDWm79e2W/7vOHT69l27ZmkILvnT2Z02eU7BNcSh82df+dKcG+q/kP40r85Y8+Qs2KVXgDfjQh0HIOlCoUFIT7R3GLjKWUKKrqSlghwaNheAy8Pg9BRWHDHXeSikSG5L4GsiD3v7GNbzy8wvX2JZC2mD97OC/9YB75fShOaYtlOrNSpeF910lMGBbglkund5kpAtAEv3x+HYs29s38+ev7NTzyxhYAZk4t4X8umrLP47y6itdQezCjLT4w1a91Z6zP0Ah4dJpkT/DG0hZpx8FEPaxA2rD+Iz54+BG8gYALUqF0flRFuIBVhOvtg2uj2jYivwDv9JlopcNRgnkUqiplDQ1sf+EFNj70IDOv+75ryw7UZXck8WS2z6esrmrj1pc38czCKrBtcMATMvn256Zx00VT8Zp9u5fWRMYFuapQ5Ok9hfuN08fx2up6Xn2vys06qgrZhKvKl/ziZAL7Sf/WtiT59uOrIGthBD3cf+Vs/L38luiZr3c14AC9fq37BfwelbICL9t3tvaI39XH0tS3pQn5Dh871c5keOtXt2Il03iCAddx6gCnEJ2aQRECFHDSaTSPF/3Y4/COHo/QXQklU0msXTtRpc3Ea66mZXMlkW1byJ8waeA3JwS7IynqW1L4PRo+j9pps6YzDpFYhurmBEu3tvKP1XW8vqYOuyUOhkao0McFcyr47pnjmXUAm3Qv1d9RkG5q5HmN/W6muy+fyfubm2lujrkhJENl3cZGbnj2I35/xcxeT/3WE6upq20DIfjJ56Zy3MSCXo/1mipej9pDI8fT1uAlKgLmjA7z/qqaHkzPtqdZWRVhQnngsAHq8sceZcfSZQTzC1CE6AFSJWejaooCloXMpDEnT8V36mdR/O4z2I11pN5/j+yyZWQ27yCZyZJQVbQZ08k7ZT5MmDjwYIpH5bYFlfz+X1sIeXX8Xg0zF8JqT1g0R1OkoilI2WCohIt8HPvJ0Zw1q5zzjx3GqAFWpDVHM51O0oGqt8aU+vn1ZTO46u4l7uILAYbC3a9t4oyjSjlrdtle5zy+cAcvvLsdgONmDuMn5+5/M6uK2MOplMQygwVqDvZnzSrn7lc2dd28AByHlz/czaXzKg4LkDZvqWTjq6/gD4dxUklUnx+1Q+ULgQJIy8JOp9GHlxO8+FK8J5/euSOza1cQf/89nMZGsLJoPi86CoZlEXl3CU1r1mKlMwzrOKff4l5y3IQChoc91EZTRDN2Z0fKhCIfx40KM7LYz9hSH9OG5TF5eIDyAu+g+dLSlgYBqqaQ14daiStPGsXLH+7mhbe3uelyRSCzFt98fBVzx51CcV5X5GB7Q4IfPLkabBtPnpf7vjIL09h/Ot3UFTyG1mWjSohknMEBtYNOmlbE1HEFrK9sdEu1cpmMl1fUsKNxWmfW4VCRY1u8ecuvSLVFmXvll2nZvIXG5SuRqSS2EEhDR3h9+IaVU3rCPErOPQetxJUOdixK5oN3sXZtd/0If666x+dBS2XRNQ1/KIgTT7D+jt+i5RVQMnsAvUYZm8vmVvDtsyd8rLyJxNMdAhWzjyncu748k8WbmqhvyNWP6irV1a1878k1PPXNOZ0A+/qjq2iuj4IQ3HDB1D6ZJZqmYBhKj5qFeMoaGqCausrPzp3MZXc2d0lVVSHanOAXL2zgkauPOaRA/fDpp6le8gGGx8vmf/yT+df/gLzrrqNt8xYyLREMj0GgYjjB8RNQ/V2mSnZnFfF334JUEm84DynbsdNppKohfAZqVEWzJIai4PF4SEWjrL/nXvLvvRfd239plxhgTntQmibnwAV1DU8f090VhV7u+vIsLr1zUQ8T4M9vb+WzM0r54qdGcudrm1nw/g4Q8IkZ5Vx/1sSBRT+Emz0bfHgqR1+YN4LzTxgF6W7M1hUee3MrLy7f/fFIzn04hy3btrL4D/dh+HyYHpNYbR1vXv8TKp99jsKpUxh74QVUnHU24ZlHd4LUqtlJ4sXniD/3JGo8hjech+M4KKqKqmkouoYwDRSPgYbIxWEV/IEA2a3bqHzyTwOTbonsxwrSbNahMZaB3EyB/ljXl8yr4JL5o6FDLedKDK9/di1/+vcObnz+IxAS3e/hri/PwuhP67XoZuoLSKYtnAF0GWi9Xfy+K49mXU2UzVub3JpURSAtm6sfWMb4khOZPjLvoDF96eYW/s89H/BfF07jsvkj3Z3p2Lx9622k2qL4QkEUIdA9JhqCyr88x+5/vkHJtGkUTJyA6fch0hlk9Q60HTvwFAYQw8qQuSoqobulf1JVUXUNR9cRfhM1mUYDDFXBliqhUB47n3ue0nnzKJo2vV/P8HGHntviWSLR9H5K4fdPt3/hKP61tp6W1rhrO2gKtQ0xLn9wGWSyYEu+fsZ45k7oX+eF2IMZ6YyNZTsY/Qz/9fpYpfke/vbd4xkxPAzprqqbxsYY59yxmA+rIgeF4Y1tab5031LWbmoknumS6KufeYZt776HJ+BHIZd1QqCqCmYggMzatKz8kB3PPMuOx56k/tnnaV+1GmFZKD4fIlc8nUkkwJFIIRCahlRVhKYiPAaqrqEBuqK4JoCh45Pw0V13Y6VTvd5ztKN//xAm7xoTGVoSGUDgNTQ8/SwzHFXs4yfnTXFrAXqIagssh+Ej8rnx/Cn904qOdFOzostGbUtlSQ9Aou53/00fGWLBT+Zz9JTSrmEKhsr2Xa2cfsu/eXrRziFldiJt86V7l7J5cxP5I8Occ0y5q/I3V7Lo3j+ge70oQkERwg1J5f5WhEDTVHSPB90fQPf70fx+TK8XRdW6NYpJNEN3s1Oq6oJVVaEj/+81Oq+rKQJdKPgDftIbN1H51FO93nfaOvSziKrq4lgpCwRoqhuu6y994/QxTBpb0LMqPxe3/MUFU/vd79TanqG5Ld1VOyKgJZl1a2aHEqgAUyuCvPWzE7nqM5NAKG5Bg6bS1JLgst8v5pLfvc+66rZBM7o1luGS37/PP5fuBEVw4ZwKt11aShbdfTeJ1gi60QWkLpC6qVKFjn+7fBG52U9SuHOeHMsVFaqu49i2Ox9KVd3CXtVtRBNeA1VTOmOwHVVYoWCIXc8+R7SXVutI1tqjC1US+ZidqQ+qWt21EYKU5fSY8dRX8pkaP/zsxJ52S9Zh7vQyrjhxZL+vt6kuTmNrohtQBclElt0tyaEHKkDYr/Pwtcfy8o8/xbFTS922BkeC4/DcO1s57udv8dX7l7NkU3O/23GlhBeX1TL/pnd4dUk16ALhNbhy/qjc95J4cwuimyTt+aHHv0UuKyUQ2I50/6+bd2FnsziOdE2BDomq5sBq6iim3mlaaIqCLhRMXUNPZbCi+y6Ha4nuUcijCDbXRD82kNY0JXn0nSrQ3F1a35pgfc3AGvg+P28Eo0blu1JVSoSpc8tF0/Y7GK43uudfW5HpbnW1ikCmsry5vrHf11IvveTzP87PD3sLiwrR9f0HiSeWB7ly/mgmVeRRn7CoiaSQuTEtqzY38fCinbzyYR3VDQnSloPXUDFVBa1bt4C0Je1Ji021MZ59v4br/rSaO15cT0NDu7vYaZuZU0r45cVTO3PFoZIiqhcuJBtPuqMwFWWvj57LSqm5gmlDUTBVFa9poIQD4DERuoFEoHtdSS0dG2nZCMdxc+y2g7BsSGXpUH6OZZONxSk6/WSGnXfeXjUA8ZTF7S9vora524QSRVATSeE3dYble9GFQFdyG2YIKRrP8urKOq56YDlbd+a6MoTr9C7ZFiHPqxPwaK7N3UdP3dAVMlmHf62sBVty5twR3HhBP2xTCet2Rfn58+t57K2t7B2CEKzc0caE0iDD872YmtqrbR+NRolEIkTb22Pi+b++0Dx27OiCiZMm4vP1L5i/Yksrf19Ry+vr6vloVxuxtpTreNluV4CW52FkvpfifA8eU8OyJa3RNHVtSVpaku7MKk3gyfMyotjPUcNDHDsqzDlzhzN9jzlJDWs+ZNl9f2T3ihUoloPp8WCaJoamYigqhqKgq+7fhqpiqiohXcfv98DwYtT8EIrfj9R19GAAoSjY6TROMoVMpSCRRCaSEEvg1LeSiSdJZ7Nk84L4Pn0GJRdfjJKrD3h15W7eWVNPZXOCDTVRNu9q6+pJoisLgwN62EN50ENB0CTPUPjR56Zw1tFlAwbnruYE9/5jK6tro3xYHWH37qhbsqftsdqWOw9LhEyGh70M8xtcfNJofviZAych6lpTjLnuH6Sa4rx+8+mcMav0gOf8e30jzy/ayaLtrayqjiDbku7wts6Cctkz9qipDCsNUh72EPZoXH/2ZM44urSbppXs3LmL7VXb2VVTW6cNZkcfMz6fY8bnc9Ol06iqi7NmVxvrqtuobIhT05SgKZ6mMZlle3MSKSUhQyVkaswZXcCIuT4mFQWYMjLEhBI/o0v8+931JTNmcdZ991G3fBk73n6bplUfktpdh5NM4ggFaRhITQXNQChKLvPrYAkwFIF0XO9T1XUcy0Y1lG7hvQ7pmkVKGxn0o44eTWjOsXg/MRejqGet5a9fruTfC6vAp4GpEQia+Dw6Xo+G2i3Qns3aJFIWrcksu1qTOJEUn583clBSdFlVhFv/sgZ8Bj6vRnFJAI+poXfjnSIEBaZKxpa0prJE41mW7mhk7Ohwn36jLN/Db748i+rmBKf0saHzqXd38OBLGxD5HkJeHW8o3IlPQ1cwurXrZDIuX5qiaWob4xDLcMGxFZxB7xtiUBK1L2og2zH1gw7NNDTqz8mkiVZV0Va5ieSOnSSrq3Gi7Yh4HCWZxHQkXqHgC/kwK0pwAl7UQAAjHMZRFKSi4DgOQtWwshaqP4ASDKOUlKGVlaMVl/YabfqwKsKaqgihgEFpgYdSv0HQqxPwaT3MnEzGIZm2sGxJImXRnMgyssjba61oX+Ol2+pi+AwVn+nOQvV61M6il47mYU1xJVnWkUTjWXa3JjEMlYkHqbCoujFBY1uafJ+O11Qx9Vz7jwSPqeLpVqqYStvEkxbJtEUiYxNJW4wr8VPWjS9DKlH7Eu3VD1JngGKYhCdNJjxpcs8vYhFkNIrI5sJp6SRYaTcEpahQWORW+FuW60AFQ6D2bxTlrDHhPuW6dY+K39O1QEMxXybPr3N0X8cdCdBVQWHIoDBkHNSlHlXsY1Qf60B0r0awnyOP9jp6R2uKlnh2wBmOQ0NuPEoAqB6E4QNTuII8SJftKEFaDmRzjqgNstEGGc/ZUEdeKnBIyIGR+R4K9jPEuBOoHSr5xr9v4YnFO7tG+RyhI3SwKW3zwJem87VPVRwYqB2ziH5yxhgun1M+5KGUI3SEepeokinDAv1T/ZPL/Uw+zHv4j9B/Hh3R70fokFHGcjrdB1V16yv6DNTa5gTrdrrNW0KBEyYW4zP7XokTS2RZsqXZvQFHMnNMPqV5no/t4VujaZZvbaE9kWV8eZAZY/I/tqqmxtYUr6/c3Znbth3Zp/GO0pacNrucEYe4e+LjpHjC4tM3v82u1iRkLK49dwr/dd6UvgN1wbJavvq73OtpNIXKe87tV1Pf1tooZ/z8TXebpCye/vkpgw5y99kmz9ic+ct3WLqqxi02EYKnbjiRy+aP7t08shwiSQu/R8Mc5LuYNu5s48t3vpcLGOO28vTF1k9ZvHTjyf9RQJVSUlUfo7YpAeksje3p/ql+TRUuSE0NVVP6PedTEQLV1LBz4SD1Y3TKdE3hR+dO5pWKEAnbZmKhn3mTi/d57JZd7Xz/8ZXsakqwqy3JmzedylEjBlcMriqi831KZC2euW4eJ07pS2ZHku83+U8jQ1PciTCOul+1f0ht1PZklkyujtNnau5EjRxZWYf2tEUybZO1HIJ+naChoh9g7KKiCC761CjOPX5E56bRuqc0LYe2ZBYJrK2O8PKSHS6jBNS3pTozIx1n5Hl19IEOLpZQHDJ7ZFv6SrYj3VaWnAEX8OgHlPbJjE0iV+CuCEGeX2fPFy7HU1bnRGqPoeLvFoJ0LIdo7vtU2iYUMAjoKoY5wEEctqQ9bZGxHRzcsLxfV/HkhlV4+jmW85AB9b8eX83T71WBI/nx+dP4+mcm8OeF1fx9RQ2VNVFqY2lSloO0JYahMr7Qx1Ejw5x9dDkXnjASby/TOe5/Yys/fWQ5eHXCps7iX55GWZHbnLdiUxNn/u+/QVOwpYRAV7bm/NvfRRO5JIGUYEv+8dOTOH5a8YCf0RrgG0i2NcQ47oZ/IR0JGYsHrvkEF+XKHnuj+97Yys1PrgKPRrHfZNHNp1G0xyb57UsbufPv6wH40onjuP3ymfx18Q6eX7qL9Tui1LSnSFo2jiXRdIUx+V6mjQhz5lGlXDJ/9AHHCjW0pvjnylr+ubaeVVWt7GpNuhN2VMV9FaauUV7g5ZTpJZx/zHBURTn8gYoqaG1Ngqnx+MLt3PPGZlqjGc6YVcbVp41nzPAgiiLYVRdj6dYWnvlgJ+u3NvOXf1dx94LNPH3dPMYO2/vdVomMRWtbCjI2lsfuUUA8ZVSYF6//JIoQrN7Wynf+vNrd6hLu/OIsJpUFOnNTUsLUUYMzBTwDnDptOZKWaMqtMkp3ScH9UedzpzWEvW8nTtMUWiMpMDVeXlXD66tr2d4Q55QZpVx+4mjGVYQwdIXdDQlWVrXylw92sHl7FS8uquZ3r1Xy1PeOZ/aEvV+aJx3JHS9u4HevbqK2LgZSctyscn70yVHMHJNPUFeQQH08w5INjfz5vWpue2kDes4PIn0YA7UobLqOhqGyobqVC04YxV1fPYbhRft2KL67sYlzbltIQyzN0g31XPPAMhbceHKPaqUOtecWQrvvBe1OeQGDk2aV51RPbjCCdDsuT5hewtThQ/gKRl3l2oeWk3egMUhpix9+bhoXzhvR+V8CEKqCFO4cKaUPjsL+nruT5/ke9xhDZfvuKCdOK+PVn57E+F5eZnf9eZM5+9aFbGmIsXFnhCvuXcrSW0/vqc0kfPfBFdz99/VgaoTyvTx87Vwu+uS+HehL5o3kli/O5IYnV/PbVzf2OQOq7MsbGxTtwdQDzsRyJP6QyV1X9Q5SgLmTizhv7gi33cKrs35nlERy4C3JqYy9l403tG4tDMv3MqEsuP/PsBDhAwz9HXJ3VIKqa9z5ldm9ghRg0sg8Lj9pjMtzj8bWhnZ3fm43WrGlmbtf3wx+AxzJf188vVeQdpDXo/GLzx9FYbjbSzD6K1ENXe0cR2inbeoaE4wv63t4qrYthZ2xOneK/0DOiJSEvXqfqmmK8z2dyNeG+H0CQ17kZdn8zyXTmTexaCA46lEeI/twc/3ih5SYukphH8b+FOd3vdlEU8RefKpqTrij9A0dFMG8yX17XlNTyfNoNLenByZR500tIZjncSvEHYd7FmzuF4fvfa3SFQEpi1HDQpzQh9n/UvZtHKEzhO9G2lNzKAchKxAb8Pia3OvNc/PqN9QduP9pw/ZIZ8y2r08yFDyfWBJAeNwXLeNInlu0o0+/XRdJUt/e1aF6oL24F1BHlfq564rZqDlm/eW9Kr5052I27q/TVMKHW1q46LZ3efmDnZB1KA6ZPHLtXPJDh2d80GNouXeGApbD4nUNh829jSj0cfzYAohnwdR44J+b+dfKfU+oaYqk+NWz69z+pJwWs+WQvd7pgDRjbD43XjDNnaoj4M7XNnHDn1bT0FunqSNZvL6RC+94j3gs3dlnZlmyb6q/+4N95bSxjC7xc8tfP+Lfmxp5akElT723ndnjCplekUdJLtwjHcnO+jgf7Wrjo22tkLEoKgtwzqxh/PjCqUzaTwA9azluf5Vw+/n7wthMt3OSmX2fk7VzxyiChFB6ve7Mcfmc/4mRvPBuFSiCbz62gldX7WbSyBA4Eicr+dXlM3sNg+1zDXJeOrYCGWvAQ2s9pspj3zqOq+55n0UbG2moj3H6TW8ye0IR00eEKSn0EmlPU7kryurqVlRF4epTx/Pgu1XIlE2TzBDL2pTsK1zWwXO7b+ldqzs/5b7PuekLM5hUHuL2F9ezujrCLU+s5HcLKjluXCFTRubh9WpIKaltSLBiWwtVu9s5Y1Y5Z84cxoIVNWDZ1DUl91azXb8lNEc6SjabJZVM4vd3OTMnzSjlpBmlrN8eYdGmJj6samXL7nZW7mwlXdWcUzCSIq/O5NIgn5tbwZxRYT4xuYiywgOnAkeX+Jl7VBkYKkUBE107sMIaVxroPKcs5EHbxzkjCn3uMaZG0Og9LeoxVf7ygxN4dm4Fb67ezabmBFWRBJtb4qiOZHJxAKufQAv5DeZOL3WlRNamIDDwqvqJFSHeufk0Fiyv5a2PGtiwq42dsTQfVLfgVEmKvToTy0JcdfIYzpoznDyPTnVrktZ4BqEK7H1IqPJ8D3OPKgVDw6MqePrgcQ8r6OKnT1cwjX2fc9lJo7nw+BEs3tDIu5uaWFvVytaWBG98VI+UEr+mMjrfy2WfGsVnZpYzd3IRT7y1jZZ4GoRgRGHPQXSZbJZ0JoPj2Egps+KpPz+zu2JYednwigoqKiowTYMjdIQOJUkpaWpsoqa2lrq6eurqG95Q0qn0q+2xOK0tLTQ0NJBOpY9w6ggdMnJsh9aWVpqbm4m1t5NIJLBt+xXNsu1b29qiF+u6HgJBNpOhoLAAv99/wIEUR+gIDRXZtk06laatLUprawuRSIRIW5RYLL7JdpxHNGBLIpG4trlZPOHYtpbJpInFYvj9fnx+P6ZpoKnaIZ1Ud4T+P5agjkM2kyWZTJJIJIjH48RicaLt7UTaoo3pTOaLAmJaLrr0dDwRb8la1u8TydQkX3sMr8dEN1yQKuIISo/QQbJHO8CazZLJZEimUiQSSeKJxMJsNvstYG1neCrXgfp6Op2ek81kL4m2t5+j69psTdX8RzB6hD4eySqxbKvZsqyllmX/1XGclxRFkR3hsP87AOYw1djS4VXyAAAAAElFTkSuQmCC'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#dvd_dis').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'CAPM Unit Fund',
                        messageTop: 'Dividend Disbursement Report For Year End '+ '{{$yd}}',
                        filename: 'Dividend Disbursement '+new Date().getFullYear(),
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'CAPM Unit Fund' +"\n"+ 'Dividend Disbursement Report For Year End '+ '{{$yd}}',
                        filename: 'Dividend Disbursement '+new Date().getFullYear(),
                        orientation: 'landscape',
                        pageSize: 'TABLOID',
                        footer: true,
                        customize: function (doc) {
                            var tblBody = doc.content[1].table.body;
                            doc.content[1].layout = {
                            hLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 2 : 1;},
                            vLineWidth: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;},
                            hLineColor: function(i, node) {
                                return (i === 0 || i === node.table.body.length) ? 'black' : 'black';},
                            vLineColor: function(i, node) {
                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'black';}
                            };

                            //doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                            doc.styles.tableHeader = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 7, 0, 7]
                             }

                             doc.styles.tableFooter = {
                                color: '#0051A6',
                                background: 'white',
                                alignment: 'center',
                                fontSize: '12',
                                bold: '2',
                                margin: [0, 2, 0, 2]
                             }
                         
                            doc.styles.title = {
                                color: '#000',
                                fontSize: '15',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyEven = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc.styles.tableBodyOdd = {
                                background: 'white',
                                alignment: 'center'
                            }

                            doc['footer']=(function(page, pages) {
                                return {
                                    columns: [
                                        'Print date: '+ '{{date("M d, Y")}}',
                                        {
                                            alignment: 'right',
                                            text: [
                                                'PageNo  ',
                                                { text: page.toString()},
                                                ' of ',
                                                { text: pages.toString()}
                                            ]
                                        }
                                    ],
                                    margin: [38, 15, 38, 0]
                                }
                            });

                            doc.content.splice( 1, 0, {
                                margin: [ 0, -55, 0, 10 ],
                                width:120,
                                height:40,
                                alignment: 'left',
                                image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAAA9CAYAAAA9FfJ5AAAACXBIWXMAAC4jAAAuIwF4pT92AAAKTWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCMgQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqIWotVXDjuH9yntX167+3t+9f7vOec5/zOec8PgBESJpHmomoAOVKFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP/wBr28AAgBw1S4kEsfh/4O6UCZXACCRAOAiEucLAZBSAMguVMgUAMgYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkIAI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv+CpX3CFuEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJebIxNI5wNMzgwAABr50cH+OD+Q5+bk4eZm52zv9MWi/mvwbyI+IfHf/ryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3/ldM9sJoFoK0Hr5i3k4/EAenqFQyDwdHAoLC+0lYqG9MOOLPv8z4W/gi372/EAe/tt68ABxmkCZrcCjg/1xYW52rlKO58sEQjFu9+cj/seFf/2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R+W/QmTdw0ArIZPwE62B7XLbMB+7gECiw5Y0nYAQH7zLYwaC5EAEGc0Mnn3AACTv/mPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqwQQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwDrYBLWwAxqgEZrhELTBMTgN5+ASXIHrcBcGYBiewhi8hgkEQcgIE2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCapFdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqKxqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjNlhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPsCF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6EvnEeGI6sZBYRqwm7iEeIZ4lXicOE1+TSCQOyZLkTgohJZAySQtJa0jbSC2kU6Q+0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw+S3FDrFiOJMCaIkUqSUEko1ZT/lBKWfMkKZoKpRzame1AiqiDqfWkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC/pdLoJ3YMeRZfQl9Jr6Afp5+mD9HcMDYYNg8dIYigZaxl7GacYtxkvmUymBdOXmchUMNcyG5lnmA+Yb1VYKvYqfBWRyhKVOpVWlX6V56pUVXNVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndSj1DPUV+jvl/9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWclYD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax4PA52ZxKziHODc57LQMtPy2x1mqtZq1+rTfaetq+2mLtcu0W7eva73VwnUCdLJ31Om0693UJuja6UbqFutt1z+o+02PreekJ9cr1Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y/DMkGPoa5hpuNHwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxrPGFiaTLbpMSkxeS+Kc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnGueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0in1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXMdmxwvOuk4TTDqcSpw+lXZxtnoXOd8zUXpkuQyxKXdpcXU22niqdun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r+00umxvJXcM970H08PdY4nHM452nm6fC85DnL152Xlle+70eT7OcJp7WMG3I28Rb4L3Le2A6Pj1l+s7pAz7GPgKfep+Hvqa+It89viN+1n6Zfgf8nvs7+sv9j/i/4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQWNBbsGLww+FUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX+X0UKSoyqi7qUbRTdHF09yzWrORZ+2e9jvGPqYy5O9tqtnJ2Z6xqbFJsY+ybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5JpUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP+WDIEJQLxhP5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D+miGT0Z1xjMJT1IreZEZkrkj801WRNberM/ZcdktOZSclJyjUg1plrQr1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c/PbFWyFTNGjtFKuUA4WTC+oK3hbGFt4uEi9SFrUM99m/ur5IwuCFny9kLBQuLCz2Lh4WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyannc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8qF5VfrHCsqK74sEa45uJXTl/VfPV5bdra3kq3yu3rSOuk626s91m/r0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXtW8y2rNvyoTaj9nqdf13LVv2tq7e+2Sba1r/dd3vzDoMdFTve75TsvLUreFdrvUV99W7S7oLdjxpiG7q/5n7duEd3T8Wej3ulewf2Re/ranRvbNyvv7+yCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQeXBJ9+mfHvjUOihzsPcw83fmX+39QjrSHkr0jq/dawto22gPaG97+iMo50dXh1Hvrf/fu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1/3yfPe549d8Lxw9CL3Ytslt0utPa49R35w/eFIr1tv62X3y+1XPK509E3rO9Hv03/6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxdeo94r/y+2v3qB/oP6n+0/rFlwG3g+GDAYM/DWQ/vDgmHnv6U/9OH4dJHzEfVI0YjjY+dHx8bDRq98mTOk+GnsqcTz8p+Vv9563Or59/94vtLz1j82PAL+YvPv655qfNy76uprzrHI8cfvM55PfGm/K3O233vuO+638e9H5ko/ED+UPPR+mPHp9BP9z7nfP78L/eE8/sl0p8zAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAAmzUlEQVR42uydd5wdZdn3v/fU0/ds3002vReSEEiEoKEjSpOuqCD4CtjFgo8iPvLIg4CIShGkgyAIIiDFIFIMJIFUUkjZlM0m2c32PXv29DMz9/vHnG1JNtkWkvc1Vz7nk09yZubMXPfvvvp1jXjgwUcAQAASvxDiYl3TztZ0bbaqqnmKEByhI3QwSUqQUmJZVl3Wspbbtv2s4zivKoqClBIAretoTjFN466A3z/N5/Xi8XgwDANNUxEMAKx9OUUeWaT/eJACjuNgWRbpTKYglUxNTSQTl8cTibeyWes7wEddQBXi4oDf92R+Xp4RCgXx+wMEAn68Ph+maaCpGuIAklUI0FUFTRVoqgAJjiOR+8CjAgghEArYjiRrSSzHwXEOf8Yqivuc++ODEAJFgCIELttEN+khcSTYjoPtSCxbIvu5YYNedz06pI2U4Mgcr3M8706WLbGdQyMV/KaKqggsKZGOe589eIXEymZpjMSIxxIk4nFi8Tht7e2ntLVF30qlUp8BVmrAeJ/X+2BhQb5RkJ9PQUEB+QUFBAJ+dE2Dfqj++rYMW3e0s7kxzpa6GDXNSZrjGSJZGyFAERAyVIq9BqVhL6PK/Ewo8jFxeIhh+eb/ExIgnZXUR1O98qU9kSWVtoglLSLxDE2pLNkcSIQQ5Bsq+V6d8kIvZWEPRSGj3/fw7Ps1RFJZCkwdRUDA1PCaGj6PRtCn4THUHnq1OGTi15VDwq+3NzTT0JJkWNhDwKeTFzBcQQbEkxb1LSlq2lKcc3QpxUU2rZE2Wlta0DQNRYiS5hbnT+lMZq6mquqPw3mhvIJwPqWlpZSUlGB6+gaa9oTF4spm3lxXz9sbm1i9M0I2mnYliFcj4DfwezSEgGzWoT2eIRPPQMoC2wFNAa9OKM/DpPIgc0bnM3NMmEKvTmMsw6lTi5kwPDgENpBDpq0NM5w/6Gu9sqyGi+54D0wNVFe6dtc2lu3gOBKyjvucUro7tIdNJMFQCYY8TB4W5PixBZx2VCnzpxSR59f3+/ut8SyX3b8UuyHuXteRYChgaKAraKqC0v330hZfOmksD19zzMcO0qr6OOf++l1izQnwaKAp6LoKSLK2hIwNiSzkeWn+w9mEQj4Mj4nHNFAVFcdxSGcyU7OR7Fc00zTOCgT85BfkU1JagmkeGKSrqiI8trCal1fUUrUr4v5YgY9TppVwxvRS5owrYHShl/yAQTDH+EzWIdKeoa49zbrqNhZWNrFwYxObd0WI1rezrDHGsrW7XUmlKJC0eOiHnxwSoNYvWkTLGwuYeMPP0YzBSe7JFUGuPnMCO5uTbGqIsW1XG0inS70LwHYYPTKfH5wxgbJ8D8X5HjRVwZGSxpYUWxtirNweYWFlM8tW72bZihruemUjI4cFuWBOBV87eQxTR4T2+fs+Q2Xhz06kvinJzuYElY1xllQ2s3JrMyQzWKrS09ZyHJ56bzs/+OyEXq95sOi6J9cQa0mAqbo8yjhkU1mQkqLiIONH+xlV4GPqmDBBn2uFqopKfkEBtu2QSqeIJxK0t8fOE88997fWkSMqwuPGjaWwqHC/P7ymuo07Xqnk2fd3km5LgiMpLA9xzSljuWL+KCb2E1TJtM3CDU08sWgHf/tgJ6n2FOgq2A4FhX4+uu0MyvI9g2JWoi3C0uuuY2LIizXvJEZecsmQLUQqY3P7K5X899OrOwyuTil2/vyx/O37xx9AI2VZsKaB3/2jksVr6tzFlAJ/2Ms1p47jhvMnUxA8sGkgHclLy3dz9UPLaWxJgLqHWZKyuPj0CTz7rbkfG0gfe6eaK+9eAipdZpIjUXWN2y+byZc/OZLicO9CI51Os6N6BzU1NdTU1u1SFCEcw9DxeL29nmTZkpv/tpF5//0Wf/pnJel4CgyVyz49kWU3n8r/fmF6v0EK4DVVPj2rlKe+OYdFvziFE2YNJ+dpMH9y8aBBCrD0vvuxt++gcMJY4q+9SmTbtiFbDI+hcs3JYwiFvOzpCWbtAzsvQZ/OxccNZ+HPT+K3XzsWPeABTRBPpLnz+bV86qZ3+GBzy4EDLIrgc3OH8YerjkEoyt7eq6Hyt0U7WFLZ/LGAtLohzvVPr3FNnO62vOXwuTkVfP/sCfsFKYCh6ximiaKoCCG6LOzefKbdLSnOvn0RNz6xkngsBboCus6dVx3DU9+ey5hS/5A83OyxYf72veMoKfKDA6dNKxk8w95fwtbnX6AgHEb6vBSG/FTfdz/OEIYXwgGDwjzT3WDdYi5+n9bna6iq4HufncAz3zkej89wgebRWL+1iTNvWcg/VtX16TrnHVPO6IqQa/93l/CKwE5l+NHT67Dtg+z9S/jG46tprG93fZDucSgJJ0/v47oK0d32l/t1Bbc3xPn0r97l9ferwVBz9qPKvV87hus+O2HIn7Ekz2RCWRA0lTnjBuf4ZBMJFv3mN/g1DdPQkQL8YypQ161j+0svDdk9m7pCkU/fa7F8Xq3f17pg7jDu+NKsXATclYSRtgSX3f0+a7a3HfB8XVeYVBxwgaq4a9X1pcqi1bXc98a2g4rTe9/YxmtLcnjR1D1ie2JAUY6OkOY+qa41xTm/XszazQ2uxyZc0f3jC6byjdPGHrQHLc/3gE9nfGlgUNf54MEHaNu0mVAggK6q2JaNDPgpLiuh4amniO2uHTqp6tH3UrcDzed9/bSxzJlWBlm7E2CRljjfeOJDrD5IQ7+hgQRVCOaMLexSlcL9/Oy5tWyubT8oa7dhV5SfPLMGpKSgwMeoIn83TeNGPwKqMnRAlY7k/zy8knWbGtwwjGt0MXtaKf9z0dSDuiN/c9kMnvv2ceQH9AFfo3bVSlb/6Sny8sJ4VBVVVVwp5fVilBQQiifZfP8fh+ye8/wGPaL2iqDQGNj9K6rgmpPGuADruKahsmjNbhasPrAJkMoB3AF+c+l0Tp1RDhnL/VJTaGtO8O0nVncmC4aKLMvhmkdW0d4cByG48/MzOGdmmRum66lshg6oT7y7g1cXV4NH7Qwao6ncctF0DO3gBo5HFvu46BPDD5gJ65VhqSTv3HYbmpR4DQNdUVEUBZBIRUGEg4QLC0gtXkL1ggVDcs8B3z4k6iBKJOZPKcIIml3XFAKyNi8uP7AWaEhmcmaAyqRRIe65Yha+oBfsLtC/vnQn979RNaTrdtsrlby7sgaAs44fxRUnjaK40AtDtCH2Ql0iZXHzyxt7emyWw9ETijj9qBIOd1r60EM0rP2IQCCAoapoikAVAseykQJEwIcR9FHoD1D98CPEG+oHL1GDewPVp6sDvl5xwKDYv4eDJgRbGuP736S2pC3hxikLfTqGojB5eJAbL5zm2q2yywT46V/WsmV3bGh4vrmVm/76ESApLc/jD1+ZBcCwgOnGxGXO9rAl0Q6TZrBAfXt9E1u2t/b02By48NjhKOrhXUm1e/WHLH/scQKhEIaioisKqqKg5OwiIRQwDJQ8Pz6fF180SuUDDwzeRtW1PbJP4DcGDlSxT4kse6ZGe4nLxhJZAAoDJgHTPf6HZ0/gU7OH9zABIs1xrn10lZtFG0ycOmVz9SMrycZSoGvcdcUsRhb7XOc4aOZwJDs1c2aAv9ctPOVy5pVVu11DvoNTUoKpMX9S0WENUjuT5u1bb0NYNqauoytKpzQVQiDtDudERwR9GKZOOJRH9J2F7Hr7rcGp/n0BaBB7Op6xiaasnmiVcHRF3gFAY5FMWSChIGyi5aKPmqpw7+VHEwj7XMmaMwHeXLaL3y/YOqhn//lf17N6Qz1IuPK08VxyfEXndwV55l7Jh4GyRel+ASlh5Y5IT+ngSAJBk7Hl/sMaqEsfeojdq9fg8/vRFcWVpkJBFQJFVZFSIm0boarg8aAGvJiqStjrY+sfHyDZMvBgeNCTK97pKBVThOtgDZBWVkeIRlNdq+NIhN/k4uMq9g/wrE0iY4OAskDPgPpRo0L88tKjwKbLBFDhxmfXsrY6OqD7fGNNA3e+4pqJY8cWcsdlR/X4PuQ3ELlKug6EtkQygwOqqggSKZuG1lRPoEoo8RtuCOYwpfp1a1j26GP4gsGcJFXRVAW1Q6IqrgetKAqKpoGRk6q6ht/nQ2tsZuMfB24C7MtfUJSBi9Q/vlUFVjetlrb56sljmT0mvN/zommbtGUDgrLg3pmf73x6HKfMqXCLQdxFJx5Jcu2jK8la/UuCtLZnuPbRlchUBsVjcP+Vs/dK9/o1gUfT9rCjnUFKVAGJtEV7KrOXfDY0Be0wrfS3MxneuvU2nHQWQ9fRFAU9B9COT8eCO5aFVASoGng9aB4dE8gLhWj515vULl50yJ/n4be288rSnW4GUAIpi7kzyrn989MPeG5TWxpygCst8O5z89z/laPJK/R3HoehsvjDWm79e2W/7vOHT69l27ZmkILvnT2Z02eU7BNcSh82df+dKcG+q/kP40r85Y8+Qs2KVXgDfjQh0HIOlCoUFIT7R3GLjKWUKKrqSlghwaNheAy8Pg9BRWHDHXeSikSG5L4GsiD3v7GNbzy8wvX2JZC2mD97OC/9YB75fShOaYtlOrNSpeF910lMGBbglkund5kpAtAEv3x+HYs29s38+ev7NTzyxhYAZk4t4X8umrLP47y6itdQezCjLT4w1a91Z6zP0Ah4dJpkT/DG0hZpx8FEPaxA2rD+Iz54+BG8gYALUqF0flRFuIBVhOvtg2uj2jYivwDv9JlopcNRgnkUqiplDQ1sf+EFNj70IDOv+75ryw7UZXck8WS2z6esrmrj1pc38czCKrBtcMATMvn256Zx00VT8Zp9u5fWRMYFuapQ5Ok9hfuN08fx2up6Xn2vys06qgrZhKvKl/ziZAL7Sf/WtiT59uOrIGthBD3cf+Vs/L38luiZr3c14AC9fq37BfwelbICL9t3tvaI39XH0tS3pQn5Dh871c5keOtXt2Il03iCAddx6gCnEJ2aQRECFHDSaTSPF/3Y4/COHo/QXQklU0msXTtRpc3Ea66mZXMlkW1byJ8waeA3JwS7IynqW1L4PRo+j9pps6YzDpFYhurmBEu3tvKP1XW8vqYOuyUOhkao0McFcyr47pnjmXUAm3Qv1d9RkG5q5HmN/W6muy+fyfubm2lujrkhJENl3cZGbnj2I35/xcxeT/3WE6upq20DIfjJ56Zy3MSCXo/1mipej9pDI8fT1uAlKgLmjA7z/qqaHkzPtqdZWRVhQnngsAHq8sceZcfSZQTzC1CE6AFSJWejaooCloXMpDEnT8V36mdR/O4z2I11pN5/j+yyZWQ27yCZyZJQVbQZ08k7ZT5MmDjwYIpH5bYFlfz+X1sIeXX8Xg0zF8JqT1g0R1OkoilI2WCohIt8HPvJ0Zw1q5zzjx3GqAFWpDVHM51O0oGqt8aU+vn1ZTO46u4l7uILAYbC3a9t4oyjSjlrdtle5zy+cAcvvLsdgONmDuMn5+5/M6uK2MOplMQygwVqDvZnzSrn7lc2dd28AByHlz/czaXzKg4LkDZvqWTjq6/gD4dxUklUnx+1Q+ULgQJIy8JOp9GHlxO8+FK8J5/euSOza1cQf/89nMZGsLJoPi86CoZlEXl3CU1r1mKlMwzrOKff4l5y3IQChoc91EZTRDN2Z0fKhCIfx40KM7LYz9hSH9OG5TF5eIDyAu+g+dLSlgYBqqaQ14daiStPGsXLH+7mhbe3uelyRSCzFt98fBVzx51CcV5X5GB7Q4IfPLkabBtPnpf7vjIL09h/Ot3UFTyG1mWjSohknMEBtYNOmlbE1HEFrK9sdEu1cpmMl1fUsKNxWmfW4VCRY1u8ecuvSLVFmXvll2nZvIXG5SuRqSS2EEhDR3h9+IaVU3rCPErOPQetxJUOdixK5oN3sXZtd/0If666x+dBS2XRNQ1/KIgTT7D+jt+i5RVQMnsAvUYZm8vmVvDtsyd8rLyJxNMdAhWzjyncu748k8WbmqhvyNWP6irV1a1878k1PPXNOZ0A+/qjq2iuj4IQ3HDB1D6ZJZqmYBhKj5qFeMoaGqCausrPzp3MZXc2d0lVVSHanOAXL2zgkauPOaRA/fDpp6le8gGGx8vmf/yT+df/gLzrrqNt8xYyLREMj0GgYjjB8RNQ/V2mSnZnFfF334JUEm84DynbsdNppKohfAZqVEWzJIai4PF4SEWjrL/nXvLvvRfd239plxhgTntQmibnwAV1DU8f090VhV7u+vIsLr1zUQ8T4M9vb+WzM0r54qdGcudrm1nw/g4Q8IkZ5Vx/1sSBRT+Emz0bfHgqR1+YN4LzTxgF6W7M1hUee3MrLy7f/fFIzn04hy3btrL4D/dh+HyYHpNYbR1vXv8TKp99jsKpUxh74QVUnHU24ZlHd4LUqtlJ4sXniD/3JGo8hjech+M4KKqKqmkouoYwDRSPgYbIxWEV/IEA2a3bqHzyTwOTbonsxwrSbNahMZaB3EyB/ljXl8yr4JL5o6FDLedKDK9/di1/+vcObnz+IxAS3e/hri/PwuhP67XoZuoLSKYtnAF0GWi9Xfy+K49mXU2UzVub3JpURSAtm6sfWMb4khOZPjLvoDF96eYW/s89H/BfF07jsvkj3Z3p2Lx9622k2qL4QkEUIdA9JhqCyr88x+5/vkHJtGkUTJyA6fch0hlk9Q60HTvwFAYQw8qQuSoqobulf1JVUXUNR9cRfhM1mUYDDFXBliqhUB47n3ue0nnzKJo2vV/P8HGHntviWSLR9H5K4fdPt3/hKP61tp6W1rhrO2gKtQ0xLn9wGWSyYEu+fsZ45k7oX+eF2IMZ6YyNZTsY/Qz/9fpYpfke/vbd4xkxPAzprqqbxsYY59yxmA+rIgeF4Y1tab5031LWbmoknumS6KufeYZt776HJ+BHIZd1QqCqCmYggMzatKz8kB3PPMuOx56k/tnnaV+1GmFZKD4fIlc8nUkkwJFIIRCahlRVhKYiPAaqrqEBuqK4JoCh45Pw0V13Y6VTvd5ztKN//xAm7xoTGVoSGUDgNTQ8/SwzHFXs4yfnTXFrAXqIagssh+Ej8rnx/Cn904qOdFOzostGbUtlSQ9Aou53/00fGWLBT+Zz9JTSrmEKhsr2Xa2cfsu/eXrRziFldiJt86V7l7J5cxP5I8Occ0y5q/I3V7Lo3j+ge70oQkERwg1J5f5WhEDTVHSPB90fQPf70fx+TK8XRdW6NYpJNEN3s1Oq6oJVVaEj/+81Oq+rKQJdKPgDftIbN1H51FO93nfaOvSziKrq4lgpCwRoqhuu6y994/QxTBpb0LMqPxe3/MUFU/vd79TanqG5Ld1VOyKgJZl1a2aHEqgAUyuCvPWzE7nqM5NAKG5Bg6bS1JLgst8v5pLfvc+66rZBM7o1luGS37/PP5fuBEVw4ZwKt11aShbdfTeJ1gi60QWkLpC6qVKFjn+7fBG52U9SuHOeHMsVFaqu49i2Ox9KVd3CXtVtRBNeA1VTOmOwHVVYoWCIXc8+R7SXVutI1tqjC1US+ZidqQ+qWt21EYKU5fSY8dRX8pkaP/zsxJ52S9Zh7vQyrjhxZL+vt6kuTmNrohtQBclElt0tyaEHKkDYr/Pwtcfy8o8/xbFTS922BkeC4/DcO1s57udv8dX7l7NkU3O/23GlhBeX1TL/pnd4dUk16ALhNbhy/qjc95J4cwuimyTt+aHHv0UuKyUQ2I50/6+bd2FnsziOdE2BDomq5sBq6iim3mlaaIqCLhRMXUNPZbCi+y6Ha4nuUcijCDbXRD82kNY0JXn0nSrQ3F1a35pgfc3AGvg+P28Eo0blu1JVSoSpc8tF0/Y7GK43uudfW5HpbnW1ikCmsry5vrHf11IvveTzP87PD3sLiwrR9f0HiSeWB7ly/mgmVeRRn7CoiaSQuTEtqzY38fCinbzyYR3VDQnSloPXUDFVBa1bt4C0Je1Ji021MZ59v4br/rSaO15cT0NDu7vYaZuZU0r45cVTO3PFoZIiqhcuJBtPuqMwFWWvj57LSqm5gmlDUTBVFa9poIQD4DERuoFEoHtdSS0dG2nZCMdxc+y2g7BsSGXpUH6OZZONxSk6/WSGnXfeXjUA8ZTF7S9vora524QSRVATSeE3dYble9GFQFdyG2YIKRrP8urKOq56YDlbd+a6MoTr9C7ZFiHPqxPwaK7N3UdP3dAVMlmHf62sBVty5twR3HhBP2xTCet2Rfn58+t57K2t7B2CEKzc0caE0iDD872YmtqrbR+NRolEIkTb22Pi+b++0Dx27OiCiZMm4vP1L5i/Yksrf19Ry+vr6vloVxuxtpTreNluV4CW52FkvpfifA8eU8OyJa3RNHVtSVpaku7MKk3gyfMyotjPUcNDHDsqzDlzhzN9jzlJDWs+ZNl9f2T3ihUoloPp8WCaJoamYigqhqKgq+7fhqpiqiohXcfv98DwYtT8EIrfj9R19GAAoSjY6TROMoVMpSCRRCaSEEvg1LeSiSdJZ7Nk84L4Pn0GJRdfjJKrD3h15W7eWVNPZXOCDTVRNu9q6+pJoisLgwN62EN50ENB0CTPUPjR56Zw1tFlAwbnruYE9/5jK6tro3xYHWH37qhbsqftsdqWOw9LhEyGh70M8xtcfNJofviZAych6lpTjLnuH6Sa4rx+8+mcMav0gOf8e30jzy/ayaLtrayqjiDbku7wts6Cctkz9qipDCsNUh72EPZoXH/2ZM44urSbppXs3LmL7VXb2VVTW6cNZkcfMz6fY8bnc9Ol06iqi7NmVxvrqtuobIhT05SgKZ6mMZlle3MSKSUhQyVkaswZXcCIuT4mFQWYMjLEhBI/o0v8+931JTNmcdZ991G3fBk73n6bplUfktpdh5NM4ggFaRhITQXNQChKLvPrYAkwFIF0XO9T1XUcy0Y1lG7hvQ7pmkVKGxn0o44eTWjOsXg/MRejqGet5a9fruTfC6vAp4GpEQia+Dw6Xo+G2i3Qns3aJFIWrcksu1qTOJEUn583clBSdFlVhFv/sgZ8Bj6vRnFJAI+poXfjnSIEBaZKxpa0prJE41mW7mhk7Ohwn36jLN/Db748i+rmBKf0saHzqXd38OBLGxD5HkJeHW8o3IlPQ1cwurXrZDIuX5qiaWob4xDLcMGxFZxB7xtiUBK1L2og2zH1gw7NNDTqz8mkiVZV0Va5ieSOnSSrq3Gi7Yh4HCWZxHQkXqHgC/kwK0pwAl7UQAAjHMZRFKSi4DgOQtWwshaqP4ASDKOUlKGVlaMVl/YabfqwKsKaqgihgEFpgYdSv0HQqxPwaT3MnEzGIZm2sGxJImXRnMgyssjba61oX+Ol2+pi+AwVn+nOQvV61M6il47mYU1xJVnWkUTjWXa3JjEMlYkHqbCoujFBY1uafJ+O11Qx9Vz7jwSPqeLpVqqYStvEkxbJtEUiYxNJW4wr8VPWjS9DKlH7Eu3VD1JngGKYhCdNJjxpcs8vYhFkNIrI5sJp6SRYaTcEpahQWORW+FuW60AFQ6D2bxTlrDHhPuW6dY+K39O1QEMxXybPr3N0X8cdCdBVQWHIoDBkHNSlHlXsY1Qf60B0r0awnyOP9jp6R2uKlnh2wBmOQ0NuPEoAqB6E4QNTuII8SJftKEFaDmRzjqgNstEGGc/ZUEdeKnBIyIGR+R4K9jPEuBOoHSr5xr9v4YnFO7tG+RyhI3SwKW3zwJem87VPVRwYqB2ziH5yxhgun1M+5KGUI3SEepeokinDAv1T/ZPL/Uw+zHv4j9B/Hh3R70fokFHGcjrdB1V16yv6DNTa5gTrdrrNW0KBEyYW4zP7XokTS2RZsqXZvQFHMnNMPqV5no/t4VujaZZvbaE9kWV8eZAZY/I/tqqmxtYUr6/c3Znbth3Zp/GO0pacNrucEYe4e+LjpHjC4tM3v82u1iRkLK49dwr/dd6UvgN1wbJavvq73OtpNIXKe87tV1Pf1tooZ/z8TXebpCye/vkpgw5y99kmz9ic+ct3WLqqxi02EYKnbjiRy+aP7t08shwiSQu/R8Mc5LuYNu5s48t3vpcLGOO28vTF1k9ZvHTjyf9RQJVSUlUfo7YpAeksje3p/ql+TRUuSE0NVVP6PedTEQLV1LBz4SD1Y3TKdE3hR+dO5pWKEAnbZmKhn3mTi/d57JZd7Xz/8ZXsakqwqy3JmzedylEjBlcMriqi831KZC2euW4eJ07pS2ZHku83+U8jQ1PciTCOul+1f0ht1PZklkyujtNnau5EjRxZWYf2tEUybZO1HIJ+naChoh9g7KKiCC761CjOPX5E56bRuqc0LYe2ZBYJrK2O8PKSHS6jBNS3pTozIx1n5Hl19IEOLpZQHDJ7ZFv6SrYj3VaWnAEX8OgHlPbJjE0iV+CuCEGeX2fPFy7HU1bnRGqPoeLvFoJ0LIdo7vtU2iYUMAjoKoY5wEEctqQ9bZGxHRzcsLxfV/HkhlV4+jmW85AB9b8eX83T71WBI/nx+dP4+mcm8OeF1fx9RQ2VNVFqY2lSloO0JYahMr7Qx1Ejw5x9dDkXnjASby/TOe5/Yys/fWQ5eHXCps7iX55GWZHbnLdiUxNn/u+/QVOwpYRAV7bm/NvfRRO5JIGUYEv+8dOTOH5a8YCf0RrgG0i2NcQ47oZ/IR0JGYsHrvkEF+XKHnuj+97Yys1PrgKPRrHfZNHNp1G0xyb57UsbufPv6wH40onjuP3ymfx18Q6eX7qL9Tui1LSnSFo2jiXRdIUx+V6mjQhz5lGlXDJ/9AHHCjW0pvjnylr+ubaeVVWt7GpNuhN2VMV9FaauUV7g5ZTpJZx/zHBURTn8gYoqaG1Ngqnx+MLt3PPGZlqjGc6YVcbVp41nzPAgiiLYVRdj6dYWnvlgJ+u3NvOXf1dx94LNPH3dPMYO2/vdVomMRWtbCjI2lsfuUUA8ZVSYF6//JIoQrN7Wynf+vNrd6hLu/OIsJpUFOnNTUsLUUYMzBTwDnDptOZKWaMqtMkp3ScH9UedzpzWEvW8nTtMUWiMpMDVeXlXD66tr2d4Q55QZpVx+4mjGVYQwdIXdDQlWVrXylw92sHl7FS8uquZ3r1Xy1PeOZ/aEvV+aJx3JHS9u4HevbqK2LgZSctyscn70yVHMHJNPUFeQQH08w5INjfz5vWpue2kDes4PIn0YA7UobLqOhqGyobqVC04YxV1fPYbhRft2KL67sYlzbltIQyzN0g31XPPAMhbceHKPaqUOtecWQrvvBe1OeQGDk2aV51RPbjCCdDsuT5hewtThQ/gKRl3l2oeWk3egMUhpix9+bhoXzhvR+V8CEKqCFO4cKaUPjsL+nruT5/ke9xhDZfvuKCdOK+PVn57E+F5eZnf9eZM5+9aFbGmIsXFnhCvuXcrSW0/vqc0kfPfBFdz99/VgaoTyvTx87Vwu+uS+HehL5o3kli/O5IYnV/PbVzf2OQOq7MsbGxTtwdQDzsRyJP6QyV1X9Q5SgLmTizhv7gi33cKrs35nlERy4C3JqYy9l403tG4tDMv3MqEsuP/PsBDhAwz9HXJ3VIKqa9z5ldm9ghRg0sg8Lj9pjMtzj8bWhnZ3fm43WrGlmbtf3wx+AxzJf188vVeQdpDXo/GLzx9FYbjbSzD6K1ENXe0cR2inbeoaE4wv63t4qrYthZ2xOneK/0DOiJSEvXqfqmmK8z2dyNeG+H0CQ17kZdn8zyXTmTexaCA46lEeI/twc/3ih5SYukphH8b+FOd3vdlEU8RefKpqTrij9A0dFMG8yX17XlNTyfNoNLenByZR500tIZjncSvEHYd7FmzuF4fvfa3SFQEpi1HDQpzQh9n/UvZtHKEzhO9G2lNzKAchKxAb8Pia3OvNc/PqN9QduP9pw/ZIZ8y2r08yFDyfWBJAeNwXLeNInlu0o0+/XRdJUt/e1aF6oL24F1BHlfq564rZqDlm/eW9Kr5052I27q/TVMKHW1q46LZ3efmDnZB1KA6ZPHLtXPJDh2d80GNouXeGApbD4nUNh829jSj0cfzYAohnwdR44J+b+dfKfU+oaYqk+NWz69z+pJwWs+WQvd7pgDRjbD43XjDNnaoj4M7XNnHDn1bT0FunqSNZvL6RC+94j3gs3dlnZlmyb6q/+4N95bSxjC7xc8tfP+Lfmxp5akElT723ndnjCplekUdJLtwjHcnO+jgf7Wrjo22tkLEoKgtwzqxh/PjCqUzaTwA9azluf5Vw+/n7wthMt3OSmX2fk7VzxyiChFB6ve7Mcfmc/4mRvPBuFSiCbz62gldX7WbSyBA4Eicr+dXlM3sNg+1zDXJeOrYCGWvAQ2s9pspj3zqOq+55n0UbG2moj3H6TW8ye0IR00eEKSn0EmlPU7kryurqVlRF4epTx/Pgu1XIlE2TzBDL2pTsK1zWwXO7b+ldqzs/5b7PuekLM5hUHuL2F9ezujrCLU+s5HcLKjluXCFTRubh9WpIKaltSLBiWwtVu9s5Y1Y5Z84cxoIVNWDZ1DUl91azXb8lNEc6SjabJZVM4vd3OTMnzSjlpBmlrN8eYdGmJj6samXL7nZW7mwlXdWcUzCSIq/O5NIgn5tbwZxRYT4xuYiywgOnAkeX+Jl7VBkYKkUBE107sMIaVxroPKcs5EHbxzkjCn3uMaZG0Og9LeoxVf7ygxN4dm4Fb67ezabmBFWRBJtb4qiOZHJxAKufQAv5DeZOL3WlRNamIDDwqvqJFSHeufk0Fiyv5a2PGtiwq42dsTQfVLfgVEmKvToTy0JcdfIYzpoznDyPTnVrktZ4BqEK7H1IqPJ8D3OPKgVDw6MqePrgcQ8r6OKnT1cwjX2fc9lJo7nw+BEs3tDIu5uaWFvVytaWBG98VI+UEr+mMjrfy2WfGsVnZpYzd3IRT7y1jZZ4GoRgRGHPQXSZbJZ0JoPj2Egps+KpPz+zu2JYednwigoqKiowTYMjdIQOJUkpaWpsoqa2lrq6eurqG95Q0qn0q+2xOK0tLTQ0NJBOpY9w6ggdMnJsh9aWVpqbm4m1t5NIJLBt+xXNsu1b29qiF+u6HgJBNpOhoLAAv99/wIEUR+gIDRXZtk06laatLUprawuRSIRIW5RYLL7JdpxHNGBLIpG4trlZPOHYtpbJpInFYvj9fnx+P6ZpoKnaIZ1Ud4T+P5agjkM2kyWZTJJIJIjH48RicaLt7UTaoo3pTOaLAmJaLrr0dDwRb8la1u8TydQkX3sMr8dEN1yQKuIISo/QQbJHO8CazZLJZEimUiQSSeKJxMJsNvstYG1neCrXgfp6Op2ek81kL4m2t5+j69psTdX8RzB6hD4eySqxbKvZsqyllmX/1XGclxRFkR3hsP87AOYw1djS4VXyAAAAAElFTkSuQmCC'
                            });
                        }
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "order": false,
                "columnDefs": [{
                    targets: "_all",
                    orderable: false
                }],
                "paging": false
            });
        });


        
    </script>
    
@endpush