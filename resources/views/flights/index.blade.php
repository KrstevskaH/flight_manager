<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>All Flights</h1>
            <a class="btn btn-primary" href="{{ route('flights.create') }}">Add Flight</a>
        </div>
    </x-slot>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>Flight</th>
                <th>Airline</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $f)
            <tr>
                <td>{{ $f->flight_number }}</td>
                <td>{{ $f->airline }}</td>
                <td>{{ $f->origin }}</td>
                <td>{{ $f->destination }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('flights.show', $f) }}">View</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('flights.edit', $f) }}">Edit</a>
                    <form method="POST" action="{{ route('flights.destroy', $f) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
