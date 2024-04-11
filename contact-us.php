<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Netmatters</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div id="main-content-container">
    <div class="main-content">

      <?php
      @include("include/cookies.php");
      @include("include/header.php");
      ?>

      <div class="library-container">
        <div class="container">
          <ul class="library">
            <li>
              <a href="/">Home</a>
            </li>

            <li>
              Our Offices
            </li>
          </ul>
        </div>
      </div>

      <!-- Our Offices -->

      <div class="section top">
        <div class="page-header">
          <div class="container">
            <h1>Our Offices</h1>
          </div>
        </div>
      </div>

      <div class="office-addresses">
        <div class="office-list container">

          <!-- London Office -->

          <div class="office-container">
            <div class="office-card">
              <img src="img/contact/london.jpg" alt="London Office">
              <div class="office-content">
                <p class="h2">
                  <a href="#">
                    London Office
                  </a>
                </p>
                <p class="address">
                  Unit G6,
                  <br>
                  Pixel Business Centre,
                  <br>
                  110 Brooker Road, Waltham Abbey,
                  <br>
                  London,
                  <br>
                  EN9 1JH
                </p>
                <p>
                  <a class="tel" href="#">
                  02045 397356
                  </a>
                </p>
                <a class="btn btn-web" href="#">
                  View More
                </a>
              </div>

              <div class="map">

              </div>
            </div>
          </div>

          <!-- Cambridge Office -->

          <div class="office-container">
            <div class="office-card">
              <img src="img/contact/cambridge.jpg" alt="Cambridge Office">
              <div class="office-content">
                <p class="h2">
                  <a href="#">
                    Cambridge Office
                  </a>
                </p>
                <p class="address">
                  Unit 1.31,
                  <br>
                  St John's Innovation Centre,
                  <br>
                  Cowley Road Milton,
                  <br>
                  Cambridge,
                  <br>
                  CB4 0WS
                </p>
                <p>
                  <a class="tel" href="#">
                  01223 37 57 72
                  </a>
                </p>
                <a class="btn btn-web" href="#">
                  View More
                </a>
              </div>

              <div class="map">

              </div>
            </div>
          </div>

          <!-- Wymondham Office -->

          <div class="office-container">
            <div class="office-card">
              <img src="img/contact/wymondham.jpg" alt="Wymondham Office">
              <div class="office-content">
                <p class="h2">
                  <a href="#">
                    Wymondham Office
                  </a>
                </p>
                <p class="address">
                  Unit 15,
                  <br>
                  Penfold Drive,
                  <br>
                  Gateway 11 Business Park,
                  <br>
                  Wymondham, Norfolk,
                  <br>
                  NR18 0WZ
                </p>
                <p>
                  <a class="tel" href="#">
                  01603 70 40 20
                  </a>
                </p>
                <a class="btn btn-web" href="#">
                  View More
                </a>
              </div>

              <div class="map">

              </div>
            </div>
          </div>

          <!-- Great Yarmouth Office -->

          <div class="office-container">
            <div class="office-card">
              <img src="img/contact/yarmouth-2.jpg" alt="Great Yarmouth Office">
              <div class="office-content">
                <p class="h2">
                  <a href="#">
                    Great Yarmouth Office
                  </a>
                </p>
                <p class="address">
                  Suite F23,
                  <br>
                  Beacon Innovation Centre,
                  <br>
                  Beacon Park, Gorleston,
                  <br>
                  Great Yarmouth, Norfolk,
                  <br>
                  NR31 7RA
                </p>
                <p>
                  <a class="tel" href="#">
                  01493 60 32 04
                  </a>
                </p>
                <a class="btn btn-web" href="#">
                  View More
                </a>
              </div>

              <div class="map">

              </div>
            </div>
          </div>

        </div>
      </div>

    <?php @include("include/newsletter.php") ?>

    <?php @include("include/footer.php") ?>

    </div>
  </div>

  <?php @include("include/side-menu.php") ?>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="js/sticky-header.js"></script>
  <script src="js/side-menu.js"></script>
  <script src="js/cookies.js"></script>
</body>
</html>