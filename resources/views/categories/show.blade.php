@extends('adminlte::page')

@section('title', 'Category Details')

@section('content_header')
    <h1>Category Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $category->name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Name:</strong> {{ $category->name }}</li>
                <li><strong>Description:</strong> {{ $category->description }}</li>
                <li><strong>Parent Category:</strong>
                    @if($category->parentCategory)
                        {{ $category->parentCategory->name }}
                    @else
                        N/A
                    @endif
                </li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit Category</a>
        </div>
    </div>
@stop
