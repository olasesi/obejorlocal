<?php

/* journal2/template/journal2/module/blog_tags.twig */
class __TwigTemplate_529eab4c4472ef2f974538eda62cf839549ead726ecba4c4a2099821982262e6 extends Twig_Template
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
        echo "<div id=\"journal-blog-tags-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-blog-tags-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-blog side-posts side-blog-tags\">
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
        echo "  <div class=\"box-tag box-post\">
    <div>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 8
            echo "        <a href=\"";
            echo $this->getAttribute($context["tag"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["tag"], "name", array());
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/blog_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  42 => 8,  38 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div id="journal-blog-tags-{{ module }}" class="journal-blog-tags-{{ module_id }} box side-blog side-posts side-blog-tags">*/
/*   {% if heading_title %}*/
/*     <div class="box-heading">{{ heading_title }}</div>*/
/*   {% endif %}*/
/*   <div class="box-tag box-post">*/
/*     <div>*/
/*       {% for tag in tags %}*/
/*         <a href="{{ tag.href }}">{{ tag.name }}</a>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
