@extends('BackEnd.master_one')

@section('title')
	Employee Setup
@endsection

@section('class9')
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
							<a href=" {{ url('/register') }} ">
								<i class="feather icon-users"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/register') }} ">Employee Setup</a></li>
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
									<h5>Employee Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="emp_form" action="#" method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="name" class="form-control autonumber" placeholder="Name of Employee">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Email</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="email" class="form-control autonumber" placeholder="Email Address">
											</div>
										</div>
										
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Password</label>
											</div>
											<div class="col-sm-8">
												<input type="password" id="cpassword" name="password" class="form-control autonumber" placeholder="Password">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Confirm Password</label>
											</div>
											<div class="col-sm-8">
												<input type="password" name="pass_confirm" class="form-control autonumber" placeholder="Confirm Password">
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
									<a style="color: #fff" href="{{ URL::to('/users') }}" class="btn btn-info m-b-0">Roles & Permissions Setup</a>
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
		$.validator.addMethod("myPassword",function(value,element){
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/.test(value);
            });
	</script>

	<script type="text/javascript">
		$().ready(function() {

        $("#emp_form").validate({
            rules: {
            	name:{
                    required:true
                },
                email:{
                	required:true,
                	email:true
                },
                password:{
                	required:true,
                	myPassword: true,
                	rangelength:[6,12]
                },
                pass_confirm:{
                	equalTo : "#cpassword"
                }
            },
            messages: {
            	name:{
                    required: "Enter Employee Name"
                },
                email:{
                	required: "Enter Email Address",
                	email: "Enter Valid Email Address"
                },
                password:{
                	required: "Enter Password",
                	myPassword: "Password Must Contain Uppercas, Lowercase and Number",
                	rangelength: "Password Must be 6 to 12 Characters"
                },
                pass_confirm:{
                	equalTo: "Password Does Not Match"
                }
            }
        });
        
        });
	</script>
@endpush