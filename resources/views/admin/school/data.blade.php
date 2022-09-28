<!DOCTYPE html>
<html lang="es">

<head>
    <title>School</title>
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
                <h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Settings <small>School Data</small>
                </h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    @include('admin.school.partials.school-nav')
                    <div class="tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <form action="">
                                        <div class="form-group label-floating">
                                            <label class="control-label">NIT, CODE</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">FAX</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">WEB</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Coin</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Max Score</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Min Score</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Year</label>
                                            <select class="form-control">
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">School Logo</label>
                                            <div>
                                                <input type="text" readonly="" class="form-control"
                                                    placeholder="Browse...">
                                                <input type="file">
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            <button href="#!" class="btn btn-info btn-raised btn-sm"><i
                                                    class="zmdi zmdi-floppy"></i> Save</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
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
