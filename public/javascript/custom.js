(function($) {
    "use strict";
    // Select donat
    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML === this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt === y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);


    //Update Header Style and Scroll to Top
    function headerStyle() {
        if ($(".main-header").length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $(".main-header");
            var sticky_header = $(".main-header .sticky-header");
            if (windowpos > 120) {
                siteHeader.addClass("fixed-header");
                sticky_header.addClass("animated slideInDown");
            } else {
                siteHeader.removeClass("fixed-header");
                sticky_header.removeClass("animated slideInDown");
            }
        }
    }

    headerStyle();

    //Submenu Dropdown Toggle
    if ($(".main-header li.dropdown ul").length) {
        $(".main-header .navigation li.dropdown > a").append(
            '<div class="dropdown-btn"><i class="icofont-thin-down"></i></div>'
        );
    }

    //Mobile Nav Hide Show
    if ($(".side-menu__block").length) {
        var mobileMenuContent = $(".main-header .nav-outer .main-menu").html();
        var mobileNavContainer = $(".mobile-nav__container");
        mobileNavContainer.append(mobileMenuContent);

        //Dropdown Button
        mobileNavContainer
            .find("li.dropdown .dropdown-btn")
            .on("click", function(e) {
                e.preventDefault();
                $(this).toggleClass("open");
                $(this).parent("a").parent("li").children("ul").slideToggle(500);
            });
        //Menu Toggle Btn
        $(".mobile-nav-toggler").on("click", function() {
            $(".side-menu__block").addClass("active");
        });

        $(".side-menu__block-overlay,.side-menu__toggler, .scrollToLink").on(
            "click",
            function(e) {
                $(".side-menu__block").removeClass("active");
                e.preventDefault();
            }
        );
    }
    //LightBox / Fancybox
    if ($(".lightbox-image").length) {
        $(".lightbox-image").fancybox({
            openEffect: "fade",
            closeEffect: "fade",
            helpers: {
                media: {}
            }
        });
    }

    //MixitUp Gallery Filters
    if ($(".filter-list").length) {
        $(".filter-list").mixItUp({});
    }

    function OnePageMenuScroll() {
        var windscroll = $(window).scrollTop();
        if (windscroll >= 117) {
            var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
            menuAnchor.each(function() {
                // grabing section id dynamically
                var sections = $(this).attr("href");
                $(sections).each(function() {
                    // checking is scroll bar are in section
                    if ($(this).offset().top <= windscroll + 100) {
                        // grabing the dynamic id of section
                        var Sectionid = $(sections).attr("id");
                        // removing current class from others
                        $(".one-page-scroll-menu").find("li").removeClass("current");
                        // adding current class to related navigation
                        $(".one-page-scroll-menu")
                            .find("a[href*=\\#" + Sectionid + "]")
                            .parent()
                            .addClass("current");
                    }
                });
            });
        } else {
            $(".one-page-scroll-menu li.current").removeClass("current");
            $(".one-page-scroll-menu li:first").addClass("current");
        }
    }

    /* ==========================================================================
	   When document is Scrollig, do
	   ========================================================================== */

    $(window).on("scroll", function() {
        headerStyle();
        OnePageMenuScroll();
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }
    });

    /* ==========================================================================
	   When document is Resized, do
	   ========================================================================== */

    $(window).on("resize", function() {});

    /* ==========================================================================
	   When document is loading, do
	   ========================================================================== */

})(window.jQuery);