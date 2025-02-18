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
        // line 18
        if (($context["description"] ?? null)) {
            // line 19
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 21
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 22
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 24
        yield "  ";
        if (($context["global_script"] ?? null)) {
            // line 25
            yield "  <script>";
            yield ($context["global_script"] ?? null);
            yield "</script>
  ";
        }
        // line 27
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 28
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 29
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 30
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 32
        if (($context["icon"] ?? null)) {
            // line 33
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 35
        yield "  

  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 41);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 44
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 44);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 44);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 47
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "  ";
        // line 50
        yield "  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  ";
        // line 52
        yield "  <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">


  <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

";
        // line 58
        yield "


</head>
<body>


<div id=\"container\">
  <div id=\"alert\"></div>
  ";
        // line 68
        yield "  <nav class='navbar shadow-sm'>
  <div class='container-fluid d-flex'>
  <div class='brandlogo'>
  ";
        // line 72
        yield "  ";
        if (($context["logo"] ?? null)) {
            // line 73
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
            // line 75
            yield "              <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
            ";
        }
        // line 77
        yield "</div>

            <ul class='navbar-nav flex-row align-items-center' id='leftnav'>
        
            <li class='nav-item me-3'>
            <div class='search-bar d-lg-block d-md-none d-sm-none text-center py-2 w-90' id='search-firstnav'>
            ";
        // line 83
        yield ($context["search"] ?? null);
        yield "
            </div></header></li>




            ";
        // line 90
        yield "             <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"";
        // line 92
        yield ($context["account"] ?? null);
        yield "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <i class=\"fa-solid fa-user\"></i> 
              
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\" style='position: absolute; inset: 0px auto auto -60px; margin: 0px; 
                transform : translate3d(5px, 28px,0px);'>
                  ";
        // line 98
        if ( !($context["logged"] ?? null)) {
            // line 99
            yield "                    <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 100
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                  ";
        } else {
            // line 102
            yield "                    <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 103
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 104
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 105
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 106
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                  ";
        }
        // line 108
        yield "                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 111
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> 
            </a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 113
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
        // line 120
        yield ($context["search"] ?? null);
        yield "
            </div>


  ";
        // line 139
        yield "

  ";
        // line 142
        yield "  
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  <main>
    ";
        // line 146
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
        return array (  359 => 146,  353 => 142,  349 => 139,  342 => 120,  330 => 113,  323 => 111,  318 => 108,  311 => 106,  305 => 105,  299 => 104,  293 => 103,  286 => 102,  279 => 100,  272 => 99,  270 => 98,  261 => 92,  257 => 90,  248 => 83,  240 => 77,  232 => 75,  220 => 73,  217 => 72,  212 => 68,  201 => 58,  194 => 52,  191 => 50,  189 => 49,  180 => 47,  175 => 46,  164 => 44,  159 => 43,  150 => 41,  145 => 40,  132 => 38,  128 => 37,  124 => 35,  118 => 33,  116 => 32,  111 => 30,  107 => 29,  103 => 28,  98 => 27,  92 => 25,  89 => 24,  83 => 22,  80 => 21,  74 => 19,  72 => 18,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
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
  {% if global_script %}
  <script>{{global_script|raw}}</script>
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

{# -------------------------------------------------------------------------------- #}



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
