<?php 
include '../../htdocs/Technology-News-Blog/admin/db_conn.php';
$sql = "SELECT * FROM about_us ORDER BY created_at DESC";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Technology Company</title>
    <link rel="stylesheet" href="style/about-us.css?v=1.0">
   
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

    <section class="about-us">
        <div class="container">
        <div class="section dynamic-content">
            <?php if ($result->num_rows > 0): ?>
                <?php 
              
                while($row = $result->fetch_assoc()) {
                    echo "<div class='content-item'>";
                    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                    echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                    echo "</div>";
                }
                ?>
            <?php else: ?>
                <p>No additional content available at the moment.</p>
            <?php endif; ?>
        </div>
         

        </div>
    </section>

    <section class="core-technologies">
        <div class="container">
     
            <div class="tech-list">
                <div class="tech-item">
                    <h3>Artificial Intelligence (AI)</h3>
                    <p>AI is the cornerstone of many of our products. We use machine learning to improve efficiency and provide intelligent solutions that anticipate needs.</p>
                </div>
                <div class="tech-item">
                    <h3>Blockchain</h3>
                    <p>We implement blockchain technology to ensure secure, decentralized, and transparent transactions that are reliable for all users.</p>
                </div>
                <div class="tech-item">
                    <h3>Cloud Computing</h3>
                    <p>Our cloud-based solutions allow businesses to scale rapidly and access their data securely from anywhere in the world.</p>
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
            <div class="social-links" >
              <h2>Follow Us</h2>
              <img src="./assets/images/about/home_line.png" alt="" />
              <div class="social-icons" >
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
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="main.js"></script>

    <script >
$(document).ready(function () {
    let currentIndex = 0;
    const items = $(".slider .item");
    const totalItems = items.length;
    const itemWidth = $(".item").outerWidth(true);
    const slider = $(".slider");

    function updateSlider() {
        let newTransformValue = -currentIndex * itemWidth; 
        slider.css("transform", `translateX(${newTransformValue}px)`);
    }

    $(".next").click(function () {
        if (currentIndex + 3 < totalItems) {
            currentIndex += 3; 
        } else {
            currentIndex = 0; 
        }
        updateSlider();
    });

    $(".prev").click(function () {
        if (currentIndex >= 3) {
            currentIndex -= 3; 
        } else {
            currentIndex = totalItems - (totalItems % 3); 
        }
        updateSlider();
    });

    setInterval(function () {
        $(".next").click();
    }, 8000);
});



    </script>

</body>
</html>
