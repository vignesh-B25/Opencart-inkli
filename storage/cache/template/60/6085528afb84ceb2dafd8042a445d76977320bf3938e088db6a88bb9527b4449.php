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

/* catalog/view/template/account/payment_method_list.twig */
class __TwigTemplate_1b231f5349e440ac69661a40952d0ae75184e70314f38aa9caff0936f5733bca extends Template
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
        if (($context["payment_methods"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 3
                yield $context["payment_method"];
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 6
            yield "<p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/payment_method_list.twig";
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
        return array (  57 => 6,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if payment_methods %}
{% for payment_method in payment_methods %}
{{ payment_method }}
{% endfor %}
{% else %}
<p>{{ text_no_results }}</p>
{% endif %}", "catalog/view/template/account/payment_method_list.twig", "/var/www/html/opencart/upload/catalog/view/template/account/payment_method_list.twig");
    }
}
