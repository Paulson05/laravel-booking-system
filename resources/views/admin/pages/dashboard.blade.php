@extends('admin.template.master')
@section('body')

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons ui-2_chat-round"></i>
                                </div>
                                <h3 class="info-title">859</h3>
                                <h6 class="stats-title">Messages</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="now-ui-icons business_money-coins"></i>
                                </div>
                                <h3 class="info-title"><small>$</small>3,521</h3>
                                <h6 class="stats-title">Today Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="now-ui-icons users_single-02"></i>
                                </div>
                                <h3 class="info-title">562</h3>
                                <h6 class="stats-title">Customers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="now-ui-icons objects_support-17"></i>
                                </div>
                                <h3 class="info-title">353</h3>
                                <h6 class="stats-title">Support Requests</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DataTables.net</h4>
                </div>
                <div class="card-body">

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                                <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                                <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                       @endforeach
                        </tbody>
                    </table>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

</div>

@endsection
