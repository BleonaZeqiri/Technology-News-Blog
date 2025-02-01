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
    <a href="home.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>">
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
        <div class="main">
            
            <div class="report-container">
            <div class="report-header">
    <h1 class="recent-Articles">Users</h1>
    <button class="view" id="myBtn">Add </button>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 class="h2_add">Add a New User</h2>
        <form class="add" method="POST" action="add_user.php">
    <div class="input">
        <label for="user_name">Username</label>
        <input type="text" id="user_name" name="user_name" required>
    </div>
    <div class="input">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="input">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="input">
        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <button type="submit">Add</button>
</form>

    </div>
</div>

                
<table class="report-body">
    <tr class="report-topic-heading">
        <th class="t-op">Id</th>
        <th class="t-op">UserName</th>
        <th class="t-op">Password</th>
        <th class="t-op">Name</th>
        <th class="t-op">Role</th>
        <th class="t-op">Created</th>
        <th class="t-op">Updated</th>
        <th class="t-op">Edit</th>
        <th class="t-op">Delete</th>
    </tr>

    <?php
    require_once '../admin/db_conn.php'; 

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr class="item1">
            <td class="t-op-nextlvl"><?php echo $row['id']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['user_name']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['password']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['name']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['role']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['created_at']; ?></td>
            <td class="t-op-nextlvl"><?php echo $row['updated_at']; ?></td>

            <td class="t-op-nextlvl">
                <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
            </td>

            <td class="t-op-nextlvl">
    <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="button" onclick="return confirmDelete()">Delete</a>
</td>

        </tr>
    <?php } ?>
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
//delete
function confirmDelete() {
    return confirm("Are you sure that you want to delete this user?");
}


    </script>
 <script src="superadmin.js"></script>
</body>
</html>
