<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

    @auth
        <li class="nav-item">
            @if(Auth::user()->usertype == 1)
                <a class="nav-link" href="{{ route('profile.show') }}">Admin Profile</a>
            @else
                <a class="nav-link" href="{{ route('profile.show') }}">User Profile</a>
            @endif
        </li>
    @endauth

</aside>
