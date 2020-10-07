@extends('BackEnd.master_one')

@section('title')
    Edit Role
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
                            <a href=" # ">
                                <i class="feather icon-users"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href=" # ">Edit Role</a></li>
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
                        <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Role</h5>
                                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                                </div>
                                <div class="card-block">
                                    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                                    <div class="form-group">
                                        {{ Form::label('name', 'Role Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>
                                    <h5><b>Assign Permissions</b></h5>
                                    @foreach ($permissions as $permission)
                                    {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                                    {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                                    @endforeach
                                    <br>
                                    {{ Form::submit('Edit', array('class' => 'btn btn-info m-b-0')) }}
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
</div>
@endsection