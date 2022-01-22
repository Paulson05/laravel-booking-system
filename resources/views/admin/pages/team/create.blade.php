@extends('admin.template.master')
@section('body')

<div class="row py-lg-2">
    <div class="col-md-6 mt-5">
        <h2>Create Aops</h2>
    </div>



</div>

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
            <form method="POST" action="{{route('team.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="">
                </div>
                <div class="form-group">
                    <label for="title">job title</label>
                    <input type="text" name="job_title" class="form-control" placeholder="job_title">

                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>image</label>
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
                <div class="form-group">
                    <label for="title">Instagram account</label>
                    <input type="text" name="instagram_acc" class="form-control" id="instagram_acc" placeholder="instagram_acc" value="">
                </div>
                <div class="form-group">
                    <label for="title">Facebook account</label>
                    <input type="text" name="facebook_acc" class="form-control" id="facebook_acc" placeholder="facebook_acc" value="">
                </div>
                <div class="form-group">
                    <label for="title">twitter account</label>
                    <input type="text" name="twitter_acc" class="form-control" id="twitter_acc" placeholder="twitter_acc" value="">
                </div>
                <div class="form-group pt-2">
                   <button class="btn btn-outline-success">submit</button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection
