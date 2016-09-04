<?php if(!empty($rooms)) { ?>
    <!-- Rooms -->
    <section class="rooms mt50">
        <div class="container">
            <div class="col-sm-12">
                <h2 class="lined-heading"><span>Oda Listesi</span></h2>
            </div>

            <div class="row room-list fadeIn appear">
                <!-- Room -->
                <?php foreach($rooms as $room) { ?>

                    <div class="col-sm-4 mb10">
                        <div class="room-thumb">

                            <?php

                                if(key_exists($room->id, $cover_image_list)){

                                    $image = base_url("panel/uploads/"). "/" .$cover_image_list[$room->id];

                                    if(!file_exists(FCPATH . "/panel/uploads/" . $cover_image_list[$room->id])){
                                        $image = base_url("assets") ."/images/rooms/room1.jpg";
                                    }

                                }else{
                                    $image = base_url("assets") ."/images/rooms/room1.jpg";
                                }
                            ?>

                            <img
                                src="<?php echo $image; ?>"
                                alt="<?php echo $room->title; ?>"
                                class="img-responsive" />

                            <div class="mask">
                                <div class="main">
                                    <h5><?php echo $room->title; ?></h5>
                                    <div class="price">
                                        <?php $price = get_prices(array("room_id"=> $room->id,"date" => date(date("Y-m-d"))));
                                        if($price == "null"){
                                        echo $room->default_price;
                                        }else{
                                        echo $price;
                                        } ?>
                                        <span> gecelik</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div style="height: 100px;">

                                        <?php

                                            $strLen = strlen($room->detail);

                                            echo ($strLen > 254) ? mb_substr($room->detail, 0,254) . "..." : $room->detail;
                                        ?>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <?php $properties =  explode(";", $room->room_properties); ?>
                                            <ul class="list-inline">
                                                <?php foreach($properties as $property) { ?>
                                                    <li><i class="fa fa-check-circle"></i> <?php echo $property_list[$property] ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>

                                    </div>
                                    <a href="<?php echo base_url("room/room_detail/$room->id"); ?>" class="btn btn-primary btn-block">Görüntüle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php } ?>
