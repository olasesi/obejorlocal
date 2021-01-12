<?php

/* journal2/template/journal2/module/super_filter_options.twig */
class __TwigTemplate_1d63e9042b1b603d6007ed9987dbdd95f4b74b66963a7f673de2fcd7a64ddfad extends Twig_Template
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
        echo "<div class=\"box sf-option sf-";
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "display_mode", array());
        echo " sf-option-";
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
        echo " sf-";
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array());
        echo " ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"option-";
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
        echo "\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_name", array());
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "display_mode", array()) == "list")) {
                // line 7
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["value"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"option[";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["value"], "option_value_id", array());
                echo "\"><span class=\"sf-name\">";
                echo $this->getAttribute($context["value"], "option_value_name", array());
                echo "</span></label></li>
        ";
            } elseif (($this->getAttribute(            // line 8
(isset($context["option"]) ? $context["option"] : null), "display_mode", array()) == "image")) {
                // line 9
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["value"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"option[";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["value"], "option_value_id", array());
                echo "\"><img width=\"";
                echo (isset($context["option_image_width"]) ? $context["option_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["option_image_height"]) ? $context["option_image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["value"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["value"], "option_value_name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["value"], "option_value_name", array());
                echo "\"/></label></li>
        ";
            } else {
                // line 11
                echo "          <li><label><input data-keyword=\"";
                echo $this->getAttribute($context["value"], "keyword", array());
                echo "\" type=\"checkbox\" name=\"option[";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["value"], "option_value_id", array());
                echo "\"><img width=\"";
                echo (isset($context["option_image_width"]) ? $context["option_image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["option_image_height"]) ? $context["option_image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["value"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["value"], "option_value_name", array());
                echo "\"/><span class=\"sf-name\">";
                echo $this->getAttribute($context["value"], "option_value_name", array());
                echo "</span></label></li>
        ";
            }
            // line 13
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 14,  105 => 13,  85 => 11,  65 => 9,  63 => 8,  52 => 7,  49 => 6,  45 => 5,  39 => 4,  34 => 2,  19 => 1,);
    }
}
/* <div class="box sf-option sf-{{ option.display_mode }} sf-option-{{ option.option_id }} sf-{{ option.type }} {% if is_collapsed %} is-collapsed {% endif %}" data-id="option-{{ option.option_id }}">*/
/*   <div class="box-heading">{{ option.option_name }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for value in option.values %}*/
/*         {% if option.display_mode == 'list' %}*/
/*           <li><label><input data-keyword="{{ value.keyword }}" type="checkbox" name="option[{{ option.option_id }}]" value="{{ value.option_value_id }}"><span class="sf-name">{{ value.option_value_name }}</span></label></li>*/
/*         {% elseif option.display_mode == 'image' %}*/
/*           <li><label><input data-keyword="{{ value.keyword }}" type="checkbox" name="option[{{ option.option_id }}]" value="{{ value.option_value_id }}"><img width="{{ option_image_width }}" height="{{ option_image_height }}" src="{{ value.image }}" alt="{{ value.option_value_name }}" title="{{ value.option_value_name }}"/></label></li>*/
/*         {% else %}*/
/*           <li><label><input data-keyword="{{ value.keyword }}" type="checkbox" name="option[{{ option.option_id }}]" value="{{ value.option_value_id }}"><img width="{{ option_image_width }}" height="{{ option_image_height }}" src="{{ value.image }}" alt="{{ value.option_value_name }}"/><span class="sf-name">{{ value.option_value_name }}</span></label></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
