<?php
include '../../htdocs/Technology-News-Blog/admin/db_conn.php';



$sql = "SELECT news.id, news.image, news.title, news.content, users.name AS user_name 
        FROM news
        JOIN users ON news.user_id = users.id
        ORDER BY news.id DESC";

$sql1 = "SELECT * FROM posts ORDER BY created_at DESC";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>
    <link rel="stylesheet" href="style/news.css" />

    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/foter.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />


  </head>
<style>
.news {
  padding: 40px;
  background-color: #f4f4f4;
  margin: 0 auto;
  max-width: 1200px;
}

.news-header h2 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 20px;
}

.news-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.news-item {
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.news-item h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.news-date {
  font-size: 14px;
  color: #808080;
  margin-bottom: 15px;
}

.news-description {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 15px;
}

.read-more {
  text-decoration: none;
  color: #0d4058;
  font-weight: bold;
}

.read-more:hover {
  text-decoration: underline;
}

@media (max-width: 768px) {
  .news-content {
    grid-template-columns: 1fr;
  }
}

</style>
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
    <section class="news">
  <div class="news-header">
    <h2>Latest News</h2>
  </div>
  <div class="news-content">
    <?php
    $sql1 = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 2";
    $result1 = $conn->query($sql1);
    ?>
    
    <article class="news-item">
      <?php if ($result1->num_rows > 0): ?>
        <?php 
        $row = $result1->fetch_assoc();
        ?>
        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
        <p class="news-date"><?php echo date('F j, Y', strtotime($row['updated_at'])); ?></p>

        <p class="news-description"><?php echo htmlspecialchars($row['content']); ?></p>
        
        <a href="single-pagenews.php?id=<?php echo $row['id']; ?>" class="read-more">Read More</a>
      <?php else: ?>
        <div class="card">
          <h2>No posts available</h2>
          <p>There are no articles to display at the moment. Please check back later.</p>
        </div>
      <?php endif; ?>
    </article>
    
    <article class="news-item">
      <?php if ($result1->num_rows > 1): ?>
        <?php 
        $row = $result1->fetch_assoc();
        ?>
        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
        <p class="news-date"><?php echo date('F j, Y', strtotime($row['updated_at'])); ?></p>

        <p class="news-description"><?php echo htmlspecialchars($row['content']); ?></p>

        <!-- Read More Link with Dynamic ID -->
        <a href="single-pagenews.php?id=<?php echo $row['id']; ?>" class="read-more">Read More</a>
      <?php else: ?>
        <div class="card">
          <h2>No posts available</h2>
          <p>There are no articles to display at the moment. Please check back later.</p>
        </div>
      <?php endif; ?>
    </article>
</div>

</section>


    <section class="game-section">
    <div class="slider-container">
        <button class="nav-btn prev">&#10094;</button>

        <div class="slider">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="item" onclick="window.location.href='single-page.php?id=<?php echo $row['id']; ?>'">
                    <?php if (!empty($row['image'])): ?>
                        <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" alt="Post Image" style="width:100%; height:100%;" />
                    <?php endif; ?>
                    <div class="item-desc">
                        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p>
                            <?php 
                                $content = htmlspecialchars($row['content']);
                                echo (strlen($content) > 35) ? substr($content, 0, 35) . "..." : $content;
                            ?>
                        </p>
                        <p>Posted by: <?php echo htmlspecialchars($row['user_name']); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php $conn->close(); ?>

        <button class="nav-btn next">&#10095;</button>
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
