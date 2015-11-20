<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app="NSLogin">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>NearSource - Test Login</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/theme_styles.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/nanoscroller.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-default.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-growl.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-bar.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-attached.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-other.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-theme.css" />		
		<link type="image/x-icon" href="http://cube.adbee.technology/angularjs/favicon.png" rel="shortcut icon">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="login-page" class="theme-whbl">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="login-box">
						<div id="login-box-holder">
							<div class="row">
								<div class="col-xs-12">
									<header id="login-header">
										<div id="login-logo">
											<img src="<?= base_url() ?>public/img/logo.png" alt="">
										</div>
									</header>
									<div id="login-box-inner" ng-controller="signinCtrl">
										<form novalidate name="loginForm" role="form">
											<div class="input-group" ng-class="{'has-error': loginForm.username.$error.required && (loginForm.$submitted || loginForm.username.$touched)}">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input name="username" ng-model="username" class="form-control" type="text" placeholder="User" required>
											</div>
											<div class="input-group" ng-class="{'has-error': loginForm.password.$error.required && (loginForm.$submitted || loginForm.password.$touched)}">
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<input name="password" ng-model="password" type="password" class="form-control" placeholder="Password" required>
											</div>
											<div id="remember-me-wrapper">
												<div class="row">
													<div class="col-xs-6">
														<div class="checkbox-nice">
															<input type="checkbox" id="remember-me" ng-model="checkRemember">
															<label for="remember-me">Remember me</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<button type="submit" ng-click="login()" class="btn btn-success col-xs-12">Login</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Angular Library -->
		<script src="<?= base_url() ?>public/bower_components/angular/angular.js"></script> 		
		<!-- Jquery Library -->
		<script src="<?= base_url() ?>public/js/jquery.js"></script>
		<!-- Boostrap Library -->
		<script src="<?= base_url() ?>public/js/bootstrap.js"></script>
		<!-- Angular Extra Library -->
		<script src="<?= base_url() ?>public/bower_components/angular-route/angular-route.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-animate/angular-animate.min.js"></script>
		<script src="<?= base_url() ?>public/bower_components/angular-cookies/angular-cookies.min.js"></script>				
		<!-- Loading Bar Library -->
		<script src="<?= base_url() ?>public/js/loading-bar.js"></script>
		<!-- Modernizr Library -->
		<script src="<?= base_url() ?>public/js/modernizr.custom.js"></script>
		<!-- Notification Library -->
		<script src="<?= base_url() ?>public/js/classie.js"></script>
		<script src="<?= base_url() ?>public/js/notificationFx.js"></script>
		<!-- Angular AppLogin -->
		<script src="<?= base_url() ?>public/scripts/appLogin.js"></script>
		<!-- Logger Service -->
		<script src="<?= base_url() ?>public/scripts/services/logger-service.js"></script>
		<!-- User Service -->
		<script src="<?= base_url() ?>public/scripts/services/user-service.js"></script>		

	</body>
</html>