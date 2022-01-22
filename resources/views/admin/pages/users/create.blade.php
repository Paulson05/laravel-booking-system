@extends('admin.template.master')
@section('body')

<h1>Create New  User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>create new user</h5>
                </div>
                <form class="form theme-form" action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="name">User name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name..." value="{{ old('name') }}" required>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6 col-md-6">

                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password..." required minlength="8">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="password_confirmation">Password Confirm</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password..." id="password_confirmation">
                                </div>

                            </div>


                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="email">Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="phone_number" value="{{ old('phone_number') }}">
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="role">Select Role</label>

                                <select class="role form-control" name="role" id="role">
                                    <option value="">Select Role...</option>
                                    @foreach ($roles as $role)
                                    <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            </div>
                            <div class="text-left">
                                <button class="btn btn-primary" type="submit">Submit</button>

                            </div>
                </form>
            </div>

        </div>
    </div>
</div>

@section('js_user_page')

    <script>

        $(document).ready(function(){
            var permissions_box = $('#permissions_box');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');

            permissions_box.hide(); // hide all boxes


            $('#role').on('change', function() {
                var role = $(this).find(':selected');
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');

                permissions_ckeckbox_list.empty();

                $.ajax({
                    url: "{{route('users.create')}}",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug,
                    }
                }).done(function(data) {

                    console.log(data);

                    permissions_box.show();
                    // permissions_ckeckbox_list.empty();

                    $.each(data, function(index, element){
                        $(permissions_ckeckbox_list).append(
                            '<div class="custom-control custom-checkbox">'+
                                '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                                '<label class="custom-control-label" for="'+ element.slug +'">'+ element.name +'</label>'+
                            '</div>'
                        );

                    });
                });
            });
        });

    </script>

@endsection


@endsection
