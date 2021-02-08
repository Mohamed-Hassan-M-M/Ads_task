@extends('layouts.auth')
@section('title') Login @endsection
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('website.home')}}" class="h1"><b>Finances<span class="text-primary">.</span></b></a>
            </div>
            <div class="card-body">
                @if(Session::has('error'))
                <div class="alert alert-default-danger text-center">
                    <span class="login-box-msg">{{Session::get('error')}}</span>
                </div>
                @endif
                @if(\Illuminate\Support\Facades\Request::is('admin*'))
                <form action="{{route('admin.doLogin')}}" method="POST">
                @elseif(\Illuminate\Support\Facades\Request::is('user*'))
                <form action="{{route('user.doLogin')}}" method="POST">
                @endif
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember_me">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                @if(\Illuminate\Support\Facades\Request::is('user*'))
                <!-- /.register-links -->
                <p class="mb-0">
                    <a href="{{route('user.register')}}" class="text-center">Register a new membership</a>
                </p>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
