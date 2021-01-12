<?php

/* default/template/mail/register_alert.twig */
class __TwigTemplate_1c535e22b555f683e15f979a36ef7265a3fd82e776af81595870b77c60edf529 extends Twig_Template
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
        echo (isset($context["text_signup"]) ? $context["text_signup"] : null);
        echo "

";
        // line 3
        echo (isset($context["text_firstname"]) ? $context["text_firstname"] : null);
        echo " ";
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "
";
        // line 4
        echo (isset($context["text_lastname"]) ? $context["text_lastname"] : null);
        echo " ";
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "
";
        // line 5
        if ((isset($context["customer_group"]) ? $context["customer_group"] : null)) {
            // line 6
            echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
            echo " ";
            echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
            echo "
";
        }
        // line 8
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo " ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "
";
        // line 9
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo " ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 8,  38 => 6,  36 => 5,  30 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ text_signup }}*/
/* */
/* {{ text_firstname }} {{ firstname }}*/
/* {{ text_lastname }} {{ lastname }}*/
/* {% if customer_group %}*/
/* {{ text_customer_group }} {{ customer_group }}*/
/* {% endif %}*/
/* {{ text_email }} {{ email }}*/
/* {{ text_telephone }} {{ telephone }}*/
