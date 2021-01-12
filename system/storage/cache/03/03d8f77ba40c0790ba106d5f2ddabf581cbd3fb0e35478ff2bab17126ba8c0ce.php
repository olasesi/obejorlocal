<?php

/* journal2/template/common/maintenance.twig */
class __TwigTemplate_ce1f37c3c320447129afc98391e5c3bdc4e015dc9034184517f0332d25fbaa9e extends Twig_Template
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
<div id=\"container\" class=\"container j-container maintenance-message\">
  <div class=\"row\">
    <div id=\"content\">";
        // line 4
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</div>
  </div>
</div>
";
        // line 7
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container maintenance-message">*/
/*   <div class="row">*/
/*     <div id="content">{{ message }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
/* */
