<!DOCTYPE html>
<html lang="es">
<head>
	<title>Payments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
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
			  <h1 class="text-titles"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments <small>Payments</small></h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  	<li><a href="#list" data-toggle="tab">List</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
											<div class="form-group label-floating">
											  <label class="control-label">Student Code</label>
											  <textarea class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Amount</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Subscription</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Date</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group">
										        <label class="control-label">Period</label>
										        <select class="form-control">
										          <option>Period 1</option>
										          <option>Period 2</option>
										          <option>Period 3</option>
										          <option>Period 4</option>
										          <option>Period 5</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Student</th>
											<th class="text-center">Amount</th>
											<th class="text-center">Subscription</th>
											<th class="text-center">Pending</th>
											<th class="text-center">Date</th>
											<th class="text-center">Period</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Carlos Alfaro</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Claudia Rodriguez</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>1</td>
											<td>Alicia Melendez</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>1</td>
											<td>Sarai Mercado</td>
											<td>$40</td>
											<td>$40</td>
											<td>$0</td>
											<td>01/01/2017</td>
											<td>Period 1</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
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
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	    <x-content-navigation-system.notifications-area />


	<!-- Dialog help -->
	    <x-content-navigation-system.dialog-help />

	<!--====== Scripts -->
	<script src=" {{ asset('./js/jquery-3.1.1.min.js') }} "></script>
    <script src=" {{ asset('./js/sweetalert2.min.js') }}"></script>
    <script src=" {{ asset('./js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('./js/material.min.js') }} "></script>
    <script src=" {{ asset('./js/ripples.min.js') }} "></script>
    <script src=" {{ asset('./js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <script src=" {{ asset('./js/main.js') }} "></script>
    <script>
        $.material.init();
    </script>
</body>
</html>