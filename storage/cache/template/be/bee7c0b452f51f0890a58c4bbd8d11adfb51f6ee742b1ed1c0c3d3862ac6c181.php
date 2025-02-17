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

/* admin2504/view/template/design/seo_url_form.twig */
class __TwigTemplate_e8e99b6917eb879d4126626d1de2a5ddbe9a8956f485dd4f434f176184474ad8 extends Template
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
        <button type=\"submit\" form=\"form-seo-url\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
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
        <form id=\"form-seo-url\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_store"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 26
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 26);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 32
        yield ($context["entry_language"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 36
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 36);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 42
        yield ($context["entry_key"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"key\" value=\"";
        // line 44
        yield ($context["key"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_key"] ?? null);
        yield "\" id=\"input-key\" class=\"form-control\"/>
              <div id=\"error-key\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 49
        yield ($context["entry_value"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 51
        yield ($context["value"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\"/>
              <div id=\"error-value\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 56
        yield ($context["entry_keyword"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"keyword\" value=\"";
        // line 58
        yield ($context["keyword"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_keyword"] ?? null);
        yield "\" id=\"input-keyword\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 59
        yield ($context["help_keyword"] ?? null);
        yield "</div>
              <div id=\"error-keyword\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 66
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 67
        yield ($context["help_sort_order"] ?? null);
        yield "</div>
            </div>
          </div>
          <input type=\"hidden\" name=\"seo_url_id\" value=\"";
        // line 70
        yield ($context["seo_url_id"] ?? null);
        yield "\" id=\"input-seo-url-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 76
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
        return "admin2504/view/template/design/seo_url_form.twig";
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
        return array (  235 => 76,  226 => 70,  220 => 67,  214 => 66,  209 => 64,  201 => 59,  195 => 58,  190 => 56,  180 => 51,  175 => 49,  165 => 44,  160 => 42,  154 => 38,  139 => 36,  135 => 35,  129 => 32,  123 => 28,  108 => 26,  104 => 25,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-seo-url\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-seo-url\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                {% for language in languages %}
                  <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">{{ entry_key }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"key\" value=\"{{ key }}\" placeholder=\"{{ entry_key }}\" id=\"input-key\" class=\"form-control\"/>
              <div id=\"error-key\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">{{ entry_value }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"{{ value }}\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\"/>
              <div id=\"error-value\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-keyword\" class=\"col-sm-2 col-form-label\">{{ entry_keyword }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"keyword\" value=\"{{ keyword }}\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_keyword }}</div>
              <div id=\"error-keyword\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_sort_order }}</div>
            </div>
          </div>
          <input type=\"hidden\" name=\"seo_url_id\" value=\"{{ seo_url_id }}\" id=\"input-seo-url-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "admin2504/view/template/design/seo_url_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/design/seo_url_form.twig");
    }
}
