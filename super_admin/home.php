<?php
session_start();
include("../admin/db_conn.php");

if (!isset($_SESSION['id'])) {
    header("Location: ../admin/index.php");
    exit();
}

$query = "SELECT * FROM posts"; 
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            <img src="images/user.svg" class="dpicn dropbtn" alt="user-profile">
            <div class="dropdown-content">
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
                        <h3>Home</h3>
                    </a>
                    <a href="about_us.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'active' : ''; ?>">
            <img src="images/article.svg" class="nav-img" >
            <h3>About Us</h3>
        </a>
                    <a href="articles.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active' : ''; ?>">
                        <img src="images/article.svg" class="nav-img" alt="articles">
                        <h3>Articles</h3>
                    </a>
                    <a href="contact.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                        <img src="images/contacts.svg" class="nav-img" alt="contact">
                        <h3>Contact</h3>
                    </a>
                    <a href="news.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : ''; ?>">
            <img src="images/contacts.svg" class="nav-img" >
            <h3>News</h3>
        </a>
                    <a href="register.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
                        <img src="images/user.svg" class="nav-img" alt="register">
                        <h3>Register</h3>
                    </a>
                    <a href="../admin/logout.php" class="nav-option">
                        <img src="images/logout.svg" class="nav-img" alt="logout">
                        <h3>Logout</h3>
                    </a>
                </div>
            </nav>
        </div>
        
        <div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Home Articles</h1>
                    <button class="view" id="myBtn">Add</button>
                </div>
                
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 class="h2_add">Add a New Article</h2>
                        <form action="process_post.php" method="POST" enctype="multipart/form-data">
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
                
                <table class="report-body">
                    <thead>
                        <tr class="report-topic-heading">
                            <th>Id</th>
                            <th>User_Id</th>

                            <th>Title</th>
                            <th>Content</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['user_id']); ?></td>

                                <td><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><?php echo htmlspecialchars($row['content']); ?></td>
                                <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                <td><?php echo htmlspecialchars($row['updated_at']); ?></td>
                                <td>
                                    <?php if (!empty($row['image'])): ?>
                                        <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Post Image" width="100" height="100">
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
        </div>
    </div>
    
    <script src="superadmin.js"></script>
</body>
</html>
