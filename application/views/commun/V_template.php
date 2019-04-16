<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Concours photographique</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css" />
    </head>
    <body>
        <div id="conteneur">
            <header>
                <h1>Concours photographique</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url();?>">Accueil</a></li>
                    <li><a href="<?php echo site_url();?>/C_competitions">Les compétitions</a></li>
                    <li><a href="">Galerie photo</a></li>
                </ul>
            </nav>
            <section>
                <?php echo $contenu; ?>
            </section>
            <footer>
                <p>Copyright - Tous droits réservés - 
                    <a href="#">Contact</a></p>
            </footer>
        </div>    
    </body>
</html>