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

/* admin2504/view/template/cms/faq.twig */
class __TwigTemplate_ee0621311110b668eac43f3be5e08641900ada85b2d1b34e9bc9fb7549e60ff0 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div class=\"container\">
    <h1>";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    <a href=\"";
        // line 4
        yield ($context["add"] ?? null);
        yield "\" class=\"btn btn-primary\">Add FAQ</a>
    
    <form id=\"form-faq\" action=\"";
        // line 6
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\">
    


        <table class=\"table\">
            <thead>
                <tr>
                    <th width=\"1\" class=\"text-center\">
                        <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                    </th>
                    <th>Question</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 25
            yield "                <tr>
                    <td class=\"text-center\">
                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "faq_id", [], "any", false, false, false, 27);
            yield "\" />
                    </td>
                    <td>";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 29);
            yield "</td>
                    <td>";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "sort_order", [], "any", false, false, false, 30);
            yield "</td>
                    <td>";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "status", [], "any", false, false, false, 31)) ? ("Enabled") : ("Disabled"));
            yield "</td>
                    <td>
                 <a href=\"";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "edit", [], "any", false, false, false, 33);
            yield "\" class=\"btn btn-secondary\">Edit</a>

                       
                    </td>
                </tr>
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-danger\">
            <i class=\"fa fa-trash\"></i> Delete Selected
        </button>
    </form>
</div>
";
        // line 48
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
        return "admin2504/view/template/cms/faq.twig";
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
        return array (  127 => 48,  117 => 40,  104 => 33,  99 => 31,  95 => 30,  91 => 29,  86 => 27,  82 => 25,  78 => 24,  57 => 6,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div class=\"container\">
    <h1>{{ heading_title }}</h1>
    <a href=\"{{ add }}\" class=\"btn btn-primary\">Add FAQ</a>
    
    <form id=\"form-faq\" action=\"{{ delete }}\" method=\"post\">
    


        <table class=\"table\">
            <thead>
                <tr>
                    <th width=\"1\" class=\"text-center\">
                        <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                    </th>
                    <th>Question</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                {% for faq in faqs %}
                <tr>
                    <td class=\"text-center\">
                        <input type=\"checkbox\" name=\"selected[]\" value=\"{{ faq.faq_id }}\" />
                    </td>
                    <td>{{ faq.question }}</td>
                    <td>{{ faq.sort_order }}</td>
                    <td>{{ faq.status ? 'Enabled' : 'Disabled' }}</td>
                    <td>
                 <a href=\"{{ faq.edit }}\" class=\"btn btn-secondary\">Edit</a>

                       
                    </td>
                </tr>
               
                {% endfor %}
            </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-danger\">
            <i class=\"fa fa-trash\"></i> Delete Selected
        </button>
    </form>
</div>
{{ footer }}
", "admin2504/view/template/cms/faq.twig", "/var/www/html/opencart/upload/admin2504/view/template/cms/faq.twig");
    }
}
