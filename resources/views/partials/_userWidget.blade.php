<!-- Right navbar links -->
<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="flag-icon flag-icon-{{ app()->getLocale() === 'en' ? 'gb' : 'fr' }}"></i> {{ __('Language') }}
      </a>
      <div class="dropdown-menu dropdown-menu-right p-0">
      <a class="dropdown-item{{ app()->getLocale() === 'en' ? ' active' : '' }}" href="{{ route('language') }}"
          onclick="event.preventDefault();
                        document.getElementById('language-en-form').submit();">
            <i class="flag-icon flag-icon-gb mr-2"></i> {{ __('English') }}
          </a>

          <form id="language-en-form" action="{{ route('language') }}" method="POST" style="display: none;">
              @csrf
              <input type="text" value="en" name="language" />
          </form>

          <a class="dropdown-item{{ app()->getLocale() === 'fr' ? ' active' : '' }}" href="{{ route('language') }}"
          onclick="event.preventDefault();
                        document.getElementById('language-fr-form').submit();">
            <i class="flag-icon flag-icon-fr mr-2"></i> {{ __('French') }}
          </a>

          <form id="language-fr-form" action="{{ route('language') }}" method="POST" style="display: none;">
              @csrf
              <input type="text" value="fr" name="language" />
          </form>
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
        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-primary">
          <img src="{{ asset('img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">

          <p>
            {{ Auth::user()->name }}
            <small>Member since {{ Auth::user()->created_at->diffForHumans() }}</small>
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