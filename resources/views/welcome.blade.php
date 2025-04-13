@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Pool Billiard Association - Table Booking</h1>
    <div class="row">
        @for ($i = 1; $i <= 8; $i++)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Table {{ $i }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Available Booking Slots:</p>
                        <ul class="list-group">
                            @foreach (['10AM', '12PM', '2PM', '4PM', '6PM', '8PM'] as $slot)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $slot }}
                                    <button class="btn btn-sm btn-outline-success">Book</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
