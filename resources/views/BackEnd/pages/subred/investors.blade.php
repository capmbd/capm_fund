@extends('BackEnd.master_one')

@section('title')
	Investor Registration Info
@endsection

@section('class3')
	active
@endsection

@push('css')
	<style type="text/css">
		label.error {
			color: #CC0000;
			font-weight: 300;
		}
		label span{
			color: red;
		}

	</style>

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
							<a href=" {{ url('/subscription-redumption/inv-reginfo') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/inv-reginfo') }} ">Investors Profile Report</a></li>
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
								<div class="my_bg_one" style="padding: 2px 3px; margin-top: 2px">
									<h6 class="text-white m-b-0">Individual</h6>
								</div>

								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table id="indv_tbl" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Name</th>
        											<th>Registration No.</th>
        											<th>Phone No</th>
        											<th>Email</th>
                                                    <th>TA Agent</th>
        											<th class="text-center">View/Update</th>
      											</tr>
    										</thead>
    										<tbody>
      											<tr>
      												@foreach($individuals as $pro)
      												<td>{{$pro->GENDER}} {{$pro->NAME}}</td>
                									<td>{{$pro->REGISTRATION_NO}}</td>
                									<td>{{$pro->TELEPHONE}}</td>
                									<td>{{$pro->EMAIL}}</td>
                                                    <td>{{$pro->SCID}}</td>
        											<?php
                                                        $inp = encrypt($pro->PRINCIPAL_APPLICANT_ID);
                                                    ?>
      												<td class="text-center">
														<a href="{{url('/subscription-redumption/inv-profile-edit/'.$inp)}}" data-toggle="tooltip" title="View / Update"><i class="fas fa-edit"></i> / <i class="fas fa-eye"></i></a>
        											</td>
      											</tr>
      											   @endforeach
    										</tbody>
  										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="page-body">
					<div class="row">
					<div class="col-xl-12 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="my_bg_one" style="padding: 2px 3px; margin-top: 2px">
									<h6 class="text-white m-b-0">Institutional</h6>
								</div>

								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table id="inst_tbl" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Name</th>
        											<th>Registration No.</th>
        											<th>Phone No</th>
        											<th>Email</th>
                                                    <th>TA Agent</th>
        											<th class="text-center">View/Update</th>
      											</tr>
    										</thead>
    										<tbody>
      											<tr>
      												@foreach($instutionals as $inst_pro)
      												<td>{{$inst_pro->INSTNAME}}</td>
                									<td>{{$inst_pro->REGISTRATION_NO}}</td>
                									<td>{{$inst_pro->TEL}}</td>
                									<td>{{$inst_pro->EMAIL}}</td>
                                                    <td>{{$inst_pro->SCID}}</td>

                                                    <?php
                                                        $insp = encrypt($inst_pro->INSTAPP_ID);
                                                    ?>
        											
      												<td class="text-center">
														<a href="{{url('/subscription-redumption/inst-profile-edit/'.$insp)}}" data-toggle="tooltip" title="View / Update"><i class="fas fa-edit"></i> / <i class="fas fa-eye"></i></a>
        											</td>
      											</tr>
      											   @endforeach
    										</tbody>
  										</table>
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

	<script type="text/javascript">

		$(document).ready(function() {
   			var dataSrc = [];

   			var table = $('#indv_tbl').DataTable({

   				"order": [[ 1, 'asc' ]],
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

   			var table = $('#inst_tbl').DataTable({

   				"order": [[ 1, 'asc' ]],
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
	
@endpush