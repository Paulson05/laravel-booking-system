@extends('admin.template.master')
@section('body')

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room
                <a href="{{route('roomtype.index')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form method="post" action="{{route('roomtype.store')}}">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td>
                                <input name="title" type="text" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><input name="detail" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input name="price" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
