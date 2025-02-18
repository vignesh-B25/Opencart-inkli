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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_505933f7438620cedcee3c377a6d2028341f10326f26b4b181ac9de0d0f4c9d9 extends Template
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
        yield "</main>
 <script>
document.addEventListener(\"DOMContentLoaded\", function () {
    let breadcrumbs = document.querySelectorAll(\".breadcrumb-item a\"); // Select breadcrumb links
    if (breadcrumbs.length === 0) return; // Exit if no breadcrumbs exist

    let breadcrumbList = [];
    breadcrumbs.forEach((breadcrumb, index) => {
        breadcrumbList.push({
            \"@type\": \"ListItem\",
            \"position\": index + 1,
            \"name\": breadcrumb.textContent.trim(),
            \"item\": breadcrumb.href
        });
    });

    let jsonLdScript = document.createElement(\"script\");
    jsonLdScript.type = \"application/ld+json\";
    jsonLdScript.textContent = JSON.stringify({
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\": breadcrumbList
    });

    document.head.appendChild(jsonLdScript); // Append JSON-LD script to <head>
});
</script>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 31
        if ((($context["informations"] ?? null) || ($context["blog"] ?? null))) {
            // line 32
            yield "        <div class=\"col-sm-3\">
          <h5>";
            // line 33
            yield ($context["text_information"] ?? null);
            yield "</h5>
          <ul class=\"list-unstyled\">
            ";
            // line 35
            if (($context["blog"] ?? null)) {
                // line 36
                yield "              <li><a href=\"";
                yield ($context["blog"] ?? null);
                yield "\">";
                yield ($context["text_blog"] ?? null);
                yield "</a></li>
            ";
            }
            // line 38
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 39
                yield "              <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 39);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 39);
                yield "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "          </ul>
        </div>
      ";
        }
        // line 44
        yield "      <div class=\"col-sm-3\">
        <h5>";
        // line 45
        yield ($context["text_service"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 47
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 48
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
          ";
        // line 49
        if (($context["gdpr"] ?? null)) {
            // line 50
            yield "            <li><a href=\"";
            yield ($context["gdpr"] ?? null);
            yield "\">";
            yield ($context["text_gdpr"] ?? null);
            yield "</a></li>
          ";
        }
        // line 52
        yield "          <li><a href=\"";
        yield ($context["sitemap"] ?? null);
        yield "\">";
        yield ($context["text_sitemap"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 56
        yield ($context["text_extra"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 58
        yield ($context["manufacturer"] ?? null);
        yield "\">";
        yield ($context["text_manufacturer"] ?? null);
        yield "</a></li>
          ";
        // line 59
        if (($context["affiliate"] ?? null)) {
            // line 60
            yield "            <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["text_affiliate"] ?? null);
            yield "</a></li>
          ";
        }
        // line 62
        yield "          <li><a href=\"";
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 66
        yield ($context["text_account"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 68
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 69
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 70
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 71
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 76
        yield ($context["powered"] ?? null);
        yield "</p>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  </div>
</footer>
</div>
";
        // line 84
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 85
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 87
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 87);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "</body></html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  251 => 89,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  219 => 76,  209 => 71,  203 => 70,  197 => 69,  191 => 68,  186 => 66,  176 => 62,  168 => 60,  166 => 59,  160 => 58,  155 => 56,  145 => 52,  137 => 50,  135 => 49,  129 => 48,  123 => 47,  118 => 45,  115 => 44,  110 => 41,  99 => 39,  94 => 38,  86 => 36,  84 => 35,  79 => 33,  76 => 32,  74 => 31,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
 <script>
document.addEventListener(\"DOMContentLoaded\", function () {
    let breadcrumbs = document.querySelectorAll(\".breadcrumb-item a\"); // Select breadcrumb links
    if (breadcrumbs.length === 0) return; // Exit if no breadcrumbs exist

    let breadcrumbList = [];
    breadcrumbs.forEach((breadcrumb, index) => {
        breadcrumbList.push({
            \"@type\": \"ListItem\",
            \"position\": index + 1,
            \"name\": breadcrumb.textContent.trim(),
            \"item\": breadcrumb.href
        });
    });

    let jsonLdScript = document.createElement(\"script\");
    jsonLdScript.type = \"application/ld+json\";
    jsonLdScript.textContent = JSON.stringify({
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\": breadcrumbList
    });

    document.head.appendChild(jsonLdScript); // Append JSON-LD script to <head>
});
</script>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      {% if informations or blog %}
        <div class=\"col-sm-3\">
          <h5>{{ text_information }}</h5>
          <ul class=\"list-unstyled\">
            {% if blog %}
              <li><a href=\"{{ blog }}\">{{ text_blog }}</a></li>
            {% endif %}
            {% for information in informations %}
              <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
            {% endfor %}
          </ul>
        </div>
      {% endif %}
      <div class=\"col-sm-3\">
        <h5>{{ text_service }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
          <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
          {% if gdpr %}
            <li><a href=\"{{ gdpr }}\">{{ text_gdpr }}</a></li>
          {% endif %}
          <li><a href=\"{{ sitemap }}\">{{ text_sitemap }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_extra }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ manufacturer }}\">{{ text_manufacturer }}</a></li>
          {% if affiliate %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate }}</a></li>
          {% endif %}
          <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_account }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ account }}\">{{ text_account }}</a></li>
          <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
          <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>{{ powered }}</p>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  </div>
</footer>
</div>
{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "/var/www/html/opencart/upload/catalog/view/template/common/footer.twig");
    }
}
