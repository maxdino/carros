<div class="popular_places_area" id="fabricacion">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb_70">
                            <h3>Fabricación</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <?php foreach($fabricacion as $value){ ?>
                   <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <a href="<?php echo base_url().'/index.php/Home/vehiculo_fabricacion/'.$value['id_fabricacion'] ?>">
                            <div class="thumb">
                                <img width="350" height="197" src="<?php echo base_url().'/public/fotos/'.$value['imagen'] ?>" alt="">

                            </div>
                        </a>
                        <div class="place_info">
                            <a href="<?php echo '../carros/carros_fabricacion.php?id='.$value['id_fabricacion'] ?>"><h3><?php echo $value['fabricacion'] ?></h3></a>

                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>