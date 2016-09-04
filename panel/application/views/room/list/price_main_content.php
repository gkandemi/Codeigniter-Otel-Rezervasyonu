<!-- Main content -->
<section class="content">
    <a class="btn btn-sm btn-primary mb10" href="<?php echo base_url("room") ?>">Oda Listesi</a>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <th>Tarih</th>
                            <th>Ücret</th>
                        </thead>
                        <tbody>
                        <?php for ($i=0;$i< $row_count; $i = $i +2 ){ ?>
                                <tr>
                                    <td><?php echo $prices[$i] ?></td>
                                    <td><?php echo $prices[$i+1] ?></td>
                                </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->