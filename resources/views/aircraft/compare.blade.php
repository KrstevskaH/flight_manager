<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-primary">Compare Aircraft</h2>
    </x-slot>

    <div class="container my-4">

        <a href="{{ route('aircraft.index') }}" class="btn btn-secondary mb-3">
            &larr; Back to Aircraft Categories
        </a>

        {{-- Error message --}}
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Form for selecting aircraft --}}
        <form action="{{ route('aircraft.compare') }}" method="POST">
            @csrf
            <div class="row mb-4">
                @foreach($aircrafts as $ac)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 shadow-sm rounded-4">
                            <img src="{{ asset($ac['image']) }}" class="card-img-top" style="height:150px; object-fit:cover;" alt="{{ $ac['model'] }}">
                            <div class="card-body text-center">
                                <h6 class="card-title fw-semibold">{{ $ac['model'] }}</h6>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="aircrafts[]" value="{{ $ac['id'] }}">
                                    <label class="form-check-label">Select</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Compare Selected Aircraft</button>
        </form>

        {{-- Comparison table --}}
        @if(isset($aircrafts) && count($aircrafts) == 2)
            <div class="mt-5">
                <h4>Comparison</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            @foreach($aircrafts as $ac)
                                <th>{{ $ac['model'] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Manufacturer</td><td>{{ $aircrafts[0]['manufacturer'] }}</td><td>{{ $aircrafts[1]['manufacturer'] }}</td></tr>
                        <tr><td>Engines</td><td>{{ $aircrafts[0]['engines'] }}</td><td>{{ $aircrafts[1]['engines'] }}</td></tr>
                        <tr><td>Max Speed</td><td>{{ $aircrafts[0]['max_speed'] }}</td><td>{{ $aircrafts[1]['max_speed'] }}</td></tr>
                        <tr><td>Range</td><td>{{ $aircrafts[0]['range'] }}</td><td>{{ $aircrafts[1]['range'] }}</td></tr>
                        <tr><td>Seats</td><td>{{ $aircrafts[0]['seats'] }}</td><td>{{ $aircrafts[1]['seats'] }}</td></tr>
                        <tr><td>Description</td><td>{{ $aircrafts[0]['description'] }}</td><td>{{ $aircrafts[1]['description'] }}</td></tr>
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</x-app-layout>