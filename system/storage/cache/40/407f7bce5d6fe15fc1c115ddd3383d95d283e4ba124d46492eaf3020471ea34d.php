<?php

/* report/report.twig */
class __TwigTemplate_2e9868952b54fe49dfaeadc327575b2b389b7d543467e9524b97c22c8fe952fa extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-report').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      </div>
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 19
        echo (isset($context["text_type"]) ? $context["text_type"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\">
            <select name=\"report\" onchange=\"location = this.value;\" class=\"form-control\">
              
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 27
            echo "              ";
            if (((isset($context["code"]) ? $context["code"] : null) == $this->getAttribute($context["report"], "code", array()))) {
                // line 28
                echo "              
              <option value=\"";
                // line 29
                echo $this->getAttribute($context["report"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["report"], "text", array());
                echo "</option>
              
              ";
            } else {
                // line 32
                echo "              
              <option value=\"";
                // line 33
                echo $this->getAttribute($context["report"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["report"], "text", array());
                echo "</option>
              
              ";
            }
            // line 36
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            
            </select>
            <span class=\"input-group-addon\"><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</span></div>
        </div>
      </div>
    </div>
    <div>";
        // line 43
        echo (isset($context["report"]) ? $context["report"] : null);
        echo "</div>
  </div>
</div>
";
        // line 46
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "report/report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  117 => 43,  110 => 39,  106 => 37,  100 => 36,  92 => 33,  89 => 32,  81 => 29,  78 => 28,  75 => 27,  71 => 26,  61 => 19,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-report').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ text_type }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="input-group">*/
/*             <select name="report" onchange="location = this.value;" class="form-control">*/
/*               */
/*               {% for report in reports %}*/
/*               {% if code == report.code %}*/
/*               */
/*               <option value="{{ report.href }}" selected="selected">{{ report.text }}</option>*/
/*               */
/*               {% else %}*/
/*               */
/*               <option value="{{ report.href }}">{{ report.text }}</option>*/
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             </select>*/
/*             <span class="input-group-addon"><i class="fa fa-filter"></i> {{ text_filter }}</span></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div>{{ report }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
