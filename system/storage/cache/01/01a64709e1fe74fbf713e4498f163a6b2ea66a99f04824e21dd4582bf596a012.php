<?php

/* journal2/template/journal2/assets/css.twig */
class __TwigTemplate_b377af0b3d3d0ccbf4f312b3acd7228820ee70025b18652e20d79372e45f1ee7 extends Twig_Template
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
        echo "/* Control Panel Settings */
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectors"]) ? $context["selectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["selector"]) {
            // line 3
            echo "  ";
            if ($this->getAttribute($context["selector"], "properties", array())) {
                // line 4
                echo "    ";
                echo $this->getAttribute($context["selector"], "selector", array());
                echo " { ";
                echo twig_join_filter($this->getAttribute($context["selector"], "properties", array()), ";");
                echo " }
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
/* Swipebox Loader */
";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method")) {
            // line 10
            echo "  #swipebox-slider .slide {
  background-image: url('image/";
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }
  .mfp-iframe-scaler iframe {
  background-image: url('image/";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  background-repeat: no-repeat;
  background-position: center;
  }
  .social {
  background-image: url('image/";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }
";
        }
        // line 22
        echo "
@media only screen and (min-width: 760px){
.ui-pnotify{
width: ";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_width", 1 => 350), "method");
        echo "px !important;
}
}

";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method")) {
            // line 30
            echo "  .home-page #container:before{
  content: url('image/";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method");
            echo "');
  }
";
        }
        // line 34
        echo "
";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position"), "method") == "right")) {
            // line 36
            echo "  .quickview .product-info .heading-title{
  display:none;
  }
";
        }
        // line 40
        echo "

";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_qty_status", 1 => "on"), "method") == "off")) {
            // line 43
            echo "  .product-info .right .cart div .qty{
  display:none;
  }
  .product-info .right .cart div .button{
  width:100%;
  }
  .quickview #button-cart {
  width: calc(98% - 40px);
  }
";
        }
        // line 53
        echo "
";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_cart", 1 => "off"), "method") == "on")) {
            // line 55
            echo "  .journal-cart{
  display:none;
  }
";
        }
        // line 59
        echo "
/* Site width */
#container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {
max-width: ";
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}


";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_status", 1 => "block"), "method") == "none")) {
            // line 67
            echo "  ul.breadcrumb,
  .extended-container::before{
  display:none !important;
  }
";
        }
        // line 72
        echo "

";
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_caption", 1 => "on"), "method") == "off")) {
            // line 75
            echo "  div.lg-sub-html{
  top:0;
  bottom:auto;
  background-color:";
            // line 78
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_bars_bg"), "method");
            echo ";
  }
  .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .lg-toolbar{
  background-color:transparent;
  }
";
        }
        // line 87
        echo "
";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "off")) {
            // line 89
            echo "  .product-page div.lg-sub-html{
  top:0;
  bottom:auto;
  padding: 13px 95px 13px 70px;
  background-color:";
            // line 93
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }
  .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .product-page .lg-toolbar{
  background-color:transparent;
  }
";
        }
        // line 102
        echo "
";
        // line 103
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "on")) {
            // line 104
            echo "  .product-page div.lg-sub-html{
  top:auto;
  bottom:0;
  padding: 13px 70px;
  background-color:";
            // line 108
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_caption_bar_bg"), "method");
            echo ";
  }
  .product-page .lg-toolbar{
  background-color:";
            // line 111
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }
";
        }
        // line 114
        echo "
";
        // line 115
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_sold_count_position", 1 => "none"), "method") == "inline-block")) {
            // line 116
            echo "  .product-sold-count.ps-left{
  display:none;
  }
";
        }
        // line 120
        echo "
";
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 122
            echo "  .product-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }
";
        }
        // line 131
        echo "
";
        // line 132
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 133
            echo "  .category-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }
";
        }
        // line 142
        echo "

";
        // line 144
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_category_image", 1 => "1"), "method") == "0")) {
            // line 145
            echo "  .category-info .image{
  display:none;
  }
";
        }
        // line 149
        echo "

/*Notification Position*/

";
        // line 153
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-left")) {
            // line 154
            echo "  .ui-pnotify{
  left:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:20px;
  left:auto;
  }
";
        }
        // line 162
        echo "
";
        // line 163
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-center")) {
            // line 164
            echo "  .ui-pnotify{
  left:50%;
  transform: translateX(-50%);
  }
";
        }
        // line 169
        echo "
";
        // line 170
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-right")) {
            // line 171
            echo "  .ui-pnotify{
  right:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  left:20px;
  right:auto;
  }
";
        }
        // line 179
        echo "
";
        // line 180
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "center")) {
            // line 181
            echo "  .ui-pnotify{
  left:50%;
  top:50% !important;
  transform: translate(-50%, -50%);
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:auto !important;
  }
";
        }
        // line 190
        echo "
";
        // line 191
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_shadow", 1 => "0"), "method") == "1")) {
            // line 192
            echo "  .ui-pnotify{
  box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 196
        echo "


";
        // line 199
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "hover")) {
            // line 200
            echo "  .ui-pnotify:hover .ui-pnotify-closer{
  opacity:1;
  }
";
        }
        // line 204
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "always")) {
            // line 205
            echo "  .ui-pnotify-closer{
  opacity:1;
  }
";
        }
        // line 209
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "never")) {
            // line 210
            echo "  .ui-pnotify-closer:hover{
  display:none;
  }
";
        }
        // line 214
        echo "

";
        // line 216
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "left")) {
            // line 217
            echo "  .breadcrumb{
  text-align:left;
  }
";
        }
        // line 221
        echo "
";
        // line 222
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "center")) {
            // line 223
            echo "  .breadcrumb{
  text-align:center
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:center;
  }
";
        }
        // line 230
        echo "
";
        // line 231
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "right")) {
            // line 232
            echo "  .breadcrumb{
  text-align:right;
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:left;
  }
";
        }
        // line 239
        echo "

/* Product Grid Shadow */

";
        // line 243
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 244
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 248
        echo "
";
        // line 249
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 250
            echo "  .product-grid-item  .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 254
        echo "

";
        // line 256
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 257
            echo "  .product-grid-item  .product-wrapper{
  box-shadow: ";
            // line 258
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 261
        echo "
";
        // line 262
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 263
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow: ";
            // line 264
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 267
        echo "

";
        // line 269
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 270
            echo "  .journal-carousel .product-grid-item:hover .product-wrapper{
  box-shadow: ";
            // line 271
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 274
        echo "
";
        // line 275
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 276
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow: ";
            // line 277
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 280
        echo "
";
        // line 281
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 282
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 286
        echo "


";
        // line 289
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 290
            echo "  .custom-sections .product-grid-item .product-wrapper:hover{
  box-shadow: ";
            // line 291
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 294
        echo "
";
        // line 295
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 296
            echo "  .custom-sections .product-grid-item .product-wrapper{
  box-shadow: ";
            // line 297
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 300
        echo "
  ";
        // line 301
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 302
            echo "    .custom-sections .product-grid-item .product-wrapper{
    box-shadow: none !important;
    }
  ";
        }
        // line 306
        echo "



  ";
        // line 310
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 311
            echo "    .product-grid-item .image .label-latest + .label-sale{
    top: 5px;
    margin-top: 0;
    }
  ";
        }
        // line 316
        echo "
  ";
        // line 317
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 318
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-left{
    display: none;
    }
    #column-left + #content,
    #column-left + #column-right + #content {
    margin-left:0 !important;
    }
    }
  ";
        }
        // line 328
        echo "
  ";
        // line 329
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 330
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-right{
    display: none;
    }
    #column-right + #content,
    #column-left + #column-right + #content {
    margin-right:0 !important;
    }
    }
  ";
        }
        // line 340
        echo "

  ";
        // line 342
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 343
            echo "    .product-grid-item .cart .button-left-icon:before{
    display:none;
    }
  ";
        }
        // line 347
        echo "
.product-grid-item .enquiry-button .button i{
color:";
        // line 349
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon:color"), "method");
        echo ";
}
.product-list-item .enquiry-button .button i{
color:";
        // line 352
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon:color"), "method");
        echo ";
}

footer .contacts > div > span .contact-icon:hover{
background-color:";
        // line 356
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_icon_bg_hover"), "method");
        echo ";
}


";
        // line 360
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 361
            echo "  .product-grid-item .cart .button-left-icon:before{
  float:none;
  }
  .product-grid-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .cart .button-cart-text{
  display:none;
  }
  .product-grid-item .cart .button[data-hint]:after,
  .product-grid-item .cart .hint--top:before{
  display:block;
  }
  .product-grid-item .cart .hint--top:before{
  border-top-color: ";
            // line 375
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--right:before{
  border-right-color: ";
            // line 378
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--left:before{
  border-left-color: ";
            // line 381
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 384
        echo "
";
        // line 385
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 386
            echo "  .product-grid-item .cart .button-left-icon::before,
  .product-grid-item .enquiry-button i::before{
  margin-right: 6px;
  }
";
        }
        // line 391
        echo "
";
        // line 392
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 393
            echo "  .product-grid-item .cart .button-right-icon{
  display:none !important;
  }
";
        }
        // line 397
        echo "
";
        // line 398
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 399
            echo "  .product-grid-item .cart .button-left-icon{
  display:none !important;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }
";
        }
        // line 406
        echo "

/* BLOG */

";
        // line 410
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_icon_position", 1 => "left"), "method") == "right") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_button_icon_position", 1 => "left"), "method") == "right"))) {
            // line 411
            echo "  .post-button-left-icon{
  display:none;
  }
  .post-button-right-icon{
  display:inline;
  }
";
        }
        // line 418
        echo "
";
        // line 419
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_title_status", 1 => "on"), "method") == "off")) {
            // line 420
            echo "  .one-page-checkout h1.heading-title{
  display:none;
  }
";
        }
        // line 424
        echo "
";
        // line 425
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 426
            echo "  .post-wrapper{
  box-shadow: none;
  }
";
        }
        // line 430
        echo "
";
        // line 431
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 432
            echo "  .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 436
        echo "
";
        // line 437
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 438
            echo "  .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 442
        echo "
";
        // line 443
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 444
            echo "  .post-wrapper:hover{
  box-shadow: ";
            // line 445
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 448
        echo "
";
        // line 449
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 450
            echo "  .post-wrapper{
  box-shadow: ";
            // line 451
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 454
        echo "

";
        // line 456
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 457
            echo "  .post-item .post-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 461
        echo "
";
        // line 462
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 463
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 470
        echo "
";
        // line 471
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 472
            echo "  .post-item .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 476
        echo "
";
        // line 477
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 478
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow: ";
            // line 482
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 485
        echo "
";
        // line 486
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 487
            echo "  .post-item .post-wrapper{
  box-shadow: ";
            // line 488
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 491
        echo "


";
        // line 494
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "none")) {
            // line 495
            echo "  .blog-list-view .post-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 499
        echo "
";
        // line 500
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 501
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 508
        echo "
";
        // line 509
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 510
            echo "  .blog-list-view .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 514
        echo "
";
        // line 515
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 516
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow: ";
            // line 520
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 523
        echo "
";
        // line 524
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 525
            echo "  .blog-list-view .post-wrapper{
  box-shadow: ";
            // line 526
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 529
        echo "

";
        // line 531
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "hover")) {
            // line 532
            echo "  .product-details:before {
  visibility:hidden;
  opacity:0;
  transition: all 0.2s;
  }
  .product-grid-item:hover .product-details:before {
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 542
        echo "
";
        // line 543
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "never")) {
            // line 544
            echo "  .product-details:before {
  display:none;
  }
";
        }
        // line 548
        echo "

/* Product Grid Quickview*/

";
        // line 552
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 553
            echo "  .product-grid-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 558
        echo "
";
        // line 559
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 560
            echo "  .product-grid-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 565
        echo "
";
        // line 566
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 567
            echo "  .product-grid-item .quickview-button {
  display:none;
  }
";
        }
        // line 571
        echo "

";
        // line 573
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover"))) {
            // line 574
            echo "  .product-grid-item:hover .rating{
  margin-top:-28px;
  transition: all 0.1s ease-out;
  }
";
        }
        // line 579
        echo "
";
        // line 580
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always"))) {
            // line 581
            echo "  .product-grid-item .rating{
  margin-top:-28px;
  }
";
        }
        // line 585
        echo "
";
        // line 586
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 587
            echo "  .product-grid-item .quickview-button .button-right-icon{
  display:none;
  }
";
        }
        // line 591
        echo "
";
        // line 592
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 593
            echo "  .product-grid-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }
";
        }
        // line 600
        echo "
";
        // line 601
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 602
            echo "  .product-grid-item .quickview-button .button-left-icon:before,
  .product-grid-item .quickview-button .button-right-icon:before{
  display:none;
  }
";
        }
        // line 607
        echo "
";
        // line 608
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 609
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-grid-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-grid-item .quickview-button [data-hint]:after,
  .product-grid-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-grid-item .quickview-button .hint--top:before{
  border-top-color: ";
            // line 623
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--right:before{
  border-right-color: ";
            // line 626
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--left:before{
  border-left-color: ";
            // line 629
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 632
        echo "
";
        // line 633
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 634
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  margin-right: 6px;
  }
";
        }
        // line 638
        echo "

/* Product Grid Wishlist/Compare */

";
        // line 642
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "text")) {
            // line 643
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  display:none;
  }
";
        }
        // line 648
        echo "
";
        // line 649
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "icon")) {
            // line 650
            echo "  .product-grid-item .button-wishlist-text,
  .product-grid-item .button-compare-text{
  display: none;
  }
  .product-grid-item .wishlist [data-hint]:after,
  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare [data-hint]:after,
  .product-grid-item .compare .hint--top:before{
  display:block;
  }

  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare .hint--top:before{
  border-top-color: ";
            // line 663
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--right:before,
  .product-grid-item .compare .hint--right:before{
  border-right-color: ";
            // line 667
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--left:before,
  .product-grid-item .compare .hint--left:before{
  border-left-color: ";
            // line 671
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
";
        }
        // line 674
        echo "
";
        // line 675
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "both")) {
            // line 676
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  border:0;
  background-color:transparent !important;
  padding:0 5px;
  }
  .product-grid-item .wishlist a i:before,
  .product-grid-item .compare a i:before{
  line-height:100%;
  }
";
        }
        // line 687
        echo "

";
        // line 689
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon"))) {
            // line 690
            echo "  .product-grid-item .product-details .wishlist,
  .product-grid-item .product-details .compare,
  .product-list-item .image .wishlist,
  .product-list-item .image .compare,
  .product-grid-item .image .button-wishlist-text,
  .product-grid-item .image .button-compare-text{
  display:none !important;
  }
";
        }
        // line 699
        echo "


";
        // line 702
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_on_hover", 1 => "on"), "method") == "on") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => ""), "method") == "icon"))) {
            // line 703
            echo "  .product-grid-item .image .wishlist,
  .product-grid-item .image .compare{
  visibility:hidden;
  opacity:0;
  }
  .product-grid-item:hover .image .wishlist,
  .product-grid-item:hover .image .compare{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 714
        echo "

";
        // line 716
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 717
            echo "  .product-list-item .cart .button{
  width:";
            // line 718
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_width_px"), "method");
            echo "px;
  height:";
            // line 719
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 720
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 724
        echo "
";
        // line 725
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 726
            echo "  .product-list-item .quickview-button .button{
  width:";
            // line 727
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 728
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 729
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 733
        echo "


";
        // line 736
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 737
            echo "  .product-grid-item .cart .button{
  width:";
            // line 738
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_width_px"), "method");
            echo "px;
  height:";
            // line 739
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 740
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  padding:0;
  }
  .product-grid-item .cart{
  height:";
            // line 744
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  }
";
        }
        // line 747
        echo "
";
        // line 748
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 749
            echo "  .product-grid-item .quickview-button .button{
  width:";
            // line 750
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 751
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 752
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 756
        echo "

/* Product List */

";
        // line 760
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "hover")) {
            // line 761
            echo "  .product-list-item:hover{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }
";
        }
        // line 765
        echo "
";
        // line 766
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "always")) {
            // line 767
            echo "  .product-list-item{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }
";
        }
        // line 771
        echo "
";
        // line 772
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "never")) {
            // line 773
            echo "  .product-list-item{
  box-shadow: none;
  }
";
        }
        // line 777
        echo "


";
        // line 780
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 781
            echo "  .product-list-item .cart .button-left-icon:before{
  display:none;
  }
";
        }
        // line 785
        echo "
";
        // line 786
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 787
            echo "  .product-list-item .cart .button-left-icon:before{
  float:none;
  }
  .product-list-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .cart .button-cart-text{
  display:none;
  }
  .product-list-item .cart .button[data-hint]:after,
  .product-list-item .cart .hint--top:before{
  display:block;
  }
  .product-list-item .cart .hint--top:before{
  border-top-color: ";
            // line 801
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--right:before{
  border-right-color: ";
            // line 804
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--left:before{
  border-left-color: ";
            // line 807
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 810
        echo "
";
        // line 811
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 812
            echo "  .product-list-item .cart .button-left-icon:before,
  .product-list-item .enquiry-button i:before{
  margin-right: 8px;
  }
";
        }
        // line 817
        echo "
";
        // line 818
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 819
            echo "  .product-list-item .cart .button-right-icon{
  display:none;
  }
";
        }
        // line 823
        echo "
";
        // line 824
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 825
            echo "  .product-list-item .cart .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }
";
        }
        // line 832
        echo "

/* Product List Quickview*/
";
        // line 835
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 836
            echo "  .product-list-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 841
        echo "
";
        // line 842
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 843
            echo "  .product-list-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 848
        echo "
";
        // line 849
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 850
            echo "  .product-list-item .quickview-button {
  display:none;
  }
";
        }
        // line 854
        echo "
";
        // line 855
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 856
            echo "  .product-list-item .quickview-button .button-right-icon{
  display:none;
  }
";
        }
        // line 860
        echo "
";
        // line 861
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 862
            echo "  .product-list-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }
";
        }
        // line 869
        echo "
";
        // line 870
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 871
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  display:none;
  }
";
        }
        // line 875
        echo "
";
        // line 876
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 877
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-list-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-list-item .quickview-button .button[data-hint]:after,
  .product-list-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-list-item .quickview-button .hint--top:before{
  border-top-color: ";
            // line 891
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--right:before{
  border-right-color: ";
            // line 894
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--left:before{
  border-left-color: ";
            // line 897
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 900
        echo "
";
        // line 901
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 902
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  margin-right: 8px;
  }
";
        }
        // line 906
        echo "

/* Product Page */

#product-gallery.image-additional-grid a{
width: ";
        // line 911
        echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
        echo "%;
}

";
        // line 914
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel", 1 => "1"), "method") == "0")) {
            // line 915
            echo "  .product-info .left .image-additional{
  margin-right: -";
            // line 916
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing"), "method");
            echo "px;
  }
";
        }
        // line 919
        echo "
";
        // line 920
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 921
            echo "  #button-cart .button-cart-text:after{
  display:none;
  }
";
        }
        // line 925
        echo "
";
        // line 926
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 927
            echo "  #button-cart .button-cart-text:before{
  display:none;
  }
";
        }
        // line 931
        echo "
";
        // line 932
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows", 1 => "hover"), "method") == "hover")) {
            // line 933
            echo "  .product-info .left .image-additional .swiper-button-prev,
  .product-info .left .image-additional .swiper-button-next{
  display:none;
  }
  .product-info .left .image-additional:hover .swiper-button-prev,
  .product-info .left .image-additional:hover .swiper-button-next{
  display:block;
  }
";
        }
        // line 942
        echo "
";
        // line 943
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header", 1 => "0"), "method") == "1") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header_above", 1 => "on"), "method") == "off"))) {
            // line 944
            echo "  @media only screen and (min-width: 980px){
  #top-modules > div:first-of-type.journal2_slider{
  margin-top:-";
            // line 946
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_top_spacing"), "method") + 120);
            echo "px;
  position:relative;
  }
  }
";
        }
        // line 951
        echo "
.compare-info td{
border-right-style:";
        // line 953
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list{
border-bottom-style:";
        // line 956
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-left-style:";
        // line 957
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list td{
border-right-style:";
        // line 960
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-top-style:";
        // line 961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}


/* Product Labels*/

.label-latest + .label-sale{
top: ";
        // line 968
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_height"), "method");
        echo "px;
}

";
        // line 971
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "hover")) {
            // line 972
            echo "  .label-latest{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 981
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "never")) {
            // line 982
            echo "  .label-latest{
  display:none !important;
  }
";
        }
        // line 986
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_special_status", 1 => "always"), "method") == "hover")) {
            // line 987
            echo "  .label-sale{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{
  visibility:visible;
  opacity:1;
  }


";
        }
        // line 998
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "hover")) {
            // line 999
            echo "  .label-outofstock{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 1008
        echo "
";
        // line 1009
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "never")) {
            // line 1010
            echo "  .label-outofstock{
  display:none !important;
  }
";
        }
        // line 1014
        echo "
";
        // line 1015
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_style", 1 => "diagonal"), "method") == "normal")) {
            // line 1016
            echo "  span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(5px, 5px) rotate(0deg);
  min-width:inherit;
  }
  html[dir=\"rtl\"] span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(-5px, 5px) rotate(0deg);
  min-width:inherit;
  }
";
        }
        // line 1027
        echo "

";
        // line 1029
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 1030
            echo "  .product-list-item .image .label-latest + .label-sale{
  top: 5px;
  margin-top: 0;
  }
";
        }
        // line 1035
        echo "
#more-details.hint--top:before{
border-top-color: ";
        // line 1037
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_tip_bg"), "method");
        echo ";
}

.boxed-header header{
max-width:";
        // line 1041
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}
.boxed-header .super-menu > li:first-of-type{
border-left-width:0;
}
.boxed-header .super-menu > li:last-of-type{
border-right-width:0;
}

";
        // line 1050
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "1"), "method") == "0")) {
            // line 1051
            echo "  @media only screen and (min-width: 760px){
  .boxed-header .is-sticky header .header{
  max-width:";
            // line 1053
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
            echo "px;
  left: 50%;
  transform: translateX(-50%);
  }
  }
  .is-sticky .header {
  box-shadow: none;
  background: transparent;
  }
  .is-sticky .journal-menu-bg {
  background-color:transparent;
  background-image:none;
  }
";
        }
        // line 1067
        echo "

";
        // line 1069
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_name_overflow", 1 => "on"), "method") == "off")) {
            // line 1070
            echo "  div.lg-sub-html > span{
  white-space:normal;
  }
  div.lg-sub-html {
  padding: 20px;
  }
";
        }
        // line 1077
        echo "
@media only screen and (max-width: 760px){
.journal-language .dropdown-toggle,
.journal-currency .dropdown-toggle{
color:";
        // line 1081
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "full_text_font_phone"), "method");
        echo ";
}
.journal-header-center #language,
.journal-header-center #currency{
border-color:";
        // line 1085
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_divider_phone"), "method");
        echo ";
}
}

.sticky-menu .is-sticky .journal-header-default .header{
background-color: ";
        // line 1090
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}

";
        // line 1093
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none")) {
            // line 1094
            echo "  .phone-input label::before{
  display:none;
  }
";
        }
        // line 1098
        echo "
";
        // line 1099
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_show_phone", 1 => "block"), "method") == "none"))) {
            // line 1100
            echo "  #content.one-page-checkout div fieldset > div.phone-input{
  display:none !important;
  }
";
        }
        // line 1104
        echo "
html[dir=\"rtl\"] .journal-carousel .htabs a:last-of-type{
border-left-color:";
        // line 1106
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_divider"), "method");
        echo ";
}

.boxed-header .journal-header-center .journal-links{
padding-left: 10px;
}
.boxed-header .journal-header-center .journal-search{
padding-left: 20px;
}
.boxed-header .journal-header-center .journal-secondary{
padding-right: 10px;
}


";
        // line 1120
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "none")) {
            // line 1121
            echo "  #cart{
  box-shadow:none;
  }
";
        }
        // line 1125
        echo "
.journal-header-center .journal-center-bg{
top:";
        // line 1127
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}

";
        // line 1130
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "default")) {
            // line 1131
            echo "  #cart {
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1135
        echo "

";
        // line 1137
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "none")) {
            // line 1138
            echo "  #cart .cart-wrapper{
  box-shadow:none;
  }
";
        }
        // line 1142
        echo "
";
        // line 1143
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "default")) {
            // line 1144
            echo "  #cart .cart-wrapper {
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1148
        echo "

";
        // line 1150
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "none")) {
            // line 1151
            echo "  #search input{
  box-shadow:none;
  }
";
        }
        // line 1155
        echo "
";
        // line 1156
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "default")) {
            // line 1157
            echo "  #search input{
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1161
        echo "
";
        // line 1162
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "none")) {
            // line 1163
            echo "  .autocomplete2-suggestions{
  box-shadow:none;
  }
";
        }
        // line 1167
        echo "
";
        // line 1168
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "default")) {
            // line 1169
            echo "  .autocomplete2-suggestions{
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1173
        echo "

@media only screen and (max-width: 760px) {
ul.super-menu > li > a,
ul.super-menu > li:hover > a{
color:";
        // line 1178
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
ul.super-menu > li,
ul.super-menu > li:hover{
background-color:";
        // line 1182
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
.boxed-header .journal-header-center .journal-search,
.boxed-header .journal-header-center .journal-links{
padding-left: 0;
}
.boxed-header .journal-header-center .journal-cart,
.boxed-header .journal-header-center .journal-secondary{
padding-right: 0;
}
.button-search{
background-color:";
        // line 1193
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_bg_mobile"), "method");
        echo ";
}
.button-search i:before{
color:";
        // line 1196
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_icon_color_mobile"), "method");
        echo " !important;
}
}


";
        // line 1201
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "inline-block")) {
            // line 1202
            echo "  .product-filter .product-compare {
  display: flex;
  }
";
        }
        // line 1206
        echo "
";
        // line 1207
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_compare_link_status", 1 => "on"), "method") == "off")) {
            // line 1208
            echo "  .product-filter .product-compare{
  display:none;
  }
";
        }
        // line 1212
        echo "

@media only screen and (max-width: 980px) {
.mobile-menu-on-tablet ul.super-menu > li > a,
.mobile-menu-on-tablet ul.super-menu > li:hover > a{
color:";
        // line 1217
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.super-menu > li,
.mobile-menu-on-tablet ul.super-menu > li:hover{
background-color:";
        // line 1221
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
}

";
        // line 1225
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design"), "method") == "1")) {
            // line 1226
            echo "  @media only screen and (min-width:760px) and (max-width:";
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  .journal-header-center .journal-search{
  padding-left: 15px;
  }
  .journal-header-center .journal-cart{
  padding-right: 15px;
  }
  .journal-header-center .journal-cart{
  width:calc(25% - 20px);
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-right: 15px;
  }
  }
  @media only screen and (max-width:760px) {
  .journal-header-center .journal-search,
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-left: 0;
  padding-right: 0;
  }
  .journal-header-center .journal-cart,
  html[dir=\"rtl\"] .journal-header-center .journal-cart{
  padding-right: 0;
  padding-left: 0;
  }
  }
";
        }
        // line 1254
        echo "

@media only screen and (min-width: 760px){
.boxed-header .journal-header-center .journal-cart{
padding-right:15px;
}
html[dir=\"rtl\"] .boxed-header .journal-header-center .journal-cart{
padding-right:0;
padding-left:15px;
}
}

@media only screen and (min-width: ";
        // line 1266
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px) {
.sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {
margin-left: 0;
}
.skin-16 .journal-header-mega .journal-search {
padding-right: 0;
}
}

@media only screen and (max-width: ";
        // line 1275
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.super-menu, .mega-menu, .html-menu{
border-radius:0;
}
.bottom-footer.fullwidth-bar .copyright{
padding-left: 15px;
}
.bottom-footer.fullwidth-bar .payments{
padding-right: 15px;
}

#top-modules > div:not(.gutter),
#bottom-modules > div:not(.gutter){
padding-left: 20px;
padding-right: 20px;
}

#top-modules .journal2_slider,
#bottom-modules .journal2_slider,
#top-modules .journal2_headline_rotator{
padding-left: 0 !important;
padding-right: 0 !important;
}

.no-secondary .journal-header-center #currency{
border-right-width:0;
}
.no-secondary .journal-header-center #language{
border-left-width:0;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #currency{
border-left-width:0;
border-right-width:1px;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #language{
border-right-width:0;
border-left-width:1px;
}
.journal-header-compact #header .journal-search {
padding-right:15px !important;
}
html[dir=\"rtl\"] .journal-header-compact #header .journal-search {
padding-right:0 !important;
padding-left:15px !important;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{
border-left-width:0;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{
border-right-width:0;
}
.boxed-header body{
padding:0;
}
.fullwidth-footer .columns{
padding-left: 15px;
}
.copyright{
padding-left: 15px;
}
.journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}
}

@media only screen and (max-width: 760px){
.journal-header-mega .journal-logo{
padding-left:0;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:0;
}
}

.boxed-header .journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"].boxed-header .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}

@media only screen and (min-width : 760px) {
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
left: 60px !important;
}
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
right: 60px !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
right: 60px !important;
left: auto !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
left: 60px !important;
right: auto !important;
}
}

";
        // line 1383
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details", 1 => "1"), "method") == "0")) {
            // line 1384
            echo "  .quickview #more-details{
  display:none;
  }
  .quickview #button-cart{
  width:63%;
  }
";
        }
        // line 1391
        echo "

";
        // line 1393
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1394
            echo "  @media only screen and (min-width: 760px){
  .journal-header-mega #logo a img{
  left: 0;
  transform: translate(0, -50%);
  }
  }
";
        }
        // line 1401
        echo "
";
        // line 1402
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1403
            echo "  @media only screen and (min-width: 760px){
  html[dir=\"rtl\"] .journal-header-mega #logo a img{
  left: auto;
  right:0;
  }
  }
";
        }
        // line 1410
        echo "
";
        // line 1411
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_shadow", 1 => "none"), "method") == "none")) {
            // line 1412
            echo "  header .links a,
  header .links .no-link{
  border-bottom-color:#e4e4e4;
  }
";
        }
        // line 1417
        echo "
.boxed-header.default-header .journal-top-header{
clip: rect(0px,";
        // line 1419
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px,45px,0px);
}

.journal-header-default .links .no-link{
border-color:";
        // line 1423
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo "
}

.journal-header-center #cart .content:before,
.oc2 #cart .content .cart-wrapper:before{
color:";
        // line 1428
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_bg"), "method");
        echo "
}

.journal-header-center .autocomplete2-suggestions:before{
color:";
        // line 1432
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "autosuggest_bg"), "method");
        echo "
}

";
        // line 1435
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_icons_display", 1 => "inline"), "method") == "block")) {
            // line 1436
            echo "  header .links a i,
  .links .no-link i,
  .journal-header-default #header .journal-links .top-menu > li > a{
  display:block;
  }
  header .links a i,
  .links .no-link i{
  margin-top:3px;
  }
  header .links .top-menu-link{
  position:relative;
  top:-2px;
  }
  .has-dropdown::after {
  margin-left: 2px;
  top: -3px;
  }
";
        }
        // line 1454
        echo "
.journal-language .dropdown-menu:before,
.journal-currency .dropdown-menu:before{
color:";
        // line 1457
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_drop_bg"), "method");
        echo "
}

#header .top-menu .top-dropdown li:first-of-type {
border-top-left-radius: ";
        // line 1461
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-top-right-radius: ";
        // line 1462
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:last-of-type {
border-bottom-left-radius: ";
        // line 1465
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-bottom-right-radius: ";
        // line 1466
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:first-of-type::before{
color:";
        // line 1469
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

#search ::-webkit-input-placeholder {
color:";
        // line 1473
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1477
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1481
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1485
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
.compare-info tbody td{
border-left-style:";
        // line 1489
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
@media only screen and (max-width: 760px){
#search ::-webkit-input-placeholder {
color:";
        // line 1493
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1497
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1501
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1505
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
}

.button-search{
border-right-style:";
        // line 1511
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-right-color:";
        // line 1512
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}
html[dir=\"rtl\"] .button-search{
border-left-style:";
        // line 1515
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-left-color:";
        // line 1516
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-left{
border-left-style: ";
        // line 1520
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

";
        // line 1523
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_divider_phone", 1 => "off"), "method") == "on")) {
            // line 1524
            echo "  @media only screen and (max-width: 760px){
  .center-header #search, .default-header #search{
  border-top-width:1px;
  border-top-style:";
            // line 1527
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-top-color:";
            // line 1528
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  }
";
        }
        // line 1532
        echo "
";
        // line 1533
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_pos", 1 => "left"), "method") == "right")) {
            // line 1534
            echo "  .button-search {
  right: 0;
  }
  html[dir=\"rtl\"] .button-search {
  right: auto;
  left:0;
  }
  #search input {
  padding-left: 12px;
  padding-right: 50px;
  }
  .button-search{
  border-right-width:0;
  border-left-width:1px;
  border-left-style:";
            // line 1548
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-left-color:";
            // line 1549
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  html[dir=\"rtl\"] .button-search{
  border-left-width:0;
  border-right-width:1px;
  border-right-style:";
            // line 1554
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-right-color:";
            // line 1555
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
";
        }
        // line 1558
        echo "

header .journal-login{
border-bottom-color:";
        // line 1561
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}


.super-menu > li:last-of-type{
border-right-color:";
        // line 1566
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-right-style:";
        // line 1567
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

@media only screen and (max-width: 760px) {
.default-header .journal-login{
background-color: ";
        // line 1572
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_menu_bg_color_mobile"), "method");
        echo "
}
.journal-header-center #search input,
.journal-header-center .button-search{
border-radius:0;
}
.center-header #search input, .default-header #search input{
background-color:";
        // line 1579
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_bg_mobile"), "method");
        echo ";
}
.center-header header #cart, .default-header header #cart{
background-color:";
        // line 1582
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
        echo ";
}
.journal-menu .mobile-menu > li{
border-color:";
        // line 1585
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 1586
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}
}

.inline-button .product-details{
padding-bottom:0;
}

";
        // line 1594
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button", 1 => "block-button"), "method") == "inline-button") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "block"))) {
            // line 1595
            echo "  .product-grid-item .cart{
  display:inline-block !important;
  }
";
        }
        // line 1599
        echo "
";
        // line 1600
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none")) {
            // line 1601
            echo "  .mega-menu .product-grid-item .cart{
  display:none !important;
  }
";
        }
        // line 1605
        echo "
";
        // line 1606
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none")) {
            // line 1607
            echo "  .product-grid-item .cart{
  display:none !important;
  }
";
        }
        // line 1611
        echo "
";
        // line 1612
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_cart", 1 => "block"), "method") == "none")) {
            // line 1613
            echo "  .quickview .product-info .right .cart{
  display:table;
  }
  .product-info .right .cart div .qty,
  .product-info .right .cart div #button-cart{
  display:none;
  }
";
        }
        // line 1621
        echo "
";
        // line 1622
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) {
            // line 1623
            echo "  .custom-sections .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1627
        echo "
";
        // line 1628
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1629
            echo "  .side-column .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1633
        echo "
";
        // line 1634
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1635
            echo "  #content .journal-carousel .product-grid-item .product-details .cart,
  #top-modules .journal-carousel .product-grid-item .product-details .cart,
  #bottom-modules .journal-carousel .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1641
        echo "
";
        // line 1642
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_status", 1 => "1"), "method") == "0")) {
            // line 1643
            echo "  .product-info .right .options h3{
  display:none;
  }
  .product-info .right .option-image:first-of-type{
  margin-top:0;
  }
";
        }
        // line 1650
        echo "
.product-info .right .options.push-1 .option-image li.selected span img{
border-color:";
        // line 1652
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_image_border_hover"), "method");
        echo ";
}

.mega-menu-categories .mega-menu-item,
.mega-menu-brands .mega-menu-item,
.mega-menu-html .mega-menu-item,
#header .mega-menu .product-grid-item{
margin-bottom:";
        // line 1659
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-right-style:";
        // line 1663
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-color:";
        // line 1667
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
}

.mega-menu > div{
margin-bottom:-";
        // line 1671
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px !important;
margin-right:-";
        // line 1672
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"] .mega-menu-item > div,
html[dir=\"rtl\"] #header .mega-menu .product-wrapper{
margin-right:0;
margin-left:";
        // line 1678
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu .mega-menu-column:last-of-type > div{
margin-right:-";
        // line 1682
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column.mega-menu-products > div{
margin-left:-";
        // line 1685
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{
margin-right:";
        // line 1689
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu-column > div > h3, html[dir=\"rtl\"] .mega-menu .mega-menu-column .menu-cms-block{
margin-right:0;
margin-left:";
        // line 1693
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
.mega-menu .mega-menu-column:last-of-type > h3,
.mega-menu .mega-menu-column:last-of-type > div > h3,
.mega-menu .mega-menu-column:last-of-type > .menu-cms-block,
.mega-menu .mega-menu-column.mega-menu-html-block > div{
margin-right:0;
}

@media only screen and (max-width: 760px) {
.super-menu{
border-width:0;
}
.mega-menu .mega-menu-column > div{
margin-right:-";
        // line 1707
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column > div{
margin-left:-";
        // line 1710
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
margin-right:0;
}
}

.journal-sf .sf-image .box-content ul{
margin-bottom:-";
        // line 1716
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_bottom"), "method");
        echo "px;
margin-right:-";
        // line 1717
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_right"), "method");
        echo "px;
}

";
        // line 1720
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off")) {
            // line 1721
            echo "  .p-author, .p-posted{
  display:none !important;
  }
";
        }
        // line 1725
        echo "
";
        // line 1726
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) {
            // line 1727
            echo "  .p-date{
  display:none !important;
  }
";
        }
        // line 1731
        echo "
";
        // line 1732
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off")) {
            // line 1733
            echo "  .p-comment{
  display:none !important;
  }
";
        }
        // line 1737
        echo "
";
        // line 1738
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off"))) {
            // line 1739
            echo "  .comment-date{
  display:none !important;
  }
";
        }
        // line 1743
        echo "




";
        // line 1748
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off")) {
            // line 1749
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right: 12px;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right:0;
  padding-left: 12px;
  }
";
        }
        // line 1764
        echo "
";
        // line 1765
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) {
            // line 1766
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-voucher{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  padding-right:0;
  padding-left: 12px;
  }
";
        }
        // line 1778
        echo "
";
        // line 1779
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off")) {
            // line 1780
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-reward{
  display:none;
  }
";
        }
        // line 1784
        echo "


";
        // line 1787
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off"))) {
            // line 1788
            echo "  .journal-checkout .coupon-voucher div.checkout-voucher,
  .journal-checkout .coupon-voucher div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1798
        echo "
";
        // line 1799
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1800
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-reward,
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1810
        echo "
";
        // line 1811
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1812
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-voucher,
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1822
        echo "
";
        // line 1823
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1824
            echo "  .journal-checkout .coupon-voucher{
  display:none;
  }
";
        }
        // line 1828
        echo "



";
        // line 1832
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "dropdown_shadow", 1 => "none"), "method") == "none")) {
            // line 1833
            echo "  .drop-down ul{
  box-shadow:none !important;
  }
";
        }
        // line 1837
        echo "
";
        // line 1838
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_wishlist", 1 => "inline-block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_compare", 1 => "inline-block"), "method") == "none"))) {
            // line 1839
            echo "  .product-info .right .wishlist-compare{
  display:none;
  }
";
        }
        // line 1843
        echo "
";
        // line 1844
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1845
            echo "  .product-details{
  padding-top:13px;
  }
";
        }
        // line 1849
        echo "
";
        // line 1850
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none"))) {
            // line 1851
            echo "  .product-grid-item .price + hr,
  .product-grid-item .price + .rating + hr{
  display:block;
  }
";
        }
        // line 1856
        echo "

";
        // line 1858
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none"))) {
            // line 1859
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1863
        echo "
";
        // line 1864
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1865
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1869
        echo "
";
        // line 1870
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1871
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1875
        echo "
";
        // line 1876
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none"))) {
            // line 1877
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1881
        echo "
";
        // line 1882
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1883
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1887
        echo "

";
        // line 1889
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_display", 1 => "off"), "method") == "on")) {
            // line 1890
            echo "  footer .contacts{
  text-align:center;
  }
  footer .contacts-left,
  html[dir=\"rtl\"] footer .contacts-left{
  float: none;
  }
  footer .contacts-right{
  display: none;
  }
";
        }
        // line 1901
        echo "
.has-cta .rotator-tex{
line-height:";
        // line 1903
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cta_button_height"), "method");
        echo "px;
}

footer .contacts .hint--top:before{
border-top-color: ";
        // line 1907
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_tooltip_bg_color"), "method");
        echo ";
}


.side-column .box-category,
.side-column .box-content,
.side-column .box-content > div,
.side-column .box-content > ul > li:last-of-type,
.side-column .oc-module .product-grid-item:last-of-type{
border-bottom-left-radius: inherit;
border-bottom-right-radius: inherit;
border-radius:inherit;
}


.journal-sf ul li label:hover{
color:";
        // line 1923
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_text"), "method");
        echo ";
}
.sf-icon:before{
border-top-color:";
        // line 1926
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "reset_tip_bg"), "method");
        echo ";
}

/*
.journal-sf ul li label:hover img{
border-color:";
        // line 1931
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_border"), "method");
        echo ";
} */

.sf-price .value:after{
border-bottom-color:";
        // line 1935
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_price_tip"), "method");
        echo ";
}

.mobile-trigger{
background-color:";
        // line 1939
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}


.journal-header-default .links > a{
border-bottom-color: transparent;
}

@media only screen and (max-width: 760px) {
.super-menu{
background-color:";
        // line 1949
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_bg"), "method");
        echo ";
}
.journal-header-default .links > a{
border-bottom-color: ";
        // line 1952
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
}
.nav-numbers a:hover,
.nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1958
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1959
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1960
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
}
.headline-mode .nav-numbers a:hover,
.headline-mode .nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1966
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1967
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1968
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1969
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
}
.tp-bullets.simplebullets.round .bullet.selected,
.tp-bullets.simplebullets.round .bullet:hover,
.journal-simple-slider .owl-controls .owl-page.active span,
.journal-simple-slider .owl-controls.clickable .owl-page:hover span{
transform: scale(";
        // line 1975
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "slider_bullet_scale"), "method");
        echo ");
}

.swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{
transform: scale(";
        // line 1979
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_bullet_scale"), "method");
        echo ");
}

@media only screen and (max-width: 980px) {
.journal-header-default .mega-menu{
width: 100%;
}
}

@media only screen and (max-width: 760px) {
.journal-header-center .journal-secondary{
background-color:";
        // line 1990
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}
}

.mega-menu{
max-width:";
        // line 1995
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.bottom-menu-bar #header .top-menu > li{
border-color:";
        // line 2000
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links{
background-color:";
        // line 2003
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_bg_color"), "method");
        echo ";
}
.bottom-menu-bar .journal-header-center .journal-secondary {
border-top-width: 0;
}
.bottom-menu-bar #header .journal-links ul.top-menu > li{
border-color:";
        // line 2009
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{
background-color:";
        // line 2012
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_bg_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links ul.top-menu > li > a,
.bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,
.bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{
color:";
        // line 2017
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_color"), "method");
        echo ";
}
}

.boxed-header .is-sticky .header {
max-width:";
        // line 2022
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
left: 50%;
transform: translateX(-50%);
}

";
        // line 2027
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu")) {
            // line 2028
            echo "  .is-sticky .super-menu, .is-sticky .journal-menu-bg {
  box-shadow: none;
  }
";
        }
        // line 2032
        echo "
";
        // line 2033
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "0"), "method") == "1"))) {
            // line 2034
            echo "  html.boxed-header .is-sticky .header {
  max-width:100%;
  left:0;
  transform: translateX(0);
  }
";
        }
        // line 2040
        echo "

.bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{
color:";
        // line 2043
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo ";
}

@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .mobile-menu > li > ul,
.mobile-menu-on-tablet .mobile-menu > li > .mega-menu{
border-style:";
        // line 2049
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2050
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.menu-centered{
height:auto;
}
}

@media only screen and (max-width: 760px){
.mobile-menu > li > ul,
.mobile-menu > li > .mega-menu{
border-style:";
        // line 2060
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2061
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
}

@media only screen and (min-width: 760px) {
.journal-header-mega #search {
max-width: ";
        // line 2067
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_width", 1 => "100"), "method");
        echo "%;
left: ";
        // line 2068
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_offset", 1 => "0"), "method");
        echo "px;
}
.journal-header-center .j-100{
height:";
        // line 2071
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
        echo "px;
}
.journal-header-center .journal-menu-bg{
top:";
        // line 2074
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method") + 40) + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method")) - 40);
        echo "px;
}
.journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{
height:";
        // line 2077
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-menu,
.journal-header-center .journal-menu-bg,
.journal-header-center .mobile-trigger,
ul.menu-centered{
height:";
        // line 2083
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .mobile-trigger,
.journal-header-center .super-menu > li > a{
line-height:";
        // line 2087
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-language form .dropdown-menu,
.journal-header-center .journal-currency form .dropdown-menu{
top:";
        // line 2091
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}

.sticky-default.center-header .is-sticky .journal-header-center .j-100{
height:";
        // line 2095
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}
.sticky-default.center-header .is-sticky .journal-menu-bg{
top:";
        // line 2098
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}

.is-sticky .journal-header-center .journal-menu,
.is-sticky .journal-header-center .journal-menu-bg,
.is-sticky .journal-header-center .mobile-trigger{
height:";
        // line 2104
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
.is-sticky .journal-header-center .mobile-trigger,
.is-sticky .journal-header-center .super-menu > li > a{
line-height:";
        // line 2108
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
}

@media only screen and (max-width: 760px){
#header .journal-logo{
height:";
        // line 2114
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input_phone", 1 => ""), "method");
        echo "px !important;
}
}

.center-header body.is-sticky .header-assets.top-bar{
background-color:";
        // line 2119
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}

";
        // line 2122
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_on_phone", 1 => "on"), "method") == "off")) {
            // line 2123
            echo "  @media only screen and (max-width: 760px){
  #header .journal-logo {
  display: none;
  }
  .journal-header-center .journal-secondary {
  border-bottom-width: 0;
  }
  }
";
        }
        // line 2132
        echo "

";
        // line 2134
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "tablet"))) {
            // line 2135
            echo "  @media only screen and (min-width: 980px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }
";
        }
        // line 2142
        echo "
";
        // line 2143
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "phone"))) {
            // line 2144
            echo "  @media only screen and (min-width: 760px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }
";
        }
        // line 2151
        echo "
";
        // line 2152
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_box_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2153
            echo "  .header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }
";
        }
        // line 2157
        echo "
@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .journal-header-center .journal-menu{
height:auto;
}
.mobile-menu-on-tablet .journal-header-center .super-menu > li > a{
line-height:40px;
}
}

";
        // line 2167
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_show_category_images", 1 => "on"), "method") == "off")) {
            // line 2168
            echo "  @media only screen and (max-width: 760px){
  .mega-menu-categories .mega-menu-item ul,
  .mega-menu-categories .mega-menu-item.menu-image-left ul{
  width:100%;
  }
  .mega-menu-categories .mega-menu-item img {
  display: none !important;
  }
  }
";
        }
        // line 2178
        echo "
";
        // line 2179
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "remove_top_bar", 1 => "on"), "method") == "off")) {
            // line 2180
            echo "  @media only screen and (min-width: 760px){
  .header-assets.top-bar,
  .journal-top-header{
  display:none;
  }
  .journal-header-center .journal-menu-bg{
  top:";
            // line 2186
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
            echo "px;
  }
  }
";
        }
        // line 2190
        echo "

";
        // line 2192
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_modules_margin", 1 => "on"), "method") == "off")) {
            // line 2193
            echo "  .side-column .box{
  margin-bottom:0;
  }
";
        }
        // line 2197
        echo "

";
        // line 2199
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_price_full", 1 => "inline-block"), "method") == "block")) {
            // line 2200
            echo "  .product-grid-item .price{
  width:100%;
  }
";
        }
        // line 2204
        echo "
";
        // line 2205
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_size", 1 => "medium"), "method") == "tiny")) {
            // line 2206
            echo "  .product-grid-item .price{
  width:100%;
  }
";
        }
        // line 2210
        echo "
";
        // line 2211
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_two_per_row", 1 => "on"), "method") == "off")) {
            // line 2212
            echo "  @media only screen and (max-width: 760px){
  .box-sections ul li {
  width: 100%;
  border-right-width: 0;
  }
  .box-sections ul li:nth-last-child(2):nth-child(odd) {
  border-bottom-width: 1px;
  }
  html[dir=\"rtl\"] .box-sections ul li {
  border-right-width: 0 !important;
  }
  }
";
        }
        // line 2225
        echo "

#tabs{
top:";
        // line 2228
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_tabs_content_border:border-width"), "method");
        echo ";
}

.product-grid-item.display-icon .wishlist-icon:before,
.product-grid-item.display-icon .compare-icon:before{
line-height:";
        // line 2233
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_bg_height"), "method");
        echo "px;
}

.journal-header-center #cart .heading i{
height:";
        // line 2237
        echo (40 - ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_border:border-width", 1 => 0), "method") * 2));
        echo "px;
}

.journal-desktop .menu-floated .float-left{
border-right-style:";
        // line 2241
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

.column.products > h3{
margin-bottom:";
        // line 2245
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}
.column.products{
padding-bottom:";
        // line 2248
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}

.side-column .journal-gallery .box-heading{
margin-bottom:";
        // line 2252
        echo (10 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_gallery_padding"), "method"));
        echo "px;
}

.side-column .box-category > ul li ul li a{
padding-left: ";
        // line 2256
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method"));
        echo "px;
}
.side-column .box-category > ul li ul li ul li a{
padding-left: ";
        // line 2259
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (2 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li a{
padding-left: ";
        // line 2262
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (3 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li a{
padding-left: ";
        // line 2265
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (4 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li ul li a{
padding-left: ";
        // line 2268
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (5 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}

@media only screen and (max-width: ";
        // line 2271
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.breadcrumb{
padding-left:10px;
}
.super-menu > li:first-of-type{
border-left-width:0;
}
.super-menu > li:last-of-type{
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:first-of-type{
border-left-width:1px;
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:last-of-type{
border-left-width:0;
}
html[dir=\"rtl\"] .super-menu.menu-floated > li:first-of-type
border-right-width:0;
}
}

.super-menu.menu-floated{
border-right-width:1px;
border-left-width:1px;
border-color:";
        // line 2296
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 2297
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type", 1 => "solid"), "method");
        echo ";
}

";
        // line 2300
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_fullwidth_divider", 1 => "off"), "method") == "on")) {
            // line 2301
            echo "  .custom-sections .box-heading.box-sections{
  border-left-width:1px;
  border-right-width:1px;
  }
";
        }
        // line 2306
        echo "
";
        // line 2307
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_unite", 1 => "1"), "method") == "0") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "button"))) {
            // line 2308
            echo "
  .product-grid-item .wishlist,
  .product-grid-item .compare{
  padding:0;
  }
  .product-grid-item .button-group{
  display: flex;
  justify-content: center;
  }
";
        }
        // line 2318
        echo "

.custom-sections .box-heading.box-sections{
border-left-style:";
        // line 2321
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_title_divider_type"), "method");
        echo ";
}

.journal-carousel:not(.journal-gallery) .box-content .swiper-container{
padding: ";
        // line 2325
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
margin: -";
        // line 2326
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.journal-carousel.arrows-top .swiper-button-prev,
.journal-carousel.arrows-top .swiper-button-next{
margin-top:";
        // line 2331
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.side-column .journal-carousel.arrows-top .swiper-button-prev,
.side-column .journal-carousel.arrows-top .swiper-button-next,
.related-products.journal-carousel.arrows-top .swiper-button-prev,
.related-products.journal-carousel.arrows-top .swiper-button-next{
margin-top:0;
}

";
        // line 2341
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_top_margin", 1 => "0"), "method") == "20")) {
            // line 2342
            echo "  div#footer{
  margin-top:";
            // line 2343
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin", 1 => "20"), "method");
            echo "px;
  }
";
        }
        // line 2346
        echo "
";
        // line 2347
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_bottom_margin", 1 => "0"), "method") == "20")) {
            // line 2348
            echo "  div#footer{
  margin-bottom:";
            // line 2349
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_bottom_margin", 1 => "20"), "method");
            echo "px;
  }
";
        }
        // line 2352
        echo "
.extended-container + .boxed-footer #footer{
margin-top:";
        // line 2354
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin"), "method") - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "container_bottom_spacing"), "method"));
        echo "px;
}


";
        // line 2358
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_side_margin", 1 => "on"), "method") == "off")) {
            // line 2359
            echo "  .side-column .journal-carousel .htabs {
  margin-bottom: 0;
  }
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {
  margin-top:20px;
  }
";
        }
        // line 2367
        echo "

";
        // line 2369
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "center")) {
            // line 2370
            echo "  .mega-menu-brands div > h3 {
  justify-content: center;
  }
";
        }
        // line 2374
        echo "
";
        // line 2375
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "right")) {
            // line 2376
            echo "  .mega-menu-brands div > h3 {
  justify-content: flex-end;
  }
";
        }
        // line 2380
        echo "
.side-column .journal-carousel .box-content .swiper-container{
padding:0;
margin:0;
}
html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-next{
right:auto;
left:";
        // line 2387
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-prev{
right:auto;
left:";
        // line 2392
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_right", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-next{
right:auto;
left:";
        // line 2397
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-prev{
left:auto;
right:";
        // line 2402
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_right", 1 => ""), "method");
        echo "px;
}

";
        // line 2405
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "center")) {
            // line 2406
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:center;
  }
";
        }
        // line 2410
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "right")) {
            // line 2411
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:left;
  }
";
        }
        // line 2415
        echo "
";
        // line 2416
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "center")) {
            // line 2417
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:center;
  }
";
        }
        // line 2421
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "right")) {
            // line 2422
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:left;
  }
";
        }
        // line 2426
        echo "
";
        // line 2427
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "center")) {
            // line 2428
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:center;
  justify-content: center;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: center;
  }
";
        }
        // line 2436
        echo "
";
        // line 2437
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "right")) {
            // line 2438
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:left;
  justify-content: flex-start;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: flex-end;
  }
";
        }
        // line 2446
        echo "
";
        // line 2447
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "left")) {
            // line 2448
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:right;
  }
";
        }
        // line 2452
        echo "
";
        // line 2453
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "right")) {
            // line 2454
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:left;
  }
";
        }
        // line 2458
        echo "
";
        // line 2459
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "center")) {
            // line 2460
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:center;
  }
";
        }
        // line 2464
        echo "
";
        // line 2465
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "left")) {
            // line 2466
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:right;
  }
";
        }
        // line 2470
        echo "
";
        // line 2471
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "right")) {
            // line 2472
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:left;
  }
";
        }
        // line 2476
        echo "
";
        // line 2477
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "center")) {
            // line 2478
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:center;
  }
";
        }
        // line 2482
        echo "

";
        // line 2484
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2485
            echo "  .blog-post .heading-title{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding:8px 0;
  }
";
        }
        // line 2492
        echo "
";
        // line 2493
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "module_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2494
            echo "  .post-module .box-heading{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding-top:8px;
  padding-bottom:8px;
  }
";
        }
        // line 2502
        echo "
.posts.blog-list-view .post-item-details{
width: ";
        // line 2504
        echo (100 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_image_width", 1 => "33.333333"), "method"));
        echo "%;
}

.side-column .box.cms-blocks .box-heading{
margin-bottom:";
        // line 2508
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_cms_margin"), "method");
        echo "px;
}

@media only screen and (min-width: ";
        // line 2511
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.safari5 #footer,
.safari5.boxed-header header{
width: ";
        // line 2514
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}
.tp-banner{
height:100% !important;
}
}

";
        // line 2521
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_ratio", 1 => "on"), "method") == "off")) {
            // line 2522
            echo "  #logo a img{
  height:auto;
  }
";
        }
        // line 2526
        echo "
@media only screen and (max-width: ";
        // line 2527
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {

.tp-banner-container{
height:auto !important;
}

.side-column .oc-module .product-details {
max-width: 130px;
}
.checkout-page #content {
padding-left: 20px;
padding-right: 20px;
}
}

@media only screen and (max-width: 760px){
.product-grid-item .has-countdown + .product-details .rating{
top:-50px;
}
.product-grid-item .image.has-countdown .wishlist,
.product-grid-item .image.has-countdown .compare{
margin-bottom:42px;
}
}

";
        // line 2552
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "always")) {
            // line 2553
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item .image.has-countdown .wishlist,
  .product-grid-item .image.has-countdown .compare{
  margin-bottom:42px;
  }
";
        }
        // line 2566
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hover")) {
            // line 2567
            echo "  .product-grid-item:hover .countdown,
  .product-list-item:hover .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item:hover .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item:hover .image.has-countdown .wishlist,
  .product-grid-item:hover .image.has-countdown .compare{
  margin-bottom:42px;
  }
";
        }
        // line 2580
        echo "
";
        // line 2581
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hidden")) {
            // line 2582
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  display:none;
  }
";
        }
        // line 2587
        echo "
    
";
        // line 2589
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "hover"))) {
            // line 2590
            echo "  .product-grid-item:hover .has-countdown .quickview-button{
  margin-top:-40px;
  }
";
        }
        // line 2594
        echo "
";
        // line 2595
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "always"))) {
            // line 2596
            echo "  .product-grid-item .has-countdown .quickview-button{
  margin-top:-40px;
  }
";
        }
        // line 2600
        echo "


";
        // line 2603
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom_inner"), "method") == "0")) {
            // line 2604
            echo "  .zm-viewer{
  display:none;
  border-left:1px solid white;
  }
";
        }
        // line 2609
        echo "
.option li.hint--top:before{
border-top-color:";
        // line 2611
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_push_tooltip_bg"), "method");
        echo ";
}

";
        // line 2614
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "on")) {
            // line 2615
            echo "  @media only screen and (max-width: 470px) {
  .journal-cart{
  background-color:";
            // line 2617
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo ";
  background-color:";
            // line 2618
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
            echo ";
  }
  }
";
        }
        // line 2622
        echo "
";
        // line 2623
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_cart2", 1 => "visible"), "method") == "visible"))) {
            // line 2624
            echo "  @media only screen and (max-width: 470px) {
  .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{
  width:100%;
  }
  header .journal-menu .mobile-trigger {
  width: 50%;
  margin-top: -40px;
  z-index: 3;
  background-color:transparent;
  }
  .journal-cart{
  z-index:2;
  background-color:";
            // line 2636
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo "
  }
  }
";
        }
        // line 2640
        echo "
.phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{
z-index:1;
}

";
        // line 2645
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_search", 1 => "block"), "method") == "block"))) {
            // line 2646
            echo "  @media only screen and (max-width: 470px){
  div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{
  color:";
            // line 2648
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_text_color_cart_same_line"), "method");
            echo ";
  }
  div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{
  color:";
            // line 2651
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_icon_color_cart_same_line"), "method");
            echo ";
  }
  }
";
        }
        // line 2655
        echo "
.journal-header-center #header .menu-dropdown::before{
border-bottom-color:";
        // line 2657
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

.header-notice > div{
max-width:";
        // line 2661
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}

@media only screen and (max-width:";
        // line 2664
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method") + 15);
        echo "px){
.header-notice > div{
padding-left:15px;
padding-right: 15px;
}
.header-notice.floated-icon > div{
padding-bottom:10px;
}
button.close-notice {
right: 8px;
}
html[dir=\"rtl\"] button.close-notice {
right: auto;
left: 8px;
}
}

";
        // line 2681
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "top")) {
            // line 2682
            echo "  .product-grid-item .quickview-button{
  top:0;
  transform: translate(-50%, 0);
  }
";
        }
        // line 2687
        echo "
";
        // line 2688
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "center")) {
            // line 2689
            echo "  .post-item-details .comment-date{
  margin:0 auto;
  }
  .blog-grid-view .post-button{
  align-self:center;
  }
";
        }
        // line 2696
        echo "
";
        // line 2697
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "right")) {
            // line 2698
            echo "  .post-item-details .comment-date{
  width:100%;
  }
  .blog-grid-view .post-button{
  align-self:flex-end;
  }
  html[dir=\"rtl\"] .blog-grid-view .post-button{
  align-self:flex-start;
  }
";
        }
        // line 2708
        echo "
";
        // line 2709
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom")) {
            // line 2710
            echo "  .product-grid-item .quickview-button{
  top:100%;
  transform: translate(-50%, -100%);
  }
";
        }
        // line 2715
        echo "
";
        // line 2716
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "center")) {
            // line 2717
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:center;
  }
";
        }
        // line 2722
        echo "
";
        // line 2723
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "right")) {
            // line 2724
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:left;
  }
";
        }
        // line 2729
        echo "
";
        // line 2730
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "center")) {
            // line 2731
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:center;
  }
";
        }
        // line 2735
        echo "
";
        // line 2736
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "right")) {
            // line 2737
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:left;
  }
";
        }
        // line 2741
        echo "

";
        // line 2743
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_to_top_pos", 1 => "right"), "method") == "left")) {
            // line 2744
            echo "  .scroll-top{
  left:5px;
  right:auto;
  }
";
        }
        // line 2749
        echo "
";
        // line 2750
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_side_margin", 1 => "15"), "method") == "0")) {
            // line 2751
            echo "  footer .columns {
  padding-left:0;
  }
  html[dir=\"rtl\"] footer .columns {
  padding-right:0;
  }
";
        }
        // line 2758
        echo "
";
        // line 2759
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2760
            echo "  footer{
  box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 2764
        echo "
";
        // line 2765
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2766
            echo "  footer{
  box-shadow: none;
  }
";
        }
        // line 2770
        echo "
";
        // line 2771
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2772
            echo "  .journal-top-header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }
";
        }
        // line 2776
        echo "
";
        // line 2777
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2778
            echo "  .journal-top-header{
  box-shadow:none;
  }
";
        }
        // line 2782
        echo "
";
        // line 2783
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") != "none")) {
            // line 2784
            echo "  .journal-header-default .links a, .journal-header-default .links .no-link {
  border-bottom-width: 0;
  }
";
        }
        // line 2788
        echo "
/* Content Margin */

@media only screen and (min-width: 760px){
#column-left + #content {
margin-left: ";
        // line 2793
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right: ";
        // line 2796
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}

#column-left + #column-right + #content{
margin-left: ";
        // line 2800
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-right: ";
        // line 2801
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}
}

/* Tablet Column Width + Content Margin */

@media only screen and (min-width:760px) and (max-width:980px) {
#column-left {
width: ";
        // line 2809
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right{
width: ";
        // line 2812
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #content {
margin-left: ";
        // line 2815
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right: ";
        // line 2818
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #column-right + #content{
margin-left: ";
        // line 2821
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
margin-right: ";
        // line 2822
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
}

/* Extended Layout Margins */

@media only screen and (min-width:760px) and (max-width: ";
        // line 2828
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.skin-16 .journal-header-center .journal-search {
padding-left: 30px;
}
.extended-layout #column-left{
padding-left:20px;
}
.extended-layout #column-right{
padding-right:20px;
}
.extended-layout #content,
.extended-layout #column-left + #content,
.extended-layout #column-right + #content{
padding-left:20px;
padding-right:20px;
}
html[dir=\"rtl\"].extended-layout #column-left{
padding-right:20px!important;
}
html[dir=\"rtl\"].extended-layout #column-right{
padding-left:20px !important;
}
html[dir=\"rtl\"].extended-layout #column-left + #content {
margin-right: ";
        // line 2851
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-left: 0;

}
html[dir=\"rtl\"].extended-layout #column-right + #content {
margin-right: 0;
}
}

.mega-menu .mega-menu-column .menu-cms-block{
margin-bottom:";
        // line 2861
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.fly-drop-down ul li{
min-height:";
        // line 2865
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "flyout_menu_item_height", 1 => 40), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.product-grid-item .rating{
margin-left:";
        // line 2870
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_x_phone"), "method");
        echo "px;
}
.product-grid-item .rating{
top:";
        // line 2873
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_y_phone"), "method");
        echo "px;
}
}

/* RTL Columns */

";
        // line 2879
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl_columns", 1 => "1"), "method") == "1")) {
            // line 2880
            echo "
  html[dir=\"rtl\"] .flyout-left .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-left .fly-drop-down > ul {
  left: auto;
  right: 100%;
  }
  html[dir=\"rtl\"] .flyout-right .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-right .fly-drop-down > ul {
  left: 100% !important;
  right: auto;
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: 5px;
  right: auto;
  transform: scale(-1);
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: auto;
  right: 8px;
  transform: scale(1);
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a {
  padding: 7px 12px 7px 25px;
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a {
  padding: 7px 25px 7px 12px;
  text-align:left;
  }


  html[dir=\"rtl\"] #column-left {
  float: right;
  }
  html[dir=\"rtl\"] #column-right {
  float: left;
  }


  @media only screen and (min-width: 760px){

  html[dir=\"rtl\"] #column-left {
  padding: 20px 20px 20px 0;
  }
  html[dir=\"rtl\"] #column-right {
  padding: 20px 0 20px 20px;
  }

  html[dir=\"rtl\"] #column-left + #content {
  margin-right: ";
            // line 2928
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left: ";
            // line 2933
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  margin-right: 0;
  }

  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right: ";
            // line 2938
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left: ";
            // line 2939
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  }

  }

  @media only screen and (min-width : 760px) and (max-width: 980px) {

  html[dir=\"rtl\"] #column-left + #content {
  margin-right: ";
            // line 2947
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left:0;
  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left: ";
            // line 2951
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-right:0;
  }
  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right: ";
            // line 2955
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left: ";
            // line 2956
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  }

  html[dir=\"rtl\"].extended-layout #column-left + #content {
  margin-right: ";
            // line 2960
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  }

  @media only screen and (min-width: ";
            // line 2966
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  html[dir=\"rtl\"].extended-layout #column-left{
  padding-right:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right{
  padding-left:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right + #content {
  padding-left: 20px;
  padding-right: 0;
  }
  html[dir=\"rtl\"].extended-layout #column-left + #content {
  padding-right: 20px;
  padding-left: 0;
  }
  }

";
        }
        // line 2984
        echo "

.refine-images::before,
#refine-images::before,
.category-list::before{
content:\"";
        // line 2989
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text", 1 => ""), "method");
        echo "\";
margin-right:";
        // line 2990
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => ""), "method");
        echo "px;
}
";
        // line 2992
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text_status", 1 => "none"), "method") == "none")) {
            // line 2993
            echo "  .refine-images::before,
  #refine-images::before,
  .category-list::before{
  display:none;
  }
";
        }
        // line 2999
        echo ".refine-image {
padding-right: ";
        // line 3000
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom: ";
        // line 3001
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
}
.refine-images {
margin-right: -";
        // line 3004
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom: ";
        // line 3005
        echo (15 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method"));
        echo "px;;
}

.product-grid-item {
margin-bottom: ";
        // line 3009
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right: ";
        // line 3015
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.ias-button,
.ias-loader,
.ias-noneleft{
margin-top: ";
        // line 3020
        echo (20 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method"));
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3023
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}

/* Mobile Product Spacing */

@media only screen and (max-width: 760px){
#cart .heading i::before{
color:";
        // line 3030
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_mobile"), "method");
        echo ";
}
#cart .heading i{
background-color:";
        // line 3033
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_bg_mobile"), "method");
        echo ";
}
div#container,
.home-page div#container {
margin-top: 0;
margin-bottom: 0;
box-shadow:none;
}
.product-grid-item:not(.swiper-slide) {
margin-bottom: ";
        // line 3042
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid-item:not(.swiper-slide) .product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right: ";
        // line 3048
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3051
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
}

.button:active{
box-shadow:";
        // line 3056
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "button_shadow_active"), "method");
        echo ";
}

#column-left .oc-module .product-details{
max-width:";
        // line 3060
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}

#column-right .oc-module .product-details{
max-width:";
        // line 3064
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}


";
        // line 3068
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-attachment"), "method") == "fixed"))) {
            // line 3069
            echo "  .mobile body,
  .tablet body{
  background-image:none;
  }
  .mobile body::before,
  .tablet body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image: ";
            // line 3083
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }
";
        }
        // line 3091
        echo "
";
        // line 3092
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-attachment"), "method") == "fixed"))) {
            // line 3093
            echo "  .mobile.home-page body,
  .tablet.home-page body{
  background-image:none;
  }
  .mobile.home-page body::before,
  .tablet.home-page body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image: ";
            // line 3107
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }
";
        }
        // line 3115
        echo "
/* Custom CSS */
";
        // line 3117
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_css"), "method");
        echo "

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/assets/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5036 => 3117,  5032 => 3115,  5021 => 3107,  5005 => 3093,  5003 => 3092,  5000 => 3091,  4989 => 3083,  4973 => 3069,  4971 => 3068,  4964 => 3064,  4957 => 3060,  4950 => 3056,  4942 => 3051,  4936 => 3048,  4927 => 3042,  4915 => 3033,  4909 => 3030,  4899 => 3023,  4893 => 3020,  4885 => 3015,  4876 => 3009,  4869 => 3005,  4865 => 3004,  4859 => 3001,  4855 => 3000,  4852 => 2999,  4844 => 2993,  4842 => 2992,  4837 => 2990,  4833 => 2989,  4826 => 2984,  4805 => 2966,  4796 => 2960,  4789 => 2956,  4785 => 2955,  4778 => 2951,  4771 => 2947,  4760 => 2939,  4756 => 2938,  4748 => 2933,  4740 => 2928,  4690 => 2880,  4688 => 2879,  4679 => 2873,  4673 => 2870,  4665 => 2865,  4658 => 2861,  4645 => 2851,  4619 => 2828,  4610 => 2822,  4606 => 2821,  4600 => 2818,  4594 => 2815,  4588 => 2812,  4582 => 2809,  4571 => 2801,  4567 => 2800,  4560 => 2796,  4554 => 2793,  4547 => 2788,  4541 => 2784,  4539 => 2783,  4536 => 2782,  4530 => 2778,  4528 => 2777,  4525 => 2776,  4519 => 2772,  4517 => 2771,  4514 => 2770,  4508 => 2766,  4506 => 2765,  4503 => 2764,  4497 => 2760,  4495 => 2759,  4492 => 2758,  4483 => 2751,  4481 => 2750,  4478 => 2749,  4471 => 2744,  4469 => 2743,  4465 => 2741,  4459 => 2737,  4457 => 2736,  4454 => 2735,  4448 => 2731,  4446 => 2730,  4443 => 2729,  4436 => 2724,  4434 => 2723,  4431 => 2722,  4424 => 2717,  4422 => 2716,  4419 => 2715,  4412 => 2710,  4410 => 2709,  4407 => 2708,  4395 => 2698,  4393 => 2697,  4390 => 2696,  4381 => 2689,  4379 => 2688,  4376 => 2687,  4369 => 2682,  4367 => 2681,  4347 => 2664,  4341 => 2661,  4334 => 2657,  4330 => 2655,  4323 => 2651,  4317 => 2648,  4313 => 2646,  4311 => 2645,  4304 => 2640,  4297 => 2636,  4283 => 2624,  4281 => 2623,  4278 => 2622,  4271 => 2618,  4267 => 2617,  4263 => 2615,  4261 => 2614,  4255 => 2611,  4251 => 2609,  4244 => 2604,  4242 => 2603,  4237 => 2600,  4231 => 2596,  4229 => 2595,  4226 => 2594,  4220 => 2590,  4218 => 2589,  4214 => 2587,  4207 => 2582,  4205 => 2581,  4202 => 2580,  4187 => 2567,  4185 => 2566,  4170 => 2553,  4168 => 2552,  4140 => 2527,  4137 => 2526,  4131 => 2522,  4129 => 2521,  4119 => 2514,  4113 => 2511,  4107 => 2508,  4100 => 2504,  4096 => 2502,  4086 => 2494,  4084 => 2493,  4081 => 2492,  4072 => 2485,  4070 => 2484,  4066 => 2482,  4060 => 2478,  4058 => 2477,  4055 => 2476,  4049 => 2472,  4047 => 2471,  4044 => 2470,  4038 => 2466,  4036 => 2465,  4033 => 2464,  4027 => 2460,  4025 => 2459,  4022 => 2458,  4016 => 2454,  4014 => 2453,  4011 => 2452,  4005 => 2448,  4003 => 2447,  4000 => 2446,  3990 => 2438,  3988 => 2437,  3985 => 2436,  3975 => 2428,  3973 => 2427,  3970 => 2426,  3964 => 2422,  3962 => 2421,  3956 => 2417,  3954 => 2416,  3951 => 2415,  3945 => 2411,  3943 => 2410,  3937 => 2406,  3935 => 2405,  3929 => 2402,  3921 => 2397,  3913 => 2392,  3905 => 2387,  3896 => 2380,  3890 => 2376,  3888 => 2375,  3885 => 2374,  3879 => 2370,  3877 => 2369,  3873 => 2367,  3863 => 2359,  3861 => 2358,  3854 => 2354,  3850 => 2352,  3844 => 2349,  3841 => 2348,  3839 => 2347,  3836 => 2346,  3830 => 2343,  3827 => 2342,  3825 => 2341,  3812 => 2331,  3804 => 2326,  3800 => 2325,  3793 => 2321,  3788 => 2318,  3776 => 2308,  3774 => 2307,  3771 => 2306,  3764 => 2301,  3762 => 2300,  3756 => 2297,  3752 => 2296,  3724 => 2271,  3718 => 2268,  3712 => 2265,  3706 => 2262,  3700 => 2259,  3694 => 2256,  3687 => 2252,  3680 => 2248,  3674 => 2245,  3667 => 2241,  3660 => 2237,  3653 => 2233,  3645 => 2228,  3640 => 2225,  3625 => 2212,  3623 => 2211,  3620 => 2210,  3614 => 2206,  3612 => 2205,  3609 => 2204,  3603 => 2200,  3601 => 2199,  3597 => 2197,  3591 => 2193,  3589 => 2192,  3585 => 2190,  3578 => 2186,  3570 => 2180,  3568 => 2179,  3565 => 2178,  3553 => 2168,  3551 => 2167,  3539 => 2157,  3533 => 2153,  3531 => 2152,  3528 => 2151,  3519 => 2144,  3517 => 2143,  3514 => 2142,  3505 => 2135,  3503 => 2134,  3499 => 2132,  3488 => 2123,  3486 => 2122,  3480 => 2119,  3472 => 2114,  3463 => 2108,  3456 => 2104,  3447 => 2098,  3441 => 2095,  3434 => 2091,  3427 => 2087,  3420 => 2083,  3411 => 2077,  3405 => 2074,  3399 => 2071,  3393 => 2068,  3389 => 2067,  3380 => 2061,  3376 => 2060,  3363 => 2050,  3359 => 2049,  3350 => 2043,  3345 => 2040,  3337 => 2034,  3335 => 2033,  3332 => 2032,  3326 => 2028,  3324 => 2027,  3316 => 2022,  3308 => 2017,  3300 => 2012,  3294 => 2009,  3285 => 2003,  3279 => 2000,  3271 => 1995,  3263 => 1990,  3249 => 1979,  3242 => 1975,  3233 => 1969,  3229 => 1968,  3225 => 1967,  3221 => 1966,  3213 => 1961,  3209 => 1960,  3205 => 1959,  3201 => 1958,  3192 => 1952,  3186 => 1949,  3173 => 1939,  3166 => 1935,  3159 => 1931,  3151 => 1926,  3145 => 1923,  3126 => 1907,  3119 => 1903,  3115 => 1901,  3102 => 1890,  3100 => 1889,  3096 => 1887,  3090 => 1883,  3088 => 1882,  3085 => 1881,  3079 => 1877,  3077 => 1876,  3074 => 1875,  3068 => 1871,  3066 => 1870,  3063 => 1869,  3057 => 1865,  3055 => 1864,  3052 => 1863,  3046 => 1859,  3044 => 1858,  3040 => 1856,  3033 => 1851,  3031 => 1850,  3028 => 1849,  3022 => 1845,  3020 => 1844,  3017 => 1843,  3011 => 1839,  3009 => 1838,  3006 => 1837,  3000 => 1833,  2998 => 1832,  2992 => 1828,  2986 => 1824,  2984 => 1823,  2981 => 1822,  2969 => 1812,  2967 => 1811,  2964 => 1810,  2952 => 1800,  2950 => 1799,  2947 => 1798,  2935 => 1788,  2933 => 1787,  2928 => 1784,  2922 => 1780,  2920 => 1779,  2917 => 1778,  2903 => 1766,  2901 => 1765,  2898 => 1764,  2881 => 1749,  2879 => 1748,  2872 => 1743,  2866 => 1739,  2864 => 1738,  2861 => 1737,  2855 => 1733,  2853 => 1732,  2850 => 1731,  2844 => 1727,  2842 => 1726,  2839 => 1725,  2833 => 1721,  2831 => 1720,  2825 => 1717,  2821 => 1716,  2812 => 1710,  2806 => 1707,  2789 => 1693,  2782 => 1689,  2775 => 1685,  2769 => 1682,  2762 => 1678,  2753 => 1672,  2749 => 1671,  2742 => 1667,  2735 => 1663,  2728 => 1659,  2718 => 1652,  2714 => 1650,  2705 => 1643,  2703 => 1642,  2700 => 1641,  2692 => 1635,  2690 => 1634,  2687 => 1633,  2681 => 1629,  2679 => 1628,  2676 => 1627,  2670 => 1623,  2668 => 1622,  2665 => 1621,  2655 => 1613,  2653 => 1612,  2650 => 1611,  2644 => 1607,  2642 => 1606,  2639 => 1605,  2633 => 1601,  2631 => 1600,  2628 => 1599,  2622 => 1595,  2620 => 1594,  2609 => 1586,  2605 => 1585,  2599 => 1582,  2593 => 1579,  2583 => 1572,  2575 => 1567,  2571 => 1566,  2563 => 1561,  2558 => 1558,  2552 => 1555,  2548 => 1554,  2540 => 1549,  2536 => 1548,  2520 => 1534,  2518 => 1533,  2515 => 1532,  2508 => 1528,  2504 => 1527,  2499 => 1524,  2497 => 1523,  2491 => 1520,  2484 => 1516,  2480 => 1515,  2474 => 1512,  2470 => 1511,  2461 => 1505,  2454 => 1501,  2447 => 1497,  2440 => 1493,  2433 => 1489,  2426 => 1485,  2419 => 1481,  2412 => 1477,  2405 => 1473,  2398 => 1469,  2392 => 1466,  2388 => 1465,  2382 => 1462,  2378 => 1461,  2371 => 1457,  2366 => 1454,  2346 => 1436,  2344 => 1435,  2338 => 1432,  2331 => 1428,  2323 => 1423,  2316 => 1419,  2312 => 1417,  2305 => 1412,  2303 => 1411,  2300 => 1410,  2291 => 1403,  2289 => 1402,  2286 => 1401,  2277 => 1394,  2275 => 1393,  2271 => 1391,  2262 => 1384,  2260 => 1383,  2149 => 1275,  2137 => 1266,  2123 => 1254,  2091 => 1226,  2089 => 1225,  2082 => 1221,  2075 => 1217,  2068 => 1212,  2062 => 1208,  2060 => 1207,  2057 => 1206,  2051 => 1202,  2049 => 1201,  2041 => 1196,  2035 => 1193,  2021 => 1182,  2014 => 1178,  2007 => 1173,  2001 => 1169,  1999 => 1168,  1996 => 1167,  1990 => 1163,  1988 => 1162,  1985 => 1161,  1979 => 1157,  1977 => 1156,  1974 => 1155,  1968 => 1151,  1966 => 1150,  1962 => 1148,  1956 => 1144,  1954 => 1143,  1951 => 1142,  1945 => 1138,  1943 => 1137,  1939 => 1135,  1933 => 1131,  1931 => 1130,  1925 => 1127,  1921 => 1125,  1915 => 1121,  1913 => 1120,  1896 => 1106,  1892 => 1104,  1886 => 1100,  1884 => 1099,  1881 => 1098,  1875 => 1094,  1873 => 1093,  1867 => 1090,  1859 => 1085,  1852 => 1081,  1846 => 1077,  1837 => 1070,  1835 => 1069,  1831 => 1067,  1814 => 1053,  1810 => 1051,  1808 => 1050,  1796 => 1041,  1789 => 1037,  1785 => 1035,  1778 => 1030,  1776 => 1029,  1772 => 1027,  1759 => 1016,  1757 => 1015,  1754 => 1014,  1748 => 1010,  1746 => 1009,  1743 => 1008,  1732 => 999,  1730 => 998,  1717 => 987,  1715 => 986,  1709 => 982,  1707 => 981,  1696 => 972,  1694 => 971,  1688 => 968,  1678 => 961,  1674 => 960,  1668 => 957,  1664 => 956,  1658 => 953,  1654 => 951,  1646 => 946,  1642 => 944,  1640 => 943,  1637 => 942,  1626 => 933,  1624 => 932,  1621 => 931,  1615 => 927,  1613 => 926,  1610 => 925,  1604 => 921,  1602 => 920,  1599 => 919,  1593 => 916,  1590 => 915,  1588 => 914,  1582 => 911,  1575 => 906,  1569 => 902,  1567 => 901,  1564 => 900,  1558 => 897,  1552 => 894,  1546 => 891,  1530 => 877,  1528 => 876,  1525 => 875,  1519 => 871,  1517 => 870,  1514 => 869,  1505 => 862,  1503 => 861,  1500 => 860,  1494 => 856,  1492 => 855,  1489 => 854,  1483 => 850,  1481 => 849,  1478 => 848,  1471 => 843,  1469 => 842,  1466 => 841,  1459 => 836,  1457 => 835,  1452 => 832,  1443 => 825,  1441 => 824,  1438 => 823,  1432 => 819,  1430 => 818,  1427 => 817,  1420 => 812,  1418 => 811,  1415 => 810,  1409 => 807,  1403 => 804,  1397 => 801,  1381 => 787,  1379 => 786,  1376 => 785,  1370 => 781,  1368 => 780,  1363 => 777,  1357 => 773,  1355 => 772,  1352 => 771,  1346 => 767,  1344 => 766,  1341 => 765,  1335 => 761,  1333 => 760,  1327 => 756,  1320 => 752,  1316 => 751,  1312 => 750,  1309 => 749,  1307 => 748,  1304 => 747,  1298 => 744,  1291 => 740,  1287 => 739,  1283 => 738,  1280 => 737,  1278 => 736,  1273 => 733,  1266 => 729,  1262 => 728,  1258 => 727,  1255 => 726,  1253 => 725,  1250 => 724,  1243 => 720,  1239 => 719,  1235 => 718,  1232 => 717,  1230 => 716,  1226 => 714,  1213 => 703,  1211 => 702,  1206 => 699,  1195 => 690,  1193 => 689,  1189 => 687,  1176 => 676,  1174 => 675,  1171 => 674,  1165 => 671,  1158 => 667,  1151 => 663,  1136 => 650,  1134 => 649,  1131 => 648,  1124 => 643,  1122 => 642,  1116 => 638,  1110 => 634,  1108 => 633,  1105 => 632,  1099 => 629,  1093 => 626,  1087 => 623,  1071 => 609,  1069 => 608,  1066 => 607,  1059 => 602,  1057 => 601,  1054 => 600,  1045 => 593,  1043 => 592,  1040 => 591,  1034 => 587,  1032 => 586,  1029 => 585,  1023 => 581,  1021 => 580,  1018 => 579,  1011 => 574,  1009 => 573,  1005 => 571,  999 => 567,  997 => 566,  994 => 565,  987 => 560,  985 => 559,  982 => 558,  975 => 553,  973 => 552,  967 => 548,  961 => 544,  959 => 543,  956 => 542,  944 => 532,  942 => 531,  938 => 529,  932 => 526,  929 => 525,  927 => 524,  924 => 523,  918 => 520,  912 => 516,  910 => 515,  907 => 514,  901 => 510,  899 => 509,  896 => 508,  887 => 501,  885 => 500,  882 => 499,  876 => 495,  874 => 494,  869 => 491,  863 => 488,  860 => 487,  858 => 486,  855 => 485,  849 => 482,  843 => 478,  841 => 477,  838 => 476,  832 => 472,  830 => 471,  827 => 470,  818 => 463,  816 => 462,  813 => 461,  807 => 457,  805 => 456,  801 => 454,  795 => 451,  792 => 450,  790 => 449,  787 => 448,  781 => 445,  778 => 444,  776 => 443,  773 => 442,  767 => 438,  765 => 437,  762 => 436,  756 => 432,  754 => 431,  751 => 430,  745 => 426,  743 => 425,  740 => 424,  734 => 420,  732 => 419,  729 => 418,  720 => 411,  718 => 410,  712 => 406,  703 => 399,  701 => 398,  698 => 397,  692 => 393,  690 => 392,  687 => 391,  680 => 386,  678 => 385,  675 => 384,  669 => 381,  663 => 378,  657 => 375,  641 => 361,  639 => 360,  632 => 356,  625 => 352,  619 => 349,  615 => 347,  609 => 343,  607 => 342,  603 => 340,  591 => 330,  589 => 329,  586 => 328,  574 => 318,  572 => 317,  569 => 316,  562 => 311,  560 => 310,  554 => 306,  548 => 302,  546 => 301,  543 => 300,  537 => 297,  534 => 296,  532 => 295,  529 => 294,  523 => 291,  520 => 290,  518 => 289,  513 => 286,  507 => 282,  505 => 281,  502 => 280,  496 => 277,  493 => 276,  491 => 275,  488 => 274,  482 => 271,  479 => 270,  477 => 269,  473 => 267,  467 => 264,  464 => 263,  462 => 262,  459 => 261,  453 => 258,  450 => 257,  448 => 256,  444 => 254,  438 => 250,  436 => 249,  433 => 248,  427 => 244,  425 => 243,  419 => 239,  410 => 232,  408 => 231,  405 => 230,  396 => 223,  394 => 222,  391 => 221,  385 => 217,  383 => 216,  379 => 214,  373 => 210,  371 => 209,  365 => 205,  363 => 204,  357 => 200,  355 => 199,  350 => 196,  344 => 192,  342 => 191,  339 => 190,  328 => 181,  326 => 180,  323 => 179,  313 => 171,  311 => 170,  308 => 169,  301 => 164,  299 => 163,  296 => 162,  286 => 154,  284 => 153,  278 => 149,  272 => 145,  270 => 144,  266 => 142,  255 => 133,  253 => 132,  250 => 131,  239 => 122,  237 => 121,  234 => 120,  228 => 116,  226 => 115,  223 => 114,  217 => 111,  211 => 108,  205 => 104,  203 => 103,  200 => 102,  188 => 93,  182 => 89,  180 => 88,  177 => 87,  165 => 78,  160 => 75,  158 => 74,  154 => 72,  147 => 67,  145 => 66,  138 => 62,  133 => 59,  127 => 55,  125 => 54,  122 => 53,  110 => 43,  108 => 42,  104 => 40,  98 => 36,  96 => 35,  93 => 34,  87 => 31,  84 => 30,  82 => 29,  75 => 25,  70 => 22,  64 => 19,  56 => 14,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* /* Control Panel Settings *//* */
/* {% for selector in selectors %}*/
/*   {% if selector.properties %}*/
/*     {{ selector.selector }} { {{ selector.properties | join(';') }} }*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
/* /* Swipebox Loader *//* */
/* {% if journal2.settings.get('ajax-loader') %}*/
/*   #swipebox-slider .slide {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/*   .mfp-iframe-scaler iframe {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   background-repeat: no-repeat;*/
/*   background-position: center;*/
/*   }*/
/*   .social {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width: 760px){*/
/* .ui-pnotify{*/
/* width: {{ journal2.settings.get('notification_width', 350) }}px !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('leading_element') %}*/
/*   .home-page #container:before{*/
/*   content: url('image/{{ journal2.settings.get("leading_element") }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_position') == 'right' %}*/
/*   .quickview .product-info .heading-title{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_page_qty_status', 'on') == 'off' %}*/
/*   .product-info .right .cart div .qty{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .cart div .button{*/
/*   width:100%;*/
/*   }*/
/*   .quickview #button-cart {*/
/*   width: calc(98% - 40px);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('hide_cart', 'off') == 'on' %}*/
/*   .journal-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Site width *//* */
/* #container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {*/
/* max-width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_status', 'block') == 'none' %}*/
/*   ul.breadcrumb,*/
/*   .extended-container::before{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('bottom_caption', 'on') == 'off' %}*/
/*   div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   background-color:{{ journal2.settings.get('gallery_bars_bg') }};*/
/*   }*/
/*   .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'off' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   padding: 13px 95px 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/*   .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'on' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:auto;*/
/*   bottom:0;*/
/*   padding: 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_caption_bar_bg') }};*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_options_sold_count_position', 'none') == 'inline-block' %}*/
/*   .product-sold-count.ps-left{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_overflow', 'on') == 'off' %}*/
/*   .product-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('category_page_title_overflow', 'on') == 'off' %}*/
/*   .category-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('hide_category_image', '1') == '0' %}*/
/*   .category-info .image{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /*Notification Position*//* */
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-left' %}*/
/*   .ui-pnotify{*/
/*   left:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:20px;*/
/*   left:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-right' %}*/
/*   .ui-pnotify{*/
/*   right:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   left:20px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   top:50% !important;*/
/*   transform: translate(-50%, -50%);*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:auto !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_shadow', '0') == '1' %}*/
/*   .ui-pnotify{*/
/*   box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'hover' %}*/
/*   .ui-pnotify:hover .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'always' %}*/
/*   .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'never' %}*/
/*   .ui-pnotify-closer:hover{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'left' %}*/
/*   .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'center' %}*/
/*   .breadcrumb{*/
/*   text-align:center*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'right' %}*/
/*   .breadcrumb{*/
/*   text-align:right;*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Shadow *//* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .journal-carousel .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .custom-sections .product-grid-item .product-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .custom-sections .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/*   {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*     .custom-sections .product-grid-item .product-wrapper{*/
/*     box-shadow: none !important;*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/* */
/* */
/*   {% if journal2.settings.get('product_grid_latest_label_status', 'block') == 'none' %}*/
/*     .product-grid-item .image .label-latest + .label-sale{*/
/*     top: 5px;*/
/*     margin-top: 0;*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('left_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-left{*/
/*     display: none;*/
/*     }*/
/*     #column-left + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-left:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('right_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-right{*/
/*     display: none;*/
/*     }*/
/*     #column-right + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-right:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/*   {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'text' %}*/
/*     .product-grid-item .cart .button-left-icon:before{*/
/*     display:none;*/
/*     }*/
/*   {% endif %}*/
/* */
/* .product-grid-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_grid_button_icon:color') }};*/
/* }*/
/* .product-list-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_list_button_icon:color') }};*/
/* }*/
/* */
/* footer .contacts > div > span .contact-icon:hover{*/
/* background-color:{{ journal2.settings.get('contacts_icon_bg_hover') }};*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .cart .button[data-hint]:after,*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .cart .button-left-icon::before,*/
/*   .product-grid-item .enquiry-button i::before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .cart .button-right-icon{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .cart .button-left-icon{*/
/*   display:none !important;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* BLOG *//* */
/* */
/* {% if journal2.settings.get('post_grid_button_icon_position', 'left') == 'right' or journal2.settings.get('posts_grid_button_icon_position', 'left') == 'right' %}*/
/*   .post-button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .post-button-right-icon{*/
/*   display:inline;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_title_status', 'on') == 'off' %}*/
/*   .one-page-checkout h1.heading-title{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'none' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'hover' %}*/
/*   .product-details:before {*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   transition: all 0.2s;*/
/*   }*/
/*   .product-grid-item:hover .product-details:before {*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'never' %}*/
/*   .product-details:before {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Quickview*//* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'never' %}*/
/*   .product-grid-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .rating{*/
/*   margin-top:-28px;*/
/*   transition: all 0.1s ease-out;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .rating{*/
/*   margin-top:-28px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before,*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .quickview-button [data-hint]:after,*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Wishlist/Compare *//* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .button-wishlist-text,*/
/*   .product-grid-item .button-compare-text{*/
/*   display: none;*/
/*   }*/
/*   .product-grid-item .wishlist [data-hint]:after,*/
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare [data-hint]:after,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   display:block;*/
/*   }*/
/* */
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--right:before,*/
/*   .product-grid-item .compare .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--left:before,*/
/*   .product-grid-item .compare .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   border:0;*/
/*   background-color:transparent !important;*/
/*   padding:0 5px;*/
/*   }*/
/*   .product-grid-item .wishlist a i:before,*/
/*   .product-grid-item .compare a i:before{*/
/*   line-height:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .product-details .wishlist,*/
/*   .product-grid-item .product-details .compare,*/
/*   .product-list-item .image .wishlist,*/
/*   .product-list-item .image .compare,*/
/*   .product-grid-item .image .button-wishlist-text,*/
/*   .product-grid-item .image .button-compare-text{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_on_hover', 'on') == 'on' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', '') == 'icon' %}*/
/*   .product-grid-item .image .wishlist,*/
/*   .product-grid-item .image .compare{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-grid-item:hover .image .wishlist,*/
/*   .product-grid-item:hover .image .compare{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_list_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_list_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_grid_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .cart{*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_grid_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List *//* */
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'hover' %}*/
/*   .product-list-item:hover{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'always' %}*/
/*   .product-list-item{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'never' %}*/
/*   .product-list-item{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .cart .button[data-hint]:after,*/
/*   .product-list-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .cart .button-left-icon:before,*/
/*   .product-list-item .enquiry-button i:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .cart .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .cart .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List Quickview*//* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'hover' %}*/
/*   .product-list-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'always' %}*/
/*   .product-list-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'never' %}*/
/*   .product-list-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button[data-hint]:after,*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Page *//* */
/* */
/* #product-gallery.image-additional-grid a{*/
/* width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel', '1') == '0' %}*/
/*   .product-info .left .image-additional{*/
/*   margin-right: -{{ journal2.settings.get('product_page_additional_spacing') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'left' %}*/
/*   #button-cart .button-cart-text:after{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'right' %}*/
/*   #button-cart .button-cart-text:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel_arrows', 'hover') == 'hover' %}*/
/*   .product-info .left .image-additional .swiper-button-prev,*/
/*   .product-info .left .image-additional .swiper-button-next{*/
/*   display:none;*/
/*   }*/
/*   .product-info .left .image-additional:hover .swiper-button-prev,*/
/*   .product-info .left .image-additional:hover .swiper-button-next{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('boxed_header', '0') == '1' and journal2.settings.get('boxed_header_above', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   #top-modules > div:first-of-type.journal2_slider{*/
/*   margin-top:-{{ journal2.settings.get('boxed_top_spacing') + 120 }}px;*/
/*   position:relative;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .compare-info td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list{*/
/* border-bottom-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-top-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* */
/* */
/* /* Product Labels*//* */
/* */
/* .label-latest + .label-sale{*/
/* top: {{ journal2.settings.get('label_latest_height') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('label_latest_status', 'always') == 'hover' %}*/
/*   .label-latest{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_latest_status', 'always') == 'never' %}*/
/*   .label-latest{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_special_status', 'always') == 'hover' %}*/
/*   .label-sale{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* */
/* */
/* {% endif %}*/
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'hover' %}*/
/*   .label-outofstock{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'never' %}*/
/*   .label-outofstock{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_style', 'diagonal') == 'normal' %}*/
/*   span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/*   html[dir="rtl"] span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(-5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_latest_label_status', 'block') == 'none' %}*/
/*   .product-list-item .image .label-latest + .label-sale{*/
/*   top: 5px;*/
/*   margin-top: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* #more-details.hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('quickview_more_details_tip_bg') }};*/
/* }*/
/* */
/* .boxed-header header{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* .boxed-header .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .boxed-header .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('boxed_menu_off', '1') == '0' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .boxed-header .is-sticky header .header{*/
/*   max-width:{{ journal2.settings.get('site_width') }}px;*/
/*   left: 50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/*   }*/
/*   .is-sticky .header {*/
/*   box-shadow: none;*/
/*   background: transparent;*/
/*   }*/
/*   .is-sticky .journal-menu-bg {*/
/*   background-color:transparent;*/
/*   background-image:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('pp_gallery_name_overflow', 'on') == 'off' %}*/
/*   div.lg-sub-html > span{*/
/*   white-space:normal;*/
/*   }*/
/*   div.lg-sub-html {*/
/*   padding: 20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-language .dropdown-toggle,*/
/* .journal-currency .dropdown-toggle{*/
/* color:{{ journal2.settings.get('full_text_font_phone') }};*/
/* }*/
/* .journal-header-center #language,*/
/* .journal-header-center #currency{*/
/* border-color:{{ journal2.settings.get('lang_divider_phone') }};*/
/* }*/
/* }*/
/* */
/* .sticky-menu .is-sticky .journal-header-default .header{*/
/* background-color: {{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' %}*/
/*   .phone-input label::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' and journal2.settings.get('one_page_show_phone', 'block') == 'none' %}*/
/*   #content.one-page-checkout div fieldset > div.phone-input{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* html[dir="rtl"] .journal-carousel .htabs a:last-of-type{*/
/* border-left-color:{{ journal2.settings.get('carousel_title_divider') }};*/
/* }*/
/* */
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 10px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-search{*/
/* padding-left: 20px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 10px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'none' %}*/
/*   #cart{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center .journal-center-bg{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'default' %}*/
/*   #cart {*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'none' %}*/
/*   #cart .cart-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'default' %}*/
/*   #cart .cart-wrapper {*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'none' %}*/
/*   #search input{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'default' %}*/
/*   #search input{*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'none' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'default' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 760px) {*/
/* ul.super-menu > li > a,*/
/* ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* ul.super-menu > li,*/
/* ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* .boxed-header .journal-header-center .journal-search,*/
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 0;*/
/* }*/
/* .boxed-header .journal-header-center .journal-cart,*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 0;*/
/* }*/
/* .button-search{*/
/* background-color:{{ journal2.settings.get('search_button_bg_mobile') }};*/
/* }*/
/* .button-search i:before{*/
/* color:{{ journal2.settings.get('search_icon_color_mobile') }} !important;*/
/* }*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_compare', 'inline-block') == 'inline-block' %}*/
/*   .product-filter .product-compare {*/
/*   display: flex;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_compare_link_status', 'on') == 'off' %}*/
/*   .product-filter .product-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 980px) {*/
/* .mobile-menu-on-tablet ul.super-menu > li > a,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.super-menu > li,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('responsive_design') == '1' %}*/
/*   @media only screen and (min-width:760px) and (max-width:{{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   .journal-header-center .journal-search{*/
/*   padding-left: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   padding-right: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   width:calc(25% - 20px);*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-right: 15px;*/
/*   }*/
/*   }*/
/*   @media only screen and (max-width:760px) {*/
/*   .journal-header-center .journal-search,*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-left: 0;*/
/*   padding-right: 0;*/
/*   }*/
/*   .journal-header-center .journal-cart,*/
/*   html[dir="rtl"] .journal-header-center .journal-cart{*/
/*   padding-right: 0;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (min-width: 760px){*/
/* .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:15px;*/
/* }*/
/* html[dir="rtl"] .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:0;*/
/* padding-left:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') }}px) {*/
/* .sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {*/
/* margin-left: 0;*/
/* }*/
/* .skin-16 .journal-header-mega .journal-search {*/
/* padding-right: 0;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .super-menu, .mega-menu, .html-menu{*/
/* border-radius:0;*/
/* }*/
/* .bottom-footer.fullwidth-bar .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .bottom-footer.fullwidth-bar .payments{*/
/* padding-right: 15px;*/
/* }*/
/* */
/* #top-modules > div:not(.gutter),*/
/* #bottom-modules > div:not(.gutter){*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* */
/* #top-modules .journal2_slider,*/
/* #bottom-modules .journal2_slider,*/
/* #top-modules .journal2_headline_rotator{*/
/* padding-left: 0 !important;*/
/* padding-right: 0 !important;*/
/* }*/
/* */
/* .no-secondary .journal-header-center #currency{*/
/* border-right-width:0;*/
/* }*/
/* .no-secondary .journal-header-center #language{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #currency{*/
/* border-left-width:0;*/
/* border-right-width:1px;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #language{*/
/* border-right-width:0;*/
/* border-left-width:1px;*/
/* }*/
/* .journal-header-compact #header .journal-search {*/
/* padding-right:15px !important;*/
/* }*/
/* html[dir="rtl"] .journal-header-compact #header .journal-search {*/
/* padding-right:0 !important;*/
/* padding-left:15px !important;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* .boxed-header body{*/
/* padding:0;*/
/* }*/
/* .fullwidth-footer .columns{*/
/* padding-left: 15px;*/
/* }*/
/* .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:0;*/
/* }*/
/* }*/
/* */
/* .boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"].boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) {*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* left: 60px !important;*/
/* }*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* right: 60px !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* right: 60px !important;*/
/* left: auto !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* left: 60px !important;*/
/* right: auto !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('quickview_more_details', '1') == '0' %}*/
/*   .quickview #more-details{*/
/*   display:none;*/
/*   }*/
/*   .quickview #button-cart{*/
/*   width:63%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .journal-header-mega #logo a img{*/
/*   left: 0;*/
/*   transform: translate(0, -50%);*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   html[dir="rtl"] .journal-header-mega #logo a img{*/
/*   left: auto;*/
/*   right:0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_menu_shadow', 'none') == 'none' %}*/
/*   header .links a,*/
/*   header .links .no-link{*/
/*   border-bottom-color:#e4e4e4;*/
/*   }*/
/* {% endif %}*/
/* */
/* .boxed-header.default-header .journal-top-header{*/
/* clip: rect(0px,{{ journal2.settings.get('site_width') }}px,45px,0px);*/
/* }*/
/* */
/* .journal-header-default .links .no-link{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }}*/
/* }*/
/* */
/* .journal-header-center #cart .content:before,*/
/* .oc2 #cart .content .cart-wrapper:before{*/
/* color:{{ journal2.settings.get('cart_content_bg') }}*/
/* }*/
/* */
/* .journal-header-center .autocomplete2-suggestions:before{*/
/* color:{{ journal2.settings.get('autosuggest_bg') }}*/
/* }*/
/* */
/* {% if journal2.settings.get('top_menu_icons_display', 'inline') == 'block' %}*/
/*   header .links a i,*/
/*   .links .no-link i,*/
/*   .journal-header-default #header .journal-links .top-menu > li > a{*/
/*   display:block;*/
/*   }*/
/*   header .links a i,*/
/*   .links .no-link i{*/
/*   margin-top:3px;*/
/*   }*/
/*   header .links .top-menu-link{*/
/*   position:relative;*/
/*   top:-2px;*/
/*   }*/
/*   .has-dropdown::after {*/
/*   margin-left: 2px;*/
/*   top: -3px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-language .dropdown-menu:before,*/
/* .journal-currency .dropdown-menu:before{*/
/* color:{{ journal2.settings.get('lang_drop_bg') }}*/
/* }*/
/* */
/* #header .top-menu .top-dropdown li:first-of-type {*/
/* border-top-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-top-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:last-of-type {*/
/* border-bottom-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-bottom-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:first-of-type::before{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* .compare-info tbody td{*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* @media only screen and (max-width: 760px){*/
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* }*/
/* */
/* .button-search{*/
/* border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-right-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* html[dir="rtl"] .button-search{*/
/* border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-left-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-left{*/
/* border-left-style: {{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('top_divider_phone', 'off') == 'on' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .center-header #search, .default-header #search{*/
/*   border-top-width:1px;*/
/*   border-top-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-top-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_button_pos', 'left') == 'right' %}*/
/*   .button-search {*/
/*   right: 0;*/
/*   }*/
/*   html[dir="rtl"] .button-search {*/
/*   right: auto;*/
/*   left:0;*/
/*   }*/
/*   #search input {*/
/*   padding-left: 12px;*/
/*   padding-right: 50px;*/
/*   }*/
/*   .button-search{*/
/*   border-right-width:0;*/
/*   border-left-width:1px;*/
/*   border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-left-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   html[dir="rtl"] .button-search{*/
/*   border-left-width:0;*/
/*   border-right-width:1px;*/
/*   border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-right-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* header .journal-login{*/
/* border-bottom-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* */
/* .super-menu > li:last-of-type{*/
/* border-right-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .default-header .journal-login{*/
/* background-color: {{ journal2.settings.get('secondary_menu_bg_color_mobile') }}*/
/* }*/
/* .journal-header-center #search input,*/
/* .journal-header-center .button-search{*/
/* border-radius:0;*/
/* }*/
/* .center-header #search input, .default-header #search input{*/
/* background-color:{{ journal2.settings.get('search_bg_mobile') }};*/
/* }*/
/* .center-header header #cart, .default-header header #cart{*/
/* background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/* }*/
/* .journal-menu .mobile-menu > li{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* }*/
/* */
/* .inline-button .product-details{*/
/* padding-bottom:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_button_block_button', 'block-button') == 'inline-button' and journal2.settings.get('catalog_grid_cart', 'block') == 'block' %}*/
/*   .product-grid-item .cart{*/
/*   display:inline-block !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .mega-menu .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' %}*/
/*   .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_cart', 'block') == 'none' %}*/
/*   .quickview .product-info .right .cart{*/
/*   display:table;*/
/*   }*/
/*   .product-info .right .cart div .qty,*/
/*   .product-info .right .cart div #button-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' %}*/
/*   .custom-sections .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' %}*/
/*   .side-column .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' %}*/
/*   #content .journal-carousel .product-grid-item .product-details .cart,*/
/*   #top-modules .journal-carousel .product-grid-item .product-details .cart,*/
/*   #bottom-modules .journal-carousel .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_status', '1') == '0' %}*/
/*   .product-info .right .options h3{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .option-image:first-of-type{*/
/*   margin-top:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* .product-info .right .options.push-1 .option-image li.selected span img{*/
/* border-color:{{ journal2.settings.get('product_page_options_push_image_border_hover') }};*/
/* }*/
/* */
/* .mega-menu-categories .mega-menu-item,*/
/* .mega-menu-brands .mega-menu-item,*/
/* .mega-menu-html .mega-menu-item,*/
/* #header .mega-menu .product-grid-item{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* }*/
/* */
/* .mega-menu > div{*/
/* margin-bottom:-{{ journal2.settings.get('menu_categories_item_margin') }}px !important;*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .mega-menu-item > div,*/
/* html[dir="rtl"] #header .mega-menu .product-wrapper{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu .mega-menu-column:last-of-type > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column.mega-menu-products > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu-column > div > h3, html[dir="rtl"] .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* .mega-menu .mega-menu-column:last-of-type > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > div > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > .menu-cms-block,*/
/* .mega-menu .mega-menu-column.mega-menu-html-block > div{*/
/* margin-right:0;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* border-width:0;*/
/* }*/
/* .mega-menu .mega-menu-column > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* margin-right:0;*/
/* }*/
/* }*/
/* */
/* .journal-sf .sf-image .box-content ul{*/
/* margin-bottom:-{{ journal2.settings.get('filter_image_section_margin_bottom') }}px;*/
/* margin-right:-{{ journal2.settings.get('filter_image_section_margin_right') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' %}*/
/*   .p-author, .p-posted{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_date', 'on') == 'off' %}*/
/*   .p-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .p-comment{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' and journal2.settings.get('blog_show_date', 'on') == 'off' and journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .comment-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right: 12px;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-voucher{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-reward{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('dropdown_shadow', 'none') == 'none' %}*/
/*   .drop-down ul{*/
/*   box-shadow:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_product_page_compare', 'inline-block') == 'none' %}*/
/*   .product-info .right .wishlist-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_name', 'table') == 'none' or journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' or journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   padding-top:13px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .product-grid-item .price + hr,*/
/*   .product-grid-item .price + .rating + hr{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_cs_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_main_menu_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('contacts_display', 'off') == 'on' %}*/
/*   footer .contacts{*/
/*   text-align:center;*/
/*   }*/
/*   footer .contacts-left,*/
/*   html[dir="rtl"] footer .contacts-left{*/
/*   float: none;*/
/*   }*/
/*   footer .contacts-right{*/
/*   display: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .has-cta .rotator-tex{*/
/* line-height:{{ journal2.settings.get('cta_button_height') }}px;*/
/* }*/
/* */
/* footer .contacts .hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('footer_tooltip_bg_color') }};*/
/* }*/
/* */
/* */
/* .side-column .box-category,*/
/* .side-column .box-content,*/
/* .side-column .box-content > div,*/
/* .side-column .box-content > ul > li:last-of-type,*/
/* .side-column .oc-module .product-grid-item:last-of-type{*/
/* border-bottom-left-radius: inherit;*/
/* border-bottom-right-radius: inherit;*/
/* border-radius:inherit;*/
/* }*/
/* */
/* */
/* .journal-sf ul li label:hover{*/
/* color:{{ journal2.settings.get('filter_active_text') }};*/
/* }*/
/* .sf-icon:before{*/
/* border-top-color:{{ journal2.settings.get('reset_tip_bg') }};*/
/* }*/
/* */
/* /**/
/* .journal-sf ul li label:hover img{*/
/* border-color:{{ journal2.settings.get('filter_active_border') }};*/
/* } *//* */
/* */
/* .sf-price .value:after{*/
/* border-bottom-color:{{ journal2.settings.get('filter_price_tip') }};*/
/* }*/
/* */
/* .mobile-trigger{*/
/* background-color:{{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* */
/* .journal-header-default .links > a{*/
/* border-bottom-color: transparent;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* background-color:{{ journal2.settings.get('mega_menu_bg') }};*/
/* }*/
/* .journal-header-default .links > a{*/
/* border-bottom-color: {{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* }*/
/* .nav-numbers a:hover,*/
/* .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* }*/
/* .headline-mode .nav-numbers a:hover,*/
/* .headline-mode .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* }*/
/* .tp-bullets.simplebullets.round .bullet.selected,*/
/* .tp-bullets.simplebullets.round .bullet:hover,*/
/* .journal-simple-slider .owl-controls .owl-page.active span,*/
/* .journal-simple-slider .owl-controls.clickable .owl-page:hover span{*/
/* transform: scale({{ journal2.settings.get('slider_bullet_scale') }});*/
/* }*/
/* */
/* .swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{*/
/* transform: scale({{ journal2.settings.get('carousel_bullet_scale') }});*/
/* }*/
/* */
/* @media only screen and (max-width: 980px) {*/
/* .journal-header-default .mega-menu{*/
/* width: 100%;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .journal-header-center .journal-secondary{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* }*/
/* */
/* .mega-menu{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .bottom-menu-bar #header .top-menu > li{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links{*/
/* background-color:{{ journal2.settings.get('top_menu_bg_color') }};*/
/* }*/
/* .bottom-menu-bar .journal-header-center .journal-secondary {*/
/* border-top-width: 0;*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li{*/
/* border-color:{{ journal2.settings.get('bottom_bar_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{*/
/* background-color:{{ journal2.settings.get('bottom_bar_bg_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{*/
/* color:{{ journal2.settings.get('bottom_bar_color') }};*/
/* }*/
/* }*/
/* */
/* .boxed-header .is-sticky .header {*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* left: 50%;*/
/* transform: translateX(-50%);*/
/* }*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' %}*/
/*   .is-sticky .super-menu, .is-sticky .journal-menu-bg {*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' and journal2.settings.get('boxed_menu_off', '0') == '1' %}*/
/*   html.boxed-header .is-sticky .header {*/
/*   max-width:100%;*/
/*   left:0;*/
/*   transform: translateX(0);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }};*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .mobile-menu > li > ul,*/
/* .mobile-menu-on-tablet .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.menu-centered{*/
/* height:auto;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .mobile-menu > li > ul,*/
/* .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: 760px) {*/
/* .journal-header-mega #search {*/
/* max-width: {{ journal2.settings.get('search_width', '100') }}%;*/
/* left: {{ journal2.settings.get('search_offset', '0') }}px;*/
/* }*/
/* .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/* }*/
/* .journal-header-center .journal-menu-bg{*/
/* top:{{ journal2.settings.get('header_height_input', '100') + 40 + journal2.settings.get('top_bar_height', '40') - 40 }}px;*/
/* }*/
/* .journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{*/
/* height:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-menu,*/
/* .journal-header-center .journal-menu-bg,*/
/* .journal-header-center .mobile-trigger,*/
/* ul.menu-centered{*/
/* height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .mobile-trigger,*/
/* .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-language form .dropdown-menu,*/
/* .journal-header-center .journal-currency form .dropdown-menu{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* .sticky-default.center-header .is-sticky .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* .sticky-default.center-header .is-sticky .journal-menu-bg{*/
/* top:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* */
/* .is-sticky .journal-header-center .journal-menu,*/
/* .is-sticky .journal-header-center .journal-menu-bg,*/
/* .is-sticky .journal-header-center .mobile-trigger{*/
/* height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* .is-sticky .journal-header-center .mobile-trigger,*/
/* .is-sticky .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* #header .journal-logo{*/
/* height:{{ journal2.settings.get('header_height_input_phone', '') }}px !important;*/
/* }*/
/* }*/
/* */
/* .center-header body.is-sticky .header-assets.top-bar{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_on_phone', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   #header .journal-logo {*/
/*   display: none;*/
/*   }*/
/*   .journal-header-center .journal-secondary {*/
/*   border-bottom-width: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'tablet' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'phone' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('header_box_shadow_type', 'none') == 'default' %}*/
/*   .header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .journal-header-center .journal-menu{*/
/* height:auto;*/
/* }*/
/* .mobile-menu-on-tablet .journal-header-center .super-menu > li > a{*/
/* line-height:40px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_show_category_images', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .mega-menu-categories .mega-menu-item ul,*/
/*   .mega-menu-categories .mega-menu-item.menu-image-left ul{*/
/*   width:100%;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item img {*/
/*   display: none !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('remove_top_bar', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .header-assets.top-bar,*/
/*   .journal-top-header{*/
/*   display:none;*/
/*   }*/
/*   .journal-header-center .journal-menu-bg{*/
/*   top:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('side_modules_margin', 'on') == 'off' %}*/
/*   .side-column .box{*/
/*   margin-bottom:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_price_full', 'inline-block') == 'block' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('filter_image_size', 'medium') == 'tiny' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_two_per_row', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .box-sections ul li {*/
/*   width: 100%;*/
/*   border-right-width: 0;*/
/*   }*/
/*   .box-sections ul li:nth-last-child(2):nth-child(odd) {*/
/*   border-bottom-width: 1px;*/
/*   }*/
/*   html[dir="rtl"] .box-sections ul li {*/
/*   border-right-width: 0 !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* #tabs{*/
/* top:{{ (journal2.settings.get('product_page_tabs_content_border:border-width')) }};*/
/* }*/
/* */
/* .product-grid-item.display-icon .wishlist-icon:before,*/
/* .product-grid-item.display-icon .compare-icon:before{*/
/* line-height:{{ journal2.settings.get('product_grid_wishlist_icon_bg_height') }}px;*/
/* }*/
/* */
/* .journal-header-center #cart .heading i{*/
/* height:{{ 40 - (journal2.settings.get('cart_heading_border:border-width', 0) * 2) }}px;*/
/* }*/
/* */
/* .journal-desktop .menu-floated .float-left{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* .column.products > h3{*/
/* margin-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* .column.products{*/
/* padding-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* */
/* .side-column .journal-gallery .box-heading{*/
/* margin-bottom:{{ 10 - journal2.settings.get('side_gallery_padding') }}px;*/
/* }*/
/* */
/* .side-column .box-category > ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 2 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 3 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 4 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 5 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .breadcrumb{*/
/* padding-left:10px;*/
/* }*/
/* .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:first-of-type{*/
/* border-left-width:1px;*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:last-of-type{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu.menu-floated > li:first-of-type*/
/* border-right-width:0;*/
/* }*/
/* }*/
/* */
/* .super-menu.menu-floated{*/
/* border-right-width:1px;*/
/* border-left-width:1px;*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type', 'solid') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('cs_fullwidth_divider', 'off') == 'on' %}*/
/*   .custom-sections .box-heading.box-sections{*/
/*   border-left-width:1px;*/
/*   border-right-width:1px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_unite', '1') == '0' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'button' %}*/
/* */
/*   .product-grid-item .wishlist,*/
/*   .product-grid-item .compare{*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .button-group{*/
/*   display: flex;*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .custom-sections .box-heading.box-sections{*/
/* border-left-style:{{ journal2.settings.get('cs_title_divider_type') }};*/
/* }*/
/* */
/* .journal-carousel:not(.journal-gallery) .box-content .swiper-container{*/
/* padding: {{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* margin: -{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .journal-carousel.arrows-top .swiper-button-prev,*/
/* .journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .side-column .journal-carousel.arrows-top .swiper-button-prev,*/
/* .side-column .journal-carousel.arrows-top .swiper-button-next,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-prev,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('footer_top_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-top:{{ journal2.settings.get('footer_custom_top_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_bottom_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-bottom:{{ journal2.settings.get('footer_custom_bottom_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .extended-container + .boxed-footer #footer{*/
/* margin-top:{{ journal2.settings.get('footer_custom_top_margin') - journal2.settings.get('container_bottom_spacing') }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('carousel_title_side_margin', 'on') == 'off' %}*/
/*   .side-column .journal-carousel .htabs {*/
/*   margin-bottom: 0;*/
/*   }*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {*/
/*   margin-top:20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'center' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'right' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* .side-column .journal-carousel .box-content .swiper-container{*/
/* padding:0;*/
/* margin:0;*/
/* }*/
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-prev{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_side_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-prev{*/
/* left:auto;*/
/* right:{{ journal2.settings.get('carousel_side_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:center;*/
/*   justify-content: center;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:left;*/
/*   justify-content: flex-start;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('post_title_overflow', 'on') == 'off' %}*/
/*   .blog-post .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding:8px 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('module_title_overflow', 'on') == 'off' %}*/
/*   .post-module .box-heading{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding-top:8px;*/
/*   padding-bottom:8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .posts.blog-list-view .post-item-details{*/
/* width: {{ 100 - journal2.settings.get('post_list_image_width', '33.333333') }}%;*/
/* }*/
/* */
/* .side-column .box.cms-blocks .box-heading{*/
/* margin-bottom:{{ journal2.settings.get('side_cms_margin') }}px;*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .safari5 #footer,*/
/* .safari5.boxed-header header{*/
/* width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* .tp-banner{*/
/* height:100% !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_ratio', 'on') == 'off' %}*/
/*   #logo a img{*/
/*   height:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* */
/* .tp-banner-container{*/
/* height:auto !important;*/
/* }*/
/* */
/* .side-column .oc-module .product-details {*/
/* max-width: 130px;*/
/* }*/
/* .checkout-page #content {*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .has-countdown + .product-details .rating{*/
/* top:-50px;*/
/* }*/
/* .product-grid-item .image.has-countdown .wishlist,*/
/* .product-grid-item .image.has-countdown .compare{*/
/* margin-bottom:42px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'always' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item .image.has-countdown .wishlist,*/
/*   .product-grid-item .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('show_countdown', 'never') == 'hover' %}*/
/*   .product-grid-item:hover .countdown,*/
/*   .product-list-item:hover .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item:hover .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item:hover .image.has-countdown .wishlist,*/
/*   .product-grid-item:hover .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'hidden' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/*     */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'always' %}*/
/*   .product-grid-item .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_page_cloud_zoom_inner') == '0' %}*/
/*   .zm-viewer{*/
/*   display:none;*/
/*   border-left:1px solid white;*/
/*   }*/
/* {% endif %}*/
/* */
/* .option li.hint--top:before{*/
/* border-top-color:{{ journal2.settings.get('product_page_push_tooltip_bg') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'on' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .journal-cart{*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }};*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_cart2', 'visible') == 'visible' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{*/
/*   width:100%;*/
/*   }*/
/*   header .journal-menu .mobile-trigger {*/
/*   width: 50%;*/
/*   margin-top: -40px;*/
/*   z-index: 3;*/
/*   background-color:transparent;*/
/*   }*/
/*   .journal-cart{*/
/*   z-index:2;*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }}*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{*/
/* z-index:1;*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_search', 'block') == 'block' %}*/
/*   @media only screen and (max-width: 470px){*/
/*   div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{*/
/*   color:{{ journal2.settings.get('mobile_trigger_text_color_cart_same_line') }};*/
/*   }*/
/*   div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{*/
/*   color:{{ journal2.settings.get('mobile_trigger_icon_color_cart_same_line') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center #header .menu-dropdown::before{*/
/* border-bottom-color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* .header-notice > div{*/
/* max-width:{{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width:{{ journal2.settings.get('site_width', 1024) + 15 }}px){*/
/* .header-notice > div{*/
/* padding-left:15px;*/
/* padding-right: 15px;*/
/* }*/
/* .header-notice.floated-icon > div{*/
/* padding-bottom:10px;*/
/* }*/
/* button.close-notice {*/
/* right: 8px;*/
/* }*/
/* html[dir="rtl"] button.close-notice {*/
/* right: auto;*/
/* left: 8px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'top' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:0;*/
/*   transform: translate(-50%, 0);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'center' %}*/
/*   .post-item-details .comment-date{*/
/*   margin:0 auto;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'right' %}*/
/*   .post-item-details .comment-date{*/
/*   width:100%;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:flex-end;*/
/*   }*/
/*   html[dir="rtl"] .blog-grid-view .post-button{*/
/*   align-self:flex-start;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:100%;*/
/*   transform: translate(-50%, -100%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('scroll_to_top_pos', 'right') == 'left' %}*/
/*   .scroll-top{*/
/*   left:5px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_side_margin', '15') == '0' %}*/
/*   footer .columns {*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"] footer .columns {*/
/*   padding-right:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'default' %}*/
/*   footer{*/
/*   box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'none' %}*/
/*   footer{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'default' %}*/
/*   .journal-top-header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'none' %}*/
/*   .journal-top-header{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') != 'none' %}*/
/*   .journal-header-default .links a, .journal-header-default .links .no-link {*/
/*   border-bottom-width: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Content Margin *//* */
/* */
/* @media only screen and (min-width: 760px){*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* */
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Tablet Column Width + Content Margin *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width:980px) {*/
/* #column-left {*/
/* width: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right{*/
/* width: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Extended Layout Margins *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .skin-16 .journal-header-center .journal-search {*/
/* padding-left: 30px;*/
/* }*/
/* .extended-layout #column-left{*/
/* padding-left:20px;*/
/* }*/
/* .extended-layout #column-right{*/
/* padding-right:20px;*/
/* }*/
/* .extended-layout #content,*/
/* .extended-layout #column-left + #content,*/
/* .extended-layout #column-right + #content{*/
/* padding-left:20px;*/
/* padding-right:20px;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left{*/
/* padding-right:20px!important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-right{*/
/* padding-left:20px !important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left + #content {*/
/* margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-left: 0;*/
/* */
/* }*/
/* html[dir="rtl"].extended-layout #column-right + #content {*/
/* margin-right: 0;*/
/* }*/
/* }*/
/* */
/* .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .fly-drop-down ul li{*/
/* min-height:{{ journal2.settings.get('flyout_menu_item_height', 40) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .rating{*/
/* margin-left:{{ journal2.settings.get('rating_offset_x_phone') }}px;*/
/* }*/
/* .product-grid-item .rating{*/
/* top:{{ journal2.settings.get('rating_offset_y_phone') }}px;*/
/* }*/
/* }*/
/* */
/* /* RTL Columns *//* */
/* */
/* {% if journal2.settings.get('rtl_columns', '1') == '1' %}*/
/* */
/*   html[dir="rtl"] .flyout-left .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-left .fly-drop-down > ul {*/
/*   left: auto;*/
/*   right: 100%;*/
/*   }*/
/*   html[dir="rtl"] .flyout-right .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-right .fly-drop-down > ul {*/
/*   left: 100% !important;*/
/*   right: auto;*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: 5px;*/
/*   right: auto;*/
/*   transform: scale(-1);*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: auto;*/
/*   right: 8px;*/
/*   transform: scale(1);*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 12px 7px 25px;*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 25px 7px 12px;*/
/*   text-align:left;*/
/*   }*/
/* */
/* */
/*   html[dir="rtl"] #column-left {*/
/*   float: right;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   float: left;*/
/*   }*/
/* */
/* */
/*   @media only screen and (min-width: 760px){*/
/* */
/*   html[dir="rtl"] #column-left {*/
/*   padding: 20px 20px 20px 0;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   padding: 20px 0 20px 20px;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   margin-right: 0;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   }*/
/* */
/*   }*/
/* */
/*   @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left:0;*/
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   margin-right:0;*/
/*   }*/
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   }*/
/* */
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   }*/
/* */
/*   @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   html[dir="rtl"].extended-layout #column-left{*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right{*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right + #content {*/
/*   padding-left: 20px;*/
/*   padding-right: 0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   padding-right: 20px;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* */
/* {% endif %}*/
/* */
/* */
/* .refine-images::before,*/
/* #refine-images::before,*/
/* .category-list::before{*/
/* content:"{{ journal2.settings.get('refine_text', '') }}";*/
/* margin-right:{{ journal2.settings.get('refine_grid_item_spacing', '') }}px;*/
/* }*/
/* {% if journal2.settings.get('refine_text_status', 'none') == 'none' %}*/
/*   .refine-images::before,*/
/*   #refine-images::before,*/
/*   .category-list::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* .refine-image {*/
/* padding-right: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* }*/
/* .refine-images {*/
/* margin-right: -{{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ 15 - journal2.settings.get('refine_grid_item_spacing', '15') }}px;;*/
/* }*/
/* */
/* .product-grid-item {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-top: {{ 20 - journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* */
/* /* Mobile Product Spacing *//* */
/* */
/* @media only screen and (max-width: 760px){*/
/* #cart .heading i::before{*/
/* color:{{ journal2.settings.get('cart_icon_mobile') }};*/
/* }*/
/* #cart .heading i{*/
/* background-color:{{ journal2.settings.get('cart_icon_bg_mobile') }};*/
/* }*/
/* div#container,*/
/* .home-page div#container {*/
/* margin-top: 0;*/
/* margin-bottom: 0;*/
/* box-shadow:none;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* }*/
/* */
/* .button:active{*/
/* box-shadow:{{ journal2.settings.get('button_shadow_active') }};*/
/* }*/
/* */
/* #column-left .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('left_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* #column-right .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('right_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('body_bg_image:background-image') and journal2.settings.get('body_bg_image:background-attachment') == 'fixed' %}*/
/*   .mobile body,*/
/*   .tablet body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile body::before,*/
/*   .tablet body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('body_bg_image_home:background-image') and journal2.settings.get('body_bg_image_home:background-attachment') == 'fixed' %}*/
/*   .mobile.home-page body,*/
/*   .tablet.home-page body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile.home-page body::before,*/
/*   .tablet.home-page body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image_home:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Custom CSS *//* */
/* {{ journal2.settings.get('custom_css') }}*/
/* */
/* */
