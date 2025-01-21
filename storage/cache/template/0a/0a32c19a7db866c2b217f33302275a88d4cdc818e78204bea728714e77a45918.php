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

/* extension/opencart/catalog/view/template/module/special.twig */
class __TwigTemplate_754800d5eb4aa9b924804ad7377139c577662400bff318157224aef63046241b extends Template
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
        yield "<h3 id='special'>";
        yield ($context["heading_title"] ?? null);
        yield "</h3>
<div class=\"row";
        // line 2
        if ((($context["axis"] ?? null) == "horizontal")) {
            yield " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        yield "\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            yield "    <div class=\"col mb-3\">";
            yield $context["product"];
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "</div>
    <!-- Include party.js for confetti -->
   <script src=\"https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Select the element linked with your file
        const targetElement = document.querySelector('#special'); // Replace with the actual ID or class

        // Create an Intersection Observer
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Trigger confetti when the target element enters the viewport
                        party.confetti(entry.target, {
                            count: 200, // Number of particles
                            spread: 200, // Spread angle
                            size: 1, // Size of particles
                        });
                        // Optional: Disconnect observer to avoid retriggering
                        observer.disconnect();
                    }
                });
            },
            {
                root: null, // Observe relative to the viewport
                threshold: 0.5, // Trigger when 50% of the element is visible
            }
        );

        // Observe the target element
        if (targetElement) {
            observer.observe(targetElement);
        } else {
            console.warn('Target element not found!');
        }
    });
</script>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/special.twig";
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
        return array (  66 => 6,  57 => 4,  53 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3 id='special'>{{ heading_title }}</h3>
<div class=\"row{% if axis == 'horizontal' %} row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4{% endif %}\">
  {% for product in products %}
    <div class=\"col mb-3\">{{ product }}</div>
  {% endfor %}
</div>
    <!-- Include party.js for confetti -->
   <script src=\"https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Select the element linked with your file
        const targetElement = document.querySelector('#special'); // Replace with the actual ID or class

        // Create an Intersection Observer
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Trigger confetti when the target element enters the viewport
                        party.confetti(entry.target, {
                            count: 200, // Number of particles
                            spread: 200, // Spread angle
                            size: 1, // Size of particles
                        });
                        // Optional: Disconnect observer to avoid retriggering
                        observer.disconnect();
                    }
                });
            },
            {
                root: null, // Observe relative to the viewport
                threshold: 0.5, // Trigger when 50% of the element is visible
            }
        );

        // Observe the target element
        if (targetElement) {
            observer.observe(targetElement);
        } else {
            console.warn('Target element not found!');
        }
    });
</script>


", "extension/opencart/catalog/view/template/module/special.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/special.twig");
    }
}
