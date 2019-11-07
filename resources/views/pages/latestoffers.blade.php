@extends('layout.master1')
@section('userContent')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">آخر العروض</span>
                    <h2>احدث العروض والمزايا  </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 dish-menu">
                    <div class="tab-content py-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    @if(count($offers)>0 )
                                        @foreach($offers as $offer)
                                            <div class="menus d-flex ftco-animate col-lg-6 " >
                                                @foreach($offer->Chalet->images as $image)
                                                    @if($loop->first)
                                                        <a class="menu-img"  href="{{ route('showOffer',$offer->id) }}" style="background-image: url({{asset('storage/'.$image->path)}});"></a>
                                                    @endif
                                                @endforeach
                                                <div class="text d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$offer->Chalet->name}}</h3>
                                                        <p><span>{{$offer->chalet->address->city}}</span>, <span>{{$offer->chalet->user->name}}</span></p>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price" >LIS <span class="price" style="text-decoration: line-through">{{$offer->chalet->price}}</span>/{{$offer->new_price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div><!-- END -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
