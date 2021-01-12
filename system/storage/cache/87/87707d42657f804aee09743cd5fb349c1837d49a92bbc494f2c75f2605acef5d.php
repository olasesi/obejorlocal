<?php

/* catalog/filter_form.twig */
class __TwigTemplate_45cf830d1fecb7a30eceecf746f1594f3f5d99f98bf14140bfae05cdafe9521e extends Twig_Template
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
        <button type=\"submit\" form=\"form-filter\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-filter\" class=\"form-horizontal\">
          <fieldset id=\"option-value\">
            <legend>";
        // line 28
        echo (isset($context["text_group"]) ? $context["text_group"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        echo (isset($context["entry_group"]) ? $context["entry_group"] : null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                  <input type=\"text\" name=\"filter_group_description[";
            // line 33
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["filter_group_description"]) ? $context["filter_group_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["filter_group_description"]) ? $context["filter_group_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_group"]) ? $context["entry_group"] : null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 35
            if ($this->getAttribute((isset($context["error_group"]) ? $context["error_group"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 36
                echo "                <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_group"]) ? $context["error_group"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 41
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 43
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset id=\"option-value\">
            <legend>";
        // line 48
        echo (isset($context["text_value"]) ? $context["text_value"] : null);
        echo "</legend>
            <table id=\"filter\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 52
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 53
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 59
        $context["filter_row"] = 0;
        // line 60
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 61
            echo "              <tr id=\"filter-row";
            echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
            echo "\">
                <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[";
            // line 62
            echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
            echo "][filter_id]\" value=\"";
            echo $this->getAttribute($context["filter"], "filter_id", array());
            echo "\" />
                  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 64
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                    <input type=\"text\" name=\"filter[";
                // line 65
                echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
                echo "][filter_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][name]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($context["filter"], "filter_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["filter"], "filter_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
                echo "\" placeholder=\"";
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "\" class=\"form-control\" />
                  </div>
                  ";
                // line 67
                if ($this->getAttribute($this->getAttribute((isset($context["error_filter"]) ? $context["error_filter"] : null), (isset($context["filter_row"]) ? $context["filter_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 68
                    echo "                  <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_filter"]) ? $context["error_filter"] : null), (isset($context["filter_row"]) ? $context["filter_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                  ";
                }
                // line 70
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-right\"><input type=\"text\" name=\"filter[";
            // line 71
            echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["filter"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" id=\"input-sort-order\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#filter-row";
            // line 72
            echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 74
            $context["filter_row"] = ((isset($context["filter_row"]) ? $context["filter_row"] : null) + 1);
            // line 75
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addFilterRow();\" data-toggle=\"tooltip\" title=\"";
        // line 81
        echo (isset($context["button_filter_add"]) ? $context["button_filter_add"] : null);
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
var filter_row = ";
        // line 91
        echo (isset($context["filter_row"]) ? $context["filter_row"] : null);
        echo ";

function addFilterRow() {
\thtml  = '<tr id=\"filter-row' + filter_row + '\">';
    html += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"filter[' + filter_row + '][filter_id]\" value=\"\" />';
\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            echo "\thtml += '  <div class=\"input-group\">';
\thtml += '    <span class=\"input-group-addon\"><img src=\"language/";
            // line 98
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><input type=\"text\" name=\"filter[' + filter_row + '][filter_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" class=\"form-control\" />';
    html += '  </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"filter[' + filter_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 102
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#filter-row' + filter_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 103
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#filter tbody').append(html);

\tfilter_row++;
}
//--></script></div>
";
        // line 111
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/filter_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 111,  312 => 103,  308 => 102,  305 => 101,  288 => 98,  285 => 97,  281 => 96,  273 => 91,  260 => 81,  253 => 76,  247 => 75,  245 => 74,  238 => 72,  230 => 71,  222 => 70,  216 => 68,  214 => 67,  203 => 65,  194 => 64,  190 => 63,  184 => 62,  179 => 61,  174 => 60,  172 => 59,  163 => 53,  159 => 52,  152 => 48,  142 => 43,  137 => 41,  127 => 38,  121 => 36,  119 => 35,  110 => 33,  101 => 32,  97 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-filter" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-filter" class="form-horizontal">*/
/*           <fieldset id="option-value">*/
/*             <legend>{{ text_group }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label">{{ entry_group }}</label>*/
/*               <div class="col-sm-10"> {% for language in languages %}*/
/*                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                   <input type="text" name="filter_group_description[{{ language.language_id }}][name]" value="{{ filter_group_description[language.language_id] ? filter_group_description[language.language_id].name }}" placeholder="{{ entry_group }}" class="form-control" />*/
/*                 </div>*/
/*                 {% if error_group[language.language_id] %}*/
/*                 <div class="text-danger">{{ error_group[language.language_id] }}</div>*/
/*                 {% endif %}*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset id="option-value">*/
/*             <legend>{{ text_value }}</legend>*/
/*             <table id="filter" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left required">{{ entry_name }}</td>*/
/*                   <td class="text-right">{{ entry_sort_order }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% set filter_row = 0 %}*/
/*               {% for filter in filters %}*/
/*               <tr id="filter-row{{ filter_row }}">*/
/*                 <td class="text-left" style="width: 70%;"><input type="hidden" name="filter[{{ filter_row }}][filter_id]" value="{{ filter.filter_id }}" />*/
/*                   {% for language in languages %}*/
/*                   <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                     <input type="text" name="filter[{{ filter_row }}][filter_description][{{ language.language_id }}][name]" value="{{ filter.filter_description[language.language_id] ? filter.filter_description[language.language_id].name }}" placeholder="{{ entry_name }}" class="form-control" />*/
/*                   </div>*/
/*                   {% if error_filter[filter_row][language.language_id] %}*/
/*                   <div class="text-danger">{{ error_filter[filter_row][language.language_id] }}</div>*/
/*                   {% endif %}*/
/*                   {% endfor %}</td>*/
/*                 <td class="text-right"><input type="text" name="filter[{{ filter_row }}][sort_order]" value="{{ filter.sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" /></td>*/
/*                 <td class="text-right"><button type="button" onclick="$('#filter-row{{ filter_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% set filter_row = filter_row + 1 %}*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               */
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-right"><button type="button" onclick="addFilterRow();" data-toggle="tooltip" title="{{ button_filter_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var filter_row = {{ filter_row }};*/
/* */
/* function addFilterRow() {*/
/* 	html  = '<tr id="filter-row' + filter_row + '">';*/
/*     html += '  <td class="text-left" style="width: 70%;"><input type="hidden" name="filter[' + filter_row + '][filter_id]" value="" />';*/
/* 	{% for language in languages %}*/
/* 	html += '  <div class="input-group">';*/
/* 	html += '    <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><input type="text" name="filter[' + filter_row + '][filter_description][{{ language.language_id }}][name]" value="" placeholder="{{ entry_name }}" class="form-control" />';*/
/*     html += '  </div>';*/
/* 	{% endfor %}*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="filter[' + filter_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#filter-row' + filter_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#filter tbody').append(html);*/
/* */
/* 	filter_row++;*/
/* }*/
/* //--></script></div>*/
/* {{ footer }} */
