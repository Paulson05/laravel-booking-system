@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->
<div class="row py-lg-2">
    <div class="col-md-6 mt-5">
        <button class="btn btn-primary btn-lg float-md-left" role="button" aria-pressed="true">List of  staff payroll</button>
    </div>
    <div class="col-md-6 mt-5">
        <a href="{{route('staff.create')}}" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Create New Staffpayment</a>
    </div>

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
                    <th>S/n</th>
                    <th>Name</th>
                    <th>department</th>
                    <th>photo</th>
                    <th>bio</th>
                    <th>salary_type</th>
                    <th>salary_amount</th>
                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>S/n</th>
                    <th>Name</th>
                    <th>department</th>
                    <th>photo</th>
                    <th>bio</th>
                    <th>salary_type</th>
                    <th>salary_amount</th>

                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$staff->full_name}}</td>
                    <td>{{$staff->department->title}}</td>
                    <td><img src="{{asset('imgs/thumb').'/'.$staff->photo}}" width="50"></td>

                    <td>{{$staff->bio}}</td>
                    <td>{{$staff->salary_type}}</td>
                    <td>{{$staff->salary_amt}}</td>
                    <td class="text-right">
                        <a href="{{ route('staff.show', ['staff' =>$staff->id])}}" title="show">
                            show</i>
                        </a>


                        <a href="{{route('staff.edit', ['staff'=>$staff->id])}}" class="btn btn-round btn-warning btn-icon btn-sm "><i class="far fa-calendar-alt">edit</i></a>
                        <form style="display: inline-block" method="post" action="{{route('staff.destroy', ['staff'=>$staff->id])}}" >
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
