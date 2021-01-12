<?php

/* customer/customer_history.twig */
class __TwigTemplate_476f7df711f73771154ef28c296f4aa778c89d9aedf80157842b24fd040395da extends Twig_Template
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
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 12
                echo "      <tr>
        <td class=\"text-left\">";
                // line 13
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 14
                echo $this->getAttribute($context["history"], "comment", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      ";
        } else {
            // line 18
            echo "      <tr>
        <td class=\"text-center\" colspan=\"2\">";
            // line 19
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 22
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 26
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 27
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  77 => 26,  71 => 22,  65 => 19,  62 => 18,  59 => 17,  50 => 14,  46 => 13,  43 => 12,  38 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*         <td class="text-left">{{ column_comment }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if histories %}*/
/*       {% for history in histories %}*/
/*       <tr>*/
/*         <td class="text-left">{{ history.date_added }}</td>*/
/*         <td class="text-left">{{ history.comment }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="2">{{ text_no_results }}</td>*/
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
