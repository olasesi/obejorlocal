<?php

/* journal2/template/journal2/module/custom_sections_product.twig */
class __TwigTemplate_c142e575072aae3aafaab7f581efb08945601b4e4af8fcf56a4cb38ddf7d6029 extends Twig_Template
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
        echo "<div id=\"cs-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"cs-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box custom-sections section-product ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["single_class"]) ? $context["single_class"] : null);
        echo " ";
        echo (isset($context["show_title_class"]) ? $context["show_title_class"] : null);
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["spacing"]) ? $context["spacing"] : null)) {
            // line 3
            echo "    <style>
      #cs-";
            // line 4
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .product-grid-item {
        margin-bottom: ";
            // line 5
            echo (isset($context["spacing"]) ? $context["spacing"] : null);
            echo "px;
      }

      #cs-";
            // line 8
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .product-wrapper {
        margin-right: ";
            // line 9
            echo (isset($context["spacing"]) ? $context["spacing"] : null);
            echo "px;
      }

      #cs-";
            // line 12
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .product-grid, #content #cs-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .box-product {
        margin-right: -";
            // line 13
            echo (isset($context["spacing"]) ? $context["spacing"] : null);
            echo "px;
      }
    </style>
  ";
        }
        // line 17
        echo "  ";
        if ((isset($context["show_title"]) ? $context["show_title"] : null)) {
            // line 18
            echo "    <div class=\"box-heading box-sections box-block\">
      <ul>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 21
                echo "          ";
                if ($this->getAttribute($context["section"], "is_link", array())) {
                    // line 22
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["section"], "url", array());
                    echo "\" ";
                    echo $this->getAttribute($context["section"], "target", array());
                    echo ">";
                    echo $this->getAttribute($context["section"], "section_name", array());
                    echo "</a></li>
          ";
                } elseif ($this->getAttribute(                // line 23
$context["section"], "items", array())) {
                    // line 24
                    echo "            <li><a href=\"javascript:;\" data-option-value=\"section-";
                    echo $this->getAttribute($context["section"], "section_class", array());
                    echo "\">";
                    echo $this->getAttribute($context["section"], "section_name", array());
                    echo "</a></li>
          ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </ul>
    </div>
  ";
        }
        // line 30
        echo "  <div class=\"box-content\">
    <div class=\"product-grid\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "        <div class=\"product-grid-item isotope-element display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo " ";
            echo twig_join_filter($this->getAttribute($context["product"], "section_class", array()), " ");
            echo " ";
            echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
            echo "\">
          <div class=\"product-wrapper ";
            // line 34
            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                echo " outofstock ";
            }
            echo "\" style=\"";
            echo (isset($context["image_bgcolor"]) ? $context["image_bgcolor"] : null);
            echo "\">
            ";
            // line 35
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 36
                echo "              <div class=\"image ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                <a href=\"";
                // line 37
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"";
                    echo (isset($context["image_border_css"]) ? $context["image_border_css"] : null);
                    echo "; background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                } else {
                    echo " style=\"";
                    echo (isset($context["image_border_css"]) ? $context["image_border_css"] : null);
                    echo "\" ";
                }
                echo ">
                  <img class=\"first-image\" width=\"";
                // line 38
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                </a>
                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 41
                    echo "                  <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 44
                    echo "                  <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                  <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 45
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                ";
                }
                // line 47
                echo "              </div>
            ";
            }
            // line 49
            echo "            <div class=\"product-details\">
              <div class=\"caption\">
                <div class=\"name\"><a href=\"";
            // line 51
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>
                <div class=\"description\">";
            // line 52
            echo $this->getAttribute($context["product"], "description", array());
            echo "</div>
                ";
            // line 53
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 54
                echo "                  <div class=\"price\">
                    ";
                // line 55
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 56
                    echo "                      ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                    ";
                } else {
                    // line 58
                    echo "                      <span class=\"price-old\">";
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
                // line 60
                echo "                  </div>
                  ";
                // line 61
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 62
                    echo "                    <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
                  ";
                }
                // line 64
                echo "                ";
            }
            // line 65
            echo "                ";
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 66
                echo "                  <div class=\"rating\">
                    ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 68
                    echo "                      ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 69
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                    } else {
                        // line 71
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                    }
                    // line 73
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                  </div>
                ";
            }
            // line 76
            echo "              </div>
              <div class=\"button-group\">
                ";
            // line 78
            if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                // line 79
                echo "                  <div class=\"cart enquiry-button\">
                    <a href=\"javascript:Journal.openPopup('";
                // line 80
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
                // line 83
                echo "                  <div class=\"cart ";
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                    <a onclick=\"addToCart('";
                // line 84
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
            // line 87
            echo "                <div class=\"wishlist\"><a onclick=\"addToWishList('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"hint--top\" data-hint=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "</span></a></div>
                <div class=\"compare\"><a onclick=\"addToCompare('";
            // line 88
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
        // line 94
        echo "    </div>
  </div>
  <script>
    (function () {
      var \$isotope = \$('#cs-";
        // line 98
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .product-grid');
      var \$filters = \$('#cs-";
        // line 99
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-heading a[data-option-value]');
      var default_section = '";
        // line 100
        echo (((twig_length_filter($this->env, (isset($context["sections"]) ? $context["sections"] : null)) > 1)) ? ((isset($context["default_section"]) ? $context["default_section"] : null)) : (""));
        echo "';

      \$isotope.each(function () {
        Journal.equalHeight(\$(this).find('.product-grid-item'), '.name');
        Journal.equalHeight(\$(this).find('.product-grid-item'), '.description');
        Journal.equalHeight(\$(this).find('.product-grid-item'), '.price');
      });

      \$('#cs-";
        // line 108
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " img').imagesLoaded(function () {
        \$isotope.isotope({
          itemSelector: '.isotope-element',
          initLayout: default_section === ''
        });
      });

      \$filters.click(function () {
        var \$this = \$(this);
        if (\$this.hasClass('selected')) {
          return false;
        }
        \$filters.removeClass('selected');
        \$this.addClass('selected');
        \$isotope.isotope({
          filter: '.' + \$this.attr('data-option-value')
        })
      });

      if (default_section !== '') {
        \$('#cs-";
        // line 128
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-heading a[data-option-value=\"section-' + default_section + '\"]').click();
      }

      ";
        // line 131
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 132
            echo "      \$('#cs-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .product-grid-item > div').each(function () {
        var \$new = \$(this).find('.price-new');
        if (\$new.length && \$new.attr('data-end-date')) {
          \$(this).find('.image').append('<div class=\"countdown\"></div>');
        }
        Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
      });
      ";
        }
        // line 140
        echo "    }());
  </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/custom_sections_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 140,  436 => 132,  434 => 131,  428 => 128,  405 => 108,  394 => 100,  390 => 99,  386 => 98,  380 => 94,  364 => 88,  355 => 87,  343 => 84,  336 => 83,  320 => 80,  317 => 79,  315 => 78,  311 => 76,  307 => 74,  301 => 73,  297 => 71,  293 => 69,  290 => 68,  286 => 67,  283 => 66,  280 => 65,  277 => 64,  269 => 62,  267 => 61,  264 => 60,  250 => 58,  244 => 56,  242 => 55,  239 => 54,  237 => 53,  233 => 52,  227 => 51,  223 => 49,  219 => 47,  210 => 45,  201 => 44,  198 => 43,  187 => 41,  183 => 40,  170 => 38,  154 => 37,  147 => 36,  145 => 35,  137 => 34,  126 => 33,  122 => 32,  118 => 30,  113 => 27,  107 => 26,  99 => 24,  97 => 23,  88 => 22,  85 => 21,  81 => 20,  77 => 18,  74 => 17,  67 => 13,  61 => 12,  55 => 9,  51 => 8,  45 => 5,  41 => 4,  38 => 3,  36 => 2,  19 => 1,);
    }
}
/* <div id="cs-{{ module }}" class="cs-{{ module_id }} box custom-sections section-product {{ disable_on_classes | join(' ') }} {{ single_class }} {{ show_title_class }} {{ gutter_on_class }}" style="{{ css }}">*/
/*   {% if spacing %}*/
/*     <style>*/
/*       #cs-{{ module }} .product-grid-item {*/
/*         margin-bottom: {{ spacing }}px;*/
/*       }*/
/* */
/*       #cs-{{ module }} .product-wrapper {*/
/*         margin-right: {{ spacing }}px;*/
/*       }*/
/* */
/*       #cs-{{ module }} .product-grid, #content #cs-{{ module }} .box-product {*/
/*         margin-right: -{{ spacing }}px;*/
/*       }*/
/*     </style>*/
/*   {% endif %}*/
/*   {% if show_title %}*/
/*     <div class="box-heading box-sections box-block">*/
/*       <ul>*/
/*         {% for section in sections %}*/
/*           {% if section.is_link %}*/
/*             <li><a href="{{ section.url }}" {{ section.target }}>{{ section.section_name }}</a></li>*/
/*           {% elseif section.items %}*/
/*             <li><a href="javascript:;" data-option-value="section-{{ section.section_class }}">{{ section.section_name }}</a></li>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="box-content">*/
/*     <div class="product-grid">*/
/*       {% for product in items %}*/
/*         <div class="product-grid-item isotope-element display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }} {{ product.section_class | join (' ') }} {{ grid_classes }}">*/
/*           <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}" style="{{ image_bgcolor }}">*/
/*             {% if product.thumb %}*/
/*               <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                 <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="{{ image_border_css }}; background: url('{{ product.thumb2 }}') no-repeat" {% else %} style="{{ image_border_css }}" {% endif %}>*/
/*                   <img class="first-image" width="{{ image_width }}" height="{{ image_height }}" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                 </a>*/
/*                 {% for label, name in product.labels %}*/
/*                   <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                 {% endfor %}*/
/*                 {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                   <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                   <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="product-details">*/
/*               <div class="caption">*/
/*                 <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                 <div class="description">{{ product.description }}</div>*/
/*                 {% if product.price %}*/
/*                   <div class="price">*/
/*                     {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                     {% else %}*/
/*                       <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   {% if product.tax %}*/
/*                     <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                   <div class="rating">*/
/*                     {% for i in 1..5 %}*/
/*                       {% if product.rating < i %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% else %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="button-group">*/
/*                 {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                   <div class="cart enquiry-button">*/
/*                     <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                   </div>*/
/*                 {% else %}*/
/*                   <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                     <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                 <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/*   <script>*/
/*     (function () {*/
/*       var $isotope = $('#cs-{{ module }} .product-grid');*/
/*       var $filters = $('#cs-{{ module }} .box-heading a[data-option-value]');*/
/*       var default_section = '{{ sections | length > 1 ? default_section : '' }}';*/
/* */
/*       $isotope.each(function () {*/
/*         Journal.equalHeight($(this).find('.product-grid-item'), '.name');*/
/*         Journal.equalHeight($(this).find('.product-grid-item'), '.description');*/
/*         Journal.equalHeight($(this).find('.product-grid-item'), '.price');*/
/*       });*/
/* */
/*       $('#cs-{{ module }} img').imagesLoaded(function () {*/
/*         $isotope.isotope({*/
/*           itemSelector: '.isotope-element',*/
/*           initLayout: default_section === ''*/
/*         });*/
/*       });*/
/* */
/*       $filters.click(function () {*/
/*         var $this = $(this);*/
/*         if ($this.hasClass('selected')) {*/
/*           return false;*/
/*         }*/
/*         $filters.removeClass('selected');*/
/*         $this.addClass('selected');*/
/*         $isotope.isotope({*/
/*           filter: '.' + $this.attr('data-option-value')*/
/*         })*/
/*       });*/
/* */
/*       if (default_section !== '') {*/
/*         $('#cs-{{ module }} .box-heading a[data-option-value="section-' + default_section + '"]').click();*/
/*       }*/
/* */
/*       {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*       $('#cs-{{ module }} .product-grid-item > div').each(function () {*/
/*         var $new = $(this).find('.price-new');*/
/*         if ($new.length && $new.attr('data-end-date')) {*/
/*           $(this).find('.image').append('<div class="countdown"></div>');*/
/*         }*/
/*         Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*       });*/
/*       {% endif %}*/
/*     }());*/
/*   </script>*/
/* </div>*/
/* */
