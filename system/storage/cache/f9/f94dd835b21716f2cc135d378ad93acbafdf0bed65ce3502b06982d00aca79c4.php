<?php

/* customer/customer_ip.twig */
class __TwigTemplate_14ebb24f22b87af987ee063b1f016173dc7d1e9b7d6e055428bb0dfcfb2ff0d3 extends Twig_Template
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
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 6
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if ((isset($context["ips"]) ? $context["ips"] : null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ips"]) ? $context["ips"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 13
                echo "      <tr>
        <td class=\"text-left\"><a href=\"http://www.geoiptool.com/en/?IP=";
                // line 14
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "</a></td>
        <td class=\"text-right\"><a href=\"";
                // line 15
                echo $this->getAttribute($context["ip"], "filter_ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "total", array());
                echo "</a></td>
        <td class=\"text-left\">";
                // line 16
                echo $this->getAttribute($context["ip"], "date_added", array());
                echo "</td>      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      ";
        } else {
            // line 19
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 20
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 23
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 27
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 28
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  88 => 27,  82 => 23,  76 => 20,  73 => 19,  70 => 18,  62 => 16,  56 => 15,  50 => 14,  47 => 13,  42 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_ip }}</td>*/
/*         <td class="text-right">{{ column_total }}</td>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if ips %}*/
/*       {% for ip in ips %}*/
/*       <tr>*/
/*         <td class="text-left"><a href="http://www.geoiptool.com/en/?IP={{ ip.ip }}" target="_blank">{{ ip.ip }}</a></td>*/
/*         <td class="text-right"><a href="{{ ip.filter_ip }}" target="_blank">{{ ip.total }}</a></td>*/
/*         <td class="text-left">{{ ip.date_added }}</td>      </tr>*/
/*       {% endfor %}*/
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
