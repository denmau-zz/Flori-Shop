<?php
    $current_page = 'contact';
    $sub_page = true;
    require 'header.tmpl.php';
?>
<body>
  <?php require 'navbar.tmpl.php'; ?>
  
<!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

<?php
    require 'footer.tmpl.php';
?>