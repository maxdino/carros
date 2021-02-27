			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>VEHICULO <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php  if(!isset($vehiculo)){ ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">VEHICULO <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="vehiculo" name="vehiculo" style="text-transform: uppercase;" autocomplete="off" required="" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio">PRECIO <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="precio" onchange="precio_forma()" name="precio" style="text-transform: uppercase;" autocomplete="off" required="" class="form-control col-md-7 col-xs-12 solo_precio" maxlength="11">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">COLOR <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select style="max-width: 581.6px;" class="select2_multiple form-control" name="color[]" id="color_select" multiple="multiple" required="">
												<?php foreach($color as $value){ ?>
													<option value="<?php echo $value['id_color']; ?>"><?php echo $value['color']; ?></option>
												<?php } ?>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">CARACTERISTICAS <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select style="max-width: 581.6px;" class="select2_multiple form-control" name="caracteristica[]" id="caracteristica_select" multiple="multiple" required="">
												<?php foreach($sub_caracteristica as $value){ ?>
													<option value="<?php echo $value['id_sub_caracteristica']; ?>"><?php echo $value['sub_caracteristica']; ?></option>
												<?php } ?>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fabricacion">FABRICACIÓN<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="fabricacion_select" name="fabricacion" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
												<option></option>
												<?php foreach($fabricacion as $value){ ?>
													<option value="<?php echo $value['id_fabricacion']; ?>"><?php echo $value['fabricacion']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">MODELO<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="modelo_select" name="modelo" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
												<option></option>
												<?php foreach($modelo as $value){ ?>
													<option value="<?php echo $value['id_modelo']; ?>"><?php echo $value['modelo']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">MARCA<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="marca_select" name="marca" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
												<option></option>
												<?php foreach($marca as $value){ ?>
													<option value="<?php echo $value['id_marca']; ?>"><?php echo $value['marca']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="motor">MOTOR<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="motor_select" name="motor" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
												<option></option>
												<?php foreach($motor as $value){ ?>
													<option value="<?php echo $value['id_motor']; ?>"><?php echo $value['motor']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IMAGEN <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="file" id="imagen" name="imagen" required=""  class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a type="submit" href="<?php echo base_url(); ?>/index.php/vehiculo" class="btn btn-danger btn_cancel">Cancel</a>
											<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
										</div>
									</div>

								</form>
								<?php } else{ ?>
									<form action="../update/<?php echo $vehiculo['id_vehiculo']; ?>" method="POST"  class="form-horizontal form-label-left"  enctype="multipart/form-data">
										<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">VEHICULO <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="vehiculo" name="vehiculo" style="text-transform: uppercase;" value="<?php echo $vehiculo['vehiculo']?>" autocomplete="off" required="" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio">PRECIO <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="precio" name="precio" onchange="precio_forma()"  autocomplete="off" required="" value="<?php echo $vehiculo['precio']; ?>" class="form-control col-md-7 col-xs-12 solo_precio" maxlength="10">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">COLOR <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select style="max-width: 581.6px;" class="select2_multiple form-control" name="color[]" id="color_select" multiple="multiple" required="">
												<?php foreach($color_vehiculo as $value){ $color_selec[]= $value['id_color']; ?>
													<option value="<?php echo $value['id_color']; ?>" selected="true" ><?php echo $value['color']; ?></option>
												<?php } ?>
												<?php foreach($color as $value){  if (!in_array($value['id_color'], $color_selec)) {  ?>
													<option value="<?php echo $value['id_color']; ?>" ><?php echo $value['color']; ?></option>
												<?php } } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">CARACTERISTICAS <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select style="max-width: 581.6px;" class="select2_multiple form-control" name="caracteristica[]" id="caracteristica_select" multiple="multiple" required="">
												<?php $select =array(); 
												foreach($caracteristica_vehiculo as $value){ 
														$select[] = $value['id_sub_caracteristica']; ?>
													<option value="<?php echo $value['id_sub_caracteristica']; ?>" selected="true" ><?php echo $value['sub_caracteristica']; ?></option>
												<?php } ?>
												<?php foreach($sub_caracteristica as $value){ 
													if (!in_array($value['id_sub_caracteristica'], $select)) {  ?>
													<option value="<?php echo $value['id_sub_caracteristica']; ?>"><?php echo $value['sub_caracteristica']; ?></option>
												<?php } } ?>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fabricacion">FABRICACIÓN<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="fabricacion" name="fabricacion" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
												<?php foreach($fabricacion as $value){
													if ($vehiculo['id_fabricacion']==$value['id_fabricacion']) {  ?>
														<option value="<?php echo $value['id_fabricacion']; ?>" selected="true"><?php echo $value['fabricacion']; ?></option>
													<?php }else{ ?>
														<option value="<?php echo $value['id_fabricacion']; ?>"  ><?php echo $value['fabricacion']; ?></option>
													<?php } } ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">MODELO<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select id="modelo" name="modelo" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
													<?php foreach($modelo as $value){
														if ($vehiculo['id_modelo']==$value['id_modelo']) {  ?>
															<option value="<?php echo $value['id_modelo']; ?>" selected="true"><?php echo $value['modelo']; ?></option>
														<?php }else{ ?>
															<option value="<?php echo $value['id_modelo']; ?>"  ><?php echo $value['modelo']; ?></option>
														<?php } } ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">MARCA<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<select id="marca" name="marca" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
														<?php foreach($marca as $value){
															if ($vehiculo['id_marca']==$value['id_marca']) {  ?>
																<option value="<?php echo $value['id_marca']; ?>" selected="true"><?php echo $value['marca']; ?></option>
															<?php }else{ ?>
																<option value="<?php echo $value['id_marca']; ?>"  ><?php echo $value['marca']; ?></option>
															<?php } } ?>
														</select>
													</div>
												</div>	
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="motor">MOTOR<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<select id="motor" name="motor" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
															<?php foreach($motor as $value){
																if ($vehiculo['id_motor']==$value['id_motor']) {  ?>
																	<option value="<?php echo $value['id_motor']; ?>" selected="true"><?php echo $value['motor']; ?></option>
																<?php }else{ ?>
																	<option value="<?php echo $value['id_motor']; ?>"  ><?php echo $value['motor']; ?></option>
																<?php } } ?>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IMAGEN <span class="required">*</span>
														</label>
														<input type="hidden" name="imagen_valida"  value="<?php echo $vehiculo['imagen']; ?>">
														<div class="col-md-6 col-sm-6 col-xs-12">
															<input type="file" id="imagen" name="imagen"  class="form-control col-md-7 col-xs-12">
														</div>
													</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/vehiculo" class="btn btn-danger btn_cancel">Cancel</a>
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