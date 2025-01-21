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

/* admin2504/view/template/catalog/filter_form.twig */
class __TwigTemplate_efc0d199c048e3d4c868c422cde064671cd6bfa5b9ab966feb9d50faa76aa45f extends Template
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
        <button type=\"submit\" form=\"form-filter\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-filter\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 25
            yield "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 26);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 26);
            yield "\"/></div>
                  <input type=\"text\" name=\"filter_description[";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "][name]\" value=\"";
            yield (((($__internal_compile_0 = ($context["filter_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["filter_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null), "name", [], "any", false, false, false, 27)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "\" class=\"form-control\"/>
                </div>
                <div id=\"error-name-";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "\" class=\"invalid-feedback\"></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-filter-group\" class=\"col-sm-2 col-form-label\">";
        // line 34
        yield ($context["entry_filter_group"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"filter_group_id\" id=\"input-filter-group\" class=\"form-select\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 38
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 38);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 38) == ($context["filter_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 38);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </select>
              <div id=\"error-filter-group\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 45
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 47
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
          <input type=\"hidden\" name=\"filter_id\" value=\"";
        // line 50
        yield ($context["filter_id"] ?? null);
        yield "\" id=\"input-filter-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin2504/view/template/catalog/filter_form.twig";
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
        return array (  194 => 56,  185 => 50,  177 => 47,  172 => 45,  165 => 40,  150 => 38,  146 => 37,  140 => 34,  135 => 31,  127 => 29,  116 => 27,  110 => 26,  107 => 25,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-filter\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-filter\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              {% for language in languages %}
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                  <input type=\"text\" name=\"filter_description[{{ language.language_id }}][name]\" value=\"{{ filter_description[language.language_id] ? filter_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                </div>
                <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
              {% endfor %}
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-filter-group\" class=\"col-sm-2 col-form-label\">{{ entry_filter_group }}</label>
            <div class=\"col-sm-10\">
              <select name=\"filter_group_id\" id=\"input-filter-group\" class=\"form-select\">
                {% for filter_group in filter_groups %}
                  <option value=\"{{ filter_group.filter_group_id }}\"{% if filter_group.filter_group_id == filter_group_id %} selected{% endif %}>{{ filter_group.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-filter-group\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
          <input type=\"hidden\" name=\"filter_id\" value=\"{{ filter_id }}\" id=\"input-filter-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}", "admin2504/view/template/catalog/filter_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/catalog/filter_form.twig");
    }
}
