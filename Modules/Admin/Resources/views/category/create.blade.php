@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li><a href="{{ route('admin.get.list.category') }}" title="Category">Category</a></li>
            <li class="active">Create</li>
        </ol>
    </div>
    <div>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="name">Category name:</label>
                <input placeholder="Category name" type="text" name="name" value="{{ old('name') }}"
                       class="form-control" id="category_name">
                @if($errors->has('name'))
                    <div class="error-text">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Category icon:</label>
                <input placeholder="Icon" type="text" name="icon" value="{{ old('icon') }}" class="form-control"
                       id="category_icon">
                @if($errors->has('icon'))
                    <div class="error-text">{{ $errors->first('icon') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="c_title_seo">Category icon:</label>
                <input placeholder="Meta Title" type="text" name="c_title_seo" value="{{ old('c_title_seo') }}"
                       class="form-control" id="c_title_seo">
            </div>
            <div class="form-group">
                <label for="c_description_seo">Category icon:</label>
                <input placeholder="Meta Description" type="text" name="c_description_seo"
                       value="{{ old('c_description_seo') }}" class="form-control" id="c_description_seo">
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
