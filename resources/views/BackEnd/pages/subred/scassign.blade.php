@extends('BackEnd.master_one')

@section('title')
	Assign Sales Center
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
							<a href=" {{ url('/subscription-redumption/assign-sc') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/assign-sc') }} ">Assign Sales Center</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">	
						<div class="col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5>Assign Sales Center</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="assign_form" action=" {{ url('/subscription-redumption/assign-sc/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Sales Center</label>
											</div>
											<div class="col-sm-8">
												<select name="SALESCENTER_ID" id="SALESCENTER_ID" class="col-sm-12 form-select">
													<option value="">---Select Sales Center---</option>
													@foreach($salescenters as $salescenter)
														<option value="{{$salescenter->SALESCENTER_ID}}">{{$salescenter->SCID}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio</label>
											</div>
											<div class="col-sm-8">
												<select name="PRO_REG_ID" id="PRO_REG_ID" class="col-sm-12 form-select">
													<option value="">---Select Portfolio---</option>
													@foreach($portfolios as $portfolio)
														<option value="{{$portfolio->PRO_REG_ID}}">{{$portfolio->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary m-b-0">Assign</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6">
							<div class="card view_card">
								<div class="card-header">
									<h5><a href="#view_port" data-toggle="collapse" >View Assigned</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Sales Center</th>
        											<th>Portfolio</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($assigneds as $assigned)
      											<tr>
        											<td> {{ $assigned->SCID }} </td>
        											<td> {{ $assigned->PORTFOLIO_NAME }} </td>
        											<td class="text-center">
														<a id="deleteBox" href="{{ url('subscription-redumption/assigned/delete/'.$assigned->ASSIGN_ID) }}" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $assigneds->links() }}
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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">
		$().ready(function() {
			$("#assign_form").validate({
				rules: {
					SALESCENTER_ID:{
						required:true
					},
					PRO_REG_ID:{
						required:true
					}
				},
				messages: {
					SALESCENTER_ID:{
						required: "Select Sales Center"
					},
					PRO_REG_ID:{
						required: "Select Portfolio"
					}
				}
			});

		});
</script>

<script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>
	<script type="text/javascript">

		$(document).on('click', '#deleteBox', function(e){
			e.preventDefault();
			var link = $(this).attr('href');

			bootbox.confirm({
			    message: "<span style='color: red;'>Are You Want to Delete This?</span>",
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

@endpush