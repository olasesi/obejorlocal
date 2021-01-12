<?php

/* journal2/template/product/compare.twig */
class __TwigTemplate_68a766eda1c85560d10d7cec7b7b8b336df96a05e5191e8955cf79cdee74c4ef extends Twig_Template
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
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " compare\">
      <h1 class=\"heading-title\">";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 23
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 24
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 25
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered compare-info\">
            <thead>
            <tr>
              <td colspan=\"";
            // line 29
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\" class=\"compare-product\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></td>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>";
            // line 34
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
              ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 36
                echo "                <td class=\"name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </tr>
            <tr>
              <td>";
            // line 40
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
              ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "                <td class=\"text-center\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\"/> ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tr>
            <tr>
              <td>";
            // line 46
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
              ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 48
                echo "                <td>";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 49
                    echo "                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 50
                        echo "                      ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                    ";
                    } else {
                        // line 51
                        echo " <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                    ";
                    }
                    // line 53
                    echo "                  ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </tr>
            <tr>
              <td>";
            // line 57
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
              ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "                <td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </tr>
            <tr>
              <td>";
            // line 63
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
              ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "                <td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tr>
            <tr>
              <td>";
            // line 69
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "                <td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </tr>
            ";
            // line 74
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 75
                echo "              <tr>
                <td>";
                // line 76
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
                ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 78
                    echo "                  <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 79
                        echo "                      ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 80
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br/>
                    ";
                    // line 81
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "              </tr>
            ";
            }
            // line 85
            echo "            <tr>
              <td>";
            // line 86
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
              ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 88
                echo "                <td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo " </tr>
            <tr>
              <td>";
            // line 91
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
              ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "                <td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo " </tr>
            <tr>
              <td>";
            // line 96
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
              ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 98
                echo "                <td class=\"description\">";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo " </tr>
            </tbody>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 102
                echo "              <thead>
              <tr>
                <td class=\"compare-attribute\" colspan=\"";
                // line 104
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
              </tr>
              </thead>
              ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 108
                    echo "                <tbody>
                <tr>
                  <td>";
                    // line 110
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 112
                        echo "                    ";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 113
                            echo "                      <td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
                    ";
                        } else {
                            // line 115
                            echo "                      <td></td>
                    ";
                        }
                        // line 117
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                </tr>
                </tbody>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            <tr>
              <td></td>
              ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 125
                echo "                <td><input type=\"button\" value=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"/>
                  <a href=\"";
                // line 126
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-block\">";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "</a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "</tr>
          </table>
        </div>
      ";
        } else {
            // line 131
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 133
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-default button\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 136
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 139
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 139,  492 => 136,  484 => 133,  478 => 131,  472 => 127,  462 => 126,  453 => 125,  449 => 124,  445 => 122,  439 => 121,  431 => 118,  425 => 117,  421 => 115,  415 => 113,  412 => 112,  408 => 111,  404 => 110,  400 => 108,  396 => 107,  388 => 104,  384 => 102,  380 => 101,  376 => 99,  363 => 98,  359 => 97,  355 => 96,  351 => 94,  342 => 93,  338 => 92,  334 => 91,  330 => 89,  321 => 88,  317 => 87,  313 => 86,  310 => 85,  306 => 83,  298 => 81,  290 => 80,  283 => 79,  278 => 78,  274 => 77,  270 => 76,  267 => 75,  265 => 74,  262 => 73,  253 => 71,  249 => 70,  245 => 69,  241 => 67,  232 => 65,  228 => 64,  224 => 63,  220 => 61,  211 => 59,  207 => 58,  203 => 57,  199 => 55,  190 => 53,  182 => 51,  176 => 50,  173 => 49,  170 => 48,  166 => 47,  162 => 46,  158 => 44,  141 => 42,  137 => 41,  133 => 40,  129 => 38,  118 => 36,  114 => 35,  110 => 34,  100 => 29,  94 => 25,  92 => 24,  88 => 23,  84 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*     <div class="alert alert-success success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} compare">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       {% if products %}*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered compare-info">*/
/*             <thead>*/
/*             <tr>*/
/*               <td colspan="{{ products | length + 1 }}" class="compare-product"><strong>{{ text_product }}</strong></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*               <td>{{ text_name }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="name"><a href="{{ product.href }}"><strong>{{ product.name }}</strong></a></td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ text_image }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="text-center">{% if product.thumb %} <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/> {% endif %}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ text_price }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{% if product.price %}*/
/*                     {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                     {% else %} <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                     {% endif %}*/
/*                   {% endif %}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ text_model }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.model }}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ text_manufacturer }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.manufacturer }}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ text_availability }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.availability }}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             {% if review_status %}*/
/*               <tr>*/
/*                 <td>{{ text_rating }}</td>*/
/*                 {% for product in products %}*/
/*                   <td class="rating"> {% for i in 1..5 %}*/
/*                       {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*                     {% endfor %} <br/>*/
/*                     {{ product.reviews }}</td>*/
/*                 {% endfor %}*/
/*               </tr>*/
/*             {% endif %}*/
/*             <tr>*/
/*               <td>{{ text_summary }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="description">{{ product.description }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr>*/
/*               <td>{{ text_weight }}</td>*/
/*               {% for product in products %}*/
/*                 <td>{{ product.weight }}</td>*/
/*               {% endfor %} </tr>*/
/*             <tr>*/
/*               <td>{{ text_dimension }}</td>*/
/*               {% for product in products %}*/
/*                 <td class="description">{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/*               {% endfor %} </tr>*/
/*             </tbody>*/
/*             {% for attribute_group in attribute_groups %}*/
/*               <thead>*/
/*               <tr>*/
/*                 <td class="compare-attribute" colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/*               </tr>*/
/*               </thead>*/
/*               {% for key, attribute in attribute_group.attribute %}*/
/*                 <tbody>*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   {% for product in products %}*/
/*                     {% if product.attribute[key] %}*/
/*                       <td> {{ product.attribute[key] }}</td>*/
/*                     {% else %}*/
/*                       <td></td>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </tr>*/
/*                 </tbody>*/
/*               {% endfor %}*/
/*             {% endfor %}*/
/*             <tr>*/
/*               <td></td>*/
/*               {% for product in products %}*/
/*                 <td><input type="button" value="{{ button_cart }}" class="btn btn-primary btn-block" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"/>*/
/*                   <a href="{{ product.remove }}" class="btn btn-danger btn-block">{{ button_remove }}</a></td>*/
/*               {% endfor %}</tr>*/
/*           </table>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-default button">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
