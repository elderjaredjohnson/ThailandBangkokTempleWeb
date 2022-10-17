<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thailand Bangkok Temple</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="images/favicon_io/favicon.ico">
    <script src="https://kit.fontawesome.com/4e5974cd8a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <header>
      <div style="float:left;"> <!-- Logo and Name -->
        <a href="index.html">
          <img src="images/TBTLogo_ENG.png" alt="Thailand Bangkok Temple Open House" width="auto" height="98vh" style="margin-top:1vh; margin-left:20px;"/>
        </a>
      </div>

      <div class="nav-bar">
        <a href="visit.html" class="visitbtn">Visit</a>
        <a href="come-and-see.html">Come and See</a>
        <a href="resources.html">Resources</a>
        <div class="navdropdown">
          <a class="navdropbtn">Media <i class="fa-solid fa-angle-down"></i></a>
          <div class="navdropdown-content" id="navdropdown-content">
            <a href="media-kit.html">Media Kit</a>
            <a href="press-releases.html">Press Releases</a>
            <a href="media-coverage.php">Media Coverage</a>
          </div>
        </div>
        <a href="faq.html">FAQ</a>
        <a href="gallery.html">Galleries</a>
        <a href="about.html">About</a>
      </div>

      <div class="dropdown" style="float:right;"> <!-- Dropdown Bar -->
        <button class="dropbtn"><i class="fa-solid fa-bars"></i></button>
        <div class="dropdown-content" id="dropdown-content">
          <a href="about.html">About</a>
          <a href="gallery.html">Galleries</a>
          <a href="faq.html">FAQ</a>
          <a id="Media">Media <i class="fa-solid fa-angle-down"></i></a>
          <div id="media-options">
            <a href="media-kit.html">Media Kit</a>
            <a href="press-releases.html">Press Releases</a>
            <a href="media-coverage.html">Media Coverage</a>
          </div>
          <a href="resources.html">Resources</a>
          <a href="come-and-see.html">Come and See</a>
          <a href="visit.html">Visit</a>
        </div>
      </div>
    </header>

    <div class="body-content">
      <div class="media-header">
        <p>Media  >  <a href="media-kit.html" class="link">Media Kit</a>  |  <a href="press-releases.html" class="link">Press Releases</a>  |  <a href="media-coverage.php" class="link">Media Coverage</a></p>
      </div>
      
      <p class="section-header">Media Coverage</p>

      <div class="divider-div"><div></div></div>

      <ul style="width: 70%; margin-left: 15%; padding:0;">
        <?php
          if (($open = fopen("database/media-coverage.csv", "r")) !== FALSE){

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
              $array[] = $data;
            }

            fclose($open);

            for ($k = 1 ; $k < 14; $k++){
              $header = $array[$k][0];
              $time = $array[$k][1];
              $publisher = $array[$k][2];
              $img = $array[$k][3];
              $newslink = $array[$k][4];

              echo "<li style='list-style-type: none; margin-top: 5px; margin-bottom: 5px; height: 100px; width: 100%;'><a href='$newslink' style='text-decoration:none; color:black;'><img src='$img' style='height:100px; width:100px; object-fit:cover;'/><div style='float: right; height: 100px; width:calc(100% - 100px);'><p style='width: fit-content; padding-left: 15px; padding-top:15px; text-align:left;'>$header</p><p style='width: fit-content; padding-left: 15px; font-size: 15px;'>$time &#9642 $publisher</p></div></a></li>";
            }
          }
        ?>
        </ul>
      </div>

      <div class="small-screen">
        <p> To use this website properly, please use a wider screen</p>
      </div>

    <footer>
      <div class="wide-screen">
        <div class="footer-seperator" >
          <div class="footer-1"> <!--Newsletter/Subscribe/Social-->
            <div>
              <p>
                Subscribe to the Newsletter
              </p>

              <form action="/action_page.php" style="width:100%;" class="subscribe-btn" data-netlify="true" name="subscribe-footer">
                <input type="email" id="email2" name="email" placeholder="What is your best email?">
                <hr>
                <input type="submit" class="submit-btn" value="Subscribe">
              </form>
            </div>

            <div class="social-div">
              <div class="social-box">
                <i class="fa-brands fa-facebook-f"></i>
              </div>

              <div class="social-box">
                <i class="fa-brands fa-instagram"></i>
              </div>

              <div class="social-box">
                <i class="fa-solid fa-envelope"></i>
              </div>

              <div class="social-box">
                <i class="fa-brands fa-youtube"></i>
              </div>
            </div>

            <p class="not-official">
              This website is not an official site of The Church of Jesus Christ of Latter-day Saints.
            </p>
          </div>

          <div class="footer-2"> <!-- Home-->
            <p>
              <a href="index.html" class="footer-header">Home</a>
            </p>

            <hr>

            <a class="footer-link" href="open-house.html">
              Open House Details
            </a>

            <hr>

            <a class="footer-link" href="https://newsroom.churchofjesuschrist.org/article/new-temples-announced-abidjan-ivory-coast--cote-divoire-port-au-prince-haiti-bangkok-thailand" target="_blank">
              Temple Announcement
            </a>
          </div>

          <div class="footer-3"> <!-- About -->
            <p>
              <a href="about.html" class="footer-header">About</a>
            </p>

            <hr>

            <a href="about.html" class="footer-link">
              What is a Temple?
            </a>

            <hr>

            <a href="about.html#Christian_Beliefs" class="footer-link">
              Christian Beliefs
            </a>

            <hr>

            <a href="about.html#History_Of-Thailand_Bangkok_Temple" class="footer-link">
              History of the Thailand Bangkok Temple
            </a>
          </div>

          <div class="footer-4"> <!-- Media -->
            <p>
              <a href="media-coverage.html" class="footer-header">Media</a>
            </p>

            <hr>

            <a href="press-releases.html" class="footer-link">
              Press Releases
            </a>

            <hr>

            <a href="media-coverage.html" class="footer-link">
              Media Coverage
            </a>

            <hr>

            <a href="contact-us.html" class="footer-link">
              Inquiries
            </a>
          </div>
        </div>

        <div class="footer-5"> <!-- legal stuff -->
          <p style="float:left;">
            © All rights reserved.
          </p>

          <p style="float:right;">
            thailandbangkoktemple.com
          </P>
        </div>
      </div>

      <div class="narrow-screen">
        <div class="narrow-center">
          <p>
            <a href="index.html" class="footer-header">Home</a>
          </p>

          <hr>

          <a class="footer-link" href="open-house.html">
            Open House Details
          </a>

          <hr>

          <a class="footer-link" href="https://newsroom.churchofjesuschrist.org/article/new-temples-announced-abidjan-ivory-coast--cote-divoire-port-au-prince-haiti-bangkok-thailand" target="_blank">
            Temple Announcement
          </a>

          <p>
            <a href="about.html" class="footer-header">About</a>
          </p>

          <hr>

          <a href="about.html" class="footer-link">
            What is a Temple?
          </a>

          <hr>

          <a href="about.html#Christian_Beliefs" class="footer-link">
            Christian Beliefs
          </a>

          <hr>

          <a href="about.html#History_Of-Thailand_Bangkok_Temple" class="footer-link">
            History of the Thailand Bangkok Temple
          </a>

          <p>
            <a href="media-coverage.html" class="footer-header">Media</a>
          </p>

          <hr>

          <a href="press-releases.html" class="footer-link">
            Press Releases
          </a>

          <hr>

          <a href="media-coverage.html" class="footer-link">
            Media Coverage
          </a>

          <hr>

          <a href="contact-us.html" class="footer-link">
            Inquiries
          </a>

          <div>
            <p>
              Subscribe to the Newsletter
            </p>

            <form action="/action_page.php" style="width:100%;" class="subscribe-btn" data-netlify="true" name="subscribe-footer">
              <input type="email" id="email2" name="email" placeholder="What is your best email?">
              <hr>
              <input type="submit" class="submit-btn" value="Subscribe">
            </form>
          </div>

          <div class="social-div" style="margin-top:15px;">
            <div class="social-box">
              <i class="fa-brands fa-facebook-f"></i>
            </div>

            <div class="social-box">
              <i class="fa-brands fa-instagram"></i>
            </div>

            <div class="social-box">
              <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="social-box">
              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>

          <p class="not-official">
            This website is not an official site of The Church of Jesus Christ of Latter-day Saints.
          </p>
        </div>

        <div class="footer-5">
          <p style="float: left; padding-left: 15px; padding-right: 0px; font-size: 12px;">
            © All rights reserved.
          </p>

          <p style="float: right; padding-right: 15px; padding-left: 0px; font-size: 10px; padding-top: 17px;">
            thailandbangkoktemple.com
          </P>
        </div>
      </div>
    </footer>
  </body>
</html>
