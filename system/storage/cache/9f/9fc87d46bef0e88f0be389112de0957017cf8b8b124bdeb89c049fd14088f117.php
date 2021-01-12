<?php

/* customer/customer_form.twig */
class __TwigTemplate_ba9e63ade454244f0d5e0ef1da0ebda114c49a20e97dde1097841df630477e8b extends Twig_Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_affiliate"]) ? $context["tab_affiliate"] : null);
        echo "</a></li>
            ";
        // line 30
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 31
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 32
            echo (isset($context["tab_transaction"]) ? $context["tab_transaction"] : null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 33
            echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 34
            echo (isset($context["tab_ip"]) ? $context["tab_ip"] : null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 42
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            echo "                    <li><a href=\"#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "').remove();\"></i> ";
            echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
            echo " ";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "</a></li>
                    ";
            // line 46
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_address_add"]) ? $context["button_address_add"] : null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 57
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                              ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 62
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            } else {
                // line 64
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            }
            // line 66
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 71
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 74
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 75
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                            ";
        }
        // line 76
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 79
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 81
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                            ";
        // line 82
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 83
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                            ";
        }
        // line 84
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 87
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 89
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 90
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 91
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                            ";
        }
        // line 92
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 95
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 97
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 98
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 99
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                            ";
        }
        // line 100
        echo "</div>
                        </div>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 103
            echo "                        ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 104
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 105
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 106
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 108
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 109
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                              ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 111
                        echo "                              ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 112
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        } else {
                            // line 114
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        }
                        // line 116
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "                            </select>
                            ";
                    // line 118
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 119
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 120
                    echo "</div>
                        </div>
                        ";
                }
                // line 123
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 124
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 125
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        echo "                              <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 129
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 130
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 131
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        } else {
                            // line 133
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 134
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 135
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        }
                        // line 136
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo " </div>
                            ";
                    // line 138
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 139
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 140
                    echo "</div>
                        </div>
                        ";
                }
                // line 143
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 144
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 145
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 148
                        echo "                              <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 149
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 150
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 151
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        } else {
                            // line 153
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 154
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 155
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        }
                        // line 156
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "</div>
                            ";
                    // line 158
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 159
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 160
                    echo "</div>
                        </div>
                        ";
                }
                // line 163
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 164
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 165
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 167
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                            ";
                    // line 168
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 169
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 170
                    echo "</div>
                        </div>
                        ";
                }
                // line 173
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 174
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 175
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 177
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                            ";
                    // line 178
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 179
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 180
                    echo "</div>
                        </div>
                        ";
                }
                // line 183
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 184
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 185
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 187
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 188
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                            ";
                    // line 189
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 190
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 191
                    echo "</div>
                        </div>
                        ";
                }
                // line 194
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 195
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 199
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 203
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 204
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 205
                    echo "</div>
                        </div>
                        ";
                }
                // line 208
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 209
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 210
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 213
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 217
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 218
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 219
                    echo "</div>
                        </div>
                        ";
                }
                // line 222
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 223
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 224
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 227
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 231
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 232
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 233
                    echo "</div>
                        </div>
                        ";
                }
                // line 236
                echo "                        ";
            }
            // line 237
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 240
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 242
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 244
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            ";
        // line 245
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 246
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                            ";
        }
        // line 247
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 250
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 252
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            ";
        // line 253
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 254
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                            ";
        }
        // line 255
        echo "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 259
        echo (isset($context["text_other"]) ? $context["text_other"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 261
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 264
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 265
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 266
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 268
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 269
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 271
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 275
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 278
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 279
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 280
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 282
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 283
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 285
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\">";
        // line 289
        echo (isset($context["entry_safe"]) ? $context["entry_safe"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 292
        if ((isset($context["safe"]) ? $context["safe"] : null)) {
            // line 293
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 294
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        } else {
            // line 296
            echo "                              <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 297
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        }
        // line 299
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 304
        $context["address_row"] = 1;
        // line 305
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 306
            echo "                    <div class=\"tab-pane\" id=\"tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"address[";
            // line 307
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_id]\" value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 309
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 311
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][firstname]\" value=\"";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "\" id=\"input-firstname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 312
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array())) {
                // line 313
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array());
                echo "</div>
                          ";
            }
            // line 314
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 317
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 319
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][lastname]\" value=\"";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "\" id=\"input-lastname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 320
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array())) {
                // line 321
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array());
                echo "</div>
                          ";
            }
            // line 322
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 325
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 327
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][company]\" value=\"";
            echo $this->getAttribute($context["address"], "company", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "\" id=\"input-company";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 331
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 333
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_1]\" value=\"";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "\" id=\"input-address-1";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 334
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array())) {
                // line 335
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array());
                echo "</div>
                          ";
            }
            // line 336
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 339
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 341
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_2]\" value=\"";
            echo $this->getAttribute($context["address"], "address_2", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "\" id=\"input-address-2";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 345
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 347
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][city]\" value=\"";
            echo $this->getAttribute($context["address"], "city", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "\" id=\"input-city";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 348
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
                // line 349
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
                echo "</div>
                          ";
            }
            // line 350
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 353
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 355
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][postcode]\" value=\"";
            echo $this->getAttribute($context["address"], "postcode", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "\" id=\"input-postcode";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 356
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array())) {
                // line 357
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array());
                echo "</div>
                          ";
            }
            // line 358
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 361
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 363
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][country_id]\" id=\"input-country";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"country(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "zone_id", array());
            echo "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 364
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                            ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 366
                echo "                            ";
                if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute($context["address"], "country_id", array()))) {
                    // line 367
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                } else {
                    // line 369
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                }
                // line 371
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                          </select>
                          ";
            // line 373
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array())) {
                // line 374
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array());
                echo "</div>
                          ";
            }
            // line 375
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 378
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 380
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][zone_id]\" id=\"input-zone";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\">
                          </select>
                          ";
            // line 382
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array())) {
                // line 383
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array());
                echo "</div>
                          ";
            }
            // line 384
            echo "</div>
                      </div>
                      ";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 387
                echo "                      ";
                if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                    // line 388
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                        // line 389
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 390
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 392
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 393
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                            ";
                        // line 394
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 395
                            echo "                            ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 396
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 398
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 400
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 401
                        echo "                          </select>
                          ";
                        // line 402
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 403
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 404
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 407
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                        // line 408
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 409
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 411
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 412
                            echo "                            <div class=\"radio\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 413
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 414
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 415
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 417
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 418
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 419
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            }
                            // line 420
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 421
                        echo " </div>
                          ";
                        // line 422
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 423
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 424
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 427
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                        // line 428
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 429
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 431
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 432
                            echo "                            <div class=\"checkbox\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 433
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 434
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 435
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 437
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 438
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 439
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            }
                            // line 440
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 441
                        echo " </div>
                          ";
                        // line 442
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 443
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 444
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 447
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                        // line 448
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 449
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 451
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                          ";
                        // line 452
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 453
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 454
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 457
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                        // line 458
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 459
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 461
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "</textarea>
                          ";
                        // line 462
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 463
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 464
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 467
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                        // line 468
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 469
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 471
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 472
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                        echo "\" />
                          ";
                        // line 473
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 474
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 475
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 478
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                        // line 479
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 480
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 483
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 487
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 488
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 489
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 492
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                        // line 493
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 494
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 497
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 501
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 502
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 503
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 506
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                        // line 507
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 508
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 511
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          ";
                        // line 515
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 516
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 517
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 520
                    echo "                      ";
                }
                // line 521
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 523
            echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">";
            // line 525
            if ((($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null)) ||  !(isset($context["addresses"]) ? $context["addresses"] : null))) {
                // line 526
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" checked=\"checked\" />
                            ";
            } else {
                // line 528
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" />
                            ";
            }
            // line 529
            echo "</label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 533
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 534
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 541
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 543
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 545
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 549
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 551
        echo (isset($context["website"]) ? $context["website"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 555
        echo (isset($context["help_tracking"]) ? $context["help_tracking"] : null);
        echo "\">";
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 557
        echo (isset($context["tracking"]) ? $context["tracking"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "\" id=\"input-tracking\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 561
        echo (isset($context["help_commission"]) ? $context["help_commission"] : null);
        echo "\">";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 563
        echo (isset($context["commission"]) ? $context["commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 567
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 568
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 569
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 570
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 572
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 573
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 574
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 575
                        echo "                      ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 576
                            echo "                      <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                      ";
                        } else {
                            // line 578
                            echo "                      <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                      ";
                        }
                        // line 580
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 581
                    echo "                    </select>
                    ";
                    // line 582
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 583
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 584
                    echo "</div>
                </div>
                ";
                }
                // line 587
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 588
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 589
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 591
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 592
                        echo "                      <div class=\"radio\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 593
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 594
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                          ";
                            // line 595
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        } else {
                            // line 597
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 598
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                          ";
                            // line 599
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        }
                        // line 600
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 601
                    echo " </div>
                    ";
                    // line 602
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 603
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 604
                    echo "</div>
                </div>
                ";
                }
                // line 607
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 608
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 609
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 611
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 612
                        echo "                      <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 613
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 614
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                          ";
                            // line 615
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        } else {
                            // line 617
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 618
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                          ";
                            // line 619
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        }
                        // line 620
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 621
                    echo " </div>
                    ";
                    // line 622
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 623
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 624
                    echo "</div>
                </div>
                ";
                }
                // line 627
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 628
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 629
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 631
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    ";
                    // line 632
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 633
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 634
                    echo "</div>
                </div>
                ";
                }
                // line 637
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 638
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 639
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 641
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                    ";
                    // line 642
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 643
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 644
                    echo "</div>
                </div>
                ";
                }
                // line 647
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 648
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 649
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 651
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 652
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                    ";
                    // line 653
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 654
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 655
                    echo "</div>
                </div>
                ";
                }
                // line 658
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 659
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 660
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 663
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 667
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 668
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 669
                    echo "</div>
                </div>
                ";
                }
                // line 672
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 673
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 674
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 677
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 681
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 682
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 683
                    echo "</div>
                </div>
                ";
                }
                // line 686
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 687
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 688
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 691
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 695
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 696
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 697
                    echo "</div>
                </div>
                ";
                }
                // line 700
                echo "                ";
            }
            // line 701
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 704
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 706
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 708
        echo (isset($context["tax"]) ? $context["tax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 712
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 715
        if (((isset($context["payment"]) ? $context["payment"] : null) == "cheque")) {
            // line 716
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 718
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 720
        echo "                        ";
        echo (isset($context["text_cheque"]) ? $context["text_cheque"] : null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 723
        if (((isset($context["payment"]) ? $context["payment"] : null) == "paypal")) {
            // line 724
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 726
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 728
        echo "                        ";
        echo (isset($context["text_paypal"]) ? $context["text_paypal"] : null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 731
        if (((isset($context["payment"]) ? $context["payment"] : null) == "bank")) {
            // line 732
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 734
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 736
        echo "                        ";
        echo (isset($context["text_bank"]) ? $context["text_bank"] : null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 742
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 744
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 745
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            // line 746
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "</div>
                      ";
        }
        // line 747
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 752
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 754
        echo (isset($context["paypal"]) ? $context["paypal"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 755
        if ((isset($context["error_paypal"]) ? $context["error_paypal"] : null)) {
            // line 756
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_paypal"]) ? $context["error_paypal"] : null);
            echo "</div>
                      ";
        }
        // line 757
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 762
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 764
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 768
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 770
        echo (isset($context["bank_branch_number"]) ? $context["bank_branch_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 774
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 776
        echo (isset($context["bank_swift_code"]) ? $context["bank_swift_code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 780
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 782
        echo (isset($context["bank_account_name"]) ? $context["bank_account_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 783
        if ((isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null)) {
            // line 784
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null);
            echo "</div>
                      ";
        }
        // line 785
        echo "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 788
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 790
        echo (isset($context["bank_account_number"]) ? $context["bank_account_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 791
        if ((isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null)) {
            // line 792
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null);
            echo "</div>
                      ";
        }
        // line 793
        echo "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 797
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 800
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 801
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 802
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 804
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 805
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        }
        // line 807
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            ";
        // line 812
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 813
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 815
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 820
            echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 822
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 824
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 829
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 834
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 839
            echo (isset($context["text_transaction_add"]) ? $context["text_transaction_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 841
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 843
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 847
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 849
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 854
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_transaction_add"]) ? $context["button_transaction_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 859
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 864
            echo (isset($context["text_reward_add"]) ? $context["text_reward_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 866
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 868
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 872
            echo (isset($context["help_points"]) ? $context["help_points"] : null);
            echo "\">";
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 874
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 879
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
            echo "</button>
              </div>
            </div>
            ";
        }
        // line 883
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 885
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 909
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 934
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 941
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 942
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 946
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 947
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 951
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 952
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 956
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 957
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 961
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 962
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 966
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 967
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 971
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 972
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 976
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 978
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
      ";
        // line 979
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 980
            echo "      html += '         <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 982
        echo "      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 986
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 987
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 991
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 992
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 993
                echo "    ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 994
                    echo "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 995
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 996
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 998
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 999
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>';

    ";
                    // line 1001
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1002
                        echo "    html += '  \t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                        echo "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1004
                    echo "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 1009
                echo "
    ";
                // line 1010
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 1011
                    echo "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 1012
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 1016
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1017
                        echo "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1019
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1024
                echo "
    ";
                // line 1025
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 1026
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1027
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 1031
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1032
                        echo "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1034
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1039
                echo "
    ";
                // line 1040
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 1041
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1042
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1044
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1048
                echo "
    ";
                // line 1049
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 1050
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1051
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1053
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1057
                echo "
    ";
                // line 1058
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 1059
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1060
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 1062
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 1063
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1067
                echo "
    ";
                // line 1068
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 1069
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1070
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1072
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1076
                echo "
    ";
                // line 1077
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 1078
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1079
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1081
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1085
                echo "
    ";
                // line 1086
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 1087
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1088
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1090
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1094
                echo "
    ";
            }
            // line 1096
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1097
        echo "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 1099
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 1111
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1116
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1121
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1127
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token=";
        // line 1151
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 1166
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">";
        // line 1179
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1199
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 1205
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1225
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1243
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1249
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1269
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1288
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1294
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1314
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1332
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1352
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1389
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1394
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1400
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1405
        $context["address_row"] = 1;
        // line 1406
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1407
            echo "  \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1408
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1409
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1412
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1413
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1416
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1417
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:first').before(this);
    }
  });
  ";
            // line 1420
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 1421
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1422
        echo "
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>
";
        // line 1461
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3826 => 1461,  3785 => 1422,  3779 => 1421,  3777 => 1420,  3771 => 1417,  3767 => 1416,  3761 => 1413,  3757 => 1412,  3751 => 1409,  3747 => 1408,  3742 => 1407,  3737 => 1406,  3735 => 1405,  3727 => 1400,  3718 => 1394,  3710 => 1389,  3670 => 1352,  3645 => 1332,  3622 => 1314,  3597 => 1294,  3586 => 1288,  3562 => 1269,  3537 => 1249,  3526 => 1243,  3503 => 1225,  3478 => 1205,  3467 => 1199,  3444 => 1179,  3428 => 1166,  3410 => 1151,  3383 => 1127,  3374 => 1121,  3366 => 1116,  3358 => 1111,  3343 => 1099,  3339 => 1097,  3333 => 1096,  3329 => 1094,  3316 => 1090,  3309 => 1088,  3302 => 1087,  3300 => 1086,  3297 => 1085,  3284 => 1081,  3277 => 1079,  3270 => 1078,  3268 => 1077,  3265 => 1076,  3252 => 1072,  3245 => 1070,  3238 => 1069,  3236 => 1068,  3233 => 1067,  3224 => 1063,  3216 => 1062,  3211 => 1060,  3204 => 1059,  3202 => 1058,  3199 => 1057,  3186 => 1053,  3179 => 1051,  3172 => 1050,  3170 => 1049,  3167 => 1048,  3154 => 1044,  3147 => 1042,  3140 => 1041,  3138 => 1040,  3135 => 1039,  3128 => 1034,  3113 => 1032,  3109 => 1031,  3102 => 1027,  3095 => 1026,  3093 => 1025,  3090 => 1024,  3083 => 1019,  3070 => 1017,  3066 => 1016,  3059 => 1012,  3054 => 1011,  3052 => 1010,  3049 => 1009,  3042 => 1004,  3031 => 1002,  3027 => 1001,  3022 => 999,  3016 => 998,  3009 => 996,  3003 => 995,  3000 => 994,  2997 => 993,  2994 => 992,  2990 => 991,  2983 => 987,  2979 => 986,  2973 => 982,  2962 => 980,  2958 => 979,  2954 => 978,  2949 => 976,  2942 => 972,  2938 => 971,  2931 => 967,  2927 => 966,  2920 => 962,  2916 => 961,  2909 => 957,  2905 => 956,  2898 => 952,  2894 => 951,  2887 => 947,  2883 => 946,  2876 => 942,  2872 => 941,  2862 => 934,  2834 => 909,  2807 => 885,  2803 => 883,  2794 => 879,  2786 => 874,  2779 => 872,  2772 => 868,  2767 => 866,  2762 => 864,  2754 => 859,  2744 => 854,  2736 => 849,  2731 => 847,  2724 => 843,  2719 => 841,  2714 => 839,  2706 => 834,  2696 => 829,  2688 => 824,  2683 => 822,  2678 => 820,  2670 => 815,  2666 => 813,  2664 => 812,  2657 => 807,  2652 => 805,  2647 => 804,  2642 => 802,  2637 => 801,  2635 => 800,  2629 => 797,  2623 => 793,  2617 => 792,  2615 => 791,  2609 => 790,  2604 => 788,  2599 => 785,  2593 => 784,  2591 => 783,  2585 => 782,  2580 => 780,  2571 => 776,  2566 => 774,  2557 => 770,  2552 => 768,  2543 => 764,  2538 => 762,  2531 => 757,  2525 => 756,  2523 => 755,  2517 => 754,  2512 => 752,  2505 => 747,  2499 => 746,  2497 => 745,  2491 => 744,  2486 => 742,  2476 => 736,  2472 => 734,  2468 => 732,  2466 => 731,  2459 => 728,  2455 => 726,  2451 => 724,  2449 => 723,  2442 => 720,  2438 => 718,  2434 => 716,  2432 => 715,  2426 => 712,  2417 => 708,  2412 => 706,  2407 => 704,  2403 => 702,  2397 => 701,  2394 => 700,  2389 => 697,  2383 => 696,  2381 => 695,  2368 => 691,  2360 => 688,  2353 => 687,  2350 => 686,  2345 => 683,  2339 => 682,  2337 => 681,  2324 => 677,  2316 => 674,  2309 => 673,  2306 => 672,  2301 => 669,  2295 => 668,  2293 => 667,  2280 => 663,  2272 => 660,  2265 => 659,  2262 => 658,  2257 => 655,  2251 => 654,  2249 => 653,  2241 => 652,  2233 => 651,  2228 => 649,  2221 => 648,  2218 => 647,  2213 => 644,  2207 => 643,  2205 => 642,  2195 => 641,  2188 => 639,  2181 => 638,  2178 => 637,  2173 => 634,  2167 => 633,  2165 => 632,  2155 => 631,  2148 => 629,  2141 => 628,  2138 => 627,  2133 => 624,  2127 => 623,  2125 => 622,  2122 => 621,  2115 => 620,  2110 => 619,  2104 => 618,  2101 => 617,  2096 => 615,  2090 => 614,  2087 => 613,  2084 => 612,  2080 => 611,  2075 => 609,  2068 => 608,  2065 => 607,  2060 => 604,  2054 => 603,  2052 => 602,  2049 => 601,  2042 => 600,  2037 => 599,  2031 => 598,  2028 => 597,  2023 => 595,  2017 => 594,  2014 => 593,  2011 => 592,  2007 => 591,  2002 => 589,  1995 => 588,  1992 => 587,  1987 => 584,  1981 => 583,  1979 => 582,  1976 => 581,  1970 => 580,  1962 => 578,  1954 => 576,  1951 => 575,  1947 => 574,  1943 => 573,  1937 => 572,  1930 => 570,  1923 => 569,  1920 => 568,  1917 => 567,  1913 => 566,  1905 => 563,  1898 => 561,  1889 => 557,  1882 => 555,  1873 => 551,  1868 => 549,  1859 => 545,  1854 => 543,  1849 => 541,  1841 => 535,  1835 => 534,  1833 => 533,  1827 => 529,  1819 => 528,  1811 => 526,  1809 => 525,  1804 => 523,  1801 => 522,  1795 => 521,  1792 => 520,  1787 => 517,  1781 => 516,  1779 => 515,  1762 => 511,  1752 => 508,  1745 => 507,  1742 => 506,  1737 => 503,  1731 => 502,  1729 => 501,  1712 => 497,  1702 => 494,  1695 => 493,  1692 => 492,  1687 => 489,  1681 => 488,  1679 => 487,  1662 => 483,  1652 => 480,  1645 => 479,  1642 => 478,  1637 => 475,  1631 => 474,  1629 => 473,  1621 => 472,  1611 => 471,  1606 => 469,  1599 => 468,  1596 => 467,  1591 => 464,  1585 => 463,  1583 => 462,  1569 => 461,  1560 => 459,  1553 => 458,  1550 => 457,  1545 => 454,  1539 => 453,  1537 => 452,  1523 => 451,  1514 => 449,  1507 => 448,  1504 => 447,  1499 => 444,  1493 => 443,  1491 => 442,  1488 => 441,  1481 => 440,  1476 => 439,  1468 => 438,  1465 => 437,  1460 => 435,  1452 => 434,  1449 => 433,  1446 => 432,  1442 => 431,  1437 => 429,  1430 => 428,  1427 => 427,  1422 => 424,  1416 => 423,  1414 => 422,  1411 => 421,  1404 => 420,  1399 => 419,  1391 => 418,  1388 => 417,  1383 => 415,  1375 => 414,  1372 => 413,  1369 => 412,  1365 => 411,  1360 => 409,  1353 => 408,  1350 => 407,  1345 => 404,  1339 => 403,  1337 => 402,  1334 => 401,  1328 => 400,  1320 => 398,  1312 => 396,  1309 => 395,  1305 => 394,  1301 => 393,  1291 => 392,  1282 => 390,  1275 => 389,  1272 => 388,  1269 => 387,  1265 => 386,  1261 => 384,  1255 => 383,  1253 => 382,  1246 => 380,  1239 => 378,  1234 => 375,  1228 => 374,  1226 => 373,  1223 => 372,  1217 => 371,  1209 => 369,  1201 => 367,  1198 => 366,  1194 => 365,  1190 => 364,  1180 => 363,  1173 => 361,  1168 => 358,  1162 => 357,  1160 => 356,  1150 => 355,  1143 => 353,  1138 => 350,  1132 => 349,  1130 => 348,  1120 => 347,  1113 => 345,  1100 => 341,  1093 => 339,  1088 => 336,  1082 => 335,  1080 => 334,  1070 => 333,  1063 => 331,  1050 => 327,  1043 => 325,  1038 => 322,  1032 => 321,  1030 => 320,  1020 => 319,  1013 => 317,  1008 => 314,  1002 => 313,  1000 => 312,  990 => 311,  983 => 309,  976 => 307,  971 => 306,  966 => 305,  964 => 304,  957 => 299,  952 => 297,  947 => 296,  942 => 294,  937 => 293,  935 => 292,  929 => 289,  923 => 285,  918 => 283,  913 => 282,  908 => 280,  903 => 279,  901 => 278,  895 => 275,  889 => 271,  884 => 269,  879 => 268,  874 => 266,  869 => 265,  867 => 264,  861 => 261,  856 => 259,  850 => 255,  844 => 254,  842 => 253,  836 => 252,  831 => 250,  826 => 247,  820 => 246,  818 => 245,  812 => 244,  807 => 242,  802 => 240,  798 => 238,  792 => 237,  789 => 236,  784 => 233,  778 => 232,  776 => 231,  763 => 227,  755 => 224,  748 => 223,  745 => 222,  740 => 219,  734 => 218,  732 => 217,  719 => 213,  711 => 210,  704 => 209,  701 => 208,  696 => 205,  690 => 204,  688 => 203,  675 => 199,  667 => 196,  660 => 195,  657 => 194,  652 => 191,  646 => 190,  644 => 189,  636 => 188,  628 => 187,  623 => 185,  616 => 184,  613 => 183,  608 => 180,  602 => 179,  600 => 178,  590 => 177,  583 => 175,  576 => 174,  573 => 173,  568 => 170,  562 => 169,  560 => 168,  550 => 167,  543 => 165,  536 => 164,  533 => 163,  528 => 160,  522 => 159,  520 => 158,  517 => 157,  510 => 156,  505 => 155,  499 => 154,  496 => 153,  491 => 151,  485 => 150,  482 => 149,  479 => 148,  475 => 147,  470 => 145,  463 => 144,  460 => 143,  455 => 140,  449 => 139,  447 => 138,  444 => 137,  437 => 136,  432 => 135,  426 => 134,  423 => 133,  418 => 131,  412 => 130,  409 => 129,  406 => 128,  402 => 127,  397 => 125,  390 => 124,  387 => 123,  382 => 120,  376 => 119,  374 => 118,  371 => 117,  365 => 116,  357 => 114,  349 => 112,  346 => 111,  342 => 110,  338 => 109,  332 => 108,  325 => 106,  318 => 105,  315 => 104,  312 => 103,  308 => 102,  304 => 100,  298 => 99,  296 => 98,  290 => 97,  285 => 95,  280 => 92,  274 => 91,  272 => 90,  266 => 89,  261 => 87,  256 => 84,  250 => 83,  248 => 82,  242 => 81,  237 => 79,  232 => 76,  226 => 75,  224 => 74,  218 => 73,  213 => 71,  207 => 67,  201 => 66,  193 => 64,  185 => 62,  182 => 61,  178 => 60,  172 => 57,  167 => 55,  156 => 48,  150 => 47,  148 => 46,  135 => 45,  130 => 44,  128 => 43,  124 => 42,  116 => 36,  111 => 34,  107 => 33,  103 => 32,  98 => 31,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-customer" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-affiliate" data-toggle="tab">{{ tab_affiliate }}</a></li>*/
/*             {% if customer_id %}*/
/*             <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*             <li><a href="#tab-transaction" data-toggle="tab">{{ tab_transaction }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-ip" data-toggle="tab">{{ tab_ip }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="address">*/
/*                     <li class="active"><a href="#tab-customer" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <li><a href="#tab-address{{ address_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('#address a:first').tab('show'); $('#address a[href=\'#tab-address{{ address_row }}\']').parent().remove(); $('#tab-address{{ address_row }}').remove();"></i> {{ tab_address }} {{ address_row }}</a></li>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li id="address-add"><a onclick="addAddress();"><i class="fa fa-plus-circle"></i> {{ button_address_add }}</a></li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-customer">*/
/*                       <fieldset>*/
/*                         <legend>{{ text_account }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                               {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == customer_group_id %}*/
/*                               <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                             {% if error_firstname %}*/
/*                             <div class="text-danger">{{ error_firstname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                             {% if error_lastname %}*/
/*                             <div class="text-danger">{{ error_lastname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                             {% if error_email %}*/
/*                             <div class="text-danger">{{ error_email }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                             {% if error_telephone %}*/
/*                             <div class="text-danger">{{ error_telephone }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                         {% if custom_field.location == 'account' %}*/
/*                         {% if custom_field.type == 'select' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                               <option value="">{{ text_select }}</option>*/
/*                               {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'radio' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="radio"> {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% endif %}</div>*/
/*                               {% endfor %} </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'checkbox' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="checkbox">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% endif %}</div>*/
/*                               {% endfor %}</div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'text' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'textarea' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'file' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                             <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'date' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group date">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'time' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group time">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'datetime' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group datetime">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_password }}</legend>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" autocomplete="off" />*/
/*                             {% if error_password %}*/
/*                             <div class="text-danger">{{ error_password }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" autocomplete="off" id="input-confirm" class="form-control" />*/
/*                             {% if error_confirm %}*/
/*                             <div class="text-danger">{{ error_confirm }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_other }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-newsletter">{{ entry_newsletter }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="newsletter" id="input-newsletter" class="form-control">*/
/*                               {% if newsletter %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                               {% if status %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-safe">{{ entry_safe }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="safe" id="input-safe" class="form-control">*/
/*                               {% if safe %}*/
/*                               <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                               <option value="0">{{ text_no }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_yes }}</option>*/
/*                               <option value="0" selected="selected">{{ text_no }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                     </div>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <div class="tab-pane" id="tab-address{{ address_row }}">*/
/*                       <input type="hidden" name="address[{{ address_row }}][address_id]" value="{{ address.address_id }}" />*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-firstname{{ address_row }}">{{ entry_firstname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][firstname]" value="{{ address.firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].firstname %}*/
/*                           <div class="text-danger">{{ error_address[address_row].firstname }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-lastname{{ address_row }}">{{ entry_lastname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][lastname]" value="{{ address.lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].lastname %}*/
/*                           <div class="text-danger">{{ error_address[address_row].lastname }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-company{{ address_row }}">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][company]" value="{{ address.company }}" placeholder="{{ entry_company }}" id="input-company{{ address_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-address-1{{ address_row }}">{{ entry_address_1 }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][address_1]" value="{{ address.address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].address_1 %}*/
/*                           <div class="text-danger">{{ error_address[address_row].address_1 }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-address-2{{ address_row }}">{{ entry_address_2 }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][address_2]" value="{{ address.address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2{{ address_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][city]" value="{{ address.city }}" placeholder="{{ entry_city }}" id="input-city{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].city %}*/
/*                           <div class="text-danger">{{ error_address[address_row].city }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-postcode{{ address_row }}">{{ entry_postcode }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][postcode]" value="{{ address.postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].postcode %}*/
/*                           <div class="text-danger">{{ error_address[address_row].postcode }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-country{{ address_row }}">{{ entry_country }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][country_id]" id="input-country{{ address_row }}" onchange="country(this, '{{ address_row }}', '{{ address.zone_id }}');" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for country in countries %}*/
/*                             {% if country.country_id == address.country_id %}*/
/*                             <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row].country %}*/
/*                           <div class="text-danger">{{ error_address[address_row].country }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-zone{{ address_row }}">{{ entry_zone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][zone_id]" id="input-zone{{ address_row }}" class="form-control">*/
/*                           </select>*/
/*                           {% if error_address[address_row].zone %}*/
/*                           <div class="text-danger">{{ error_address[address_row].zone }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% for custom_field in custom_fields %}*/
/*                       {% if custom_field.location == 'address' %}*/
/*                       {% if custom_field.type == 'select' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'radio' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="radio"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% endif %}</div>*/
/*                             {% endfor %} </div>*/
/*                           {% if error_address[address_row].custom_field[custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'checkbox' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="checkbox"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% endif %}</div>*/
/*                             {% endfor %} </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'text' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'textarea' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'file' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <button type="button" id="button-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                           <input type="hidden" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] }}" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'date' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'time' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'datetime' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span> </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <label class="radio">{% if address.address_id == address_id or not addresses %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked" />*/
/*                             {% else %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" />*/
/*                             {% endif %}</label>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-affiliate">*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-company">{{ entry_company }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-website">{{ entry_website }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="website" value="{{ website }}" placeholder="{{ entry_website }}" id="input-website" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tracking"><span data-toggle="tooltip" title="{{ help_tracking }}">{{ entry_tracking }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="tracking" value="{{ tracking }}" placeholder="{{ entry_tracking }}" id="input-tracking" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-commission"><span data-toggle="tooltip" title="{{ help_commission }}">{{ entry_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="commission" value="{{ commission }}" placeholder="{{ entry_commission }}" id="input-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.location == 'affiliate' %}*/
/*                 {% if custom_field.type == 'select' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                       <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'radio' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       <div class="radio">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                         <label>*/
/*                           <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% else %}*/
/*                         <label>*/
/*                           <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% endif %}</div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'checkbox' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       <div class="checkbox">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                         <label>*/
/*                           <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% else %}*/
/*                         <label>*/
/*                           <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% endif %}</div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'text' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'textarea' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'file' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'date' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'datetime' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_payment }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="tax" value="{{ tax }}" placeholder="{{ entry_tax }}" id="input-tax" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_payment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="radio">*/
/*                       <label>{% if payment == 'cheque' %}*/
/*                         <input type="radio" name="payment" value="cheque" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="cheque" />*/
/*                         {% endif %}*/
/*                         {{ text_cheque }}</label>*/
/*                     </div>*/
/*                     <div class="radio">*/
/*                       <label> {% if payment == 'paypal' %}*/
/*                         <input type="radio" name="payment" value="paypal" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="paypal" />*/
/*                         {% endif %}*/
/*                         {{ text_paypal }}</label>*/
/*                     </div>*/
/*                     <div class="radio">*/
/*                       <label> {% if payment == 'bank' %}*/
/*                         <input type="radio" name="payment" value="bank" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="bank" />*/
/*                         {% endif %}*/
/*                         {{ text_bank }}</label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-cheque" class="payment">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-cheque">{{ entry_cheque }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="cheque" value="{{ cheque }}" placeholder="{{ entry_cheque }}" id="input-cheque" class="form-control" />*/
/*                       {% if error_cheque %}*/
/*                       <div class="text-danger">{{ error_cheque }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-paypal" class="payment">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-paypal">{{ entry_paypal }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="paypal" value="{{ paypal }}" placeholder="{{ entry_paypal }}" id="input-paypal" class="form-control" />*/
/*                       {% if error_paypal %}*/
/*                       <div class="text-danger">{{ error_paypal }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-bank" class="payment">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-name">{{ entry_bank_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_name" value="{{ bank_name }}" placeholder="{{ entry_bank_name }}" id="input-bank-name" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-branch-number">{{ entry_bank_branch_number }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_branch_number" value="{{ bank_branch_number }}" placeholder="{{ entry_bank_branch_number }}" id="input-bank-branch-number" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-swift-code">{{ entry_bank_swift_code }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_swift_code" value="{{ bank_swift_code }}" placeholder="{{ entry_bank_swift_code }}" id="input-bank-swift-code" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-account-name">{{ entry_bank_account_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_account_name" value="{{ bank_account_name }}" placeholder="{{ entry_bank_account_name }}" id="input-bank-account-name" class="form-control" />*/
/*                       {% if error_bank_account_name %}*/
/*                       <div class="text-danger">{{ error_bank_account_name }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-account-number">{{ entry_bank_account_number }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_account_number" value="{{ bank_account_number }}" placeholder="{{ entry_bank_account_number }}" id="input-bank-account-number" class="form-control" />*/
/*                       {% if error_bank_account_number %}*/
/*                       <div class="text-danger">{{ error_bank_account_number }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate">{{ entry_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="affiliate" id="input-affiliate" class="form-control">*/
/*                       {% if affiliate %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                      </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>           */
/*             </div>         */
/*             {% if customer_id %}*/
/*             <div class="tab-pane" id="tab-history">*/
/*               <fieldset>*/
/*                 <legend>{{ text_history }}</legend>*/
/*                 <div id="history"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_history_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" placeholder="{{ entry_comment }}" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-transaction">*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction }}</legend>*/
/*                 <div id="transaction"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-transaction-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-transaction-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-amount">{{ entry_amount }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="amount" value="" placeholder="{{ entry_amount }}" id="input-amount" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-transaction" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_transaction_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward }}</legend>*/
/*                 <div id="reward"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-reward-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-reward-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="points" value="" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_reward_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="tab-pane" id="tab-ip">*/
/*               <fieldset>*/
/*                 <legend>{{ text_ip }}</legend>*/
/*                 <div id="ip"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <script type="text/javascript"><!--*/
/*   $('input[name="affiliate"]').on('change', function() {*/
/*     if ($(this).val() == '1') { */
/*       $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', false);*/
/*     } else {*/
/*       $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', true);*/
/*     }*/
/*   }); */
/* */
/*   $('input[name=\'affiliate\']:checked').trigger('change');*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('select[name=\'customer_group_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('.custom-field').hide();*/
/*         $('.custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('select[name=\'customer_group_id\']').trigger('change');*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   var address_row = {{ address_row }};*/
/* */
/*   function addAddress() {*/
/*     html  = '<div class="tab-pane" id="tab-address' + address_row + '">';*/
/*     html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '">{{ entry_firstname }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="{{ entry_firstname }}" id="input-firstname' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-lastname' + address_row + '">{{ entry_lastname }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="{{ entry_lastname }}" id="input-lastname' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-company' + address_row + '">{{ entry_company }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="{{ entry_company }}" id="input-company' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-address-1' + address_row + '">{{ entry_address_1 }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="{{ entry_address_1 }}" id="input-address-1' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-address-2' + address_row + '">{{ entry_address_2 }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_2]" value="" placeholder="{{ entry_address_2 }}" id="input-address-2' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="{{ entry_city }}" id="input-city' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '">{{ entry_postcode }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="{{ entry_postcode }}" id="input-postcode' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '">{{ entry_country }}</label>';*/
/*     html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';*/
/*       html += '         <option value="">{{ text_select }}</option>';*/
/*       {% for country in countries %}*/
/*       html += '         <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/*       {% endfor %}*/
/*       html += '      </select></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '">{{ entry_zone }}</label>';*/
/*     html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/*     html += '  </div>';*/
/* */
/*     // Custom Fields*/
/*     {% for custom_field in custom_fields %}*/
/*     {% if custom_field.location == 'address' %}*/
/*     {% if custom_field.type == 'select' %}*/
/* */
/*     html += '  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '  		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <select name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">';*/
/*     html += '  			<option value="">{{ text_select }}</option>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field.name|e('js') }}</option>';*/
/*     {% endfor %}*/
/* */
/*     html += '  		  </select>';*/
/*     html += '  		</div>';*/
/*     html += '  	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'radio' %}*/
/*     html += '  	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}">';*/
/*     html += '  		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'checkbox' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '			<div class="checkbox"><label><input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'text' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'textarea' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <textarea name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value|e('js') }}</textarea>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'file' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <button type="button" id="button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/*     html += '		  <input type="hidden" name="address[' + address_row + '][{{ custom_field.custom_field_id }}]" value="" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'date' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }} data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'time' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'datetime' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% endif %}*/
/*     {% endfor %}*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label">{{ entry_default }}</label>';*/
/*     html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '</div>';*/
/* */
/*     $('#tab-general .tab-content').append(html);*/
/* */
/*     $('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/*     $('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');*/
/* */
/*     $('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> {{ tab_address }} ' + address_row + '</a></li>');*/
/* */
/*     $('#address a[href=\'#tab-address' + address_row + '\']').tab('show');*/
/* */
/*     $('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/*     });*/
/* */
/* 	$('.datetime').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickDate: true,*/
/* 		pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickDate: false*/
/*     });*/
/* */
/*     $('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 		}*/
/* 		*/
/* 		if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:last').after(this);*/
/* 		}*/
/* 		*/
/* 		if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:first').before(this);*/
/* 		}*/
/*     });*/
/* */
/*     address_row++;*/
/*   }*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   function country(element, index, zone_id) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);*/
/*       },*/
/*       complete: function() {*/
/*         $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['postcode_required'] == '1') {*/
/*           $('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');*/
/*         } else {*/
/*           $('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');*/
/*         }*/
/* */
/*         html = '<option value="">{{ text_select }}</option>';*/
/* */
/*         if (json['zone'] && json['zone'] != '') {*/
/*           for (i = 0; i < json['zone'].length; i++) {*/
/*             html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*             if (json['zone'][i]['zone_id'] == zone_id) {*/
/*               html += ' selected="selected"';*/
/*             }*/
/* */
/*             html += '>' + json['zone'][i]['name'] + '</option>';*/
/*           }*/
/*         } else {*/
/*           html += '<option value="0">{{ text_none }}</option>';*/
/*         }*/
/* */
/*         $('select[name=\'address[' + index + '][zone_id]\']').html(html);*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   $('select[name$=\'[country_id]\']').trigger('change');*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#history').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#history').load(this.href);*/
/*   });*/
/* */
/*   $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-history').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addhistory&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-history').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-history').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-history textarea[name=\'comment\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#transaction').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#transaction').load(this.href);*/
/*   });*/
/* */
/*   $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-transaction').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addtransaction&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-transaction').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-transaction').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-transaction input[name=\'amount\']').val('');*/
/*           $('#tab-transaction input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#reward').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#reward').load(this.href);*/
/*   });*/
/* */
/*   $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-reward').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addreward&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-reward').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-reward').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-reward input[name=\'points\']').val('');*/
/*           $('#tab-reward input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#ip').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#ip').load(this.href);*/
/*   });*/
/* */
/*   $('#ip').load('index.php?route=customer/customer/ip&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*         clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $(node).parent().find('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/*             }*/
/* */
/*             if (json['code']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* */
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: false*/
/*   });*/
/* */
/*   // Sort the custom fields*/
/*   {% set address_row = 1 %}*/
/*   {% for address in addresses %}*/
/*   $('#tab-address{{ address_row }} .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group:first').before(this);*/
/*     }*/
/*   });*/
/*   {% set address_row = address_row + 1 %}*/
/*   {% endfor %}*/
/* */
/*   $('#tab-customer .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group:first').before(this);*/
/*     }*/
/*   });*/
/* */
/*   $('#tab-affiliate .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group:first').before(this);*/
/*     }*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('input[name=\'payment\']').on('change', function() {*/
/*     $('.payment').hide();*/
/* */
/*     $('#payment-' + this.value).show();*/
/*   });*/
/* */
/*   $('input[name=\'payment\']:checked').trigger('change');*/
/*   //--></script> */
/* </div>*/
/* {{ footer }} */
/* */
