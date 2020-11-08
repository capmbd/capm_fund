@extends('BackEnd.master_one')

@section('title')
	Settings
@endsection

@section('class2')
	active
@endsection

@push('css')
	<style type="text/css">
		.ckbx span{
			font-weight: 700 !important;
		}
		.ckbx input{
			cursor: pointer;
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
							<a href=" {{ url('/calender/settings') }} ">
								<i class="feather icon-layers"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/calender/settings') }} ">Settings</a></li>
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
									<h5>Month Insert</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="inp_date" action=" {{ url('calender/month/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Start Date</label>
											</div>
											<div class="col-sm-8">
												<input type="date" name="START_DATE" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">End Date</label>
											</div>
											<div class="col-sm-8">
												<input type="date" name="END_DATE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary m-b-0">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5>Holyday Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('messageh') }} </b> </p>
								</div>
								<div class="card-block">
									<form action=" {{ url('calender/holyday/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-12">
												<p class="ckbx">
													<span>Sunday</span> <input type="checkbox" name="hday[]" value="Sunday"> 
													<span>Monday</span> <input type="checkbox" name="hday[]" value="Monday"> 
													<span>Tuesday</span> <input type="checkbox" name="hday[]" value="Tuesday"> 
													<span>Wednesday</span> <input type="checkbox" name="hday[]" value="Wednesday"> 
													<span>Thursday</span> <input type="checkbox" name="hday[]" value="Thursday"><br> 
													<span>Friday</span> <input type="checkbox" checked name="hday[]" value="Friday"> 
													<span>Saturday</span> <input type="checkbox" checked name="hday[]" value="Saturday">
												</p>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary m-b-0">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5>Add New Holyday</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('messagem') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="holy_day" action="{{url('calender/newhday/save')}}" method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Date</label>
											</div>
											<div class="col-sm-8">
												<input type="date" name="H_DATE" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Note</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="H_NOTE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary m-b-0">Submit</button>
											</div>
										</div>
									</form>
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
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>

	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>

	<script type="text/javascript">
		$().ready(function() {

	        $("#inp_date").validate({
	            rules: {
	            	START_DATE:{
	                    required:true
	                },
	                END_DATE:{
	                    required:true
	                }
	                
	            },
	            messages: {
	            	START_DATE:{
	                    required: "Enter Start Date"
	                },
	              END_DATE:{
	                    required: "Enter End Date"
	                }

	            }
	        });

        
        });

        $().ready(function() {

	        $("#holy_day").validate({
	            rules: {
	            	H_DATE:{
	                    required:true
	                },
	                H_NOTE:{
	                    required:true
	                }
	            },
	            messages: {
	            	H_DATE:{
	                    required: "Enter Holyday Date"
	                },
	              H_NOTE:{
	                    required: "Enter Holyday Note"
	                }

	            }
	        });

        
        });
	</script>
@endpush