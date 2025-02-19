<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-success"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('doctors.index') }}" class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-md text-success"></i>
        <p>Doctors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-injured" style="color: green;"></i>
        <p>Patients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('staff.index') }}" class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users" style="color: green;"></i>
        <p>Staff</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('appointments.index') }}" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt text-success"></i>
        <p>Appointments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pharmacies.index') }}" class="nav-link {{ Request::is('pharmacies*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-capsules" style="color: green;"></i>
        <p>Pharmacies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tests.index') }}" class="nav-link {{ Request::is('tests*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-vial" style="color: green;"></i>
        <p>Tests</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('wards.index') }}" class="nav-link {{ Request::is('wards*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bed" style="color: green;"></i>
        <p>Wards</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('billings.index') }}" class="nav-link {{ Request::is('billings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-credit-card" style="color: green;"></i>
        <p>Billings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('records.index') }}" class="nav-link {{ Request::is('records*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-medical-alt" style="color: green;"></i>
        <p>Records</p>
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

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
        <p>
            Users and Controls
            <i class="fas fa-angle-left right" style="color: green;"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users-cog" style="color: green;"></i>
                <p>Roles</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key" style="color: green;"></i>
                <p>Permissions</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users" style="color: green;"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>