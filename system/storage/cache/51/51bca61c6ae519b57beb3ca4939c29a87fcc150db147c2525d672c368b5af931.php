<?php

/* customer/customer_transaction.twig */
class __TwigTemplate_ade068dcd3460f810f32bb4c38f936a9042d4ea499a0c9dc9bc02b0b03b5ac4b extends Twig_Template
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
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 7
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if ((isset($context["transactions"]) ? $context["transactions"] : null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 13
                echo "      <tr>
        <td class=\"text-left\">";
                // line 14
                echo $this->getAttribute($context["transaction"], "date_added", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 15
                echo $this->getAttribute($context["transaction"], "description", array());
                echo "</td>
        <td class=\"text-right\">";
                // line 16
                echo $this->getAttribute($context["transaction"], "amount", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      <tr>
        <td>&nbsp;</td>
        <td class=\"text-right\"><b>";
            // line 21
            echo (isset($context["text_balance"]) ? $context["text_balance"] : null);
            echo "</b></td>
        <td class=\"text-right\">";
            // line 22
            echo (isset($context["balance"]) ? $context["balance"] : null);
            echo "</td>
      </tr>
      ";
        } else {
            // line 25
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 26
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 29
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 33
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 34
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  96 => 33,  90 => 29,  84 => 26,  81 => 25,  75 => 22,  71 => 21,  67 => 19,  58 => 16,  54 => 15,  50 => 14,  47 => 13,  42 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*         <td class="text-left">{{ column_description }}</td>*/
/*         <td class="text-right">{{ column_amount }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if transactions %}*/
/*       {% for transaction in transactions %}*/
/*       <tr>*/
/*         <td class="text-left">{{ transaction.date_added }}</td>*/
/*         <td class="text-left">{{ transaction.description }}</td>*/
/*         <td class="text-right">{{ transaction.amount }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       <tr>*/
/*         <td>&nbsp;</td>*/
/*         <td class="text-right"><b>{{ text_balance }}</b></td>*/
/*         <td class="text-right">{{ balance }}</td>*/
/*       </tr>*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
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
