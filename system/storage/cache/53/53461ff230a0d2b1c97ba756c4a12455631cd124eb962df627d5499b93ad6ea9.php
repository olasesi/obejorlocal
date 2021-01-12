<?php

/* extension/advertise/google_steps.twig */
class __TwigTemplate_33974f4bf6430766b90a638acefd9cf4aa312ec37e7e93d5e34d93ab674b1587 extends Twig_Template
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
        echo "<div class=\"stepper\">
    <input class=\"stepper__input\" id=\"stepper-3-0\" name=\"stepper-3\" type=\"radio\" ";
        // line 2
        echo ((((isset($context["current_step"]) ? $context["current_step"] : null) >= 1)) ? ("checked") : (""));
        echo "/>
    <div class=\"stepper__step\">
        <label class=\"stepper__button\">";
        // line 4
        echo (isset($context["step_connect"]) ? $context["step_connect"] : null);
        echo "</label>
    </div>
    <input class=\"stepper__input\" id=\"stepper-3-1\" name=\"stepper-3\" type=\"radio\" ";
        // line 6
        echo ((((isset($context["current_step"]) ? $context["current_step"] : null) >= 2)) ? ("checked") : (""));
        echo "/>
    <div class=\"stepper__step\">
        <label class=\"stepper__button\">";
        // line 8
        echo (isset($context["step_merchant_account"]) ? $context["step_merchant_account"] : null);
        echo "</label>
    </div>
    <input class=\"stepper__input\" id=\"stepper-3-2\" name=\"stepper-3\" type=\"radio\" ";
        // line 10
        echo ((((isset($context["current_step"]) ? $context["current_step"] : null) >= 3)) ? ("checked") : (""));
        echo "/>
    <div class=\"stepper__step\">
        <label class=\"stepper__button\">";
        // line 12
        echo (isset($context["step_campaigns"]) ? $context["step_campaigns"] : null);
        echo "</label>
    </div>
    <input class=\"stepper__input\" id=\"stepper-3-3\" name=\"stepper-3\" type=\"radio\" ";
        // line 14
        echo ((((isset($context["current_step"]) ? $context["current_step"] : null) >= 4)) ? ("checked") : (""));
        echo "/>
    <div class=\"stepper__step\">
        <label class=\"stepper__button\">";
        // line 16
        echo (isset($context["step_shipping_taxes"]) ? $context["step_shipping_taxes"] : null);
        echo "</label>
    </div>
    <input class=\"stepper__input\" id=\"stepper-3-4\" name=\"stepper-3\" type=\"radio\" ";
        // line 18
        echo ((((isset($context["current_step"]) ? $context["current_step"] : null) >= 5)) ? ("checked") : (""));
        echo "/>
    <div class=\"stepper__step\">
        <label class=\"stepper__button\">";
        // line 20
        echo (isset($context["step_mapping"]) ? $context["step_mapping"] : null);
        echo "</label>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/advertise/google_steps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  62 => 18,  57 => 16,  52 => 14,  47 => 12,  42 => 10,  37 => 8,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="stepper">*/
/*     <input class="stepper__input" id="stepper-3-0" name="stepper-3" type="radio" {{ current_step >= 1 ? "checked" }}/>*/
/*     <div class="stepper__step">*/
/*         <label class="stepper__button">{{ step_connect }}</label>*/
/*     </div>*/
/*     <input class="stepper__input" id="stepper-3-1" name="stepper-3" type="radio" {{ current_step >= 2 ? "checked" }}/>*/
/*     <div class="stepper__step">*/
/*         <label class="stepper__button">{{ step_merchant_account }}</label>*/
/*     </div>*/
/*     <input class="stepper__input" id="stepper-3-2" name="stepper-3" type="radio" {{ current_step >= 3 ? "checked" }}/>*/
/*     <div class="stepper__step">*/
/*         <label class="stepper__button">{{ step_campaigns }}</label>*/
/*     </div>*/
/*     <input class="stepper__input" id="stepper-3-3" name="stepper-3" type="radio" {{ current_step >= 4 ? "checked" }}/>*/
/*     <div class="stepper__step">*/
/*         <label class="stepper__button">{{ step_shipping_taxes }}</label>*/
/*     </div>*/
/*     <input class="stepper__input" id="stepper-3-4" name="stepper-3" type="radio" {{ current_step >= 5 ? "checked" }}/>*/
/*     <div class="stepper__step">*/
/*         <label class="stepper__button">{{ step_mapping }}</label>*/
/*     </div>*/
/* </div>*/
