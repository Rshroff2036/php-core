@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Policy</h2>

    <form action="{{ route('policies.update', $policy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="policy_name">Policy Name</label>
            <input type="text" name="policy_name" class="form-control" value="{{ $policy->policy_name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $policy->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="premium">Premium</label>
            <input type="number" step="0.01" name="premium" class="form-control" value="{{ $policy->premium }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="duration">Duration (Months)</label>
            <input type="number" name="duration" class="form-control" value="{{ $policy->duration }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Policy</button>
        <a href="{{ route('policies.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection