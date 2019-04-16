<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
                <article>                
                    <h1>La compétitions <?php echo $competition["Nom"]; ?></h1>
                    <h4>Date de la competition :</h4><?php echo $competition["Date"]; ?>
                    <h4>Le classement final :</h4>
                    <?php foreach($photos as $photo){
                        ?>
                    <p>
                        <?php echo $photo["Classement"]." ".$photo["Titre"]." (".$photo["Nom"]." ".$photo["Prenom"].", ".$photo["Pays"].") "; ?><a href="<?php echo site_url("C_photo/detail/".$photo["ID"]);?>">Afficher la photo</a>
                    </p>
                            <?php
                    } ?>
                    
                </article>
