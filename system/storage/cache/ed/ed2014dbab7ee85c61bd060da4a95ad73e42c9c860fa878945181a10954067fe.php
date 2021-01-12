<?php

/* journal2/template/journal2/module/super_filter.twig */
class __TwigTemplate_0938c9834585f505f4c91dfdbf4c17235bcf792d3f3f09e194d8a66b07225873 extends Twig_Template
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
        echo "<div id=\"journal-super-filter-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo "\" class=\"journal-sf ";
        if ((isset($context["is_collapsible"]) ? $context["is_collapsible"] : null)) {
            echo " filter-collapse ";
        }
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo "\" data-filters-action=\"";
        echo (isset($context["filter_action_url"]) ? $context["filter_action_url"] : null);
        echo "\" data-products-action=\"";
        echo (isset($context["products_action_url"]) ? $context["products_action_url"] : null);
        echo "\" data-route=\"";
        echo (isset($context["route"]) ? $context["route"] : null);
        echo "\" data-path=\"";
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" data-full_path=\"";
        echo (isset($context["full_path"]) ? $context["full_path"] : null);
        echo "\" data-manufacturer=\"";
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\" data-search=\"";
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" data-tag=\"";
        echo (isset($context["tag"]) ? $context["tag"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["loading_text"]) ? $context["loading_text"] : null);
        echo "\" data-currency-left=\"";
        echo (isset($context["currency_left"]) ? $context["currency_left"] : null);
        echo "\" data-currency-right=\"";
        echo (isset($context["currency_right"]) ? $context["currency_right"] : null);
        echo "\" data-currency-decimal=\"";
        echo (isset($context["currency_decimal"]) ? $context["currency_decimal"] : null);
        echo "\" data-currency-thousand=\"";
        echo (isset($context["currency_thousand"]) ? $context["currency_thousand"] : null);
        echo "\" data-category_id=\"";
        echo (isset($context["category_id"]) ? $context["category_id"] : null);
        echo "\" data-sub_category=\"";
        echo (isset($context["sub_category"]) ? $context["sub_category"] : null);
        echo "\" data-st=\"E.R.\">
  ";
        // line 2
        if ((isset($context["reset"]) ? $context["reset"] : null)) {
            // line 3
            echo "    <a class=\"sf-reset hint--top sf-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_reset_display"), "method");
            echo "\" data-hint=\"";
            echo (isset($context["reset_btn_text"]) ? $context["reset_btn_text"] : null);
            echo "\"><span class=\"sf-reset-text\">";
            echo (isset($context["reset_btn_text"]) ? $context["reset_btn_text"] : null);
            echo "</span><i class=\"sf-reset-icon\"></i></a>
  ";
        }
        // line 5
        echo "  <input type=\"hidden\" class=\"sf-page\" value=\"\"/>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 7
            echo "    ";
            echo $this->getAttribute($context["filter_group"], "html", array());
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
        // line 10
        if ( !(isset($context["ajax"]) ? $context["ajax"] : null)) {
            // line 11
            echo "  <script>
    Journal.SuperFilter.init(\$('#journal-super-filter-";
            // line 12
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "'));
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  93 => 11,  91 => 10,  88 => 9,  79 => 7,  75 => 6,  72 => 5,  62 => 3,  60 => 2,  19 => 1,);
    }
}
/* <div id="journal-super-filter-{{ module_id }}" class="journal-sf {% if is_collapsible %} filter-collapse {% endif %} {{ disable_on_classes | join (' ') }}" data-filters-action="{{ filter_action_url }}" data-products-action="{{ products_action_url }}" data-route="{{ route }}" data-path="{{ path }}" data-full_path="{{ full_path }}" data-manufacturer="{{ manufacturer_id }}" data-search="{{ search }}" data-tag="{{ tag }}" data-loading-text="{{ loading_text }}" data-currency-left="{{ currency_left }}" data-currency-right="{{ currency_right }}" data-currency-decimal="{{ currency_decimal }}" data-currency-thousand="{{ currency_thousand }}" data-category_id="{{ category_id }}" data-sub_category="{{ sub_category }}" data-st="E.R.">*/
/*   {% if reset %}*/
/*     <a class="sf-reset hint--top sf-{{ journal2.settings.get('filter_reset_display') }}" data-hint="{{ reset_btn_text }}"><span class="sf-reset-text">{{ reset_btn_text }}</span><i class="sf-reset-icon"></i></a>*/
/*   {% endif %}*/
/*   <input type="hidden" class="sf-page" value=""/>*/
/*   {% for filter_group in filter_groups %}*/
/*     {{ filter_group.html }}*/
/*   {% endfor %}*/
/* </div>*/
/* {% if not ajax %}*/
/*   <script>*/
/*     Journal.SuperFilter.init($('#journal-super-filter-{{ module_id }}'));*/
/*   </script>*/
/* {% endif %}*/
/* */
