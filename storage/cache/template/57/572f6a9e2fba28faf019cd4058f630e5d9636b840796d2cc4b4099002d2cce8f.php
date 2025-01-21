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

/* admin2504/view/template/extension/module.twig */
class __TwigTemplate_06b5620f364f31cb05f9063ea991bc5571a2f0649f60d2f0a406eb61c9b3e63a extends Template
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
        yield ($context["promotion"] ?? null);
        yield "
<fieldset>
  <legend>";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 4
        yield ($context["text_layout"] ?? null);
        yield "</div>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th>";
        // line 9
        yield ($context["column_name"] ?? null);
        yield "</th>
          <th>";
        // line 10
        yield ($context["column_status"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["extensions"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 17
                yield "            <tr>
              <td><b>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 18);
                yield "</b></td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 19);
                yield "</td>
              <td class=\"text-end text-nowrap\">
                ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 22)) {
                        // line 23
                        yield "                    <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 23);
                        yield "\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_add"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                  ";
                    } else {
                        // line 25
                        yield "                    <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 25);
                        yield "\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_edit"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  ";
                    }
                    // line 27
                    yield "                ";
                } else {
                    // line 28
                    yield "                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>
                ";
                }
                // line 30
                yield "                ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 31);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 33
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 33);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                ";
                }
                // line 34
                yield "</td>
            </tr>
            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 37
                    yield "              <tr>
                <td>&nbsp;&nbsp;&nbsp;<i class=\"fa-solid fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 38
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 38);
                    yield "</td>
                <td>";
                    // line 39
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 39);
                    yield "</td>
                <td class=\"text-end text-nowrap\"><a href=\"";
                    // line 40
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 40);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "delete", [], "any", false, false, false, 40);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_delete"] ?? null);
                    yield "\" class=\"btn btn-outline-danger\"><i class=\"fa-regular fa-trash-can\"></i></a></td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        ";
        } else {
            // line 45
            yield "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 46
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 49
        yield "      </tbody>
    </table>
  </div>
</fieldset>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin2504/view/template/extension/module.twig";
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
        return array (  192 => 49,  186 => 46,  183 => 45,  180 => 44,  174 => 43,  159 => 40,  155 => 39,  151 => 38,  148 => 37,  144 => 36,  140 => 34,  132 => 33,  124 => 31,  121 => 30,  117 => 28,  114 => 27,  106 => 25,  98 => 23,  95 => 22,  93 => 21,  88 => 19,  84 => 18,  81 => 17,  76 => 16,  74 => 15,  67 => 11,  63 => 10,  59 => 9,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ promotion }}
<fieldset>
  <legend>{{ heading_title }}</legend>
  <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_layout }}</div>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th>{{ column_name }}</th>
          <th>{{ column_status }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if extensions %}
          {% for extension in extensions %}
            <tr>
              <td><b>{{ extension.name }}</b></td>
              <td>{{ extension.status }}</td>
              <td class=\"text-end text-nowrap\">
                {% if extension.installed %}
                  {% if extension.module %}
                    <a href=\"{{ extension.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                  {% else %}
                    <a href=\"{{ extension.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  {% endif %}
                {% else %}
                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>
                {% endif %}
                {% if not extension.installed %}
                  <a href=\"{{ extension.install }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_install }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                {% else %}
                  <a href=\"{{ extension.uninstall }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_uninstall }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                {% endif %}</td>
            </tr>
            {% for module in extension.module %}
              <tr>
                <td>&nbsp;&nbsp;&nbsp;<i class=\"fa-solid fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;{{ module.name }}</td>
                <td>{{ module.status }}</td>
                <td class=\"text-end text-nowrap\"><a href=\"{{ module.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <a href=\"{{ module.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-outline-danger\"><i class=\"fa-regular fa-trash-can\"></i></a></td>
              </tr>
            {% endfor %}
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
</fieldset>
", "admin2504/view/template/extension/module.twig", "/var/www/html/opencart/upload/admin2504/view/template/extension/module.twig");
    }
}
