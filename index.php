<!doctype html>
    <?php include('config/constantes.php'); ?>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="pics/ico.png"/>
        <title><?= WSITE_NAME ?> - DEVELOPPEMENT WEB</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    </head>

    <body>
        <div class="menu">
            <header id="head" >
                <nav>
                    <div class="icon-close">
                        <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
                    </div>

                    <div class="logo" id="logo">
                        <a href="<?= WSITE_URL; ?>"><?php include('includes/_logo.php'); ?></a>
                    </div>

                    <li id="link_accueil" class="link_accueil"><a href="#"><section> Accueil</section></a></li>
                    <li id="link_presentation" class="link_presentation"><a href="#"><section> Presentation</section></a></li>
                    <li id="link_equipe" class="link_equipe"><a href="#"><section> Equipe </section></a></li>
                    <li id="link_services" class="link_services"><a href="#"><section> Services</section></a></li>
                    <li id="link_clients" class="link_clients"><a href="#"><section> Clients </section></a></li>
                    <li id="link_contact" class="link_contact"><a href="#"><section> Contact</section></a></li>
                </nav>
            </header>
        </div>

        <div class="content">
           <div class="icon-menu">
                <i class="fa fa-bars"></i>
                Menu
            </div>
                
           <div class="bg_acc">
                <?php include('includes/_bg_comp.php'); ?>
            </div>

            <div class="bg_comp">
                <?php include('includes/_presentation.php'); ?>
            </div>
        </div>

        <div id="monter">
            <a href="#" title="Remonter">
                <img src="./pics/fl.png">
            </a>
        </div>

    <!--
        <footer>

        </footer>
    -->
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>
