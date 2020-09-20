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

            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Well done!</h4>
              <p>Aww yeah, you successfully Order is place.</p>
              <hr>
              <p class="mb-0">Please wait for delivery date and time.</p>
            </div>

        </div>
      </div>
    </div>
<?php include('footer.php'); ?>
