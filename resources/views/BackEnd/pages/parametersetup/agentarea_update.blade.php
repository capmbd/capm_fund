@extends('BackEnd.master_one')

@section('title')
	Agent Area Update
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
						<li class="breadcrumb-item"><a href="#">Agent Area Update</a></li>
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
									<h5>Agent Area</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="area_form" action=" {{ url('parameters-setup/agentarea/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->AGENT_AREA_ID}}" name="areaid" required>


										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">District</label>
											</div>
											<div class="col-sm-8">
												<select name="DISTRICT_ID" class="col-sm-12 form-select">
													<option value="{{$data->id}}">{{$data->name}}</option>
													<option value="">---Select District---</option>
													@foreach($districts as $district)
														<option value="{{$district->DISTRICT_ID}}">{{$district->DISTRICT}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Area</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->AGENT_AREA}}" name="AGENT_AREA" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Area Code</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->AREA_CODE_ALPHA}}" name="AREA_CODE_ALPHA" class="form-control autonumber">
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

        $("#area_form").validate({
            rules: {
                DISTRICT_ID:{
                    required:true
                },
                AGENT_AREA:{
                    required:true
                },
                AREA_CODE_ALPHA:{
                    required:true
                }
                
            },
            messages: {
              	DISTRICT_ID:{
                	required:"Enter District"
              	},
              	AGENT_AREA:{
                	required:"Enter Agent Area"
              	},
              	AREA_CODE_ALPHA:{
                    required:"Enter Agent Area Code"
              	}
            }
        });

        
        });
	</script>
@endpush