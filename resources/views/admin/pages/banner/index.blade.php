@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Banner
                                <a href="{{route('banner.create')}}" class="float-right btn btn-success btn-sm">Add New</a>
                            </h6>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fas fa-table"></i>
                                Data Table Example</div>
                            <div class="card-body">

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

                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($banner as $tag)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$tag->title}}</td>

                                            <td class="text-right">
                                                <a href="{{ route('room.show', ['tag' =>$tag->id])}}" title="show">
                                                    show</i>
                                                </a>


                                                <a href="{{route('room.edit', ['tag'=>$tag->id])}}" class="btn btn-round btn-warning btn-icon btn-sm "><i class="far fa-calendar-alt">edit</i></a>
                                                <form style="display: inline-block" method="post" action="{{route('tag.destroy', ['tag'=>$tag->id])}}" >
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
