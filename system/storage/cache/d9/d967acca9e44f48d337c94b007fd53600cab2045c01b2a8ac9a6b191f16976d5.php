<?php

/* extension/advertise/google_checklist.twig */
class __TwigTemplate_871eed923d26c279016cd01f225dd280c420fbbad401c71e438f953adb919b2a extends Twig_Template
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
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 21
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>&nbsp;";
            // line 22
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            </div>
        ";
        }
        // line 25
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 26
            echo "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 27
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span></button>
                <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>&nbsp;";
            // line 28
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "
            </div>
        ";
        }
        // line 31
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list-ol\"></i>&nbsp;<span>";
        // line 33
        echo (isset($context["text_panel_heading"]) ? $context["text_panel_heading"] : null);
        echo "</span></h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"advertise_google_checklist_confirmed\" value=\"1\" />

                    <div class=\"alert alert-info\">
                        ";
        // line 40
        echo (isset($context["text_checklist_intro"]) ? $context["text_checklist_intro"] : null);
        echo "
                    </div>

                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <tbody>
                                <tr>
                                    <td class=\"text-center td-pointer\"><input type=\"checkbox\" name=\"acknowledge[0]\" /></td>
                                    <td class=\"text-left\">";
        // line 48
        echo (isset($context["text_checklist_acknowledge_0"]) ? $context["text_checklist_acknowledge_0"] : null);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-center td-pointer\"><input type=\"checkbox\" name=\"acknowledge[1]\" /></td>
                                    <td class=\"text-left\">";
        // line 52
        echo (isset($context["text_checklist_acknowledge_1"]) ? $context["text_checklist_acknowledge_1"] : null);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-center td-pointer\"><input type=\"checkbox\" name=\"acknowledge[2]\" /></td>
                                    <td class=\"text-left\">";
        // line 56
        echo (isset($context["text_checklist_acknowledge_2"]) ? $context["text_checklist_acknowledge_2"] : null);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-center td-pointer\"><input type=\"checkbox\" name=\"acknowledge[3]\" /></td>
                                    <td class=\"text-left\">";
        // line 60
        echo (isset($context["text_checklist_acknowledge_3"]) ? $context["text_checklist_acknowledge_3"] : null);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-center td-pointer\"><input type=\"checkbox\" name=\"acknowledge[4]\" /></td>
                                    <td class=\"text-left\">";
        // line 64
        echo (isset($context["text_checklist_acknowledge_4"]) ? $context["text_checklist_acknowledge_4"] : null);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 71
        echo (isset($context["button_proceed"]) ? $context["button_proceed"] : null);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style type=\"text/css\">
    .td-pointer {
        cursor: pointer;
    }
</style>
<script type=\"text/javascript\">
(function(\$) {
    \$('input[name^=acknowledge]').change(function(e) {
        \$(this).closest('tr').toggleClass('success', \$(this).is(':checked'));

        \$('button[type=\"submit\"]').attr('disabled', \$('input[name^=acknowledge]:not(:checked)').length > 0);
    }).trigger('change');

    \$('input[name^=acknowledge]').closest('td').click(function(e) {
        if (\$(e.target).is('input')) {
            return;
        }

        var checkbox = \$(this).find('input[name^=acknowledge]').first();

        \$(checkbox).prop('checked', !\$(checkbox).prop('checked')).trigger('change');
    });
})(jQuery);
</script>
";
        // line 102
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/advertise/google_checklist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 102,  167 => 71,  157 => 64,  150 => 60,  143 => 56,  136 => 52,  129 => 48,  118 => 40,  111 => 36,  105 => 33,  101 => 31,  95 => 28,  91 => 27,  88 => 26,  85 => 25,  79 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 15,  53 => 13,  49 => 12,  44 => 10,  37 => 8,  31 => 7,  23 => 2,  19 => 1,);
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
/*                 <h3 class="panel-title"><i class="fa fa-list-ol"></i>&nbsp;<span>{{ text_panel_heading }}</span></h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/*                     <input type="hidden" name="advertise_google_checklist_confirmed" value="1" />*/
/* */
/*                     <div class="alert alert-info">*/
/*                         {{ text_checklist_intro }}*/
/*                     </div>*/
/* */
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <td class="text-center td-pointer"><input type="checkbox" name="acknowledge[0]" /></td>*/
/*                                     <td class="text-left">{{ text_checklist_acknowledge_0 }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td class="text-center td-pointer"><input type="checkbox" name="acknowledge[1]" /></td>*/
/*                                     <td class="text-left">{{ text_checklist_acknowledge_1 }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td class="text-center td-pointer"><input type="checkbox" name="acknowledge[2]" /></td>*/
/*                                     <td class="text-left">{{ text_checklist_acknowledge_2 }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td class="text-center td-pointer"><input type="checkbox" name="acknowledge[3]" /></td>*/
/*                                     <td class="text-left">{{ text_checklist_acknowledge_3 }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td class="text-center td-pointer"><input type="checkbox" name="acknowledge[4]" /></td>*/
/*                                     <td class="text-left">{{ text_checklist_acknowledge_4 }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                     <div class="pull-right">*/
/*                         <button type="submit" class="btn btn-primary">{{ button_proceed }}</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <style type="text/css">*/
/*     .td-pointer {*/
/*         cursor: pointer;*/
/*     }*/
/* </style>*/
/* <script type="text/javascript">*/
/* (function($) {*/
/*     $('input[name^=acknowledge]').change(function(e) {*/
/*         $(this).closest('tr').toggleClass('success', $(this).is(':checked'));*/
/* */
/*         $('button[type="submit"]').attr('disabled', $('input[name^=acknowledge]:not(:checked)').length > 0);*/
/*     }).trigger('change');*/
/* */
/*     $('input[name^=acknowledge]').closest('td').click(function(e) {*/
/*         if ($(e.target).is('input')) {*/
/*             return;*/
/*         }*/
/* */
/*         var checkbox = $(this).find('input[name^=acknowledge]').first();*/
/* */
/*         $(checkbox).prop('checked', !$(checkbox).prop('checked')).trigger('change');*/
/*     });*/
/* })(jQuery);*/
/* </script>*/
/* {{ footer }}*/
