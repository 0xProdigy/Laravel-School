<!DOCTYPE html>
<html lang="es">

<head>
    <title>Teacher</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @include('admin.links.linksCss')

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

                <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Users Teacher<small> Edit-Subject List</small></h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>

        </div>

        {{-- Alert info --}}
        @if (session()->has('info'))
            <div class="row alert alert-success">
                <strong>
                    {{ session()->get('info') }}
                </strong>
            </div>
        @endif

        {{-- Partial create teacher --}}
        @include('admin.teachers.partials.teacher-edit')

    </section>

    <!-- Notifications area -->
    <x-content-navigation-system.notifications-area />


    <!-- Dialog help -->
    <x-content-navigation-system.dialog-help />

    <!--====== Scripts -->
    @include('admin.links.linksJs')
</body>

</html>
