<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-primary">My Profile</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg text-center">
    
    {{-- PROFILE IMAGE --}}
    <div class="mb-4">
        <img
            src="{{ auth()->user()->avatar
                ? asset('storage/avatars/' . auth()->user()->avatar)
                : asset('images/default-avatar.png') }}"
            class="rounded-circle shadow"
            width="140"
            height="140"
            style="object-fit: cover;"
        >
    </div>

    <div class="max-w-xl mx-auto text-start">
        @include('profile.partials.update-profile-information-form')
    </div>
</div>


            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
