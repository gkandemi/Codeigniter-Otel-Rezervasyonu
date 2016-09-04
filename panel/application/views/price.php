<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("room_pricing/add/page_style"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <?php $this->load->view("includes/header"); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php $this->load->view("includes/left_side_bar"); ?>


    <div class="content-wrapper">
        <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <!-- Date range -->
                    <form action="<?php echo base_url("room/getPrices/$room_id"); ?>" method="post">

                        <div class="form-group">
                            <label>Tarih Aralığı</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="pricing_date" type="text" class="form-control pull-right" id="pricing_date">
                            </div>
                            <!--                     /.input group-->
                        </div>
                        <button type="submit" class="btn btn-primary">Hesapla</button>
                        <!-- /.form group -->
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->

        <!-- /.content-wrapper -->
    </div>

    <?php $this->load->view("includes/right_side_bar"); ?>

</div>

<?php $this->load->view("includes/footer"); ?>
<?php $this->load->view("room_pricing/add/page_script"); ?>

</body>
</html>