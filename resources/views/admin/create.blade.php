@extends('dashboard.app')

@section('cssHeader')

@endsection
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="font-medium m-b-20" style="color: #FF6138;text-align: center; font-family: 'Almarai', sans-serif !important;">تسجيل مستخدم جديد</h3>
                </div>
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
@endsection