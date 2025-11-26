<x-app-layout>
    <x-slot name="header">
        <h2>Edit Flight</h2>
    </x-slot>

    <form method="POST" action="{{ route('flights.update', $flight) }}">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label>Flight number</label>
            <input class="form-control" name="flight_number" value="{{ $flight->flight_number }}">
        </div>
        <div class="mb-2">
            <label>Airline</label>
            <input class="form-control" name="airline" value="{{ $flight->airline }}">
        </div>
        <div class="mb-2">
            <label>Origin</label>
            <input class="form-control" name="origin" value="{{ $flight->origin }}">
        </div>
        <div class="mb-2">
            <label>Destination</label>
            <input class="form-control" name="destination" value="{{ $flight->destination }}">
        </div>
        <div class="mb-2">
            <label>Aircraft</label>
            <input class="form-control" name="aircraft" value="{{ $flight->aircraft }}">
        </div>
        <div class="mb-2">
            <label>Departure Time</label>
            <input type="datetime-local" class="form-control" name="departure_time" value="{{ $flight->departure_time }}">
        </div>
        <div class="mb-2">
            <label>Arrival Time</label>
            <input type="datetime-local" class="form-control" name="arrival_time" value="{{ $flight->arrival_time }}">
        </div>
        <button class="btn btn-success mt-2" type="submit">Update</button>
    </form>
</x-app-layout>
