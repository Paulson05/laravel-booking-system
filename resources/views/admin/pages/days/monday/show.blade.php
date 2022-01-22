@extends('admin.template.master')
@section('body')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <div class="card card-user">
                <div class="image">
                    <img src="{{asset('backend/assets/img/bg5.jpg')}}" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{$monday->image}}" alt="...">
                            <h5 class="title">{{$monday->programme}}</h5>
                        </a>
                        <p class="description">
                            {{$monday->host}}
                        </p>
                    </div>
                    <p class="description text-center">
                        {{$monday->time}}
                    </p>

                </div>
                <hr>
                <div class="button-container">
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-square"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-square"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
