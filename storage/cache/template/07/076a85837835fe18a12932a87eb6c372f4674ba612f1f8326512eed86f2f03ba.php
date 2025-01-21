<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin2504/view/template/sale/order.twig */
class __TwigTemplate_42b283a530aadeb6380fd99fcb3a35700727c09e2f95b0c658948398fb1e920e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-order').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 7
        yield ($context["invoice"] ?? null);
        yield "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-print\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 8
        yield ($context["shipping"] ?? null);
        yield "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-truck\"></i></button>
        <a href=\"";
        // line 9
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-order\" formaction=\"";
        // line 10
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 24
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-order-id\" class=\"form-label\">";
        // line 28
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 29
        yield ($context["filter_order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 32
        yield ($context["entry_customer"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 33
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store\" class=\"form-label\">";
        // line 37
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 41
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 41);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 41) == ($context["filter_store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 41);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-order-status\" class=\"form-label\">";
        // line 46
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"0\"";
        // line 49
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_missing"] ?? null);
        yield "</option>
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 51
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 51);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 51) == ($context["filter_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 51);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-total\" class=\"form-label\">";
        // line 56
        yield ($context["entry_total"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_total\" value=\"";
        // line 57
        yield ($context["filter_total"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_total"] ?? null);
        yield "\" id=\"input-total\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 60
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 61
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 64
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 65
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 68
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 69
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 77
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"order\" class=\"card-body\">";
        // line 78
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#order').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#order').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' + filter_order_status_id;
    }

    var filter_total = \$('#input-total').val();

    if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=sale/order&user_token=";
        // line 136
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#order').load('index.php?route=sale/order.list&user_token=";
        // line 138
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 144
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
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
        \$('#input-customer').val(item['label']);
    }
});

\$('input[name^=\\'selected\\']').on('change', function() {
    \$('#button-shipping, #button-invoice').prop('disabled', true);

    var selected = \$('input[name^=\\'selected\\']:checked');

    if (selected.length) {
        \$('#button-invoice').prop('disabled', false);
    }

    for (i = 0; i < selected.length; i++) {
        if (\$(selected[i]).parent().find('input[name^=\\'shipping_method\\']').val()) {
            \$('#button-shipping').prop('disabled', false);
            break;
        }
    }
});

\$('#button-shipping, #button-invoice').prop('disabled', true);
//--></script>
";
        // line 180
        yield ($context["footer"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin2504/view/template/sale/order.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  380 => 180,  341 => 144,  332 => 138,  327 => 136,  266 => 78,  262 => 77,  251 => 69,  247 => 68,  239 => 65,  235 => 64,  227 => 61,  223 => 60,  215 => 57,  211 => 56,  206 => 53,  191 => 51,  187 => 50,  179 => 49,  173 => 46,  168 => 43,  153 => 41,  149 => 40,  143 => 37,  134 => 33,  130 => 32,  122 => 29,  118 => 28,  111 => 24,  102 => 17,  91 => 15,  87 => 14,  82 => 12,  73 => 10,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-order').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"{{ invoice }}\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_invoice_print }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-print\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"{{ shipping }}\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_shipping_print }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-truck\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-order\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-order-id\" class=\"form-label\">{{ entry_order_id }}</label>
                <input type=\"text\" name=\"filter_order_id\" value=\"{{ filter_order_id }}\" placeholder=\"{{ entry_order_id }}\" id=\"input-order-id\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_customer }}</label>
                <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store\" class=\"form-label\">{{ entry_store }}</label>
                <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for store in stores %}
                    <option value=\"{{ store.store_id }}\"{% if store.store_id == filter_store_id %} selected{% endif %}>{{ store.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-order-status\" class=\"form-label\">{{ entry_order_status }}</label>
                <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"0\"{% if filter_order_status_id == '0' %} selected{% endif %}>{{ text_missing }}</option>
                  {% for order_status in order_statuses %}
                    <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == filter_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-total\" class=\"form-label\">{{ entry_total }}</label>
                <input type=\"text\" name=\"filter_total\" value=\"{{ filter_total }}\" placeholder=\"{{ entry_total }}\" id=\"input-total\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"order\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#order').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#order').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' + filter_order_status_id;
    }

    var filter_total = \$('#input-total').val();

    if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    window.history.pushState({}, null, 'index.php?route=sale/order&user_token={{ user_token }}' + url);

    \$('#order').load('index.php?route=sale/order.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
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
        \$('#input-customer').val(item['label']);
    }
});

\$('input[name^=\\'selected\\']').on('change', function() {
    \$('#button-shipping, #button-invoice').prop('disabled', true);

    var selected = \$('input[name^=\\'selected\\']:checked');

    if (selected.length) {
        \$('#button-invoice').prop('disabled', false);
    }

    for (i = 0; i < selected.length; i++) {
        if (\$(selected[i]).parent().find('input[name^=\\'shipping_method\\']').val()) {
            \$('#button-shipping').prop('disabled', false);
            break;
        }
    }
});

\$('#button-shipping, #button-invoice').prop('disabled', true);
//--></script>
{{ footer }}
", "admin2504/view/template/sale/order.twig", "/var/www/html/opencart/upload/admin2504/view/template/sale/order.twig");
    }
}
