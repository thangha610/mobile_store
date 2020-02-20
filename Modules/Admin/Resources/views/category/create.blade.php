@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Create</li>
        </ol>
    </div>
    <div>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="name">Category name:</label>
                <input placeholder="Category name" type="text" name="name" value="{{ old('name') }}" class="form-control" id="category_name">
                @if($errors->has('name'))
                    <div class="error-text">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Category icon:</label>
                <input placeholder="Icon" type="text" name="icon" value="{{ old('icon') }}" class="form-control" id="category_icon">
                @if($errors->has('icon'))
                    <div class="error-text">{{ $errors->first('icon') }}</div>
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label for="hot"><input type="checkbox" name="hot"> Trending </label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
@stop
