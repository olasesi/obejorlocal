<?php

/* journal2/template/information/sitemap.twig */
class __TwigTemplate_bf6c2d7ee2df02bea6d0ecb8ab7e36d494fbd63565ea1ada92f7f2d40cc32736 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row sitemap-info\">
        <div class=\"col-sm-6 left\">
          <ul>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 23
            echo "              <li><a href=\"";
            echo $this->getAttribute($context["category_1"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category_1"], "name", array());
            echo "</a>
                ";
            // line 24
            if ($this->getAttribute($context["category_1"], "children", array())) {
                // line 25
                echo "                  <ul>
                    ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 27
                    echo "                      <li><a href=\"";
                    echo $this->getAttribute($context["category_2"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</a>
                        ";
                    // line 28
                    if ($this->getAttribute($context["category_2"], "children", array())) {
                        // line 29
                        echo "                          <ul>
                            ";
                        // line 30
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 31
                            echo "                              <li><a href=\"";
                            echo $this->getAttribute($context["category_3"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["category_3"], "name", array());
                            echo "</a></li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        echo "                          </ul>
                        ";
                    }
                    // line 35
                    echo "                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                  </ul>
                ";
            }
            // line 39
            echo "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          </ul>
        </div>
        <div class=\"col-sm-6 right\">
          <ul>
            <li><a href=\"";
        // line 45
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 46
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 48
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 49
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 50
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 51
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 52
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 55
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 56
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 57
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\">";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</a></li>
            <li>";
        // line 58
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "
              <ul>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 61
            echo "                  <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                <li><a href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
              </ul>
            </li>
            ";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_sitemap"), "method")) {
            // line 67
            echo "              <li><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_href", 1 => "index.php?route=journal2/blog"), "method");
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_name", 1 => "Blog"), "method");
            echo "</a>
                <ul>
                  ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_categories", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 70
                echo "                    <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </ul>
              </li>
            ";
        }
        // line 75
        echo "          </ul>
        </div>
      </div>
      ";
        // line 78
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 81
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 81,  286 => 78,  281 => 75,  276 => 72,  265 => 70,  261 => 69,  253 => 67,  251 => 66,  242 => 63,  231 => 61,  227 => 60,  222 => 58,  216 => 57,  210 => 56,  204 => 55,  196 => 52,  190 => 51,  184 => 50,  178 => 49,  172 => 48,  165 => 46,  159 => 45,  153 => 41,  146 => 39,  142 => 37,  135 => 35,  131 => 33,  120 => 31,  116 => 30,  113 => 29,  111 => 28,  104 => 27,  100 => 26,  97 => 25,  95 => 24,  88 => 23,  84 => 22,  77 => 18,  73 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <div class="row sitemap-info">*/
/*         <div class="col-sm-6 left">*/
/*           <ul>*/
/*             {% for category_1 in categories %}*/
/*               <li><a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/*                 {% if category_1.children %}*/
/*                   <ul>*/
/*                     {% for category_2 in category_1.children %}*/
/*                       <li><a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/*                         {% if category_2.children %}*/
/*                           <ul>*/
/*                             {% for category_3 in category_2.children %}*/
/*                               <li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         {% endif %}*/
/*                       </li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 {% endif %}*/
/*               </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-6 right">*/
/*           <ul>*/
/*             <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*             <li><a href="{{ account }}">{{ text_account }}</a>*/
/*               <ul>*/
/*                 <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*                 <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*                 <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*                 <li><a href="{{ history }}">{{ text_history }}</a></li>*/
/*                 <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{ history }}">{{ text_cart }}</a></li>*/
/*             <li><a href="{{ checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ search }}">{{ text_search }}</a></li>*/
/*             <li>{{ text_information }}*/
/*               <ul>*/
/*                 {% for information in informations %}*/
/*                   <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                 {% endfor %}*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             {% if journal2.settings.get('blog_sitemap') %}*/
/*               <li><a href="{{ journal2.settings.get('blog_href', 'index.php?route=journal2/blog') }}">{{ journal2.settings.get('blog_name', 'Blog') }}</a>*/
/*                 <ul>*/
/*                   {% for category in journal2.settings.get('blog_categories', []) %}*/
/*                     <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*                   {% endfor %}*/
/*                 </ul>*/
/*               </li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
