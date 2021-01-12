<?php

/* journal2/template/product/category.twig */
class __TwigTemplate_2e849c7d22be1fd325401574292bab4c58b8f6be03688bfe1bbfad37bb042c05 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 19
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 20
            echo "        <div class=\"category-info\">
          ";
            // line 21
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 22
                echo "            <div class=\"image\"><img width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></div>
          ";
            }
            // line 24
            echo "          ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 25
                echo "            ";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
          ";
            }
            // line 27
            echo "        </div>
      ";
        }
        // line 29
        echo "
      ";
        // line 30
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "grid") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 31
            echo "        <div class=\"refine-images\">
          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "            <div class=\"refine-image ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
              <a href=\"";
                // line 34
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          <script>
            if (!Journal.isFlexboxSupported) {
              Journal.equalHeight(\$(\".refine-images .refine-image\"), '.refine-category-name');
            }
          </script>
        </div>
      ";
        }
        // line 44
        echo "
      ";
        // line 45
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "carousel") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 46
            echo "        <div id=\"refine-images\">
          <div class=\"swiper\">
            <div class=\"swiper-container\" ";
            // line 48
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                echo " dir=\"rtl\" ";
            }
            echo ">
              <div class=\"swiper-wrapper\">
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 51
                echo "                  <div class=\"refine-image swiper-slide ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
                    <a href=\"";
                // line 52
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "              </div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
        ";
            // line 60
            $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
            // line 61
            echo "        ";
            $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(            // line 62
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(            // line 63
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(            // line 64
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(            // line 65
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(            // line 66
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
            // line 68
            echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
            // line 70
            echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
            echo "');

            var breakpoints = {
              470: {
                slidesPerView: grid[0][1],
                slidesPerGroup: grid[0][1]
              },
              760: {
                slidesPerView: grid[1][1],
                slidesPerGroup: grid[1][1]
              },
              980: {
                slidesPerView: grid[2][1],
                slidesPerGroup: grid[2][1]
              },
              1220: {
                slidesPerView: grid[3][1],
                slidesPerGroup: grid[3][1]
              }
            };

            var opts = {
              slidesPerView: grid[4][1],
              slidesPerGroup: grid[4][1],
              breakpoints: breakpoints,
              spaceBetween: parseInt('";
            // line 95
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
            echo "', 10),
              pagination: \$('#refine-images .swiper-pagination'),
              paginationClickable: true,
              nextButton: \$('#refine-images .swiper-button-next'),
              prevButton: \$('#refine-images .swiper-button-prev'),
              autoplayStopOnHover: ";
            // line 100
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_pause_on_hover"), "method")) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
              autoplay: ";
            // line 101
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
            echo ",
              speed: parseInt(";
            // line 102
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_transition_speed", 1 => 400), "method");
            echo ", 10),
              touchEventsTarget: ";
            // line 103
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_touchdrag"), "method")) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 104
            echo "            };

            \$('#refine-images .swiper-container').swiper(opts);
          })();
        </script>
      ";
        }
        // line 110
        echo "
      ";
        // line 111
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "text") && (isset($context["categories"]) ? $context["categories"] : null))) {
            // line 112
            echo "        <h2 class=\"refine\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h2>
        <div class=\"category-list\">
          <ul>
            ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 116
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "          </ul>
        </div>
      ";
        }
        // line 121
        echo "
      ";
        // line 122
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 123
            echo "
        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 126
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 127
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 129
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 130
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 133
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 134
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 136
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 138
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 141
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 144
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 145
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 147
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 149
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "            </select>
          </div>
        </div>

        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 154
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">
          ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 156
                echo "            <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper ";
                // line 157
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                <div class=\"image ";
                // line 158
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                  <a href=\"";
                // line 159
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                    <img class=\"lazy first-image\" width=\"";
                // line 160
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                  </a>
                  ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 163
                    echo "                    <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                  ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 166
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 167
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                  ";
                }
                // line 169
                echo "                </div>
                <div class=\"product-details\">
                  <div class=\"caption\">
                    <h4 class=\"name\"><a href=\"";
                // line 172
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p class=\"description\">";
                // line 173
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                    ";
                // line 174
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 175
                    echo "                      <div class=\"price\">
                        ";
                    // line 176
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 177
                        echo "                          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 179
                        echo "                          <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\" ";
                        if ($this->getAttribute($context["product"], "date_end", array())) {
                            echo "data-end-date=\"";
                            echo $this->getAttribute($context["product"], "date_end", array());
                            echo "\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                        ";
                    }
                    // line 181
                    echo "                      </div>
                      ";
                    // line 182
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 183
                        echo "                        <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                      ";
                    }
                    // line 185
                    echo "                    ";
                }
                // line 186
                echo "                    ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 187
                    echo "                      <div class=\"rating\">
                        ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 189
                        echo "                          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 190
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 192
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 194
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "                      </div>
                    ";
                }
                // line 197
                echo "                  </div>
                  <div class=\"button-group\">
                    ";
                // line 199
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 200
                    echo "                      <div class=\"cart enquiry-button\">
                        <a href=\"javascript:Journal.openPopup('";
                    // line 201
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                      </div>
                    ";
                } else {
                    // line 204
                    echo "                      <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                        <a onclick=\"addToCart('";
                    // line 205
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                      </div>
                    ";
                }
                // line 208
                echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 209
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "        </div>

        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 218
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 219
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        }
        // line 222
        echo "
      ";
        // line 223
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 224
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 226
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary button\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 229
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 231
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>
  ";
        // line 232
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 233
            echo "    <script>Journal.enableCountdown();</script>
  ";
        }
        // line 235
        echo "</div>
";
        // line 236
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 236,  722 => 235,  718 => 233,  716 => 232,  712 => 231,  706 => 229,  698 => 226,  692 => 224,  690 => 223,  687 => 222,  681 => 219,  677 => 218,  672 => 215,  656 => 209,  647 => 208,  635 => 205,  628 => 204,  612 => 201,  609 => 200,  607 => 199,  603 => 197,  599 => 195,  593 => 194,  589 => 192,  585 => 190,  582 => 189,  578 => 188,  575 => 187,  572 => 186,  569 => 185,  561 => 183,  559 => 182,  556 => 181,  542 => 179,  536 => 177,  534 => 176,  531 => 175,  529 => 174,  525 => 173,  519 => 172,  514 => 169,  505 => 167,  496 => 166,  493 => 165,  482 => 163,  478 => 162,  463 => 160,  453 => 159,  447 => 158,  441 => 157,  436 => 156,  432 => 155,  424 => 154,  418 => 150,  412 => 149,  404 => 147,  396 => 145,  393 => 144,  389 => 143,  384 => 141,  380 => 139,  374 => 138,  366 => 136,  358 => 134,  355 => 133,  351 => 132,  346 => 130,  340 => 129,  335 => 127,  331 => 126,  326 => 123,  324 => 122,  321 => 121,  316 => 118,  305 => 116,  301 => 115,  294 => 112,  292 => 111,  289 => 110,  281 => 104,  275 => 103,  271 => 102,  267 => 101,  259 => 100,  251 => 95,  223 => 70,  219 => 68,  217 => 66,  216 => 65,  215 => 64,  214 => 63,  213 => 62,  211 => 61,  209 => 60,  202 => 55,  183 => 52,  178 => 51,  174 => 50,  167 => 48,  163 => 46,  161 => 45,  158 => 44,  149 => 37,  130 => 34,  125 => 33,  121 => 32,  118 => 31,  116 => 30,  113 => 29,  109 => 27,  103 => 25,  100 => 24,  88 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 18,  73 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       {% if thumb or description %}*/
/*         <div class="category-info">*/
/*           {% if thumb %}*/
/*             <div class="image"><img width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ thumb }}" alt="{{ heading_title }}"/></div>*/
/*           {% endif %}*/
/*           {% if description %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'grid' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div class="refine-images">*/
/*           {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*             <div class="refine-image {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*               <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*             </div>*/
/*           {% endfor %}*/
/*           <script>*/
/*             if (!Journal.isFlexboxSupported) {*/
/*               Journal.equalHeight($(".refine-images .refine-image"), '.refine-category-name');*/
/*             }*/
/*           </script>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'carousel' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div id="refine-images">*/
/*           <div class="swiper">*/
/*             <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*               <div class="swiper-wrapper">*/
/*                 {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*                   <div class="refine-image swiper-slide {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*                     <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="swiper-pagination"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*           (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*               },*/
/*               760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*               },*/
/*               980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*               },*/
/*               1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*               }*/
/*             };*/
/* */
/*             var opts = {*/
/*               slidesPerView: grid[4][1],*/
/*               slidesPerGroup: grid[4][1],*/
/*               breakpoints: breakpoints,*/
/*               spaceBetween: parseInt('{{ journal2.settings.get('refine_grid_item_spacing', '15') }}', 10),*/
/*               pagination: $('#refine-images .swiper-pagination'),*/
/*               paginationClickable: true,*/
/*               nextButton: $('#refine-images .swiper-button-next'),*/
/*               prevButton: $('#refine-images .swiper-button-prev'),*/
/*               autoplayStopOnHover: {% if journal2.settings.get('refine_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*               autoplay: {{ journal2.settings.get('refine_carousel_autoplay') ? journal2.settings.get('refine_carousel_transition_delay', 4000) : 'false' }},*/
/*               speed: parseInt({{ journal2.settings.get('refine_carousel_transition_speed', 400) }}, 10),*/
/*               touchEventsTarget: {% if journal2.settings.get('refine_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('#refine-images .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'text' and categories %}*/
/*         <h2 class="refine">{{ text_refine }}</h2>*/
/*         <div class="category-list">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*               <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if products %}*/
/* */
/*         <div class="product-filter">*/
/*           <div class="display">*/
/*             <a onclick="Journal.gridView()" class="grid-view">{{ journal2.settings.get('category_grid_view_icon', button_grid) }}</a>*/
/*             <a onclick="Journal.listView()" class="list-view">{{ journal2.settings.get('category_list_view_icon', button_list) }}</a>*/
/*           </div>*/
/*           <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*           <div class="limit"><b>{{ text_limit }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                   <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="sort"><b>{{ text_sort }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                   <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           {% for product in products %}*/
/*             <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*               <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                   <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                     <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                   </a>*/
/*                   {% for label, name in product.labels %}*/
/*                     <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="product-details">*/
/*                   <div class="caption">*/
/*                     <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p class="description">{{ product.description }}</p>*/
/*                     {% if product.price %}*/
/*                       <div class="price">*/
/*                         {% if not product.special %}*/
/*                           {{ product.price }}*/
/*                         {% else %}*/
/*                           <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       {% if product.tax %}*/
/*                         <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                       {% endif %}*/
/*                     {% endif %}*/
/*                     {% if product.rating %}*/
/*                       <div class="rating">*/
/*                         {% for i in 1..5 %}*/
/*                           {% if product.rating < i %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <div class="button-group">*/
/*                     {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                       <div class="cart enquiry-button">*/
/*                         <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                         <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         <div class="row pagination">*/
/*           <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if not categories and not products %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
