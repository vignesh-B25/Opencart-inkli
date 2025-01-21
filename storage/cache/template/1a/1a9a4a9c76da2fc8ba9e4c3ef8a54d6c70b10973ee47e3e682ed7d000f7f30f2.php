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

/* admin2504/view/template/sale/order_info.twig */
class __TwigTemplate_fd8825edad585445321bec9a443b77adffb20cead7ab26f37b767dc12ea93e61 extends Template
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
      <div class=\"float-end\"><a href=\"";
        // line 5
        yield ($context["invoice"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        yield ($context["shipping"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["shipping_code"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"";
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 22
        yield ($context["text_invoice"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 24
        if ( !($context["invoice_no"] ?? null)) {
            // line 25
            yield "                    <span id=\"invoice-value\">";
            yield ($context["text_tbc"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 27
            yield "                    <span id=\"invoice-value\">";
            yield ($context["invoice_prefix"] ?? null);
            yield ($context["invoice_no"] ?? null);
            yield "</span>
                  ";
        }
        // line 29
        yield "                </div>
              </div>
              ";
        // line 31
        if ( !($context["invoice_no"] ?? null)) {
            // line 32
            yield "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_generate"] ?? null);
            yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 34
            yield "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 36
        yield "            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <div id=\"input-customer-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 41
        yield ($context["text_customer"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 43
        if (($context["customer_id"] ?? null)) {
            // line 44
            yield "                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer.form&user_token=";
            yield ($context["user_token"] ?? null);
            yield "&customer_id=";
            yield ($context["customer_id"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</a></div>
                  ";
        } else {
            // line 46
            yield "                    <div id=\"customer-value\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</div>
                  ";
        }
        // line 48
        yield "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>";
        // line 55
        yield ($context["text_date_added"] ?? null);
        yield "</strong>
                <br/>
                ";
        // line 57
        yield ($context["date_added"] ?? null);
        yield "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 67
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 67);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "              </select>
              <label for=\"input-store\">";
        // line 70
        yield ($context["entry_store"] ?? null);
        yield "</label>
            </div>
          </div>

          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 78
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 78);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 78) == ($context["language_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 78);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "              </select>
              <label for=\"input-language\">";
        // line 81
        yield ($context["entry_language"] ?? null);
        yield "</label>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 89
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 89);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 89) == ($context["currency_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 89);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "              </select> <label for=\"input-currency\">";
        yield ($context["entry_currency"] ?? null);
        yield "</label>
            </div>
          </div>
        </div>

        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 100
        yield ($context["column_product"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 101
        yield ($context["column_quantity"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 102
        yield ($context["column_price"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 103
        yield ($context["column_total"] ?? null);
        yield "</th>
                <th class=\"text-end\" style=\"width: 1px;\">";
        // line 104
        yield ($context["column_action"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              ";
        // line 108
        $context["order_product_row"] = 0;
        // line 109
        yield "              ";
        if (($context["order_products"] ?? null)) {
            // line 110
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 111
                yield "                  <tr>
                    <td>
                      <a href=\"";
                // line 113
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_edit", [], "any", false, false, false, 113);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 113);
                yield "</a>
                      <div id=\"error-product-";
                // line 114
                yield ($context["order_product_row"] ?? null);
                yield "-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - ";
                // line 117
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 117);
                yield "</small>
                        </li>
                        ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 120
                    yield "                          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 120) != "file")) {
                        // line 121
                        yield "                            <li>
                              <small> - ";
                        // line 122
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 122);
                        yield ": ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 122);
                        yield "</small>
                              <div id=\"error-product-";
                        // line 123
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 123);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    } else {
                        // line 126
                        yield "                            <li>
                              <small> - ";
                        // line 127
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 127);
                        yield ": <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 127);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "filename", [], "any", false, false, false, 127);
                        yield "</a></small>
                              <div id=\"error-product-";
                        // line 128
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    }
                    // line 131
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 132)) {
                    // line 133
                    yield "                          <li>
                            <small> - ";
                    // line 134
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 134)) {
                        yield "<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 134);
                        yield "\" target=\"_blank\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 134);
                        yield "</a>";
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 134);
                    }
                    yield "</small>
                            <div id=\"error-product-";
                    // line 135
                    yield ($context["order_product_row"] ?? null);
                    yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
                }
                // line 138
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 138)) {
                    // line 139
                    yield "                          <li>
                            <small> - ";
                    // line 140
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 140);
                    yield "</small>
                          </li>
                        ";
                }
                // line 143
                yield "                      </ul>
                      <input type=\"hidden\" name=\"product[";
                // line 144
                yield ($context["order_product_row"] ?? null);
                yield "][product_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 144);
                yield "\"/> <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][quantity]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 144);
                yield "\"/>
                      ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 145));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 146
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "radio"))) {
                        // line 147
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 147);
                        yield "\"/>
                        ";
                    }
                    // line 149
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "checkbox")) {
                        // line 150
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 150);
                        yield "\"/>
                        ";
                    }
                    // line 152
                    yield "                        ";
                    if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "time"))) {
                        // line 153
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 153);
                        yield "\"/>
                        ";
                    }
                    // line 155
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                yield "                      <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][subscription_plan_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 156);
                yield "\"/>
                    </td>
                    <td class=\"text-end\">";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 158);
                yield "</td>
                    <td class=\"text-end\">";
                // line 159
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 159);
                yield "</td>
                    <td class=\"text-end\">";
                // line 160
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 160);
                yield "</td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 161
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                // line 163
                $context["order_product_row"] = (($context["order_product_row"] ?? null) + 1);
                // line 164
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "              ";
        } else {
            // line 166
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center\">";
            // line 167
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
              ";
        }
        // line 170
        yield "            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-address-info\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 183
        yield ($context["text_payment_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    ";
        // line 186
        yield ($context["payment_firstname"] ?? null);
        yield " ";
        yield ($context["payment_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 188
        if (($context["payment_company"] ?? null)) {
            // line 189
            yield "                      ";
            yield ($context["payment_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 192
        yield "                    ";
        if (($context["payment_address_1"] ?? null)) {
            // line 193
            yield "                      ";
            yield ($context["payment_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 196
        yield "                    ";
        if (($context["payment_address_2"] ?? null)) {
            // line 197
            yield "                      ";
            yield ($context["payment_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 200
        yield "                    ";
        if (($context["payment_city"] ?? null)) {
            // line 201
            yield "                      ";
            yield ($context["payment_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 204
        yield "                    ";
        if (($context["payment_postcode"] ?? null)) {
            // line 205
            yield "                      ";
            yield ($context["payment_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 208
        yield "                    ";
        if (($context["payment_zone"] ?? null)) {
            // line 209
            yield "                      ";
            yield ($context["payment_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 212
        yield "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 213
            yield "                      ";
            yield ($context["payment_country"] ?? null);
            yield "
                    ";
        }
        // line 215
        yield "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3";
        // line 221
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " d-none";
        }
        yield "\">
            <div class=\"input-group\">
              <div id=\"input-shipping-address-info\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 224
        yield ($context["text_shipping_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    ";
        // line 227
        yield ($context["shipping_firstname"] ?? null);
        yield " ";
        yield ($context["shipping_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 229
        if (($context["shipping_company"] ?? null)) {
            // line 230
            yield "                      ";
            yield ($context["shipping_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 233
        yield "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 234
            yield "                      ";
            yield ($context["shipping_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 237
        yield "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 238
            yield "                      ";
            yield ($context["shipping_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 241
        yield "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 242
            yield "                      ";
            yield ($context["shipping_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 245
        yield "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 246
            yield "                      ";
            yield ($context["shipping_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 249
        yield "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 250
            yield "                      ";
            yield ($context["shipping_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 253
        yield "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 254
            yield "                      ";
            yield ($context["shipping_country"] ?? null);
            yield "
                    ";
        }
        // line 256
        yield "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3";
        // line 264
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " d-none";
        }
        yield "\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <div id=\"input-shipping-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 267
        yield ($context["text_shipping_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"shipping-method-value\">";
        // line 269
        yield ($context["shipping_method_name"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 278
        yield ($context["text_payment_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"payment-method-value\">";
        // line 280
        yield ($context["payment_method_name"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 290
            yield "              <div class=\"col mb-3\">";
            yield $context["extension"];
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 295
        yield ($context["text_reward"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"point-value\">";
        // line 297
        yield ($context["points"] ?? null);
        yield "</div>
                  </div>
                </div>
                ";
        // line 300
        if ( !($context["reward_total"] ?? null)) {
            // line 301
            yield "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 303
            yield "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 305
        yield "              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>";
        // line 310
        yield ($context["text_affiliate"] ?? null);
        yield "</strong>
                    <br/>
                    ";
        // line 312
        if (($context["affiliate_id"] ?? null)) {
            // line 313
            yield "                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate.form&user_token=";
            yield ($context["user_token"] ?? null);
            yield "&customer_id=";
            yield ($context["affiliate_id"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["affiliate"] ?? null);
            yield "</a></div>
                    ";
        } else {
            // line 315
            yield "                      <div id=\"affiliate-value\">&nbsp;</div>
                    ";
        }
        // line 317
        yield "                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 325
        yield ($context["text_commission"] ?? null);
        yield "</strong>
                    <br/>
                    ";
        // line 327
        if (($context["commission"] ?? null)) {
            // line 328
            yield "                      <div id=\"commission-value\">";
            yield ($context["commission"] ?? null);
            yield "</div>
                    ";
        } else {
            // line 330
            yield "                      <div id=\"commission-value\">&nbsp;</div>
                    ";
        }
        // line 332
        yield "                  </div>
                </div>
                ";
        // line 334
        if ( !($context["commission_total"] ?? null)) {
            // line 335
            yield "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 337
            yield "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 339
        yield "              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 343
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>";
        // line 348
        yield ($context["text_comment"] ?? null);
        yield "</strong>
                  <br/>
                  <span id=\"comment-value\">";
        // line 350
        yield ($context["comment"] ?? null);
        yield "</span>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 360
            yield "              <tr>
                <td class=\"text-end\"><strong>";
            // line 361
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 361);
            yield "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 362
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 362);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 368
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 369
        yield ($context["button_confirm"] ?? null);
        yield "</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 374
        yield ($context["text_history"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 377
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 378
        yield ($context["tab_additional"] ?? null);
        yield "</a></li>
          ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 380
            yield "            <li class=\"nav-item\"><a href=\"#tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 380);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 380);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        yield "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 386
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 387
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 391
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 393
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 397
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 397);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 397) == ($context["order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 397);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 403
        yield ($context["entry_override"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"override\" value=\"0\"/> <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\"/>
                    </div>
                    <div class=\"form-text\">";
        // line 408
        yield ($context["help_override"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 412
        yield ($context["entry_notify"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"notify\" value=\"0\"/> <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 420
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 422
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 426
        yield ($context["button_history_add"] ?? null);
        yield "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 429
        yield ($context["order_id"] ?? null);
        yield "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">";
        // line 437
        yield ($context["text_browser"] ?? null);
        yield "</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 442
        yield ($context["text_ip"] ?? null);
        yield "</td>
                    <td>";
        // line 443
        yield ($context["ip"] ?? null);
        yield "</td>
                  </tr>
                  ";
        // line 445
        if (($context["forwarded_ip"] ?? null)) {
            // line 446
            yield "                    <tr>
                      <td>";
            // line 447
            yield ($context["text_forwarded_ip"] ?? null);
            yield "</td>
                      <td>";
            // line 448
            yield ($context["forwarded_ip"] ?? null);
            yield "</td>
                    </tr>
                  ";
        }
        // line 451
        yield "                  <tr>
                    <td>";
        // line 452
        yield ($context["text_user_agent"] ?? null);
        yield "</td>
                    <td>";
        // line 453
        yield ($context["user_agent"] ?? null);
        yield "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 456
        yield ($context["text_accept_language"] ?? null);
        yield "</td>
                    <td>";
        // line 457
        yield ($context["accept_language"] ?? null);
        yield "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 464
            yield "            <div id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 464);
            yield "\" class=\"tab-pane\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 464);
            yield "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        yield "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 476
        yield ($context["text_customer"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 482
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"";
        // line 484
        yield ($context["firstname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        yield ($context["customer_add"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_customer_add"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 486
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 490
        yield ($context["entry_customer_group"] ?? null);
        yield "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 492
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 492);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 492) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 492);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        yield "            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 498
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"firstname\" value=\"";
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 502
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"lastname\" value=\"";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 506
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 508
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:";
        yield ($context["email"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 512
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        yield "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 513
        yield ($context["entry_telephone"] ?? null);
        yield "</label> <input type=\"text\" name=\"telephone\" value=\"";
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 518
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 518) == "account")) {
                // line 519
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 519) == "select")) {
                    // line 520
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 521
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 521);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 522
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 523
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 523));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 524
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 524);
                        yield "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 524) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 524);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 526
                    yield "                  </select>
                  <div id=\"error-custom-field-";
                    // line 527
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 530
                yield "
              ";
                // line 531
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 531) == "radio")) {
                    // line 532
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 533
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 533);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 534
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 534);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 535
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 535));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 536
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 537
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 537);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 537);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 537) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 537);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 537);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 540
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 541
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 541);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 544
                yield "
              ";
                // line 545
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 545) == "checkbox")) {
                    // line 546
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 546);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 547
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 547);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 548
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 548);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 549
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 549));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 550
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 551
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 551);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 554
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 555
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 555);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 558
                yield "
              ";
                // line 559
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 559) == "text")) {
                    // line 560
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 561
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 561);
                    yield "</label>
                  <input type=\"text\" name=\"custom_field[";
                    // line 562
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 562)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 562);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 563
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 563);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 566
                yield "
              ";
                // line 567
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 567) == "textarea")) {
                    // line 568
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 569
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 569);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 569);
                    yield "</label>
                  <textarea name=\"custom_field[";
                    // line 570
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 570);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 570)));
                    yield "</textarea>
                  <div id=\"error-custom-field-";
                    // line 571
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 571);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 574
                yield "
              ";
                // line 575
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 575) == "file")) {
                    // line 576
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 577
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 577);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 579
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 579);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 580
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null)) ? ((($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 580)));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    yield "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 581
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 581);
                    yield "\"";
                    if ( !(($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 581)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 582
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 582);
                    yield "\"";
                    if ( !(($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 582)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 584
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 587
                yield "
              ";
                // line 588
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 588) == "date")) {
                    // line 589
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 590
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 590);
                    yield "</label> <input type=\"date\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 590)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 590);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 591
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 594
                yield "
              ";
                // line 595
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 595) == "time")) {
                    // line 596
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 596);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 597
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 597);
                    yield "</label> <input type=\"time\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 597)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 597);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 598
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 598);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 601
                yield "
              ";
                // line 602
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 602) == "datetime")) {
                    // line 603
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 604
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 604);
                    yield "</label> <input type=\"datetime-local\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 604)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 604);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 605
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 605);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 608
                yield "
            ";
            }
            // line 610
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        yield "
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 613
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 625
        yield ($context["text_product_add"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">";
        // line 631
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <input type=\"text\" value=\"\" placeholder=\"";
        // line 632
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">";
        // line 637
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"quantity\" placeholder=\"";
        // line 638
        yield ($context["entry_quantity"] ?? null);
        yield "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 643
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 655
        yield ($context["text_payment_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 661
        yield ($context["entry_address"] ?? null);
        yield "</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>";
        // line 663
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 665
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 665);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 665) == ($context["payment_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 665);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 665);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 665)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 665);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 665);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 665);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 665);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 665);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 665);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        yield "            </select>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 671
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"";
        // line 672
        yield ($context["payment_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 676
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"";
        // line 677
        yield ($context["payment_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 681
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_company\" value=\"";
        // line 682
        yield ($context["payment_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 685
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"";
        // line 686
        yield ($context["payment_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 690
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"";
        // line 691
        yield ($context["payment_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 694
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_city\" value=\"";
        // line 695
        yield ($context["payment_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 699
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"";
        // line 700
        yield ($context["payment_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 704
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 706
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 708
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 708);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 708) == ($context["payment_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 708);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        yield "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 714
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">";
        // line 716
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 718
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 718);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 718) == ($context["payment_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 718);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        yield "            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 724
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 724) == "address")) {
                // line 725
                yield "
              ";
                // line 726
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 726) == "select")) {
                    // line 727
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 727);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 728
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 728);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 728);
                    yield "</label> <select name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 728);
                    yield "]\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 728);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 729
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 730
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 730));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 731
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 731);
                        yield "\"";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 731) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 731);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 733
                    yield "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 734
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 734);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 737
                yield "
              ";
                // line 738
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 738) == "radio")) {
                    // line 739
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 739);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 740
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 740);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 741
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 741);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 742
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 742));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 743
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[";
                        // line 744
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 744);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 744);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 744);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 744)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 744) == (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 744)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 744);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 744);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 747
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 748
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 748);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 751
                yield "
              ";
                // line 752
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 752) == "checkbox")) {
                    // line 753
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 753);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 754
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 754);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 755
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 755);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 756
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 756));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 757
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[";
                        // line 758
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 758);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 758);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 758), (($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 758);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 758);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 761
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 762
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 765
                yield "
              ";
                // line 766
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 766) == "text")) {
                    // line 767
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 768
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 768);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 768);
                    yield "</label>
                  <input type=\"text\" name=\"payment_custom_field[";
                    // line 769
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 769);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 769)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 769)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 769)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 769);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 769);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 770
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 770);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 773
                yield "
              ";
                // line 774
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 774) == "textarea")) {
                    // line 775
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 775);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 776
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 776);
                    yield "</label>
                  <textarea name=\"payment_custom_field[";
                    // line 777
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 777);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 777);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 777);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 777)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 777)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 777)));
                    yield "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 778
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 778);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 781
                yield "
              ";
                // line 782
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 782) == "file")) {
                    // line 783
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 783);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 784
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 784);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 786
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"payment_custom_field[";
                    // line 787
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 787);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 787)] ?? null) : null)) ? ((($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 787)] ?? null) : null)) : (""));
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 787);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 788
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788);
                    yield "\"";
                    if ( !(($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 789
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 789);
                    yield "\"";
                    if ( !(($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 789)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 791
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 791);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 794
                yield "
              ";
                // line 795
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 795) == "date")) {
                    // line 796
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 796);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 797
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 797);
                    yield "</label> <input type=\"date\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 797)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 797);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 798
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 798);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 801
                yield "
              ";
                // line 802
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 802) == "time")) {
                    // line 803
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 803);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 804
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 804);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 804);
                    yield "</label> <input type=\"time\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 804);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 804)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 804)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 804)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 804);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 804);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 805
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 805);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 808
                yield "
              ";
                // line 809
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 809) == "datetime")) {
                    // line 810
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 810);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 811
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 811);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 811);
                    yield "</label> <input type=\"datetime-local\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 811);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_38 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 811)] ?? null) : null)) ? ((($__internal_compile_39 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 811)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 811)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 811);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 811);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 812
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 812);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 815
                yield "
            ";
            }
            // line 817
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 818
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 819
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 831
        yield ($context["text_shipping_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 837
        yield ($context["entry_address"] ?? null);
        yield "</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">";
        // line 838
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 840
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 840);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 840) == ($context["shipping_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 840);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 840);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 840)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 840);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 840);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 840);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 840);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 840);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 840);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 842
        yield "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 845
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
        yield ($context["shipping_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 849
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
        yield ($context["shipping_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 853
        yield ($context["entry_company"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 856
        yield ($context["entry_address_1"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 860
        yield ($context["entry_address_2"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 863
        yield ($context["entry_city"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 867
        yield ($context["entry_postcode"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 871
        yield ($context["entry_country"] ?? null);
        yield "</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 872
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 874
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 874);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 874) == ($context["shipping_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 874);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        yield "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 880
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
              <option value=\"\">";
        // line 882
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 883
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shipping_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 884
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 884);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 884) == ($context["shipping_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 884);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        yield "            </select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 890
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 890) == "address")) {
                // line 891
                yield "
              ";
                // line 892
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 892) == "select")) {
                    // line 893
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 893);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 894
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 894);
                    yield "</label> <select name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 895
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 896
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 896));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 897
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897);
                        yield "\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 897)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897) == (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 897)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 897);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 899
                    yield "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 900
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 900);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 903
                yield "
              ";
                // line 904
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 904) == "radio")) {
                    // line 905
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 906
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 906);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 907
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 907);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 908
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 908));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 909
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 910
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 910);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 910);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 910) == (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 910);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 910);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 913
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 914
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 917
                yield "
              ";
                // line 918
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 918) == "checkbox")) {
                    // line 919
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 919);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 920
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 920);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 921
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 922
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 922));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 923
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 924
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 924);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 924);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 924);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 924)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 924), (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 924)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 924);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 924);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 927
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 928
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 931
                yield "
              ";
                // line 932
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 932) == "text")) {
                    // line 933
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 933);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 934
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 934);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 934);
                    yield "</label>
                  <input type=\"text\" name=\"shipping_custom_field[";
                    // line 935
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 935)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 935);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 936
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 936);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 939
                yield "
              ";
                // line 940
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 940) == "textarea")) {
                    // line 941
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 941);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 942
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 942);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 942);
                    yield "</label>
                  <textarea name=\"shipping_custom_field[";
                    // line 943
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 943);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 943);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 943);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 943);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 943)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 943)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 943)));
                    yield "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 944
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 944);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 947
                yield "
              ";
                // line 948
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 948) == "file")) {
                    // line 949
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 949);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 950
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 950);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 952
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"shipping_custom_field[";
                    // line 953
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 953);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 953)] ?? null) : null)) ? ((($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 953)] ?? null) : null)) : (""));
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 953);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 954
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 954);
                    yield "\"";
                    if ( !(($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 954)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 955
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 955);
                    yield "\"";
                    if ( !(($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 955)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 957
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 957);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 960
                yield "
              ";
                // line 961
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 961) == "date")) {
                    // line 962
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 962);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 963
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 963);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 963);
                    yield "</label>
                  <input type=\"date\" name=\"shipping_custom_field[";
                    // line 964
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 964);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 964)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 964)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 964)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 964);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 964);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 965
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 965);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 968
                yield "
              ";
                // line 969
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 969) == "time")) {
                    // line 970
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 970);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 971
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 971);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 971);
                    yield "</label>
                  <input type=\"time\" name=\"shipping_custom_field[";
                    // line 972
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 972);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_56 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 972)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 972)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 972)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 972);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 972);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 973
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 973);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 976
                yield "
              ";
                // line 977
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 977) == "datetime")) {
                    // line 978
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 978);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 979
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 979);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 979);
                    yield "</label>
                  <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    // line 980
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 980);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_58 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 980)] ?? null) : null)) ? ((($__internal_compile_59 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 980)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 980)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 980);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 980);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 981
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 981);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 984
                yield "
            ";
            }
            // line 986
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 988
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 1000
        yield ($context["text_shipping_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 1004
        yield ($context["text_shipping"] ?? null);
        yield "</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"";
        // line 1007
        yield ($context["shipping_method_name"] ?? null);
        yield "\" id=\"input-shipping-method-name\"/>
          <input type=\"hidden\" name=\"shipping_method[code]\" value=\"";
        // line 1008
        yield ($context["shipping_method_code"] ?? null);
        yield "\" id=\"input-shipping-method-code\"/>
          <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"";
        // line 1009
        yield ($context["shipping_method_cost"] ?? null);
        yield "\" id=\"input-shipping-method-cost\"/>
          <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"";
        // line 1010
        yield ($context["shipping_method_tax_class_id"] ?? null);
        yield "\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1012
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 1024
        yield ($context["text_payment_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 1028
        yield ($context["text_payment"] ?? null);
        yield "</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"";
        // line 1031
        yield ($context["payment_method_name"] ?? null);
        yield "\" id=\"input-payment-method-name\"/>
          <input type=\"hidden\" name=\"payment_method[code]\" value=\"";
        // line 1032
        yield ($context["payment_method_code"] ?? null);
        yield "\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 1034
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1046
        yield ($context["text_affiliate"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">";
        // line 1052
        yield ($context["entry_affiliate"] ?? null);
        yield "</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        yield ($context["affiliate_id"] ?? null);
        yield "\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"";
        yield ($context["affiliate"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate"] ?? null);
        yield "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1056
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1068
        yield ($context["text_comment"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1074
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1077
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('";
        // line 1093
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('";
        // line 1097
        yield ($context["text_less"] ?? null);
        yield " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token=";
        // line 1104
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 1137
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1142
        yield ($context["customer_group_id"] ?? null);
        yield ",
                    name: '";
        // line 1143
        yield ($context["text_none"] ?? null);
        yield "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + (item['address'][i]['company'] ? item['address'][i]['company'] + ', ' : '') + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 1209
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1235
        yield ($context["user_token"] ?? null);
        yield "&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 1270
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1289
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(item['label']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option"] ?? null), "js");
        yield "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1433
        yield ($context["upload"] ?? null);
        yield "\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"";
        yield ($context["config_file_max_size"] ?? null);
        yield "\" data-oc-size-error=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_upload_size"] ?? null), "js");
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_upload"] ?? null), "js");
        yield "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subscription"] ?? null), "js");
        yield "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">";
        // line 1498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1538
        yield ($context["user_token"] ?? null);
        yield "&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1596
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1649
        yield ($context["user_token"] ?? null);
        yield "&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = ";
        // line 1720
        yield ($context["payment_zone_id"] ?? null);
        yield ";

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1726
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-payment-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-payment-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 1747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1776
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1829
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = ";
        // line 1901
        yield ($context["shipping_zone_id"] ?? null);
        yield ";

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1907
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-shipping-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-shipping-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 1928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1941
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1959
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2051
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shipping-method-value').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2105
        yield ($context["user_token"] ?? null);
        yield "&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2190
        yield ($context["user_token"] ?? null);
        yield "&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#comment-value').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2243
        yield ($context["user_token"] ?? null);
        yield "&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    console.log(\$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize());

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2284
        yield ($context["user_token"] ?? null);
        yield "&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['customer']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['customer'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-customer-info').addClass('is-invalid');

                    delete json['error']['customer'];
                }

                if (json['error']['product']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['product'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-product-info').addClass('is-invalid');

                    delete json['error']['product'];
                }

                if (json['error']['payment_address']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_address'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-address-info').addClass('is-invalid');

                    delete json['error']['payment_address'];
                }

                if (json['error']['shipping_address']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_address'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-address-info').addClass('is-invalid');

                    delete json['error']['shipping_address'];
                }

                if (json['error']['shipping_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method-info').addClass('is-invalid');

                    delete json['error']['shipping_method'];
                }

                if (json['error']['payment_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-method-info').addClass('is-invalid');

                    delete json['error']['payment_method'];
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#order-id-value').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#point-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#point-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = ";
        // line 2399
        yield ($context["order_product_row"] ?? null);
        yield ";

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 2409
        yield ($context["user_token"] ?? null);
        yield "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - ";
        // line 2415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_model"] ?? null), "js");
        yield ": ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_subscription"] ?? null), "js");
        yield ": ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_points"] ?? null), "js");
        yield ": ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\">' + product['price'] + '</td>';
            html += '  <td class=\"text-end\">' + product['total'] + '</td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no_results"] ?? null), "js");
        yield "</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token=";
        // line 2515
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token=";
        // line 2553
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '";
        // line 2558
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(item['label']);
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2580
        yield ($context["user_token"] ?? null);
        yield "&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate.form&user_token=";
        // line 2601
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token=";
        // line 2624
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2668
        yield ($context["user_token"] ?? null);
        yield "&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token=";
        // line 2689
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2700
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
        return "admin2504/view/template/sale/order_info.twig";
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
        return array (  4979 => 2700,  4965 => 2689,  4941 => 2668,  4918 => 2648,  4911 => 2644,  4888 => 2624,  4862 => 2601,  4838 => 2580,  4813 => 2558,  4805 => 2553,  4788 => 2539,  4781 => 2535,  4758 => 2515,  4713 => 2473,  4703 => 2466,  4670 => 2436,  4660 => 2429,  4643 => 2415,  4634 => 2409,  4621 => 2399,  4503 => 2284,  4459 => 2243,  4403 => 2190,  4315 => 2105,  4258 => 2051,  4163 => 1959,  4142 => 1941,  4126 => 1928,  4102 => 1907,  4093 => 1901,  4018 => 1829,  3962 => 1776,  3943 => 1760,  3927 => 1747,  3903 => 1726,  3894 => 1720,  3820 => 1649,  3764 => 1596,  3703 => 1538,  3660 => 1498,  3637 => 1478,  3631 => 1475,  3580 => 1433,  3538 => 1394,  3486 => 1345,  3460 => 1322,  3448 => 1313,  3421 => 1289,  3399 => 1270,  3361 => 1235,  3332 => 1209,  3315 => 1195,  3260 => 1143,  3256 => 1142,  3248 => 1137,  3212 => 1104,  3202 => 1097,  3195 => 1093,  3176 => 1077,  3168 => 1074,  3159 => 1068,  3144 => 1056,  3131 => 1052,  3122 => 1046,  3107 => 1034,  3102 => 1032,  3098 => 1031,  3092 => 1028,  3085 => 1024,  3070 => 1012,  3065 => 1010,  3061 => 1009,  3057 => 1008,  3053 => 1007,  3047 => 1004,  3040 => 1000,  3025 => 988,  3022 => 987,  3016 => 986,  3012 => 984,  3006 => 981,  2996 => 980,  2990 => 979,  2985 => 978,  2983 => 977,  2980 => 976,  2974 => 973,  2964 => 972,  2958 => 971,  2953 => 970,  2951 => 969,  2948 => 968,  2942 => 965,  2932 => 964,  2926 => 963,  2921 => 962,  2919 => 961,  2916 => 960,  2910 => 957,  2899 => 955,  2889 => 954,  2881 => 953,  2869 => 952,  2864 => 950,  2859 => 949,  2857 => 948,  2854 => 947,  2848 => 944,  2836 => 943,  2830 => 942,  2825 => 941,  2823 => 940,  2820 => 939,  2814 => 936,  2804 => 935,  2798 => 934,  2793 => 933,  2791 => 932,  2788 => 931,  2782 => 928,  2779 => 927,  2758 => 924,  2755 => 923,  2751 => 922,  2747 => 921,  2743 => 920,  2738 => 919,  2736 => 918,  2733 => 917,  2727 => 914,  2724 => 913,  2703 => 910,  2700 => 909,  2696 => 908,  2692 => 907,  2688 => 906,  2683 => 905,  2681 => 904,  2678 => 903,  2672 => 900,  2669 => 899,  2654 => 897,  2650 => 896,  2646 => 895,  2636 => 894,  2631 => 893,  2629 => 892,  2626 => 891,  2623 => 890,  2619 => 889,  2614 => 886,  2599 => 884,  2595 => 883,  2591 => 882,  2586 => 880,  2580 => 876,  2565 => 874,  2561 => 873,  2557 => 872,  2553 => 871,  2542 => 867,  2531 => 863,  2521 => 860,  2510 => 856,  2500 => 853,  2489 => 849,  2478 => 845,  2473 => 842,  2440 => 840,  2436 => 839,  2432 => 838,  2428 => 837,  2419 => 831,  2404 => 819,  2401 => 818,  2395 => 817,  2391 => 815,  2385 => 812,  2371 => 811,  2366 => 810,  2364 => 809,  2361 => 808,  2355 => 805,  2341 => 804,  2336 => 803,  2334 => 802,  2331 => 801,  2325 => 798,  2311 => 797,  2306 => 796,  2304 => 795,  2301 => 794,  2295 => 791,  2284 => 789,  2274 => 788,  2266 => 787,  2254 => 786,  2249 => 784,  2244 => 783,  2242 => 782,  2239 => 781,  2233 => 778,  2223 => 777,  2217 => 776,  2212 => 775,  2210 => 774,  2207 => 773,  2201 => 770,  2191 => 769,  2185 => 768,  2180 => 767,  2178 => 766,  2175 => 765,  2169 => 762,  2166 => 761,  2145 => 758,  2142 => 757,  2138 => 756,  2134 => 755,  2130 => 754,  2125 => 753,  2123 => 752,  2120 => 751,  2114 => 748,  2111 => 747,  2090 => 744,  2087 => 743,  2083 => 742,  2079 => 741,  2075 => 740,  2070 => 739,  2068 => 738,  2065 => 737,  2059 => 734,  2056 => 733,  2041 => 731,  2037 => 730,  2033 => 729,  2023 => 728,  2018 => 727,  2016 => 726,  2013 => 725,  2010 => 724,  2006 => 723,  2001 => 720,  1986 => 718,  1982 => 717,  1978 => 716,  1973 => 714,  1967 => 710,  1952 => 708,  1948 => 707,  1944 => 706,  1939 => 704,  1930 => 700,  1926 => 699,  1917 => 695,  1913 => 694,  1905 => 691,  1901 => 690,  1892 => 686,  1888 => 685,  1880 => 682,  1876 => 681,  1867 => 677,  1863 => 676,  1854 => 672,  1850 => 671,  1844 => 667,  1811 => 665,  1807 => 664,  1803 => 663,  1798 => 661,  1789 => 655,  1774 => 643,  1766 => 638,  1762 => 637,  1754 => 632,  1750 => 631,  1741 => 625,  1726 => 613,  1722 => 611,  1716 => 610,  1712 => 608,  1706 => 605,  1692 => 604,  1687 => 603,  1685 => 602,  1682 => 601,  1676 => 598,  1662 => 597,  1657 => 596,  1655 => 595,  1652 => 594,  1646 => 591,  1632 => 590,  1627 => 589,  1625 => 588,  1622 => 587,  1616 => 584,  1605 => 582,  1595 => 581,  1587 => 580,  1575 => 579,  1570 => 577,  1565 => 576,  1563 => 575,  1560 => 574,  1554 => 571,  1544 => 570,  1538 => 569,  1533 => 568,  1531 => 567,  1528 => 566,  1522 => 563,  1512 => 562,  1506 => 561,  1501 => 560,  1499 => 559,  1496 => 558,  1490 => 555,  1487 => 554,  1466 => 551,  1463 => 550,  1459 => 549,  1455 => 548,  1451 => 547,  1446 => 546,  1444 => 545,  1441 => 544,  1435 => 541,  1432 => 540,  1411 => 537,  1408 => 536,  1404 => 535,  1400 => 534,  1396 => 533,  1391 => 532,  1389 => 531,  1386 => 530,  1380 => 527,  1377 => 526,  1362 => 524,  1358 => 523,  1354 => 522,  1344 => 521,  1339 => 520,  1336 => 519,  1333 => 518,  1329 => 517,  1318 => 513,  1312 => 512,  1301 => 508,  1296 => 506,  1285 => 502,  1274 => 498,  1268 => 494,  1253 => 492,  1249 => 491,  1245 => 490,  1238 => 486,  1225 => 484,  1220 => 482,  1211 => 476,  1199 => 466,  1188 => 464,  1184 => 463,  1175 => 457,  1171 => 456,  1165 => 453,  1161 => 452,  1158 => 451,  1152 => 448,  1148 => 447,  1145 => 446,  1143 => 445,  1138 => 443,  1134 => 442,  1126 => 437,  1115 => 429,  1109 => 426,  1102 => 422,  1097 => 420,  1086 => 412,  1079 => 408,  1071 => 403,  1065 => 399,  1050 => 397,  1046 => 396,  1040 => 393,  1035 => 391,  1028 => 387,  1024 => 386,  1018 => 382,  1007 => 380,  1003 => 379,  999 => 378,  995 => 377,  989 => 374,  981 => 369,  977 => 368,  972 => 365,  963 => 362,  959 => 361,  956 => 360,  952 => 359,  940 => 350,  935 => 348,  927 => 343,  921 => 339,  915 => 337,  905 => 335,  903 => 334,  899 => 332,  895 => 330,  889 => 328,  887 => 327,  882 => 325,  872 => 317,  868 => 315,  858 => 313,  856 => 312,  851 => 310,  844 => 305,  838 => 303,  828 => 301,  826 => 300,  820 => 297,  815 => 295,  810 => 292,  801 => 290,  797 => 289,  785 => 280,  780 => 278,  768 => 269,  763 => 267,  755 => 264,  745 => 256,  739 => 254,  736 => 253,  729 => 250,  726 => 249,  719 => 246,  716 => 245,  709 => 242,  706 => 241,  699 => 238,  696 => 237,  689 => 234,  686 => 233,  679 => 230,  677 => 229,  670 => 227,  664 => 224,  656 => 221,  648 => 215,  642 => 213,  639 => 212,  632 => 209,  629 => 208,  622 => 205,  619 => 204,  612 => 201,  609 => 200,  602 => 197,  599 => 196,  592 => 193,  589 => 192,  582 => 189,  580 => 188,  573 => 186,  567 => 183,  552 => 170,  546 => 167,  543 => 166,  540 => 165,  534 => 164,  532 => 163,  527 => 161,  523 => 160,  519 => 159,  515 => 158,  507 => 156,  501 => 155,  491 => 153,  488 => 152,  478 => 150,  475 => 149,  465 => 147,  462 => 146,  458 => 145,  448 => 144,  445 => 143,  437 => 140,  434 => 139,  431 => 138,  425 => 135,  411 => 134,  408 => 133,  405 => 132,  399 => 131,  391 => 128,  383 => 127,  380 => 126,  372 => 123,  366 => 122,  363 => 121,  360 => 120,  356 => 119,  349 => 117,  343 => 114,  337 => 113,  333 => 111,  328 => 110,  325 => 109,  323 => 108,  316 => 104,  312 => 103,  308 => 102,  304 => 101,  300 => 100,  287 => 91,  272 => 89,  268 => 88,  258 => 81,  255 => 80,  240 => 78,  236 => 77,  226 => 70,  223 => 69,  208 => 67,  204 => 66,  192 => 57,  187 => 55,  178 => 48,  170 => 46,  158 => 44,  156 => 43,  151 => 41,  144 => 36,  140 => 34,  134 => 32,  132 => 31,  128 => 29,  121 => 27,  115 => 25,  113 => 24,  108 => 22,  99 => 16,  92 => 11,  81 => 9,  77 => 8,  72 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"{{ invoice }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_invoice_print }}\" class=\"btn btn-info{% if not order_id %} disabled{% endif %}\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"{{ shipping }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_shipping_print }}\" class=\"btn btn-info{% if not shipping_code %} disabled{% endif %}\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_invoice }}</strong>
                  <br/>
                  {% if not invoice_no %}
                    <span id=\"invoice-value\">{{ text_tbc }}</span>
                  {% else %}
                    <span id=\"invoice-value\">{{ invoice_prefix }}{{ invoice_no }}</span>
                  {% endif %}
                </div>
              </div>
              {% if not invoice_no %}
                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"{{ button_generate }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% else %}
                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% endif %}
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <div id=\"input-customer-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_customer }}</strong>
                  <br/>
                  {% if customer_id %}
                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id={{ customer_id }}\" target=\"_blank\">{{ firstname }} {{ lastname }}</a></div>
                  {% else %}
                    <div id=\"customer-value\">{{ firstname }} {{ lastname }}</div>
                  {% endif %}
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
                <br/>
                {{ date_added }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-store\">{{ entry_store }}</label>
            </div>
          </div>

          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                {% for language in languages %}
                  <option value=\"{{ language.code }}\"{% if language.code == language_code %} selected{% endif %}>{{ language.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-language\">{{ entry_language }}</label>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                {% for currency in currencies %}
                  <option value=\"{{ currency.code }}\"{% if currency.code == currency_code %} selected{% endif %}>{{ currency.title }}</option>
                {% endfor %}
              </select> <label for=\"input-currency\">{{ entry_currency }}</label>
            </div>
          </div>
        </div>

        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ column_product }}</th>
                <th class=\"text-end\">{{ column_quantity }}</th>
                <th class=\"text-end\">{{ column_price }}</th>
                <th class=\"text-end\">{{ column_total }}</th>
                <th class=\"text-end\" style=\"width: 1px;\">{{ column_action }}</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              {% set order_product_row = 0 %}
              {% if order_products %}
                {% for order_product in order_products %}
                  <tr>
                    <td>
                      <a href=\"{{ order_product.product_edit }}\" target=\"_blank\">{{ order_product.name }}</a>
                      <div id=\"error-product-{{ order_product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - {{ text_model }}: {{ order_product.model }}</small>
                        </li>
                        {% for option in order_product.option %}
                          {% if option.type != 'file' %}
                            <li>
                              <small> - {{ option.name }}: {{ option.value }}</small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% else %}
                            <li>
                              <small> - {{ option.name }}: <a href=\"{{ option.href }}\">{{ option.filename }}</a></small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% endif %}
                        {% endfor %}
                        {% if order_product.subscription_plan_id %}
                          <li>
                            <small> - {{ text_subscription }}: {% if order_product.subscription_edit %}<a href=\"{{ order_product.subscription_edit }}\" target=\"_blank\">{{ order_product.subscription_plan }}</a>{% else %}{{ order_product.subscription_plan }}{% endif %}</small>
                            <div id=\"error-product-{{ order_product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endif %}
                        {% if order_product.reward %}
                          <li>
                            <small> - {{ text_points }}: {{ order_product.reward }}</small>
                          </li>
                        {% endif %}
                      </ul>
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][product_id]\" value=\"{{ order_product.product_id }}\"/> <input type=\"hidden\" name=\"product[{{ order_product_row }}][quantity]\" value=\"{{ order_product.quantity }}\"/>
                      {% for option in order_product.option %}
                        {% if option.type == 'select' or option.type == 'radio' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'checkbox' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                        {% endif %}
                      {% endfor %}
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][subscription_plan_id]\" value=\"{{ order_product.subscription_plan_id }}\"/>
                    </td>
                    <td class=\"text-end\">{{ order_product.quantity }}</td>
                    <td class=\"text-end\">{{ order_product.price }}</td>
                    <td class=\"text-end\">{{ order_product.total }}</td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set order_product_row = order_product_row + 1 %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center\">{{ text_no_results }}</td>
                </tr>
              {% endif %}
            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-address-info\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_payment_address }}</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    {{ payment_firstname }} {{ payment_lastname }}
                    <br/>
                    {% if payment_company %}
                      {{ payment_company }}
                      <br/>
                    {% endif %}
                    {% if payment_address_1 %}
                      {{ payment_address_1 }}
                      <br/>
                    {% endif %}
                    {% if payment_address_2 %}
                      {{ payment_address_2 }}
                      <br/>
                    {% endif %}
                    {% if payment_city %}
                      {{ payment_city }}
                      <br/>
                    {% endif %}
                    {% if payment_postcode %}
                      {{ payment_postcode }}
                      <br/>
                    {% endif %}
                    {% if payment_zone %}
                      {{ payment_zone }}
                      <br/>
                    {% endif %}
                    {% if payment_country %}
                      {{ payment_country }}
                    {% endif %}
                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3{% if not shipping_method_code %} d-none{% endif %}\">
            <div class=\"input-group\">
              <div id=\"input-shipping-address-info\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_shipping_address }}</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    {{ shipping_firstname }} {{ shipping_lastname }}
                    <br/>
                    {% if shipping_company %}
                      {{ shipping_company }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_1 %}
                      {{ shipping_address_1 }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_2 %}
                      {{ shipping_address_2 }}
                      <br/>
                    {% endif %}
                    {% if shipping_city %}
                      {{ shipping_city }}
                      <br/>
                    {% endif %}
                    {% if shipping_postcode %}
                      {{ shipping_postcode }}
                      <br/>
                    {% endif %}
                    {% if shipping_zone %}
                      {{ shipping_zone }}
                      <br/>
                    {% endif %}
                    {% if shipping_country %}
                      {{ shipping_country }}
                    {% endif %}
                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3{% if not shipping_method_code %} d-none{% endif %}\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <div id=\"input-shipping-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_shipping_method }}</strong>
                  <br/>
                  <div id=\"shipping-method-value\">{{ shipping_method_name }}</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_payment_method }}</strong>
                  <br/>
                  <div id=\"payment-method-value\">{{ payment_method_name }}</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            {% for extension in extensions %}
              <div class=\"col mb-3\">{{ extension }}</div>
            {% endfor %}
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>{{ text_reward }}</strong>
                    <br/>
                    <div id=\"point-value\">{{ points }}</div>
                  </div>
                </div>
                {% if not reward_total %}
                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add }}\" class=\"btn btn-success\"{% if not customer_id or not points %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>{{ text_affiliate }}</strong>
                    <br/>
                    {% if affiliate_id %}
                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id={{ affiliate_id }}\" target=\"_blank\">{{ affiliate }}</a></div>
                    {% else %}
                      <div id=\"affiliate-value\">&nbsp;</div>
                    {% endif %}
                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>{{ text_commission }}</strong>
                    <br/>
                    {% if commission %}
                      <div id=\"commission-value\">{{ commission }}</div>
                    {% else %}
                      <div id=\"commission-value\">&nbsp;</div>
                    {% endif %}
                  </div>
                </div>
                {% if not commission_total %}
                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add }}\" class=\"btn btn-success\"{% if not affiliate_id %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>{{ text_comment }}</strong>
                  <br/>
                  <span id=\"comment-value\">{{ comment }}</span>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            {% for order_total in order_totals %}
              <tr>
                <td class=\"text-end\"><strong>{{ order_total.title }}</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">{{ order_total.text }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_confirm }}</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> {{ text_history }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_additional }}</a></li>
          {% for tab in tabs %}
            <li class=\"nav-item\"><a href=\"#tab-{{ tab.code }}\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab.title }}</a></li>
          {% endfor %}
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>{{ text_history_add }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      {% for order_status in order_statuses %}
                        <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_override }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"override\" value=\"0\"/> <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\"/>
                    </div>
                    <div class=\"form-text\">{{ help_override }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_notify }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"notify\" value=\"0\"/> <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"{{ order_id }}\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">{{ text_browser }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ text_ip }}</td>
                    <td>{{ ip }}</td>
                  </tr>
                  {% if forwarded_ip %}
                    <tr>
                      <td>{{ text_forwarded_ip }}</td>
                      <td>{{ forwarded_ip }}</td>
                    </tr>
                  {% endif %}
                  <tr>
                    <td>{{ text_user_agent }}</td>
                    <td>{{ user_agent }}</td>
                  </tr>
                  <tr>
                    <td>{{ text_accept_language }}</td>
                    <td>{{ accept_language }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {% for tab in tabs %}
            <div id=\"tab-{{ tab.code }}\" class=\"tab-pane\">{{ tab.content }}</div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_customer }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"{{ firstname }} {{ lastname }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"{{ customer_add }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_customer_add }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">{{ entry_customer_group }}</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              {% for customer_group in customer_groups %}
                <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:{{ email }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label> <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'account' %}
              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}

          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_product_add }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">{{ entry_product }}</label>
            <input type=\"text\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">{{ entry_quantity }}</label>
            <input type=\"text\" name=\"quantity\" placeholder=\"{{ entry_quantity }}\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_payment_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">{{ entry_address }}</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == payment_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"{{ payment_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"{{ payment_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label>
            <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label>
            <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
            <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == payment_country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
            <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for zone in payment_zones %}
                <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == payment_zone_id %} selected{% endif %}>{{ zone.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <textarea name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_shipping_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">{{ entry_address }}</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == shipping_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == shipping_country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
            <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for zone in shipping_zones %}
                <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == shipping_zone_id %} selected{% endif %}>{{ zone.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <textarea name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" placeholder=\"{{ custom_field.name }}\" class=\"form-control\">{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                  <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> {{ text_shipping_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_shipping }}</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"{{ shipping_method_name }}\" id=\"input-shipping-method-name\"/>
          <input type=\"hidden\" name=\"shipping_method[code]\" value=\"{{ shipping_method_code }}\" id=\"input-shipping-method-code\"/>
          <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"{{ shipping_method_cost }}\" id=\"input-shipping-method-cost\"/>
          <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"{{ shipping_method_tax_class_id }}\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> {{ text_payment_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_payment }}</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"{{ payment_method_name }}\" id=\"input-payment-method-name\"/>
          <input type=\"hidden\" name=\"payment_method[code]\" value=\"{{ payment_method_code }}\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_affiliate }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">{{ entry_affiliate }}</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"{{ affiliate_id }}\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"{{ affiliate }}\" placeholder=\"{{ entry_affiliate }}\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_comment }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('{{ text_less }} <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: {{ customer_group_id }},
                    name: '{{ text_none }}',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">{{ text_none|escape('js') }}</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + (item['address'][i]['company'] ? item['address'][i]['company'] + ', ' : '') + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(item['label']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_option|escape('js') }}</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size|escape('js') }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload|escape('js') }}</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_subscription|escape('js') }}</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">{{ text_select|escape('js') }}</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">{{ text_select|escape('js') }}</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = {{ payment_zone_id }};

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-payment-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-payment-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = {{ shipping_zone_id }};

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-shipping-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-shipping-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shipping-method-value').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#comment-value').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    console.log(\$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize());

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['customer']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['customer'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-customer-info').addClass('is-invalid');

                    delete json['error']['customer'];
                }

                if (json['error']['product']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['product'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-product-info').addClass('is-invalid');

                    delete json['error']['product'];
                }

                if (json['error']['payment_address']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_address'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-address-info').addClass('is-invalid');

                    delete json['error']['payment_address'];
                }

                if (json['error']['shipping_address']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_address'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-address-info').addClass('is-invalid');

                    delete json['error']['shipping_address'];
                }

                if (json['error']['shipping_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method-info').addClass('is-invalid');

                    delete json['error']['shipping_method'];
                }

                if (json['error']['payment_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-method-info').addClass('is-invalid');

                    delete json['error']['payment_method'];
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#order-id-value').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#point-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#point-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = {{ order_product_row }};

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token={{ user_token }}&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - {{ text_model|escape('js') }}: ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - {{ text_subscription|escape('js') }}: ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - {{ text_points|escape('js') }}: ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\">' + product['price'] + '</td>';
            html += '  <td class=\"text-end\">' + product['total'] + '</td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">{{ text_no_results|escape('js') }}</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(item['label']);
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin2504/view/template/sale/order_info.twig", "/var/www/html/opencart/upload/admin2504/view/template/sale/order_info.twig");
    }
}
