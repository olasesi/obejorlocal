<?php

/* extension/report/product_purchased_info.twig */
class __TwigTemplate_e9341abd26238c178722366d0d78229667068470e8af1bf79d04bd9a85820d1e extends Twig_Template
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
          <label class=\"control-label\" for=\"input-status\">";
        // line 25
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
          <select name=\"filter_order_status_id\" id=\"input-status\" class=\"form-control\">
            <option value=\"0\">";
        // line 27
        echo (isset($context["text_all_status"]) ? $context["text_all_status"] : null);
        echo "</option>
            
            
          
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 32
            echo "                  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null))) {
                // line 33
                echo "                  
          
            
            <option value=\"";
                // line 36
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
            
          
                  ";
            } else {
                // line 41
                echo "                  
          
            
            <option value=\"";
                // line 44
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
            
            
          
                  ";
            }
            // line 49
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                
        
          
          </select>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 56
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
        // line 64
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 71
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 72
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 73
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 74
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 79
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "            <tr>
              <td class=\"text-left\">";
                // line 82
                echo $this->getAttribute($context["product"], "name", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 84
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 85
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            ";
        } else {
            // line 89
            echo "            <tr>
              <td class=\"text-center\" colspan=\"4\">";
            // line 90
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 93
        echo "              </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 98
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 99
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
\t
\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();
\t
\tif (filter_order_status_id != 0) {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}\t

\tlocation = 'index.php?route=report/report&code=product_purchased&user_token=";
        // line 127
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 132
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/product_purchased_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 132,  253 => 127,  222 => 99,  218 => 98,  211 => 93,  205 => 90,  202 => 89,  199 => 88,  190 => 85,  186 => 84,  182 => 83,  178 => 82,  175 => 81,  170 => 80,  168 => 79,  160 => 74,  156 => 73,  152 => 72,  148 => 71,  138 => 64,  127 => 56,  119 => 50,  113 => 49,  103 => 44,  98 => 41,  88 => 36,  83 => 33,  80 => 32,  76 => 31,  69 => 27,  64 => 25,  53 => 19,  48 => 17,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
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
/*           <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*           <select name="filter_order_status_id" id="input-status" class="form-control">*/
/*             <option value="0">{{ text_all_status }}</option>*/
/*             */
/*             */
/*           */
/*                   {% for order_status in order_statuses %}*/
/*                   {% if order_status.order_status_id == filter_order_status_id %}*/
/*                   */
/*           */
/*             */
/*             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*             */
/*             */
/*           */
/*                   {% else %}*/
/*                   */
/*           */
/*             */
/*             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*             */
/*             */
/*           */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*         */
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
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_model }}</td>*/
/*                 <td class="text-right">{{ column_quantity }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if products %}*/
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-left">{{ product.name }}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-right">{{ product.quantity }}</td>*/
/*               <td class="text-right">{{ product.total }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*               </tbody>*/
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
/* 	*/
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();*/
/* 	*/
/* 	if (filter_order_status_id != 0) {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	}	*/
/* */
/* 	location = 'index.php?route=report/report&code=product_purchased&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
