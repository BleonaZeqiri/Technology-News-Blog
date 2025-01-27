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
    <button class="view" id="myBtn">Add </button>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 class="h2_add">Add a New Article</h2>
        <form class="add">
            <div class="input">
            <label for="articleTitle">Article Title</label>
            <input type="text" id="articleTitle" name="articleTitle">
            </div>
            <div class="input">
            <label for="articleTitle">Article Content</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
            <label for="image" class="label">Image:</label>
            <input type="file" name="image" id="image" class="input" style="border:none; border-radius:0; padding:0;">
         
            </div>
          
            <button type="submit">Add</button>
        </form>
    </div>
</div>

                
                <table class="report-body">
                    <tr class="report-topic-heading">
                        <th class="t-op">Id</th>
                        <th class="t-op">User</th>

                        <th class="t-op">Title</th>
                        <th class="t-op">Content</th>
                        <th class="t-op">Created</th>
                        <th class="t-op">Updated</th>
                        <th class="t-op">Image</th>



                        <th class="t-op">Edit</th>
                        <th class="t-op">Delete</th>
                    </tr>
                    <tr class="item1">
                        <td class="t-op-nextlvl">1</td>
                        <td class="t-op-nextlvl">Article 1</td>
                        <td class="t-op-nextlvl">Article 1</td>
                        <td class="t-op-nextlvl">Lorem ipsum dolor sit amet.</td>

                        <td class="t-op-nextlvl">Article 1</td>
                        <td class="t-op-nextlvl">Article 1</td>

                        
                        <td class="t-op-nextlvl">#</td>

                        
                        <td class="t-op-nextlvl">
    <a href="#" class="button" id="editBtn">Edit</a>

<div id="editModal" class="modal edit-modal">
    <div class="modal-content edit-modal-content">
        <span class="close-edit">&times;</span>
        <h2 class="h2_add">Edit Article</h2>
        <form class="edit">
            <div class="input">
            <label for="articleTitle">Article Title</label>
            <input type="text" id="articleTitle" name="articleTitle">
            </div>
            <div class="input">
            <label for="articleTitle">Article Content</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
            <label for="image" class="label">Image:</label>
            <input type="file" name="image" id="image" class="input" style="border:none; border-radius:0; padding:0;">
         
            </div>
          
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</td>


                        <td class="t-op-nextlvl "><a href="/" class="button">Delete</a></td>
                    </tr>
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
