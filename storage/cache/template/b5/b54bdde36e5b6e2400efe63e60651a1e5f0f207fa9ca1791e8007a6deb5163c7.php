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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_230f71abbea34e95d3148203c45cf37d647d8e4ef555b20db72c04d19724b1c1 extends Template
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
<div id=\"product-category\" class=\"container\">
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
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 11
        if ((($context["image"] ?? null) || ($context["description"] ?? null))) {
            // line 12
            yield "        <div class=\"row\">
          ";
            // line 16
            yield "          

          ";
            // line 19
            yield "          ";
            // line 22
            yield "        </div>
        <hr/>
      ";
        }
        // line 25
        yield "
      ";
        // line 26
        if (($context["categories"] ?? null)) {
            // line 27
            yield "        ";
            // line 52
            yield "      ";
        }
        // line 53
        yield "
      ";
        // line 54
        if (($context["products"] ?? null)) {
            // line 55
            yield "        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 58
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">";
            yield ($context["text_compare"] ?? null);
            yield "</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 63
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 64
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">";
            // line 69
            yield ($context["text_sort"] ?? null);
            yield "</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 72
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 72) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "              </select>
            </div>
          </div>
          ";
            // line 87
            yield "        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                yield "            <div class=\"col mb-3\">";
                yield $context["product"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 96
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 97
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        }
        // line 100
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 101
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 102
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 104
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 105
        yield ($context["column_right"] ?? null);
        yield "</div>

";
        // line 108
        yield "    <style>
  .product-thumb {
      min-width: 300px !important;
   max-width: 450px;

   box-shadow: none;
}
    .product-thumb:hover {
      scale: 1;
      z-index: none;
    }

.product-thumb .image {
  margin-right: 10px;
  min-height: 200px !important;
  background: linear-gradient(180deg, #e0e0e0, #c8c8c8) !important;

}
.product-thumb .image img{
  min-height: 300px ;
  padding: 20px ;
}
.product-thumb h4{
  color: black !important;
}
 .product-thumb .button-group{
      display: none;
    }

    .row{
      justify-content: flex-end !important;
      gap: 5px !important;
    }
       .offset-lg-1 {
        margin-left: 1px;
       }
       .product-thumb :hover{
        scale:none;

       }
    
       
       
    </style>
</div>
";
        // line 153
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
        return "catalog/view/template/product/category.twig";
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
        return array (  270 => 153,  223 => 108,  218 => 105,  213 => 104,  206 => 102,  201 => 101,  198 => 100,  192 => 97,  188 => 96,  183 => 93,  174 => 91,  170 => 90,  165 => 87,  160 => 74,  145 => 72,  141 => 71,  136 => 69,  128 => 64,  124 => 63,  114 => 58,  109 => 55,  107 => 54,  104 => 53,  101 => 52,  99 => 27,  97 => 26,  94 => 25,  89 => 22,  87 => 19,  83 => 16,  80 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if image or description %}
        <div class=\"row\">
          {# {% if image %}
            <div class=\"col-3\"><img src=\"{{ image }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\"/></div>
          {% endif %} #}
          

          {# remove the catagory describtion  #}
          {# {% if description %}
            <div class=\"col-9\">{{ description }}</div>
          {% endif %} #}
        </div>
        <hr/>
      {% endif %}

      {% if categories %}
        {# <h3>{{ text_refine }}</h3>
        {% if categories|length <= 5 %}
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                {% for category in categories %}
                  <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                {% endfor %}
              </ul>
            </div>
          </div>
        {% else %}
          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}
              <div class=\"col\">
                <ul>
                  {% for child in category %}
                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                  {% endfor %}
                </ul>
              </div>
            {% endfor %}
          </div>
          <br/>
        {% endif %} #}
      {% endif %}

      {% if products %}
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">{{ text_compare }}</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">{{ text_sort }}</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for sorts in sorts %}
                  <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          {# <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">{{ text_limit }}</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for limits in limits %}
                  <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div> #}
        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          {% for product in products %}
            <div class=\"col mb-3\">{{ product }}</div>
          {% endfor %}
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-end\">{{ results }}</div>
        </div>
      {% endif %}
      {% if not categories and not products %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>

{# adding style #}
    <style>
  .product-thumb {
      min-width: 300px !important;
   max-width: 450px;

   box-shadow: none;
}
    .product-thumb:hover {
      scale: 1;
      z-index: none;
    }

.product-thumb .image {
  margin-right: 10px;
  min-height: 200px !important;
  background: linear-gradient(180deg, #e0e0e0, #c8c8c8) !important;

}
.product-thumb .image img{
  min-height: 300px ;
  padding: 20px ;
}
.product-thumb h4{
  color: black !important;
}
 .product-thumb .button-group{
      display: none;
    }

    .row{
      justify-content: flex-end !important;
      gap: 5px !important;
    }
       .offset-lg-1 {
        margin-left: 1px;
       }
       .product-thumb :hover{
        scale:none;

       }
    
       
       
    </style>
</div>
{{ footer }}
", "catalog/view/template/product/category.twig", "/var/www/html/opencart/upload/catalog/view/template/product/category.twig");
    }
}
