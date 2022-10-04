<!--FOOTER -->

<footer class="footer">
    <div class="grid">
    <div class="row">
    <div class="footer-col">
      <h4>DyOhArt</h4>
      <ul>
       <li><a href="<?php echo ROOT_URL; ?>public?page=chi-siamo">Chi siamo</a></li>
       <li><a href="<?php echo ROOT_URL; ?>public?page=privacyandpolice">privacy police</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>get help</h4>
      <ul>
       <li><a href="<?php echo ROOT_URL; ?>public?page=contatti">contatti</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>online shop</h4>
      <ul>
       <li><a href="#">Guitar</a></li>
       <li><a href="#">drum</a></li>
       <li><a href="#">beat</a></li>
       <li><a href="#">keyboard</a></li> 
       <li><a href="#">song</a></li> 
       
      </ul>
    </div>

    <div class="footer-col">
      <h4>follow us</h4>
      <div class="social-links">
       <a href="https://www.facebook.com/jericocash"><i class="fab fa-facebook-f"></i></a>
       <a href="https://www.instagram.com/jericocash/"><i class="fab fa-instagram"></i></a>
       <a href="https://www.tiktok.com/@jericocash?lang=it-IT"><i class="fab fa-tiktok"></i></a>
       <a href="https://open.spotify.com/user/fkz3sqkdxvlxo11yi58uh1x8m?si=c71c4db63da0476ba"><i class="fa fa-spotify"></i></a>
       <a href="https://www.youtube.com/channel/UCpNsGTjWjWDJaQ1SuLmABQQ"><i class="fab fa-youtube"></i></a>
       <a href="https://discord.gg/gvFCr4ScUk"><i class="fab fa-discord"></i></a>
      </div>
    </div>

    </div>
    </div>
</footer>

<!--Jquery-->

<script src="<?php echo ROOT_URL; ?>assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js" integrity="sha512-cA8gcgtYJ+JYqUe+j2JXl6J3jbamcMQfPe0JOmQGDescd+zqXwwgneDzniOd3k8PcO7EtTW6jA7L4Bhx03SXoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $( document ).ready(function() {

    /*Open Panel*/jQuery
    $( ".hamburger" ).on( 'click', function() {
      $(".menu").toggleClass("menu--open");
    });
  
  });

  ScrollReveal().reveal('.reveal', { distance: '100px',duration: 1500,  easing: 'cubic-bezier(0.215, 0.610, 0.355, 1)',interval: 600  });
  ScrollReveal().reveal('.zoom', { duration: 1500,  easing: 'cubic-bezier(0.215, 0.610, 0.355, 1)',interval: 200, scale: 0.65, mobile:false });
</script>

  
</body>
</html>