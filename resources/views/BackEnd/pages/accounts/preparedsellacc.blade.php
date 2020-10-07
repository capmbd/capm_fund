@extends('BackEnd.master_one')

@section('title')
	Pending
@endsection

@section('class6')
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
							<a href="#">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">UNIT REPURCHASE PAYMENT</a></li>
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
									<h5>RECEIEVE AND PAYMENT</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<?php
							      $user_id = Auth::user()->id;
						          ?>
								<div class="card-block">
									<form id="bank_form" action=" {{ url('portfolio-accounts/pending-sell/approve/acc') }} " method="post">

										@csrf

										<input type="hidden" value="{{$user_id}}" name="user_id" required>
										<input type="hidden" value="{{$ST_PANDING_UNIT->UNIT_SELL_ID}}" name="UNIT_SELL_ID" required>
										<div class="row form-group">
											<div class="col-sm-4">
									   <label class="col-form-label">REGISTRATION NO</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$ST_PANDING_UNIT->REGISTRATION_NO}}" name="REGISTRATION_NO" class="form-control autonumber" readonly>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">TOTAL AMOUNT</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$ST_PANDING_UNIT->TOTAL_AMOUNT}}" name="TOTAL_AMOUNT" class="form-control autonumber" readonly>
											</div>
										</div>
										
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Bank</label>
											</div>
											<div class="col-sm-8">
												<select name="BANK_ID" id="BANK_ID" class="col-sm-12 form-select" required >
												<option value="">Select Bank</option>
													@foreach($banks as $bank)
													<option value="{{$bank->BANK_ID}}">{{$bank->BANK_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>
										
										<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Account No </label>
													</div>

													<div class="col-sm-8">
														<select name="ACCOUNT_NO" id="ACCOUNT_NO" class="col-sm-12 form-select">
															<option value="">--- Select Account ---</option>
														</select>
													</div>
												</div>
									<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Account Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="AC_NAME" id="AC_NAME" class="form-control autonumber" readonly>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Bank Amount</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="b_amount" id="b_amount" class="form-control autonumber" readonly>
											</div>
										</div>
										

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" id="submitbtn" class="btn btn-primary m-b-0">PAYMENT CLEAR</button>
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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">
		$().ready(function() {
			$("#bank_form").validate({
				rules: {
					BANK_ID:{
						required:true
					},
					ACCOUNT_NO:{
						required:true
					}
				},
				messages: {
					BANK_ID:{
						required: "Select Bank"
					},
					ACCOUNT_NO:{
						required: "Select Bank Account"
					}
				}
			});

		});
</script>
<script>
 $(document).ready(function() {
        $('#BANK_ID').on('change', function() {
            var bId = $(this).val();

            if(bId) {
                $.ajax({
                    url: '/portfolio-accounts/findWithbId/'+bId,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {
                      if(data){
                        $.each(data, function(key, value){
                        $('select[name="ACCOUNT_NO"]').append('<option value="'+ value.ACCOUNT_NO +'">' + value.ACCOUNT_NO+ '</option>');
                    });
                  }else{
                    
                  }
                  }
                });
            }else{
              
            }
        });
    });

        $(document).ready(function() {
        $('#ACCOUNT_NO').on('change', function() {
            var aid = $(this).val();

            if(aid) {
                $.ajax({
                    url: '/portfolio-accounts/findWithbaId/'+aid,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {
                      if(data){
                      	$('#AC_NAME').val('');
                      	$('#b_amount').val('');
                        $.each(data, function(key, value){

						$('#AC_NAME').val(value.ACCOUNT_NAME);
                      	$('#b_amount').val(value.BANK_AMOUNT);
                    });
                  }else{
                    $('#AC_NAME').val('');
                    $('#b_amount').val('');
                  }
                  }
                });
            }else{
              $('#AC_NAME').val('');
              $('#b_amount').val('');
            }
        });
    });
</script>

<script>
    $(document).ready(function () {

        $("#bank_form").submit(function (e) {
            $("#submitbtn").attr("disabled", true);
            return location.reload(true);
        });
    });
</script>

@endpush
