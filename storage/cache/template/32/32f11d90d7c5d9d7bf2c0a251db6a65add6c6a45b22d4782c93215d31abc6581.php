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

/* admin2504/view/template/user/user_group_form.twig */
class __TwigTemplate_aa8a324c8cf31f826130f646cf3f1972e43cd107bfc6ee72950a680181da186f extends Template
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
        <button type=\"submit\" form=\"form-user-group\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-user-group\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
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
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_permission"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-permission\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <th class=\"w-50\"></th>
                      <th class=\"text-center\">";
        // line 36
        yield ($context["text_access"] ?? null);
        yield "</th>
                      <th class=\"text-center\">";
        // line 37
        yield ($context["text_modify"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>";
        // line 42
        yield ($context["text_all"] ?? null);
        yield "</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 47
            yield "                      <tr>
                        <td><label>";
            // line 48
            yield $context["permission"];
            yield "</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"";
            // line 49
            yield $context["permission"];
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter($context["permission"], ($context["access"] ?? null))) {
                yield " checked";
            }
            yield "/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
            // line 50
            yield $context["permission"];
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter($context["permission"], ($context["modify"] ?? null))) {
                yield " checked";
            }
            yield "/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 59
        yield ($context["entry_extension"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-extension\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <th class=\"w-50\"></th>
                      <th class=\"text-center\">";
        // line 66
        yield ($context["text_access"] ?? null);
        yield "</th>
                      <th class=\"text-center\">";
        // line 67
        yield ($context["text_modify"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>";
        // line 72
        yield ($context["text_all"] ?? null);
        yield "</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 77
            yield "                      <tr>
                        <td><label>";
            // line 78
            yield $context["extension"];
            yield "</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"";
            // line 79
            yield $context["extension"];
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter($context["extension"], ($context["access"] ?? null))) {
                yield " checked";
            }
            yield "/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
            // line 80
            yield $context["extension"];
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter($context["extension"], ($context["modify"] ?? null))) {
                yield " checked";
            }
            yield "/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"user_group_id\" value=\"";
        // line 88
        yield ($context["user_group_id"] ?? null);
        yield "\" id=\"input-user-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('table tbody label').on('click', function() {
    var checked = \$(this).parent().parent().find(':checkbox:first').prop('checked');

    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
});
//--></script>
";
        // line 102
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin2504/view/template/user/user_group_form.twig";
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
        return array (  267 => 102,  250 => 88,  243 => 83,  230 => 80,  222 => 79,  218 => 78,  215 => 77,  211 => 76,  204 => 72,  196 => 67,  192 => 66,  182 => 59,  174 => 53,  161 => 50,  153 => 49,  149 => 48,  146 => 47,  142 => 46,  135 => 42,  127 => 37,  123 => 36,  113 => 29,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user-group\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-user-group\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_permission }}</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-permission\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <th class=\"w-50\"></th>
                      <th class=\"text-center\">{{ text_access }}</th>
                      <th class=\"text-center\">{{ text_modify }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>{{ text_all }}</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-permission input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    {% for permission in permissions %}
                      <tr>
                        <td><label>{{ permission }}</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"{{ permission }}\" class=\"form-check-input\"{% if permission in access %} checked{% endif %}/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"{{ permission }}\" class=\"form-check-input\"{% if permission in modify %} checked{% endif %}/></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_extension }}</label>
            <div class=\"col-sm-10\">
              <div id=\"user-group-extension\" class=\"form-control\" style=\"height: 250px; overflow: auto;\">
                <table class=\"table table-borderless table-striped\">
                  <thead>
                    <tr>
                      <th class=\"w-50\"></th>
                      <th class=\"text-center\">{{ text_access }}</th>
                      <th class=\"text-center\">{{ text_modify }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>{{ text_all }}</strong></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-access\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[access]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" id=\"input-permission-modify\" class=\"form-check-input\" onchange=\"\$('#user-group-extension input[name^=\\'permission[modify]\\']').prop('checked', \$(this).prop('checked'));\"/></td>
                    </tr>
                    {% for extension in extensions %}
                      <tr>
                        <td><label>{{ extension }}</label></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[access][]\" value=\"{{ extension }}\" class=\"form-check-input\"{% if extension in access %} checked{% endif %}/></td>
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"permission[modify][]\" value=\"{{ extension }}\" class=\"form-check-input\"{% if extension in modify %} checked{% endif %}/></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"user_group_id\" value=\"{{ user_group_id }}\" id=\"input-user-group-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('table tbody label').on('click', function() {
    var checked = \$(this).parent().parent().find(':checkbox:first').prop('checked');

    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
    \$(this).parent().parent().find(':checkbox').prop('checked', !checked);
});
//--></script>
{{ footer }}", "admin2504/view/template/user/user_group_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/user/user_group_form.twig");
    }
}
