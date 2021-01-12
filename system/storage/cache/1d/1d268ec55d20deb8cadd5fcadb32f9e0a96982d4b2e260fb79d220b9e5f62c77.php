<?php

/* journal2/template/journal2/module/blog_categories.twig */
class __TwigTemplate_f5525b2ecdf8e9dde783ec20ec68ccfa06e5498f29cf1a614b18dea003a1c492 extends Twig_Template
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
        echo "<div id=\"journal-blog-categories-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-blog-categories-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-blog blog-category\">
  <div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-category box-post\">
    <ul>
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        <li>
          <a href=\"";
            // line 7
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/blog_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  39 => 7,  36 => 6,  32 => 5,  26 => 2,  19 => 1,);
    }
}
/* <div id="journal-blog-categories-{{ module }}" class="journal-blog-categories-{{ module_id }} box side-blog blog-category">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-category box-post">*/
/*     <ul>*/
/*       {% for category in categories %}*/
/*         <li>*/
/*           <a href="{{ category.href }}">{{ category.name }}</a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
