<?php

/* extension/shipping/weight.twig */
class __TwigTemplate_2724390a608c711f3398b6d0472137d879a7d3b1ef795404c4c5196dc5c88dad extends Twig_Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"row\">
            <div class=\"col-sm-2\">
              <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 33
            echo "                <li><a href=\"#tab-geo-zone";
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["geo_zone"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </ul>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 41
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                        <option value=\"0\">";
        // line 44
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 46
            echo "                        ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_weight_tax_class_id"]) ? $context["shipping_weight_tax_class_id"] : null))) {
                // line 47
                echo "                        <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 49
                echo "                        <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                        ";
            }
            // line 51
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 56
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 59
        if ((isset($context["shipping_weight_status"]) ? $context["shipping_weight_status"] : null)) {
            // line 60
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 61
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        } else {
            // line 63
            echo "                        <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 64
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        }
        // line 66
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 70
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"shipping_weight_sort_order\" value=\"";
        // line 72
        echo (isset($context["shipping_weight_sort_order"]) ? $context["shipping_weight_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 77
            echo "                <div class=\"tab-pane\" id=\"tab-geo-zone";
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-rate";
            // line 79
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_rate"]) ? $context["help_rate"] : null);
            echo "\">";
            echo (isset($context["entry_rate"]) ? $context["entry_rate"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"shipping_weight_";
            // line 81
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "_rate\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_rate"]) ? $context["entry_rate"] : null);
            echo "\" id=\"input-rate";
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["shipping_weight_geo_zone_rate"]) ? $context["shipping_weight_geo_zone_rate"] : null), $this->getAttribute($context["geo_zone"], "geo_zone_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_weight_geo_zone_rate"]) ? $context["shipping_weight_geo_zone_rate"] : null), $this->getAttribute($context["geo_zone"], "geo_zone_id", array()), array(), "array")) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status";
            // line 85
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\">";
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_";
            // line 87
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "_status\" id=\"input-status";
            echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
            echo "\" class=\"form-control\">
                        ";
            // line 88
            if ($this->getAttribute((isset($context["shipping_weight_geo_zone_status"]) ? $context["shipping_weight_geo_zone_status"] : null), $this->getAttribute($context["geo_zone"], "geo_zone_id", array()), array(), "array")) {
                // line 89
                echo "                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                        <option value=\"0\">";
                // line 90
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                        ";
            } else {
                // line 92
                echo "                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 93
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                        ";
            }
            // line 95
            echo "                      </select>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 108
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/shipping/weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 108,  288 => 100,  278 => 95,  273 => 93,  268 => 92,  263 => 90,  258 => 89,  256 => 88,  250 => 87,  243 => 85,  230 => 81,  221 => 79,  215 => 77,  211 => 76,  202 => 72,  197 => 70,  191 => 66,  186 => 64,  181 => 63,  176 => 61,  171 => 60,  169 => 59,  163 => 56,  157 => 52,  151 => 51,  143 => 49,  135 => 47,  132 => 46,  128 => 45,  124 => 44,  118 => 41,  110 => 35,  99 => 33,  95 => 32,  91 => 31,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="row">*/
/*             <div class="col-sm-2">*/
/*               <ul class="nav nav-pills nav-stacked">*/
/*                 <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 <li><a href="#tab-geo-zone{{ geo_zone.geo_zone_id }}" data-toggle="tab">{{ geo_zone.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             </div>*/
/*             <div class="col-sm-10">*/
/*               <div class="tab-content">*/
/*                 <div class="tab-pane active" id="tab-general">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <select name="shipping_weight_tax_class_id" id="input-tax-class" class="form-control">*/
/*                         <option value="0">{{ text_none }}</option>*/
/*                         {% for tax_class in tax_classes %}*/
/*                         {% if tax_class.tax_class_id == shipping_weight_tax_class_id %}*/
/*                         <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <select name="shipping_weight_status" id="input-status" class="form-control">*/
/*                         {% if shipping_weight_status %}*/
/*                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                         <option value="0">{{ text_disabled }}</option>*/
/*                         {% else %}*/
/*                         <option value="1">{{ text_enabled }}</option>*/
/*                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="shipping_weight_sort_order" value="{{ shipping_weight_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 <div class="tab-pane" id="tab-geo-zone{{ geo_zone.geo_zone_id }}">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-rate{{ geo_zone.geo_zone_id }}"><span data-toggle="tooltip" title="{{ help_rate }}">{{ entry_rate }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="shipping_weight_{{ geo_zone.geo_zone_id }}_rate" rows="5" placeholder="{{ entry_rate }}" id="input-rate{{ geo_zone.geo_zone_id }}" class="form-control">{{ shipping_weight_geo_zone_rate[geo_zone.geo_zone_id] ? shipping_weight_geo_zone_rate[geo_zone.geo_zone_id] }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-status{{ geo_zone.geo_zone_id }}">{{ entry_status }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <select name="shipping_weight_{{ geo_zone.geo_zone_id }}_status" id="input-status{{ geo_zone.geo_zone_id }}" class="form-control">*/
/*                         {% if shipping_weight_geo_zone_status[geo_zone.geo_zone_id] %}*/
/*                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                         <option value="0">{{ text_disabled }}</option>*/
/*                         {% else %}*/
/*                         <option value="1">{{ text_enabled }}</option>*/
/*                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
