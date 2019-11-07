@extends('dashboard.app')
@section('cssHeader')
    <link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content2')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="padding: 10px">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center m-b-10">
                        <h5 class="page-title">الشاليهات المحجوزة</h5>
                        <a class="btnAdd" style="visibility: hidden;" href="{{ url('chalet/create') }}">اضافة شاليه</a>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table table-striped table-bordered display table-hover chalets">
                            <thead class="bg-info  text-white">
                            <tr class="title-table">
                                <th>رقم</th>
                                <th>اسم الشاليه</th>
                                <th>اسم المستأجر</th>
                                <th>وقت وتاريخ الدخول</th>
                                <th>وقت وتاريخ الخروج</th>
                                <th>الحالة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody class="border border-info">
                            @if($reservations)
                                @foreach($reservations as $reservation)
                                    <tr class="field-table">
                                        <td>{{  ++$loop->index}}</td>
                                        <td>{{ $reservation->chalet->name }}</td>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->from_time }}</td>
                                        <td>{{ $reservation->to_time }}</td>
                                        <td>{{ $reservation->status }}</td>
                                        <td> <div class="ml-auto text-muted">
                                                <a href="{{ route('reservation.edit',$reservation->id)}}"
                                                   class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
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