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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_0c885e19ba12918cc9dd9aa40029c841a47fbbbae1c362faac2f9ffb2c871c48 extends Template
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
        yield "<form action=\"";
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"input-group mb-3\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" class=\"form-control form-control-lg\"/>
\t<button type=\"submit\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/search.twig";
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
        return array (  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ action }}\" method=\"post\" class=\"input-group mb-3\">
\t<input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" class=\"form-control form-control-lg\"/>
\t<button type=\"submit\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</form>
", "catalog/view/template/common/search.twig", "/var/www/html/opencart/upload/catalog/view/template/common/search.twig");
    }
}
