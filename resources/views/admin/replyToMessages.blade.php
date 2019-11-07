@extends('dashboard.app')
@section('title','الرد على الرسالة')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">الرد على الرسالة</h2></div>
                        <div class="card-body">
                            <form action="{{ route('admin.send') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="email" value="{{$user->email}}">
                                <input type="hidden" name="name" value="{{$user->name}}">
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <div class="form-group">
                                        <textarea name="TextMessage" placeholder="أكتب الرسالة هنا"   class="form-control" cols="20" rows="7"
                                                  required></textarea>
                                            </div>
                                            <button type="submit" class="btnform" >ارسال</button>
                                            <div class="">

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


