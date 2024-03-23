<?php
/* Template Name: Compétences  */
get_header();
?>

<!-- Partie head avec le titre et les métadonnées -->
<head>
    <meta name="description" content="">
    <!-- Ajoutez d'autres balises head si nécessaire -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

    

   

   
 <div class="grille">

   
    <div class="container">

    <?php  
    $args = array(
        'post_type' => 'competence',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC'
    );
    $competences_query = new WP_Query($args);

    if ($competences_query->have_posts()) :
        while ($competences_query->have_posts()) : $competences_query->the_post();
    ?>

        <div class="card">
            <div class="content-card">

               
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="Image de la compétence" class="image">
                                <h3 class="title"><?php the_title(); ?></h3>

                 <div class="logo_logiciel">
                     <?php $logiciel = get_field('logiciel'); 
                     if($logiciel) {
                        echo '<img src="' . $logiciel['url'] . '" alt="' . $logiciel['alt'] . '" class="image_logo_logicel">';
                     }
                        
                     ?>

                     
                </div>
            </div>
            <div class="glow"></div>
        </div>

            
        

    <?php

        endwhile;
    endif;
    ?>
    </div>

    

</div>







                     


    <?php get_footer(); ?>

    <script>
        function showTxtLogiciel(id) {
                            document.getElementById(id).style.display = "block";
                        }

                        function hideTxtLogiciel(id) {
                            document.getElementById(id).style.display = "none";
                        }

        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                card.addEventListener("mousemove", e => {
                    let cardRect = card.getBoundingClientRect();
                    let x = e.clientX - cardRect.x;
                    let y = e.clientY - cardRect.y;

                    let midCardWidth = cardRect.width / 2;
                    let midCardHeight = cardRect.height / 2;

                    let angleY = (x - midCardWidth) / 8;
                    let angleX = (y - midCardHeight) / 8;

                    let glowX = (x / cardRect.width) * 100;
                    let glowY = (y / cardRect.height) * 100;

                    card.children[0].style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.1)`;
                    card.children[1].style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.1)`;
                });

                card.addEventListener("mouseleave", () => {
                    card.children[0].style.transform = "rotateX(0deg) rotateY(0deg)";
                    card.children[1].style.transform = "rotateX(0deg) rotateY(0deg)";
                });
            });
        });

  
    </script>

<style>
    /*
    .txt-logiciel {
        
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.75);
        color: #fff;
        font-size: 16px;
        line-height: 25px;
        transition: all 0.15s ease-out;
        border-radius: 0 0 25px 25px;
    }
    */
    .txt_logiciel {
        
        position: fixed;
    bottom: -50%;
    display: none;
    background: gray;
    color: white;
    border-radius: 10px;
    padding: 14px;
    text-align: justify;
    line-height: 20px;
    transition: all 1s ease 0s;
    }
    .image_test{
        width: 100%;
            height: 100%;
            object-fit: cover;}
    .content-card_test{
        width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 25px;
            transition: all 0.15s ease-out;
            position: relative;
            display: flex;
            justify-content: center;
    }
    .card_test{
        width: 350px;
            height: 500px;
            perspective: 1000px;
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.25);
    border-radius: 25px;
    }
    .container_test {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
            gap: 20px;
        }
    
    .logo_logiciel_test{
            display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    position: absolute;
    bottom: 15%;
    }
    .image_logo_logicel_test{
        width: 100px;
    }
    .image_logo_logicel_test:hover{
        transform: scale(1.1);
    }
        body {
                background-color: #fff;
            }

        

        ::before,
        ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .title{
            top: 0;
            position: absolute;
            text-transform: uppercase;
            color: #000;
            text-shadow: -3px 3px 4px rgba(0, 0, 0, 0.35); 
            padding-left: 10px;
            /*
            border-bottom: 2px solid;
            width: fit-content;
            padding-bottom: 7px;
            */
        }

     
        .logiciel {
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
            
        }  
        .img_logiciel{
            width: 100px;
            padding: 20px;
        }      
        .description {
            text-align: justify;
            margin-top: 10px;
            font-size: 16px;
            color: #000;
            
            line-height: 25px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
            gap: 20px;
        }

        .card {
            width: 350px;
            height: 500px;
            perspective: 1000px;
        }

        .card:hover{
            z-index: 10;
        }

        .content-card {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 25px;
            transition: all 0.15s ease-out;
            position: relative;
        }

        .content-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-card {
    position: relative; /* Assurez-vous que .content-card a une position relative */
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 25px;
    transition: all 0.15s ease-out;
    position: relative;
}

.logo_logiciel {
    position: absolute;
    bottom: 15%; /* Ajustez cette valeur en fonction de la moitié de la hauteur de .content-card */
    
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.15s ease-out;
}

.savoir_plus {
    margin: auto;
    width: 860px;
    justify-content: center;
    align-items: center;
    
}


        
        .content-card .logo_logiciel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            
            transition: all 0.15s ease-out;
        }
        .glow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all 0.15s ease-out;
            border-radius: 25px;
            animation: glow 18s linear infinite;
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.25);
            z-index: 10;

        }

   @media (max-width: 1024px) {
    .container {
        flex-direction: column;
        text-align: center;
        margin-top: 100px;
    }

    .card {
        width: 100%; /* Ajustez la largeur pour s'adapter à la largeur de l'écran */
        max-width: 350px; /* Limitez la largeur maximale si nécessaire */
        height: auto; /* Permettez à la hauteur de s'ajuster en fonction du contenu */
        margin-bottom: 20px; /* Ajoutez un espace entre les cartes */
    }

    .content-card {
        border-radius: 15px; /* Ajustez le rayon de la bordure pour un aspect plus propre */
    }

    .logo_logiciel {
        bottom: 0%; /* Ajustez la position en fonction de la moitié de la hauteur de .content-card */
    }

    .grille {
        padding-top: 50px;
        padding-bottom: 50px;
    }


}

@media (max-width: 490px) {
    .grille {
        padding-top: 300px;
        padding-bottom: 400px;
    }
    .logiciel {
        flex-direction: column;
    }

    .img_logiciel {
        width: 115px; /* Réduit la taille de l'image pour les petits écrans */
    }

    .description {
        font-size: 14px; /* Réduit la taille de la police pour une meilleure lisibilité */
        padding: 0 20px; /* Ajuste le padding pour un meilleur espacement */
    }
    .logiciels{
        width: 400px;
        margin: auto;
    }
    .savoir_plus{
        margin: auto;
        width: auto;
    }
}
    </style>
</body>