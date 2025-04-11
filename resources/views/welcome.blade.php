<?php
/*
//historic view
@php
    $grouped = $user->details->groupBy('key');
@endphp

@foreach ($grouped as $key => $records)
    <h5>{{ ucfirst(str_replace('_', ' ', $key)) }}</h5>
    <ul>
        @foreach ($records as $record)
            <li>
                @if ($key === 'avatar')
                    <img src="{{ asset('storage/' . $record->value) }}" width="100" class="img-thumbnail me-2 mb-2">
                @else
                    {{ $record->value }}
                @endif
                <small class="text-muted d-block">({{ $record->created_at->format('d M Y, h:i A') }})</small>
            </li>
        @endforeach
    </ul>
@endforeach


@foreach ($user->details as $detail)
    <p>
        <strong>{{ ucfirst(str_replace('_', ' ', $detail->key)) }}:</strong>
        @if ($detail->key === 'avatar')
            <br>
            <img src="{{ asset('storage/' . $detail->value) }}" width="100" class="img-thumbnail">
        @else
            {{ $detail->value }}
        @endif
    </p>
@endforeach


//latest
@php
    $latestDetails = $user->details->sortByDesc('id')->unique('key')->pluck('value', 'key');
@endphp



*/