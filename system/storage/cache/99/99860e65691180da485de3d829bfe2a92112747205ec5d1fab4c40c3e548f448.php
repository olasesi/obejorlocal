<?php

/* journal2/template/account/account.twig */
class __TwigTemplate_397a433edc660c4b211ade9dea61c54be50ccf5fa60101193a43da4a4d8d84bf extends Twig_Template
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
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"secondary-title\">";
        // line 20
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
      <div class=\"content my-account\">
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 23
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 24
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 25
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 29
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 30
            echo "        <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
        <ul class=\"list-unstyled\">
          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
      ";
        }
        // line 37
        echo "      <h2 class=\"secondary-title\">";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
      <div class=\"content my-orders\">
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 40
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
          ";
        // line 42
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 43
            echo "            <li><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
          ";
        }
        // line 45
        echo "          <li><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 46
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 47
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
        </ul>
      </div>

      <h2 class=\"secondary-title\">";
        // line 51
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 53
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 54
            echo "          <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
        ";
        } else {
            // line 56
            echo "          <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 57
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
        ";
        }
        // line 59
        echo "      </ul>
      <h2 class=\"secondary-title\">";
        // line 60
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 62
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
      </ul>
      ";
        // line 64
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 67
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 67,  238 => 64,  231 => 62,  226 => 60,  223 => 59,  216 => 57,  209 => 56,  201 => 54,  199 => 53,  194 => 51,  185 => 47,  179 => 46,  172 => 45,  164 => 43,  162 => 42,  156 => 41,  150 => 40,  143 => 37,  139 => 35,  128 => 33,  124 => 32,  118 => 30,  116 => 29,  108 => 26,  102 => 25,  96 => 24,  90 => 23,  84 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  57 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*     <div class="alert alert-success success"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2 class="secondary-title">{{ text_my_account }}</h2>*/
/*       <div class="content my-account">*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*           <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*           <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       {% if credit_cards %}*/
/*         <h2>{{ text_credit_card }}</h2>*/
/*         <ul class="list-unstyled">*/
/*           {% for credit_card in credit_cards %}*/
/*             <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/*       <h2 class="secondary-title">{{ text_my_orders }}</h2>*/
/*       <div class="content my-orders">*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*           {% if reward %}*/
/*             <li><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*           {% endif %}*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*           <li><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/* */
/*       <h2 class="secondary-title">{{ text_my_affiliate }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% if not tracking %}*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*         {% else %}*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*           <li><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <h2 class="secondary-title">{{ text_my_newsletter }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*       </ul>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
