<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?= base_url() ?>global_assets/js/plugins/loaders/pace.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/core/libraries/jquery.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/core/libraries/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script src="<?= base_url() ?>assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Error title -->
					<div class="text-center content-group">
						<h1 class="error-title">404</h1>
						<h5>Oops, Terjadi Error. Halaman Tidak Ditemukan!</h5>
					</div>
					<!-- /error title -->


					<!-- Error content -->
					<div class="row">
						<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="btn btn-primary btn-block content-group" onclick="window.history.back();"><i class="icon-circle-left2 position-left"></i>Kembali</a>
                                </div>

                                <div class="col-sm-6">
                                    <a href="<?= base_url()?>" class="btn btn-warning btn-block content-group"><i class="icon-home2 position-left"></i> Dashboard</a>
                                </div>
                            </div>
						</div>
					</div>
					<!-- /error wrapper -->


					<!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2021. <a href="<?= site_url()?>Dashboard"><?php echo site_url()?></a> by <a href="http://medabot.online/portfolio" target="_blank">Medabot Online</a>
                    </div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
