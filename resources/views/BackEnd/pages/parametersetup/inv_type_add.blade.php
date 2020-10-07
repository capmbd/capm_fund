@extends('BackEnd.master_one')

@section('title')
	Investment Type
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
							<a href=" {{ url('/parameters-setup/investment-type') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/investment-type') }} ">Investment Type</a></li>
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
									<h5>Investment Type</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="invsmnt_form" action=" {{ url('parameters-setup/investment-type/save') }} " method="post">

										@csrf
										
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Investment Type</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="INVESTMENT_TYPE" class="form-control autonumber">
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
									<h5><a href="#view_invsmnt" data-toggle="collapse" >View Investment Type</a></h5>

								</div>
								<div id="view_invsmnt" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Investment Type</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($invst_typs as $invst)
      											<tr>
        											<td>{{$invst->INVESTMENT_TYPE}}</td>
        											<?php
        												$it = encrypt($invst->INVESTMENT_TYPE_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/investment-type/edit/'.$it) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $invst_typs->links() }}
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

        $("#invsmnt_form").validate({
            rules: {
                INVESTMENT_TYPE:{
                    required:true
                }
            },
            messages: {
              	INVESTMENT_TYPE:{
                	required:"Enter Investment Type"
              	}
            }
        });

        
        });
	</script>
@endpush