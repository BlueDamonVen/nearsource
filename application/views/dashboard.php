<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app="NSApp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>NearSource - Test for Nearsource</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/bower_components/angular-bootstrap/ui-bootstrap-csp.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/theme_styles.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/dataTables.tableTools.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/bower_components/angular-xeditable/dist/css/xeditable.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-default.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-growl.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-bar.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-attached.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-other.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-theme.css" />		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body  class="theme-whbl">
		<div id="theme-wrapper">
			<header class="navbar" id="header-navbar">
				<div class="container">
					<a href="#/dasboard" id="logo" class="navbar-brand">
						<img src="<?= base_url() ?>public/img/logo.png" alt="" class="normal-logo logo-white">
					</a>
					<div class="clearfix">
						<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-bars"></span>
						</button>
						<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
							<ul class="nav navbar-nav pull-left">
								<li>
									<a class="btn" id="make-small-nav">
										<i class="fa fa-bars"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="nav-no-collapse pull-right" id="header-nav" ng-controller="signoutCtrl">
							<ul class="nav navbar-nav pull-right">
								<li class="dropdown profile-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">
										<span class="hidden-xs">{{currentUser.user_fullname}}</span>
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="" ng-click="signout()"><i class="fa fa-power-off"></i>Logout</a></li>
									</ul>
								</li>
								<li class="hidden-xxs">
									<a class="btn" ng-click="signout()">
										<i class="fa fa-power-off"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<div id="page-wrapper" class="container">
				<div class="row">
					<div id="nav-col">
						<section id="col-left" class="col-left-nano">
							<div id="col-left-inner" class="col-left-nano-content">
								<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav" bs-navbar="">
									<ul class="nav nav-pills nav-stacked">
										<li class="nav-header nav-header-first hidden-sm hidden-xs">Navigation</li>
										<li data-match-route="/employees" data-toggle="tooltip" data-placement="right">
											<a href="#/employees">
												<i class="fa fa-suitcase"></i>
												<span class="ng-scope">Employees</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</section>
					</div>
					<div id="content-wrapper">
						<div class="row" style="opacity: 1;">
							<div class="col-lg-12">
								<div class="slide-main-container">
									<div ng-view autoscroll="true" class="slide-main-animation"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jquery Library -->
		<script src="<?= base_url() ?>public/js/jquery.js"></script>
		<!-- Boostrap Library -->
		<script src="<?= base_url() ?>public/js/bootstrap.js"></script>		
		<!-- data tables -->
		<script src="<?= base_url() ?>public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>public/js/dataTables.tableTools.min.js"></script>
		<script src="<?= base_url() ?>public/js/jquery.dataTables.bootstrap.js"></script> 		
		<!-- Angular Library -->
		<script src="<?= base_url() ?>public/bower_components/angular/angular.js"></script> 		
		<!-- moment js -->
  		<script src="<?= base_url() ?>public/js/moment.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-moment/angular-moment.min.js"></script>  				
		<!-- Angular Extra Library -->
		<script src="<?= base_url() ?>public/bower_components/angular-route/angular-route.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-animate/angular-animate.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-cookies/angular-cookies.min.js"></script>				
		<script src="<?= base_url() ?>public/bower_components/angular-xeditable/dist/js/xeditable.min.js"></script>	
		<script src="<?= base_url() ?>public/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
		<!-- Angular DataTable Library -->
		<script src="<?= base_url() ?>public/js/angular-datatables/angular-datatables.js"></script>
		<script src="<?= base_url() ?>public/js/angular-datatables/plugins/tabletools/angular-datatables.tabletools.min.js"></script>
		<script src="<?= base_url() ?>public/js/angular-datatables/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>
		<script src="<?= base_url() ?>public/js/angular-datatables/plugins/Responsive-1.0.7/js/dataTables.responsive.min.js"></script>
		<!-- Masked Input -->
		<script src="<?= base_url() ?>public/js/jquery.maskedinput.min.js"></script>
		<!-- Xeditable Library -->		 
		<script src="<?= base_url() ?>public/bower_components/angular-xeditable/dist/js/xeditable.min.js"></script>
		<!-- datepicker -->
		<script src="<?= base_url() ?>public/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url() ?>public/js/calendar.js"></script>
		<!-- daterange picker -->
		<script src="<?= base_url() ?>public/js/daterangepicker.js"></script>
		<!-- Loading Bar Library -->
		<script src="<?= base_url() ?>public/js/loading-bar.js"></script>
		<!-- Loading Bar Library -->
		<script src="<?= base_url() ?>public/js/jquery.nanoscroller.min.js"></script>		
		<!-- Script Various Library -->
		<script src="<?= base_url() ?>public/js/scripts.js"></script>
		<!-- Angular AppLogin -->
		<script src="<?= base_url() ?>public/scripts/app.js"></script>
		<!-- Services -->
		<script src="<?= base_url() ?>public/scripts/services/logger-service.js"></script>
		<script src="<?= base_url() ?>public/scripts/services/employee-service.js"></script>
		<!-- Controllers -->
		<script src="<?= base_url() ?>public/scripts/controllers/signin_signout_Controller.js"></script>
		<script src="<?= base_url() ?>public/scripts/controllers/employeeController.js"></script>
		<!-- Directives -->
		<script src="<?= base_url() ?>public/scripts/directives/directives.js"></script>
		<script src="<?= base_url() ?>public/scripts/directives/nbdatepicker.js"></script>		

	</body>
</html>