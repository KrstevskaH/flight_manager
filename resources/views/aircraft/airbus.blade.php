<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-primary">Airbus Models</h2>
    </x-slot>

    <div class="container my-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">
            &larr; Back to Dashboard
        </a>

        <div class="row">
            @foreach($aircrafts as $ac)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 hover:shadow-lg transition duration-300">
                        <img src="{{ asset($ac['image']) }}" class="card-img-top"
                             style="height:200px; object-fit:cover;" alt="{{ $ac['model'] }}">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $ac['model'] }}</h5>
                            <p class="mb-1"><strong>Engines:</strong> {{ $ac['engines'] }}</p>
                            <p class="mb-1"><strong>Max Speed:</strong> {{ $ac['max_speed'] }}</p>

                            <a href="javascript:void(0)" class="text-primary see-more-link">See More</a>

                            <div class="additional-info mt-2" style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease, opacity 0.5s ease; opacity: 0;">
                                <p><strong>Range:</strong> {{ $ac['range'] }}</p>
                                <p><strong>Seats:</strong> {{ $ac['seats'] }}</p>
                                <p><strong>Description:</strong> {{ $ac['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.querySelectorAll('.see-more-link').forEach(link => {
            link.addEventListener('click', function() {
                const additionalInfo = this.nextElementSibling;

                if (additionalInfo.style.maxHeight === '' || additionalInfo.style.maxHeight === '0px') {
                    additionalInfo.style.maxHeight = additionalInfo.scrollHeight + 'px';
                    additionalInfo.style.opacity = 1;
                    this.textContent = 'See Less';
                } else {
                    additionalInfo.style.maxHeight = '0';
                    additionalInfo.style.opacity = 0;
                    this.textContent = 'See More';
                }
            });
        });
    </script>
</x-app-layout>