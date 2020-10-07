@extends('BackEnd.master_one')

@section('title')
	Investor Type Update
@endsection

@section('class8')
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
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Investor Type Update</a></li>
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
									<h5>Investor Type</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="invt_form" action=" {{ url('parameters-setup/investor-type/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->INVESTOR_TYPE_ID}}" name="invid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Investor Type</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->INVESTOR_TYPE}}" name="INVESTOR_TYPE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Type</label>
											</div>
											<div class="col-sm-8">
												<select name="FLAG" class="col-sm-12 form-select">
													<option value="{{$data->FLAG}}">
														@if($data->FLAG == 1)
        													Individual
        												@elseif($data->FLAG == 2)
        													Institutional
        												@endif
													</option>
													<option value="">---Select Type---</option>
													<option value="1">Individual</option>
													<option value="2">Institutional</option>
												</select>
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

	<script type="text/javascript">
		$().ready(function() {

        $("#invt_form").validate({
            rules: {
            	INVESTOR_TYPE:{
                    required:true
                },
                FLAG:{
                	required:true
                }
            },
            messages: {
            	INVESTOR_TYPE:{
                    required: "Enter Investor Type"
                },
                FLAG:{
                	required: "Enter Type"
                }
            }
        });
        
        });
	</script>
@endpush