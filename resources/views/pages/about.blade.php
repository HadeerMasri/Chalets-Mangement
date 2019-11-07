@extends('layout.master1')
@section('title','معلومات عن موقعنا')
@section('userContent')

    <section class="ftco-section-2">
        <div class="container d-flex">
            <div class="section-2-blocks-wrapper row d-flex">
                <div class="img col-sm-12 col-lg-6 order-last" style="background-image: url('{{asset('cozy/images/about-2.jpg')}}');">
                </div>
                <div class="text col-lg-6 order-first ftco-animate align-right">
                    <div class="text-inner align-self-start">
                        <span class="subheading">من نحن</span>
                        <h3 class="heading">مرحبا بك في موقع صيف كيف</h3>
                        <p>{{$abouts[0]->about}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
