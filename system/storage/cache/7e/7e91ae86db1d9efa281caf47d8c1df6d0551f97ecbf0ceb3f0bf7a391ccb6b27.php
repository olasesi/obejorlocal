<?php

/* extension/report/product_viewed_info.twig */
class __TwigTemplate_e10538bfe23c71c736371ced81f1dbdebffd4bb107d1d5dc4710a90829046f9f extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <div class=\"pull-right\">
      <a href=\"";
        // line 4
        echo (isset($context["reset"]) ? $context["reset"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-refresh\"></i> ";
        echo (isset($context["button_reset"]) ? $context["button_reset"] : null);
        echo "</a>
    </div>
    <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td class=\"text-left\">";
        // line 13
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
            <td class=\"text-left\">";
        // line 14
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
            <td class=\"text-right\">";
        // line 15
        echo (isset($context["column_viewed"]) ? $context["column_viewed"] : null);
        echo "</td>
            <td class=\"text-right\">";
        // line 16
        echo (isset($context["column_percent"]) ? $context["column_percent"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
        // line 21
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 23
                echo "        <tr>
          <td class=\"text-left\">";
                // line 24
                echo $this->getAttribute($context["product"], "name", array());
                echo "</td>
          <td class=\"text-left\">";
                // line 25
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 26
                echo $this->getAttribute($context["product"], "viewed", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 27
                echo $this->getAttribute($context["product"], "percent", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        } else {
            // line 31
            echo "        <tr>
          <td class=\"text-center\" colspan=\"4\">";
            // line 32
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        </tr>
        ";
        }
        // line 35
        echo "        </tbody>
        
      </table>
    </div>
    <div class=\"row\">
      <div class=\"col-sm-6 text-left\">";
        // line 40
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
      <div class=\"col-sm-6 text-right\">";
        // line 41
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/report/product_viewed_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  111 => 40,  104 => 35,  98 => 32,  95 => 31,  92 => 30,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  63 => 22,  61 => 21,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <div class="pull-right">*/
/*       <a href="{{ reset }}" class="btn btn-danger btn-xs"><i class="fa fa-refresh"></i> {{ button_reset }}</a>*/
/*     </div>*/
/*     <h3 class="panel-title"><i class="fa fa-filter"></i> {{ heading_title }}</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     <div class="table-responsive">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_name }}</td>*/
/*             <td class="text-left">{{ column_model }}</td>*/
/*             <td class="text-right">{{ column_viewed }}</td>*/
/*             <td class="text-right">{{ column_percent }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% if products %}*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-left">{{ product.name }}</td>*/
/*           <td class="text-left">{{ product.model }}</td>*/
/*           <td class="text-right">{{ product.viewed }}</td>*/
/*           <td class="text-right">{{ product.percent }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <tr>*/
/*           <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*         */
/*       </table>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*       <div class="col-sm-6 text-right">{{ results }}</div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
