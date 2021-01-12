<?php

/* localisation/currency_list.twig */
class __TwigTemplate_8cc70596f2637730bef7abd7d067f7b6b19155d52968472d3c52b2475dd1e3bb extends Twig_Template
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
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_currency"]) ? $context["button_currency"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa fa-refresh\"></i></a> <a href=\"";
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-currency').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "title")) {
            // line 39
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            // line 44
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        if (((isset($context["sort"]) ? $context["sort"] : null) == "value")) {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_value"]) ? $context["sort_value"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_value"]) ? $context["column_value"] : null);
            echo "</a>
                    ";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_value"]) ? $context["sort_value"] : null);
            echo "\">";
            echo (isset($context["column_value"]) ? $context["column_value"] : null);
            echo "</a>
                    ";
        }
        // line 52
        echo "</td>
                  <td class=\"text-left\">";
        // line 53
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                    ";
        }
        // line 57
        echo "</td>
                  <td class=\"text-right\">";
        // line 58
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        if ((isset($context["currencies"]) ? $context["currencies"] : null)) {
            // line 63
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 64
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (twig_in_filter($this->getAttribute($context["currency"], "currency_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 66
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["currency"], "currency_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 68
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["currency"], "currency_id", array());
                    echo "\" />
                    ";
                }
                // line 69
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 71
                echo $this->getAttribute($context["currency"], "code", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 72
                echo $this->getAttribute($context["currency"], "value", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 73
                echo $this->getAttribute($context["currency"], "date_modified", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 74
                echo $this->getAttribute($context["currency"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        } else {
            // line 78
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 79
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 82
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/currency_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 94,  286 => 88,  282 => 87,  275 => 82,  269 => 79,  266 => 78,  263 => 77,  252 => 74,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  233 => 69,  227 => 68,  221 => 66,  219 => 65,  216 => 64,  211 => 63,  209 => 62,  202 => 58,  199 => 57,  191 => 56,  181 => 54,  179 => 53,  176 => 52,  168 => 51,  158 => 49,  156 => 48,  153 => 47,  145 => 46,  135 => 44,  133 => 43,  130 => 42,  122 => 41,  112 => 39,  110 => 38,  101 => 32,  95 => 29,  91 => 27,  83 => 23,  80 => 22,  72 => 18,  70 => 17,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_currency }}" class="btn btn-warning"><i class="fa fa fa-refresh"></i></a> <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-currency').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*     {% if error_warning %}*/
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
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'title' %}*/
/*                     <a href="{{ sort_title }}" class="{{ order|lower }}">{{ column_title }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_title }}">{{ column_title }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'code' %}*/
/*                     <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_code }}">{{ column_code }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'value' %}*/
/*                     <a href="{{ sort_value }}" class="{{ order|lower }}">{{ column_value }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_value }}">{{ column_value }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_modified' %}*/
/*                     <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if currencies %}*/
/*                 {% for currency in currencies %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if currency.currency_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ currency.currency_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ currency.currency_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ currency.title }}</td>*/
/*                   <td class="text-left">{{ currency.code }}</td>*/
/*                   <td class="text-right">{{ currency.value }}</td>*/
/*                   <td class="text-left">{{ currency.date_modified }}</td>*/
/*                   <td class="text-right"><a href="{{ currency.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
