<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<article>                
    <h1>La liste des compétitions</h1>
    <?php foreach ($competitions as $competition) {
        ?>
        <p>
            <a href="<?php echo site_url("C_competitions/detail/" . $competition["ID"]); ?>"><?php echo $competition["Nom"]; ?></a><?php echo " (" . $competition["Date"] . ")"; ?>
        </p>
        <?php }
    ?>

</article>




