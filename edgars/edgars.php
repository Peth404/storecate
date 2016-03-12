<?php
include 'php/config.php';

/*$con = mysql_connect("localhost","root"," "); // Enter hostname,user,password 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  // select database
  mysql_select_db("stores", $con); //*/


  include("../php/pagination.php");
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
            <a class="navbar-brand" id="navLinks" href="#"><img class="elogo" src="img/elogo.png"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a id="navLinks" href="../index.php">Home</a></li>
            <!-- <li><a href="#">Shops</a></li>
            <li><a href="#">SmartPhones</a></li>
            <li><a href="#">Computers</a></li>
            </ul>
          <span class="pull-right" id="navLinks">
            (+260) 900 000 000 </br>
            <span><a href="#"><i class="fa fa-facebook "></i></a></span> <span id="twitter_icon"><a href="#"><i class="fa fa-twitter "></i></a></span> <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
          </span>
          </div> --><!-- /.navbar-collapse
        </div><!-- /.container-fluid -->
      </nav>
    <!-- </div> -->
  <!-- NavBar End -->
  <!-- body section start -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="left-sidebar">
            <h2 class="storeList">Stores</h2>
            <div class="panel-group category-products" id="accordian">
             
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title active"><a class="edlinks" href="#">Edgers</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Jet</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Pep</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Identity</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Samsung</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading" id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Game Stores</a></h4>
                </div>
              </div>
              <div class="panel panel-default activeTab">
                <div class="panel-heading"  id="ed">
                  <h4 class="panel-title"><a class="edlinks" href="#">Hi-Fi Corp</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'> -->

<div class="col-md-10">
          <div class="col-lg-12">
            <h2 class="saleTag">special sale</h2>
          </div>
              <?php
 
     // DON'T FORGET THIS

     //        display the results //
     //step:8
     
        if(isset($res))// results from Step 7
        {
           // creating table
           // echo '<table style="width:600px; cell-padding:4px; cell-spacing:0; margin:auto;">';      
                // echo'<th>id</th><th>title</th><th>content</th></tr>'; 
            while($result = mysql_fetch_assoc($res))
            {
              echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
              echo '<div class="thumbnail activeTab" id="thumbProduct">';
              echo '<div>'.'<img class="img-responsive productImage" src="../'.$result['image'].'"'.'/>'.'</div>'
              .'<p class ="productName">'.$result['name'].'</p>'
              .'<span class="discount">'.$result['discount'].'%' . ' off'.'</span>'
              .'<p class="costpriceWas">'.'Was: K'.$result['costprice'].'<span class="pull-right costpriceNow ">'.'Now: K'.$result['discountprice'].'</span>'.'</p>'. '<p class="promoRunLoop">'.'Promo from: '.$result['ds'].' - '.$result['de'].' </p>';
             echo '</div>';
             echo '</div>';
            }
            
        }
    ?>

        </div>
     </div>
   </div>
  </section>
  <div class="container">
      <div id="pagination">
        <div id="pagiCount">
        
            <?php
                if(isset($pages))
                {  
                    if($pages > 1)        
                    {    if($cur_page > $num_links)     // for taking to page 1 //
                        {   $dir = "first";
                            echo '<span class="pagiCount" id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.(1).'">'.$dir.'</a> </span>';
                        }
                       if($cur_page > 1) 
                        {
                            $dir = "prev";
                            echo '<span class="pagiCount" id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page-1).'">'.$dir.'</a> </span>';
                        }                 
                        
                        for($x=$start ; $x<=$end ;$x++)
                        {
                            
                            echo ($x == $cur_page) ? '<strong>'.$x.'</strong> ':'<a href="'.$_SERVER['PHP_SELF'].'?page='.$x.'">'.$x.'</a> ';
                        }
                        if($cur_page < $pages )
                        {   $dir = "next";
                            echo '<span class="pagiCount" id="next"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page+1).'">'.$dir.'</a> </span>';
                        }
                        if($cur_page < ($pages-$num_links) )
                        {   $dir = "last";
                       
                            echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$pages.'">'.$dir.'</a> '; 
                        }   
                    }
                }
            ?>
        </div>
      </div>
    </div>
  <div id="footer">
    <div class="container">
    <span><span><small>Copyright 2016 by SalesOnli</small></span>
      <span class="text-muted pull-right">This site was designed and is maintained by <a href="https://www.linkedin.com/in/reggo-masiye-541162a0">Reggo</a> & <a href="https://www.linkedin.com/in/pethias-chiseke-b6a1738b">Pethias</a></span></span>
    </div>
  </div>
</body>
</html>