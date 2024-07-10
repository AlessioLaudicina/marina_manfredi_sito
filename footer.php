<footer class="footer mt-2 text-white">
  <div class="grid pt-3">
    <div class="col-25">
      <h3>Quick links</h3>
      <ul class="list-unstyled">
        <li class="pt-1"><a href="#" class="text-white">Home</a></li>
        <li class="pt-1"><a href="#" class="text-white">Blog</a></li>
        <li class="pt-1"><a href="#" class="text-white">Servizi</a></li>
        <li class="pt-1"><a href="#" class="text-white">Contattami</a></li>
      </ul>
    </div>
    <div class="col-25">
      <h3>Social</h3>
      <ul class="list-unstyled">
        <li class="pt-1">
          <a href="#" class="text-white"><i class="fab fa-facebook-f"></i> Facebook</a>
        </li>
        <li class="pt-1">
          <a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a>
        </li>
        <li class="pt-1">
          <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
        </li>
      </ul>
    </div>
    <div class="col-25">
      <h3>Contatti</h3>
      <address class="text-white">
        Via Cavour 1, Torino<br>
        P.Iva 0000000000<br>
        <a href="mailto:marina.manfredi@gmail.com" class="text-white">marina.manfredi@gmail.com</a>
      </address>
    </div>
    <div class="col-25">
      <h3>Cookie & Privacy Policy</h3>
      <a href="/privacy-policy" class="text-white"> Privacy Policy</a> -
      <a href="/cookie-policy" class="text-white"> Cookie Policy</a>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="col-100 text-center">
      © Copyright <?php echo date("Y"); ?>
      <?php bloginfo('title'); ?> - Via Cavour 1 Torino, P.Iva 0000000000
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<!-- Script di Splide.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.4/splide.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new Splide('.splide', {
      type: 'loop',
      autoplay: true,
      interval: 2000, // 3 seconds
    }).mount();
  });
</script>
</body>

</html>