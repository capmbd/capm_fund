@extends('BackEnd.master_one')

@section('title')
	Pending
@endsection

@section('class3')
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
							<a href=" {{ url('subscription-redumption/pending-purchase') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('subscription-redumption/pending-purchase') }} ">Pending Purchase Unit Application</a></li>
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
						<?php
							$user_id = Auth::user()->id;
						?>
						@if(!$indv->isEmpty())
							<div class="card coin-price-card table-card">
								<div style="width: 100%" class="my_bg_one pro_title">
									<h6 class="text-white m-b-0">
										Individual
									</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Purchase Date</th>
        											<th>Reg. No.</th>
                                                    <th>Portfolio</th>
        											<th>Investor</th>
        											<th>Unit</th>
        											<th>Rate (Tk.)</th>
        											<th>Total (Tk.)</th>
        											<th>Pay Mode</th>
        											<th>Pay Mode Ref.</th>
        											<th>Bank Name</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($indv as $pend)
      											<tr>
      												<td>
      													<?php
		      												$date = strtotime($pend->created_at);
		      												$ndate = date('F d, Y', $date);
		      											?>
      													{{$ndate}}
      												</td>
      												<td>{{$pend->REGISTRATION_NO}}</td>
                                                    <td>{{$pend->PORTFOLIO_NAME}}</td>
      												<td>{{$pend->NAME}}</td>
      												<td>{{$pend->UNIT}}</td>
      												<td>{{$pend->RATE}}</td>
      												<td>{{$pend->TOTAL_AMOUNT}}</td>
      												<td>
        												@if($pend->MODE_PAY == 'chq')
        													Cheque
        												@elseif($pend->MODE_PAY == 'pay')
        													Pay Order
        												@elseif($pend->MODE_PAY == 'dd')
        													Demand Draft
        												@elseif($pend->MODE_PAY == 'bftn')
        													BFTN
        												@elseif($pend->MODE_PAY == 'eft')
        													EFT
        												@endif
        											</td>
      												<td>{{$pend->BCPODDTC_NO}}</td>
      												<td>{{$pend->BANK}}</td>
      												<td class="text-center">
														<a id="pend_ind" href="{{url('subscription-redumption/pending-purchase/approve/'.$pend->UNIT_PURCHASE_ID.'/'.$user_id)}}" data-toggle="tooltip" title="Send to Manager"><i style="font-size: 20px" class="fas fa-check-square text-success"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
									</div>
								</div>
							</div>
							@endif

							@if(!$inst->isEmpty())
							<div class="card coin-price-card table-card">
								<div style="width: 100%" class="my_bg_one pro_title">
									<h6 class="text-white m-b-0">
										Institutional
									</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Purchase Date</th>
        											<th>Reg. No.</th>
                                                    <th>Portfolio</th>
        											<th>Investor</th>
        											<th>Unit</th>
        											<th>Rate (Tk.)</th>
        											<th>Total (Tk.)</th>
        											<th>Pay Mode</th>
        											<th>Pay Mode Ref.</th>
        											<th>Bank Name</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($inst as $pend_inst)
      											<tr>
      												<td>
      													<?php
		      												$date = strtotime($pend_inst->created_at);
		      												$ndate = date('F d, Y', $date);
		      											?>
      													{{$ndate}}
      												</td>
      												<td>{{$pend_inst->REGISTRATION_NO}}</td>
                                                    <td>{{$pend_inst->PORTFOLIO_NAME}}</td>
      												<td>{{$pend_inst->INSTNAME}}</td>
      												<td>{{$pend_inst->UNIT}}</td>
      												<td>{{$pend_inst->RATE}}</td>
      												<td>{{$pend_inst->TOTAL_AMOUNT}}</td>
													<td>
        												@if($pend_inst->MODE_PAY == 'chq')
        													Cheque
        												@elseif($pend_inst->MODE_PAY == 'pay')
        													Pay Order
        												@elseif($pend_inst->MODE_PAY == 'dd')
        													Demand Draft
        												@elseif($pend_inst->MODE_PAY == 'bftn')
        													BFTN
        												@elseif($pend_inst->MODE_PAY == 'eft')
        													EFT
        												@endif
        											</td>
      												<td>{{$pend_inst->BCPODDTC_NO}}</td>
      												<td>{{$pend_inst->BANK}}</td>
      												<td class="text-center">
														<a id="pend_ins" href="{{url('subscription-redumption/pending-purchase/approve/'.$pend_inst->UNIT_PURCHASE_ID.'/'.$user_id)}}" data-toggle="tooltip" title="Send to Manager"><i style="font-size: 20px" class="fas fa-check-square text-success"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
									</div>
								</div>
							</div>
							@endif

							@if($indv->isEmpty() && $inst->isEmpty())
								<h3 class="text-success">No Pending Record Found !!!</h3>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('js')

<script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>
    <script type="text/javascript">

        $(document).on('click', '#pend_ind', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Want to Send?</span>",
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

        $(document).on('click', '#pend_ins', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Want to Send?</span>",
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