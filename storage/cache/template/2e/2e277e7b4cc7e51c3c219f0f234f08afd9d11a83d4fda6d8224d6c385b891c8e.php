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

/* extension/opencart/admin/view/template/module/latest.twig */
class __TwigTemplate_f37767eefbef4b88bd89efa2fb53014a80068283a29eb9ddd0d7c428c4da9e93 extends Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_axis"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                <option value=\"horizontal\"";
        // line 32
        if ((($context["axis"] ?? null) == "horizontal")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_horizontal"] ?? null);
        yield "</option>
                <option value=\"vertical\"";
        // line 33
        if ((($context["axis"] ?? null) == "vertical")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_vertical"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-limit\" class=\"col-sm-2 col-form-label\">";
        // line 38
        yield ($context["entry_limit"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 40
        yield ($context["limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit"] ?? null);
        yield "\" id=\"input-limit\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_width"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 46
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 51
        yield ($context["entry_height"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 53
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 58
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 62
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 66
        yield ($context["module_id"] ?? null);
        yield "\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 72
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
        return "extension/opencart/admin/view/template/module/latest.twig";
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
        return array (  208 => 72,  199 => 66,  190 => 62,  183 => 58,  173 => 53,  168 => 51,  158 => 46,  153 => 44,  144 => 40,  139 => 38,  127 => 33,  119 => 32,  113 => 29,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">{{ entry_axis }}</label>
            <div class=\"col-sm-10\">
              <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                <option value=\"horizontal\"{% if axis == 'horizontal' %} selected{% endif %}>{{ text_horizontal }}</option>
                <option value=\"vertical\"{% if axis == 'vertical' %} selected{% endif %}>{{ text_vertical }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-limit\" class=\"col-sm-2 col-form-label\">{{ entry_limit }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"{{ limit }}\" placeholder=\"{{ entry_limit }}\" id=\"input-limit\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">{{ entry_width }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">{{ entry_height }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"{{ module_id }}\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "extension/opencart/admin/view/template/module/latest.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/module/latest.twig");
    }
}
