<?php

/* journal2/template/journal2/quickview/quickview.twig */
class __TwigTemplate_517a4a5919cfd5825bb7f5bb6a30d6c660a9ff1708157ea77e02b350fec2e73e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"product-page quickview ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "getAll", array(), "method");
        echo "\" style=\"overflow-y: auto\">
<head>
  <title>";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</title>
  <meta name=\"robots\" content=\"noindex\">
  <base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "google_fonts", array()), "getFonts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo $context["font"];
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/j-strap.css"), "method");
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/icons.css"), "method");
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/hint.min.css"), "method");
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/journal.css"), "method");
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/module.css"), "method");
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/features.css"), "method");
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/product.css"), "method");
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/flex.css"), "method");
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/rtl.css"), "method");
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "css", array(), "method");
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyCss", array(), "method"))) {
            // line 22
            echo "    <link rel=\"stylesheet\" href=\"index.php?route=journal2/assets/css\"/>
  ";
        }
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/journal.js", 1 => "header"), "method");
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "header"), "method");
        echo "
</head>
<body>
<div id=\"container\">
  <div id=\"content\" class=\"product-page-content\">
    <h1 class=\"heading-title\">";
        // line 30
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <div class=\"product-info\">
      <div class=\"left\">
        ";
        // line 33
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 34
            echo "          <div class=\"image\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 36
                echo "              <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" id=\"image\" data-largeimg=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" itemprop=\"image\"/></a>
          </div>
        ";
        }
        // line 41
        echo "        ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 42
            echo "          <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
            ";
            // line 43
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 44
                echo "            <div class=\"swiper\">
              <div class=\"swiper-container\" ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                <div class=\"swiper-wrapper\">
                  ";
            }
            // line 48
            echo "                  ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 49
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo (((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) ? ((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) ? ((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) : ((isset($context["thumb"]) ? $context["thumb"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a>
                  ";
            }
            // line 51
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 52
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" itemprop=\"image\"/></a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                  ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 55
                echo "                </div>
              </div>
              <div class=\"swiper-button-next\"></div>
              <div class=\"swiper-button-prev\"></div>
            </div>
            ";
            }
            // line 61
            echo "          </div>
        ";
            // line 62
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 63
                echo "          <script>
            (function () {
              var opts = {
                slidesPerView: parseInt('";
                // line 66
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                slidesPerGroup: parseInt('";
                // line 67
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                spaceBetween: parseInt('";
                // line 68
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                nextButton: \$('#product-gallery .swiper-button-next'),
                prevButton: \$('#product-gallery .swiper-button-prev'),
                autoplay: ";
                // line 71
                echo (($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                speed: parseInt('";
                // line 72
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                touchEventsTarget: ";
                // line 73
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 74
                echo "              };

              \$('#product-gallery .swiper-container').swiper(opts);
            })();
          </script>
        ";
            }
            // line 80
            echo "        ";
        }
        // line 81
        echo "        <div class=\"image-gallery\" style=\"display: none !important;\">
          ";
        // line 82
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 83
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-original=\"";
            echo (((isset($context["original"]) ? $context["original"] : null)) ? ((isset($context["original"]) ? $context["original"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
          ";
        }
        // line 85
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 86
            echo "            <a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" data-original=\"";
            echo (($this->getAttribute($context["image"], "original", array())) ? ($this->getAttribute($context["image"], "original", array())) : ($this->getAttribute($context["image"], "popup", array())));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </div>
        ";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "image")) {
            // line 90
            echo "        <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
        ";
        }
        // line 92
        echo "      </div>
      <div class=\"right\">
        ";
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 95
            echo "          <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
        ";
        }
        // line 97
        echo "        <div id=\"product\" class=\"product-options\">
          <ul class=\"list-unstyled description\">
            ";
        // line 99
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 100
            echo "              <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
            ";
        }
        // line 102
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 103
            echo "              <li class=\"brand-logo\">
                <a href=\"";
            // line 104
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                  <img src=\"";
            // line 105
            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
            echo "\" width=\"";
            echo (isset($context["manufacturer_image_width"]) ? $context["manufacturer_image_width"] : null);
            echo "\" height=\"";
            echo (isset($context["manufacturer_image_height"]) ? $context["manufacturer_image_height"] : null);
            echo "\" alt=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\"/>
                </a>
                ";
            // line 107
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 108
                echo "                  <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                    ";
                // line 109
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                  </a>
                ";
            }
            // line 112
            echo "              </li>
            ";
        } else {
            // line 114
            echo "              ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 115
                echo "                <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
              ";
            }
            // line 117
            echo "            ";
        }
        // line 118
        echo "            <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 119
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 120
            echo "              <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
            ";
        }
        // line 122
        echo "            <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
          </ul>
          ";
        // line 124
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 125
            echo "            <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
          ";
        }
        // line 127
        echo "          ";
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 128
            echo "            <div class=\"countdown-wrapper\">
              <div class=\"expire-text\">";
            // line 129
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
              <div class=\"countdown\"></div>
            </div>
            <script>Journal.countdown(\$('.right .countdown'), '";
            // line 132
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
          ";
        }
        // line 134
        echo "          ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 135
            echo "            <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
              <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
              <meta itemprop=\"priceCurrency\" content=\"";
            // line 137
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
              <meta itemprop=\"price\" content=\"";
            // line 138
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
              ";
            // line 139
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 140
                echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
              ";
            }
            // line 142
            echo "              ";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 143
                echo "                <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
              ";
            } else {
                // line 145
                echo "                <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                <li class=\"price-new\">";
                // line 146
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>
              ";
            }
            // line 148
            echo "              ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 149
                echo "                <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
              ";
            }
            // line 151
            echo "              ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 152
                echo "                <li class=\"reward\">
                  <small>";
                // line 153
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                </li>
              ";
            }
            // line 156
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 157
                echo "                <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "            </ul>
          ";
        }
        // line 161
        echo "          ";
        if (((isset($context["options"]) ? $context["options"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_product_options"), "method") == "1"))) {
            // line 162
            echo "            <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
              <h3>";
            // line 163
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 165
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 166
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <select name=\"option[";
                    // line 168
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 169
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 171
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                          ";
                        // line 172
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 173
                            echo "                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                          ";
                        }
                        // line 174
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                    </select>
                  </div>
                ";
                }
                // line 179
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 180
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 181
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 183
                        echo "                        <div class=\"radio\">
                          <label>
                            <input type=\"radio\" name=\"option[";
                        // line 185
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 186
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 187
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 188
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 189
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 190
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo " </div>
                  </div>
                ";
                }
                // line 195
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 196
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 197
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 198
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 199
                        echo "                        <div class=\"checkbox\">
                          <label>
                            <input type=\"checkbox\" name=\"option[";
                        // line 201
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 202
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 203
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 204
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 205
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 206
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo " </div>
                  </div>
                ";
                }
                // line 211
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 212
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <input type=\"text\" name=\"option[";
                    // line 214
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 217
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 218
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 219
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <textarea name=\"option[";
                    // line 220
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                  </div>
                ";
                }
                // line 223
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 224
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 225
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 227
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                  </div>
                ";
                }
                // line 230
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 231
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 232
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 234
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 240
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 241
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 242
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 244
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 250
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 251
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 252
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 254
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 260
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "            </div>
            <script>Journal.enableSelectOptionAsButtonsList();</script>
          ";
        }
        // line 264
        echo "          ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 265
            echo "            <hr>
            <h3>";
            // line 266
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 269
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 271
                echo "                  <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 277
        echo "          <div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
            <div>
              ";
        // line 279
        if ( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 280
            echo "              <span class=\"qty\">
                <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 281
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 282
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\" />
                <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 283
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
              </span>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 285
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
              <a id=\"more-details\" class=\"button hint--top\" data-hint=\"";
            // line 286
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_text"), "method");
            echo "\" target=\"_top\" href=\"";
            echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "link", array(0 => ("product/product&product_id=" . (isset($context["product_id"]) ? $context["product_id"] : null))), "method");
            echo "\"><i></i></a>
              ";
        } else {
            // line 288
            echo "              <a id=\"more-details\" class=\"button enquiry-button\" target=\"_top\" href=\"";
            echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "link", array(0 => ("product/product&product_id=" . (isset($context["product_id"]) ? $context["product_id"] : null))), "method");
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_text"), "method");
            echo "</a>
              ";
        }
        // line 290
        echo "              <script>
                /* quantity buttons */
                var \$input = \$('.cart input[name=\"quantity\"]');
                function up() {
                  var val = parseInt(\$input.val(), 10) + 1 || parseInt(\$input.attr('data-min-value'), 10);
                  \$input.val(val);
                }
                function down() {
                  var val = parseInt(\$input.val(), 10) - 1 || 0;
                  var min = parseInt(\$input.attr('data-min-value'), 10) || 1;
                  \$input.val(Math.max(val, min));
                }
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">-</a>').insertBefore(\$input).click(down);
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">+</a>').insertAfter(\$input).click(up);
                \$input.keydown(function (e) {
                  if (e.which === 38) {
                    up();
                    return false;
                  }
                  if (e.which === 40) {
                    down();
                    return false;
                  }
                });
              </script>
            </div>
          </div>
          ";
        // line 317
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 318
            echo "            <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 320
        echo "          <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"parent.addToWishList('";
        // line 322
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"parent.addToCompare('";
        // line 323
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
          </div>
          ";
        // line 326
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "options")) {
            // line 327
            echo "            <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
          ";
        }
        // line 329
        echo "        </div>
      </div>
    </div>
    ";
        // line 332
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "bottom")) {
            // line 333
            echo "      <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
    ";
        }
        // line 335
        echo "  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function () {
        \$('#recurring-description').html('');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
        }
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#button-cart').on('click', function () {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function () {
        \$('#button-cart').button('loading');
      },
      complete: function () {
        \$('#button-cart').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();
        \$('.form-group').removeClass('has-error');

        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));

              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              }
            }
          }

          if (json['error']['recurring']) {
            \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
          }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
        }

        if (json['success']) {
          if (!parent.Journal.showNotification(json['success'], json['image'], true)) {
            parent.\$('#notification').html('<div class=\"success\" style=\"display: none;\">' + json['success'] + '<img src=\"catalog/view/theme/default/image/close.png\" alt=\"\" class=\"close\" /></div>');
          }

          parent.\$('.success').fadeIn('slow');

          parent.\$('#cart-total').html(json['total']);

          parent.\$('#cart ul').load('index.php?route=common/cart/info ul li');

          if (json['redirect']) {
            top.location.href = json['redirect'];
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });

  \$('button[id^=\\'button-upload\\']').on('click', function () {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(node).button('loading');
          },
          complete: function () {
            \$(node).button('reset');
          },
          success: function (json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 497
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 501
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function () {
        \$('#button-review').button('loading');
      },
      complete: function () {
        \$('#button-review').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });

  \$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
  //--></script>
<script>
  Journal.productPage();
  ";
        // line 541
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_auto_update_price", 1 => "1"), "method") == "1")) {
            // line 542
            echo "  Journal.enableProductOptions();
  Journal.updatePrice = true;
  ";
        }
        // line 545
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_cloud_zoom"), "method") == "1")) {
            // line 546
            echo "  Journal.enableCloudZoom('inner');
  ";
        }
        // line 548
        echo "  \$('.image > a').live('click', function () {
    top.location.href = \"index.php?route=product/product&product_id=";
        // line 549
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\";
    return false;
  });
  ";
        // line 552
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_js"), "method");
        echo "
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/quickview/quickview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1363 => 552,  1357 => 549,  1354 => 548,  1350 => 546,  1347 => 545,  1342 => 542,  1340 => 541,  1297 => 501,  1290 => 497,  1126 => 335,  1120 => 333,  1118 => 332,  1113 => 329,  1107 => 327,  1105 => 326,  1097 => 323,  1091 => 322,  1087 => 320,  1081 => 318,  1079 => 317,  1050 => 290,  1042 => 288,  1035 => 286,  1029 => 285,  1024 => 283,  1018 => 282,  1014 => 281,  1011 => 280,  1009 => 279,  1001 => 277,  995 => 273,  984 => 271,  980 => 270,  976 => 269,  970 => 266,  967 => 265,  964 => 264,  959 => 261,  953 => 260,  940 => 254,  933 => 252,  924 => 251,  921 => 250,  908 => 244,  901 => 242,  892 => 241,  889 => 240,  876 => 234,  869 => 232,  860 => 231,  857 => 230,  849 => 227,  841 => 226,  837 => 225,  828 => 224,  825 => 223,  813 => 220,  807 => 219,  798 => 218,  795 => 217,  783 => 214,  777 => 213,  768 => 212,  765 => 211,  760 => 208,  752 => 206,  745 => 205,  743 => 204,  738 => 203,  722 => 202,  716 => 201,  712 => 199,  706 => 198,  702 => 197,  693 => 196,  690 => 195,  685 => 192,  677 => 190,  670 => 189,  668 => 188,  663 => 187,  647 => 186,  641 => 185,  637 => 183,  631 => 182,  627 => 181,  618 => 180,  615 => 179,  610 => 176,  603 => 174,  596 => 173,  594 => 172,  587 => 171,  583 => 170,  579 => 169,  573 => 168,  567 => 167,  558 => 166,  555 => 165,  551 => 164,  547 => 163,  542 => 162,  539 => 161,  535 => 159,  524 => 157,  519 => 156,  511 => 153,  508 => 152,  505 => 151,  497 => 149,  494 => 148,  489 => 146,  484 => 145,  478 => 143,  475 => 142,  471 => 140,  469 => 139,  465 => 138,  461 => 137,  457 => 135,  454 => 134,  449 => 132,  443 => 129,  440 => 128,  437 => 127,  431 => 125,  429 => 124,  419 => 122,  411 => 120,  409 => 119,  402 => 118,  399 => 117,  389 => 115,  386 => 114,  382 => 112,  376 => 109,  371 => 108,  369 => 107,  358 => 105,  354 => 104,  351 => 103,  348 => 102,  340 => 100,  338 => 99,  334 => 97,  328 => 95,  326 => 94,  322 => 92,  316 => 90,  314 => 89,  311 => 88,  292 => 86,  287 => 85,  271 => 83,  269 => 82,  266 => 81,  263 => 80,  255 => 74,  249 => 73,  245 => 72,  241 => 71,  235 => 68,  231 => 67,  227 => 66,  222 => 63,  220 => 62,  217 => 61,  209 => 55,  206 => 54,  183 => 52,  178 => 51,  158 => 49,  155 => 48,  147 => 45,  144 => 44,  142 => 43,  137 => 42,  134 => 41,  117 => 38,  106 => 36,  102 => 35,  99 => 34,  97 => 33,  91 => 30,  83 => 25,  81 => 24,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  44 => 8,  40 => 7,  36 => 6,  31 => 4,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="product-page quickview {{ journal2.html_classes.getAll() }}" style="overflow-y: auto">*/
/* <head>*/
/*   <title>{{ heading_title }}</title>*/
/*   <meta name="robots" content="noindex">*/
/*   <base href="{{ base }}"/>*/
/*   {% for font in journal2.google_fonts.getFonts() %}*/
/*     <link rel="stylesheet" href="{{ font }}"/>*/
/*   {% endfor %}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/j-strap.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/javascript/font-awesome/css/font-awesome.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/icons.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/hint.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/journal.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/module.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/features.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/product.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/flex.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/rtl.css') -}}*/
/*   {{- journal2.minifier.css() -}}*/
/*   {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyCss() %}*/
/*     <link rel="stylesheet" href="index.php?route=journal2/assets/css"/>*/
/*   {% endif %}*/
/*   {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/journal.js', 'header') -}}*/
/*   {{ journal2.minifier.js('header') }}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*   <div id="content" class="product-page-content">*/
/*     <h1 class="heading-title">{{ heading_title }}</h1>*/
/*     <div class="product-info">*/
/*       <div class="left">*/
/*         {% if thumb %}*/
/*           <div class="image">*/
/*             {% for label, name in labels %}*/
/*               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*             {% endfor %}*/
/*             <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if images %}*/
/*           <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*             {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <div class="swiper">*/
/*               <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% endif %}*/
/*                   {% if thumb %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                   {% endif %}*/
/*                   {% for image in images %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="image"/></a>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-button-next"></div>*/
/*               <div class="swiper-button-prev"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*           <script>*/
/*             (function () {*/
/*               var opts = {*/
/*                 slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 nextButton: $('#product-gallery .swiper-button-next'),*/
/*                 prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                 autoplay: {{ journal.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                 speed: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*               };*/
/* */
/*               $('#product-gallery .swiper-container').swiper(opts);*/
/*             })();*/
/*           </script>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         <div class="image-gallery" style="display: none !important;">*/
/*           {% if thumb %}*/
/*             <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*           {% endif %}*/
/*           {% for image in images %}*/
/*             <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% if journal2.settings.get('quickview_description_position') == 'image' %}*/
/*         <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="right">*/
/*         {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*           <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*         <div id="product" class="product-options">*/
/*           <ul class="list-unstyled description">*/
/*             {% if journal2.settings.get('product_views') %}*/
/*               <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*             {% endif %}*/
/*             {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*               <li class="brand-logo">*/
/*                 <a href="{{ manufacturers }}" class="brand-image">*/
/*                   <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                 </a>*/
/*                 {% if manufacturer_image_name %}*/
/*                   <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                     {{ manufacturer_image_name }}*/
/*                   </a>*/
/*                 {% endif %}*/
/*               </li>*/
/*             {% else %}*/
/*               {% if manufacturer %}*/
/*                 <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*             <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*             {% if reward %}*/
/*               <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*             {% endif %}*/
/*             <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/*           </ul>*/
/*           {% if journal2.settings.get('product_sold') %}*/
/*             <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*           {% endif %}*/
/*           {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*             <div class="countdown-wrapper">*/
/*               <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*               <div class="countdown"></div>*/
/*             </div>*/
/*             <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*           {% endif %}*/
/*           {% if price %}*/
/*             <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*               <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*               <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*               <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*               {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                 <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*               {% endif %}*/
/*               {% if not special %}*/
/*                 <li class="product-price">{{ price }}</li>*/
/*               {% else %}*/
/*                 <li class="price-old">{{ price }}</li>*/
/*                 <li class="price-new">{{ special }}</li>*/
/*               {% endif %}*/
/*               {% if tax %}*/
/*                 <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*               {% endif %}*/
/*               {% if points %}*/
/*                 <li class="reward">*/
/*                   <small>{{ text_points }} {{ points }}</small>*/
/*                 </li>*/
/*               {% endif %}*/
/*               {% for discount in discounts %}*/
/*                 <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/*           {% if options and journal2.settings.get('quickview_product_options') == '1' %}*/
/*             <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %}*/
/*                 {% if option.type == 'select' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for option_value in option.product_option_value %}*/
/*                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                           {% if option_value.price %}*/
/*                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                           {% endif %} </option>*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'radio' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'checkbox' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="checkbox">*/
/*                           <label>*/
/*                             <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'text' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'textarea' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'file' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'date' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'datetime' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'time' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*             <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*           {% endif %}*/
/*           {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                   <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*             <div>*/
/*               {% if not journal2.settings.get('hide_add_to_cart_button') %}*/
/*               <span class="qty">*/
/*                 <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*                 <input type="text" name="quantity" value="{{ minimum }}" size="2" data-min-value="{{ minimum }}" id="input-quantity" class="form-control" />*/
/*                 <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               </span>*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*               <a id="more-details" class="button hint--top" data-hint="{{ journal2.settings.get('quickview_more_details_text') }}" target="_top" href="{{ url.link('product/product&product_id=' ~ product_id) }}"><i></i></a>*/
/*               {% else %}*/
/*               <a id="more-details" class="button enquiry-button" target="_top" href="{{ url.link('product/product&product_id=' ~ product_id) }}">{{ journal2.settings.get('quickview_more_details_text') }}</a>*/
/*               {% endif %}*/
/*               <script>*/
/*                 /* quantity buttons *//* */
/*                 var $input = $('.cart input[name="quantity"]');*/
/*                 function up() {*/
/*                   var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);*/
/*                   $input.val(val);*/
/*                 }*/
/*                 function down() {*/
/*                   var val = parseInt($input.val(), 10) - 1 || 0;*/
/*                   var min = parseInt($input.attr('data-min-value'), 10) || 1;*/
/*                   $input.val(Math.max(val, min));*/
/*                 }*/
/*                 $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);*/
/*                 $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);*/
/*                 $input.keydown(function (e) {*/
/*                   if (e.which === 38) {*/
/*                     up();*/
/*                     return false;*/
/*                   }*/
/*                   if (e.which === 40) {*/
/*                     down();*/
/*                     return false;*/
/*                   }*/
/*                 });*/
/*               </script>*/
/*             </div>*/
/*           </div>*/
/*           {% if minimum > 1 %}*/
/*             <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/*           <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="parent.addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="parent.addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*           </div>*/
/*           {% if journal2.settings.get('quickview_description_position') == 'options' %}*/
/*             <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if journal2.settings.get('quickview_description_position') == 'bottom' %}*/
/*       <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/getRecurringDescription',*/
/*       type: 'post',*/
/*       data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#recurring-description').html('');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/* */
/*         if (json['success']) {*/
/*           $('#recurring-description').html(json['success']);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/*         $('.form-group').removeClass('has-error');*/
/* */
/*         if (json['error']) {*/
/*           if (json['error']['option']) {*/
/*             for (i in json['error']['option']) {*/
/*               var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*               if (element.parent().hasClass('input-group')) {*/
/*                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               } else {*/
/*                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               }*/
/*             }*/
/*           }*/
/* */
/*           if (json['error']['recurring']) {*/
/*             $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*           }*/
/* */
/*           // Highlight any found errors*/
/*           $('.text-danger').parent().addClass('has-error');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           if (!parent.Journal.showNotification(json['success'], json['image'], true)) {*/
/*             parent.$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');*/
/*           }*/
/* */
/*           parent.$('.success').fadeIn('slow');*/
/* */
/*           parent.$('#cart-total').html(json['total']);*/
/* */
/*           parent.$('#cart ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*           if (json['redirect']) {*/
/*             top.location.href = json['redirect'];*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('button[id^=\'button-upload\']').on('click', function () {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function () {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function (json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#review').delegate('.pagination a', 'click', function (e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).ready(function () {*/
/*     $('.thumbnails').magnificPopup({*/
/*       type: 'image',*/
/*       delegate: 'a',*/
/*       gallery: {*/
/*         enabled: true*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script>*/
/*   Journal.productPage();*/
/*   {% if journal2.settings.get('product_page_auto_update_price', '1') == '1' %}*/
/*   Journal.enableProductOptions();*/
/*   Journal.updatePrice = true;*/
/*   {% endif %}*/
/*   {% if journal2.settings.get('quickview_cloud_zoom') == '1' %}*/
/*   Journal.enableCloudZoom('inner');*/
/*   {% endif %}*/
/*   $('.image > a').live('click', function () {*/
/*     top.location.href = "index.php?route=product/product&product_id={{ product_id }}";*/
/*     return false;*/
/*   });*/
/*   {{ journal2.settings.get('custom_js') }}*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
