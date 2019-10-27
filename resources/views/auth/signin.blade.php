@extends('layouts.auth')

@section('title', 'Mitrais Test - Sign In')
@section('body-class', 'login-page')

@section('custom-css')
    <link href="./assets/css/style.css" rel="stylesheet">
@endsection

@section('custom-js')
    <script src="./assets/js/admin.js"></script>
    <script src="./assets/js/login.js"></script>
@endsection

@section('content')
    <div class="login-box">
        <div class="card">
            <div class="body">
                <section class="hidden" id="alert-box"></section>
                <form id="sign_in" method="POST">
                    <div class="msg">Login</div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="email" class="form-control" name="username" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg bg-purple waves-effect" type="submit">LOGIN</button>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{ url('/signup') }}">Register Now!</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
