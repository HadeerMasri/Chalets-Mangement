@extends('layout.master1')
@section('userContent')
    <div class="ftco-section-reservation">
        <div class="container">
            <div class="row justify-content-end ftco-animate">
                <div class="col-lg-4 col-md-5 reservation p-md-5">
                    <div class="block-17">
                        <form action="{{ route('login') }}" method="post" class="d-block">
                            @csrf
                            @guest
                            <div class="fields d-block">
                                <div class="book-date one-third">
                                    <label>الايميل</label>
                                    <input type="email" class="form-control form-control-lg" placeholder="أدخل ايميل المستخدم"  aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>

                                <div class="book-date one-third">
                                    <label>كلمة المرور</label>
                                    <input type="password" class="form-control form-control-lg" placeholder="أدخل كلمة المرور"  aria-describedby="basic-addon1" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                                <button class="search-submit btn btn-primary" type="submit" style="margin-top: 15px">تسجيل دخول</button>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="search-submit btn btn-primary" style="margin-top: 10px">تسجيل مستخدم جديد</a>
                                @endif
                            @else
                                <button class="search-submit btn btn-primary" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="m-menu__link">تسجيل خروج</button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <img src="{{asset('cozy/images/image_3.jpg')}}" style="width:290px;height: 300px;margin-top: 15px">
                            @endguest
                        </form>
                        <ul class="nav-shop" style="visibility: hidden">
                            <li class="nav-item">
                                @guest
                                    <a class="button button-header" href="{{ route('login') }}" style="font-family: 'Cairo', sans-serif">تسجيل دخول</a>
                                    @if (Route::has('register'))
                                        <a class="button button-header" href="{{ route('register') }}" style="font-family: 'Cairo', sans-serif;">تسجيل مستخدم جديد</a>
                                    @endif
                                @else
                                    <a class="button button-header" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="m-menu__link" style="font-family: 'Cairo', sans-serif;font-size: 16px;">تسجيل خروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container-fluid section-event" >
            <div class="row no-gutters justify-content-center mb-5 pb-5" style="margin-top: -208px;padding-top: 0">
                <!--<div class="col-md-7 text-center heading-section ftco-animate">-->
                <!--<span class="subheading">صيف كيف</span>-->
                <!--<h2>من نحن</h2>-->
                <!--</div>-->
            </div>
            <div class="row d-flex no-gutters" dir="rtl">
                <div class="col-md-6 event-big-img" style="background-image: url({{asset('cozy/images/image_2.jpg')}});"></div>
                <div class="col-md-6 event-wrap">
                    <div class="event mb-5 ftco-animate">
                        <div class="text">
                            <h3 class="section-title"><a href="/about">من نحن</a></h3>
                            <p>إذا كنت تبحث عن شاليه أو جناح خاصّ لقضاء إجازتك القريبة، فأنت في المكان الأمثل لذلك
                                موقعنا يطلعك على كلّ ما تجب معرفته في الطّريق لرحلات من تصميمك الخاصّ؛ تلائم توقّعاتك وتضمن لك الخصوصيّة والتّوفير.
                                تتوفّر المسابح والحدائق وغرف المعيشة ومعدّات الشّواء وترّاسات الاسترخاء وألعاب الأطفال في معظم الشّاليهات والكباين، وتقديم الفطور أو الوجبات وحتى خدمة الغرف فإنّها تقتصر على بعضها؛ وعمليًا فإنّ توافر بعضها أو جميعها هو ما يحدّد مستوى الشّاليه والمبلغ المطلوب مقابل فترة إقامتك فيه.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section room-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">صَيّف كَيّف</span>
                    <h2>الشاليهات</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-room owl-carousel">
                        @if(count($chalets)>0 )
                            @foreach($chalets as $chalet)
                            <div class=" item">
                            <div class="room-wrap">
                                @foreach($chalet->images as $image)
                                    @if($loop->first)
                                        <a href="{{ route('showChalet',$chalet->id) }}" class="room-img" style="background-image: url({{asset('storage/'.$image->path)}});"></a>
                                    @endif
                                @endforeach
                                <div class="text p-4">
                                    <div class="d-flex mb-1">
                                        <div class="one-forth text-center">
                                            <p class="price">{{$chalet->price}} <br><span>/يوم</span></p>
                                        </div>
                                        @if ($ratings[0]->rating == 0)
                                            <div class="one-third align-right">
                                               <p class="star-rate"><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                        @if ($ratings[0]->rating == 1)
                                            <div class="one-third align-right">
                                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                        @if ($ratings[0]->rating == 2)
                                            <div class="one-third align-right">
                                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-o"></span><span class="icon-star-o"></span><span class="icon-star-o"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                        @if ($ratings[0]->rating == 3)
                                            <div class="one-third align-right">
                                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-o"></span><span class="icon-star-o"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                        @if ($ratings[0]->rating == 4)
                                            <div class="one-third align-right">
                                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-o"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                        @if ($ratings[0]->rating == 5)
                                            <div class="one-third align-right">
                                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></p>
                                                <h3><a href="#"> {{$chalet->name}}</a></h3>
                                            </div>
                                        @endif
                                    </div>
                                    <p class="features">

                                        <span class="d-block mb-2">المدينة: {{$chalet->address->city}}  <i class="icon-check mr-2"></i> </span>
                                        <span class="d-block mb-2">عدد الأفراد: {{$chalet->Details->individuals_num}}  <i class="icon-check mr-2"></i> </span>

                                        <span class="d-block mb-2">المساحة: {{$chalet->Details->area}}  <i class="icon-check mr-2"></i> </span>
                                        <span class="d-block mb-2">المالك : {{$chalet->user->name}}  <i class="icon-check mr-2"></i> </span>

                                    </p>
                                    <p><a href="{{ route('showChalet',$chalet->id) }}" class="btn btn-primary block">احجز</a></p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url('{{asset('cozy/images/bg_4.jpg')}}')" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row desc d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <span class="subheading">استمتع معنا</span>
                        <h2 class="h1 font-weight-bold">احصل على الراحة والمتعة ضمن سلسلة شاليهاتنا </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="ftco-section testimony-section" >
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">احدث الشاليهات</span>
                    <h2>آخر الشاليهات التي انضمت إلينا</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel owl-carousel ftco-owl">
                        @if(count($reservations))
                            @foreach($reservations as $reservation)
                                <div class="item text-center">
                                    <div class="testimony-wrap p-4 pb-5">
                                        @foreach($reservation->chalet->images as $image)
                                            @if($loop->first)
                                                <div class="user-img mb-4" style="background-image: url({{asset('storage/'.$image->path)}})">
                                            @endif
                                        @endforeach

                                        </div>
                                        <div class="text">
                                            <p class="rev-title">{{$reservation->chalet->name}}</p>
                                            <p class="mb-5" style="min-height: 80px;">{{$reservation->chalet->description}}</p>
                                            <p class="name">{{$reservation->chalet->user->name}}</p>
                                            <span class="position">{{$reservation->chalet->address->city}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">خدماتنا</span>
                    <h2>نقدم لكم مجموعة واسعة من الخدمات</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="carousel1 owl-carousel ftco-owl">
                    <div class="item">
                        <div class="blog-entry">
                            <a class="block-20" style="background-image: url('{{asset('cozy/images/dish-11.jpg')}}')">
                            </a>
                            <div class="text p-4 d-block">
                                <h3 class="heading"><a href="#">الأطعمة والمشروبات</a></h3>
                                <p class="align-right">نقدم لكم أشهى وأطيب المأكولات الشعبية والعصرية مع خدمات التوصيل المجاني </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="100">
                            <a class="block-20" style="background-image: url('{{asset('cozy/images/room-1.jpg')}}')">
                            </a>
                            <div class="text p-4 d-block">
                                <h3 class="heading"><a href="#">غرف النوم </a></h3>
                                <p class="align-right">يتوفر لدينا اجمل واوسع غرف النوم بمختلف مساحتها </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a class="block-20" style="background-image: url('{{asset('cozy/images/img9.jpg')}}')">
                            </a>
                            <div class="text p-4 d-block">
                                <h3 class="heading"><a href="#">الحدائق والمسابح</a></h3>
                                <p class="align-right">نوفر لكم حديقة جذابة مع ارقى المسابح للكبار والأطفال</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a class="block-20" style="background-image: url('{{asset('cozy/images/img5.jpg')}}')">
                            </a>
                            <div class="text p-4 d-block">
                                <h3 class="heading"><a href="#">صالونات المناسبات </a></h3>
                                <p class="align-right">اجمل واروع صالونات لمناسباتكم العائلية .. اتمتع انت وعائلتك او ورفقاتك</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid section-event">
            <div class="row no-gutters justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">شاليهاتنا </span>
                    <h2>خصوصية ، رفاهية ، توفير</h2>
                </div>
            </div>
            <div class="row d-flex no-gutters" dir="rtl">
                <div class="col-md-6 event-big-img" style="background-image: url({{asset('cozy/images/img5.jpg')}});"></div>
                <div class="col-md-6 event-wrap">
                    <div class="event mb-5 ftco-animate">
                        <div class="text">
                            <br>
                            <h3><a>مشاركة مناسباتكم</a></h3>
                            <p> نوفر لكم ضمن سلسلة شاليهاتنا ، خدمات ومزايا وفق تطلعاتكم ، بحيث نوفر لكم قاعات خاصة بمناسباتكم السعيدة ، وترقى هذه القاعات إلى مستوى الرقي والجمال </p>
                            <hr>
                        </div>
                    </div>
                    <div class="event mb-5 ftco-animate">
                        <div class="text">
                            <h3><a> راحة لكم ولأطفالكم</a></h3>
                            <p> تتوفّر المسابح والحدائق وغرف المعيشة ومعدّات الشّواء وترّاسات الاسترخاء وألعاب الأطفال في معظم الشّاليهات والكباين، وتقديم الفطور أو الوجبات وحتى خدمة الغرف فإنّها تقتصر على بعضها؛ وعمليًا فإنّ توافر بعضها أو جميعها هو ما يحدّد مستوى الشّاليه والمبلغ المطلوب مقابل فترة إقامتك فيه.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

