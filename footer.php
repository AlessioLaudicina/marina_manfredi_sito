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
            <li class="pt-1"><a href="#" class="text-white">Facebook</a></li>
            <li class="pt-1"><a href="#" class="text-white">Twitter</a></li>
            <li class="pt-1"><a href="#" class="text-white">Instagram</a></li>
        </ul>
    </div>
    
    <div class="col-25">
      <h3>Contatti</h3>
        <address class="text-white">
            Via Cavour 1, Torino<br>
            P.Iva 0000000000<br>
          <a href="marina.manfredi@gmail.com" class="text-white">marina.manfredi@gmail.com</a>
        </address>
    </div>

    <div class="col-25">
      <h3>Cookie & Privacy Policy</h3>
      <a href="/privacy-policy"> Privacy Policy</a> - <a href="/cookie-policy"> Cookie Policy</a>
    </div>
  </div>

  <div  style="border: 1px solid black; display: flex; justify-content: center; align-items: center;">
    <div class="col-100 text-center" >
      © Copyright <?php echo date("Y"); //display current year 
                  ?>
      <?php bloginfo('title'); // display wp blog title 
      ?> -
      Via Cavour 1 Torino, P.Iva 0000000000
    </div>
  </div>

</footer>

<?php wp_footer(); // insert scripts by WordPress at at end of the page 
?>

</body>

</html>