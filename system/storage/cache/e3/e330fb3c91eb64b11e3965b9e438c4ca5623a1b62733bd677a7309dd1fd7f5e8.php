<?php

/* journal2/template/journal2/module/text_rotator.twig */
class __TwigTemplate_10899939ac49ef56672b133bd8ea9b748def3c97629a88872a389335401189f1 extends Twig_Template
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
        echo "<div id=\"journal-rotator-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-rotator-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " journal-rotator box text-rotator ";
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
        echo "\" style=\"";
        echo (isset($context["rotator_css"]) ? $context["rotator_css"] : null);
        echo "; ";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <div class=\"box-heading text-rotator-heading ";
            echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
            echo "\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 6
            echo "    <div class=\"quote\" style=\"";
            echo (isset($context["quote_css"]) ? $context["quote_css"] : null);
            echo "\">
      ";
            // line 7
            if ($this->getAttribute($context["section"], "image", array())) {
                // line 8
                echo "        <img width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["section"], "image", array());
                echo "\" alt=\"\" class=\"rotator-image image-";
                echo (isset($context["image_align"]) ? $context["image_align"] : null);
                echo "\" style=\"";
                echo (isset($context["image_css"]) ? $context["image_css"] : null);
                echo "\"/>
      ";
            }
            // line 10
            echo "      <span class=\"rotator-text\">";
            echo $this->getAttribute($context["section"], "icon", array());
            echo $this->getAttribute($context["section"], "text", array());
            echo "</span>
      ";
            // line 11
            if ($this->getAttribute($context["section"], "author", array())) {
                // line 12
                echo "        <div class=\"rotator-author\" style=\"";
                echo (isset($context["author_css"]) ? $context["author_css"] : null);
                echo "\">- ";
                echo $this->getAttribute($context["section"], "author", array());
                echo "</div>
      ";
            }
            // line 14
            echo "      <div class=\"clearfix\"></div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
<script>
  (function () {
    var single_quote = parseInt('";
        // line 20
        echo twig_length_filter($this->env, (isset($context["sections"]) ? $context["sections"] : null));
        echo "', 10) <= 1;

    \$('#journal-rotator-";
        // line 22
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').quovolver({
      children: '.quote',
      equalHeight: false,
      navPosition: single_quote ? '' : 'below',
      navNum: ";
        // line 26
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
      pauseOnHover: !!parseInt('";
        // line 27
        echo (isset($context["pause_on_hover"]) ? $context["pause_on_hover"] : null);
        echo "', 10),
      autoPlay: !single_quote,
      autoPlaySpeed: ";
        // line 29
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
        return "journal2/template/journal2/module/text_rotator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  127 => 27,  119 => 26,  112 => 22,  107 => 20,  102 => 17,  94 => 14,  86 => 12,  84 => 11,  78 => 10,  64 => 8,  62 => 7,  57 => 6,  52 => 5,  44 => 3,  42 => 2,  19 => 1,);
    }
}
/* <div id="journal-rotator-{{ module }}" class="journal-rotator-{{ module_id }} journal-rotator box text-rotator {{ disable_on_classes | join(' ') }} {% if bullets %} bullets-on bullets-{{ bullets_position }} {% else %} bullets-off {% endif %} align-{{ text_align }}" style="{{ rotator_css }}; {{ css }}">*/
/*   {% if title %}*/
/*     <div class="box-heading text-rotator-heading {{ disable_on_classes | join(' ') }}">{{ title }}</div>*/
/*   {% endif %}*/
/*   {% for section in sections %}*/
/*     <div class="quote" style="{{ quote_css }}">*/
/*       {% if section.image %}*/
/*         <img width="{{ image_width }}" height="{{ image_height }}" src="{{ section.image }}" alt="" class="rotator-image image-{{ image_align }}" style="{{ image_css }}"/>*/
/*       {% endif %}*/
/*       <span class="rotator-text">{{ section.icon }}{{ section.text }}</span>*/
/*       {% if section.author %}*/
/*         <div class="rotator-author" style="{{ author_css }}">- {{ section.author }}</div>*/
/*       {% endif %}*/
/*       <div class="clearfix"></div>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* <script>*/
/*   (function () {*/
/*     var single_quote = parseInt('{{ sections | length }}', 10) <= 1;*/
/* */
/*     $('#journal-rotator-{{ module }}').quovolver({*/
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
/* */
