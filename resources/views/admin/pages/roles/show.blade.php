@extends('admin.template.master')
@section('body')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Name: {{$role['name']}}</h3>
            <h4>Slug: {{$role['slug']}}</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Permissions</h5>
            <p class="card-text">
                @if ($role->permissions != null)

                @foreach ($role->permissions as $permission)
                <span class="badge badge-secondary">
                                    {{ $permission->name }}
                                </span>
                @endforeach

                @endif
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

@endsection
