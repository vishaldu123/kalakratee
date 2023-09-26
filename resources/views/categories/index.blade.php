@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Category List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parent Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                @if($category->parentCategory)
                                    {{ $category->parentCategory->name }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
