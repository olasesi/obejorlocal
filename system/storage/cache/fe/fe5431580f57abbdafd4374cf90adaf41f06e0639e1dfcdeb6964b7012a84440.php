<?php

/* extension/report/customer_order_info.twig */
class __TwigTemplate_10d77f470e0929a8fce78a49d988013ada44d20c5796afc3cffcb488328ff69d extends Twig_Template
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
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 9
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 11
        echo (isset($context["filter_date_start"]) ? $context["filter_date_start"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-customer\">";
        // line 17
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 18
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
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
          <label class=\"control-label\" for=\"input-status\">";
        // line 29
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
          <select name=\"filter_order_status_id\" id=\"input-status\" class=\"form-control\">
            <option value=\"0\">";
        // line 31
        echo (isset($context["text_all_status"]) ? $context["text_all_status"] : null);
        echo "</option>
            
          
          
            
          
            
          
            
            
          
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 43
            echo "          ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null))) {
                // line 44
                echo "                  
          
            
            
          
            
          
            
          
          
            <option value=\"";
                // line 54
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
          
          
            
          
            
          
            
            
          
          ";
            } else {
                // line 66
                echo "                  
          
            
            
          
            
          
            
          
          
            <option value=\"";
                // line 76
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
          
          
            
          
            
          
            
            
          
          ";
            }
            // line 88
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                
        
          
          
        
          
        
          
        
        
          </select>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 102
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
        // line 110
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 117
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 118
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 119
        echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 120
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 121
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 122
        echo (isset($context["column_products"]) ? $context["column_products"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 123
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 124
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 129
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 130
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 131
                echo "            <tr>
              <td class=\"text-left\">";
                // line 132
                echo $this->getAttribute($context["customer"], "customer", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 133
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 134
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 135
                echo $this->getAttribute($context["customer"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 136
                echo $this->getAttribute($context["customer"], "orders", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 137
                echo $this->getAttribute($context["customer"], "products", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 138
                echo $this->getAttribute($context["customer"], "total", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 139
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            ";
        } else {
            // line 143
            echo "            <tr>
              <td class=\"text-center\" colspan=\"8\">";
            // line 144
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 147
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 152
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 153
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
\t
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}
\t
\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t
\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();
\t
\tif (filter_order_status_id != 0) {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t} 
\t
\tlocation = 'index.php?route=report/report&user_token=";
        // line 187
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&code=customer_order' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 192
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
        // line 200
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
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 200,  355 => 192,  347 => 187,  310 => 153,  306 => 152,  299 => 147,  293 => 144,  290 => 143,  287 => 142,  276 => 139,  272 => 138,  268 => 137,  264 => 136,  260 => 135,  256 => 134,  252 => 133,  248 => 132,  245 => 131,  240 => 130,  238 => 129,  230 => 124,  226 => 123,  222 => 122,  218 => 121,  214 => 120,  210 => 119,  206 => 118,  202 => 117,  192 => 110,  181 => 102,  166 => 89,  160 => 88,  143 => 76,  131 => 66,  114 => 54,  102 => 44,  99 => 43,  95 => 42,  81 => 31,  76 => 29,  65 => 23,  60 => 21,  52 => 18,  48 => 17,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
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
/*           <label class="control-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_start" value="{{ filter_date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*           <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
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
/*           <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*           <select name="filter_order_status_id" id="input-status" class="form-control">*/
/*             <option value="0">{{ text_all_status }}</option>*/
/*             */
/*           */
/*           */
/*             */
/*           */
/*             */
/*           */
/*             */
/*             */
/*           */
/*           {% for order_status in order_statuses %}*/
/*           {% if order_status.order_status_id == filter_order_status_id %}*/
/*                   */
/*           */
/*             */
/*             */
/*           */
/*             */
/*           */
/*             */
/*           */
/*           */
/*             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*             */
/*           */
/*           */
/*             */
/*           */
/*             */
/*           */
/*             */
/*             */
/*           */
/*           {% else %}*/
/*                   */
/*           */
/*             */
/*             */
/*           */
/*             */
/*           */
/*             */
/*           */
/*           */
/*             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*             */
/*           */
/*           */
/*             */
/*           */
/*             */
/*           */
/*             */
/*             */
/*           */
/*           {% endif %}*/
/*           {% endfor %}*/
/*                 */
/*         */
/*           */
/*           */
/*         */
/*           */
/*         */
/*           */
/*         */
/*         */
/*           </select>*/
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
/*           <table class="table table-bordered table-hover">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_customer }}</td>*/
/*                 <td class="text-left">{{ column_email }}</td>*/
/*                 <td class="text-left">{{ column_customer_group }}</td>*/
/*                 <td class="text-left">{{ column_status }}</td>*/
/*                 <td class="text-right">{{ column_orders }}</td>*/
/*                 <td class="text-right">{{ column_products }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if customers %}*/
/*             {% for customer in customers %}*/
/*             <tr>*/
/*               <td class="text-left">{{ customer.customer }}</td>*/
/*               <td class="text-left">{{ customer.email }}</td>*/
/*               <td class="text-left">{{ customer.customer_group }}</td>*/
/*               <td class="text-left">{{ customer.status }}</td>*/
/*               <td class="text-right">{{ customer.orders }}</td>*/
/*               <td class="text-right">{{ customer.products }}</td>*/
/*               <td class="text-right">{{ customer.total }}</td>*/
/*               <td class="text-right"><a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
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
/* 	*/
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* 	*/
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* 	*/
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').val();*/
/* 	*/
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* 	*/
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').val();*/
/* 	*/
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* 	*/
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();*/
/* 	*/
/* 	if (filter_order_status_id != 0) {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	} */
/* 	*/
/* 	location = 'index.php?route=report/report&user_token={{ user_token }}&code=customer_order' + url;*/
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
