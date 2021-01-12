<?php

/* journal2/template/journal2/module/headline_rotator.twig */
class __TwigTemplate_f5f2606db8b1878ff6927191284bb6856c14990715b65ce00ce683b7d2d050a6 extends Twig_Template
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
        echo "<div id=\"journal-headline-rotator-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-headline-rotator-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " journal-rotator headline-mode box ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " bullets-on bullets-";
            echo (isset($context["bullets_position"]) ? $context["bullets_position"] : null);
            echo " ";
        } else {
            echo " bullets-off ";
        }
        echo " align-";
        echo (isset($context["text_align"]) ? $context["text_align"] : null);
        echo "\" style=\"display: none; ";
        echo (isset($context["rotator_css"]) ? $context["rotator_css"] : null);
        echo "; ";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 3
            echo "    <div class=\"quote ";
            if ( !$this->getAttribute($context["section"], "text", array())) {
                echo " no-text ";
            }
            echo " ";
            if ($this->getAttribute($context["section"], "cta", array())) {
                echo " has-cta cta-";
                echo $this->getAttribute($context["section"], "cta_position", array());
                echo " ";
            }
            echo "\" style=\"";
            echo (isset($context["quote_css"]) ? $context["quote_css"] : null);
            echo "\">
      <div style=\"min-height: ";
            // line 4
            echo (isset($context["headline_rotator_height"]) ? $context["headline_rotator_height"] : null);
            echo "px\">
        ";
            // line 5
            if (($this->getAttribute($context["section"], "cta", array()) && ($this->getAttribute($context["section"], "cta_position", array()) == "left"))) {
                // line 6
                echo "          ";
                if ($this->getAttribute($context["section"], "cta_link", array())) {
                    // line 7
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["section"], "cta_link", array());
                    echo "\" class=\"cta button button-left\" ";
                    echo $this->getAttribute($context["section"], "cta_target", array());
                    echo " style=\"";
                    echo $this->getAttribute($context["section"], "cta_style", array());
                    echo "\">";
                    echo $this->getAttribute($context["section"], "cta_icon", array());
                    echo $this->getAttribute($context["section"], "cta_text", array());
                    echo "</a>
          ";
                } else {
                    // line 9
                    echo "            <a class=\"cta button\" style=\"";
                    echo $this->getAttribute($context["section"], "cta_style", array());
                    echo "\">";
                    echo $this->getAttribute($context["section"], "cta_icon", array());
                    echo $this->getAttribute($context["section"], "cta_text", array());
                    echo "</a>
          ";
                }
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <div class=\"rotator-text ";
            if ($this->getAttribute($context["section"], "line_through", array())) {
                echo " line-through ";
            }
            echo "\">";
            echo $this->getAttribute($context["section"], "icon", array());
            echo "<span style=\"";
            echo $this->getAttribute($context["section"], "style", array());
            echo "\">";
            echo $this->getAttribute($context["section"], "text", array());
            echo "</span></div>
        ";
            // line 13
            if (($this->getAttribute($context["section"], "cta", array()) && ($this->getAttribute($context["section"], "cta_position", array()) != "left"))) {
                // line 14
                echo "          ";
                if ($this->getAttribute($context["section"], "cta_link", array())) {
                    // line 15
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["section"], "cta_link", array());
                    echo "\" class=\"cta button button-";
                    echo $this->getAttribute($context["section"], "cta_position", array());
                    echo " button-icon-";
                    echo $this->getAttribute($context["section"], "cta_icon_position", array());
                    echo "\" ";
                    echo $this->getAttribute($context["section"], "cta_target", array());
                    echo " style=\"";
                    echo $this->getAttribute($context["section"], "cta_style", array());
                    echo "\">";
                    echo $this->getAttribute($context["section"], "cta_icon", array());
                    echo $this->getAttribute($context["section"], "cta_text", array());
                    echo "</a>
          ";
                } else {
                    // line 17
                    echo "            <a class=\"cta button button-icon-";
                    echo $this->getAttribute($context["section"], "cta_icon_position", array());
                    echo "\" style=\"";
                    echo $this->getAttribute($context["section"], "cta_style", array());
                    echo "\">";
                    echo $this->getAttribute($context["section"], "cta_icon", array());
                    echo $this->getAttribute($context["section"], "cta_text", array());
                    echo "</a>
          ";
                }
                // line 19
                echo "        ";
            }
            // line 20
            echo "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
<script>
  (function () {
    var single_quote = parseInt('";
        // line 26
        echo twig_length_filter($this->env, (isset($context["sections"]) ? $context["sections"] : null));
        echo "', 10) <= 1;

    \$('#journal-headline-rotator-";
        // line 28
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').show().quovolver({
      children: '.quote',
      equalHeight: false,
      navPosition: single_quote ? '' : 'below',
      navNum: ";
        // line 32
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
      pauseOnHover: !!parseInt('";
        // line 33
        echo (isset($context["pause_on_hover"]) ? $context["pause_on_hover"] : null);
        echo "', 10),
      autoPlay: !single_quote,
      autoPlaySpeed: ";
        // line 35
        echo (isset($context["transition_delay"]) ? $context["transition_delay"] : null);
        echo ",
      transitionSpeed: 300
    });
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/headline_rotator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 35,  177 => 33,  169 => 32,  162 => 28,  157 => 26,  152 => 23,  144 => 20,  141 => 19,  130 => 17,  113 => 15,  110 => 14,  108 => 13,  95 => 12,  92 => 11,  83 => 9,  70 => 7,  67 => 6,  65 => 5,  61 => 4,  46 => 3,  42 => 2,  19 => 1,);
    }
}
/* <div id="journal-headline-rotator-{{ module }}" class="journal-headline-rotator-{{ module_id }} journal-rotator headline-mode box {{ disable_on_classes | join(' ') }} {% if bullets %} bullets-on bullets-{{ bullets_position }} {% else %} bullets-off {% endif %} align-{{ text_align }}" style="display: none; {{ rotator_css }}; {{ css }}">*/
/*   {% for section in sections %}*/
/*     <div class="quote {% if not section.text %} no-text {% endif %} {% if section.cta %} has-cta cta-{{ section.cta_position }} {% endif %}" style="{{ quote_css }}">*/
/*       <div style="min-height: {{ headline_rotator_height }}px">*/
/*         {% if section.cta and section.cta_position == 'left' %}*/
/*           {% if section.cta_link %}*/
/*             <a href="{{ section.cta_link }}" class="cta button button-left" {{ section.cta_target }} style="{{ section.cta_style }}">{{ section.cta_icon }}{{ section.cta_text }}</a>*/
/*           {% else %}*/
/*             <a class="cta button" style="{{ section.cta_style }}">{{ section.cta_icon }}{{ section.cta_text }}</a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*         <div class="rotator-text {% if section.line_through %} line-through {% endif %}">{{ section.icon }}<span style="{{ section.style }}">{{ section.text }}</span></div>*/
/*         {% if section.cta and section.cta_position != 'left' %}*/
/*           {% if section.cta_link %}*/
/*             <a href="{{ section.cta_link }}" class="cta button button-{{ section.cta_position }} button-icon-{{ section.cta_icon_position }}" {{ section.cta_target }} style="{{ section.cta_style }}">{{ section.cta_icon }}{{ section.cta_text }}</a>*/
/*           {% else %}*/
/*             <a class="cta button button-icon-{{ section.cta_icon_position }}" style="{{ section.cta_style }}">{{ section.cta_icon }}{{ section.cta_text }}</a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* <script>*/
/*   (function () {*/
/*     var single_quote = parseInt('{{ sections | length }}', 10) <= 1;*/
/* */
/*     $('#journal-headline-rotator-{{ module }}').show().quovolver({*/
/*       children: '.quote',*/
/*       equalHeight: false,*/
/*       navPosition: single_quote ? '' : 'below',*/
/*       navNum: {% if bullets %} true {% else %} false {% endif %},*/
/*       pauseOnHover: !!parseInt('{{ pause_on_hover }}', 10),*/
/*       autoPlay: !single_quote,*/
/*       autoPlaySpeed: {{ transition_delay }},*/
/*       transitionSpeed: 300*/
/*     });*/
/*   })();*/
/* </script>*/
/* */
