<?php

/* journal2/template/journal2/common/modules.twig */
class __TwigTemplate_5ab74d734db6ddfc4d4bbbbdae3649e568f5c15b875103f5345078ee6542e86d extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "  <div class=\"";
            echo $this->getAttribute($context["module"], "type", array());
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => (((("module_" . $this->getAttribute($context["module"], "type", array())) . "_") . $this->getAttribute($context["module"], "module_id", array())) . "_classes")), "method");
            echo "\" style=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => ((("module_" . $this->getAttribute($context["module"], "type", array())) . "_") . $this->getAttribute($context["module"], "module_id", array()))), "method");
            echo "\">";
            echo $this->getAttribute($context["module"], "module", array());
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/common/modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% for module in modules %}*/
/*   <div class="{{ module.type }} {{ journal2.settings.get('module_' ~ module.type ~ '_' ~ module.module_id ~ '_classes') }}" style="{{ journal2.settings.get('module_' ~ module.type ~ '_' ~ module.module_id) }}">{{ module.module }}</div>*/
/* {% endfor %}*/
/* */
