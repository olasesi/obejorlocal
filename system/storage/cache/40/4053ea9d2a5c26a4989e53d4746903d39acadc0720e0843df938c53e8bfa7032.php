<?php

/* journal2/template/journal2/blog/posts.twig */
class __TwigTemplate_d0899e8d8d2b80fdd9331e9a2f143792c44b9eb55388d286a81452da1345f0f5 extends Twig_Template
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
  ";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  <div id=\"content\">
    <h1 class=\"heading-title\">";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
      ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_blog_feed_url"), "method")) {
            // line 12
            echo "        <a class=\"journal-blog-feed\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_blog_feed_url"), "method");
            echo "\" target=\"_blank\"><span class=\"feed-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "feed_text"), "method");
            echo "</span></a>
      ";
        }
        // line 14
        echo "    </h1>
    ";
        // line 15
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
    ";
        // line 16
        if ((isset($context["category_description"]) ? $context["category_description"] : null)) {
            // line 17
            echo "      <div>";
            echo (isset($context["category_description"]) ? $context["category_description"] : null);
            echo "</div>
    ";
        }
        // line 19
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)) > 0)) {
            // line 20
            echo "      <div class=\"posts main-posts blog-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_blog_settings.posts_display", 1 => "grid\""), "method");
            echo "-view\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 22
                echo "          <div class=\"post-item ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo "\">
            <div class=\"post-wrapper\">
              ";
                // line 24
                if ($this->getAttribute($context["post"], "image", array())) {
                    // line 25
                    echo "                <a class=\"post-image\" href=\"";
                    echo $this->getAttribute($context["post"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["post"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["post"], "name", array());
                    echo "\"/></a>
              ";
                }
                // line 27
                echo "              <div class=\"post-item-details\">
                <h2><a href=\"";
                // line 28
                echo $this->getAttribute($context["post"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["post"], "name", array());
                echo "</a></h2>
                <div class=\"comment-date\">
                  <span class=\"p-author\">";
                // line 30
                echo $this->getAttribute($context["post"], "author", array());
                echo "</span>
                  <span class=\"p-date\">";
                // line 31
                echo $this->getAttribute($context["post"], "date", array());
                echo "</span>
                  <span class=\"p-comment\">";
                // line 32
                echo $this->getAttribute($context["post"], "comments", array());
                echo "</span>
                </div>
                <div class=\"post-text\"><span>";
                // line 34
                echo $this->getAttribute($context["post"], "description", array());
                echo "</span></div>
                <div class=\"post-button\">
                  <a class=\"post-view-more button\" href=\"";
                // line 36
                echo $this->getAttribute($context["post"], "href", array());
                echo "\"><i class=\"post-button-left-icon\"></i>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_button_read_more", 1 => "Read More"), "method");
                echo "<i class=\"post-button-right-icon\"></i></a>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </div>
      ";
            // line 43
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
    ";
        } else {
            // line 45
            echo "      <div class=\"buttons\">
        <div class=\"right\"><a href=\"";
            // line 46
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"button\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
    ";
        }
        // line 49
        echo "    ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
  </div>
  <script>
    if (!Journal.isFlexboxSupported) {
      Journal.equalHeight(\$(\".posts .post-wrapper\"), '.post-item-details h2 a');
      Journal.equalHeight(\$(\".posts .post-wrapper\"), '.post-text span');
    }
  </script>
</div>
";
        // line 58
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/blog/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  169 => 49,  161 => 46,  158 => 45,  153 => 43,  150 => 42,  136 => 36,  131 => 34,  126 => 32,  122 => 31,  118 => 30,  111 => 28,  108 => 27,  98 => 25,  96 => 24,  90 => 22,  86 => 21,  81 => 20,  78 => 19,  72 => 17,  70 => 16,  66 => 15,  63 => 14,  55 => 12,  53 => 11,  49 => 10,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {{ column_left }}{{ column_right }}*/
/*   <div id="content">*/
/*     <h1 class="heading-title">{{ heading_title }}*/
/*       {% if journal2.settings.get('blog_blog_feed_url') %}*/
/*         <a class="journal-blog-feed" href="{{ journal2.settings.get('blog_blog_feed_url') }}" target="_blank"><span class="feed-text">{{ journal2.settings.get('feed_text') }}</span></a>*/
/*       {% endif %}*/
/*     </h1>*/
/*     {{ content_top }}*/
/*     {% if category_description %}*/
/*       <div>{{ category_description }}</div>*/
/*     {% endif %}*/
/*     {% if posts|length > 0 %}*/
/*       <div class="posts main-posts blog-{{ journal2.settings.get('config_blog_settings.posts_display', 'grid"') }}-view">*/
/*         {% for post in posts %}*/
/*           <div class="post-item {{ grid_classes }}">*/
/*             <div class="post-wrapper">*/
/*               {% if post.image %}*/
/*                 <a class="post-image" href="{{ post.href }}"><img src="{{ post.image }}" alt="{{ post.name }}"/></a>*/
/*               {% endif %}*/
/*               <div class="post-item-details">*/
/*                 <h2><a href="{{ post.href }}">{{ post.name }}</a></h2>*/
/*                 <div class="comment-date">*/
/*                   <span class="p-author">{{ post.author }}</span>*/
/*                   <span class="p-date">{{ post.date }}</span>*/
/*                   <span class="p-comment">{{ post.comments }}</span>*/
/*                 </div>*/
/*                 <div class="post-text"><span>{{ post.description }}</span></div>*/
/*                 <div class="post-button">*/
/*                   <a class="post-view-more button" href="{{ post.href }}"><i class="post-button-left-icon"></i>{{ journal2.settings.get('blog_button_read_more', 'Read More') }}<i class="post-button-right-icon"></i></a>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {{ pagination }}*/
/*     {% else %}*/
/*       <div class="buttons">*/
/*         <div class="right"><a href="{{ continue }}" class="button">{{ button_continue }}</a></div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {{ content_bottom }}*/
/*   </div>*/
/*   <script>*/
/*     if (!Journal.isFlexboxSupported) {*/
/*       Journal.equalHeight($(".posts .post-wrapper"), '.post-item-details h2 a');*/
/*       Journal.equalHeight($(".posts .post-wrapper"), '.post-text span');*/
/*     }*/
/*   </script>*/
/* </div>*/
/* {{ footer }}*/
/* */
