<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>FABRICACION <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php if (!isset($fabricacion)) {  ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fabricacion">FABRICACIÓN <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="fabricacion" name="fabricacion" style="text-transform: uppercase;" autocomplete="off" required="" class="form-control col-md-7 col-xs-12 sololetras">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">FECHA <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" class="form-control has-feedback-left solo_numero" name="fecha" id="fecha" placeholder="Fecha" autocomplete="off" maxlength="4" required="">
											<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
											<span id="inputSuccess2Status4" class="sr-only">(success)</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="file" id="imagen" name="imagen" accept="image/*" required="" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a type="submit" href="<?php echo base_url(); ?>/index.php/fabricacion" class="btn btn-danger btn_cancel">Cancel</a>
											<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
										</div>
									</div>

								</form>
								<?php }else {  ?>
									<form action="../update/<?php echo $fabricacion['id_fabricacion'] ?>" method="POST"  class="form-horizontal form-label-left" enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label  col-md-3 col-sm-3 col-xs-12" for="first-name">FABRICACIÓN <span class="required">*</span>
										</label>
										 
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="fabricacion" name="fabricacion" style="text-transform: uppercase;" autocomplete="off"  value="<?php echo $fabricacion['fabricacion']; ?>" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">FECHA <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" class="form-control has-feedback-left solo_numero" name="fecha" id="fecha" placeholder="Fecha" autocomplete="off" value="<?php echo $fabricacion['annio']; ?>" maxlength="4" required="">
											<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
											<span id="inputSuccess2Status4" class="sr-only">(success)</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
										</label>
										<input type="hidden" name="imagen_valida"  value="<?php echo $fabricacion['imagen']; ?>">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="file" id="imagen" name="imagen" accept="image/*"  class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a type="submit" href="<?php echo base_url(); ?>/index.php/fabricacion" class="btn btn-danger btn_cancel">Cancel</a>
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