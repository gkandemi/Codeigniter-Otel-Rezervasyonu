<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url("roomcategory/edit/$row->id");?>">
                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kategori Adı</label>
                            <input type="text" class="form-control" name="title" placeholder="Kategori adını giriniz.." value="<?php echo $row->title; ?>">                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="clearfix"></div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
</section>
<!-- /.content -->