@extends('BackEnd.master_one')

@section('title')
	Agent Area
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
							<a href=" {{ url('/parameters-setup/agentarea') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/agentarea') }} ">Agent Area</a></li>
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
									<form id="area_form" action=" {{ url('parameters-setup/agentarea/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">District</label>
											</div>
											<div class="col-sm-8">
												<select name="DISTRICT_ID" class="col-sm-12 form-select">
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
												<input type="text" name="AGENT_AREA" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Area Code</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="AREA_CODE_ALPHA" class="form-control autonumber">
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

						<div class="col-lg-12 col-xl-6">
							<div class="card view_card">
								<div class="card-header">
									<h5><a href="#view_area" data-toggle="collapse" >View Agent Area</a></h5>

								</div>
								<div id="view_area" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Agent Area</th>
        											<th>District</th>
        											<th>Code</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($areas as $area)
      											<tr>
        											<td> {{ $area->AGENT_AREA }} </td>
        											<td> {{ $area->dist_name }} </td>
        											<td> {{ $area->AREA_CODE_ALPHA }} </td>
        											<?php
        												$aa = encrypt($area->AGENT_AREA_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/agentarea/edit/'.$aa) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $areas->links() }}
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