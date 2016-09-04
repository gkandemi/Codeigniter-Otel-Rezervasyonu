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

    <?php $this->load->view("room_search_list/room_search_list_breadcrumb"); ?>

<!-- Rooms -->
    <?php $this->load->view("room_search_list/room_search_content"); ?>
<!-- #Rooms -->

    <?php $this->load->view("includes/include_script"); ?>
    <?php $this->load->view("room_search_list/page_script"); ?>
    <?php $this->load->view("includes/footer"); ?>

</body>
</html>