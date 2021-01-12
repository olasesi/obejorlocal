<?php

/* journal2/template/journal2/module/super_filter_price.twig */
class __TwigTemplate_5fcb303d0db1cb9c876671bce39dfeb22b7972d215578d9f922cc45efc5ee7ed extends Twig_Template
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
        echo "<div class=\"sf-price ";
        if (((isset($context["price_slider"]) ? $context["price_slider"] : null) != "1")) {
            echo " sf-input ";
        }
        echo " box ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"price\" data-min-price=\"";
        echo (isset($context["min_price"]) ? $context["min_price"] : null);
        echo "\" data-max-price=\"";
        echo (isset($context["max_price"]) ? $context["max_price"] : null);
        echo "\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_price_text", 1 => (isset($context["text_price"]) ? $context["text_price"] : null)), "method");
        echo "</div>
  <div class=\"box-content\">
    ";
        // line 4
        if (((isset($context["price_slider"]) ? $context["price_slider"] : null) == "1")) {
            // line 5
            echo "      <section class=\"slider\" data-min-value=\"";
            echo (isset($context["min_price"]) ? $context["min_price"] : null);
            echo "\" data-max-value=\"";
            echo (isset($context["max_price"]) ? $context["max_price"] : null);
            echo "\"></section>
    ";
        } else {
            // line 7
            echo "      <span class=\"";
            if ((isset($context["is_currency_left"]) ? $context["is_currency_left"] : null)) {
                echo " currency-left ";
            } else {
                echo " currency-right ";
            }
            echo "\">
            <label for=\"filter-min-price\">";
            // line 8
            echo (((isset($context["is_currency_left"]) ? $context["is_currency_left"] : null)) ? ((isset($context["currency_left"]) ? $context["currency_left"] : null)) : ((isset($context["currency_right"]) ? $context["currency_right"] : null)));
            echo "</label>
            <input id=\"filter-min-price\" type=\"text\" class=\"min-price\" value=\"";
            // line 9
            echo (isset($context["min_price"]) ? $context["min_price"] : null);
            echo "\"/>
        </span>
      <span class=\"";
            // line 11
            if ((isset($context["is_currency_left"]) ? $context["is_currency_left"] : null)) {
                echo " currency-left ";
            } else {
                echo " currency-right ";
            }
            echo "\">
            <label for=\"filter-max-price\">";
            // line 12
            echo (((isset($context["is_currency_left"]) ? $context["is_currency_left"] : null)) ? ((isset($context["currency_left"]) ? $context["currency_left"] : null)) : ((isset($context["currency_right"]) ? $context["currency_right"] : null)));
            echo "</label>
            <input id=\"filter-max-price\" type=\"text\" class=\"max-price\" value=\"";
            // line 13
            echo (isset($context["max_price"]) ? $context["max_price"] : null);
            echo "\"/>
        </span>
      <input type=\"button\" class=\"button btn price-filter-button\" value=\"";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_price_apply_text", 1 => "Apply"), "method");
            echo "\"/>
    ";
        }
        // line 17
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  84 => 15,  79 => 13,  75 => 12,  67 => 11,  62 => 9,  58 => 8,  49 => 7,  41 => 5,  39 => 4,  34 => 2,  19 => 1,);
    }
}
/* <div class="sf-price {% if price_slider != '1' %} sf-input {% endif %} box {% if is_collapsed %} is-collapsed {% endif %}" data-id="price" data-min-price="{{ min_price }}" data-max-price="{{ max_price }}">*/
/*   <div class="box-heading">{{ journal2.settings.get('filter_price_text', text_price) }}</div>*/
/*   <div class="box-content">*/
/*     {% if price_slider == '1' %}*/
/*       <section class="slider" data-min-value="{{ min_price }}" data-max-value="{{ max_price }}"></section>*/
/*     {% else %}*/
/*       <span class="{% if is_currency_left %} currency-left {% else %} currency-right {% endif %}">*/
/*             <label for="filter-min-price">{{ is_currency_left ? currency_left : currency_right }}</label>*/
/*             <input id="filter-min-price" type="text" class="min-price" value="{{ min_price }}"/>*/
/*         </span>*/
/*       <span class="{% if is_currency_left %} currency-left {% else %} currency-right {% endif %}">*/
/*             <label for="filter-max-price">{{ is_currency_left ? currency_left : currency_right }}</label>*/
/*             <input id="filter-max-price" type="text" class="max-price" value="{{ max_price }}"/>*/
/*         </span>*/
/*       <input type="button" class="button btn price-filter-button" value="{{ journal2.settings.get('filter_price_apply_text', 'Apply') }}"/>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
