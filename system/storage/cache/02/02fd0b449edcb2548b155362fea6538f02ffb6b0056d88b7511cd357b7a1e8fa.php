<?php

/* marketplace/event.twig */
class __TwigTemplate_07b04ad31910b1056c277921197aa08bdb8c55dc4dd898a15e704583bc38f30b extends Twig_Template
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
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-event').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_event"]) ? $context["text_event"] : null);
        echo "</div>
    <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-event\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            echo "<a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 41
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 46
        if ((isset($context["events"]) ? $context["events"] : null)) {
            // line 47
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 48
                echo "              <tr>
                <td class=\"text-center\">";
                // line 49
                if (twig_in_filter($this->getAttribute($context["event"], "event_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 50
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 52
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\" />
                  ";
                }
                // line 53
                echo "</td>
                <td class=\"text-left\">";
                // line 54
                echo $this->getAttribute($context["event"], "code", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 55
                echo $this->getAttribute($context["event"], "status", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 56
                echo $this->getAttribute($context["event"], "sort_order", array());
                echo "</td>
                <td class=\"text-right\"><button type=\"button\" data-toggle=\"modal\" data-target=\"#modal-event";
                // line 57
                echo $this->getAttribute($context["event"], "event_id", array());
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-info-circle\"></i></button>
                  ";
                // line 58
                if ( !$this->getAttribute($context["event"], "enabled", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["event"], "enable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>";
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["event"], "disable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                // line 59
                echo "                  <div id=\"modal-event";
                echo $this->getAttribute($context["event"], "event_id", array());
                echo "\" class=\"modal text-left\">
                    <div class=\"modal-dialog\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                          <h4 class=\"modal-title\">";
                // line 64
                echo (isset($context["text_info"]) ? $context["text_info"] : null);
                echo "</h4>
                        </div>
                        <div class=\"modal-body\">
                          <p><strong>";
                // line 67
                echo (isset($context["text_trigger"]) ? $context["text_trigger"] : null);
                echo "</strong></p>
                          <p>";
                // line 68
                echo $this->getAttribute($context["event"], "trigger", array());
                echo "</p>
                          <p><strong>";
                // line 69
                echo (isset($context["text_action"]) ? $context["text_action"] : null);
                echo "</strong></p>
                          <p>";
                // line 70
                echo $this->getAttribute($context["event"], "action", array());
                echo "</p>
                        </div>
                      </div>
                    </div>
                  </div></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "              ";
        } else {
            // line 78
            echo "              <tr>
                <td class=\"text-center\" colspan=\"5\">";
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
        return "marketplace/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 94,  285 => 88,  281 => 87,  274 => 82,  268 => 79,  265 => 78,  262 => 77,  249 => 70,  245 => 69,  241 => 68,  237 => 67,  231 => 64,  222 => 59,  208 => 58,  204 => 57,  200 => 56,  196 => 55,  192 => 54,  189 => 53,  183 => 52,  177 => 50,  175 => 49,  172 => 48,  167 => 47,  165 => 46,  157 => 41,  139 => 40,  121 => 39,  103 => 38,  94 => 32,  88 => 29,  81 => 26,  73 => 22,  70 => 21,  62 => 17,  60 => 16,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-event').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_event }}</div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-event">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'code' %}<a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>{% else %}<a href="{{ sort_code }}">{{ column_code }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'sort_order' %}<a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>{% else %}<a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% if events %}*/
/*               {% for event in events %}*/
/*               <tr>*/
/*                 <td class="text-center">{% if event.event_id in selected %}*/
/*                   <input type="checkbox" name="selected[]" value="{{ event.event_id }}" checked="checked" />*/
/*                   {% else %}*/
/*                   <input type="checkbox" name="selected[]" value="{{ event.event_id }}" />*/
/*                   {% endif %}</td>*/
/*                 <td class="text-left">{{ event.code }}</td>*/
/*                 <td class="text-left">{{ event.status }}</td>*/
/*                 <td class="text-right">{{ event.sort_order }}</td>*/
/*                 <td class="text-right"><button type="button" data-toggle="modal" data-target="#modal-event{{ event.event_id }}" class="btn btn-info"><i class="fa fa-info-circle"></i></button>*/
/*                   {% if not event.enabled %}<a href="{{ event.enable }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>{% else %}<a href="{{ event.disable }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>{% endif %}*/
/*                   <div id="modal-event{{ event.event_id }}" class="modal text-left">*/
/*                     <div class="modal-dialog">*/
/*                       <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                           <h4 class="modal-title">{{ text_info }}</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                           <p><strong>{{ text_trigger }}</strong></p>*/
/*                           <p>{{ event.trigger }}</p>*/
/*                           <p><strong>{{ text_action }}</strong></p>*/
/*                           <p>{{ event.action }}</p>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div></td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*               {% else %}*/
/*               <tr>*/
/*                 <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*               </tr>*/
/*               {% endif %}*/
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
