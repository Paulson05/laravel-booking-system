@extends('admin.template.master')
@section('body')

<h5 class="mt-6">Create show for Monday</h5>

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
            <form method="POST" action="{{route('tuesday.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Programme</label>
                    <input type="text" name="programme" class="form-control" id="title" placeholder="programme..." value="{{ old('programme') }}">
                </div>
                <div class="form-group">
                    <label for="title">Host</label>
                    <input type="text" name="host" class="form-control" id="title" placeholder="host..." value="{{ old('host') }}">
                </div>
                <div class="form-group">
                    <label for="title">Time</label>
                    <input type="text" name="time" class="form-control" id="title" placeholder="Time..." value="{{ old('time') }}">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>host pics</label>
                        <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose
                                                 </a>
                                               </span>
                            <input id="thumbnail"  class="form-control" type="text" name="image">
                        </div>
                        <div id="holder"  style="margin-top:15px;max-height:200px;"></div>
                    </div>
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
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection
