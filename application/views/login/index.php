
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <h2 class="brand-text font-size-18">Prevozi</h2>
                </div>
                <form method="post" action="<?php echo base_url('/login'); ?>" autocomplete="off">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="login" />
                        <label class="floating-label">Email</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" class="form-control" name="pass" />
                        <label class="floating-label">Password</label>
                    </div>
                
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Login</button>
                </form>
            </div>
        </div>

        <footer class="page-copyright page-copyright-inverse">
            <p></p>
            <p>© 2018 Iskra d.d.</p>
           
        </footer>
    </div>
</div>
<!-- End Page -->