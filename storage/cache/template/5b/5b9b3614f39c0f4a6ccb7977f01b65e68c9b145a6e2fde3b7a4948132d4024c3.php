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

/* catalog/view/template/common/column_left.twig */
class __TwigTemplate_4570043de0016dbb894b20246b59f4edfd72f7c6cf42a62f3ad2e4205e47a6c3 extends Template
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
        if (($context["modules"] ?? null)) {
            // line 2
            yield "<aside id=\"column-left\" class=\"col-3 d-none d-md-block\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                yield "  ";
                yield $context["module"];
                yield "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            yield "</aside>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/column_left.twig";
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
        return array (  60 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if modules %}
<aside id=\"column-left\" class=\"col-3 d-none d-md-block\">
  {% for module in modules %}
  {{ module }}
  {% endfor %}
</aside>
{% endif %}
", "catalog/view/template/common/column_left.twig", "/var/www/html/opencart/upload/catalog/view/template/common/column_left.twig");
    }
}
