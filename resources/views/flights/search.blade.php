<x-app-layout>
    <x-slot name="header">
        <h3>Search Flight (Flightradar API)</h3>
    </x-slot>

    <form method="GET" action="{{ route('flights-search') }}" class="mb-3 d-flex">
        <input class="form-control w-25 me-2" name="flight" placeholder="LH1216">
        <button class="btn btn-primary">Search</button>
    </form>

    @if(isset($flightData))
        <div class="card mt-3 p-3">
            <h4>{{ $flightData['flight']['ident'] ?? 'Unknown Flight' }}</h4>
            <p><strong>From:</strong> {{ $flightData['flight']['airport']['origin']['name'] ?? '-' }}</p>
            <p><strong>To:</strong> {{ $flightData['flight']['airport']['destination']['name'] ?? '-' }}</p>
            <p><strong>Aircraft:</strong> {{ $flightData['flight']['aircraft']['model']['text'] ?? '-' }}</p>
        </div>
    @endif
</x-app-layout>
