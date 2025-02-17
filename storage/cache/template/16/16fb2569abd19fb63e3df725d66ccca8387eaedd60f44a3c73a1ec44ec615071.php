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

/* admin2504/view/template/catalog/product_form.twig */
class __TwigTemplate_03a5c69bf99ed6b724cbb1ec4b806cc1fa3f7ffeb9783eeab24b00f0556c5ea5 extends Template
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
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["master_id"] ?? null)) {
            // line 18
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 20
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_data"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_links"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_attribute"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_subscription"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_discount"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        yield ($context["tab_design"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            yield "                  <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 42);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            yield "</a></li>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "              </ul>
              
       
              
           
         
              <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)) {
                yield " active";
            }
            yield "\">
                    <div class=\"row mb-3 required\">
                    
                      <label for=\"input-name-";
            // line 55
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                         
                        ";
            // line 60
            yield "                              ";
            // line 61
            yield "                          <input type=\"text\" name=\"product_description[";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "][name]\" 
                          value=\"";
            // line 62
            yield (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null), "name", [], "any", false, false, false, 62)) : (""));
            yield "\" 
                          placeholder=\"";
            // line 63
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            yield "\" class=\"form-control\"/>
                          ";
            // line 65
            yield "            
       
                     
                          ";
            // line 68
            if (($context["master_id"] ?? null)) {
                // line 69
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">




                              
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "][name]\" value=\"1\" id=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 76)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null), "name", [], "any", false, false, false, 76)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" class=\"form-check-label\"></label>
                                
                              </div>
                            </div>
                          ";
            }
            // line 81
            yield "                        </div>



                     



                        <div id=\"error-name-";
            // line 89
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>

                       ";
            // line 94
            yield "                        <div class=\"form-controller\">
                        <br><br>
                        <label> Img alt     </label>  
                        <input type=\"text\" name=\"product_description[";
            // line 97
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            yield "][img_alt]\" 
                        value=\"";
            // line 98
            yield (((($__internal_compile_3 = ($context["product_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null), "img_alt", [], "any", false, false, false, 98)) : (""));
            yield "\"><br><br><br><br>
                        <label> Img title   
                         </label> <input type='text' name=\"product_description[";
            // line 100
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            yield "][img_title]\"
                          value=\"";
            // line 101
            yield (((($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null), "img_title", [], "any", false, false, false, 101)) : (""));
            yield "\">
                         </div>
                         
                     
                        ";
            // line 106
            yield "                        ";
            // line 107
            yield "                        
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 109
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 113
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            yield "][description]\"
                             placeholder=\"";
            // line 114
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            yield "\"
                              data-oc-toggle=\"ckeditor\" data-lang=\"";
            // line 115
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"w-100 position-relative\">";
            yield (((($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null), "description", [], "any", false, false, false, 115)) : (""));
            yield "</textarea>
                          </div><br>
                          <br>
                          <br>
                          <div class=\"col-12\">
                          <label for=\"\" class=\"\">Enter benefit 1: </label>
                          <textarea name=\"product_description[";
            // line 121
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
            yield "][benefit_1]\">";
            yield (((($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 =             // line 122
($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122)] ?? null) : null), "benefit_1", [], "any", false, false, false, 122)) : (""));
            yield "</textarea>
                          </div>
                          <div><label for=\"\">Enter benefit 2:</label>
                          <textarea name=\"product_description[";
            // line 125
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
            yield "][benefit_2]\">";
            yield (((($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 =             // line 126
($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126)] ?? null) : null), "benefit_2", [], "any", false, false, false, 126)) : (""));
            yield "</textarea></div>
                         <br> <div>
                            <label for=\"\">
                              Enter benefit 3 : 
                            </label>
                            <textarea name=\"product_description[";
            // line 131
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
            yield "][benefit_3]\">
                            ";
            // line 132
            yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132)] ?? null) : null), "benefit_3", [], "any", false, false, false, 132);
            yield "</textarea>
                          </div>
                                  


                          ";
            // line 138
            yield "






";
            // line 146
            yield "
  
              <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-tap\">Enter Title</label>
    <div class=\"col-sm-10\">
        <input type=\"text\" name=\"tap\" value=\"";
            // line 151
            yield ((array_key_exists("tap", $context)) ? (($context["tap"] ?? null)) : ("hii"));
            yield "\"

placeholder=\"Enter title\" id=\"input-tap\" class=\"form-control\"  />
    </div>
</div>

<div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-tap-detail\">Details</label>
    <div class=\"col-sm-10\">
        <textarea name=\"tap_detail\" id=\"input-tap-detail\" class=\"form-control\">";
            // line 160
            yield ($context["tap_detail"] ?? null);
            yield "</textarea>
    </div>
</div>

<div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-image-tap\">Image</label>
    <div class=\"col-sm-10\">
        <img src=\"";
            // line 167
            yield ($context["image_tap_thumb"] ?? null);
            yield "\" alt=\"Tap Image\" title=\"\" id=\"thumb-image-tap\" class=\"img-fluid\"/>
<input type=\"hidden\" name=\"image_tap\" value=\"";
            // line 168
            yield ($context["image_tap"] ?? null);
            yield "\" id=\"input-image-tap\"/>

        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-tap\" 
                data-oc-thumb=\"#thumb-image-tap\" class=\"btn btn-primary rounded-0\">
            <i class=\"fa-solid fa-pencil\"></i> Edit Image
        </button>
    </div>
</div>

                    ";
            // line 188
            yield "



                          ";
            // line 192
            if (($context["master_id"] ?? null)) {
                // line 193
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 195
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
                yield "][description]\" value=\"1\" id=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 195)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195)] ?? null) : null), "description", [], "any", false, false, false, 195)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 199
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 203
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 203);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 206
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206);
            yield "][meta_title]\" value=\"";
            yield (((($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206)] ?? null) : null), "meta_title", [], "any", false, false, false, 206)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206);
            yield "\" class=\"form-control\"/>
                          ";
            // line 207
            if (($context["master_id"] ?? null)) {
                // line 208
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 210
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210);
                yield "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 210)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210)] ?? null) : null), "meta_title", [], "any", false, false, false, 210)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 214
            yield "                        </div>
                        <div id=\"error-meta-title-";
            // line 215
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 215);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 219
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 219);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 222
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222);
            yield "\" class=\"form-control\">";
            yield (((($__internal_compile_18 = ($context["product_description"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_19 = ($context["product_description"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222)] ?? null) : null), "meta_description", [], "any", false, false, false, 222)) : (""));
            yield "</textarea>
                          ";
            // line 223
            if (($context["master_id"] ?? null)) {
                // line 224
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 226
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226);
                yield "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 226)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226)] ?? null) : null), "meta_description", [], "any", false, false, false, 226)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 230
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 234
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 234);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 237
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
            yield "\" class=\"form-control\">";
            yield (((($__internal_compile_21 = ($context["product_description"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_22 = ($context["product_description"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 237)) : (""));
            yield "</textarea>
                          ";
            // line 238
            if (($context["master_id"] ?? null)) {
                // line 239
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 241
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
                yield "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 241)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 241)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 245
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 249
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 249);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_tag"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 252
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 252);
            yield "][tag]\" value=\"";
            yield (((($__internal_compile_24 = ($context["product_description"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 252)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_25 = ($context["product_description"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 252)] ?? null) : null), "tag", [], "any", false, false, false, 252)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 252);
            yield "\" class=\"form-control\"/>
                          ";
            // line 253
            if (($context["master_id"] ?? null)) {
                // line 254
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 256
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256);
                yield "][tag]\" value=\"1\" id=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 256)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256)] ?? null) : null), "tag", [], "any", false, false, false, 256)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 260
            yield "                        </div>
                        <div class=\"form-text\">";
            // line 261
            yield ($context["help_tag"] ?? null);
            yield "</div>
                      </div>
                    </div>
                  </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        yield "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 269
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <fieldset>
                <legend>";
        // line 271
        yield ($context["text_model"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 273
        yield ($context["entry_model"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 276
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 277
        if (($context["master_id"] ?? null)) {
            // line 278
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 280
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 280)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 284
        yield "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 289
        yield ($context["entry_sku"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 292
        yield ($context["sku"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sku"] ?? null);
        yield "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 293
        if (($context["master_id"] ?? null)) {
            // line 294
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 296
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 296)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 300
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 301
        yield ($context["help_sku"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 305
        yield ($context["entry_upc"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 308
        yield ($context["upc"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_upc"] ?? null);
        yield "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 309
        if (($context["master_id"] ?? null)) {
            // line 310
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 312
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 312)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 316
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 317
        yield ($context["help_upc"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 321
        yield ($context["entry_ean"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 324
        yield ($context["ean"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ean"] ?? null);
        yield "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 325
        if (($context["master_id"] ?? null)) {
            // line 326
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 328
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 328)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 332
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 333
        yield ($context["help_ean"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 337
        yield ($context["entry_jan"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 340
        yield ($context["jan"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_jan"] ?? null);
        yield "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 341
        if (($context["master_id"] ?? null)) {
            // line 342
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 344
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 344)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 348
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 349
        yield ($context["help_jan"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 353
        yield ($context["entry_isbn"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 356
        yield ($context["isbn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_isbn"] ?? null);
        yield "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 357
        if (($context["master_id"] ?? null)) {
            // line 358
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 360
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 360)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 364
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 365
        yield ($context["help_isbn"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 369
        yield ($context["entry_mpn"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 372
        yield ($context["mpn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mpn"] ?? null);
        yield "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 373
        if (($context["master_id"] ?? null)) {
            // line 374
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 376
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 376)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 380
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 381
        yield ($context["help_mpn"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 385
        yield ($context["entry_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 388
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 389
        if (($context["master_id"] ?? null)) {
            // line 390
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 392
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 392)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 396
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 401
        yield ($context["text_price"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 403
        yield ($context["entry_price"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 406
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 407
        if (($context["master_id"] ?? null)) {
            // line 408
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 410
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 410)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 414
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 418
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 422
        yield ($context["text_none"] ?? null);
        yield "</option>
                        ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 424
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 424);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 424) == ($context["tax_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 424);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        yield "                      </select>
                      ";
        // line 427
        if (($context["master_id"] ?? null)) {
            // line 428
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 430
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 430)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 434
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 439
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 441
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 443
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 447
        yield ($context["entry_minimum"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 450
        yield ($context["minimum"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_minimum"] ?? null);
        yield "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 451
        if (($context["master_id"] ?? null)) {
            // line 452
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 454
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 454)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 458
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 459
        yield ($context["help_minimum"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 463
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 467
        if (($context["subtract"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 469
        if (($context["master_id"] ?? null)) {
            // line 470
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 472
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 472)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 476
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 480
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 485
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 485);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 485) == ($context["stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 485);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        yield "                      </select>
                      ";
        // line 488
        if (($context["master_id"] ?? null)) {
            // line 489
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 491
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 491)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 495
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 496
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 500
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
        // line 503
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
        // line 504
        if (($context["master_id"] ?? null)) {
            // line 505
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 507
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 507)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 511
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 516
        yield ($context["text_specification"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 518
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 522
        if (($context["shipping"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 524
        if (($context["master_id"] ?? null)) {
            // line 525
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 527
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 527)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 531
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 535
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 538
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 539
        if (($context["master_id"] ?? null)) {
            // line 540
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 542
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 542)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 546
        yield "                      <input type=\"text\" name=\"width\" value=\"";
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 547
        if (($context["master_id"] ?? null)) {
            // line 548
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 550
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 550)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 554
        yield "                      <input type=\"text\" name=\"height\" value=\"";
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 555
        if (($context["master_id"] ?? null)) {
            // line 556
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 558
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 558)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 562
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 566
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 571
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 571);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 571) == ($context["length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 571);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        yield "                      </select>
                      ";
        // line 574
        if (($context["master_id"] ?? null)) {
            // line 575
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 577
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 577)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 581
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 585
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 588
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 589
        if (($context["master_id"] ?? null)) {
            // line 590
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 592
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 592)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 596
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 600
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 605
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 605);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 605) == ($context["weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 605);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        yield "                      </select>
                      ";
        // line 608
        if (($context["master_id"] ?? null)) {
            // line 609
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 611
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 611)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 615
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 619
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 623
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 625
        if (($context["master_id"] ?? null)) {
            // line 626
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 628
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 628)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 632
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 636
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 639
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 640
        if (($context["master_id"] ?? null)) {
            // line 641
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 643
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 643)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 647
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 654
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 657
        yield ($context["manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 658
        if (($context["master_id"] ?? null)) {
            // line 659
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 661
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 661)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 665
        yield "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 666
        yield ($context["manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 668
        yield ($context["help_manufacturer"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 672
        yield ($context["entry_category"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 674
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 681
            yield "                            <tr id=\"product-category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 681);
            yield "\">
                              <td>";
            // line 682
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 682);
            yield "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 682);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 689
        if (($context["master_id"] ?? null)) {
            // line 690
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 692
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 692)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 696
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 697
        yield ($context["help_category"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 701
        yield ($context["entry_filter"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 703
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 709
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 710
            yield "                            <tr id=\"product-filter-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 710);
            yield "\">
                              <td>";
            // line 711
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 711);
            yield "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 711);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 718
        if (($context["master_id"] ?? null)) {
            // line 719
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 721
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 721)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 725
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 726
        yield ($context["help_filter"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 730
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 734
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 735
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 736
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 736);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 736);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 736), ($context["product_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 736);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 736);
            yield "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        yield "                    </div>
                    ";
        // line 740
        if (($context["master_id"] ?? null)) {
            // line 741
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 743
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 743)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 747
        yield "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 751
        yield ($context["entry_download"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 753
        yield ($context["entry_download"] ?? null);
        yield "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 759
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 760
            yield "                            <tr id=\"product-download-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 760);
            yield "\">
                              <td>";
            // line 761
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 761);
            yield "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 761);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 765
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 768
        if (($context["master_id"] ?? null)) {
            // line 769
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 771
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 771)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 775
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 776
        yield ($context["help_download"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 780
        yield ($context["entry_related"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 782
        yield ($context["entry_related"] ?? null);
        yield "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 788
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 789
            yield "                            <tr id=\"product-related-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 789);
            yield "\">
                              <td>";
            // line 790
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 790);
            yield "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 790);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 797
        if (($context["master_id"] ?? null)) {
            // line 798
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 800
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 800)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 804
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 805
        yield ($context["help_related"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 814
        yield ($context["entry_attribute"] ?? null);
        yield "</th>
                      <th>";
        // line 815
        yield ($context["entry_text"] ?? null);
        yield "</th>
                      <th>";
        // line 816
        if (($context["master_id"] ?? null)) {
            // line 817
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 818
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 818)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 820
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 824
        $context["attribute_row"] = 0;
        // line 825
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 826
            yield "                      <tr id=\"attribute-row-";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 828
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 828);
            yield "\" id=\"input-attribute-id-";
            yield ($context["attribute_row"] ?? null);
            yield "\"/> <input type=\"text\" name=\"product_attribute[";
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 828);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" id=\"input-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" data-oc-target=\"autocomplete-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 829
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>";
            // line 832
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 833
                yield "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 834
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 834);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 834);
                yield "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 835
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" id=\"input-text-";
                yield ($context["attribute_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835);
                yield "\" class=\"form-control\">";
                yield (((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 835)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 835)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835)] ?? null) : null), "text", [], "any", false, false, false, 835)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 837
            yield "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 838
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 840
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 841
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 842
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 846
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 852
        if ( !($context["master_id"] ?? null)) {
            // line 853
            yield "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  ";
            // line 857
            $context["option_row"] = 0;
            // line 858
            yield "                  ";
            $context["option_value_row"] = 0;
            // line 859
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 860
                yield "
                    <fieldset id=\"option-row-";
                // line 861
                yield ($context["option_row"] ?? null);
                yield "\">
                      <legend>";
                // line 862
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 862);
                yield "</legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 863
                yield ($context["option_row"] ?? null);
                yield "][product_option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 863);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][name]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 863);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 863);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][type]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 863);
                yield "\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-";
                // line 869
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-label\">";
                yield ($context["entry_required"] ?? null);
                yield "</label> <select name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][required]\" id=\"input-required-";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-select\">
                              <option value=\"1\"";
                // line 870
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 870)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_enabled"] ?? null);
                yield "</option>
                              <option value=\"0\"";
                // line 871
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 871)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_disabled"] ?? null);
                yield "</option>
                            </select>
                          </div>

                          ";
                // line 875
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 875) == "text")) {
                    // line 876
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 877
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 877);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 880
                yield "
                          ";
                // line 881
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 881) == "textarea")) {
                    // line 882
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 883
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <textarea name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" rows=\"5\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 883);
                    yield "</textarea>
                            </div>
                          ";
                }
                // line 886
                yield "
                          ";
                // line 887
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 887) == "file")) {
                    // line 888
                    yield "                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-";
                    // line 889
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 889);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 892
                yield "
                          ";
                // line 893
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 893) == "date")) {
                    // line 894
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 895
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"date\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 895);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 898
                yield "
                          ";
                // line 899
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 899) == "time")) {
                    // line 900
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 901
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"time\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 901);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 904
                yield "
                          ";
                // line 905
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 905) == "datetime")) {
                    // line 906
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 907
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"datetime-local\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 907);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 910
                yield "
                          ";
                // line 911
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 911) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 911) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 911) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 911) == "image"))) {
                    // line 912
                    yield "                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>";
                    // line 916
                    yield ($context["entry_option_value"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 917
                    yield ($context["entry_quantity"] ?? null);
                    yield "</th>
                                    <th>";
                    // line 918
                    yield ($context["entry_subtract"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 919
                    yield ($context["entry_price"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 920
                    yield ($context["entry_points"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 921
                    yield ($context["entry_weight"] ?? null);
                    yield "</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-";
                    // line 925
                    yield ($context["option_row"] ?? null);
                    yield "\">
                                  ";
                    // line 926
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 926));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 927
                        yield "                                    <tr id=\"option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "\">
                                      <td>";
                        // line 928
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 928);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 929
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 929);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][product_option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 929);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 930
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 930);
                        yield " <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][quantity]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 930);
                        yield "\"/></td>
                                      <td>";
                        // line 931
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 931)) {
                            // line 932
                            yield "                                          ";
                            yield ($context["text_yes"] ?? null);
                            yield "
                                        ";
                        } else {
                            // line 934
                            yield "                                          ";
                            yield ($context["text_no"] ?? null);
                            yield "
                                        ";
                        }
                        // line 936
                        yield "                                        <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][subtract]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 936);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 937
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 937);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 937);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 938
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 938);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 938);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 939
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 939);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 939);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 940
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 940);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 940);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 941
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 941);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 941);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 942
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 942);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 942);
                        yield "\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 943
                        yield ($context["button_edit"] ?? null);
                        yield "\" data-option-row=\"";
                        yield ($context["option_row"] ?? null);
                        yield "\" data-option-value-row=\"";
                        yield ($context["option_value_row"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_remove"] ?? null);
                        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 945
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 946
                        yield "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 947
                    yield "                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 951
                    yield ($context["button_option_value_add"] ?? null);
                    yield "\" data-option-row=\"";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-";
                    // line 955
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"d-none\">
                                ";
                    // line 956
                    if ((($__internal_compile_29 = ($context["option_values"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 956)] ?? null) : null)) {
                        // line 957
                        yield "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_30 = ($context["option_values"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 957)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 958
                            yield "                                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 958);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 958);
                            yield "</option>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 960
                        yield "                                ";
                    }
                    // line 961
                    yield "                              </select>
                            </div>
                          ";
                }
                // line 964
                yield "                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"";
                // line 967
                yield ($context["button_remove"] ?? null);
                yield "\" onclick=\"\$('#option-row-";
                yield ($context["option_row"] ?? null);
                yield "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    ";
                // line 971
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 972
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 973
            yield "                </div>
                <fieldset>
                  <legend class=\"float-none\">";
            // line 975
            yield ($context["text_option_add"] ?? null);
            yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 977
            yield ($context["entry_option"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 979
            yield ($context["entry_option"] ?? null);
            yield "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 981
            yield ($context["help_option"] ?? null);
            yield "</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 987
            yield "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 988
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 989
                yield "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 990
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 990);
                yield "</legend>

                    ";
                // line 992
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 992) == "select")) {
                    // line 993
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 993)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 994
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 994);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 997
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    yield "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 998
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 999
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 999));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1000
                        yield "                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1000);
                        yield "\"";
                        if (((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1000)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1000) == (($__internal_compile_32 = ($context["variant"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1000)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1000);
                        yield "
                                  ";
                        // line 1001
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1001)) {
                            // line 1002
                            yield "                                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1002);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1002);
                            yield ")
                                  ";
                        }
                        // line 1003
                        yield "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1005
                    yield "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1008
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1008)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1012
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1016
                yield "
                    ";
                // line 1017
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1017) == "radio")) {
                    // line 1018
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1018)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1019
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1019);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1022
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1023
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1023));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1024
                        yield "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 1025
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1025);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1025);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1025) == (($__internal_compile_35 = ($context["variant"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1025);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 1026
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1026)) {
                            yield "<img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1026);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1026);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1026)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1026);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1026);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1027
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1027);
                        yield "
                                    ";
                        // line 1028
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1028)) {
                            // line 1029
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1029);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1029);
                            yield ")
                                    ";
                        }
                        // line 1030
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1033
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1036
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1036)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1040
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1040);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1044
                yield "
                    ";
                // line 1045
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1045) == "checkbox")) {
                    // line 1046
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1046)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1047
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1047);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1050
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1051
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1051));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1052
                        yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 1053
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1053);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1053);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1053), (($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1053);
                        yield "\" class=\"form-check-label\">";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1053)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1053);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1053);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1053)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1053);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1053);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1054
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1054);
                        yield "
                                    ";
                        // line 1055
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1055)) {
                            // line 1056
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1056);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1056);
                            yield ")
                                    ";
                        }
                        // line 1057
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1060
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1063
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1063)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1067
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1071
                yield "
                    ";
                // line 1072
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1072) == "text")) {
                    // line 1073
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1073)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1074
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1074);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1074);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1077
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1077);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_40 = ($context["variant"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1077)] ?? null) : null)) ? ((($__internal_compile_41 = ($context["variant"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1077)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1077)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1077);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1077);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1080
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1080)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1084
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1088
                yield "
                    ";
                // line 1089
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1089) == "textarea")) {
                    // line 1090
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1090)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1091
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1091);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1091);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1094
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1094);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_43 = ($context["variant"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094)] ?? null) : null)) ? ((($__internal_compile_44 = ($context["variant"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1094)));
                    yield "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1097
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1097);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1097);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1097);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_45 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1097)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1097)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1097);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1101);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1105
                yield "
                    ";
                // line 1106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1106) == "file")) {
                    // line 1107
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1107)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1108);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1111
                    yield ($context["upload"] ?? null);
                    yield "\" id=\"button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1111);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1111);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_46 = ($context["variant"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["variant"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1112)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    yield "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1113);
                    yield "\"";
                    if ( !(($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1113)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1114
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1114);
                    yield "\"";
                    if ( !(($__internal_compile_49 = ($context["variant"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1114)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1117)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1121);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1125
                yield "
                    ";
                // line 1126
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1126) == "date")) {
                    // line 1127
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1127)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1128
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1128);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1128);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[";
                    // line 1131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1131);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_51 = ($context["variant"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1131)] ?? null) : null)) ? ((($__internal_compile_52 = ($context["variant"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1131)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1131)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1131);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1134
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_53 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1134)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1138);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1142
                yield "
                    ";
                // line 1143
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1143) == "time")) {
                    // line 1144
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1144)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1145
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1145);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1145);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1147
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1147);
                    yield "\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[";
                    // line 1148
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1148);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_54 = ($context["variant"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1148)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["variant"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1148)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1148)));
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1151);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1151);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1151);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_56 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1151)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1151)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1151);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1155
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1155);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1159
                yield "
                    ";
                // line 1160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1160) == "datetime")) {
                    // line 1161
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1161)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1162
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1162);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1162);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[";
                    // line 1165
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1165);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_57 = ($context["variant"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1165)] ?? null) : null)) ? ((($__internal_compile_58 = ($context["variant"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1165)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1165)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1165);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1168
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1168);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1168);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1168);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_59 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1168)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1168)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1168);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1172);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1176
                yield "                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1178
            yield "              </div>
            ";
        }
        // line 1180
        yield "            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1185
        yield ($context["entry_subscription"] ?? null);
        yield "</th>
                      <th>";
        // line 1186
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th>";
        // line 1187
        yield ($context["entry_trial_price"] ?? null);
        yield "</th>
                      <th>";
        // line 1188
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th>
                        ";
        // line 1190
        if (($context["master_id"] ?? null)) {
            // line 1191
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1192
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1192)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1194
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1198
        $context["subscription_row"] = 0;
        // line 1199
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1200
            yield "                      <tr id=\"subscription-row-";
            yield ($context["subscription_row"] ?? null);
            yield "\">
                        <td><select name=\"product_subscription[";
            // line 1201
            yield ($context["subscription_row"] ?? null);
            yield "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1202
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1203
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1203);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1203) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1203))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1203);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1205
            yield "                          </select></td>
                        <td><select name=\"product_subscription[";
            // line 1206
            yield ($context["subscription_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1208
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1208);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1208) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1208))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1208);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1210
            yield "                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1211
            yield ($context["subscription_row"] ?? null);
            yield "][trial_price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1211);
            yield "\" placeholder=\"";
            yield ($context["entry_trial_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1212
            yield ($context["subscription_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1212);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1213
            yield ($context["subscription_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1215
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1216
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1217
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1221
        yield ($context["button_subscription_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1232
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1233
        yield ($context["entry_quantity"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1234
        yield ($context["entry_priority"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1235
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1236
        yield ($context["entry_type"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1237
        yield ($context["entry_special"] ?? null);
        yield "</th>
                      <th>";
        // line 1238
        yield ($context["entry_date_start"] ?? null);
        yield "</th>
                      <th>";
        // line 1239
        yield ($context["entry_date_end"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1240
        if (($context["master_id"] ?? null)) {
            // line 1241
            yield "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1242
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1242)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1244
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1248
        $context["discount_row"] = 0;
        // line 1249
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1250
            yield "                      <tr id=\"discount-row-";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td><select name=\"product_discount[";
            // line 1251
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1252
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1253
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1253);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1253) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1253))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1253);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1255
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1256
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1256);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1257
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1257);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1258
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1258);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[";
            // line 1259
            yield ($context["discount_row"] ?? null);
            yield "][type]\" class=\"form-select\">
                            <option value=\"F\"";
            // line 1260
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1260) == "F")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_fixed"] ?? null);
            yield "</option>
                            <option value=\"S\"";
            // line 1261
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1261) == "S")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_subtract"] ?? null);
            yield "</option>
                            <option value=\"P\"";
            // line 1262
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1262) == "P")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_percentage"] ?? null);
            yield "</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[";
            // line 1265
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[";
            // line 1266
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"1\" class=\"form-check-input\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "special", [], "any", false, false, false, 1266)) {
                yield " checked";
            }
            yield "/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1268
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1268);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1269
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1269);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1270
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1272
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1273
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1274
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1278
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1286
        yield ($context["text_image"] ?? null);
        yield "</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 1288
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> 
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 1289
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" 
                    data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1292
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\">
                    <i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1294
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    ";
        // line 1295
        if (($context["master_id"] ?? null)) {
            // line 1296
            yield "                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1298
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1298)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1302
        yield "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1306
        yield ($context["text_image_additional"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1311
        yield ($context["entry_image"] ?? null);
        yield "</th>
                        <th>";
        // line 1312
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                        <th class=\"text-end\">
                          ";
        // line 1314
        if (($context["master_id"] ?? null)) {
            // line 1315
            yield "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1316
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1316)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1318
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1322
        $context["image_row"] = 0;
        // line 1323
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1324
            yield "                        <tr id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"";
            // line 1327
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1327);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1327);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1329
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1330
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[";
            // line 1334
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1334);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1335
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1337
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1338
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1339
        yield "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1343
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>


              
              </fieldset>
            </div>



            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1358
        yield ($context["text_reward"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1360
        yield ($context["entry_points"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1363
        yield ($context["points"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1364
        if (($context["master_id"] ?? null)) {
            // line 1365
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1367
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1367)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1371
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1372
        yield ($context["help_points"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1377
        yield ($context["text_points"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1382
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                        <th class=\"text-end\">";
        // line 1383
        yield ($context["entry_reward"] ?? null);
        yield "&nbsp;&nbsp;";
        if (($context["master_id"] ?? null)) {
            // line 1384
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1385
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1385)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          ";
        }
        // line 1387
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1392
            yield "                        <tr>
                          <td>";
            // line 1393
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1393);
            yield "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1394
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1394);
            yield "][points]\" value=\"";
            yield (((($__internal_compile_60 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1394)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_61 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1394)] ?? null) : null), "points", [], "any", false, false, false, 1394)) : (""));
            yield "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1397
        yield "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1404
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1409
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1410
        yield ($context["entry_keyword"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1414
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1415
            yield "                      <tr>
                        <td>";
            // line 1416
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1416);
            yield "</td>
                   
                        <td>
                          ";
            // line 1419
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1420
                yield "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1421
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1421);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1421);
                yield "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1422
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1422);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1422);
                yield "]\" value=\"";
                if ((($__internal_compile_62 = (($__internal_compile_63 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1422)] ?? null) : null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1422)] ?? null) : null)) {
                    yield (($__internal_compile_64 = (($__internal_compile_65 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1422)] ?? null) : null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1422)] ?? null) : null);
                }
                yield "\" id=\"input-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1422);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1422);
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1424
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1424);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1424);
                yield "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1425
            yield "</td>
                        
                      </tr>
                      
                      
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1431
        yield "                  
                  </tbody>
                         
                         <div>
       <label>Enter script: </label>
       <textarea name='global_script'  id=\"g-script\">";
        // line 1436
        yield ($context["global_script"] ?? null);
        yield "</textarea>
       
       </div>
                </table>
           
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1449
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1450
        yield ($context["entry_layout"] ?? null);
        if (($context["master_id"] ?? null)) {
            // line 1451
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1452
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1452)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1454
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1458
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1459
            yield "                      <tr>
                        <td>";
            // line 1460
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1460);
            yield "</td>
                        <td><select name=\"product_layout[";
            // line 1461
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1461);
            yield "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1463
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1464
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1464);
                yield "\"";
                if (((($__internal_compile_66 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1464)] ?? null) : null) && ((($__internal_compile_67 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1464)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1464)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1464);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1466
            yield "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1469
        yield "                  </tbody>
      
                </table>
              </div>
            </div>
            

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1478
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 1479
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1484
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1492
        yield ($context["ckeditor"] ?? null);
        yield "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1499
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1504
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1526
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1560
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1594
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1628
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1662
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1682
        yield ($context["attribute_row"] ?? null);
        yield ";

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_attribute"] ?? null), "js");
        yield "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  ";
        // line 1696
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1697
            yield "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1698
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1698);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1698), "js");
            yield "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1699
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1699);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_text"] ?? null), "js");
            yield "\" id=\"input-text-' + attribute_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1699);
            yield "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1702
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1713
        if ( !($context["master_id"] ?? null)) {
            // line 1714
            yield "var option_row = ";
            yield ($context["option_row"] ?? null);
            yield ";

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1719
            yield ($context["user_token"] ?? null);
            yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">";
            // line 1746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_required"] ?? null), "js");
            yield "</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">";
            // line 1748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '\t         <option value=\"0\">";
            // line 1749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1763
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1770
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1776
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1790
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>";
            // line 1800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</td>';
            html += '        <td>";
            // line 1802
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1804
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1805
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_option_value_add"] ?? null), "js");
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1840
            yield ($context["option_value_row"] ?? null);
            yield ";

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1857
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_option_value"] ?? null), "js");
            yield "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1878
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\">";
            // line 1887
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1889
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1890
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1896
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1913
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1917
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1934
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1938
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1955
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1960
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_save"] ?? null), "js");
            yield "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_cancel"] ?? null), "js");
            yield "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1974
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1978
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
            yield "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1993
        yield "
var discount_row = ";
        // line 1994
        yield ($context["discount_row"] ?? null);
        yield ";

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1999
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2000
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2000);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2000), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2002
        yield "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"";
        // line 2003
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2004
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">";
        // line 2007
        yield ($context["text_fixed"] ?? null);
        yield "</option>';
    html += '    <option value=\"S\">";
        // line 2008
        yield ($context["text_subtract"] ?? null);
        yield "</option>';
    html += '    <option value=\"P\">";
        // line 2009
        yield ($context["text_percentage"] ?? null);
        yield "</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2015
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2016
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = ";
        // line 2025
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 2030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0k\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2032
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2033
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2036
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2037
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2045
        yield ($context["subscription_row"] ?? null);
        yield ";

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2050
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2051
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2051);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2051), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2053
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2055
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2056
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2056);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2056), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2058
        yield "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 2059
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_trial_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 2060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2061
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2069
        if (($context["master_id"] ?? null)) {
            // line 2070
            yield "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2136
        yield "
\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//-->

// THIS IS THE SCRIPT FOR TAP SYSTEM 




// vvvvvvvvvvvv
document.addEventListener('DOMContentLoaded', function () {
    const imageTapButton = document.querySelector('[data-oc-target=\"#input-image-tap\"]');
    const imageModal = document.getElementById('modal-image');

    if (imageTapButton) {
        imageTapButton.addEventListener('click', function () {
            setTimeout(() => {
                if (imageModal) {
                    imageModal.removeAttribute('aria-hidden');
                    imageModal.removeAttribute('inert');
                }
            }, 500);
        });
    }
});

// END HERE 
console.log('Response:',JSON);  // Logs the entire response
 

</script>
";
        // line 2171
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
        return "admin2504/view/template/catalog/product_form.twig";
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
        return array (  5122 => 2171,  5085 => 2136,  5017 => 2070,  5015 => 2069,  5004 => 2061,  5000 => 2060,  4996 => 2059,  4993 => 2058,  4982 => 2056,  4978 => 2055,  4974 => 2053,  4963 => 2051,  4959 => 2050,  4951 => 2045,  4940 => 2037,  4936 => 2036,  4930 => 2033,  4926 => 2032,  4919 => 2030,  4911 => 2025,  4900 => 2017,  4896 => 2016,  4892 => 2015,  4883 => 2009,  4879 => 2008,  4875 => 2007,  4870 => 2005,  4866 => 2004,  4862 => 2003,  4859 => 2002,  4848 => 2000,  4844 => 1999,  4836 => 1994,  4833 => 1993,  4813 => 1978,  4804 => 1974,  4785 => 1960,  4777 => 1955,  4757 => 1938,  4750 => 1934,  4730 => 1917,  4723 => 1913,  4703 => 1896,  4694 => 1890,  4690 => 1889,  4685 => 1887,  4681 => 1886,  4674 => 1882,  4668 => 1879,  4664 => 1878,  4644 => 1861,  4637 => 1857,  4617 => 1840,  4587 => 1813,  4576 => 1805,  4572 => 1804,  4568 => 1803,  4564 => 1802,  4560 => 1801,  4556 => 1800,  4544 => 1791,  4540 => 1790,  4531 => 1784,  4527 => 1783,  4518 => 1777,  4514 => 1776,  4505 => 1770,  4501 => 1769,  4492 => 1763,  4488 => 1762,  4479 => 1756,  4475 => 1755,  4466 => 1749,  4462 => 1748,  4457 => 1746,  4427 => 1719,  4418 => 1714,  4416 => 1713,  4403 => 1703,  4400 => 1702,  4387 => 1699,  4381 => 1698,  4378 => 1697,  4374 => 1696,  4366 => 1691,  4354 => 1682,  4331 => 1662,  4294 => 1628,  4257 => 1594,  4220 => 1560,  4183 => 1526,  4158 => 1504,  4150 => 1499,  4140 => 1492,  4129 => 1484,  4121 => 1479,  4117 => 1478,  4106 => 1469,  4098 => 1466,  4083 => 1464,  4079 => 1463,  4074 => 1461,  4070 => 1460,  4067 => 1459,  4063 => 1458,  4057 => 1454,  4049 => 1452,  4046 => 1451,  4043 => 1450,  4039 => 1449,  4023 => 1436,  4016 => 1431,  4005 => 1425,  3995 => 1424,  3978 => 1422,  3972 => 1421,  3969 => 1420,  3965 => 1419,  3959 => 1416,  3956 => 1415,  3952 => 1414,  3945 => 1410,  3941 => 1409,  3933 => 1404,  3924 => 1397,  3913 => 1394,  3909 => 1393,  3906 => 1392,  3902 => 1391,  3896 => 1387,  3888 => 1385,  3885 => 1384,  3881 => 1383,  3877 => 1382,  3869 => 1377,  3861 => 1372,  3858 => 1371,  3849 => 1367,  3845 => 1365,  3843 => 1364,  3837 => 1363,  3831 => 1360,  3826 => 1358,  3808 => 1343,  3802 => 1339,  3796 => 1338,  3794 => 1337,  3787 => 1335,  3779 => 1334,  3768 => 1330,  3760 => 1329,  3745 => 1327,  3738 => 1324,  3733 => 1323,  3731 => 1322,  3725 => 1318,  3717 => 1316,  3714 => 1315,  3712 => 1314,  3707 => 1312,  3703 => 1311,  3695 => 1306,  3689 => 1302,  3680 => 1298,  3676 => 1296,  3674 => 1295,  3670 => 1294,  3665 => 1292,  3659 => 1289,  3653 => 1288,  3648 => 1286,  3637 => 1278,  3631 => 1274,  3625 => 1273,  3623 => 1272,  3616 => 1270,  3608 => 1269,  3600 => 1268,  3591 => 1266,  3587 => 1265,  3577 => 1262,  3569 => 1261,  3561 => 1260,  3557 => 1259,  3549 => 1258,  3541 => 1257,  3533 => 1256,  3530 => 1255,  3515 => 1253,  3511 => 1252,  3507 => 1251,  3502 => 1250,  3497 => 1249,  3495 => 1248,  3489 => 1244,  3481 => 1242,  3478 => 1241,  3476 => 1240,  3472 => 1239,  3468 => 1238,  3464 => 1237,  3460 => 1236,  3456 => 1235,  3452 => 1234,  3448 => 1233,  3444 => 1232,  3430 => 1221,  3424 => 1217,  3418 => 1216,  3416 => 1215,  3409 => 1213,  3401 => 1212,  3393 => 1211,  3390 => 1210,  3375 => 1208,  3371 => 1207,  3367 => 1206,  3364 => 1205,  3349 => 1203,  3345 => 1202,  3341 => 1201,  3336 => 1200,  3331 => 1199,  3329 => 1198,  3323 => 1194,  3315 => 1192,  3312 => 1191,  3310 => 1190,  3305 => 1188,  3301 => 1187,  3297 => 1186,  3293 => 1185,  3286 => 1180,  3282 => 1178,  3275 => 1176,  3268 => 1172,  3251 => 1168,  3241 => 1165,  3233 => 1162,  3226 => 1161,  3224 => 1160,  3221 => 1159,  3214 => 1155,  3197 => 1151,  3189 => 1148,  3185 => 1147,  3178 => 1145,  3171 => 1144,  3169 => 1143,  3166 => 1142,  3159 => 1138,  3142 => 1134,  3132 => 1131,  3124 => 1128,  3117 => 1127,  3115 => 1126,  3112 => 1125,  3105 => 1121,  3088 => 1117,  3076 => 1114,  3066 => 1113,  3058 => 1112,  3044 => 1111,  3038 => 1108,  3031 => 1107,  3029 => 1106,  3026 => 1105,  3019 => 1101,  3002 => 1097,  2990 => 1094,  2982 => 1091,  2975 => 1090,  2973 => 1089,  2970 => 1088,  2963 => 1084,  2946 => 1080,  2934 => 1077,  2926 => 1074,  2919 => 1073,  2917 => 1072,  2914 => 1071,  2907 => 1067,  2890 => 1063,  2885 => 1060,  2877 => 1057,  2870 => 1056,  2868 => 1055,  2863 => 1054,  2835 => 1053,  2832 => 1052,  2828 => 1051,  2824 => 1050,  2818 => 1047,  2811 => 1046,  2809 => 1045,  2806 => 1044,  2799 => 1040,  2782 => 1036,  2777 => 1033,  2769 => 1030,  2762 => 1029,  2760 => 1028,  2755 => 1027,  2739 => 1026,  2725 => 1025,  2722 => 1024,  2718 => 1023,  2714 => 1022,  2708 => 1019,  2701 => 1018,  2699 => 1017,  2696 => 1016,  2689 => 1012,  2672 => 1008,  2667 => 1005,  2660 => 1003,  2653 => 1002,  2651 => 1001,  2640 => 1000,  2636 => 999,  2632 => 998,  2626 => 997,  2620 => 994,  2613 => 993,  2611 => 992,  2606 => 990,  2603 => 989,  2599 => 988,  2596 => 987,  2587 => 981,  2582 => 979,  2577 => 977,  2572 => 975,  2568 => 973,  2562 => 972,  2560 => 971,  2551 => 967,  2546 => 964,  2541 => 961,  2538 => 960,  2527 => 958,  2522 => 957,  2520 => 956,  2516 => 955,  2507 => 951,  2501 => 947,  2495 => 946,  2493 => 945,  2480 => 943,  2466 => 942,  2461 => 941,  2447 => 940,  2442 => 939,  2428 => 938,  2423 => 937,  2414 => 936,  2408 => 934,  2402 => 932,  2400 => 931,  2390 => 930,  2376 => 929,  2372 => 928,  2367 => 927,  2363 => 926,  2359 => 925,  2352 => 921,  2348 => 920,  2344 => 919,  2340 => 918,  2336 => 917,  2332 => 916,  2326 => 912,  2324 => 911,  2321 => 910,  2305 => 907,  2302 => 906,  2300 => 905,  2297 => 904,  2281 => 901,  2278 => 900,  2276 => 899,  2273 => 898,  2257 => 895,  2254 => 894,  2252 => 893,  2249 => 892,  2233 => 889,  2230 => 888,  2228 => 887,  2225 => 886,  2209 => 883,  2206 => 882,  2204 => 881,  2201 => 880,  2185 => 877,  2182 => 876,  2180 => 875,  2169 => 871,  2161 => 870,  2151 => 869,  2128 => 863,  2124 => 862,  2120 => 861,  2117 => 860,  2112 => 859,  2109 => 858,  2107 => 857,  2101 => 853,  2099 => 852,  2090 => 846,  2084 => 842,  2078 => 841,  2076 => 840,  2069 => 838,  2066 => 837,  2047 => 835,  2041 => 834,  2038 => 833,  2034 => 832,  2028 => 829,  2010 => 828,  2004 => 826,  1999 => 825,  1997 => 824,  1991 => 820,  1983 => 818,  1980 => 817,  1978 => 816,  1974 => 815,  1970 => 814,  1958 => 805,  1955 => 804,  1946 => 800,  1942 => 798,  1940 => 797,  1935 => 794,  1923 => 790,  1918 => 789,  1914 => 788,  1905 => 782,  1900 => 780,  1893 => 776,  1890 => 775,  1881 => 771,  1877 => 769,  1875 => 768,  1870 => 765,  1858 => 761,  1853 => 760,  1849 => 759,  1840 => 753,  1835 => 751,  1829 => 747,  1820 => 743,  1816 => 741,  1814 => 740,  1811 => 739,  1792 => 736,  1789 => 735,  1785 => 734,  1778 => 730,  1771 => 726,  1768 => 725,  1759 => 721,  1755 => 719,  1753 => 718,  1748 => 715,  1736 => 711,  1731 => 710,  1727 => 709,  1718 => 703,  1713 => 701,  1706 => 697,  1703 => 696,  1694 => 692,  1690 => 690,  1688 => 689,  1683 => 686,  1671 => 682,  1666 => 681,  1662 => 680,  1653 => 674,  1648 => 672,  1641 => 668,  1636 => 666,  1633 => 665,  1624 => 661,  1620 => 659,  1618 => 658,  1612 => 657,  1606 => 654,  1597 => 647,  1588 => 643,  1584 => 641,  1582 => 640,  1576 => 639,  1570 => 636,  1564 => 632,  1555 => 628,  1551 => 626,  1549 => 625,  1542 => 623,  1535 => 619,  1529 => 615,  1520 => 611,  1516 => 609,  1514 => 608,  1511 => 607,  1496 => 605,  1492 => 604,  1485 => 600,  1479 => 596,  1470 => 592,  1466 => 590,  1464 => 589,  1458 => 588,  1452 => 585,  1446 => 581,  1437 => 577,  1433 => 575,  1431 => 574,  1428 => 573,  1413 => 571,  1409 => 570,  1402 => 566,  1396 => 562,  1387 => 558,  1383 => 556,  1381 => 555,  1374 => 554,  1365 => 550,  1361 => 548,  1359 => 547,  1352 => 546,  1343 => 542,  1339 => 540,  1337 => 539,  1331 => 538,  1325 => 535,  1319 => 531,  1310 => 527,  1306 => 525,  1304 => 524,  1297 => 522,  1290 => 518,  1285 => 516,  1278 => 511,  1269 => 507,  1265 => 505,  1263 => 504,  1257 => 503,  1251 => 500,  1244 => 496,  1241 => 495,  1232 => 491,  1228 => 489,  1226 => 488,  1223 => 487,  1208 => 485,  1204 => 484,  1197 => 480,  1191 => 476,  1182 => 472,  1178 => 470,  1176 => 469,  1169 => 467,  1162 => 463,  1155 => 459,  1152 => 458,  1143 => 454,  1139 => 452,  1137 => 451,  1131 => 450,  1125 => 447,  1116 => 443,  1111 => 441,  1106 => 439,  1099 => 434,  1090 => 430,  1086 => 428,  1084 => 427,  1081 => 426,  1066 => 424,  1062 => 423,  1058 => 422,  1051 => 418,  1045 => 414,  1036 => 410,  1032 => 408,  1030 => 407,  1024 => 406,  1018 => 403,  1013 => 401,  1006 => 396,  997 => 392,  993 => 390,  991 => 389,  985 => 388,  979 => 385,  972 => 381,  969 => 380,  960 => 376,  956 => 374,  954 => 373,  948 => 372,  942 => 369,  935 => 365,  932 => 364,  923 => 360,  919 => 358,  917 => 357,  911 => 356,  905 => 353,  898 => 349,  895 => 348,  886 => 344,  882 => 342,  880 => 341,  874 => 340,  868 => 337,  861 => 333,  858 => 332,  849 => 328,  845 => 326,  843 => 325,  837 => 324,  831 => 321,  824 => 317,  821 => 316,  812 => 312,  808 => 310,  806 => 309,  800 => 308,  794 => 305,  787 => 301,  784 => 300,  775 => 296,  771 => 294,  769 => 293,  763 => 292,  757 => 289,  750 => 284,  741 => 280,  737 => 278,  735 => 277,  729 => 276,  723 => 273,  718 => 271,  713 => 269,  708 => 266,  689 => 261,  686 => 260,  669 => 256,  665 => 254,  663 => 253,  653 => 252,  645 => 249,  639 => 245,  622 => 241,  618 => 239,  616 => 238,  606 => 237,  598 => 234,  592 => 230,  575 => 226,  571 => 224,  569 => 223,  559 => 222,  551 => 219,  544 => 215,  541 => 214,  524 => 210,  520 => 208,  518 => 207,  508 => 206,  500 => 203,  494 => 199,  477 => 195,  473 => 193,  471 => 192,  465 => 188,  453 => 168,  449 => 167,  439 => 160,  427 => 151,  420 => 146,  411 => 138,  403 => 132,  399 => 131,  391 => 126,  388 => 125,  382 => 122,  379 => 121,  368 => 115,  362 => 114,  358 => 113,  349 => 109,  345 => 107,  343 => 106,  336 => 101,  332 => 100,  327 => 98,  323 => 97,  318 => 94,  311 => 89,  301 => 81,  283 => 76,  274 => 69,  272 => 68,  267 => 65,  261 => 63,  257 => 62,  252 => 61,  250 => 60,  241 => 55,  230 => 52,  213 => 51,  204 => 44,  177 => 42,  160 => 41,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  103 => 23,  98 => 21,  95 => 20,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_links }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_subscription }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_discount }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                {% for language in languages %}
                  <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              
       
              
           
         
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                    <div class=\"row mb-3 required\">
                    
                      <label for=\"input-name-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                         
                        {# -------------------------------------------------------------------- #}
                              {# this is the product input field  #}
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" 
                          value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" 
                          placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                          {# ---------------------------------------------- #}
            
       
                     
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">




                              
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][name]\" value=\"1\" id=\"input-variant-name-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].name %} checked{% endif %}/> <label for=\"input-variant-name-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                
                              </div>
                            </div>
                          {% endif %}
                        </div>



                     



                        <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>

                       {# inklidox customization  #}
                        <div class=\"form-controller\">
                        <br><br>
                        <label> Img alt     </label>  
                        <input type=\"text\" name=\"product_description[{{language.language_id}}][img_alt]\" 
                        value=\"{{product_description[language.language_id] ? product_description[language.language_id].img_alt }}\"><br><br><br><br>
                        <label> Img title   
                         </label> <input type='text' name=\"product_description[{{language.language_id}}][img_title]\"
                          value=\"{{product_description[language.language_id] ? product_description[language.language_id].img_title }}\">
                         </div>
                         
                     
                        {# end here #}
                        {# inklify customization for benefit field #}
                        
                    <div class=\"row mb-3\">
                      <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[{{ language.language_id}}][description]\"
                             placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\"
                              data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"w-100 position-relative\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                          </div><br>
                          <br>
                          <br>
                          <div class=\"col-12\">
                          <label for=\"\" class=\"\">Enter benefit 1: </label>
                          <textarea name=\"product_description[{{language.language_id}}][benefit_1]\">{{product_description[language.language_id] 
                          ? product_description[language.language_id].benefit_1}}</textarea>
                          </div>
                          <div><label for=\"\">Enter benefit 2:</label>
                          <textarea name=\"product_description[{{language.language_id}}][benefit_2]\">{{product_description[language.language_id] 
                          ? product_description[language.language_id].benefit_2}}</textarea></div>
                         <br> <div>
                            <label for=\"\">
                              Enter benefit 3 : 
                            </label>
                            <textarea name=\"product_description[{{language.language_id}}][benefit_3]\">
                            {{product_description[language.language_id].benefit_3}}</textarea>
                          </div>
                                  


                          {# end here  #}







{# inklidox customization #}

  
              <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-tap\">Enter Title</label>
    <div class=\"col-sm-10\">
        <input type=\"text\" name=\"tap\" value=\"{{ tap is defined ? tap : 'hii' }}\"

placeholder=\"Enter title\" id=\"input-tap\" class=\"form-control\"  />
    </div>
</div>

<div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-tap-detail\">Details</label>
    <div class=\"col-sm-10\">
        <textarea name=\"tap_detail\" id=\"input-tap-detail\" class=\"form-control\">{{ tap_detail }}</textarea>
    </div>
</div>

<div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-image-tap\">Image</label>
    <div class=\"col-sm-10\">
        <img src=\"{{ image_tap_thumb }}\" alt=\"Tap Image\" title=\"\" id=\"thumb-image-tap\" class=\"img-fluid\"/>
<input type=\"hidden\" name=\"image_tap\" value=\"{{ image_tap }}\" id=\"input-image-tap\"/>

        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-tap\" 
                data-oc-thumb=\"#thumb-image-tap\" class=\"btn btn-primary rounded-0\">
            <i class=\"fa-solid fa-pencil\"></i> Edit Image
        </button>
    </div>
</div>

                    {# end here #}
{# 
 <div>
       <label>Enter script: </label>
       <textarea name='global_script'  id=\"g-script\">{{global_script}}</textarea>
        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\">
        <i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\">
                    <i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
       </div>
        #}




                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][description]\" value=\"1\" id=\"input-variant-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].description %} checked{% endif %}/> <label for=\"input-variant-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_title]\" value=\"1\" id=\"input-variant-meta-title-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_title %} checked{% endif %}/> <label for=\"input-variant-meta-title-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_description]\" value=\"1\" id=\"input-variant-meta-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_description %} checked{% endif %}/> <label for=\"input-variant-meta-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_keyword %} checked{% endif %}/> <label for=\"input-variant-meta-keyword-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_tag }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][tag]\" value=\"1\" id=\"input-variant-tag-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].tag %} checked{% endif %}/> <label for=\"input-variant-tag-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div class=\"form-text\">{{ help_tag }}</div>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <fieldset>
                <legend>{{ text_model }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">{{ entry_sku }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"{{ sku }}\" placeholder=\"{{ entry_sku }}\" id=\"input-sku\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"{% if override.sku %} checked{% endif %}/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_sku }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">{{ entry_upc }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"{{ upc }}\" placeholder=\"{{ entry_upc }}\" id=\"input-upc\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"{% if override.upc %} checked{% endif %}/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_upc }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">{{ entry_ean }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"{{ ean }}\" placeholder=\"{{ entry_ean }}\" id=\"input-ean\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"{% if override.ean %} checked{% endif %}/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_ean }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">{{ entry_jan }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"{{ jan }}\" placeholder=\"{{ entry_jan }}\" id=\"input-jan\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"{% if override.jan %} checked{% endif %}/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_jan }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">{{ entry_isbn }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"{{ isbn }}\" placeholder=\"{{ entry_isbn }}\" id=\"input-isbn\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"{% if override.isbn %} checked{% endif %}/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_isbn }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">{{ entry_mpn }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"{{ mpn }}\" placeholder=\"{{ entry_mpn }}\" id=\"input-mpn\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"{% if override.mpn %} checked{% endif %}/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_mpn }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_price }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"{{ entry_price }}\" id=\"input-price\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"{% if override.price %} checked{% endif %}/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">{{ text_none }}</option>
                        {% for tax_class in tax_classes %}
                          <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"{% if override.tax_class_id %} checked{% endif %}/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">{{ entry_minimum }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_minimum }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_subtract }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_available }}</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_specification }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"{% if override.shipping %} checked{% endif %}/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">{{ entry_dimension }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"{% if override.length %} checked{% endif %}/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"{% if override.width %} checked{% endif %}/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"{% if override.height %} checked{% endif %}/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        {% for length_class in length_classes %}
                          <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"{% if override.length_class_id %} checked{% endif %}/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">{{ entry_weight }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"{% if override.weight %} checked{% endif %}/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        {% for weight_class in weight_classes %}
                          <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"{% if override.weight_class_id %} checked{% endif %}/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"{% if override.status %} checked{% endif %}/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"{% if override.sort_order %} checked{% endif %}/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_manufacturer }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          {% for product_category in product_categories %}
                            <tr id=\"product-category-{{ product_category.category_id }}\">
                              <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          {% for product_filter in product_filters %}
                            <tr id=\"product-filter-{{ product_filter.filter_id }}\">
                              <td>{{ product_filter.name }}<input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"{% if override.product_filter %} checked{% endif %}/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for store in stores %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in product_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"{% if override.product_store %} checked{% endif %}/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_download }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          {% for product_download in product_downloads %}
                            <tr id=\"product-download-{{ product_download.download_id }}\">
                              <td>{{ product_download.name }}<input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"{% if override.product_download %} checked{% endif %}/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_download }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_attribute }}</th>
                      <th>{{ entry_text }}</th>
                      <th>{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"{% if override.product_attribute %} checked{% endif %}/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row-{{ attribute_row }}\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\" id=\"input-attribute-id-{{ attribute_row }}\"/> <input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" id=\"input-attribute-{{ attribute_row }}\" data-oc-target=\"autocomplete-attribute-{{ attribute_row }}\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-{{ attribute_row }}\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>{% for language in languages %}
                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" id=\"input-text-{{ attribute_row }}-{{ language.language_id }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-{{ attribute_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {% if not master_id %}
              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  {% set option_row = 0 %}
                  {% set option_value_row = 0 %}
                  {% for product_option in product_options %}

                    <fieldset id=\"option-row-{{ option_row }}\">
                      <legend>{{ product_option.name }}</legend>
                      <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-{{ option_row }}\" class=\"form-label\">{{ entry_required }}</label> <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required-{{ option_row }}\" class=\"form-select\">
                              <option value=\"1\"{% if product_option.required %} selected{% endif %}>{{ text_enabled }}</option>
                              <option value=\"0\"{% if not product_option.required %} selected{% endif %}>{{ text_disabled }}</option>
                            </select>
                          </div>

                          {% if product_option.type == 'text' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'textarea' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'file' %}
                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'date' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"date\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'time' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"time\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'datetime' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"datetime-local\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>{{ entry_option_value }}</th>
                                    <th class=\"text-end\">{{ entry_quantity }}</th>
                                    <th>{{ entry_subtract }}</th>
                                    <th class=\"text-end\">{{ entry_price }}</th>
                                    <th class=\"text-end\">{{ entry_points }}</th>
                                    <th class=\"text-end\">{{ entry_weight }}</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-{{ option_row }}\">
                                  {% for product_option_value in product_option.product_option_value %}
                                    <tr id=\"option-value-row-{{ option_value_row }}\">
                                      <td>{{ product_option_value.name }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" value=\"{{ product_option_value.option_value_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.quantity }} <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\"/></td>
                                      <td>{% if product_option_value.subtract %}
                                          {{ text_yes }}
                                        {% else %}
                                          {{ text_no }}
                                        {% endif %}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" value=\"{{ product_option_value.subtract }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.price_prefix }}{{ product_option_value.price }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" value=\"{{ product_option_value.price_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.points_prefix }}{{ product_option_value.points }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" value=\"{{ product_option_value.points_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.weight_prefix }}{{ product_option_value.weight }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" value=\"{{ product_option_value.weight_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" data-option-row=\"{{ option_row }}\" data-option-value-row=\"{{ option_value_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    {% set option_value_row = option_value_row + 1 %}
                                  {% endfor %}
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" data-option-row=\"{{ option_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-{{ option_row }}\" class=\"d-none\">
                                {% if option_values[product_option.option_id] %}
                                  {% for option_value in option_values[product_option.option_id] %}
                                    <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>
                                  {% endfor %}
                                {% endif %}
                              </select>
                            </div>
                          {% endif %}
                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" onclick=\"\$('#option-row-{{ option_row }}').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    {% set option_row = option_row + 1 %}
                  {% endfor %}
                </div>
                <fieldset>
                  <legend class=\"float-none\">{{ text_option_add }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">{{ entry_option }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">{{ help_option }}</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            {% else %}
              <div id=\"tab-option\" class=\"tab-pane\">
                {% for option in options %}
                  <fieldset>
                    <legend class=\"float-none\">{{ option.name }}</legend>

                    {% if option.type == 'select' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for option_value in option.product_option_value %}
                                <option value=\"{{ option_value.product_option_value_id }}\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} selected{% endif %}>{{ option_value.name }}
                                  {% if option_value.price %}
                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                  {% endif %}</option>
                              {% endfor %}
                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}<img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id in variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">{% if option_value.image %} <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-{{ option.product_option_id }}\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}
                  </fieldset>
                {% endfor %}
              </div>
            {% endif %}
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_subscription }}</th>
                      <th>{{ entry_customer_group }}</th>
                      <th>{{ entry_trial_price }}</th>
                      <th>{{ entry_price }}</th>
                      <th>
                        {% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"{% if override.product_subscription %} checked{% endif %}/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set subscription_row = 0 %}
                    {% for product_subscription in product_subscriptions %}
                      <tr id=\"subscription-row-{{ subscription_row }}\">
                        <td><select name=\"product_subscription[{{ subscription_row }}][subscription_plan_id]\" class=\"form-select\">
                            {% for subscription_plan in subscription_plans %}
                              <option value=\"{{ subscription_plan.subscription_plan_id }}\"{% if subscription_plan.subscription_plan_id == product_subscription.subscription_plan_id %} selected{% endif %}>{{ subscription_plan.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><select name=\"product_subscription[{{ subscription_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_subscription.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][trial_price]\" value=\"{{ product_subscription.trial_price }}\" placeholder=\"{{ entry_trial_price }}\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][price]\" value=\"{{ product_subscription.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-{{ subscription_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set subscription_row = subscription_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"{{ button_subscription_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_customer_group }}</th>
                      <th class=\"text-end\">{{ entry_quantity }}</th>
                      <th class=\"text-end\">{{ entry_priority }}</th>
                      <th class=\"text-end\">{{ entry_price }}</th>
                      <th class=\"text-end\">{{ entry_type }}</th>
                      <th class=\"text-end\">{{ entry_special }}</th>
                      <th>{{ entry_date_start }}</th>
                      <th>{{ entry_date_end }}</th>
                      <th class=\"text-end\">{% if master_id %}
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"{% if override.product_discount %} checked{% endif %}/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row-{{ discount_row }}\">
                        <td><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_discount.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[{{ discount_row }}][type]\" class=\"form-select\">
                            <option value=\"F\"{% if product_discount.type == 'F' %} selected{% endif %}>{{ text_fixed }}</option>
                            <option value=\"S\"{% if product_discount.type == 'S' %} selected{% endif %}>{{ text_subtract }}</option>
                            <option value=\"P\"{% if product_discount.type == 'P' %} selected{% endif %}>{{ text_percentage }}</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[{{ discount_row }}][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[{{ discount_row }}][special]\" value=\"1\" class=\"form-check-input\"{% if product_discount.special %} checked{% endif %}/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-{{ discount_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image }}</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> 
                  <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" 
                    data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\">
                    <i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    {% if master_id %}
                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"{% if override.image %} checked{% endif %}/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_image_additional }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_image }}</th>
                        <th>{{ entry_sort_order }}</th>
                        <th class=\"text-end\">
                          {% if master_id %}
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"{% if override.product_image %} checked{% endif %}/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% set image_row = 0 %}
                      {% for product_image in product_images %}
                        <tr id=\"product-image-row-{{ image_row }}\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>


              
              </fieldset>
            </div>



            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"{% if override.points %} checked{% endif %}/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_points }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_points }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_customer_group }}</th>
                        <th class=\"text-end\">{{ entry_reward }}&nbsp;&nbsp;{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"{% if override.product_reward %} checked{% endif %}/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for customer_group in customer_groups %}
                        <tr>
                          <td>{{ customer_group.name }}</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_keyword }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                   
                        <td>
                          {% for language in languages %}
                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                        
                      </tr>
                      
                      
                    {% endfor %}
                  
                  </tbody>
                         
                         <div>
       <label>Enter script: </label>
       <textarea name='global_script'  id=\"g-script\">{{global_script}}</textarea>
       
       </div>
                </table>
           
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_layout }}{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"{% if override.product_layout %} checked{% endif %}/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
      
                </table>
              </div>
            </div>
            

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = {{ attribute_row }};

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute|escape('js') }}\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  {% for language in languages %}
    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text|escape('js') }}\" id=\"input-text-' + attribute_row + '-{{ language.language_id }}\" class=\"form-control\"></textarea>';
    html += '</div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

{% if not master_id %}
var option_row = {{ option_row }};

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">{{ entry_required|escape('js') }}</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '\t         <option value=\"0\">{{ text_no|escape('js') }}</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>{{ entry_option_value|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_quantity|escape('js') }}</td>';
            html += '        <td>{{ entry_subtract|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_price|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_points|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_weight|escape('js') }}</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add|escape('js') }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = {{ option_value_row }};

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> {{ text_option_value|escape('js') }}</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">{{ entry_quantity|escape('js') }}</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"{{ entry_quantity|escape('js') }}\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">{{ entry_subtract|escape('js') }}</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\">{{ text_no|escape('js') }}</option>';
    } else {
        html += '      \t <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\" selected>{{ text_no|escape('js') }}</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">{{ entry_price|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"{{ entry_price|escape('js') }}\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">{{ entry_points|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"{{ entry_points|escape('js') }}\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">{{ entry_weight|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"{{ entry_weight|escape('js') }}\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">{{ button_save|escape('js') }}</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">{{ button_cancel|escape('js') }}</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '{{ text_yes|escape('js') }}' : '{{ text_no|escape('js') }}') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit|escape('js') }}\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
{% endif %}

var discount_row = {{ discount_row }};

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"{{ entry_quantity|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">{{ text_fixed }}</option>';
    html += '    <option value=\"S\">{{ text_subtract }}</option>';
    html += '    <option value=\"P\">{{ text_percentage }}</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0k\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = {{ subscription_row }};

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  {% for subscription_plan in subscription_plans %}
    html += '      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"{{ entry_trial_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

{% if master_id %}
// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
{% endif %}

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//-->

// THIS IS THE SCRIPT FOR TAP SYSTEM 




// vvvvvvvvvvvv
document.addEventListener('DOMContentLoaded', function () {
    const imageTapButton = document.querySelector('[data-oc-target=\"#input-image-tap\"]');
    const imageModal = document.getElementById('modal-image');

    if (imageTapButton) {
        imageTapButton.addEventListener('click', function () {
            setTimeout(() => {
                if (imageModal) {
                    imageModal.removeAttribute('aria-hidden');
                    imageModal.removeAttribute('inert');
                }
            }, 500);
        });
    }
});

// END HERE 
console.log('Response:',JSON);  // Logs the entire response
 

</script>
{{ footer }}
", "admin2504/view/template/catalog/product_form.twig", "/var/www/html/opencart/upload/admin2504/view/template/catalog/product_form.twig");
    }
}
