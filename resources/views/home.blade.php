@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box">

        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <!-- Add more table headers for artwork attributes -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>artwork->id</td>
                            <td>artwork->title</td>
                            <td>artwork->description</td>
                            <!-- Add more table columns for artwork attributes -->
                            <td>
                                edit/Delete
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <!-- Additional CSS styles if needed -->
@stop

@section('js')
    <!-- Additional JavaScript scripts if needed -->
@stop
