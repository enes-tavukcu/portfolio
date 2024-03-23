<?php


/* Template Name: Contact */


function add_meta_description()
{
    ?>
       
    <?php
}


get_header();


add_action('wp_head', 'add_meta_description');




?>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="Bienvenue sur Indiglu Maghreb, votre source fiable d'informations et de soutien pour la gestion du diabète au Maghreb. Explorez nos dernières actualités, conseils d'experts, et solutions adaptées pour une vie saine avec le diabète.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>


<body>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>








<div class="all-contact">
<div class="contact1">


<div class="github">
    <p class="github__text">Github</p>
    <a href="https://github.com/enes-tavukcu">
    <img src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="github" class="github__img">
</a>
</div>






<div class="facebook">
    <p class="facebook__text">Facebook</p>
    <a href="https://www.facebook.com/enestavukcu">
    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook" class="facebook__img">
</a>
</div>
</div>




<div class="contact1">


<div class="linkedin">
    <p class="linkedin__text">Linkedin</p>
    <a href="https://www.linkedin.com/in/enes-tavuk%C3%A7u/">
    <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt="linkedin" class="linkedin__img">
</a>
</div>


<div class="gmail">
    <p class="gmail__text">Gmail</p>
    <a href="mailto:enestavukcu2525@gmail.com">
    <img src="<?php echo get_template_directory_uri(); ?>/img/gmail.svg" alt="gmail" class="gmail__img">
</a>
</div>
</div>
</div>




    <button class="btn-cv">
        <a href="<?php echo get_template_directory_uri(); ?>/img/CV.pdf" download="CV">
        Télécharger mon CV
        </a>
    </button>




   




    <div class="container">


      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
            <h2 class="form-title">Me contacter</h2>
          </div>
      </div>


      <div class="row">


          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                <form id="contact-form" name="myForm" class="form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" role="form">
                    <input type="hidden" name="action" value="process_contact_form">


                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="name"></label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nom" tabindex="1">
                  </div>


                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" tabindex="2">
                  </div>


                  <div class="form-group">
                      <label class="form-label" id="subjectLabel" for="sublect"></label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" tabindex="3">
                  </div>


                  <div class="form-group">
                      <label class="form-label" id="messageLabel" for="message"></label>
                      <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Votre message" tabindex="4"></textarea>                                
                  </div>


                  <div class="text-center margin-top-25">
                      <button type="submit" class="btn btn-mod btn-border btn-large">Envoyer un message</button>
                  </div>


                  <div id="success-message"></div>


              </form><!-- End form -->
           
          </div><!-- End col -->


      </div><!-- End row -->
     
    </div><!-- End container -->






<?php get_footer(); ?>


</body>


<script>


function validateForm() {
    var n = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('subject').value;
    var m = document.getElementById('message').value;
    var onlyLetters =/^[a-zA-Z\s]*$/;
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
   
    if(n == "" || n == null){
        document.getElementById('nameLabel').innerHTML = ('Please enter your name');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
       
 
    if (!n.match(onlyLetters)) {
        document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
 
    if(e == "" || e == null ){
          document.getElementById('emailLabel').innerHTML = ('Please enter your email');
          document.getElementById('email').style.borderColor = "red";
          return false;
      }
 
    if (!e.match(onlyEmail)) {
        document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
 
    if(s == "" || s == null ){
          document.getElementById('subjectLabel').innerHTML = ('Please enter your subject');
          document.getElementById('subject').style.borderColor = "red";
          return false;
      }
 
    if (!s.match(onlyLetters)) {
        document.getElementById('subjectLabel').innerHTML = ('Please enter only letters');
        document.getElementById('subject').style.borderColor = "red";
        return false;
    }
 
  if(m == "" || m == null){
    document.getElementById('messageLabel').innerHTML = ('Please enter your message');
    document.getElementById('message').style.borderColor = "red";
    return false;
}


// Affichage du message "Message envoyé"
document.getElementById('success-message').innerHTML = 'Message envoyé';


// Actualisation de la page après 4 secondes
setTimeout(function(){
    window.location.reload();
}, 4000);


return true;
     
}
</script>
<style>
a{
    text-decoration: none;
    color: #fff;
}
.contact1 {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
   
}


.all-contact {
    display: flex;
    margin: auto;
    justify-content: center;
    padding-top: 50px;
    padding-bottom: 50px;
}


.github {
    width: 250px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
}




.github__img{
    border-radius: 120px;
    box-shadow: 0px 7px 10px 0 rgb(185 184 184);
    width: 160px;
}


.github__img:hover  {
    animation: tail-wag 1.4s infinite alternate;
   
}


@keyframes tail-wag {
    0% {
        transform: rotate(0deg);
    }
    16% {
        transform: rotate(-3deg);
    }
    33% {
        transform: rotate(3deg);
    }
    50% {
        transform: rotate(-3deg);
    }
    66% {
        transform: rotate(3deg);
    }
    83% {
        transform: rotate(-3deg);
    }
    100% {
        transform: rotate(0deg);
    }
}


.facebook {
    width: 250px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
   
}


.facebook__img{
    border-radius: 120px;
    box-shadow: 0px 7px 10px 0 rgb(185 184 184);
    width: 160px;
}


.facebook__img:hover  {
    animation: tail-wag2 1.3s infinite alternate;
   
}


@keyframes tail-wag2 {
    0% {
        transform: rotate(0deg);
    }
    16% {
        transform: rotate(-3deg);
    }
    33% {
        transform: rotate(3deg);
    }
    50% {
        transform: rotate(-3deg);
    }
    66% {
        transform: rotate(3deg);
    }
    83% {
        transform: rotate(-3deg);
    }
    100% {
        transform: rotate(0deg);
    }
}


.gmail {
    width: 250px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
}


.gmail__img {
    width: 160px;
}
.gmail__img:hover  {
    animation: tail-wag3 1.3s infinite alternate;
   
}


@keyframes tail-wag3 {
    0% {
        transform: rotate(0deg);
    }
    16% {
        transform: rotate(-3deg);
    }
    33% {
        transform: rotate(3deg);
    }
    50% {
        transform: rotate(-3deg);
    }
    66% {
        transform: rotate(3deg);
    }
    83% {
        transform: rotate(-3deg);
    }
    100% {
        transform: rotate(0deg);
    }
}




.linkedin {
    width: 250px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
}


.linkedin__img{
    border-radius: 20px;
    box-shadow: 0px 7px 10px 0 rgb(185 184 184);
    width: 160px;
}


.linkedin__img:hover  {
    animation: tail-wag4 1.3s infinite alternate;
   
}


@keyframes tail-wag4 {
    0% {
        transform: rotate(0deg);
    }
    16% {
        transform: rotate(-3deg);
    }
    33% {
        transform: rotate(3deg);
    }
    50% {
        transform: rotate(-3deg);
    }
    66% {
        transform: rotate(3deg);
    }
    83% {
        transform: rotate(-3deg);
    }
    100% {
        transform: rotate(0deg);
    }
}


.btn-cv{
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: .5s;
    box-shadow: 0px 2px 10px 0 rgb(185 184 184);
    margin: auto;
    margin-top: 40px;
    display: flex;
    font-size: 20px;
}


@media (max-width: 490px) {
    .contact1 {
        flex-direction: column;
    }
    .btn-cv {
        margin-top: 70px;
        font-size: 16px;


    }
    .github__img {
        width: 120px;
    }
    .facebook__img {
        width: 120px;
    }
    .linkedin__img {
        width: 120px;
    }
    .gmail__img {
        width: 120px;
    }
    .facebook {
        margin-top: 30px;
    }
    .linkedin {
        margin-top: 30px;
    }
    .gmail {
        margin-top: 30px;
    }
    .github {
        margin-top: 30px;
    }
    .all-contact {
    display: flex;
    flex-direction: column; /* Affichage en colonnes pour les appareils mobiles */
    align-items: center; /* Centrer les éléments horizontalement */
    padding-top: 30px; /* Réduire l'espacement en haut */
    padding-bottom: 30px; /* Réduire l'espacement en bas */
}
}


#success-message {
  opacity: 0;
}


.col-xs-12.col-sm-12.col-md-12.col-lg-12 {
  padding: 0 20% 0 20%;
}


.margin-top-25 {
  margin-top: 25px;
}


.form-title {
  padding: 25px;
  font-size: 30px;
  font-weight: 300;
 
}


.form-group .form-control {
  -webkit-box-shadow: none;
  border-bottom: 1px;
  border-style: none none solid none;
  border-radius:0;
  border-color: #000;
}


.form-group .form-control:focus {
    box-shadow: none;
  border-width: 0 0 2px 0;
  border-color: #000;
 
}


textarea {
  resize: none;
}


.btn-mod.btn-large {
    height: auto;
    padding: 13px 52px;
    font-size: 15px;
}


.btn-mod.btn-border {
    color: #000000;
    border: 1px solid #000000;
    background: transparent;
}


.btn-mod, a.btn-mod {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 4px 13px;
    color: #fff;
    background: rgba(34,34,34, .9);
    border: 1px solid transparent;
    font-size: 11px;
    font-weight: 400;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
}


.btn-mod.btn-border:hover, .btn-mod.btn-border:active, .btn-mod.btn-border:focus, .btn-mod.btn-border:active:focus {
    color: #fff;
    border-color: #000;
    background: #000;
    outline: none;
}


@media only screen and (max-width: 490px) {
    .btn-mod.btn-large {
       padding: 6px 16px;
       font-size: 11px;
    }
 
    .form-title {
        font-size: 20px;
  }
}


</style>

