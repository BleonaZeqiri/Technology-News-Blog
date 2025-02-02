
<?php
session_start();
include("../admin/db_conn.php");

if (!isset($_SESSION['id'])) {
    header("Location: ../admin/index.php");
    exit();
}

$user_id = $_SESSION['id'];

$query = "SELECT * FROM posts WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="superadmin.css?v=1.0">

</head>

<body>
    <header>
        <div class="logosec">
            <div class="logo">TechnologyNews</div>
            <img src="images/hamburger.svg" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <div class="dropdown">
            <img src="images/user.svg" class="dpicn dropbtn" alt="dp">
            <div class="dropdown-content" style="left:0;">
                <a href="profile.php">Profile</a>
                <a href="../admin/logout.php">Logout</a>
            </div>
        </div>
    </header>
    <div class="main-container">
        <div class="navcontainer">
        <nav class="nav">
    <div class="nav-upper-options">
    <a href="superadmin.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'superadmin.php' ? 'active' : ''; ?>">
            <img src="images/home.svg" class="nav-img" alt="dashboard">
            <h3 class="home">Home</h3>
        </a>
        <a href="about_us.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'active' : ''; ?>">
            <img src="images/article.svg" class="nav-img" >
            <h3>About Us</h3>
        </a>
        <a href="articles.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active' : ''; ?>">
            <img src="images/article.svg" class="nav-img" >
            <h3>Articles</h3>
        </a>
        <a href="contact.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
            <img src="images/contacts.svg" class="nav-img" >
            <h3>Contact</h3>
        </a>
        <a href="news.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : ''; ?>">
            <img src="images/contacts.svg" class="nav-img" >
            <h3>News</h3>
        </a>
        <a href="register.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
            <img src="images/user.svg" class="nav-img" >
            <h3>Register</h3>
        </a>
        <a href="../admin/logout.php"  class="nav-option">
            <img src="images/logout.svg" class="nav-img" >
            <h3>Logout</h3>
        </a>
  
      
    </div>
</nav>

        </div>
        <div class="profile">
        <img src="images/user.svg">
        <br>
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
        </div>
  
    </div>
    <script>
        var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
};

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
var editModal = document.getElementById("editModal");
var editBtn = document.getElementById("editBtn");
var closeEdit = document.getElementsByClassName("close-edit")[0];

var addModal = document.getElementById("myModal");
var addBtn = document.getElementById("myBtn"); 
var closeAdd = document.getElementsByClassName("close")[0];

editBtn.onclick = function(event) {
    event.preventDefault(); 
    editModal.style.display = "block";
}

closeEdit.onclick = function() {
    editModal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == editModal) {
        editModal.style.display = "none";
    }
}

addBtn.onclick = function() {
    addModal.style.display = "block";
}

closeAdd.onclick = function() {
    addModal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == addModal) {
        addModal.style.display = "none";
    }
}


    </script>
 <script src="superadmin.js"></script>
</body>
</html>
