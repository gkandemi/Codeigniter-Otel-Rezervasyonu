<?php

$parent     = $this->session->userdata("parent");
$activeItem = $this->session->userdata("activeItem");

?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url("assets");?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>


            <li class="treeview <?php echo ($parent == "room_folder") ? "active" : ""; ?>">
                <a href="#">
                    <i class="fa fa-bed"></i>
                    <span>Oda İşlemleri</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" id="room_folder">
                    <li class="<?php echo ($activeItem == "room_category") ? "active" : ""; ?>" id="room_category">
                        <a href="<?php echo base_url("roomcategory");?>"><i class="fa fa-circle-o"></i> Kategoriler</a>
                    </li>
                    <li class="<?php echo ($activeItem == "room") ? "active" : ""; ?>" id="room">
                        <a href="<?php echo base_url("room");?>"><i class="fa fa-circle-o"></i> Odalar</a>
                    </li>
                    <li class="<?php echo ($activeItem == "room_properties") ? "active" : ""; ?>" id="room_properties">
                        <a href="<?php echo base_url("roomproperties");?>"><i class="fa fa-circle-o"></i> Özellikler</a>
                    </li>
                    <li class="<?php echo ($activeItem == "room_extra_services") ? "active" : ""; ?>" id="room_extra_services">
                        <a href="<?php echo base_url("roomextraservices");?>"><i class="fa fa-circle-o"></i> Ekstra Servisler</a>
                    </li>
                </ul>
            </li>

<!--            <li class="treeview --><?php //echo ($parent == "reservation_folder") ? "active" : ""; ?><!--">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-bed"></i>-->
<!--                    <span>Oda İşlemleri</span>-->
<!--                    <span class="pull-right-container">-->
<!--                      <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </span>-->
<!--                </a>-->
<!---->
<!--                <ul class="treeview-menu" id="reservation_folder">-->
<!--                    <li class="--><?php //echo ($activeItem == "reservations") ? "active" : ""; ?><!--" id="reservations">-->
<!--                        <a href="--><?php //echo base_url("roomcategory");?><!--"><i class="fa fa-circle-o"></i> Kategoriler</a>-->
<!--                    </li>-->
<!--                    <li class="--><?php //echo ($activeItem == "bank") ? "active" : ""; ?><!--" id="bank">-->
<!--                        <a href="--><?php //echo base_url("room");?><!--"><i class="fa fa-circle-o"></i> Odalar</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->


        </ul>

    </section>
    <!-- /.sidebar -->
</aside>