@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Information</h2>

        <div class="card mb-4">
            <div class="card-body">
                <p><strong>Prefix:</strong> {{ $user->prefixname }}</p>
                <p><strong>First Name:</strong> {{ $user->firstname }}</p>
                <p><strong>Middle Name:</strong> {{ $user->middlename }}</p>
                <p><strong>Last Name:</strong> {{ $user->lastname }}</p>
                <p><strong>Suffix:</strong> {{ $user->suffixname }}</p>
                <p><strong>Username:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Type:</strong> {{ $user->type }}</p>

                @if ($user->photo)
                    <p><strong>Photo:</strong><br>
                        <img src="{{ asset('storage/' . $user->photo) }}" width="120" class="img-thumbnail">
                    </p>
                @endif
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>User Details</h5>
                <small class="text-muted d-block d-none">({{ $user->details->first()->created_at->format('d M Y, h:i A') }})</small>
            </div>
            <div class="card-body">
                @php
                    $details = $user->details->pluck('value', 'key');
                @endphp
        
                @if ($details->isNotEmpty())
                    <p><strong>Full Name:</strong> {{ $details['full_name'] ?? 'N/A' }}</p>
                    <p><strong>Middle Initial:</strong> {{ $details['middle_initial'] ?? 'N/A' }}</p>
                    <p><strong>Gender:</strong> {{ $details['gender'] ?? 'N/A' }}</p>
        
                    @if (!empty($details['avatar']))
                        <p><strong>Avatar:</strong><br>
                            <img src="{{ asset('storage/' . $details['avatar']) }}" width="120" class="img-thumbnail">
                        </p>
                    @endif
                @else
                    <p>No additional details available.</p>
                @endif
            </div>
        </div>
        

        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to User List</a>
    </div>
@endsection
