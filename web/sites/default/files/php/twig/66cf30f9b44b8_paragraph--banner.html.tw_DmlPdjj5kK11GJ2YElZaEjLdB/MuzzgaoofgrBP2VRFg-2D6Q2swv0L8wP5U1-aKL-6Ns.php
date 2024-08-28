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

/* themes/contrib/yg_freelancer/templates/paragraph/paragraph--banner.html.twig */
class __TwigTemplate_03bf4540fb4852ba07cbc1c181439368 extends Template
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
        yield "<header id=\"fh5co-header\" class=\"fh5co-cover js-fullheight\" role=\"banner\" style=\"background-image: url(";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_background_image", [], "any", false, false, true, 1), "entity", [], "any", false, false, true, 1), "uri", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1), 1, $this->source)), "html", null, true);
        yield ");\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t js-fullheight\">
\t\t\t\t\t\t<div class=\"display-tc js-fullheight animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<div class=\"profile-thumb\" style=\"background-image: url(";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_member_image", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8), "uri", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source)), "html", null, true);
        yield ");\"></div>
\t\t\t\t\t\t\t<h1><span>";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_member_name", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        yield "</span></h1>
\t\t\t\t\t\t\t<h3><span>";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_member_designation", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        yield "</span></h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<ul class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_linkedin", [], "any", false, false, true, 14)) {
            // line 15
            yield "\t\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_linkedin", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t";
        }
        // line 18
        yield "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/yg_freelancer/templates/paragraph/paragraph--banner.html.twig";
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
        return array (  75 => 18,  68 => 15,  66 => 14,  59 => 10,  55 => 9,  51 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_freelancer/templates/paragraph/paragraph--banner.html.twig", "C:\\xampp\\htdocs\\jenn-portfolio\\web\\themes\\contrib\\yg_freelancer\\templates\\paragraph\\paragraph--banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 1);
        static $functions = array("file_url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url'],
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
