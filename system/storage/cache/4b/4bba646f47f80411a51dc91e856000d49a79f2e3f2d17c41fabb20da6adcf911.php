<?php

/* journal2/template/journal2/module/super_filter_tags.twig */
class __TwigTemplate_8cf90931db4ff442acb5157bec66c209c5f80f34b0ddb6440256ed7514d94645 extends Twig_Template
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
        echo "<div class=\"box sf-tags ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"tags\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_tags_text"), "method");
        echo "</div>
  <div class=\"box-content\">
    <ul class=\"";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_show_box"), "method")) {
            echo " hide-checkbox ";
        }
        echo "\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 6
            echo "        <li><label><input data-keyword=\"";
            echo $this->getAttribute($context["t"], "keyword", array());
            echo "\" type=\"checkbox\" name=\"tag\" value=\"";
            echo $this->getAttribute($context["t"], "text", array());
            echo "\" ";
            if (((isset($context["tag"]) ? $context["tag"] : null) == $this->getAttribute($context["t"], "text", array()))) {
                echo " checked ";
            }
            echo "><span class=\"sf-name\">";
            echo $this->getAttribute($context["t"], "name", array());
            echo "</span></label></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  41 => 6,  37 => 5,  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <div class="box sf-tags {% if is_collapsed %} is-collapsed {% endif %}" data-id="tags">*/
/*   <div class="box-heading">{{ journal2.settings.get('filter_tags_text') }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="{% if not journal2.settings.get('filter_show_box') %} hide-checkbox {% endif %}">*/
/*       {% for t in tags %}*/
/*         <li><label><input data-keyword="{{ t.keyword }}" type="checkbox" name="tag" value="{{ t.text }}" {% if tag == t.text %} checked {% endif %}><span class="sf-name">{{ t.name }}</span></label></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
