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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_468e90c581271dc953f7e2b2541ab2e4cc9cc9f26e39c6cb9dc082b6eb1f68cf extends Template
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

<div id=\"common-home\" class=\"container\">

  <div class=\"row\">";
        // line 5
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 6
        yield ($context["content_top"] ?? null);
        yield "
    <div class=\"shop-product\">
";
        // line 8
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 9
        yield ($context["column_right"] ?? null);
        yield "</div>
    
</div>
    <style>
    @media (max-width:400px){
      .mb-3{
        max-width: 98%;
      }
      .mb-3 img{
        min-width: 300px;
      }
      .shop-product h3{
      margin: 2% 2% 2% 30%;
    }
    }

    .product-thumb p{
      display: none;
    }
    
    </style>

";
        // line 31
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/home.twig";
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
        return array (  87 => 31,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div id=\"common-home\" class=\"container\">

  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
    <div class=\"shop-product\">
{{ content_bottom }}</div>
    {{ column_right }}</div>
    
</div>
    <style>
    @media (max-width:400px){
      .mb-3{
        max-width: 98%;
      }
      .mb-3 img{
        min-width: 300px;
      }
      .shop-product h3{
      margin: 2% 2% 2% 30%;
    }
    }

    .product-thumb p{
      display: none;
    }
    
    </style>

{{ footer }}", "catalog/view/template/common/home.twig", "/var/www/html/opencart/upload/catalog/view/template/common/home.twig");
    }
}
