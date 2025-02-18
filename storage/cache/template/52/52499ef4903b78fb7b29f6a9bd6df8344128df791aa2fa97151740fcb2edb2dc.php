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

/* extension/opencart/catalog/view/template/module/html.twig */
class __TwigTemplate_ea53bba3a1e134a8119e122c3d3999ae982930667c52d13fdbf3fcc8c0cea57c extends Template
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
        // line 8
        yield "<head>

</head>

<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
  <div class=\"accordion-item\">
  ";
        // line 14
        if (($context["heading_title"] ?? null)) {
            // line 15
            yield "    <h2 class=\"accordion-header\" id=\"flush-headingOne\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" 
\t  aria-controls=\"flush-collapseOne\">
     ";
            // line 18
            yield ($context["heading_title"] ?? null);
            yield "
      </button>
    </h2>
\t";
        }
        // line 22
        yield "    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">";
        // line 23
        yield ($context["html"] ?? null);
        yield "</div>
    </div>
  </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/html.twig";
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
        return array (  67 => 23,  64 => 22,  57 => 18,  52 => 15,  50 => 14,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# <div>
\t{% if heading_title %}
\t
\t\t<h2>{{ heading_title }}978897987879</h2>
\t{% endif %}
\t{{ html }}
</div> #}
<head>

</head>

<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
  <div class=\"accordion-item\">
  {% if  heading_title %}
    <h2 class=\"accordion-header\" id=\"flush-headingOne\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" 
\t  aria-controls=\"flush-collapseOne\">
     {{heading_title}}
      </button>
    </h2>
\t{% endif %}
    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">{{html}}</div>
    </div>
  </div>
</div>", "extension/opencart/catalog/view/template/module/html.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/html.twig");
    }
}
