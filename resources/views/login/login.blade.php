@extends('template.login.login')

@section('container')
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #fff;
        }

        p {
            color: #b3b3b3;
            font-weight: 300;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: "Roboto", sans-serif;
        }

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        a:hover {
            text-decoration: none !important;
        }

        .content {
            padding: 7rem 0;
        }

        h2 {
            font-size: 20px;
        }

        .half,
        .half .container>.row {
            height: 100vh;
        }

        @media (max-width: 991.98px) {
            .half .bg {
                height: 500px;
            }
        }

        .half .contents,
        .half .bg {
            width: 50%;
        }

        @media (max-width: 1199.98px) {

            .half .contents,
            .half .bg {
                width: 100%;
            }
        }

        .half .contents .form-group,
        .half .bg .form-group {
            overflow: hidden;
            margin-bottom: 0;
            border: 1px solid #efefef;
            padding: 15px 15px;
            border-bottom: none;
            position: relative;
        }

        .half .contents .form-group label,
        .half .bg .form-group label {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .half .contents .form-group input:focus+label,
        .half .bg .form-group input:focus+label {
            margin-top: -20px;
        }

        .half .contents .form-group.first,
        .half .bg .form-group.first {
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .half .contents .form-group.last,
        .half .bg .form-group.last {
            border-bottom: 1px solid #efefef;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .half .contents .form-group label,
        .half .bg .form-group label {
            font-size: 12px;
            display: block;
            margin-bottom: 0;
            color: #b3b3b3;
        }

        .half .contents .form-group.field--not-empty label,
        .half .bg .form-group.field--not-empty label {
            margin-top: -20px;
        }

        .half .contents .form-control,
        .half .bg .form-control {
            border: none;
            padding: 0;
            font-size: 20px;
            border-radius: 0;
        }

        .half .contents .form-control:active,
        .half .contents .form-control:focus,
        .half .bg .form-control:active,
        .half .bg .form-control:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .half .bg {
            background-size: cover;
            background-position: center;
        }

        .half a {
            color: #888;
            text-decoration: underline;
        }

        .half .btn {
            height: 54px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .half .forgot-pass {
            position: relative;
            top: 2px;
            font-size: 14px;
        }

        .social-login a {
            display: block;
            text-decoration: none;
            display: block;
            position: relative;
            text-align: center;
            color: #fff;
            margin-bottom: 10px;
        }

        .social-login a:hover {
            color: #fff;
        }

        .social-login a.facebook {
            background: #3b5998;
        }

        .social-login a.facebook:hover {
            background: #344e86;
        }

        .social-login a.twitter {
            background: #1da1f2;
        }

        .social-login a.twitter:hover {
            background: #0d95e8;
        }

        .social-login a.google {
            background: #ea4335;
        }

        .social-login a.google:hover {
            background: #e82e1e;
        }

        .control {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 14px;
        }

        .control .caption {
            position: relative;
            top: .2rem;
            color: #888;
        }

        .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background: #e6e6e6;
            border-radius: 4px;
        }

        .control--radio .control__indicator {
            border-radius: 50%;
        }

        .control:hover input~.control__indicator,
        .control input:focus~.control__indicator {
            background: #ccc;
        }

        .control input:checked~.control__indicator {
            background: #007bff;
        }

        .control:hover input:not([disabled]):checked~.control__indicator,
        .control input:checked:focus~.control__indicator {
            background: #1a88ff;
        }

        .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.9;
            pointer-events: none;
        }

        .control__indicator:after {
            font-family: 'icomoon';
            content: '\e5ca';
            position: absolute;
            display: none;
            font-size: 16px;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .control input:checked~.control__indicator:after {
            display: block;
            color: #fff;
        }

        .control--checkbox .control__indicator:after {
            top: 50%;
            left: 50%;
            margin-top: -1px;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .control--checkbox input:disabled~.control__indicator:after {
            border-color: #7b7b7b;
        }

        .control--checkbox input:disabled:checked~.control__indicator {
            background-color: #7e0cf5;
            opacity: .2;
        }
    </style>
    <div class="row justify-content-center">

        <div class="">

            {{--  --}}
            {{--  --}}
            {{-- Alert --}}


            {{--  --}}
            {{--  --}}
            {{-- Login --}}

            <div class="d-lg-flex half">
                <div class="bg order-1 order-md-2" style="background-image: url('asset/img/background.jpg');"></div>
                <div class="contents order-2 order-md-1">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-12 col-lg-7">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session()->has('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                @if (session()->has('registSuccess'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('registSuccess') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="mb-4">
                                    <a class="navbar-brand text-white text-bold mb-2" href="/"><img
                                            src="/asset/img/logo.png" alt="resume-maker-logo" style="width: 350px;"></a>
                                    <h3>Login</h3>
                                    <p class="mb-4">Silahkan masukan Emaill dan Password untuk memulai...
                                    </p>
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <form action="/auth" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        {{-- <label for="username">Username</label> --}}
                                        <input type="text" class="form-control" id="email" placeholder="email"
                                            name="email" required>


                                    </div>
                                    <div class="form-group last mb-3">
                                        {{-- <label for="password">Password</label> --}}
                                        <input type="password" class="form-control" id="password" placeholder="password"
                                            name="password" required>
                                    </div>

                                    {{-- <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-0"><span class="caption">Remember
                                                me</span>
                                            <input type="checkbox" checked="checked" />
                                            <div class="control__indicator"></div>
                                        </label>
                                        <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                                Password</a></span>
                                    </div> --}}



                                    <button type="submit" class="btn btn-primary w-100"><span data-feather="log-in"></span>
                                        Log in </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
