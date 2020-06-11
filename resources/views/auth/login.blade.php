@extends('layouts.admin_layout.admin_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-4 mt-5 ">

            <div class="login-logo">
                <b class="text-blue">سوشل </b><b> كيت </b>

            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">

                    <img class="register-logo" src="{{asset('images/socialKit.png')}}" alt="logo">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
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

                        <div class="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                            <a href="{{url('/redirect/facebook')}}" class="btn btn-block btn-primary">
                                <i class="fab fa-facebook mr-2"></i>facebook
                                دخول
                            </a>
                            <a href="#" class="btn btn-block  btn-info">
                                <i class="fab fa-twitter mr-2"></i>twitter
                                دخول
                            </a>
                            </a>
                        </div>
                        <!-- /.social-auth-links -->

                        {{--                        todo forgot-password--}}
                        <p class="mb-1">
                            <a href="forgot-password.html">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{route("register")}}" class="text-center">Register a new membership</a>
                        </p>


                    </form>


                    <!-- /.social-auth-links -->

                    <p class="mb-1">
{{--                        <a href="forgot-password.html">I forgot my password</a>--}}
                    </p>

                </div>
                <!-- /.login-card-body -->
            </div>


            <!-- jQuery -->
            <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        </div>
    </div>
</div>
@endsection
