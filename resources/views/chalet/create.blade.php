@extends('dashboard.app')
@section('cssHeader')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>
    <style>
        #map{
            height: 400px;
            width: 100%;

        }
    </style>
@endsection
@section('title','إضافة شاليه جديد')
@section('content2')
    <div class="row">
        <div class="col-12">
            <div class="row draggable-cards" id="draggable-area" style="padding-right: 150px;margin-top: 20px">
                <div class="col-md-8 col-sm-8">
                    <div class="card  card-hover">
                        <div class="card-header bg-info">
                            <h2 class="m-b-0 text-white">اضافة شاليه جديد</h2></div>
                        <div class="card-body">
                 <form action="{{ route('chalet.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="form-body" >
                         <div class="row pt-3">
                             <div class="col-md-6">
                                 <div class="form-group">
                                         <label class="control-label">اسم الشاليه</label>
                                         <input type="text" class="form-control" name="name" placeholder="أدخل اسم الشاليه " required>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label" >المدينة</label>
                                     <input type="text" class="form-control" placeholder="أدخل المدينة" name="city" >
                                     </span>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >وصف الشاليه</label>
                                         <textarea name="description" placeholder="أضف وصفا"   class="form-control" cols="20" rows="7"
                                                   required></textarea>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >السعر</label>
                                         <input type="number" class="form-control" placeholder="أدخل السعر بالشيكل" name="price" >
                                         </span>
                                     </div>
                             </div>
                             <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="control-label" >الأسعار صباحا ومساءا</label>
                                         <br><br>
                                         <div class="container-fluid">
                                             <div class="row">
                                                 <div class="col-10">
                                                     <table class="table" >
                                                         <thead class="control-label"  >
                                                         <tr>
                                                             <th>
                                                                 #
                                                             </th>
                                                             <th>
                                                                 أيام الأسبوع
                                                             </th>
                                                             <th>
                                                               صباحا
                                                             </th>
                                                             <th>
                                                                 مساءا
                                                             </th>
                                                         </tr>
                                                         </thead>
                                                         <tbody class="control-label" >
                                                         <tr class="table-danger">
                                                             <td>1</td>
                                                             <td>السبت</td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="sat_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="sat_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr class="table-active">
                                                             <td>2</td>
                                                             <td>الأحد</td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="sun_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="sun_evening" required>
                                                                 </div>
                                                             </td>

                                                         </tr>
                                                         <tr class="table-success">
                                                             <td>3</td>
                                                             <td>الإثنين </td>
                                                             <td>
                                                                 <div class="input-group">
                                                                     <input type="number" class="form-control" name="mon_morning" required>
                                                                 </div>
                                                             <td>
                                                                 <div class="input-group">
                                                                     <input type="number" class="form-control" name="mon_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr class="table-warning">
                                                             <td>4</td>
                                                             <td>الثلاثاء</td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="tue_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="tue_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr class="table-danger">
                                                             <td>5</td>
                                                             <td>الأربعاء</td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="wed_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="wed_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr class="table-active">
                                                             <td>6</td>
                                                             <td> الخميس </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="thu_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="thu_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr class="table-warning">
                                                             <td>7</td>
                                                             <td>الجمعة</td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="fri_morning" required>
                                                                 </div>
                                                             </td>
                                                             <td><div class="input-group">
                                                                     <input type="number" class="form-control" name="fri_evening" required>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                             </div>
                             <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="control-label" >الخريطة(حدد موقع الشاليه)</label>
                                         <div id="map" >
                                         </div>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >خطوط الطول</label>
                                         <input type="text" class="form-control " name="latitude" placeholder="ادخل خطوط الطول" required>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >دوائر العرض</label>
                                         <input type="text" class="form-control " name="longitude" placeholder="ادخل دوائر العرض" required>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-14">
                                                 <ul style="list-style-type:none" class="control-ul" class="float-right">المرافق
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"  name="Bedroom" /> غرفة نوم
                                                             </label>
                                                         </div>
                                                     </li>

                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"  name="Parking"/>موقف سيارات
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" name="Large_Swimming_pool" value="1"/> مسبح للكبار
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" name="Child_Swimming_pool" value="1"/> مسبح للأطفال
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Bathroom"/> حمام
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="SalonForEvents" /> صالون للمناسبات
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1" name="Garden"/>حديقة
                                                             </label>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-14">
                                                 <ul style="list-style-type:none" class="control-ul"  class="float-right">ألعاب
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"    name="Tennis_Table" />طاولة تنس
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"    name="Pool_Table"/> طاولة بلياردو
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Play_Station"/>بلايستيشن
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Toys_Children"/>  العاب أطفال
                                                             </label>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-14">
                                                 <ul style="list-style-type:none" class="control-ul" class="float-right">ملاعب
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"    name="Volleyball" />ملعب لكرة الطائرة
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"    name="football"/> ملعب لكرة القدم
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"    name="basketball" />ملعب لكرة السلة
                                                             </label>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-14">
                                                 <ul style="list-style-type:none" class="control-ul" class="float-right">معدات الطعام
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Gaz"/>غاز
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Soggy_Barrel"/>برميل مندي
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Barbecue"/> باربكيو(المنقل)
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Electric_Oven"/>فرن كهربائي
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Fridge"/>ثلاجة
                                                             </label>
                                                         </div>
                                                     </li>

                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                             </div>
                             <div class="col-md-12">
                                     <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-14">
                                                 <ul style="list-style-type:none" class="control-ul" class="float-right">الخدمات
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Television"/>تلفاز
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="WIFI"/>واي فاي (انترنت)
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Electronic_Generator"/> مولد كهرباء
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="Solar_Energy"/>طاقة شمسية
                                                             </label>
                                                         </div>
                                                     </li>
                                                     <li class="list-item">
                                                         <div class="checkbox">
                                                             <label class="control-label" >
                                                                 <input type="checkbox" value="1"   name="UPS"/> UPS
                                                             </label>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                             </div>
                             <div class="col-md-6">
                             <label class="control-label">خدمات اخرى:</label>
                             <input type="text" name="other" class="form-control" placeholder="دخل خدمات اخرى بينهم علامة,">
                         </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label">المساحة</label>
                                         <select name="area" id="area_select" class="form-control">
                                             <option value="-1">اختار المساحة</option>
                                             <option value="500-1000" name="area"  id="area" class="form-control">٥٠٠-١٠٠٠م</option>
                                             <option value="1000-2000" name="area"  id="area" class="form-control">١٠٠٠-٢٠٠٠م</option>
                                             <option value="2000 more" name="area"  id="area" class="form-control">٢٠٠٠م فأكثر</option>
                                         </select>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >عدد الأفراد</label>
                                         <select name="individuals_num" id="individuals_num_select" class="form-control">
                                             <option value="-1">اختار عدد الافراد</option>
                                             <option value="1-5" name="individuals_num"  id="individuals_num" class="form-control">١-٥ أشخاص</option>
                                             <option value="5-10" name="individuals_num"  id="individuals_num" class="form-control">  ٥-١٠ أشخاص</option>
                                             <option value="10-20" name="individuals_num"  id="individuals_num" class="form-control">١٠-٢٠ شخص </option>
                                             <option value="20 more" name="individuals_num"  id="individuals_num" class="form-control">٢٠ فأكثر</option>
                                         </select>
                                     </div>
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="control-label" >صور الشاليه (حد أقصى 5 صور)</label>
                                         <input type="file" class="form-control" name="images[]" multiple>
                                     </div>
                                 <div class="text-right">
                                 <button type="submit" class="btn btn-info"  >اضافة شاليه جديد</button>
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

@section('jsFooter')
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
            crossorigin=""></script>

    <script>
        var chaletMAP = L.map('map').setView([31.5017765,34.1866839], 10);
        var marker = L.marker([31.5017765,34.1866839]).addTo(chaletMAP).bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();
        var tileURL = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png' ;
        var  attribution =  'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>' ;
        var tiles  = L.tileLayer(tileURL , { attribution }).addTo(chaletMAP);
        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(chaletMAP);
        }

        chaletMAP.on('click', onMapClick);
    </script>
@endsection

