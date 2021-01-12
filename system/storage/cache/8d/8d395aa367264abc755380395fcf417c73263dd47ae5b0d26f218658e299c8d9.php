<?php

/* journal2/template/journal2/module/super_filter_filters.twig */
class __TwigTemplate_02dd4a0f748181be1346dc8b34d22c3d60157e5fc30f9efa6a68ba3e7b3b20bd extends Twig_Template
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
        echo "<div class=\"box sf-filter sf-";
        echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "display_mode", array());
        echo " sf-filter-";
        echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "filter_group_id", array());
        echo " sf-";
        echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array());
        echo " ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"filter-";
        echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "filter_group_id", array());
        echo "\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "filter_group_name", array());
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "values", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 6
            echo "      <li><label><input data-keyword=\"";
            echo $this->getAttribute($context["value"], "keyword", array());
            echo "\" type=\"checkbox\" name=\"filter[";
            echo $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "filter_group_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["value"], "filter_id", array());
            echo "\"><span class=\"sf-name\">";
            echo $this->getAttribute($context["value"], "filter_name", array());
            echo "</span></label></li>
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
        return "journal2/template/journal2/module/super_filter_filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  49 => 6,  45 => 5,  39 => 4,  34 => 2,  19 => 1,);
    }
}
/* <div class="box sf-filter sf-{{ filter.display_mode }} sf-filter-{{ filter.filter_group_id }} sf-{{ filter.type }} {% if is_collapsed %} is-collapsed {% endif %}" data-id="filter-{{ filter.filter_group_id }}">*/
/*   <div class="box-heading">{{ filter.filter_group_name }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for value in filter.values %}*/
/*       <li><label><input data-keyword="{{ value.keyword }}" type="checkbox" name="filter[{{ filter.filter_group_id }}]" value="{{ value.filter_id }}"><span class="sf-name">{{ value.filter_name }}</span></label></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
