@extends('dashboard.app')
@section('cssHeader')
    <link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('content2')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center m-b-10">
                        <h4 class="page-title">الرسائل</h4>
                        <a class="btnAdd" style="visibility: hidden;" href="">اضافة رد</a>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table table-striped table-bordered display table-hover messages">
                            <thead class="bg-info  text-white">
                            <tr class="title-table">
                                <th>رقم</th>
                                <th>الاسم</th>
                                <th>الايميل</th>
                                <th>رقم الجوال</th>
                                <th>الموضوع</th>
                                <th>الرسالة</th>
                                <th>الرد</th>
                            </tr>
                            </thead>
                            <tbody class="border border-info">
                            @if($contacts)
                                @foreach($contacts as $contact)
                                    <tr class="field-table">
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }} </td>
                                        <td>{{ $contact->phone }} </td>
                                        <td>{{ $contact->subject }} </td>
                                        <td>{{ $contact->message}} </td>
                                        <td>
                                            <div class="ml-auto text-muted">
                                                <a href="{{ route('admin.reply', $contact->id)}}"
                                                   class="btn btn-sm btn-info">
                                                    <i></i> رد
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
            $('.messages').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                }
            });

        });
    </script>
@endsection