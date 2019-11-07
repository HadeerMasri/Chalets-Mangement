@extends('dashboard.app')


@section('title','تحديث شاليه ')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">تحديث بيانات الشاليه</h2></div>
                        <div class="card-body">
                    <form action="{{ route('chalet.update',$chalet->id) }}" method="post" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label">اسم الشاليه</label>
                                    <input type="text" class="form-control text-left" name="name"  value="{{$chalet->name}}" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label">وصف الشاليه</label>
                                    <textarea name="description"   class="form-control" cols="20" rows="10" value="">{{$chalet->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label">السعر</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control text-left"  name="price" value="{{$chalet->price}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label">المدينة</label>
                                    <input type="text" class="form-control text-left" name="city"  value="{{$chalet->Address->city}}">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info" style="margin-right: 450px" >تحديث شاليه </button>
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
