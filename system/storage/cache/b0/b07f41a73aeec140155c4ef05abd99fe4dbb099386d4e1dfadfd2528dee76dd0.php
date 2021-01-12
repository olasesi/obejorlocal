<?php

/* journal2/template/journal2/module/carousel_manufacturer.twig */
class __TwigTemplate_14b84cdc6852c016922803b234f4c2944249c28fbc9f75ab60b4ecbc22a0779e extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"carousel-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box journal-carousel carousel-brand ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["show_title_class"]) ? $context["show_title_class"] : null);
        echo " ";
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " bullets-on ";
        }
        echo " ";
        if (((isset($context["arrows"]) ? $context["arrows"] : null) == "top")) {
            echo " arrows-top ";
        }
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div>
    <div class=\"htabs box-heading ";
        // line 3
        echo (isset($context["single_class"]) ? $context["single_class"] : null);
        echo "\" ";
        if ( !(isset($context["show_title"]) ? $context["show_title"] : null)) {
            echo " style=\"display: none\" ";
        }
        echo ">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 5
            echo "        ";
            if ($this->getAttribute($context["section"], "is_link", array())) {
                // line 6
                echo "          <a href=\"";
                echo $this->getAttribute($context["section"], "url", array());
                echo "\" ";
                echo $this->getAttribute($context["section"], "target", array());
                echo ">";
                echo $this->getAttribute($context["section"], "section_name", array());
                echo "</a>
        ";
            } elseif ($this->getAttribute(            // line 7
$context["section"], "items", array())) {
                // line 8
                echo "          <a href=\"#carousel-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "-";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"atab\">";
                echo $this->getAttribute($context["section"], "section_name", array());
                echo "</a>
        ";
            }
            // line 10
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 13
            echo "      ";
            if ($this->getAttribute($context["section"], "items", array())) {
                // line 14
                echo "        <div id=\"carousel-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "-";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"tab-content box-content\">
          <div class=\"swiper\">
            <div class=\"swiper-container\" ";
                // line 16
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
              <div class=\"swiper-wrapper\">
                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 19
                    echo "                  <div class=\"product-grid-item isotope-element swiper-slide ";
                    echo twig_join_filter($this->getAttribute($context["item"], "section_class", array()), " ");
                    echo " ";
                    echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                    echo "\">
                    <div class=\"product-wrapper\" data-respond=\"start: 150px; end: 300px; interval: 20px;\" style=\"";
                    // line 20
                    echo (isset($context["image_bgcolor"]) ? $context["image_bgcolor"] : null);
                    echo "\">
                      ";
                    // line 21
                    if ($this->getAttribute($context["item"], "thumb", array())) {
                        // line 22
                        echo "                        <div class=\"image\">
                          <a href=\"";
                        // line 23
                        echo $this->getAttribute($context["item"], "href", array());
                        echo "\" style=\"";
                        echo (isset($context["image_border_css"]) ? $context["image_border_css"] : null);
                        echo "\">
                            <img class=\"first-image\" width=\"";
                        // line 24
                        echo (isset($context["image_width"]) ? $context["image_width"] : null);
                        echo "\" height=\"";
                        echo (isset($context["image_height"]) ? $context["image_height"] : null);
                        echo "\" src=\"";
                        echo $this->getAttribute($context["item"], "thumb", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\"/>
                          </a>
                        </div>
                      ";
                    }
                    // line 28
                    echo "                      ";
                    if ((isset($context["brand_name"]) ? $context["brand_name"] : null)) {
                        // line 29
                        echo "                        <div class=\"product-details\">
                          <div class=\"name\"><a href=\"";
                        // line 30
                        echo $this->getAttribute($context["item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "</a></div>
                        </div>
                      ";
                    }
                    // line 33
                    echo "                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "              </div>
            </div>
            ";
                // line 38
                if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                    // line 39
                    echo "              <div class=\"swiper-button-next\"></div>
              <div class=\"swiper-button-prev\"></div>
            ";
                }
                // line 42
                echo "          </div>
          ";
                // line 43
                if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                    // line 44
                    echo "            <div class=\"swiper-pagination\"></div>
          ";
                }
                // line 46
                echo "        </div>
      ";
            }
            // line 48
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    <script>
      (function () {
        \$('#carousel-";
        // line 52
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab').tabs();

        var grid = \$.parseJSON('";
        // line 54
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

        var current = null;

        \$('#carousel-";
        // line 77
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab').click(function () {
          if (this === current) {
            return;
          }

          current = this;

          var opts = {
            slidesPerView: grid[4][1],
            slidesPerGroup: grid[4][1],
            breakpoints: breakpoints,
            spaceBetween: parseInt('";
        // line 88
        echo (isset($context["spacing"]) ? $context["spacing"] : null);
        echo "', 10),
            pagination: ";
        // line 89
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " \$(\$(this).attr('href')).find('.swiper-pagination') ";
        } else {
            echo " false ";
        }
        echo ",
            paginationClickable: true,
            nextButton: ";
        // line 91
        if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
            echo " \$(\$(this).attr('href')).find('.swiper-button-next') ";
        } else {
            echo " false ";
        }
        echo ",
            prevButton: ";
        // line 92
        if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
            echo " \$(\$(this).attr('href')).find('.swiper-button-prev') ";
        } else {
            echo " false ";
        }
        echo ",
            autoplay: ";
        // line 93
        echo (((isset($context["autoplay"]) ? $context["autoplay"] : null)) ? ((isset($context["autoplay"]) ? $context["autoplay"] : null)) : (0));
        echo ",
            autoplayStopOnHover: ";
        // line 94
        if ((isset($context["pause_on_hover"]) ? $context["pause_on_hover"] : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
            speed: ";
        // line 95
        echo (isset($context["slide_speed"]) ? $context["slide_speed"] : null);
        echo ",
            touchEventsTarget: ";
        // line 96
        if ((isset($context["touch_drag"]) ? $context["touch_drag"] : null)) {
            echo " 'container' ";
        } else {
            echo " false ";
        }
        echo ",
            preventClicks: false,
            preventClicksPropagation: false
          };

          \$(\$(this).attr('href') + ' .swiper-container').swiper(opts);

          ";
        // line 103
        if ((isset($context["brand_name"]) ? $context["brand_name"] : null)) {
            // line 104
            echo "          if (!Journal.isFlexboxSupported) {
            Journal.equalHeight(\$('#carousel-";
            // line 105
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .product-grid-item'), '.name');
          }
          ";
        }
        // line 108
        echo "        });

        \$('#carousel-";
        // line 110
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab[href=\"#carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "-";
        echo (isset($context["default_section"]) ? $context["default_section"] : null);
        echo "\"]').click();
      })();
    </script>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/carousel_manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 110,  365 => 108,  359 => 105,  356 => 104,  354 => 103,  340 => 96,  336 => 95,  328 => 94,  324 => 93,  316 => 92,  308 => 91,  299 => 89,  295 => 88,  281 => 77,  255 => 54,  250 => 52,  245 => 49,  231 => 48,  227 => 46,  223 => 44,  221 => 43,  218 => 42,  213 => 39,  211 => 38,  207 => 36,  199 => 33,  191 => 30,  188 => 29,  185 => 28,  170 => 24,  164 => 23,  161 => 22,  159 => 21,  155 => 20,  148 => 19,  144 => 18,  137 => 16,  129 => 14,  126 => 13,  109 => 12,  106 => 11,  92 => 10,  82 => 8,  80 => 7,  71 => 6,  68 => 5,  51 => 4,  43 => 3,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="carousel-{{ module_id }} box journal-carousel carousel-brand {{ disable_on_classes | join(' ') }} {{ show_title_class }} {% if bullets %} bullets-on {% endif %} {% if arrows == 'top' %} arrows-top {% endif %} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <div>*/
/*     <div class="htabs box-heading {{ single_class }}" {% if not show_title %} style="display: none" {% endif %}>*/
/*       {% for section in sections %}*/
/*         {% if section.is_link %}*/
/*           <a href="{{ section.url }}" {{ section.target }}>{{ section.section_name }}</a>*/
/*         {% elseif section.items %}*/
/*           <a href="#carousel-{{ module }}-{{ loop.index - 1 }}" class="atab">{{ section.section_name }}</a>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*     {% for section in sections %}*/
/*       {% if section.items %}*/
/*         <div id="carousel-{{ module }}-{{ loop.index - 1 }}" class="tab-content box-content">*/
/*           <div class="swiper">*/
/*             <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*               <div class="swiper-wrapper">*/
/*                 {% for item in section.items %}*/
/*                   <div class="product-grid-item isotope-element swiper-slide {{ item.section_class | join (' ') }} {{ grid_classes }}">*/
/*                     <div class="product-wrapper" data-respond="start: 150px; end: 300px; interval: 20px;" style="{{ image_bgcolor }}">*/
/*                       {% if item.thumb %}*/
/*                         <div class="image">*/
/*                           <a href="{{ item.href }}" style="{{ image_border_css }}">*/
/*                             <img class="first-image" width="{{ image_width }}" height="{{ image_height }}" src="{{ item.thumb }}" title="{{ item.name }}" alt="{{ item.name }}"/>*/
/*                           </a>*/
/*                         </div>*/
/*                       {% endif %}*/
/*                       {% if brand_name %}*/
/*                         <div class="product-details">*/
/*                           <div class="name"><a href="{{ item.href }}">{{ item.name }}</a></div>*/
/*                         </div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             {% if arrows != 'none' %}*/
/*               <div class="swiper-button-next"></div>*/
/*               <div class="swiper-button-prev"></div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if bullets %}*/
/*             <div class="swiper-pagination"></div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script>*/
/*       (function () {*/
/*         $('#carousel-{{ module }} .htabs a.atab').tabs();*/
/* */
/*         var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*         var breakpoints = {*/
/*           470: {*/
/*             slidesPerView: grid[0][1],*/
/*             slidesPerGroup: grid[0][1]*/
/*           },*/
/*           760: {*/
/*             slidesPerView: grid[1][1],*/
/*             slidesPerGroup: grid[1][1]*/
/*           },*/
/*           980: {*/
/*             slidesPerView: grid[2][1],*/
/*             slidesPerGroup: grid[2][1]*/
/*           },*/
/*           1220: {*/
/*             slidesPerView: grid[3][1],*/
/*             slidesPerGroup: grid[3][1]*/
/*           }*/
/*         };*/
/* */
/*         var current = null;*/
/* */
/*         $('#carousel-{{ module }} .htabs a.atab').click(function () {*/
/*           if (this === current) {*/
/*             return;*/
/*           }*/
/* */
/*           current = this;*/
/* */
/*           var opts = {*/
/*             slidesPerView: grid[4][1],*/
/*             slidesPerGroup: grid[4][1],*/
/*             breakpoints: breakpoints,*/
/*             spaceBetween: parseInt('{{ spacing }}', 10),*/
/*             pagination: {% if bullets %} $($(this).attr('href')).find('.swiper-pagination') {% else %} false {% endif %},*/
/*             paginationClickable: true,*/
/*             nextButton: {% if arrows != 'none' %} $($(this).attr('href')).find('.swiper-button-next') {% else %} false {% endif %},*/
/*             prevButton: {% if arrows != 'none' %} $($(this).attr('href')).find('.swiper-button-prev') {% else %} false {% endif %},*/
/*             autoplay: {{ autoplay ? autoplay : 0 }},*/
/*             autoplayStopOnHover: {% if pause_on_hover %} true {% else %} false {% endif %},*/
/*             speed: {{ slide_speed }},*/
/*             touchEventsTarget: {% if touch_drag %} 'container' {% else %} false {% endif %},*/
/*             preventClicks: false,*/
/*             preventClicksPropagation: false*/
/*           };*/
/* */
/*           $($(this).attr('href') + ' .swiper-container').swiper(opts);*/
/* */
/*           {% if brand_name %}*/
/*           if (!Journal.isFlexboxSupported) {*/
/*             Journal.equalHeight($('#carousel-{{ module }} .product-grid-item'), '.name');*/
/*           }*/
/*           {% endif %}*/
/*         });*/
/* */
/*         $('#carousel-{{ module }} .htabs a.atab[href="#carousel-{{ module }}-{{ default_section }}"]').click();*/
/*       })();*/
/*     </script>*/
/*   </div>*/
/* </div>*/
/* */
