@extends('layouts.auth')

@section('title', 'Mitrais Test - Sign Up')
@section('body-class', 'signup-page')

@section('custom-css')
    <link href="./assets/css/style.css" rel="stylesheet">
@endsection

@section('custom-js')
    <script src="./assets/plugins/jquery-validation/additional-methods.js"></script>
    <script src="./assets/js/admin.js"></script>
    <script src="./assets/js/register.js"></script>
@endsection

@section('content')
    <div class="signup-box">
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Registration</div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="tel" pattern="^((?:\+62|62)|0)[2-9]{1}[0-9]+$" class="form-control" name="phone" placeholder="Mobile number" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="first_name" placeholder="First name" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="terms">Date of Birth</label>
                        <div class="row clearfix">
                            <div class="col-sm-5" style="margin-bottom: 0;">
                                <div class="btn-group bootstrap-select form-control show-tick">
                                    <select class="form-control show-tick" name="month">
                                        <option value="">Month</option>
                                        @foreach ($months as $key => $month)
                                            <option value="{{ $key }}">{{ $month }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3" style="margin-bottom: 0;">
                                <div class="btn-group bootstrap-select form-control show-tick">
                                    <select class="form-control show-tick" name="date">
                                        <option value="">Date</option>
                                        @for ($i=1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-bottom: 0;">
                                <div class="btn-group bootstrap-select form-control show-tick">
                                    <select class="form-control show-tick" name="year">
                                        <option value="">Year</option>
                                        @for ($i=date('Y'); $i >= 1945; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="radio" name="gender" id="male" class="with-gap radio-col-purple">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" class="with-gap radio-col-purple">
                        <label for="female" class="m-l-20">Female</label>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            <input type="hidden" class="form-control" name="password" minlength="6" placeholder="Password" value="admin123">
                            <input type="hidden" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" value="admin123">
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-purple waves-effect" id="btn-register" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-box">
        <div class="align-center" id="footer-content">
            Footer
        </div>
        <div class="m-t-25 m-b--5 align-center hidden" id="login-link">
            <a href="{{ url('/signin') }}">Login</a>
        </div>
    </div>
@endsection
