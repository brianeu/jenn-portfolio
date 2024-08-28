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

/* themes/contrib/yg_freelancer/templates/layout/page.html.twig */
class __TwigTemplate_4ef9b93d4c2ccf2b00bb0e6e35d83a6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"fh5co-loader\"></div>
<div id=\"page\"> 
  ";
        // line 3
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 4
        yield "  ";
        if (CoreExtension::inFilter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 5
            yield "
    <header id=\"fh5co-header\" class=\"fh5co-cover js-fullheight\" role=\"banner\" style=\"background-image:url(";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null), 6, $this->source), "html", null, true);
            yield ");\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 text-center\">
            <div class=\"display-t js-fullheight\">
              <div class=\"display-tc js-fullheight animate-box\" data-animate-effect=\"fadeIn\">
                <h1><span>";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 13, $this->source), "html", null, true);
            yield "</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  ";
        }
        // line 21
        yield "
  ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        yield "
</div>

<div id=\"fh5co-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 29
        if (($context["copyright"] ?? null)) {
            // line 30
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 30, $this->source), "<b>,<strong>,<p>,<a>,<pre>"));
            yield "
          ";
        }
        // line 31
        yield " 
        </div>
      </div>
    </div>
  </div>
  <div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up22\"></i></a>
  </div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["banner_image", "page", "copyright"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/yg_freelancer/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  94 => 31,  88 => 30,  86 => 29,  76 => 22,  73 => 21,  62 => 13,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_freelancer/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\jenn-portfolio\\web\\themes\\contrib\\yg_freelancer\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 4);
        static $filters = array("render" => 4, "escape" => 6, "raw" => 30, "striptags" => 30);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape', 'raw', 'striptags'],
                ['url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
