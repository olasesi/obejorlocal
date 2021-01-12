<?php

/* journal2/template/account/address_list.twig */
class __TwigTemplate_c56248181e1efb5fb0756968c7430595a722cd22c7c477d6ddac15ae41c0a42e extends Twig_Template
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
            echo "    <div class=\"alert alert-warning warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo " address-entry\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"secondary-title\">";
        // line 23
        echo (isset($context["text_address_book"]) ? $context["text_address_book"] : null);
        echo "</h2>
      ";
        // line 24
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 25
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "              <tr>
                <td class=\"text-left\">";
                // line 29
                echo $this->getAttribute($context["result"], "address", array());
                echo "</td>
                <td class=\"text-right\"><a href=\"";
                // line 30
                echo $this->getAttribute($context["result"], "update", array());
                echo "\" class=\"btn btn-info button\">";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "</a> &nbsp; <a href=\"";
                echo $this->getAttribute($context["result"], "delete", array());
                echo "\" class=\"btn btn-danger button\">";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "</a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "          </table>
        </div>
      ";
        } else {
            // line 36
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 38
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 39
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 40
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_new_address"]) ? $context["button_new_address"] : null);
        echo "</a></div>
      </div>
      ";
        // line 42
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 45
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  156 => 42,  149 => 40,  143 => 39,  140 => 38,  134 => 36,  129 => 33,  114 => 30,  110 => 29,  107 => 28,  103 => 27,  99 => 25,  97 => 24,  93 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  66 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/*     <div class="alert alert-warning warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} address-entry">{{ content_top }}*/
/*       <h2 class="secondary-title">{{ text_address_book }}</h2>*/
/*       {% if addresses %}*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered table-hover">*/
/*             {% for result in addresses %}*/
/*               <tr>*/
/*                 <td class="text-left">{{ result.address }}</td>*/
/*                 <td class="text-right"><a href="{{ result.update }}" class="btn btn-info button">{{ button_edit }}</a> &nbsp; <a href="{{ result.delete }}" class="btn btn-danger button">{{ button_delete }}</a></td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-left"><a href="{{ back }}" class="btn btn-default button">{{ button_back }}</a></div>*/
/*         <div class="pull-right"><a href="{{ add }}" class="btn btn-primary button">{{ button_new_address }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
