<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-success"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('appointments.index') }}" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt text-success"></i>
        <p>Appointments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('doctors.index') }}" class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-md text-success"></i>
        <p>Doctors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bell text-success"></i>
        <p>Notifications</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line text-success"></i>
        <p>Predictions</p>
    </a>
</li>
