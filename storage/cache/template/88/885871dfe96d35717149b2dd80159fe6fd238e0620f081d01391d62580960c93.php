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

/* admin2504/view/template/common/footer.twig */
class __TwigTemplate_e161eaf24b125f3ae136f40d9e3857832ea0c8d8555a1cc9780cb3b44979a40c extends Template
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
        yield "<footer id=\"footer\">";
        yield ($context["text_footer"] ?? null);
        yield "<br/>";
        yield ($context["text_version"] ?? null);
        yield "</footer></div>
<script src=\"";
        // line 2
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
</body></html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin2504/view/template/common/footer.twig";
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
        return array (  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\">{{ text_footer }}<br/>{{ text_version }}</footer></div>
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
</body></html>
", "admin2504/view/template/common/footer.twig", "/var/www/html/opencart/upload/admin2504/view/template/common/footer.twig");
    }
}
