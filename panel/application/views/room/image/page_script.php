<script src="<?php echo base_url("assets"); ?>/dist/js/third_party/dropzone.js"></script>
<script src="<?php echo base_url("assets"); ?>/dist/js/third_party/bootstrap-toggle.min.js"></script>

<script>

    $(document).ready(function () {

        $(".dropzone").dropzone();


        // Bootstrap Toggle init
        $('.toggle_check').bootstrapToggle();

        // isActive Change

        $('.toggle_check').change(function () {

            var isActive = $(this).prop('checked');
            var base_url = $(".base_url").text();
            var id       = $(this).attr("dataID");
            $.post(base_url + "room/isActiveSetterForImage", {id: id, isActive: isActive}, function (response) {});

        })


    })

</script>



<script>

