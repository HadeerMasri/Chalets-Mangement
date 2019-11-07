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
                        <h4 class="page-title">الشاليهات</h4>
                        <a class="btn btn-info btnAdd" style="font-family: 'Almarai', serif;direction: rtl" href="{{ url('chalet/create') }}">اضافة شاليه</a>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table table-striped table-bordered display table-hover  chalets" >
                            <thead class="bg-info  text-white">
                            <tr class="title-table">
                                <th>رقم</th>
                                <th>الاسم</th>
                                <th>السعر</th>
                                <th>الوصف</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody class="border border-info">
                            @if($chalets)
                                @foreach($chalets as $chalet)
                                    <tr class="field-table">
                                        <td>{{  ++$loop->index }}</td>
                                        <td>{{ $chalet->name }}</td>
                                        <td>{{ $chalet->price }}شيكل </td>
                                        <td>{{str_limit($chalet->description , 50)  }} </td>
                                        <td>
                                            <div class="ml-auto text-muted">
                                                <a href="{{ route('chalet.edit',$chalet->id)}}"
                                                   class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('offer.create',$chalet->id)}}"
                                                   class="btn btn-sm btn-info">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                                <form action="{{ route('chalet.destroy',$chalet->id) }}" method="post" class="form-check-inline" >
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-sm btn-danger" type="submit" >
                                                        <i class="fas fa-trash"></i>
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
            $('.chalets').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                }
            });

        });
    </script>

@endsection