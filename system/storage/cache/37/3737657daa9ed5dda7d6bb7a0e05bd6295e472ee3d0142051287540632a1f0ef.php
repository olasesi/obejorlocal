<?php

/* sale/order_info.twig */
class __TwigTemplate_a524a9b31b4da7035fb944d68dfddcac13e777b423a8a3106c49992b8440552d extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 19
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 24
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 25
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" target=\"_blank\">";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 29
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 33
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "</td>
              </tr>
            ";
        // line 35
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 36
            echo "            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
              <td>";
            // line 38
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 41
        echo "              </tbody>
            
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 49
        echo (isset($context["text_customer_detail"]) ? $context["text_customer_detail"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 53
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 54
        if ((isset($context["customer"]) ? $context["customer"] : null)) {
            echo " <a href=\"";
            echo (isset($context["customer"]) ? $context["customer"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "</a> ";
        } else {
            // line 55
            echo "                ";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "
                ";
        }
        // line 56
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 59
        echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 60
        echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 63
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 64
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 67
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 68
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 76
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 81
        echo (isset($context["text_invoice"]) ? $context["text_invoice"] : null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 82
        echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 83
        if ( !(isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            // line 84
            echo "                  <button id=\"button-invoice\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_generate"]) ? $context["button_generate"] : null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 86
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 87
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 90
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 91
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 92
        if (((isset($context["customer"]) ? $context["customer"] : null) && (isset($context["reward"]) ? $context["reward"] : null))) {
            // line 93
            echo "                  ";
            if ( !(isset($context["reward_total"]) ? $context["reward_total"] : null)) {
                // line 94
                echo "                  <button id=\"button-reward-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 96
                echo "                  <button id=\"button-reward-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 98
            echo "                  ";
        } else {
            // line 99
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 100
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 103
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "
                  ";
        // line 104
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 105
            echo "                  (<a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["affiliate_firstname"]) ? $context["affiliate_firstname"] : null);
            echo " ";
            echo (isset($context["affiliate_lastname"]) ? $context["affiliate_lastname"] : null);
            echo "</a>)
                  ";
        }
        // line 106
        echo "</td>
                <td class=\"text-right\">";
        // line 107
        echo (isset($context["commission"]) ? $context["commission"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 108
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 109
            echo "                  ";
            if ( !(isset($context["commission_total"]) ? $context["commission_total"] : null)) {
                // line 110
                echo "                  <button id=\"button-commission-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 112
                echo "                  <button id=\"button-commission-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 114
            echo "                  ";
        } else {
            // line 115
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 116
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 125
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 131
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
              ";
        // line 132
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 133
            echo "              <td style=\"width: 50%;\" class=\"text-left\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 134
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 138
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
              ";
        // line 139
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 140
            echo "              <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 141
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 147
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 148
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 149
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 150
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 151
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 157
            echo "          <tr>
            <td class=\"text-left\"><a href=\"";
            // line 158
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              ";
                // line 159
                if (($this->getAttribute($context["option"], "type", array()) != "file")) {
                    // line 160
                    echo "              &nbsp;<small> - ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                } else {
                    // line 161
                    echo "              &nbsp;<small> - ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": <a href=\"";
                    echo $this->getAttribute($context["option"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</a></small> ";
                }
                // line 162
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 163
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 164
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 165
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 166
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 170
            echo "          <tr>
            <td class=\"text-left\"><a href=\"";
            // line 171
            echo $this->getAttribute($context["voucher"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</a></td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 174
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 175
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 179
            echo "          <tr>
            <td colspan=\"4\" class=\"text-right\">";
            // line 180
            echo $this->getAttribute($context["total"], "title", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 181
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "            </tbody>
          
        </table>
        ";
        // line 187
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 188
            echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
            // line 191
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 196
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
            </tr>
          </tbody>
        </table>
        ";
        }
        // line 200
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 204
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 208
        echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 209
        echo (isset($context["tab_additional"]) ? $context["tab_additional"] : null);
        echo "</a></li>
          ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 211
            echo "          <li><a href=\"#tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "title", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br />
            <fieldset>
              <legend>";
        // line 219
        echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 222
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      
                      ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 228
            echo "                      ";
            if (($this->getAttribute($context["order_statuses"], "order_status_id", array()) == (isset($context["order_status_id"]) ? $context["order_status_id"] : null))) {
                // line 229
                echo "                      
                      
                      <option value=\"";
                // line 231
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                      
                      
                      ";
            } else {
                // line 235
                echo "                      
                      
                      <option value=\"";
                // line 237
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                      
                      
                      ";
            }
            // line 241
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                    
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 248
        echo (isset($context["help_override"]) ? $context["help_override"] : null);
        echo "\">";
        echo (isset($context["entry_override"]) ? $context["entry_override"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" />
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 256
        echo (isset($context["entry_notify"]) ? $context["entry_notify"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" />
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 264
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 272
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 275
        if ((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null)) {
            // line 276
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 280
            echo (isset($context["text_account_custom_field"]) ? $context["text_account_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 286
                echo "                <tr>
                  <td>";
                // line 287
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 288
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 296
        echo "            ";
        if ((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null)) {
            // line 297
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 301
            echo (isset($context["text_payment_custom_field"]) ? $context["text_payment_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 307
                echo "                <tr>
                  <td>";
                // line 308
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 309
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 317
        echo "            ";
        if (((isset($context["shipping_method"]) ? $context["shipping_method"] : null) && (isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null))) {
            // line 318
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 322
            echo (isset($context["text_shipping_custom_field"]) ? $context["text_shipping_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 328
                echo "                <tr>
                  <td>";
                // line 329
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 330
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 338
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 342
        echo (isset($context["text_browser"]) ? $context["text_browser"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 347
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</td>
                    <td>";
        // line 348
        echo (isset($context["ip"]) ? $context["ip"] : null);
        echo "</td>
                  </tr>
                ";
        // line 350
        if ((isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null)) {
            // line 351
            echo "                <tr>
                  <td>";
            // line 352
            echo (isset($context["text_forwarded_ip"]) ? $context["text_forwarded_ip"] : null);
            echo "</td>
                  <td>";
            // line 353
            echo (isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 356
        echo "                <tr>
                  <td>";
        // line 357
        echo (isset($context["text_user_agent"]) ? $context["text_user_agent"] : null);
        echo "</td>
                  <td>";
        // line 358
        echo (isset($context["user_agent"]) ? $context["user_agent"] : null);
        echo "</td>
                </tr>
                <tr>
                  <td>";
        // line 361
        echo (isset($context["text_accept_language"]) ? $context["text_accept_language"] : null);
        echo "</td>
                  <td>";
        // line 362
        echo (isset($context["accept_language"]) ? $context["accept_language"] : null);
        echo "</td>
                </tr>
                  </tbody>
                
              </table>
            </div>
          </div>
          ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 370
            echo "          <div class=\"tab-pane\" id=\"tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$(document).delegate('#button-invoice', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 378
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-invoice').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-invoice').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['invoice_no']) {
\t\t\t\t\$('#invoice').html(json['invoice_no']);

\t\t\t\t\$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-reward-add', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addreward&user_token=";
        // line 407
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 426
        echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-reward-remove', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removereward&user_token=";
        // line 437
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 456
        echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-commission-add', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addcommission&user_token=";
        // line 467
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 486
        echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-commission-remove', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removecommission&user_token=";
        // line 497
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 516
        echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var api_token = '';

\$.ajax({
  url: '";
        // line 528
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/login',
  type: 'post',
  dataType: 'json',
  data: 'key=";
        // line 531
        echo (isset($context["api_key"]) ? $context["api_key"] : null);
        echo "',
  crossDomain: true,
  success: function(json) {
    \$('.alert').remove();
    if (json['error']) {
      if (json['error']['key']) {
        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
      }
      if (json['error']['ip']) {
        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 540
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        echo (isset($context["button_ip_add"]) ? $context["button_ip_add"] : null);
        echo "</button></div>');
      }
    }
    if (json['token']) {
      api_token = json['token'];
    }
  },
  error: function(xhr, ajaxOptions, thrownError) {
    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
  }
});

\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 558
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\$('#button-history').on('click', function() {
\tif (typeof verifyStatusChange == 'function'){
\t  if (verifyStatusChange() == false){
\t    return false;
\t  } else{
\t    addOrderInfo();
\t  }
\t} else{
\t  addOrderInfo();
\t}


\t\$.ajax({
\t\turl: '";
        // line 573
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/history&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=";
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 591
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function changeStatus(){
  var status_id = \$('select[name=\"order_status_id\"]').val();
  \$('#openbay-info').remove();
  \$.ajax({
    url: 'index.php?route=marketplace/openbay/getorderinfo&user_token=";
        // line 608
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "&status_id='+status_id,
    dataType: 'html',
    success: function (html) {
      \$('#history').after(html);
    }
  });
}

function addOrderInfo(){
  var status_id = \$('select[name=\"order_status_id\"]').val();
  \$.ajax({
    url: 'index.php?route=marketplace/openbay/addorderinfo&user_token=";
        // line 619
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "&status_id='+status_id,
    type: 'post',
    dataType: 'html',
    data: \$(\".openbay-data\").serialize()
  });
}

\$(document).ready(function() {
  changeStatus();
});

\$('select[name=\"order_status_id\"]').change(function(){
  changeStatus();
});
//--></script> 
</div>
";
        // line 635
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 635,  1242 => 619,  1226 => 608,  1204 => 591,  1177 => 573,  1157 => 558,  1134 => 540,  1122 => 531,  1116 => 528,  1101 => 516,  1077 => 497,  1063 => 486,  1039 => 467,  1025 => 456,  1001 => 437,  987 => 426,  963 => 407,  929 => 378,  920 => 371,  909 => 370,  905 => 369,  895 => 362,  891 => 361,  885 => 358,  881 => 357,  878 => 356,  872 => 353,  868 => 352,  865 => 351,  863 => 350,  858 => 348,  854 => 347,  846 => 342,  840 => 338,  833 => 333,  824 => 330,  820 => 329,  817 => 328,  813 => 327,  805 => 322,  799 => 318,  796 => 317,  789 => 312,  780 => 309,  776 => 308,  773 => 307,  769 => 306,  761 => 301,  755 => 297,  752 => 296,  745 => 291,  736 => 288,  732 => 287,  729 => 286,  725 => 285,  717 => 280,  711 => 276,  709 => 275,  701 => 272,  690 => 264,  679 => 256,  666 => 248,  658 => 242,  652 => 241,  643 => 237,  639 => 235,  630 => 231,  626 => 229,  623 => 228,  619 => 227,  611 => 222,  605 => 219,  597 => 213,  586 => 211,  582 => 210,  578 => 209,  574 => 208,  567 => 204,  561 => 200,  553 => 196,  545 => 191,  540 => 188,  538 => 187,  533 => 184,  524 => 181,  520 => 180,  517 => 179,  512 => 178,  503 => 175,  499 => 174,  491 => 171,  488 => 170,  483 => 169,  474 => 166,  470 => 165,  466 => 164,  462 => 163,  454 => 162,  445 => 161,  438 => 160,  436 => 159,  426 => 158,  423 => 157,  419 => 156,  411 => 151,  407 => 150,  403 => 149,  399 => 148,  395 => 147,  387 => 141,  381 => 140,  379 => 139,  375 => 138,  369 => 134,  363 => 133,  361 => 132,  357 => 131,  348 => 125,  337 => 116,  333 => 115,  330 => 114,  322 => 112,  314 => 110,  311 => 109,  309 => 108,  305 => 107,  302 => 106,  292 => 105,  290 => 104,  286 => 103,  281 => 100,  277 => 99,  274 => 98,  266 => 96,  258 => 94,  255 => 93,  253 => 92,  249 => 91,  245 => 90,  240 => 87,  236 => 86,  228 => 84,  226 => 83,  222 => 82,  218 => 81,  210 => 76,  199 => 68,  195 => 67,  187 => 64,  183 => 63,  177 => 60,  173 => 59,  168 => 56,  160 => 55,  150 => 54,  146 => 53,  139 => 49,  129 => 41,  123 => 38,  119 => 37,  116 => 36,  114 => 35,  109 => 33,  105 => 32,  99 => 29,  95 => 28,  87 => 25,  83 => 24,  75 => 19,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ invoice }}" target="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fa fa-print"></i></a> <a href="{{ shipping }}" target="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fa fa-truck"></i></a> <a href="{{ edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> {{ text_order_detail }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td style="width: 1%;"><button data-toggle="tooltip" title="{{ text_store }}" class="btn btn-info btn-xs"><i class="fa fa-shopping-cart fa-fw"></i></button></td>*/
/*                 <td><a href="{{ store_url }}" target="_blank">{{ store_name }}</a></td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button data-toggle="tooltip" title="{{ text_date_added }}" class="btn btn-info btn-xs"><i class="fa fa-calendar fa-fw"></i></button></td>*/
/*                 <td>{{ date_added }}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button data-toggle="tooltip" title="{{ text_payment_method }}" class="btn btn-info btn-xs"><i class="fa fa-credit-card fa-fw"></i></button></td>*/
/*                 <td>{{ payment_method }}</td>*/
/*               </tr>*/
/*             {% if shipping_method %}*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_shipping_method }}" class="btn btn-info btn-xs"><i class="fa fa-truck fa-fw"></i></button></td>*/
/*               <td>{{ shipping_method }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-user"></i> {{ text_customer_detail }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td style="width: 1%;"><button data-toggle="tooltip" title="{{ text_customer }}" class="btn btn-info btn-xs"><i class="fa fa-user fa-fw"></i></button></td>*/
/*               <td>{% if customer %} <a href="{{ customer }}" target="_blank">{{ firstname }} {{ lastname }}</a> {% else %}*/
/*                 {{ firstname }} {{ lastname }}*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_customer_group }}" class="btn btn-info btn-xs"><i class="fa fa-group fa-fw"></i></button></td>*/
/*               <td>{{ customer_group }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_email }}" class="btn btn-info btn-xs"><i class="fa fa-envelope-o fa-fw"></i></button></td>*/
/*               <td><a href="mailto:{{ email }}">{{ email }}</a></td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_telephone }}" class="btn btn-info btn-xs"><i class="fa fa-phone fa-fw"></i></button></td>*/
/*               <td>{{ telephone }}</td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-cog"></i> {{ text_option }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_invoice }}</td>*/
/*                 <td id="invoice" class="text-right">{{ invoice_no }}</td>*/
/*                 <td style="width: 1%;" class="text-center">{% if not invoice_no %}*/
/*                   <button id="button-invoice" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_generate }}" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_reward }}</td>*/
/*                 <td class="text-right">{{ reward }}</td>*/
/*                 <td class="text-center">{% if customer and reward %}*/
/*                   {% if not reward_total %}*/
/*                   <button id="button-reward-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% else %}*/
/*                   <button id="button-reward-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>*/
/*                   {% endif %}*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_affiliate }}*/
/*                   {% if affiliate %}*/
/*                   (<a href="{{ affiliate }}">{{ affiliate_firstname }} {{ affiliate_lastname }}</a>)*/
/*                   {% endif %}</td>*/
/*                 <td class="text-right">{{ commission }}</td>*/
/*                 <td class="text-center">{% if affiliate %}*/
/*                   {% if not commission_total %}*/
/*                   <button id="button-commission-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% else %}*/
/*                   <button id="button-commission-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>*/
/*                   {% endif %}*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-info-circle"></i> {{ text_order }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td style="width: 50%;" class="text-left">{{ text_payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*               <td style="width: 50%;" class="text-left">{{ text_shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*               <td class="text-left">{{ shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </tbody>*/
/*         </table>*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% for option in product.option %} <br />*/
/*               {% if option.type != 'file' %}*/
/*               &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% else %}*/
/*               &nbsp;<small> - {{ option.name }}: <a href="{{ option.href }}">{{ option.value }}</a></small> {% endif %}*/
/*               {% endfor %}</td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.quantity }}</td>*/
/*             <td class="text-right">{{ product.price }}</td>*/
/*             <td class="text-right">{{ product.total }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-left"><a href="{{ voucher.href }}">{{ voucher.description }}</a></td>*/
/*             <td class="text-left"></td>*/
/*             <td class="text-right">1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td colspan="4" class="text-right">{{ total.title }}</td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*         {% if comment %}*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td>{{ text_comment }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td>{{ comment }}</td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*         {% endif %} </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-comment-o"></i> {{ text_history }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*           <li><a href="#tab-additional" data-toggle="tab">{{ tab_additional }}</a></li>*/
/*           {% for tab in tabs %}*/
/*           <li><a href="#tab-{{ tab.code }}" data-toggle="tab">{{ tab.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-history">*/
/*             <div id="history"></div>*/
/*             <br />*/
/*             <fieldset>*/
/*               <legend>{{ text_history_add }}</legend>*/
/*               <form class="form-horizontal">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       */
/*                       {% for order_statuses in order_statuses %}*/
/*                       {% if order_statuses.order_status_id == order_status_id %}*/
/*                       */
/*                       */
/*                       <option value="{{ order_statuses.order_status_id }}" selected="selected">{{ order_statuses.name }}</option>*/
/*                       */
/*                       */
/*                       {% else %}*/
/*                       */
/*                       */
/*                       <option value="{{ order_statuses.order_status_id }}">{{ order_statuses.name }}</option>*/
/*                       */
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-override"><span data-toggle="tooltip" title="{{ help_override }}">{{ entry_override }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                       <input type="checkbox" name="override" value="1" id="input-override" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-notify">{{ entry_notify }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                       <input type="checkbox" name="notify" value="1" id="input-notify" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </form>*/
/*             </fieldset>*/
/*             <div class="text-right">*/
/*               <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-additional"> {% if account_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_account_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in account_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if payment_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_payment_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in payment_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if shipping_method and shipping_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_shipping_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in shipping_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_browser }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>{{ text_ip }}</td>*/
/*                     <td>{{ ip }}</td>*/
/*                   </tr>*/
/*                 {% if forwarded_ip %}*/
/*                 <tr>*/
/*                   <td>{{ text_forwarded_ip }}</td>*/
/*                   <td>{{ forwarded_ip }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                 <tr>*/
/*                   <td>{{ text_user_agent }}</td>*/
/*                   <td>{{ user_agent }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>{{ text_accept_language }}</td>*/
/*                   <td>{{ accept_language }}</td>*/
/*                 </tr>*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*           {% for tab in tabs %}*/
/*           <div class="tab-pane" id="tab-{{ tab.code }}">{{ tab.content }}</div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $(document).delegate('#button-invoice', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/createinvoiceno&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-invoice').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-invoice').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['invoice_no']) {*/
/* 				$('#invoice').html(json['invoice_no']);*/
/* */
/* 				$('#button-invoice').replaceWith('<button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-reward-add', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addreward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-add').replaceWith('<button id="button-reward-remove" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-reward-remove', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removereward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-remove').replaceWith('<button id="button-reward-add" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-commission-add', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addcommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-add').replaceWith('<button id="button-commission-remove" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-commission-remove', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removecommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-remove').replaceWith('<button id="button-commission-add" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* var api_token = '';*/
/* */
/* $.ajax({*/
/*   url: '{{ catalog }}index.php?route=api/login',*/
/*   type: 'post',*/
/*   dataType: 'json',*/
/*   data: 'key={{ api_key }}',*/
/*   crossDomain: true,*/
/*   success: function(json) {*/
/*     $('.alert').remove();*/
/*     if (json['error']) {*/
/*       if (json['error']['key']) {*/
/*         $('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['key'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*       }*/
/*       if (json['error']['ip']) {*/
/*         $('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['ip'] + ' <button type="button" id="button-ip-add" data-loading-text="{{ text_loading }}" class="btn btn-danger btn-xs pull-right"><i class="fa fa-plus"></i>{{ button_ip_add }}</button></div>');*/
/*       }*/
/*     }*/
/*     if (json['token']) {*/
/*       api_token = json['token'];*/
/*     }*/
/*   },*/
/*   error: function(xhr, ajaxOptions, thrownError) {*/
/*     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*   }*/
/* });*/
/* */
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* $('#button-history').on('click', function() {*/
/* 	if (typeof verifyStatusChange == 'function'){*/
/* 	  if (verifyStatusChange() == false){*/
/* 	    return false;*/
/* 	  } else{*/
/* 	    addOrderInfo();*/
/* 	  }*/
/* 	} else{*/
/* 	  addOrderInfo();*/
/* 	}*/
/* */
/* */
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/order/history&api_token={{ api_token }}&store_id={{ store_id }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'order_status_id=' + encodeURIComponent($('select[name=\'order_status_id\']').val()) + '&notify=' + ($('input[name=\'notify\']').prop('checked') ? 1 : 0) + '&override=' + ($('input[name=\'override\']').prop('checked') ? 1 : 0) + '&append=' + ($('input[name=\'append\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-history').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-history').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* 				$('#history').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* function changeStatus(){*/
/*   var status_id = $('select[name="order_status_id"]').val();*/
/*   $('#openbay-info').remove();*/
/*   $.ajax({*/
/*     url: 'index.php?route=marketplace/openbay/getorderinfo&user_token={{ user_token }}&order_id={{ order_id }}&status_id='+status_id,*/
/*     dataType: 'html',*/
/*     success: function (html) {*/
/*       $('#history').after(html);*/
/*     }*/
/*   });*/
/* }*/
/* */
/* function addOrderInfo(){*/
/*   var status_id = $('select[name="order_status_id"]').val();*/
/*   $.ajax({*/
/*     url: 'index.php?route=marketplace/openbay/addorderinfo&user_token={{ user_token }}&order_id={{ order_id }}&status_id='+status_id,*/
/*     type: 'post',*/
/*     dataType: 'html',*/
/*     data: $(".openbay-data").serialize()*/
/*   });*/
/* }*/
/* */
/* $(document).ready(function() {*/
/*   changeStatus();*/
/* });*/
/* */
/* $('select[name="order_status_id"]').change(function(){*/
/*   changeStatus();*/
/* });*/
/* //--></script> */
/* </div>*/
/* {{ footer }} */
