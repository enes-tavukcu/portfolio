<?php

/* Template Name:  Single Projet  */

function add_meta_description()
{
    ?>
    <meta name="description" content="">
<?php
}
get_header();

?>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 

        the_content();
    endwhile;
endif;
?>


<?php get_footer(); ?>

<style>



    body {
        background-color: #f0f0f0; /* Replace with your desired background color */
    }

    @media (max-width: 480px) {
        .wpcp-carousel-content-wrapper{
            width: 410px;
        }
        .wpcp-carousel-content-wrapper{
            width: 360px;
        }
        .wp-block-image {
            padding: 25px;
        }
        h2 {
            font-size: medium;
            padding-top: 20px;
        }
    }
</style>