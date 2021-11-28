
<?php include 'includes/head.php';?>

	<div id="page-container" class="fade show">

        <?php include 'includes/header.php';?>


		<div id="page-header" class="section-container page-header-container bg-dark">

			<div class="page-header-cover">
				<img src="assets/img/slider/monument4.jpg" alt="" />
			</div>


			<div class="container">
				<h1 class="page-header"><b>Contact</b> Us</h1>
			</div>

		</div>


		<div id="product" class="section-container pt-20px">

			<div class="container">


				<div class="row row-space-30">

					<div class="col-md-8">
						<h5 class="mt-0">Contact Form</h5>
						<p class="mb-30px fs-13px">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis tortor justo,
							elementum volutpat ante porta eu.
						</p>
						<form class="form-horizontal" name="contact_us_form" action="" method="GET">

							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Name <span
										class="text-danger">*</span></label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="name" />
								</div>
							</div>

							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Email <span
										class="text-danger">*</span></label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="email" />
								</div>
							</div>

							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Subject <span
										class="text-danger">*</span></label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="subject" />
								</div>
							</div>

							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Subject <span
										class="text-danger">*</span></label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="subject" />
								</div>
							</div>
                            
							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Subject <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <select id="" name="type" autocomplete="type" class="form-control">
                                        <option value="cni">CNI</option>
                                        <option value="voter card">{{ __('lostssearchs.ce') }}</option>
                                        <option value="passport">{{ __('lostssearchs.pp') }}</option>
                                        <option value="bank card">{{ __('lostssearchs.cb') }}</option>
                                        <option value="other card">{{ __('lostssearchs.other') }}</option>
                                    </select>
								</div>
							</div>

							<div class="mb-2 row">
								<label class="col-form-label col-md-3 text-lg-end">Message <span
										class="text-danger">*</span></label>
								<div class="col-md-7">
                                <input id="file-upload" name="image[]" type="file"
                                    class="form-control"
                                    multiple accept="image/*">
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, JPEG max 2MB
                                    </p>
                                </div>
							</div>

							<div class="mb-2 row">
								<label class="col-form-label col-md-3"></label>
								<div class="col-md-7">
									<button type="submit" class="btn btn-default btn-theme" style="background-color:#0b9444;color:white">Enregistrer</button>
								</div>
							</div>
						</form>
					</div>


				</div>

			</div>

		</div>


        <?php include 'includes/footer.php';?>