

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology News Blog</title>
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" href="style/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>
<section class="login">
      <div class="login-wrap">
        <div class="login-html">
          <h2>Login</h2>
     <form action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <div class="login-form">
              <div class="sign-in-htm">
                <div class="group">
     	<label class="label">User Name</label>
     	<input type="text" name="uname" placeholder="User Name"  class="input"><br>
		 </div>
		 <div class="group">
     	<label class="label">Password</label>
     	<input type="password" name="password" placeholder="Password" 
		 class="input"
		><br>
		</div>
		<div class="submit">
            
                  <input type="submit" class="button" value="Log in" />
                </div>

                <div class="hr"></div>
                <div class="foot-lnk">
                  <a href="signup.php" class="a"
                    >Not registered? Register now!</a
                  >
                </div>
     	
     </form>
	 </div>
      </div>
    </section>

    <section id="copy-right">
      <div class="copy-right-sec">
        <i class="fa-solid fa-copyright"></i>2024 Klan Kosova - All rights
        reserved
      </div>
    </section>
    <script src="main.js"></script>
  </body>
</html> 