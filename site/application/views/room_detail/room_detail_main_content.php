<?php if(!empty($rooms)) {
    ?>
    <!-- Rooms -->

    <section class="rooms mt50">
        <div class="container">
            <div class="col-sm-12">
                <h2 class="lined-heading"><span><?php echo $rooms_row->title; ?></span></h2>
            </div>
            <div class="container mt50">
                <div class="row">
                    <!-- Slider -->
                    <section class="standard-slider room-slider">
                        <div class="col-sm-12 col-md-8">
                            <div id="owl-standard" class="owl-carousel">

                                <?php
                                foreach ($images as $image){ ?>
                                <div class="item"> <a href="<?php echo base_url("panel/uploads/$image->img_id"); ?>" data-rel="prettyPhoto[gallery1]"><img src="<?php echo base_url("panel/uploads/$image->img_id"); ?>" alt="<?php echo $rooms_row->title; ?>" class="img-responsive"></a> </div>
                                <?php } ?>
                            </div>
                        </div>
                    </section>

                    <!-- Reservation form -->
                    <section id="reservation-form" class="mt50 clearfix">
                        <div class="col-sm-12 col-md-4">
                            <form class="reservation-vertical clearfix" role="form" method="post" action="php/reservation.php" name="reservationform" id="reservationform">
                                <h2 class="lined-heading"><span>Reservation</span></h2>
                                <div class="price">
                                    <h4>Double Room</h4>
                                    <?php $price = get_prices(array("room_id"=> $room_id,"date" => date(date("Y-m-d"))));
                                    if($price == "null"){
                                        echo $rooms_row->default_price;
                                    }else{
                                        echo $price;
                                    } ?>
                                    <span> gecelik</span>
                                <div id="message"></div>
                                <!-- Error message display -->
                                <div class="form-group">
                                    <select class="hidden" name="room" id="room">
                                        <option selected="selected">Double Room</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="checkin">Check-in</label>
                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                    <i class="fa fa-calendar infield"></i>
                                    <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
                                </div>
                                <div class="form-group">
                                    <label for="checkout">Check-out</label>
                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                    <i class="fa fa-calendar infield"></i>
                                    <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                            </form>
                        </div>
                    </section>

                    <!-- Room Content -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 mt50">
                                    <h2 class="lined-heading"><span>Room Details</span></h2>
                                    <h3 class="mt50">Table overview</h3>
                                    <?php $properties =  explode(";", $rooms_row->room_properties); ?>
                                    <ul class="list-inline">
                                        <?php foreach($properties as $property) { ?>
                                            <li><i class="fa fa-check-circle"></i> <?php echo $property_list[$property] ?></li>
                                        <?php } ?>
                                    </ul>
                                    <p class="mt50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nibh, cursus id euismod non, scelerisque nec nibh. Nam semper, ligula a rhoncus fermentum, libero lacus vulputate felis, id auctor mauris urna quis diam.</p>
                                </div>
                                <div class="col-sm-5 mt50">
                                    <h2 class="lined-heading"><span>Overview</span></h2>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                                        <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                                        <li><a href="#extra" data-toggle="tab">Extra</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="overview">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
                                            <p><img src="images/tab/hotel-preview.jpg" alt="food" class="pull-right"> Donec pretium sem non tincidunt iaculis. Nunc at pharetra eros, a varius leo. Mauris id hendrerit justo. Mauris egestas magna vitae nisi ultricies semper. Nam vitae suscipit magna. Nam et felis nulla. Ut nec magna tortor. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. </p>
                                        </div>
                                        <div class="tab-pane fade" id="facilities">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
                                        <div class="tab-pane fade" id="extra">
                                            <?php $extras =  explode(";", $rooms_row->room_extra_services); ?>
                                            <ul class="list-inline">
                                                <?php foreach($extras as $extra) { ?>
                                                    <li><i class="fa fa-check-circle"></i> <?php echo $extra_list[$extra] ?></li>
                                                <?php } ?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Other Rooms -->
            <section class="rooms mt50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        </div>
                        <?php $this->load->view("home/room_list"); ?>
                    </div>
                </div>
            </section>


        </div>
    </section>

<?php } ?>
