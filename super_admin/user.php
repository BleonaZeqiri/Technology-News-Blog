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
    <a href="superadmin.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'superadmin.php' ? 'active' : ''; ?>">
            <img src="images/home.svg" class="nav-img" alt="dashboard">
            <h3 class="h3">Home</h3>
        </a>
        <a href="articles.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active' : ''; ?>">
            <img src="images/article.svg" class="nav-img" >
            <h3 class="h3">Articles</h3>
        </a>
        <a href="contact.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
            <img src="images/contacts.svg" class="nav-img" >
            <h3 class="h3">Contact</h3>
        </a>
        <a href="user.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'user.php' ? 'active' : ''; ?>">
            <img src="images/user.svg" class="nav-img" >
            <h3 class="h3">User</h3>
        </a>
        <a href="register.php" class="nav-option <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
            <img src="images/user.svg" class="nav-img" >
            <h3 class="h3">Register</h3>
        </a>
        <a href="/"  class="nav-option">
            <img src="images/logout.svg" class="nav-img" >
            <h3 class="h3">Logout</h3>
        </a>
    </div>
</nav>

        </div>
        <div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Articles</h1>
                    <button class="view">Add Articles</button>
                </div>
                <table class="report-body">
                    <tr class="report-topic-heading">
                        <th class="t-op">Id</th>
                        <th class="t-op">Title</th>
                        <th class="t-op">Content</th>
                        <th class="t-op">Edit</th>
                        <th class="t-op">Delete</th>
                    </tr>
                    <tr class="item1">
                        <td class="t-op-nextlvl">1</td>
                        <td class="t-op-nextlvl">Article 1</td>
                        <td class="t-op-nextlvl">Lorem ipsum dolor sit amet.</td>
                        <td class="t-op-nextlvl "><a href="/" class="button">Edit</a></td>
                        <td class="t-op-nextlvl "><a href="/" class="button">Delete</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="superadmin.js"></script>
</body>
</html>
