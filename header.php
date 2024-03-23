<!DOCTYPE html>
<html>


    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">


        <?php wp_head(); ?>
    </head>
       
    <header>




   


    <div class="header-top">



       
       
    <div class="menu">
        <?php wp_nav_menu (  
            array(
                'theme_location' => 'main',
                'container' => 'nav',
                'container_class' => 'main-nav',
                'items_wrap' => '<div class="menu-item">%3$s</div>'


            ) );
        ?>
        </div>


    </div>




            <button type="button" class="hamburger" onclick="toggleMenu()">&#9776;</button>


    <div class="reading-indicator"></div>






 


 </header>
         
 
 <script>
      window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    if (header) {
        header.classList.toggle('scrolled', window.scrollY > 0);
    }
});


window.addEventListener('scroll', function() {
    var headerScroll = document.querySelector('.header-scroll');
    if (headerScroll) {
        headerScroll.style.display = window.scrollY > 0 ? 'none' : 'block';
    }
});


window.onscroll = function() {
    var header = document.getElementById('monHeader');
    if (header) {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
};




/*
    function toggleMenu() {
      var menu = document.querySelector('.menu');
      menu.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
*/
   
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            var hamburger = document.querySelector('.hamburger');
           
            menu.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
           
            if (menu.classList.contains('active')) {
                hamburger.innerHTML = '&#10005;'; // Display cross symbol
            } else {
                hamburger.innerHTML = '&#9776;'; // Display hamburger symbol
            }
        }
   




</script>




   
   








   
    <style>
        header {
            position: fixed;
            height: 250px;
            width: 100%;
            top: 0;
            left: 0;
            /*transition: height 0.3s ease;*/
            font-family: 'Jura', sans-serif;
            webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            z-index: 1000;
           
        }
       
        header.scrolled {
            height: 100px;
            background-color: rgba(30,30,30,.85)!important;
            backdrop-filter: blur(10px);
            transition: height 0.3s ease;
        }


        .reading-indicator {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3.5px;
            z-index: 1;
            /*background: linear-gradient(45deg, #ffffff, #000000);*/
            background: #e38d35;
            transition: background-color 0.3s ease;
            animation: progress linear;
            animation-timeline: scroll(root);
        }
 
        .header-top {
            display: flex;
            align-items: center;


        }


        .logo {
            padding: 15px;
        }


        .enes {
            width: 70px;
           
            transition: all 0.3s ease; /* Add transition property for smooth animation */
            animation: ease-in 1.5s ease-in-out;
        }


        @keyframes ease-in-out {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0.5;
            }
            75% {
                opacity: 0.8;
            }
            100% {
                opacity: 1;
            }
        }


        .enes:hover {
           


            transform: scale(1.1); /* Add scale transformation on hover */


        }


        .menu {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
           
        }
   




        .menu-item {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0;
            margin: 7px;
        }


       
        .main-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            /*background-color: #fff;*/
            border-radius: 70px;
            padding: 25px;
            width: 500px;
            animation: ease-in 1.5s ease-in-out;
        }


        @keyframes ease-in-out {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0.5;
            }
            75% {
                opacity: 0.8;
            }
            100% {
                opacity: 1;
            }
        }


        .menu-item ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            padding: 0;
            text-decoration: none;
            width: 500px;
            background-color: #898989;
            border-radius: 40px;
            padding: 25px;
            border: 2px solid #000;


        }


        .menu-item a {
            text-decoration: none;
            color: #fff;
            transition: all 0.3s ease; /* Add transition property for smooth animation */
        }


        .menu-item a:hover {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow on hover */
            transform: scale(1.2); /* Add scale transformation on hover */
           
        }


 
        .menu-item-13{
            border-left: 1px solid #fff;
            border-right: 1px solid #fff;
           
        }
       
           
     


        @keyframes progress {
            to { width: 100%; }
        }






        /* Styles pour le bouton hamburger */
.hamburger {
  display: none;
  font-size: 40px;
  background: none;
  border: none;
  color: #615145;
  position: relative;
  z-index: 1000;
}


/* Styles pour le menu déroulant */
.main-nav.active {
  display: block;
}
/* Quand le menu est actif, impossible de scroller la page */
.no-scroll {
  overflow: hidden;
}


/* Quand le menu est actif, il est affiché en tant que bloc vertical */
.menu.active {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    z-index: 1000;
    background: rgba(30,30,30,.85)!important;
    justify-content: center;
    backdrop-filter: blur(10px);
    transition: height 0.3s ease;
}
       


/* Media query pour les appareils mobiles */
@media (max-width: 480px) {
  .hamburger {
    color: #fff;
    padding-left: 20px;
    padding-top: 10px;
    display: block;
    z-index: 1000;
           


  }


 
 
   
  .menu.active {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    z-index: 1000;
    background: rgba(30,30,30,0.99)!important;
    justify-content: center;
    backdrop-filter: blur(10px);
    transition: height 0.3s ease;
}


  .menu {
        display: none;
        flex-direction: column;
        width: 100%;
    }


   .main-nav ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 20px;
}


.menu-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0;
    margin: 7px;
/*animation des élément du menu qui apparait en décalé en venant d'en haut avec une animation*/
    padding-top: 35px;
    animation: ease-in 0.3s ease-in-out;


}


.main-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 25px;
    width: 100%;
    height: 100vh;
    animation: ease-in 1.5s ease-in-out;
    backdrop-filter: blur(10px);
   
}




.main-nav a {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
}


header {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    /*transition: height 0.3s ease;*/
    font-family: 'Jura', sans-serif;
    webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    z-index: 1000;
}


header.scrolled {
    height: 80px;
    background-color: rgba(30,30,30,.85)!important;
    backdrop-filter: blur(10px);
    transition: height 0.3s ease;
}
/* Quand le menu est actif, une croix remplace le hamburger */
.hamburger.active::before {
  content: '\00d7';
}


/* Quand le menu est actif, no scroll */
.no-scroll {
  overflow: hidden;
}


 .menu-item-13{
            border-left: 0px solid #fff;
            border-right: 0px solid #fff;            
        }




.presentation {
    width: 200px;
}


.reading-indicator {
    display: flex;
}
.header-top{
   
}


}
</style>