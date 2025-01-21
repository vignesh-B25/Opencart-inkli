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

/* extension/opencart/catalog/view/template/module/topic.twig */
class __TwigTemplate_faff5490d3f9bd862abf33c5787c0db8401835986bb753d9eecc291311a84804 extends Template
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
        yield "<div class='container'>
<div class=\"row\" id='topics'>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["topics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 4
            yield "    <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 4);
            yield "\" class=\"col";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "topic_id", [], "any", false, false, false, 4) == ($context["topic_id"] ?? null))) {
                yield " active";
            }
            yield "\" id=\"toimg\">
   <!-- <img src='/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/prd.png' alt='product'>-->
    ";
            // line 7
            yield "
    
    ";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "name", [], "any", false, false, false, 9);
            yield "
     <img src='https://upload.wikimedia.org/wikipedia/commons/4/45/Shoemaker_1821.jpg' alt='product' style=\"max-width: 80%;\"></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "   
  <style>
  #topics .col{
    background: linear-gradient(90deg, #FA344F, #FF4A40, #FF9B55);
    text-align: center;
    margin: 5px;
    min-height: 10vw;
    /* font-size: 30px; */
    color: black;
font-family: 'Bebas Neue', cursive;
  }
/*     
  }
   #topics #toimg img{
   padding: 4%;
    min-width: 500px;
   }
   @media(max-width:540px){
     #topics #toimg img{
      max-width:10% !important;
     }
   } */
     @media (max-width:400px){
      #topic #toimg img{
        max-width: 80% !important;
      }
     }
  </style>
</div>
</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/topic.twig";
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
        return array (  73 => 12,  64 => 9,  60 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class='container'>
<div class=\"row\" id='topics'>
    {% for topic in topics %}
    <a href=\"{{ topic.href }}\" class=\"col{% if topic.topic_id == topic_id %} active{% endif %}\" id=\"toimg\">
   <!-- <img src='/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/prd.png' alt='product'>-->
    {# <img src='https://upload.wikimedia.org/wikipedia/commons/4/45/Shoemaker_1821.jpg' alt='product'> #}

    
    {{ topic.name }}
     <img src='https://upload.wikimedia.org/wikipedia/commons/4/45/Shoemaker_1821.jpg' alt='product' style=\"max-width: 80%;\"></a>
  {% endfor %}
   
  <style>
  #topics .col{
    background: linear-gradient(90deg, #FA344F, #FF4A40, #FF9B55);
    text-align: center;
    margin: 5px;
    min-height: 10vw;
    /* font-size: 30px; */
    color: black;
font-family: 'Bebas Neue', cursive;
  }
/*     
  }
   #topics #toimg img{
   padding: 4%;
    min-width: 500px;
   }
   @media(max-width:540px){
     #topics #toimg img{
      max-width:10% !important;
     }
   } */
     @media (max-width:400px){
      #topic #toimg img{
        max-width: 80% !important;
      }
     }
  </style>
</div>
</div>

", "extension/opencart/catalog/view/template/module/topic.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/topic.twig");
    }
}
