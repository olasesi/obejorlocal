<?php

/* journal2/template/journal2/module/super_filter_attributes.twig */
class __TwigTemplate_26b170064ea05dda044da602137580d0f40285e6dc413b8047e38f234232c078 extends Twig_Template
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
        echo "<div class=\"box sf-attribute sf-attribute-";
        echo $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "attribute_id", array());
        echo " sf-";
        echo $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "type", array());
        echo " ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\" attribute-";
        echo $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "attribute_id", array());
        echo "\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "attribute_name", array());
        echo "</div>
  <div class=\"box-content\">
    <ul class=\"";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_show_box"), "method")) {
            echo " hide-checkbox ";
        }
        echo "\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "values", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 6
            echo "        <li><label><input data-keyword=\"";
            echo $this->getAttribute($context["value"], "keyword", array());
            echo "\" type=\"checkbox\" name=\"attribute[";
            echo $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : null), "attribute_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["value"], "text", array());
            echo "\">";
            echo $this->getAttribute($context["value"], "name", array());
            echo "</label></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  47 => 6,  43 => 5,  37 => 4,  32 => 2,  19 => 1,);
    }
}
/* <div class="box sf-attribute sf-attribute-{{ attribute.attribute_id }} sf-{{ attribute.type }} {% if is_collapsed %} is-collapsed {% endif %}" data-id=" attribute-{{ attribute.attribute_id }}">*/
/*   <div class="box-heading">{{ attribute.attribute_name }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for value in attribute.values %}*/
/*         <li><label><input data-keyword="{{ value.keyword }}" type="checkbox" name="attribute[{{ attribute.attribute_id }}]" value="{{ value.text }}">{{ value.name }}</label></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
