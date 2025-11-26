<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center min-vh-100"
        style="background: url('{{ asset('images/AirbusA380.jpg') }}') no-repeat center center fixed; background-size: cover;">
        <div class="card shadow-lg p-5 rounded-5 text-center" style="width: 420px; background: rgba(255, 255, 255, 0.95);">
            
            <h1 class="fw-bold text-primary mb-3">Welcome</h1>
            <p class="text-muted mb-4">Please log in to your account</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3 text-start">
                    <x-input-label for="email" :value="__('Email')" class="form-label fw-semibold" />
                    <x-text-input id="email" class="form-control form-control-lg border border-primary" type="email" name="email" 
                                  :value="old('email')" required autofocus autocomplete="username" style="background-color: #f9faff;" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3 text-start">
                    <x-input-label for="password" :value="__('Password')" class="form-label fw-semibold" />
                    <x-text-input id="password" class="form-control form-control-lg border border-primary" type="password" name="password" 
                                  required autocomplete="current-password" style="background-color: #f9faff;" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-4 text-start">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                <!-- Login Button -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-success btn-lg fw-bold shadow-sm">
                        {{ __('Log in') }}
                    </button>
                </div>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="text-center mb-2">
                        <a href="{{ route('password.request') }}" class="text-decoration-none text-primary small">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif

                <!-- Register Link -->
                @if (Route::has('register'))
                    <div class="text-center mt-3">
                        <span class="text-muted small">Don't have an account? </span>
                        <a href="{{ route('register') }}" class="text-decoration-none text-primary small fw-semibold">
                            Register
                        </a>
                    </div>
                @endif

            </form>
        </div>
    </div>
</x-guest-layout>
