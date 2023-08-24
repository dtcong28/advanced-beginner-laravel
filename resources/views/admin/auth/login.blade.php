@extends('admin.layouts.auth')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            {{ Form::open(['url' => getRoute('post_login'), 'method' => 'post']) }}
                <div class="input-group mb-3">
                    {!! Form::text('email', '', ['id' => 'email', 'class' => 'form-control ', 'placeholder' => 'Email']) !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @if($errors->has('email'))<p class="error">{{ $errors->first('email') }}</p>@endif
                <div class="input-group mb-3">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'form-control ', 'placeholder' => 'Password']) !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @if($errors->has('password'))<p class="error">{{ $errors->first('password') }}</p>@endif
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@stop
