<?php

/* localisation/currency_form.twig */
class __TwigTemplate_9fa97c4e203d3e1279841a6e695514ca354c561f43f8a22f385b66896e4e40d9 extends Twig_Template
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
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_iso"]) ? $context["text_iso"] : null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"form-horizontal\">
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
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_title"]) ? $context["error_title"] : null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["help_code"]) ? $context["help_code"] : null);
        echo "\">";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 41
        echo (isset($context["code"]) ? $context["code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              ";
        // line 42
        if ((isset($context["error_code"]) ? $context["error_code"] : null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_code"]) ? $context["error_code"] : null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-left\">";
        // line 48
        echo (isset($context["entry_symbol_left"]) ? $context["entry_symbol_left"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 50
        echo (isset($context["symbol_left"]) ? $context["symbol_left"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_symbol_left"]) ? $context["entry_symbol_left"] : null);
        echo "\" id=\"input-symbol-left\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-symbol-right\">";
        // line 54
        echo (isset($context["entry_symbol_right"]) ? $context["entry_symbol_right"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 56
        echo (isset($context["symbol_right"]) ? $context["symbol_right"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_symbol_right"]) ? $context["entry_symbol_right"] : null);
        echo "\" id=\"input-symbol-right\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-decimal-place\">";
        // line 60
        echo (isset($context["entry_decimal_place"]) ? $context["entry_decimal_place"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 62
        echo (isset($context["decimal_place"]) ? $context["decimal_place"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_decimal_place"]) ? $context["entry_decimal_place"] : null);
        echo "\" id=\"input-decimal-place\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo (isset($context["help_value"]) ? $context["help_value"] : null);
        echo "\">";
        echo (isset($context["entry_value"]) ? $context["entry_value"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 68
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_value"]) ? $context["entry_value"] : null);
        echo "\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 72
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 75
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 76
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 77
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 79
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 80
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 82
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 90
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "localisation/currency_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 90,  228 => 82,  223 => 80,  218 => 79,  213 => 77,  208 => 76,  206 => 75,  200 => 72,  191 => 68,  184 => 66,  175 => 62,  170 => 60,  161 => 56,  156 => 54,  147 => 50,  142 => 48,  137 => 45,  131 => 43,  129 => 42,  123 => 41,  116 => 39,  111 => 36,  105 => 34,  103 => 33,  97 => 32,  92 => 30,  87 => 28,  81 => 25,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-currency" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_iso }}</div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-title">{{ entry_title }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="title" value="{{ title }}" placeholder="{{ entry_title }}" id="input-title" class="form-control" />*/
/*               {% if error_title %}*/
/*               <div class="text-danger">{{ error_title }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-code"><span data-toggle="tooltip" title="{{ help_code }}">{{ entry_code }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="code" value="{{ code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control" />*/
/*               {% if error_code %}*/
/*               <div class="text-danger">{{ error_code }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-symbol-left">{{ entry_symbol_left }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="symbol_left" value="{{ symbol_left }}" placeholder="{{ entry_symbol_left }}" id="input-symbol-left" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-symbol-right">{{ entry_symbol_right }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="symbol_right" value="{{ symbol_right }}" placeholder="{{ entry_symbol_right }}" id="input-symbol-right" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-decimal-place">{{ entry_decimal_place }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="decimal_place" value="{{ decimal_place }}" placeholder="{{ entry_decimal_place }}" id="input-decimal-place" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-value"><span data-toggle="tooltip" title="{{ help_value }}">{{ entry_value }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="value" value="{{ value }}" placeholder="{{ entry_value }}" id="input-value" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
