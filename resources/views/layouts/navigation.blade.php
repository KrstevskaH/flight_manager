<body style="
    background: url('{{ asset('images/aviation-logo.png') }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
">

    <!-- Navigation -->
    <nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light bg-light bg-opacity-75 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('dashboard') }}">
                ✈ AviationApp
            </a>
            <button class="navbar-toggler" type="button" @click="open = ! open">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" :class="{'show': open}">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                            class="nav-link btn btn-outline-primary me-2">
                            Dashboard
                        </x-nav-link>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                            <li>
                                <x-dropdown-link :href="route('profile.edit')" class="dropdown-item">
                                    Profile
                                </x-dropdown-link>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="dropdown-item"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Log Out
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page content wrapper -->
    <div class="container mt-5">
        <div class="bg-white bg-opacity-75 rounded p-4 shadow-lg">
            {{ $slot }}
        </div>
    </div>

</body>
