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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_50abdbd129ebca441b40db5879578a3eee5bb265c20b269d4909d9d40371d990 extends Template
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
        yield "
<div class=\"contents\">
<p><strong>Nike Shoes</strong></p>
<h1><stong>GET COMFORTABLE WITH WINNING</strong></h1>
<p><strong>Win the world with us</strong></p>

<button>Get Items</button>
</div><h3>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h3>
<div id='prd'class=\"row";
        // line 9
        if ((($context["axis"] ?? null) == "horizontal")) {
            yield " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        yield "\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "    <div class=\"col mb-3\" >";
            yield $context["product"];
            yield "
    <style>
    .product-thumb .button-group{
      display: none;
    }
    #prd{
      flex-wrap: nowrap;
      min-height: max-content;
      margin-bottom: 5px;
      overflow: scroll;
    }
   
    
    .product-thumb {
  /* min-width: 400px !important; */
   
}
    .product-thumb:hover {
      scale: 1;

  z-index: none;
    }

.product-thumb .image {
  min-width: 300px !important;
  min-height: 200px !important;
}
.product-thumb .image img{
  min-height: 200px ;
  padding: 20px ;
}
.product-thumb h4{
  color: black !important;
}
    </style>
    </div>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
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
        return array (  110 => 49,  65 => 11,  61 => 10,  55 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"contents\">
<p><strong>Nike Shoes</strong></p>
<h1><stong>GET COMFORTABLE WITH WINNING</strong></h1>
<p><strong>Win the world with us</strong></p>

<button>Get Items</button>
</div><h3>{{ heading_title }}</h3>
<div id='prd'class=\"row{% if axis == 'horizontal' %} row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4{% endif %}\">
  {% for product in products %}
    <div class=\"col mb-3\" >{{ product }}
    <style>
    .product-thumb .button-group{
      display: none;
    }
    #prd{
      flex-wrap: nowrap;
      min-height: max-content;
      margin-bottom: 5px;
      overflow: scroll;
    }
   
    
    .product-thumb {
  /* min-width: 400px !important; */
   
}
    .product-thumb:hover {
      scale: 1;

  z-index: none;
    }

.product-thumb .image {
  min-width: 300px !important;
  min-height: 200px !important;
}
.product-thumb .image img{
  min-height: 200px ;
  padding: 20px ;
}
.product-thumb h4{
  color: black !important;
}
    </style>
    </div>
    
  {% endfor %}
</div>
", "extension/opencart/catalog/view/template/module/featured.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/featured.twig");
    }
}
