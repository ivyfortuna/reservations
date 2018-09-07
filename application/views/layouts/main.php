<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <style>
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
            }

            .navbar .navbar-collapse {
                text-align: center;
            }
            a{
                text-align: center;
            }
        </style>

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
    <div id="table">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- for mobile phone -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Open menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <?= anchor('order', 'Orders') ?>
                    </li>

                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['role']==1){?>
                        <li class="dropdown">
                            <?= anchor('destination', 'Destination') ?>
                        </li>
                        <li>
                            <?= anchor('user', 'Users') ?>
                        </li>
                        <li>
                            <?= anchor('report', 'Report') ?>
                        </li>
                    <?php
                        }else{
                            echo "</li>";
                        }
                    ?>
                    <li class="dropdown">
                        <?= anchor('logout', 'Logout') ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
    </div>



	<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/jquery/jquery.js"></script>
	<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/jquery/jquery-ui.js"></script>
	<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/jquery/jquery-ui.css"></script>

    <script src="<?=base_url();?>assets/themes/dashboard/global/vendor/popper-js/umd/popper.min.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/bootstrap/bootstrap.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/animsition/animsition.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="<?=base_url();?>assets/themes/dashboard/global/vendor/waves/waves.js"></script>

<script src="<?=base_url();?>assets/themes/home/scripts/scripts.js"></script>
<script src="<?=base_url();?>assets/themes/home/scripts/sortTable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

	</body>
</html>
