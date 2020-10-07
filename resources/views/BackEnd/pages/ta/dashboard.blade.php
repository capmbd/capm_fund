@extends('BackEnd.pages.ta.master')

@section('title')
	Home
@endsection

@push('css')
<style>
	.rate_info table tr th{
		border: 1px solid #2b8a78;
		padding: 5px;
	}
	.rate_info table tr td{
		border: 1px solid #2b8a78;
		padding: 5px;
	}
	.type_head{
			font-size: 15px;
			color: #232e33;
			font-weight: 700;
	}
	.my_tab{
			border-bottom: 1px solid #2b8a78;
		}
</style>
@endpush

@section('class1')
	active
@endsection

@section('main-content-ta')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					@if ($failed = Session::get('messagend'))
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>{{$failed}}</strong>
					</div>
					@endif
					
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" {{ url('/ta') }} ">
								<i class="feather icon-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/ta') }} ">Dashboard</a></li>
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
						<div class="col-xl-6 col-md-12">
							<div class="card proj-t-card">
								<div class="card-body">
									<ul class="nav nav-tabs  tabs my_tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#sub" role="tab">Subscription</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#sur" role="tab">Surrender</a>
										</li>
									</ul>
									<div class="tab-content tabs card-block">
										<div class="tab-pane active" id="sub" role="tabpanel">
											<p class="type_head">Sale / Subscription (Approved)</p>
											<div class="table-responsive rate_info">
												<table>
													<tr>
														<th>TA</th>
														<th>Transactions</th>
														<th>Total Unit</th>
														<th>Total Amount(Tk)</th>
													</tr>
													@foreach($ta_info_buy as $buyinfo)
													<tr>
														<td>{{$buyinfo->SCID}}</td>
														<td>{{$buyinfo->sub}}</td>
														<td>{{$buyinfo->sub_unit}}</td>
														<td>{{$buyinfo->sub_amo}}</td>
													</tr>
													@endforeach
												</table>
											</div>
										</div>
										<div class="tab-pane" id="sur" role="tabpanel">
											<p class="type_head">Re-Purchase / Surrender (Approved)</p>
											<div class="table-responsive rate_info">
												<table>
													<tr>
														<th>TA</th>
														<th>Transactions</th>
														<th>Total Unit</th>
														<th>Total Amount(Tk)</th>
													</tr>
													@foreach($ta_info_sell as $sellinfo)
													<tr>
														<td>{{$sellinfo->SCID}}</td>
														<td>{{$sellinfo->sur}}</td>
														<td>{{$sellinfo->sur_unit}}</td>
														<td>{{$sellinfo->sur_amo}}</td>
													</tr>
													@endforeach
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12">
							<div class="card proj-t-card">
								<div class="card-body">
									<div class="row align-items-center text-center">
										<div class="table-responsive rate_info">
											<table>
												<tr>
													<th>Fund Name</th>
													<th>Sale / Subscription Price</th>
													<th>Re-Purchase / Surrender Price</th>
												</tr>
												@foreach($rates as $rate)
												<tr>
													<td>{{$rate->PORTFOLIO_NAME}}</td>
													<td>{{$rate->BUY_RATE}}</td>
													<td>{{$rate->SELL_RATE}}</td>
												</tr>
												@endforeach
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
</div>
@endsection