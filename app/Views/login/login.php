<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
	<dvi class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4">
			<div class="card-header">
                <h4 class="text-center text-success">Login Account</h4>
			</div>
			<div class="card-body">
				<form class="form text-center" action="#" method="POST">
					<div id="dynamic_container">
						<div class="input-group">
							<input type="email" placeholder="Enter Mail" class="form-control.." id="email" />
						</div>
						<div class="input-group mt-3">
							<input type="password" placeholder="Enter Password.." class="form-control" id="password" />
						</div>
					</div>
                    <button type="submit" class="btn btn-outline-success float-right mt-4">Login</button>
				</form>
			</div>
		</div>
	</div>
	</dvi>
<?= $this->endSection() ?>