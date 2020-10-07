@extends('BackEnd.master_one')

@section('title')
    Create Permission
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
                            <a href=" {{ url('/permissions/create') }} ">
                                <i class="feather icon-users"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href=" {{ url('/permissions/create') }} ">Create Permission</a></li>
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
                                    <h5>Create Permission</h5>
                                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                                </div>
                                <div class="card-block">
                                    {{ Form::open(array('url' => 'permissions')) }}
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                                    </div><br>
                                    @if(!$roles->isEmpty()) //If no roles exist yet
                                    <h4>Assign Permission to Roles</h4>
                                    @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                                    @endforeach
                                    @endif
                                    <br>
                                    {{ Form::submit('Submit', array('class' => 'btn btn-info m-b-0')) }}
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