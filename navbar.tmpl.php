<!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php" translate="no">
            <span>
              Flori Shop
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item <?php if ($current_page === 'index') {echo 'active';} ?>">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($current_page === 'about') {echo 'active';} ?>">
                  <a class="nav-link" href="about.php"> About us</a>
                </li>
                <li class="nav-item <?php if ($current_page === 'gallery') {echo 'active';} ?>">
                  <a class="nav-link" href="gallery.php"> Gallery </a>
                </li>
                <li class="nav-item <?php if ($current_page === 'contact') {echo 'active';} ?>">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
            </div>
              <ul class="navbar-nav quote_btn-container">
                <li class="nav-item <?php if ($current_page === 'login') {echo 'active';} ?>">
                  <a class="nav-link" href="login.php">Log In</a>
                </li>
                <li class="nav-item <?php if ($current_page === 'about') {echo 'active';} ?>">
                  <a href="#"><img src="img/cart.png" alt=""></a>
                </li>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->