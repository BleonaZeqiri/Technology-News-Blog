<!DOCTYPE html>
<html>
<head>
<title>Technology News Blog</title>
    <link rel="stylesheet" href="style/signup.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/login.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>
<section class="signup">
      <div class="signup-wrap">
        <div class="signup-html">
          <h2>Sign Up</h2>
     <form action="signup-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <div class="signup-form">
              <div class="sign-in-htm">
                <div class="group">
          <label class="label">Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      class="input"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      class="input"

                      placeholder="Name"><br>
          <?php }?>
          </div>
          <div class="group">

          <label class="label">User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      class="input"
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      class="input"

                      placeholder="User Name"><br>
          <?php }?>
          </div>
          <div class="group">

     	<label class="label">Password</label>
     	<input type="password" 
       class="input" 
                 name="password" 
                 placeholder="Password"><br>
          </div>
          <div class="group">

          <label class="label">Re Password</label>
          <input type="password" 
          class="input"
                 name="re_password" 
                 placeholder="Re_Password"><br>
          </div>
  
     <div class="submit">
                  <div class="foot-lnk">
                  <a href="index.php" class="a"
                    >Are you registered? Log in now</a
                  >
                  </div>
                  <input type="submit" class="button" />
                </div>
            
              </div>
            </div>
          </form>
        </div>
      </div>
      </section>

      <section id="copy-right">
      <div class="copy-right-sec">
        <i class="fa-solid fa-copyright"></i> 2024 Klan Kosova - All rights
        reserved
      </div>
    </section>
</body>
</html>