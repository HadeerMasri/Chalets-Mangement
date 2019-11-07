@extends('layout.master1')
@section('title','عرض الشاليه')
@section('userContent')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mrg">
                <div class="card">
                    <div class="card-header org">
                        <h1>{{$chalet->name}}
                            <button class="btn btn-info" style="background-color: white;border: none;float: left;margin-top: 20px">
                                <a  href="{{url('/reservation/create/'.$chalet->id )}}">احجز الان</a>
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:20px;background-color: white;color: #ff6138;border: none;float: left;margin-top: 20px">
                                موقع الشاليه
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 150px;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">موقع شاليه {{$chalet->name}}  </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="width: 100%; height: 300px;">
                                                {!! Mapper::render() !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </h1>
                    </div>
                    <div class="card-body">
                        الوصف : {{$chalet->description}}
                        <hr>
                        المدينة : {{$chalet->address->city}}
                        <hr>
                        السعر : {{$chalet->price}} شيكل
                        <hr>
                        المساحة : {{$chalet->Details->area}}م
                        <hr>
                        المالك : {{$chalet->user->name}}
                        <hr>
                        عددالأشخاص : {{$chalet->Details->individuals_num}} شخص
                        <hr>
                        الخدمات :
                        <br>
                        @if($chalet->Details->Bedroom == 1 ) غرف نوم  @endif
                        @if($chalet->Details->Garden == 1 ) , حديقة  @endif
                        @if($chalet->Details->Parking == 1 ) , موقف سيارات  @endif
                        @if($chalet->Details->Large_Swimming_pool == 1 ) , مسبح للكبار  @endif
                        @if($chalet->Details->Child_Swimming_pool == 1 ) , مسبح للأطفال  @endif
                        @if($chalet->Details->Bathroom == 1 ) , حمام   @endif
                        @if($chalet->Details->SalonForEvents == 1 ) , صالون للمناسبات   @endif
                        @if($chalet->Details->Tennis_Table == 1 ) , طاولة تنس    @endif
                        @if($chalet->Details->Pool_Table == 1 ) , طاولة بلياردو    @endif
                        @if($chalet->Details->Play_Station == 1 ) , بلايستيشن    @endif
                        @if($chalet->Details->Toys_Children == 1 ) , ألعاب للأطفال    @endif
                        @if($chalet->Details->Volleyball == 1 ) ,  ملعب لكرة الطائرة    @endif
                        @if($chalet->Details->football == 1 ) ,  ملعب لكرة القدم    @endif
                        @if($chalet->Details->basketball == 1 ) ,  ملعب لكرة السلة    @endif
                        @if($chalet->Details->Gaz == 1 ) ,  غاز    @endif
                        @if($chalet->Details->Barbecue == 1 ) ,  باربيكو(منقل للشواء)    @endif
                        @if($chalet->Details->Soggy_Barrel == 1 ) , برميل مندي    @endif
                        @if($chalet->Details->Electric_Oven == 1 ) , فرن كهربائي     @endif
                        @if($chalet->Details->Fridge == 1 ) ,  ثلاجة    @endif
                        @if($chalet->Details->Television == 1 ) ,  تلفاز    @endif
                        @if($chalet->Details->WIFI == 1 ) ,  واي فاي (انترنت)    @endif
                        @if($chalet->Details->Electronic_Generator == 1 ) ,  مولد كهرباء    @endif
                        @if($chalet->Details->Solar_Energy == 1 ) ,  طاقة شمسية    @endif
                        @if($chalet->Details->UPS == 1 ) ,  UPS     @endif
                        {{$chalet->Details->other}}
                        <hr>
                        الأسعار خلال الأسبوع
                        <table class="table" style="text-align: center" >
                            <thead>
                            <tr >
                                <th style="font-size: 15px;color: #ffffff">  أيام الاسبوع</th>
                                <th style="font-size: 15px;color: #ffffff;">صباحا (بالشيكل)</th>
                                <th style="font-size: 15px;color: #ffffff"> مساءا (بالشيكل)</th>
                            </tr>
                                </thead>
                            <tbody>
                            <tr>
                                <td style="font-size: 15px">السبت</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->sat_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->sat_evening}}</td>


                            </tr>
                            <tr>
                                <td style="font-size: 15px">الاحد</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->sun_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->sun_evening}}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px">الاثنين</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->mon_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->mon_evening}}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px">الثلاثاء</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->tue_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->tue_evening}}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px">الاربعاء</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->wed_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->wed_evening}}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px">الخميس</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->thu_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->thu_evening}}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px">الجمعة</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->fri_morning}}</td>
                                <td style="font-size: 15px">{{$chalet->priceDetails->fri_evening}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

        <section class="home-slider owl-carousel">
            @foreach($chalet->images as $image)
            <div class="slider-item" style="background-image: url('{{asset('storage/'.$image->path)}}');margin-top: 20px;">
            </div>
            @endforeach
        </section>
</div>









@endsection

