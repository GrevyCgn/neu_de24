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

/* core/themes/claro/templates/navigation/menu-local-task.html.twig */
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_menu-local-task.html.twig_RY_1DS8c3uhqIVju35BDdXWhh/sGEgXsl8J_d-87cjNsAR-au5OMWz0wJC5XRdCF2fAzc.php
class __TwigTemplate_32c366d687b0b7e6f276137d3d813135ca74a298ca8a640e4a447596ee215f8e extends \Twig\Template
========
class __TwigTemplate_89bb898093f92ec69280cd3f12ed34c4ff3155ce37142e1e9f28856966870ca7 extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_menu-local-task.html.twig_PvH-RkEyHfp8oSV2JhmH5B4z6/iJu_aqomlupLXx9Dq36a27amHXhBe-XN-Q3CqTMWb4I.php
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
        // line 19
        $context["classes"] = [0 => "tabs__tab", 1 => (((        // line 21
($context["level"] ?? null) == "primary")) ? ("js-tab") : ("")), 2 => ((        // line 22
($context["is_active"] ?? null)) ? ("is-active") : ("")), 3 => ((        // line 23
($context["is_active"] ?? null)) ? ("js-active-tab") : (""))];
        // line 26
        echo "<li";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 27, $this->source), "html", null, true);
        echo "
  ";
        // line 28
        if ((($context["is_active"] ?? null) && (($context["level"] ?? null) == "primary"))) {
            // line 29
            echo "    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>
      ";
            // line 30
            $this->loadTemplate("@claro/../images/src/hamburger-menu.svg", "core/themes/claro/templates/navigation/menu-local-task.html.twig", 30)->display($context);
            // line 31
            echo "    </button>
  ";
        }
        // line 33
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 33,  62 => 31,  60 => 30,  55 => 29,  53 => 28,  49 => 27,  44 => 26,  42 => 23,  41 => 22,  40 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/navigation/menu-local-task.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\themes\\claro\\templates\\navigation\\menu-local-task.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 28, "include" => 30);
        static $filters = array("escape" => 26, "t" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape', 't'],
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
