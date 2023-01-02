<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-mortarboard-fill"></i>
                <span>Attendance</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Customer-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Customer-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add.customer')}}">
                        <i class="bi bi-plus-circle"></i><span>Add Customer</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage.customer')}}">
                        <i class="bi bi-pencil-square"></i><span>Manage Customer</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#employee-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="employee-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add.employee')}}">
                        <i class="bi bi-plus-circle"></i><span>Add Employee</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage.employee')}}">
                        <i class="bi bi-pencil-square"></i><span>Manage Employee</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-bell"></i>
                <span>Notice Board</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-cash-coin"></i>
                <span>Payroll</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-menu-button-wide"></i>
                <span>Project</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-boombox"></i>
                <span>Leads</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-bar-chart"></i>
                <span>Reports</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-star-fill"></i>
                <span>CRM</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-gear-fill"></i>
                <span>Setting</span>
            </a>
        </li>

    </ul>

</aside>
