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
            <form action="/your_leave" method="post">
              <div class="card-title text-center">
                <img src="images/logo.png" style="width:80px" alt="Logo Telkom Indonesia" /></div>
              <!-- <h4 class="form-group text-center text-primary">Login Account</h4> -->
              <div class="form-group mt-3">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text icon-login" id="basic-addon1"><i class="material-icons">person</i></span>
                  </div>
                  <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group ">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text icon-login" id="basic-addon2"><i class="material-icons">lock</i></span>
                  </div>
                  <input class="prepend-fx form-control" type="password" id='password' name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" required>
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
  </div>
</body>
	<?= $this->endSection() ?>