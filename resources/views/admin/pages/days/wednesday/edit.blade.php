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

<form method="POST" action="{{ route('wednesday.update', ['wednesday'=>$wednesday->id]) }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="role_name">programme name</label>
        <input type="text" name="programme" class="form-control" id="role_name" value="{{$wednesday->programme}}" required>
    </div>
    <div class="form-group">
        <label for="role_slug">Host name</label>
        <input type="text" name="host" tag="role_slug" class="form-control" id="role_slug"  value="{{$wednesday->host}}" required>
    </div>
    <div class="form-group" >
        <label for="roles_permissions">Programme time</label>
        <input type="text"  name="time" class="form-control"  value="{{$wednesday->time}}" required>

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
