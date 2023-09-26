@extends('adminlte::page')

@section('title', 'Collaboration Details')

@section('content_header')
    <h1>Collaboration Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $collaboration->project_name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Project Name:</strong> {{ $collaboration->project_name }}</li>
                <li><strong>Participants:</strong>
                    <ul>
                        @foreach($collaboration->users as $user)
                            <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>
                </li>
                <li><strong>Creation Date:</strong> {{ $collaboration->created_at }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('collaborations.edit', $collaboration->id) }}" class="btn btn-primary">Edit Collaboration</a>
        </div>
    </div>
@stop
