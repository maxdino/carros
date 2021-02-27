<div class="bradcam_area " style="background-image: url(<?php echo base_url().'/public/fotos/portada/auto_portada.jpg'; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>VEHICULO</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- where_togo_area_start  -->
    <!-- where_togo_area_end  -->


    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach($vehiculo as $value){ ?>
                        <div class="col-lg-4 col-md-4" >
                            <div class="single_place" style="height: 390px;">
                                <div class="thumb">
                                    <img height="234" src="<?php echo base_url().'/public/fotos/'.$value['imagen'] ?>" alt="">
                                    <a href="<?php echo base_url().'/index.php/Home/detalle_vehiculo/'.$value['id_vehiculo'] ?>" class="prise"><?php echo '$'.$value['precio'] ?></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo base_url().'/index.php/Home/detalle_vehiculo/'.$value['id_vehiculo'] ?>"><h3><?php echo $value['vehiculo'] ?></h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
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
        </div>
    </div>