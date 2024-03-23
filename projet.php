<?php

/* Template Name: Tout les Projets */ 

function add_meta_description()
{
    ?>
    <meta name="description" content="Découvrez des informations approfondies et des conseils pratiques sur Indiglu Maghreb. Chaque page vous offre des ressources précieuses pour enrichir votre compréhension et votre gestion du diabète. Parcourez nos contenus pour une santé optimale.">
<?php
}

add_action('wp_head', 'add_meta_description');


get_header();
?>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
?>


<div class="grille">

<?php

$args = array(
    'post_type' => 'projet',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$projet_query = new WP_Query($args);

   if ($projet_query->have_posts()) :
       while ($projet_query->have_posts()) : $projet_query->the_post();
   
?>



<div class="grid">


   <div class="projects-card project-one">
    <div class="projet__image" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');">
        <!-- L'image est désormais définie comme un arrière-plan pour .projet__image -->
    </div>
    <div class="project-info-container">
        <h3 class="projet__title"><?php the_title(); ?></h3>
        <div class="btn-container"> 
            
            <p class="project-short-desc">Technologies utilisées :
            <?php the_field('technologie'); ?> 
            </p>
            <p class="project-short-desc">Date de réalisation :
            <?php the_field('date'); ?>
            </p>
            <p class="project-short-desc">Projet :
            <?php $projet = get_field('projet'); // Assurez-vous que 'type_de_plat' est le nom correct du champ
                    if (!empty($projet)) {
                    echo esc_html($projet);
                    }
            ?>
            </p>
        </div>
         <a href="<?php the_permalink(); ?>" class="project-btn">Voir le projet</a>
         
        
        
    </div>
</div>
</div>


<?php
endwhile;
endif;
wp_reset_postdata();
?>

</div>








<?php get_footer(); ?>





<style>

.grille {
    display: grid;
    grid-template-columns: repeat(3, 0.1fr); /* Display 3 columns */
    justify-content: center;
    padding-top: 50px;
}

.grid{
    display: grid;
    grid-template-columns: repeat(1, minmax(25em, 2fr)); /* Modifier cette ligne */
    gap: 2em;
    padding: 2em;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    max-width: 1200 px;
}

@media (max-width: 768px) {
    .grid {
        /*une colonne pour les appareils mobiles*/
        display: grid;
        grid-template-columns: 1fr;


    }
    .grille{
      display: block;
    /* grid-template-columns: repeat(1, 0.1fr); */
    /* justify-content: center; */
    padding-top: 50px;
    }
}

.projects-card {
    position: relative;
    height: 20em; /* Hauteur de la card */
    overflow: hidden; /* Empêche tout débordement de contenu */
    transition: 1s;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    border-radius: 20px;
}

.project-info-container {
    position: absolute;
    top: 100%; /* Commence en dehors de la vue initiale */
    left: 0;
    width: 100%;
    height: 100%;
    transition: .2s;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centre les éléments à l'intérieur du conteneur */
    background: linear-gradient(to top, rgba(0,0,0,0.8) 100%, rgba(0,0,0,0.2) 100%);
}

.projet__image {
    width: 100%;
    height: 100%;
    background-position: center center; /* Centrage de l'image de fond */
    background-size: cover; /* Couvre toute la surface de .projet__image */
    object-fit: cover; /* Couvre toute la surface de .projet__image */
}

   
   


.projet__title {
  
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow on hover */
  
  text-transform: uppercase;
  
  transition: .2s;
  padding-left: 10px;
  
}



.projects-card:hover {
  transform: scale(1.05);
}

.projects-card:hover .project-info-container {
    top: 0; /* Affiche les informations au survol */
}

.project-short-desc, .project-btn{
  font-size: 16px;
  color: #fff;
  margin: 1 0 0 0;
  display: none;
  opacity: 0;
  font-weight: 200;
}

.project-btn {
  max-width: 10em;
  padding: 15px;
  display: flex;
  justify-content: center;
  border: none;
  border-radius: 15px;
  background: #fff;
  text-transform: uppercase;
  font-size: 16px;
  cursor: pointer;
  transition: .5s;
  box-shadow: 0px 2px 10px 0 rgb(185 184 184);
    margin: auto;
    color: #000;
  
}

.btn-container {
  
  margin: auto;
}

.project-btn a{
  color: #000;
  justify-self: center;
  text-decoration: none;
}

.project-btn:hover {
  transform: scale(1.05);
}


.projects-card:hover .project-title {
  color: #fff;
}

.projects-card:hover .project-load-bar {
  display: flex;
  transition: opacity 1s ease;
  animation: project-load-animation 1s ease .1s forwards;
}

.projects-card:hover .project-short-desc {
  display: flex;
  transition: opacity 1s ease;
  animation: project-infos-animation 0.4s ease .2s forwards;
}

.projects-card:hover .project-btn{
  display: flex;
  transition: opacity 1s ease;
  animation: project-infos-animation 1s ease .3s forwards;
}


@keyframes project-load-animation {
  0% {width: 0;}
  100% {width: 14vw;}
}


@keyframes project-infos-animation {
  from {opacity: 0;}
  to {opacity: 2;}
}

@media (max-width: 490px) {
  .project-short-desc{
    font-size: 13px;
  }
  
}
</style>