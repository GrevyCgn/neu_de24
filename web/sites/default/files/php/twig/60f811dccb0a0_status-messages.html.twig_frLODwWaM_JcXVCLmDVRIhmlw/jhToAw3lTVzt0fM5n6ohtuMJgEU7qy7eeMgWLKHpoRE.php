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

<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_status-messages.html.twig_tYxDIlbRgo690hlOgUHCL70gP/yoESK8c0rslfuAxBZebg_vgsAfXQVR9UPctucpkKEZA.php
/* core/themes/olivero/templates/misc/status-messages.html.twig */
class __TwigTemplate_a77e004498f7e9e26591944d19b2a1d177cd8a4c03a0c95ba4fa4b8f91b5f794 extends \Twig\Template
========
/* core/themes/seven/templates/classy/misc/status-messages.html.twig */
class __TwigTemplate_42f777079aee6749889e3770474fc21f10a3b64e117eb40df53f10a769fc0235 extends \Twig\Template
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_status-messages.html.twig_frLODwWaM_JcXVCLmDVRIhmlw/jhToAw3lTVzt0fM5n6ohtuMJgEU7qy7eeMgWLKHpoRE.php
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_status-messages.html.twig_tYxDIlbRgo690hlOgUHCL70gP/yoESK8c0rslfuAxBZebg_vgsAfXQVR9UPctucpkKEZA.php
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/messages"), "html", null, true);
        echo "

<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper layout-container\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "      ";
            // line 28
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 31
$context["type"], 31, $this->source))];
            // line 34
            echo "
      <div";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 =>             // line 36
($context["classes"] ?? null)], "method", false, false, true, 35), "setAttribute", [0 => "data-drupal-selector", 1 => "messages"], "method", false, false, true, 36), "setAttribute", [0 => "role", 1 => "contentinfo"], "method", false, false, true, 37), "setAttribute", [0 => "aria-label", 1 => (($__internal_compile_0 =             // line 39
($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null)], "method", false, false, true, 38), 39, $this->source), "html", null, true);
            // line 40
            echo ">
        <div class=\"messages__container\" data-drupal-selector=\"messages-container\"";
            // line 41
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">
          ";
            // line 42
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 43
                echo "            <div class=\"messages__header\">
            <h2 class=\"visually-hidden\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 44, $this->source), "html", null, true);
                echo "</h2>
              <div class=\"messages__icon\">
                ";
                // line 46
                if (($context["type"] == "error")) {
                    // line 47
                    echo "                  ";
                    $this->loadTemplate("@olivero/../images/error.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 47)->display($context);
                    // line 48
                    echo "                ";
                } elseif (($context["type"] == "warning")) {
                    // line 49
                    echo "                  ";
                    $this->loadTemplate("@olivero/../images/warning.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 49)->display($context);
                    // line 50
                    echo "                ";
                } elseif (($context["type"] == "status")) {
                    // line 51
                    echo "                  ";
                    $this->loadTemplate("@olivero/../images/status.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 51)->display($context);
                    // line 52
                    echo "                ";
                } elseif (($context["type"] == "info")) {
                    // line 53
                    echo "                  ";
                    $this->loadTemplate("@olivero/../images/info.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 53)->display($context);
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "              </div>
            </div>
          ";
            }
            // line 58
            echo "          <div class=\"messages__content\">
            ";
            // line 59
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 60
                echo "              <ul class=\"messages__list\">
                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 62
                    echo "                  <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 62, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "              </ul>
            ";
            } else {
                // line 66
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 66, $this->source)), "html", null, true);
                echo "
            ";
            }
            // line 68
            echo "          </div>
        </div>
      </div>
      ";
            // line 72
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72);
            // line 73
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  </div>
</div>
========
        echo "<div data-drupal-messages>
";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 55
        echo "</div>
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_status-messages.html.twig_frLODwWaM_JcXVCLmDVRIhmlw/jhToAw3lTVzt0fM5n6ohtuMJgEU7qy7eeMgWLKHpoRE.php
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "  ";
            // line 26
            $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 28
$context["type"], 28, $this->source))];
            // line 31
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_headings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["type"]] ?? null) : null), 31, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 32
            if (($context["type"] == "error")) {
                // line 33
                echo "      <div role=\"alert\">
    ";
            }
            // line 35
            echo "      ";
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["status_headings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["type"]] ?? null) : null)) {
                // line 36
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["status_headings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["type"]] ?? null) : null), 36, $this->source), "html", null, true);
                echo "</h2>
      ";
            }
            // line 38
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "        <ul class=\"messages__list\">
          ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "            <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 41, $this->source), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </ul>
      ";
            } else {
                // line 45
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 45, $this->source)), "html", null, true);
                echo "
      ";
            }
            // line 47
            echo "    ";
            if (($context["type"] == "error")) {
                // line 48
                echo "      </div>
    ";
            }
            // line 50
            echo "  </div>
  ";
            // line 52
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 52);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_status-messages.html.twig_tYxDIlbRgo690hlOgUHCL70gP/yoESK8c0rslfuAxBZebg_vgsAfXQVR9UPctucpkKEZA.php
        return array (  178 => 74,  164 => 73,  161 => 72,  156 => 68,  150 => 66,  146 => 64,  137 => 62,  133 => 61,  130 => 60,  128 => 59,  125 => 58,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  102 => 49,  99 => 48,  96 => 47,  94 => 46,  89 => 44,  86 => 43,  84 => 42,  78 => 41,  75 => 40,  73 => 39,  72 => 36,  71 => 35,  68 => 34,  66 => 31,  65 => 28,  63 => 27,  46 => 26,  39 => 22,);
========
        return array (  124 => 52,  121 => 50,  117 => 48,  114 => 47,  108 => 45,  104 => 43,  95 => 41,  91 => 40,  88 => 39,  85 => 38,  79 => 36,  76 => 35,  72 => 33,  70 => 32,  63 => 31,  61 => 28,  60 => 26,  58 => 25,  54 => 24,  50 => 23,  45 => 55,  43 => 23,  40 => 22,);
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_status-messages.html.twig_frLODwWaM_JcXVCLmDVRIhmlw/jhToAw3lTVzt0fM5n6ohtuMJgEU7qy7eeMgWLKHpoRE.php
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/seven/templates/classy/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\core\\themes\\seven\\templates\\classy\\misc\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/637250525136e_status-messages.html.twig_tYxDIlbRgo690hlOgUHCL70gP/yoESK8c0rslfuAxBZebg_vgsAfXQVR9UPctucpkKEZA.php
        static $tags = array("for" => 26, "set" => 28, "if" => 41, "include" => 47);
        static $filters = array("escape" => 22, "length" => 59, "first" => 66);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'include'],
                ['escape', 'length', 'first'],
                ['attach_library']
========
        static $tags = array("block" => 23, "for" => 24, "set" => 26, "if" => 32);
        static $filters = array("escape" => 31, "without" => 31, "length" => 38, "first" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                []
>>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b:web/sites/default/files/php/twig/60f811dccb0a0_status-messages.html.twig_frLODwWaM_JcXVCLmDVRIhmlw/jhToAw3lTVzt0fM5n6ohtuMJgEU7qy7eeMgWLKHpoRE.php
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
