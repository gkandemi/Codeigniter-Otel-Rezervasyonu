<script src="<?php echo base_url("assets"); ?>/dist/js/third_party/bootstrap-toggle.min.js"></script>

<script>

    $(document).ready(function () {

        var base_url = $(".base_url").text();

        // Bootstrap Toggle init
        $('.toggle_check').bootstrapToggle();

        // isActive Change

        $('.toggle_check').change(function () {

            var isActive = $(this).prop('checked');
            var id       = $(this).attr("dataID");
            $.post(base_url + "roomcategory/isActiveSetter", {id: id, isActive: isActive}, function (response) {});

        })

    })

</script>