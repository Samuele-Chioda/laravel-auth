@extends('layouts.app')

@section('title', 'Add New Project')

@section('content')
<div class="container">
    <h1>Add New Project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>
</div>
@endsection
