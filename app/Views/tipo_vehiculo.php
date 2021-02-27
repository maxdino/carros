<div class="popular_destination_area" id="tipo_vehiculo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Tipo Vehiculo</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($modelo as $value){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <a href="<?php echo base_url().'/index.php/Home/vehiculo_modelo/'.$value['id_modelo'] ?>">
                        <div class="thumb">
                            <img width="350" height="200" src="<?php echo base_url().'/public/fotos/'.$value['imagen'] ?>" alt="">
                        </div>
                        <div class="content">
                             <p class="d-flex align-items-center"><?php echo $value['modelo'] ?> </p>
                            
                        </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
                 
            </div>
        </div>
    </div>