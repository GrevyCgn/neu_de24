<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/form-element-label.html.twig */
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_form-element-label.html.t_Jp-QRiDq7p2awNEfAbXQIzZPV/hAT6K_Re47li9d5vtKq9xdvAaflGEC4kSqyI4jAfiLM.php
class __TwigTemplate_a4bea80abcf91323b8e6c65f9838f4a28341fa166824e460193e218bbbb5dea2 extends \Twig\Template
========
class __TwigTemplate_586ef2bb35c829dcbb587835aa59f4ebea308fb60f7d9e59f417e9362fd30a09 extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_form-element-label.html.t_9mIxga2F0jQfzD9AGSUjWjhj2/ikLOYds-FxAnSU-JzWKU04x9DPOY2AfG2vnOACIguCs.php
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "form-item__label", 1 => (((        // line 18
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 2 => (((        // line 19
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 3 => ((        // line 20
($context["required"] ?? null)) ? ("js-form-required") : ("")), 4 => ((        // line 21
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 24
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 25
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 25,  45 => 24,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/form-element-label.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\themes\\claro\\templates\\form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 24);
        static $filters = array("escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
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
