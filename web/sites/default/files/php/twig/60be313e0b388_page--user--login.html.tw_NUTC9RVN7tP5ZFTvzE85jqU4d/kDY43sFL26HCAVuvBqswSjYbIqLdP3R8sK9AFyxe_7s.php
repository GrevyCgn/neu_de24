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

/* modules/gin_login/templates/page--user--login.html.twig */
class __TwigTemplate_f42c04dbedbbcb85d6e1bedb891626a02060ccc6fa3432354645cea7164ce4b3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
       <a href=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">
        <img src=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 47, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 47, $this->source), "html", null, true);
        echo "\" />
      </a>
      </div>
    </header>

    <div class=\"layout-container\">
      ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 53), 53, $this->source), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        echo "
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
        // line 56
        $this->displayBlock('title', $context, $blocks);
        // line 59
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
        ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 60)) {
            // line 61
            echo "          <div class=\"help\">
            ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 65
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        echo "
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    <img src=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["brand_image"] ?? null), 73, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["brand_alt"] ?? null), 73, $this->source), "html", null, true);
        echo "\" />
  </div>
</div>
";
    }

    // line 56
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "          <h1 class=\"page-title user-form-page__page-title\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log in"));
        echo "</h1>
        ";
    }

    public function getTemplateName()
    {
        return "modules/gin_login/templates/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 57,  107 => 56,  97 => 73,  85 => 65,  79 => 62,  76 => 61,  74 => 60,  69 => 59,  67 => 56,  61 => 53,  50 => 47,  46 => 46,  40 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/gin_login/templates/page--user--login.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\modules\\gin_login\\templates\\page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 56, "if" => 60);
        static $filters = array("escape" => 47, "without" => 53, "t" => 57);
        static $functions = array("url" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'without', 't'],
                ['url']
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
