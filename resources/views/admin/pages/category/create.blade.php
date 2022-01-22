@extends('admin.template.master')
@section('body')

<h5 class="mt-6">Create New Post</h5>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if(Session::has('success'))
<p class="text-success">{{session('success')}}</p>
@endif

<div class="container">
   <div class="card">
       <div class="card-body">
           <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="title">Title</label>
                   <input type="text" name="name" class="form-control" id="title" placeholder="Title..." value="{{ old('title') }}">
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
