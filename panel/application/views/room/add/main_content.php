<!-- Git için Test -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url("room/add");?>">

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Oda Numarası</label>
                            <input type="text" class="form-control" name="room_code">
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Başlık</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="box-body col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Açıklama</label>
                                <textarea id="detail" name="detail" rows="10" cols="80"></textarea>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Oda Boyutu</label>
                            <input type="text" class="form-control" name="size">
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fiyatı(Gecelik)</label>
                            <input type="text" class="form-control" name="default_price">
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label>Kategorisi</label>
                            <select class="form-control" name="room_type_id">
                                <?php foreach (get_room_category(array("isActive" => 1)) as $category){ ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label>Kapasite</label>
                            <select class="form-control" name="room_capacity">

                                <?php for($i=1;$i<=10;$i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo "$i Kişilik";?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label>Özellikler</label>
                            <select name="room_properties[]" class="form-control select2" multiple="multiple" data-placeholder="Özellik Seçiniz" style="width: 100%;">
                                <?php foreach (get_room_properties(array("isActive" => 1)) as $property){ ?>
                                    <option value="<?php echo $property->id; ?>"><?php echo $property->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label>Ekstra Servisler</label>
                            <select name="room_extra_services[]" class="form-control select2" multiple="multiple" data-placeholder="Ekstra Servis Seçiniz" style="width: 100%;">
                                <?php foreach (get_room_extra_services(array("isActive" => 1)) as $row){ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="clearfix"></div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
</section>
<!-- /.content -->