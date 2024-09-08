</div>
<footer class="footer mt-2 text-white">
  <div class="grid pt-3">
    <div class="col-25">
      <h3>Quick links</h3>
      <ul class="list-unstyled">
        <li class="pt-1"><a href="<?php echo get_permalink(get_page_by_path('home')); ?>" class="text-white">Home</a></li>
        <li class="pt-1"><a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="text-white">Blog</a></li>
        <li class="pt-1"><a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="text-white">Servizi</a></li>
        <li class="pt-1"><a href="<?php echo get_permalink(get_page_by_path('contatti')); ?>" class="text-white">Contatti</a></li>
      </ul>
    </div>
    <div class="col-25">
      <h3>Social</h3>
      <ul class="list-unstyled">
        <li class="pt-1">
          <a href="https://www.facebook.com/profile.php?id=61559631022200" class="text-white"><i class="fab fa-facebook-f"></i>Facebook</a>
        </li>
        <li class="pt-1">
          <a href="https://www.linkedin.com/in/marina-manfredi-3a255180/" class="text-white"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
        </li>
        <li class="pt-1">
          <a href="https://www.instagram.com/marina_manfredi_/" class="text-white"><i class="fab fa-instagram"></i>Instagram</a>
        </li>
      </ul>
    </div>
    <div class="col-25">
      <h3>Contatti</h3>
      <address class="text-white">
        <div class="pt-1"><a href="mailto:info@marinamanfredi.com" class="text-white pt-1">info@marinamanfredi.com</a></div>
        <div class="pt-1"><a href="mailto:marina_manfredi@pec.it" class="text-white pt-1">marina_manfredi@pec.it</a></div>
        <div class="pt-1">p.iva 13066720015</div>
        <div class="pt-1">Torino, 10144</div>
      </address>
    </div>
    <div class="col-25">
      <h3>Cookie & Privacy Policy</h3>
      <div class="pt-1">
        <a href="/privacy-policy" class="text-white"> Privacy Policy</a> -
        <a href="/cookie-policy" class="text-white"> Cookie Policy</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="col-100 text-center">
      © Copyright <?php echo date("Y"); ?>
      <?php bloginfo('title'); ?> - Via Cavour 1 Torino, p.iva 13066720015
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
<!-- Script di Splide.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.4/splide.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new Splide('.splide', {
      type: 'loop',
      autoplay: true,
      interval: 3000, // 3 secondi
      perPage: 3, // Impostazione predefinita per desktop
      breakpoints: {
        768: { // Schermi con larghezza di 768px o inferiore (tipicamente tablet e smartphone)
          perPage: 1, // Mostra solo una slide alla volta su mobile
        },
      },
    }).mount();
  });
</script>
<?php endif; ?>

</body>

</html>