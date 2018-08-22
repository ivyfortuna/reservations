<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
	
	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>


	<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/jquery/jquery.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/popper-js/umd/popper.min.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/bootstrap/bootstrap.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/animsition/animsition.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/waves/waves.js"></script>

<script src="<?=base_url();?>assets/themes/home/scripts/scripts.js"></script>

	</body>
</html>
