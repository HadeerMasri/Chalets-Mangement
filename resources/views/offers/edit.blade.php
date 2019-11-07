@extends('dashboard.app')
@section('title','تحديث عرض شاليه ')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">تحديث عرض الشاليه </h2></div>
                        <div class="card-body">
                 <form action="{{ route('offer.update',$offer->id) }}" method="post" enctype="multipart/form-data">
                   {{ method_field('put') }}
                    @csrf
                     <input type="hidden" name="chalet_id" value="{{$offer->chalet_id}}">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">سعر الشاليه الجديد</label>
                                <input type="text" class="form-control text-left" name="new_price"  value="{{$offer->new_price}}" >
                            </div>
                        </div>
                    </div>
                <div class="card">
                    <div class="card-body">

                            <div class="form-group">
                                <label class="control-label"> بداية تاريخ العرض</label>
                                <input type="date" class="form-control" name="from_time" value="{{$offer->from_time}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">نهاية تاريخ العرض</label>
                                <input type="date" class="form-control" name="to_time" value="{{$offer->to_time}}">
                            </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-info" style="margin-right: 450px" >اضافة عرض الشاليه</button>
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