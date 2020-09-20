<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href=<?php echo base_url('index.php/Home'); ?>>Cart</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              </ul>
                <a href="<?php echo base_url('index.php/cart'); ?>" class="btn btn-outline-danger my-2 my-sm-0" type="submit"> Cart <?php echo $item_count->number; ?></a>
              &nbsp
              <form class="form-inline my-2 my-lg-0">
                <?php if ($this->session->userdata('email')) {
                  echo '
                    <div class="btn-group">
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        '.$this->session->userdata('email').'
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="'.base_url('index.php/logout').'">Log Out</a>
                      </div>
                    </div>';
                  } else {
                  echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>';
                } ?>

              </form>
            </div>
          </nav>
        </div>
