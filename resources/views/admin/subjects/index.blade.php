<!DOCTYPE html>
<html lang="es">

<head>
    <title>Subject</title>
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
                <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Administration <small>Subject</small>
                </h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        {{-- List subjects --}}
        @livewire('admin.subjects-lists')

    </section>

    <!-- Notifications area -->
    <x-content-navigation-system.notifications-area />


    <!-- Dialog help -->
    <x-content-navigation-system.dialog-help />

    <!--====== Scripts -->
        @include('admin.links.linksJs')

</body>

</html>
