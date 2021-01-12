<?php

/* journal2/template/journal2/module/super_filter_availability.twig */
class __TwigTemplate_dc9a21dd118d2ad07d0752f796a2a87d4bcca3da620a0eba72b38acec8fae6a9 extends Twig_Template
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
        echo "<div class=\"box sf-availability ";
        if ((isset($context["is_collapsed"]) ? $context["is_collapsed"] : null)) {
            echo " is-collapsed ";
        }
        echo "\" data-id=\"availability\">
  <div class=\"box-heading\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_availability_text", 1 => "Availability"), "method");
        echo "</div>
  <div class=\"box-content\">
    <ul>
      <li><label><input type=\"checkbox\" value=\"1\" ";
        // line 5
        if ((isset($context["availability_yes"]) ? $context["availability_yes"] : null)) {
            echo " checked ";
        }
        echo "><span class=\"sf-name\">";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_availability_yes_text", 1 => "In Stock"), "method");
        echo "</span></label></li>
      <li><label><input type=\"checkbox\" value=\"0\" ";
        // line 6
        if ((isset($context["availability_no"]) ? $context["availability_no"] : null)) {
            echo " checked ";
        }
        echo "><span class=\"sf-name\">";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_availability_no_text", 1 => "Out of Stock"), "method");
        echo "</span></label></li>
    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/super_filter_availability.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  32 => 5,  26 => 2,  19 => 1,);
    }
}
/* <div class="box sf-availability {% if is_collapsed %} is-collapsed {% endif %}" data-id="availability">*/
/*   <div class="box-heading">{{ journal2.settings.get('filter_availability_text', 'Availability') }}</div>*/
/*   <div class="box-content">*/
/*     <ul>*/
/*       <li><label><input type="checkbox" value="1" {% if availability_yes %} checked {% endif %}><span class="sf-name">{{ journal2.settings.get('filter_availability_yes_text', 'In Stock') }}</span></label></li>*/
/*       <li><label><input type="checkbox" value="0" {% if availability_no %} checked {% endif %}><span class="sf-name">{{ journal2.settings.get('filter_availability_no_text', 'Out of Stock') }}</span></label></li>*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
