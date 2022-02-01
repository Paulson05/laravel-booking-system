@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Testimonier
                                <a href="{{route('testimonies.index')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="container my-4">
                                <h3 class="mb-3">Add Testimonial</h3>
                                @if(Session::has('success'))
                                <p class="text-success">{{session('success')}}</p>
                                @endif
                                <form method="post" action="{{url('customer/save-testimonial')}}">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Testimonial<span class="text-danger">*</span></th>
                                            <td><textarea name="testi_cont" class="form-control" rows="8"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" class="btn btn-primary" /></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
