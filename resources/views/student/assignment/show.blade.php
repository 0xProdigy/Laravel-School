<!DOCTYPE html>
<html lang="es">

<head>
    <title>Student</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @include('admin.links.LinksCSS')
</head>

<body>
    <!-- SideBar -->
    <x-content-navigation-system.side-bar />


    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <x-content-navigation-system.top-navigation />

        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Subject <small>Exams</small></h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">System <small>TimeLine</small></h1>
            </div>
            <section id="cd-timeline" class="cd-container">
                @for ($i = 0; $i < 5; $i++)
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img">
                            <img src="{{ asset('./assets/img/avatar.jpg') }}" alt="user-picture">
                        </div>
                        <div class="cd-timeline-content">
                            <h4 class="text-center text-titles">1 - Name (Admin)</h4>
                            <p class="text-center">
                                <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp;
                                <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                            </p>
                            <p class="text-center">
                                <i class="zmdi zmdi-dialpad"></i> Points: <em>20</em>
                            </p>
                            <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                        </div>
                    </div>
                @endfor
            </section>
        </div>

    </section>

    <!-- Notifications area -->
    <x-content-navigation-system.notifications-area />


    <!-- Dialog help -->
    <x-content-navigation-system.dialog-help />

    <!--====== Scripts -->
    @include('admin.links.linksJs')

    @livewireScripts
</body>

</html>
