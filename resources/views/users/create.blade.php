@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create User</h2>

    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        @include('users.form')
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">← Back</a>
            <button type="submit" class="btn btn-success">
                {{ isset($user) ? 'Update ' : 'Create ' }}
            </button>
        </div>
    </form>
</div>
@endsection
