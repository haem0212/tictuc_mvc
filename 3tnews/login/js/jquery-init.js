(function($) {
    "use strict";

    $(document).ready(function () {
        
        // Gallery post widget
        var widgetGalleryPost = $(".widget_gallery_post");
        widgetGalleryPost.owlCarousel({
            singleItem: true,
            navigation: true,
            pagination: false,
            navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"]
        });
        
        // Content carousel
        var contentCarousel = $(".content_carousel_sliders");
        contentCarousel.owlCarousel({
            items: 3,
            navigation: false,
            pagination: false
        });
        $(".ccs_prev").on("click", function(){contentCarousel.trigger("owl.prev");});
        $(".ccs_next").on("click", function(){contentCarousel.trigger("owl.next");});
        
        // Breaking news initializer
        $(".breaking_news .owl-carousel").owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigation: true,
            pagination: false,
            navigationText: ["&#xf0d9;", "&#xf0da;"]
        });
        
        // Slider articles
        $(".slider_articles").owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigation: true,
            pagination: false,
            navigationText: ["&#xf0d9;", "&#xf0da;"]
        });
        
        // Slider articles
        $(".main_slider").owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigation: true,
            pagination: false,
            navigationText: ["&#xf0d9;", "&#xf0da;"]
        });

        // Sticky sidebar
        $(".sidebar_area").theiaStickySidebar();

        // Tabs content
        $(".tab_group").tabs();

        // Accordions
        $(".accordion_group").accordion({
            heightStyle: "content",
            collapsible: true,
            icons: false
        });

        // Fitvids
        $("body").fitVids();

        // Main mobile navigation
        $(".open_top_menu").on("click", function () {
            $("nav.top_menu").toggle();
        });
        
        // Main mobile navigation
        $(".open_main_menu").on("click", function () {
            $("nav.main_menu").toggle();
        });

        // Lightbox image
        $(".magnificPopupImage").magnificPopup({
            type: "image"
        });

        // Lightbox gallery
        $(".magnificPopupGallery").each(function () {
            $(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        });

        // Lightbox popup iframe
        $(".magnificPopupIframe").magnificPopup({
            type: "iframe"
        });

    });
    
})(jQuery);