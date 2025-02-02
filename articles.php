<?php 
include '../../htdocs/Technology-News-Blog/admin/db_conn.php';
$sql1 = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 3";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM article_post ORDER BY created_at DESC";
$result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology News Blog</title>
    <link rel="stylesheet" href="style/articles.css" />
    <link rel="stylesheet" href="style/style.css" />

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
    <span id="currentDate"></span>
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
                <a href="about-us.php">About Us</a>
              </li>
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
    <div class="container articles">
    <div class="leftcolumn">
    <?php if ($result2->num_rows > 0): ?>
        <?php while ($row = $result2->fetch_assoc()): ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                <h5><?php echo date('d.m.Y', strtotime($row['created_at'])); ?></h5>
                <?php if (!empty($row['image'])): ?>
                    <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" alt="Post Image" />
                <?php endif; ?>
                <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="card">
            <h2>No articles available</h2>
            <p>There are no articles to display at the moment. Please check back later.</p>
        </div>
    <?php endif; ?>
</div>

      <div class="rightcolumn">
        <div class="cards">
          <h2 class="cards-h2">Lates Post</h2>
          <hr />
          <br />
          <?php if ($result1->num_rows > 0): ?>
          <?php while ($row = $result1->fetch_assoc()): ?>
            <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" alt="Post Image" style="width:100%;" />

            <p><?php echo htmlspecialchars($row['content']); ?></p>
         
          <?php endwhile; ?>
        <?php else: ?>
          <div class="card">
            <h2>No posts available</h2>
            <p>There are no articles to display at the moment. Please check back later.</p>
          </div>
        <?php endif; ?>
        </div>
        <div class="card">
          <h3>Popular Post</h3>
          <hr />
          <br />
          <img src="images/about/image3.jpeg" class="img" />

          <br />
          <img src="images/about/img.avif" class="img" />
          <br />
          <img src="images/home/image2.jpeg" class="img" />
        </div>
        <div class="card">
          <h3><a href="contact-us.php">Contact Us</a></h3>
          <hr />
          <p style="margin-top: 10px">
            "Klan Kosova" television was founded in December 2008. It began
            broadcasting on February 17, 2009, with the symbolism of marking the
            one-year anniversary of the declaration of Kosovo's independence.
          </p>
        </div>
      </div>
    </div>
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
