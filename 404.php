<?php



function add_meta_description()
{
    ?>
    <meta name="description" content="Oups ! La page que vous cherchez sur mon portfolio semble introuvable. Mais ne vous inquiétez pas, explorez notre site pour trouver des informations fiables et utiles sur moi.">
<?php
}

get_header(); ?>

<body>

<h1>404</h1>
<p>Oups ! Attention vous vous êtes égaré.</p>
<a class="button" href="<?php echo home_url(); ?>"><div class="retour">Retournez à l'accueil</div></a>

</body>


<style>


body { 
  background-color: #000000; 
  color: #fff;
  font-size: 100%;
  line-height: 1.5;
}
.button{
  text-decoration: none;
  color: white;
  
}
.retour{
  font-family: 'Jura', sans-serif;
  display: flex;
  margin: auto;
  justify-content: center;
  border: 1px solid;
  position: relative;
  width: 200px;
  margin-top: 15px;
  padding: 10px;
  border-radius: 30px;
}

.retour:hover {
  background-color: #2B2B2B;
  color: #fff;
  
}

p {
  font-size: 2em;
  text-align: center;
  font-weight: 100;
}

h1 {
  text-align: center;
  font-size: 15em;
  font-weight: 100;
  text-shadow: #2B2B2B 1px 1px, #2B2B2B 2px 2px, #2B2B2B 3px 3px, #2B2B2B 4px 4px, #2B2B2B 5px 5px, #2B2B2B 6px 6px, #2B2B2B 7px 7px, #2B2B2B 8px 8px, #2B2B2B 9px 9px, #2B2B2B 10px 10px, #2B2B2B 11px 11px, #2B2B2B 12px 12px, #2B2B2B 13px 13px, #2B2B2B 14px 14px, #2B2B2B 15px 15px, #2B2B2B 16px 16px, #2B2B2B 17px 17px, #2B2B2B 18px 18px, #2B2B2B 19px 19px, #2B2B2B 20px 20px, #2B2B2B 21px 21px, #2B2B2B 22px 22px, #2B2B2B 23px 23px, #2B2B2B 24px 24px, #2B2B2B 25px 25px;

}

@media (max-width: 480px) {
    h1{
    text-align: center;
    font-size: 10em;
    font-weight: 100;
    text-shadow: #2B2B2B 1px 1px, #2B2B2B 2px 2px, #2B2B2B 3px 3px, #2B2B2B 4px 4px, #2B2B2B 5px 5px, #2B2B2B 6px 6px, #2B2B2B 7px 7px, #2B2B2B 8px 8px, #2B2B2B 9px 9px, #2B2B2B 10px 10px, #2B2B2B 11px 11px, #2B2B2B 12px 12px, #2B2B2B 13px 13px, #2B2B2B 14px 14px, #2B2B2B 15px 15px, #2B2B2B 16px 16px, #2B2B2B 17px 17px, #2B2B2B 18px 18px, #2B2B2B 19px 19px, #2B2B2B 20px 20px, #2B2B2B 21px 21px, #2B2B2B 22px 22px, #2B2B2B 23px 23px, #2B2B2B 24px 24px, #2B2B2B 25px 25px;
}    
p {
    font-size: 1.2em;
    text-align: center;
    font-weight: 100;
}

}
</style>