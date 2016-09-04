    <!-- Rooms -->
    <section class="rooms mt50">
        <div class="container">

            <div class="col-sm-6">

                <form class="reservation-horizontal clearfix" role="form" method="post" action="<?php echo base_url("room/check_availability"); ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="checkin">Başlangıç</label>
                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                <i class="fa fa-calendar infield"></i>
                                <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="checkout">Bitiş</label>
                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                <i class="fa fa-calendar infield"></i>
                                <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" style="margin-top:22px;" class="btn btn-primary btn-block">Sorgula</button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-sm-12">
                <h2 class="lined-heading"><span>Oda Listesi</span></h2>
            </div>

                <div class="col-md-12">

                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Önizleme</th>
                            <th>Oda</th>
                            <th>Özellikleri</th>
                            <th>Fiyatı</th>
                            <th>Top. Fiyat</th>
                            <th class="text-center">İşlem</th>
                        </thead>

                        <tbody>
                        <form class="reservation_form" action="<?php echo base_url("room/add_to_cart"); ?>" method="post">
                           <?php foreach($rooms as $room) {

                                   $image = base_url("panel/uploads/"). "/" . $room["img_id"];
//                                   if(!file_exists(FCPATH . "/panel/uploads/" . $image)){
//                                       $image = base_url("assets") ."/images/rooms/room1.jpg";
//                                   }
                               ?>

                                <tr>
                                    <td>
                                        <img
                                            src="<?php echo $image; ?>"
                                            alt="<?php echo $room["title"]; ?>"
                                            class="img-responsive" style="width:50px;"
                                        />
                                    </td>
                                    <td><?php echo $room["title"]; ?></td>
                                    <td>
                                        <ul class="list-inline">
                                            <?php $properties = explode(";" ,$room["room_properties"]); ?>
                                            <?php foreach($properties as $property) { ?>
                                                <li><i class="fa fa-check-circle"></i> <?php echo $property_list[$property] ?></li>
                                            <?php } ?>
                                        </ul>
                                    <td>
                                        <?php foreach($room["availability"] as $date => $price){ ?>

                                            <ul class="list-unstyled">

                                                <li style="<?php echo ($price == "Dolu") ? "color:red" : "color:green" ?>"> <?php echo get_month($date) . "   <i class='fa fa-arrow-right'></i>   $price"; ?></li>
                                            </ul>

                                        <?php } ?>
                                    </td>
                                    <td class="total_price_col" style="vertical-align: middle; color: black; font-size: 18px; font-weight: bold;">

                                        <?php

                                            if(!in_array("Dolu", $room["availability"])) {
                                                echo number_format($room["total_price"],2,".",",");

                                            }

                                        ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php if(!in_array("Dolu", $room["availability"])){ ?>
                                            <input type="checkbox" class="form-control checkbox-inline book_check" name="book[]">
                                        <?php } ?>
                                    </td>
                                </tr>
                        <?php } ?>
                        </form>
                        </tbody>

                    </table>
                        <button class="disabled btn btn-danger pull-right reservation_submit_btn">Rezervasyon (<span class="total_price">0.00</span>)</button>
                </div>

        </div>
    </section>
