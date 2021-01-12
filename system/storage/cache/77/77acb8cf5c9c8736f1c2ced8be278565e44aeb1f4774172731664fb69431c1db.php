<?php

/* journal2/template/journal2/module/newsletter.twig */
class __TwigTemplate_688406b007ab8ce0e060d783f752c835daa616ffe6be63b40643780b848cf204 extends Twig_Template
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
        echo "<div id=\"journal-newsletter-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-newsletter-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box journal-newsletter text-";
        echo (isset($context["text_class"]) ? $context["text_class"] : null);
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "    <div class=\"box-heading\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"box-content\" style=\"";
        echo (isset($context["module_css"]) ? $context["module_css"] : null);
        echo "\">
    ";
        // line 6
        if ((isset($context["module_text"]) ? $context["module_text"] : null)) {
            // line 7
            echo "      <span class=\"newsletter-text\" style=\"";
            echo (isset($context["font_css"]) ? $context["font_css"] : null);
            echo "\">";
            echo (isset($context["module_text"]) ? $context["module_text"] : null);
            echo "</span>
    ";
        }
        // line 9
        echo "    <span class=\"newsletter-input-wrap\" style=\"";
        echo (isset($context["input_style"]) ? $context["input_style"] : null);
        echo "\">
      <input type=\"text\" class=\"newsletter-email\" placeholder=\"";
        // line 10
        echo (isset($context["input_placeholder"]) ? $context["input_placeholder"] : null);
        echo "\" style=\"";
        echo (isset($context["input_field_style"]) ? $context["input_field_style"] : null);
        echo "\"/>
      <a class=\"newsletter-button button\" onclick=\"Journal.newsletter(\$('#journal-newsletter-";
        // line 11
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "'));\" style=\"";
        echo (isset($context["button_style"]) ? $context["button_style"] : null);
        echo "\">";
        echo (isset($context["button_icon"]) ? $context["button_icon"] : null);
        echo (isset($context["button_text"]) ? $context["button_text"] : null);
        echo "</a>
    </span>
    ";
        // line 13
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 14
            echo "      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
          ";
            // line 17
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
        </label>
      </div>
    ";
        }
        // line 21
        echo "  </div>
  <script>
    \$(\"<style>";
        // line 23
        echo twig_join_filter((isset($context["global_style"]) ? $context["global_style"] : null), " ");
        echo "</style>\").appendTo(\$('head'));
  </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  83 => 17,  78 => 14,  76 => 13,  66 => 11,  60 => 10,  55 => 9,  47 => 7,  45 => 6,  40 => 5,  34 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div id="journal-newsletter-{{ module }}" class="journal-newsletter-{{ module_id }} box journal-newsletter text-{{ text_class }} {{ disable_on_classes | join(' ') }}" style="{{ css }}">*/
/*   {% if heading_title %}*/
/*     <div class="box-heading">{{ heading_title }}</div>*/
/*   {% endif %}*/
/*   <div class="box-content" style="{{ module_css }}">*/
/*     {% if module_text %}*/
/*       <span class="newsletter-text" style="{{ font_css }}">{{ module_text }}</span>*/
/*     {% endif %}*/
/*     <span class="newsletter-input-wrap" style="{{ input_style }}">*/
/*       <input type="text" class="newsletter-email" placeholder="{{ input_placeholder }}" style="{{ input_field_style }}"/>*/
/*       <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-{{ module }}'));" style="{{ button_style }}">{{ button_icon }}{{ button_text }}</a>*/
/*     </span>*/
/*     {% if text_agree %}*/
/*       <div class="checkbox">*/
/*         <label>*/
/*           <input type="checkbox" name="agree" value="1"/>*/
/*           {{ text_agree }}*/
/*         </label>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <script>*/
/*     $("<style>{{ global_style | join (' ') }}</style>").appendTo($('head'));*/
/*   </script>*/
/* </div>*/
/* */
