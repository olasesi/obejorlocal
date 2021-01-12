<?php

/* journal2/template/account/order_info.twig */
class __TwigTemplate_bff84e533989539ceddd93b37f78a4751d10df6186afc5d264d35349ee9106fa extends Twig_Template
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
<div id=\"container\" class=\"container j-container oc-newsletter\">
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
            echo "    <div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 14
            echo "    <div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 27
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <table class=\"table table-bordered table-hover list\">
        <thead>
        <tr>
          <td class=\"text-left\" colspan=\"2\">";
        // line 31
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class=\"text-left\" style=\"width: 50%;\">";
        // line 36
        if ((isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            echo " <b>";
            echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
            echo "</b> ";
            echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
            echo "<br/>
            ";
        }
        // line 37
        echo " <b>";
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> #";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br/>
            <b>";
        // line 38
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
          <td class=\"text-left\" style=\"width: 50%;\">";
        // line 39
        if ((isset($context["payment_method"]) ? $context["payment_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</b> ";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "<br/>
            ";
        }
        // line 41
        echo "            ";
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo " ";
        }
        echo "</td>
        </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover list\">
        <thead>
        <tr>
          <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 48
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
          ";
        // line 49
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 50
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
          ";
        }
        // line 51
        echo " </tr>
        </thead>
        <tbody>
        <tr>
          <td class=\"text-left\">";
        // line 55
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
          ";
        // line 56
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 57
            echo "            <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
          ";
        }
        // line 58
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover list\">
          <thead>
          <tr>
            <td class=\"text-left\">";
        // line 65
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
            <td class=\"text-left\">";
        // line 66
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
            <td class=\"text-right\">";
        // line 67
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
            <td class=\"text-right\">";
        // line 68
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
            <td class=\"text-right\">";
        // line 69
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            ";
        // line 70
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 71
            echo "              <td style=\"width: 20px;\"></td>
            ";
        }
        // line 72
        echo " </tr>
          </thead>
          <tbody>

          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 77
            echo "            <tr>
              <td class=\"text-left\">";
            // line 78
            echo $this->getAttribute($context["product"], "name", array());
            echo "
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
                  &nbsp;
                  <small> - ";
                // line 81
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
              <td class=\"text-left\">";
            // line 82
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 83
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 84
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 85
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 86
            if ($this->getAttribute($context["product"], "reorder", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "reorder", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reorder"]) ? $context["button_reorder"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo $this->getAttribute($context["product"], "return", array());
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_return"]) ? $context["button_return"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 90
            echo "            <tr>
              <td class=\"text-left\">";
            // line 91
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-right\">1</td>
              <td class=\"text-right\">";
            // line 94
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 95
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              ";
            // line 96
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 97
                echo "                <td></td>
              ";
            }
            // line 98
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "          </tbody>

          <tfoot>

          ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 105
            echo "            <tr>
              <td colspan=\"3\"></td>
              <td class=\"text-right\"><b>";
            // line 107
            echo $this->getAttribute($context["total"], "title", array());
            echo "</b></td>
              <td class=\"text-right\">";
            // line 108
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
              ";
            // line 109
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 110
                echo "                <td></td>
              ";
            }
            // line 111
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "          </tfoot>

        </table>
      </div>
      ";
        // line 117
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 118
            echo "        <table class=\"table table-bordered table-hover list\">
          <thead>
          <tr>
            <td class=\"text-left\">";
            // line 121
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 126
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
          </tr>
          </tbody>
        </table>
      ";
        }
        // line 131
        echo "      ";
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 132
            echo "        <h2 class=\"secondary-title\">";
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</h2>
        <table class=\"table table-bordered table-hover list\">
          <thead>
          <tr>
            <td class=\"text-left\">";
            // line 136
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 137
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 138
            echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
            echo "</td>
          </tr>
          </thead>
          <tbody>

          ";
            // line 143
            if ((isset($context["histories"]) ? $context["histories"] : null)) {
                // line 144
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 145
                    echo "              <tr>
                <td class=\"text-left\">";
                    // line 146
                    echo $this->getAttribute($context["history"], "date_added", array());
                    echo "</td>
                <td class=\"text-left\">";
                    // line 147
                    echo $this->getAttribute($context["history"], "status", array());
                    echo "</td>
                <td class=\"text-left\">";
                    // line 148
                    echo $this->getAttribute($context["history"], "comment", array());
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "          ";
            } else {
                // line 152
                echo "            <tr>
              <td colspan=\"3\" class=\"text-center\">";
                // line 153
                echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
                echo "</td>
            </tr>
          ";
            }
            // line 156
            echo "          </tbody>

        </table>
      ";
        }
        // line 160
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 161
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 163
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 166
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 166,  476 => 163,  469 => 161,  466 => 160,  460 => 156,  454 => 153,  451 => 152,  448 => 151,  439 => 148,  435 => 147,  431 => 146,  428 => 145,  423 => 144,  421 => 143,  413 => 138,  409 => 137,  405 => 136,  397 => 132,  394 => 131,  386 => 126,  378 => 121,  373 => 118,  371 => 117,  365 => 113,  358 => 111,  354 => 110,  352 => 109,  348 => 108,  344 => 107,  340 => 105,  336 => 104,  330 => 100,  323 => 98,  319 => 97,  317 => 96,  313 => 95,  309 => 94,  303 => 91,  300 => 90,  295 => 89,  276 => 86,  272 => 85,  268 => 84,  264 => 83,  260 => 82,  249 => 81,  242 => 79,  238 => 78,  235 => 77,  231 => 76,  225 => 72,  221 => 71,  219 => 70,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  190 => 58,  184 => 57,  182 => 56,  178 => 55,  172 => 51,  166 => 50,  164 => 49,  160 => 48,  143 => 41,  134 => 39,  128 => 38,  121 => 37,  112 => 36,  104 => 31,  97 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container oc-newsletter">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
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
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       <table class="table table-bordered table-hover list">*/
/*         <thead>*/
/*         <tr>*/
/*           <td class="text-left" colspan="2">{{ text_order_detail }}</td>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <tr>*/
/*           <td class="text-left" style="width: 50%;">{% if invoice_no %} <b>{{ text_invoice_no }}</b> {{ invoice_no }}<br/>*/
/*             {% endif %} <b>{{ text_order_id }}</b> #{{ order_id }}<br/>*/
/*             <b>{{ text_date_added }}</b> {{ date_added }}</td>*/
/*           <td class="text-left" style="width: 50%;">{% if payment_method %} <b>{{ text_payment_method }}</b> {{ payment_method }}<br/>*/
/*             {% endif %}*/
/*             {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }} {% endif %}</td>*/
/*         </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <table class="table table-bordered table-hover list">*/
/*         <thead>*/
/*         <tr>*/
/*           <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_payment_address }}</td>*/
/*           {% if shipping_address %}*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_shipping_address }}</td>*/
/*           {% endif %} </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <tr>*/
/*           <td class="text-left">{{ payment_address }}</td>*/
/*           {% if shipping_address %}*/
/*             <td class="text-left">{{ shipping_address }}</td>*/
/*           {% endif %} </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover list">*/
/*           <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_name }}</td>*/
/*             <td class="text-left">{{ column_model }}</td>*/
/*             <td class="text-right">{{ column_quantity }}</td>*/
/*             <td class="text-right">{{ column_price }}</td>*/
/*             <td class="text-right">{{ column_total }}</td>*/
/*             {% if products %}*/
/*               <td style="width: 20px;"></td>*/
/*             {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/* */
/*           {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-left">{{ product.name }}*/
/*                 {% for option in product.option %} <br/>*/
/*                   &nbsp;*/
/*                   <small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-right">{{ product.quantity }}</td>*/
/*               <td class="text-right">{{ product.price }}</td>*/
/*               <td class="text-right">{{ product.total }}</td>*/
/*               <td class="text-right" style="white-space: nowrap;">{% if product.reorder %} <a href="{{ product.reorder }}" data-toggle="tooltip" title="{{ button_reorder }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a> {% endif %} <a href="{{ product.return }}" data-toggle="tooltip" title="{{ button_return }}" class="btn btn-danger"><i class="fa fa-reply"></i></a></td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-right">1</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               {% if products %}*/
/*                 <td></td>*/
/*               {% endif %} </tr>*/
/*           {% endfor %}*/
/*           </tbody>*/
/* */
/*           <tfoot>*/
/* */
/*           {% for total in totals %}*/
/*             <tr>*/
/*               <td colspan="3"></td>*/
/*               <td class="text-right"><b>{{ total.title }}</b></td>*/
/*               <td class="text-right">{{ total.text }}</td>*/
/*               {% if products %}*/
/*                 <td></td>*/
/*               {% endif %} </tr>*/
/*           {% endfor %}*/
/*           </tfoot>*/
/* */
/*         </table>*/
/*       </div>*/
/*       {% if comment %}*/
/*         <table class="table table-bordered table-hover list">*/
/*           <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ text_comment }}</td>*/
/*           </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ comment }}</td>*/
/*           </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       {% endif %}*/
/*       {% if histories %}*/
/*         <h2 class="secondary-title">{{ text_history }}</h2>*/
/*         <table class="table table-bordered table-hover list">*/
/*           <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_date_added }}</td>*/
/*             <td class="text-left">{{ column_status }}</td>*/
/*             <td class="text-left">{{ column_comment }}</td>*/
/*           </tr>*/
/*           </thead>*/
/*           <tbody>*/
/* */
/*           {% if histories %}*/
/*             {% for history in histories %}*/
/*               <tr>*/
/*                 <td class="text-left">{{ history.date_added }}</td>*/
/*                 <td class="text-left">{{ history.status }}</td>*/
/*                 <td class="text-left">{{ history.comment }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           {% else %}*/
/*             <tr>*/
/*               <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*             </tr>*/
/*           {% endif %}*/
/*           </tbody>*/
/* */
/*         </table>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
