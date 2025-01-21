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

/* admin2504/view/template/catalog/option_form.twig */
class __TwigTemplate_519649e06830261fccea0e6db7f381434a6c10f16055fc0ba57574415ee698f0 extends Template
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
        <button type=\"submit\" form=\"form-option\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-option\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        yield ($context["text_option"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 24
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 27
            yield "                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 28);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 28);
            yield "\"/></div>
                    <input type=\"text\" name=\"option_description[";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "][name]\" value=\"";
            yield (((($__internal_compile_0 = ($context["option_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["option_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            yield "\" class=\"invalid-feedback\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_type"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"";
        // line 39
        yield ($context["text_choose"] ?? null);
        yield "\">
                    <option value=\"select\"";
        // line 40
        if ((($context["type"] ?? null) == "select")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_select"] ?? null);
        yield "</option>
                    <option value=\"radio\"";
        // line 41
        if ((($context["type"] ?? null) == "radio")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_radio"] ?? null);
        yield "</option>
                    <option value=\"checkbox\"";
        // line 42
        if ((($context["type"] ?? null) == "checkbox")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_checkbox"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 44
        yield ($context["text_input"] ?? null);
        yield "\">
                    <option value=\"text\"";
        // line 45
        if ((($context["type"] ?? null) == "text")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_text"] ?? null);
        yield "</option>
                    <option value=\"textarea\"";
        // line 46
        if ((($context["type"] ?? null) == "textarea")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_textarea"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 48
        yield ($context["text_file"] ?? null);
        yield "\">
                    <option value=\"file\"";
        // line 49
        if ((($context["type"] ?? null) == "file")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_file"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 51
        yield ($context["text_date"] ?? null);
        yield "\">
                    <option value=\"date\"";
        // line 52
        if ((($context["type"] ?? null) == "date")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_date"] ?? null);
        yield "</option>
                    <option value=\"time\"";
        // line 53
        if ((($context["type"] ?? null) == "time")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_time"] ?? null);
        yield "</option>
                    <option value=\"datetime\"";
        // line 54
        if ((($context["type"] ?? null) == "datetime")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_datetime"] ?? null);
        yield "</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 60
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 62
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 67
        yield ($context["text_value"] ?? null);
        yield "</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th class=\"required\">";
        // line 71
        yield ($context["entry_option_value"] ?? null);
        yield "</th>
                  <th class=\"text-center\">";
        // line 72
        yield ($context["entry_image"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 73
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 78
        $context["option_value_row"] = 0;
        // line 79
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 80
            yield "                  <tr id=\"option-value-row-";
            yield ($context["option_value_row"] ?? null);
            yield "\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 81
            yield ($context["option_value_row"] ?? null);
            yield "][option_value_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 81);
            yield "\"/>
                      ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 83
                yield "                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 84);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 84);
                yield "\"/></div>
                          <input type=\"text\" name=\"option_value[";
                // line 85
                yield ($context["option_value_row"] ?? null);
                yield "][option_value_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                yield "][name]\" value=\"";
                yield (((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 85)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 85)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null), "name", [], "any", false, false, false, 85)) : (""));
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" id=\"input-option-value-";
                yield ($context["option_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                yield "\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-option-value-";
                // line 87
                yield ($context["option_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                yield "\" class=\"invalid-feedback\"></div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "</td>
                    <td class=\"text-center\">
                      <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                        <img src=\"";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 91);
            yield "\" alt=\"\" title=\"\" id=\"thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/>
                        <input type=\"hidden\" name=\"option_value[";
            // line 92
            yield ($context["option_value_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 92);
            yield "\" id=\"input-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\"/>
                        <div class=\"d-grid\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-";
            // line 94
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-thumb=\"#thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-";
            // line 95
            yield ($context["option_value_row"] ?? null);
            yield "\" data-oc-thumb=\"#thumb-image-";
            yield ($context["option_value_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                        </div>
                      </div></td>
                    <td class=\"text-end\"><input type=\"text\" name=\"option_value[";
            // line 98
            yield ($context["option_value_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 98);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#option-value-row-";
            // line 99
            yield ($context["option_value_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 101
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 102
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addOptionValue();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 107
        yield ($context["button_option_value_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"option_id\" value=\"";
        // line 112
        yield ($context["option_id"] ?? null);
        yield "\" id=\"input-option-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
        \$('#option-value').parent().show();
    } else {
        \$('#option-value').parent().hide();
    }
});

\$('#input-type').trigger('change');

var option_value_row = ";
        // line 129
        yield ($context["option_value_row"] ?? null);
        yield ";

function addOptionValue() {
    html = '<tr id=\"option-value-row-' + option_value_row + '\">';
    html += '  <td><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 135
            yield "    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 136), "js");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 136), "js");
            yield "\" /></div>';
    html += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            // line 137
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
            yield "][name]\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-value-' + option_value_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
            yield "\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-option-value-' + option_value_row + '-";
            // line 139
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
            yield "\" class=\"invalid-feedback\"></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "    html += '  </td>';
    html += '  <td class=\"text-center\"><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + option_value_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/>';
    html += '    <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image-' + option_value_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#option-value-row-' + option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#option-value tbody').append(html);

    option_value_row++;
}
//--></script>
";
        // line 159
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
        return "admin2504/view/template/catalog/option_form.twig";
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
        return array (  513 => 159,  502 => 151,  498 => 150,  492 => 147,  488 => 146,  480 => 143,  476 => 141,  468 => 139,  459 => 137,  453 => 136,  450 => 135,  446 => 134,  438 => 129,  418 => 112,  410 => 107,  404 => 103,  398 => 102,  396 => 101,  389 => 99,  381 => 98,  371 => 95,  363 => 94,  354 => 92,  346 => 91,  341 => 88,  331 => 87,  316 => 85,  310 => 84,  307 => 83,  303 => 82,  297 => 81,  292 => 80,  287 => 79,  285 => 78,  277 => 73,  273 => 72,  269 => 71,  262 => 67,  252 => 62,  247 => 60,  234 => 54,  226 => 53,  218 => 52,  214 => 51,  205 => 49,  201 => 48,  192 => 46,  184 => 45,  180 => 44,  171 => 42,  163 => 41,  155 => 40,  151 => 39,  145 => 36,  140 => 33,  132 => 31,  121 => 29,  115 => 28,  112 => 27,  108 => 26,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-option\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-option\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_option }}</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                {% for language in languages %}
                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                    <input type=\"text\" name=\"option_description[{{ language.language_id }}][name]\" value=\"{{ option_description[language.language_id] ? option_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                {% endfor %}
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">{{ entry_type }}</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"{{ text_choose }}\">
                    <option value=\"select\"{% if type == 'select' %} selected{% endif %}>{{ text_select }}</option>
                    <option value=\"radio\"{% if type == 'radio' %} selected{% endif %}>{{ text_radio }}</option>
                    <option value=\"checkbox\"{% if type == 'checkbox' %} selected{% endif %}>{{ text_checkbox }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_input }}\">
                    <option value=\"text\"{% if type == 'text' %} selected{% endif %}>{{ text_text }}</option>
                    <option value=\"textarea\"{% if type == 'textarea' %} selected{% endif %}>{{ text_textarea }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_file }}\">
                    <option value=\"file\"{% if type == 'file' %} selected{% endif %}>{{ text_file }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_date }}\">
                    <option value=\"date\"{% if type == 'date' %} selected{% endif %}>{{ text_date }}</option>
                    <option value=\"time\"{% if type == 'time' %} selected{% endif %}>{{ text_time }}</option>
                    <option value=\"datetime\"{% if type == 'datetime' %} selected{% endif %}>{{ text_datetime }}</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>{{ text_value }}</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th class=\"required\">{{ entry_option_value }}</th>
                  <th class=\"text-center\">{{ entry_image }}</th>
                  <th class=\"text-end\">{{ entry_sort_order }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {% set option_value_row = 0 %}
                {% for option_value in option_values %}
                  <tr id=\"option-value-row-{{ option_value_row }}\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[{{ option_value_row }}][option_value_id]\" value=\"{{ option_value.option_value_id }}\"/>
                      {% for language in languages %}
                        <div class=\"input-group\">
                          <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                          <input type=\"text\" name=\"option_value[{{ option_value_row }}][option_value_description][{{ language.language_id }}][name]\" value=\"{{ option_value.option_value_description[language.language_id] ? option_value.option_value_description[language.language_id].name }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-value-{{ option_value_row }}-{{ language.language_id }}\" class=\"form-control\"/>
                        </div>
                        <div id=\"error-option-value-{{ option_value_row }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      {% endfor %}</td>
                    <td class=\"text-center\">
                      <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                        <img src=\"{{ option_value.thumb }}\" alt=\"\" title=\"\" id=\"thumb-image-{{ option_value_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                        <input type=\"hidden\" name=\"option_value[{{ option_value_row }}][image]\" value=\"{{ option_value.image }}\" id=\"input-image-{{ option_value_row }}\"/>
                        <div class=\"d-grid\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-{{ option_value_row }}\" data-oc-thumb=\"#thumb-image-{{ option_value_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-{{ option_value_row }}\" data-oc-thumb=\"#thumb-image-{{ option_value_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                        </div>
                      </div></td>
                    <td class=\"text-end\"><input type=\"text\" name=\"option_value[{{ option_value_row }}][sort_order]\" value=\"{{ option_value.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set option_value_row = option_value_row + 1 %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addOptionValue();\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <input type=\"hidden\" name=\"option_id\" value=\"{{ option_id }}\" id=\"input-option-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
        \$('#option-value').parent().show();
    } else {
        \$('#option-value').parent().hide();
    }
});

\$('#input-type').trigger('change');

var option_value_row = {{ option_value_row }};

function addOptionValue() {
    html = '<tr id=\"option-value-row-' + option_value_row + '\">';
    html += '  <td><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  {% for language in languages %}
    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"{{ language.image|escape('js') }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][{{ language.language_id }}][name]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-value-' + option_value_row + '-{{ language.language_id }}\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-option-value-' + option_value_row + '-{{ language.language_id }}\" class=\"invalid-feedback\"></div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-center\"><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + option_value_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/>';
    html += '    <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image-' + option_value_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + option_value_row + '\" data-oc-thumb=\"#thumb-image-' + option_value_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#option-value-row-' + option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#option-value tbody').append(html);

    option_value_row++;
}
//--></script>
{{ footer }}
", "admin2504/view/template/catalog/option_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/catalog/option_form.twig");
    }
}
