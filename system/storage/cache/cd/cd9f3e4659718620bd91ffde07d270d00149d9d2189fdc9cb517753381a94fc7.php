<?php

/* journal2/template/common/footer.twig */
class __TwigTemplate_e7cbb0afa1a4e7d674876a1dff3be9ccd5d33e05ee8c4846ae6b6f0024aa299b extends Twig_Template
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
        if ( !twig_constant("JOURNAL_INSTALLED")) {
            // line 2
            echo "  <h3>Journal Installation Error</h3>
  <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>
  <p>Please read this: <a href=\"http://docs.digital-atelier.com/opencart/journal/#/settings/install\" target=\"_blank\">here</a>.</p>
";
        }
        // line 6
        echo "</div>
";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_bottom_modules"), "method")) {
            // line 8
            echo "  <div id=\"bottom-modules\">
    ";
            // line 9
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_bottom_modules"), "method");
            echo "
  </div>
";
        }
        // line 12
        echo "<footer class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "fullwidth_footer"), "method");
        echo "\">
  <div id=\"footer\">
    ";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_footer_menu"), "method");
        echo "
  </div>
  <div class=\"bottom-footer ";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_bottom"), "method");
        echo "\">
    <div class=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_footer_classes"), "method");
        echo "\">
      ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_copyright"), "method")) {
            // line 19
            echo "        <div class=\"copyright\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_copyright"), "method");
            echo "</div>
      ";
        }
        // line 21
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_payments"), "method")) {
            // line 22
            echo "        <div class=\"payments\">
          ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_payments"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 24
                echo "            ";
                if ($this->getAttribute($context["payment"], "url", array())) {
                    // line 25
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["payment"], "url", array());
                    echo "\" ";
                    echo $this->getAttribute($context["payment"], "target", array());
                    echo "><img ";
                    echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "imgElement", array(0 => $this->getAttribute($context["payment"], "image", array()), 1 => $this->getAttribute($context["payment"], "name", array()), 2 => $this->getAttribute($context["payment"], "width", array()), 3 => $this->getAttribute($context["payment"], "height", array()))));
                    echo " /></a>
            ";
                } else {
                    // line 27
                    echo "              <img ";
                    echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "imgElement", array(0 => $this->getAttribute($context["payment"], "image", array()), 1 => $this->getAttribute($context["payment"], "name", array()), 2 => $this->getAttribute($context["payment"], "width", array()), 3 => $this->getAttribute($context["payment"], "height", array()))));
                    echo " />
            ";
                }
                // line 29
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
      ";
        }
        // line 32
        echo "    </div>
  </div>
</footer>
<div class=\"scroll-top\"></div>
";
        // line 36
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_footer_modules"), "method");
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/init.js", 1 => "footer"), "method");
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "footer"), "method");
        echo "
";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyJs", array(), "method"))) {
            // line 40
            echo "  <script type=\"text/javascript\" src=\"index.php?route=journal2/assets/js\"></script>
";
        }
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "hasClass", array(0 => "is-admin"), "method")) {
            // line 43
            echo "  <script src=\"catalog/view/theme/journal2/lib/ascii-table/ascii-table.min.js\"></script>
  <script>
    (function () {
      if (console && console.log) {
        var timers = \$.parseJSON('";
            // line 47
            echo twig_jsonencode_filter(call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2", "getTimer")));
            echo "');
        timers['Total'] = parseFloat('";
            // line 48
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2", "getElapsedTime"));
            echo "');
        var table = new AsciiTable('Journal2 Profiler');
        table.setAlignRight(1);
        \$.each(timers, function (index, value) {
          if (value < 0) {
            value = 0;
          }
          if (value < 100000) {
            table.addRow(index.replace('ControllerModuleJournal2', ''), Math.round(value * 1000) + ' ms');
          }
        });
        console.log(table.toString());
      }
    }());
  </script>
";
        }
        // line 64
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 64,  139 => 48,  135 => 47,  129 => 43,  127 => 42,  123 => 40,  121 => 39,  117 => 38,  115 => 37,  113 => 36,  107 => 32,  103 => 30,  97 => 29,  91 => 27,  81 => 25,  78 => 24,  74 => 23,  71 => 22,  68 => 21,  62 => 19,  60 => 18,  56 => 17,  52 => 16,  47 => 14,  41 => 12,  35 => 9,  32 => 8,  30 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if not constant('JOURNAL_INSTALLED') %}*/
/*   <h3>Journal Installation Error</h3>*/
/*   <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>*/
/*   <p>Please read this: <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here</a>.</p>*/
/* {% endif %}*/
/* </div>*/
/* {% if journal2.settings.get('config_bottom_modules') %}*/
/*   <div id="bottom-modules">*/
/*     {{ journal2.settings.get('config_bottom_modules') }}*/
/*   </div>*/
/* {% endif %}*/
/* <footer class="{{ journal2.settings.get('fullwidth_footer') }}">*/
/*   <div id="footer">*/
/*     {{ journal2.settings.get('config_footer_menu') }}*/
/*   </div>*/
/*   <div class="bottom-footer {{ journal2.settings.get('boxed_bottom') }}">*/
/*     <div class="{{ journal2.settings.get('config_footer_classes') }}">*/
/*       {% if journal2.settings.get('config_copyright') %}*/
/*         <div class="copyright">{{ journal2.settings.get('config_copyright') }}</div>*/
/*       {% endif %}*/
/*       {% if journal2.settings.get('config_payments') %}*/
/*         <div class="payments">*/
/*           {% for payment in journal2.settings.get('config_payments') %}*/
/*             {% if payment.url %}*/
/*               <a href="{{ payment.url }}" {{ payment.target }}><img {{ staticCall('Journal2Utils', 'imgElement', [payment.image, payment.name, payment.width, payment.height]) }} /></a>*/
/*             {% else %}*/
/*               <img {{ staticCall('Journal2Utils', 'imgElement', [payment.image, payment.name, payment.width, payment.height]) }} />*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* <div class="scroll-top"></div>*/
/* {{ journal2.settings.get('config_footer_modules') }}*/
/* {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/init.js', 'footer') -}}*/
/* {{ journal2.minifier.js('footer') }}*/
/* {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyJs() %}*/
/*   <script type="text/javascript" src="index.php?route=journal2/assets/js"></script>*/
/* {% endif %}*/
/* {% if journal2.html_classes.hasClass('is-admin') %}*/
/*   <script src="catalog/view/theme/journal2/lib/ascii-table/ascii-table.min.js"></script>*/
/*   <script>*/
/*     (function () {*/
/*       if (console && console.log) {*/
/*         var timers = $.parseJSON('{{ staticCall('Journal2', 'getTimer') | json_encode() }}');*/
/*         timers['Total'] = parseFloat('{{ staticCall('Journal2', 'getElapsedTime') }}');*/
/*         var table = new AsciiTable('Journal2 Profiler');*/
/*         table.setAlignRight(1);*/
/*         $.each(timers, function (index, value) {*/
/*           if (value < 0) {*/
/*             value = 0;*/
/*           }*/
/*           if (value < 100000) {*/
/*             table.addRow(index.replace('ControllerModuleJournal2', ''), Math.round(value * 1000) + ' ms');*/
/*           }*/
/*         });*/
/*         console.log(table.toString());*/
/*       }*/
/*     }());*/
/*   </script>*/
/* {% endif %}*/
/* </body>*/
/* </html>*/
/* */
