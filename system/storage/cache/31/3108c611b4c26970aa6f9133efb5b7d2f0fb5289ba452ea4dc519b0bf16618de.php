<?php

/* journal2/template/journal2/module/super_filter_manufacturers.twig */
class __TwigTemplate_12b812bf389b3299c796e37ada820ae32edc05c9aca0a0dfe9781ca384221fbb extends Twig_Template
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
        echo "<div class=\"box sf-manufacturer sf-";
        echo (isset($context["manufacturer_display_mode"]) ? $context["manufacturer_display_mode"] : null);
        echo " sf-";
        echo (isset($context["manufacturer_type"]) ? $context["manufacturer_type"] : null);
        echo "> ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"manufacturer\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_brands_text", 1 => (isset($context["text_manufacturers"]) ? $context["text_manufacturers"] : null)), "method");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) ? $context["manufacturers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 6
            echo "        ";
            if (((isset($context["manufacturer_display_mode"]) ? $context["manufacturer_display_mode"] : null) == "list")) {
                // line 7
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["manufacturer"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"manufacturer\" value=\"";
                echo $this->getAttribute($context["manufacturer"], "manufacturer_id", array());
                echo "\"><span class=\"sf-name\">";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "</span></label></li>
        ";
            } elseif ((            // line 8
(isset($context["manufacturer_display_mode"]) ? $context["manufacturer_display_mode"] : null) == "image")) {
                // line 9
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["manufacturer"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"manufacturer\" value=\"";
                echo $this->getAttribute($context["manufacturer"], "manufacturer_id", array());
                echo "\"><img width=\"";
                echo (isset($context["brand_image_width"]) ? $context["brand_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["brand_image_height"]) ? $context["brand_image_height"] : null);
                echo "\" data-hint=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\" src=\"";
                echo $this->getAttribute($context["manufacturer"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\"/></label></li>
        ";
            } else {
                // line 11
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["manufacturer"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"manufacturer\" value=\"";
                echo $this->getAttribute($context["manufacturer"], "manufacturer_id", array());
                echo "\"><img width=\"";
                echo (isset($context["brand_image_width"]) ? $context["brand_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["brand_image_height"]) ? $context["brand_image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["manufacturer"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\"/><span class=\"sf-name\">";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "</span> </label></li>
        ";
            }
            // line 13
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_manufacturers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 14,  97 => 13,  79 => 11,  59 => 9,  57 => 8,  48 => 7,  45 => 6,  41 => 5,  35 => 4,  30 => 2,  19 => 1,);
    }
}
/* <div class="box sf-manufacturer sf-{{ manufacturer_display_mode }} sf-{{ manufacturer_type }}> {% if is_collapsed %} is-collapsed {% endif %}" data-id="manufacturer">*/
/*   <div class="box-heading">{{ journal2.settings.get('filter_brands_text', text_manufacturers) }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for manufacturer in manufacturers %}*/
/*         {% if manufacturer_display_mode == 'list' %}*/
/*           <li><label><input data-keyword="{{ manufacturer.keyword }}" type="checkbox" name="manufacturer" value="{{ manufacturer.manufacturer_id }}"><span class="sf-name">{{ manufacturer.name }}</span></label></li>*/
/*         {% elseif manufacturer_display_mode == 'image' %}*/
/*           <li><label><input data-keyword="{{ manufacturer.keyword }}" type="checkbox" name="manufacturer" value="{{ manufacturer.manufacturer_id }}"><img width="{{ brand_image_width }}" height="{{ brand_image_height }}" data-hint="{{ manufacturer.name }}" src="{{ manufacturer.image }}" alt="{{ manufacturer.name }}" title="{{ manufacturer.name }}"/></label></li>*/
/*         {% else %}*/
/*           <li><label><input data-keyword="{{ manufacturer.keyword }}" type="checkbox" name="manufacturer" value="{{ manufacturer.manufacturer_id }}"><img width="{{ brand_image_width }}" height="{{ brand_image_height }}" src="{{ manufacturer.image }}" alt="{{ manufacturer.name }}"/><span class="sf-name">{{ manufacturer.name }}</span> </label></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
