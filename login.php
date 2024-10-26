<?php include 'db_conn.php'; ?>
<?php include 'lib.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Log in Here</title>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
       <nav>
      <ul>
        <li class="logo2">RMS</li>
          <li>
   <select class="select">
            <option disabled selected>Select Area</option>
            <option value="dhaka">Dhaka</option>
            <option value="savar">Savar</option>
            <option value="gazipur">Gazipur</option>
            <option value="mymensingh">Mymensingh</option>
            <option value="tangail">Tangail</option>
            <option value="comilla">Comilla</option>
            <option value="chittagong">Chittagong</option>
            <option value="khulna">Khulna</option>
            <option value="barisal">Barisal</option>
            <option value="rongpur">Rongpur</option>
            <option value="joshor">Joshor</option>
            <option value="bhola">Bhola</option>
            <option value="sylhet">Sylhet</option>
   </select>

    <select class="select2">
            <option disabled selected>Select Category</option>
            <option value="home">Home</option>
            <option value="shop">Shop</option>
            <option value="commercial building">Commercial Building</option>
            <option value="garage">Garage</option>
            <option value="vehicles">Vehicles</option>
   </select>
        <a class="icon">
     <i class="fas fa-search" onclick="collapseSidebar()">Search</i>
</a>
          </li>
        <li class="items"><a href="index.php">Homepage</a></li>
        <li class="items"><a href="registrationform.php">Registration</a></li>
          <li class="items"><a href="login.php">Log in</a></li>
          <li class="items"><a href="contact.php">Contact</a></li>
        <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
    </nav>
      </div>
      <!-- End of Navbar -->
    <section>
           <div class="form-wrapper">
         <div class="form">
            <h4 class="text-center mb-4">Login Form</h4>
            <form method="post" enctype="multipart/form-data">
               <?php login_form(); ?>

               <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
               </div>
               <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
               </div>
               <div class="input-group mb-3">
                  <button class="btn btn-primary btn-block" name="login">Login</button>
               </div>
               <div class="input-group d-block">
                  <a href="" class="d-inline">Forgot Password?</a>
               </div>
            </form>
         </div>
      </div>
      </section>
      <!-- End of Contact -->

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-list">
          <a href="index.php" class="footer-link">Homepage</a>
          <a href="registrationform.php" class="footer-link">Registration</a>
          <a href="login.php" class="footer-link">Log In</a>
          <a href="contact.php" class="footer-link">Contact</a>
        </div>
        <p class="footer-paragraph">
          Providing Your Facilities is Our Main Goal!!!
        </p>
      </footer>
      <script src="script.js"></script>

  </body>
</html>
