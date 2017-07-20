$(document).ready(function() {

    /* carousel */
    $(".testimonials__item").click(function() {
        $(".testimonials__item").removeClass("active")
        $(this).addClass("active")
    })
    $(".prices__diagram-item").hover(function() {
        $(this).siblings().removeClass("active")
        $(this).addClass("active")
    }, function() {
        $("prices__map-item").removeClass("active")
    })
    $(".menu__item").click(function() {
        $("#jsMenu").toggleClass("active")
    })
    $("#jsMenuBtn").click(function() {
        $("#jsMenu").toggleClass("active")
    })
     $(".jsComparison").click(function() {
        var e = $(this),
            t = $(".jsComparison"),
            i = $(".comparison__text");
        e.hasClass("active") ? (t.removeClass("active"), i.stop().slideUp(300)) : (t.removeClass("active"), e.toggleClass("active"), i.stop().slideUp(300), e.next(".comparison__text").stop().slideToggle(300))
    })
    $(".studentlife__item").click(function() {
        $(this).toggleClass("active")
    })
    $("#contacts__select").on("change", function() {
        $this = $(this);
        var e = $this.val(),
            t = $(".contacts__tabs-item");
        t.each(function() {
            $(this).data("city") === e && (console.log($(this).data("city")), $(this).addClass("active").siblings().removeClass("active"))
        })
    })

    /* placeholder */
    $("input, textarea").placeholder()
    $.mask.definitions["~"] = "[+-]"
    $.mask.definitions['9'] = ''
    $.mask.definitions['d'] = '[0-9]'
    $(".phone").mask("+994(dd) ddd-dd-dd")

    /* prettyphoto */
    $(".prettyPhoto").prettyPhoto({
        hideflash: !0
    })

    /* lazyload */
    $(".lazy").lazyload({
        threshold: 500
    })

    /* modal trigger */
    $(".jsModalTrigger").popup()
    $(".universities__btn").magnificPopup({
        type: "inline",
        fixedContentPos: !1,
        fixedBgPos: !1,
        overflowY: "visible",
        closeBtnInside: !0,
        preloader: !1,
        midClick: !0,
        removalDelay: 300,
        mainClass: "my-mfp-zoom-in"
    })
    $(".popup-youtube").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    })

    /* scroll */
    $(".menu__item").mPageScroll2id({
        scrollSpeed: 500,
        offset: 50,
        scrollEasing: "linear",
        scrollingEasing: "linear",
        highlightClass: "active"
    })

    /* slicks */
    $(".jsSlider-1").slick({
        arrows: !1,
        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /></button>',
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !0,
        dotsClass: "slick-dots",
        easing: "linear",
        fade: !1,
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        variableWidth: !1
    })
    $(".jsSlider-2").slick({
        arrows: !0,
        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /><button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /><button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /></button>',
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !0,
        dotsClass: "slick-dots",
        easing: "linear",
        fade: !1,
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        variableWidth: !1
    })
    $(".jsSlider-3").slick({
        arrows: !0,
        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /><button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /><button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /></button>',
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !0,
        dotsClass: "slick-dots",
        easing: "linear",
        fade: !1,
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        variableWidth: !1
    })
    $(".jsSlider-4").slick({
        arrows: !1,
        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /><button type="button" data-role="none" class="slick-prev" aria-label="previous"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /><button type="button" data-role="none" class="slick-next" aria-label="next"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /></button>',
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !1,
        dotsClass: "slick-dots",
        easing: "linear",
        fade: !1,
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        variableWidth: !1
    })
    $("#revSlide1_prev").click(function() {
        $(".jsSlider-4").slick("slickPrev")
    })
    $("#revSlide1_next").click(function() {
        $(".jsSlider-4").slick("slickNext")
    })
    $(".jsSlider-5").slick({
        arrows: 0,
        autoplay: 0,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !0,
        dotsClass: "slick-dots",
        easing: "linear",
        fade: !1,
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        variableWidth: !1
    })
    $("#videoSlide1_prev").click(function() {
        $(".jsSlider-5").slick("slickPrev")
    })
    $("#videoSlide1_next").click(function() {
        $(".jsSlider-5").slick("slickNext")
    })
    $("#jsSlider-6").slick({
        arrows: !1,
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !1,
        dotsClass: "slick-dots",
        easing: "linear",
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 2,
        speed: 500,
        variableWidth: !1
    })
    $("#priceSlide1_prev").click(function() {
        $("#jsSlider-6").slick("slickPrev")
    })
    $("#priceSlide1_next").click(function() {
        $("#jsSlider-6").slick("slickNext")
    })
    $("#jsSlider-7").slick({
        arrows: !1,
        autoplay: !1,
        autoplaySpeed: 3e3,
        centerPadding: "50px",
        cssEase: "ease",
        dots: !1,
        dotsClass: "slick-dots",
        easing: "linear",
        focusOnSelect: !1,
        infinite: !0,
        pauseOnHover: !0,
        slide: "",
        slidesToShow: 2,
        speed: 500,
        variableWidth: !1
    })
    $("#priceSlide2_prev").click(function() {
        $("#jsSlider-7").slick("slickPrev")
    })
    $("#priceSlide2_next").click(function() {
        $("#jsSlider-7").slick("slickNext")
    })

    /* tabs */
    $("#tabContainer1").easytabs({
        updateHash: !1
    })
    $("#tabContainer2").easytabs({
        updateHash: !1
    })
    $("#tabContainer3").easytabs({
        updateHash: !1
    })
    $("#tabContainer4").easytabs({
        updateHash: !1
    })
    $(".price__nav-item > a").click(function() {
        var e = $(this).data("tab");
        $(this).parent().addClass("active").siblings().removeClass("active")
        $(".price__tab").each(function() {
            $(this).attr("id") === e && $(this).addClass("active").siblings().removeClass("active")
        })
    })

    /* numbers */
    $("#js-numbers").waypoint(function(e) {
        "down" === e && ($("#jsNumber1").animateNumber({
            number: 8,
            easing: "ease"
        }, 2e3), $("#jsNumber2").animateNumber({
            number: 25,
            easing: "ease"
        }, 2e3), $("#jsNumber3").animateNumber({
            number: 5,
            easing: "ease"
        }, 2e3), $("#jsNumber4").animateNumber({
            number: 5,
            easing: "ease"
        }, 2e3), $("#jsNumber5").animateNumber({
            number: 17,
            easing: "ease"
        }, 2e3))
    }, {
        offset: "90%",
        triggerOnce: !0
    }), $(".js-products__item").waypoint(function(e) {
        "down" === e && $(this).removeClass("fadeOut").addClass("fadeIn"), "up" === e && $(this).removeClass("fadeIn").addClass("fadeOut")
    }, {
        offset: "70%"
    })
})
function checkEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

function checkForm(f){
    subForm = $('#'+f);

    var name = subForm.find('input#Name');
    var phone = subForm.find('input#Phone');
    var email = subForm.find('input#Email');

    if(!name.val() || !phone.val() || !checkEmail(email.val())){
        alert('Вы должны правильно заполнить все поля формы!');
    } else {
        $('button.btn').addClass('disabled').attr('disabled', true).text('Отправка...').css({'cursor' : 'default', 'background' : '#ccc'});
        subForm.submit();
    }
}