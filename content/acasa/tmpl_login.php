<?php



defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>

<div class="container-fluid container-rel">

    <div class="row">
        <div class="col-lg-12 login-form-container" style="z-index: 2;">

            <form action="<?php getUrl("acasa", "login-action", true); ?>" method="post" id="login_form">

                <div class="row login-form-header">
                    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
                        <h1>Autentificare </h1>
                    </div>
                </div>

                <?php if (isset($_SESSION["error"])) { ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa fa-exclamation-triangle"></i> <?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES); ?>
                    </div>
                    <?php
                    $_SESSION["error"] = null;
                    unset($_SESSION["error"]);
                    ?>
                <?php } ?>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="parola" name="parola" placeholder="Parola">
                    </div>

                    <div class="row text-center">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-primary btn-auth"><i class="fa fa-sign-in"></i>  Autentificare</button>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12 f_pass">
                            <a href=""><i class="fa fa-lightbulb-o"></i>  Am uitat parola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8"></div>
            </form>
        </div>
        <div class="main_logo">
            <img src="<?php echo _SITE_IMG; ?>18519653_1330767766978633_8691021305464484054_n.jpg" class="img_login">
        </div>
    </div>

</div>

