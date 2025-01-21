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

/* catalog/view/template/account/address_list.twig */
class __TwigTemplate_1038d98ea740294e9f332c10eac981f9092b4e3ee9703816c3179c6151db384a extends Template
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
        if (($context["addresses"] ?? null)) {
            // line 2
            yield "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 5
                yield "        <tr>
          <td>";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 6);
                yield "</td>
          <td class=\"text-end\"><a href=\"";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "edit", [], "any", false, false, false, 7);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-regular fa-solid fa-pencil\"></i></a> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "delete", [], "any", false, false, false, 7);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></a></td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "    </table>
  </div>
";
        } else {
            // line 13
            yield "  <p>";
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
        return "catalog/view/template/account/address_list.twig";
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
        return array (  79 => 13,  74 => 10,  59 => 7,  55 => 6,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if addresses %}
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      {% for address in addresses %}
        <tr>
          <td>{{ address.address }}</td>
          <td class=\"text-end\"><a href=\"{{ address.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-regular fa-solid fa-pencil\"></i></a> <a href=\"{{ address.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></a></td>
        </tr>
      {% endfor %}
    </table>
  </div>
{% else %}
  <p>{{ text_no_results }}</p>
{% endif %}", "catalog/view/template/account/address_list.twig", "/var/www/html/opencart/upload/catalog/view/template/account/address_list.twig");
    }
}
