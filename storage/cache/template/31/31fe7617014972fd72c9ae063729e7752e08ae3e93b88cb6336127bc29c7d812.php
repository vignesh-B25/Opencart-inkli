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

/* admin2504/view/template/catalog/review_form.twig */
class __TwigTemplate_4fdb3411bd21de3e61d41b015db1f048a23bb7af1423890d997692efaf32c10f extends Template
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
        <button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-review\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-author\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_author"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 24
        yield ($context["author"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_author"] ?? null);
        yield "\" id=\"input-author\" class=\"form-control\"/>
              <div id=\"error-author\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 31
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 32
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-text\">";
        // line 34
        yield ($context["help_product"] ?? null);
        yield "</div>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-text\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_text"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" rows=\"8\" placeholder=\"";
        // line 41
        yield ($context["entry_text"] ?? null);
        yield "\" id=\"input-text\" class=\"form-control\">";
        yield ($context["text"] ?? null);
        yield "</textarea>
              <div id=\"error-text\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-rating\" class=\"col-sm-2 col-form-label\">";
        // line 46
        yield ($context["entry_rating"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-rating\">
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"1\" id=\"input-rating-1\" class=\"form-check-input\"";
        // line 50
        if ((($context["rating"] ?? null) == 1)) {
            yield " checked";
        }
        yield "/> <label for=\"input-rating-1\" class=\"form-check-label\">1</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"2\" id=\"input-rating-2\" class=\"form-check-input\"";
        // line 53
        if ((($context["rating"] ?? null) == 2)) {
            yield " checked";
        }
        yield "/> <label for=\"input-rating-2\" class=\"form-check-label\">2</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"3\" id=\"input-rating-3\" class=\"form-check-input\"";
        // line 56
        if ((($context["rating"] ?? null) == 3)) {
            yield " checked";
        }
        yield "/> <label for=\"input-rating-3\" class=\"form-check-label\">3</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"4\" id=\"input-rating-4\" class=\"form-check-input\"";
        // line 59
        if ((($context["rating"] ?? null) == 4)) {
            yield " checked";
        }
        yield "/> <label for=\"input-rating-4\" class=\"form-check-label\">4</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"5\" id=\"input-rating-5\" class=\"form-check-input\"";
        // line 62
        if ((($context["rating"] ?? null) == 5)) {
            yield " checked";
        }
        yield "/> <label for=\"input-rating-5\" class=\"form-check-label\">5</label>
                </div>
              </div>
              <div id=\"error-rating\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-added\" class=\"col-sm-2 col-form-label\">";
        // line 69
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
            <div class=\"col-sm-10 col-md-4\">
              <input type=\"datetime-local\" name=\"date_added\" value=\"";
        // line 71
        yield ($context["date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" id=\"input-date-added\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 75
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 79
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"review_id\" value=\"";
        // line 83
        yield ($context["review_id"] ?? null);
        yield "\" id=\"input-review-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 93
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val(item['label']);
        \$('#input-product-id').val(item['value']);
    }
});
//--></script>
";
        // line 111
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
        return "admin2504/view/template/catalog/review_form.twig";
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
        return array (  269 => 111,  248 => 93,  235 => 83,  226 => 79,  219 => 75,  210 => 71,  205 => 69,  193 => 62,  185 => 59,  177 => 56,  169 => 53,  161 => 50,  154 => 46,  144 => 41,  139 => 39,  131 => 34,  126 => 32,  120 => 31,  115 => 29,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-review\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-review\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-author\" class=\"col-sm-2 col-form-label\">{{ entry_author }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"{{ author }}\" placeholder=\"{{ entry_author }}\" id=\"input-author\" class=\"form-control\"/>
              <div id=\"error-author\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_product }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"{{ product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-text\">{{ help_product }}</div>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-text\" class=\"col-sm-2 col-form-label\">{{ entry_text }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" rows=\"8\" placeholder=\"{{ entry_text }}\" id=\"input-text\" class=\"form-control\">{{ text }}</textarea>
              <div id=\"error-text\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-rating\" class=\"col-sm-2 col-form-label\">{{ entry_rating }}</label>
            <div class=\"col-sm-10\">
              <div id=\"input-rating\">
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"1\" id=\"input-rating-1\" class=\"form-check-input\"{% if rating == 1 %} checked{% endif %}/> <label for=\"input-rating-1\" class=\"form-check-label\">1</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"2\" id=\"input-rating-2\" class=\"form-check-input\"{% if rating == 2 %} checked{% endif %}/> <label for=\"input-rating-2\" class=\"form-check-label\">2</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"3\" id=\"input-rating-3\" class=\"form-check-input\"{% if rating == 3 %} checked{% endif %}/> <label for=\"input-rating-3\" class=\"form-check-label\">3</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"4\" id=\"input-rating-4\" class=\"form-check-input\"{% if rating == 4 %} checked{% endif %}/> <label for=\"input-rating-4\" class=\"form-check-label\">4</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <input type=\"radio\" name=\"rating\" value=\"5\" id=\"input-rating-5\" class=\"form-check-input\"{% if rating == 5 %} checked{% endif %}/> <label for=\"input-rating-5\" class=\"form-check-label\">5</label>
                </div>
              </div>
              <div id=\"error-rating\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-added\" class=\"col-sm-2 col-form-label\">{{ entry_date_added }}</label>
            <div class=\"col-sm-10 col-md-4\">
              <input type=\"datetime-local\" name=\"date_added\" value=\"{{ date_added }}\" placeholder=\"{{ entry_date_added }}\" id=\"input-date-added\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"review_id\" value=\"{{ review_id }}\" id=\"input-review-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val(item['label']);
        \$('#input-product-id').val(item['value']);
    }
});
//--></script>
{{ footer }}
", "admin2504/view/template/catalog/review_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/catalog/review_form.twig");
    }
}
