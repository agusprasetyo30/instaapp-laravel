@extends('layouts.auth.app')

@section('title', 'Login Area | InstaApp')

@section('content')
<div class="login-page">

<div class="row text-center justify-content-center">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="#">InstaApp</a>
                </div>
                <p class="login-box-msg">
                    @if (session()->has('login.failed'))
                        <div class="alert alert-danger alert-dismissible text-left">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ session('login.failed') }}
                        </div>
                    @endif
                </p>
                
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Masukan username" autofocus="on" autocomplete="off" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                
                <div class="login mb-0">
                    Belum punya akun ? Klik <a href="{{ route('register') }}" title="Klik untuk registrasi">Disini</a>
                </div>
            </div>
    <!-- /.login-card-body -->
        </div>
    </div>
</div>
</div>

@endsection