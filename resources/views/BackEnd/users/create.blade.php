@extends('BackEnd.master_one')

@section('title')
    Add Employee
@endsection

@section('class9')
    active
@endsection

@section('main-content')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href=" {{ url('/users/create') }} ">
                                <i class="feather icon-users"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href=" {{ url('/users/create') }} ">Add Employee</a></li>
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
                                    <h5>Add Employee</h5>
                                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                                </div>
                                <div class="card-block">
                                    {{ Form::open(array('url' => 'users')) }}
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('email', 'Email') }}
                                        {{ Form::email('email', '', array('class' => 'form-control')) }}
                                    </div>
                                    <div class='form-group'>
                                        @foreach ($roles as $role)
                                        {{ Form::checkbox('roles[]',  $role->id ) }}
                                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('password', 'Password') }}<br>
                                        {{ Form::password('password', array('class' => 'form-control')) }}
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