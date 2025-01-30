<?php
$servername = "localhost";
$username = "root"; // your username
$password = ""; // your password
$dbname = "test_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Store the results in an array
    $contacts = [];
    while($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
} else {
    $contacts = [];
}

$conn->close();
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

                <a href="#">Logout</a>
            </div>
        </div>
    </header>
    <div class="main-container">
        <div class="navcontainer">
        <nav class="nav">
    <div class="nav-upper-options">
    <a href="home.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'superadmin.php' ? 'active' : ''; ?>">
            <img src="images/home.svg" class="nav-img" alt="dashboard">
            <h3 class="home">Home</h3>
        </a>
        <a href="articles.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active' : ''; ?>">
            <img src="images/article.svg" class="nav-img" >
            <h3>Articles</h3>
        </a>
        <a href="contact.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
            <img src="images/contacts.svg" class="nav-img" >
            <h3>Contact</h3>
        </a>
       
        <a href="register.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
            <img src="images/user.svg" class="nav-img" >
            <h3>Register</h3>
        </a>
        <a href="/"  class="nav-option">
            <img src="images/logout.svg" class="nav-img" >
            <h3>Logout</h3>
        </a>
    </div>
</nav>


        </div>
        <div class="main">
            
            <div class="report-container">
            <div class="report-header">
    <h1 class="recent-Articles">Recent Articles</h1>
</div>


                
<table class="report-body">
    <tr class="report-topic-heading">
        <th class="t-op">Id</th>
        <th class="t-op">FirstName</th>
        <th class="t-op">LastName</th>
        <th class="t-op">Email</th>
        <th class="t-op">Mobile</th>
        <th class="t-op">Message</th>
        <th class="t-op">Submitted</th>
       
    </tr>

    <?php foreach ($contacts as $contact): ?>
        <tr class="item1">
            <td class="t-op-nextlvl"><?= $contact['id']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['first_name']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['last_name']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['email']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['mobile']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['message']; ?></td>
            <td class="t-op-nextlvl"><?= $contact['submitted_at']; ?></td>
            
        </tr>
    <?php endforeach; ?>
</table>

            </div>
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
