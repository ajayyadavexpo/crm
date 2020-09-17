
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .col-sm-3{background-color: #DADCDC;width: 100%;height: 650px;padding: 20px 0px 20px 30px; text-align: center;}
    .col-sm-9 img{width: 100%;height: auto;margin: 0px;padding: 0px; border-radius: 5px;}
    .col-sm-9 p{font-family: verdana;padding: 10px;}
    .fa{font-size: 40px;}
        .col-sm-3 ul li a{color: #2D7495; padding-top: 5%;font-size: 25px;}
    .col-sm-3 ul li a:hover{background-color: #EFEEE9;color: red;}
    #admin{margin-top: 5%;padding: 10px;width: 100%;}
    .row .col-sm-7{background-image: #2D7495;}
      h3{background-image: linear-gradient(to right, #2D7495,black,#2D7495);color: white;text-align: center;padding: 10px 0px 10px 0px;font-size: 40px; border-left: 20px solid black;}
      #about{color:#2D7495;}

  </style>
</head>
<body data-spy="scroll" data-target=".nav" data-offset="50">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-3">
  <ul class="nav flex-column">
    <li class="nav-item">
      <span class="fa fa-home"></span>
      <a class="nav-link" href="#">HOME</a>
    </li>
    <li class="nav-item">
      <span class="fa fa-info"></span>
      <a class="nav-link" href="#">ABOUT</a>
    </li>
    <li class="nav-item">
      <span class="fa fa-user"></span>
      <a class="nav-link" href="#">ADMIN</a>
    </li>
  </ul>
</div>
<div class="col-sm-9">
  <div class="row" style="background-color: #2D7495;padding:10px 0px 10px 0px;">
    <div class="col-sm-5">
      <div id="admin">
    <h3>Admin Login</h3>
    <form method="POST" action="login.php">
      <div class="form-group">
        <input type="text" name="email" placeholder="Enter Email.." required="" class="form-control">
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" name="password" placeholder="Password" required="" class="form-control">
      </div>
      <button type="submit" class="btn btn-dark">Login</button>
    </form>
  </div>
    </div>
    <div class="col-sm-7">
      <img src="images/now.jpg">
    </div>
  </div>
  <div id="about">
    <h3 class="text-center">CRM For Internet Service Provider</h3>
    <p>HighSpeedInternet.com simplifies the search for the best Internet Service Provider (ISP) for your home or business. Enter your zip code and we’ll show you which ISPs are available in your area. From there you can easily compare speeds, features, customer reviews, expert ratings, and prices to find the ISP that works best for you. With over 1,200 providers in our database, you’re sure to find a good match.Below you’ll find national internet service statistics, FAQs, and general provider information to help you in your search. Enter your zip code to get information specific to your area. HighSpeedInternet.com simplifies the search for the best Internet Service Provider (ISP) for your home or business. Enter your zip code and we’ll show you which ISPs are available in your area. From there you can easily compare speeds, features, customer reviews, expert ratings, and prices to find the ISP that works best for you. With over 1,200 providers in our database, you’re sure to find a good match.Below you’ll find national internet service statistics, FAQs, and general provider information to help you in your</p>
  </div>
</div>
</div></div>
</body>
</html>
