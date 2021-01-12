<?php

/* journal2/template/journal2/module/super_filter_product.twig */
class __TwigTemplate_594eebd7b0995db758565fd6e994acd35dbbd617551f2d83f6cbf4cbb3783b3a extends Twig_Template
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
        echo "<div class=\"product-filter\" data-countdown=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method");
        echo "\">
  <div class=\"display\"><b>";
        // line 2
        echo (isset($context["text_display"]) ? $context["text_display"] : null);
        echo "</b> ";
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo " <b>/</b> <a onclick=\"display('grid');\">";
        echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
        echo "</a></div>
  <div class=\"product-compare\"><a href=\"";
        // line 3
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" id=\"compare-total\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></div>
  <div class=\"limit\"><b>";
        // line 4
        echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
        echo "</b>
    <select onchange=\"location = this.value;\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 7
            echo "        ";
            if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                // line 8
                echo "          <option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
        ";
            } else {
                // line 10
                echo "          <option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
        ";
            }
            // line 12
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </select>
  </div>
  <div class=\"sort\"><b>";
        // line 15
        echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
        echo "</b>
    <select onchange=\"location = this.value;\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 18
            echo "        ";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 19
                echo "          <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
        ";
            } else {
                // line 21
                echo "          <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
        ";
            }
            // line 23
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </select>
  </div>
</div>
<div class=\"row main-products product-list\" data-grid-classes=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
        echo " display-";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
        echo "\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "    <div class=\"product-list-item xs-100 sm-100 md-100 lg-100 xl-100\">
      <div class=\"product-thumb product-wrapper ";
            // line 30
            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                echo " outofstock ";
            }
            echo "\">
        <div class=\"image ";
            // line 31
            if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                echo " has-countdown ";
            }
            echo "\">
          <a href=\"";
            // line 32
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" ";
            if ($this->getAttribute($context["product"], "thumb2", array())) {
                echo " class=\"has-second-image\" style=\"background: url('";
                echo $this->getAttribute($context["product"], "thumb2", array());
                echo "') no-repeat\" ";
            }
            echo ">
            <img class=\"lazy first-image\" width=\"";
            // line 33
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
            echo "\" src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"/>
          </a>
          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 36
                echo "            <span class=\"label-";
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
            echo "          ";
            if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                // line 39
                echo "            <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
            <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 40
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
          ";
            }
            // line 42
            echo "        </div>
        <div class=\"product-details\">
          <div class=\"caption\">
            <h4 class=\"name\"><a href=\"";
            // line 45
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
            <p class=\"description\">";
            // line 46
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
            ";
            // line 47
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 48
                echo "              <div class=\"price\">
                ";
                // line 49
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 50
                    echo "                  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                ";
                } else {
                    // line 52
                    echo "                  <span class=\"price-old\">";
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
                // line 54
                echo "              </div>
              ";
                // line 55
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 56
                    echo "                <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
              ";
                }
                // line 58
                echo "            ";
            }
            // line 59
            echo "            ";
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 60
                echo "              <div class=\"rating\">
                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    echo "                  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 63
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                    } else {
                        // line 65
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                    }
                    // line 67
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "              </div>
            ";
            }
            // line 70
            echo "          </div>
          <div class=\"button-group\">
            ";
            // line 72
            if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                // line 73
                echo "              <div class=\"cart enquiry-button\">
                <a href=\"javascript:Journal.openPopup('";
                // line 74
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
                // line 77
                echo "              <div class=\"cart ";
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                <a onclick=\"addToCart('";
                // line 78
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
            // line 81
            echo "            <div class=\"wishlist\"><a onclick=\"addToWishList('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"hint--top\" data-hint=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "</span></a></div>
            <div class=\"compare\"><a onclick=\"addToCompare('";
            // line 82
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
        // line 88
        echo "  ";
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            // line 89
            echo "    <p class=\"no-results\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</p>
  ";
        }
        // line 91
        echo "</div>
<div class=\"row pagination\">
  <div class=\"col-sm-6 text-left links\">";
        // line 93
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right results\">";
        // line 94
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 94,  372 => 93,  368 => 91,  362 => 89,  359 => 88,  343 => 82,  334 => 81,  322 => 78,  315 => 77,  299 => 74,  296 => 73,  294 => 72,  290 => 70,  286 => 68,  280 => 67,  276 => 65,  272 => 63,  269 => 62,  265 => 61,  262 => 60,  259 => 59,  256 => 58,  248 => 56,  246 => 55,  243 => 54,  229 => 52,  223 => 50,  221 => 49,  218 => 48,  216 => 47,  212 => 46,  206 => 45,  201 => 42,  192 => 40,  183 => 39,  180 => 38,  169 => 36,  165 => 35,  152 => 33,  142 => 32,  136 => 31,  130 => 30,  127 => 29,  123 => 28,  115 => 27,  110 => 24,  104 => 23,  96 => 21,  88 => 19,  85 => 18,  81 => 17,  76 => 15,  72 => 13,  66 => 12,  58 => 10,  50 => 8,  47 => 7,  43 => 6,  38 => 4,  32 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="product-filter" data-countdown="{{ journal2.settings.get('show_countdown', 'never') }}">*/
/*   <div class="display"><b>{{ text_display }}</b> {{ text_list }} <b>/</b> <a onclick="display('grid');">{{ text_grid }}</a></div>*/
/*   <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*   <div class="limit"><b>{{ text_limit }}</b>*/
/*     <select onchange="location = this.value;">*/
/*       {% for limits in limits %}*/
/*         {% if limits.value == limit %}*/
/*           <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*         {% else %}*/
/*           <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </select>*/
/*   </div>*/
/*   <div class="sort"><b>{{ text_sort }}</b>*/
/*     <select onchange="location = this.value;">*/
/*       {% for sorts in sorts %}*/
/*         {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*           <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*         {% else %}*/
/*           <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* <div class="row main-products product-list" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*   {% for product in products %}*/
/*     <div class="product-list-item xs-100 sm-100 md-100 lg-100 xl-100">*/
/*       <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*         <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*           <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*             <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*           </a>*/
/*           {% for label, name in product.labels %}*/
/*             <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*           {% endfor %}*/
/*           {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*             <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*             <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="product-details">*/
/*           <div class="caption">*/
/*             <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*             <p class="description">{{ product.description }}</p>*/
/*             {% if product.price %}*/
/*               <div class="price">*/
/*                 {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                 {% else %}*/
/*                   <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% if product.tax %}*/
/*                 <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*             {% if product.rating %}*/
/*               <div class="rating">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if product.rating < i %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% else %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="button-group">*/
/*             {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*               <div class="cart enquiry-button">*/
/*                 <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*               </div>*/
/*             {% else %}*/
/*               <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*             <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/*   {% if not products %}*/
/*     <p class="no-results">{{ text_no_results }}</p>*/
/*   {% endif %}*/
/* </div>*/
/* <div class="row pagination">*/
/*   <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right results">{{ results }}</div>*/
/* </div>*/
/* */
