<div class="card" id="cardLogin">
	<div class="card-header" id="card-headerLogin">
		<h5>Perpustakaan <i>dekadensiotak</i></h5>
		<h3>Sign In</h3>
	</div>
	<div class="card-body">
		<form action="<?= BASEURL; ?>/admin/login" method="post">
			<div class="input-group form-group">
				<label for="username" class="sr-only">Username</label>
				<input type="text" class="form-control" placeholder="Username" id="username" name="username">
			</div>
			<div class="input-group form-group">
				<label for="password" class="sr-only">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>
			<div class="row align-items-center remember">
				<label for="remember" class="sr-only">Ingat Saya</label>
				<input type="checkbox" name="remember" id="remember">Ingat Saya
			</div>
			<div class="form-group">
				<input type="submit" value="Sign In" class="btn float-right login_btn">
			</div>
		</form>
	</div>
	<div class="card-footer">
		<div class="d-flex justify-content-center links">
			Belum punya akun?<a href="#">Daftar</a>
		</div>
		<div class="d-flex justify-content-center">
			<a href="#">Lupa password?</a>
		</div>
	</div>
</div>

<div class="text-center fixed-bottom" id="footerLogin">
	<a href="https://anugrah.club/theroom">Anugrah's Project</a> &copy; 2019
</div>

</body>