<?php include('templates/header-script.php'); ?>
<body>
	<canvas></canvas>
	<div class="absolute-center">
		<div class="content content-fixed content-auth">
			<div class="card">
				<div class="card-body">
					<div class="media align-items-stretch justify-content-center ht-100p pos-relative">
						<div class="sign-wrapper">
							<div class="wd-100p">
								<h3 class="tx-color-01 mg-b-5">Sign In</h3>
								<p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>

								<div class="form-group">
									<label>Email address</label>
									<input type="email" class="form-control" placeholder="yourname@yourmail.com">
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between mg-b-5">
										<label class="mg-b-0-f">Password</label>
										<a href="" class="tx-13">Forgot password?</a>
									</div>
									<input type="password" class="form-control" placeholder="Enter your password">
								</div>
								<a href="<?php echo base_url('/play') ?>" class="btn btn-brand-02 btn-block">Sign In</a>
								<!-- <button class="btn btn-brand-02 btn-block">Sign In</button> -->
								<div class="divider-text">or</div>
								<button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
								<button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button>
								<div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="page-signup.html">Create an Account</a></div>
							</div>
						</div><!-- sign-wrapper -->
					</div><!-- media -->
				</div>
			</div>
		</div><!-- content -->
		<footer class="footer border-top-0" style="background-color: transparent;">
			<div>
				<span>&copy; 2019 VVordix v1.0.0. </span>
				<span>Created by <a href="http://themepixels.me">rnikrozoft</a></span>
			</div>
			<div>
				<nav class="nav">
					<a href="#howtoplay" data-toggle="modal" class="nav-link">How to play</a>
				</nav>
			</div>
		</footer>
		<span id="close"><i class="fa fa-fw fa-times-circle-o"></i></span>
	</div>

	<?php include('modal/howtoplay.php'); ?>
	<?php include('templates/footer-script.php'); ?>
</body>

</html>