@extends('BackEnd.pages.ta.master')

@section('title')
	Surrender List
@endsection

@section('class7')
	active
@endsection

@section('report')
	active pcoded-trigger
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
	</style>
@endpush

@section('main-content-ta')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" {{ url('/ta/unit_sur_list') }} ">
								<i class="feather icon-info"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/ta/unit_sur_list') }} ">Surrender List</a></li>
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
							<div class="card">
								<div class="card-block">
									<div class="row">
										<div class="col-xl-12 col-md-12">
											<ul class="nav nav-tabs  tabs my_tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#app" role="tab">Approve</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#dis" role="tab">Disapprove</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#pand" role="tab">Panding</a>
												</li>
											</ul>
											<div class="tab-content tabs card-block">
												<div class="tab-pane active" id="app" role="tabpanel">
													<p class="type_head"><i class="fa fa-check text-success" aria-hidden="true"></i> Approve List</p>
													@foreach($approve->groupBy('PRO_REG_ID') as $appr)
													<div style="width: 100% ;margin-bottom: 5px; color: #2b8a78" class="pro_title">
                                    					<h5 class="m-b-0">Portfolio: {{$appr[0]->PORTFOLIO_NAME}}</h5>
                                					</div>
													<div class="table-responsive">
														<table id="sur_app_{{$appr[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta">
				    										<thead>
				      											<tr>
				        											<th>Registration No.</th>
				        											<th>Unit</th>
				        											<th>Rate</th>
				        											<th>Total Amount</th>
				        											<th>Transaction No</th>
				        											<th>Surrender Date</th>
				      											</tr>
				    										</thead>
				    										<tbody>
				    											@foreach($appr as $app)
				      											<tr>
				      												<td>{{$app->REGISTRATION_NO}}</td>
				      												<td>{{$app->UNIT}}</td>
				      												<td>{{$app->RATE}}</td>
				      												<td>{{$app->TOTAL_AMOUNT}}</td>
				      												<td>{{$app->SALES_PERSON_ID}}{{$app->SALE_NO}}</td>
																	<?php
																		$date = $app->created_at;
																		$ndate = date("d-M-Y", strtotime($date));
																	?>
																	<td>{{$ndate}}</td>
				      											</tr>
				      											@endforeach
				    										</tbody>
				  										</table>
													</div>
													<hr style="border: 1px solid #2b8a78">
													@endforeach
												</div>
												<div class="tab-pane" id="dis" role="tabpanel">
													<p class="type_head"><i class="fa fa-times text-danger" aria-hidden="true"></i> Disapprove List</p>
													@foreach($disapprove->groupBy('PRO_REG_ID') as $disappr)
													<div style="width: 100% ;margin-bottom: 5px; color: #2b8a78" class="pro_title">
                                    					<h5 class="m-b-0">Portfolio: {{$disappr[0]->PORTFOLIO_NAME}}</h5>
                                					</div>
													<div class="table-responsive">
														<table id="sur_dis_{{$disappr[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta">
				    										<thead>
				      											<tr>
				        											<th>Registration No.</th>
				        											<th>Unit</th>
				        											<th>Rate</th>
				        											<th>Total Amount</th>
				        											<th>Transaction No</th>
				        											<th>Surrender Date</th>
				      											</tr>
				    										</thead>
				    										<tbody>
				    											@foreach($disappr as $disap)
				      											<tr>
				      												<td>{{$disap->REGISTRATION_NO}}</td>
				      												<td>{{$disap->UNIT}}</td>
				      												<td>{{$disap->RATE}}</td>
				      												<td>{{$disap->TOTAL_AMOUNT}}</td>
				      												<td>{{$disap->SALES_PERSON_ID}}{{$disap->SALE_NO}}</td>
																	<?php
																		$date = $disap->created_at;
																		$ndate = date("d-M-Y", strtotime($date));
																	?>
																	<td>{{$ndate}}</td>
				      											</tr>
				      											@endforeach
				    										</tbody>
				  										</table>
													</div>
													<hr style="border: 1px solid #2b8a78">
													@endforeach
												</div>
												<div class="tab-pane" id="pand" role="tabpanel">
													<div class="tab-pane" id="dis" role="tabpanel">
													<p class="type_head"><i class="fa fa-spinner fa-spin text-info" aria-hidden="true"></i> Panding List</p>
													@foreach($panding->groupBy('PRO_REG_ID') as $pend)
													<div style="width: 100% ;margin-bottom: 5px; color: #2b8a78" class="pro_title">
                                    					<h5 class="m-b-0">Portfolio: {{$pend[0]->PORTFOLIO_NAME}}</h5>
                                					</div>
													<div class="table-responsive">
														<table id="sur_pen_{{$pend[0]->PRO_REG_ID}}" class="table table-bordered tbl_dta">
				    										<thead>
				      											<tr>
				        											<th>Registration No.</th>
				        											<th>Unit</th>
				        											<th>Rate</th>
				        											<th>Total Amount</th>
				        											<th>Transaction No</th>
				        											<th>Surrender Date</th>
				      											</tr>
				    										</thead>
				    										<tbody>
				    											@foreach($pend as $pen)
				      											<tr>
				      												<td>{{$pen->REGISTRATION_NO}}</td>
				      												<td>{{$pen->UNIT}}</td>
				      												<td>{{$pen->RATE}}</td>
				      												<td>{{$pen->TOTAL_AMOUNT}}</td>
				      												<td>{{$pen->SALES_PERSON_ID}}{{$pen->SALE_NO}}</td>
																	<?php
																		$date = $pen->created_at;
																		$ndate = date("d-M-Y", strtotime($date));
																	?>
																	<td>{{$ndate}}</td>
				      											</tr>
				      											@endforeach
				    										</tbody>
				  										</table>
													</div>
													<hr style="border: 1px solid #2b8a78">
													@endforeach
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

   			var table = $('#sur_app_1').DataTable({

   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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

   			var table = $('#sur_app_2').DataTable({

   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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

   			var table = $('#sur_dis_1').DataTable({

   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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

   			var table = $('#sur_dis_2').DataTable({

   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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

   			var table = $('#sur_pen_1').DataTable({

   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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

   			var table = $('#sur_pen_2').DataTable({
   				"ordering": false,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ Transactions",
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