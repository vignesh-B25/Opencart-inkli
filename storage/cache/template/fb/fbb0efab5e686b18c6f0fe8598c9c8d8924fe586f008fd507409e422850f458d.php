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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_7cf92cfe029ef2cb96854bca9bb0b6523dfc32b1656115a7f28512b35dcf1e70 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            if (($context["error_warning"] ?? null)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "  ";
            if (($context["error_stock"] ?? null)) {
                // line 6
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 8
            yield "  ";
            if (($context["success"] ?? null)) {
                // line 9
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 11
            yield "  ";
            if (($context["attention"] ?? null)) {
                // line 12
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 14
            yield "   
  <h1>";
            // line 15
            yield ($context["heading_title"] ?? null);
            if (($context["weight"] ?? null)) {
                yield " (";
                yield ($context["weight"] ?? null);
                yield ")";
            }
            yield "</h1>
  <div class=\"container\">
  <div id=\"cart\" class=\"row d-flex table-responsive\">
  
    <table class=\"col-4 table table-bordered\">
      <thead>
        <tr>
          ";
            // line 25
            yield "          <th class=\"text-end\">";
            yield ($context["column_price"] ?? null);
            yield "</th>
          <th class=\"text-end\">";
            // line 26
            yield ($context["column_total"] ?? null);
            yield "</th>
          
        </tr>
      </thead>
      
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                yield "          ";
                // line 33
                yield "          
          
            ";
                // line 37
                yield "              ";
                // line 59
                yield "              ";
                // line 67
                yield "              ";
                // line 70
                yield "            ";
                // line 71
                yield "            ";
                // line 73
                yield "          ";
                // line 74
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "   
      <tfoot   id=\"checkout-total\">
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 78
                yield "          <tr>
            <td colspan=\"1\" class=\"text-end\"><strong>";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 79);
                yield "</strong></td>
            <td class=\"text-end\">";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 80);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "      ";
            // line 84
            yield "    <div class='col-8 d-flex' id=\"cartprd\">
     ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                yield "    <div class='col-md-4 col-sm-12 col-lg-3 text-center' id=\"prdcrd\">

      ";
                // line 98
                yield "
            <!-- Product Image -->
      ";
                // line 100
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 100)) {
                    // line 101
                    yield "      ";
                    // line 105
                    yield "      <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
                    yield "\">
        <img src=\"";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                    yield "\" class='col-8 d-md-6 d-sm-12' />
      </a>
    
      ";
                }
                // line 110
                yield "      ";
                // line 111
                yield "      <!-- Product Details -->
      <div class='col-8 d-md-6-ml-0 d-sm-12' id=\"qntbtn\">
      <form method=\"post\" data-oc-target=\"#shopping-cart\" >
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"";
                // line 115
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 115);
                yield "\" size=\"1\" class=\"form-control";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 115)) {
                    yield " is-invalid";
                }
                yield "\"/>
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 116);
                yield "\"/>
                  <button type=\"submit\" formaction=\"";
                // line 117
                yield ($context["edit"] ?? null);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_update"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 118);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>
      </div>
      <h6>Name: ";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                yield "</h6>
      <h6>Model: ";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 123);
                yield "</h6>
        
      <h6>Price: ";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125);
                yield "</h6>
       <ul class=\"list-unstyled mb-0\">
                
                ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 128));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 129
                    yield "                  <li>
                    <small> - ";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 130);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 130);
                    yield "</small>
                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 133)) {
                    // line 134
                    yield "                  <li>
                    <small> - ";
                    // line 135
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 135);
                    yield "</small>
                  </li>
                ";
                }
                // line 138
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 138)) {
                    // line 139
                    yield "                  <li>
                    <small> - ";
                    // line 140
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 140);
                    yield "</small>
                  </li>
                ";
                }
                // line 143
                yield "              </ul>
                ";
                // line 144
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 144)) {
                    // line 145
                    yield "                <small class=\"invalid-feedback d-block\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 145);
                    yield "</small>
              ";
                }
                // line 147
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147)) {
                    // line 148
                    yield "      <h5 style=\"color: red;\">Special Price: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 148);
                    yield "</h5>
      ";
                }
                // line 150
                yield "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "    </div>
  </div>
  </div>
      </tfoot>
    </table>
  </div>
  </div>

  ";
            // line 160
            if (($context["modules"] ?? null)) {
                // line 161
                yield "    <h2>";
                yield ($context["text_next"] ?? null);
                yield "</h2>
    <p>";
                // line 162
                yield ($context["text_next_choice"] ?? null);
                yield "</p>
    <div id=\"accordion\" class=\"accordion\">
      ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 165
                    yield "        ";
                    yield $context["module"];
                    yield "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                yield "    </div>
  ";
            }
            // line 169
            yield "
  <br/>
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col\"><a href=\"";
            // line 173
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-light\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a></div>
    <div class=\"col text-end\"><a href=\"";
            // line 174
            yield ($context["checkout"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a></div>
  </div>
";
        } else {
            // line 177
            yield "  <h1>";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
  <p>";
            // line 178
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  <div class=\"text-end\"><a href=\"";
            // line 179
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
";
        }
        // line 181
        yield "

  


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  398 => 181,  391 => 179,  387 => 178,  382 => 177,  374 => 174,  368 => 173,  362 => 169,  358 => 167,  349 => 165,  345 => 164,  340 => 162,  335 => 161,  333 => 160,  323 => 152,  316 => 150,  310 => 148,  307 => 147,  301 => 145,  299 => 144,  296 => 143,  288 => 140,  285 => 139,  282 => 138,  274 => 135,  271 => 134,  268 => 133,  257 => 130,  254 => 129,  250 => 128,  244 => 125,  239 => 123,  235 => 122,  226 => 118,  220 => 117,  216 => 116,  208 => 115,  202 => 111,  200 => 110,  189 => 106,  184 => 105,  182 => 101,  180 => 100,  176 => 98,  172 => 86,  168 => 85,  165 => 84,  163 => 83,  154 => 80,  150 => 79,  147 => 78,  143 => 77,  139 => 75,  133 => 74,  131 => 73,  129 => 71,  127 => 70,  125 => 67,  123 => 59,  121 => 37,  117 => 33,  115 => 32,  111 => 31,  103 => 26,  98 => 25,  83 => 15,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
   
  <h1>{{ heading_title }}{% if weight %} ({{ weight }}){% endif %}</h1>
  <div class=\"container\">
  <div id=\"cart\" class=\"row d-flex table-responsive\">
  
    <table class=\"col-4 table table-bordered\">
      <thead>
        <tr>
          {# <th class=\"text-center\">{{ column_image }}</th>
          <th>{{ column_name }}</th>
          <th>{{ column_quantity }}</th> #}
          <th class=\"text-end\">{{ column_price }}</th>
          <th class=\"text-end\">{{ column_total }}</th>
          
        </tr>
      </thead>
      
        {% for product in products %}
          {# <tr> #}
          
          
            {# <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/></a>{% endif %}</td>
            <td class=\"text-start text-wrap\"><a href=\"{{ product.href }}\">{{ product.name }}</a>{% if not product.stock %} <span class=\"text-danger\">***</span>{% endif %} #}
              {# <ul class=\"list-unstyled mb-0\">
                <li>
                  <small> - {{ text_model }}: {{ product.model }}</small>
                </li>
                {% for option in product.option %}
                  <li>
                    <small> - {{ option.name }}: {{ option.value }}</small>
                  </li>
                {% endfor %}
                {% if product.subscription %}
                  <li>
                    <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                  </li>
                {% endif %}
                {% if product.reward %}
                  <li>
                    <small> - {{ text_points }}: {{ product.reward }}</small>
                  </li>
                {% endif %}
              </ul>
            </td>
            <td> #}
              {# <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\"/>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
                  <button type=\"submit\" formaction=\"{{ edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"{{ product.remove }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form> #}
              {# {% if product.minimum %}
                <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
              {% endif %} #}
            {# </td> #}
            {# <td class=\"text-end\">{{ product.price }}</td>
            <td class=\"text-end\">{{ product.total }}</td> #}
          {# </tr> #}
        {% endfor %}
   
      <tfoot   id=\"checkout-total\">
        {% for total in totals %}
          <tr>
            <td colspan=\"1\" class=\"text-end\"><strong>{{ total.title }}</strong></td>
            <td class=\"text-end\">{{ total.text }}</td>
          </tr>
        {% endfor %}
      {# -----------------------design product  #}
    <div class='col-8 d-flex' id=\"cartprd\">
     {% for product in products %}
    <div class='col-md-4 col-sm-12 col-lg-3 text-center' id=\"prdcrd\">

      {# <div>
      <form method=\"post\" data-oc-target=\"#shopping-cart\" class='z-1 d-flex gap-2'>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\"/>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
                  <button type=\"submit\" formaction=\"{{ edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"{{ product.remove }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>
      </div> #}

            <!-- Product Image -->
      {% if product.thumb %}
      {# <div class=\"z-1 d-flex gap-2\">
            <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"btn btn-primary mb-1\"><i class=\"fa-solid fa-cart-shopping\"></i></button>
            <a href=\"{{ product.remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-remove\"></i></a>
          </div> #}
      <a href=\"{{ product.href }}\">
        <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class='col-8 d-md-6 d-sm-12' />
      </a>
    
      {% endif %}
      {# -------------------------------desing the products ----------------------------------- #}
      <!-- Product Details -->
      <div class='col-8 d-md-6-ml-0 d-sm-12' id=\"qntbtn\">
      <form method=\"post\" data-oc-target=\"#shopping-cart\" >
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\"/>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
                  <button type=\"submit\" formaction=\"{{ edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"{{ product.remove }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>
      </div>
      <h6>Name: {{ product.name }}</h6>
      <h6>Model: {{ product.model }}</h6>
        
      <h6>Price: {{ product.price }}</h6>
       <ul class=\"list-unstyled mb-0\">
                
                {% for option in product.option %}
                  <li>
                    <small> - {{ option.name }}: {{ option.value }}</small>
                  </li>
                {% endfor %}
                {% if product.subscription %}
                  <li>
                    <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                  </li>
                {% endif %}
                {% if product.reward %}
                  <li>
                    <small> - {{ text_points }}: {{ product.reward }}</small>
                  </li>
                {% endif %}
              </ul>
                {% if product.minimum %}
                <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
              {% endif %}
      {% if product.special %}
      <h5 style=\"color: red;\">Special Price: {{ product.special }}</h5>
      {% endif %}
    </div>
    {% endfor %}
    </div>
  </div>
  </div>
      </tfoot>
    </table>
  </div>
  </div>

  {% if modules %}
    <h2>{{ text_next }}</h2>
    <p>{{ text_next_choice }}</p>
    <div id=\"accordion\" class=\"accordion\">
      {% for module in modules %}
        {{ module }}
      {% endfor %}
    </div>
  {% endif %}

  <br/>
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col\"><a href=\"{{ continue }}\" class=\"btn btn-light\">{{ button_shopping }}</a></div>
    <div class=\"col text-end\"><a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ button_checkout }}</a></div>
  </div>
{% else %}
  <h1>{{ heading_title }}</h1>
  <p>{{ text_no_results }}</p>
  <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
{% endif %}


  


", "catalog/view/template/checkout/cart_list.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/cart_list.twig");
    }
}
