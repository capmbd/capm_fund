@extends('BackEnd.master_one')

@section('title')
	Portfolio Type Update
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
								<i class="fas fa-edit"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Portfolio Type Update</a></li>
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
									<h5>Portfolio Type</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="portfolio_type" action=" {{ url('parameters-setup/portfolio-type/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->PORTFOLIO_TYPE_ID}}" name="ptypeid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio Type</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->PORTFOLIO_TYPE}}" name="PORTFOLIO_TYPE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Fund Type</label>
											</div>
											<div class="col-sm-8">
												<select name="OPEN_CLOSE_FLAG" class="col-sm-12 form-select">
													<option value="{{$data->OPEN_CLOSE_FLAG}}">
														@if($data->OPEN_CLOSE_FLAG == 1)
        													Open End
        												@elseif($data->OPEN_CLOSE_FLAG == 0)
        													Close End
        												@endif
													</option>
													<option value="">---------------</option>
													<option value="1">Open End</option>
													<option value="0">Close End</option>
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Income Restriction</label>
											</div>
											<div class="col-sm-8">
												<select name="INCOMEREST_FLAG" class="col-sm-12 form-select">
													<option value="{{$data->INCOMEREST_FLAG}}">
														@if($data->INCOMEREST_FLAG == 1)
        													Interest
        												@elseif($data->INCOMEREST_FLAG == 2)
        													Dividend
        												@elseif($data->INCOMEREST_FLAG == 0)
        													None
        												@endif
													</option>
													<option value="">---------------</option>
													<option value="1">Interest</option>
													<option value="2">Dividend </option>
													<option value="0">None</option>
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

        $("#portfolio_type").validate({
            rules: {
                PORTFOLIO_TYPE:{
                    required:true
                },
                OPEN_CLOSE_FLAG:{
                    required:true
                },
                INCOMEREST_FLAG:{
                    required:true
                }
                
            },
            messages: {
              PORTFOLIO_TYPE:{
                required:"Enter Portfolio Type"
              },
              OPEN_CLOSE_FLAG:{
                required:"Enter Fund Type"
              },
              INCOMEREST_FLAG:{
                    required:"Enter Income Restriction"
                }
            }
        });

        
        });
	</script>
@endpush