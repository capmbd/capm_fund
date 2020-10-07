@extends('BackEnd.master_one')

@section('title')
	Block Units
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
							<a href="#">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Block Units</a></li>
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
									<h5>Block Units</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="block_form" action=" {{ url('subscription-redumption/block/save') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->REGISTRATION_NO}}" name="rid" required>
										<input type="hidden" value="{{$data->FUND_ID}}" name="fid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Registration No.</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->REGISTRATION_NO}}" class="form-control autonumber" disabled>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Total Holding</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TOTAL_UNITS}}" class="form-control autonumber" disabled>
												<input id="h_unit" type="hidden" value="{{$data->TOTAL_UNITS}}">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Block Units</label>
											</div>
											<div class="col-sm-8">
												<input id="b_unit" type="text" name="BLOCK_UNITS" class="form-control autonumber">
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
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
	<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>

	<script type="text/javascript">
		$().ready(function() {

        $("#block_form").validate({
            rules: {
            	BLOCK_UNITS:{
                    required:true,
                    number:true,
                    min:0
                }
                
            },
            messages: {
            	BLOCK_UNITS:{
                    required: "Enter Units",
                    number: "Utits Must be Number",
                    min: "Units Must be 0 or Positive Value"
                }
            }
        });

        
        });


        $(document).ready(function(){
  			$("#b_unit").blur(function(){

    			var block = $(this).val();
    			var holding = $('#h_unit').val();

    			if((holding - block) >= 0 ){
    					              
    			}
    			else{
    				bootbox.alert({
						message: "<span style='color: red;'>Block Units Must be Less Than Holding Units !!!</span>",
						callback: function () { location.reload(true); }
					});
    			}
  			});
		});  
	</script>
@endpush