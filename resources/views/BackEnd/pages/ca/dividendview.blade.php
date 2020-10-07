@extends('BackEnd.master_one')

@section('title')
	Dividend View
@endsection

@section('class7')
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
							<a href=" {{ url('corporate-action/view_dividend') }} ">
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('corporate-action/view_dividend') }} ">Dividend View</a></li>
					</ul>
					<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
					<p class="text-danger insert_message"> <b> {{ Session::get('messaged') }} </b> </p>
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

						@foreach($dividends->groupBy('PRO_REG_ID') as $dividend)

							<div class="card coin-price-card table-card">
								<div style="width: 100%" class="my_bg_one pro_title">
									<h6 class="text-white m-b-0">Fund: {{$dividend[0]->PORTFOLIO_NAME}}</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta tbl_dvdnd" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Year<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
        											<th>Face<br>Value<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
        											<th>Dividend<br>(%)<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
        											<th>Individual<br>Income<br>Tax (%)<br>With<br>E-TIN</th>
                                                    <th>Individual<br>Income<br>Tax (%)<br>Except<br>E-TIN</th>
        											<th>Institutional<br>Income<br>Tax (%)<br>&nbsp;<br>&nbsp;</th>
                                                    <th>Tax<br>Margin<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
                                                    <th>Net Profit<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
                                                    <th>Earnings<br>Per Unit<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
                                                    <th>CIP<br>Buy<br>Price<br>&nbsp;<br>&nbsp;</th>
        											<th>Approve<br>Date<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
                                                    <th>Year<br>Ended<br>Date<br>&nbsp;<br>&nbsp;</th>
                                                    <th>Cash<br>Transfer<br>Date<br>&nbsp;<br>&nbsp;</th>
                                                    <th>CIP<br>Transfer<br>Date<br>&nbsp;<br>&nbsp;</th>
        											<th>Action<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($dividend as $div)
      											<tr>
      												<td>
      													<?php
		      												$yr = strtotime($div->created_at);
		      												$nyr = date('Y', $yr);
		      											?>
      													{{$nyr}}
      												</td>
      												<td>{{$div->FACE_VALUE}}</td>
      												<td>{{$div->DIVIDEND}}</td>
      												<td>{{$div->INDV_ETIN_TAX}}</td>
                                                    <td>{{$div->INDV_TAX}}</td>
      												<td>{{$div->INST_INC_TAX}}</td>
                                                    <td>{{$div->TAX_MARGIN}}</td>
                                                    <td>{{$div->NET_PROFIT}}</td>
                                                    <td>{{$div->EARNINGS_PER_UNIT}}</td>
                                                    <td>{{$div->BUY_PRICE}}</td>
                                                    <td>
                                                        <?php
                                                            $ad = strtotime($div->APRV_DATE);
                                                            $nad = date('F d, Y', $ad);
                                                        ?>
                                                        {{$nad}}
                                                    </td>
      												<td>
      													<?php
		      												$yd = strtotime($div->YED);
		      												$nyd = date('F d, Y', $yd);
		      											?>
      													{{$nyd}}
      												</td>
                                                    <td>
                                                        <?php
                                                            $tc = strtotime($div->TC_DATE);
                                                            $ntc = date('F d, Y', $tc);
                                                        ?>
                                                        {{$ntc}}
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $tcip = strtotime($div->TCIP_DATE);
                                                            $ntcip = date('F d, Y', $tcip);
                                                        ?>
                                                        {{$ntcip}}
                                                    </td>
      												<td class="text-center">
														<a href="{{url('corporate-action/dividend/edit/'.$div->DVS_ID)}}"  title="Edit"><i style="font-size: 20px" class="fas fa-edit text-success"></i></a> 
                                                        <a id="div_del" href="{{url('corporate-action/dividend/delete/'.$div->DVS_ID)}}"  title="Delete"><i style="font-size: 20px" class="fas fa-window-close text-danger"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
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
@endsection

@push('js')
	<script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>

	<script type="text/javascript">

		$(document).on('click', '#div_del', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Want to Delete?</span>",
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