<?php

/* localisation/geo_zone_form.twig */
class __TwigTemplate_4e39f8d9acd8e1a00722b2e1da83df667d8b70c59fa08e8adad398aa1fe63136 extends Twig_Template
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
        <button type=\"submit\" form=\"form-geo-zone\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-geo-zone\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 28
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 30
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 31
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 36
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"";
        // line 38
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "\" id=\"input-description\" class=\"form-control\" />
              ";
        // line 39
        if ((isset($context["error_description"]) ? $context["error_description"] : null)) {
            // line 40
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_description"]) ? $context["error_description"] : null);
            echo "</div>
              ";
        }
        // line 41
        echo " </div>
          </div>
          <fieldset>
            <legend>";
        // line 44
        echo (isset($context["text_geo_zone"]) ? $context["text_geo_zone"] : null);
        echo "</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 48
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 49
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 55
        $context["zone_to_geo_zone_row"] = 0;
        // line 56
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zone_to_geo_zones"]) ? $context["zone_to_geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_geo_zone"]) {
            // line 57
            echo "              <tr id=\"zone-to-geo-zone-row";
            echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
            echo "\">
                <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 58
            echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
            echo "][country_id]\" class=\"form-control\" data-index=\"";
            echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
            echo "\" data-zone-id=\"";
            echo $this->getAttribute($context["zone_to_geo_zone"], "zone_id", array());
            echo "\" disabled=\"disabled\">
                    
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 61
                echo "                    ";
                if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute($context["zone_to_geo_zone"], "country_id", array()))) {
                    // line 62
                    echo "                    
                    <option value=\"";
                    // line 63
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                    
                    ";
                } else {
                    // line 66
                    echo "                    
                    <option value=\"";
                    // line 67
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                    
                    ";
                }
                // line 70
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                  
                  </select></td>
                <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 73
            echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
            echo "][zone_id]\" class=\"form-control\" disabled=\"disabled\">
                  </select></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row";
            // line 75
            echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 77
            $context["zone_to_geo_zone_row"] = ((isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null) + 1);
            // line 78
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" id=\"button-geo-zone\" data-toggle=\"tooltip\" title=\"";
        // line 84
        echo (isset($context["button_geo_zone_add"]) ? $context["button_geo_zone_add"] : null);
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
var zone_to_geo_zone_row = ";
        // line 94
        echo (isset($context["zone_to_geo_zone_row"]) ? $context["zone_to_geo_zone_row"] : null);
        echo ";

\$('#button-geo-zone').on('click', function() {
\thtml  = '<tr id=\"zone-to-geo-zone-row' + zone_to_geo_zone_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-control\" data-index=\"' + zone_to_geo_zone_row + '\">';
\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 100
            echo "\thtml += '    <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "   
\thtml += '</select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-control\"><option value=\"0\">";
        // line 103
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option></select></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row' + zone_to_geo_zone_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 104
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#zone-to-geo-zone tbody').append(html);
\t
\t\$('zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]').trigger();
\t\t\t
\tzone_to_geo_zone_row++;
});

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function() {
\tvar element = this;
\t
\tif (element.value) { 
\t\t\$.ajax({
\t\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 119
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).prop('disabled', true);
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\thtml = '<option value=\"0\">";
        // line 130
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>';
\t\t\t\t
\t\t\t\tif (json['zone'] && json['zone'] != '') {\t
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t}
\t
\t\t\t\t\$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-index') + '][zone_id]\\']').html(html);
\t\t\t\t
\t\t\t\t\$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-index') + '][zone_id]\\']').prop('disabled', false);
\t\t\t\t
\t\t\t\t\$('select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
//--></script></div>
";
        // line 159
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "localisation/geo_zone_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 159,  319 => 130,  305 => 119,  287 => 104,  283 => 103,  279 => 101,  268 => 100,  264 => 99,  256 => 94,  243 => 84,  236 => 79,  230 => 78,  228 => 77,  221 => 75,  216 => 73,  212 => 71,  206 => 70,  198 => 67,  195 => 66,  187 => 63,  184 => 62,  181 => 61,  177 => 60,  168 => 58,  163 => 57,  158 => 56,  156 => 55,  147 => 49,  143 => 48,  136 => 44,  131 => 41,  125 => 40,  123 => 39,  117 => 38,  112 => 36,  107 => 33,  101 => 32,  99 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-geo-zone" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-geo-zone" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-description">{{ entry_description }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="description" value="{{ description }}" placeholder="{{ entry_description }}" id="input-description" class="form-control" />*/
/*               {% if error_description %}*/
/*               <div class="text-danger">{{ error_description }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <fieldset>*/
/*             <legend>{{ text_geo_zone }}</legend>*/
/*             <table id="zone-to-geo-zone" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_country }}</td>*/
/*                   <td class="text-left">{{ entry_zone }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% set zone_to_geo_zone_row = 0 %}*/
/*               {% for zone_to_geo_zone in zone_to_geo_zones %}*/
/*               <tr id="zone-to-geo-zone-row{{ zone_to_geo_zone_row }}">*/
/*                 <td class="text-left"><select name="zone_to_geo_zone[{{ zone_to_geo_zone_row }}][country_id]" class="form-control" data-index="{{ zone_to_geo_zone_row }}" data-zone-id="{{ zone_to_geo_zone.zone_id }}" disabled="disabled">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == zone_to_geo_zone.country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select></td>*/
/*                 <td class="text-left"><select name="zone_to_geo_zone[{{ zone_to_geo_zone_row }}][zone_id]" class="form-control" disabled="disabled">*/
/*                   </select></td>*/
/*                 <td class="text-left"><button type="button" onclick="$('#zone-to-geo-zone-row{{ zone_to_geo_zone_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% set zone_to_geo_zone_row = zone_to_geo_zone_row + 1 %}*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               */
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" id="button-geo-zone" data-toggle="tooltip" title="{{ button_geo_zone_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var zone_to_geo_zone_row = {{ zone_to_geo_zone_row }};*/
/* */
/* $('#button-geo-zone').on('click', function() {*/
/* 	html  = '<tr id="zone-to-geo-zone-row' + zone_to_geo_zone_row + '">';*/
/* 	html += '  <td class="text-left"><select name="zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]" class="form-control" data-index="' + zone_to_geo_zone_row + '">';*/
/* 	{% for country in countries %}*/
/* 	html += '    <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/* 	{% endfor %}   */
/* 	html += '</select></td>';*/
/* 	html += '  <td class="text-left"><select name="zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]" class="form-control"><option value="0">{{ text_all_zones }}</option></select></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#zone-to-geo-zone-row' + zone_to_geo_zone_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#zone-to-geo-zone tbody').append(html);*/
/* 	*/
/* 	$('zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]').trigger();*/
/* 			*/
/* 	zone_to_geo_zone_row++;*/
/* });*/
/* */
/* $('#zone-to-geo-zone').on('change', 'select[name$=\'[country_id]\']', function() {*/
/* 	var element = this;*/
/* 	*/
/* 	if (element.value) { */
/* 		$.ajax({*/
/* 			url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/* 			dataType: 'json',*/
/* 			beforeSend: function() {*/
/* 				$(element).prop('disabled', true);*/
/* 				$('button[form=\'form-geo-zone\']').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$(element).prop('disabled', false);*/
/* 				$('button[form=\'form-geo-zone\']').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				html = '<option value="0">{{ text_all_zones }}</option>';*/
/* 				*/
/* 				if (json['zone'] && json['zone'] != '') {	*/
/* 					for (i = 0; i < json['zone'].length; i++) {*/
/* 						html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* 	*/
/* 						if (json['zone'][i]['zone_id'] == $(element).attr('data-zone-id')) {*/
/* 							html += ' selected="selected"';*/
/* 						}*/
/* 	*/
/* 						html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 					}*/
/* 				}*/
/* 	*/
/* 				$('select[name=\'zone_to_geo_zone[' + $(element).attr('data-index') + '][zone_id]\']').html(html);*/
/* 				*/
/* 				$('select[name=\'zone_to_geo_zone[' + $(element).attr('data-index') + '][zone_id]\']').prop('disabled', false);*/
/* 				*/
/* 				$('select[name$=\'[country_id]\']:disabled:first').trigger('change');*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* $('select[name$=\'[country_id]\']:disabled:first').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }}*/
