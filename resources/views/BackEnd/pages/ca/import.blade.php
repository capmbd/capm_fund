@extends('BackEnd.master_one')

@section('title')
	Import File For Calculation
@endsection

@section('class7')
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
							<a href=" {{ url('/corporate-action/calculation') }} ">
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/corporate-action/calculation') }} ">Import File For Calculation</a></li>
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
									<h5>Import File For Calculation</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<div class="imp_form col-md-6 col-sm-6">
										<p>Unit Fund</p>
										<form id="uf" action="{{ url('/corporate-action/dividend/import_uf') }} " method="post" enctype="multipart/form-data">
											@csrf

											<div class="row form-group">
												<input type="file" name="unit_fund" id="unit_fund">	
											</div>
											<div class="row form-group">
												<button type="submit" class="btn btn-primary m-b-0">Import</button>
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
</div>
@endsection
@push('js')
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
	<script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>

	<script type="text/javascript">
		$().ready(function() {

        $("#uf").validate({
            rules: {
                unit_fund:{
                    required:true
                }  
            },
            messages: {
              	unit_fund:{
                	required:"Upload Text File"
        		}
            }
        });

        
        });
	</script>

	<script type="text/javascript">
		var image = document.getElementById("unit_fund");
            image.onchange = function() {
            	var type = image.value;
            	var check = /(\.txt)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
						message: "<span style='color: red;'>Upload Only Text File !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }
            };
	</script>
@endpush