@extends('dashboard.app')


@section('title','إضافة عرض جديد')
@section('content2')
    <div class="row">
        <div class="col-10">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-10 col-sm-10">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">تحديث عرض جديد </h2></div>
                        <div class="card-body">
                 <form action="{{route('offer.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                     <input type="hidden" name="chalet_id" value="{{$chalet->id}}">
                     <input type="hidden" name="user_id" value="{{$chalet->user->id}}">
                     <div class="form-body" >
                         <div class="row pt-3">
                             <div class="col-md-8">
                                 <div class="form-group">
                                         <label class="control-label">اسم الشاليه/ {{$chalet->name}}</label>
                                     </div>
                             </div>
                             <div class="col-md-8">
                                 <div class="form-group">
                                     <label class="control-label">سعر الشاليه القديم/ {{$chalet->price}} شيكل</label>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="control-label">السعر الجديد</label>
                                         <input type="number" class="form-control" placeholder="أدخل السعر بالشيكل" name="new_price" >
                                     </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <label class="control-label">تاريخ بداية العرض</label>
                                     <input type="date" class="form-control" name="from_time">
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <label class="control-label">تاريخ نهاية العرض</label>
                                     <input type="date" class="form-control" name="to_time">
                                 </div>
                                 <div class="text-right">
                                     <button type="submit" class="btn btn-info"  >اضافة عرض جديد</button>
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


