<?php

/* extension/advertise/google_connect.twig */
class __TwigTemplate_10fe949e94c73c79a04be7dd14f14639101d725ea93c6a25732b058ff49f15ae extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 7
        echo (isset($context["text_video_tutorial_url_install"]) ? $context["text_video_tutorial_url_install"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-info\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_video_tutorial_install"]) ? $context["button_video_tutorial_install"] : null);
        echo "\"><i class=\"fa fa-video-camera\"></i></a>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\"><i class=\"fa fa-reply\"></i></a>
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
            echo "                <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        echo (isset($context["steps"]) ? $context["steps"] : null);
        echo "
        <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
        // line 21
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>&nbsp;";
        // line 22
        echo (isset($context["text_connect_intro"]) ? $context["text_connect_intro"] : null);
        echo "
        </div>
        ";
        // line 24
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 26
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>&nbsp;";
            // line 27
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            </div>
        ";
        }
        // line 30
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 31
            echo "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 32
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>&nbsp;";
            // line 33
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "
            </div>
        ";
        }
        // line 36
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-plug\"></i>&nbsp;<span>";
        // line 38
        echo (isset($context["text_panel_connect"]) ? $context["text_panel_connect"] : null);
        echo "</span></h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 41
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 43
        echo (isset($context["text_extension_settings"]) ? $context["text_extension_settings"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"select-status\" class=\"col-sm-2 control-label\">";
        // line 45
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"advertise_google_status\" id=\"select-status\" class=\"form-control\">
                                    <option value=\"1\" selected>";
        // line 48
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
                                    <option value=\"0\">";
        // line 49
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label for=\"input-app-id\" class=\"col-sm-2 control-label\">";
        // line 54
        echo (isset($context["text_app_id"]) ? $context["text_app_id"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"input-app-id\" class=\"form-control\" name=\"advertise_google_app_id\" autocomplete=\"off\" value=\"";
        // line 56
        echo (isset($context["advertise_google_app_id"]) ? $context["advertise_google_app_id"] : null);
        echo "\" />
                                ";
        // line 57
        if ((isset($context["error_app_id"]) ? $context["error_app_id"] : null)) {
            // line 58
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_app_id"]) ? $context["error_app_id"] : null);
            echo "</div>
                                ";
        }
        // line 60
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label for=\"input-app-secret\" class=\"col-sm-2 control-label\">";
        // line 63
        echo (isset($context["text_app_secret"]) ? $context["text_app_secret"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"input-app-secret\" class=\"form-control\" name=\"advertise_google_app_secret\" autocomplete=\"off\" value=\"";
        // line 65
        echo (isset($context["advertise_google_app_secret"]) ? $context["advertise_google_app_secret"] : null);
        echo "\" />
                                ";
        // line 66
        if ((isset($context["error_app_secret"]) ? $context["error_app_secret"] : null)) {
            // line 67
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_app_secret"]) ? $context["error_app_secret"] : null);
            echo "</div>
                                ";
        }
        // line 69
        echo "                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 73
        echo (isset($context["text_cron_settings"]) ? $context["text_cron_settings"] : null);
        echo "</legend>
                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 74
        echo (isset($context["text_cron_info"]) ? $context["text_cron_info"] : null);
        echo "</div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 76
        echo (isset($context["help_local_cron"]) ? $context["help_local_cron"] : null);
        echo "\">";
        echo (isset($context["text_local_cron"]) ? $context["text_local_cron"] : null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 78
        echo (isset($context["advertise_google_cron_command"]) ? $context["advertise_google_cron_command"] : null);
        echo "\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 82
        echo (isset($context["help_remote_cron"]) ? $context["help_remote_cron"] : null);
        echo "\">";
        echo (isset($context["text_remote_cron"]) ? $context["text_remote_cron"] : null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input readonly type=\"text\" name=\"advertise_google_cron_url\" id=\"input_advertise_google_cron_url\" class=\"form-control\" value=\"\" />
                                    <div data-toggle=\"tooltip\" data-original-title=\"";
        // line 86
        echo (isset($context["text_refresh_token"]) ? $context["text_refresh_token"] : null);
        echo "\" class=\"input-group-addon btn btn-primary\" id=\"refresh-cron-token\">
                                        <i class=\"fa fa-refresh\"></i>
                                    </div>
                                </div>
                                <input id=\"input_advertise_google_cron_token\" type=\"hidden\" name=\"advertise_google_cron_token\" value=\"";
        // line 90
        echo (isset($context["advertise_google_cron_token"]) ? $context["advertise_google_cron_token"] : null);
        echo "\" />
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"checkbox_advertise_google_cron_acknowledge\">";
        // line 94
        echo (isset($context["entry_setup_confirmation"]) ? $context["entry_setup_confirmation"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <label class=\"checkbox-inline\">
                                    <input id=\"checkbox_advertise_google_cron_acknowledge\" type=\"checkbox\" value=\"1\" ";
        // line 97
        if ((isset($context["advertise_google_cron_acknowledge"]) ? $context["advertise_google_cron_acknowledge"] : null)) {
            echo " checked ";
        }
        echo " name=\"advertise_google_cron_acknowledge\" /> ";
        echo (isset($context["text_acknowledge_cron"]) ? $context["text_acknowledge_cron"] : null);
        echo "
                                </label>

                                ";
        // line 100
        if ((isset($context["error_cron_acknowledge"]) ? $context["error_cron_acknowledge"] : null)) {
            // line 101
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_cron_acknowledge"]) ? $context["error_cron_acknowledge"] : null);
            echo "</div>
                                ";
        }
        // line 103
        echo "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-sm-2\" for=\"dropdown_advertise_google_cron_email_status\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 106
        echo (isset($context["help_cron_email_status"]) ? $context["help_cron_email_status"] : null);
        echo "\">";
        echo (isset($context["text_cron_email_status"]) ? $context["text_cron_email_status"] : null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <select id=\"dropdown_advertise_google_cron_email_status\" name=\"advertise_google_cron_email_status\" class=\"form-control\">
                                    <option value=\"1\" ";
        // line 109
        if (((isset($context["advertise_google_cron_email_status"]) ? $context["advertise_google_cron_email_status"] : null) == "1")) {
            echo " selected ";
        }
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
                                    <option value=\"0\" ";
        // line 110
        if (((isset($context["advertise_google_cron_email_status"]) ? $context["advertise_google_cron_email_status"] : null) == "0")) {
            echo " selected ";
        }
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input_advertise_google_cron_email\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 115
        echo (isset($context["help_cron_email"]) ? $context["help_cron_email"] : null);
        echo "\">";
        echo (isset($context["text_cron_email"]) ? $context["text_cron_email"] : null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <input id=\"input_advertise_google_cron_email\" name=\"advertise_google_cron_email\" type=\"text\" class=\"form-control\" value=\"";
        // line 117
        echo (isset($context["advertise_google_cron_email"]) ? $context["advertise_google_cron_email"] : null);
        echo "\"/>
                                ";
        // line 118
        if ((isset($context["error_cron_email"]) ? $context["error_cron_email"] : null)) {
            // line 119
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_cron_email"]) ? $context["error_cron_email"] : null);
            echo "</div>
                                ";
        }
        // line 121
        echo "                            </div>
                        </div>
                    </fieldset>
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\" id=\"connect\">";
        // line 125
        echo (isset($context["button_connect"]) ? $context["button_connect"] : null);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
(function(\$) {
    var selector = {
        save: '#connect',
        form: '#form'
    }

    var randomString = function() {
        return (Math.random() * 100).toString(16).replace('.', '');
    }

    var setCronUrl = function() {
        \$('#input_advertise_google_cron_url').val(
            \"";
        // line 145
        echo (isset($context["advertise_google_cron_url"]) ? $context["advertise_google_cron_url"] : null);
        echo "\".replace('{CRON_TOKEN}', \$('#input_advertise_google_cron_token').val())
        );
    }

    \$(document).on('click', selector.save, function(e) {
        e.preventDefault();
        e.stopPropagation();

        \$(selector.save).text('";
        // line 153
        echo (isset($context["text_connecting"]) ? $context["text_connecting"] : null);
        echo "').attr('disabled', true);

        \$(selector.form).submit();
    });

    \$(document).ready(function() {
        setCronUrl();
    });

    \$('#refresh-cron-token').click(function() {
        \$('#input_advertise_google_cron_token').val(randomString() + randomString());
        setCronUrl();
    });
})(jQuery);
</script>
";
        // line 168
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/advertise/google_connect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 168,  360 => 153,  349 => 145,  326 => 125,  320 => 121,  314 => 119,  312 => 118,  308 => 117,  301 => 115,  289 => 110,  281 => 109,  273 => 106,  268 => 103,  262 => 101,  260 => 100,  250 => 97,  244 => 94,  237 => 90,  230 => 86,  221 => 82,  214 => 78,  207 => 76,  202 => 74,  198 => 73,  192 => 69,  186 => 67,  184 => 66,  180 => 65,  175 => 63,  170 => 60,  164 => 58,  162 => 57,  158 => 56,  153 => 54,  145 => 49,  141 => 48,  135 => 45,  130 => 43,  125 => 41,  119 => 38,  115 => 36,  109 => 33,  105 => 32,  102 => 31,  99 => 30,  93 => 27,  89 => 26,  86 => 25,  84 => 24,  79 => 22,  75 => 21,  70 => 19,  64 => 15,  53 => 13,  49 => 12,  44 => 10,  37 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ text_video_tutorial_url_install }}" target="_blank" class="btn btn-info" data-toggle="tooltip" title="{{ button_video_tutorial_install }}"><i class="fa fa-video-camera"></i></a>*/
/*                 <a href="{{ cancel }}" class="btn btn-default" data-toggle="tooltip" title="{{ button_cancel }}"><i class="fa fa-reply"></i></a>*/
/*             </div> */
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {{ steps }}*/
/*         <div class="alert alert-info alert-dismissible" role="alert">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="{{ text_close }}"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>*/
/*             <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;{{ text_connect_intro }}*/
/*         </div>*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="{{ text_close }}"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>*/
/*                 <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;{{ success }}*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if error %}*/
/*             <div class="alert alert-danger alert-dismissible" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="{{ text_close }}"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>*/
/*                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;{{ error }}*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-plug"></i>&nbsp;<span>{{ text_panel_connect }}</span></h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/*                     <fieldset>*/
/*                         <legend>{{ text_extension_settings }}</legend>*/
/*                         <div class="form-group">*/
/*                             <label for="select-status" class="col-sm-2 control-label">{{ text_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="advertise_google_status" id="select-status" class="form-control">*/
/*                                     <option value="1" selected>{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label for="input-app-id" class="col-sm-2 control-label">{{ text_app_id }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="input-app-id" class="form-control" name="advertise_google_app_id" autocomplete="off" value="{{ advertise_google_app_id }}" />*/
/*                                 {% if error_app_id %}*/
/*                                     <div class="text-danger">{{ error_app_id }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label for="input-app-secret" class="col-sm-2 control-label">{{ text_app_secret }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="input-app-secret" class="form-control" name="advertise_google_app_secret" autocomplete="off" value="{{ advertise_google_app_secret }}" />*/
/*                                 {% if error_app_secret %}*/
/*                                     <div class="text-danger">{{ error_app_secret }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     <fieldset>*/
/*                         <legend>{{ text_cron_settings }}</legend>*/
/*                         <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_cron_info }}</div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-original-title="{{ help_local_cron }}">{{ text_local_cron }}</span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input readonly type="text" class="form-control" value="{{ advertise_google_cron_command }}" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-original-title="{{ help_remote_cron }}">{{ text_remote_cron }}</span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <div class="input-group">*/
/*                                     <input readonly type="text" name="advertise_google_cron_url" id="input_advertise_google_cron_url" class="form-control" value="" />*/
/*                                     <div data-toggle="tooltip" data-original-title="{{ text_refresh_token }}" class="input-group-addon btn btn-primary" id="refresh-cron-token">*/
/*                                         <i class="fa fa-refresh"></i>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input id="input_advertise_google_cron_token" type="hidden" name="advertise_google_cron_token" value="{{ advertise_google_cron_token }}" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="checkbox_advertise_google_cron_acknowledge">{{ entry_setup_confirmation }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <label class="checkbox-inline">*/
/*                                     <input id="checkbox_advertise_google_cron_acknowledge" type="checkbox" value="1" {% if advertise_google_cron_acknowledge %} checked {% endif %} name="advertise_google_cron_acknowledge" /> {{ text_acknowledge_cron }}*/
/*                                 </label>*/
/* */
/*                                 {% if error_cron_acknowledge %}*/
/*                                     <div class="text-danger">{{ error_cron_acknowledge }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label col-sm-2" for="dropdown_advertise_google_cron_email_status"><span data-toggle="tooltip" data-original-title="{{ help_cron_email_status }}">{{ text_cron_email_status }}</span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select id="dropdown_advertise_google_cron_email_status" name="advertise_google_cron_email_status" class="form-control">*/
/*                                     <option value="1" {% if advertise_google_cron_email_status == '1' %} selected {% endif %}>{{ text_enabled }}</option>*/
/*                                     <option value="0" {% if advertise_google_cron_email_status == '0' %} selected {% endif %}>{{ text_disabled }}</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input_advertise_google_cron_email"><span data-toggle="tooltip" data-original-title="{{ help_cron_email }}">{{ text_cron_email }}</span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input id="input_advertise_google_cron_email" name="advertise_google_cron_email" type="text" class="form-control" value="{{ advertise_google_cron_email }}"/>*/
/*                                 {% if error_cron_email %}*/
/*                                     <div class="text-danger">{{ error_cron_email }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     <div class="pull-right">*/
/*                         <button type="submit" class="btn btn-primary btn-block" id="connect">{{ button_connect }}</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* (function($) {*/
/*     var selector = {*/
/*         save: '#connect',*/
/*         form: '#form'*/
/*     }*/
/* */
/*     var randomString = function() {*/
/*         return (Math.random() * 100).toString(16).replace('.', '');*/
/*     }*/
/* */
/*     var setCronUrl = function() {*/
/*         $('#input_advertise_google_cron_url').val(*/
/*             "{{ advertise_google_cron_url }}".replace('{CRON_TOKEN}', $('#input_advertise_google_cron_token').val())*/
/*         );*/
/*     }*/
/* */
/*     $(document).on('click', selector.save, function(e) {*/
/*         e.preventDefault();*/
/*         e.stopPropagation();*/
/* */
/*         $(selector.save).text('{{ text_connecting }}').attr('disabled', true);*/
/* */
/*         $(selector.form).submit();*/
/*     });*/
/* */
/*     $(document).ready(function() {*/
/*         setCronUrl();*/
/*     });*/
/* */
/*     $('#refresh-cron-token').click(function() {*/
/*         $('#input_advertise_google_cron_token').val(randomString() + randomString());*/
/*         setCronUrl();*/
/*     });*/
/* })(jQuery);*/
/* </script>*/
/* {{ footer }}*/
