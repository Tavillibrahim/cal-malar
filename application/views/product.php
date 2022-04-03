<?php include "includes/header.php"; ?>


<div class="limiter">
	<div class="container-login100" style="background-image: url('<?php echo base_url("assets/images/bg-01.jpg") ?>');">
		<div class="wrap-login100">
			<form class="login100-form validate-form" method="POST" action="<?php echo base_url("product/insert") ?>">
				<span class="login100-form-logo">
					<i class="zmdi zmdi-landscape"></i>
				</span>
				<br>
				<div class="row">
					<div class="col-sm-3" style="color:white">ÜRÜN ADI </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="Product Name">
							<input class="input100" type="text" name="product_name">

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">KATEGORİ </div>
					<div class="col-sm-9">
						<div class="wrap-input100 " data-validate="Select Category">
							<select class="input100" type="text" name="product_category_id" placeholder="Select Category">
								<option value="" style="color:black">KATEGORİ SEÇ</option>
								<?php foreach ($categories as $category) {

								?>
									<option value="<?php echo $category->id; ?>" style="color:black"><?php echo $category->category_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">Stok </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="Stock">
							<input class="input100" type="number" min="0" value="0" step="1" name="stock" placeholder="Stock">

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">FİYAT </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="Price">
							<input class="input100" type="number" min="0" value="0" step="1" name="price" placeholder="Price">

						</div>
					</div>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Ürün Ekle
					</button>
				</div>
			</form>
		</div>
	</div>
</div>




<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/bootstrap/js/popper.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/select2/select2.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/js/main.js") ?>"></script>


<?php include "includes/footer.php"; ?>