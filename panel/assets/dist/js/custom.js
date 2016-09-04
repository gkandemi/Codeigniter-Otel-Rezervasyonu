$(document).ready(function () {


    var base_url = $(".base_url").text();


    $(".sortableList").sortable();

    $(".sortableList").on("sortupdate",function(event, ui){

        var data    = $(this).sortable("serialize");
        var postUrl = $(this).attr("postUrl");


        $.post(base_url + postUrl,{data:data},function(response){})

    })

    $(".treeview-menu > li").click(function(event){

        var parent     = $(this).parent().attr("id");
        var activeItem = $(this).attr("id");
        var url = $(this).find("a").attr("href");
        $.post(base_url + "dashboard/setActiveMenu", {parent:parent, activeItem: activeItem}, function(response){});

        event.preventDefault();

        setTimeout(function(){
            window.location.href = url;
        },100)

    })

    // Confirm
    $(".removeBtn").click(function () {

        var dataURL = $(this).attr("dataURL");
        var  remove = bootbox.confirm("Silmek istiyor musunuz ?", function(result) {
            if (result == true) {
                window.location.href = dataURL;
            }
        });
    });

})