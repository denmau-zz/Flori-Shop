<?php
    $current_page = 'gallery';
    require 'inc/header.tmpl.php';
?>

  <!-- gallery section -->
  <section class="gallery_section layout_padding background-white">

    <div class="heading_container justify-content-center">
      <h2>
        Our Gallery
      </h2>
    </div>
    <div class="container">
      <div class="img_container">
        <div class="box-1">
          <div class="box-1-container">
            <div class="b-1">
              <div class="img-box">
                <img src="img/g-1.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="img/g-4.jpg" alt="">
              </div>
            </div>
            <div class="b-2">
              <div class="img-box">
                <img src="img/g-2.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="img/g-5.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="b-3">
            <div class="img-box">
              <img src="img/g-7.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="box-2">
          <div class="img-box">
            <img src="img/g-3.jpg" alt="">
          </div>
          <div class="img-box">
            <img src="img/g-6.jpg" alt="">
          </div>
          <div class="img-box flex-grow-1">
            <img src="img/g-8.jpg" alt="">
          </div>
        </div>
      </div>
  </section>
  <!-- end gallery section -->

<?php
    require 'inc/footer.tmpl.php';
?>