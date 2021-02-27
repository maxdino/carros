<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>USUARIO <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php   if (!isset($usuario)) {  ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">NOMBRE <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="nombre" name="nombre" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">APELLIDO <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="apellido" name="apellido" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dni">DNI <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="dni" name="dni" maxlength="8" autocomplete="off" class="form-control col-md-7 col-xs-12 solo_numero" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">DIRECCIÓN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="direccion" name="direccion" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">NICK <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="usuario" name="usuario" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="clave">CLAVE <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="password" id="clave" name="clave"   autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="file" id="imagen" name="imagen" accept="image/*" required=""  class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url() ?>/index.php/usuario" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>

									</form>
								<?php }else {  ?>
									<form action="../update/<?php echo $usuario['id_usuario'] ?>" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">NOMBRE <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="nombre" name="nombre" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" value="<?php echo $usuario['nombre']; ?>" required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">APELLIDO <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="apellido" name="apellido" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12 sololetras" value="<?php echo $usuario['apellido']; ?>"  required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dni">DNI <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="dni" name="dni" maxlength="8" autocomplete="off" class="form-control col-md-7 col-xs-12 solo_numero" value="<?php echo $usuario['dni']; ?>"  required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">DIRECCIÓN <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="direccion" name="direccion" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12" value="<?php echo $usuario['direccion']; ?>"  required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">NICK <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="usuario" name="usuario" autocomplete="off" class="form-control col-md-7 col-xs-12" value="<?php echo $usuario['nick']; ?>"  required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="clave">CLAVE <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="password" id="clave" name="clave"   autocomplete="off" class="form-control col-md-7 col-xs-12" value="<?php echo $usuario['clave']; ?>"  required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">IMAGEN <span class="required">*</span>
										</label>
										<input type="hidden" name="imagen_valida" value="<?php echo $usuario['imagen']; ?>" >
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="file" id="imagen" name="imagen" accept="image/*" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a type="submit" href="<?php echo base_url() ?>/index.php/usuario" class="btn btn-danger btn_cancel">Cancel</a>
											<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
										</div>
									</div>

								</form>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>