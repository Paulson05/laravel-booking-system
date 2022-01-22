@extends('admin.template.master')
@section('body')

<h1>Create new Role</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
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
                <form method="POST" action="{{route('roles.store')}}">
                  @csrf

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="role_name">Role name</label>
                            <input type="text" name="role_name" class="form-control" id="role_name" placeholder="Role name..." value="{{ old('role_name') }}"
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="role_slug">Role Slug</label>
                            <input type="text" name="role_slug" tag="role_slug" class="form-control" id="role_slug" placeholder="Role Slug..." value="{{ old('role_slug') }}" required>
                        </div>
                    </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class="form-group" >
                                   <label for="roles_permissions">Add Permissions</label>
                                   <input type="text" data-role="tagsinput" name="roles_permissions" class="form-control" id="roles_permissions" value="{{ old('roles_permissions') }}">
                               </div>
                           </div>


                    <div class="form-group pt-2">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


@section('css_role_page')
    <link rel="stylesheet" href="/css/admin/bootstrap-tagsinput.css">
@endsection

@section('js_role_page')
    <script src="/js/admin/bootstrap-tagsinput.js"></script>

    <script>

        $(document).ready(function(){
            $('#role_name').keyup(function(e){
                var str = $('#role_name').val();
                str = str.replace(/\W+(?!$)/g, '-').toLowerCase();//rplace stapces with dash
                $('#role_slug').val(str);
                $('#role_slug').attr('placeholder', str);
            });
        });

    </script>

@endsection

@endsection
