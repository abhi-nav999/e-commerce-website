<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="shoes page.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"id="new" href="#"><i class="fas fa-gift"></i> BBKART</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li id ="new2"><a href="homepage2.html"><i class="fas fa-home"></i> HOME</a></li>
            <!--<li ><a href="#"><i class="fas fa-address-card"></i> ABOUT <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><i class="fas fa-address-book"></i> CONTACT</a></li>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" id="new" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >CATEGORIES <span class="caret"></span></a>
              <!--<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
              <span class="caret"></span></button>-->
              <ul class="dropdown-menu">
                <!--<li><a tabindex="-1" href="#">MEN</a></li>
                <li><a tabindex="-1" href="#">WOMEN</a></li>-->
                <li class="dropdown-submenu">
                  <a class="test" tabindex="-1" href="#">MEN<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shoes page.php">SHOES</a></li>
                    <li><a href="shirts.php">SHIRTS</a></li>
                    <li><a href="men tshirts.php">T-SHIRTS</a></li>
                    <li><a href="leather and casula jackets.php">LEATHER & CASUAL JACKETS</a></li>
                    <li><a href="suits.php">FORMAL WEAR</a></li>
                    <li><a href="men denim.php">DENIM</a></li>
                    <!--<li><a href="#">ACCESSORIES</a></li>
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>-->
                    <li class="dropdown-submenu">
                      <a class="test" href="#">ACCESSORIES <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="watches.php">WATCHES</a></li>
                        <li><a href="#">BELTS</a></li>
                        <li><a href="#">TIES</a></li>
                        <li><a href="#">EYEWEAR</a></li>
                        <li><a href="#">JEWELLERY</a></li>
                        <li><a href="#">WALLETS</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a class="test" tabindex="-1" href="#">WOMEN<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="sandals.php">SANDALS</a></li>
                    <li><a href="coat.php">COATS</a></li>
                    <li><a href="tops and tshirts.php">TOPS & T-SHIRTS</a></li>
                    <li><a href="women dress.php">DRESSES</a></li>
                    <li><a href="women leather and casual jackets.php">LEATHER & CASUAL JACKETS</a></li>
                    <li><a href="women denim.php">DENIM</a></li>
                    <!--<li><a href="#">ACCESSORIES</a></li>
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>-->
                    <li class="dropdown-submenu">
                      <a class="test" href="#">ACCESSORIES <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">WATCHES</a></li>
                        <li><a href="#">JEWELLERY</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
          </li>
          <script>
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        });
        </script>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="new2"><a href="login2.html"><i class="fas fa-sign-in-alt"></i> LOGIN</a></li>
            <li id="new2"><a href="sign up.html"><i class="fas fa-user-plus"></i> SIGN UP</a></li>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="jumbotron" id="second">
      <h1 id="ha" >WHAT'S NEW </h1>
      <!--<h3>A lineup of ready-to-wear and accessories from latest collection </h3> -->
      <!--<p class="lead1">A lineup of ready-to-wear and accessories from latest collection. </p>
      <!--<hr class="my-4">-->
      <!--<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->
      <!--<p class="lead">
          <a class="btn btn-primary btn-lg" id="mid" href="#" role="button">Find out more</a>
      </p>-->
  </div>
      <div class="wrap">
      <!--<div class="item"><img src="shoe1.jpg" alt="">  <p> Text below the image </p> </div>

      <div class="item"><img src="shoe2.jpg" alt=""></div>
      <div class="item"><img src="shoe3.jpg" alt=""></div>
      <div class="item"><img src="shoe4.jpg" alt=""></div>
      <div class="item"><img src="shoe5.jpg" alt=""></div>
      <div class="item"><img src="shoe6.jpg" alt=""></div>
      <div class="item"><img src="shoe7.jpg" alt=""></div>
      <div class="item"><img src="shoe8.jpg" alt=""></div>
      <div class="item"><img src="shoe9.jpg" alt=""></div>
      -->
        <!-- ADDING PHP AND CONNECTING TO MYSQL DATABASE -->
      <?php
        $conn = mysqli_connect("localhost","root","");
        if(!$conn){
          die("CONNECTION FAILED:" . mysqli_error());
        }
        mysqli_select_db($conn, "products");
        /*$sql = "select price from shoes where Product_id = '1' ";
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($res)){
            echo "$".$row['price'];
          }*/
       ?>
      <hr class="style-two">
      <h2> TRENDING NOW : </h2>
      <hr class="style-two">
      <div class="item">
    <img src="shoe1.jpg"/>
    <span class="caption"> <?php
     $sql = "select price from shoes where Product_id = '1' ";
     $res = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($res)){
         echo "$".$row['price'];
     }
      ?></span>
    <button> BUY NOW </button>
    </div>
    <div class="item">
  <img src="shoe2.jpg"/>
  <span class="caption"><?php
   $sql = "select price from shoes where Product_id = '2' ";
   $res = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($res)){
       echo "$".$row['price'];
   }
    ?></span>
    <button> BUY NOW </button>


  </div>
  <div class="item">
<img src="shoe3.jpg"/>
<span class="caption"> <?php
 $sql = "select price from shoes where Product_id = '3' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe4.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '4' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe5.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '5' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe6.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '6' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe7.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '7' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe8.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '8' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe9.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '9' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe10.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '10' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe11.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '11' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
<div class="item">
<img src="shoe12.jpg"/>
<span class="caption"><?php
 $sql = "select price from shoes where Product_id = '12' ";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($res)){
     echo "$".$row['price'];
 }
  ?></span>  <button> BUY NOW </button>
</div>
</div>

    <div class="links">
      <hr class="hr1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">7</a>
      <a href="#">8</a>
      <a href="#">9</a>
      <a href="#">10</a>
      <a href="#">NEXT</a>
      <hr class="hr1">
    </div>
    <div id="ft">
    <footer class="footer">
    <div class ="navbar-inverse">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="homepage2.html">HOME</a></li>
            <li><a href="#">ABOUT <span class="sr-only">(current)</span></a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">FACEBOOK</a></li>
            <li><a href="#">TWITTER</a></li>
            <li><a href="#">HELP</a></li>
            <li><a href="#">POLICY</a></li>
            <li><a href="#">ADVERTISE</a></li>
            <li><a href="#">FEATURES</a></li>
            <li><a href="#">HOW TO SELL</a></li>
            <li><a href="#">HOW TO BUY</a></li>
          </ul>
        </div>
      </div>
    </div>
    </footer>
  </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
