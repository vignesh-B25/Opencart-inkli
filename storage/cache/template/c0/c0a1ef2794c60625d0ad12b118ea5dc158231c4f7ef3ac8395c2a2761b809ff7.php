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

/* extension/opencart/catalog/view/template/module/account.twig */
class __TwigTemplate_be1d904e541583c3f4d063b8e5948b666a0060e5affae1c391abae5d5232ca03 extends Template
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
        yield "<div class=\"list-group mb-3\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            yield "    <a href=\"";
            yield ($context["login"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["forgotten"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a>
  ";
        }
        // line 5
        yield "  <a href=\"";
        yield ($context["account"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
  ";
        // line 6
        if (($context["logged"] ?? null)) {
            // line 7
            yield "    <a href=\"";
            yield ($context["edit"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_edit"] ?? null);
            yield "</a> <a href=\"";
            yield ($context["password"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_password"] ?? null);
            yield "</a>
  ";
        }
        // line 9
        yield "  <a href=\"";
        yield ($context["address"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_address"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["order"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_order"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["download"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_download"] ?? null);
        yield "</a><a href=\"";
        yield ($context["subscription"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["reward"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_reward"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["return"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_return"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["transaction"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a> <a href=\"";
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a>
  ";
        // line 10
        if (($context["logged"] ?? null)) {
            // line 11
            yield "    <a href=\"";
            yield ($context["logout"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a>
  ";
        }
        // line 13
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/account.twig";
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
        return array (  133 => 13,  125 => 11,  123 => 10,  84 => 9,  72 => 7,  70 => 6,  63 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list-group mb-3\">
  {% if not logged %}
    <a href=\"{{ login }}\" class=\"list-group-item\">{{ text_login }}</a> <a href=\"{{ register }}\" class=\"list-group-item\">{{ text_register }}</a> <a href=\"{{ forgotten }}\" class=\"list-group-item\">{{ text_forgotten }}</a>
  {% endif %}
  <a href=\"{{ account }}\" class=\"list-group-item\">{{ text_account }}</a>
  {% if logged %}
    <a href=\"{{ edit }}\" class=\"list-group-item\">{{ text_edit }}</a> <a href=\"{{ password }}\" class=\"list-group-item\">{{ text_password }}</a>
  {% endif %}
  <a href=\"{{ address }}\" class=\"list-group-item\">{{ text_address }}</a> <a href=\"{{ wishlist }}\" class=\"list-group-item\">{{ text_wishlist }}</a> <a href=\"{{ order }}\" class=\"list-group-item\">{{ text_order }}</a> <a href=\"{{ download }}\" class=\"list-group-item\">{{ text_download }}</a><a href=\"{{ subscription }}\" class=\"list-group-item\">{{ text_subscription }}</a> <a href=\"{{ reward }}\" class=\"list-group-item\">{{ text_reward }}</a> <a href=\"{{ return }}\" class=\"list-group-item\">{{ text_return }}</a> <a href=\"{{ transaction }}\" class=\"list-group-item\">{{ text_transaction }}</a> <a href=\"{{ newsletter }}\" class=\"list-group-item\">{{ text_newsletter }}</a>
  {% if logged %}
    <a href=\"{{ logout }}\" class=\"list-group-item\">{{ text_logout }}</a>
  {% endif %}
</div>
", "extension/opencart/catalog/view/template/module/account.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/account.twig");
    }
}
