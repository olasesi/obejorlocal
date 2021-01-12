<?php

/* journal2/template/journal2/module/photo_gallery.twig */
class __TwigTemplate_4ca0c433bbabfbad67dfb9aff8dabddd9fcc4a640fa2a14be1e27866cc7ce85e extends Twig_Template
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
        echo "<div id=\"journal-gallery-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-gallery-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box journal-gallery ";
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            echo " journal-carousel ";
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                echo " has-bullets ";
            }
            echo " ";
            if (((isset($context["arrows"]) ? $context["arrows"] : null) == "top")) {
                echo " arrows-top ";
            }
            echo " ";
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
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 13
                echo "                <div class=\"gallery-thumb ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo " swiper-slide\">
                  <a href=\"";
                // line 14
                echo $this->getAttribute($context["image"], "image", array());
                echo "\" style=\"";
                echo (isset($context["image_border"]) ? $context["image_border"] : null);
                echo "\" data-thumb=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" class=\"swipebox\" title=\"";
                echo $this->getAttribute($context["image"], "name", array());
                echo "\">
                    <div class=\"item-hover\"></div>
                    <img width=\"";
                // line 16
                echo (isset($context["thumbs_width"]) ? $context["thumbs_width"] : null);
                echo "\" height=\"";
                echo (isset($context["thumbs_height"]) ? $context["thumbs_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["image"], "name", array());
                echo "\"/>
                  </a>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "          <div class=\"gallery-thumb ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo "\" ";
                if (((isset($context["thumbs_limit"]) ? $context["thumbs_limit"] : null) < $this->getAttribute($context["loop"], "index", array()))) {
                    echo " style=\"display: none\" ";
                }
                echo ">
            <a href=\"";
                // line 33
                echo $this->getAttribute($context["image"], "image", array());
                echo "\" style=\"";
                echo (isset($context["image_border"]) ? $context["image_border"] : null);
                echo "\" data-thumb=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" class=\"swipebox\" title=\"";
                echo $this->getAttribute($context["image"], "name", array());
                echo "\">
              <div class=\"item-hover\"></div>
              <img src=\"";
                // line 35
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" width=\"";
                echo (isset($context["thumbs_width"]) ? $context["thumbs_width"] : null);
                echo "\" height=\"";
                echo (isset($context["thumbs_height"]) ? $context["thumbs_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["image"], "name", array());
                echo "\"/>
            </a>
          </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      ";
        }
        // line 40
        echo "    </div>
  </div>
</div>
<script>
  ";
        // line 44
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 45
            echo "
  ";
            // line 46
            $context["grid"] = array(0 => array(0 => 0, 1 => ((            // line 47
(isset($context["is_column"]) ? $context["is_column"] : null)) ? (3) : ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "xs", array())))), 1 => array(0 => 470, 1 => ((            // line 48
(isset($context["is_column"]) ? $context["is_column"] : null)) ? (3) : ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "sm", array())))), 2 => array(0 => 760, 1 => ((            // line 49
(isset($context["is_column"]) ? $context["is_column"] : null)) ? (3) : ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "md", array())))), 3 => array(0 => 980, 1 => ((            // line 50
(isset($context["is_column"]) ? $context["is_column"] : null)) ? (3) : ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "lg", array())))), 4 => array(0 => 1100, 1 => ((            // line 51
(isset($context["is_column"]) ? $context["is_column"] : null)) ? (3) : ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "xl", array())))));
            // line 53
            echo "
  (function () {
    var grid = \$.parseJSON('";
            // line 55
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
      spaceBetween: 15,
      pagination: ";
            // line 81
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                echo " \$('#journal-gallery-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-pagination') ";
            } else {
                echo " false ";
            }
            echo ",
      paginationClickable: true,
      nextButton: ";
            // line 83
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#journal-gallery-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-next') ";
            } else {
                echo " false ";
            }
            echo ",
      prevButton: ";
            // line 84
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#journal-gallery-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-prev') ";
            } else {
                echo " false ";
            }
            echo ",
      autoplay: ";
            // line 85
            echo (((isset($context["autoplay"]) ? $context["autoplay"] : null)) ? ((isset($context["autoplay"]) ? $context["autoplay"] : null)) : (0));
            echo ",
      autoplayStopOnHover: ";
            // line 86
            if ((isset($context["pause_on_hover"]) ? $context["pause_on_hover"] : null)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
      speed: ";
            // line 87
            echo (isset($context["slide_speed"]) ? $context["slide_speed"] : null);
            echo ",
      touchEventsTarget: ";
            // line 88
            if ((isset($context["touch_drag"]) ? $context["touch_drag"] : null)) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            echo ",
      onInit: function (swiper) {
        var imgs = [
          ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 92
                echo "          {src: '";
                echo $this->getAttribute($context["image"], "image", array());
                echo "', thumb: '";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "', subHtml: '";
                echo twig_replace_filter($this->getAttribute($context["image"], "name", array()), "'", "\\'");
                echo "'},
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        ];

        \$('#journal-gallery-";
            // line 96
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " a').click(function (e) {
          e.preventDefault();

          var index = -1;
          var href = \$(this).attr('href');

          \$.map(imgs, function (img, i) {
            if (img['src'] === href) {
              index = i;
            }
          });

          \$(this).lightGallery({
            thumbnail: ";
            // line 109
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
            echo ",
            showThumbByDefault: ";
            // line 110
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_hide", 1 => "on"), "method") == "off")) ? ("true") : ("false"));
            echo ",
            thumbWidth: parseInt('";
            // line 111
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_width", 1 => "100"), "method");
            echo "', 10),
            thumbContHeight: parseInt('";
            // line 112
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_height", 1 => "100"), "method");
            echo "', 10),
            thumbMargin: parseInt('";
            // line 113
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_spacing", 1 => "7"), "method");
            echo "', 10),
            hideBarsDelay: parseInt('";
            // line 114
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_gallery_bars_after", 1 => "5000"), "method");
            echo "', 10),
            dynamic: true,
            dynamicEl: imgs,
            download: false,
            actualSize: false,
            index: index
          })
        });
      }
    };

    \$('#journal-gallery-";
            // line 125
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .swiper-container').swiper(opts);
  })();
  ";
        } else {
            // line 128
            echo "  (function () {
    var imgs = [
      ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 131
                echo "      {src: '";
                echo $this->getAttribute($context["image"], "image", array());
                echo "', thumb: '";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "', subHtml: '";
                echo twig_replace_filter($this->getAttribute($context["image"], "name", array()), "'", "\\'");
                echo "'},
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "    ];

    \$('#journal-gallery-";
            // line 135
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " a').click(function (e) {
      e.preventDefault();

      var index = \$(this).index('#journal-gallery-";
            // line 138
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " a');

      \$(this).lightGallery({
        thumbnail: ";
            // line 141
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
            echo ",
        showThumbByDefault: ";
            // line 142
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_hide", 1 => "on"), "method") == "off")) ? ("true") : ("false"));
            echo ",
        thumbWidth: parseInt('";
            // line 143
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_width", 1 => "100"), "method");
            echo "', 10),
        thumbContHeight: parseInt('";
            // line 144
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_height", 1 => "100"), "method");
            echo "', 10),
        thumbMargin: parseInt('";
            // line 145
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_thumbs_spacing", 1 => "7"), "method");
            echo "', 10),
        hideBarsDelay: parseInt('";
            // line 146
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_gallery_bars_after", 1 => "5000"), "method");
            echo "', 10),
        dynamic: true,
        dynamicEl: imgs,
        download: false,
        actualSize: false,
        index: index
      })
    });
  })();
  ";
        }
        // line 156
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/photo_gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 156,  435 => 146,  431 => 145,  427 => 144,  423 => 143,  419 => 142,  415 => 141,  409 => 138,  403 => 135,  399 => 133,  386 => 131,  382 => 130,  378 => 128,  372 => 125,  358 => 114,  354 => 113,  350 => 112,  346 => 111,  342 => 110,  338 => 109,  322 => 96,  318 => 94,  305 => 92,  301 => 91,  291 => 88,  287 => 87,  279 => 86,  275 => 85,  265 => 84,  255 => 83,  244 => 81,  215 => 55,  211 => 53,  209 => 51,  208 => 50,  207 => 49,  206 => 48,  205 => 47,  204 => 46,  201 => 45,  199 => 44,  193 => 40,  190 => 39,  166 => 35,  155 => 33,  146 => 32,  128 => 31,  125 => 30,  121 => 28,  119 => 27,  116 => 26,  111 => 23,  109 => 22,  105 => 20,  89 => 16,  78 => 14,  73 => 13,  69 => 12,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 4,  45 => 3,  19 => 1,);
    }
}
/* <div id="journal-gallery-{{ module }}" class="journal-gallery-{{ module_id }} box journal-gallery {% if carousel %} journal-carousel {% if bullets %} has-bullets {% endif %} {% if arrows == 'top' %} arrows-top {% endif %} {% endif %} {{ disable_on_classes | join(' ') }} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <div>*/
/*     {% if title %}*/
/*       <div class="box-heading">{{ title }}</div>*/
/*     {% endif %}*/
/*     <div class="box-content">*/
/*       {% if carousel %}*/
/*         <div class="swiper">*/
/*           <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*             <div class="swiper-wrapper">*/
/* */
/*               {% for image in images %}*/
/*                 <div class="gallery-thumb {{ grid_classes }} swiper-slide">*/
/*                   <a href="{{ image.image }}" style="{{ image_border }}" data-thumb="{{ image.thumb }}" class="swipebox" title="{{ image.name }}">*/
/*                     <div class="item-hover"></div>*/
/*                     <img width="{{ thumbs_width }}" height="{{ thumbs_height }}" src="{{ image.thumb }}" alt="{{ image.name }}"/>*/
/*                   </a>*/
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
/*         {% for image in images %}*/
/*           <div class="gallery-thumb {{ grid_classes }}" {% if thumbs_limit < loop.index %} style="display: none" {% endif %}>*/
/*             <a href="{{ image.image }}" style="{{ image_border }}" data-thumb="{{ image.thumb }}" class="swipebox" title="{{ image.name }}">*/
/*               <div class="item-hover"></div>*/
/*               <img src="{{ image.thumb }}" width="{{ thumbs_width }}" height="{{ thumbs_height }}" alt="{{ image.name }}"/>*/
/*             </a>*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   {% if carousel %}*/
/* */
/*   {% set grid = [*/
/*   [0, is_column ? 3 : grid.xs],*/
/*   [470, is_column ? 3 : grid.sm],*/
/*   [760, is_column ? 3 : grid.md],*/
/*   [980, is_column ? 3 : grid.lg],*/
/*   [1100, is_column ? 3 : grid.xl],*/
/*   ] %}*/
/* */
/*   (function () {*/
/*     var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*     var breakpoints = {*/
/*       470: {*/
/*         slidesPerView: grid[0][1],*/
/*         slidesPerGroup: grid[0][1]*/
/*       },*/
/*       760: {*/
/*         slidesPerView: grid[1][1],*/
/*         slidesPerGroup: grid[1][1]*/
/*       },*/
/*       980: {*/
/*         slidesPerView: grid[2][1],*/
/*         slidesPerGroup: grid[2][1]*/
/*       },*/
/*       1220: {*/
/*         slidesPerView: grid[3][1],*/
/*         slidesPerGroup: grid[3][1]*/
/*       }*/
/*     };*/
/* */
/*     var opts = {*/
/*       slidesPerView: grid[4][1],*/
/*       slidesPerGroup: grid[4][1],*/
/*       breakpoints: breakpoints,*/
/*       spaceBetween: 15,*/
/*       pagination: {% if bullets %} $('#journal-gallery-{{ module }} .swiper-pagination') {% else %} false {% endif %},*/
/*       paginationClickable: true,*/
/*       nextButton: {% if arrows != 'none' %} $('#journal-gallery-{{ module }} .swiper-button-next') {% else %} false {% endif %},*/
/*       prevButton: {% if arrows != 'none' %} $('#journal-gallery-{{ module }} .swiper-button-prev') {% else %} false {% endif %},*/
/*       autoplay: {{ autoplay ? autoplay : 0 }},*/
/*       autoplayStopOnHover: {% if pause_on_hover %} true {% else %} false {% endif %},*/
/*       speed: {{ slide_speed }},*/
/*       touchEventsTarget: {% if touch_drag %} 'container' {% else %} false {% endif %},*/
/*       onInit: function (swiper) {*/
/*         var imgs = [*/
/*           {% for image in images %}*/
/*           {src: '{{ image.image }}', thumb: '{{ image.thumb }}', subHtml: '{{ image.name | replace ("'","\\'") }}'},*/
/*           {% endfor %}*/
/*         ];*/
/* */
/*         $('#journal-gallery-{{ module }} a').click(function (e) {*/
/*           e.preventDefault();*/
/* */
/*           var index = -1;*/
/*           var href = $(this).attr('href');*/
/* */
/*           $.map(imgs, function (img, i) {*/
/*             if (img['src'] === href) {*/
/*               index = i;*/
/*             }*/
/*           });*/
/* */
/*           $(this).lightGallery({*/
/*             thumbnail: {{ journal2.settings.get('gallery_thumbs', 'on') == 'on' ? 'true' : 'false' }},*/
/*             showThumbByDefault: {{ journal2.settings.get('gallery_thumbs_hide', 'on') == 'off' ? 'true' : 'false' }},*/
/*             thumbWidth: parseInt('{{ journal2.settings.get('gallery_thumbs_width', '100') }}', 10),*/
/*             thumbContHeight: parseInt('{{ journal2.settings.get('gallery_thumbs_height', '100') }}', 10),*/
/*             thumbMargin: parseInt('{{ journal2.settings.get('gallery_thumbs_spacing', '7') }}', 10),*/
/*             hideBarsDelay: parseInt('{{ journal2.settings.get('hide_gallery_bars_after', '5000') }}', 10),*/
/*             dynamic: true,*/
/*             dynamicEl: imgs,*/
/*             download: false,*/
/*             actualSize: false,*/
/*             index: index*/
/*           })*/
/*         });*/
/*       }*/
/*     };*/
/* */
/*     $('#journal-gallery-{{ module }} .swiper-container').swiper(opts);*/
/*   })();*/
/*   {% else %}*/
/*   (function () {*/
/*     var imgs = [*/
/*       {% for image in images %}*/
/*       {src: '{{ image.image }}', thumb: '{{ image.thumb }}', subHtml: '{{ image.name | replace ("'","\\'") }}'},*/
/*       {% endfor %}*/
/*     ];*/
/* */
/*     $('#journal-gallery-{{ module }} a').click(function (e) {*/
/*       e.preventDefault();*/
/* */
/*       var index = $(this).index('#journal-gallery-{{ module }} a');*/
/* */
/*       $(this).lightGallery({*/
/*         thumbnail: {{ journal2.settings.get('gallery_thumbs', 'on') == 'on' ? 'true' : 'false' }},*/
/*         showThumbByDefault: {{ journal2.settings.get('gallery_thumbs_hide', 'on') == 'off' ? 'true' : 'false' }},*/
/*         thumbWidth: parseInt('{{ journal2.settings.get('gallery_thumbs_width', '100') }}', 10),*/
/*         thumbContHeight: parseInt('{{ journal2.settings.get('gallery_thumbs_height', '100') }}', 10),*/
/*         thumbMargin: parseInt('{{ journal2.settings.get('gallery_thumbs_spacing', '7') }}', 10),*/
/*         hideBarsDelay: parseInt('{{ journal2.settings.get('hide_gallery_bars_after', '5000') }}', 10),*/
/*         dynamic: true,*/
/*         dynamicEl: imgs,*/
/*         download: false,*/
/*         actualSize: false,*/
/*         index: index*/
/*       })*/
/*     });*/
/*   })();*/
/*   {% endif %}*/
/* </script>*/
/* */
