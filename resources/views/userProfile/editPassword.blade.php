@extends('dashboard.app')
@section('cssHeader')

@endsection
@section('title','تغير كلمة المرور ')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 200px;margin-top: 20px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">تغيير كلمة المرور</h2></div>
                        <div class="card-body">
                    <form action="{{route('password.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-body" >
                                <div class="row pt-2">
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <label class="label-profile">كلمة المرور الحالية</label>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="password" id="oldPassword" class="form-control form-control-danger" name="oldPassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <label class="label-profile">كلمة المرور الجديدة</label>
                                            <input type="password" id="newPassword" class="form-control form-control-danger" name="newPassword">
                                        </div>
                                    </div>
                            </div>

                                <div class="card-body" style="margin-right: 130px">
                                    <button type="submit" class="btn btn-success" style="font-family: Almarai"> <i class="flaticon-edit"></i> تغيير</button>
                                    <button type="reset" class="btn btn-danger" style="font-family: Almarai">الغاء</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection