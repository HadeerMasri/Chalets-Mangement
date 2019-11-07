@extends('dashboard.app')
@section('title','تحديث البيانات ')
@section('cssHeader')

@endsection
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 100px;margin-top: 20px">
                <div class="col-md-10 col-sm-10">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">معلوماتي الشخصية</h2></div>
                        <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-body" >
                                <div class="row pt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label-profile">الاسم</label>
                                            <input type="text" id="name" class="form-control" name="name"  value="{{$user->name}}">
                                            </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="label-profile">الايميل</label>
                                            <input type="email" id="email" class="form-control form-control-danger" name="email"  value="{{$user->email}}">
                                    </div>
                                    <!--/span-->
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="label-profile">العنوان</label>
                                            <input type="text" id="address" class="form-control form-control-danger" name="address"  value="{{$user->address}}">
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="label-profile">رقم الجوال</label>
                                            <input type="tel" id="phone" class="form-control form-control-danger" name="phone"  value="{{$user->phone}}">
                                        </div>
                                    </div>
                            </div>

                                <div class="card-body" style="margin-right: 200px">
                                    <button type="submit" class="btn btn-success" style="font-family: Almarai"> <i class="flaticon-edit"></i> تعديل</button>
                                    <a  href="{{route('password.edit',$user->id)}}" class="btn btn-info" style="font-family: Almarai"> <i ></i> تغيير كلمة المرور</a>
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