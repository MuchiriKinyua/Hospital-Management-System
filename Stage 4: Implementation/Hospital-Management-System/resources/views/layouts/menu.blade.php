<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-orange"></i>
        <p>Admin Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-md text-orange"></i>
        <p>Doctor Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-pills text-orange"></i>
        <p>Pharmacy Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-desktop text-orange"></i>
        <p>Reception Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-calculator text-orange"></i>
        <p>Accountant Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users text-orange"></i>
        <p>H.R Dashboard</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('doctors*') || Request::is('notes*') || Request::is('performances*') || Request::is('schedules*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('doctors*') || Request::is('notes*') || Request::is('performances*') || Request::is('schedules*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-md text-orange"></i>
        <p>
            Doctor Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('doctors.index') }}" class="nav-link {{ Request::is('doctors') || Request::is('doctors/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-md text-success"></i>
                <p>Doctors</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('notes.index') }}" class="nav-link {{ Request::is('doctor-notes') || Request::is('doctor-notes/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-sticky-note text-success"></i>
                <p>Doctor Notes</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('schedules.index') }}" class="nav-link {{ Request::is('doctor-schedules') || Request::is('doctor-schedules/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-alt text-success"></i>
                <p>Doctor Schedules</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('performances.index') }}" class="nav-link {{ Request::is('performances*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-md text-success"></i>
                <p>Doctors Performances</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('patients*') || Request::is('records*') || Request::is('results*') || Request::is('prescriptions*') || Request::is('admissions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('patients*') || Request::is('records*') || Request::is('results*') || Request::is('prescriptions*') || Request::is('admissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-injured text-orange"></i>
        <p>
            Patient Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-injured text-success"></i>
                <p>Patients</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('records.index') }}" class="nav-link {{ Request::is('records*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-medical text-success"></i>
                <p>Medical Records</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('results.index') }}" class="nav-link {{ Request::is('results*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-vial text-success"></i>
                <p>Lab Results</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('prescriptions.index') }}" class="nav-link {{ Request::is('prescriptions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-pills text-success"></i>
                <p>Prescriptions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admissions.index') }}" class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-procedures text-success"></i>
                <p>Admissions</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('staff*') || Request::is('nurses*') || Request::is('technicians*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('staff*') || Request::is('nurses*') || Request::is('technicians*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users text-orange"></i>
        <p>
            Staff Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('staff.index') }}" class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users text-success"></i>
                <p>Staff</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('nurses.index') }}" class="nav-link {{ Request::is('nurses*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-nurse text-success"></i>
                <p>Nurses</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('technicians.index') }}" class="nav-link {{ Request::is('technicians*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-microscope text-success"></i>
                <p>Technicians</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('billings*') || Request::is('invoices*') || Request::is('insurances*') || Request::is('payments*') ||  Request::is('methods*') || Request::is('expenses*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('billings*') || Request::is('invoices*') || Request::is('insurances*') || Request::is('payments*') || Request::is('methods*') ||  Request::is('expenses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-invoice-dollar text-orange"></i>
        <p>
            Finance Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('billings.index') }}" class="nav-link {{ Request::is('billings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-invoice-dollar text-success"></i>
                <p>Billing</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('invoices.index') }}" class="nav-link {{ Request::is('invoices*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-receipt text-success"></i>
                <p>Invoices</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('insurances.index') }}" class="nav-link {{ Request::is('insurances*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-medical text-success"></i>
                <p>Insurance</p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{ route('expenses.index') }}" class="nav-link {{ Request::is('expenses*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-wallet text-success"></i>
                <p>Expenses</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-credit-card text-success"></i>
                <p>Payments</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('methods.index') }}" class="nav-link {{ Request::is('methods*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-credit-card text-success"></i>
                <p>Payment Methods</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('reports*') || Request::is('predictions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('reports*') || Request::is('predictions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-pie text-orange"></i>
        <p>
            Reports & Analytics
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('reports.index') }}" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-bar text-success"></i>
                <p>Reports</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-line text-success"></i>
                <p>Predictions</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('wards*') || Request::is('pharmacies*') || Request::is('departments*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('wards*') || Request::is('pharmacies*') || Request::is('departments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-hospital text-orange"></i>
        <p>
            Hospital Facilities
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-building text-success"></i>
                <p>Departments</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('wards.index') }}" class="nav-link {{ Request::is('wards*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bed text-success"></i>
                <p>Wards</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pharmacies.index') }}" class="nav-link {{ Request::is('pharmacies*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-capsules text-success"></i>
                <p>Pharmacies</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('appointments*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt text-orange"></i>
        <p>
            Appointments
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('appointments.index') }}" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-alt text-success"></i>
                <p>Appointments</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('suppliers*') || Request::is('orders*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('suppliers*') || Request::is('orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-boxes text-orange"></i>
        <p>
            Inventory
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-truck text-success"></i>
                <p>Suppliers</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-shopping-cart text-success"></i>
                <p>Orders</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('emergencies*') || Request::is('requests*') || Request::is('notifications*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('emergencies*') || Request::is('requests*') || Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-exclamation-triangle text-orange"></i>
        <p>
            Contacts
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('emergencies.index') }}" class="nav-link {{ Request::is('emergencies*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-phone-alt text-success"></i>
                <p>Emergency Contacts</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('requests.index') }}" class="nav-link {{ Request::is('requests*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tools text-success"></i>
                <p>Maintenance Contacts</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bell text-success"></i>
                <p>Notifications</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('settings*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs text-orange"></i>
        <p>
            Settings
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('settings.index') }}" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog text-success"></i>
                <p>Settings</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('trails*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('trails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shield-alt text-orange"></i>
        <p>
            System Audits
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('trails.index') }}" class="nav-link {{ Request::is('trails*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history text-success"></i>
                <p>Audit Trails</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('users*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog text-orange"></i>
        <p>
            Users & Controls
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tag text-success"></i>
                <p>Roles</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key text-success"></i>
                <p>Permissions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user text-success"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>



