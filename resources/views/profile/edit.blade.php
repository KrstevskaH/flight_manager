<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
            My Profile
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- PROFILE IMAGE AND INFO --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl text-center">
                <div class="mb-6">
                    <img
                        src="{{ auth()->user()->avatar
                            ? asset('storage/avatars/' . auth()->user()->avatar)
                            : asset('images/default-avatar.png') }}"
                        alt="Profile Avatar"
                        class="mx-auto rounded-full shadow-md"
                        width="140"
                        height="140"
                        style="object-fit: cover;"
                    >
                </div>

                <div class="max-w-xl mx-auto text-left">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- UPDATE PASSWORD --}}
            <div class="p-4 bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- DELETE USER --}}
            <div class="p-4 bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>