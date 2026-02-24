<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-warning text-center">Concorde – Supersonic Legend</h2>
    </x-slot>

    <div class="container my-5">

        <div class="text-center mb-4">
            <a href="{{ route('aircraft.index') }}" class="btn btn-outline-secondary">
                &larr; Back to Aircraft Categories
            </a>
        </div>

        @foreach($aircrafts as $ac)
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                        
                        <img src="{{ asset($ac['image']) }}" 
                             class="w-100"
                             style="height:450px; object-fit:cover;"
                             alt="{{ $ac['model'] }}">

                        <div class="card-body p-4">

                            <h3 class="fw-bold text-center mb-3">
                                {{ $ac['model'] }}
                            </h3>

                            <div class="row text-center mb-3">
                                <div class="col-md-4">
                                    <p class="mb-1"><strong>Engines</strong></p>
                                    <p>{{ $ac['engines'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-1"><strong>Max Speed</strong></p>
                                    <p class="text-danger fw-bold">{{ $ac['max_speed'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-1"><strong>Range</strong></p>
                                    <p>{{ $ac['range'] }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="text-center">
                                <p><strong>Seats:</strong> {{ $ac['seats'] }}</p>
                                <p class="mt-3 text-muted">
                                    {{ $ac['description'] }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>