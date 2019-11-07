@extends('dashboard.app')

@section('title','تغيير حالة الشاليه')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white"> تغيير حالة الشاليه</h2></div>
                        <div class="card-body">
                <form action="{{ route('reservation.update',$reservation->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">اسم الشاليه</label>
                                <input type="text" class="form-control text-left" name="name"  value="{{$reservation->Chalet->name}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">وصف الشاليه</label>
                                <textarea name="description"   class="form-control" cols="20" rows="10" value="" disabled>{{$reservation->Chalet->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">السعر</label>
                                <div class="input-group">
                                    <input  type="number" class="form-control text-left"  name="price" value="{{$reservation->Chalet->price}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">المدينة</label>
                                <input type="text" class="form-control text-left" name="city"  value="{{$reservation->Chalet->Address->city}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">الحالة</label>
                                <select name="status" id="status_select" class="form-control">
                                    <option value="-1">اختار الحالة</option>
                                    <option value="1" name="status"  id="status" class="form-control">تحت الطلب</option>
                                    <option value="2" name="status"  id="status" class="form-control">تم الحجز</option>
                                    <option value="3" name="status"  id="status" class="form-control">محجوز مسبقا</option>
                                    <option value="4" name="status"  id="status" class="form-control">مرفوض</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                    <div class="text-right">
                        <button type="submit" class="btn btn-info" style="margin-right: 450px">تحديث حالة الشاليه </button>
                    </div>
                    </div>
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
