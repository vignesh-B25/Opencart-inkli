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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_7c0c6505b1c90e3018d27aa031634b5dfe442fe09761d3bc9c37ee92603a00be extends Template
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
<div id=\"account-account\" class=\"container\">
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div class=\"row\">
  <h1>";
        // line 12
        yield ($context["text_my_account"] ?? null);
        yield "</h1>
  <div class=\"col-12 col-md-12  col-lg-3 text-center\" id=\"profile\" >
      <img src='https://img.freepik.com/premium-photo/cartoon-man-with-glasses-beard-blue-shirt-generative-ai_958165-24562.jpg?w=826' alt='myprofile'  class=\"img-fluid rounded-circle mb-3\">
      <h3>Name:vicky</h3>
      <h5>E-mail:vigneshbala2504@gmail.com</h5>
      </div>";
        // line 17
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col-12 col-md-12 col-lg-8\">";
        // line 18
        yield ($context["content_top"] ?? null);
        yield "
      <ul class=\"list-unstyled\">
       <h2>Account</h2><hr>
        <li><a href=\"";
        // line 21
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 22
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 23
        yield ($context["payment_method"] ?? null);
        yield "\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 24
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 25
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li><hr>
      </ul>
      <ul class=\"list-unstyled\">
      <h2>";
        // line 28
        yield ($context["text_my_orders"] ?? null);
        yield "</h2><hr>
        <li><a href=\"";
        // line 29
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 30
        yield ($context["subscription"] ?? null);
        yield "\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 31
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li><hr>
        ";
        // line 32
        if (($context["reward"] ?? null)) {
            // line 33
            yield "          <li><a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a></li><hr>
        ";
        }
        // line 35
        yield "        <li><a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li><hr>
        <li><a href=\"";
        // line 36
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a></li><hr>
      </ul>
      ";
        // line 38
        if (($context["affiliate"] ?? null)) {
            // line 39
            yield "        <ul class=\"list-unstyled\">
                <h2>";
            // line 40
            yield ($context["text_my_affiliate"] ?? null);
            yield "</h2><hr>

          ";
            // line 42
            if ( !($context["tracking"] ?? null)) {
                // line 43
                yield "            <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_add"] ?? null);
                yield "</a></li><hr>
          ";
            } else {
                // line 45
                yield "            <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_edit"] ?? null);
                yield "</a></li><hr>
            <li><a href=\"";
                // line 46
                yield ($context["tracking"] ?? null);
                yield "\">";
                yield ($context["text_tracking"] ?? null);
                yield "</a></li>
          ";
            }
            // line 48
            yield "        </ul>
      ";
        }
        // line 50
        yield "      <ul class=\"list-unstyled\">
            <h2>";
        // line 51
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2><hr>

          <li><a href=\"";
        // line 53
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li><hr>
      </ul>
      ";
        // line 55
        yield ($context["content_bottom"] ?? null);
        yield "</div>
      
    </div>
    ";
        // line 58
        yield ($context["column_right"] ?? null);
        yield "</div><br><br>

";
        // line 60
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
        return "catalog/view/template/account/account.twig";
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
        return array (  237 => 60,  232 => 58,  226 => 55,  219 => 53,  214 => 51,  211 => 50,  207 => 48,  200 => 46,  193 => 45,  185 => 43,  183 => 42,  178 => 40,  175 => 39,  173 => 38,  166 => 36,  159 => 35,  151 => 33,  149 => 32,  143 => 31,  137 => 30,  131 => 29,  127 => 28,  119 => 25,  113 => 24,  107 => 23,  101 => 22,  95 => 21,  89 => 18,  85 => 17,  77 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
       {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}</div>
  {% endif %}
  <div class=\"row\">
  <h1>{{text_my_account}}</h1>
  <div class=\"col-12 col-md-12  col-lg-3 text-center\" id=\"profile\" >
      <img src='https://img.freepik.com/premium-photo/cartoon-man-with-glasses-beard-blue-shirt-generative-ai_958165-24562.jpg?w=826' alt='myprofile'  class=\"img-fluid rounded-circle mb-3\">
      <h3>Name:vicky</h3>
      <h5>E-mail:vigneshbala2504@gmail.com</h5>
      </div>{{ column_left }}
    <div id=\"content\" class=\"col-12 col-md-12 col-lg-8\">{{ content_top }}
      <ul class=\"list-unstyled\">
       <h2>Account</h2><hr>
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li><hr>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li><hr>
        <li><a href=\"{{ payment_method }}\">{{ text_payment_method }}</a></li><hr>
        <li><a href=\"{{ address }}\">{{ text_address }}</a></li><hr>
        <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li><hr>
      </ul>
      <ul class=\"list-unstyled\">
      <h2>{{ text_my_orders }}</h2><hr>
        <li><a href=\"{{ order }}\">{{ text_order }}</a></li><hr>
        <li><a href=\"{{ subscription }}\">{{ text_subscription }}</a></li><hr>
        <li><a href=\"{{ download }}\">{{ text_download }}</a></li><hr>
        {% if reward %}
          <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li><hr>
        {% endif %}
        <li><a href=\"{{ return }}\">{{ text_return }}</a></li><hr>
        <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li><hr>
      </ul>
      {% if affiliate %}
        <ul class=\"list-unstyled\">
                <h2>{{ text_my_affiliate }}</h2><hr>

          {% if not tracking %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li><hr>
          {% else %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li><hr>
            <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
          {% endif %}
        </ul>
      {% endif %}
      <ul class=\"list-unstyled\">
            <h2>{{ text_my_newsletter }}</h2><hr>

          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li><hr>
      </ul>
      {{ content_bottom }}</div>
      
    </div>
    {{ column_right }}</div><br><br>

{{ footer }}
", "catalog/view/template/account/account.twig", "/var/www/html/opencart/upload/catalog/view/template/account/account.twig");
    }
}
