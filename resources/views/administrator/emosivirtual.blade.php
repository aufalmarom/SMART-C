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
                <a href="{{route('emosivirtual.read')}}">Emosi Virtual</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Emosi Virtual</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                        New</span>
                                        <span class="fw-light">
                                            Row
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Create a new row using this form, make sure you fill them all</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Name</label>
                                                    <input id="addName" type="text" class="form-control" placeholder="fill name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-0">
                                                <div class="form-group form-group-default">
                                                    <label>Position</label>
                                                    <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Office</label>
                                                    <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Tidak suka jika </th>
                                    <th class="text-center">Suka jika</th>
                                    <th class="text-center">Created Time</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td class="text-center">{{$item->negative}}</td>
                                    <td class="text-center">{{$item->positive}}</td>
                                    <td class="text-center">{{$item->created_at}}</td>
                                    <td class="text-center">
                                        <div class="form-button-action">
                                            <button type="button" onclick="edit({{$item->id}},'{{$item->user->name}}','{{$item->negative}}','{{$item->positive}}')"  data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
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
                <h5 class="col-12 modal-title text-center">Delete Data Emosi Virtual
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
                <form action="{{route('emosivirtual.delete')}}" method="post">
                    @csrf
                    <input id="id" name="id" type="hidden" >
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="update-data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Update Data Emosi Virtual
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <div class="modal-body">

            <form action="{{route('emosivirtual.update')}}" method="post">
                @csrf
                <input id="id-update" name="id" type="hidden">
                <div class="form-group form-group-default">
                    <label>Name</label>
                    <input id="nama" name="name" type="text" class="form-control" readonly>
                </div>
                <div class="form-group form-group-default">
                    <label>Negative</label>
                    <input id="negative" name="negative" type="text" class="form-control">
                </div>
                <div class="form-group form-group-default">
                    <label>Positive</label>
                    <input id="positive" name="positive" type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer no-bd justify-content-center">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
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

    function edit(id,name,negative,positive){
        $('#update-data').modal('show');
        $('#id-update').val(id);
        $('#nama').val(name);
        $('#negative').val(negative);
        $('#positive').val(positive);
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
