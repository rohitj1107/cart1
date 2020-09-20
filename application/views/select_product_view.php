<?php include('header.php'); ?>

        <div class="col-sm-12 mt-4">
          <div class="card-deck">
            <?php
                    echo '<div class="col-md-6 col-sm-6">';
                    echo '<img class="card-img-top" height="400" src="'.$result->image.'" alt="Card image cap">';
                    echo '</div>';
                    echo '<div class="col-md-6 col-sm-6">';
                    echo '<h4 class="card-title text-info">'.$result->title.'</h4>';
                    echo '<p class="card-title">'.$result->description.'</p>';
                    echo '<p class="card-title text-warning">$'.$result->price.'</p>';
                    echo form_open('index.php/add_to_cart');
                    echo form_hidden('id',$result->id);
                    echo form_hidden('title',$result->title);
                    echo form_hidden('image',$result->image);
                    echo form_hidden('price',$result->price);
                    echo form_hidden('quantity',1);
                    echo '<button class="btn btn-primary">Add To Cart</button>';
                    echo form_close();
                    echo '<br><br></div>';
            ?>
          </div>
        </div>
      </div>
    </div>
<?php include('footer.php'); ?>
