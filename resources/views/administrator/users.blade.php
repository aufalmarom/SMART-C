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
                <a href="{{route('users.read')}}">Users</a>
            </li>
        </ul>
    </div>
    
    <div class="row">
        <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-dark" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
                @endif
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Users</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addUser">
                            <i class="fa fa-plus"></i>
                            Add User
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td class="text-center">{{$item->email}}</td>
                                    <td class="text-center">{{$item->role}}</td>
                                    <td class="text-center">
                                        <div class="form-button-action">
                                            <button type="button" class="btn btn-link btn-danger" onclick="hapus({{$item->id}},'{{$item->name}}')">
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
<form action="{{route('users.create')}}" method="post">
@csrf
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd justi">
                    <h5 class="col-12 modal-title text-center">Add Data User
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="fill name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="fill email" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="fill password" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Password Confirmation</label>
                                <input type="password" name="confirmation" class="form-control" placeholder="fill password confirmation" required>
                            </div>
                        </div>
                        <div class="col-sm-12" style="text-align:center;">
                            <div class="form-check">
                                <label>Role</label><br/>
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="role" value="administrator" checked="">
                                    <span class="form-radio-sign">Administrator</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="role" value="user">
                                    <span class="form-radio-sign">User</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd justify-content-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="modal fade" id="delete-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Delete Data User
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
                <form action="{{route('users.delete')}}" method="post">
                    @csrf
                    <input id="id" name="id" type="hidden" >
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
        $('#delete-user').modal('show');
        $('#name').text(name);
        $('#id').val(id);
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
