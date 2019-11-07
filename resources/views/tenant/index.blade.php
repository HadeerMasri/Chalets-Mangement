@extends('dashboard.app')
@section('cssHeader')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">
    <link href="{{asset('assets/libs/raty-js/lib/jquery.raty.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content2')
    <div class="row">
        <div class="col-12">
            <h2 class="m-b-20" style="padding-right: 50px">الشاليهات التي قمت بطلبها</h2>
        </div>
        <div class="row">
            @if(count($reservations)>0 )
                @foreach($reservations as $reservation)

                    <div class="col-4 draggable-cards" >
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-hover">
                                <div class="card-header bg-info">
                                    <h4 class="m-b-0 text-white"> {{$reservation->chalet->name}}</h4></div>
                                <div class="card-body">
                                    بداية الحجز : {{$reservation->from_time}}
                                    <hr>
                                    نهاية الحجز : {{$reservation->to_time}}
                                    <hr>
                                    الحالة : {{$reservation->status}}
                                    <hr>
                                    التقييم :
                                    @foreach($ratings as $ratin)
                                        @if($reservation->chalet_id == $ratin->ratingable_id)
                                                <div class="one-third align-right">
                                                    <p class="" style="font-size:35px;color:#ff740e">
                                                        <span class="fa fa-star{{$ratin->rating > 0?'':'-o'}}"></span>
                                                        <span class="fa fa-star{{$ratin->rating > 1?'':'-o'}}"></span>
                                                        <span class="fa fa-star{{$ratin->rating > 2?'':'-o'}}"></span>
                                                        <span class="fa fa-star{{$ratin->rating > 3?'':'-o'}}"></span>
                                                        <span class="fa fa-star{{$ratin->rating > 4?'':'-o'}}"></span>
                                                    </p>
                                                </div>
                                                @break
                                        @elseif($loop->index == ($ratings->count()-1))
                                            <form id="evaulate" method="post" action="{{url('evaluateChalet')}}">
                                                @csrf
                                                <input type="hidden" name="chalet_id"
                                                       value="{{ $reservation->chalet->id }}">
                                                <div class="default-star-rating"
                                                     onclick="document.getElementById('evaulate').submit();"></div>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Row -->


@endsection

@section('jsFooter')
    <script src="{{asset('final/assets/libs/raty-js/lib/jquery.raty.js')}}"></script>
    <script src="{{asset('final/assets/extra-libs/raty/rating-init.js')}}"></script>
    <script src="{{asset('final/assets/extra-libs/prism/prism.js')}}"></script>
    <script >
        $(d)
    </script>
@endsection
