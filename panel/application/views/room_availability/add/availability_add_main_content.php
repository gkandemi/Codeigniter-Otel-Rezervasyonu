<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <!-- Date range -->
            <form action="<?php echo base_url("room/addNewAvailability/$room_id"); ?>" method="post">

                <div class="form-group">
                    <label>Tarih Aralığı</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input name="availability_date" type="text" class="form-control pull-right" id="availability_date">
                    </div>
                    <!-- /.input group -->
                </div>
                <button type="submit" class="btn btn-primary">Oluştur</button>
                <!-- /.form group -->
            </form>
        </div>
    </div>


   <div class="box box-primary mt10">

       <ul class="availability_table">
           <?php foreach($availabilities as $availability){ ?>
               <?php
                    $date  = new DateTime($availability->daily_date);
                    $color = ($availability->status) ? "green" : "red";
               ?>


               <li class="bg-<?php echo $color; ?>"><?php echo $date->format("d") . "<br>" . get_month_from_eng($date->format("M")) . "<br>" . get_day_from_eng($date->format("D")) ?> </li>

            <?php } ?>
       </ul>



   </div>

</section>
<!-- /.content -->