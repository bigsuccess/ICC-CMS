var Script = function() {
//    sidebar dropdown menu

    $('#sidebar .sub-menu > a').click(function() {
        var last = $('.sub-menu.open', $('#sidebar'));
        last.removeClass("open");
        $('.arrow', last).removeClass("open");
        $('.sub', last).slideUp(200);
        var sub = $(this).next();
        if (sub.is(":visible")) {
            $('.arrow', $(this)).removeClass("open");
            $(this).parent().removeClass("open");
            sub.slideUp(200);
        } else {
            $('.arrow', $(this)).addClass("open");
            $(this).parent().addClass("open");
            sub.slideDown(200);
        }
        var o = ($(this).offset());
        diff = 200 - o.top;
        if (diff > 0)
            $("#sidebar").scrollTo("-=" + Math.abs(diff), 500);
        else
            $("#sidebar").scrollTo("+=" + Math.abs(diff), 500);
    });

//    sidebar toggle
    $(function() {
        function responsiveView() {
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#container').addClass('sidebar-close');
                $('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                $('#container').removeClass('sidebar-close');
                $('#sidebar > ul').show();
            }
        }
        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);
    });

    $('.icon-reorder').click(function() {
        if ($('#sidebar > ul').is(":visible") === true) {
            $('#main-content').css({
                'margin-left': '0px'
            });
            $('#sidebar').css({
                'margin-left': '-180px'
            });
            $('#sidebar > ul').hide();
            $("#container").addClass("sidebar-closed");
        } else {
            $('#main-content').css({
                'margin-left': '180px'
            });
            $('#sidebar > ul').show();
            $('#sidebar').css({
                'margin-left': '0'
            });
            $("#container").removeClass("sidebar-closed");
        }
    });

// custom scrollbar
    $("#sidebar").niceScroll({styler: "fb", cursorcolor: "#e8403f", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', cursorborder: ''});

    $("html").niceScroll({styler: "fb", cursorcolor: "#e8403f", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', cursorborder: '', zindex: '1000'});

// widget tools

    $('.widget .tools .icon-chevron-down').click(function() {
        var el = $(this).parents(".widget").children(".widget-body");
        if ($(this).hasClass("icon-chevron-down")) {
            $(this).removeClass("icon-chevron-down").addClass("icon-chevron-up");
            el.slideUp(200);
        } else {
            $(this).removeClass("icon-chevron-up").addClass("icon-chevron-down");
            el.slideDown(200);
        }
    });

    $('.widget .tools .icon-remove').click(function() {
        $(this).parents(".widget").parent().remove();
    });

//    tool tips

    $('.tooltips').tooltip();

//    popovers

    $('.popovers').popover();



// custom bar chart
    if ($(".custom-bar-chart")) {
        $(".bar").each(function() {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }


//custom select box
    $(function() {
        $("#selectall").click(function() {
            $('.case').attr('checked', this.checked);
        });
        $(".case").click(function() {
            if ($(".case").length == $(".case:checked").length) {
                $("#selectall").attr("checked", "checked");
            } else {
                $("#selectall").removeAttr("checked");
            }
        });
    });

//Check delete
    $(".confirmDelete").on('click', function() {
        var form = $(this).closest('form');
        title = 'Xác nhận xóa';
        bootbox.confirm('Bạn có muốn xóa không?', function(result) {
            if (result === true) {
                form.submit();
            }
        });
    });
}();


//datepicker
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
})

$(function() {
    $('#save').click(function() {
        //var url = $(this).attr('href');
        oSortable = $('.sortable').nestedSortable('toArray');
        console.log(oSortable[1]);
//        $.each(oSortable.Object, function(i) {
//            $.each(oSortable.Object[i], function(key, val) {
//                console.log(key + val);
//            })
//        });
        $('#orderResult').slideUp(function() {
            $.post('sort', {sortable: oSortable}, function(data) {

                //$('#orderResult').html(data);
                $('#orderResult').slideDown();
            });
        });
    });
});






