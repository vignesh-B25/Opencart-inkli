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

/* catalog/view/template/account/newsletter.twig */
class __TwigTemplate_131eec44fdcf664e61df9dfbbd9f3536de1bc94d77a858b71a95ba35de95a615 extends Template
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
<div id=\"account-newsletter\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form id=\"form-newsletter\" action=\"";
        // line 11
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 mb-0\">
            <label class=\"col-md-3 col-form-label\">";
        // line 14
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
            <div class=\"col-md-9\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 18
        if (($context["newsletter"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 25
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 28
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </div>
      </form>
      ";
        // line 32
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 34
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 36
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
        return "catalog/view/template/account/newsletter.twig";
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
        return array (  128 => 36,  123 => 34,  118 => 32,  111 => 28,  103 => 25,  91 => 18,  84 => 14,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-newsletter\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <form id=\"form-newsletter\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 mb-0\">
            <label class=\"col-md-3 col-form-label\">{{ entry_newsletter }}</label>
            <div class=\"col-md-9\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"{% if newsletter %} checked{% endif %}/>
              </div>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </div>
      </form>
      {{ content_bottom }}
    </div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/newsletter.twig", "/var/www/html/opencart/upload/catalog/view/template/account/newsletter.twig");
    }
}
