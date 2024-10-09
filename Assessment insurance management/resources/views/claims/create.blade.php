@extends('layouts.app')

@section('content')
<div class="container">
    <h2>File a New Claim</h2>

    <form action="{{ route('claims.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="policy_id">Policy</label>
            <select name="policy_id" class="form-control" required>
                <option value="">Select Policy</option>
                @foreach($policies as $policy)
                <option value="{{ $policy->id }}">{{ $policy->policy_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="claim_reason">Claim Reason</label>
            <textarea name="claim_reason" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Claim</button>
        <a href="{{ route('claims.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection