@extends('BackEnd.master_one')

@section('title')
	Control Panel
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
							<a href=" {{ url('/control-panel') }} ">
								<i class="feather icon-layers"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/control-panel') }} ">Control Panel</a></li>
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
						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-layers"></i> Application Control Parameter Setup</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Insert Service</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-layers"></i> Role Level</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Enter Role Level</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-layers"></i> User Control</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">User Access Control Monitoring</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-layers"></i> Calendar Setup</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="{{url('/calender/settings')}}">Settings</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="{{url('/calender/dayedays')}}">Day End / Day Start</a>
													</td>
												</tr>
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
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>
@endpush