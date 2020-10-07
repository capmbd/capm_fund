@extends('BackEnd.master_one')

@section('title')
    Disapproved Fund Unit Repurchase Application
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
                            <a href=" {{ url('subscription-redumption/repurchdisap') }} ">
                                <i class="feather icon-pie-chart"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="  {{ url('subscription-redumption/repurchdisap') }}">Disapproved Fund Unit Repurchase Application</a></li>
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
                        @foreach($individual->groupBy('PRO_REG_ID') as $indv_disapp)
                            <div class="card coin-price-card table-card">
                                <div style="width: 100%; margin-bottom: 5px;" class="my_bg_one pro_title">
                                    <h5 class="text-white m-b-0">Individual: <small><em>"{{$indv_disapp[0]->PORTFOLIO_NAME}}"</em></small></h5>
                                </div>

                            <table style="display: none;" id="indv_export_{{$indv_disapp[0]->PRO_REG_ID}}">
                                <thead>
                                    <tr>
                                        <th>Repurchase Date</th>
                                        <th>Reg. No.</th>
                                        <th>Investor</th>
                                        <th>Unit</th>
                                        <th>Rate (Tk.)</th>
                                        <th>Total (Tk.)</th>
                                        <th>Disapprove Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($indv_disapp as $ind_dis)
                                    <tr>
                                        <td>
                                            <?php
                                                $date = strtotime($ind_dis->created_at);
                                                $ndate = date('F d, Y', $date);
                                            ?>
                                            {{$ndate}}
                                        </td>
                                        <td>{{$ind_dis->REGISTRATION_NO}}</td>
                                        <td>{{$ind_dis->NAME}}</td>
                                        <td>{{$ind_dis->UNIT}}</td>
                                        <td>{{$ind_dis->RATE}}</td>
                                        <td>{{$ind_dis->TOTAL_AMOUNT}}</td>
                                        <td>
                                            <?php
                                                $dadate = strtotime($ind_dis->DP_TRAN_CONF_DATE);
                                                $dandate = date('F d, Y', $dadate);
                                            ?>
                                            {{$dandate}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table id="indv_tbl_{{$indv_disapp[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
                                            <thead>
                                                <tr>
                                                    <th>Repurchase Date</th>
                                                    <th>Reg. No.</th>
                                                    <th>Investor</th>
                                                    <th>Unit</th>
                                                    <th>Rate (Tk.)</th>
                                                    <th>Total (Tk.)</th>
                                                    <th>Disapprove Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($indv_disapp as $ind_dis)
                                                <tr>
                                                    <td>
                                                        <?php
                                                            $date = strtotime($ind_dis->created_at);
                                                            $ndate = date('F d, Y', $date);
                                                        ?>
                                                        {{$ndate}}
                                                    </td>
                                                    <td>{{$ind_dis->REGISTRATION_NO}}</td>
                                                    <td>{{$ind_dis->NAME}}</td>
                                                    <td>{{$ind_dis->UNIT}}</td>
                                                    <td>{{$ind_dis->RATE}}</td>
                                                    <td>{{$ind_dis->TOTAL_AMOUNT}}</td>
                                                    <td>
                                                        <?php
                                                            $dadate = strtotime($ind_dis->DP_TRAN_CONF_DATE);
                                                            $dandate = date('F d, Y', $dadate);
                                                        ?>
                                                        {{$dandate}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            

                            @foreach($instutional->groupBy('PRO_REG_ID') as $inst_disapp)
                            <div class="card coin-price-card table-card">
                                <div style="width: 100%; margin-bottom: 5px;" class="my_bg_one pro_title">
                                    <h5 class="text-white m-b-0">Institutional: <small><em>"{{$inst_disapp[0]->PORTFOLIO_NAME}}"</em></small></h5>
                                </div>

                            <table style="display: none;" id="inst_export_{{$inst_disapp[0]->PRO_REG_ID}}">
                                <thead>
                                    <tr>
                                        <th>Repurchase Date</th>
                                        <th>Reg. No.</th>
                                        <th>Investor</th>
                                        <th>Unit</th>
                                        <th>Rate (Tk.)</th>
                                        <th>Total (Tk.)</th>
                                        <th>Disapprove Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inst_disapp as $ins_dis)
                                    <tr>
                                        <td>
                                            <?php
                                                $date = strtotime($ins_dis->created_at);
                                                $ndate = date('F d, Y', $date);
                                            ?>
                                            {{$ndate}}
                                        </td>
                                        <td>{{$ins_dis->REGISTRATION_NO}}</td>
                                        <td>{{$ins_dis->INSTNAME}}</td>
                                        <td>{{$ins_dis->UNIT}}</td>
                                        <td>{{$ins_dis->RATE}}</td>
                                        <td>{{$ins_dis->TOTAL_AMOUNT}}</td>
                                        <td>
                                            <?php
                                                $dadate = strtotime($ins_dis->DP_TRAN_CONF_DATE);
                                                $dandate = date('F d, Y', $dadate);
                                            ?>
                                            {{$dandate}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table id="inst_tbl_{{$inst_disapp[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
                                            <thead>
                                                <tr>
                                                    <th>Repurchase Date</th>
                                                    <th>Reg. No.</th>
                                                    <th>Investor</th>
                                                    <th>Unit</th>
                                                    <th>Rate (Tk.)</th>
                                                    <th>Total (Tk.)</th>
                                                    <th>Disapprove Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($inst_disapp as $ins_dis)
                                                <tr>
                                                    <td>
                                                        <?php
                                                            $date = strtotime($ins_dis->created_at);
                                                            $ndate = date('F d, Y', $date);
                                                        ?>
                                                        {{$ndate}}
                                                    </td>
                                                    <td>{{$ins_dis->REGISTRATION_NO}}</td>
                                                    <td>{{$ins_dis->INSTNAME}}</td>
                                                    <td>{{$ins_dis->UNIT}}</td>
                                                    <td>{{$ins_dis->RATE}}</td>
                                                    <td>{{$ins_dis->TOTAL_AMOUNT}}</td>
                                                    <td>
                                                        <?php
                                                            $dadate = strtotime($ins_dis->DP_TRAN_CONF_DATE);
                                                            $dandate = date('F d, Y', $dadate);
                                                        ?>
                                                        {{$dandate}}
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

                "order": [[ 0, 'desc' ]],
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

                "order": [[ 0, 'desc' ]],
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

                "order": [[ 0, 'desc' ]],
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

                "order": [[ 0, 'desc' ]],
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
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
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
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Individual "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
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
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "CAPM Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
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
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
                        messageTop: gettime()
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Disapproved Fund Unit Repurchase Application ( Institutional "Test Unit Fund" )',
                        filename: 'Repurchase_Disapprove_Report',
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