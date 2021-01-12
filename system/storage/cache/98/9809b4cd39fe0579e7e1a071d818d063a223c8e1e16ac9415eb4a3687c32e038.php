<?php

/* journal2/template/checkout/cart.twig */
class __TwigTemplate_551c90ed7562ec77c2caac38758a73fcf92e24ed5ed36bfe6194fd11c205052c extends Twig_Template
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
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "    <div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 18
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " sc-page\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 32
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
        ";
        // line 33
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 34
            echo "          &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")
        ";
        }
        // line 35
        echo " </h1>
      <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive cart-info\">
          <table class=\"table table-bordered\">
            <thead>
            <tr>
              <td class=\"text-center image\">";
        // line 41
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
              <td class=\"text-left name\">";
        // line 42
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left model\">";
        // line 43
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-left quantity\">";
        // line 44
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right price\">";
        // line 45
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right total\">";
        // line 46
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
            </thead>
            <tbody>

            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            echo "              <tr>
                <td class=\"text-center image\">";
            // line 53
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                <td class=\"text-left name\"><a href=\"";
            // line 54
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 55
            echo "                  ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 56
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                      <small>";
                    // line 57
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                  ";
            }
            // line 59
            echo "                  ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br/>
                    <small>";
                // line 60
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 61
            echo "                  ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br/>
                    <span class=\"label label-info\">";
                // line 62
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
                    <small>";
                // line 63
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
                <td class=\"text-left model\">";
            // line 64
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"quantity[";
            // line 67
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 73
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 74
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 78
            echo "              <tr>
                <td></td>
                <td class=\"text-left name\">";
            // line 80
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 86
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger button\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 89
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 90
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </tbody>

          </table>
        </div>
      </form>
      <div class=\"action-area\">
        ";
        // line 99
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 100
            echo "          <h2 class=\"secondary-title\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
          <p>";
            // line 101
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
          <div class=\"panel-group\" id=\"accordion\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 103
                echo "              ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " </div>
        ";
        }
        // line 106
        echo "        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8 cart-total\">
            <table class=\"table table-bordered\" id=\"total\">
              ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "                <tr>
                  <td class=\"text-right right\"><strong>";
            // line 111
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                  <td class=\"text-right right\">";
            // line 112
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 119
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 120
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
        </div>
      </div>
      ";
        // line 123
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 126
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal2/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 126,  392 => 123,  384 => 120,  378 => 119,  372 => 115,  363 => 112,  359 => 111,  356 => 110,  352 => 109,  347 => 106,  343 => 104,  334 => 103,  330 => 102,  326 => 101,  321 => 100,  319 => 99,  311 => 93,  302 => 90,  298 => 89,  290 => 86,  281 => 80,  277 => 78,  272 => 77,  263 => 74,  259 => 73,  251 => 70,  247 => 69,  240 => 67,  234 => 64,  228 => 63,  224 => 62,  219 => 61,  215 => 60,  210 => 59,  207 => 58,  198 => 57,  191 => 56,  188 => 55,  180 => 54,  166 => 53,  163 => 52,  159 => 51,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  123 => 36,  120 => 35,  114 => 34,  112 => 33,  108 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  81 => 24,  75 => 23,  67 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*     <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
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
/*     <div id="content" class="{{ class }} sc-page">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}*/
/*         {% if weight %}*/
/*           &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive cart-info">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*               <td class="text-center image">{{ column_image }}</td>*/
/*               <td class="text-left name">{{ column_name }}</td>*/
/*               <td class="text-left model">{{ column_model }}</td>*/
/*               <td class="text-left quantity">{{ column_quantity }}</td>*/
/*               <td class="text-right price">{{ column_price }}</td>*/
/*               <td class="text-right total">{{ column_total }}</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a> {% endif %}</td>*/
/*                 <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                   {% if product.option %}*/
/*                     {% for option in product.option %} <br/>*/
/*                       <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                   {% endif %}*/
/*                   {% if product.reward %} <br/>*/
/*                     <small>{{ product.reward }}</small> {% endif %}*/
/*                   {% if product.recurring %} <br/>*/
/*                     <span class="label label-info">{{ text_recurring_item }}</span>*/
/*                     <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*                 <td class="text-left model">{{ product.model }}</td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ product.price }}</td>*/
/*                 <td class="text-right total">{{ product.total }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td></td>*/
/*                 <td class="text-left name">{{ voucher.description }}</td>*/
/*                 <td class="text-left"></td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger button" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ voucher.amount }}</td>*/
/*                 <td class="text-right total">{{ voucher.amount }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/* */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       <div class="action-area">*/
/*         {% if modules %}*/
/*           <h2 class="secondary-title">{{ text_next }}</h2>*/
/*           <p>{{ text_next_choice }}</p>*/
/*           <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*               {{ module }}*/
/*             {% endfor %} </div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*           <div class="col-sm-4 col-sm-offset-8 cart-total">*/
/*             <table class="table table-bordered" id="total">*/
/*               {% for total in totals %}*/
/*                 <tr>*/
/*                   <td class="text-right right"><strong>{{ total.title }}:</strong></td>*/
/*                   <td class="text-right right">{{ total.text }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </table>*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ continue }}" class="btn btn-default button">{{ button_shopping }}</a></div>*/
/*           <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary button">{{ button_checkout }}</a></div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
/* */
