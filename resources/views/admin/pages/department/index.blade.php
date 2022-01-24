@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->

<div class="row py-lg-2">
    <div class="col-md-6 mt-5">
        <button class="btn btn-primary btn-lg float-md-left" role="button" aria-pressed="true">List of Customer</button>
    </div>
    <div class="col-md-6 mt-5">
        <a href="{{route('department.create')}}" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Create New Tag</a>
    </div>

</div>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Detail</th>

                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($departments as $department)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$department->title}}</td>
                    <td>{{$department->detail}}</td>

                    <td class="text-right">
                        <a href="{{ route('department.show', ['department' =>$department->id])}}" title="show">
                            show</i>
                        </a>


                        <a href="{{route('department.edit', ['department'=>$department->id])}}" class="btn btn-round btn-warning btn-icon btn-sm "><i class="far fa-calendar-alt">edit</i></a>
                        <form style="display: inline-block" method="post" action="{{route('department.destroy', ['department'=>$department->id])}}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm p-0"><i class="" ></i>delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "delete" If you realy want to delete this post.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="post_id" name="post_id" value="">
                    <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@section('scripts')
<!-- Custom styles for this page -->
<link href="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="{{asset('public')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public')}}/js/demo/datatables-demo.js"></script>

@endsection

@endsection
