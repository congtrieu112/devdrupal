<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <title>Home1</title>
        <link href="/<?php print $directory; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/<?php print $directory; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="/<?php print $directory; ?>/css/nivo-slider.css" rel="stylesheet">
        <link href="/<?php print $directory; ?>/css/anythingslider.css" rel="stylesheet">
        <link href="/<?php print $directory; ?>/css/lightbox.css" rel="stylesheet"/>
        <link href="/<?php print $directory; ?>/css/style.css" rel="stylesheet">
        <?php print $head; ?>
         
    </head>
    <body>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <script src="/<?php print $directory; ?>/js/jquery.js"></script>
        <script src="/<?php print $directory; ?>/bootstrap/js/bootstrap.min.js"></script> 
        <script src="/<?php print $directory; ?>/js/jquery.nivo.slider.pack.js"></script> 
        <script src="/<?php print $directory; ?>/js/jquery.arctext.js"></script> 
        <script src="/<?php print $directory; ?>/js/jquery.anythingslider.min.js"></script>
        <script src="/<?php print $directory; ?>/js/lightbox.js"></script> 
        <script src="/<?php print $directory; ?>/js/selectnav.min.js"></script> 
        <script type="text/javascript">
            $(document).ready(function () {
                $(".curved").arctext({radius: 250, rotate: true, dir: 1});
                $("#slider1Nivo").nivoSlider({effect: "random", pauseTime: 8000, captionEasing: "linear", slices: 15, boxCols: 8, boxRows: 4, animSpeed: 500, startSlide: 0, directionNav: true, controlNav: true, controlNavThumbs: false, pauseOnHover: true, manualAdvance: false, prevText: "Prev", nextText: "Next", randomStart: false, beforeChange: function () {
                    }, afterChange: function () {
                    }, slideshowEnd: function () {
                    }, lastSlide: function () {
                    }, afterLoad: function () {
                    }});
                $("#anythingSlider2").anythingSlider({autoPlay: false, expand: true, pauseOnHover: true, hashTags: false, buildNavigation: false, buildStartStop: false, delay: 8000});
                $(".box9").hide();
                $("#bkTable").click(function () {
                    $(".box9").fadeToggle();
                    return false
                });
                $(".ipad-box9").hide();
                $(".topBar .bookTable").click(function () {
                    $(".ipad-box9").slideToggle();
                    return false
                });
                $("form#bkForm input, textarea").blur(function () {
                    var c = $(this);
                    var b = false;
                    if (c.val() == "") {
                        b = true
                    }
                    if (c.data("type") == "email") {
                        var d = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
                        var a = c.val().replace("#", "@");
                        if (!d.test(a)) {
                            b = true
                        }
                    }
                    b ? c.addClass("error") : c.removeClass("error");
                    return true
                });
                $("form#bkForm").submit(function () {
                    $(this).find("input, textarea").trigger("blur");
                    var a = $(this).find(".error").length;
                    return a == 0
                });
                $("ul.mainMenu li.subMenu ul").hide();
                $("ul.mainMenu li.subMenu > a").click(function () {
                    $("ul.mainMenu li.subMenu ul").hide();
                    $(this).next("ul").toggle();
                    return false
                });
                $("body").click(function () {
                    $("ul.mainMenu li.subMenu ul").hide()
                });
                $("a[data-rel]").each(function () {
                    $(this).attr("rel", $(this).data("rel"))
                });
                selectnav("nav")
            });
        </script> 
    </body>
</html>