<x-guest-layout>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-5 rounded-4" 
             style="width: 450px; background: rgba(255, 255, 255, 0.3); backdrop-filter: blur(4px);">

            <h2 class="text-center fw-bold text-primary mb-4">Create an Account</h2>
            <p class="text-center text-muted mb-4">Join our platform in just a few steps</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold text-primary fs-5">
                        Name
                    </label>
                    <input id="name" 
                           type="text" 
                           name="name" 
                           value="{{ old('name') }}"
                           required autofocus autocomplete="name"
                           class="form-control form-control-lg border-primary-subtle" 
                           style="background: #f7faff;">
                    <x-input-error :messages="$errors->get('name')" class="text-danger small mt-1" />
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold text-primary fs-5">
                        Email Address
                    </label>
                    <input id="email"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required autocomplete="username"
                           class="form-control form-control-lg border-primary-subtle"
                           style="background: #f7faff;">
                    <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold text-primary fs-5">
                        Password
                    </label>
                    <input id="password"
                           type="password"
                           name="password"
                           required autocomplete="new-password"
                           class="form-control form-control-lg border-primary-subtle"
                           style="background: #f7faff;">
                    <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold text-primary fs-5">
                        Confirm Password
                    </label>
                    <input id="password_confirmation"
                           type="password"
                           name="password_confirmation"
                           required autocomplete="new-password"
                           class="form-control form-control-lg border-primary-subtle"
                           style="background: #f7faff;">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger small mt-1" />
                </div>

                <!-- Submit -->
                <div class="d-grid mb-3">
                    <button type="submit" 
                            class="btn btn-primary btn-lg fw-bold shadow-sm"
                            style="letter-spacing: .5px;">
                        Register
                    </button>
                </div>

                <!-- Login redirect -->
                <div class="text-center mt-2">
                    <span class="text-muted small">Already have an account?</span>
                    <a href="{{ route('login') }}" 
                       class="text-primary fw-semibold small text-decoration-none ms-1">
                        Log in
                    </a>
                </div>

            </form>
        </div>
    </div>

</x-guest-layout>
