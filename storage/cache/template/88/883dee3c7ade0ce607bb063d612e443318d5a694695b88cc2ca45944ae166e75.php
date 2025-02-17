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

/* catalog/view/template/checkout/confirm.twig */
class __TwigTemplate_85c37eaf3e2eebfe7674495a0a1ecb5c0488693f6846b96a3428d6586b6d80b2 extends Template
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
        yield " <h1 class=\"text-end\">";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["total"] ?? null), "text", [], "any", false, false, false, 1);
        yield "</h1>
<div class=\"table-responsive\">

  <table class=\"table table-bordered-none table-hover\">
    <thead>
      <tr>
        <th>";
        // line 7
        yield ($context["column_product"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 8
        yield ($context["column_total"] ?? null);
        yield "</th>
      </tr>
    </thead>
        ";
        // line 12
        yield "      <div class=\"total\">

       <h4>Total amount</h4>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 17
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 17)) {
                // line 18
                yield "       <div id='amt'>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 18);
                yield "</div>
       ";
            }
            // line 20
            yield "       ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "       </div>
    
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            yield "
  
       <tbody>
        <tr>
          <td>";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
            yield "x <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
            yield "</a>

            <ul class=\"list-unstyled mb-0\">
              <li>
                <small> - ";
            // line 32
            yield ($context["text_model"] ?? null);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 32);
            yield "</small>
              </li>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 35
                yield "                <li>
                  <small> - ";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 36);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36);
                yield "</small>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "
              ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 40)) {
                // line 41
                yield "                <li>
                  <small> - ";
                // line 42
                yield ($context["text_subscription"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 42);
                yield "</small>
                </li>
              ";
            }
            // line 45
            yield "
              ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 46)) {
                // line 47
                yield "                <li>
                  <small> - ";
                // line 48
                yield ($context["text_points"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48);
                yield "</small>
                </li>
              ";
            }
            // line 51
            yield "            </ul>

          </td>
          <td class=\"text-end\">";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 54);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "    </tbody>
    <tfoot>
      ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 60
            yield "        <tr>
          <td class=\"text-end\" id=\"prddetails\"><strong>";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 61);
            yield "</strong></td>
          <td class=\"text-end\">";
            // line 62
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 62);
            yield "</td>
        
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "    </tfoot>
  </table>
</div>

<div id=\"checkout-payment\">
  ";
        // line 71
        if (($context["payment"] ?? null)) {
            // line 72
            yield "    ";
            yield ($context["payment"] ?? null);
            yield "
  ";
        } else {
            // line 74
            yield "    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>";
            yield ($context["button_confirm"] ?? null);
            yield "</button></div>
  ";
        }
        // line 76
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/confirm.twig";
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
        return array (  250 => 76,  244 => 74,  238 => 72,  236 => 71,  229 => 66,  219 => 62,  215 => 61,  212 => 60,  208 => 59,  204 => 57,  195 => 54,  190 => 51,  182 => 48,  179 => 47,  177 => 46,  174 => 45,  166 => 42,  163 => 41,  161 => 40,  158 => 39,  147 => 36,  144 => 35,  140 => 34,  133 => 32,  122 => 28,  116 => 24,  112 => 23,  108 => 21,  94 => 20,  88 => 18,  85 => 17,  68 => 16,  62 => 12,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <h1 class=\"text-end\">{{ total.text }}</h1>
<div class=\"table-responsive\">

  <table class=\"table table-bordered-none table-hover\">
    <thead>
      <tr>
        <th>{{ column_product }}</th>
        <th class=\"text-end\">{{ column_total }}</th>
      </tr>
    </thead>
        {# adding total amount here #}
      <div class=\"total\">

       <h4>Total amount</h4>

        {% for total in totals %}
        {% if loop.last %}
       <div id='amt'>{{ total.text }}</div>
       {% endif %}
       {% endfor %}
       </div>
    
      {% for product in products %}

  
       <tbody>
        <tr>
          <td>{{ product.quantity }}x <a href=\"{{ product.href }}\">{{ product.name }}</a>

            <ul class=\"list-unstyled mb-0\">
              <li>
                <small> - {{ text_model }}: {{ product.model }}</small>
              </li>
              {% for option in product.option %}
                <li>
                  <small> - {{ option.name }}: {{ option.value }}</small>
                </li>
              {% endfor %}

              {% if product.subscription %}
                <li>
                  <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                </li>
              {% endif %}

              {% if product.reward %}
                <li>
                  <small> - {{ text_points }}: {{ product.reward }}</small>
                </li>
              {% endif %}
            </ul>

          </td>
          <td class=\"text-end\">{{ product.total }}</td>
        </tr>
      {% endfor %}
    </tbody>
    <tfoot>
      {% for total in totals %}
        <tr>
          <td class=\"text-end\" id=\"prddetails\"><strong>{{ total.title }}</strong></td>
          <td class=\"text-end\">{{ total.text }}</td>
        
        </tr>
      {% endfor %}
    </tfoot>
  </table>
</div>

<div id=\"checkout-payment\">
  {% if payment %}
    {{ payment }}
  {% else %}
    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>{{ button_confirm }}</button></div>
  {% endif %}
</div>
", "catalog/view/template/checkout/confirm.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/confirm.twig");
    }
}
