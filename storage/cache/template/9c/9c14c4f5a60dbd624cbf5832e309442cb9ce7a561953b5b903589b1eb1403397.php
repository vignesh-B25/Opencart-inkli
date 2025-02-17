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

/* catalog/view/template/mail/register.twig */
class __TwigTemplate_406d29f7e4cccb07b10ef1b9ff112936a4f51542278f3176e626fb9c82b2ff8b extends Template
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
        yield ($context["text_welcome"] ?? null);
        yield "<br/>
<br/>
";
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            yield ($context["text_login"] ?? null);
            yield "<br/>
<br/>
";
            // line 6
            yield ($context["login"] ?? null);
            yield "<br/>
<br/>
";
            // line 8
            yield ($context["text_service"] ?? null);
            yield "<br/>
<br/>
";
            // line 10
            yield ($context["text_thanks"] ?? null);
            yield "<br/>
";
            // line 11
            yield ($context["store"] ?? null);
            yield "<br/>
";
            // line 12
            yield ($context["store_url"] ?? null);
            yield "
";
        } else {
            // line 14
            yield ($context["text_approval"] ?? null);
            yield "<br/>
<br/>
";
            // line 16
            yield ($context["login"] ?? null);
            yield "<br/>
<br/>
";
            // line 18
            yield ($context["text_thanks"] ?? null);
            yield "<br/>
";
            // line 19
            yield ($context["store"] ?? null);
            yield "<br/>
";
            // line 20
            yield ($context["store_url"] ?? null);
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/mail/register.twig";
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
        return array (  95 => 20,  91 => 19,  87 => 18,  82 => 16,  77 => 14,  72 => 12,  68 => 11,  64 => 10,  59 => 8,  54 => 6,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ text_welcome }}<br/>
<br/>
{% if not approval %}
{{ text_login }}<br/>
<br/>
{{ login }}<br/>
<br/>
{{ text_service }}<br/>
<br/>
{{ text_thanks }}<br/>
{{ store }}<br/>
{{ store_url }}
{% else %}
{{ text_approval }}<br/>
<br/>
{{ login }}<br/>
<br/>
{{ text_thanks }}<br/>
{{ store }}<br/>
{{ store_url }}
{% endif %}", "catalog/view/template/mail/register.twig", "/var/www/html/opencart/upload/catalog/view/template/mail/register.twig");
    }
}
