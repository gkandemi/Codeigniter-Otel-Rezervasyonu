<!-- Filter -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-pills" id="filters">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <?php foreach ($room_categories as $room_category){ ?>
                    <li><a href="#" data-filter=".<?php echo get_class_name($room_category->title); ?>"><?php echo $room_category->title; ?> </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>