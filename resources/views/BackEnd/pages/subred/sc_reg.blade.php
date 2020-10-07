@extends('BackEnd.master_one')

@section('title')
	Sales Center Registration
@endsection

@section('class3')
	active
@endsection

@push('css')
	<style type="text/css">
		label.error {
			color: #CC0000;
			font-weight: 300;
			}
		label span{
			color: red;
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
							<a href=" {{ url('/subscription-redumption/s-c-registration') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/s-c-registration') }} ">Sales Center Registration</a></li>
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
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Sales Center Registration</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="ca_form" action=" {{ url('/subscription-redumption/s-c-registration/save') }} " method="post">
										@csrf
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Country</label>
													</div>

													<div class="col-sm-8">
														<select name="APPLICANT_COUNTRY_ID" id="APPLICANT_COUNTRY_ID" class="col-sm-12 form-select">
															<option value="">---Select Country---</option>
															@foreach($countries as $country)
															<option value="{{$country->APPLICANT_COUNTRY_ID}}">{{$country->APPLICANT_COUNTRY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Currency</label>
													</div>

													<div class="col-sm-8">
														<select name="CURRENCY_TYPE_ID" id="CURRENCY_TYPE_ID" class="col-sm-12 form-select">
															<option value="">No Currency Found</option>
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent</label>
													</div>

													<div class="col-sm-8">
														<select name="SALESAGENT_ID" id="SALESAGENT_ID" class="col-sm-12 form-select">
															<option value="">---Select Sales Agent---</option>
															@foreach($salesagents as $sas)
																<option value="{{$sas->SALESAGENT_ID}}">{{$sas->SALESAGENT}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">District</label>
													</div>
													<div class="col-sm-8">
														<select name="DISTRICT_ID" id="DISTRICT_ID" class="col-sm-12 form-select">
															<option value="">---Select District---</option>
															@foreach($districts as $district)
															<option value="{{$district->DISTRICT_ID}}">{{$district->DISTRICT}}</option>
															@endforeach
														</select>
													</div>
												</div>
													
											</div>
											
											<div class="col-md-6 col-sm-6">

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Area</label>
													</div>
													<div class="col-sm-8">
														<select name="AGENT_AREA_ID" id="AGENT_AREA_ID" class="col-sm-12 form-select">
															<option value="">No Area Found</option>
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="SC_NAME" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Phone</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="SC_PHONE" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Email</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="SC_EMAIL" class="form-control autonumber">
													</div>
												</div>
													
													<div class="col-sm-8">
														<button type="submit" class="btn btn-primary m-b-0">Submit</button>
													</div>
												</div>
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
			$("#ca_form").validate({
				rules: {
					APPLICANT_COUNTRY_ID:{
						required:true
					},
					CURRENCY_TYPE_ID:{
						required:true
					},
					SALESAGENT_ID:{
						required:true
					},
					DISTRICT_ID:{
						required:true
					},
					AGENT_AREA_ID:{
						required:true
					},
					SC_NAME:{
						required:true
					},
					SC_PHONE:{
						required:true
					},
					SC_EMAIL:{
						required:true,
						email:true
					}
				},
				messages: {
					APPLICANT_COUNTRY_ID:{
						required: "Enter Country"
					},
					CURRENCY_TYPE_ID:{
						required: "Enter Currency Type"
					},
					SALESAGENT_ID:{
						required: "Enter Sales Agent"
					},
					DISTRICT_ID:{
						required: "Enter District"
					},
					AGENT_AREA_ID:{
						required: "Enter Area"
					},
					SC_NAME:{
						required: "Enter Sales Center Name"
					},
					SC_PHONE:{
						required: "Enter Sales Center Phone"
					},
					SC_EMAIL:{
						required: "Enter Sales Center Email",
						email: "Enter Valid Email Address"
					}
				}
			});

		});
</script>
<script>
         $(document).ready(function() {
        $('#APPLICANT_COUNTRY_ID').on('change', function() {
            var acId = $(this).val();

            if(acId) {
                $.ajax({
                    url: '/subscription-redumption/findWithacId/'+acId,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {
                      if(data){
                        $('#CURRENCY_TYPE_ID').empty();
                        $('#CURRENCY_TYPE_ID').focus;
                        $.each(data, function(key, value){
                        $('select[name="CURRENCY_TYPE_ID"]').append('<option value="'+ value.CURRENCY_TYPE_ID +'">' + value.CURRENCY+ '</option>');
                    });
                  }else{
                    $('#CURRENCY_TYPE_ID').empty();
                  }
                  }
                });
            }else{
              $('#CURRENCY_TYPE_ID').empty();
            }
        });
    });
</script>

<script>
         $(document).ready(function() {
        $('#DISTRICT_ID').on('change', function() {
            var dId = $(this).val();

            if(dId) {
                $.ajax({
                    url: '/subscription-redumption/findWithdId/'+dId,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {
                      if(data){
                        $('#AGENT_AREA_ID').empty();
                        $('#AGENT_AREA_ID').focus;
                        $('#AGENT_AREA_ID').append('<option value="">---Select Agent Area---</option>');
                        $.each(data, function(key, value){
                        $('select[name="AGENT_AREA_ID"]').append('<option value="'+ value.AGENT_AREA_ID +'">' + value.AGENT_AREA + '(' + value.AREA_CODE_ALPHA + ')' + '</option>');
                    });
                  }else{
                    $('#AGENT_AREA_ID').empty();
                  }
                  }
                });
            }else{
              $('#AGENT_AREA_ID').empty();
            }
        });
    });
</script>
@endpush