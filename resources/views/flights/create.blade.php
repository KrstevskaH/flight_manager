<x-app-layout>
    <x-slot name="header">
        <h2>Add Flight</h2>
    </x-slot>

    <form method="POST" action="{{ route('flights.store') }}">
        @csrf
        <div class="mb-2">
            <label class="form-label fw-semibold">Flight number</label>
            <input class="form-control" name="flight_number">
        </div>
        <div class="mb-2 position-relative">
            <label class="form-label fw-semibold">Airline</label>
            <input type="text" id="airline" name="airline" class="form-control" autocomplete="off">
<ul id="airline-suggestions" class="list-group position-absolute"></ul>

<script>
const airlineInput = document.getElementById('airline');
const airlineSuggestions = document.getElementById('airline-suggestions');

airlineInput.addEventListener('input', function() {
    const query = this.value;
    if (!query) {
        airlineSuggestions.innerHTML = '';
        return;
    }

    fetch(`/api/airlines?q=${query}`)
        .then(res => res.json())
        .then(data => {
            airlineSuggestions.innerHTML = data.map(a => `<li class="list-group-item list-group-item-action">${a}</li>`).join('');
        });
});

airlineSuggestions.addEventListener('click', function(e){
    if(e.target.tagName === 'LI'){
        airlineInput.value = e.target.textContent;
        airlineSuggestions.innerHTML = '';
    }
});
</script>
        </div>
        <div class="mb-2">
            <label class="form-label fw-semibold">Origin</label>
            <input class="form-control" name="origin">
        </div>
        <div class="mb-2">
            <label class="form-label fw-semibold">Destination</label>
            <input class="form-control" name="destination">
        </div>
        <div class="mb-2">
            <label class="form-label fw-semibold">Aircraft</label>
            <input class="form-control" name="aircraft">
        </div>
        <div class="mb-2">
            <label class="form-label fw-semibold">Departure Time</label>
            <input type="text" name="departure_time" id="departure_time" class="form-control" value="{{ old('departure_time') }}">
        </div>
        <div class="mb-2">
            <label class="form-label fw-semibold">Arrival Time</label>
            <input type="text" name="arrival_time" id="arrival_time" class="form-control" value="{{ old('arrival_time') }}">
        </div>
        <button class="btn btn-success mt-2" type="submit">Save</button>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#departure_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        flatpickr("#arrival_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
</x-app-layout>
