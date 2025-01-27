<?php
session_start();
include("db_conn.php");

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
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
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/user.css?v=1.0">

    
</head>
<body>
<header>
        <div class="logosec">
            <div class="logo">TechnologyNews</div>
            <img src="images/images/hamburger.svg" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <div class="dropdown">
            <img src="images/images/user.svg" class="dpicn dropbtn" alt="dp">
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
            <img src="images/images/home.svg" class="nav-img" alt="dashboard">
            <h3 class="home">Home</h3>
        </a>
        <a href="articles.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active' : ''; ?>">
            <img src="images/images/article.svg" class="nav-img" >
            <h3>Articles</h3>
        </a>
      
     
        <a href="logout.php" class="nav-option">
            <img src="images/images/logout.svg" class="nav-img" >
            <h3 >Logout</h3>
        </a>
    </div>

</nav>
</div>

<div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Articles</h1>
                    <button class="view" id="myBtn">Add</button>
                </div>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 class="h2_add">Add a New Article</h2>
                        <form action="process_post.php" method="POST" class="form" enctype="multipart/form-data">
                            <div class="input">
                                <label for="title">Article Title</label>
                                <input type="text" name="title" id="title" required>
                            </div>
                            <div class="input">
                                <label for="content">Article Content</label>
                                <textarea name="content" id="content" rows="4" required></textarea>
                            </div>
                            <div class="input">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" style="border:none;">
                            </div>
                            <button type="submit" name="action" value="create" class="button">Add</button>
                        </form>
                    </div>
                </div>
                <table border="1" class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo htmlspecialchars($row['content']); ?></td>
                    <td>
                        <?php if (!empty($row['image'])): ?>
                            <img src="<?php echo $row['image']; ?>" alt="Post Image" width="100" height="100">
                        <?php else: ?>
                            No image uploaded
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="edit_post.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
                      
                       
                    </td>
                    <td>
                    <form action="process_post.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="action" value="delete" class="button delete" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
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
</body>
</html>
