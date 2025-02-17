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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_f6fd2cd65ca21b54169538ee915eef45af1353f41d080c509dc490dc83bbd382 extends Template
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
        yield "
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 11
        yield "  ";
        if (($context["error_warning"] ?? null)) {
            // line 12
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 15
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row\">
        <div class=\"col mb-3\">
          <div class=\"border rounded p-3 d-flex flex-column h-100\">
            <h2>";
        // line 19
        yield ($context["text_new_customer"] ?? null);
        yield "</h2>
            <p><strong>";
        // line 20
        yield ($context["text_register"] ?? null);
        yield "</strong></p>
            <p>";
        // line 21
        yield ($context["text_register_account"] ?? null);
        yield "</p>
            <div class=\"text-end\">
              <a href=\"";
        // line 23
        yield ($context["register"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a>
            </div>
          </div>
        </div>
        <div class=\"col mb-3\">
          <div class=\"border rounded p-3 d-flex flex-column h-100\">
            <form id=\"form-login\" action=\"";
        // line 29
        yield ($context["login"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
              <h2>";
        // line 30
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
              <p><strong>";
        // line 31
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</strong></p>
              <div class=\"mb-3\">
                <label for=\"input-email\" class=\"col-form-label\">";
        // line 33
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 34
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"col-form-label\">";
        // line 37
        yield ($context["entry_password"] ?? null);
        yield "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 38
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control mb-1\"/>
                <a href=\"";
        // line 39
        yield ($context["forgotten"] ?? null);
        yield "\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
              </div>
              ";
        // line 41
        if (($context["redirect"] ?? null)) {
            // line 42
            yield "                <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\"/>
              ";
        }
        // line 44
        yield "              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 45
        yield ($context["button_login"] ?? null);
        yield "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      ";
        // line 51
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 52
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 54
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
        return "catalog/view/template/account/login.twig";
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
        return array (  190 => 54,  185 => 52,  181 => 51,  172 => 45,  169 => 44,  163 => 42,  161 => 41,  154 => 39,  148 => 38,  144 => 37,  136 => 34,  132 => 33,  127 => 31,  123 => 30,  119 => 29,  108 => 23,  103 => 21,  99 => 20,  95 => 19,  88 => 15,  83 => 14,  77 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <div class=\"row\">
        <div class=\"col mb-3\">
          <div class=\"border rounded p-3 d-flex flex-column h-100\">
            <h2>{{ text_new_customer }}</h2>
            <p><strong>{{ text_register }}</strong></p>
            <p>{{ text_register_account }}</p>
            <div class=\"text-end\">
              <a href=\"{{ register }}\" class=\"btn btn-primary\">{{ button_continue }}</a>
            </div>
          </div>
        </div>
        <div class=\"col mb-3\">
          <div class=\"border rounded p-3 d-flex flex-column h-100\">
            <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\">
              <h2>{{ text_returning_customer }}</h2>
              <p><strong>{{ text_i_am_returning_customer }}</strong></p>
              <div class=\"mb-3\">
                <label for=\"input-email\" class=\"col-form-label\">{{ entry_email }}</label>
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"col-form-label\">{{ entry_password }}</label>
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control mb-1\"/>
                <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a>
              </div>
              {% if redirect %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
              {% endif %}
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\">{{ button_login }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/login.twig", "/var/www/html/opencart/upload/catalog/view/template/account/login.twig");
    }
}
