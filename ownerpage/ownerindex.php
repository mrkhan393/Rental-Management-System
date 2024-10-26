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
    <title>Homepage-Rental Management System</title>
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
        <li class="items"><a href="#">Profile</a></li>
          <li class="items"><a href="#">Upload Information</a></li>
          <li class="items"><a href="#">Manage Information</a></li>
        <li class="items"><a href="project/index.html">Log Out</a></li>
         <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul
    </nav>
      </div>
      <!-- End of Navbar -->

      <!-- Header -->
      <header class="header center">
        <div class="header-text">
          <h1 class="heading">Rental Management System</h1>
          <p class="header-paragraph">
            "Find your preferable accommodation and commercial properties for rent"
          </p>
        </div>
        <div class="logo">
          <h1>
            <span class="center">R</span>
            <span class="center">M</span>
            <span class="center">S</span>
          </h1>
        </div>
      </header>
      <!-- End of Header -->

      <!-- Popular tours -->
      <section class="popular-tours">
        <h1 class="popular-tours-heading">Accommodation</h1>
        <div class="cards-wrapper">
          <div class="card">
            <div class="front-side">
              <img src="images/forest.jpg" alt="Forest" class="card-image" />
              <h1 class="tour-name">Khan Villa<br>A flat for rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01782342343<br>Address: E-77, Elephent Road, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$399</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/river.jpg" alt="River" class="card-image" />
              <h1 class="tour-name">MS Tower<br>A room for Sublet</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01987263822<br>Address: D-8/10 Mojidpur Road, Savar Bus stand, Savar, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$499</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/sea.jpg" alt="Sea" class="card-image" />
              <h1 class="tour-name">Nur Manjil<br>A Mess for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01768242343<br>Address: Sitakund Bus Stand, Sitakund, Chittagong</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$599</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
        <h1 align="center"><a href="#">View More...</a></h1>
      </section>
      <!-- End of Popular tours -->
 <section class="popular-tours">
        <h1 class="popular-tours-heading">Shops</h1>
        <div class="cards-wrapper">
          <div class="card">
            <div class="front-side">
              <img src="images/forest.jpg" alt="Forest" class="card-image" />
              <h1 class="tour-name">Al Madina Restaurant<br>A Restaurant for rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01782342343<br>Address: Birulia Road, Savar Bus Stand, Savar, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details >>;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$399</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/river.jpg" alt="River" class="card-image" />
              <h1 class="tour-name">Riyanna Cosmetics<br>A Shop for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01987263822<br>Address: Thakur Bari, Tiyakhali, Barishal</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$499</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/sea.jpg" alt="Sea" class="card-image" />
              <h1 class="tour-name">RS Tower<br>A Grocery Shop for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01733242343<br>Address: Uttara, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$599</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
    <h1 align="center"><a href="#">View More...</a></h1>
      </section>

    <section class="popular-tours">
        <h1 class="popular-tours-heading">Commercial Buildings</h1>
        <div class="cards-wrapper">
          <div class="card">
            <div class="front-side">
              <img src="images/forest.jpg" alt="Forest" class="card-image" />
              <h1 class="tour-name">RS Tower Super Market<br>An Apartment for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01723486283<br>Address: DaudKandi Bazar, Daudkandi, Comilla</li>
              </ul>
              <button class="navigation-button">
                Details >>;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$399</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/river.jpg" alt="River" class="card-image" />
              <h1 class="tour-name">Mahtab Plaza<br>Full Market for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01983294822<br>Address: Mogbazar, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$499</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/sea.jpg" alt="Sea" class="card-image" />
              <h1 class="tour-name">MK Shopping Complex<br>An Appartment for rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01733242343<br>Address: Maijdi, Noakhali</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$599</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
       <h1 align="center"><a href="#">View More...</a></h1>
      </section>

     <section class="popular-tours">
        <h1 class="popular-tours-heading">Garages</h1>
        <div class="cards-wrapper">
          <div class="card">
            <div class="front-side">
              <img src="images/forest.jpg" alt="Forest" class="card-image" />
              <h1 class="tour-name">Mir Bari<br>A Garage for rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01782342343<br>Address: E-77, Elephent Road, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details >>;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$399</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/river.jpg" alt="River" class="card-image" />
              <h1 class="tour-name">Chayabithi<br>A Garage for Sublet</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01987263822<br>Address: D-8/10 Mojidpur Road, Savar Bus stand, Savar, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$499</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/sea.jpg" alt="Sea" class="card-image" />
              <h1 class="tour-name">Nur Manjil<br>A Garage for Rent</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01768242343<br>Address: Sitakund Bus Stand, Sitakund, Chittagong</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$599</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
        <h1 align="center"><a href="#">View More...</a></h1>
      </section>

    <section class="popular-tours">
        <h1 class="popular-tours-heading">Vehicles-Trucks and Vans</h1>
        <div class="cards-wrapper">
          <div class="card">
            <div class="front-side">
              <img src="images/forest.jpg" alt="Forest" class="card-image" />
              <h1 class="tour-name">Truck in Dhaka Main City</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01782342343<br>Address: E-77, Elephent Road, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details >>;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$399</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/river.jpg" alt="River" class="card-image" />
              <h1 class="tour-name">Van in Savar</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01987263822<br>Address: D-8/10 Mojidpur Road, Savar Bus stand, Savar, Dhaka</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$499</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
          <div class="card">
            <div class="front-side">
              <img src="images/sea.jpg" alt="Sea" class="card-image" />
              <h1 class="tour-name">Pickup in Sitakund</h1>
              <ul class="card-list">
                <li class="card-list-item">Contact: 01768242343<br>Address: Sitakund Bus Stand, Sitakund, Chittagong</li>
              </ul>
              <button class="navigation-button">
                Details &gt;&gt;
              </button>
            </div>
            <div class="back-side center">
              <button class="navigation-button">
                &lt;&lt; back
              </button>
              <h3 class="tour-price">$599</h3>
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
        <h1 align="center"><a href="#">View More...</a></h1>
      </section>
      <!-- Stories -->

      <!-- End of Stories -->

      <!-- Contact -->
    <section class="contact">
        <h1 class="contact-heading">Contact Us</h1>

        <h2 class="contact-heading2">
          email: drt360@ymail.com<br>
          mobile: 01984742012, 01783379772<br>
          <ui><li><a href="https://www.facebook.com/Rental-Management-System-103937138259947/?view_public_for=103937138259947"><font color="white">Facebook</font></a></li></ui>
        </h2>

      </section>
      <!-- End of Contact -->

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-list">
          <a href="index.php" class="footer-link">Homepage</a>
          <a href="project/index.php" class="footer-link">Log Out</a>
        </div>
        <p class="footer-paragraph">
          Providing Your Facilities is Our Main Goal!!!
        </p>
      </footer>
      <!-- End of Footer -->
    </div>
    <script src="script.js"></script>
  </body>
</html>
