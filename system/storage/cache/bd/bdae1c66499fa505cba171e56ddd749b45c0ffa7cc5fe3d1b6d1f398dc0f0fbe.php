<?php

/* journal2/template/account/order_list.twig */
class __TwigTemplate_2a0aaa4e812ba9923413b2a2f10a5974998d0804755035f51a59f664789402f0 extends Twig_Template
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
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " order-list\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 19
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover list\">
            <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 25
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 27
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 28
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td></td>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 34
                echo "              <tr>
                <td class=\"text-right\">#";
                // line 35
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 36
                echo $this->getAttribute($context["order"], "name", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 37
                echo $this->getAttribute($context["order"], "products", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 38
                echo $this->getAttribute($context["order"], "status", array());
                echo "</td>
                <td class=\"text-right\">";
                // line 39
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 40
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
                <td class=\"text-right\"><a href=\"";
                // line 41
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info btn-primary\"><i class=\"fa fa-eye\"></i></a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 48
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 49
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        } else {
            // line 52
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 54
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 55
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 57
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 60
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  189 => 57,  182 => 55,  179 => 54,  173 => 52,  167 => 49,  163 => 48,  157 => 44,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  119 => 34,  115 => 33,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  81 => 19,  79 => 18,  75 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} order-list">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {% if orders %}*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered table-hover list">*/
/*             <thead>*/
/*             <tr>*/
/*               <td class="text-right">{{ column_order_id }}</td>*/
/*               <td class="text-left">{{ column_customer }}</td>*/
/*               <td class="text-right">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_status }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for order in orders %}*/
/*               <tr>*/
/*                 <td class="text-right">#{{ order.order_id }}</td>*/
/*                 <td class="text-left">{{ order.name }}</td>*/
/*                 <td class="text-right">{{ order.products }}</td>*/
/*                 <td class="text-left">{{ order.status }}</td>*/
/*                 <td class="text-right">{{ order.total }}</td>*/
/*                 <td class="text-left">{{ order.date_added }}</td>*/
/*                 <td class="text-right"><a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info btn-primary"><i class="fa fa-eye"></i></a></td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
