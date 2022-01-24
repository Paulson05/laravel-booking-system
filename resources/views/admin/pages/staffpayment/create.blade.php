@extends('admin.template.master')
@section('body')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Staff Payment
                                <a href="{{route('staffpayment.index')}}" class="float-right btn btn-success btn-sm">View All</a>
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
                                <form method="post" action="{{route('staffpayment.store')}}">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Amount</th>
                                            <td><input name="amount" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td><input name="payment_date" class="form-control" type="date" /></td>
                                        </tr>
                                        <tr>
                                            <th>Select staff</th>
                                            <td>
                                                <select name="staff_id" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    @foreach($staffs as $dp)
                                                    <option value="{{$dp->id}}">{{$dp->full_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
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
