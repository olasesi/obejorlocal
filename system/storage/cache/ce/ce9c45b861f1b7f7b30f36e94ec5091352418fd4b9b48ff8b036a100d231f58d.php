<?php

/* journal2/template/journal2/module/blog_comments.twig */
class __TwigTemplate_495c066d4e4ee07c97e5c96ed46b1b66842c7bdd80aa51c944fb4b2916237764 extends Twig_Template
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
        echo "<div id=\"journal-blog-comments-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-blog-comments-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-blog side-posts blog-comments\">
  <div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-comment box-post\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 5
            echo "      <div class=\"side-post\">
        <a class=\"side-post-image\" href=\"";
            // line 6
            echo $this->getAttribute($context["comment"], "href", array());
            echo "\">";
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "gravatar", array(0 => $this->getAttribute($context["comment"], "email", array()), 1 => (isset($context["default_author_image"]) ? $context["default_author_image"] : null), 2 => 75, 3 => "")));
            echo "</a>
        <div class=\"side-post-details\">
          <a class=\"side-post-title\" href=\"";
            // line 8
            echo $this->getAttribute($context["comment"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["comment"], "post", array());
            echo "</a>
          <div class=\"comment-date\">
            <span class=\"p-author\">";
            // line 10
            echo $this->getAttribute($context["comment"], "name", array());
            echo "</span>
          </div>
        </div>
      </div>
      <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/blog_comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  52 => 10,  45 => 8,  38 => 6,  35 => 5,  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <div id="journal-blog-comments-{{ module }}" class="journal-blog-comments-{{ module_id }} box side-blog side-posts blog-comments">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-comment box-post">*/
/*     {% for comment in comments %}*/
/*       <div class="side-post">*/
/*         <a class="side-post-image" href="{{ comment.href }}">{{ staticCall('Journal2Utils', 'gravatar', [comment.email, default_author_image, 75, '']) }}</a>*/
/*         <div class="side-post-details">*/
/*           <a class="side-post-title" href="{{ comment.href }}">{{ comment.post }}</a>*/
/*           <div class="comment-date">*/
/*             <span class="p-author">{{ comment.name }}</span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <hr/>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
