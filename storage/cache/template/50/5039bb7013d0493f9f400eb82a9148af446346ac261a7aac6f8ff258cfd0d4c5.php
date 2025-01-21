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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_e60b09d2d3c631ab2c109c0c47b771d91b35d5aec311c61918ac3c9034bd4202 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 18
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 20
        if (($context["icon"] ?? null)) {
            // line 21
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 23
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 27
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 27);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 33
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "  ";
        // line 36
        yield "  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  ";
        // line 38
        yield "  <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
  <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  ";
        // line 45
        yield "  <nav class='navbar shadow-sm'>
  <div class='container-fluid d-flex'>
  <div class='brandlogo'>
  ";
        // line 49
        yield "  ";
        if (($context["logo"] ?? null)) {
            // line 50
            yield "              <a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/></a>
            ";
        } else {
            // line 52
            yield "              <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
            ";
        }
        // line 54
        yield "</div>

            <ul class='navbar-nav flex-row align-items-center' id='leftnav'>
        
            <li class='nav-item me-3'>
            <div class='search-bar d-lg-block d-md-none d-sm-none text-center py-2 w-90' id='search-firstnav'>
            ";
        // line 60
        yield ($context["search"] ?? null);
        yield "
            </div></header></li>




            ";
        // line 67
        yield "             <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"";
        // line 69
        yield ($context["account"] ?? null);
        yield "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <i class=\"fa-solid fa-user\"></i> 
              
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\" style='position: absolute; inset: 0px auto auto -60px; margin: 0px; 
                transform : translate3d(5px, 28px,0px);'>
                  ";
        // line 75
        if ( !($context["logged"] ?? null)) {
            // line 76
            yield "                    <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 77
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                  ";
        } else {
            // line 79
            yield "                    <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 80
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 81
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 82
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 83
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                  ";
        }
        // line 85
        yield "                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 88
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> 
            </a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 90
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\">
            <i class=\"fa-solid fa-cart-shopping\"></i></a></li>              
       </ul>
       </div>
       </nav>
        <div class='search-bar d-lg-none d-md-d-block  text-center py-2 w-90' >
        
            ";
        // line 97
        yield ($context["search"] ?? null);
        yield "
            </div>


  ";
        // line 116
        yield "

  ";
        // line 119
        yield "  
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <main>
    ";
        // line 123
        yield ($context["menu"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  328 => 123,  322 => 119,  318 => 116,  311 => 97,  299 => 90,  292 => 88,  287 => 85,  280 => 83,  274 => 82,  268 => 81,  262 => 80,  255 => 79,  248 => 77,  241 => 76,  239 => 75,  230 => 69,  226 => 67,  217 => 60,  209 => 54,  201 => 52,  189 => 50,  186 => 49,  181 => 45,  173 => 38,  170 => 36,  168 => 35,  159 => 33,  154 => 32,  143 => 30,  138 => 29,  129 => 27,  124 => 26,  111 => 24,  106 => 23,  100 => 21,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
  {# importing bootstrap #}
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  {# importing AOS animation  #}
  <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
  <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  {# navbar #}
  <nav class='navbar shadow-sm'>
  <div class='container-fluid d-flex'>
  <div class='brandlogo'>
  {# logo here #}
  {% if logo %}
              <a href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/></a>
            {% else %}
              <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
            {% endif %}
</div>

            <ul class='navbar-nav flex-row align-items-center' id='leftnav'>
        
            <li class='nav-item me-3'>
            <div class='search-bar d-lg-block d-md-none d-sm-none text-center py-2 w-90' id='search-firstnav'>
            {{search}}
            </div></header></li>




            {# profile dropdown #}
             <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"{{ account }}\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <i class=\"fa-solid fa-user\"></i> 
              
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\" style='position: absolute; inset: 0px auto auto -60px; margin: 0px; 
                transform : translate3d(5px, 28px,0px);'>
                  {% if not logged %}
                    <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                    <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
                  {% else %}
                    <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                    <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                    <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                    <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                    <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
                  {% endif %}
                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\"><i class=\"fa-solid fa-heart\"></i> 
            </a></li>
            <li class=\"list-inline-item\"><a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\">
            <i class=\"fa-solid fa-cart-shopping\"></i></a></li>              
       </ul>
       </div>
       </nav>
        <div class='search-bar d-lg-none d-md-d-block  text-center py-2 w-90' >
        
            {{search}}
            </div>


  {# <nav id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-3\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\">{{ currency }}</li>
            <li class=\"list-inline-item\">{{ language }}</li>
          </ul>
        </div>
        
        <div class=\"col-md-5\">{{ search }}</div>
        <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">{{ cart }}</div>
      </div>
    </div>
  </header> #}


  {# importing bootsrap js #}
  
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <main>
    {{ menu }}
", "catalog/view/template/common/header.twig", "/var/www/html/opencart/upload/catalog/view/template/common/header.twig");
    }
}
