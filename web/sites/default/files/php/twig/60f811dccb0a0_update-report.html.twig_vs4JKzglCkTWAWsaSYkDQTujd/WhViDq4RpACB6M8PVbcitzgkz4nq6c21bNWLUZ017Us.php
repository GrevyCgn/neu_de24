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

<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
/* core/modules/system/templates/maintenance-task-list.html.twig */
class __TwigTemplate_b43ee14f5b15a61c7636cbd936bd1ab7baac9f881469a99123be2b0949d46989 extends \Twig\Template
========
/* core/modules/update/templates/update-report.html.twig */
class __TwigTemplate_f747f4fbd6deddfd750378a7c7c99e74fd051d9e41d7b7c7d4e898653450a1fd extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
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
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
        // line 17
        echo "<h2 class=\"visually-hidden\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installation tasks"));
        echo "</h2>
<ol class=\"task-list\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 20
            echo "  <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["task"], "attributes", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">
    ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["task"], "item", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, true, 22)) {
                echo "<span class=\"visually-hidden\"> (";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo ")</span>";
            }
            // line 23
            echo "  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
========
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_checked"] ?? null), 18, $this->source), "html", null, true);
        echo "

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["project_types"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project_type"]) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project_type"], "label", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h3>
  ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project_type"], "table", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "  <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["no_updates_message"] ?? null), 24, $this->source), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_type'], $context['_parent'], $context['loop']);
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ol>
";
    }

    public function getTemplateName()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
        return "core/modules/system/templates/maintenance-task-list.html.twig";
========
        return "core/modules/update/templates/update-report.html.twig";
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
        return array (  71 => 25,  64 => 23,  58 => 22,  54 => 21,  49 => 20,  45 => 19,  39 => 17,);
========
        return array (  61 => 24,  54 => 22,  49 => 21,  44 => 20,  39 => 18,);
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
        return new Source("", "core/modules/system/templates/maintenance-task-list.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\modules\\system\\templates\\maintenance-task-list.html.twig");
========
        return new Source("", "core/modules/update/templates/update-report.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\modules\\update\\templates\\update-report.html.twig");
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
    }
    
    public function checkSecurity()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
        static $tags = array("for" => 19, "if" => 22);
        static $filters = array("t" => 17, "escape" => 20);
========
        static $tags = array("for" => 20);
        static $filters = array("escape" => 18);
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_maintenance-task-list.htm_p3OPmp7u-LhMd45vnkh1x85rn/yUz36ky16GvWW4FYIrYKZlKu7xF-vDoUleB8oLVQZc0.php
                ['for', 'if'],
                ['t', 'escape'],
========
                ['for'],
                ['escape'],
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_update-report.html.twig_vs4JKzglCkTWAWsaSYkDQTujd/WhViDq4RpACB6M8PVbcitzgkz4nq6c21bNWLUZ017Us.php
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
