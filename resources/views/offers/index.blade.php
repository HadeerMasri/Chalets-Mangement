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
                        <h4 class="page-title">اخر العروض</h4>
                        <a class="btnAdd" style="visibility: hidden" href="{{ url('offer/create') }}">اضافة عرض</a>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table table-striped table-bordered display table-hover offers">
                            <thead class="bg-info  text-white">
                            <tr class="title-table">
                                <th>رقم</th>
                                <th>اسم الشاليه</th>
                                <th>السعر القديم</th>
                                <th>السعر الجديد</th>
                                <th>بداية العرض</th>
                                <th>نهاية العرض</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody class="border border-info">
                            @if($offers)
                                @foreach($offers as $offer)
                                    <tr class="field-table">
                                        <td>{{  ++$loop->index }}</td>
                                        <td>{{ $offer->chalet->name }}</td>
                                        <td>{{ $offer->chalet->price }}شيكل </td>
                                        <td>{{ $offer->new_price }}شيكل </td>
                                        <td>{{ $offer->from_time }} </td>
                                        <td>{{ $offer->to_time }} </td>
                                        <td>
                                            <div class="ml-auto text-muted">
                                                <a href="{{route('offer.edit',$offer->id)}}"
                                                   class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{route('offer.destroy',$offer->id)}}" method="post" class="form-check-inline">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-sm btn-danger form-check-inline " type="submit" >
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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
            $('.offers').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                }
            });

        });
    </script>
@endsection