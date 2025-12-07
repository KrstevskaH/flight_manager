<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-primary">Aircraft</h2>
    </x-slot>

    <div class="container my-4">
        <div class="row">
            @foreach($aircrafts as $ac)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <img src="{{ asset($ac['image']) }}" class="card-img-top"
                             style="height:200px; object-fit:cover;" alt="Aircraft">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $ac['model'] }}</h5>
                            <p class="mb-1"><strong>Manufacturer:</strong> {{ $ac['manufacturer'] }}</p>
                            <p class="mb-1"><strong>Engines:</strong> {{ $ac['engines'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
