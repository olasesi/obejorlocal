<?php

/* customer/customer_list.twig */
class __TwigTemplate_95f728d015156659647a24b94453662dfb602560d8f871f0784d101ab45f0cd4 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 36
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 40
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 41
        echo (isset($context["filter_email"]) ? $context["filter_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 44
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 48
            echo "                ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["filter_customer_group_id"]) ? $context["filter_customer_group_id"] : null))) {
                // line 49
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            } else {
                // line 51
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 57
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 60
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 61
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 63
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 65
        echo "                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 66
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 68
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 70
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 73
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 74
        echo (isset($context["filter_ip"]) ? $context["filter_ip"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" id=\"input-ip\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 77
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 79
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 86
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 94
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 98
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 103
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 104
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.email")) {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 105
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer_group")) {
            echo "<a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 106
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 107
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.ip")) {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 108
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.date_added")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 109
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 113
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 114
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 115
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 116
                if (twig_in_filter($this->getAttribute($context["customer"], "customer_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 117
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 119
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\" />
                      ";
                }
                // line 121
                echo "                    </td>
                      <td class=\"text-left\">";
                // line 122
                echo $this->getAttribute($context["customer"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 123
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 124
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 125
                echo $this->getAttribute($context["customer"], "status", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 126
                echo $this->getAttribute($context["customer"], "ip", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 127
                echo $this->getAttribute($context["customer"], "date_added", array());
                echo "</td>
                    <td class=\"text-right\">
                      <div class=\"btn-group\" style=\"min-width: 65px;\">
                        <a href=\"";
                // line 130
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li class=\"dropdown-header\">";
                // line 133
                echo (isset($context["text_option"]) ? $context["text_option"] : null);
                echo "</li>
                          ";
                // line 134
                if ($this->getAttribute($context["customer"], "unlock", array())) {
                    // line 135
                    echo "                          <li><a href=\"";
                    echo $this->getAttribute($context["customer"], "unlock", array());
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a></li>
                          ";
                } else {
                    // line 137
                    echo "                          <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a></li>
                          ";
                }
                // line 139
                echo "                          <li role=\"separator\" class=\"divider\"></li>
                          <li class=\"dropdown-header\">";
                // line 140
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</li>
                          ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["customer"], "store", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 142
                    echo "                          <li><a href=\"";
                    echo $this->getAttribute($context["store"], "href", array());
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</a></li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                        </ul>
                      </div>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                  ";
        } else {
            // line 150
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 151
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 154
        echo "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 159
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 160
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=customer/customer&user_token=";
        // line 187
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }
    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = \$('input[name=\\'filter_ip\\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 219
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 238
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 257
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });
  //--></script>
</div>
";
        // line 262
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 262,  623 => 257,  601 => 238,  579 => 219,  544 => 187,  514 => 160,  510 => 159,  503 => 154,  497 => 151,  494 => 150,  491 => 149,  481 => 144,  470 => 142,  466 => 141,  462 => 140,  459 => 139,  453 => 137,  445 => 135,  443 => 134,  439 => 133,  431 => 130,  425 => 127,  421 => 126,  417 => 125,  413 => 124,  409 => 123,  405 => 122,  402 => 121,  396 => 119,  390 => 117,  388 => 116,  385 => 115,  380 => 114,  378 => 113,  371 => 109,  353 => 108,  335 => 107,  317 => 106,  299 => 105,  281 => 104,  263 => 103,  255 => 98,  248 => 94,  237 => 86,  225 => 79,  220 => 77,  212 => 74,  208 => 73,  203 => 70,  197 => 68,  191 => 66,  188 => 65,  182 => 63,  176 => 61,  174 => 60,  168 => 57,  163 => 54,  157 => 53,  149 => 51,  141 => 49,  138 => 48,  134 => 47,  128 => 44,  120 => 41,  116 => 40,  108 => 37,  104 => 36,  97 => 32,  91 => 28,  83 => 24,  80 => 23,  72 => 19,  70 => 18,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-customer').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-customer" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*               <input type="text" name="filter_email" value="{{ filter_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*               <select name="filter_customer_group_id" id="input-customer-group" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% for customer_group in customer_groups %}*/
/*                 {% if customer_group.customer_group_id == filter_customer_group_id %}*/
/*                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-ip">{{ entry_ip }}</label>*/
/*               <input type="text" name="filter_ip" value="{{ filter_ip }}" placeholder="{{ entry_ip }}" id="input-ip" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="table-responsive">*/
/*               <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-customer">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">{% if sort == 'name' %}<a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>{% else %}<a href="{{ sort_name }}">{{ column_name }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.email' %}<a href="{{ sort_email }}" class="{{ order|lower }}">{{ column_email }}</a>{% else %}<a href="{{ sort_email }}">{{ column_email }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'customer_group' %}<a href="{{ sort_customer_group }}" class="{{ order|lower }}">{{ column_customer_group }}</a> {% else %} <a href="{{ sort_customer_group }}">{{ column_customer_group }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.ip' %}<a href="{{ sort_ip }}" class="{{ order|lower }}">{{ column_ip }}</a>{% else %}<a href="{{ sort_ip }}">{{ column_ip }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.date_added' %}<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>{% else %}<a href="{{ sort_date_added }}">{{ column_date_added }}</a>{% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% if customers %}*/
/*                   {% for customer in customers %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if customer.customer_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}" />*/
/*                       {% endif %}*/
/*                     </td>*/
/*                       <td class="text-left">{{ customer.name }}</td>*/
/*                     <td class="text-left">{{ customer.email }}</td>*/
/*                     <td class="text-left">{{ customer.customer_group }}</td>*/
/*                     <td class="text-left">{{ customer.status }}</td>*/
/*                     <td class="text-left">{{ customer.ip }}</td>*/
/*                     <td class="text-left">{{ customer.date_added }}</td>*/
/*                     <td class="text-right">*/
/*                       <div class="btn-group" style="min-width: 65px;">*/
/*                         <a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                         <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                           <li class="dropdown-header">{{ text_option }}</li>*/
/*                           {% if customer.unlock %}*/
/*                           <li><a href="{{ customer.unlock }}"><i class="fa fa-unlock"></i> {{ text_unlock }}</a></li>*/
/*                           {% else %}*/
/*                           <li class="disabled"><a><i class="fa fa-unlock"></i> {{ text_unlock }}</a></li>*/
/*                           {% endif %}*/
/*                           <li role="separator" class="divider"></li>*/
/*                           <li class="dropdown-header">{{ text_login }}</li>*/
/*                           {% for store in customer.store %}*/
/*                           <li><a href="{{ store.href }}" target="_blank"><i class="fa fa-lock"></i> {{ store.name }}</a></li>*/
/*                           {% endfor %}*/
/*                         </ul>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*   $('.table-responsive').on('shown.bs.dropdown', function (e) {*/
/*     var t = $(this),*/
/*       m = $(e.target).find('.dropdown-menu'),*/
/*       tb = t.offset().top + t.height(),*/
/*       mb = m.offset().top + m.outerHeight(true),*/
/*       d = 20;*/
/*     if (t[0].scrollWidth > t.innerWidth()) {*/
/*       if (mb + d > tb) {*/
/*         t.css('padding-bottom', ((mb + d) - tb));*/
/*       }*/
/*     } else {*/
/*       t.css('overflow', 'visible');*/
/*     }*/
/*   }).on('hidden.bs.dropdown', function () {*/
/*     $(this).css({'padding-bottom': '', 'overflow': ''});*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('#button-filter').on('click', function() {*/
/*     url = 'index.php?route=customer/customer&user_token={{ user_token }}';*/
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/*     if (filter_name) {*/
/*       url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/*     var filter_email = $('input[name=\'filter_email\']').val();*/
/*     if (filter_email) {*/
/*       url += '&filter_email=' + encodeURIComponent(filter_email);*/
/*     }*/
/*     var filter_customer_group_id = $('select[name=\'filter_customer_group_id\']').val();*/
/*     if (filter_customer_group_id !== '') {*/
/*       url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);*/
/*     }*/
/*     var filter_status = $('select[name=\'filter_status\']').val();*/
/*     if (filter_status !== '') {*/
/*       url += '&filter_status=' + encodeURIComponent(filter_status); */
/*     }*/
/*     var filter_ip = $('input[name=\'filter_ip\']').val();*/
/*     if (filter_ip) {*/
/*       url += '&filter_ip=' + encodeURIComponent(filter_ip);*/
/*     }*/
/*     var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/*     if (filter_date_added) {*/
/*       url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*     }*/
/*     location = url;*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('input[name=\'filter_name\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_name\']').val(item['label']);*/
/*     }*/
/*   });*/
/*   $('input[name=\'filter_email\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_email=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['email'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_email\']').val(item['label']);*/
/*     }*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
