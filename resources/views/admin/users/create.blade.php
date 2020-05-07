@extends('layouts.admin')
@section('content')
    <h1>Create Users</h1>

    
    
    {!! Form::open(['method'=>'POST','action'=> 'AdminUsersController@store']) !!}
    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}

        {!! Form::text('name', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        
        {!! Form::label('email', 'Email') !!}
        
        {!! Form::text('emails', null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('role_id', 'Role') !!}
        
        {!! Form::select('role_id', [''=>'Choose optoins'] + $roles, null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">

        
        {!! Form::label('password', 'Enter the password') !!}
        
        {!! Form::password('password', ['class'=>'form-control']) !!}
        
        

    </div>

    <div class="form-group">
        
        {!! Form::label('is_active', 'User status') !!}
        
        
        
        {!! Form::select('is_active',
            [
                '0' => 'Inactive',
                '1' => 'Active'
            ], 
            '1', ['class'=>'form-control']) !!}
        
    </div>

    <div>
        
        {!! Form::submit('Create user', ['class'=>'btn btn-primary']) !!}
        
    </div>
    
    {!! Form::close() !!}

@stop