@extends('adminlte::page')

@section('title', 'User Details')

@section('content_header')
    <h1>User Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $user->name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Name:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Username:</strong> {{ $user->username }}</li>
                <li><strong>Bio:</strong> {{ $user->bios }}</li>
                <li><strong>Profile Picture:</strong> {{ $user->profile_picture }}</li>
                <li><strong>Payment QR Code:</strong> {{ $user->payment_qr_code }}</li>
                <li><strong>Facebook ID:</strong> {{ $user->facebook_id }}</li>
                <li><strong>Instagram ID:</strong> {{ $user->instagram_id }}</li>
                <li><strong>YouTube ID:</strong> {{ $user->youtube_id }}</li>
                <li><strong>Watermark:</strong> {{ $user->watermark }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
        </div>
    </div>
@stop
