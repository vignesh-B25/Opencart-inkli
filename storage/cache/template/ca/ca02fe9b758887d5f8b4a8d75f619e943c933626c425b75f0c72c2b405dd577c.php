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

/* extension/opencart/catalog/view/template/checkout/shipping.twig */
class __TwigTemplate_09d5ed621051a072813689f76cf25700af61c4cb45463bcb5b81918e5387e626 extends Template
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
        yield "<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-shipping\">";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</button></h2>
  <div id=\"collapse-shipping\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-quote\">
        <p>";
        // line 6
        yield ($context["text_destination"] ?? null);
        yield "</p>
        <h2>hiii</h2>
        <div class=\"row mb-3 required\">
          <label for=\"input-country\" class=\"col-md-4 col-form-label\">";
        // line 9
        yield ($context["entry_country"] ?? null);
        yield "</label>
          <div class=\"col-md-8\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
              <option value=\"\">";
        // line 12
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 14
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 14);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 14) == ($context["country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 14);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "            </select>
            <div id=\"error-country\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-zone\" class=\"col-md-4 col-form-label\">";
        // line 21
        yield ($context["entry_zone"] ?? null);
        yield "</label>
          <div class=\"col-md-8\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
            <div id=\"error-zone\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-postcode\" class=\"col-md-4 col-form-label\">";
        // line 28
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 30
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-postcode\" class=\"form-control\"/>
            <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"text-end\">
          <button type=\"submit\" id=\"button-quote\" class=\"btn btn-primary\">";
        // line 35
        yield ($context["button_quote"] ?? null);
        yield "</button>
        </div>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#form-quote').on('submit', function(e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/checkout/shipping.quote&language=";
        // line 45
        yield ($context["language"] ?? null);
        yield "',
          type: 'post',
          data: \$('#form-quote').serialize(),
          dataType: 'json',
          beforeSend: function() {
              \$('#button-quote').button('loading');
          },
          complete: function() {
              \$('#button-quote').button('reset');
          },
          success: function(json) {
              console.log(json);

              \$('.alert-dismissible').remove();
              \$('#form-shipping').find('.is-invalid').removeClass('is-invalid');
              \$('#form-shipping').find('.invalid-feedback').removeClass('d-block');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                  }

                  for (key in json['error']) {
                      \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                      \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                  }
              }

              if (json['shipping_methods']) {
                  \$('#modal-shipping').remove();

                  html = '<div id=\"modal-shipping\" class=\"modal\">';
                  html += '  <div class=\"modal-dialog\">';
                  html += '    <div class=\"modal-content\">';
                  html += '      <div class=\"modal-header\">';
                  html += '        <h4 class=\"modal-title\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_shipping_method"] ?? null), "js");
        yield "</h4>';
                  html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                  html += '      </div>';
                  html += '      <div class=\"modal-body\">';
                  html += '        <form id=\"form-shipping\">';
                  html += '          <p>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_estimate"] ?? null), "js");
        yield "</p>';

                  for (i in json['shipping_methods']) {
                      html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                      if (!json['shipping_methods'][i]['error']) {
                          for (j in json['shipping_methods'][i]['quote']) {
                              html += '<div class=\"form-check\">';

                              var code = i + '-' + j.replaceAll('_', '-');

                              html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                              if (json['shipping_methods'][i]['quote'][j]['code'] == '";
        // line 98
        yield ($context["code"] ?? null);
        yield "') {
                                  html += ' checked';
                              }

                              html += '/>';
                              html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                              html += '</div>';
                          }
                      } else {
                          html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_methods'][i]['error'] + '</div>';
                      }
                  }

                  html += '          <div class=\"text-end\">';
                  html += '            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_shipping"] ?? null), "js");
        yield "</button>';
                  html += '          </div>';
                  html += '        </form>';
                  html += '      </div>';
                  html += '    </div>';
                  html += '  </div>';
                  html += '</div>';

                  \$('body').append(html);

                  \$('#modal-shipping').modal('show');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).on('submit', '#form-shipping', function(e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/checkout/shipping.save&language=";
        // line 135
        yield ($context["language"] ?? null);
        yield "',
          type: 'post',
          data: \$('#form-shipping').serialize(),
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

              if (json['error']) {
                  \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
              }

              if (json['success']) {
                  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                  \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 158
        yield ($context["language"] ?? null);
        yield "');

                  \$('#modal-shipping').modal('hide');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').on('change', function() {
      var element = this;

      \$.ajax({
          url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 173
        yield ($context["language"] ?? null);
        yield "',
          dataType: 'json',
          beforeSend: function() {
              \$(element).prop('disabled', true);
              \$('#input-zone').prop('disabled', true);
          },
          complete: function() {
              \$(element).prop('disabled', false);
              \$('#input-zone').prop('disabled', false);
          },
          success: function(json) {
              if (json['postcode_required'] == '1') {
                  \$('#input-postcode').parent().parent().addClass('required');
              } else {
                  \$('#input-postcode').parent().parent().removeClass('required');
              }

              html = '<option value=\"\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == '";
        // line 196
        yield ($context["zone_id"] ?? null);
        yield "') {
                          html += ' selected';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
              }

              \$('#input-zone').html(html);
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').trigger('change');
  //--></script>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/checkout/shipping.twig";
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
        return array (  320 => 203,  310 => 196,  301 => 190,  281 => 173,  263 => 158,  237 => 135,  211 => 112,  194 => 98,  178 => 85,  170 => 80,  132 => 45,  119 => 35,  109 => 30,  104 => 28,  94 => 21,  87 => 16,  72 => 14,  68 => 13,  64 => 12,  58 => 9,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-shipping\">{{ heading_title }}</button></h2>
  <div id=\"collapse-shipping\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-quote\">
        <p>{{ text_destination }}</p>
        <h2>hiii</h2>
        <div class=\"row mb-3 required\">
          <label for=\"input-country\" class=\"col-md-4 col-form-label\">{{ entry_country }}</label>
          <div class=\"col-md-8\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-country\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-zone\" class=\"col-md-4 col-form-label\">{{ entry_zone }}</label>
          <div class=\"col-md-8\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
            <div id=\"error-zone\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-postcode\" class=\"col-md-4 col-form-label\">{{ entry_postcode }}</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-postcode\" class=\"form-control\"/>
            <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"text-end\">
          <button type=\"submit\" id=\"button-quote\" class=\"btn btn-primary\">{{ button_quote }}</button>
        </div>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#form-quote').on('submit', function(e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/checkout/shipping.quote&language={{ language }}',
          type: 'post',
          data: \$('#form-quote').serialize(),
          dataType: 'json',
          beforeSend: function() {
              \$('#button-quote').button('loading');
          },
          complete: function() {
              \$('#button-quote').button('reset');
          },
          success: function(json) {
              console.log(json);

              \$('.alert-dismissible').remove();
              \$('#form-shipping').find('.is-invalid').removeClass('is-invalid');
              \$('#form-shipping').find('.invalid-feedback').removeClass('d-block');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                  }

                  for (key in json['error']) {
                      \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                      \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                  }
              }

              if (json['shipping_methods']) {
                  \$('#modal-shipping').remove();

                  html = '<div id=\"modal-shipping\" class=\"modal\">';
                  html += '  <div class=\"modal-dialog\">';
                  html += '    <div class=\"modal-content\">';
                  html += '      <div class=\"modal-header\">';
                  html += '        <h4 class=\"modal-title\">{{ text_shipping_method|escape('js') }}</h4>';
                  html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                  html += '      </div>';
                  html += '      <div class=\"modal-body\">';
                  html += '        <form id=\"form-shipping\">';
                  html += '          <p>{{ text_estimate|escape('js') }}</p>';

                  for (i in json['shipping_methods']) {
                      html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                      if (!json['shipping_methods'][i]['error']) {
                          for (j in json['shipping_methods'][i]['quote']) {
                              html += '<div class=\"form-check\">';

                              var code = i + '-' + j.replaceAll('_', '-');

                              html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                              if (json['shipping_methods'][i]['quote'][j]['code'] == '{{ code }}') {
                                  html += ' checked';
                              }

                              html += '/>';
                              html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                              html += '</div>';
                          }
                      } else {
                          html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_methods'][i]['error'] + '</div>';
                      }
                  }

                  html += '          <div class=\"text-end\">';
                  html += '            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">{{ button_shipping|escape('js') }}</button>';
                  html += '          </div>';
                  html += '        </form>';
                  html += '      </div>';
                  html += '    </div>';
                  html += '  </div>';
                  html += '</div>';

                  \$('body').append(html);

                  \$('#modal-shipping').modal('show');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).on('submit', '#form-shipping', function(e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/checkout/shipping.save&language={{ language }}',
          type: 'post',
          data: \$('#form-shipping').serialize(),
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

              if (json['error']) {
                  \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
              }

              if (json['success']) {
                  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                  \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');

                  \$('#modal-shipping').modal('hide');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').on('change', function() {
      var element = this;

      \$.ajax({
          url: 'index.php?route=localisation/country&country_id=' + this.value + '&language={{ language }}',
          dataType: 'json',
          beforeSend: function() {
              \$(element).prop('disabled', true);
              \$('#input-zone').prop('disabled', true);
          },
          complete: function() {
              \$(element).prop('disabled', false);
              \$('#input-zone').prop('disabled', false);
          },
          success: function(json) {
              if (json['postcode_required'] == '1') {
                  \$('#input-postcode').parent().parent().addClass('required');
              } else {
                  \$('#input-postcode').parent().parent().removeClass('required');
              }

              html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {
                          html += ' selected';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
              }

              \$('#input-zone').html(html);
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').trigger('change');
  //--></script>
</div>
", "extension/opencart/catalog/view/template/checkout/shipping.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/checkout/shipping.twig");
    }
}
