<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-lg font-semibold mb-4">Сите летови</h3>

                    @if($flights->count() == 0)
                        <p class="text-gray-400">Нема додадено летови.</p>
                    @else
                        <table class="w-full text-left">
                            <thead class="border-b border-gray-600">
                                <tr>
                                    <th class="py-2">Име</th>
                                    <th class="py-2">Од</th>
                                    <th class="py-2">До</th>
                                    <th class="py-2">Акции</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flights as $flight)
                                    <tr class="border-b border-gray-700">
                                        <td class="py-2">{{ $flight->name }}</td>
                                        <td class="py-2">{{ $flight->from }}</td>
                                        <td class="py-2">{{ $flight->to }}</td>
                                        <td class="py-2">
                                            <a href="{{ route('flights.edit', $flight->id) }}" class="text-blue-400 hover:text-blue-600">Edit</a>
                                            |
                                            <a href="{{ route('flights.show', $flight->id) }}" class="text-green-400 hover:text-green-600">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
