<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="#" class="pl-0"><img src="{{ asset('img/Logo.png') }}" style="width: 80px;"></a>
            </div>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">

                <li>
                    <a href="{{ route('home') }}" class="collapsible-header waves-effect arrow-r">
                        <i class="w-fa fas fa-tachometer-alt"></i>Dashboards
                    </a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="w-fa fas fa-image"></i>API's<i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                {{-- <a href="{{ route('test') }}" class="waves-effect">API Testing Tool</a> --}}
                            </li>
                            <li>
                                <a href="{{ route('tasks') }}" class="waves-effect">DataForSEO</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="w-fa fas fa-image"></i>Widgets<i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                {{-- <a href="{{ route('widgets') }}" class="waves-effect">Lists</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('widgets-add') }}" class="waves-effect">New Widget</a> --}}
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Simple link -->
                <li>
                    <a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i
                            class="w-fa far fa-bell"></i>Alerts</a>
                </li>
                <li>
                    <a href="../modals/modals.html" class="collapsible-header waves-effect"><i
                            class="w-fa fas fa-bolt"></i>Modals</a>
                </li>
                <li>
                    <a href="../charts/charts.html" class="collapsible-header waves-effect"><i
                            class="w-fa fas fa-chart-pie"></i>Charts</a>
                </li>
                <li>
                    <a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i
                            class="w-fa far fa-calendar-check"></i>Calendar</a>
                </li>
                <li>
                    <a href="../sections/sections.html" class="collapsible-header waves-effect"><i
                            class="w-fa fas fa-th-large"></i>Sections</a>
                </li>

            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->
