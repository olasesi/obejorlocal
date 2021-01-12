<?php

/* journal2/template/journal2/headers/default.twig */
class __TwigTemplate_d9983d9508b99129e30bff18f38b5ac91b75527853cb8203a2766082569a0801 extends Twig_Template
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
        echo "<header class=\"journal-header-default\">
  <div class=\"header\">
    <div class=\"journal-top-header j-min\"></div>
    <div id=\"header\" class=\"journal-header\">
      <div class=\"journal-logo xs-100 sm-100 md-33 lg-25 xl-25\">
        ";
        // line 6
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 7
            echo "          <div id=\"logo\">
            <a href=\"";
            // line 8
            echo twig_replace_filter((isset($context["home"]) ? $context["home"] : null), "index.php?route=common/home", "");
            echo "\">
              ";
            // line 9
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLogo", array(0 => (isset($context["config"]) ? $context["config"] : null))));
            echo "
            </a>
          </div>
        ";
        }
        // line 13
        echo "      </div>
      <div class=\"header-assets xs-100 sm-100 md-66 lg-75 xl-75\">
        <div class=\"journal-links j-min xs-100 sm-100 md-100 lg-66 xl-66\">
          <div class=\"links j-min\">
            <ul class=\"top-menu\">
              ";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_primary_menu"), "method");
        echo "
            </ul>
          </div>
        </div>
        <div class=\"journal-cart j-min xs-100 sm-50 md-50 lg-33 xl-33\">
          ";
        // line 23
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
        </div>
        <div class=\"journal-login j-min xs-100 sm-100 md-100 lg-66 xl-66\">
          ";
        // line 26
        if ((isset($context["language"]) ? $context["language"] : null)) {
            // line 27
            echo "            <div class=\"journal-language\">
              ";
            // line 28
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
            </div>
          ";
        }
        // line 31
        echo "          ";
        if ((isset($context["currency"]) ? $context["currency"] : null)) {
            // line 32
            echo "            <div class=\"journal-currency\">
              ";
            // line 33
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
            </div>
          ";
        }
        // line 36
        echo "          <div class=\"journal-secondary\">
            <ul class=\"top-menu\">
              ";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_secondary_menu"), "method");
        echo "
            </ul>
          </div>
        </div>
        <div class=\"journal-search j-min xs-100 sm-50 md-50 lg-33 xl-33\">
          ";
        // line 43
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>
      </div>
      <div class=\"journal-menu j-min xs-100 sm-100 md-100 lg-75 xl-75\">
        ";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_mega_menu"), "method");
        echo "
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/headers/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  98 => 43,  90 => 38,  86 => 36,  80 => 33,  77 => 32,  74 => 31,  68 => 28,  65 => 27,  63 => 26,  57 => 23,  49 => 18,  42 => 13,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <header class="journal-header-default">*/
/*   <div class="header">*/
/*     <div class="journal-top-header j-min"></div>*/
/*     <div id="header" class="journal-header">*/
/*       <div class="journal-logo xs-100 sm-100 md-33 lg-25 xl-25">*/
/*         {% if logo %}*/
/*           <div id="logo">*/
/*             <a href="{{ home | replace('index.php?route=common/home', '') }}">*/
/*               {{ staticCall('Journal2Utils', 'getLogo', [config]) }}*/
/*             </a>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="header-assets xs-100 sm-100 md-66 lg-75 xl-75">*/
/*         <div class="journal-links j-min xs-100 sm-100 md-100 lg-66 xl-66">*/
/*           <div class="links j-min">*/
/*             <ul class="top-menu">*/
/*               {{ journal2.settings.get('config_primary_menu') }}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         <div class="journal-cart j-min xs-100 sm-50 md-50 lg-33 xl-33">*/
/*           {{ cart }}*/
/*         </div>*/
/*         <div class="journal-login j-min xs-100 sm-100 md-100 lg-66 xl-66">*/
/*           {% if language %}*/
/*             <div class="journal-language">*/
/*               {{ language }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if currency %}*/
/*             <div class="journal-currency">*/
/*               {{ currency }}*/
/*             </div>*/
/*           {% endif %}*/
/*           <div class="journal-secondary">*/
/*             <ul class="top-menu">*/
/*               {{ journal2.settings.get('config_secondary_menu') }}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         <div class="journal-search j-min xs-100 sm-50 md-50 lg-33 xl-33">*/
/*           {{ search }}*/
/*         </div>*/
/*       </div>*/
/*       <div class="journal-menu j-min xs-100 sm-100 md-100 lg-75 xl-75">*/
/*         {{ journal2.settings.get('config_mega_menu') }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
