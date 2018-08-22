<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Administrator Login</title>
    <link rel="apple-touch-icon" href="<?= base_url().'assets/themes/login/images/apple-touch-icon.png';?>">
    <link rel="shortcut icon" href="<?= base_url().'assets/themes/login/images/favicon.ico';?>">

    <!-- Stylesheets -->
    <?= link_tag(base_url().'assets/themes/login/css/bootstrap.min.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/bootstrap-extend.min.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/site.min.css'); ?>

    <!-- Plugins -->
    <?= link_tag(base_url().'assets/themes/login/css/animsition.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/asScrollable.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/switchery.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/introjs.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/slidePanel.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/flag-icon.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/waves.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/login-v2.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/css/login-v3.css'); ?>

    <!-- Fonts -->

    <?= link_tag(base_url().'assets/themes/login/fonts/material-design/material-design.min.css'); ?>
    <?= link_tag(base_url().'assets/themes/login/fonts/brand-icons/brand-icons.min.css'); ?>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
   <script src="<?= base_url().'assets/themes/login/vendor/html5shiv/html5shiv.min.js';?>"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="<?= base_url().'assets/themes/login/vendor/media-match/media.match.min.js';?>"></script>
    <script src="<?= base_url().'assets/themes/login/vendor/respond/respond.min.js'; ?>"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="<?= base_url().'assets/themes/login/vendor/breakpoints/breakpoints.js'; ?>"></script>
    <script>
        Breakpoints();
    </script>
</head>

<?php
	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>

<!-- Core  -->
<script src="<?= base_url().'assets/themes/login/vendor/babel-external-helpers/babel-external-helpers.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/jquery/jquery.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/popper-js/umd/popper.min.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/bootstrap/bootstrap.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/animsition/animsition.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/mousewheel/jquery.mousewheel.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/asscrollbar/jquery-asScrollbar.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/asscrollable/jquery-asScrollable.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/ashoverscroll/jquery-asHoverScroll.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/waves/waves.js'; ?>"></script>

<!-- Plugins -->
<script src="<?= base_url().'assets/themes/login/vendor/switchery/switchery.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/intro-js/intro.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/screenfull/screenfull.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/slidepanel/jquery-slidePanel.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/vendor/jquery-placeholder/jquery.placeholder.js'; ?>"></script>

<!-- Scripts -->
<script src="<?= base_url().'assets/themes/login/js/Component.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Base.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Config.js'; ?>"></script>

<script src="<?= base_url().'assets/themes/login/js/Section/Menubar.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Section/GridMenu.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Section/Sidebar.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Section/PageAside.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/menu.js'; ?>"></script>

<script src="<?= base_url().'assets/themes/login/js/config/colors.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/config/tour.js'; ?>"></script>
<script>Config.set('assets', '../../assets');</script>

<!-- Page -->
<script src="<?= base_url().'assets/themes/login/js/Site.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/asscrollable.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/slidepanel.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/switchery.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/jquery-placeholder.js'; ?>"></script>
<script src="<?= base_url().'assets/themes/login/js/Plugin/material.js'; ?>"></script>

<script>
    (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>
</html>