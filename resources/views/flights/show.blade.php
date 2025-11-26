<x-app-layout>
    <x-slot name="header">
        <h2>Flight: {{ $flight->flight_number }}</h2>
    </x-slot>

    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Airline:</strong> {{ $flight->airline }}</li>
        <li class="list-group-item"><strong>Origin:</strong> {{ $flight->origin }}</li>
        <li class="list-group-item"><strong>Destination:</strong> {{ $flight->destination }}</li>
        <li class="list-group-item"><strong>Aircraft:</strong> {{ $flight->aircraft }}</li>
        <li class="list-group-item"><strong>Departure:</strong> {{ $flight->departure_time }}</li>
        <li class="list-group-item"><strong>Arrival:</strong> {{ $flight->arrival_time }}</li>
    </ul>

    <a class="btn btn-primary mt-3" href="{{ route('flights.index') }}">Back</a>
</x-app-layout>
