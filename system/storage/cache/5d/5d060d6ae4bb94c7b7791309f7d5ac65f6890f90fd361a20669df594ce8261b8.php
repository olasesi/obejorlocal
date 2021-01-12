<?php

/* customer/customer_reward.twig */
class __TwigTemplate_c8ddd8dbf33de115ec0ef24e468a927d628aa52d317d22d8ab474348a7e6a2b0 extends Twig_Template
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
        echo (isset($context["column_points"]) ? $context["column_points"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if ((isset($context["rewards"]) ? $context["rewards"] : null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rewards"]) ? $context["rewards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 13
                echo "      <tr>
        <td class=\"text-left\">";
                // line 14
                echo $this->getAttribute($context["reward"], "date_added", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 15
                echo $this->getAttribute($context["reward"], "description", array());
                echo "</td>
        <td class=\"text-right\">";
                // line 16
                echo $this->getAttribute($context["reward"], "points", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      <tr>
        <td></td>
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
        return "customer/customer_reward.twig";
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
/*         <td class="text-right">{{ column_points }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if rewards %}*/
/*       {% for reward in rewards %}*/
/*       <tr>*/
/*         <td class="text-left">{{ reward.date_added }}</td>*/
/*         <td class="text-left">{{ reward.description }}</td>*/
/*         <td class="text-right">{{ reward.points }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       <tr>*/
/*         <td></td>*/
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
