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

/* core/themes/claro/templates/form/radios.html.twig */
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_radios.html.twig_rfhRumOQUjlXl6RbWbmvvgDbw/trnu7QqGV6NKkE6o-sWNSKfFYJSa317tP9KrsV0IU5g.php
class __TwigTemplate_0b6aa7cc482cffc28cecb5ff146f987b11bdea8895be6e922af8ff291d244024 extends \Twig\Template
========
class __TwigTemplate_e04f115b9c5658977780bab07e122ee75c5054212e0ac52715e93a98a2f120be extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_radios.html.twig_OQ-h935flOkwBveNXU-NrIR5n/THYl-SerF6dVx4-1n1GUborGm_PJ5szFOlv1X-JyatU.php
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
        // line 13
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "form-radios", 1 => "form-boolean-group"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 13, $this->source), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/form/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/form/radios.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\themes\\claro\\templates\\form\\radios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
