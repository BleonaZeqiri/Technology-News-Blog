<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
              <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

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
    <section class="portrait-news">
      <div class="container">
        <div class="portrait-section">
          <div class="portrait-left">
            <a href="#">
              <img class="portrait-news-img" src="images/home/i.png" />
              <div class="overlay"></div>
              <h2>
                Demystifying the foundations of AI in Justice and Public Safety
              </h2>
            </a>
          </div>
          <div class="portrait-right">
            <div class="portrait-cards">
              <a href="#">
                <div class="portrait-card">
                  <img
                    class="portrait-news-image"
                    src="images/home/image3.jpeg"
                  />
                  <div class="portrait-news-content">
                    <h4>ChatGPT: Concept vs Reality.</h4>
                    <p>
                      Initially designed to serve as a multifaceted
                      conversational tool, ChatGPT has evolved far beyond its
                      original design, branching out to applications in a
                      variety of fields .
                    </p>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
              <a href="singel-page.php">
                <div class="portrait-card">
                  <div class="portrait-news-content">
                    <img
                      class="portrait-news-image"
                      src="images/home/image4.png"
                    />
                    <h4>What Is the Definition of Information Technology?</h4>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="portrait-card">
                  <img
                    class="portrait-news-image"
                    src="images/home/image4.jpeg"
                  />
                  <div class="portrait-news-content">
                    <h4>29 Types of Information Technology (2023-2024)</h4>
                    <p>
                      The top IT service companies can help you determine which
                      types best meet your business needs. However, for a better
                      overview, we’ll share some of the most important types of
                      IT and the roles they play today.
                    </p>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="portrait-card">
                  <div class="portrait-news-content">
                    <img
                      class="portrait-news-image"
                      src="images/home/image1.jpeg"
                    />
                    <h4>
                      Facts About Information Technology (Plus 13 Benefits of
                      IT)
                    </h4>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="portrait-card">
                  <img
                    class="portrait-news-image"
                    src="images/home/image2.jpeg"
                  />
                  <div class="portrait-news-content">
                    <h4>Information Technology - CareerWise Elkhart</h4>
                    <p>
                      The information technology (IT) and software industry is
                      one of the largest in the country, with millions of IT
                      professionals in virtually every industry.
                    </p>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="portrait-card">
                  <div class="portrait-news-content">
                    <img
                      class="portrait-news-image"
                      src="images/home/image7.png"
                    />
                    <h4>The Future Of Information Technology | ITI College</h4>
                    <p class="portrait-news-content-p">26.10.2024</p>
                  </div>
                </div>
              </a>
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
}else{
     header("Location: index.php");
     exit();
}
 ?>