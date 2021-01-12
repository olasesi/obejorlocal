<?php

/* report/statistics.twig */
class __TwigTemplate_0ccff36ada693bdacf6911b1e6e064a082ac911d820fc7d979408f8a5eb78355 extends Twig_Template
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
      <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 13
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 14
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 18
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 25
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 32
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 33
        echo (isset($context["column_value"]) ? $context["column_value"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 34
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 38
        if ((isset($context["statistics"]) ? $context["statistics"] : null)) {
            // line 39
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statistics"]) ? $context["statistics"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 40
                echo "              <tr>
                <td class=\"text-left\">";
                // line 41
                echo $this->getAttribute($context["statistic"], "name", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 42
                echo $this->getAttribute($context["statistic"], "value", array());
                echo "</td>
                <td class=\"text-right\"><a href=\"";
                // line 43
                echo $this->getAttribute($context["statistic"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></a></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "              ";
        } else {
            // line 47
            echo "              <tr>
                <td class=\"text-center\" colspan=\"3\">";
            // line 48
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
              </tr>
              ";
        }
        // line 51
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 58
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "report/statistics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  143 => 51,  137 => 48,  134 => 47,  131 => 46,  120 => 43,  116 => 42,  112 => 41,  109 => 40,  104 => 39,  102 => 38,  95 => 34,  91 => 33,  87 => 32,  77 => 25,  73 => 23,  65 => 19,  62 => 18,  54 => 14,  52 => 13,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-right">{{ column_value }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {% if statistics %}*/
/*               {% for statistic in statistics %}*/
/*               <tr>*/
/*                 <td class="text-left">{{ statistic.name }}</td>*/
/*                 <td class="text-right">{{ statistic.value }}</td>*/
/*                 <td class="text-right"><a href="{{ statistic.href }}" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></a></td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*               {% else %}*/
/*               <tr>*/
/*                 <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*               </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
