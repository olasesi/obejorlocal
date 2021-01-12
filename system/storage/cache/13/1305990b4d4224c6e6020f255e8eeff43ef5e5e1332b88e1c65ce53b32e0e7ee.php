<?php

/* journal2/template/common/currency.twig */
class __TwigTemplate_61fffd739bd71fd731d5cb9d16f02f7d4e015759192cfa05b1fd5aa1d287ad8a extends Twig_Template
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
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => (((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) ? ("currency_display") : ("currency_display_mobile")), 1 => "symbol"), "method");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <div id=\"currency\" class=\"";
            // line 4
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "currency_display", 1 => "never"), "method") == "full")) ? ("full-text") : (""));
            echo "\">
      <div class=\"btn-group\">
        <button class=\"dropdown-toggle\" type=\"button\" data-hover=\"dropdown\">
          <div>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "              ";
                if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 10
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 11
                        echo "                  <span class=\"currency-symbol\">";
                        echo (($this->getAttribute($context["currency"], "symbol_left", array())) ? ($this->getAttribute($context["currency"], "symbol_left", array())) : ($this->getAttribute($context["currency"], "symbol_right", array())));
                        echo "</span>
                ";
                    } elseif ((                    // line 12
(isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 13
                        echo "                  ";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "
                ";
                    } elseif ((                    // line 14
(isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 15
                        echo "                  ";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "
                ";
                    } elseif ((                    // line 16
(isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 17
                        echo "                  ";
                        if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                            // line 18
                            echo "                    <span class=\"currency-symbol\">";
                            echo $this->getAttribute($context["currency"], "symbol_left", array());
                            echo "</span>
                    <span class=\"currency-text\">";
                            // line 19
                            echo $this->getAttribute($context["currency"], "title", array());
                            echo "</span>
                  ";
                        } else {
                            // line 21
                            echo "                    <span class=\"currency-text\">";
                            echo $this->getAttribute($context["currency"], "title", array());
                            echo "</span>
                    <span class=\"currency-symbol\">";
                            // line 22
                            echo $this->getAttribute($context["currency"], "symbol_right", array());
                            echo "</span>
                  ";
                        }
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "              ";
                }
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </div>
        </button>
        <ul class=\"dropdown-menu\">
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 31
                echo "            ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 32
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 33
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "</a></li>
              ";
                    }
                    // line 35
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 36
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</a></li>
              ";
                    }
                    // line 38
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 39
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</a></li>
              ";
                    }
                    // line 41
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 42
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo " <span class=\"currency-text\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span></a></li>
              ";
                    }
                    // line 44
                    echo "            ";
                } else {
                    // line 45
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 46
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</a></li>
              ";
                    }
                    // line 48
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 49
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</a></li>
              ";
                    }
                    // line 51
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 52
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</a></li>
              ";
                    }
                    // line 54
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 55
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\"><span class=\"currency-text\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span> ";
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</a></li>
              ";
                    }
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 62
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
    </div>
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 62,  217 => 59,  211 => 58,  208 => 57,  198 => 55,  195 => 54,  187 => 52,  184 => 51,  176 => 49,  173 => 48,  165 => 46,  162 => 45,  159 => 44,  149 => 42,  146 => 41,  138 => 39,  135 => 38,  127 => 36,  124 => 35,  116 => 33,  113 => 32,  110 => 31,  106 => 30,  101 => 27,  95 => 26,  92 => 25,  89 => 24,  84 => 22,  79 => 21,  74 => 19,  69 => 18,  66 => 17,  64 => 16,  59 => 15,  57 => 14,  52 => 13,  50 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set type = journal2.settings.get(staticCall('Journal2Utils', 'getDevice') == 'desktop' ? 'currency_display' : 'currency_display_mobile', 'symbol') %}*/
/* {% if currencies | length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*     <div id="currency" class="{{ journal2.settings.get('currency_display', 'never') == 'full' ? 'full-text' : '' }}">*/
/*       <div class="btn-group">*/
/*         <button class="dropdown-toggle" type="button" data-hover="dropdown">*/
/*           <div>*/
/*             {% for currency in currencies %}*/
/*               {% if currency.code == code %}*/
/*                 {% if type == 'symbol' %}*/
/*                   <span class="currency-symbol">{{ currency.symbol_left ? currency.symbol_left : currency.symbol_right }}</span>*/
/*                 {% elseif type == 'text' %}*/
/*                   {{ currency.title }}*/
/*                 {% elseif type == 'code' %}*/
/*                   {{ currency.code }}*/
/*                 {% elseif type == 'full' %}*/
/*                   {% if currency.symbol_left %}*/
/*                     <span class="currency-symbol">{{ currency.symbol_left }}</span>*/
/*                     <span class="currency-text">{{ currency.title }}</span>*/
/*                   {% else %}*/
/*                     <span class="currency-text">{{ currency.title }}</span>*/
/*                     <span class="currency-symbol">{{ currency.symbol_right }}</span>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*         </button>*/
/*         <ul class="dropdown-menu">*/
/*           {% for currency in currencies %}*/
/*             {% if currency.symbol_left %}*/
/*               {% if type == 'symbol' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_left }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'text' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.title }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'code' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.code }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'full' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_left }} <span class="currency-text">{{ currency.title }}</span></a></li>*/
/*               {% endif %}*/
/*             {% else %}*/
/*               {% if type == 'symbol' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_right }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'text' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.title }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'code' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.code }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'full' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();"><span class="currency-text">{{ currency.title }}</span> {{ currency.symbol_right }}</a></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <input type="hidden" name="code" value=""/>*/
/*       <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*     </div>*/
/*   </form>*/
/* {% endif %}*/
/* */
