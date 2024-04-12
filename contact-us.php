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
              <a href="index.php">Home</a>
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
                  <a class="h3 tel" href="#">
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
                  <a class="h3 tel" href="#">
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
                  <a class="h3 tel" href="#">
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
                  <a class="h3 tel" href="#">
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

      <!-- Contact Form -->

      <div class="container section bottom">

        <div class="contact-outer">
          <div class="contact-info-container">
            <div class="contact-info">
              <p>
                <strong>
                  Email us on:
                </strong>
              </p>
              <p>
                <a class="h3" href="#">
                  sales@netmatters.com
                </a>
              </p>
              <p>
                <strong>
                  Business hours:
                </strong>
              </p>
              <p>
                <strong>
                  Monday - Friday 07:00 - 18:00
                </strong>
              </p>
            </div>

            <div class="accordion">
              <h4>
                <a href="#">
                  Out of Hours IT Support
                  <span class="icon-keyboard_arrow_down"></span>
                </a>
              </h4>
              <div class="accordion-info">
                <p>
                Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                </p>
                <p>
                  <strong>
                  Monday - Friday 18:00 - 22:00
                  </strong>
                  <strong>
                  Saturday 08:00 - 16:00
                  </strong>
                  <br>
                  <strong>
                  Sunday 10:00 - 18:00
                  </strong>
                </p>
                <p>
                To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. 
                </p>
              </div>
            </div>
          </div>

          <div class="contact-container">
            <form id="contact-form" action="include/insert-contact.php" method="post">
              
              <div class="sign-up-container">
                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="contact-name">
                      Your Name <span class="required">*</span>
                    </label>
                    <input id="contact-name" type="text" name="contact-name" required>
                  </div>
                </div>

                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="company">
                      Company Name
                    </label>
                    <input id="company" type="text" name="company">
                  </div>
                </div>
              </div>

              <div class="sign-up-container">
                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="contact-email">
                      Your Email <span class="required">*</span>
                    </label>
                    <input id="contact-email" type="email" name="contact-email" required>
                  </div>
                </div>

                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="telephone">
                      Your Telephone Number <span class="required">*</span>
                    </label>
                    <input id="telephone" type="tel" name="telephone" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="message">
                  Message <span class="required">*</span>
                </label>
                <textarea id="message" name="message" rows="5" cols="30" placeholder="Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?" required></textarea>
              </div>

              <div class="form-group">
                <label class="policy-container" for="checkbox-contact">
                  <input id="checkbox-contact" type="checkbox">
                  <span>
                    <strong>
                      Please tick this box if you wish to receive marketing information from us. Please see our <a
                        href="#">Privacy Policy</a> for more information on how we keep your data safe.
                      </strong>
                  </span>
                </label>
                </div>

                <div class="form-group">
                  <div class="captcha-container">
                    <span>
                      This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                    </span>
                  </div>
                </div>

                <div class="button-container">
                  <button id="contact-button" type="submit" class="btn btn-primary" action="#contact-form">
                    send inquiry
                  </button>
                  <span>
                    <span class="required">*</span> Fields Required
                  </span>
                </div>
            </form>
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
  <script src="js/contact.js"></script>
</body>
</html>