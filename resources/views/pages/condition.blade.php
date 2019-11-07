@extends('layout.master1')
@section('title','الاحكام والشروط')

@section('userContent')
    <h1 class="text-center">الأحكام والشروط</h1>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-first img" style="background-image: url('{{asset('cozy/images/img5.jpg')}}')"></div>
                    <div class="one-half text-center justify-content-center order-last text">
                        <h2>{{$conditions[0]->title1}}</h2>
                        <p>{{$conditions[0]->paragraph1}}</p>
                    </div>
                </div>
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-last img" style="background-image: url('{{asset('cozy/images/img9.jpg')}}')"></div>
                    <div class="one-half text-center justify-content-center order-first text">
                        <h2>{{$conditions[0]->title2}}</h2>
                        <p>{{$conditions[0]->paragraph2}}</p>
                    </div>
                </div>
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-first img" style="background-image: url('{{asset('cozy/images/image_1.jpg')}}')"></div>
                    <div class="one-half text-center justify-content-center order-last text">
                        <h2>{{$conditions[0]->title3}}</h2>
                        <p>{{$conditions[0]->paragraph3}}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2><span class="icon-instagram"></span> Instagram</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
