<?php  include("conn.php")  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Poetry</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1>
              <b><span>B</span>right <span>M</span>inds <span>P</span>oetry</b>
            </h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
       
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>

            <?php if (!isset($_SESSION['Username'])){ ?>
            <li><a href="login.php" data-after="Contact">Login</a></li>
            <li><a href="signup.php" data-after="Contact">Register</a></li>
            <?php }else{  ?>
              <li><a href="signup.php" data-after="Contact">Hello  <?php  echo $_SESSION['Username'] ?></a></li>
              <li><a href="logout.php" data-after="Contact">Logout</a></li>
              <?php } ; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>Bright Minds <span></span></h1>
        <h1>Poetry section <span></span></h1>
        <a href="#projects" type="button" class="cta">Get started</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Bright Minds Poetry is a online platform for posting and challenging your mind in writing and creating wonderful works of art.For example the poems below.</p>
      </div>
      <div class="service-bottom">


      <?php
              // Display records
              $sql = "SELECT * FROM projects ORDER BY id";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
                      <div class="service-item" style="width: 700px;">
          <div class="icon"><img src="admin/<?php echo  $row['image']; ?>" /></div>
          <h2><?php echo  $row['title']; ?></h2>
          <p>
          <?php echo  $row['description']; ?>
          <a href="<?php echo  $row['link']; ?>" class="cta">Poetry</a>
          </p>
        </div>
   
        <?php
                }
              } else {
                echo "<h2>0 results</h2>";
              }
              ?>

   
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">

      <?php
              // Display records
              $sql = "SELECT * FROM poems ORDER BY id";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
        <div class="project-item" style="height:70vh">
          <div class="project-info">
            <h1><?php echo  $row['title']; ?></h1>
            <h2><?php echo  $row['category']; ?></h2>
      <p><?php echo  $row['text']; ?></p>
          </div>
          <div class="project-img">
            <img src="admin/<?php echo  $row['image']; ?>" alt="img">
          </div>
        </div>
        <?php
                }
              } else {
                echo "0 results";
              }
              ?>

    
 
       
     
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.jpeg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Back End Developer</h2>
        <p>I'm a skilled and dedicated back end developer with a deep understanding of programming languages, frameworks, and databases. 
           I have a passion for creating robust and scalable systems that deliver optimal performance. 
           I'm comfortable working with both large and small teams, and my problem-solving skills have helped me overcome even the most complex challenges. 
           I always stay up-to-date on the latest technologies and trends, and I'm eager to continue growing as a developer.
        </p>
        <div>
        <h1>
           <b>
             <u>
               <i>
                 So Click On The Link Below To Be Part Of The Poem Writing Community.
               </i> 
             </u>
           </b>
        </h1>
        </div>
        <a href="community.php" class="cta">Community</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+263 71 678 5162</h2>
            <h2>+263 71 550 3026</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>MOtanatswa591@gmail.com</h2>
            <h2>tavongaurayayi458@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>21430 Unit A Seke Chitungwiza</h2>
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1>
           <b><span>B</span>right <span>M</span>inds <span>P</span>oetry</b>
        </h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Bright Minds Poetry. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>