@extends('dashboard.app')
@section('cssHeader')
    <link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content2')
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center m-b-10">
                        <h4 class="page-title">الشاليهات الغير محجوزة</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="file_export" class="table bg-white table-bordered nowrap display chalets">
                            <thead>
                            <tr class="title-table">
                                <th>رقم</th>
                                <th>الاسم</th>
                                <th>السعر</th>
                                <th>الوصف</th>
                                <th>المدينة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($chalets)
                                @foreach($chalets as $chalet)
                                    <tr class="title-table">
                                        <td>{{  ++$loop->index}}</td>
                                        <td>{{ $chalet->name }}</td>
                                        <td>{{ $chalet->price }}شيكل </td>
                                        <td>{{ $chalet->description }} </td>
                                        <td>{{ $chalet->address->city }} </td>
                                        <td>
                                            <div class="ml-auto text-muted">
                                                <a href="{{ route('reservation.create',$chalet->id)}}"
                                                   class="btn btn-sm btn-primary">
                                                    <i class="">احجز الان</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="field-table">
                                    <td colspan="6">No data</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('jsFooter')
    <script src="{{asset('assets/extra-libs/datatables.net/js/jquery.dataTables.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.chalets').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                }
            });

        });
    </script>

@endsection