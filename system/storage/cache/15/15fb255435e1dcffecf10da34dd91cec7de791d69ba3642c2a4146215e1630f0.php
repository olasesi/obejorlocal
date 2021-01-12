<?php

/* journal2/template/journal2/module/blog_search.twig */
class __TwigTemplate_c7ee416e856f7372f5dd5bb180697c605d75cda6d373d8efe1c7d17aced44d25 extends Twig_Template
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
        echo "<div id=\"journal-blog-search-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-blog-search-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-blog blog-search\">
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "    <div class=\"box-heading\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"box-post\">
    <div class=\"box-search\">
      <input type=\"text\" value=\"";
        // line 7
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/>
      <a class=\"search-btn\"></a>
    </div>
  </div>
</div>
<script>Journal.blogSearch(\$('#journal-blog-search-";
        // line 12
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "'), '";
        echo (isset($context["search_url"]) ? $context["search_url"] : null);
        echo "');</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/blog_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  38 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div id="journal-blog-search-{{ module }}" class="journal-blog-search-{{ module_id }} box side-blog blog-search">*/
/*   {% if heading_title %}*/
/*     <div class="box-heading">{{ heading_title }}</div>*/
/*   {% endif %}*/
/*   <div class="box-post">*/
/*     <div class="box-search">*/
/*       <input type="text" value="{{ search }}" placeholder="{{ placeholder }}"/>*/
/*       <a class="search-btn"></a>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>Journal.blogSearch($('#journal-blog-search-{{ module }}'), '{{ search_url }}');</script>*/
/* */
