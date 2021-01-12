<?php

/* journal2/template/journal2/menu/header.twig */
class __TwigTemplate_24561930e1f10f2106cad7f60778f3c201a6fa3745284775d2af3ed87b733d7e extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "  <li>
    ";
            // line 3
            if ($this->getAttribute($context["item"], "href", array())) {
                // line 4
                echo "      <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" ";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($context["item"], "target", array());
                echo ">";
                echo $this->getAttribute($context["item"], "icon_left", array());
                echo "
        <span class=\"top-menu-link\">";
                // line 5
                echo $this->getAttribute($context["item"], "name", array());
                echo "</span>";
                echo $this->getAttribute($context["item"], "icon_right", array());
                echo "
      </a>
    ";
            } else {
                // line 8
                echo "      <span ";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($context["item"], "target", array());
                echo ">";
                echo $this->getAttribute($context["item"], "icon_left", array());
                echo "<span>";
                echo $this->getAttribute($context["item"], "name", array());
                echo "</span>";
                echo $this->getAttribute($context["item"], "icon_right", array());
                echo "</span>
    ";
            }
            // line 10
            echo "    ";
            if ($this->getAttribute($context["item"], "items", array())) {
                // line 11
                echo "      <ul class=\"top-dropdown\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "          <li>
            ";
                    // line 14
                    if ($this->getAttribute($context["item"], "href", array())) {
                        // line 15
                        echo "              <a href=\"";
                        echo $this->getAttribute($context["item"], "href", array());
                        echo "\" ";
                        echo $this->getAttribute($context["item"], "class", array());
                        echo $this->getAttribute($context["item"], "target", array());
                        echo ">";
                        echo $this->getAttribute($context["item"], "icon_left", array());
                        echo "
                <span class=\"top-menu-link\">";
                        // line 16
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "</span>";
                        echo $this->getAttribute($context["item"], "icon_right", array());
                        echo "
              </a>
            ";
                    } else {
                        // line 19
                        echo "              <span ";
                        echo $this->getAttribute($context["item"], "class", array());
                        echo $this->getAttribute($context["item"], "target", array());
                        echo ">";
                        echo $this->getAttribute($context["item"], "icon_left", array());
                        echo $this->getAttribute($context["item"], "name", array());
                        echo $this->getAttribute($context["item"], "icon_right", array());
                        echo "</span>
            ";
                    }
                    // line 21
                    echo "          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "      </ul>
    ";
            }
            // line 25
            echo "  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/menu/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  110 => 23,  103 => 21,  92 => 19,  84 => 16,  74 => 15,  72 => 14,  69 => 13,  65 => 12,  62 => 11,  59 => 10,  46 => 8,  38 => 5,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for item in items %}*/
/*   <li>*/
/*     {% if item.href %}*/
/*       <a href="{{ item.href }}" {{ item.class }}{{ item.target }}>{{ item.icon_left }}*/
/*         <span class="top-menu-link">{{ item.name }}</span>{{ item.icon_right }}*/
/*       </a>*/
/*     {% else %}*/
/*       <span {{ item.class }}{{ item.target }}>{{ item.icon_left }}<span>{{ item.name }}</span>{{ item.icon_right }}</span>*/
/*     {% endif %}*/
/*     {% if item.items %}*/
/*       <ul class="top-dropdown">*/
/*         {% for item in item.items %}*/
/*           <li>*/
/*             {% if item.href %}*/
/*               <a href="{{ item.href }}" {{ item.class }}{{ item.target }}>{{ item.icon_left }}*/
/*                 <span class="top-menu-link">{{ item.name }}</span>{{ item.icon_right }}*/
/*               </a>*/
/*             {% else %}*/
/*               <span {{ item.class }}{{ item.target }}>{{ item.icon_left }}{{ item.name }}{{ item.icon_right }}</span>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/*   </li>*/
/* {% endfor %}*/
/* */
