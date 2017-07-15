<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>
<header>        
        <nav class="navbar navbar-default" id="navbar">
                <div class="container-fluid" style="padding-left: 0;padding-right: 0;">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-size: 24px;">
                                <ul class="nav navbar-nav nav-active">
                                        <li <?php echo $page == "acasa" && $view == "dashboard" ? 'class="active"' : ""; ?>><a href="<?php echo _SITE_BASE; ?>"><i class="fa fa-home" aria-hidden="true"></i> Acasa</a></li> 
                                        <li <?php echo $page == "users" && $view == "dashboard" ? 'class="active"' : ""; ?>><a href="<?php getUrl("users", "dashboard", true); ?>"><i class="fa fa-user-circle" aria-hidden="true"></i> Users</a></li>
                                        <li <?php echo $page == "evenimente" && $view == "dashboard" ? 'class="active"' : ""; ?>><a href="<?php getUrl("evenimente", "dashboard", true); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Evenimente</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i> Meniu <span class="caret"></span></a>
                                                <ul class="dropdown-menu" style="z-index: 1000;">
                                                        <li><a href="<?php getUrl("acasa", "edit", true); ?>"><i class="fa fa-pencil"></i> Editeaza profilul</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="<?php getUrl("acasa", "logout", true); ?>"><i class="fa fa-sign-out"></i> Deconectare</a></li>
                                                </ul>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
</header>