function FUppercases(text) {
    return text.toLowerCase().split(' ').map(word => word.charAt(0).toUpperCase() + word.substring(1)).join(' ');
}

jQuery(function ($) {
    //time thing at header
    $("header .time").ready(function () {
        var today = new Date(Date.now()).toLocaleDateString('default', { day: 'numeric', weekday: 'long', month: 'long', year: 'numeric' });

        $(".time").text(FUppercases(today));
    })
    //drop menue code
    let selector = ".menu-item:has(.sub-menu)";
    if (window.matchMedia("(hover: none)").matches) {
        $(selector).append("<button name='expand'></button>");
    }
    function submenuopen(that) {
        let it = $(that)
        if (!$(that).attr("sub-halt")) {
            $(that).attr("sub-halt", "true");
            $(that).children(".sub-menu").slideDown()
        }
    }
    function submenuclose(that) {
        let it = $(that)
        if ($(that).attr("sub-halt")) {
            $(that).children(".sub-menu").slideUp({
                complete: function () {
                    it.removeAttr("sub-halt")
                }
            })
        }
    }
    $(selector).on("mouseenter",
        function () {
            submenuopen(this);
        }
    )
    $(selector).on("mouseleave",
        function () {
            submenuclose(this)
        }
    )
    $("button[name='expand']").on("click", function () {
        let attr = $(this).parent().attr("sub-halt")
        if (typeof attr == "undefined") {
            submenuopen($(this).parent());

        } else {
            submenuclose($(this).parent());
        }
    })
    $(":has(.menu-item:has(.sub-menu))").on("scroll", function () {
        for (i = 0; i < $(".sub-menu").length; i++) {
            let it = $(".sub-menu").eq(i);
            if (it.parent().position().left + it.width() >= $("header").width()) {

                it.css("left", $("header").width() - it.width()-5);

            } else { it.css("left", it.parent().position().left) }
        }
    })
    //drop comment code
    $(".reply_cover").on("click",
        function () {
            $(this).parent().children("div").children(".sub_comm").slideToggle();
            let oldT = $(this).text();
            let newT = $(this).attr("switchtext");
            $(this).attr("switchtext", oldT);
            $(this).text(newT.replace("^", "'"));

        }
    )
    //Home button for 404.php
    $(".GO_HOME").on("click", function () {
        let link = $("button").attr("href");
        console.log("fuck" + link);
        window.location.href = link;
    })
});
