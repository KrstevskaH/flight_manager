<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-primary">Aircraft Categories</h2>
    </x-slot>

    <div class="container my-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">
            &larr; Back to Dashboard
        </a>

        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="{{ route('aircraft.airbus') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 hover:shadow-lg transition duration-300">
                        <img src="{{ asset('images/airbus.jpg') }}" 
                             class="card-img-top" 
                             style="height:200px; object-fit:cover;" 
                             alt="Airbus">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold text-dark">Airbus</h5>
                            <p class="text-muted mb-0">Click to see all Airbus aircrafts</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>