
<!-- Topbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-sticky">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">

      <a class="navbar-brand" href="/">PedalPost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.about') }}">About-Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.contact') }}">Contact Us</a>
          </li>

        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            @guest <!-- Check if user is a guest (not logged in) -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else <!-- If user is logged in -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-pic">
                            <img src="{{ url('img/blog/reshot-bike.svg') }}" alt="Profile Pic">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <x-dropdown-link :href="route('dashboard1')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </ul>
                </li>
            @endguest
        </ul>

      </div>
    </div>
  </nav>
