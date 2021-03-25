<?php
    $current_page = 'about';
    $sub_page = true;
    require 'header.tmpl.php';
?>
<body>
  <?php require 'navbar.tmpl.php'; ?>

<!-- about section -->
  <section class="about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-7">
          <div class="img-box">
            <img src="img/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-5 col-xl-5">
          <div class="detail_box">
            <div class="heading_container justify-content-end">
              <h2>
                About Flori Shop
              </h2>
            </div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing
              and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since ever since
              ever since
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end about section -->

  <?php
    require 'footer.tmpl.php';
  ?>
 