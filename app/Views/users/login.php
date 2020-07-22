<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<body>
  <div class='container'>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center">
      </div>
      <div class="col-md-4"></div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card mt-5 animated fadeIn mr-1 ml-1">
          <div class="card-body">
            <form action="" method="post">
              <div class="card-title text-center">
                <img src="images/logo.png" style="width:80px" alt="Logo Telkom Indonesia" /></div>
              <div class="form-group mt-3">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text icon-login" id="basic-addon1"><i class="material-icons">email</i></span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" aria-label="Email" aria-describedby="basic-addon1" >
                </div>
              </div>
              <div class="form-group ">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text icon-login" id="basic-addon2"><i class="material-icons">lock</i></span>
                  </div>
                  <input class="prepend-fx form-control" type="password" id='password' name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                </div>
              </div>
          </div>

          <div class="form-group ml-3 mr-3">
            <button type="submit" id="submit" class="btn btn-success form-control mb-4">Next</button>
          </div>
          </form>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
    <?php if(isset($message)): ?>
            <div class="col-12 mt-5">
              <div class="alert alert-danger" role="alert" style="width:31.5%; margin-left:34.2%">
                <?= $message->listErrors(); ?>
              </div>
            </div>
          <?php endif; ?>
  </div>
</body>
	<?= $this->endSection() ?>