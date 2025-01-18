<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost"; 
    $username = "root";        
    $password = "";            
    $dbname = "test_db"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $conn->real_escape_string(trim($_POST['firstName']));
    $last_name = $conn->real_escape_string(trim($_POST['lastName']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $mobile = $conn->real_escape_string(trim($_POST['mobile']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    if (empty($first_name) || empty($last_name) || empty($email) || empty($mobile) || empty($message)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit;
    }

    $sql = "INSERT INTO contacts (first_name, last_name, email, mobile, message) 
            VALUES ('$first_name', '$last_name', '$email', '$mobile', '$message')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology News Blog</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/contact-us.css" />

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

    <!-- /// -->
    <section class="contact_us">
      <div class="container">
        <div class="contactInfo">
          <div>
            <h2>Contact Info</h2>
            <ul class="info">
              <li>
                <span><img src="images/contact-us/location.png" alt="" /></span>
                <a
                  href="https://www.google.com/maps?q=Klan+Kosova,+M529+63M,+Hyzri+Talla,+Prishtina+10000"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <span class="contactus_span"
                    >Klan Kosova, M529+63M, Hyzri Talla, Prishtina 10000</span
                  >
                </a>
              </li>
              <li>
                <span><img src="images/contact-us/mail.png" alt="" /></span>
                <a href="mailto:ismail.xhela@klankosova.tv">
                  <span class="contactus_span">
                    ismail.xhela@klankosova.tv
                  </span>
                </a>
              </li>
              <li>
                <span><img src="images/contact-us/call.png" alt="" /></span>
                <a href="tel:+38348595958">
                  <span class="contactus_span">+383 48 59 59 58</span>
                </a>
              </li>
            </ul>
          </div>
          <ul class="socialIcon">
            <li>
              <a href="#"><img src="images/contact-us/1.png" alt="" /></a>
            </li>
            <li>
              <a href="#"><img src="images/contact-us/2.png" alt="" /></a>
            </li>
            <li>
              <a href="#"><img src="images/contact-us/3.png" alt="" /></a>
            </li>

            <li>
              <a href="#"><img src="images/contact-us/5.png" alt="" /></a>
            </li>
          </ul>
        </div>
            <div class="contactForm">
                <h2>Send a Message</h2>
                <form id="contactForm" method="POST">
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="lastName" placeholder="Last Name" required>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="inputBox w50">
                            <input type="tel" name="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message" placeholder="Write Your Message Here." required></textarea>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Submit" class="submit">
                        </div>
                    </div>
                </form>
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
