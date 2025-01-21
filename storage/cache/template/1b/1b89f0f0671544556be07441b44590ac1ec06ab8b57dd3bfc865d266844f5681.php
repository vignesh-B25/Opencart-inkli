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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_5f644c49dacc43664a5cee8cea1c5474b0501b925c5b4adda87e3750e7b699dc extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            yield "  <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg \">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">";
            // line 4
            yield ($context["text_category"] ?? null);
            yield "</div>
      <button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" class=\"navbar-toggler d-lg-none\"><i class=\"fa-solid fa-bars\"></i></button>
      <div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "              <li class=\"nav-item dropdown\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    yield "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                    yield "</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13), (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) / Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 13), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 14
                        yield "                      <ul class=\"list-unstyled\">
                        ";
                        // line 15
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 16
                            yield "                          <li><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                            yield "\" class=\"dropdown-item\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                            yield "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        yield "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    yield "                  </div>
                  <ul class=\"list-unstyled\">
                    <li><a href=\"";
                    // line 22
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                    yield "\" class=\"dropdown-item\">";
                    yield ($context["text_all"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                    yield "</a></li>
                  </ul>
                </div>
              </li>
            ";
                } else {
                    // line 27
                    yield "              <li class=\"nav-item\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    yield "</a></li>
            ";
                }
                // line 29
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        </ul>
      </div>
    </nav>
  </div>
  <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide \" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <h4>Crack the offer Now!</h4>
      <a href=\"#\" >Get the offer</a>
    </div>
    <div class=\"carousel-item\">
      <h4>Top Brands</h4>
      <a href=\"#\" >View Brands</a>
      ";
            // line 44
            yield "    </div>
    
  </div>
</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
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
        return array (  145 => 44,  130 => 30,  124 => 29,  116 => 27,  104 => 22,  100 => 20,  93 => 18,  82 => 16,  78 => 15,  75 => 14,  71 => 13,  62 => 10,  59 => 9,  55 => 8,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if categories %}
  <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg \">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">{{ text_category }}</div>
      <button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" class=\"navbar-toggler d-lg-none\"><i class=\"fa-solid fa-bars\"></i></button>
      <div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
          {% for category in categories %}
            {% if category.children %}
              <li class=\"nav-item dropdown\"><a href=\"{{ category.href }}\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">{{ category.name }}</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner\">
                    {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
                      <ul class=\"list-unstyled\">
                        {% for child in children %}
                          <li><a href=\"{{ child.href }}\" class=\"dropdown-item\">{{ child.name }}</a></li>
                        {% endfor %}
                      </ul>
                    {% endfor %}
                  </div>
                  <ul class=\"list-unstyled\">
                    <li><a href=\"{{ category.href }}\" class=\"dropdown-item\">{{ text_all }} {{ category.name }}</a></li>
                  </ul>
                </div>
              </li>
            {% else %}
              <li class=\"nav-item\"><a href=\"{{ category.href }}\" class=\"dropdown-item\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
        </ul>
      </div>
    </nav>
  </div>
  <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide \" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <h4>Crack the offer Now!</h4>
      <a href=\"#\" >Get the offer</a>
    </div>
    <div class=\"carousel-item\">
      <h4>Top Brands</h4>
      <a href=\"#\" >View Brands</a>
      {# <img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\"> #}
    </div>
    
  </div>
</div>
{% endif %}
", "catalog/view/template/common/menu.twig", "/var/www/html/opencart/upload/catalog/view/template/common/menu.twig");
    }
}
