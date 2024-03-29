@extends('layouts.admin_layout.admin_layout')
@section('styles')
    @parent
    <!-- DataTables -->

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mt-5 ">
                <div class="register-box">
                    <div class="register-logo">
                        <b class="text-blue">سوشل</b>&nbsp;كيت
                    </div>
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="card">
                            <div class="card-body register-card-body">

                                <form action="../../index.html" method="post">
                                    <img class="register-logo" src="{{asset('images/socialKit.png')}}" alt="logo">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Full name">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Retype password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                                <label for="agreeTerms">
                                                    اوافق على التسجيل الموقع وفقا<a href="#">للشروط</a>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">تسجيل</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>


                                </form>
                                <div class="social-auth-links text-center">
                                    <p>- OR -</p>
{{--                                    order facebook registration info--}}
                                    <a href="{{url('/redirect/facebook')}}" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i>
                                        تسجيل باستخدام Facebook
                                    </a>
                                    <a href="#" class="btn btn-block btn-info">
                                        <i class="fab fa-twitter mr-2"></i>
                                        تسجيل باستخدام twitter
                                    </a>
                                </div>

                                <a class="text-blue float-right" href="{{url('/login')}}">لدي عضوية في الموقع</a>
                            </div>
                            <!-- /.form-box -->

                        </div><!-- /.card -->
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
