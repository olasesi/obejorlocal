<?php

/* journal2/template/journal2/module/accordion.twig */
class __TwigTemplate_73fa9f26375e95c22dc2e99bf47cd4811ea54b1b41be8b6b55e2e45628a0ff9d extends Twig_Template
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
        echo "<div id=\"journal-accordion-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-accordion journal-accordion-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <div class=\"box-heading\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div data-accordion-group>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            echo "      <div data-accordion>
        <div class=\"journal-accordion-heading\" data-control>";
            // line 8
            echo $this->getAttribute($context["section"], "title", array());
            echo "</div>
        <div class=\"journal-accordion-content\" data-content style=\"text-align: ";
            // line 9
            echo $this->getAttribute($context["section"], "content_align", array());
            echo "\">
          <div>";
            // line 10
            echo $this->getAttribute($context["section"], "content", array());
            echo "</div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
</div>
<script>
  \$(function () {
    \$('#journal-accordion-";
        // line 18
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " [data-accordion]').accordion2({
      \"transitionSpeed\": 400,
      \"singleOpen\": ";
        // line 20
        echo (((isset($context["close_others"]) ? $context["close_others"] : null)) ? ("true") : ("false"));
        echo "
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/accordion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  74 => 18,  68 => 14,  58 => 10,  54 => 9,  50 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div id="journal-accordion-{{ module }}" class="journal-accordion journal-accordion-{{ module_id }} box {{ disable_on_classes | join(' ') }} {{ gutter_on_class }}" style="{{ css }}">*/
/*   {% if title %}*/
/*     <div class="box-heading">{{ title }}</div>*/
/*   {% endif %}*/
/*   <div data-accordion-group>*/
/*     {% for section in sections %}*/
/*       <div data-accordion>*/
/*         <div class="journal-accordion-heading" data-control>{{ section.title }}</div>*/
/*         <div class="journal-accordion-content" data-content style="text-align: {{ section.content_align }}">*/
/*           <div>{{ section.content }}</div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   $(function () {*/
/*     $('#journal-accordion-{{ module }} [data-accordion]').accordion2({*/
/*       "transitionSpeed": 400,*/
/*       "singleOpen": {{ close_others ? 'true' : 'false' }}*/
/*     });*/
/*   });*/
/* </script>*/
/* */
