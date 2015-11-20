<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>NearSource - 404 Not Found</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/theme_styles.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ns-style-theme.css" />		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="error-page" style="background: none;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="error-box">
					<div class="row">
						<div class="col-xs-12">
							<div id="error-box-inner">
								<img src="<?= base_url() ?>public/img/error-404-v3.png" alt="Have you seen this page?">
							</div>
							<h1>ERROR 404</h1>
							<p>
							Page not found.<br>
							If you find this page, let us know.
							</p>
							<p>
							Go back to <a href="<?= base_url() ?>">homepage</a>.
							</p>
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
	</body>
</html>