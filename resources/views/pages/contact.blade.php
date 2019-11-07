@extends('layout.master1')

@section('userContent')
    @include('sweetalert::alert')
    <section class="ftco-section contact-section">
        <div class="container bg-light">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">معلومات التواصل</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-4">
                    <p><span>العنوان:</span>
                        @if($admins)
                            @foreach($admins as $admin)
                                {{$admin->address}}
                            @endforeach
                        @endif</p>
                </div>
                <div class="col-md-4">
                    <p><span>الهاتف:</span>
                        @if($admins)
                                @foreach($admins as $admin)
                                    {{$admin->phone}}
                                @endforeach
                            @endif
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span>البريد الالكتروني:</span>
                            @if($admins)
                                @foreach($admins as $admin)
                                    {{$admin->email}}
                                @endforeach
                            @endif
                    </p>
                </div>

            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="ادخل اسمك" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="ادخل ايميلك" name="email"required>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" id="phone" placeholder="ادخل رقم جوالك" name="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  id="subject" placeholder="اكتب الموضوع" name="subject" required>
                        </div>

                        <div class="form-group">
                            <textarea  class="form-control" id="message"  name="message" placeholder="اكتب رسالتك هنا.."  cols="30" rows="4" required></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" value="أرسل" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6" >
                    <div class="mapouter"><div class="gmap_canvas"><iframe  height="460" width="80%" id="gmap_canvas" src="https://maps.google.com/maps?q=gaza&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.utilitysavingexpert.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>
            </div>
        </div>
    </section>


@endsection
