<?php
  include_once 'php/dbcontroller.php';
  require_once 'php/action.php';
 
  ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stores Cate</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
 
  <!-- NavBar Start -->
    <!-- <div class="container-fluid"> -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Stores Cate</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- <ul class="nav navbar-nav">
            <li><a href="#">Clothes</a></li>
            <li><a href="#">Shops</a></li>
            <li><a href="#">SmartPhones</a></li>
            <li><a href="#">Computers</a></li>
            </ul> -->
          <span class="pull-right">
            (+260) 900 000 000 </br>
            <span><a href="#"><i class="fa fa-facebook "></i></a></span> <span id="twitter_icon"><a href="#"><i class="fa fa-twitter "></i></a></span> <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
          </span>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!-- </div> -->
  <!-- NavBar End -->

   <!-- body section start -->
   <h1 class="text-center">NAME OF STORE</h1>

    <div class="container" id="slideShow">
      <div class="row">
        <div class="col-md-2">
          <div class="left-sidebar">
            <h3>Stores</h3>
           
            <div class="panel-group category-products" id="accordian">
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Edgars</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Jet</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Pep</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Identity</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Samsung</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Game Stores</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Hi-Fi Corp</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
       
       <!-- slide show starts  -->     
        <div class="col-md-10" >
          <h3 id="tagLine">Enjoy discounts from your favorite shops</h3>
         <div id="carousel-example-generic slideShow" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
         
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-responsive" src="images/products/vans-hat.jpg" alt="...">
                  <div class="carousel-caption">
                    <h3 class="pull-right" id="discount">Game Stores</h3>
                  </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="images/products/htc-A9.png" alt="...">
                  <div class="carousel-caption">
                    <h3 class="pull-right" id="discount">Edgars</h3>
                  </div>
              </div>
                <div class="item">
                  <img class="img-responsive" src="images/products/skate-better.jpg" alt="...">
                    <div class="carousel-caption">
                      <h3 class="pull-right" id="discount">Jet</h3>
                  </div>
                </div>
                <div class="item">
                <img class="img-responsive" src="images/products/vans-shoe.jpg" alt="...">
                  <div class="carousel-caption">
                      <h3 class="pull-right" id="discount">Samsung</h3>
                  </div>
                </div>
                <div class="item">
                <img class="img-responsive" src="images/products/incode.jpg" alt="...">
                  <div class="carousel-caption">
                      <h3 class="pull-right" id="discount">Pep</h3>
                  </div>
                </div>
              </div>
        
        <form action = "edgarad.php" method="post">


      Name: <input type="text"  name="name">
      <br/>
      
      Cost price: <input type= "number"  name="costprice">
      <br/>
      Discount: <input type="number" name="discount">
      <br/>
      
      <!-- Age: <input type="text"  name="age">
            </br> -->
            <input type="submit" value ="insert">
      </form>

      <div class="container" id="moreProducts" >
    
  </div>




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->   
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/storecate.js"></script>

</BODY>
</HTML>