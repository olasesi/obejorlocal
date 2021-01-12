<?php

/* journal2/template/journal2/module/side_category.twig */
class __TwigTemplate_180fef186258482c8af8bdd0e755938bb2ea5a20da43d00dd1a59c7cd3b1c733 extends Twig_Template
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
        // line 25
        echo "<div id=\"journal-side-category-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-side-category-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-category ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
  <div class=\"box-heading\">";
        // line 26
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-category\">
    <ul>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_items"]) ? $context["top_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "        <li>
          ";
            // line 31
            if (($this->getAttribute($context["item"], "type", array()) == "custom")) {
                // line 32
                echo "            ";
                if ($this->getAttribute($context["item"], "href", array())) {
                    // line 33
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" ";
                    echo $this->getAttribute($context["item"], "target", array());
                    echo " class=\"";
                    echo $this->getAttribute($context["item"], "class", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>
            ";
                } else {
                    // line 35
                    echo "              <a>";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>
            ";
                }
                // line 37
                echo "          ";
            } else {
                // line 38
                echo "            ";
                $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 39
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
              <span class=\"category-name\">";
                // line 40
                echo $this->getAttribute($context["item"], "name", array());
                echo "
                ";
                // line 41
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 42
                    echo "                  <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>
                ";
                }
                // line 44
                echo "              </span>
              ";
                // line 45
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 46
                    echo "                ";
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 47
                        echo "                  <i><span>-</span></i>
                ";
                    } else {
                        // line 49
                        echo "                  <i><span>+</span></i>
                ";
                    }
                    // line 51
                    echo "              ";
                }
                // line 52
                echo "            </a>
            ";
                // line 53
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 54
                    echo "              <ul> ";
                    echo (isset($context["menu"]) ? $context["menu"] : null);
                    echo "</ul>
            ";
                }
                // line 56
                echo "          ";
            }
            // line 57
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 60
            echo "        <li>
          ";
            // line 61
            $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["category"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
            // line 62
            echo "          <a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["category"], "class", array());
            echo "\">
            <span class=\"category-name\">";
            // line 63
            echo $this->getAttribute($context["category"], "name", array());
            echo "
              ";
            // line 64
            if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                // line 65
                echo "                <span class=\"product-count\">(";
                echo $this->getAttribute($context["category"], "total", array());
                echo ")</span>
              ";
            }
            // line 67
            echo "            </span>
            ";
            // line 68
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "subcategories", array())) > 0)) {
                // line 69
                echo "              ";
                if (($this->getAttribute($context["category"], "class", array()) == "active")) {
                    // line 70
                    echo "                <i><span>-</span></i>
              ";
                } else {
                    // line 72
                    echo "                <i><span>+</span></i>
              ";
                }
                // line 74
                echo "            ";
            }
            // line 75
            echo "          </a>
          ";
            // line 76
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "subcategories", array())) > 0)) {
                // line 77
                echo "            <ul> ";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "</ul>
          ";
            }
            // line 79
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bottom_items"]) ? $context["bottom_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 82
            echo "        <li>
          ";
            // line 83
            if (($this->getAttribute($context["item"], "type", array()) == "custom")) {
                // line 84
                echo "            ";
                if ($this->getAttribute($context["item"], "href", array())) {
                    // line 85
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" ";
                    echo $this->getAttribute($context["item"], "target", array());
                    echo " class=\"";
                    echo $this->getAttribute($context["item"], "class", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>
            ";
                } else {
                    // line 87
                    echo "              <a>";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>
            ";
                }
                // line 89
                echo "          ";
            } else {
                // line 90
                echo "            ";
                $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 91
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
              <span class=\"category-name\">";
                // line 92
                echo $this->getAttribute($context["item"], "name", array());
                echo "
                ";
                // line 93
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 94
                    echo "                  <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>
                ";
                }
                // line 96
                echo "              </span>
              ";
                // line 97
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 98
                    echo "                ";
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 99
                        echo "                  <i><span>-</span></i>
                ";
                    } else {
                        // line 101
                        echo "                  <i><span>+</span></i>
                ";
                    }
                    // line 103
                    echo "              ";
                }
                // line 104
                echo "            </a>
            ";
                // line 105
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 106
                    echo "              <ul> ";
                    echo (isset($context["menu"]) ? $context["menu"] : null);
                    echo "</ul>
            ";
                }
                // line 108
                echo "          ";
            }
            // line 109
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    </ul>
  </div>
  ";
        // line 113
        if (((isset($context["type"]) ? $context["type"] : null) == "accordion")) {
            // line 114
            echo "    <script>
      \$('#journal-side-category-";
            // line 115
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .box-category a i').click(function (e, first) {
        e.preventDefault();
        \$('+ ul', \$(this).parent()).slideToggle(first ? 0 : 400);
        \$(this).parent().toggleClass('active');
        \$(this).html(\$(this).parent().hasClass('active') ? \"<span>-</span>\" : \"<span>+</span>\");
        return false;
      });
      \$('#journal-side-category-";
            // line 122
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .is-active i').trigger('click', true);
    </script>
  ";
        }
        // line 125
        echo "</div>
";
    }

    // line 1
    public function getrenderSideCategoryMenu($__menu__ = null, $__show_total__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "show_total" => $__show_total__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "    ";
                $context["submenu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 4
                echo "    <li>
      <a href=\"";
                // line 5
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
        <span class=\"category-name\">";
                // line 6
                echo $this->getAttribute($context["item"], "name", array());
                echo "
          ";
                // line 7
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 8
                    echo "            <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>
          ";
                }
                // line 10
                echo "        </span>
        ";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 12
                    echo "          ";
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 13
                        echo "            <i><span>-</span></i>
          ";
                    } else {
                        // line 15
                        echo "            <i><span>+</span></i>
          ";
                    }
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "      </a>
      ";
                // line 19
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 20
                    echo "        <ul> ";
                    echo (isset($context["submenu"]) ? $context["submenu"] : null);
                    echo "</ul>
      ";
                }
                // line 22
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/side_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 22,  387 => 20,  385 => 19,  382 => 18,  379 => 17,  375 => 15,  371 => 13,  368 => 12,  366 => 11,  363 => 10,  357 => 8,  355 => 7,  351 => 6,  345 => 5,  342 => 4,  339 => 3,  334 => 2,  321 => 1,  316 => 125,  310 => 122,  300 => 115,  297 => 114,  295 => 113,  291 => 111,  284 => 109,  281 => 108,  275 => 106,  273 => 105,  270 => 104,  267 => 103,  263 => 101,  259 => 99,  256 => 98,  254 => 97,  251 => 96,  245 => 94,  243 => 93,  239 => 92,  232 => 91,  229 => 90,  226 => 89,  220 => 87,  208 => 85,  205 => 84,  203 => 83,  200 => 82,  195 => 81,  188 => 79,  182 => 77,  180 => 76,  177 => 75,  174 => 74,  170 => 72,  166 => 70,  163 => 69,  161 => 68,  158 => 67,  152 => 65,  150 => 64,  146 => 63,  139 => 62,  137 => 61,  134 => 60,  129 => 59,  122 => 57,  119 => 56,  113 => 54,  111 => 53,  108 => 52,  105 => 51,  101 => 49,  97 => 47,  94 => 46,  92 => 45,  89 => 44,  83 => 42,  81 => 41,  77 => 40,  70 => 39,  67 => 38,  64 => 37,  58 => 35,  46 => 33,  43 => 32,  41 => 31,  38 => 30,  34 => 29,  28 => 26,  19 => 25,);
    }
}
/* {% macro renderSideCategoryMenu(menu, show_total) %}*/
/*   {% for item in menu.subcategories %}*/
/*     {% set submenu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*     <li>*/
/*       <a href="{{ item.href }}" class="{{ item.class }}">*/
/*         <span class="category-name">{{ item.name }}*/
/*           {% if show_total %}*/
/*             <span class="product-count">({{ item.total }})</span>*/
/*           {% endif %}*/
/*         </span>*/
/*         {% if item.subcategories | length > 0 %}*/
/*           {% if item.class == 'active' %}*/
/*             <i><span>-</span></i>*/
/*           {% else %}*/
/*             <i><span>+</span></i>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.subcategories | length > 0 %}*/
/*         <ul> {{ submenu }}</ul>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* <div id="journal-side-category-{{ module }}" class="journal-side-category-{{ module_id }} box side-category {{ class }}">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-category">*/
/*     <ul>*/
/*       {% for item in top_items %}*/
/*         <li>*/
/*           {% if item.type == 'custom' %}*/
/*             {% if item.href %}*/
/*               <a href="{{ item.href }}" {{ item.target }} class="{{ item.class }}">{{ item.name }}</a>*/
/*             {% else %}*/
/*               <a>{{ item.name }}</a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             {% set menu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*             <a href="{{ item.href }}" class="{{ item.class }}">*/
/*               <span class="category-name">{{ item.name }}*/
/*                 {% if show_total %}*/
/*                   <span class="product-count">({{ item.total }})</span>*/
/*                 {% endif %}*/
/*               </span>*/
/*               {% if item.subcategories | length > 0 %}*/
/*                 {% if item.class == 'active' %}*/
/*                   <i><span>-</span></i>*/
/*                 {% else %}*/
/*                   <i><span>+</span></i>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </a>*/
/*             {% if item.subcategories | length > 0 %}*/
/*               <ul> {{ menu }}</ul>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       {% for category in categories %}*/
/*         <li>*/
/*           {% set menu = _self.renderSideCategoryMenu(category, show_total) %}*/
/*           <a href="{{ category.href }}" class="{{ category.class }}">*/
/*             <span class="category-name">{{ category.name }}*/
/*               {% if show_total %}*/
/*                 <span class="product-count">({{ category.total }})</span>*/
/*               {% endif %}*/
/*             </span>*/
/*             {% if category.subcategories | length > 0 %}*/
/*               {% if category.class == 'active' %}*/
/*                 <i><span>-</span></i>*/
/*               {% else %}*/
/*                 <i><span>+</span></i>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </a>*/
/*           {% if category.subcategories | length > 0 %}*/
/*             <ul> {{ menu }}</ul>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       {% for item in bottom_items %}*/
/*         <li>*/
/*           {% if item.type == 'custom' %}*/
/*             {% if item.href %}*/
/*               <a href="{{ item.href }}" {{ item.target }} class="{{ item.class }}">{{ item.name }}</a>*/
/*             {% else %}*/
/*               <a>{{ item.name }}</a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             {% set menu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*             <a href="{{ item.href }}" class="{{ item.class }}">*/
/*               <span class="category-name">{{ item.name }}*/
/*                 {% if show_total %}*/
/*                   <span class="product-count">({{ item.total }})</span>*/
/*                 {% endif %}*/
/*               </span>*/
/*               {% if item.subcategories | length > 0 %}*/
/*                 {% if item.class == 'active' %}*/
/*                   <i><span>-</span></i>*/
/*                 {% else %}*/
/*                   <i><span>+</span></i>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </a>*/
/*             {% if item.subcategories | length > 0 %}*/
/*               <ul> {{ menu }}</ul>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   {% if type == 'accordion' %}*/
/*     <script>*/
/*       $('#journal-side-category-{{ module }} .box-category a i').click(function (e, first) {*/
/*         e.preventDefault();*/
/*         $('+ ul', $(this).parent()).slideToggle(first ? 0 : 400);*/
/*         $(this).parent().toggleClass('active');*/
/*         $(this).html($(this).parent().hasClass('active') ? "<span>-</span>" : "<span>+</span>");*/
/*         return false;*/
/*       });*/
/*       $('#journal-side-category-{{ module }} .is-active i').trigger('click', true);*/
/*     </script>*/
/*   {% endif %}*/
/* </div>*/
/* */
