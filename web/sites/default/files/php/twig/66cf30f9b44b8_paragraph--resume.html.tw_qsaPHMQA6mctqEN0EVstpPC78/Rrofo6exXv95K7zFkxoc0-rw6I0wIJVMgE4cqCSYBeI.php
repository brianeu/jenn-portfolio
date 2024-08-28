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

/* themes/contrib/yg_freelancer/templates/paragraph/paragraph--resume.html.twig */
class __TwigTemplate_47b85985d2eb1776120654be968af6af extends Template
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
        yield "
\t<div id=\"fh5co-resume\" class=\"fh5co-bg-color\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        yield "</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t<li class=\"timeline-heading text-center animate-box\">
\t\t\t\t\t\t\t<div><h3>";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_work_title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        yield "</h3></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_work_information", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        yield "
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<li class=\"timeline-heading text-center animate-box\">
\t\t\t\t\t\t\t<div><h3>";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_education_title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        yield "</h3></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_education_information", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        yield "
\t\t\t    \t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/yg_freelancer/templates/paragraph/paragraph--resume.html.twig";
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
        return array (  73 => 20,  68 => 18,  62 => 15,  57 => 13,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_freelancer/templates/paragraph/paragraph--resume.html.twig", "C:\\xampp\\htdocs\\jenn-portfolio\\web\\themes\\contrib\\yg_freelancer\\templates\\paragraph\\paragraph--resume.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
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
