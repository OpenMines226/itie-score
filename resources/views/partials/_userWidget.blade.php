<!-- Right navbar links -->
<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="flag-icon flag-icon-gb"></i> {{ __('Language') }}
      </a>
      <div class="dropdown-menu dropdown-menu-right p-0">
        <a href="#" class="dropdown-item active">
          <i class="flag-icon flag-icon-gb mr-2"></i> {{ __('English') }}
        </a>
        <a href="#" class="dropdown-item">
          <i class="flag-icon flag-icon-fr mr-2"></i> {{ __('French') }}
        </a>
      </div>
    </li>

    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    @else
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset('img/avatar.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">Alexander Pierce</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-primary">
          <img src="{{ asset('img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">

          <p>
            {{ Auth::user()->name }}
            <small>Member since Nov. 2012</small>
          </p>
        </li>
        <!-- Menu Body -->
        <!-- Menu Footer-->
        <li class="user-footer">
          <a href="{{ route('home') }}" class="btn btn-default btn-flat">{{ __('Dashboard') }}</a>
          <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </li>
    @endauth
</ul>