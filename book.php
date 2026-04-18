<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <a href="home.php" class="icon"><h1>travel</h1></a>
     <nav class="nav">
        <a href="home.php"class="linkn">home</a>
        <a href="about.php"class="linkn">about</a>
        <a href="packge.php"class="linkn">packge</a>
        <a href="book.php"class="linkn">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</header>
<div class="heading" style="background:url(images/vertical-shot-green-fields-surrounded-by-hills-countryside.jpg)"><h1>book</h1>
</div>
<div class="booking">
<h1 class="heading-title">booking now</h1>
<form action="book_from.php" method="post" class="book-form">
<div class="flex">
    <div class="input-box">
        <span>name</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="input-box">
        <span>email</span>
        <input type="email" placeholder="enter your email" name="email">
    </div><div class="input-box">
        <span>phone</span>
        <input type="phone" placeholder="enter your phone" name="phone">
    </div>
    <div class="input-box">
        <span>address</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>
    <div class="input-box">
        <span>where to</span>
        <input type="text" placeholder="what is the plase you want" name="location">
    </div>
    <div class="input-box">
        <span>how many </span>
        <input type="text" placeholder="how many guests" name="guests">
    </div>
     <div class="input-box">
        <span>arrivals</span>
        <input type="date" name="arrivales">
    </div>
      <div class="input-box">
        <span>leaving </span>
        <input type="date" name="leaving">
    </div>
    <input type="submit" value="submit" name="send" class="discover">
</div>


</form>
</div>
<footer>
    <div class="box_countiner">
        <div class="box">
            <h3>quick links</h3>
        <a href="about.php"class="linkn"><i class="fas fa-angle-right"></i>about</a>
        <a href="home.php"class="linkn"><i class="fas fa-angle-right"></i>home</a>
        <a href="packge.php"class="linkn"><i class="fas fa-angle-right"></i>packge</a>
        <a href="book.php"class="linkn"><i class="fas fa-angle-right"></i>book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
  <a href=""class="linkn"><i class="fas fa-angle-right"></i>ask</a>
        <a href=""class="linkn"><i class="fas fa-angle-right"></i>about us</a>
        <a href=""class="linkn"><i class="fas fa-angle-right"></i>praivasy polyecy</a>
        <a href=""class="linkn"><i class="fas fa-angle-right"></i>use terms</a>      
        </div>
         <div class="box">
            <h3>contact info</h3>
  <a href=""class="linkn"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href=""class="linkn"><i class="fab fa-instagram"></i>instagram</a>
        <a href=""class="linkn"><i class="fab fa-twitter"></i>twitter</a>
        <a href=""class="linkn"><i class="fab fa-linkedin"></i>linkedin</a>
            
        </div>
    </div>
    <div class="created">created by<span> ahmed allam</span> all rights</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>