@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <!-- title -->
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <!-- status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="URL" value="{{ old('status') }}">
                </div>

                <!-- slug -->
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ old('slug') }}">
                    @if($errors->has('slug'))
                        <span class="help-block">{{ $errors->first('slug') }}</span>
                    @endif
                </div>

                <!-- request_method -->
                <div class="form-group{{ $errors->has('request_method') ? ' has-error' : '' }}">
                    <label for="request-method">Slug</label>
                    <select id="request-method" name="request-method" class="form-control">
                        <option value="1">GET</option>
                        <option value="2">POST</option>
                    </select>
                    @if($errors->has('request_method'))
                        <span class="help-block">{{ $errors->first('request_method') }}</span>
                    @endif
                </div>

                <!-- show_in_menu -->
                <div class="form-group{{ $errors->has('show_in_menu') ? ' has-error' : '' }}">
                    <label for="show-in-menu">Url</label>
                    <input id="show-in-menu" name="show-in-menu" type="checkbox">
                    @if($errors->has('show_in_menu'))
                        <span class="help-block">{{ $errors->first('show_in_menu') }}</span>
                    @endif
                </div>

                <!-- Description -->
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection