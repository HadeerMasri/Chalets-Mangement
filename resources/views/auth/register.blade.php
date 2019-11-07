<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>تسجيل مستخدم جديد</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/css/style-rtl.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/big/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <h3 class="font-medium m-b-20" style="color: #FF6138;text-align: center; font-family: 'Almarai', sans-serif !important;">تسجيل مستخدم جديد</h3>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal m-t-20" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="text" @error('name') is-invalid @enderror name="name"  required autocomplete="name" autofocus placeholder="الاسم">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="email" @error('email') is-invalid @enderror name="email"  required autocomplete="email" autofocus placeholder="الايميل">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="text" @error('address') is-invalid @enderror name="address"  required autocomplete="address" autofocus placeholder="العنوان">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="text" @error('phone') is-invalid @enderror name="phone"  required autocomplete="phone" autofocus placeholder="رقم الجوال">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="password" @error('password') is-invalid @enderror name="password"  required  autofocus placeholder="ادخل كلمة المرور">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="password" @error('password_confirmation') is-invalid @enderror name="password_confirmation"  required  autofocus placeholder="تأكيد كلمة المرور">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <select name="role_id" class="form-control form-control-lg" required>
                                        <option value="-1">اختار نوع المستخدم</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">
                                                @if($role->name=='مالك')
                                                    @lang('auth.owner')
                                                @else
                                                    @lang('auth.tenant')
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group text-center ">
                                <div class="col-xs-12 p-b-20 ">
                                    <button class="btn btn-block btn-lg btn-info" style="background-color:#FF6138;border: #FF6138" type="submit" >@lang('auth.Register')</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    هل لديك حساب؟ <a href="/" class="text-info m-l-5" ><b style="color: #FF6138">تسجيل دخول</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}} "></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}} "></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
</script>
</body>

</html>




