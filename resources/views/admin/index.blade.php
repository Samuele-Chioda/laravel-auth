@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
