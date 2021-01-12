<?php

/* sale/order_history.twig */
class __TwigTemplate_8bb32e5f9e221aaa66bbe6d46c6817d4fb073ac6d04c03b6690b89b98340bebe extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo (isset($context["column_notify"]) ? $context["column_notify"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "      <tr>
        <td class=\"text-left\">";
                // line 15
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 16
                echo $this->getAttribute($context["history"], "comment", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 17
                echo $this->getAttribute($context["history"], "status", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 18
                echo $this->getAttribute($context["history"], "notify", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
        } else {
            // line 22
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 23
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 26
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sale/order_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 30,  87 => 26,  81 => 23,  78 => 22,  75 => 21,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*         <td class="text-left">{{ column_comment }}</td>*/
/*         <td class="text-left">{{ column_status }}</td>*/
/*         <td class="text-left">{{ column_notify }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if histories %}*/
/*       {% for history in histories %}*/
/*       <tr>*/
/*         <td class="text-left">{{ history.date_added }}</td>*/
/*         <td class="text-left">{{ history.comment }}</td>*/
/*         <td class="text-left">{{ history.status }}</td>*/
/*         <td class="text-left">{{ history.notify }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
