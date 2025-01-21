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
                yield "                <a href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\">
                <img src=\"";
                // line 17
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 19
            yield "              ";
            if (($context["images"] ?? null)) {
                // line 20
                yield "                <div>
                  ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 22
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 22);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\">
                    <img src=\"";
                    // line 23
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 23);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "                </div>
              ";
            }
            // line 27
            yield "            </div>
          </div>
        ";
        }
        // line 30
        yield "        <div class=\"col-sm\">
          <h1>";
        // line 31
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 33
        if (($context["manufacturer"] ?? null)) {
            // line 34
            yield "              <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
            ";
        }
        // line 36
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
            ";
        // line 37
        if (($context["reward"] ?? null)) {
            // line 38
            yield "              <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
            ";
        }
        // line 40
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
          </ul>
          ";
        // line 42
        if (($context["review_status"] ?? null)) {
            // line 43
            yield "            <div class=\"rating\">
              <p>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                yield "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 47
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                } else {
                    // line 49
                    yield "                    <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                  ";
                }
                // line 51
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a></p>
            </div>
          ";
        }
        // line 55
        yield "          ";
        if (($context["price"] ?? null)) {
            // line 56
            yield "            <ul class=\"list-unstyled\">
              ";
            // line 57
            if ( !($context["special"] ?? null)) {
                // line 58
                yield "                <li><h2><span class=\"price-new\">";
                yield ($context["price"] ?? null);
                yield "</span></h2></li>
              ";
            } else {
                // line 60
                yield "                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 61
                yield ($context["special"] ?? null);
                yield "</span></h2></li>
              ";
            }
            // line 63
            yield "              ";
            if (($context["tax"] ?? null)) {
                // line 64
                yield "                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
              ";
            }
            // line 66
            yield "              ";
            if (($context["points"] ?? null)) {
                // line 67
                yield "                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
              ";
            }
            // line 69
            yield "              ";
            if (($context["discounts"] ?? null)) {
                // line 70
                yield "                <li>
                  <hr>
                </li>
                ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 74
                    yield "                  <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 74);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 74);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "              ";
            }
            // line 77
            yield "            </ul>
          ";
        }
        // line 79
        yield "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 81
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 82
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 84
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
          <br/>
          ";
        // line 88
        yield "          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 90
        if (($context["options"] ?? null)) {
            // line 91
            yield "                <hr>
                <h3>";
            // line 92
            yield ($context["text_option"] ?? null);
            yield "</h3>
                <div>
                  ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 95
                yield "
                    ";
                // line 96
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 96) == "select")) {
                    // line 97
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 97)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 98);
                    yield "</label>
                        <select name=\"option[";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    yield "\" class=\"form-select\">
                          <option value=\"\">";
                    // line 100
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                          ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 102
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 102);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 102);
                        yield "
                              ";
                        // line 103
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 103)) {
                            // line 104
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 104);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104);
                            yield ")
                              ";
                        }
                        // line 105
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    yield "                        </select>
                        <div id=\"error-option-";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 111
                yield "
                    ";
                // line 112
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 112) == "radio")) {
                    // line 113
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 113)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 115);
                    yield "\">
                          ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 116));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 117
                        yield "                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[";
                        // line 118
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                        yield "\" class=\"form-check-input\"/>
                              <label for=\"input-option-value-";
                        // line 119
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" class=\"form-check-label\">";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 119)) {
                            yield "<img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 119);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 119);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 119);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 120
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 120);
                        yield "
                                ";
                        // line 121
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121)) {
                            // line 122
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122);
                            yield ")
                                ";
                        }
                        // line 123
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 127
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 127);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 130
                yield "
                    ";
                // line 131
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 131) == "checkbox")) {
                    // line 132
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 132)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 133
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 134
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    yield "\">
                          ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 136
                        yield "                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[";
                        // line 137
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 137);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 137);
                        yield "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 137);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 138
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 138)) {
                            // line 139
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 139);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 139);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 139)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 139);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 139);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 140
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                        yield "
                                ";
                        // line 141
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 141)) {
                            // line 142
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                            yield ")
                                ";
                        }
                        // line 143
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 147
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 150
                yield "
                    ";
                // line 151
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "text")) {
                    // line 152
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 153);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 157
                yield "
                    ";
                // line 158
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "textarea")) {
                    // line 159
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 159)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 160
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    yield "</label> <textarea name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 160);
                    yield "</textarea>
                        <div id=\"error-option-";
                    // line 161
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 164
                yield "
                    ";
                // line 165
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 165) == "file")) {
                    // line 166
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 166)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"button-upload-";
                    // line 167
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    yield "</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-";
                    // line 169
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                          <input type=\"hidden\" name=\"option[";
                    // line 170
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    yield "\"/>
                        </div>
                        <div id=\"error-option-";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 175
                yield "
                    ";
                // line 176
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176) == "date")) {
                    // line 177
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 177)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 178
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    yield "</label>
                        <input type=\"date\" name=\"option[";
                    // line 179
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 179);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 180
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 183
                yield "
                    ";
                // line 184
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 184) == "time")) {
                    // line 185
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 185)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 186
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 186);
                    yield "</label>
                        <input type=\"time\" name=\"option[";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 187);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 191
                yield "
                    ";
                // line 192
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "datetime")) {
                    // line 193
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 194
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    yield "</label>
                        <input type=\"datetime-local\" name=\"option[";
                    // line 195
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 195);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 196
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 199
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            yield "                </div>
              ";
        }
        // line 202
        yield "
              ";
        // line 203
        if (($context["subscription_plans"] ?? null)) {
            // line 204
            yield "                <hr/>
                <h3>";
            // line 205
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                <div class=\"mb-3 required\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                    <option value=\"\">";
            // line 208
            yield ($context["text_select"] ?? null);
            yield "</option>
                    ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 210
                yield "                      <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 210);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 210);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "                  </select>
                  ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 214
                yield "                    <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 214);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 214);
                yield "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        // line 219
        yield "              ";
        // line 220
        yield "              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">";
        // line 222
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 223
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  ";
        // line 225
        yield "                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        yield ($context["button_cart"] ?? null);
        yield "</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 227
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              ";
        // line 230
        if ((($context["minimum"] ?? null) > 1)) {
            // line 231
            yield "                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
              ";
        }
        // line 233
        yield "            </form>
          </div>
        </div>
      </div>
      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 238
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
        ";
        // line 239
        if (($context["attribute_groups"] ?? null)) {
            // line 240
            yield "          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
        ";
        }
        // line 242
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 243
            yield "          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
        ";
        }
        // line 245
        yield "      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 247
        yield ($context["description"] ?? null);
        yield "
          ";
        // line 248
        if (($context["tags"] ?? null)) {
            // line 249
            yield "            <p>";
            yield ($context["text_tags"] ?? null);
            yield "
              ";
            // line 250
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
                // line 251
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 251);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 251);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 251)) {
                    yield ",";
                }
                // line 252
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
            // line 253
            yield "            </p>
          ";
        }
        // line 255
        yield "        </div>
        ";
        // line 256
        if (($context["attribute_groups"] ?? null)) {
            // line 257
            yield "          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 261
                yield "                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>";
                // line 263
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 263);
                yield "</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
                // line 267
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 267));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 268
                    yield "                      <tr>
                        <td>";
                    // line 269
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 269);
                    yield "</td>
                        <td>";
                    // line 270
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 270);
                    yield "</td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            yield "              </table>
            </div>
          </div>
        ";
        }
        // line 279
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 280
            yield "          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
        ";
        }
        // line 282
        yield "      </div>
      ";
        // line 283
        yield ($context["related"] ?? null);
        yield "
      ";
        // line 284
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 286
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
        // line 302
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
        // line 331
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
        // line 350
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
        return array (  1110 => 350,  1088 => 331,  1056 => 302,  1037 => 286,  1032 => 284,  1028 => 283,  1025 => 282,  1019 => 280,  1016 => 279,  1010 => 275,  1003 => 273,  994 => 270,  990 => 269,  987 => 268,  983 => 267,  976 => 263,  972 => 261,  968 => 260,  963 => 257,  961 => 256,  958 => 255,  954 => 253,  940 => 252,  931 => 251,  914 => 250,  909 => 249,  907 => 248,  903 => 247,  899 => 245,  893 => 243,  890 => 242,  884 => 240,  882 => 239,  878 => 238,  871 => 233,  865 => 231,  863 => 230,  857 => 227,  851 => 225,  847 => 223,  843 => 222,  839 => 220,  837 => 219,  832 => 216,  821 => 214,  817 => 213,  814 => 212,  803 => 210,  799 => 209,  795 => 208,  789 => 205,  786 => 204,  784 => 203,  781 => 202,  777 => 200,  771 => 199,  765 => 196,  757 => 195,  751 => 194,  744 => 193,  742 => 192,  739 => 191,  733 => 188,  725 => 187,  719 => 186,  712 => 185,  710 => 184,  707 => 183,  701 => 180,  693 => 179,  687 => 178,  680 => 177,  678 => 176,  675 => 175,  669 => 172,  662 => 170,  648 => 169,  641 => 167,  634 => 166,  632 => 165,  629 => 164,  623 => 161,  609 => 160,  602 => 159,  600 => 158,  597 => 157,  591 => 154,  577 => 153,  570 => 152,  568 => 151,  565 => 150,  559 => 147,  556 => 146,  548 => 143,  541 => 142,  539 => 141,  534 => 140,  521 => 139,  519 => 138,  509 => 137,  506 => 136,  502 => 135,  498 => 134,  494 => 133,  487 => 132,  485 => 131,  482 => 130,  476 => 127,  473 => 126,  465 => 123,  458 => 122,  456 => 121,  451 => 120,  435 => 119,  427 => 118,  424 => 117,  420 => 116,  416 => 115,  412 => 114,  405 => 113,  403 => 112,  400 => 111,  394 => 108,  391 => 107,  384 => 105,  377 => 104,  375 => 103,  368 => 102,  364 => 101,  360 => 100,  354 => 99,  348 => 98,  341 => 97,  339 => 96,  336 => 95,  332 => 94,  327 => 92,  324 => 91,  322 => 90,  318 => 88,  312 => 84,  305 => 82,  299 => 81,  295 => 79,  291 => 77,  288 => 76,  277 => 74,  273 => 73,  268 => 70,  265 => 69,  257 => 67,  254 => 66,  246 => 64,  243 => 63,  238 => 61,  233 => 60,  227 => 58,  225 => 57,  222 => 56,  219 => 55,  210 => 52,  204 => 51,  200 => 49,  196 => 47,  193 => 46,  189 => 45,  185 => 43,  183 => 42,  175 => 40,  167 => 38,  165 => 37,  158 => 36,  148 => 34,  146 => 33,  141 => 31,  138 => 30,  133 => 27,  129 => 25,  117 => 23,  110 => 22,  106 => 21,  103 => 20,  100 => 19,  91 => 17,  84 => 16,  82 => 15,  78 => 13,  76 => 12,  71 => 10,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
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
                <a href=\"{{ popup }}\" title=\"{{ heading_title }}\">
                <img src=\"{{ thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail mb-3\"/></a>
              {% endif %}
              {% if images %}
                <div>
                  {% for image in images %}
                    <a href=\"{{ image.popup }}\" title=\"{{ heading_title }}\">
                    <img src=\"{{ image.thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail\"/></a>&nbsp;
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
