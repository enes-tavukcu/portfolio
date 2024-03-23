
<?php

/* Template Name: Home Page */ 

function add_meta_description()
{
    ?>
    <meta name="description" content="Bienvenue sur Indiglu Maghreb, votre source fiable d'informations et de soutien pour la gestion du diabète au Maghreb. Explorez nos dernières actualités, conseils d'experts, et solutions adaptées pour une vie saine avec le diabète.">
    <?php
}

get_header();

add_action('wp_head', 'add_meta_description');

?>

<body>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
?>


<div class="hr-separateur"></div>



<!-- The Timeline -->



<p class="title-timeline">Mon parcours scolaire</p>

<ul class="timeline">

	<!-- Item 1 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Débutant</span>
				<span class="time-wrapper"><span class="time">2019-2022</span></span>
			</div>
			<div class="desc">Obtention du Baccalauréat</div>
		</div>
	</li>
  
	<!-- Item 2 -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Intermédiaire</span>
				<span class="time-wrapper"><span class="time">2022-2024</span></span>
			</div>
			<div class="desc">1ère année et 2ème année d'université BUT MMI (parcour initial)</div>
		</div>
	</li>

	<!-- Item 3 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Confirmé</span>
				<span class="time-wrapper"><span class="time">2024-2025</span></span>
			</div>
			<div class="desc">Spécialisation dans la dernière année du BUT (alternance)</div>
		</div>
	</li>
  
</ul>





<div id="large-header" class="large-header">




<!-- <a href="#" id="back-to-top" class="rtr-haut">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
        <line x1="12" y1="19" x2="12" y2="5"></line>
        <polyline points="5 12 12 5 19 12"></polyline>
    </svg>
</a> -->



<?php get_footer(); ?>

</body>

<!-- <script>
    jQuery(document).ready(function($) {
        var offset = $(window).height() / 4;
        var duration = 500;

        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('#back-to-top').fadeIn(duration);
            } else {
                $('#back-to-top').fadeOut(duration);
            }
        });

        $('#back-to-top').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        });
    });



</script> -->

<style>

.hr-separateur {
  height: 5px; /* Épaisseur de la barre */
  background: linear-gradient(to right, transparent, black, transparent);
  margin: 90px; /* Centre la barre si nécessaire */
  border: none;
}

/* Animation pour étendre la barre 
@keyframes expand-separateur {
  0% {
    background-size: 0% 100%;
  }
  100% {
    background-size: 100% 75%; /* Le dégradé s'étend pour remplir la barre 
    visibility: visible; /* Rend la barre visible 
  }
}

.hr-separateur.animated {
  animation: expand-separateur 1s ease forwards;
  background: linear-gradient(to right, transparent, black, transparent);
  background-repeat: no-repeat;
  background-position: center; /* S'assure que l'animation démarre du centre 
  border: none;
}

*/


   /*
   #back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
    background-color: #000000;
    color: #f00;
    border-radius: 24px;
    cursor: pointer;
    z-index: 1000;
    width: 50px;
    height: 50px;
}
*/
#back-to-top:hover {
    background-color: #ffffff;
    color: #000000;
    transition: all 0.3s ease-in-out;
    box-shadow: -1px 7px 15px rgb(141 132 132 / 50%);
    transform: scale(1.1)

}

#back-to-top svg {
    width: 25px;
    
}
#back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000000;
        color: #ffffff;
        border-radius: 24px;
        cursor: pointer;
        z-index: 950;
        width: 50px;
        height: 50px;
        box-shadow: -1px 7px 15px rgb(141 132 132 / 50%);
        transition: all 0.3s ease; /* Add transition property for smooth animation */
        animation: ease-in 0.5s ease-in-out;
    }


@media (max-width: 480px) {
   

    .comp-acc-txt {
        font-size: medium;
        text-align: justify;
        width: 275px;
        margin: auto;
        padding-top: 20px;
        line-height: 20px;
    }
    .wp-block-image{
       
        margin: auto;
    }
    .presentation {
        width: 330px;
    }
    .presentation-title {
        text-transform: uppercase;
    /* width: 315px; */
    margin-left: 58px;
    }
    .wp-image-385 {
        width: 100px;
    }
    
}


/*
body {	
  margin: 0;
  padding: 0;

  
  color: rgb(50,50,50);
  font-family: 'Jura', sans-serif;
  font-size: 112.5%;
  line-height: 1.6em;
}
*/




/* ================ The Timeline ================ */

.title-timeline{
    TEXT-ALIGN: center;
    FONT-SIZE: x-large;
    font-weight: 600;
}

.timeline {
  position: relative;
  width: 658px;
  margin: 0 auto;
  margin-top: 20px;
  padding: 1em 0;
  list-style-type: none;
  font-size: x-large;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 6px;
  height: 100%;
  margin-left: -3px;
  background: rgb(80,80,80);
  background: -moz-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -o-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -ms-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: linear-gradient(to bottom, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  
  
}

.timeline li {
  padding: 1em 0;
  z-index: 1;
}

.timeline li:after {
  content: "";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.direction-l {
  position: relative;
  width: 300px;
  float: left;
  text-align: right;
}

.direction-r {
  position: relative;
  width: 300px;
  float: right;
}

.flag-wrapper {
  position: relative;
  display: inline-block;
  z-index: 10;
  text-align: center;
}

.flag {
  position: relative;
  display: inline;
  background: #000;
  padding: 6px 10px;
  border-radius: 5px;
  color: #fff;
  text-align: left;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 0px 3px 2px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 0px 3px 2px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: 50%;
  right: -40px;
  content: ' ';
  display: block;
  width: 12px;
  height: 12px;
  margin-top: -10px;
  background: #fff;
  border-radius: 10px;
  border: 5px solid rgb(171 164 164);
  z-index: 10;
}

.direction-r .flag:before {
  left: -40px;
}

.direction-l .flag:after {
  content: "";
  position: absolute;
  left: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-left-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.direction-r .flag:after {
  content: "";
  position: absolute;
  right: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-right-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.time-wrapper {
  display: inline;
  
  line-height: 1em;
  font-size: 0.66666em;
  color: rgb(250,80,80);
  vertical-align: middle;
}

.direction-l .time-wrapper {
  float: left;
}

.direction-r .time-wrapper {
  float: right;
}

.time {
  display: inline-block;
  padding: 4px 6px;
  background: #e3e3e3;
  color: #000;
}

.desc {
  margin: 1em 0.75em 0 0;
  
  font-size: 0.77777em;
  line-height: 1.5em;
}

.direction-r .desc {
  margin: 1em 0 0 0.75em;
}

/* ================ Timeline Media Queries ================ */

@media screen and (max-width: 490px) {

.timeline {
 	width: 100%;
	padding: 4em 0 1em 0;
}

.timeline li {
	padding: 2em 0;
}

.direction-l,
.direction-r {
	float: none;
	width: 100%;

	text-align: center;
}

.flag-wrapper {
	text-align: center;
  
}

.flag {
	background: #000;
	z-index: 15;
  font-size: large;
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: -30px;
	left: 50%;
	content: ' ';
	display: block;
	width: 12px;
	height: 12px;
	margin-left: -11px;
	background: #fff;
	border-radius: 10px;
	border: 5px solid rgb(171 164 164);
	z-index: 10;
}

.direction-l .flag:after,
.direction-r .flag:after {
	content: "";
	position: absolute;
	left: 50%;
	top: -8px;
	height: 0;
	width: 0;
	margin-left: -8px;
	border: solid transparent;
	border-bottom-color: #000;
	border-width: 8px;
	pointer-events: none;
}

.time-wrapper {
	display: block;
	position: relative;
	margin: 4px 0 0 0;
	z-index: 14;
}

.direction-l .time-wrapper {
	float: none;
}

.direction-r .time-wrapper {
	float: none;
}

.desc {
	position: relative;
	margin: 1em 0 0 0;
	padding: 1em;
	background: rgb(245,245,245);
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	box-shadow: 0 0 1px rgba(0,0,0,0.20);
	font-size: 14px;
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
	position: relative;
	margin: 1em 1em 0 1em;
	padding: 1em;
	
  z-index: 15;
}

}

@media screen and (min-width: 400px ?? max-width: 660px) {

.direction-l .desc,
.direction-r .desc {
	margin: 1em 4em 0 4em;
}

}
</style>
