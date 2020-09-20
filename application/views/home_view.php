<?php include('header.php'); ?>

        <div class="col-sm-12">
          <?php if ($this->session->flashdata('success')) {
              echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>';
          } ?>
          <?php if ($this->session->flashdata('faild')) {
              echo '<p class="alert alert-success">'.$this->session->flashdata('faild').'</p>';
          } ?>
        </div>
        <div class="col-sm-12 mt-4">
          <div class="card-deck">
            <?php
                foreach ($data as $value) {
                    echo '<div class="col-md-3 col-sm-6">';
                    echo '<img class="card-img-top" height="200" src="'.$value['image'].'" alt="Card image cap">';
                    echo '<a href="'.base_url('index.php/select_product').'/'.$value['id'].'" >';
                    echo '<h6 class="card-title">'.$value['title'].'</h6>';
                    echo '</a>';
                    echo '<p class="card-title">$'.$value['price'].'</p>';
                    echo '<br><br></div>';
                }
            ?>
          </div>
        </div>
      </div>
    </div>
<?php include('footer.php'); ?>
