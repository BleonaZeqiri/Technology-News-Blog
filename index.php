<?php 
include '../../htdocs/Technology-News-Blog/admin/db_conn.php';
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology News Blog</title>
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
                <div id="currentDate"></div>
              </li>

            </ul>
          </div>
          <div class="header-info-right">
            <ul class="header-social">
          
  <li>
    <span id="currentDate"></span>
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
            
          </div>
        </div>
      </div>
    </div>
    <section class="portrait-news">
      <div class="container">
        <div class="portrait-section">
          <div class="portrait-left">
            <a href="#">
              <img class="portrait-news-img" src="images/home/i.png" />
              <div class="overlay"></div>
              <h2>Demystifying the foundations of AI in Justice and Public Safety</h2>
            </a>
          </div>
          <div class="portrait-right">
            <div class="portrait-cards">
              <?php
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<a href="single-homepage.php?id=' . $row['id'] . '">
                          <div class="portrait-card">
                          <div class="image" style="width:175px; height:130px;">
                          <img class="portrait-news-image" src="admin/' . $row['image'] . '" alt=""  style="width:100%; height:100%;"/>
                          </div>
                            <div class="portrait-news-content">
                              <h4>' . $row['title'] . '</h4>
                              <p>' . substr($row['content'], 0, 100) . '...</p>
                              <p class="portrait-news-content-p">' . date("F j, Y", strtotime($row['created_at'])) . '</p>
                            </div>
                          </div>
                        </a>';
                }
              } else {
                echo "<p>No posts available.</p>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
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
    <script src="main.js"></script>
  </body>
</html>

<?php 
  header("Location: admin/login.php");
  exit();
?>

