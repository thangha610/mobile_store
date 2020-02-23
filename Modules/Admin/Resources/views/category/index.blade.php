@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">List</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Category Management <a class="btn btn-primary pull-right" href="{{ route('admin.get.create.category') }}">Add
                category</a></h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Title Seo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->c_name}}</td>
                        <td>{{$category->c_title_seo}}</td>
                        <td>{{$category->c_active}}</td>
                        <td>
                            <a href="{{ route('admin.get.edit.category', $category->id) }}" class="btn btn-primary">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@stop
