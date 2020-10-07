@extends('BackEnd.master_one')

@section('title')
    Unit Holder Profile Report
@endsection

@section('class3')
    active
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/pages/data-table/css/buttons.dataTables.min.css') }} ">

@endpush

@section('main-content')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href=" {{ url('subscription-redumption/unit-holder-profile') }} ">
                                <i class="feather icon-pie-chart"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="  {{ url('subscription-redumption/unit-holder-profile') }}">Unit Holder Profile Report</a></li>
                    </ul>
                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                    <p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
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

                        <?php
                            $sum = 0;
                        ?>

                        @foreach($individuals->groupBy('PRO_REG_ID') as $indv_pro)

                            <?php
                                foreach ($indv_pro as $indv_unit) {
                                    $sum = $sum + $indv_unit->TOTAL_UNITS;
                                }
                            ?>

                            <div class="card coin-price-card table-card">
                                <div style="width: 100%; margin-bottom: 5px;" class="my_bg_one pro_title">
                                    <h5 class="text-white m-b-0">Individual: <small><em>"{{$indv_pro[0]->PORTFOLIO_NAME}}"</em>&nbsp;&nbsp;&nbsp; Total Holding:&nbsp; <?php  echo number_format($sum); ?></small></h5>
                                </div>

                            <table style="display: none;" id="indv_export_{{$indv_pro[0]->PRO_REG_ID}}">
                                <thead>
                                    <tr>
                                        <th>Registration No.</th>
                                        <th>Name</th>
                                        <th>Pending Subscription</th>
                                        <th>Pending Redemtion</th>
                                        <th>Total Holding</th>
                                        <th>Block Holding</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($indv_pro as $indv_exp)
                                    <tr>
                                        <td>{{$indv_exp->REGISTRATION_NO}}</td>
                                        <td>{{$indv_exp->NAME}}</td>
                                        <td>{{$indv_exp->BUY_PADDING_UNIT}}</td>
                                        <td>{{$indv_exp->SELL_PADDING_UNIT}}</td>
                                        <td>{{$indv_exp->TOTAL_UNITS}}</td>
                                        <td>{{$indv_exp->BLOCK_UNITS}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table id="indv_tbl_{{$indv_pro[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
                                            <thead>
                                                <tr>
                                                    <th>Registration No.</th>
                                                    <th>Name</th>
                                                    <th>Pending Subscription</th>
                                                    <th>Pending Redemtion</th>
                                                    <th>Total Holding</th>
                                                    <th>Block Holding</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($indv_pro as $indv)
                                                <tr>
                                                    <td>{{$indv->REGISTRATION_NO}}</td>
                                                    <td>{{$indv->NAME}}</td>
                                                    <td>{{$indv->BUY_PADDING_UNIT}}</td>
                                                    <td>{{$indv->SELL_PADDING_UNIT}}</td>
                                                    <td>{{$indv->TOTAL_UNITS}}</td>
                                                    <td>{{$indv->BLOCK_UNITS}}</td>

                                                    <?php
                                                        $invid = encrypt($indv->REGISTRATION_NO);
                                                    ?>

                                                    <td class="text-center">
                                                        <a href="{{url('subscription-redumption/block-units/'.$invid.'/'.$indv->FUND_ID)}}" data-toggle="tooltip" title="Block Units"><i style="font-size: 20px" class="fas fa-th-large text-success"></i></a>

                                                        <a id="ind_mail" href="{{url('subscription-redumption/holding-mail/'.$indv->REGISTRATION_NO.'/'.$indv->FUND_ID)}}" data-toggle="tooltip" title="Send Mail"><i style="font-size: 20px; color: #2b8a78;" class="fas fa-envelope"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            <?php
                                $insum = 0;
                            ?>

                            @foreach($instutionals->groupBy('PRO_REG_ID') as $inst_pro)

                            <?php
                                foreach ($inst_pro as $inst_unit) {
                                    $insum = $insum + $inst_unit->TOTAL_UNITS;
                                }
                            ?>
                            
                            <div class="card coin-price-card table-card">
                                <div style="width: 100%; margin-bottom: 5px;" class="my_bg_one pro_title">
                                    <h5 class="text-white m-b-0">Institutional: <small><em>"{{$inst_pro[0]->PORTFOLIO_NAME}}"</em>&nbsp;&nbsp;&nbsp; Total Holding:&nbsp; <?php  echo number_format($insum); ?></small></h5>
                                </div>

                            <table style="display: none;" id="inst_export_{{$inst_pro[0]->PRO_REG_ID}}">
                                <thead>
                                    <tr>
                                        <th>Registration No.</th>
                                        <th>Name</th>
                                        <th>Pending Subscription</th>
                                        <th>Pending Redemtion</th>
                                        <th>Total Holding</th>
                                        <th>Block Holding</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inst_pro as $inst_exp)
                                    <tr>
                                        <td>{{$inst_exp->REGISTRATION_NO}}</td>
                                        <td>{{$inst_exp->INSTNAME}}</td>
                                        <td>{{$inst_exp->BUY_PADDING_UNIT}}</td>
                                        <td>{{$inst_exp->SELL_PADDING_UNIT}}</td>
                                        <td>{{$inst_exp->TOTAL_UNITS}}</td>
                                        <td>{{$inst_exp->BLOCK_UNITS}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table id="inst_tbl_{{$inst_pro[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
                                            <thead>
                                                <tr>
                                                    <th>Registration No.</th>
                                                    <th>Name</th>
                                                    <th>Pending Subscription</th>
                                                    <th>Pending Redemtion</th>
                                                    <th>Total Holding</th>
                                                    <th>Block Holding</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($inst_pro as $inst)
                                                <tr>
                                                    <td>{{$inst->REGISTRATION_NO}}</td>
                                                    <td>{{$inst->INSTNAME}}</td>
                                                    <td>{{$inst->BUY_PADDING_UNIT}}</td>
                                                    <td>{{$inst->SELL_PADDING_UNIT}}</td>
                                                    <td>{{$inst->TOTAL_UNITS}}</td>
                                                    <td>{{$inst->BLOCK_UNITS}}</td>

                                                    <?php
                                                        $insid = encrypt($inst->REGISTRATION_NO);
                                                    ?>

                                                    <td class="text-center">
                                                        <a href="{{url('subscription-redumption/block-units/'.$insid.'/'.$inst->FUND_ID)}}" data-toggle="tooltip" title="Block Units"><i style="font-size: 20px" class="fas fa-th-large text-success"></i></a>

                                                        <a id="inst_mail" href="{{url('subscription-redumption/holding-mail/'.$inst->REGISTRATION_NO.'/'.$inst->FUND_ID)}}" data-toggle="tooltip" title="Send Mail"><i style="font-size: 20px; color: #2b8a78;" class="fas fa-envelope"></i></a>
                                                    </td>  
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
    

    <script type="text/javascript">

        $(document).ready(function() {
            var dataSrc = [];

            var table = $('#indv_tbl_1').DataTable({

                "order": [[ 0, 'asc' ]],
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Investors",
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                    "sLengthMenu": "_MENU_ Entries",
                    "sSearch": "Registration No"
                },
                "aLengthMenu": [[5, 10, -1], [5, 10, "All"]],
                "iDisplayLength": 5,

                'initComplete': function(){
                var api = this.api();

                        api.cells('tr', [0, 1, 2]).every(function(){
                        var data = $('<div>').html(this.data()).text();           
                            if(dataSrc.indexOf(data) === -1){ dataSrc.push(data); }
                        });

                        dataSrc.sort();
                
                        $('.dataTables_filter input[type="search"]', api.table().container())
                            .typeahead({
                                source: dataSrc,
                                afterSelect: function(value){
                                api.search(value).draw();
                            }
                        }
                    );
                }
            });
        });

        $(document).ready(function() {
            var dataSrc = [];

            var table = $('#indv_tbl_2').DataTable({

                "order": [[ 0, 'asc' ]],
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Investors",
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                    "sLengthMenu": "_MENU_ Entries",
                    "sSearch": "Registration No"
                },
                "aLengthMenu": [[5, 10, -1], [5, 10, "All"]],
                "iDisplayLength": 5,

                'initComplete': function(){
                var api = this.api();

                        api.cells('tr', [0, 1, 2]).every(function(){
                        var data = $('<div>').html(this.data()).text();           
                            if(dataSrc.indexOf(data) === -1){ dataSrc.push(data); }
                        });

                        dataSrc.sort();
                
                        $('.dataTables_filter input[type="search"]', api.table().container())
                            .typeahead({
                                source: dataSrc,
                                afterSelect: function(value){
                                api.search(value).draw();
                            }
                        }
                    );
                }
            });
        });

        $(document).ready(function() {
            var dataSrc = [];

            var table = $('#inst_tbl_1').DataTable({

                "order": [[ 0, 'asc' ]],
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Investors",
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                    "sLengthMenu": "_MENU_ Entries",
                    "sSearch": "Registration No"
                },
                "aLengthMenu": [[5, 10, -1], [5, 10, "All"]],
                "iDisplayLength": 5,

                'initComplete': function(){
                var api = this.api();

                        api.cells('tr', [0, 1, 2]).every(function(){
                        var data = $('<div>').html(this.data()).text();           
                            if(dataSrc.indexOf(data) === -1){ dataSrc.push(data); }
                        });

                        dataSrc.sort();
                
                        $('.dataTables_filter input[type="search"]', api.table().container())
                            .typeahead({
                                source: dataSrc,
                                afterSelect: function(value){
                                api.search(value).draw();
                            }
                        }
                    );
                }
            });
        });

        $(document).ready(function() {
            var dataSrc = [];

            var table = $('#inst_tbl_2').DataTable({

                "order": [[ 0, 'asc' ]],
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Investors",
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                    "sLengthMenu": "_MENU_ Entries",
                    "sSearch": "Registration No"
                },
                "aLengthMenu": [[5, 10, -1], [5, 10, "All"]],
                "iDisplayLength": 5,

                'initComplete': function(){
                var api = this.api();

                        api.cells('tr', [0, 1, 2]).every(function(){
                        var data = $('<div>').html(this.data()).text();           
                            if(dataSrc.indexOf(data) === -1){ dataSrc.push(data); }
                        });

                        dataSrc.sort();
                
                        $('.dataTables_filter input[type="search"]', api.table().container())
                            .typeahead({
                                source: dataSrc,
                                afterSelect: function(value){
                                api.search(value).draw();
                            }
                        }
                    );
                }
            });
        });


        $(document).on('click', '#ind_mail', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Want to Send Mail?</span>",
                size: 'small',
                backdrop: true,
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancel',
                        className: 'btn-danger'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirm',
                        className: 'btn-success'
                    }
                },
                callback: function (result) {
                    if(result){
                        window.location.href = link;
                    }
                }
            });
        });

        $(document).on('click', '#inst_mail', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Want to Send Mail?</span>",
                size: 'small',
                backdrop: true,
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancel',
                        className: 'btn-danger'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirm',
                        className: 'btn-success'
                    }
                },
                callback: function (result) {
                    if(result){
                        window.location.href = link;
                    }
                }
            });
        });

    </script>


    
    <script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/buttons.html5.min.js') }}"></script>

    <script type="text/javascript">

    function gettime() {

        var monthNames = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
          ];

        var date = new Date();
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        var new_day = day + '-' + monthNames[monthIndex] + '-' + year;

        var time = new Date();
        var new_time = time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })
        return new_day+', '+new_time;
    }

        $(document).ready(function() {
            $('#indv_export_1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Unit Holder Profile Report ( Individual "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Unit Holder Profile Report ( Individual "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Unit Holder Profile Report ( Individual "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        PdfSize: "A4",
                        messageTop: gettime()
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#indv_export_2').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Unit Holder Profile Report ( Individual "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Unit Holder Profile Report ( Individual "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Unit Holder Profile Report ( Individual "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        PdfSize: "A4",
                        messageTop: gettime()
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#inst_export_1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "CAPM Unit Fund" )',
                        filename: 'Holding_Report',
                        PdfSize: "A4",
                        messageTop: gettime()
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "paging": false
            });
        });

        $(document).ready(function() {
            $('#inst_export_2').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Unit Holder Profile Report ( Institutional "Test Unit Fund" )',
                        filename: 'Holding_Report',
                        PdfSize: "A4",
                        messageTop: gettime()
                    }
                ],
                "bFilter": false,
                "bInfo": false,
                "paging": false
            });
        });

    </script>
    
@endpush