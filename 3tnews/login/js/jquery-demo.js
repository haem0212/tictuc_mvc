(function ($) {
    "use strict";

    jQuery(document).ready(function () {
        "use strict";

        // Show hide demo
        jQuery(".demo_settings_init").on("click", function () {
            jQuery(".demo_settings").toggleClass("show");
        });

        // Layout style
        jQuery("ul.layout_wide_boxed li").click(function () {
            jQuery(this).siblings("li").removeClass("active");
            jQuery(this).addClass("active");
        });
        jQuery("ul.layout_wide_boxed li.style_1").click(function () {
            jQuery("#wrapper").removeClass("wide");
            jQuery("#wrapper").addClass("boxed");
        });
        jQuery("ul.layout_wide_boxed li.style_2").click(function () {
            jQuery("#wrapper").removeClass("boxed");
            jQuery("#wrapper").addClass("wide");
        });
        
        // Menu option
        jQuery("ul.fixed_menu_change li").click(function(){
            jQuery(this).siblings("li").removeClass("active");
            jQuery(this).addClass("active");
        });
        jQuery("ul.fixed_menu_change li.light").click(function(){
            jQuery(".main_menu").removeClass("dark");
            jQuery(".main_menu").addClass("light");
        });
        jQuery("ul.fixed_menu_change li.dark").click(function(){
            jQuery(".main_menu").removeClass("light");
            jQuery(".main_menu").addClass("dark");
        });
        
        // Pattern image change
        jQuery("ul.background_image_pattern li").click(function(){
            jQuery(this).siblings("li").removeClass("active");
            jQuery(this).addClass("active");
        });
        jQuery("ul.background_image_pattern li.patt1").click(function(){
            jQuery("body").removeClass();
        });
        jQuery("ul.background_image_pattern li.patt2").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt2");
        });
        jQuery("ul.background_image_pattern li.patt3").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt3");
        });
        jQuery("ul.background_image_pattern li.patt4").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt4");
        });
        jQuery("ul.background_image_pattern li.patt5").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt5");
        });
        jQuery("ul.background_image_pattern li.patt6").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt6");
        });
        jQuery("ul.background_image_pattern li.patt7").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt7");
        });
        jQuery("ul.background_image_pattern li.patt8").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt8");
        });
        jQuery("ul.background_image_pattern li.patt9").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt9");
        });
        jQuery("ul.background_image_pattern li.patt10").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("patt10");
        });
        
        // Bg image change
        jQuery("ul.background_image_bg li").click(function(){
            jQuery(this).siblings("li").removeClass("active");
            jQuery(this).addClass("active");
        });
        jQuery("ul.background_image_bg li.matt1").click(function(){
            jQuery("body").removeClass();
        });
        jQuery("ul.background_image_bg li.matt2").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt2");
        });
        jQuery("ul.background_image_bg li.matt3").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt3");
        });
        jQuery("ul.background_image_bg li.matt4").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt4");
        });
        jQuery("ul.background_image_bg li.matt5").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt5");
        });
        jQuery("ul.background_image_bg li.matt6").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt6");
        });
        jQuery("ul.background_image_bg li.matt7").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt7");
        });
        jQuery("ul.background_image_bg li.matt8").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt8");
        });
        jQuery("ul.background_image_bg li.matt9").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt9");
        });
        jQuery("ul.background_image_bg li.matt10").click(function(){
            jQuery("body").removeClass();
            jQuery("body").addClass("matt10");
        });

    });

    jQuery("body").append("<div class='demo_settings'></div>");
    jQuery(".demo_settings").append(
            "<div class='demo_settings_init'><i class='fa fa-sliders'></i></div>" +
            "<div class='demo_settings_inner'>" +
            
                "<section class='title'>" +
                    "<h2>Style Preview</h2>" +
                    "<h4>Make your own design</h4>" +
                "</section>" +

                "<div id='accordion'>" +
                
                    "<h5 class='subtitle'>Layout style</h5>" +
                    "<div>" +
                        "<div class='group'>" +
                            "<label>Boxed or wide</label>" +
                            "<ul class='layout_wide_boxed'>" +
                                "<li class='style_1'><span></span></li>" +
                                "<li class='active style_2'><span></span></li>" +
                            "</ul>" +
                        "</div>" +
                    "</div>" +
                    
                    "<h5 class='subtitle'>Menu style</h5>" +
                    "<div>" +
                        "<div class='group'>" +
                            "<label>Dark or light</label>" +
                            "<ul class='fixed_menu_change'>" +
                                "<li class='active dark'><span></span></li>" +
                                "<li class='light'><span></span></li>" +
                            "</ul>" +
                        "</div>" +
                    "</div>" +
                    
                    "<h5 class='subtitle'>Background style</h5>" +
                    "<div>" +
                        "<div class='group'>" +
                            "<label>Pattern</label>" +
                            "<ul class='background_image_pattern'>" +
                                "<li class='active patt1'></li>" +
                                "<li class='patt2' style='background-image: url(demo/style-preview/patterns/patt2.jpg)'></li>" +
                                "<li class='patt3' style='background-image: url(demo/style-preview/patterns/patt3.jpg)'></li>" +
                                "<li class='patt4' style='background-image: url(demo/style-preview/patterns/patt4.jpg)'></li>" +
                                "<li class='patt5' style='background-image: url(demo/style-preview/patterns/patt5.jpg)'></li>" +
                                "<li class='patt6' style='background-image: url(demo/style-preview/patterns/patt6.jpg)'></li>" +
                                "<li class='patt7' style='background-image: url(demo/style-preview/patterns/patt7.jpg)'></li>" +
                                "<li class='patt8' style='background-image: url(demo/style-preview/patterns/patt8.jpg)'></li>" +
                                "<li class='patt9' style='background-image: url(demo/style-preview/patterns/patt9.jpg)'></li>" +
                                "<li class='patt10' style='background-image: url(demo/style-preview/patterns/patt10.jpg)'></li>" +
                            "</ul>" +
                        "</div>" +
                        "<div class='group'>" +
                            "<label>Image</label>" +
                            "<ul class='background_image_bg'>" +
                                "<li class='active matt1'></li>" +
                                "<li class='matt2' style='background-image: url(demo/style-preview/backgrounds/matt2.jpg)'></li>" +
                                "<li class='matt3' style='background-image: url(demo/style-preview/backgrounds/matt3.jpg)'></li>" +
                                "<li class='matt4' style='background-image: url(demo/style-preview/backgrounds/matt4.jpg)'></li>" +
                                "<li class='matt5' style='background-image: url(demo/style-preview/backgrounds/matt5.jpg)'></li>" +
                                "<li class='matt6' style='background-image: url(demo/style-preview/backgrounds/matt6.jpg)'></li>" +
                                "<li class='matt7' style='background-image: url(demo/style-preview/backgrounds/matt7.jpg)'></li>" +
                                "<li class='matt8' style='background-image: url(demo/style-preview/backgrounds/matt8.jpg)'></li>" +
                                "<li class='matt9' style='background-image: url(demo/style-preview/backgrounds/matt9.jpg)'></li>" +
                                "<li class='matt10' style='background-image: url(demo/style-preview/backgrounds/matt10.jpg)'></li>" +
                            "</ul>" +
                        "</div>" +
                    "</div>" +  
                    
                    "<h5 class='subtitle'>Useful links</h5>" +
                    "<div>" +
                        "<div class='group'>" +
                            "<p><i class='fa fa-external-link' style='font-size:10px;'></i> <a href='http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio' target='_blank'>Buy template</a><br>" +
                            "<i class='fa fa-external-link' style='font-size:10px;'></i> <a href='http://codeostudio.hr/premium/help/' target='_blank'>Online documentation</a><br>" +
                            "<i class='fa fa-external-link' style='font-size:10px;'></i> <a href='http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio' target='_blank'>See more themes</a></p>" +
                        "</div>" +
                    "</div>" +
                    
                "</div>" +
                
            "</div>");
    
    jQuery("#accordion").accordion({
        collapsible: true,
        heightStyle: "content",
        active: false,
        icons: false
    });

})(jQuery);



