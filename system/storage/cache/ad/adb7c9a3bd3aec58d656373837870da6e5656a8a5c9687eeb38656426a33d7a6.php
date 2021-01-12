<?php

/* journal2/template/journal2/module/advanced_grid.twig */
class __TwigTemplate_60624fdbbe55a2b3a9af62cc702c0ca3ac7fe34c1a6d924826bb4c69e5773b63 extends Twig_Template
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
        echo "<div id=\"multi-module-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"multi-module-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " multi-modules-wrapper ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div class=\"box multi-modules\" style=\"height: ";
        // line 2
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "px; ";
        if ((isset($context["module_spacing"]) ? $context["module_spacing"] : null)) {
            echo " margin-right: -";
            echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
            echo " ";
        }
        echo "\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 4
            echo "      <div class=\"multi-modules-column ";
            echo $this->getAttribute($context["column"], "classes", array());
            echo "\" style=\"";
            if ((isset($context["module_spacing"]) ? $context["module_spacing"] : null)) {
                echo " padding-right: ";
                echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
                echo " ";
            }
            echo "\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "modules", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 6
                echo "          ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 7
                    echo "            <div class=\"multi-modules-row ";
                    echo twig_join_filter($this->getAttribute($context["m"], "class", array()), " ");
                    echo "\" data-ratio=\"";
                    echo $this->getAttribute($context["m"], "height", array());
                    echo "\" style=\"height: calc(100% / ";
                    echo (100 / $this->getAttribute($context["m"], "height", array()));
                    echo " - ";
                    echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
                    echo ");\">
              ";
                    // line 8
                    echo $this->getAttribute($context["m"], "content", array());
                    echo "
            </div>
          ";
                } else {
                    // line 11
                    echo "            <div class=\"multi-modules-row ";
                    echo twig_join_filter($this->getAttribute($context["m"], "class", array()), " ");
                    echo "\" data-ratio=\"";
                    echo $this->getAttribute($context["m"], "height", array());
                    echo "\" style=\"height: calc(100% / ";
                    echo (100 / $this->getAttribute($context["m"], "height", array()));
                    echo " - ";
                    echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
                    echo "); ";
                    if ((isset($context["module_spacing"]) ? $context["module_spacing"] : null)) {
                        echo " margin-bottom: ";
                        echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
                        echo " ";
                    }
                    echo "\">
              ";
                    // line 12
                    echo $this->getAttribute($context["m"], "content", array());
                    echo "
            </div>
          ";
                }
                // line 15
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </div>

  ";
        // line 20
        $context["sw"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        // line 21
        echo "  ";
        $context["ratio"] = ((isset($context["height"]) ? $context["height"] : null) / (isset($context["sw"]) ? $context["sw"] : null));
        // line 22
        echo "
  <style>
    @media only screen and (min-width: ";
        // line 24
        echo (isset($context["sw"]) ? $context["sw"] : null);
        echo "px) {
      #top-modules .multi-modules-wrapper,
      #bottom-modules .multi-modules-wrapper {
        margin-bottom: -";
        // line 27
        echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
        echo " !important;
      }
    }

    @media only screen and (max-width: ";
        // line 31
        echo (isset($context["sw"]) ? $context["sw"] : null);
        echo "px) {
      #multi-module-";
        // line 32
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .multi-modules {
        height: calc(100% * ";
        // line 33
        echo (isset($context["ratio"]) ? $context["ratio"] : null);
        echo ") !important;
      }
    }

    @media only screen and (max-width: 760px) {
      #multi-module-";
        // line 38
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .multi-modules,
      #multi-module-";
        // line 39
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .multi-modules-column,
      #multi-module-";
        // line 40
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .multi-modules-row {
        height: auto !important;
      }

    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["column"]) {
            // line 45
            echo "      #multi-module-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .multi-modules-column:nth-child(";
            echo ($context["i"] + 1);
            echo ") .row-rs {
        height: calc(100vw * ";
            // line 46
            echo ((isset($context["height"]) ? $context["height"] : null) / ((((isset($context["sw"]) ? $context["sw"] : null) * $this->getAttribute($context["column"], "width", array())) / 100) + 40));
            echo ") !important;
      }

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      #multi-module-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .column-banner .multi-modules-row:first-of-type:not(:only-of-type) {
        margin-bottom: ";
        // line 51
        echo (isset($context["module_spacing"]) ? $context["module_spacing"] : null);
        echo ";
      }
    }
  </style>

  ";
        // line 56
        if ((isset($context["grid_dimensions"]) ? $context["grid_dimensions"] : null)) {
            // line 57
            echo "    <script>
      (function () {
        var \$row = \$('.multi-modules-row');
        \$row.find('.container-dimensions').remove();
        \$row.each(function () {
          \$(this).append('<span class=\"container-dimensions\">' + \$(this).width() + 'x' + \$(this).height() + '</span>');
        });
      })();
    </script>
  ";
        }
        // line 67
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/advanced_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 67,  231 => 57,  229 => 56,  221 => 51,  216 => 50,  206 => 46,  199 => 45,  195 => 44,  188 => 40,  184 => 39,  180 => 38,  172 => 33,  168 => 32,  164 => 31,  157 => 27,  151 => 24,  147 => 22,  144 => 21,  142 => 20,  138 => 18,  131 => 16,  117 => 15,  111 => 12,  94 => 11,  88 => 8,  77 => 7,  74 => 6,  57 => 5,  46 => 4,  42 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div id="multi-module-{{ module }}" class="multi-module-{{ module_id }} multi-modules-wrapper {{ gutter_on_class }} {{ disable_on_classes | join(' ') }}" style="{{ css }}">*/
/*   <div class="box multi-modules" style="height: {{ height }}px; {% if module_spacing %} margin-right: -{{ module_spacing }} {% endif %}">*/
/*     {% for column in columns %}*/
/*       <div class="multi-modules-column {{ column.classes }}" style="{% if module_spacing %} padding-right: {{ module_spacing }} {% endif %}">*/
/*         {% for m in column.modules %}*/
/*           {% if loop.last %}*/
/*             <div class="multi-modules-row {{ m.class | join(' ') }}" data-ratio="{{ m.height }}" style="height: calc(100% / {{ 100 / m.height }} - {{ module_spacing }});">*/
/*               {{ m.content }}*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="multi-modules-row {{ m.class | join(' ') }}" data-ratio="{{ m.height }}" style="height: calc(100% / {{ 100 / m.height }} - {{ module_spacing }}); {% if module_spacing %} margin-bottom: {{ module_spacing }} {% endif %}">*/
/*               {{ m.content }}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   {% set sw = journal2.settings.get('site_width', 1024) %}*/
/*   {% set ratio = height / sw %}*/
/* */
/*   <style>*/
/*     @media only screen and (min-width: {{ sw }}px) {*/
/*       #top-modules .multi-modules-wrapper,*/
/*       #bottom-modules .multi-modules-wrapper {*/
/*         margin-bottom: -{{ module_spacing }} !important;*/
/*       }*/
/*     }*/
/* */
/*     @media only screen and (max-width: {{ sw }}px) {*/
/*       #multi-module-{{ module }} .multi-modules {*/
/*         height: calc(100% * {{ ratio }}) !important;*/
/*       }*/
/*     }*/
/* */
/*     @media only screen and (max-width: 760px) {*/
/*       #multi-module-{{ module }} .multi-modules,*/
/*       #multi-module-{{ module }} .multi-modules-column,*/
/*       #multi-module-{{ module }} .multi-modules-row {*/
/*         height: auto !important;*/
/*       }*/
/* */
/*     {% for i, column in columns %}*/
/*       #multi-module-{{ module }} .multi-modules-column:nth-child({{ i + 1 }}) .row-rs {*/
/*         height: calc(100vw * {{ height / (sw * column.width / 100 + 40) }}) !important;*/
/*       }*/
/* */
/*     {% endfor %}*/
/*       #multi-module-{{ module }} .column-banner .multi-modules-row:first-of-type:not(:only-of-type) {*/
/*         margin-bottom: {{ module_spacing }};*/
/*       }*/
/*     }*/
/*   </style>*/
/* */
/*   {% if grid_dimensions %}*/
/*     <script>*/
/*       (function () {*/
/*         var $row = $('.multi-modules-row');*/
/*         $row.find('.container-dimensions').remove();*/
/*         $row.each(function () {*/
/*           $(this).append('<span class="container-dimensions">' + $(this).width() + 'x' + $(this).height() + '</span>');*/
/*         });*/
/*       })();*/
/*     </script>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* */
