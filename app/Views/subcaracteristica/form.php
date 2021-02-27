<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row" >
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>SUB CARACTERISTICAS <small></small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<p class="text-muted font-13 m-b-30">
									</p>
									<?php if (!isset($sub_caracteristica)) {  ?>
									<form action="create" method="POST"  class="form-horizontal form-label-left">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SUB CARACTERISTICA <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="sub_caracteristica" name="sub_caracteristica" style="text-transform: uppercase;" autocomplete="off" class="form-control col-md-7 col-xs-12" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="caracteristica">CARACTERISTICA<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select id="caracteristica" name="caracteristica" style="width: 100%" class="select2_single form-control" tabindex="-1" required="">
													<option></option>
													<?php foreach($caracteristica as $value){ ?>
														<option value="<?php echo $value['id_caracteristica']; ?>"><?php echo $value['caracteristica']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/sub_caracteristica" class="btn btn-danger btn_cancel">Cancel</a>
												<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
											</div>
										</div>

									</form>
								<?php }else {  ?>
									<form action="../update/<?php echo $sub_caracteristica['id_sub_caracteristica'] ?>" method="POST"  class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SUB CARACTERISTICA <span class="required">*</span>
										</label>
										<input type="hidden" name="id_sub_caracteristica" value="<?php echo $sub_caracteristica['id_sub_caracteristica']?>" required="" />
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="sub_caracteristica" name="sub_caracteristica" style="text-transform: uppercase;" autocomplete="off"  value="<?php echo $sub_caracteristica['sub_caracteristica']; ?>" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="caracteristica">CARACTERISTICA<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="caracteristica" name="caracteristica" style="width: 100%" class="select2_single form-control" tabindex="-1" required="" >
												<option></option>
												<?php   foreach($caracteristica as $value){ 
													if($sub_caracteristica['id_caracteristica']==$value['id_caracteristica']){ ?>
														<option  selected="true" value="<?php echo $value['id_caracteristica']; ?>"><?php echo $value['caracteristica']; ?></option>
													<?php } else{ ?>
														<option   value="<?php echo $value['id_caracteristica']; ?>"><?php echo $value['caracteristica']; ?></option>
													<?php } } ?>
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a type="submit" href="<?php echo base_url(); ?>/index.php/sub_caracteristica" class="btn btn-danger btn_cancel">Cancel</a>
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