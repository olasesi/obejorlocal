<?php

/* extension/report/sale_coupon_info.twig */
class __TwigTemplate_fa4d86d93bad1e119d69860d6902a3d1316cab25d00edeaa42d7ce81ffa65258 extends Twig_Template
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
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 25
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
        // line 33
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 40
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 41
        echo (isset($context["column_code"]) ? $context["column_code"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 42
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 43
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 44
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 49
        if ((isset($context["coupons"]) ? $context["coupons"] : null)) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 51
                echo "            <tr>
              <td class=\"text-left\">";
                // line 52
                echo $this->getAttribute($context["coupon"], "name", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 53
                echo $this->getAttribute($context["coupon"], "code", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 54
                echo $this->getAttribute($context["coupon"], "orders", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 55
                echo $this->getAttribute($context["coupon"], "total", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 56
                echo $this->getAttribute($context["coupon"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        } else {
            // line 60
            echo "            <tr>
              <td class=\"text-center\" colspan=\"6\">";
            // line 61
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 64
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 69
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 70
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

\tlocation = 'index.php?route=report/report&code=sale_coupon&user_token=";
        // line 92
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 97
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/sale_coupon_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 97,  194 => 92,  169 => 70,  165 => 69,  158 => 64,  152 => 61,  149 => 60,  146 => 59,  135 => 56,  131 => 55,  127 => 54,  123 => 53,  119 => 52,  116 => 51,  111 => 50,  109 => 49,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  85 => 40,  75 => 33,  64 => 25,  53 => 19,  48 => 17,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
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
/*                 <td class="text-left">{{ column_code }}</td>*/
/*                 <td class="text-right">{{ column_orders }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if coupons %}*/
/*             {% for coupon in coupons %}*/
/*             <tr>*/
/*               <td class="text-left">{{ coupon.name }}</td>*/
/*               <td class="text-left">{{ coupon.code }}</td>*/
/*               <td class="text-right">{{ coupon.orders }}</td>*/
/*               <td class="text-right">{{ coupon.total }}</td>*/
/*               <td class="text-right"><a href="{{ coupon.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
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
/* */
/* 	location = 'index.php?route=report/report&code=sale_coupon&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
