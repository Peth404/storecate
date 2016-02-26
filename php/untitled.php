<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></i>View</a>
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
            </div>

        </div>
      </div>

    </div>