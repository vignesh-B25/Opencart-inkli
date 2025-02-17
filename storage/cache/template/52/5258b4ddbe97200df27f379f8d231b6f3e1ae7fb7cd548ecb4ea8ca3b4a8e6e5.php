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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_27aa851c80704a793ec032251bea119bc7bb31e60647280f0e79768f66ef7634 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "<div class=\"container\" id='wishist'>
  <!-- First Section: Responsive Grid Layout -->
  <div class=\"row d-flex flex-wrap\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                yield "    <div class=\"col-12 col-md-6 col-lg-3\" id=\"wshprd\">
      <!-- Product Image -->
      ";
                // line 8
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8)) {
                    // line 9
                    yield "      <div class=\"z-1 d-flex gap-2\">
            <button type=\"submit\" form=\"form-product-";
                    // line 10
                    yield ($context["product_row"] ?? null);
                    yield "\" class=\"btn btn-primary mb-1\"><i class=\"fa-solid fa-cart-shopping\"></i></button>
            <a href=\"";
                    // line 11
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 11);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-remove\"></i></a>
          </div>
      <a href=\"";
                    // line 13
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                    yield "\">
        <img src=\"";
                    // line 14
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    yield "\" style=\"max-width: 100%; height: auto;\" />
      </a>
    
      ";
                }
                // line 18
                yield "      <!-- Product Details -->
      <h3>Name: ";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                yield "</h3>
      <h4>Model: ";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 20);
                yield "</h4>
      <h6>Price: ";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                yield "</h6>
      ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "      <h5 style=\"color: red;\">Special Price: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                    yield "</h5>
      ";
                }
                // line 25
                yield "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "  </div>
</div>

";
        } else {
            // line 93
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
        return "catalog/view/template/account/wishlist_list.twig";
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
        return array (  122 => 93,  116 => 27,  109 => 25,  103 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  86 => 18,  75 => 14,  71 => 13,  66 => 11,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
<div class=\"container\" id='wishist'>
  <!-- First Section: Responsive Grid Layout -->
  <div class=\"row d-flex flex-wrap\">
    {% for product in products %}
    <div class=\"col-12 col-md-6 col-lg-3\" id=\"wshprd\">
      <!-- Product Image -->
      {% if product.thumb %}
      <div class=\"z-1 d-flex gap-2\">
            <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"btn btn-primary mb-1\"><i class=\"fa-solid fa-cart-shopping\"></i></button>
            <a href=\"{{ product.remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-remove\"></i></a>
          </div>
      <a href=\"{{ product.href }}\">
        <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" style=\"max-width: 100%; height: auto;\" />
      </a>
    
      {% endif %}
      <!-- Product Details -->
      <h3>Name: {{ product.name }}</h3>
      <h4>Model: {{ product.model }}</h4>
      <h6>Price: {{ product.price }}</h6>
      {% if product.special %}
      <h5 style=\"color: red;\">Special Price: {{ product.special }}</h5>
      {% endif %}
    </div>
    {% endfor %}
  </div>
</div>

{# <!-- Second Section: Table Layout -->
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th class=\"text-center\">{{ column_image }}</th>
        <th>{{ column_name }}</th>
        <th>{{ column_model }}</th>
        <th class=\"text-end\">{{ column_stock }}</th>
        <th class=\"text-end\">{{ column_price }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% set product_row = 0 %}
      {% for product in products %}
      <tr>
        <!-- Product Image -->
        <td class=\"text-center\">
          {% if product.thumb %}
          <a href=\"{{ product.href }}\">
            <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" style=\"max-width: 50px; height: auto;\" />
          </a>
          {% endif %}
        </td>
        <!-- Product Name -->
        <td>
          <a href=\"{{ product.href }}\">{{ product.name }}</a>
          <form id=\"form-product-{{ product_row }}\" action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#header-cart\">
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\" />
            <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\" />
          </form>
        </td>
        <!-- Product Model -->
        <td>{{ product.model }}</td>
        <!-- Product Stock -->
        <td class=\"text-end\">{{ product.stock }}</td>
        <!-- Product Price -->
        <td class=\"text-end text-nowrap\">
          {% if product.price %}
          <div class=\"price\">
            {% if not product.special %}
            {{ product.price }}
            {% else %}
            <b>{{ product.special }}</b> <s>{{ product.price }}</s>
            {% endif %}
          </div>
          {% endif %}
        </td>
        <!-- Actions -->
        <td class=\"text-end text-nowrap\" style=\"width: 1px;\">
          <div class=\"d-grid\">
            <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"btn btn-primary mb-1\">{{ button_cart }}</button>
            <a href=\"{{ product.remove }}\" class=\"btn btn-danger\">{{ button_remove }}</a>
          </div>
        </td>
      </tr>
      {% set product_row = product_row + 1 %}
      {% endfor %}
    </tbody>
  </table>
</div> #}
{% else %}
<p>{{ text_no_results }}</p>
{% endif %}
", "catalog/view/template/account/wishlist_list.twig", "/var/www/html/opencart/upload/catalog/view/template/account/wishlist_list.twig");
    }
}
