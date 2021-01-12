<?php

/* journal2/template/journal2/module/static_banners.twig */
class __TwigTemplate_870129cd54834e73449c02bc08f4b6bdb01fdf4388ea064029ecbf8f4709fa97 extends Twig_Template
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
        echo "<div id=\"static-banners-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"static-banners-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box static-banners ";
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            echo " journal-carousel ";
        }
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div>
    ";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "      <div class=\"box-heading\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</div>
    ";
        }
        // line 6
        echo "    <div class=\"box-content\">
      ";
        // line 7
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 8
            echo "        <div class=\"swiper\">
          <div class=\"swiper-container\" ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                echo " dir=\"rtl\" ";
            }
            echo ">
            <div class=\"swiper-wrapper\">
              ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 12
                echo "                <div class=\"static-banner swiper-slide\">
                  ";
                // line 13
                if ($this->getAttribute($context["section"], "link", array())) {
                    // line 14
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["section"], "link", array());
                    echo "\" ";
                    echo $this->getAttribute($context["section"], "target", array());
                    echo "> <span class=\"banner-overlay\" style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "; ";
                    if ((isset($context["bgcolor"]) ? $context["bgcolor"] : null)) {
                        echo " background-color: ";
                        echo (isset($context["bgcolor"]) ? $context["bgcolor"] : null);
                        echo " ";
                    }
                    echo "\">";
                    echo (isset($context["icon"]) ? $context["icon"] : null);
                    echo "</span><img style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["section"], "image", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["section"], "image_width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["section"], "image_height", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["section"], "image_title", array());
                    echo "\"/></a>
                  ";
                } else {
                    // line 16
                    echo "                    <img style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["section"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["section"], "image_title", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["section"], "image_width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["section"], "image_height", array());
                    echo "\"/>
                  ";
                }
                // line 18
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
          </div>
          ";
            // line 22
            if ((isset($context["arrows"]) ? $context["arrows"] : null)) {
                // line 23
                echo "            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
          ";
            }
            // line 26
            echo "        </div>
        ";
            // line 27
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                // line 28
                echo "          <div class=\"swiper-pagination\"></div>
        ";
            }
            // line 30
            echo "      ";
        } else {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 32
                echo "          <div class=\"static-banner ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo "\">
            ";
                // line 33
                if ($this->getAttribute($context["section"], "link", array())) {
                    // line 34
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["section"], "link", array());
                    echo "\" ";
                    echo $this->getAttribute($context["section"], "target", array());
                    echo "> <span class=\"banner-overlay\" style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "; ";
                    if ((isset($context["bgcolor"]) ? $context["bgcolor"] : null)) {
                        echo " background-color: ";
                        echo (isset($context["bgcolor"]) ? $context["bgcolor"] : null);
                        echo " ";
                    }
                    echo "\">";
                    echo (isset($context["icon"]) ? $context["icon"] : null);
                    echo "</span><img style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["section"], "image", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["section"], "image_width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["section"], "image_height", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["section"], "image_title", array());
                    echo "\"/></a>
            ";
                } else {
                    // line 36
                    echo "              <img style=\"";
                    echo (isset($context["image_border"]) ? $context["image_border"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["section"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["section"], "image_title", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["section"], "image_width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["section"], "image_height", array());
                    echo "\"/>
            ";
                }
                // line 38
                echo "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      ";
        }
        // line 41
        echo "    </div>
  </div>
</div>
";
        // line 44
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 45
            echo "  <script>
    (function () {
      var grid = \$.parseJSON('";
            // line 47
            echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
            echo "');

      var breakpoints = {
        470: {
          slidesPerView: grid[0][1],
          slidesPerGroup: grid[0][1]
        },
        760: {
          slidesPerView: grid[1][1],
          slidesPerGroup: grid[1][1]
        },
        980: {
          slidesPerView: grid[2][1],
          slidesPerGroup: grid[2][1]
        },
        1220: {
          slidesPerView: grid[3][1],
          slidesPerGroup: grid[3][1]
        }
      };

      var opts = {
        slidesPerView: grid[4][1],
        slidesPerGroup: grid[4][1],
        breakpoints: breakpoints,
        spaceBetween: 20,

        pagination: ";
            // line 74
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                echo " \$('#static-banners-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-pagination') ";
            } else {
                echo " false ";
            }
            echo ",
        paginationClickable: true,
        nextButton: ";
            // line 76
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#static-banners-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-next') ";
            } else {
                echo " false ";
            }
            echo ",
        prevButton: ";
            // line 77
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#static-banners-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-prev') ";
            } else {
                echo " false ";
            }
            echo ",
        autoplay: ";
            // line 78
            echo (((isset($context["autoplay"]) ? $context["autoplay"] : null)) ? ((isset($context["autoplay"]) ? $context["autoplay"] : null)) : (0));
            echo ",
        speed: ";
            // line 79
            echo (isset($context["slide_speed"]) ? $context["slide_speed"] : null);
            echo ",
        touchEventsTarget: ";
            // line 80
            if ((isset($context["touch_drag"]) ? $context["touch_drag"] : null)) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 81
            echo "      };

      \$('#static-banners-";
            // line 83
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .swiper-container').swiper(opts);
    })();
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/static_banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 83,  291 => 81,  285 => 80,  281 => 79,  277 => 78,  267 => 77,  257 => 76,  246 => 74,  216 => 47,  212 => 45,  210 => 44,  205 => 41,  202 => 40,  195 => 38,  181 => 36,  153 => 34,  151 => 33,  146 => 32,  141 => 31,  138 => 30,  134 => 28,  132 => 27,  129 => 26,  124 => 23,  122 => 22,  118 => 20,  111 => 18,  97 => 16,  69 => 14,  67 => 13,  64 => 12,  60 => 11,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  39 => 4,  37 => 3,  19 => 1,);
    }
}
/* <div id="static-banners-{{ module }}" class="static-banners-{{ module_id }} box static-banners {% if carousel %} journal-carousel {% endif %} {{ disable_on_classes | join(' ') }} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <div>*/
/*     {% if title %}*/
/*       <div class="box-heading">{{ title }}</div>*/
/*     {% endif %}*/
/*     <div class="box-content">*/
/*       {% if carousel %}*/
/*         <div class="swiper">*/
/*           <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*             <div class="swiper-wrapper">*/
/*               {% for section in sections %}*/
/*                 <div class="static-banner swiper-slide">*/
/*                   {% if section.link %}*/
/*                     <a href="{{ section.link }}" {{ section.target }}> <span class="banner-overlay" style="{{ image_border }}; {% if bgcolor %} background-color: {{ bgcolor }} {% endif %}">{{ icon }}</span><img style="{{ image_border }}" src="{{ section.image }}" width="{{ section.image_width }}" height="{{ section.image_height }}" alt="{{ section.image_title }}"/></a>*/
/*                   {% else %}*/
/*                     <img style="{{ image_border }}" src="{{ section.image }}" alt="{{ section.image_title }}" width="{{ section.image_width }}" height="{{ section.image_height }}"/>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*           {% if arrows %}*/
/*             <div class="swiper-button-next"></div>*/
/*             <div class="swiper-button-prev"></div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% if bullets %}*/
/*           <div class="swiper-pagination"></div>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         {% for section in sections %}*/
/*           <div class="static-banner {{ grid_classes }}">*/
/*             {% if section.link %}*/
/*               <a href="{{ section.link }}" {{ section.target }}> <span class="banner-overlay" style="{{ image_border }}; {% if bgcolor %} background-color: {{ bgcolor }} {% endif %}">{{ icon }}</span><img style="{{ image_border }}" src="{{ section.image }}" width="{{ section.image_width }}" height="{{ section.image_height }}" alt="{{ section.image_title }}"/></a>*/
/*             {% else %}*/
/*               <img style="{{ image_border }}" src="{{ section.image }}" alt="{{ section.image_title }}" width="{{ section.image_width }}" height="{{ section.image_height }}"/>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% if carousel %}*/
/*   <script>*/
/*     (function () {*/
/*       var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*       var breakpoints = {*/
/*         470: {*/
/*           slidesPerView: grid[0][1],*/
/*           slidesPerGroup: grid[0][1]*/
/*         },*/
/*         760: {*/
/*           slidesPerView: grid[1][1],*/
/*           slidesPerGroup: grid[1][1]*/
/*         },*/
/*         980: {*/
/*           slidesPerView: grid[2][1],*/
/*           slidesPerGroup: grid[2][1]*/
/*         },*/
/*         1220: {*/
/*           slidesPerView: grid[3][1],*/
/*           slidesPerGroup: grid[3][1]*/
/*         }*/
/*       };*/
/* */
/*       var opts = {*/
/*         slidesPerView: grid[4][1],*/
/*         slidesPerGroup: grid[4][1],*/
/*         breakpoints: breakpoints,*/
/*         spaceBetween: 20,*/
/* */
/*         pagination: {% if bullets %} $('#static-banners-{{ module }} .swiper-pagination') {% else %} false {% endif %},*/
/*         paginationClickable: true,*/
/*         nextButton: {% if arrows != 'none' %} $('#static-banners-{{ module }} .swiper-button-next') {% else %} false {% endif %},*/
/*         prevButton: {% if arrows != 'none' %} $('#static-banners-{{ module }} .swiper-button-prev') {% else %} false {% endif %},*/
/*         autoplay: {{ autoplay ? autoplay : 0 }},*/
/*         speed: {{ slide_speed }},*/
/*         touchEventsTarget: {% if touch_drag %} 'container' {% else %} false {% endif %}*/
/*       };*/
/* */
/*       $('#static-banners-{{ module }} .swiper-container').swiper(opts);*/
/*     })();*/
/*   </script>*/
/* {% endif %}*/
/* */
