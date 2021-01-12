<?php

/* extension/report/sale_tax_info.twig */
class __TwigTemplate_b9dbd7500159f1bd9e7a5d360db59ca433e02c921b25e35559b68e4ea06e1539 extends Twig_Template
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
          <label class=\"control-label\" for=\"input-date-end\">";
        // line 17
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 19
        echo (isset($context["filter_date_end"]) ? $context["filter_date_end"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-group\">";
        // line 25
        echo (isset($context["entry_group"]) ? $context["entry_group"] : null);
        echo "</label>
          <select name=\"filter_group\" id=\"input-group\" class=\"form-control\">
            
            
            
          
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 32
            echo "                  ";
            if (($this->getAttribute($context["group"], "value", array()) == (isset($context["filter_group"]) ? $context["filter_group"] : null))) {
                // line 33
                echo "                  
          
            
            
            <option value=\"";
                // line 37
                echo $this->getAttribute($context["group"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["group"], "text", array());
                echo "</option>
            
            
            
          
                  ";
            } else {
                // line 43
                echo "                  
          
            
            
            <option value=\"";
                // line 47
                echo $this->getAttribute($context["group"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["group"], "text", array());
                echo "</option>
            
            
            
          
                  ";
            }
            // line 53
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                
        
          
          
          </select>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-status\">";
        // line 61
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
          <select name=\"filter_order_status_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 63
        echo (isset($context["text_all_status"]) ? $context["text_all_status"] : null);
        echo "</option>
            
            
            
          
                  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 69
            echo "                  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null))) {
                // line 70
                echo "                  
          
            
            
            <option value=\"";
                // line 74
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
            
            
          
                  ";
            } else {
                // line 80
                echo "                  
          
            
            
            <option value=\"";
                // line 84
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
            
            
          
                  ";
            }
            // line 90
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                
        
          
          
          </select>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 98
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
        // line 106
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 113
        echo (isset($context["column_date_start"]) ? $context["column_date_start"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 114
        echo (isset($context["column_date_end"]) ? $context["column_date_end"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 115
        echo (isset($context["column_title"]) ? $context["column_title"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 116
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 117
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 122
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 123
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 124
                echo "            <tr>
              <td class=\"text-left\">";
                // line 125
                echo $this->getAttribute($context["order"], "date_start", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 126
                echo $this->getAttribute($context["order"], "date_end", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 127
                echo $this->getAttribute($context["order"], "title", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 128
                echo $this->getAttribute($context["order"], "orders", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 129
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            ";
        } else {
            // line 133
            echo "            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 134
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 137
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 142
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 143
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
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t\t
\tvar filter_group = \$('select[name=\\'filter_group\\']').val();
\t
\tif (filter_group) {
\t\turl += '&filter_group=' + encodeURIComponent(filter_group);
\t}
\t
\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();
\t
\tif (filter_order_status_id != 0) {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}\t

\tlocation = 'index.php?route=report/report&code=sale_tax&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 182
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/sale_tax_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 182,  338 => 177,  301 => 143,  297 => 142,  290 => 137,  284 => 134,  281 => 133,  278 => 132,  269 => 129,  265 => 128,  261 => 127,  257 => 126,  253 => 125,  250 => 124,  245 => 123,  243 => 122,  235 => 117,  231 => 116,  227 => 115,  223 => 114,  219 => 113,  209 => 106,  198 => 98,  189 => 91,  183 => 90,  172 => 84,  166 => 80,  155 => 74,  149 => 70,  146 => 69,  142 => 68,  134 => 63,  129 => 61,  120 => 54,  114 => 53,  103 => 47,  97 => 43,  86 => 37,  80 => 33,  77 => 32,  73 => 31,  64 => 25,  53 => 19,  48 => 17,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
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
/*           <label class="control-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_end" value="{{ filter_date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-group">{{ entry_group }}</label>*/
/*           <select name="filter_group" id="input-group" class="form-control">*/
/*             */
/*             */
/*             */
/*           */
/*                   {% for group in groups %}*/
/*                   {% if group.value == filter_group %}*/
/*                   */
/*           */
/*             */
/*             */
/*             <option value="{{ group.value }}" selected="selected">{{ group.text }}</option>*/
/*             */
/*             */
/*             */
/*           */
/*                   {% else %}*/
/*                   */
/*           */
/*             */
/*             */
/*             <option value="{{ group.value }}">{{ group.text }}</option>*/
/*             */
/*             */
/*             */
/*           */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*         */
/*           */
/*           */
/*           </select>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*           <select name="filter_order_status_id" class="form-control">*/
/*             <option value="0">{{ text_all_status }}</option>*/
/*             */
/*             */
/*             */
/*           */
/*                   {% for order_status in order_statuses %}*/
/*                   {% if order_status.order_status_id == filter_order_status_id %}*/
/*                   */
/*           */
/*             */
/*             */
/*             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*             */
/*             */
/*             */
/*           */
/*                   {% else %}*/
/*                   */
/*           */
/*             */
/*             */
/*             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*             */
/*             */
/*             */
/*           */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*         */
/*           */
/*           */
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
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_date_start }}</td>*/
/*                 <td class="text-left">{{ column_date_end }}</td>*/
/*                 <td class="text-left">{{ column_title }}</td>*/
/*                 <td class="text-right">{{ column_orders }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if orders %}*/
/*             {% for order in orders %}*/
/*             <tr>*/
/*               <td class="text-left">{{ order.date_start }}</td>*/
/*               <td class="text-left">{{ order.date_end }}</td>*/
/*               <td class="text-left">{{ order.title }}</td>*/
/*               <td class="text-right">{{ order.orders }}</td>*/
/*               <td class="text-right">{{ order.total }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
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
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').val();*/
/* 	*/
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* */
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').val();*/
/* 	*/
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* 		*/
/* 	var filter_group = $('select[name=\'filter_group\']').val();*/
/* 	*/
/* 	if (filter_group) {*/
/* 		url += '&filter_group=' + encodeURIComponent(filter_group);*/
/* 	}*/
/* 	*/
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();*/
/* 	*/
/* 	if (filter_order_status_id != 0) {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	}	*/
/* */
/* 	location = 'index.php?route=report/report&code=sale_tax&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
