<?php

/* journal2/template/common/cart.twig */
class __TwigTemplate_6597e2395825d5a9c152a0d51b032806769536edbbb1749b5512b068c8cded2e extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle heading\"><a><span id=\"cart-total\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "&nbsp;&nbsp;\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span> <i></i></a></button>
  <div class=\"content\">
    <ul class=\"cart-wrapper\">
      ";
        // line 5
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 6
            echo "        <li class=\"mini-cart-info\">
          <table class=\"table table-striped\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "              <tr>
                <td class=\"text-center image\">";
                // line 10
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
                <td class=\"text-left name\"><a href=\"";
                // line 11
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                  <div>
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 14
                    echo "                      <br/>
                      -
                      <small>";
                    // line 16
                    echo $this->getAttribute($context["option"], "name", array());
                    echo " ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                    ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 19
                    echo "                      <br/>
                      -
                      <small>";
                    // line 21
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "></small>
                    ";
                }
                // line 23
                echo "                  </div>
                </td>
                <td class=\"text-right quantity\">x ";
                // line 25
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
                <td class=\"text-right total\">";
                // line 26
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
                <td class=\"text-center remove\">
                  <button type=\"button\" onclick=\"cart.remove('";
                // line 28
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"\"><i class=\"\"></i></button>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 33
                echo "              <tr>
                <td class=\"text-center\"></td>
                <td class=\"text-left name\">";
                // line 35
                echo $this->getAttribute($context["voucher"], "decription", array());
                echo "</td>
                <td class=\"text-right quantity\">x&nbsp;1</td>
                <td class=\"text-right total\">";
                // line 37
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
                <td class=\"text-center remove\">
                  <button type=\"button\" onclick=\"voucher.remove('";
                // line 39
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"\"><i class=\"\"></i></button>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          </table>
        </li>
        <li>
          <div class=\"mini-cart-total\">
            <table class=\"table table-bordered\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 49
                echo "                <tr>
                  <td class=\"text-right right\"><strong>";
                // line 50
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
                  <td class=\"text-right right\">";
                // line 51
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </table>
            <p class=\"text-right checkout\"><a class=\"button\" href=\"";
            // line 55
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>&nbsp;<a class=\"button\" href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>
          </div>
        </li>
      ";
        } else {
            // line 59
            echo "        <li>
          <p class=\"text-center empty\">";
            // line 60
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        </li>
      ";
        }
        // line 63
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 63,  198 => 60,  195 => 59,  182 => 55,  179 => 54,  170 => 51,  166 => 50,  163 => 49,  159 => 48,  152 => 43,  140 => 39,  135 => 37,  130 => 35,  126 => 33,  121 => 32,  109 => 28,  104 => 26,  100 => 25,  96 => 23,  89 => 21,  85 => 19,  82 => 18,  72 => 16,  68 => 14,  64 => 13,  57 => 11,  43 => 10,  40 => 9,  36 => 8,  32 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block">*/
/*   <button type="button" data-toggle="dropdown" class="btn btn-inverse btn-block btn-lg dropdown-toggle heading"><a><span id="cart-total" data-loading-text="{{ text_loading }}&nbsp;&nbsp;">{{ text_items }}</span> <i></i></a></button>*/
/*   <div class="content">*/
/*     <ul class="cart-wrapper">*/
/*       {% if products or vouchers %}*/
/*         <li class="mini-cart-info">*/
/*           <table class="table table-striped">*/
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a>{% endif %}</td>*/
/*                 <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*                   <div>*/
/*                     {% for option in product.option %}*/
/*                       <br/>*/
/*                       -*/
/*                       <small>{{ option.name }} {{ option.value }}</small>*/
/*                     {% endfor %}*/
/*                     {% if product.recurring %}*/
/*                       <br/>*/
/*                       -*/
/*                       <small>{{ text_recurring }} {{ product.recurring }}></small>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </td>*/
/*                 <td class="text-right quantity">x {{ product.quantity }}</td>*/
/*                 <td class="text-right total">{{ product.total }}</td>*/
/*                 <td class="text-center remove">*/
/*                   <button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class=""><i class=""></i></button>*/
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td class="text-center"></td>*/
/*                 <td class="text-left name">{{ voucher.decription }}</td>*/
/*                 <td class="text-right quantity">x&nbsp;1</td>*/
/*                 <td class="text-right total">{{ voucher.amount }}</td>*/
/*                 <td class="text-center remove">*/
/*                   <button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class=""><i class=""></i></button>*/
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </li>*/
/*         <li>*/
/*           <div class="mini-cart-total">*/
/*             <table class="table table-bordered">*/
/*               {% for total in totals %}*/
/*                 <tr>*/
/*                   <td class="text-right right"><strong>{{ total.title }}</strong></td>*/
/*                   <td class="text-right right">{{ total.text }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </table>*/
/*             <p class="text-right checkout"><a class="button" href="{{ cart }}">{{ text_cart }}</a>&nbsp;<a class="button" href="{{ checkout }}">{{ text_checkout }}</a></p>*/
/*           </div>*/
/*         </li>*/
/*       {% else %}*/
/*         <li>*/
/*           <p class="text-center empty">{{ text_empty }}</p>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
