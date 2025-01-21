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

/* admin1234/view/template/catalog/product_list.twig */
class __TwigTemplate_7fa4a02b0540bf60d0bae634aa554d0bd11d8ead1c67efdd884c4bb0c0da0864 extends Template
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
        yield "<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center\">";
        // line 7
        yield ($context["column_image"] ?? null);
        yield "</th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 9
        yield ($context["sort_model"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.model")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_model"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 10
        yield ($context["sort_price"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.price")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_price"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 11
        yield ($context["sort_quantity"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.quantity")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_quantity"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 12
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 18)) {
                    yield " class=\"table-warning\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 20);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                yield "\" class=\"img-thumbnail\"/></td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                yield "
                <br/>
                ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                  <small class=\"text-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</small>
                ";
                } else {
                    // line 26
                    yield "                  <small class=\"text-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</small>
                ";
                }
                // line 27
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 30
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                    yield "<span style=\"text-decoration: line-through;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    yield "</span>
                  <br/>
                  <div class=\"text-danger\">";
                    // line 32
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    yield "</div>
                ";
                } else {
                    // line 34
                    yield "                  ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    yield "
                ";
                }
                // line 35
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 37
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37) <= 0)) {
                    // line 38
                    yield "                  <span class=\"badge bg-warning\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 39
$context["product"], "quantity", [], "any", false, false, false, 39) <= 5)) {
                    // line 40
                    yield "                  <span class=\"badge bg-danger\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
                    yield "</span>
                ";
                } else {
                    // line 42
                    yield "                  <span class=\"badge bg-success\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                    yield "</span>
                ";
                }
                // line 43
                yield "</td>
              <td class=\"text-end\">
                ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 45)) {
                    // line 46
                    yield "                  <div class=\"btn-group\">
                    <a href=\"";
                    // line 47
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 47);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-caret-down\"></i></button>
                    <div class=\"dropdown-menu dropdown-menu-end\"><a href=\"";
                    // line 49
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 49);
                    yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus\"></i> ";
                    yield ($context["text_variant_add"] ?? null);
                    yield "</a></div>
                  </div>
                ";
                } else {
                    // line 52
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 52);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-pencil\"></i></a>
                ";
                }
                // line 53
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "        ";
        } else {
            // line 57
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 58
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 61
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 65
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 66
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin1234/view/template/catalog/product_list.twig";
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
        return array (  267 => 66,  263 => 65,  257 => 61,  251 => 58,  248 => 57,  245 => 56,  237 => 53,  229 => 52,  221 => 49,  214 => 47,  211 => 46,  209 => 45,  205 => 43,  199 => 42,  193 => 40,  191 => 39,  186 => 38,  184 => 37,  180 => 35,  174 => 34,  169 => 32,  162 => 30,  157 => 28,  154 => 27,  148 => 26,  142 => 24,  140 => 23,  135 => 21,  129 => 20,  125 => 19,  118 => 18,  113 => 17,  111 => 16,  104 => 12,  92 => 11,  80 => 10,  68 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th class=\"text-center\">{{ column_image }}</th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'pd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_model }}\"{% if sort == 'p.model' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_model }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_price }}\"{% if sort == 'p.price' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_price }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_quantity }}\"{% if sort == 'p.quantity' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_quantity }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if products %}
          {% for product in products %}
            <tr{% if not product.variant %} class=\"table-warning\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ product.product_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail\"/></td>
              <td>{{ product.name }}
                <br/>
                {% if product.status %}
                  <small class=\"text-success\">{{ text_enabled }}</small>
                {% else %}
                  <small class=\"text-danger\">{{ text_disabled }}</small>
                {% endif %}</td>
              <td class=\"d-none d-lg-table-cell\">{{ product.model }}</td>
              <td class=\"text-end\">
                {% if product.special %}<span style=\"text-decoration: line-through;\">{{ product.price }}</span>
                  <br/>
                  <div class=\"text-danger\">{{ product.special }}</div>
                {% else %}
                  {{ product.price }}
                {% endif %}</td>
              <td class=\"text-end\">
                {% if product.quantity <= 0 %}
                  <span class=\"badge bg-warning\">{{ product.quantity }}</span>
                {% elseif product.quantity <= 5 %}
                  <span class=\"badge bg-danger\">{{ product.quantity }}</span>
                {% else %}
                  <span class=\"badge bg-success\">{{ product.quantity }}</span>
                {% endif %}</td>
              <td class=\"text-end\">
                {% if product.variant %}
                  <div class=\"btn-group\">
                    <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-caret-down\"></i></button>
                    <div class=\"dropdown-menu dropdown-menu-end\"><a href=\"{{ product.variant }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus\"></i> {{ text_variant_add }}</a></div>
                  </div>
                {% else %}
                  <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-pencil\"></i></a>
                {% endif %}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "admin1234/view/template/catalog/product_list.twig", "/var/www/html/opencart/upload/admin1234/view/template/catalog/product_list.twig");
    }
}
