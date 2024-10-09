@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Claims</h2>
    <a href="{{ route('claims.create') }}" class="btn btn-primary mb-3">File a New Claim</a>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Policy</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($claims as $claim)
            <tr>
                <td>{{ $claim->id }}</td>
                <td>{{ $claim->policy->policy_name }}</td>
                <td>{{ $claim->claim_reason }}</td>
                <td>{{ $claim->claim_status }}</td>
                <td>
                    @if(auth()->user()->role == 'agent' || auth()->user()->role == 'admin')
                    <form action="{{ route('claims.updateStatus', [$claim->id, 'approved']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                    <form action="{{ route('claims.updateStatus', [$claim->id, 'rejected']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                    @else
                    <button class="btn btn-secondary" disabled>Pending Approval</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection