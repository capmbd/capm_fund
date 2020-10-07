@extends('BackEnd.master_one')

@section('title')
    Employee
@endsection

@section('class9')
    active
@endsection

@push('css')
    <style type="text/css">
        .usr_img{
            height: 75px;
            width: 70px;
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
                            <a href=" {{ url('/users') }} ">
                                <i class="feather icon-users"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href=" {{ url('/users') }} ">Employee / Administration </a></li>
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
                                    <h5>Employee / Administration</h5>
                                    <p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
                                </div>
                                <div class="card-block">
                                    <a href="{{ route('roles.index') }}" class="btn btn-dark">Roles</a>
                                    <a href="{{ route('permissions.index') }}" class="btn btn-dark">Permissions</a></h1>
                                    <hr style="border: 1px solid #3f4d67">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Date/Time Added</th>
                                                    <th>User Roles</th>
                                                    <th>Photo</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                                    <td>{{  $user->roles()->pluck('name')->implode(', ') }}</td>
                                                    <td><img class="usr_img" src="{{ asset('user_photo/'.$user->photo) }}" alt=""></td>
                                                    <td class="text-center">
                                                        <?php
                                                            $uid = encrypt($user->id);
                                                        ?>

                                                        <a href="{{ route('users.edit', $uid) }}" class="btn btn-info btn-sm">Edit</a>
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="{{ route('users.create') }}" class="btn btn-primary m-b-0">Add User</a>
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