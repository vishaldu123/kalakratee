@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')
    <h1>Create User</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter User Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="bios">Bio</label>
                    <textarea class="form-control" id="bios" name="bios" rows="4" placeholder="Enter bio"></textarea>
                </div>
                <div class="form-group">
                    <label for="profile_picture">Profile Picture</label>
                    <input type="text" class="form-control" id="profile_picture" name="profile_picture" placeholder="Enter profile picture URL">
                </div>
                <div class="form-group">
                    <label for="payment_qr_code">Payment QR Code</label>
                    <input type="text" class="form-control" id="payment_qr_code" name="payment_qr_code" placeholder="Enter payment QR code">
                </div>
                <div class="form-group">
                    <label for="facebook_id">Facebook ID</label>
                    <input type="text" class="form-control" id="facebook_id" name="facebook_id" placeholder="Enter Facebook ID">
                </div>
                <div class="form-group">
                    <label for="instagram_id">Instagram ID</label>
                    <input type="text" class="form-control" id="instagram_id" name="instagram_id" placeholder="Enter Instagram ID">
                </div>
                <div class="form-group">
                    <label for="youtube_id">YouTube ID</label>
                    <input type="text" class="form-control" id="youtube_id" name="youtube_id" placeholder="Enter YouTube ID">
                </div>
                <div class="form-group">
                    <label for="watermark">Watermark</label>
                    <input type="text" class="form-control" id="watermark" name="watermark" placeholder="Enter watermark">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
        </form>
    </div>
@stop
