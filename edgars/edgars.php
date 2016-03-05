<?php
  require_once '../php/action.php';
  include_once ('../function.php');

      $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 20;
      $startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`sale`";
        /* where `active` = 1";*/
  ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stores Cate Edgars</title>
    <link rel="stylesheet" type="text/css" href="ed.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
 
  <!-- NavBar Start -->
    <!-- <div class="container-fluid"> -->
      <nav class="navbar navbar-default" id="ed" role="navigation">
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
          <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a href="#">Clothes</a></li>
            <li><a href="#">Shops</a></li>
            <li><a href="#">SmartPhones</a></li>
            <li><a href="#">Computers</a></li>
            </ul>
          <span class="pull-right">
            (+260) 900 000 000 </br>
            <span><a href="#"><i class="fa fa-facebook "></i></a></span> <span id="twitter_icon"><a href="#"><i class="fa fa-twitter "></i></a></span> <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
          </span>
          </div> --><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!-- </div> -->
  <!-- NavBar End -->
  <!-- body section start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="left-sidebar">
            <h2>Stores</h2>
            <div class="panel-group category-products" id="accordian">
             
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title active"><a href="#">Edgers</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a href="#">Jet</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a href="#">Pep</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a href="#">Identity</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a href="#">Samsung</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading" id="ed">
                  <h4 class="panel-title"><a href="#">Game Stores</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a href="#">Hi-Fi Corp</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'> -->

<div class="col-md-10">
          <div class="col-lg-12">
            <h2 class="title text-center">Products</h2>
          </div>
              <?php
                $product_array = $db_handle->runQuery("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
                if (!empty($product_array)) { 
                  foreach($product_array as $key=>$value){
          
                    


                  /*  $step  = (float)$_POST['costprice'];
                    $step1 = $_REQUEST[(int)'discount'];
                    $totalsub = $step1 / 100;
                    $total = $totalsub * $step;
                    $discount = $step - $total;*/
                ?>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <div class="thumbnail activeTab" id="thumbProduct" href="#">
                   <img class="img-responsive productImage" src="../<?php echo $product_array[$key]["image"]; ?>">
                    <!-- <img class="style_prevu_kit" src="../images/products/htc-A9.png"> -->
                      <p class ="productName"><?php echo $product_array[$key]["name"]; ?></p>
                      <span class="discount"><?php echo $product_array[$key]["discount"]. "%" . " off"; ?></span>
                      <p class="costpriceWas"> Was: K <?php echo number_format($product_array[$key]["costprice"], 2); ?> <span class="pull-right costpriceNow "> Now: K <?php echo number_format($cost, 2) ?></span></p>
                      <p class="promoRunLoop">Promo from: <?php echo $product_array[$key]["ds"]; ?> - <?php echo $product_array[$key]["de"]; ?> </p>
                  </div>
                </div>

                    <?php

                        }
                    }
                  ?>
        </div>
        <?php
          echo pagination('item',$limit,$page);
        ?>



     </div>
   </div>
  </section>

</body>
</html>