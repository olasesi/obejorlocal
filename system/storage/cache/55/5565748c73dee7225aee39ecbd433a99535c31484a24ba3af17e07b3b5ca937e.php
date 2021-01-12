<?php

/* journal2/template/information/contact.twig */
class __TwigTemplate_670217daa05a9af46d724ba3b158abdf3918c939d583839aa34c2ace11a2f51c extends Twig_Template
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
        if ( !(isset($context["is_j2_popup"]) ? $context["is_j2_popup"] : null)) {
            // line 2
            echo (isset($context["header"]) ? $context["header"] : null);
            echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 6
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
            // line 8
            echo "  </ul>
  <div class=\"row\">";
            // line 9
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "
    ";
            // line 10
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 11
                echo "      ";
                $context["class"] = "col-sm-6";
                // line 12
                echo "    ";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 13
                echo "      ";
                $context["class"] = "col-sm-9";
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "      ";
                $context["class"] = "col-sm-12";
                // line 16
                echo "    ";
            }
            // line 17
            echo "    <div id=\"content\" class=\"";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo " contact-page\">
      <h1 class=\"heading-title\">";
            // line 18
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
            // line 19
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "
      <h2 class=\"secondary-title\">";
            // line 20
            echo (isset($context["text_location"]) ? $context["text_location"] : null);
            echo "</h2>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
            // line 24
            if ((isset($context["image"]) ? $context["image"] : null)) {
                // line 25
                echo "              <div class=\"col-sm-3\"><img src=\"";
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"";
                echo (isset($context["store"]) ? $context["store"] : null);
                echo "\" title=\"";
                echo (isset($context["store"]) ? $context["store"] : null);
                echo "\" class=\"img-thumbnail\"/></div>
            ";
            }
            // line 27
            echo "            <div class=\"col-sm-3\"><strong>";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "</strong><br/>
              <address>
                ";
            // line 29
            echo (isset($context["address"]) ? $context["address"] : null);
            echo "
              </address>
              ";
            // line 31
            if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
                // line 32
                echo "                <a href=\"https://maps.google.com/maps?q=";
                echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
                echo "&hl=";
                echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                echo (isset($context["button_map"]) ? $context["button_map"] : null);
                echo "</a>
              ";
            }
            // line 34
            echo "            </div>
            <div class=\"col-sm-3\"><strong>";
            // line 35
            echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
            echo "</strong><br>
              ";
            // line 36
            echo (isset($context["telephone"]) ? $context["telephone"] : null);
            echo "<br/>
              <br/>
              ";
            // line 38
            if ((isset($context["fax"]) ? $context["fax"] : null)) {
                // line 39
                echo "                <strong>";
                echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                echo "</strong><br>
                ";
                // line 40
                echo (isset($context["fax"]) ? $context["fax"] : null);
                echo "
              ";
            }
            // line 42
            echo "            </div>
            <div class=\"col-sm-3\">
              ";
            // line 44
            if ((isset($context["open"]) ? $context["open"] : null)) {
                // line 45
                echo "                <strong>";
                echo (isset($context["text_open"]) ? $context["text_open"] : null);
                echo "</strong><br/>
                ";
                // line 46
                echo (isset($context["open"]) ? $context["open"] : null);
                echo "<br/>
                <br/>
              ";
            }
            // line 49
            echo "              ";
            if ((isset($context["comment"]) ? $context["comment"] : null)) {
                // line 50
                echo "                <strong>";
                echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                echo "</strong><br/>
                ";
                // line 51
                echo (isset($context["comment"]) ? $context["comment"] : null);
                echo "
              ";
            }
            // line 53
            echo "            </div>
          </div>
        </div>
      </div>
      ";
            // line 57
            if ((isset($context["locations"]) ? $context["locations"] : null)) {
                // line 58
                echo "        <h3>";
                echo (isset($context["text_store"]) ? $context["text_store"] : null);
                echo "</h3>
        <div class=\"panel-group\" id=\"accordion\">
          ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 61
                    echo "            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><a href=\"#collapse-location";
                    // line 63
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo " <i class=\"fa fa-caret-down\"></i></a></h4>
              </div>
              <div class=\"panel-collapse collapse\" id=\"collapse-location";
                    // line 65
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\">
                <div class=\"panel-body\">
                  <div class=\"row\">
                    ";
                    // line 68
                    if ($this->getAttribute($context["location"], "image", array())) {
                        // line 69
                        echo "                      <div class=\"col-sm-3\"><img src=\"";
                        echo $this->getAttribute($context["location"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["location"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["location"], "name", array());
                        echo "\" class=\"img-thumbnail\"/></div>
                    ";
                    }
                    // line 71
                    echo "                    <div class=\"col-sm-3\"><strong>";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "</strong><br/>
                      <address>
                        ";
                    // line 73
                    echo $this->getAttribute($context["location"], "address", array());
                    echo "
                      </address>
                      ";
                    // line 75
                    if ($this->getAttribute($context["location"], "geocode", array())) {
                        // line 76
                        echo "                        <a href=\"https://maps.google.com/maps?q=";
                        echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                        echo "&hl=";
                        echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                        echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                        echo (isset($context["button_map"]) ? $context["button_map"] : null);
                        echo "</a>
                      ";
                    }
                    // line 78
                    echo "                    </div>
                    <div class=\"col-sm-3\"><strong>";
                    // line 79
                    echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                    echo "</strong><br>
                      ";
                    // line 80
                    echo $this->getAttribute($context["location"], "telephone", array());
                    echo "<br/>
                      <br/>
                      ";
                    // line 82
                    if ($this->getAttribute($context["location"], "fax", array())) {
                        // line 83
                        echo "                        <strong>";
                        echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                        echo "</strong><br>
                        ";
                        // line 84
                        echo $this->getAttribute($context["location"], "fax", array());
                        echo "
                      ";
                    }
                    // line 86
                    echo "                    </div>
                    <div class=\"col-sm-3\">
                      ";
                    // line 88
                    if ($this->getAttribute($context["location"], "open", array())) {
                        // line 89
                        echo "                        <strong>";
                        echo (isset($context["text_open"]) ? $context["text_open"] : null);
                        echo "</strong><br/>
                        ";
                        // line 90
                        echo $this->getAttribute($context["location"], "open", array());
                        echo "<br/>
                        <br/>
                      ";
                    }
                    // line 93
                    echo "                      ";
                    if ($this->getAttribute($context["location"], "comment", array())) {
                        // line 94
                        echo "                        <strong>";
                        echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                        echo "</strong><br/>
                        ";
                        // line 95
                        echo $this->getAttribute($context["location"], "comment", array());
                        echo "
                      ";
                    }
                    // line 97
                    echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "        </div>
      ";
            }
            // line 105
            echo "      ";
        }
        // line 106
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          ";
        // line 108
        if ((isset($context["product_id"]) ? $context["product_id"] : null)) {
            // line 109
            echo "            <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
          ";
        }
        // line 111
        echo "          ";
        if ( !(isset($context["is_j2_popup"]) ? $context["is_j2_popup"] : null)) {
            // line 112
            echo "            <h2 class=\"secondary-title\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</h2>
          ";
        }
        // line 114
        echo "          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 115
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 117
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              ";
        // line 118
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 119
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 121
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 124
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 126
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 127
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 128
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 130
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 133
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 135
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 136
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 137
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 139
        echo "            </div>
          </div>
          ";
        // line 141
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        ";
        // line 143
        if ( !(isset($context["is_j2_popup"]) ? $context["is_j2_popup"] : null)) {
            // line 144
            echo "          <div class=\"buttons\">
            <div class=\"pull-right\">
              <input class=\"btn btn-primary button\" type=\"submit\" value=\"";
            // line 146
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\"/>
            </div>
          </div>
        ";
        }
        // line 150
        echo "      </form>
      ";
        // line 151
        if ( !(isset($context["is_j2_popup"]) ? $context["is_j2_popup"] : null)) {
            // line 152
            echo "      ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
  </div>
</div>
";
            // line 155
            echo (isset($context["footer"]) ? $context["footer"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 155,  435 => 152,  433 => 151,  430 => 150,  423 => 146,  419 => 144,  417 => 143,  412 => 141,  408 => 139,  402 => 137,  400 => 136,  396 => 135,  391 => 133,  386 => 130,  380 => 128,  378 => 127,  374 => 126,  369 => 124,  364 => 121,  358 => 119,  356 => 118,  352 => 117,  347 => 115,  344 => 114,  338 => 112,  335 => 111,  329 => 109,  327 => 108,  321 => 106,  318 => 105,  314 => 103,  303 => 97,  298 => 95,  293 => 94,  290 => 93,  284 => 90,  279 => 89,  277 => 88,  273 => 86,  268 => 84,  263 => 83,  261 => 82,  256 => 80,  252 => 79,  249 => 78,  239 => 76,  237 => 75,  232 => 73,  226 => 71,  216 => 69,  214 => 68,  208 => 65,  201 => 63,  197 => 61,  193 => 60,  187 => 58,  185 => 57,  179 => 53,  174 => 51,  169 => 50,  166 => 49,  160 => 46,  155 => 45,  153 => 44,  149 => 42,  144 => 40,  139 => 39,  137 => 38,  132 => 36,  128 => 35,  125 => 34,  115 => 32,  113 => 31,  108 => 29,  102 => 27,  92 => 25,  90 => 24,  83 => 20,  79 => 19,  75 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 9,  42 => 8,  31 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if not is_j2_popup %}*/
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} contact-page">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <h2 class="secondary-title">{{ text_location }}</h2>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*               <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail"/></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br/>*/
/*               <address>*/
/*                 {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*                 <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br/>*/
/*               <br/>*/
/*               {% if fax %}*/
/*                 <strong>{{ text_fax }}</strong><br>*/
/*                 {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*                 <strong>{{ text_open }}</strong><br/>*/
/*                 {{ open }}<br/>*/
/*                 <br/>*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*                 <strong>{{ text_comment }}</strong><br/>*/
/*                 {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*         <h3>{{ text_store }}</h3>*/
/*         <div class="panel-group" id="accordion">*/
/*           {% for location in locations %}*/
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">*/
/*                 <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*               </div>*/
/*               <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*                 <div class="panel-body">*/
/*                   <div class="row">*/
/*                     {% if location.image %}*/
/*                       <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail"/></div>*/
/*                     {% endif %}*/
/*                     <div class="col-sm-3"><strong>{{ location.name }}</strong><br/>*/
/*                       <address>*/
/*                         {{ location.address }}*/
/*                       </address>*/
/*                       {% if location.geocode %}*/
/*                         <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*                       {{ location.telephone }}<br/>*/
/*                       <br/>*/
/*                       {% if location.fax %}*/
/*                         <strong>{{ text_fax }}</strong><br>*/
/*                         {{ location.fax }}*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="col-sm-3">*/
/*                       {% if location.open %}*/
/*                         <strong>{{ text_open }}</strong><br/>*/
/*                         {{ location.open }}<br/>*/
/*                         <br/>*/
/*                       {% endif %}*/
/*                       {% if location.comment %}*/
/*                         <strong>{{ text_comment }}</strong><br/>*/
/*                         {{ location.comment }}*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           {% if product_id %}*/
/*             <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*           {% endif %}*/
/*           {% if not is_j2_popup %}*/
/*             <h2 class="secondary-title">{{ text_contact }}</h2>*/
/*           {% endif %}*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control"/>*/
/*               {% if error_name %}*/
/*                 <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control"/>*/
/*               {% if error_email %}*/
/*                 <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*                 <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         {% if not is_j2_popup %}*/
/*           <div class="buttons">*/
/*             <div class="pull-right">*/
/*               <input class="btn btn-primary button" type="submit" value="{{ button_submit }}"/>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {% if not is_j2_popup %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* {% endif %}*/
/* */
