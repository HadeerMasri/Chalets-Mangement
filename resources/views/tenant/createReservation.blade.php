@extends('dashboard.app')
@section('title','حجز شاليه ')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 250px;margin-top: 30px">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">حجز شاليه</h2></div>
                        <div class="card-body">
                    <form action="{{ route('reservation.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="chalet_id" value="{{$chalet->id}}">
                        <input type="hidden" name="user_id" value="{{$chalet->user->id}}">
                        <input type="hidden" name="role_id" value="{{$chalet->user->role_id}}">
                        <div class="row ">
                            <div class="col">
                                <div>
                                    <div class="form-group">
                                        <label class="control-label" class="control-label">وقت وتاريخ الدخول</label>
                                        <input type="datetime-local" class="form-control" name="from_time" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" class="control-label">وقت وتاريخ الخروج</label>
                                        <input type="datetime-local" class="form-control" name="to_time" required>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info" >احجز</button>
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