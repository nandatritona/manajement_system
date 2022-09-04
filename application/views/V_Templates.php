<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>global_assets/images/logo_icon_light.png">
	<title><?= base_url()?></title>

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
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>

	<script src="<?= base_url() ?>global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/tables/datatables/extensions/fixed_columns.min.js"></script>

	<script src="<?= base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/notifications/sweet_alert.min.js"></script>

	<script src="<?= base_url() ?>global_assets/js/plugins/forms/wizards/stepy.min.js"></script>
	<script src="<?= base_url() ?>global_assets/js/plugins/forms/validation/validate.min.js"></script>

	<script src="<?= base_url() ?>assets/js/app.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/datatables_extension_buttons_html5.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/form_validation.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/wizard_stepy.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/datatables_extension_fixed_columns.js"></script>
	<script src="<?= base_url() ?>global_assets/js/demo_pages/datatables_extension_buttons_print.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
    <?php echo $_navbar ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
            <?php echo $_sidebar ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<?php echo $_pageheader?>

				<!-- Content area -->
				<div class="content">

					<!-- Dashboard content -->
                    <?php echo $_content?>
					<!-- /dashboard content -->


					<!-- Footer -->
                    <?php echo $_footer ?>
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
