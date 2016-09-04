<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <!-- Date range -->
            <form action="<?php echo base_url("room/addNewPricing/$room_id"); ?>" method="post">

                <div class="form-group">
                    <label>Tarih Aralığı</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input name="pricing_date" type="text" class="form-control pull-right" id="pricing_date">
                    </div>
                    <label>Oda Fiyatı</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-money"></i>
                        </div>
                        <input name="price" type="text" class="form-control pull-right" id="price">
                    </div>
<!--                     /.input group-->
                </div>
                <button type="submit" class="btn btn-primary">Oluştur</button>
                <!-- /.form group -->
            </form>
        </div>
    </div>
   <div class="box box-primary mt10">
       <div class="box">
           <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                   <thead>
                   <th>ID</th>
                   <th>Tarih</th>
                   <th>Ücret</th>
                   <th class="col-md-2">İşlemler</th>
                   </thead>
                   <tbody>
                   <?php foreach($prices as $price) { ?>
                       <tr>
                           <td>#<?php echo $price->id; ?></td>
                           <td>#<?php echo $price->date; ?></td>
                           <td><?php echo $price->price;?></td>
                           <td>
                               <a href="<?php echo base_url("room/roomPricingDelete/$price->id"); ?>">
                                   <i class="fa fa-trash" style="font-size:16px;"></i>
                               </a>
                           </td>
                       </tr>
                   <?php } ?>
                   </tbody>
               </table>
           </div>
           <!-- /.box-body -->
       </div>

   </div>

</section>
<!-- /.content -->