<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
               <article>
                   <h1><?php echo $photo["Titre"]; ?></h1>
                   <p>Auteur : <?php echo $photo["Nom"]." ".$photo["Prenom"]." (".$photo["Pays"].") - Classement : ".$photo["Classement"]."e (".$photo["Total"]." pts) - Compétition : ".$photo["cNom"]; ?></p>
                   <p><img src="<?php echo base_url("assets/images/")."/".$photo["cNom"]."/".$photo["NomFichier"];?>" alt="Concours"  /></p>

               </article>