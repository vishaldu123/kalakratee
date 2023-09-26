@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit User Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="bios">Bio</label>
                    <textarea class="form-control" id="bios" name="bios" rows="4">{{ $user->bios }}</textarea>
                </div>
                <div class="form-group">
                    <label for="profile_picture">Profile Picture</label>
                    <input type="text" class="form-control" id="profile_picture" name="profile_picture" value="{{ $user->profile_picture }}">
                </div>
                <div class="form-group">
                    <label for="payment_qr_code">Payment QR Code</label>
                    <input type="text" class="form-control" id="payment_qr_code" name="payment_qr_code" value="{{ $user->payment_qr_code }}">
                </div>
                <div class="form-group">
                    <label for="facebook_id">Facebook ID</label>
                    <input type="text" class="form-control" id="facebook_id" name="facebook_id" value="{{ $user->facebook_id }}">
                </div>
                <div class="form-group">
                    <label for="instagram_id">Instagram ID</label>
                    <input type="text" class="form-control" id="instagram_id" name="instagram_id" value="{{ $user->instagram_id }}">
                </div>
                <div class="form-group">
                    <label for="youtube_id">YouTube ID</label>
                    <input type="text" class="form-control" id="youtube_id" name="youtube_id" value="{{ $user->youtube_id }}">
                </div>
                <div class="form-group">
                    <label for="watermark">Watermark</label>
                    <input type="text" class="form-control" id="watermark" name="watermark" value="{{ $user->watermark }}">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>
        </form>
    </div>
@stop
