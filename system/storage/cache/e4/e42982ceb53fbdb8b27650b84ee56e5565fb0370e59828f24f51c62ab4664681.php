<?php

/* journal2/template/journal2/menu/main.twig */
class __TwigTemplate_46ac83e8f5d4efdb6c8426d784ed3c8b106d3669e7f6a9d045c0f7afaddf6c2a extends Twig_Template
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
        // line 18
        echo "
<style>";
        // line 19
        echo twig_join_filter((isset($context["color_styles"]) ? $context["color_styles"] : null), " ");
        echo "</style>

<div class=\"mobile-trigger\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_text"), "method");
        echo "</div>

<ul class=\"super-menu mobile-menu menu-";
        // line 23
        echo (isset($context["display"]) ? $context["display"] : null);
        echo "\" style=\"table-layout: ";
        echo (isset($context["table_css_style"]) ? $context["table_css_style"] : null);
        echo "\">
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_items"]) ? $context["menu_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 25
            echo "    <li id=\"";
            echo $this->getAttribute($context["menu_item"], "id", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["menu_item"], "type", array());
            echo " ";
            echo $this->getAttribute($context["menu_item"], "class", array());
            echo "\">
      ";
            // line 26
            if ($this->getAttribute($context["menu_item"], "href", array())) {
                // line 27
                echo "        <a href=\"";
                echo $this->getAttribute($context["menu_item"], "href", array());
                echo "\" ";
                echo $this->getAttribute($context["menu_item"], "target", array());
                echo ">";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>
      ";
            } else {
                // line 29
                echo "        <a>";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>
      ";
            }
            // line 31
            echo "
      ";
            // line 32
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 33
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 36
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo " ";
                    echo $this->getAttribute($context["menu_item"], "show_class", array());
                    echo "\">
                <div>
                  <h3><a href=\"";
                    // line 38
                    echo $this->getAttribute($context["submenu_item"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["submenu_item"], "name", array());
                    echo "</a></h3>
                  <div>
                    ";
                    // line 40
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "image", 1 => "both"))) {
                        // line 41
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"><img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" data-default-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>
                    ";
                    }
                    // line 43
                    echo "                    ";
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "links", 1 => "both"))) {
                        // line 44
                        echo "                      <ul>
                        ";
                        // line 45
                        $context["index"] = 0;
                        // line 46
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                            // line 47
                            echo "                        ";
                            if (($this->getAttribute($context["menu_item"], "limit", array()) && ($this->getAttribute($context["menu_item"], "limit", array()) > (isset($context["index"]) ? $context["index"] : null)))) {
                                // line 48
                                echo "                          ";
                                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                                // line 49
                                echo "                          <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>
                        ";
                            }
                            // line 51
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                        ";
                        if (($this->getAttribute($context["menu_item"], "limit", array()) && ($this->getAttribute($context["menu_item"], "limit", array()) <= (isset($context["index"]) ? $context["index"] : null)))) {
                            // line 53
                            echo "                          <li class=\"view-more\"><a href=\"";
                            echo $this->getAttribute($context["submenu_item"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                            echo "</a></li>
                        ";
                        }
                        // line 55
                        echo "                      </ul>
                    ";
                    }
                    // line 57
                    echo "                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>
      ";
            }
            // line 66
            echo "
      ";
            // line 67
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 68
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 71
                    echo "              ";
                    if ((($this->getAttribute($context["menu_item"], "limit", array()) == 0) || (($this->getAttribute($context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) >= $this->getAttribute($context["loop"], "index", array()))))) {
                        // line 72
                        echo "                <div class=\"mega-menu-item product-grid-item ";
                        echo $this->getAttribute($context["menu_item"], "classes", array());
                        echo " display-";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                        echo " ";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                        echo "\">
                  <div class=\"product-wrapper ";
                        // line 73
                        if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                            echo " outofstock ";
                        }
                        echo "\">
                    <div class=\"image\">
                      <a href=\"";
                        // line 75
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
                        <img class=\"lazy\" src=\"";
                        // line 76
                        echo $this->getAttribute($context["product"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["product"], "image", array());
                        echo "\" width=\"";
                        echo $this->getAttribute($context["product"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["product"], "image_height", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/>
                      </a>
                      ";
                        // line 78
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                        foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                            // line 79
                            echo "                        <span class=\"label-";
                            echo $context["label"];
                            echo "\"><b>";
                            echo $context["name"];
                            echo "</b></span>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 81
                        echo "                      ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                            // line 82
                            echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                            // line 83
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "</span></a></div>
                      ";
                        }
                        // line 85
                        echo "                    </div>
                    <div class=\"product-details\">
                      <div class=\"caption\">
                        <div class=\"name\"><a href=\"";
                        // line 88
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></div>
                        ";
                        // line 89
                        if ($this->getAttribute($context["product"], "price", array())) {
                            // line 90
                            echo "                          <div class=\"price\">
                            ";
                            // line 91
                            if ( !$this->getAttribute($context["product"], "special", array())) {
                                // line 92
                                echo "                              ";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "
                            ";
                            } else {
                                // line 94
                                echo "                              <span class=\"price-old\">";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</span> <span class=\"price-new\">";
                                echo $this->getAttribute($context["product"], "special", array());
                                echo "</span>
                            ";
                            }
                            // line 96
                            echo "                          </div>
                        ";
                        }
                        // line 98
                        echo "                        ";
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 99
                            echo "                          <div class=\"rating\">
                            ";
                            // line 100
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 101
                                echo "                              ";
                                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                    // line 102
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                              ";
                                } else {
                                    // line 104
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                              ";
                                }
                                // line 106
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 107
                            echo "                          </div>
                        ";
                        }
                        // line 109
                        echo "                      </div>
                      <div class=\"button-group\">
                        ";
                        // line 111
                        if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                            // line 112
                            echo "                          <div class=\"cart enquiry-button\">
                            <a href=\"javascript:Journal.openPopup('";
                            // line 113
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                            echo "', '";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" data-clk=\"addToCart('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"button hint--top\" data-hint=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                            echo "<span class=\"button-cart-text\">";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                            echo "</span></a>
                          </div>
                        ";
                        } else {
                            // line 116
                            echo "                          <div class=\"cart ";
                            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                echo " outofstock ";
                            }
                            echo "\">
                            <a onclick=\"addToCart('";
                            // line 117
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"button hint--top\" data-hint=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span><i class=\"button-right-icon\"></i></a>
                          </div>
                        ";
                        }
                        // line 120
                        echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"hint--top\" data-hint=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                        // line 121
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"hint--top\" data-hint=\"";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              ";
                    }
                    // line 127
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>
      ";
            }
            // line 133
            echo "
      ";
            // line 134
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 135
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 138
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>
                  ";
                    // line 140
                    if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                        // line 141
                        echo "                    <h3><a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "</a></h3>
                  ";
                    }
                    // line 143
                    echo "                  <div>
                    ";
                    // line 144
                    if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                        // line 145
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"> <img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>
                    ";
                    }
                    // line 147
                    echo "                    <ul>
                      ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                        // line 149
                        echo "                        <li data-image=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                        echo "\"><a href=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                        echo "</a></li>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                    </ul>
                  </div>
                  <span class=\"clearfix\"></span>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
      ";
            }
            // line 161
            echo "
      ";
            // line 162
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "drop-down") && (twig_length_filter($this->env, $this->getAttribute($context["menu_item"], "subcategories", array())) > 0))) {
                // line 163
                echo "        <ul>
          ";
                // line 164
                echo $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["menu_item"]), "method");
                echo "
        </ul>
      ";
            }
            // line 167
            echo "
      ";
            // line 168
            if (($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-html")) {
                // line 169
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "html_blocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                    // line 172
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>
                  ";
                    // line 174
                    if ($this->getAttribute($context["block"], "title", array())) {
                        // line 175
                        echo "                    ";
                        if ($this->getAttribute($context["block"], "link", array())) {
                            // line 176
                            echo "                      <h3><a href=\"";
                            echo $this->getAttribute($context["block"], "link", array());
                            echo "\">";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</a></h3>
                    ";
                        } else {
                            // line 178
                            echo "                      <h3>";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</h3>
                    ";
                        }
                        // line 180
                        echo "                  ";
                    }
                    // line 181
                    echo "                  ";
                    if ($this->getAttribute($context["block"], "text", array())) {
                        // line 182
                        echo "                    <div class=\"wrapper\">
                      ";
                        // line 183
                        echo $this->getAttribute($context["block"], "text", array());
                        echo "
                    </div>
                  ";
                    }
                    // line 186
                    echo "                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
      ";
            }
            // line 193
            echo "
      ";
            // line 194
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-mixed") && $this->getAttribute($context["menu_item"], "mixed_columns", array()))) {
                // line 195
                echo "        <div class=\"mega-menu\">
          ";
                // line 196
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "mixed_columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menu_column"]) {
                    // line 197
                    echo "            ";
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 198
                        echo "
              <div class=\"mega-menu-column mega-menu-categories ";
                        // line 199
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 200
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 201
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 203
                        echo "                <div>
                  ";
                        // line 204
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 205
                            echo "                    <div class=\"mega-menu-item ";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo " ";
                            echo $this->getAttribute($context["menu_column"], "show_class", array());
                            echo "\">
                      <div>
                        <h3><a href=\"";
                            // line 207
                            echo $this->getAttribute($context["submenu_item"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu_item"], "name", array());
                            echo "</a></h3>
                        <div>
                          ";
                            // line 209
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "image", 1 => "both"))) {
                                // line 210
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"><img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" data-default-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>
                          ";
                            }
                            // line 212
                            echo "                          ";
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "links", 1 => "both"))) {
                                // line 213
                                echo "                            <ul>
                              ";
                                // line 214
                                $context["index"] = 0;
                                // line 215
                                echo "                              ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                    // line 216
                                    echo "                                ";
                                    if (($this->getAttribute($context["menu_column"], "limit", array()) && ($this->getAttribute($context["menu_column"], "limit", array()) > (isset($context["index"]) ? $context["index"] : null)))) {
                                        // line 217
                                        echo "                                  ";
                                        $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                                        // line 218
                                        echo "                                  <li data-image=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                        echo "\"><a href=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                        echo "</a></li>
                                ";
                                    }
                                    // line 220
                                    echo "                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 221
                                echo "                              ";
                                if (($this->getAttribute($context["menu_column"], "limit", array()) && ($this->getAttribute($context["menu_column"], "limit", array()) <= (isset($context["index"]) ? $context["index"] : null)))) {
                                    // line 222
                                    echo "                                <li class=\"view-more\"><a href=\"";
                                    echo $this->getAttribute($context["submenu_item"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                                    echo "</a></li>
                              ";
                                }
                                // line 224
                                echo "                            </ul>
                          ";
                            }
                            // line 226
                            echo "                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "                </div>
                ";
                        // line 232
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 233
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 235
                        echo "              </div>
            ";
                    }
                    // line 237
                    echo "
            ";
                    // line 238
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 239
                        echo "              <div class=\"mega-menu-column mega-menu-products ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 240
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 241
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 243
                        echo "                <div>
                  ";
                        // line 244
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 245
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 247
                        echo "                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 248
                            echo "                    ";
                            if ((($this->getAttribute($context["menu_column"], "limit", array()) == 0) || (($this->getAttribute($context["menu_column"], "limit", array()) > 0) && ($this->getAttribute($context["menu_column"], "limit", array()) >= $this->getAttribute($context["loop"], "index", array()))))) {
                                // line 249
                                echo "                      <div class=\"mega-menu-item product-grid-item ";
                                echo $this->getAttribute($context["menu_column"], "classes", array());
                                echo " display-";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                                echo " ";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                                echo "\">
                        <div class=\"product-wrapper ";
                                // line 250
                                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                    echo " outofstock ";
                                }
                                echo "\">
                          <div class=\"image\">
                            <a href=\"";
                                // line 252
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">
                              <img class=\"lazy\" src=\"";
                                // line 253
                                echo $this->getAttribute($context["product"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["product"], "image", array());
                                echo "\" width=\"";
                                echo $this->getAttribute($context["product"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["product"], "image_height", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "\"/>
                            </a>
                            ";
                                // line 255
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                                    // line 256
                                    echo "                              <span class=\"label-";
                                    echo $context["label"];
                                    echo "\"><b>";
                                    echo $context["name"];
                                    echo "</b></span>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 258
                                echo "                            ";
                                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                                    // line 259
                                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                    // line 260
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "</span></a></div>
                            ";
                                }
                                // line 262
                                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <div class=\"name\"><a href=\"";
                                // line 265
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "</a></div>
                              ";
                                // line 266
                                if ($this->getAttribute($context["product"], "price", array())) {
                                    // line 267
                                    echo "                                <div class=\"price\">
                                  ";
                                    // line 268
                                    if ( !$this->getAttribute($context["product"], "special", array())) {
                                        // line 269
                                        echo "                                    ";
                                        echo $this->getAttribute($context["product"], "price", array());
                                        echo "
                                  ";
                                    } else {
                                        // line 271
                                        echo "                                    <span class=\"price-old\">";
                                        echo $this->getAttribute($context["product"], "price", array());
                                        echo "</span> <span class=\"price-new\">";
                                        echo $this->getAttribute($context["product"], "special", array());
                                        echo "</span>
                                  ";
                                    }
                                    // line 273
                                    echo "                                </div>
                              ";
                                }
                                // line 275
                                echo "                              ";
                                if ($this->getAttribute($context["product"], "rating", array())) {
                                    // line 276
                                    echo "                                <div class=\"rating\">
                                  ";
                                    // line 277
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 278
                                        echo "                                    ";
                                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                            // line 279
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                                        } else {
                                            // line 281
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                                        }
                                        // line 283
                                        echo "                                  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 284
                                    echo "                                </div>
                              ";
                                }
                                // line 286
                                echo "                            </div>
                            <div class=\"button-group\">
                              ";
                                // line 288
                                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                                    // line 289
                                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                                    // line 290
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                                    echo "', '";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" data-clk=\"addToCart('";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"button hint--top\" data-hint=\"";
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                                    echo "\">";
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                                    echo "<span class=\"button-cart-text\">";
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                                    echo "</span></a>
                                </div>
                              ";
                                } else {
                                    // line 293
                                    echo "                                <div class=\"cart ";
                                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                        echo " outofstock ";
                                    }
                                    echo "\">
                                  <a onclick=\"addToCart('";
                                    // line 294
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"button hint--top\" data-hint=\"";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>
                              ";
                                }
                                // line 297
                                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "');\" class=\"hint--top\" data-hint=\"";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                // line 298
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "');\" class=\"hint--top\" data-hint=\"";
                                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                echo "</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    ";
                            }
                            // line 304
                            echo "                  ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 305
                        echo "                </div>
                ";
                        // line 306
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 307
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 309
                        echo "              </div>
            ";
                    }
                    // line 311
                    echo "            ";
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 312
                        echo "              <div class=\"mega-menu-column mega-menu-brands ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 313
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 314
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 316
                        echo "                <div>
                  ";
                        // line 317
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 318
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 320
                        echo "                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 321
                            echo "                    <div class=\"mega-menu-item ";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo "\">
                      <div>
                        ";
                            // line 323
                            if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                                // line 324
                                echo "                          <h3><a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "</a></h3>
                        ";
                            }
                            // line 326
                            echo "                        <div>
                          ";
                            // line 327
                            if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                                // line 328
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"> <img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>
                          ";
                            }
                            // line 330
                            echo "                          <ul>
                            ";
                            // line 331
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                // line 332
                                echo "                              <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 334
                            echo "                          </ul>
                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 340
                        echo "                </div>
                ";
                        // line 341
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 342
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 344
                        echo "              </div>
            ";
                    }
                    // line 346
                    echo "
            ";
                    // line 347
                    if (($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-html-block")) {
                        // line 348
                        echo "              <div class=\"mega-menu-column mega-menu-html mega-menu-html-block ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 349
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 350
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 352
                        echo "                <div>
                  ";
                        // line 353
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 354
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 356
                        echo "                  <div class=\"wrapper\">
                    ";
                        // line 357
                        echo $this->getAttribute($context["menu_column"], "html_text", array());
                        echo "
                  </div>
                </div>
                ";
                        // line 360
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 361
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 363
                        echo "              </div>
            ";
                    }
                    // line 365
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "        </div>
      ";
            }
            // line 368
            echo "
      <span class=\"mobile-plus\">+</span>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "</ul>
";
    }

    // line 1
    public function getrenderMultiLevelMenu($__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "    ";
                $context["submenu"] = $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["item"]), "method");
                // line 4
                echo "    <li>
      <a ";
                // line 5
                if ($this->getAttribute($context["item"], "href", array())) {
                    echo " href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "target", array())) {
                        echo " ";
                        echo $this->getAttribute($context["item"], "target", array());
                        echo " ";
                    }
                    echo " ";
                }
                echo " class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
        ";
                // line 6
                echo $this->getAttribute($context["item"], "name", array());
                echo "
        ";
                // line 7
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 8
                    echo "          <i class=\"menu-plus\"></i>
        ";
                }
                // line 10
                echo "      </a>
      ";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 12
                    echo "        <span class=\"mobile-plus\">+</span>
        <ul> ";
                    // line 13
                    echo (isset($context["submenu"]) ? $context["submenu"] : null);
                    echo "</ul>
      ";
                }
                // line 15
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/menu/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1336 => 15,  1331 => 13,  1328 => 12,  1326 => 11,  1323 => 10,  1319 => 8,  1317 => 7,  1313 => 6,  1297 => 5,  1294 => 4,  1291 => 3,  1286 => 2,  1274 => 1,  1269 => 372,  1260 => 368,  1256 => 366,  1250 => 365,  1246 => 363,  1237 => 361,  1233 => 360,  1227 => 357,  1224 => 356,  1218 => 354,  1216 => 353,  1213 => 352,  1204 => 350,  1200 => 349,  1193 => 348,  1191 => 347,  1188 => 346,  1184 => 344,  1175 => 342,  1171 => 341,  1168 => 340,  1157 => 334,  1144 => 332,  1140 => 331,  1137 => 330,  1121 => 328,  1119 => 327,  1116 => 326,  1108 => 324,  1106 => 323,  1100 => 321,  1095 => 320,  1089 => 318,  1087 => 317,  1084 => 316,  1075 => 314,  1071 => 313,  1064 => 312,  1061 => 311,  1057 => 309,  1048 => 307,  1044 => 306,  1041 => 305,  1027 => 304,  1014 => 298,  1005 => 297,  995 => 294,  988 => 293,  972 => 290,  969 => 289,  967 => 288,  963 => 286,  959 => 284,  953 => 283,  949 => 281,  945 => 279,  942 => 278,  938 => 277,  935 => 276,  932 => 275,  928 => 273,  920 => 271,  914 => 269,  912 => 268,  909 => 267,  907 => 266,  901 => 265,  896 => 262,  887 => 260,  878 => 259,  875 => 258,  864 => 256,  860 => 255,  847 => 253,  843 => 252,  836 => 250,  827 => 249,  824 => 248,  806 => 247,  800 => 245,  798 => 244,  795 => 243,  786 => 241,  782 => 240,  775 => 239,  773 => 238,  770 => 237,  766 => 235,  757 => 233,  753 => 232,  750 => 231,  740 => 226,  736 => 224,  728 => 222,  725 => 221,  719 => 220,  709 => 218,  706 => 217,  703 => 216,  698 => 215,  696 => 214,  693 => 213,  690 => 212,  672 => 210,  670 => 209,  663 => 207,  655 => 205,  651 => 204,  648 => 203,  639 => 201,  635 => 200,  629 => 199,  626 => 198,  623 => 197,  619 => 196,  616 => 195,  614 => 194,  611 => 193,  605 => 189,  597 => 186,  591 => 183,  588 => 182,  585 => 181,  582 => 180,  576 => 178,  568 => 176,  565 => 175,  563 => 174,  557 => 172,  553 => 171,  549 => 169,  547 => 168,  544 => 167,  538 => 164,  535 => 163,  533 => 162,  530 => 161,  524 => 157,  513 => 151,  500 => 149,  496 => 148,  493 => 147,  477 => 145,  475 => 144,  472 => 143,  464 => 141,  462 => 140,  456 => 138,  452 => 137,  448 => 135,  446 => 134,  443 => 133,  436 => 128,  422 => 127,  409 => 121,  400 => 120,  390 => 117,  383 => 116,  367 => 113,  364 => 112,  362 => 111,  358 => 109,  354 => 107,  348 => 106,  344 => 104,  340 => 102,  337 => 101,  333 => 100,  330 => 99,  327 => 98,  323 => 96,  315 => 94,  309 => 92,  307 => 91,  304 => 90,  302 => 89,  296 => 88,  291 => 85,  282 => 83,  273 => 82,  270 => 81,  259 => 79,  255 => 78,  242 => 76,  238 => 75,  231 => 73,  222 => 72,  219 => 71,  202 => 70,  198 => 68,  196 => 67,  193 => 66,  186 => 61,  177 => 57,  173 => 55,  165 => 53,  162 => 52,  156 => 51,  146 => 49,  143 => 48,  140 => 47,  135 => 46,  133 => 45,  130 => 44,  127 => 43,  109 => 41,  107 => 40,  100 => 38,  92 => 36,  88 => 35,  84 => 33,  82 => 32,  79 => 31,  68 => 29,  53 => 27,  51 => 26,  42 => 25,  38 => 24,  32 => 23,  27 => 21,  22 => 19,  19 => 18,);
    }
}
/* {% macro renderMultiLevelMenu(menu) %}*/
/*   {% for item in menu.subcategories %}*/
/*     {% set submenu = _self.renderMultiLevelMenu(item) %}*/
/*     <li>*/
/*       <a {% if item.href %} href="{{ item.href }}" {% if item.target %} {{ item.target }} {% endif %} {% endif %} class="{{ item.class }}">*/
/*         {{ item.name }}*/
/*         {% if item.subcategories | length > 0 %}*/
/*           <i class="menu-plus"></i>*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.subcategories | length > 0 %}*/
/*         <span class="mobile-plus">+</span>*/
/*         <ul> {{ submenu }}</ul>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <style>{{ color_styles | join(' ') }}</style>*/
/* */
/* <div class="mobile-trigger">{{ journal2.settings.get('mobile_menu_text') }}</div>*/
/* */
/* <ul class="super-menu mobile-menu menu-{{ display }}" style="table-layout: {{ table_css_style }}">*/
/*   {% for menu_item in menu_items %}*/
/*     <li id="{{ menu_item.id }}" class="{{ menu_item.type }} {{ menu_item.class }}">*/
/*       {% if menu_item.href %}*/
/*         <a href="{{ menu_item.href }}" {{ menu_item.target }}>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% else %}*/
/*         <a>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-categories' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }} {{ menu_item.show_class }}">*/
/*                 <div>*/
/*                   <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   <div>*/
/*                     {% if menu_item.show in ['image', 'both'] %}*/
/*                       <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     {% if menu_item.show in ['links', 'both'] %}*/
/*                       <ul>*/
/*                         {% set index = 0 %}*/
/*                         {% for sub2menu_item in submenu_item.items %}*/
/*                         {% if menu_item.limit and menu_item.limit > index %}*/
/*                           {% set index = index + 1 %}*/
/*                           <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                         {% if menu_item.limit and menu_item.limit <= index %}*/
/*                           <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                         {% endif %}*/
/*                       </ul>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-products' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for product in menu_item.items %}*/
/*               {% if menu_item.limit == 0 or (menu_item.limit > 0 and menu_item.limit >= loop.index) %}*/
/*                 <div class="mega-menu-item product-grid-item {{ menu_item.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                   <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                     <div class="image">*/
/*                       <a href="{{ product.href }}">*/
/*                         <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
/*                       </a>*/
/*                       {% for label, name in product.labels %}*/
/*                         <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                       {% endfor %}*/
/*                       {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="product-details">*/
/*                       <div class="caption">*/
/*                         <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                         {% if product.price %}*/
/*                           <div class="price">*/
/*                             {% if not product.special %}*/
/*                               {{ product.price }}*/
/*                             {% else %}*/
/*                               <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product.rating %}*/
/*                           <div class="rating">*/
/*                             {% for i in 1..5 %}*/
/*                               {% if product.rating < i %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% else %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       <div class="button-group">*/
/*                         {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                           <div class="cart enquiry-button">*/
/*                             <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                             <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-brands' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                     <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   {% endif %}*/
/*                   <div>*/
/*                     {% if submenu_item.show != 'text' %}*/
/*                       <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     <ul>*/
/*                       {% for sub2menu_item in submenu_item.items %}*/
/*                         <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                   </div>*/
/*                   <span class="clearfix"></span>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'drop-down' and menu_item.subcategories | length > 0 %}*/
/*         <ul>*/
/*           {{ _self.renderMultiLevelMenu(menu_item) }}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-html' %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for block in menu_item.html_blocks %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if block.title %}*/
/*                     {% if block.link %}*/
/*                       <h3><a href="{{ block.link }}">{{ block.title }}</a></h3>*/
/*                     {% else %}*/
/*                       <h3>{{ block.title }}</h3>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   {% if block.text %}*/
/*                     <div class="wrapper">*/
/*                       {{ block.text }}*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-mixed' and menu_item.mixed_columns %}*/
/*         <div class="mega-menu">*/
/*           {% for menu_column in menu_item.mixed_columns %}*/
/*             {% if menu_column.type == 'mega-menu-categories' and menu_column.items %}*/
/* */
/*               <div class="mega-menu-column mega-menu-categories {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }} {{ menu_column.show_class }}">*/
/*                       <div>*/
/*                         <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         <div>*/
/*                           {% if menu_column.show in ['image', 'both'] %}*/
/*                             <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           {% if menu_column.show in ['links', 'both'] %}*/
/*                             <ul>*/
/*                               {% set index = 0 %}*/
/*                               {% for sub2menu_item in submenu_item.items %}*/
/*                                 {% if menu_column.limit and menu_column.limit > index %}*/
/*                                   {% set index = index + 1 %}*/
/*                                   <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                               {% if menu_column.limit and menu_column.limit <= index %}*/
/*                                 <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                               {% endif %}*/
/*                             </ul>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-products' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-products {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for product in menu_column.items %}*/
/*                     {% if menu_column.limit == 0 or (menu_column.limit > 0 and menu_column.limit >= loop.index) %}*/
/*                       <div class="mega-menu-item product-grid-item {{ menu_column.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image">*/
/*                             <a href="{{ product.href }}">*/
/*                               <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
/*                             </a>*/
/*                             {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                             {% endfor %}*/
/*                             {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="product-details">*/
/*                             <div class="caption">*/
/*                               <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                               {% if product.price %}*/
/*                                 <div class="price">*/
/*                                   {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                   {% else %}*/
/*                                     <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               {% if product.rating %}*/
/*                                 <div class="rating">*/
/*                                   {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                   {% endfor %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             <div class="button-group">*/
/*                               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                 <div class="cart enquiry-button">*/
/*                                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                 </div>*/
/*                               {% else %}*/
/*                                 <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                   <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if menu_column.type == 'mega-menu-brands' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-brands {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }}">*/
/*                       <div>*/
/*                         {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                           <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         {% endif %}*/
/*                         <div>*/
/*                           {% if submenu_item.show != 'text' %}*/
/*                             <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           <ul>*/
/*                             {% for sub2menu_item in submenu_item.items %}*/
/*                               <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-html-block' %}*/
/*               <div class="mega-menu-column mega-menu-html mega-menu-html-block {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   <div class="wrapper">*/
/*                     {{ menu_column.html_text }}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <span class="mobile-plus">+</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
