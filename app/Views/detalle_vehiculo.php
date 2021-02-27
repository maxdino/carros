 <div class="destination_banner_wrap overlay" style="background-image: url(<?php echo base_url().'/public/fotos/'.$vehiculo[0]['imagen']  ?>);">
        <div class="destination_text text-center">
            <h3><?php echo $vehiculo[0]['vehiculo'] ?></h3>
            <p> </p>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>COLORES</h3>
                        <div class="row">
                        <?php foreach($detalle_color as $value){ ?>
                        <div class="circulo col-lg-2 col-md-3  " style="background:<?php echo $value['codigo']; ?> ;"></div> 
                        <?php } ?>
                       </div>
                       <br>
                        <h3>CARACTERISTICAS</h3>
                        
                        <?php foreach($detalle_caracteristicas as $value){ ?>
                        <div><?php echo $value['sub_caracteristica']; ?></div>
                        <?php } ?>
                           
                        <br>
                        <h3>MOTOR</h3>
                        
                        <?php foreach($motor as $value){ 
                        if($vehiculo[0]['id_motor']==$value['id_motor']){ ?>
                        <div><?php echo $value['motor']; ?></div>
                        <?php } } ?>
                        <br>
                        <h3>MARCA</h3>
                        
                        <?php foreach($marca as $value){ 
                        if($vehiculo[0]['id_marca']==$value['id_marca']){ ?>
                        <div><?php echo $value['marca']; ?></div>
                        <?php } } ?>
                        <br>
                        <h3>FABRICACIÓN</h3>
                        
                        <?php foreach($fabricacion as $value){ 
                        if($vehiculo[0]['id_fabricacion']==$value['id_fabricacion']){ ?>
                        <div><?php echo $value['fabricacion']; ?></div>
                        <?php } } ?> 
                    </div>
                    <div class="bordered_1px"></div>
                </div>
            </div>
        </div>
    </div>