@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Insurance Policies</h2>
    <a href="{{ route('policies.create') }}" class="btn btn-primary mb-3">Add New Policy</a>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Policy Name</th>
                <th>Description</th>
                <th>Premium</th>
                <th>Duration (Months)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($policies as $policy)
            <tr>
                <td>{{ $policy->id }}</td>
                <td>{{ $policy->policy_name }}</td>
                <td>{{ $policy->description }}</td>
                <td>{{ $policy->premium }}</td>
                <td>{{ $policy->duration }}</td>
                <td>
                    <a href="{{ route('policies.edit', $policy->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('policies.destroy', $policy->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection