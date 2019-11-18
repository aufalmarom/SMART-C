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
                <a href="{{route('diridigital.read')}}">Diri Digital</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Diri Digital</h4>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Sex</th>
                                    <th class="text-center">Feel</th>
                                    <th class="text-center">Created Time</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td class="text-center">{{$item->sex}}</td>
                                    <td class="text-center">{{$item->hobi}}</td>
                                    <td class="text-center">{{$item->feel}}</td>
                                    <td class="text-center">{{$item->created_at}}</td>
                                    <td class="text-center">
                                        <div class="form-button-action">
                                            <button type="button" onclick="edit({{$item->id}},'{{$item->name}}','{{$item->sex}}','{{$item->hobi}}','{{$item->feel}}')" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" onclick="hapus({{$item->id}},'{{$item->name}}')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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

<div class="modal fade" id="delete-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Delete Data Diri Digital
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
                <form action="{{route('diridigital.delete')}}" method="post">
                    @csrf
                    <input id="id" name="id" type="hidden" >
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="update-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Update Data Diri Digital
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <div class="modal-body">

            <form action="{{route('diridigital.update')}}" method="post">
                @csrf
                <input id="id-update" name="id" type="hidden">
                <div class="form-group form-group-default">
                    <label>Name</label>
                    <input id="nama" name="name" type="text" class="form-control">
                </div>
                <div class="form-group form-group-default">
                    <label>Sex</label>
                    <input id="sex" name="sex" type="text" class="form-control">
                </div>
                <div class="form-group form-group-default">
                    <label>Hobby</label>
                    <input id="hobby" name="hobi" type="text" class="form-control">
                </div>
                <div class="form-group form-group-default">
                    <label>Feel</label>
                    <input id="rasa" name="feel" type="text" class="form-control">
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
        $('#delete-user').modal('show');
        $('#id').val(id);
        $('#name').text(name);
    }

    function edit(id,name,sex,hobi,feel){
        $('#update-user').modal('show');
        $('#id-update').val(id);
        $('#sex').val(sex);
        $('#nama').val(name);
        $('#rasa').val(feel);
        $('#hobby').val(hobi);
    }

    $(document).ready(function() {
        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

    });
</script>
@endsection
