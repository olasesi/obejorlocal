<?php

/* journal2/template/journal2/assets/js.twig */
class __TwigTemplate_9336ab0d8a957f8df4ed26dc6f503677601787347448678feb4ce4ea28181217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Journal.notificationTimer = parseInt('";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_hide"), "method");
        echo "', 10);

Journal.quickviewText = '";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_button_text"), "method");
        echo "';

Journal.scrollToTop = parseInt('";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_to_top", 1 => "1"), "method");
        echo "', 10);

Journal.searchInDescription = ";
        // line 7
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_include_description", 1 => "1"), "method") == "1")) ? ("true") : ("false"));
        echo ";

Journal.galleryZoom = ";
        // line 9
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_zoom", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumb = ";
        // line 10
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumbHide = ";
        // line 11
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_hide", 1 => "on"), "method") == "off")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumbWidth = parseInt('";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_width", 1 => "100"), "method");
        echo "', 10);
Journal.galleryThumbHeight = parseInt('";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_height", 1 => "100"), "method");
        echo "', 10);
Journal.galleryThumbSpacing = parseInt('";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_spacing", 1 => "7"), "method");
        echo "', 10);
Journal.galleryBarsDelay = parseInt('";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_gallery_bars_after", 1 => "5000"), "method");
        echo "', 10);

Journal.infiniteScrollStatus = ";
        // line 17
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll", 1 => "1"), "method")) ? ("true") : ("false"));
        echo ";
Journal.infiniteScrollLoadingText = '";
        // line 18
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_loading_text", 1 => "Loading"), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollNoMoreItemsText = '";
        // line 19
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_no_more_items_text", 1 => "No items left."), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollLoadMoreItemsText = '";
        // line 20
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_load_more_items_text", 1 => "Load more"), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollLoadMoreItemsOffset = parseInt('";
        // line 21
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_load_more_items_offset", 1 => "0"), "method"), "'", "\\'");
        echo "', 10);
Journal.hasCountdownEnabled = ";
        // line 22
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "never")) ? ("false") : ("true"));
        echo ";
Journal.hasStickyScroll = ";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_hide", 1 => "1"), "method");
        echo ";


Journal.BASE_HREF = 'url(' + \$('base').attr('href') + ')';

\$(document).ready(function () {

\$(\".product-page .rating a\").click(function() {
    \$('html, body').animate({
        scrollTop: \$(\"#tabs\").offset().top - 50
    }, 600);
});

if (\$('html').hasClass('filter-on-mobile')) {
\$('.journal-sf').before(\$('<div class=\"open-filter\" style=\"display:none\">";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_mobile_text", 1 => "Product Filters"), "method");
        echo "</div>'));
\$('.open-filter').on('click', function () {
var \$filter = \$('.journal-sf .box').first();
if (\$filter.hasClass('is-visible')) {
\$('.side-column .journal-sf .box').slideUp(300);
\$('.sf-reset').fadeOut(200);
\$filter.removeClass('is-visible');
} else {
\$('.side-column .journal-sf .box').slideDown(300);
\$('.sf-reset').fadeIn(200);
\$filter.addClass('is-visible');
}
});
}

Journal.productPage();

";
        // line 54
        if (( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "hasClass", array(0 => "mobile"), "method") && ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header", 1 => "1"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) || (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_tablet", 1 => "1"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet"))))) {
            // line 55
            echo "  Journal.enableStickyHeader(";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_top_spacing", 1 => 0), "method");
            echo ");
";
        }
        // line 57
        echo "
";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off")) {
            // line 59
            echo "  \$('header').addClass('menu-cart-off');
";
        }
        // line 61
        echo "
";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_menu_phone_2", 1 => "on"), "method") == "on")) {
            // line 63
            echo "  \$(window).scroll( function() {
  if (\$(window).scrollTop() > \$('.journal-cart').offset().top){
  \$('header').addClass('phone-sticky-cart');
  }
  else{
  \$('header').removeClass('phone-sticky-cart');
  }

  if (\$(window).scrollTop() > \$('.journal-cart').offset().top + 40){
  \$('header').addClass('phone-sticky-menu');
  }
  else{
  \$('header').removeClass('phone-sticky-menu');
  }
  });
";
        }
        // line 79
        echo "

";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_tabs_position", 1 => "on"), "method") == "off")) {
            // line 82
            echo "  \$('.product-tabs').insertAfter('.product-info');
";
        }
        // line 84
        echo "
";
        // line 85
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_auto_update_price", 1 => "1"), "method") == "1")) {
            // line 86
            echo "  Journal.enableProductOptions();
  Journal.updatePrice = true;
";
        }
        // line 89
        echo "
";
        // line 90
        if ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) {
            // line 91
            echo "  Journal.enableSideBlocks();
";
        }
        // line 93
        echo "
";
        // line 95
        if (((((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete", 1 => "1"), "method") == "1")) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet") && ($this->getAttribute($this->getAttribute(        // line 96
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_tablet", 1 => "1"), "method") == "1"))) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "phone") && ($this->getAttribute($this->getAttribute(        // line 97
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_phone", 1 => "1"), "method") == "1")))) {
            // line 98
            echo "  Journal.searchAutoComplete();
";
        }
        // line 100
        echo "
";
        // line 102
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_status"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "hasClass", array(0 => "ie8"), "method"))) {
            // line 103
            echo "  Journal.enableQuickView();
  Journal.quickViewStatus = true;
";
        } else {
            // line 106
            echo "  Journal.quickViewStatus = false;
";
        }
        // line 108
        echo "
";
        // line 110
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop"))) {
            // line 111
            echo "  if (\$('html').hasClass('product-page') || \$('html').hasClass('quickview')) {
  Journal.enableCloudZoom('";
            // line 112
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom_inner", 1 => "0"), "method") == "0")) ? ("standard") : ("inner"));
            echo "');
  }
";
        }
        // line 115
        echo "
";
        // line 117
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method") == "1")) {
            // line 118
            echo "  Journal.productPageGallery();
";
        } else {
            // line 120
            echo "  \$('.product-info .image a').css('cursor','default').click(function(){
  return false;
  });
";
        }
        // line 124
        echo "

";
        // line 126
        if (((((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top", 1 => "1"), "method") == "1")) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet") && ($this->getAttribute($this->getAttribute(        // line 127
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top_tablet", 1 => "1"), "method") == "1"))) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "phone") && ($this->getAttribute($this->getAttribute(        // line 128
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top_phone", 1 => "1"), "method") == "1")))) {
            // line 129
            echo "  \$(window).scroll(function () {
  if (\$(this).scrollTop() > 300) {
  \$('.scroll-top').fadeIn(200);
  } else {
  \$('.scroll-top').fadeOut(200);
  }
  });

  \$('.scroll-top').click(function () {
  \$('html, body').animate({scrollTop: 0}, 700);
  });
";
        }
        // line 141
        echo "

\$('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');
\$('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');

\$('#top-modules .gutter-on').parent().addClass('gutter');
\$('#bottom-modules .gutter-on').parent().addClass('gutter');

if (Journal.infiniteScrollStatus && \$('.main-products').length) {
Journal.infiniteScroll();
}

\$(window).resize();

Journal.init();
});

/* Custom JS */
";
        // line 159
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_js"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/assets/js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 159,  275 => 141,  261 => 129,  259 => 128,  258 => 127,  257 => 126,  253 => 124,  247 => 120,  243 => 118,  241 => 117,  238 => 115,  232 => 112,  229 => 111,  227 => 110,  224 => 108,  220 => 106,  215 => 103,  213 => 102,  210 => 100,  206 => 98,  204 => 97,  203 => 96,  202 => 95,  199 => 93,  195 => 91,  193 => 90,  190 => 89,  185 => 86,  183 => 85,  180 => 84,  176 => 82,  174 => 81,  170 => 79,  152 => 63,  150 => 62,  147 => 61,  143 => 59,  141 => 58,  138 => 57,  132 => 55,  130 => 54,  110 => 37,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  35 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Journal.notificationTimer = parseInt('{{ journal2.settings.get('notification_hide') }}', 10);*/
/* */
/* Journal.quickviewText = '{{ journal2.settings.get('quickview_button_text') }}';*/
/* */
/* Journal.scrollToTop = parseInt('{{ journal2.settings.get('scroll_to_top', '1') }}', 10);*/
/* */
/* Journal.searchInDescription = {{ journal2.settings.get('search_autocomplete_include_description', '1') == '1' ? 'true' : 'false' }};*/
/* */
/* Journal.galleryZoom = {{ journal2.settings.get('pp_gallery_zoom', 'on') == 'on' ? 'true' : 'false' }};*/
/* Journal.galleryThumb = {{ journal2.settings.get('pp_gallery_thumbs', 'on') == 'on' ? 'true' : 'false' }};*/
/* Journal.galleryThumbHide = {{ journal2.settings.get('pp_gallery_thumbs_hide', 'on') == 'off' ? 'true' : 'false' }};*/
/* Journal.galleryThumbWidth = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_width', '100') }}', 10);*/
/* Journal.galleryThumbHeight = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_height', '100') }}', 10);*/
/* Journal.galleryThumbSpacing = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_spacing', '7') }}', 10);*/
/* Journal.galleryBarsDelay = parseInt('{{ journal2.settings.get('hide_gallery_bars_after', '5000') }}', 10);*/
/* */
/* Journal.infiniteScrollStatus = {{ journal2.settings.get('infinite_scroll', '1') ? 'true' : 'false' }};*/
/* Journal.infiniteScrollLoadingText = '{{ journal2.settings.get('infinite_scroll_loading_text', 'Loading') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollNoMoreItemsText = '{{ journal2.settings.get('infinite_scroll_no_more_items_text', 'No items left.') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollLoadMoreItemsText = '{{ journal2.settings.get('infinite_scroll_load_more_items_text', 'Load more') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollLoadMoreItemsOffset = parseInt('{{ journal2.settings.get('infinite_scroll_load_more_items_offset', '0') | replace ("'","\\'") }}', 10);*/
/* Journal.hasCountdownEnabled = {{ journal2.settings.get('show_countdown', 'never') == 'never' ? 'false' : 'true' }};*/
/* Journal.hasStickyScroll = {{ journal2.settings.get('sticky_header_hide', '1')}};*/
/* */
/* */
/* Journal.BASE_HREF = 'url(' + $('base').attr('href') + ')';*/
/* */
/* $(document).ready(function () {*/
/* */
/* $(".product-page .rating a").click(function() {*/
/*     $('html, body').animate({*/
/*         scrollTop: $("#tabs").offset().top - 50*/
/*     }, 600);*/
/* });*/
/* */
/* if ($('html').hasClass('filter-on-mobile')) {*/
/* $('.journal-sf').before($('<div class="open-filter" style="display:none">{{ journal2.settings.get('filter_mobile_text', 'Product Filters') }}</div>'));*/
/* $('.open-filter').on('click', function () {*/
/* var $filter = $('.journal-sf .box').first();*/
/* if ($filter.hasClass('is-visible')) {*/
/* $('.side-column .journal-sf .box').slideUp(300);*/
/* $('.sf-reset').fadeOut(200);*/
/* $filter.removeClass('is-visible');*/
/* } else {*/
/* $('.side-column .journal-sf .box').slideDown(300);*/
/* $('.sf-reset').fadeIn(200);*/
/* $filter.addClass('is-visible');*/
/* }*/
/* });*/
/* }*/
/* */
/* Journal.productPage();*/
/* */
/* {% if not journal2.html_classes.hasClass('mobile') and ((journal2.settings.get('sticky_header', '1') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop') or (journal2.settings.get('sticky_header_tablet', '1') == '1' and staticCall('Journal2Utils', 'getDevice') == 'tablet')) %}*/
/*   Journal.enableStickyHeader({{ journal2.settings.get('boxed_top_spacing', 0) }});*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' %}*/
/*   $('header').addClass('menu-cart-off');*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('sticky_menu_phone_2', 'on') == 'on' %}*/
/*   $(window).scroll( function() {*/
/*   if ($(window).scrollTop() > $('.journal-cart').offset().top){*/
/*   $('header').addClass('phone-sticky-cart');*/
/*   }*/
/*   else{*/
/*   $('header').removeClass('phone-sticky-cart');*/
/*   }*/
/* */
/*   if ($(window).scrollTop() > $('.journal-cart').offset().top + 40){*/
/*   $('header').addClass('phone-sticky-menu');*/
/*   }*/
/*   else{*/
/*   $('header').removeClass('phone-sticky-menu');*/
/*   }*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_page_tabs_position', 'on') == 'off' %}*/
/*   $('.product-tabs').insertAfter('.product-info');*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_auto_update_price', '1') == '1' %}*/
/*   Journal.enableProductOptions();*/
/*   Journal.updatePrice = true;*/
/* {% endif %}*/
/* */
/* {% if staticCall('Journal2Utils', 'getDevice') == 'desktop' %}*/
/*   Journal.enableSideBlocks();*/
/* {% endif %}*/
/* */
/* {# enable search autocomplete #}*/
/* {% if (staticCall('Journal2Utils', 'getDevice') == 'desktop' and journal2.settings.get('search_autocomplete', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'tablet' and journal2.settings.get('search_autocomplete_tablet', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'phone' and journal2.settings.get('search_autocomplete_phone', '1') == '1') %}*/
/*   Journal.searchAutoComplete();*/
/* {% endif %}*/
/* */
/* {# enable quickview #}*/
/* {% if journal2.settings.get('quickview_status') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop' and not journal2.html_classes.hasClass("ie8") %}*/
/*   Journal.enableQuickView();*/
/*   Journal.quickViewStatus = true;*/
/* {% else %}*/
/*   Journal.quickViewStatus = false;*/
/* {% endif %}*/
/* */
/* {# enable cloudzoom #}*/
/* {% if journal2.settings.get('product_page_cloud_zoom') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop' %}*/
/*   if ($('html').hasClass('product-page') || $('html').hasClass('quickview')) {*/
/*   Journal.enableCloudZoom('{{ journal2.settings.get('product_page_cloud_zoom_inner', '0') == '0' ? 'standard' : 'inner' }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* {# enable product page gallery #}*/
/* {% if journal2.settings.get('product_page_gallery') == '1' %}*/
/*   Journal.productPageGallery();*/
/* {% else %}*/
/*   $('.product-info .image a').css('cursor','default').click(function(){*/
/*   return false;*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* {% if (staticCall('Journal2Utils', 'getDevice') == 'desktop' and journal2.settings.get('scroll_top', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'tablet' and journal2.settings.get('scroll_top_tablet', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'phone' and journal2.settings.get('scroll_top_phone', '1') == '1') %}*/
/*   $(window).scroll(function () {*/
/*   if ($(this).scrollTop() > 300) {*/
/*   $('.scroll-top').fadeIn(200);*/
/*   } else {*/
/*   $('.scroll-top').fadeOut(200);*/
/*   }*/
/*   });*/
/* */
/*   $('.scroll-top').click(function () {*/
/*   $('html, body').animate({scrollTop: 0}, 700);*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* $('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');*/
/* $('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');*/
/* */
/* $('#top-modules .gutter-on').parent().addClass('gutter');*/
/* $('#bottom-modules .gutter-on').parent().addClass('gutter');*/
/* */
/* if (Journal.infiniteScrollStatus && $('.main-products').length) {*/
/* Journal.infiniteScroll();*/
/* }*/
/* */
/* $(window).resize();*/
/* */
/* Journal.init();*/
/* });*/
/* */
/* /* Custom JS *//* */
/* {{ journal2.settings.get('custom_js') }}*/
/* */
