<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Expandable Card Slider</title>
    <link rel="stylesheet" href="style/news.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/foter.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />


  </head>
  <body>
  <div class="header-top">
      <div class="container">
        <div class="header-row">
          <div class="header-info-left">
            <ul>
              <li>
                <img src="images/home/header_icon1.png" alt="" />34ºc, Sunny
              </li>
              <li>
                <img src="images/home/header_icon2.png" alt="" />Tuesday, 18th
                June, 2019
              </li>
            </ul>
          </div>
          <div class="header-info-right">
            <ul class="header-social">
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="header-flex">
          <div class="logo">
            <a href="index.php"
              ><img src="images/home/logo.svg" alt="Logo"
            /></a>
          </div>
          <div class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
          </div>
          <div class="mobile-menu" id="mobileMenu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>
                <a href="articles.php">Articles</a>
              </li>
              <li>
                <a href="news.php">News</a>
              </li>
              <li><a href="contact-us.php"> Contact Us</a></li>
              <li><a href="admin/index.php">  Login</a></li>

            </ul>
            <div class="header-right-btn">
              <div class="search-box">
                <input type="text" placeholder="Search" />
                <i class="fas fa-search special-tag"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="game-section">
      <button class="nav-btn prev">&#10094;</button>

      <div class="slider-container">
        <div class="slider">
          <div
            class="item active"
            style="
              background-image: url('https://ucarecdn.com/75d7700d-c102-40ff-9ba1-f0641444c616/dota2.jpg');
            "
          >
            <div class="item-desc">
              <h3>Dota 2</h3>
              <p>Dota 2 is a multiplayer online battle arena by Valve.</p>
            </div>
          </div>
          <div
            class="item"
            style="
              background-image: url('https://ucarecdn.com/2a5f69bc-befa-49f4-acc6-ab1dcae514c7/winter3.jpg');
            "
          >
            <div class="item-desc">
              <h3>The Witcher 3</h3>
              <p>An action role-playing game set in a fantasy open world.</p>
            </div>
          </div>
          <div
            class="item"
            style="
              background-image: url('https://ucarecdn.com/ec1918b1-2674-452c-bf61-8f73d8cc40c6/rdr2.jpg');
            "
          >
            <div class="item-desc">
              <h3>RDR 2</h3>
              <p>
                A Western action-adventure game developed by Rockstar Games.
              </p>
            </div>
          </div>
          <div
            class="item"
            style="
              background-image: url('https://ucarecdn.com/6ba9052d-6105-4491-917b-e1a65b68f920/pubg.jpg');
            "
          >
            <div class="item-desc">
              <h3>PUBG Mobile</h3>
              <p>A battle royale shooter game.</p>
            </div>
          </div>
          <div
            class="item"
            style="
              background-image: url('https://ucarecdn.com/77598be3-c67f-40de-83d3-71a0f2f76c56/fortnite.jpg');
            "
          >
            <div class="item-desc">
              <h3>Fortnite</h3>
              <p>A survival game with battle royale mode.</p>
            </div>
          </div>
        </div>
      </div>
      <button class="nav-btn next">&#10095;</button>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 firs-row">
            <a href="index.php"
              ><img
                src="images/home/logo.svg"
                alt=""
                class="img-fluid logo-footer"
            /></a>
            <div class="footer-about">
              <p class="footer-paragraph">
                "Klan Kosova" television was founded in December 2008. It began
                broadcasting on February 17, 2009, with the symbolism of marking
                the one-year anniversary of the declaration of Kosovo's
                independence.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="useful-link">
              <h2>Pages</h2>
              <br />
              <div class="use-links">
                <li>
                  <a href="index.php"
                    ><i class="fa-solid fa-angles-right"></i> Home</a
                  >
                </li>
                <li>
                  <a href="articles.php"
                    ><i class="fa-solid fa-angles-right"></i> Articles</a
                  >
                </li>
                <li>
                  <a href="contact-us.php"
                    ><i class="fa-solid fa-angles-right"></i> Contact Us</a
                  >
                </li>
                <li>
                  <a href="news.php"
                    ><i class="fa-solid fa-angles-right"></i> News</a
                  >
                </li>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="social-links">
              <h2>Follow Us</h2>
              <img src="./assets/images/about/home_line.png" alt="" />
              <div class="social-icons">
                <li>
                  <a href=""><i class="fa-brands fa-twitter"></i> Twitter</a>
                </li>
                <li>
                  <a href=""
                    ><i class="fa-brands fa-instagram"></i> Instagram</a
                  >
                </li>
                <li>
                  <a href=""
                    ><i class="fa-brands fa-linkedin-in"></i> Linkedin</a
                  >
                </li>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="address">
              <h2>Address</h2>
              <img
                src="./assets/images/about/home_line.png"
                alt=""
                class="img-fluid"
              />
              <div class="address-links">
                <li class="address1">
                  <i class="fa-solid fa-location-dot"></i> Klan Kosova,
                  M529+63M, Hyzri Talla, Prishtina 10000
                </li>
                <li>
                  <a href=""
                    ><i class="fa-solid fa-phone"></i> +383 48 59 59 58</a
                  >
                </li>
                <li>
                  <a href=""
                    ><i class="fa-solid fa-envelope"></i>
                    marketing@klankosova.tv</a
                  >
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section id="copy-right">
      <div class="copy-right-sec">
        <i class="fa-solid fa-copyright"></i> 2024 Klan Kosova - All rights
        reserved
      </div>
    </section>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="main.js"></script>

  </body>
</html>
