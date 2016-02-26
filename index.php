<?php
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
          </div><!-- /.navbar-collapse -->
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
             
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Edgers</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Jet</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Pep</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Identity</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Samsung</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Game Stores</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Hi-Fi Corp</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- product grid start -->
            

        <div class="col-md-10">
          <div class="col-lg-12">
            <h2 class="title text-center">Products</h2>
          </div>
              <?php
                $product_array = $db_handle->runQuery("SELECT * FROM item ORDER BY id ASC");
                if (!empty($product_array)) { 
                  foreach($product_array as $key=>$value){
                ?>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <div class="thumbnail" href="#">
                    <img src="<?php echo $product_array[$key]["image"]; ?>">
                      <h2><?php echo $product_array[$key]["discount"]. "%" . " off"; ?></h2>
                      <h2><?php echo $product_array[$key]["costprice"]; ?></h2>
                      <p><?php echo $product_array[$key]["name"]; ?></p>
                      <p><?php echo $product_array[$key]["id"]; ?></p>

                    <!--  <button  id=new_one12 class=my_button1 value="<?php echo $product_array[$key]["image"]; ?>">View</button>
 -->
                     <button class="btn btn-primary modelBtn" data-toggle="modal" data-target="#myModal" value="<?php echo $product_array[$key]["image"]; ?>"> <i class="fa fa-search-plus"></i></i>View</button>
                     

                  </div>
                </div>
                    <?php
                        }
                    }
                  ?>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <?php
              /*$product_array = $db_handle->runQuery("SELECT * FROM item ORDER BY id ASC");*/
              if (!empty($product_array)) { 
                foreach($product_array as $key=>$image){
              ?>
                <img src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive">
            <?php
          }
        }
        ?>
              <!-- <img src="<?php echo $product_array[$key]["image"]; ?>"> -->
             <!--  <img src="../images/products/htc-A9.jpg"> -->
             <!-- <img src="$str"> -->
            </div>
        </div>
      </div>



    </div>
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>   
<script src="js/bootstrap.min.js"></script>
<script src="js/storecate.js"></script>
</BODY>
</HTML>