@extends('admin.template.master')
@section('body')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Name: {{$tag['title']}}</h3>

        </div>
        <div class="card-body">
            <h5 class="card-title">Permissions</h5>
            <p class="card-text">
                ...........
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

@endsection
