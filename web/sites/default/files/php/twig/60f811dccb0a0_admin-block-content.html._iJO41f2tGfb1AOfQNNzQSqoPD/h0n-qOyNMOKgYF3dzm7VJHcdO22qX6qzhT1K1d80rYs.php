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

/* themes/gin/templates/admin/admin-block-content.html.twig */
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_admin-block-content.html._a-qqx3xIgxz967Z9GuVsVdJFB/9bMDTjf5FklOPlgOAwhkfDH3lv66GdP9ucwADyajqv8.php
class __TwigTemplate_b9fb9a5f5f7c8a6c2508d9dcfd9aef83db0ab0604b73cf282b57ec91ce9d60e1 extends \Twig\Template
========
class __TwigTemplate_76721fffbafd56602abef19c13f84db98e8ba6c1c4667ad196d9cb598ebf415d extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_admin-block-content.html._iJO41f2tGfb1AOfQNNzQSqoPD/h0n-qOyNMOKgYF3dzm7VJHcdO22qX6qzhT1K1d80rYs.php
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
        $context["item_classes"] = [0 => "admin-item"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <dl";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "admin-list"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                echo ">
        ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
        <dt class=\"admin-item__title\">";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</dt>
        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 29)) {
                    // line 30
                    echo "          <dd class=\"admin-item__description\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 32
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gin/templates/admin/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  73 => 32,  67 => 30,  65 => 29,  61 => 28,  57 => 27,  52 => 26,  48 => 25,  43 => 24,  41 => 23,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gin/templates/admin/admin-block-content.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\themes\\gin\\templates\\admin\\admin-block-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23, "for" => 25);
        static $filters = array("escape" => 24);
        static $functions = array("create_attribute" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute']
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
