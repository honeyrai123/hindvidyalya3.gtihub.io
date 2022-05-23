<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIND VIDYALYA ENGLISH MEDIUM HIGH SECONDARY SCHOOL CHURCHA</title>
  <link rel="stylesheet" href="styling.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
</body>

<!-- header section starts  -->

<header>

  <a href="#" class="logo"><span>H</span>ind <span>V</span>idyalya</a>

  <div id="menu" class="bi bi-list"></div>

  <nav class="navbar">
    <a class="active" href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#service">School Services</a>
    <a href="#precautions">Subject</a>
    <!-- <a href="#doctor">Senior Staff</a> -->
    <a href="./img gallery/index.html" target="_blank">Gallery</a>
    <a href="./Teachers/QUERY/2nd option/index.html" target="_blank">Teachers</a>
    <a href="https://www.youtube.com/channel/UCoATVCn7bLEJVP91oHBEvhg" target="_blank"><i class="bi bi-play-btn-fill"></i></a>
    <a href="contact-form/index.php" <i class="bi bi-telephone-fill" target="_blank"></i></a>
    <a href="https://www.google.com/maps/place/Hind+Vidyalaya/@23.3212524,82.5213682,17z/data=!4m12!1m6!3m5!1s0x39888c8b66976abb:0xe2fd7aa73ada938!2sHind+Vidyalaya!8m2!3d23.3212524!4d82.5235569!3m4!1s0x39888c8b66976abb:0xe2fd7aa73ada938!8m2!3d23.3212524!4d82.5235569" <i class="bi bi-geo-alt-fill" target="_blank"></i></a>
    <a href="../chatbot/bot.php" target="_blank"><i class="bi bi-messenger"></i></a>
    <a href="logout.php" target="_blank"><i class="bi bi-arrow-right-square-fill" style=" font-size: 20px;"></i></a>
  </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">


  <div class="content"><br><br><br><br><br><br><br>
    <?php echo "<p>WELCOME " . $_SESSION['username'] . "</p>"; ?>
    <p>IN</p>
    <h1>HIND VIDYALYA ENGLISH <br>MEDIUM HIND SECONDARY SCHOOL CHURCHA</h1>
  </div>
</section>

<!-- home section ends -->

<!-- About Us Section Start -->
<section class="about" id="about">
  <div class="row">
    <div class="col50">
      <h2 class="title-text"><span>A</span>bout Us</h2>
      <p>Opening Date: 28/6/2001 And Registration no:>204 <br> Classes Nursery To 12Th.11 To 12 Subject Maths
        & Science. school situated in churcha colliry.school open time 9:30Am class 1 To 12 and
        closing time 4:00Pm. Nursery to kg2 9:30Am To 1:00pm for all working days. </p>
    </div>
    <div class="col50">
      <div class="imgbx">
        <img src="./Images/pricipal.jpg" alt="PHOTO" class="IMG">
      </div>
    </div>
  </div>
</section>
<!-- About Us Section End -->

<!-- Service section starts  -->

<section class="prevent" id="service">

  <h1 class="heading"> School Services </h1>

  <div class="box-container">

    <div class="box">
      <i class="bi bi-code-slash"></i>
      <h3>Programming</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
    </div>

    <div class="box">
      <i class="bi bi-bicycle"></i>
      <h3>Sports</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
    </div>

    <div class="box">
      <i class="bi bi-person-video"></i>
      <h3>Teacher</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse? </p>
    </div>

    <div class="box">
      <i class="bi bi-activity"></i>
      <h3>Science</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
    </div>

    <div class="box">
      <i class="bi bi-book"></i>
      <h3>Subjects</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
    </div>

    <div class="box">
      <i class="bi bi-people-fill"></i>
      <h3>Team</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
    </div>

  </div>

</section>

<!-- prevent section ends -->

<!-- precautions section starts  -->

<section class="precautions" id="precautions">

  <h1 class="heading"> SUBJECTS IN CLASS 11 AND 12</h1
  h2>

  <div class="column">

    <div class="box-container">

      <h3 class="title">Class 11th Subject</h3>

      <div class="box">
        <div class="info">
          <h3>BIOLOGY</h3></i>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
        </div>
      </div>

      <div class="box">

        <div class="info">
          <h3>PHYSICS</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
        </div>
      </div>


    </div>

    <div class="box-container">

      <h3 class="title">Class 12th Subject</h3>

      <div class="box">

        <div class="info">
          <h3>BIOLOGY</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
        </div>
      </div>

      <div class="box">

        <div class="info">
          <h3>PHYSICS</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- precautions section ends -->

<!-- doctor section start  -->

<!-- <section class="doctor" id="doctor">

    <h1 class="heading">School Senior Post Member</h1>

    <div class="box-container">

        <div class="box">
            <img src="./Images/1626944332967.png" alt="Director" class="active">
            <h3>Mr. Md Nesar Khan</h3>
            <span>Director </span>
            
        </div>

        <div class="box">
            <img src="./Images/1626945373333.png" alt="Principal">
            <h3>Mr . Shashi Bhushan Rai</h3>
            <span>Principal</span>
            
        </div>

        <div class="box">
            <img src="images/doc3.png" alt="HeadMaster">
            <h3>Mr . Mintu Kumar</h3>
            <span>HeadMaster</span>
            
        </div>
    </div>
    
</section> -->

<!-- TEACHER SECTION END -->
<!-- 
<section class="hand-wash" id="hand-wash">

    <h1 class="heading">Teachers</h1>

    <div class="column">

        <div class="box-container">
            <div class="box">
                <img src="images/wash-b.png" alt="">
                <h3>Mrs. Nisha Rai</h3><br>
                <a href="C:\xampp\htdocs\HIND VIDYALYA WEB\Teachers\Mrs. Nisha Rai\index.html">View More</a>
            </div>

            <div class="box">
                <img src="images/wash-b.png" alt="">
                <h3>Mr. Rajaram Dewangan</h3><br>
                <a href=":C\PAPA SCHOOL WEBSITE PART 2\Teachers\RajaRam Dewangan/index.html" target=_blank>View More</a>
            </div>
            <div class="box">
                <img src="images/wash-b.png" alt="">
                <h3>Mrs. Shilpi Sarkar</h3><br>
                 <a href=":C\PAPA SCHOOL WEBSITE PART 2\Teachers\Shilpi Sarkar/index.html" target=_blank>View More</a>
            </div>

            <div class="box">
                <img src="images/wash-c.png" alt="">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>Pooja Singh</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Pooja Singh/index.html" target=_blank>View More</a>
            </div>

            <div class="box">
                <img src="images/wash-d.png" alt="">
                <h3>Mr. Jaydev Pandey</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Mr. Jaydev Pandey/index.html" target=_blank>View More</a>
            </div>

            <div class="box">
                <img src="images/wash-e.png" alt="">
                <h3>Mr. Sanjay Singh</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Mr. Sanjay Singh/index.html" target=_blank>View More</a>
            </div>

            <div class="box">
                <img src="images/wash-f.png" alt="">
                <h3>Zennat Khatun</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Zennat Khatun/index.html" target=_blank>View More</a>
            </div>
            <div class="box">
                <img src="images/wash-f.png" alt="">kiookgjfdjgikd kgdfhuhdfgn jhduhgkklol,liko
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>Mr. Mintu Kumar</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Mr. Mintu Kumar/index.html" target=_blank>View More</a>
            </div>
            <div class="box">
                <img src="images/wash-f.png" alt="">
                <h3>Brahamdut Shukla</h3><br>
                 <a href="C:\xampp\htdocs\HIND VIDYALYA WEB\Teachers\Brahamdut Shukla\index.html">View More</a>
            </div>
            <div class="box">
                <img src="images/wash-f.png" alt="">
                <h3>Bhagat Singh</h3><br>
                 <a href="C:\PAPA SCHOOL WEBSITE PART 2\Teachers\Brahamdut Shukla/index.html" target=_blank>View More</a>
            </div>
            <div class="box">
                <img src="images/wash-f.png" alt="">
                <h3>Babita Muddli</h3><br>
                 <a href=":C\PAPA SCHOOL WEBSITE PART 2\Teachers\Brahamdut Shukla/index.html" target=_blank>View More</a>
            </div>
            <div class="box">
                <img src="images/wash-f.png" alt="">
                <h3>Safique Ahemad</h3><br>
                 <a href=":C\PAPA SCHOOL WEBSITE PART 2\Teachers\Brahamdut Shukla/index.html" target=_blank>View More</a>
            </div>
        </div>
    </div>

</section>  -->

<!-- hand-wash section ends -->

<!-- footer section starts  -->

<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <img src="./Images/1626945373333.png" class="img"></img>
        <span class="logo_name">Hind Vidyalya</span>
      </div>

    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Quick Links</li>
        <li><a href="#home">Home</a></li>
        <li><a href="H:\PAPA SCHOOL WEBSITE PART 2\Responsive Contact Us Form/index.html" target="_blank">Contact us</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="H:\AWESOME LOGIN FORM\inddex.html" target="_blank">Login</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Services</li>
        <li><a href="#">Programming</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Teacher</a></li>
        <li><a href="#">Science</a></li>
        <li><a href="#">Subject</a></li>
        <li><a href="#">Team</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Team</li>
        <li><a href="#">Mr. Md Nesar Khan</a></li>
        <li><a href="#">Mr . Shashi Bhushan Rai</a></li>
        <li><a href="#">Mr . Mintu Kumar</a></li>
        <li><a href="#">Mr . Bhagat Singh</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Courses</li>
        <li><a href="#">HTML & CSS</a></li>
        <li><a href="#">JavaScript</a></li>
        <li><a href="#">Python</a></li>
        <li><a href="#">C++</a></li>
      </ul>
      <ul class="box input-box">
        <li class="link_name">Subscribe</li>
        <li><input type="text" placeholder="Enter your email"></li>
        <li><input type="button" value="Subscribe"></li>
      </ul>
    </div>
  </div>
  <div class="bottom-details">
    <div class="bottom_text">
      <span class="copyright_text">Copyright © 2021 <a href="#">Hind Vidyalya.</a>All rights reserved</span>
      <span class="policy_terms">
        <a href="#">Privacy policy</a>
        <a href="#">Terms & condition</a>
      </span>
    </div>
  </div>
</footer>


<!-- footer section ends -->

<!-- scroll top  -->

<a href="#home" class="scroll-top">
  <img src="images/scroll-img.png" alt="">
</a>
<!-- SUBSCRIPTION Start-->

<body>
  <div class="container">
    <input type="radio" id="hide">
    <div class="box">
      <label for="hide"><i class="bi bi-backspace-reverse-fill"></i></label>
      <div class="logo">
        <img src="./images/pricipal.jpg" alt="">
      </div>
      <div class="right">
        <div class="text-1">Shashi Bhushan Rai</div>
        <div class="text-2">Subscribe Our YouTube Channel</div>
        <a href="https://www.youtube.com/channel/UCoATVCn7bLEJVP91oHBEvhg" target="_blank">Subscribe</a>
      </div>
    </div>
  </div>

  <!-- SUBSCRIPTION End-->

  <!-- jquery cdn link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- custom js file link  -->
  <script>
    $(document).ready(function() {

      $('#menu').click(function() {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
      });

      $(window).on('load scroll', function() {

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if ($(window).scrollTop() > 0) {
          $('header').addClass('sticky');
        } else {
          $('header').removeClass('sticky');
        }

        if ($(window).scrollTop() > 0) {
          $('.scroll-top').show();
        } else {
          $('.scroll-top').hide();
        }

        // scroll spy 

        $('section').each(function() {

          let top = $(window).scrollTop();
          let offset = $(this).offset().top - 200;
          let id = $(this).attr('id');
          let height = $(this).height();

          if (top > offset && top < offset + height) {
            $('.navbar a').removeClass('active');
            $('.navbar').find(`[href="#${id}"]`).addClass('active');
          }

        });

      });

      // smooth scrolling 

      $('a[href*="#"]').on('click', function(e) {

        $('html, body').animate({

            scrollTop: $($(this).attr('href')).offset().top,

          },
          500,
          'linear'
        );

      });

    });
    // function loader(){
    // document.querySelector('.loader-container').classList.add('fade-out');
    // }

    // function fadeOut(){
    // setInterval(loader, 5200);
    // }

    // window.onload = fadeOut();
  </script>


</body>

</html>