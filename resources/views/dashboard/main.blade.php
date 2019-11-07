@extends('dashboard.app')
@section('content2')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Welcome back  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card  bg-light no-card-border">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <img src="{{asset('final/assets/images/users/3.jpg')}}" alt="user" width="60" class="rounded-circle" />
                            </div>
                            <div>
                                <h3 class="m-b-0">أهلا بك , {{Auth::user()->name}} !</h3>
                                <span>{{date('Y-m-d H:i:s')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales Summery -->
        <!-- ============================================================== -->
        @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$users->count()}}</h2>
                                    <h6>مجموع المستخدمين</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$chalets->count()}}</h2>
                                    <h6>مجموع الشاليهات</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-home"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$offers->count()}}</h2>
                                    <h6>مجموع العروض</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-home"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$reservations->count()}}</h2>
                                    <h6>مجموع الحجوزات</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$messages->count()}}</h2>
                                    <h6>مجموع الرسائل</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-comments-smiley"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role_id==2)
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$chalet->count()}}</h2>
                                    <h6>مجموع الشاليهات</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-home"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$offers->count()}}</h2>
                                    <h6>مجموع العروض</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-home"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$reservations->count()}}</h2>
                                    <h6>مجموع الحجوزات</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endif
            @if(\Illuminate\Support\Facades\Auth::user()->role_id==3)
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>{{$reservation->count()}}</h2>
                                    <h6>مجموع الحجوزات</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6"><i class="ti-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endif
        <!-- ============================================================== -->
        <!-- place order / Exchange -->
        <!-- ============================================================== -->
        <div class="row">
        <div class="col-md-6">
            <div class="card text-white">
                <img class="card-img" src="{{asset('final/assets/images/background/weatherbg.jpg')}}" alt="Card image">
                <div class="card-img-overlay text-white">
                    <div class="d-flex no-block align-items-center">
                        <h5 class="font-medium">{{($weather->timezone)}}</h5>
                        <div class="ml-auto">
                            <span><i class="ti-location-pin"></i></span>
                        </div>
                    </div>
                    <span><i class="display-6 wi wi-day-cloudy"></i></span>
                    <div class="d-inline-block m-l-15">
                        <span class="font-24">C</span>
                        <span class="display-6"> {{number_format((($weather->currently->temperature)-32)/1.8,0)}}° </span>

                    </div>
                    <div class="m-t-10 m-b-10">
                        <h5 class="m-b-0">{{$today}}</h5>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection