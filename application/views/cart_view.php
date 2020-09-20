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
<!--Section: Block Content-->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">

        <div class="pt-4 wish-list">

          <h5 class="mb-4">Cart (<span><?php echo $item_count->number; ?></span> items)</h5>
          <?php foreach ($cart as  $value) { ?>

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="<?php echo $value['image']; ?>" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5><?php echo $value['title']; ?></h5>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="mb-0"><span><strong id="summary">$<?php echo $value['price']; ?></strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
        <? } ?>

          <hr class="mb-4">

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">
          <h5 class="mb-4">Expected shipping delivery</h5>
          <p class="mb-0"> <?php echo date('d M') .' / '. date('d M'); ?> </p>
        </div>
      </div>
      <!-- Card -->
    </div>
    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span>$<?php
                $sum = 0;
                for ($i=0; $i < sizeof($cart); $i++) {
                    $sum += $cart[$i]['price'];
                }
                echo $sum;
              ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT + $15)</p>
                </strong>
                <hr>
                Payment method: <strong class="text-info">COD</strong> <input type="checkbox" required name="COD" value="COD">
              </div>
              <span><strong><?php echo $sum + 15; ?></strong></span>
            </li>
          </ul>

          <!-- <button type="button" data-toggle="modal" data-target="#cartModal" class="btn btn-primary btn-block">go to checkout</button> -->

          <!-- Button trigger modal -->

          <!-- Button trigger modal -->
          <?php if ($this->session->userdata('email')): ?>
            <form action="<?php echo base_url('index.php/all'); ?>" method="post">
              <input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">
              <input type="submit" name="submit" value="Check Out" class="btn btn-primary">
            </form>
          <?php else: ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Check Out
            </button>

          <?php endif; ?>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Choose User Type</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body col-sm-12 text-center">
                  <a href="<?php echo base_url('index.php/login/1'); ?>" class="btn btn-secondary">Guest</a>
                  <a href="<?php echo base_url('index.php/login/2'); ?>" class="btn btn-primary">Customer</a>
                </div>
              </div>
            </div>
          </div>


          <!-- Modal -->

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
