@extends('BackEnd.master_one')

@section('title')
	Settings
@endsection

@section('class2')
	active
@endsection

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
									<form id="bank_form" action=" {{ url('calender/month/save') }} " method="post">

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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('js')
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>
@endpush