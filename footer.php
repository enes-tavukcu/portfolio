<footer>



<div class="footer-waves-body">



<div>
    <svg class="footer-waves-content" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="footer-wave-parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgb(0,0,0,0.9" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgb(0,0,0,0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgb(0,0,0,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(0,0,0,1)" />
        </g>
    </svg>
</div>


<div class="footer-social">
    <p class="reseau-p">N'hésitez pas à me suivre sur mes réseaux</p>
    <div class="logo-media">
        <a href="https://www.facebook.com/enes.tavukcu/?locale=fr_FR"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="logo-link"></a>
        <a href="https://www.instagram.com/enesss.25/"> <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="logo-link"></a>
        <a href="https://www.linkedin.com/in/enes-tavuk%C3%A7u/"> <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin" class="logo-link"></a>
        <a href="https://www.behance.net/enestavuku/"> <img src="<?php echo get_template_directory_uri(); ?>/img/behance.png" alt="behance" class="logo-link"></a>
    </div>
</div>

<?php wp_footer(); ?>  
</footer>

<style>
/*
    footer{
        height: 150px;
        background-color: #1e1e1e!important;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
*/

body {
    margin:0;
}

.footer-waves-body {
    position: relative;
    text-align: center;
    padding-top: 4rem;
}

.footer-waves-content {
    position:relative;
    width: 100%;
    height:30vh; /* Augmented height */
    margin-bottom:-7px;
    min-height:100px;
    max-height:150px;
}

/* Animation */

.footer-wave-parallax > use {
    animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.footer-wave-parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
}
.footer-wave-parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
}
.footer-wave-parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
}
.footer-wave-parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
}
@keyframes move-forever {
    0% {
        transform: translate3d(-90px,0,0);
    }
    100% { 
        transform: translate3d(85px,0,0);
    }
}

.footer-social {
    background: #000;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}

/*
.footer-social {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}
*/

.reseau-p {
    color: #fff;
}

.logo-media {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-media a {
    margin: 0 10px;
}

.logo-link {
    width: 30px;
    height: 30px;
    transition: 0.3s;
    animation: ease-in 0.5s ease-in-out;
}
.logo-link:hover {
    transform: scale(1.4);
}



/*responsive changes*/
@media (max-width: 480px) {
    .footer-waves {
        height:40px;
        min-height:40px;
    }
    .footer-social {
        flex-direction: column;
        font-size: 16px;
    }
    .footer-waves-content {
    position: relative;
    width: 100%;
    height: 30vh;
    margin-bottom: -10px;
    min-height: 100px;
    max-height: 150px;
}
}
</style>










