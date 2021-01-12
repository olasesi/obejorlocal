<?php

/* design/seo_url_list.twig */
class __TwigTemplate_5b2d58182d280a391fde5f185a9b5f7a4ea20512b7602053f3a371bb334184fe extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-seo').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-url-alias').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-seo\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-query\">";
        // line 36
        echo (isset($context["entry_query"]) ? $context["entry_query"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_query\" value=\"";
        // line 37
        echo (isset($context["filter_query"]) ? $context["filter_query"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_query"]) ? $context["entry_query"] : null);
        echo "\" id=\"input-query\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-keyword\">";
        // line 40
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_keyword\" value=\"";
        // line 41
        echo (isset($context["filter_keyword"]) ? $context["filter_keyword"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "\" id=\"input-keyword\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-store\">";
        // line 44
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
              <select name=\"filter_store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        if (((isset($context["filter_store_id"]) ? $context["filter_store_id"] : null) == "0")) {
            // line 48
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                <option value=\"0\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                ";
        }
        // line 51
        echo "                  
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 53
            echo "                ";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["filter_store_id"]) ? $context["filter_store_id"] : null))) {
                // line 54
                echo "                <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                ";
            } else {
                // line 56
                echo "                <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                ";
            }
            // line 58
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-language\">";
        // line 62
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
              <select name=\"filter_language_id\" id=\"input-language\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                  
                
              
              
              
              
              
                  
                  ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 76
            echo "                  ";
            if (($this->getAttribute($context["language"], "language_id", array()) == (isset($context["filter_language_id"]) ? $context["filter_language_id"] : null))) {
                // line 77
                echo "                  
                  
              
              
              
              
              
                
                  
                
                <option value=\"";
                // line 87
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                
                
                  
                
              
              
              
              
              
                  
                  ";
            } else {
                // line 99
                echo "                  
                  
              
              
              
              
              
                
                  
                
                <option value=\"";
                // line 109
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                
                
                  
                
              
              
              
              
              
                  
                  ";
            }
            // line 121
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                
                
            
            
            
            
            
              
                
              
              </select>
            </div>
            <div class=\"text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 135
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
        // line 143
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 146
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-url-alias\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 152
        if (((isset($context["sort"]) ? $context["sort"] : null) == "query")) {
            echo "<a href=\"";
            echo (isset($context["sort_query"]) ? $context["sort_query"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_query"]) ? $context["column_query"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_query"]) ? $context["sort_query"] : null);
            echo "\">";
            echo (isset($context["column_query"]) ? $context["column_query"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 153
        if (((isset($context["sort"]) ? $context["sort"] : null) == "keyword")) {
            echo "<a href=\"";
            echo (isset($context["sort_keyword"]) ? $context["sort_keyword"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_keyword"]) ? $context["column_keyword"] : null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_keyword"]) ? $context["sort_keyword"] : null);
            echo "\">";
            echo (isset($context["column_keyword"]) ? $context["column_keyword"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 154
        if (((isset($context["sort"]) ? $context["sort"] : null) == "store")) {
            echo "<a href=\"";
            echo (isset($context["sort_store"]) ? $context["sort_store"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_store"]) ? $context["column_store"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_store"]) ? $context["sort_store"] : null);
            echo "\">";
            echo (isset($context["column_store"]) ? $context["column_store"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 155
        if (((isset($context["sort"]) ? $context["sort"] : null) == "language")) {
            echo "<a href=\"";
            echo (isset($context["sort_language"]) ? $context["sort_language"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_language"]) ? $context["column_language"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_language"]) ? $context["sort_language"] : null);
            echo "\">";
            echo (isset($context["column_language"]) ? $context["column_language"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 156
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 161
        if ((isset($context["seo_urls"]) ? $context["seo_urls"] : null)) {
            // line 162
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seo_urls"]) ? $context["seo_urls"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_url"]) {
                // line 163
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 164
                if (twig_in_filter($this->getAttribute($context["seo_url"], "seo_url_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 165
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["seo_url"], "seo_url_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 167
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["seo_url"], "seo_url_id", array());
                    echo "\" />
                      ";
                }
                // line 168
                echo "</td>
                    <td class=\"text-left\">";
                // line 169
                echo $this->getAttribute($context["seo_url"], "query", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 170
                echo $this->getAttribute($context["seo_url"], "keyword", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 171
                echo $this->getAttribute($context["seo_url"], "store", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 172
                echo $this->getAttribute($context["seo_url"], "language", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 173
                echo $this->getAttribute($context["seo_url"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                  ";
        } else {
            // line 177
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 178
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 181
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 187
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 188
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
\tvar url = 'index.php?route=design/seo_url&user_token=";
        // line 197
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_query = \$('input[name=\\'filter_query\\']').val();

\tif (filter_query) {
\t\turl += '&filter_query=' + encodeURIComponent(filter_query);
\t}

\tvar filter_keyword = \$('input[name=\\'filter_keyword\\']').val();

\tif (filter_keyword) {
\t\turl += '&filter_keyword=' + encodeURIComponent(filter_keyword);
\t}

\tvar filter_store_id = \$('select[name=\\'filter_store_id\\']').val();

\tif (filter_store_id) {
\t\turl += '&filter_store_id=' + encodeURIComponent(filter_store_id);
\t}
\t
\tvar filter_language_id = \$('select[name=\\'filter_language_id\\']').val();

\tif (filter_language_id) {
\t\turl += '&filter_language_id=' + encodeURIComponent(filter_language_id);
\t}

\tlocation = url;
});
//--></script> 
</div>
";
        // line 227
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/seo_url_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 227,  483 => 197,  471 => 188,  467 => 187,  459 => 181,  453 => 178,  450 => 177,  447 => 176,  436 => 173,  432 => 172,  428 => 171,  424 => 170,  420 => 169,  417 => 168,  411 => 167,  405 => 165,  403 => 164,  400 => 163,  395 => 162,  393 => 161,  385 => 156,  367 => 155,  349 => 154,  331 => 153,  313 => 152,  304 => 146,  298 => 143,  287 => 135,  272 => 122,  266 => 121,  249 => 109,  237 => 99,  220 => 87,  208 => 77,  205 => 76,  201 => 75,  185 => 62,  180 => 59,  174 => 58,  166 => 56,  158 => 54,  155 => 53,  151 => 52,  148 => 51,  142 => 50,  136 => 48,  134 => 47,  128 => 44,  120 => 41,  116 => 40,  108 => 37,  104 => 36,  97 => 32,  91 => 28,  83 => 24,  80 => 23,  72 => 19,  70 => 18,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-seo').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-url-alias').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
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
/*     <div class="row">*/
/*       <div id="filter-seo" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-query">{{ entry_query }}</label>*/
/*               <input type="text" name="filter_query" value="{{ filter_query }}" placeholder="{{ entry_query }}" id="input-query" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-keyword">{{ entry_keyword }}</label>*/
/*               <input type="text" name="filter_keyword" value="{{ filter_keyword }}" placeholder="{{ entry_keyword }}" id="input-keyword" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-store">{{ entry_store }}</label>*/
/*               <select name="filter_store_id" id="input-store" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_store_id == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_default }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_default }}</option>*/
/*                 {% endif %}                  */
/*                 {% for store in stores %}*/
/*                 {% if store.store_id == filter_store_id %}*/
/*                 <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-language">{{ entry_language }}</label>*/
/*               <select name="filter_language_id" id="input-language" class="form-control">*/
/*                 <option value=""></option>*/
/*                 */
/*                 */
/*                   */
/*                 */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                   */
/*                   {% for language in languages %}*/
/*                   {% if language.language_id == filter_language_id %}*/
/*                   */
/*                   */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                 */
/*                   */
/*                 */
/*                 <option value="{{ language.language_id }}" selected="selected">{{ language.name }}</option>*/
/*                 */
/*                 */
/*                   */
/*                 */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                   */
/*                   {% else %}*/
/*                   */
/*                   */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                 */
/*                   */
/*                 */
/*                 <option value="{{ language.language_id }}">{{ language.name }}</option>*/
/*                 */
/*                 */
/*                   */
/*                 */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                   */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*                 */
/*             */
/*             */
/*             */
/*             */
/*             */
/*               */
/*                 */
/*               */
/*               </select>*/
/*             </div>*/
/*             <div class="text-right">*/
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
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-url-alias">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">{% if sort == 'query' %}<a href="{{ sort_query }}" class="{{ order|lower }}">{{ column_query }}</a>{% else %}<a href="{{ sort_query }}">{{ column_query }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'keyword' %}<a href="{{ sort_keyword }}" class="{{ order|lower }}">{{ column_keyword }}</a> {% else %}<a href="{{ sort_keyword }}">{{ column_keyword }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'store' %}<a href="{{ sort_store }}" class="{{ order|lower }}">{{ column_store }}</a>{% else %}<a href="{{ sort_store }}">{{ column_store }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'language' %}<a href="{{ sort_language }}" class="{{ order|lower }}">{{ column_language }}</a>{% else %}<a href="{{ sort_language }}">{{ column_language }}</a>{% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if seo_urls %}*/
/*                   {% for seo_url in seo_urls %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if seo_url.seo_url_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ seo_url.seo_url_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ seo_url.seo_url_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-left">{{ seo_url.query }}</td>*/
/*                     <td class="text-left">{{ seo_url.keyword }}</td>*/
/*                     <td class="text-left">{{ seo_url.store }}</td>*/
/*                     <td class="text-left">{{ seo_url.language }}</td>*/
/*                     <td class="text-right"><a href="{{ seo_url.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
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
/* 	var url = 'index.php?route=design/seo_url&user_token={{ user_token }}';*/
/* */
/* 	var filter_query = $('input[name=\'filter_query\']').val();*/
/* */
/* 	if (filter_query) {*/
/* 		url += '&filter_query=' + encodeURIComponent(filter_query);*/
/* 	}*/
/* */
/* 	var filter_keyword = $('input[name=\'filter_keyword\']').val();*/
/* */
/* 	if (filter_keyword) {*/
/* 		url += '&filter_keyword=' + encodeURIComponent(filter_keyword);*/
/* 	}*/
/* */
/* 	var filter_store_id = $('select[name=\'filter_store_id\']').val();*/
/* */
/* 	if (filter_store_id) {*/
/* 		url += '&filter_store_id=' + encodeURIComponent(filter_store_id);*/
/* 	}*/
/* 	*/
/* 	var filter_language_id = $('select[name=\'filter_language_id\']').val();*/
/* */
/* 	if (filter_language_id) {*/
/* 		url += '&filter_language_id=' + encodeURIComponent(filter_language_id);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/* </div>*/
/* {{ footer }}*/
