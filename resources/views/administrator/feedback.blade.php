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
                <a href="{{route('feedback.read')}}">Feedback of SMARTER</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Feedback of SMARTER</h4>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Rating</th>
                                    <th class="text-center">Review</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td class="text-center">{{$item->rating}}</td>
                                    <td class="text-center">{{$item->review}}</td>
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

<div class="modal fade" id="delete-feedback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd justi">
                <h5 class="col-12 modal-title text-center">Delete Data
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
                <form action="{{route('feedback.delete')}}" method="post">
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
        $('#delete-feedback').modal('show');
        $('#name').text(name);
        $('#id').val(id);
    }

    $(document).ready(function() {
        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        
    });        
</script>
@endsection
