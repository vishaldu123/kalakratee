@extends('adminlte::page')

@section('title', 'Add User')

@section('content_header')
    <h1>Add User</h1>
@stop

@section('content')

<h1>Edit User</h1>

<form method="POST" action="{{ route('admin.users.update', $user->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>
    <div class="form-group">
        <label for="bios">Bios</label>
        <textarea class="form-control" id="bios" name="bios"></textarea>
    </div>
    <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" class="form-control" id="profile_picture" name="profile_picture">
    </div>
    <div class="form-group">
        <label for="payment_qr_code">PaymentQR Code</label>
        <input type="file" class="form-control" id="payment_qr_code" name="payment_qr_code">
    </div>
    <div class="form-group">
        <label for="facebook_id">Facebook Id</label>
        <input type="text" class="form-control" id="facebook_id" name="facebook_id" required>
    </div>
    <div class="form-group">
        <label for="instagram_id">Instagram Id</label>
        <input type="text" class="form-control" id="instagram_id" name="instagram_id" required>
    </div>
    <div class="form-group">
        <label for="youtube_id">Youtube Id</label>
        <input type="text" class="form-control" id="youtube_id" name="youtube_id" required>
    </div>
    <div class="form-group">
        <label for="watermark">watermark</label>
        <input type="text" class="form-control" id="watermark" name="watermark" required>
    </div>
    <!-- Add more fields as needed for user attributes -->

    <button type="submit" class="btn btn-primary">Update User</button>
</form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
