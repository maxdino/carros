<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<a href="<?php echo base_url(); ?>/index.php/modelo/formulario" id="agregar" class="btn btn-round btn-success"><span class="fa fa-plus"></span>
				Agregar</a>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>REGISTRO MODELO <small></small></h2>
						<ul class="nav navbar-right panel_toolbox">

						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content" id="t_cont">
						<p class="text-muted font-13 m-b-30">
						</p>
						<table id="tabla_detalle" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>MODELO</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php  foreach($modelo as $value){ ?>
									<tr>
										<td><?php echo $value['id_modelo']; ?></td>
										<td><?php echo $value['modelo']; ?></td>
									<td><center>
										<a href="<?php echo base_url().'/index.php/modelo/show/'.$value['id_modelo']; ?>" title="EDITAR"><i class="fa fa-pencil-square" style="color:#2A3F54;cursor: pointer;"></i></a>
										<a href="<?php echo base_url().'/index.php/modelo/delete/'.$value['id_modelo']; ?>"  style="cursor: pointer;" title="ELIMINAR"><i class="fa fa-trash" style="color:red;"></i></a>
									</center></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!---->
</div>
</div>
