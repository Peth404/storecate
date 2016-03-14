<!-- Now We are in index.php -->
<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="eng">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Pagination</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/edgars/ed.css">


        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

    </head>
    <body>    
    <?php
 
    include("pagination.php"); // DON'T FORGET THIS

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
            //echo '</table>';
        }
    ?>

    <!--//display pagination page numbers //
    //step:9 '
    -->
    <div id="pagination">
        <div id="pagiCount">
            <?php
                if(isset($pages))
                {  
                    if($pages > 1)        
                    {    if($cur_page > $num_links)     // for taking to page 1 //
                        {   $dir = "first";
                            echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.(1).'">'.$dir.'</a> </span>';
                        }
                       if($cur_page > 1) 
                        {
                            $dir = "prev";
                            echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page-1).'">'.$dir.'</a> </span>';
                        }                 
                        
                        for($x=$start ; $x<=$end ;$x++)
                        {
                            
                            echo ($x == $cur_page) ? '<strong>'.$x.'</strong> ':'<a href="'.$_SERVER['PHP_SELF'].'?page='.$x.'">'.$x.'</a> ';
                        }
                        if($cur_page < $pages )
                        {   $dir = "next";
                            echo '<span id="next"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page+1).'">'.$dir.'</a> </span>';
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
   
</body>
</html>
