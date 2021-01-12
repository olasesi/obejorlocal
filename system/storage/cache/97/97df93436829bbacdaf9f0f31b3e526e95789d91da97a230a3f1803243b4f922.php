<?php

/* journal2/template/journal2/module/cms_blocks.twig */
class __TwigTemplate_b8545b5f902028fadebf034bee422d1439b3e84fe7610f455d5be8955d0d872d extends Twig_Template
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
        echo "<div id=\"journal-cms-block-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-cms-block-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box cms-blocks ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <style>
    #journal-cms-block-";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .editor-content h1,
    #journal-cms-block-";
        // line 4
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .editor-content h2,
    #journal-cms-block-";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .editor-content h3 {
    ";
        // line 6
        echo (isset($context["headings_style"]) ? $context["headings_style"] : null);
        echo "
    }

    #journal-cms-block-";
        // line 9
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .editor-content p {
    ";
        // line 10
        echo (isset($context["paragraphs_style"]) ? $context["paragraphs_style"] : null);
        echo "
    }
  </style>
  ";
        // line 13
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 14
            echo "    <div class=\"box-heading\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</div>
  ";
        }
        // line 16
        echo "  <div class=\"blocks\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 18
            echo "      <div class=\"cms-block ";
            echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
            echo "\" style=\"";
            echo $this->getAttribute($context["section"], "block_css", array());
            echo "\">
        ";
            // line 19
            if ($this->getAttribute($context["section"], "title", array())) {
                // line 20
                echo "          <h3>";
                echo $this->getAttribute($context["section"], "title", array());
                echo "</h3>
        ";
            }
            // line 22
            echo "        <span class=\"block-content block-content-";
            echo $this->getAttribute($context["section"], "icon_position", array());
            echo "\" style=\"";
            echo $this->getAttribute($context["section"], "css", array());
            echo "\">
            ";
            // line 23
            if ($this->getAttribute($context["section"], "has_icon", array())) {
                // line 24
                echo "              <div class=\"block-icon block-icon-";
                echo $this->getAttribute($context["section"], "icon_position", array());
                echo "\" style=\"";
                echo $this->getAttribute($context["section"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["section"], "icon", array());
                echo "</div>
            ";
            }
            // line 26
            echo "          <div class=\"editor-content\" style=\"text-align: ";
            echo $this->getAttribute($context["section"], "content_align", array());
            echo "\">";
            echo $this->getAttribute($context["section"], "content", array());
            echo "</div>
        </span>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </div>
</div>
<script>
  if (!Journal.isFlexboxSupported) {
    Journal.equalHeight(\$('#journal-cms-block-";
        // line 34
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .cms-block'), '.block-content');
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/cms_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  123 => 30,  110 => 26,  100 => 24,  98 => 23,  91 => 22,  85 => 20,  83 => 19,  76 => 18,  72 => 17,  69 => 16,  63 => 14,  61 => 13,  55 => 10,  51 => 9,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  19 => 1,);
    }
}
/* <div id="journal-cms-block-{{ module }}" class="journal-cms-block-{{ module_id }} box cms-blocks {{ disable_on_classes | join(' ') }} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <style>*/
/*     #journal-cms-block-{{ module }} .editor-content h1,*/
/*     #journal-cms-block-{{ module }} .editor-content h2,*/
/*     #journal-cms-block-{{ module }} .editor-content h3 {*/
/*     {{ headings_style }}*/
/*     }*/
/* */
/*     #journal-cms-block-{{ module }} .editor-content p {*/
/*     {{ paragraphs_style }}*/
/*     }*/
/*   </style>*/
/*   {% if title %}*/
/*     <div class="box-heading">{{ title }}</div>*/
/*   {% endif %}*/
/*   <div class="blocks">*/
/*     {% for section in sections %}*/
/*       <div class="cms-block {{ grid_classes }}" style="{{ section.block_css }}">*/
/*         {% if section.title %}*/
/*           <h3>{{ section.title }}</h3>*/
/*         {% endif %}*/
/*         <span class="block-content block-content-{{ section.icon_position }}" style="{{ section.css }}">*/
/*             {% if section.has_icon %}*/
/*               <div class="block-icon block-icon-{{ section.icon_position }}" style="{{ section.icon_css }}">{{ section.icon }}</div>*/
/*             {% endif %}*/
/*           <div class="editor-content" style="text-align: {{ section.content_align }}">{{ section.content }}</div>*/
/*         </span>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   if (!Journal.isFlexboxSupported) {*/
/*     Journal.equalHeight($('#journal-cms-block-{{ module }} .cms-block'), '.block-content');*/
/*   }*/
/* </script>*/
/* */
