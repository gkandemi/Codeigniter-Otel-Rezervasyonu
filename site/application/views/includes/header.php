<!-- Top header -->
<div id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="th-text pull-left">
                    <div class="th-item"> <a href="#"><i class="fa fa-phone"></i> <?php echo $contact->phone; ?></a> </div>
                    <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i> 	<?php echo $contact->email; ?> </a></div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="th-text pull-right">
                    <div class="th-item">
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle js-activated" type="button" data-toggle="dropdown"> English <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li> <a href="#">ENGLISH</a> </li>
                                <li> <a href="#">FRANCE</a> </li>
                                <li> <a href="#">GERMAN</a> </li>
                                <li> <a href="#">SPANISH</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="th-item">
                        <div class="social-icons">
                            <?php if($contact->facebook){ ?>
                                <a target="_blank" href="<?php echo $contact->facebook; ?>"><i class="fa fa-facebook"></i></a>
                            <?php } if($contact->twitter) { ?>
                                <a target="_blank" href="<?php echo $contact->twitter; ?>"><i class="fa fa-twitter"></i></a>
                            <?php } if($contact->youtube) { ?>
                            <a target="_blank" href="<?php echo $contact->youtube; ?>"><i class="fa fa-youtube-play"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header>
    <!-- Navigation -->
    <div class="navbar yamm navbar-default" id="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.html" class="navbar-brand">
                    <!-- Logo -->
                    <div id="logo"> <img id="default-logo" src="<?php echo base_url("assets");?>/images/logo.png" alt="Starhotel" style="height:44px;"> <img id="retina-logo" src="<?php echo base_url("assets");?>/images/logo-retina.png" alt="Starhotel" style="height:44px;"> </div>
                </a> </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active"> <a href="<?php echo base_url(); ?>">Anasayfa</a>
                    </li>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Odalar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url("room/room_list"); ?>">Oda Listesi</a></li>
                            <li><a href="room-detail.html">Room Detail</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Gallery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.html">Image Gallery</a></li>
                            <li><a href="gallery.html">Video Gallery</a></li>
                        </ul>
                    </li>

                    <li><a href="contact-02.html">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>
</header>
