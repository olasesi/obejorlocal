<?php

/* journal2/template/journal2/menu/footer.twig */
class __TwigTemplate_d4b4c77beb1f63abb754da73294babc37be9739e2028dd6a866c5d64be7b3337 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["row"], "type", array()) == "columns")) {
                // line 3
                echo "    <div class=\"row columns ";
                echo $this->getAttribute($context["row"], "class", array());
                echo "\" style=\"";
                echo $this->getAttribute($context["row"], "css", array());
                echo "\">
      ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 5
                    echo "        <div class=\"column ";
                    echo $this->getAttribute($context["column"], "class", array());
                    echo " ";
                    echo $this->getAttribute($context["column"], "type", array());
                    echo " ";
                    echo $this->getAttribute($context["row"], "classes", array());
                    echo " ";
                    echo (($this->getAttribute($context["column"], "title", array())) ? ("") : ("no-title"));
                    echo "\">
          ";
                    // line 6
                    if ($this->getAttribute($context["column"], "title", array())) {
                        // line 7
                        echo "            <h3>";
                        echo $this->getAttribute($context["column"], "title", array());
                        echo "</h3>
          ";
                    }
                    // line 9
                    echo "          ";
                    if (($this->getAttribute($context["column"], "type", array()) == "menu")) {
                        // line 10
                        echo "            <div class=\"column-menu-wrap\" style=\"";
                        echo $this->getAttribute($context["column"], "style", array());
                        echo "\">
              <ul>
                ";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 13
                            echo "
                  ";
                            // line 14
                            if ($this->getAttribute($context["item"], "href", array())) {
                                // line 15
                                echo "                    <li><a href=\"";
                                echo $this->getAttribute($context["item"], "href", array());
                                echo "\" ";
                                echo $this->getAttribute($context["item"], "class", array());
                                echo $this->getAttribute($context["item"], "target", array());
                                echo ">";
                                echo $this->getAttribute($context["item"], "icon_left", array());
                                echo $this->getAttribute($context["item"], "name", array());
                                echo $this->getAttribute($context["item"], "icon_right", array());
                                echo "</a></li>
                  ";
                            } else {
                                // line 17
                                echo "                    <li>";
                                echo $this->getAttribute($context["item"], "target", array());
                                echo $this->getAttribute($context["item"], "icon_left", array());
                                echo $this->getAttribute($context["item"], "name", array());
                                echo $this->getAttribute($context["item"], "icon_right", array());
                                echo "</li>
                  ";
                            }
                            // line 19
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "              </ul>
            </div>
          ";
                    } elseif (($this->getAttribute(                    // line 22
$context["column"], "type", array()) == "text")) {
                        // line 23
                        echo "            <div class=\"column-text-wrap ";
                        echo (($this->getAttribute($context["column"], "has_icon", array())) ? ("has-icon") : (""));
                        echo " block-icon-";
                        echo $this->getAttribute($context["column"], "icon_position", array());
                        echo "\" style=\"";
                        echo $this->getAttribute($context["column"], "style", array());
                        echo "\">
              ";
                        // line 24
                        if ($this->getAttribute($context["column"], "has_icon", array())) {
                            // line 25
                            echo "                <div class=\"block-icon block-icon-";
                            echo $this->getAttribute($context["column"], "icon_position", array());
                            echo "\" style=\"";
                            echo $this->getAttribute($context["column"], "icon_css", array());
                            echo "\">";
                            echo $this->getAttribute($context["column"], "icon", array());
                            echo "</div>
              ";
                        }
                        // line 27
                        echo "              <span>";
                        echo $this->getAttribute($context["column"], "text", array());
                        echo "</span>
            </div>
          ";
                    } elseif (($this->getAttribute(                    // line 29
$context["column"], "type", array()) == "newsletter")) {
                        // line 30
                        echo "            <div class=\"column-wrap\" style=\"";
                        echo $this->getAttribute($context["column"], "style", array());
                        echo "\">";
                        echo $this->getAttribute($context["column"], "content", array());
                        echo "</div>
          ";
                    } elseif (($this->getAttribute(                    // line 31
$context["column"], "type", array()) == "products")) {
                        // line 32
                        echo "            <div class=\"column-wrap\" style=\"";
                        echo $this->getAttribute($context["column"], "style", array());
                        echo "\">
              ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "products", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 34
                            echo "                <div class=\"product-grid-item ";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                            echo " display-";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                            echo " ";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                            echo "\">
                  <div class=\"product-wrapper\">
                    ";
                            // line 36
                            if ($this->getAttribute($context["product"], "thumb", array())) {
                                // line 37
                                echo "                      <div class=\"image\">
                        <a href=\"";
                                // line 38
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">
                          <img width=\"";
                                // line 39
                                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height", array());
                                echo "\" src=\"";
                                echo $this->getAttribute($context["product"], "thumb", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "\"/>
                        </a>
                      </div>
                    ";
                            }
                            // line 43
                            echo "                    <div class=\"product-details\">
                      <div class=\"name\"><a href=\"";
                            // line 44
                            echo $this->getAttribute($context["product"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["product"], "name", array());
                            echo "</a></div>
                      ";
                            // line 45
                            if ($this->getAttribute($context["product"], "price", array())) {
                                // line 46
                                echo "                        <div class=\"price\">
                          ";
                                // line 47
                                if ( !$this->getAttribute($context["product"], "special", array())) {
                                    // line 48
                                    echo "                            ";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "
                          ";
                                } else {
                                    // line 50
                                    echo "                            <span class=\"price-old\">";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "</span> <span class=\"price-new\">";
                                    echo $this->getAttribute($context["product"], "special", array());
                                    echo "</span>
                          ";
                                }
                                // line 52
                                echo "                        </div>
                      ";
                            }
                            // line 54
                            echo "                      ";
                            if ($this->getAttribute($context["product"], "rating", array())) {
                                // line 55
                                echo "                        <div class=\"rating\">
                          ";
                                // line 56
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    // line 57
                                    echo "                            ";
                                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                        // line 58
                                        echo "                              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            ";
                                    } else {
                                        // line 60
                                        echo "                              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            ";
                                    }
                                    // line 62
                                    echo "                          ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 63
                                echo "                        </div>
                      ";
                            }
                            // line 65
                            echo "                    </div>
                  </div>
                </div>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "            </div>
          ";
                    } elseif (($this->getAttribute(                    // line 70
$context["column"], "type", array()) == "posts")) {
                        // line 71
                        echo "            <div class=\"column-wrap\" style=\"";
                        echo $this->getAttribute($context["column"], "style", array());
                        echo "\">
              ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "posts", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                            // line 73
                            echo "                <div class=\"footer-post\">
                  ";
                            // line 74
                            if ($this->getAttribute($context["post"], "image", array())) {
                                // line 75
                                echo "                    <a class=\"footer-post-image\" href=\"";
                                echo $this->getAttribute($context["post"], "href", array());
                                echo "\"><img src=\"";
                                echo $this->getAttribute($context["post"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["post"], "name", array());
                                echo "\"/></a>
                  ";
                            }
                            // line 77
                            echo "                  <div class=\"footer-post-details\">
                    <a class=\"footer-post-title\" href=\"";
                            // line 78
                            echo $this->getAttribute($context["post"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["post"], "name", array());
                            echo "</a>
                    <div class=\"comment-date\">
                      <span class=\"p-date\">";
                            // line 80
                            echo $this->getAttribute($context["post"], "date", array());
                            echo "</span>
                      <span class=\"p-comment\">";
                            // line 81
                            echo $this->getAttribute($context["post"], "comments", array());
                            echo "</span>
                    </div>
                  </div>
                </div>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 86
                        echo "            </div>
          ";
                    }
                    // line 88
                    echo "        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "    </div>
  ";
            }
            // line 92
            echo "  ";
            if (($this->getAttribute($context["row"], "type", array()) == "contacts")) {
                // line 93
                echo "    <div class=\"row contacts\" style=\"";
                echo $this->getAttribute($context["row"], "css", array());
                echo "\">
      ";
                // line 94
                if ($this->getAttribute($this->getAttribute($context["row"], "contacts", array()), "left", array())) {
                    // line 95
                    echo "        <div class=\"contacts-left\">
          ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["row"], "contacts", array()), "left", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 97
                        echo "            <span class=\"";
                        echo $this->getAttribute($context["contact"], "classes", array());
                        echo "\" data-hint=\"";
                        echo $this->getAttribute($context["contact"], "name", array());
                        echo "\"><a ";
                        echo $this->getAttribute($context["contact"], "target", array());
                        echo " class=\"contact-icon\" href=\"";
                        echo $this->getAttribute($context["contact"], "link", array());
                        echo "\">";
                        echo $this->getAttribute($context["contact"], "icon_left", array());
                        echo $this->getAttribute($context["contact"], "icon_right", array());
                        echo "</a><a ";
                        echo $this->getAttribute($context["contact"], "target", array());
                        echo " href=\"";
                        echo $this->getAttribute($context["contact"], "link", array());
                        echo "\"><span class=\"contacts-text\">";
                        echo (($this->getAttribute($context["contact"], "tooltip", array())) ? ("") : ($this->getAttribute($context["contact"], "name", array())));
                        echo "</span></a></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "        </div>
      ";
                }
                // line 101
                echo "      ";
                if ($this->getAttribute($this->getAttribute($context["row"], "contacts", array()), "right", array())) {
                    // line 102
                    echo "        <div class=\"contacts-right\">
          ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["row"], "contacts", array()), "right", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 104
                        echo "            <span class=\"";
                        echo $this->getAttribute($context["contact"], "classes", array());
                        echo "\" data-hint=\"";
                        echo $this->getAttribute($context["contact"], "name", array());
                        echo "\"><a ";
                        echo $this->getAttribute($context["contact"], "target", array());
                        echo " class=\"contact-icon\" href=\"";
                        echo $this->getAttribute($context["contact"], "link", array());
                        echo "\">";
                        echo $this->getAttribute($context["contact"], "icon_left", array());
                        echo $this->getAttribute($context["contact"], "icon_right", array());
                        echo "</a><a ";
                        echo $this->getAttribute($context["contact"], "target", array());
                        echo " href=\"";
                        echo $this->getAttribute($context["contact"], "link", array());
                        echo "\"><span class=\"contacts-text\">";
                        echo (($this->getAttribute($context["contact"], "tooltip", array())) ? ("") : ($this->getAttribute($context["contact"], "name", array())));
                        echo "</span></a></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "        </div>
      ";
                }
                // line 108
                echo "    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/menu/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 108,  411 => 106,  387 => 104,  383 => 103,  380 => 102,  377 => 101,  373 => 99,  349 => 97,  345 => 96,  342 => 95,  340 => 94,  335 => 93,  332 => 92,  328 => 90,  321 => 88,  317 => 86,  306 => 81,  302 => 80,  295 => 78,  292 => 77,  282 => 75,  280 => 74,  277 => 73,  273 => 72,  268 => 71,  266 => 70,  263 => 69,  254 => 65,  250 => 63,  244 => 62,  240 => 60,  236 => 58,  233 => 57,  229 => 56,  226 => 55,  223 => 54,  219 => 52,  211 => 50,  205 => 48,  203 => 47,  200 => 46,  198 => 45,  192 => 44,  189 => 43,  174 => 39,  170 => 38,  167 => 37,  165 => 36,  155 => 34,  151 => 33,  146 => 32,  144 => 31,  137 => 30,  135 => 29,  129 => 27,  119 => 25,  117 => 24,  108 => 23,  106 => 22,  102 => 20,  96 => 19,  87 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 12,  59 => 10,  56 => 9,  50 => 7,  48 => 6,  37 => 5,  33 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for row in rows %}*/
/*   {% if row.type == 'columns' %}*/
/*     <div class="row columns {{ row.class }}" style="{{ row.css }}">*/
/*       {% for column in row.columns %}*/
/*         <div class="column {{ column.class }} {{ column.type }} {{ row.classes }} {{ column.title ? '' : 'no-title' }}">*/
/*           {% if column.title %}*/
/*             <h3>{{ column.title }}</h3>*/
/*           {% endif %}*/
/*           {% if column.type == 'menu' %}*/
/*             <div class="column-menu-wrap" style="{{ column.style }}">*/
/*               <ul>*/
/*                 {% for item in column.items %}*/
/* */
/*                   {% if item.href %}*/
/*                     <li><a href="{{ item.href }}" {{ item.class }}{{ item.target }}>{{ item.icon_left }}{{ item.name }}{{ item.icon_right }}</a></li>*/
/*                   {% else %}*/
/*                     <li>{{ item.target }}{{ item.icon_left }}{{ item.name }}{{ item.icon_right }}</li>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             </div>*/
/*           {% elseif column.type =='text' %}*/
/*             <div class="column-text-wrap {{ column.has_icon ? 'has-icon': '' }} block-icon-{{ column.icon_position }}" style="{{ column.style }}">*/
/*               {% if column.has_icon %}*/
/*                 <div class="block-icon block-icon-{{ column.icon_position }}" style="{{ column.icon_css }}">{{ column.icon }}</div>*/
/*               {% endif %}*/
/*               <span>{{ column.text }}</span>*/
/*             </div>*/
/*           {% elseif column.type =='newsletter' %}*/
/*             <div class="column-wrap" style="{{ column.style }}">{{ column.content }}</div>*/
/*           {% elseif column.type =='products' %}*/
/*             <div class="column-wrap" style="{{ column.style }}">*/
/*               {% for product in column.products %}*/
/*                 <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                   <div class="product-wrapper">*/
/*                     {% if product.thumb %}*/
/*                       <div class="image">*/
/*                         <a href="{{ product.href }}">*/
/*                           <img width="{{ image.width }}" height="{{ image.height }}" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                         </a>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     <div class="product-details">*/
/*                       <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                       {% if product.price %}*/
/*                         <div class="price">*/
/*                           {% if not product.special %}*/
/*                             {{ product.price }}*/
/*                           {% else %}*/
/*                             <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       {% endif %}*/
/*                       {% if product.rating %}*/
/*                         <div class="rating">*/
/*                           {% for i in 1..5 %}*/
/*                             {% if product.rating < i %}*/
/*                               <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                             {% else %}*/
/*                               <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% elseif column.type =='posts' %}*/
/*             <div class="column-wrap" style="{{ column.style }}">*/
/*               {% for post in column.posts %}*/
/*                 <div class="footer-post">*/
/*                   {% if post.image %}*/
/*                     <a class="footer-post-image" href="{{ post.href }}"><img src="{{ post.image }}" alt="{{ post.name }}"/></a>*/
/*                   {% endif %}*/
/*                   <div class="footer-post-details">*/
/*                     <a class="footer-post-title" href="{{ post.href }}">{{ post.name }}</a>*/
/*                     <div class="comment-date">*/
/*                       <span class="p-date">{{ post.date }}</span>*/
/*                       <span class="p-comment">{{ post.comments }}</span>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if row.type == 'contacts' %}*/
/*     <div class="row contacts" style="{{ row.css }}">*/
/*       {% if row.contacts.left %}*/
/*         <div class="contacts-left">*/
/*           {% for contact in row.contacts.left %}*/
/*             <span class="{{ contact.classes }}" data-hint="{{ contact.name }}"><a {{ contact.target }} class="contact-icon" href="{{ contact.link }}">{{ contact.icon_left }}{{ contact.icon_right }}</a><a {{ contact.target }} href="{{ contact.link }}"><span class="contacts-text">{{ contact.tooltip ? '' : contact.name }}</span></a></span>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if row.contacts.right %}*/
/*         <div class="contacts-right">*/
/*           {% for contact in row.contacts.right %}*/
/*             <span class="{{ contact.classes }}" data-hint="{{ contact.name }}"><a {{ contact.target }} class="contact-icon" href="{{ contact.link }}">{{ contact.icon_left }}{{ contact.icon_right }}</a><a {{ contact.target }} href="{{ contact.link }}"><span class="contacts-text">{{ contact.tooltip ? '' : contact.name }}</span></a></span>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
