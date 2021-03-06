<nav class="navbar navbar-expand-md navbar-dark bg-primary navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Logistics') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto nav-tabs">
              <!-- Muestra si sl usuario es autenticado. -->
              @auth
                @can ('profile.index')
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profile') }}">Perfil<span class="sr-only">(current)</span></a>
                  </li>
                @endcan
                @can ('roles.index')
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('roles.index') }}">Roles<span class="sr-only">(current)</span></a>
                  </li>
                @endcan
                @can ('users.index')
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios<span class="sr-only">(current)</span></a>
                  </li>
                @endcan
                @can ('profilesEmpl.index')
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profilesEmpl.index') }}">Perfiles Empleados<span class="sr-only">(current)</span></a>
                  </li>
                @endcan
                @can ('profileSales.index')
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profileSales.index') }}">Perfil Ventas<span class="sr-only">(current)</span></a>
                  </li>
                @endcan
              @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li>
                      <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      <i class="material-icons right">exit_to_app</i></a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
