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

/* admin2504/view/template/cms/faq_form.twig */
class __TwigTemplate_67b81bebc2c8c3e68d60e0994dff79b6608cef7fd387bab978e34a9d49111d71 extends Template
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
<form id=\"form-faq\" action=\"";
        // line 2
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h3>
        </div>
        <div class=\"card-body\">
            <div class=\"mb-3\">
                <label for=\"input-question\" class=\"form-label\">";
        // line 9
        yield ($context["entry_question"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"question\" value=\"";
        // line 10
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", true, true, false, 10)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", false, false, false, 10)) : (""));
        yield "\" placeholder=\"";
        yield ($context["entry_question"] ?? null);
        yield "\" id=\"input-question\" class=\"form-control\" />
            </div>
            
            <div class=\"mb-3\">
                <label for=\"input-answer\" class=\"form-label\">";
        // line 14
        yield ($context["entry_answer"] ?? null);
        yield "</label>
                <textarea name=\"answer\" placeholder=\"";
        // line 15
        yield ($context["entry_answer"] ?? null);
        yield "\" id=\"input-answer\" class=\"form-control\" rows=\"5\">";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", true, true, false, 15)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", false, false, false, 15)) : (""));
        yield "</textarea>
            </div>

            <!-- Sort Order field -->
            <div class=\"mb-3\">
                <label for=\"input-sort-order\" class=\"form-label\">";
        // line 20
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                <input type=\"number\" name=\"sort_order\" value=\"";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "sort_order", [], "any", true, true, false, 21)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "sort_order", [], "any", false, false, false, 21)) : (0));
        yield "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>

            <!-- Status field -->
            <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 26
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "status", [], "any", true, true, false, 28) && (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "status", [], "any", false, false, false, 28) == 1))) ? ("selected") : (""));
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                    <option value=\"0\" ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "status", [], "any", true, true, false, 29) && (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "status", [], "any", false, false, false, 29) == 0))) ? ("selected") : (""));
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
            </div>
        </div>
        <div class=\"card-footer text-end\">
            <input type=\"hidden\" name=\"faq_id\" value=\"";
        // line 34
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "faq_id", [], "any", true, true, false, 34)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "faq_id", [], "any", false, false, false, 34)) : (""));
        yield "\" />
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 35
        yield ($context["button_save"] ?? null);
        yield "</button>
            <a href=\"";
        // line 36
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-secondary\"><i class=\"fa fa-reply\"></i> ";
        yield ($context["button_cancel"] ?? null);
        yield "</a>
        </div>
    </div>
</form>
";
        // line 40
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
        return "admin2504/view/template/cms/faq_form.twig";
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
        return array (  137 => 40,  128 => 36,  124 => 35,  120 => 34,  110 => 29,  104 => 28,  99 => 26,  91 => 21,  87 => 20,  77 => 15,  73 => 14,  64 => 10,  60 => 9,  53 => 5,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<form id=\"form-faq\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ heading_title }}</h3>
        </div>
        <div class=\"card-body\">
            <div class=\"mb-3\">
                <label for=\"input-question\" class=\"form-label\">{{ entry_question }}</label>
                <input type=\"text\" name=\"question\" value=\"{{ faq.question is defined ? faq.question : '' }}\" placeholder=\"{{ entry_question }}\" id=\"input-question\" class=\"form-control\" />
            </div>
            
            <div class=\"mb-3\">
                <label for=\"input-answer\" class=\"form-label\">{{ entry_answer }}</label>
                <textarea name=\"answer\" placeholder=\"{{ entry_answer }}\" id=\"input-answer\" class=\"form-control\" rows=\"5\">{{ faq.answer is defined ? faq.answer : '' }}</textarea>
            </div>

            <!-- Sort Order field -->
            <div class=\"mb-3\">
                <label for=\"input-sort-order\" class=\"form-label\">{{ entry_sort_order }}</label>
                <input type=\"number\" name=\"sort_order\" value=\"{{ faq.sort_order is defined ? faq.sort_order : 0 }}\" id=\"input-sort-order\" class=\"form-control\" />
            </div>

            <!-- Status field -->
            <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"1\" {{ faq.status is defined and faq.status == 1 ? 'selected' : '' }}>{{ text_enabled }}</option>
                    <option value=\"0\" {{ faq.status is defined and faq.status == 0 ? 'selected' : '' }}>{{ text_disabled }}</option>
                </select>
            </div>
        </div>
        <div class=\"card-footer text-end\">
            <input type=\"hidden\" name=\"faq_id\" value=\"{{ faq.faq_id is defined ? faq.faq_id : '' }}\" />
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> {{ button_save }}</button>
            <a href=\"{{ back }}\" class=\"btn btn-secondary\"><i class=\"fa fa-reply\"></i> {{ button_cancel }}</a>
        </div>
    </div>
</form>
{{ footer }}
", "admin2504/view/template/cms/faq_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/cms/faq_form.twig");
    }
}
