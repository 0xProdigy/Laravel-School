<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Inicio</title>
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

        <x-users.content-dashboard.icons-dashboard />


        <!-- END Content page -->

    </section>

    <!-- Notifications area -->
    <x-content-navigation-system.notifications-area />


    <!-- Dialog help -->
    <x-content-navigation-system.dialog-help />

    <!--====== Scripts -->
        @include('admin.links.linksJs')

</body>

</html>
