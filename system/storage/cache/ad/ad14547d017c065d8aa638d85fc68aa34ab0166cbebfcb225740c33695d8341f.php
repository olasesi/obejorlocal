<?php

/* localisation/tax_class_form.twig */
class __TwigTemplate_a7159833d7239464808b46ded013223cb322bdb80102c82f550b92c12a3effd8 extends Twig_Template
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
        <button type=\"submit\" form=\"form-tax-class\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\" id=\"form-tax-class\">
          <fieldset>
            <legend>";
        // line 28
        echo (isset($context["text_tax_class"]) ? $context["text_tax_class"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 30
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 32
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                ";
        // line 33
        if ((isset($context["error_title"]) ? $context["error_title"] : null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_title"]) ? $context["error_title"] : null);
            echo "</div>
                ";
        }
        // line 35
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 38
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" value=\"";
        // line 40
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "\" id=\"input-description\" class=\"form-control\" />
                ";
        // line 41
        if ((isset($context["error_description"]) ? $context["error_description"] : null)) {
            // line 42
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_description"]) ? $context["error_description"] : null);
            echo "</div>
                ";
        }
        // line 43
        echo " </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 47
        echo (isset($context["text_tax_rate"]) ? $context["text_tax_rate"] : null);
        echo "</legend>
            <table id=\"tax-rule\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 51
        echo (isset($context["entry_rate"]) ? $context["entry_rate"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 52
        echo (isset($context["entry_based"]) ? $context["entry_based"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 53
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 59
        $context["tax_rule_row"] = 0;
        // line 60
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_rules"]) ? $context["tax_rules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rule"]) {
            // line 61
            echo "              <tr id=\"tax-rule-row";
            echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
            echo "\">
                <td class=\"text-left\"><select name=\"tax_rule[";
            // line 62
            echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
            echo "][tax_rate_id]\" class=\"form-control\">
                    
                    
                    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tax_rates"]) ? $context["tax_rates"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 66
                echo "                    ";
                if (($this->getAttribute($context["tax_rate"], "tax_rate_id", array()) == $this->getAttribute($context["tax_rule"], "tax_rate_id", array()))) {
                    // line 67
                    echo "                    
                    
                    <option value=\"";
                    // line 69
                    echo $this->getAttribute($context["tax_rate"], "tax_rate_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["tax_rate"], "name", array());
                    echo "</option>
                    
                    
                    ";
                } else {
                    // line 73
                    echo "                    
                    
                    <option value=\"";
                    // line 75
                    echo $this->getAttribute($context["tax_rate"], "tax_rate_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["tax_rate"], "name", array());
                    echo "</option>
                    
                    
                    ";
                }
                // line 79
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                  
                  
                  </select></td>
                <td class=\"text-left\"><select name=\"tax_rule[";
            // line 83
            echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
            echo "][based]\" class=\"form-control\">
                    
                    
                    ";
            // line 86
            if (($this->getAttribute($context["tax_rule"], "based", array()) == "shipping")) {
                // line 87
                echo "                    
                    
                    <option value=\"shipping\" selected=\"selected\">";
                // line 89
                echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 93
                echo "                    
                    
                    <option value=\"shipping\">";
                // line 95
                echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
                echo "</option>
                    
                    
                    ";
            }
            // line 99
            echo "                     ";
            if (($this->getAttribute($context["tax_rule"], "based", array()) == "payment")) {
                // line 100
                echo "                    
                    
                    <option value=\"payment\" selected=\"selected\">";
                // line 102
                echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 106
                echo "                    
                    
                    <option value=\"payment\">";
                // line 108
                echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
                echo "</option>
                    
                    
                    ";
            }
            // line 112
            echo "                    ";
            if (($this->getAttribute($context["tax_rule"], "based", array()) == "store")) {
                // line 113
                echo "                    
                    
                    <option value=\"store\" selected=\"selected\">";
                // line 115
                echo (isset($context["text_store"]) ? $context["text_store"] : null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 119
                echo "                    
                    
                    <option value=\"store\">";
                // line 121
                echo (isset($context["text_store"]) ? $context["text_store"] : null);
                echo "</option>
                    
                    
                    ";
            }
            // line 125
            echo "                  
                  
                  </select></td>
                <td class=\"text-left\"><input type=\"text\" name=\"tax_rule[";
            // line 128
            echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["tax_rule"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#tax-rule-row";
            // line 129
            echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 131
            $context["tax_rule_row"] = ((isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null) + 1);
            // line 132
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRule();\" data-toggle=\"tooltip\" title=\"";
        // line 138
        echo (isset($context["button_rule_add"]) ? $context["button_rule_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var tax_rule_row = ";
        // line 148
        echo (isset($context["tax_rule_row"]) ? $context["tax_rule_row"] : null);
        echo ";

function addRule() {
\thtml  = '<tr id=\"tax-rule-row' + tax_rule_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"tax_rule[' + tax_rule_row + '][tax_rate_id]\" class=\"form-control\">';
    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_rates"]) ? $context["tax_rates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            // line 154
            echo "    html += '    <option value=\"";
            echo $this->getAttribute($context["tax_rate"], "tax_rate_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tax_rate"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "    html += '  </select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"tax_rule[' + tax_rule_row + '][based]\" class=\"form-control\">';
    html += '    <option value=\"shipping\">";
        // line 158
        echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
        echo "</option>';
    html += '    <option value=\"payment\">";
        // line 159
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</option>';
    html += '    <option value=\"store\">";
        // line 160
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "</option>';
    html += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"tax_rule[' + tax_rule_row + '][priority]\" value=\"\" placeholder=\"";
        // line 162
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#tax-rule-row' + tax_rule_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 163
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#tax-rule tbody').append(html);
\t
\ttax_rule_row++;
}
//--></script></div>
";
        // line 171
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "localisation/tax_class_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 171,  400 => 163,  396 => 162,  391 => 160,  387 => 159,  383 => 158,  379 => 156,  368 => 154,  364 => 153,  356 => 148,  343 => 138,  336 => 133,  330 => 132,  328 => 131,  321 => 129,  313 => 128,  308 => 125,  301 => 121,  297 => 119,  290 => 115,  286 => 113,  283 => 112,  276 => 108,  272 => 106,  265 => 102,  261 => 100,  258 => 99,  251 => 95,  247 => 93,  240 => 89,  236 => 87,  234 => 86,  228 => 83,  223 => 80,  217 => 79,  208 => 75,  204 => 73,  195 => 69,  191 => 67,  188 => 66,  184 => 65,  178 => 62,  173 => 61,  168 => 60,  166 => 59,  157 => 53,  153 => 52,  149 => 51,  142 => 47,  136 => 43,  130 => 42,  128 => 41,  122 => 40,  117 => 38,  112 => 35,  106 => 34,  104 => 33,  98 => 32,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-tax-class" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal" id="form-tax-class">*/
/*           <fieldset>*/
/*             <legend>{{ text_tax_class }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-title">{{ entry_title }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="title" value="{{ title }}" placeholder="{{ entry_title }}" id="input-title" class="form-control" />*/
/*                 {% if error_title %}*/
/*                 <div class="text-danger">{{ error_title }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-description">{{ entry_description }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="description" value="{{ description }}" placeholder="{{ entry_description }}" id="input-description" class="form-control" />*/
/*                 {% if error_description %}*/
/*                 <div class="text-danger">{{ error_description }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_tax_rate }}</legend>*/
/*             <table id="tax-rule" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_rate }}</td>*/
/*                   <td class="text-left">{{ entry_based }}</td>*/
/*                   <td class="text-left">{{ entry_priority }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% set tax_rule_row = 0 %}*/
/*               {% for tax_rule in tax_rules %}*/
/*               <tr id="tax-rule-row{{ tax_rule_row }}">*/
/*                 <td class="text-left"><select name="tax_rule[{{ tax_rule_row }}][tax_rate_id]" class="form-control">*/
/*                     */
/*                     */
/*                     {% for tax_rate in tax_rates %}*/
/*                     {% if tax_rate.tax_rate_id == tax_rule.tax_rate_id %}*/
/*                     */
/*                     */
/*                     <option value="{{ tax_rate.tax_rate_id }}" selected="selected">{{ tax_rate.name }}</option>*/
/*                     */
/*                     */
/*                     {% else %}*/
/*                     */
/*                     */
/*                     <option value="{{ tax_rate.tax_rate_id }}">{{ tax_rate.name }}</option>*/
/*                     */
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   */
/*                   </select></td>*/
/*                 <td class="text-left"><select name="tax_rule[{{ tax_rule_row }}][based]" class="form-control">*/
/*                     */
/*                     */
/*                     {% if tax_rule.based == 'shipping' %}*/
/*                     */
/*                     */
/*                     <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                     */
/*                     */
/*                     {% else %}*/
/*                     */
/*                     */
/*                     <option value="shipping">{{ text_shipping }}</option>*/
/*                     */
/*                     */
/*                     {% endif %}*/
/*                      {% if tax_rule.based == 'payment' %}*/
/*                     */
/*                     */
/*                     <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                     */
/*                     */
/*                     {% else %}*/
/*                     */
/*                     */
/*                     <option value="payment">{{ text_payment }}</option>*/
/*                     */
/*                     */
/*                     {% endif %}*/
/*                     {% if tax_rule.based == 'store' %}*/
/*                     */
/*                     */
/*                     <option value="store" selected="selected">{{ text_store }}</option>*/
/*                     */
/*                     */
/*                     {% else %}*/
/*                     */
/*                     */
/*                     <option value="store">{{ text_store }}</option>*/
/*                     */
/*                     */
/*                     {% endif %}*/
/*                   */
/*                   */
/*                   </select></td>*/
/*                 <td class="text-left"><input type="text" name="tax_rule[{{ tax_rule_row }}][priority]" value="{{ tax_rule.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                 <td class="text-left"><button type="button" onclick="$('#tax-rule-row{{ tax_rule_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% set tax_rule_row = tax_rule_row + 1 %}*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               */
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="3"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRule();" data-toggle="tooltip" title="{{ button_rule_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var tax_rule_row = {{ tax_rule_row }};*/
/* */
/* function addRule() {*/
/* 	html  = '<tr id="tax-rule-row' + tax_rule_row + '">';*/
/* 	html += '  <td class="text-left"><select name="tax_rule[' + tax_rule_row + '][tax_rate_id]" class="form-control">';*/
/*     {% for tax_rate in tax_rates %}*/
/*     html += '    <option value="{{ tax_rate.tax_rate_id }}">{{ tax_rate.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><select name="tax_rule[' + tax_rule_row + '][based]" class="form-control">';*/
/*     html += '    <option value="shipping">{{ text_shipping }}</option>';*/
/*     html += '    <option value="payment">{{ text_payment }}</option>';*/
/*     html += '    <option value="store">{{ text_store }}</option>';*/
/*     html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="tax_rule[' + tax_rule_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#tax-rule-row' + tax_rule_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#tax-rule tbody').append(html);*/
/* 	*/
/* 	tax_rule_row++;*/
/* }*/
/* //--></script></div>*/
/* {{ footer }}*/
