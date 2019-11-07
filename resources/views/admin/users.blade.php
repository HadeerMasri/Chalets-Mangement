@extends('dashboard.app')
@section('cssHeader')
    <link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content2')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block align-items-center m-b-10">
                    <h4 class="page-title">المستخدمين</h4>
                    <a class="btnAdd" style="visibility: hidden" href="{{ url('user/create') }}">اضافة مستخدم</a>
                </div>
                <div class="table-responsive">
                    <table id="" class="table table-striped table-bordered display table-hover users">
                        <thead class="bg-info  text-white">
                        <tr class="title-table">
                                <th >رقم</th>
                                <th>الاسم</th>
                                <th>الايميل</th>
                                <th>العنوان</th>
                                <th>رقم الجوال</th>
                                <th>الصلاحية</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody class="border border-info">
                            @if($users)
                                @foreach($users as $user)
                                    <tr class="field-table">
                                        <td>{{  ++$loop->index}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }} </td>
                                        <td>{{ $user->address }} </td>
                                        <td>{{ $user->phone }} </td>
                                        <td>{{ $user->role->name}} </td>
                                        <td>
                                            <div class="ml-auto text-muted">
                                                <form action="{{ route('user.destroy',$user->id) }}" method="post" class="form-inline" >
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-sm btn-danger" type="submit" >
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
    <script>
        $(document).ready(function () {
            $('.users').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                }
            });

        });
    </script>
    <script src="{{asset('assets/extra-libs/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{asset('assets/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>


@endsection