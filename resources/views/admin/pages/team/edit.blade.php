@extends('admin.template.master')
@section('body')

<h1>Update the Role</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('team.update', ['team'=>$team->id]) }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="role_name">Aop name</label>
        <input type="text" name="name" class="form-control" id="role_name" value="{{$team->name}}" required>
    </div>
    <div class="form-group">
        <label for="role_slug">JOb Title</label>
        <input type="text" name="job_title" tag="role_slug" class="form-control" id="role_slug"  value="{{$team->job_title}}" required>
    </div>
    <div class="form-group" >
        <label for="roles_permissions">Facebook ACC</label>
        <input type="text"  name="roles_permissions" class="form-control"  value="{{$team->facebook_acc}}" required>

    </div>
    <div class="form-group" >
        <label for="roles_permissions">Twitter ACC</label>
        <input type="text"  name="twitter_acc" class="form-control"  value="{{$team->twitter_acc}}" required>

    </div>
    <div class="form-group" >
        <label for="roles_permissions">Instagram Acc</label>
        <input type="text" name="instagram_acc" class="form-control"  value="{{$team->instagram_acc}}" required>

    </div>



    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>

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
