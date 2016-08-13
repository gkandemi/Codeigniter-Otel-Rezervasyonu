
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url("room/upload_image");?>" class="dropzone">
            </form>
        </div>
    </div>

    <br>

    <div class="row">

        <div class="col-md-12">

            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <th>Önizleme</th>
                            <th>isActive</th>
                            <th>isCover</th>
                            <th class="col-md-2">İşlemler</th>
                        </thead>
                        <tbody class="sortableList" postUrl="room/roomImageRankUpdate">
                        <?php foreach($rows as $row) { ?>
                            <tr id="sortId-<?php echo $row->id;?>">
                                <td>
                                    <img
                                        width="80"
                                        src="<?php echo base_url("uploads") . "/" . $row->img_id; ?>"
                                        alt="<?php echo $row->img_id; ?>"
                                        class="img-responsive"
                                    />
                                </td>
                                <td>
                                    <input class = "toggle_check"
                                           data-onstyle="success"
                                           data-size = "mini"
                                           data-on="Aktif"
                                           data-off="Pasif"
                                           data-offstyle="danger"
                                           type="checkbox"
                                           data-toggle="toggle"
                                           dataID="<?php echo $row->id; ?>"
                                        <?php echo ($row->isActive == 1) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td>
                                    <input class = "toggle_check"
                                           data-onstyle="success"
                                           data-size = "mini"
                                           data-on="Aktif"
                                           data-off="Pasif"
                                           data-offstyle="danger"
                                           type="checkbox"
                                           data-toggle="toggle"
                                           dataID="<?php echo $row->id; ?>"
                                        <?php echo ($row->isCover == 1) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td>
                                    <a href="<?php echo base_url("room/deleteImage/$row->id"); ?>">
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
            <!-- /.box -->


    </div>


</section>
<!-- /.content -->