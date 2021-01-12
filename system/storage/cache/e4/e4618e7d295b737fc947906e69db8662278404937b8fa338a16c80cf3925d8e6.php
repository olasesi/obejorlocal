<?php

/* journal2/template/journal2/module/slider_simple.twig */
class __TwigTemplate_866cdb1806d395467b99f2630366e87b5e1417e15087b7bb3bf1187e88920416 extends Twig_Template
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
        echo "<div class=\"journal-simple-slider-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " ";
        echo (isset($context["nav_on_hover"]) ? $context["nav_on_hover"] : null);
        echo " journal-simple-slider box ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo "\" style=\"";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "; max-height: ";
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "px\">
  <div id=\"journal-simple-slider-";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
    <div class=\"swiper-container\" ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
            echo " dir=\"rtl\" ";
        }
        echo ">
      <div class=\"swiper-wrapper\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "          ";
            if ($this->getAttribute($context["slide"], "link", array())) {
                // line 7
                echo "            <div class=\"item swiper-slide\"><a href=\"";
                echo $this->getAttribute($context["slide"], "link", array());
                echo "\" ";
                echo $this->getAttribute($context["slide"], "target", array());
                echo "><img width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["slide"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["slide"], "name", array());
                echo "\"/></a></div>
          ";
            } else {
                // line 9
                echo "            <div class=\"item swiper-slide\">
              <img width=\"";
                // line 10
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["slide"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["slide"], "name", array());
                echo "\"/>
            </div>
          ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </div>
    </div>
    ";
        // line 16
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            // line 17
            echo "      <div class=\"swiper-pagination\"></div>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["arrows"]) ? $context["arrows"] : null)) {
            // line 20
            echo "      <div class=\"swiper-button-next\"></div>
      <div class=\"swiper-button-prev\"></div>
    ";
        }
        // line 23
        echo "  </div>
  <script>
    (function () {
      var opts = \$.parseJSON('";
        // line 26
        echo twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : null));
        echo "');
      if (opts.pagination) {
        opts.pagination = \$('#journal-simple-slider-";
        // line 28
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .swiper-pagination');
      }
      \$('#journal-simple-slider-";
        // line 30
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .swiper-container').swiper(opts);
    })();
  </script>
</div>

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/slider_simple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  115 => 28,  110 => 26,  105 => 23,  100 => 20,  97 => 19,  93 => 17,  91 => 16,  87 => 14,  81 => 13,  69 => 10,  66 => 9,  50 => 7,  47 => 6,  43 => 5,  36 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div class="journal-simple-slider-{{ module_id }} {{ nav_on_hover }} journal-simple-slider box {{ disable_on_classes | join(' ') }}" style="{{ width }}; max-height: {{ height }}px">*/
/*   <div id="journal-simple-slider-{{ module }}">*/
/*     <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*       <div class="swiper-wrapper">*/
/*         {% for slide in slides %}*/
/*           {% if slide.link %}*/
/*             <div class="item swiper-slide"><a href="{{ slide.link }}" {{ slide.target }}><img width="{{ image_width }}" height="{{ image_height }}" src="{{ slide.image }}" alt="{{ slide.name }}"/></a></div>*/
/*           {% else %}*/
/*             <div class="item swiper-slide">*/
/*               <img width="{{ image_width }}" height="{{ image_height }}" src="{{ slide.image }}" alt="{{ slide.name }}"/>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*     {% if bullets %}*/
/*       <div class="swiper-pagination"></div>*/
/*     {% endif %}*/
/*     {% if arrows %}*/
/*       <div class="swiper-button-next"></div>*/
/*       <div class="swiper-button-prev"></div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <script>*/
/*     (function () {*/
/*       var opts = $.parseJSON('{{ js_options | json_encode() }}');*/
/*       if (opts.pagination) {*/
/*         opts.pagination = $('#journal-simple-slider-{{ module }} .swiper-pagination');*/
/*       }*/
/*       $('#journal-simple-slider-{{ module }} .swiper-container').swiper(opts);*/
/*     })();*/
/*   </script>*/
/* </div>*/
/* */
/* */
