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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_c4cc114116a8bb2a3b83cd3d997562685f9e8e3c3ea5902b7e5e47df02964995 extends Template
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
<div id=\"product-info\" class=\"container\">
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
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row mb-3\">
        ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 13
            yield "          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                yield "              ";
                // line 17
                yield "                <a href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\">
                <img src=\"";
                // line 18
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["img_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["img_alt"] ?? null);
                yield "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 20
            yield "              ";
            // line 21
            yield "              ";
            if (($context["images"] ?? null)) {
                // line 22
                yield "                <div>
                  ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 24);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\">
                    <img src=\"";
                    // line 25
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 25);
                    yield "\" title=\"";
                    yield ($context["img_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["img_alt"] ?? null);
                    yield "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "              
                </div>
              ";
            }
            // line 30
            yield "            </div>
          </div>
        ";
        }
        // line 33
        yield "        <div class=\"col-sm\">
          <h1>";
        // line 34
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 36
        if (($context["manufacturer"] ?? null)) {
            // line 37
            yield "              <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
            ";
        }
        // line 39
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
            ";
        // line 40
        if (($context["reward"] ?? null)) {
            // line 41
            yield "              <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
            ";
        }
        // line 43
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
          </ul>
          ";
        // line 45
        if (($context["review_status"] ?? null)) {
            // line 46
            yield "            <div class=\"rating\">
              <p>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                yield "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 50
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                } else {
                    // line 52
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                }
                // line 54
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a></p>
            </div>
          ";
        }
        // line 58
        yield "          ";
        if (($context["price"] ?? null)) {
            // line 59
            yield "            <ul class=\"list-unstyled\">
              ";
            // line 60
            if ( !($context["special"] ?? null)) {
                // line 61
                yield "                <li><h2><span class=\"price-new\">";
                yield ($context["price"] ?? null);
                yield "</span></h2></li>
              ";
            } else {
                // line 63
                yield "                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 64
                yield ($context["special"] ?? null);
                yield "</span></h2></li>
              ";
            }
            // line 66
            yield "              ";
            if (($context["tax"] ?? null)) {
                // line 67
                yield "                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
              ";
            }
            // line 69
            yield "              ";
            if (($context["points"] ?? null)) {
                // line 70
                yield "                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
              ";
            }
            // line 72
            yield "              ";
            if (($context["discounts"] ?? null)) {
                // line 73
                yield "                <li>
                  <hr>
                </li>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 77
                    yield "                  <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 77);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 77);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "              ";
            }
            // line 80
            yield "            </ul>
          ";
        }
        // line 82
        yield "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 84
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 85
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 87
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
          <br/>
          ";
        // line 91
        yield "          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 93
        if (($context["options"] ?? null)) {
            // line 94
            yield "                <hr>
                <h3>";
            // line 95
            yield ($context["text_option"] ?? null);
            yield "</h3>
                <div>
                  ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 98
                yield "
                    ";
                // line 99
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 99) == "select")) {
                    // line 100
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 100)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 101);
                    yield "</label>
                        <select name=\"option[";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                    yield "\" class=\"form-select\">
                          <option value=\"\">";
                    // line 103
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                          ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 104));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 105
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 105);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 105);
                        yield "
                              ";
                        // line 106
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106)) {
                            // line 107
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 107);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 107);
                            yield ")
                              ";
                        }
                        // line 108
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    yield "                        </select>
                        <div id=\"error-option-";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 114
                yield "
                    ";
                // line 115
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 115) == "radio")) {
                    // line 116
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 116)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 117);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 118
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                    yield "\">
                          ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 120
                        yield "                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[";
                        // line 121
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 121);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 121);
                        yield "\" class=\"form-check-input\"/>
                              <label for=\"input-option-value-";
                        // line 122
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 122);
                        yield "\" class=\"form-check-label\">";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 122)) {
                            yield "<img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 122);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 123
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 123);
                        yield "
                                ";
                        // line 124
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124)) {
                            // line 125
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 125);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 125);
                            yield ")
                                ";
                        }
                        // line 126
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 133
                yield "
                    ";
                // line 134
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 134) == "checkbox")) {
                    // line 135
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 135)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 136
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 136);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 137
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    yield "\">
                          ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 139
                        yield "                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[";
                        // line 140
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 141
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141)) {
                            // line 142
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 143
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        yield "
                                ";
                        // line 144
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                            // line 145
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                            yield ")
                                ";
                        }
                        // line 146
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 150
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 153
                yield "
                    ";
                // line 154
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 154) == "text")) {
                    // line 155
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 155)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 156
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 156);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 157
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 160
                yield "
                    ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "textarea")) {
                    // line 162
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    yield "</label> <textarea name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163);
                    yield "</textarea>
                        <div id=\"error-option-";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 167
                yield "
                    ";
                // line 168
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "file")) {
                    // line 169
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"button-upload-";
                    // line 170
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    yield "</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                          <input type=\"hidden\" name=\"option[";
                    // line 173
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    yield "\"/>
                        </div>
                        <div id=\"error-option-";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 178
                yield "
                    ";
                // line 179
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 179) == "date")) {
                    // line 180
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 180)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 181
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 181);
                    yield "</label>
                        <input type=\"date\" name=\"option[";
                    // line 182
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 182);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 186
                yield "
                    ";
                // line 187
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 187) == "time")) {
                    // line 188
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 188)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 189);
                    yield "</label>
                        <input type=\"time\" name=\"option[";
                    // line 190
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 190);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 191
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 191);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 194
                yield "
                    ";
                // line 195
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 195) == "datetime")) {
                    // line 196
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 196)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    yield "</label>
                        <input type=\"datetime-local\" name=\"option[";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 202
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "                </div>
              ";
        }
        // line 205
        yield "
              ";
        // line 206
        if (($context["subscription_plans"] ?? null)) {
            // line 207
            yield "                <hr/>
                <h3>";
            // line 208
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                <div class=\"mb-3 required\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                    <option value=\"\">";
            // line 211
            yield ($context["text_select"] ?? null);
            yield "</option>
                    ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 213
                yield "                      <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 213);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 213);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "                  </select>
                  ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 217
                yield "                    <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 217);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 217);
                yield "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        // line 222
        yield "              ";
        // line 223
        yield "              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">";
        // line 225
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 226
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  ";
        // line 228
        yield "                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        yield ($context["button_cart"] ?? null);
        yield "</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 230
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              ";
        // line 233
        if ((($context["minimum"] ?? null) > 1)) {
            // line 234
            yield "                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
              ";
        }
        // line 236
        yield "            </form>
          </div>
        </div>
      </div>

      ";
        // line 242
        yield "      <div class=\"row text-center \" id=\"benefits\">
      <div class=\"col-4\">
        <h1>";
        // line 244
        yield ($context["benefit1"] ?? null);
        yield "</h1>
      </div>

    <div class=\"col-4\">
        <h1>";
        // line 248
        yield ($context["benefit2"] ?? null);
        yield "</h1>
      </div>
          <div class=\"col-4\">
        <h1>";
        // line 251
        yield ($context["benefit3"] ?? null);
        yield "</h1>
      </div>


      

      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 258
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
        ";
        // line 259
        if (($context["attribute_groups"] ?? null)) {
            // line 260
            yield "          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
        ";
        }
        // line 262
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 263
            yield "          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
        ";
        }
        // line 265
        yield "      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 267
        yield ($context["description"] ?? null);
        yield "
          ";
        // line 268
        if (($context["tags"] ?? null)) {
            // line 269
            yield "            <p>";
            yield ($context["text_tags"] ?? null);
            yield "
              ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 271
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 271);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 271);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 271)) {
                    yield ",";
                }
                // line 272
                yield "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            yield "            </p>
          ";
        }
        // line 275
        yield "        </div>
        ";
        // line 276
        if (($context["attribute_groups"] ?? null)) {
            // line 277
            yield "          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 281
                yield "                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>";
                // line 283
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 283);
                yield "</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 287));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 288
                    yield "                      <tr>
                        <td>";
                    // line 289
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 289);
                    yield "</td>
                        <td>";
                    // line 290
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 290);
                    yield "</td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            yield "              </table>
            </div>
          </div>
        ";
        }
        // line 299
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 300
            yield "          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
        ";
        }
        // line 302
        yield " 
      
      </div>
      ";
        // line 305
        yield ($context["related"] ?? null);
        yield "
      ";
        // line 306
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 308
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 324
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart.info&language=";
        // line 353
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 372
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
        return "catalog/view/template/product/product.twig";
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
        return array (  1144 => 372,  1122 => 353,  1090 => 324,  1071 => 308,  1066 => 306,  1062 => 305,  1057 => 302,  1051 => 300,  1048 => 299,  1042 => 295,  1035 => 293,  1026 => 290,  1022 => 289,  1019 => 288,  1015 => 287,  1008 => 283,  1004 => 281,  1000 => 280,  995 => 277,  993 => 276,  990 => 275,  986 => 273,  972 => 272,  963 => 271,  946 => 270,  941 => 269,  939 => 268,  935 => 267,  931 => 265,  925 => 263,  922 => 262,  916 => 260,  914 => 259,  910 => 258,  900 => 251,  894 => 248,  887 => 244,  883 => 242,  876 => 236,  870 => 234,  868 => 233,  862 => 230,  856 => 228,  852 => 226,  848 => 225,  844 => 223,  842 => 222,  837 => 219,  826 => 217,  822 => 216,  819 => 215,  808 => 213,  804 => 212,  800 => 211,  794 => 208,  791 => 207,  789 => 206,  786 => 205,  782 => 203,  776 => 202,  770 => 199,  762 => 198,  756 => 197,  749 => 196,  747 => 195,  744 => 194,  738 => 191,  730 => 190,  724 => 189,  717 => 188,  715 => 187,  712 => 186,  706 => 183,  698 => 182,  692 => 181,  685 => 180,  683 => 179,  680 => 178,  674 => 175,  667 => 173,  653 => 172,  646 => 170,  639 => 169,  637 => 168,  634 => 167,  628 => 164,  614 => 163,  607 => 162,  605 => 161,  602 => 160,  596 => 157,  582 => 156,  575 => 155,  573 => 154,  570 => 153,  564 => 150,  561 => 149,  553 => 146,  546 => 145,  544 => 144,  539 => 143,  526 => 142,  524 => 141,  514 => 140,  511 => 139,  507 => 138,  503 => 137,  499 => 136,  492 => 135,  490 => 134,  487 => 133,  481 => 130,  478 => 129,  470 => 126,  463 => 125,  461 => 124,  456 => 123,  440 => 122,  432 => 121,  429 => 120,  425 => 119,  421 => 118,  417 => 117,  410 => 116,  408 => 115,  405 => 114,  399 => 111,  396 => 110,  389 => 108,  382 => 107,  380 => 106,  373 => 105,  369 => 104,  365 => 103,  359 => 102,  353 => 101,  346 => 100,  344 => 99,  341 => 98,  337 => 97,  332 => 95,  329 => 94,  327 => 93,  323 => 91,  317 => 87,  310 => 85,  304 => 84,  300 => 82,  296 => 80,  293 => 79,  282 => 77,  278 => 76,  273 => 73,  270 => 72,  262 => 70,  259 => 69,  251 => 67,  248 => 66,  243 => 64,  238 => 63,  232 => 61,  230 => 60,  227 => 59,  224 => 58,  215 => 55,  209 => 54,  205 => 52,  201 => 50,  198 => 49,  194 => 48,  190 => 46,  188 => 45,  180 => 43,  172 => 41,  170 => 40,  163 => 39,  153 => 37,  151 => 36,  146 => 34,  143 => 33,  138 => 30,  133 => 27,  121 => 25,  114 => 24,  110 => 23,  107 => 22,  104 => 21,  102 => 20,  93 => 18,  86 => 17,  84 => 16,  82 => 15,  78 => 13,  76 => 12,  71 => 10,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <div class=\"row mb-3\">
        {% if thumb or images %}
          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              {% if thumb %}
              {# this is for product image #}
                <a href=\"{{ popup }}\" title=\"{{ heading_title }}\">
                <img src=\"{{ thumb }}\" title=\"{{ img_title }}\" alt=\"{{ img_alt}}\" class=\"img-thumbnail mb-3\"/></a>
              {% endif %}
              {# this is if no image is uploaded  #}
              {% if images %}
                <div>
                  {% for image in images %}
                    <a href=\"{{ image.popup }}\" title=\"{{ heading_title }}\">
                    <img src=\"{{ image.thumb }}\" title=\"{{ img_title }}\" alt=\"{{ img_alt }}\" class=\"img-thumbnail\"/></a>&nbsp;
                  {% endfor %}
              
                </div>
              {% endif %}
            </div>
          </div>
        {% endif %}
        <div class=\"col-sm\">
          <h1>{{ heading_title }}</h1>
          <ul class=\"list-unstyled\">
            {% if manufacturer %}
              <li>{{ text_manufacturer }} <a href=\"{{ manufacturers }}\">{{ manufacturer }}</a></li>
            {% endif %}
            <li>{{ text_model }} {{ model }}</li>
            {% if reward %}
              <li>{{ text_reward }} {{ reward }}</li>
            {% endif %}
            <li>{{ text_stock }} {{ stock }}</li>
          </ul>
          {% if review_status %}
            <div class=\"rating\">
              <p>
                {% for i in 1..5 %}
                  {% if rating < i %}
                    <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  {% else %}
                    <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  {% endif %}
                {% endfor %}
                <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_reviews }}</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_write }}</a></p>
            </div>
          {% endif %}
          {% if price %}
            <ul class=\"list-unstyled\">
              {% if not special %}
                <li><h2><span class=\"price-new\">{{ price }}</span></h2></li>
              {% else %}
                <li><span class=\"price-old\">{{ price }}</span></li>
                <li><h2><span class=\"price-new\">{{ special }}</span></h2></li>
              {% endif %}
              {% if tax %}
                <li>{{ text_tax }} {{ tax }}</li>
              {% endif %}
              {% if points %}
                <li>{{ text_points }} {{ points }}</li>
              {% endif %}
              {% if discounts %}
                <li>
                  <hr>
                </li>
                {% for discount in discounts %}
                  <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>
                {% endfor %}
              {% endif %}
            </ul>
          {% endif %}
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_wishlist }}\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
          </form>
          <br/>
          {# ---form  #}
          <div id=\"product\">
            <form id=\"form-product\">
              {% if options %}
                <hr>
                <h3>{{ text_option }}</h3>
                <div>
                  {% for option in options %}

                    {% if option.type == 'select' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                          <option value=\"\">{{ text_select }}</option>
                          {% for option_value in option.product_option_value %}
                            <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                              {% if option_value.price %}
                                ({{ option_value.price_prefix }}{{ option_value.price }})
                              {% endif %}</option>
                          {% endfor %}
                        </select>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                              <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">{% if option_value.image %}<img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}{{ option_value.price }})
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                {% if option_value.image %}
                                  <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}{{ option_value.price }})
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"button-upload-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                          <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"\" id=\"input-option-{{ option.product_option_id }}\"/>
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"date\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"time\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"datetime-local\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}
                  {% endfor %}
                </div>
              {% endif %}

              {% if subscription_plans %}
                <hr/>
                <h3>{{ text_subscription }}</h3>
                <div class=\"mb-3 required\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for subscription_plan in subscription_plans %}
                      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                    {% endfor %}
                  </select>
                  {% for subscription_plan in subscription_plans %}
                    <div id=\"subscription-description-{{ subscription_plan.subscription_plan_id }}\" class=\"form-text subscription d-none\">{{ subscription_plan.description }}</div>
                  {% endfor %}
                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}
              {# input #}
              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">{{ entry_qty }}</div>
                  <input type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  {# btn #}
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">{{ button_cart }}</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              {% if minimum > 1 %}
                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
              {% endif %}
            </form>
          </div>
        </div>
      </div>

      {# benefit fields  here #}
      <div class=\"row text-center \" id=\"benefits\">
      <div class=\"col-4\">
        <h1>{{benefit1}}</h1>
      </div>

    <div class=\"col-4\">
        <h1>{{benefit2}}</h1>
      </div>
          <div class=\"col-4\">
        <h1>{{benefit3}}</h1>
      </div>


      

      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_description }}</a></li>
        {% if attribute_groups %}
          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
        {% endif %}
        {% if review_status %}
          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_review }}</a></li>
        {% endif %}
      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">{{ description }}
          {% if tags %}
            <p>{{ text_tags }}
              {% for tag in tags %}
                <a href=\"{{ tag.href }}\">{{ tag.tag }}</a>{% if not loop.last %},{% endif %}
              {% endfor %}
            </p>
          {% endif %}
        </div>
        {% if attribute_groups %}
          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                {% for attribute_group in attribute_groups %}
                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>{{ attribute_group.name }}</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for attribute in attribute_group.attribute %}
                      <tr>
                        <td>{{ attribute.name }}</td>
                        <td>{{ attribute.text }}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                {% endfor %}
              </table>
            </div>
          </div>
        {% endif %}
        {% if review_status %}
          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">{{ review }}</div>
        {% endif %}
 
      
      </div>
      {{ related }}
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart.info&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/product/product.twig", "/var/www/html/opencart/upload/catalog/view/template/product/product.twig");
    }
}
