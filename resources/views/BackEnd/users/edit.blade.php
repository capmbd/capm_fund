@extends('BackEnd.master_one')

@section('title')
    Edit Employee
@endsection

@section('class9')
    active
@endsection

<style type="text/css">
    label.error {
    color: #CC0000;
    font-weight: 300;
    }
    label span{
        color: red;
    }
</style>

@section('main-content')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href=" # ">
                                <i class="feather icon-users"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href=" # ">Edit Employee</a></li>
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
                                    <h5>Edit Employee</h5>
                                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                                </div>
                                <div class="card-block">
                                    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'id' => 'emp_form')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('email', 'Email') }}
                                        {{ Form::email('email', null, array('class' => 'form-control')) }}
                                    </div>
                                    <h5><b>Give Role</b></h5>
                                    <div class='form-group'>
                                        @foreach ($roles as $role)
                                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('password', 'Password') }}<br>
                                        {{ Form::password('password', array('class' => 'form-control', 'id' => 'cpassword')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('password', 'Confirm Password') }}<br>
                                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                                    </div>
                                    {{ Form::submit('Submit', array('class' => 'btn btn-primary m-b-0')) }}
                                    {{ Form::close() }}
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
                password:{
                    required:true,
                    myPassword: true,
                    rangelength:[6,12]
                },
                password_confirmation:{
                    equalTo : "#cpassword"
                }
            },
            messages: {
                password:{
                    required: "Enter Password",
                    myPassword: "Password Must Contain Uppercas, Lowercase and Number",
                    rangelength: "Password Must be 6 to 12 Characters"
                },
                password_confirmation:{
                    equalTo: "Password Does Not Match"
                }
            }
        });
        
        });
    </script>
@endpush