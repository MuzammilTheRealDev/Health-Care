<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" target="_blank" href="{{ route('web.main')}}">
            <span class="align-middle">Health Care</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('showusers') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('showpatients') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Patients</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('show.doctor') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Doctors</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('show.department')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Department</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('show.appointment')}}
                ">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Appointment </span>
                </a>
            </li>
        </ul>
    </div>
</nav>