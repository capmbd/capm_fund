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