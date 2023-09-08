@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1>User Profile</h1>
    <h2>{{ $user->name }}</h2>
    
    <h3>Artworks:</h3>
    <ul>
        @foreach ($user->artworks as $artwork)
            <li>{{ $artwork->title }}</li>
        @endforeach
    </ul>

    <h3>Collaborations:</h3>
    <ul>
        @foreach ($user->collaborations as $collaboration)
            <li>{{ $collaboration->project_name }}</li>
        @endforeach
    </ul>

    <h3>Groups:</h3>
    <ul>
        @foreach ($user->groups as $group)
            <li>{{ $group->name }}</li>
        @endforeach
    </ul>

    <h3>Events:</h3>
    <ul>
        @foreach ($user->events as $event)
            <li>{{ $event->name }}</li>
        @endforeach
    </ul>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


