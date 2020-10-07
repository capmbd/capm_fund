@extends('BackEnd.master_one')

@section('title')
	Foreign Currency
@endsection

@section('class8')
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
							<a href=" {{ url('/parameters-setup/foreign-currency') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/foreign-currency') }} ">Foreign Currency</a></li>
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
									<h5>Foreign Currency</h5>
								</div>
								<div class="card-block">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Country</th>
        											<th>Symbol</th>
        											<th>Currency</th>
        											<th>Short Form</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($currencies as $currency)
      											<tr>
        											<td> {{ $currency->name }} </td>
        											<td> {{ $currency->CURRENCY_SYMBOL }} </td>
        											<td> {{ $currency->CURRENCY }} </td>
        											<td> {{ $currency->SHORTFORM }} </td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $currencies->links() }}
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