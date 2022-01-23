@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Customer
                                <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="{{route('customer.update', ['customer'=>$customer->id])}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Full Name <span class="text-danger">*</span></th>
                                            <td><input value="{{$customer->full_name}}" name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Email <span class="text-danger">*</span></th>
                                            <td><input value="{{$customer->email}}" name="email" type="email" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Mobile <span class="text-danger">*</span></th>
                                            <td><input value="{{$customer->mobile}}" name="mobile" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input name="photo" type="file" />
                                                <input type="hidden" name="photo" value="{{$customer->photo}}" />
                                                <img width="100" src="{{ asset('imgs/thumb').'/'.$customer->photo }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><textarea name="address" class="form-control">{{$customer->address}}</textarea></td>
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
                <!-- /.container-fluid -->

@endsection
