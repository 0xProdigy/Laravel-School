<!DOCTYPE html>
<html lang="es">

<head>
    <title>Student</title>
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
                <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Users <small>Student</small></h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#new">New</a></li>
                        <li><a href="#list">List</a></li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Birthday</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Section</th>
                                    <th class="text-center">Update</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Carlos</td>
                                    <td>Alfaro</td>
                                    <td>El Salvador</td>
                                    <td>carlos@gmail.com</td>
                                    <td>+50312345678</td>
                                    <td>07/03/1997</td>
                                    <td>Male</td>
                                    <td>Old</td>
                                    <td>Section</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alicia</td>
                                    <td>Melendez</td>
                                    <td>El Salvador</td>
                                    <td>alicia@gmail.com</td>
                                    <td>+50312345678</td>
                                    <td>07/07/1990</td>
                                    <td>Female</td>
                                    <td>New</td>
                                    <td>Section</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sarai</td>
                                    <td>Mercado</td>
                                    <td>El Salvador</td>
                                    <td>sarai@gmail.com</td>
                                    <td>+50312345678</td>
                                    <td>09/09/1991</td>
                                    <td>Female</td>
                                    <td>Old</td>
                                    <td>Section</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Alba</td>
                                    <td>Bonilla</td>
                                    <td>El Salvador</td>
                                    <td>alba@gmail.com</td>
                                    <td>+50312345678</td>
                                    <td>01/10/1993</td>
                                    <td>Female</td>
                                    <td>New</td>
                                    <td>Section</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#!">«</a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">3</a></li>
                            <li><a href="#!">4</a></li>
                            <li><a href="#!">5</a></li>
                            <li><a href="#!">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notifications area -->
    <x-content-navigation-system.notifications-area />


    <!-- Dialog help -->
    <x-content-navigation-system.dialog-help />

    <!--====== Scripts -->
    @include('admin.links.linksJs')

</body>

</html>