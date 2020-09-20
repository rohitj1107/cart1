<?php include('header.php'); ?>
<div class="col-sm-12 mt-4">
<!--Section: Block Content-->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-12">

      <!-- Card -->
      <div class="mb-3">

        <div class="pt-4 wish-list">
          <h5 class="mb-4">User </h5>
          <hr class="mb-4">

          <?php if ($type == 1) { ?>

            <?php echo form_open('index.php/guest_order'); ?>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" placeholder="Password"> </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo form_close(); ?>

          <?php } else { ?>
            <?php
              if ($this->session->flashdata('faild')) {
                echo '<p class="alert alert-danger">'.$this->session->flashdata('faild').'</p>';
              }
            ?>

            <?php echo form_open('index.php/login_check'); ?>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo form_close(); ?>
          <?php } ?>

        </div>
      </div>
      <!-- Card -->
    </div>
    <!--Grid column-->
  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->
        </div>
      </div>
    </div>
<?php include('footer.php'); ?>
