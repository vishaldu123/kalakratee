@extends('adminlte::page')

@section('title', 'Group Details')

@section('content_header')
    <h1>Group Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $group->name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Name:</strong> {{ $group->name }}</li>
                <li><strong>Description:</strong> {{ $group->description }}</li>
                <li><strong>Members:</strong>
                    <ul>
                        @foreach($group->users as $user)
                            <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>
                </li>
                <li><strong>Creation Date:</strong> {{ $group->created_at }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary">Edit Group</a>
        </div>
    </div>
@stop
