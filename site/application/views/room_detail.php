<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("includes/include_style"); ?>
</head>
<body>

<!-- Header -->
<?php $this->load->view("includes/header"); ?>
<!-- #Header -->

<!-- Main Content -->
<?php $this->load->view("room_detail/room_detail_main_content"); ?>
<!-- Main Content -->

<?php $this->load->view("includes/include_script"); ?>
<?php $this->load->view("includes/footer"); ?>

</body>
</html>