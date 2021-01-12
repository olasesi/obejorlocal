<?php

/* journal2/template/account/login.twig */
class __TwigTemplate_e8fb472e71a16acb85fbf7d436d9ee0daefc5c28cb46116666c83a3e7f5e993f extends Twig_Template
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
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "    <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 23
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row login-content\">
        <div class=\"col-sm-6 left\">
          <div class=\"well\">
            <h2 class=\"secondary-title\">";
        // line 27
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
            <div class=\"login-wrap\">
              <p><strong>";
        // line 29
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</strong></p>
              <p>";
        // line 30
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            </div>
            <hr/>
            <a href=\"";
        // line 33
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6 right\">
          <div class=\"well\">
            <h2 class=\"secondary-title\">";
        // line 37
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <form action=\"";
        // line 38
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"login-wrap\">
                <p>";
        // line 40
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</p>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-email\">";
        // line 42
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 43
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-password\">";
        // line 46
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 47
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                  <a href=\"";
        // line 48
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
              </div>
              <hr/>
              <input type=\"submit\" value=\"";
        // line 51
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary button\"/>
              ";
        // line 52
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 53
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
              ";
        }
        // line 55
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 59
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 62
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 62,  184 => 59,  178 => 55,  172 => 53,  170 => 52,  166 => 51,  158 => 48,  152 => 47,  148 => 46,  140 => 43,  136 => 42,  131 => 40,  126 => 38,  122 => 37,  113 => 33,  107 => 30,  103 => 29,  98 => 27,  91 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  66 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*     <div class="alert alert-success success"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       {{ content_top }}*/
/*       <div class="row login-content">*/
/*         <div class="col-sm-6 left">*/
/*           <div class="well">*/
/*             <h2 class="secondary-title">{{ text_new_customer }}</h2>*/
/*             <div class="login-wrap">*/
/*               <p><strong>{{ text_register }}</strong></p>*/
/*               <p>{{ text_register_account }}</p>*/
/*             </div>*/
/*             <hr/>*/
/*             <a href="{{ register }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*         </div>*/
/*         <div class="col-sm-6 right">*/
/*           <div class="well">*/
/*             <h2 class="secondary-title">{{ text_returning_customer }}</h2>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="login-wrap">*/
/*                 <p>{{ text_i_am_returning_customer }}</p>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                   <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                   <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                   <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*               </div>*/
/*               <hr/>*/
/*               <input type="submit" value="{{ button_login }}" class="btn btn-primary button"/>*/
/*               {% if redirect %}*/
/*                 <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
