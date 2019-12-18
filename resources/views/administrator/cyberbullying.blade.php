@extends('layouts.backend')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Recap Data</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('dashboard')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('cyberbullying.read')}}">Cyberbullying</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Cyberbullying</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Peduli dengan perasaan orang lain.</th>
                                    <th class="text-center">Bahagia saat orang lain berantakan.</th>
                                    <th class="text-center">Bergiliran dan berbagi.</th>
                                    <th class="text-center">Bermain dengan siapa saja.</th>
                                    <th class="text-center">Baik dan menghormati.</th>
                                    <th class="text-center">Membuat orang lain terlihat bodoh atau tidak keren.</th>
                                    <th class="text-center">Menggunakan kata-kata yang sopan dan baik.</th>
                                    <th class="text-center">Mendorong atau memukul orang lain.</th>
                                    <th class="text-center">Memanggil orang lain dengan panggilan yang tidak baik.</th>
                                    <th class="text-center">Membantu orang lain.</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td class="text-center">{{$item->ans1}}</td>
                                    <td class="text-center">{{$item->ans2}}</td>
                                    <td class="text-center">{{$item->ans3}}</td>
                                    <td class="text-center">{{$item->ans4}}</td>
                                    <td class="text-center">{{$item->ans5}}</td>
                                    <td class="text-center">{{$item->ans6}}</td>
                                    <td class="text-center">{{$item->ans7}}</td>
                                    <td class="text-center">{{$item->ans8}}</td>
                                    <td class="text-center">{{$item->ans9}}</td>
                                    <td class="text-center">{{$item->ans10}}</td>
                                    <td class="text-center">
                                        <div class="form-button-action">
                                            <button type="button" onclick="hapus({{$item->id}},'{{$item->user->name}}')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Delete Data Cyberbullying
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <div class="modal-body">
                <p class="large">Delete data <a id="name"></a>?</p>
            </div>
            <div class="modal-footer no-bd justify-content-center">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <form action="{{route('cyberbullying.delete')}}" method="post">
                    @csrf
                    <input id="id" name="id" type="hidden">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    function hapus(id,name){
        $('#delete-data').modal('show');
        $('#id').val(id);
        $('#name').text(name);
    }

    $(document).ready(function() {
        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
                ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
@endsection
