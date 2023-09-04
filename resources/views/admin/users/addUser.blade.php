@extends('layouts.app')
{{-- @extends('admin.layouts') --}}

@section('content')
<div class="container">
    <h1>Add User</h1>

    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Add more fields as needed for user attributes -->

        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
@endsection
