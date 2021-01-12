<?php

/* journal2/template/journal2/module/slider_advanced.twig */
class __TwigTemplate_96eb470deacc20d9630b1922daa0068a09814fa91877a06040c3dfb63e93af34 extends Twig_Template
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
        echo "<div class=\"journal-slider-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " tp-banner-container box ";
        if ($this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "hideThumbs", array())) {
            echo " nav-on-hover ";
        }
        echo " ";
        echo (isset($context["slider_class"]) ? $context["slider_class"] : null);
        echo " ";
        if (($this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "thumbAmount", array()) == "")) {
            echo " full-thumbs ";
        }
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        if (($this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "navigationType", array()) == "none")) {
            echo " hide-navigation ";
        }
        echo "\" style=\"";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "; height: ";
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "px;\">
  <div class=\"tp-banner\" id=\"journal-slider-";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" style=\"display: none; background-image: url('";
        echo $this->getAttribute($this->getAttribute((isset($context["slides"]) ? $context["slides"] : null), 0, array()), "image", array());
        echo "'); background-size: cover; background-position: center center;\">
    <ul>
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "        <li ";
            echo $this->getAttribute($context["slide"], "data", array());
            echo ">
          ";
            // line 6
            if ((isset($context["preload_images"]) ? $context["preload_images"] : null)) {
                // line 7
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-lazyload=\"";
                echo $this->getAttribute($context["slide"], "image", array());
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "startwidth", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "startheight", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["slide"], "name", array());
                echo "\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo $this->getAttribute($context["slide"], "image", array());
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "startwidth", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["js_options"]) ? $context["js_options"] : null), "startheight", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["slide"], "name", array());
                echo "\"/>
          ";
            }
            // line 11
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slide"], "captions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
                // line 12
                echo "            ";
                if ($this->getAttribute($context["caption"], "link", array())) {
                    // line 13
                    echo "              <a id=\"jcaption-";
                    echo $this->getAttribute($context["caption"], "id", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["caption"], "link", array());
                    echo "\" ";
                    echo $this->getAttribute($context["caption"], "target", array());
                    echo " class=\"tp-caption ";
                    echo $this->getAttribute($context["caption"], "classes", array());
                    echo "\" style=\"";
                    echo $this->getAttribute($context["caption"], "css", array());
                    echo "\" ";
                    echo $this->getAttribute($context["caption"], "data", array());
                    echo ">
                ";
                    // line 14
                    echo $this->getAttribute($context["caption"], "content", array());
                    echo "
              </a>
            ";
                } else {
                    // line 17
                    echo "              <div id=\"jcaption-";
                    echo $this->getAttribute($context["caption"], "id", array());
                    echo "\" class=\"tp-caption ";
                    echo $this->getAttribute($context["caption"], "classes", array());
                    echo "\" style=\"";
                    echo $this->getAttribute($context["caption"], "css", array());
                    echo "\" ";
                    echo $this->getAttribute($context["caption"], "data", array());
                    echo ">
                ";
                    // line 18
                    echo $this->getAttribute($context["caption"], "content", array());
                    echo "
              </div>
            ";
                }
                // line 21
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
    ";
        // line 25
        if (((isset($context["timer"]) ? $context["timer"] : null) == "top")) {
            // line 26
            echo "      <div class=\"tp-bannertimer\"></div>
    ";
        } elseif ((        // line 27
(isset($context["timer"]) ? $context["timer"] : null) == "bottom")) {
            // line 28
            echo "      <div class=\"tp-bannertimer tp-bottom\"></div>
    ";
        }
        // line 30
        echo "  </div>
</div>
";
        // line 32
        if ((isset($context["css"]) ? $context["css"] : null)) {
            // line 33
            echo "  <style>";
            echo twig_join_filter((isset($context["css"]) ? $context["css"] : null), " ");
            echo "</style>
";
        }
        // line 35
        echo "<script>
  (function () {
    \$('<style>";
        // line 37
        echo twig_join_filter((isset($context["global_style"]) ? $context["global_style"] : null), " ");
        echo "</style>').appendTo(\$('head'));

    var opts = \$.parseJSON('";
        // line 39
        echo twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : null));
        echo "');
    opts.hideThumbs = 0;
    \$('#journal-slider-";
        // line 41
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').show().revolution(opts);
    ";
        // line 42
        if ((((isset($context["timer"]) ? $context["timer"] : null) != "top") && ((isset($context["timer"]) ? $context["timer"] : null) != "bottom"))) {
            // line 43
            echo "    \$('#journal-slider-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .tp-bannertimer').hide();
    ";
        }
        // line 45
        echo "    setTimeout(function () {
      \$('#journal-slider-";
        // line 46
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').css('background-image', 'none');
    }, 2500);
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/slider_advanced.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 46,  199 => 45,  193 => 43,  191 => 42,  187 => 41,  182 => 39,  177 => 37,  173 => 35,  167 => 33,  165 => 32,  161 => 30,  157 => 28,  155 => 27,  152 => 26,  150 => 25,  147 => 24,  140 => 22,  134 => 21,  128 => 18,  117 => 17,  111 => 14,  96 => 13,  93 => 12,  88 => 11,  76 => 9,  62 => 7,  60 => 6,  55 => 5,  51 => 4,  44 => 2,  19 => 1,);
    }
}
/* <div class="journal-slider-{{ module_id }} tp-banner-container box {% if js_options.hideThumbs %} nav-on-hover {% endif %} {{ slider_class }} {% if js_options.thumbAmount == '' %} full-thumbs {% endif %} {{ disable_on_classes | join(' ') }} {% if js_options.navigationType == 'none' %} hide-navigation {% endif %}" style="{{ width }}; height: {{ height }}px;">*/
/*   <div class="tp-banner" id="journal-slider-{{ module }}" style="display: none; background-image: url('{{ slides.0.image }}'); background-size: cover; background-position: center center;">*/
/*     <ul>*/
/*       {% for slide in slides %}*/
/*         <li {{ slide.data }}>*/
/*           {% if preload_images %}*/
/*             <img src="{{ dummy_image }}" data-lazyload="{{ slide.image }}" width="{{ js_options.startwidth }}" height="{{ js_options.startheight }}" alt="{{ slide.name }}"/>*/
/*           {% else %}*/
/*             <img src="{{ slide.image }}" width="{{ js_options.startwidth }}" height="{{ js_options.startheight }}" alt="{{ slide.name }}"/>*/
/*           {% endif %}*/
/*           {% for caption in slide.captions %}*/
/*             {% if caption.link %}*/
/*               <a id="jcaption-{{ caption.id }}" href="{{ caption.link }}" {{ caption.target }} class="tp-caption {{ caption.classes }}" style="{{ caption.css }}" {{ caption.data }}>*/
/*                 {{ caption.content }}*/
/*               </a>*/
/*             {% else %}*/
/*               <div id="jcaption-{{ caption.id }}" class="tp-caption {{ caption.classes }}" style="{{ caption.css }}" {{ caption.data }}>*/
/*                 {{ caption.content }}*/
/*               </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     {% if timer == 'top' %}*/
/*       <div class="tp-bannertimer"></div>*/
/*     {% elseif timer == 'bottom' %}*/
/*       <div class="tp-bannertimer tp-bottom"></div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* {% if css %}*/
/*   <style>{{ css | join (' ') }}</style>*/
/* {% endif %}*/
/* <script>*/
/*   (function () {*/
/*     $('<style>{{ global_style | join (' ') }}</style>').appendTo($('head'));*/
/* */
/*     var opts = $.parseJSON('{{ js_options | json_encode }}');*/
/*     opts.hideThumbs = 0;*/
/*     $('#journal-slider-{{ module }}').show().revolution(opts);*/
/*     {% if timer != 'top' and timer != 'bottom' %}*/
/*     $('#journal-slider-{{ module }} .tp-bannertimer').hide();*/
/*     {% endif %}*/
/*     setTimeout(function () {*/
/*       $('#journal-slider-{{ module }}').css('background-image', 'none');*/
/*     }, 2500);*/
/*   })();*/
/* </script>*/
/* */
