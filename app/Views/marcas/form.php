			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>MARCAS  <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php  if(!isset($marca)){ ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">MARCA <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="marca" name="marca" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="file" id="imagen" name="imagen" required="" accept="image/*" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/Marca" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>

									</form>
								<?php } else{ ?>
									<form action="../update/<?php echo $marca['id_marca']; ?>" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">MARCA <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="marca" name="marca" autocomplete="off" class="form-control col-md-7 col-xs-12" value="<?php echo $marca['marca'] ?>" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="hidden" name="imagen_valida" value="<?php echo $marca['imagen'] ?>">
												<input type="file" id="imagen" name="imagen"   accept="image/*" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/Marca" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>
									</form>
								<?php }  ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>