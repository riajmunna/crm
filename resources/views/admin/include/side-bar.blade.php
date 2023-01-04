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
        @if(Auth::user()->user_type==1)
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#agent-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-circle"></i><span>Agent</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="agent-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('add.agent')}}">
                            <i class="bi bi-plus-circle"></i><span>Add Agent</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('manage.agent')}}">
                            <i class="bi bi-pencil-square"></i><span>Manage Agent</span>
                        </a>
                    </li>
                </ul>
            </li>

        @endif
        @if(Auth::user()->user_type==1 || Auth::user()->user_type==2)
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#employee-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-bounding-box"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
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
        @endif

        @if(Auth::user()->user_type==1 || Auth::user()->user_type==2 || Auth::user()->user_type==3)
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Customer-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-badge-fill"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
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
        @endif




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
            <a class="nav-link collapsed" data-bs-target="#task-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list-task"></i><span>Tasks</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="task-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-envelope"></i><span>SMS</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-envelope"></i><span>Email</span>
                    </a>
                </li>
            </ul>
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
        @if(Auth::user()->user_type==1)
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#User-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-badge-fill"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="User-nav" class="nav-content collapse @if(Route::current()->getName() == 'add.user' || Route::current()->getName() == 'manage.user') show @endif" data-bs-parent="#sidebar-nav">
                <li class='nav-item'>
                    <a href="{{route('add.user')}}">
                        <i class="bi bi-plus-circle"></i><span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage.user')}}">
                        <i class="bi bi-pencil-square"></i><span>Manage User</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Setting-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear-fill"></i><span>Setting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('manage.batch')}}">
                        <i class="bi bi-pencil-square"></i><span>Batch Setup</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>

</aside>
