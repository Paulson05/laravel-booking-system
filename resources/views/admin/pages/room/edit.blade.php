@extends('admin.template.master')
@section('body')

<h1>Create New Post</h1>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('room.update', ['room'=>$room->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $room->title }}" >
                </div>

                <div class="form-group pt-2">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    CKEDITOR.replace( 'post_content' );
</script>

@endsection
