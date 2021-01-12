<?php

/* extension/report/customer_activity_info.twig */
class __TwigTemplate_ccd2831611151122fffd149db821986cd79f4c00f03a67212fe65f30aeb6d792 extends Twig_Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 5
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-customer\">";
        // line 9
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 10
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 13
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 15
        echo (isset($context["filter_date_start"]) ? $context["filter_date_start"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-end\">";
        // line 21
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 23
        echo (isset($context["filter_date_end"]) ? $context["filter_date_end"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-ip\">";
        // line 29
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</label>
          <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 30
        echo (isset($context["filter_ip"]) ? $context["filter_ip"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" id=\"input-ip\" class=\"form-control\" />
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
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 41
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 48
        echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 49
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 50
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 55
        if ((isset($context["activities"]) ? $context["activities"] : null)) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 57
                echo "            <tr>
              <td class=\"text-left\">";
                // line 58
                echo $this->getAttribute($context["activity"], "comment", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 59
                echo $this->getAttribute($context["activity"], "ip", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 60
                echo $this->getAttribute($context["activity"], "date_added", array());
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "            <tr>
              <td class=\"text-center\" colspan=\"3\">";
            // line 65
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 68
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 73
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 74
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();

\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}

\tlocation = 'index.php?route=report/report&code=customer_activity&user_token=";
        // line 108
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 113
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 121
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
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 121,  220 => 113,  212 => 108,  175 => 74,  171 => 73,  164 => 68,  158 => 65,  155 => 64,  152 => 63,  143 => 60,  139 => 59,  135 => 58,  132 => 57,  127 => 56,  125 => 55,  117 => 50,  113 => 49,  109 => 48,  99 => 41,  88 => 33,  80 => 30,  76 => 29,  65 => 23,  60 => 21,  49 => 15,  44 => 13,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div id="filter-report" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*           <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_start" value="{{ filter_date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_end" value="{{ filter_date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-ip">{{ entry_ip }}</label>*/
/*           <input type="text" name="filter_ip" value="{{ filter_ip }}" placeholder="{{ entry_ip }}" id="input-ip" class="form-control" />*/
/*         </div>*/
/*         <div class="form-group text-right">*/
/*           <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_comment }}</td>*/
/*                 <td class="text-left">{{ column_ip }}</td>*/
/*                 <td class="text-left">{{ column_date_added }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if activities %}*/
/*             {% for activity in activities %}*/
/*             <tr>*/
/*               <td class="text-left">{{ activity.comment }}</td>*/
/*               <td class="text-left">{{ activity.ip }}</td>*/
/*               <td class="text-left">{{ activity.date_added }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*             </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
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
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').val();*/
/* */
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* */
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').val();*/
/* */
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=report/report&code=customer_activity&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
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
/* //--></script>*/
/* */
