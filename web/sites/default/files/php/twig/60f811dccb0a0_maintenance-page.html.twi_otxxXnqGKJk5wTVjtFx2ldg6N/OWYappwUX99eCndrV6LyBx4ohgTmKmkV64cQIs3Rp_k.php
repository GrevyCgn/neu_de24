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

<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
/* themes/gin/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_f7d76537ff29d44600f7fc241a6a7cd04d7b3391b906daa66c97a01f8f2143d2 extends \Twig\Template
========
/* core/themes/seven/templates/maintenance-page.html.twig */
class __TwigTemplate_a6450ec48885d7b003cc847a159169e91413539909398aff0695473702b13d12 extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php
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
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
        // line 11
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && ($context["description"] ?? null));
        // line 13
        $context["classes"] = [0 => "form-item", 1 => "form-datetime-wrapper", 2 => ((        // line 16
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 20
        $context["title_classes"] = [0 => "form-item__label", 1 => ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 23
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => ((        // line 24
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 28
        $context["description_classes"] = [0 => "form-item__description", 1 => (((        // line 30
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 33
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 34
        if (($context["show_description_toggle"] ?? null)) {
            // line 35
            echo "  <div class=\"help-icon\">
  ";
        }
        // line 37
        echo "  ";
        if (($context["title"] ?? null)) {
            // line 38
            echo "  <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
            echo "</h4>
  ";
        }
        // line 40
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
            echo "
    <button class=\"help-icon__description-toggle\"></button>
  </div>
  ";
        }
        // line 45
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "html", null, true);
        echo "
";
        // line 46
        if (($context["errors"] ?? null)) {
            // line 47
            echo "  <div class=\"form-item__error-message\">
    ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 48, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 51
        if (($context["description"] ?? null)) {
            // line 52
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">
    ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 53, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 56
        echo "</div>
";
========
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if (($context["site_name"] ?? null)) {
            // line 16
            echo "      <h1 class=\"page-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 16, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 18
        echo "  </header>

  ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 20)) {
            // line 21
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
    </aside>";
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  <main role=\"main\">
    ";
        // line 27
        if (($context["title"] ?? null)) {
            // line 28
            echo "      <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 28, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 30
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
    ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
  </main>

  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 34)) {
            // line 35
            echo "    <footer role=\"contentinfo\">
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 39
        echo "
</div>";
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php
    }

    public function getTemplateName()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
        return "themes/gin/templates/form/datetime-wrapper.html.twig";
========
        return "core/themes/seven/templates/maintenance-page.html.twig";
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
        return array (  114 => 56,  108 => 53,  103 => 52,  101 => 51,  95 => 48,  92 => 47,  90 => 46,  85 => 45,  77 => 41,  74 => 40,  66 => 38,  63 => 37,  59 => 35,  57 => 34,  52 => 33,  50 => 30,  49 => 28,  47 => 24,  46 => 23,  45 => 22,  44 => 20,  42 => 16,  41 => 13,  39 => 11,);
========
        return array (  102 => 39,  96 => 36,  93 => 35,  91 => 34,  85 => 31,  80 => 30,  74 => 28,  72 => 27,  68 => 25,  65 => 24,  61 => 22,  58 => 21,  56 => 20,  52 => 18,  46 => 16,  44 => 15,  39 => 12,);
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
        return new Source("", "themes/gin/templates/form/datetime-wrapper.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\themes\\gin\\templates\\form\\datetime-wrapper.html.twig");
========
        return new Source("", "core/themes/seven/templates/maintenance-page.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\themes\\seven\\templates\\maintenance-page.html.twig");
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php
    }
    
    public function checkSecurity()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_datetime-wrapper.html.twi_v9xpyCMmh3H3QdyGYmMCeyVHX/tkRa2V7PWlzxMSRaWXOomycrGK1TrOzSS1ZTdenLVk0.php
        static $tags = array("set" => 11, "if" => 34);
        static $filters = array("escape" => 33);
        static $functions = array("attach_library" => 41);
========
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16);
        static $functions = array();
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_maintenance-page.html.twi_otxxXnqGKJk5wTVjtFx2ldg6N/OWYappwUX99eCndrV6LyBx4ohgTmKmkV64cQIs3Rp_k.php

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
