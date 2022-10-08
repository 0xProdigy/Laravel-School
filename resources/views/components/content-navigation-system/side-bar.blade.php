<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="{{ asset('./assets/img/avatar.jpg') }}" alt="UserIcon">
                <figcaption class="text-center text-titles">{{ Auth::user()->name }}</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="#!">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-exit-system">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">
            <li>

                @can('student.dashboard')
                    <a href="{{ route('student.home') }}">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                    </a>
                @endcan


                @can('admin.dashboard')
                    <a href="{{ route('admin.home') }}">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                    </a>
                @endcan
            </li>

            @can('admin.dashboard')
                {{-- Section for Admins --}}

                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administration <i
                            class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('admin.periods.index') }}"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>
                                Period</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.subjects.index') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>
                                Subject</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sections.index') }}"><i
                                    class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.salon.index') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Users <i
                            class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('admin.administrators.index') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i>
                                Admin</a>
                        </li>
                        <li>
                            <a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.students.index') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i>
                                Student</a>
                        </li>
                        <li>
                            <a href="representative.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>
                                Representative</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-card zmdi-hc-fw"></i> Payments <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="registration.html"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
                        </li>
                        <li>
                            <a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i
                            class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('admin.schools.index') }}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                                School Data</a>
                        </li>
                    </ul>
                </li>
            @endcan
            {{-- END Section for admins --}}

            @can('student.dashboard')
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-blur"></i> My Status <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>

                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('student.assignments.index') }} "><i class="zmdi zmdi-attachment-alt"></i>
                                assignment list</a>
                        </li>
                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</section>
