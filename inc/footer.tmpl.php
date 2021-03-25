  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5>
              Flori Shop
            </h5>
            <p>
              A flower can say it better.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links pl-lg-5">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li class="<?php if ($current_page === 'index') {echo 'active';} ?>">
                <a href="index.php">
                  Home
                </a>
              </li>
              <li class="<?php if ($current_page === 'about') {echo 'active';} ?>">
                <a href="about.php">
                  About us
                </a>
              </li>
              <li class="<?php if ($current_page === 'gallery') {echo 'active';} ?>">
                <a href="gallery.php">
                  Gallery
                </a>
              </li>
              <li class="<?php if ($current_page === 'contact') {echo 'active';} ?>">
                <a href="contact.php">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-1">
                    <img src="img/insta-1.png" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-2">
                    <img src="img/insta-2.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-3">
                    <img src="img/insta-3.png" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-4">
                    <img src="img/insta-4.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-3">
                    <img src="img/insta-5.png" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com">
                  <div class="insta-box b-4">
                    <img src="img/insta-6.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Contact
            </h5>
            <div>
              <img src="img/location-white.png" alt="">
              <p>
                Naivasha CBD
              </p>
            </div>
            <div>
              <img src="img/telephone-white.png" alt="">
              <p>
                +254 759360020
              </p>
            </div>
            <div>
              <img src="img/envelope-white.png" alt="">
              <p>
                devdenmau@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
    <a href="https://denmau.me/">Flori Shop</a>
      <span><?php echo date('Y'); ?> &copy;</span>
      All Rights Reserved
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
  <!-- End Google Map -->

</body>

</html>