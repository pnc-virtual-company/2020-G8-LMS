<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
	<body style="background-color: #17a2b8;">
	<div id="login" >
		<!-- <h3 class="text-center text-white pt-5">Login Account</h3> -->
        <div class="container">
			<div id="login-row" class="row justify-content-center align-items-center">
				<div id="login-column" class="col-md-6">
					<div id="login-box" class="col-md-12">
						<form id="login-form" class="form" action="/your_leave" method="post">
						<h2 class="text-center text-info">Login Account</h2>
						<div class="form-group">
							<label for="username" class="text-info">Email:</label><br>
							<input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
								<label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
							<button type="submit" name="submit" class="btn btn-info float-right">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</body>
	<?= $this->endSection() ?>