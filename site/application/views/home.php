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

<!-- Slider -->
    <?php $this->load->view("home/slider"); ?>
<!-- #Slider -->

<!-- Rooms -->
    <?php $this->load->view("home/room_list"); ?>
<!-- #Rooms -->

<!-- USP's -->
    <?php $this->load->view("home/usp_list"); ?>
<!-- #USP's -->

<!-- parallax -->
    <?php $this->load->view("home/parallax"); ?>
<!-- #parallax -->

<!-- gallery -->
    <?php $this->load->view("home/gallery"); ?>
<!-- #gallery -->

<!-- testimonials -->
    <?php $this->load->view("home/testimonials"); ?>
<!-- #testimonials -->

    <?php $this->load->view("includes/include_script"); ?>
    <?php $this->load->view("includes/footer"); ?>

</body>
</html>