<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>AGREGAR COLOR <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php if (!isset($color)) {  ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">COLOR <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="color" name="color"  autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" required="">
											</div>
										</div>
 										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> CODIGO COLOR <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="color" id="codigo" name="codigo" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/color" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>

									</form>
								<?php }else {  ?>
									<form action="../update/<?php echo $color['id_color'] ?>" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">COLOR <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="color" name="color" value="<?php echo $color['color'] ?>"  autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" required="">
											</div>
										</div>
 										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> CODIGO COLOR <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="color" id="codigo" name="codigo"  value="<?php echo $color['codigo'] ?>" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/color" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>

									</form>
								<?php }   ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>