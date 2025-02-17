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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_570169d6a00b47d0189b9ce798979018fccbb4da58b400eb26f85640f0e576c3 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
      <div class=\"row\">
        ";
        // line 12
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 13
            yield "          <div class=\"col-md-7 mb-3\">
            ";
            // line 14
            if (($context["register"] ?? null)) {
                // line 15
                yield "              <div id=\"checkout-register\">";
                yield ($context["register"] ?? null);
                yield "</div>
            ";
            }
            // line 17
            yield "            ";
            if (($context["payment_address"] ?? null)) {
                // line 18
                yield "              <div id=\"checkout-payment-address\">";
                yield ($context["payment_address"] ?? null);
                yield "</div>
            ";
            }
            // line 20
            yield "            ";
            if (($context["shipping_address"] ?? null)) {
                // line 21
                yield "              <div id=\"checkout-shipping-address\">";
                yield ($context["shipping_address"] ?? null);
                yield "</div>
            ";
            }
            // line 23
            yield "            ";
            // line 24
            yield "            <div class='shpy-mth'>
               ";
            // line 25
            if (($context["shipping_method"] ?? null)) {
                // line 26
                yield "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
                yield ($context["shipping_method"] ?? null);
                yield "</div>
          ";
            }
            // line 28
            yield "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
            yield ($context["payment_method"] ?? null);
            yield "</div>
   <div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>Enter your thoughts on delivery</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">";
            // line 31
            yield ($context["comment"] ?? null);
            yield "</textarea>
</div>
          </div>
          </div>
        ";
        }
        // line 36
        yield "        <div class=\"col\">
          ";
        // line 41
        yield "          <div id=\"checkout-confirm\">";
        yield ($context["confirm"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
    ";
        // line 45
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
  ";
        // line 47
        yield ($context["column_right"] ?? null);
        yield "
</div>
";
        // line 49
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
        return "catalog/view/template/checkout/checkout.twig";
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
        return array (  159 => 49,  154 => 47,  149 => 45,  141 => 41,  138 => 36,  130 => 31,  123 => 28,  117 => 26,  115 => 25,  112 => 24,  110 => 23,  104 => 21,  101 => 20,  95 => 18,  92 => 17,  86 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"row\">
        {% if register or payment_address or shipping_address %}
          <div class=\"col-md-7 mb-3\">
            {% if register %}
              <div id=\"checkout-register\">{{ register }}</div>
            {% endif %}
            {% if payment_address %}
              <div id=\"checkout-payment-address\">{{ payment_address }}</div>
            {% endif %}
            {% if shipping_address %}
              <div id=\"checkout-shipping-address\">{{ shipping_address }}</div>
            {% endif %}
            {# adding shipping and payment method here #}
            <div class='shpy-mth'>
               {% if shipping_method %}
            <div id=\"checkout-shipping-method\" class=\"mb-3\">{{ shipping_method }}</div>
          {% endif %}
          <div id=\"checkout-payment-method\" class=\"mb-4\">{{ payment_method }}</div>
   <div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>Enter your thoughts on delivery</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
</div>
          </div>
          </div>
        {% endif %}
        <div class=\"col\">
          {# {% if shipping_method %}
            <div id=\"checkout-shipping-method\" class=\"mb-3\">{{ shipping_method }}</div>
          {% endif %}
          <div id=\"checkout-payment-method\" class=\"mb-4\">{{ payment_method }}</div> #}
          <div id=\"checkout-confirm\">{{ confirm }}</div>
        </div>
      </div>
    </div>
    {{ content_bottom }}
  </div>
  {{ column_right }}
</div>
{{ footer }}
", "catalog/view/template/checkout/checkout.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/checkout.twig");
    }
}
