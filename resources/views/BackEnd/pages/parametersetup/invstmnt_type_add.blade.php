@extends('BackEnd.master_one')

@section('title')
	Investment Setup
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
							<a href=" {{ url('/parameters-setup/investmenttype') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/investmenttype') }} ">Investment Setup</a></li>
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
									<h5>Investment Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="inv_typ_stup" action=" {{ url('parameters-setup/investmenttype/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio Name</label>
											</div>
											<div class="col-sm-8">
												<select name="PRO_REG_ID" class="col-sm-12 form-select">
													<option value="">---Select Portfolio Name---</option>
													@foreach($por_names as $por_name)
														<option value="{{$por_name->PRO_REG_ID}}">{{$por_name->PORTFOLIO_NAME}}</option>
													@endforeach
													
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Investment Type</label>
											</div>
											<div class="col-sm-8">
												<select name="INVESTMENT_TYPE_ID" class="col-sm-12 form-select">
													<option value="">---Select Investment Type---</option>
													@foreach($inv_types as $inv_type)
														<option value="{{$inv_type->INVESTMENT_TYPE_ID}}">{{$inv_type->INVESTMENT_TYPE}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Max Limit</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="MAXLIMIT" class="form-control autonumber" placeholder="% of Fund">
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
									<h5><a href="#view_inv_setup" data-toggle="collapse" >View Investment Setup</a></h5>

								</div>
								<div id="view_inv_setup" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Portfolio Name</th>
        											<th>Investment Type</th>
        											<th>Max Limit (%)</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($invtstups as $invtstup)
      											<tr>
        											<td>{{$invtstup->PORTFOLIO_NAME}}</td>
        											<td>{{$invtstup->INVESTMENT_TYPE}}</td>
        											<td>{{$invtstup->MAXLIMIT}}</td>
        											<?php
        												$inid = encrypt($invtstup->INVESTMENT_TYPE_SETUP_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/investmenttype/edit/'.$inid) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $invtstups->links() }}
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

        $("#inv_typ_stup").validate({
            rules: {
                PRO_REG_ID:{
                    required:true
                },
                INVESTMENT_TYPE_ID:{
                    required:true
                },
                MAXLIMIT:{
                	required:true,
                	number:true
                }
                
            },
            messages: {
              	PRO_REG_ID:{
                	required:"Enter Portfolio Name"
              	},
              	INVESTMENT_TYPE_ID:{
                    required:"Enter Investment Type"
              	},
                MAXLIMIT:{
                	required:"Enter Maximum Limit",
                	number:"Limit Must be Number"
                }
            }
        });

        
        });
	</script>
@endpush