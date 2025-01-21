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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_674b8ec36a81c218cad9fa8d0e39a43bb4d16c4c88a510fd822c55d096095aab extends Template
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
        yield "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
    
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <h3>";
        // line 12
        yield ($context["text_location"] ?? null);
        yield "</h3>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 16
        if (($context["image"] ?? null)) {
            // line 17
            yield "              <div class=\"col-sm-3\"><img src=\"";
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield ($context["store"] ?? null);
            yield "\" title=\"";
            yield ($context["store"] ?? null);
            yield "\" class=\"img-thumbnail\"/></div>
            ";
        }
        // line 19
        yield "            <div class=\"col-sm-3\"><strong>";
        yield ($context["store"] ?? null);
        yield "</strong>
              <br/>
              <address>
                ";
        // line 22
        yield ($context["address"] ?? null);
        yield "
              </address>
              ";
        // line 24
        if (($context["geocode"] ?? null)) {
            // line 25
            yield "                <a href=\"https://maps.google.com/maps?q=";
            yield Twig\Extension\CoreExtension::urlencode(($context["geocode"] ?? null));
            yield "&hl=";
            yield ($context["geocode_hl"] ?? null);
            yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> ";
            yield ($context["button_map"] ?? null);
            yield "</a>
              ";
        }
        // line 27
        yield "            </div>
            ";
        // line 28
        if (($context["telephone"] ?? null)) {
            // line 29
            yield "              <div class=\"col-sm-3\"><strong>";
            yield ($context["text_telephone"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 31
            yield ($context["telephone"] ?? null);
            yield "
                <br/>
                <br/>
              </div>
            ";
        }
        // line 36
        yield "            <div class=\"col-sm-3\">
              ";
        // line 37
        if (($context["open"] ?? null)) {
            // line 38
            yield "                <strong>";
            yield ($context["text_open"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 40
            yield ($context["open"] ?? null);
            yield "
                <br/>
                <br/>
              ";
        }
        // line 44
        yield "              ";
        if (($context["comment"] ?? null)) {
            // line 45
            yield "                <strong>";
            yield ($context["text_comment"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 47
            yield ($context["comment"] ?? null);
            yield "
              ";
        }
        // line 49
        yield "            </div>
          </div>
        </div>
      </div>
      ";
        // line 53
        if (($context["locations"] ?? null)) {
            // line 54
            yield "        <h3>";
            yield ($context["text_store"] ?? null);
            yield "</h3>
        <div id=\"accordion\" class=\"accordion mb-3\">

          ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 58
                yield "
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-location-";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 61);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 61);
                yield "</button>
              </h2>

              <div id=\"collapse-location-";
                // line 64
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 64);
                yield "\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">

                <div class=\"accordion-body\">
                  <div class=\"row\">
                    ";
                // line 68
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 68)) {
                    // line 69
                    yield "                      <div class=\"col-sm-3\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 69);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                    yield "\" class=\"img-thumbnail\"/></div>
                    ";
                }
                // line 71
                yield "                    <div class=\"col-sm-3\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 71);
                yield "</strong>
                      <br/>
                      <address>
                        ";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 74);
                yield "
                      </address>
                      ";
                // line 76
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 76)) {
                    // line 77
                    yield "                        <a href=\"https://maps.google.com/maps?q=";
                    yield Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 77));
                    yield "&hl=";
                    yield ($context["geocode_hl"] ?? null);
                    yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-location-dot\"></i> ";
                    yield ($context["button_map"] ?? null);
                    yield "</a>
                      ";
                }
                // line 79
                yield "                    </div>
                    <div class=\"col-sm-3\"><strong>";
                // line 80
                yield ($context["text_telephone"] ?? null);
                yield "</strong>
                      <br/>
                      ";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 82);
                yield "
                      <br/>
                      <br/>
                    </div>
                    <div class=\"col-sm-3\">
                      ";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 87)) {
                    // line 88
                    yield "                        <strong>";
                    yield ($context["text_open"] ?? null);
                    yield "</strong>
                        <br/>
                        ";
                    // line 90
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 90);
                    yield "
                        <br/>
                      ";
                }
                // line 93
                yield "                      ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 93)) {
                    // line 94
                    yield "                        ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 94);
                    yield "
                      ";
                }
                // line 96
                yield "                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "        </div>
      ";
        }
        // line 104
        yield "      <form id=\"form-contact\" action=\"";
        yield ($context["send"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 106
        yield ($context["text_contact"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 108
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 110
        yield ($context["name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 115
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 117
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">";
        // line 122
        yield ($context["entry_enquiry"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 128
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        <div class=\"text-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 131
        yield ($context["button_submit"] ?? null);
        yield "</button>
        </div>
      </form>
      ";
        // line 134
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 135
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 137
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
        return "catalog/view/template/information/contact.twig";
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
        return array (  369 => 137,  364 => 135,  360 => 134,  354 => 131,  348 => 128,  339 => 122,  331 => 117,  326 => 115,  318 => 110,  313 => 108,  308 => 106,  302 => 104,  298 => 102,  287 => 96,  281 => 94,  278 => 93,  272 => 90,  266 => 88,  264 => 87,  256 => 82,  251 => 80,  248 => 79,  238 => 77,  236 => 76,  231 => 74,  224 => 71,  214 => 69,  212 => 68,  205 => 64,  197 => 61,  192 => 58,  188 => 57,  181 => 54,  179 => 53,  173 => 49,  168 => 47,  162 => 45,  159 => 44,  152 => 40,  146 => 38,  144 => 37,  141 => 36,  133 => 31,  127 => 29,  125 => 28,  122 => 27,  112 => 25,  110 => 24,  105 => 22,  98 => 19,  88 => 17,  86 => 16,  79 => 12,  75 => 11,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
    
      <h1>{{ heading_title }}</h1>
      <h3>{{ text_location }}</h3>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            {% if image %}
              <div class=\"col-sm-3\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\"/></div>
            {% endif %}
            <div class=\"col-sm-3\"><strong>{{ store }}</strong>
              <br/>
              <address>
                {{ address }}
              </address>
              {% if geocode %}
                <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> {{ button_map }}</a>
              {% endif %}
            </div>
            {% if telephone %}
              <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong>
                <br/>
                {{ telephone }}
                <br/>
                <br/>
              </div>
            {% endif %}
            <div class=\"col-sm-3\">
              {% if open %}
                <strong>{{ text_open }}</strong>
                <br/>
                {{ open }}
                <br/>
                <br/>
              {% endif %}
              {% if comment %}
                <strong>{{ text_comment }}</strong>
                <br/>
                {{ comment }}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
      {% if locations %}
        <h3>{{ text_store }}</h3>
        <div id=\"accordion\" class=\"accordion mb-3\">

          {% for location in locations %}

            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-location-{{ location.location_id }}\">{{ location.name }}</button>
              </h2>

              <div id=\"collapse-location-{{ location.location_id }}\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">

                <div class=\"accordion-body\">
                  <div class=\"row\">
                    {% if location.image %}
                      <div class=\"col-sm-3\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\"/></div>
                    {% endif %}
                    <div class=\"col-sm-3\"><strong>{{ location.name }}</strong>
                      <br/>
                      <address>
                        {{ location.address }}
                      </address>
                      {% if location.geocode %}
                        <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-location-dot\"></i> {{ button_map }}</a>
                      {% endif %}
                    </div>
                    <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong>
                      <br/>
                      {{ location.telephone }}
                      <br/>
                      <br/>
                    </div>
                    <div class=\"col-sm-3\">
                      {% if location.open %}
                        <strong>{{ text_open }}</strong>
                        <br/>
                        {{ location.open }}
                        <br/>
                      {% endif %}
                      {% if location.comment %}
                        {{ location.comment }}
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      {% endif %}
      <form id=\"form-contact\" action=\"{{ send }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>{{ text_contact }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">{{ entry_enquiry }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          {{ captcha }}
        </fieldset>
        <div class=\"text-end\">
          <button type=\"submit\" class=\"btn btn-primary\">{{ button_submit }}</button>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/information/contact.twig", "/var/www/html/opencart/upload/catalog/view/template/information/contact.twig");
    }
}
