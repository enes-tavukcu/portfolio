<?php

function add_meta_description()
{
    ?>
    <meta name="description" content="Découvrez des informations approfondies et des conseils pratiques sur Indiglu Maghreb. Chaque page vous offre des ressources précieuses pour enrichir votre compréhension et votre gestion du diabète. Parcourez nos contenus pour une santé optimale.">
<?php
}

add_action('wp_head', 'add_meta_description');


get_header();
?>


<?php get_footer(); ?>



