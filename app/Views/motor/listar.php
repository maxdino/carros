<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<a href="<?php echo base_url(); ?>/index.php/motor/formulario" id="agregar" class="btn btn-round btn-success"><span class="fa fa-plus"></span>
				Agregar</a>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>REGISTRO MOTOR <small></small></h2>
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
									<th>MOTOR</th>
									<th>ESTADO</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($motor as $value){ ?>
									<tr id="fila<?php echo $value['id_motor']; ?>">
										<td><?php echo $value['id_motor']; ?></td>
										<td><?php echo $value['motor']; ?></td>
										<td><?php if($value['estado']==1){ echo 'ACTIVO';
									}else{echo 'INACTIVO';} ?></td>
									<td><center>
										<a href="<?php echo base_url().'/index.php/motor/show/'.$value['id_motor']; ?>" title="EDITAR"><i class="fa fa-pencil-square" style="color:#2A3F54;cursor: pointer;"></i></a>
										<a href="<?php echo base_url().'/index.php/motor/delete/'.$value['id_motor']; ?>"  style="cursor: pointer;" title="ELIMINAR"><i class="fa fa-trash" style="color:red;"></i></a>
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
