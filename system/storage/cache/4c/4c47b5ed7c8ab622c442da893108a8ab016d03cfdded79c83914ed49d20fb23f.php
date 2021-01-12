<?php

/* journal2/template/checkout/shipping_address.twig */
class __TwigTemplate_1040b757115355204165ff79ef7869fa1aaf6624592b3d833d2783f5b7df958c extends Twig_Template
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
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
  </div>
  <div id=\"shipping-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if (($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    // line 12
                    echo "      <option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
      ";
                } else {
                    // line 14
                    echo "      <option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
      ";
                }
                // line 16
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 22
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
  </div>
  ";
        }
        // line 25
        echo "  <br />
  <div id=\"shipping-new\" style=\"display: ";
        // line 26
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 28
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 30
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 34
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 40
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 42
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 46
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 48
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 52
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 54
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 58
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 60
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 64
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 66
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 70
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
          <option value=\"\">";
        // line 73
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 75
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 76
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            } else {
                // line 78
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
           ";
            }
            // line 80
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </select>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 85
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
        </select>
      </div>
    </div>
   ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 92
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 93
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 94
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 96
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 97
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
          ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    echo "          <option value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 105
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 106
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 107
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 109
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
          ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 113
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" />
              ";
                    // line 114
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 121
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 122
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 123
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 125
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
          ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 127
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 129
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" />
              ";
                    // line 130
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 137
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 138
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 139
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 141
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 145
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 146
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 147
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 149
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</textarea>
      </div>
    </div>
    ";
            }
            // line 153
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 154
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 155
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-shipping-custom-field";
                // line 157
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 158
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 162
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 163
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 164
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 167
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 174
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 175
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 176
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 179
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 186
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 187
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 188
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 191
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 198
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <input type=\"button\" value=\"";
        // line 202
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-address\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary button\" />
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 324
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 330
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 337
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 337,  757 => 330,  748 => 324,  621 => 202,  616 => 199,  610 => 198,  594 => 191,  586 => 188,  577 => 187,  574 => 186,  558 => 179,  550 => 176,  541 => 175,  538 => 174,  522 => 167,  514 => 164,  505 => 163,  502 => 162,  493 => 158,  485 => 157,  480 => 155,  471 => 154,  468 => 153,  455 => 149,  448 => 147,  439 => 146,  436 => 145,  423 => 141,  416 => 139,  407 => 138,  404 => 137,  398 => 133,  389 => 130,  383 => 129,  379 => 127,  375 => 126,  371 => 125,  366 => 123,  357 => 122,  354 => 121,  348 => 117,  339 => 114,  333 => 113,  329 => 111,  325 => 110,  321 => 109,  316 => 107,  307 => 106,  304 => 105,  298 => 101,  287 => 99,  283 => 98,  279 => 97,  273 => 96,  266 => 94,  257 => 93,  254 => 92,  250 => 91,  241 => 85,  235 => 81,  229 => 80,  221 => 78,  213 => 76,  210 => 75,  206 => 74,  202 => 73,  196 => 70,  187 => 66,  182 => 64,  175 => 60,  170 => 58,  163 => 54,  158 => 52,  151 => 48,  146 => 46,  139 => 42,  134 => 40,  127 => 36,  122 => 34,  115 => 30,  110 => 28,  101 => 26,  98 => 25,  92 => 22,  85 => 17,  79 => 16,  61 => 14,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form class="form-horizontal">*/
/*   {% if addresses %}*/
/*   <div class="radio">*/
/*     <label>*/
/*       <input type="radio" name="shipping_address" value="existing" checked="checked" />*/
/*       {{ text_address_existing }}</label>*/
/*   </div>*/
/*   <div id="shipping-existing">*/
/*     <select name="address_id" class="form-control">*/
/*      {% for address in addresses %}*/
/*       {% if address.address_id == address_id %}*/
/*       <option value="{{ address.address_id }}" selected="selected">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*       {% else %}*/
/*       <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </select>*/
/*   </div>*/
/*   <div class="radio">*/
/*     <label>*/
/*       <input type="radio" name="shipping_address" value="new" />*/
/*       {{ text_address_new }}</label>*/
/*   </div>*/
/*   {% endif %}*/
/*   <br />*/
/*   <div id="shipping-new" style="display: {% if addresses %}none{% else %}block{% endif %};">*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-firstname">{{ entry_firstname }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-shipping-firstname" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-lastname">{{ entry_lastname }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-shipping-lastname" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-company">{{ entry_company }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-shipping-company" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-address-1">{{ entry_address_1 }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-shipping-address-1" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-address-2">{{ entry_address_2 }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-shipping-address-2" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-city">{{ entry_city }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-shipping-city" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-postcode">{{ entry_postcode }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-shipping-postcode" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-country">{{ entry_country }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="country_id" id="input-shipping-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for country in countries %}*/
/*           {% if country.country_id == country_id %}*/
/*           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*            {% endif %}*/
/*            {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-zone">{{ entry_zone }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="zone_id" id="input-shipping-zone" class="form-control">*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/*    {% for custom_field in custom_fields %}*/
/*     {% if custom_field.type == 'select' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'radio' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'checkbox' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'text' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'textarea' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'file' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'date' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'time' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'time' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*   </div>*/
/*   <div class="buttons clearfix">*/
/*     <div class="pull-right">*/
/*       <input type="button" value="{{ button_continue }}" id="button-shipping-address" data-loading-text="{{ text_loading }}" class="btn btn-primary button" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'shipping_address\']').on('change', function() {*/
/* 	if (this.value == 'new') {*/
/* 		$('#shipping-existing').hide();*/
/* 		$('#shipping-new').show();*/
/* 	} else {*/
/* 		$('#shipping-existing').show();*/
/* 		$('#shipping-new').hide();*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-shipping-address .form-group').length-2) {*/
/* 		$('#collapse-shipping-address .form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#collapse-shipping-address .form-group').length-2) {*/
/* 		$('#collapse-shipping-address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#collapse-shipping-address .form-group').length-2) {*/
/* 		$('#collapse-shipping-address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#collapse-shipping-address .form-group').length-2) {*/
/* 		$('#collapse-shipping-address .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-shipping-address button[id^=\'button-shipping-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-shipping-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-shipping-address select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-shipping-address select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/* */
