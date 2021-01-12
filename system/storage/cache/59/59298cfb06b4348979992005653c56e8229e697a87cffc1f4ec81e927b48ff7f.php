<?php

/* marketing/contact.twig */
class __TwigTemplate_c39e1a041eaa5f8ecf2777d75f795366fc257e5fb06f97859e17f05b220937f0 extends Twig_Template
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
        <button id=\"button-send\" data-loading-text=\"";
        // line 6
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_send"]) ? $context["button_send"] : null);
        echo "\" class=\"btn btn-primary\" onclick=\"send('index.php?route=marketing/contact/send&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');\"><i class=\"fa fa-envelope\"></i></button>
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
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-envelope\"></i> ";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 24
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"0\">";
        // line 27
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>
                
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 30
            echo "                
                <option value=\"";
            // line 31
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-to\">";
        // line 39
        echo (isset($context["entry_to"]) ? $context["entry_to"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"to\" id=\"input-to\" class=\"form-control\">
                <option value=\"newsletter\">";
        // line 42
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</option>
                <option value=\"customer_all\">";
        // line 43
        echo (isset($context["text_customer_all"]) ? $context["text_customer_all"] : null);
        echo "</option>
                <option value=\"customer_group\">";
        // line 44
        echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
        echo "</option>
                <option value=\"customer\">";
        // line 45
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "</option>
                <option value=\"affiliate_all\">";
        // line 46
        echo (isset($context["text_affiliate_all"]) ? $context["text_affiliate_all"] : null);
        echo "</option>
                <option value=\"affiliate\">";
        // line 47
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</option>
                <option value=\"product\">";
        // line 48
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-customer-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 53
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 58
            echo "                
                <option value=\"";
            // line 59
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-customer\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 67
        echo (isset($context["help_customer"]) ? $context["help_customer"] : null);
        echo "\">";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 69
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-affiliate\">
            <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 76
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "\" id=\"input-affiliate\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-product\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "\">";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 83
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-subject\">";
        // line 88
        echo (isset($context["entry_subject"]) ? $context["entry_subject"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"\" placeholder=\"";
        // line 90
        echo (isset($context["entry_subject"]) ? $context["entry_subject"] : null);
        echo "\" id=\"input-subject\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 94
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"message\" placeholder=\"";
        // line 96
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "\" id=\"input-message\" data-toggle=\"summernote\" data-lang=\"";
        echo (isset($context["summernote"]) ? $context["summernote"] : null);
        echo "\" class=\"form-control\"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();

\t\$('#to-' + this.value.replace('_', '-')).show();
});

\$('select[name=\\'to\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
// Customers
\$('input[name=\\'customers\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 126
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
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customers\\']').val('');

\t\t\$('#input-customer' + item['value']).remove();

\t\t\$('#input-customer').parent().find('.well').append('<div id=\"customer' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Affiliates
\$('input[name=\\'affiliates\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 158
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request) + '&filter_affiliate=1',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliates\\']').val('');

\t\t\$('#input-affiliate' + item['value']).remove();

\t\t\$('#input-affiliate').parent().find('.well').append('<div id=\"affiliate' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Products
\$('input[name=\\'products\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 190
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'products\\']').val('');

\t\t\$('#input-product' + item['value']).remove();

\t\t\$('#input-product').parent().find('.well').append('<div id=\"product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

function send(url) {
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#content select, #content input, #content textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-send').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['email']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['email'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<div class=\"text-danger\">' + json['error']['subject'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').parent().append('<div class=\"text-danger\">' + json['error']['message'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tsend(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}
//--></script></div>
";
        // line 265
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 265,  351 => 190,  316 => 158,  281 => 126,  246 => 96,  241 => 94,  234 => 90,  229 => 88,  221 => 83,  214 => 81,  206 => 76,  199 => 74,  191 => 69,  184 => 67,  177 => 62,  166 => 59,  163 => 58,  159 => 57,  152 => 53,  144 => 48,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  114 => 39,  107 => 34,  96 => 31,  93 => 30,  89 => 29,  84 => 27,  78 => 24,  70 => 19,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button id="button-send" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_send }}" class="btn btn-primary" onclick="send('index.php?route=marketing/contact/send&user_token={{ user_token }}');"><i class="fa fa-envelope"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-envelope"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-store">{{ entry_store }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="store_id" id="input-store" class="form-control">*/
/*                 <option value="0">{{ text_default }}</option>*/
/*                 */
/*                 {% for store in stores %}*/
/*                 */
/*                 <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                 */
/*                 {% endfor %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-to">{{ entry_to }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="to" id="input-to" class="form-control">*/
/*                 <option value="newsletter">{{ text_newsletter }}</option>*/
/*                 <option value="customer_all">{{ text_customer_all }}</option>*/
/*                 <option value="customer_group">{{ text_customer_group }}</option>*/
/*                 <option value="customer">{{ text_customer }}</option>*/
/*                 <option value="affiliate_all">{{ text_affiliate_all }}</option>*/
/*                 <option value="affiliate">{{ text_affiliate }}</option>*/
/*                 <option value="product">{{ text_product }}</option>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group to" id="to-customer-group">*/
/*             <label class="col-sm-2 control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                 */
/*                 {% for customer_group in customer_groups %}*/
/*                 */
/*                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 */
/*                 {% endfor %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group to" id="to-customer">*/
/*             <label class="col-sm-2 control-label" for="input-customer"><span data-toggle="tooltip" title="{{ help_customer }}">{{ entry_customer }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="customers" value="" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group to" id="to-affiliate">*/
/*             <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="affiliates" value="" placeholder="{{ entry_affiliate }}" id="input-affiliate" class="form-control" />*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group to" id="to-product">*/
/*             <label class="col-sm-2 control-label" for="input-product"><span data-toggle="tooltip" title="{{ help_product }}">{{ entry_product }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="products" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-subject">{{ entry_subject }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="subject" value="" placeholder="{{ entry_subject }}" id="input-subject" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-message">{{ entry_message }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="message" placeholder="{{ entry_message }}" id="input-message" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control"></textarea>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'to\']').on('change', function() {*/
/* 	$('.to').hide();*/
/* */
/* 	$('#to-' + this.value.replace('_', '-')).show();*/
/* });*/
/* */
/* $('select[name=\'to\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* // Customers*/
/* $('input[name=\'customers\']').autocomplete({*/
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
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'customers\']').val('');*/
/* */
/* 		$('#input-customer' + item['value']).remove();*/
/* */
/* 		$('#input-customer').parent().find('.well').append('<div id="customer' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="customer[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Affiliates*/
/* $('input[name=\'affiliates\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request) + '&filter_affiliate=1',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'affiliates\']').val('');*/
/* */
/* 		$('#input-affiliate' + item['value']).remove();*/
/* */
/* 		$('#input-affiliate').parent().find('.well').append('<div id="affiliate' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="affiliate[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Products*/
/* $('input[name=\'products\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'products\']').val('');*/
/* */
/* 		$('#input-product' + item['value']).remove();*/
/* */
/* 		$('#input-product').parent().find('.well').append('<div id="product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* function send(url) {*/
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		data: $('#content select, #content input, #content textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-send').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-send').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['email']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['email'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['subject']) {*/
/* 					$('input[name=\'subject\']').after('<div class="text-danger">' + json['error']['subject'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['message']) {*/
/* 					$('textarea[name=\'message\']').parent().append('<div class="text-danger">' + json['error']['message'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>  ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 				*/
/* 			if (json['next']) {*/
/* 				send(json['next']);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* //--></script></div>*/
/* {{ footer }}*/
