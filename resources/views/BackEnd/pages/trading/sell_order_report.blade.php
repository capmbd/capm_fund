@extends('BackEnd.master_one')

@section('title')
	Sell Order Reports
@endsection

@section('class4')
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
							<a href=" {{ url('/trading/sorder/conf/report') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/sorder/conf/report') }} ">Sell Order Reports</a></li>
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
						<div class="col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5>Buy Order Reports</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									@foreach($reports as $report)
										<button style="margin-bottom: 3px;" type="button" class="btn btn-primary waves-effect btn-sm" data-toggle="modal" data-target="#{{$report->TO_PDF_ID}}">{{$report->HEADING}}</button>
											<div class="modal fade" id="{{$report->TO_PDF_ID}}" tabindex="-1" role="dialog">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h6 class="modal-title">{{$report->HEADING}}</h6>
															<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<object data="{{asset($report->TO_URL)}}" type="application/pdf" width="100%" height="425px">
															</object>
														</div>
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
	</div>
</div>
@endsection