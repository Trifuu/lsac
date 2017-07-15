<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

?>

<div class="container container-page">
        <div class="row">
                <div class="col-md-12">
                        <h1 class="page-title">Editeaza profilul</h1>
                </div>
        </div>

        <?php
        if (isset($_GET["message"])) {
                if (isset($_GET["status"]) && $_GET["status"] == "ok") {
                        ?>
                        <div class="alert alert-success">
                                <a href="<?php getUrl("acasa", "edit", true); ?>" class="close">&times;
                                </a>
                                <strong><i class="fa fa-check-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
                        </div>
                        <?php
                } else if (isset($_GET["status"]) && $_GET["status"] == "nok") {
                        ?>
                        <div class="alert alert-danger">
                                <a href="<?php getUrl("acasa", "edit", true); ?>" class="close">&times;
                                </a>
                                <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
                        </div>
                        <?php
                }
        }
        ?>

        <div class="row">
                <div class="col-md-6">
                        <h2 class="page-title">Date personale</h2>
                        <form action="<?php getUrl("acasa", "post_edit_account", true); ?>" method="post" id="edit_account">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="nume"><i class="fa fa-user-circle"></i> Nume</label>
                                        <input type="text" class="form-control input-lg" id="nume" name="nume" placeholder="Nume" value="<?php echo htmlspecialchars($user["nume"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
                                        <input type="text" class="form-control input-lg" id="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($user["email"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="tel"><i class="fa fa-phone"></i> Telefon</label>
                                        <input type="text" class="form-control input-lg" id="tel" name="tel" placeholder="Telefon" value="<?php echo htmlspecialchars($user["tel"], ENT_QUOTES); ?>">
                                </div>


                                <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-12">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>  Salveaza</button>
                                        </div>
                                </div>
                        </form>
                </div>
                <div class="col-md-6">
                        <h2 class="page-title">Schimba parola</h2>
                        <form action="<?php getUrl("acasa", "post_edit_password", true); ?>" method="post" id="edit_password">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="parola"><i class="fa fa-lock"></i> Introdu o parola noua</label>
                                        <input type="password" class="form-control input-lg" id="parola" name="parola" placeholder="Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_noua"><i class="fa fa-lock"></i> Re-introdu parola noua</label>
                                        <input type="password" class="form-control input-lg" id="parola_noua" name="parola_noua" placeholder="Re-introdu Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_veche"><i class="fa fa-lock"></i>Introdu parola actuala</label>
                                        <input type="password" class="form-control input-lg" id="parola_veche" name="parola_veche" placeholder="Parola Actuala">
                                </div>


                                <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-12">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>  Schimba parola</button>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>

        <div class="row">
                <div class="col-lg-12">      
                        <h2 class="page-title">Drepturi</h2>
                        <table class="table table-custom table-striped">
                                <thead>
                                        <tr>
                                                <th>Drept</th>
                                                <th>Status</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td>Administrator</td>
                                                <td>
                                                    <?php
                                                    if ($user["tip"]==1) {
                                                            ?>
                                                                <span style="color:darkgreen"><b><i class="fa fa-check-circle"></i></b> Da</span>
                                                                <?php
                                                        } else {
                                                                ?>
                                                                <span style="color:red"><b><i class="fa fa-times-circle"></i></b> Nu</span>             
                                                                <?php
                                                        }
                                                        ?>
                                                </td>     
                                        </tr>
                                        <tr>
                                                <td>Manager</td>
                                                <td>
                                                    <?php
                                                    if ($user["tip"]==2) {
                                                            ?>
                                                                <span style="color:darkgreen"><b><i class="fa fa-check-circle"></i></b> Da</span>
                                                                <?php
                                                        } else {
                                                                ?>
                                                                <span style="color:red"><b><i class="fa fa-times-circle"></i></b> Nu</span>             
                                                                <?php
                                                        }
                                                        ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Contributor</td>
                                                <td>
                                                    <?php
                                                    if ($user["tip"] == 3) {
                                                            ?>
                                                                <span style="color:darkgreen"><b><i class="fa fa-check-circle"></i></b> Da</span>
                                                                <?php
                                                        } else {
                                                                ?>
                                                                <span style="color:red"><b><i class="fa fa-times-circle"></i></b> Nu</span>             
                                                                <?php
                                                        }
                                                        ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Supervizor</td>
                                                <td>
                                                    <?php
                                                    if ($user["tip"] == 4) {
                                                            ?>
                                                                <span style="color:darkgreen"><b><i class="fa fa-check-circle"></i></b> Da</span>
                                                                <?php
                                                        } else {
                                                                ?>
                                                                <span style="color:red"><b><i class="fa fa-times-circle"></i></b> Nu</span>             
                                                                <?php
                                                        }
                                                        ?>
                                                </td>
                                        </tr>
                                        
                                </tbody>
                        </table>
                </div>
        </div>
</div>

