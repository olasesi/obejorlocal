<?php

/* report/online.twig */
class __TwigTemplate_7b12873ffbbe682246f7ec6cd9478b374aa054ced35eacc45bfa1b613212e6a0 extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-online').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a></div>
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
    <div class=\"row\">
      <div id=\"filter-online\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 21
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 25
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 26
        echo (isset($context["filter_ip"]) ? $context["filter_ip"] : null);
        echo "\" id=\"input-ip\" placeholder=\"";
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" i class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 29
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 30
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 41
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
        // line 48
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 49
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 50
        echo (isset($context["column_url"]) ? $context["column_url"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 51
        echo (isset($context["column_referer"]) ? $context["column_referer"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 52
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 53
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 58
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 60
                echo "                <tr>
                  <td class=\"text-left\"><a href=\"//whatismyipaddress.com/ip/";
                // line 61
                echo $this->getAttribute($context["customer"], "ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["customer"], "ip", array());
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 62
                echo $this->getAttribute($context["customer"], "customer", array());
                echo "</td>
                  <td class=\"text-left\"><a href=\"";
                // line 63
                echo $this->getAttribute($context["customer"], "url", array());
                echo "\" target=\"_blank\" rel=\"noreferrer\">";
                echo twig_join_filter(twig_split_filter($this->env, $this->getAttribute($context["customer"], "url", array()), "", 30), "<br/>
                    ");
                // line 64
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 65
                if ($this->getAttribute($context["customer"], "referer", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["customer"], "referer", array());
                    echo "\" target=\"_blank\">";
                    echo twig_join_filter(twig_split_filter($this->env, $this->getAttribute($context["customer"], "referer", array()), "", 30), "<br/>
                    ");
                    // line 66
                    echo "</a>";
                }
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo $this->getAttribute($context["customer"], "date_added", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                if ($this->getAttribute($context["customer"], "customer_id", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["customer"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>";
                } else {
                    // line 69
                    echo "                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
                    ";
                }
                // line 70
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        } else {
            // line 74
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 75
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 78
        echo "                  </tbody>
                
              </table>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 83
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 84
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=report/online&user_token=";
        // line 93
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 114
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 131
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "report/online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 131,  273 => 114,  249 => 93,  237 => 84,  233 => 83,  226 => 78,  220 => 75,  217 => 74,  214 => 73,  206 => 70,  200 => 69,  192 => 68,  188 => 67,  183 => 66,  176 => 65,  173 => 64,  168 => 63,  164 => 62,  158 => 61,  155 => 60,  150 => 59,  148 => 58,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  110 => 41,  99 => 33,  91 => 30,  87 => 29,  79 => 26,  75 => 25,  68 => 21,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-online').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-default"><i class="fa fa-refresh"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div id="filter-online" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-ip">{{ entry_ip }}</label>*/
/*               <input type="text" name="filter_ip" value="{{ filter_ip }}" id="input-ip" placeholder="{{ entry_ip }}" i class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*               <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered table-hover">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td class="text-left">{{ column_ip }}</td>*/
/*                     <td class="text-left">{{ column_customer }}</td>*/
/*                     <td class="text-left">{{ column_url }}</td>*/
/*                     <td class="text-left">{{ column_referer }}</td>*/
/*                     <td class="text-left">{{ column_date_added }}</td>*/
/*                     <td class="text-right">{{ column_action }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% if customers %}*/
/*                 {% for customer in customers %}*/
/*                 <tr>*/
/*                   <td class="text-left"><a href="//whatismyipaddress.com/ip/{{ customer.ip }}" target="_blank">{{ customer.ip }}</a></td>*/
/*                   <td class="text-left">{{ customer.customer }}</td>*/
/*                   <td class="text-left"><a href="{{ customer.url }}" target="_blank" rel="noreferrer">{{ customer.url|split('', 30)|join('<br/>*/
/*                     ') }}</a></td>*/
/*                   <td class="text-left">{% if customer.referer %}<a href="{{ customer.referer }}" target="_blank">{{ customer.referer|split('', 30)|join('<br/>*/
/*                     ') }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{{ customer.date_added }}</td>*/
/*                   <td class="text-right">{% if customer.customer_id %}<a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>{% else %}*/
/*                     <button type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*                     {% endif %}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = 'index.php?route=report/online&user_token={{ user_token }}';*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* */
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_ip = $('input[name=\'filter_ip\']').val();*/
/* */
/* 	if (filter_ip) {*/
/* 		url += '&filter_ip=' + encodeURIComponent(filter_ip);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
