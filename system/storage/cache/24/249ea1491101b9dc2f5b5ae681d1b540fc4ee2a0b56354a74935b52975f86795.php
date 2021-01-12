<?php

/* journal2/template/journal2/module/super_filter_categories.twig */
class __TwigTemplate_87e28bcad9330f5a4dee682fa941ccf46ff6c29abe134aa305c361ad6f619d63 extends Twig_Template
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
        echo "<div class=\"box sf-category sf-";
        echo (isset($context["category_display_mode"]) ? $context["category_display_mode"] : null);
        echo " sf-";
        echo (isset($context["category_type"]) ? $context["category_type"] : null);
        echo " ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"category\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_categories_text", 1 => (isset($context["text_categories"]) ? $context["text_categories"] : null)), "method");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            if (((isset($context["category_display_mode"]) ? $context["category_display_mode"] : null) == "list")) {
                // line 7
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["category"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"category\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><span class=\"sf-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></label></li>
        ";
            } elseif ((            // line 8
(isset($context["category_display_mode"]) ? $context["category_display_mode"] : null) == "image")) {
                // line 9
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["category"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"category\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><img width=\"";
                echo (isset($context["cat_image_width"]) ? $context["cat_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["cat_image_height"]) ? $context["cat_image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/></label></li>
        ";
            } else {
                // line 11
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["category"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"category\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><img width=\"";
                echo (isset($context["cat_image_width"]) ? $context["cat_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["cat_image_height"]) ? $context["cat_image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"sf-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo " </span></label></li>
        ";
            }
            // line 13
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  95 => 13,  77 => 11,  59 => 9,  57 => 8,  48 => 7,  45 => 6,  41 => 5,  35 => 4,  30 => 2,  19 => 1,);
    }
}
/* <div class="box sf-category sf-{{ category_display_mode }} sf-{{ category_type }} {% if is_collapsed %} is-collapsed {% endif %}" data-id="category">*/
/*   <div class="box-heading">{{ journal2.settings.get('filter_categories_text', text_categories) }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for category in categories %}*/
/*         {% if category_display_mode == 'list' %}*/
/*           <li><label><input data-keyword="{{ category.keyword }}" type="checkbox" name="category" value="{{ category.category_id }}"><span class="sf-name">{{ category.name }}</span></label></li>*/
/*         {% elseif category_display_mode == 'image' %}*/
/*           <li><label><input data-keyword="{{ category.keyword }}" type="checkbox" name="category" value="{{ category.category_id }}"><img width="{{ cat_image_width }}" height="{{ cat_image_height }}" src="{{ category.image }}" alt="{{ category.name }}" title="{{ category.name }}"/></label></li>*/
/*         {% else %}*/
/*           <li><label><input data-keyword="{{ category.keyword }}" type="checkbox" name="category" value="{{ category.category_id }}"><img width="{{ cat_image_width }}" height="{{ cat_image_height }}" src="{{ category.image }}" alt="{{ category.name }}"/><span class="sf-name">{{ category.name }} </span></label></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
