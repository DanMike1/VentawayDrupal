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

/* themes/ruhi/templates/layout/page--front.html.twig */
class __TwigTemplate_fe8f66ae66f8be89e2377d58ae8331327c81cbc9d69a5843db35cedfd86c6bce extends \Twig\Template
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
        // line 1
        $this->loadTemplate("@ruhi/template-parts/header.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 1)->display($context);
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 3)->display($context);
        }
        // line 5
        echo "<div class=\"main-wrapper\">
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 6)) {
            // line 7
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 7)->display($context);
            // line 8
            echo "  ";
        }
        // line 9
        echo "  <div class=\"container\">
    <div class=\"main-container\">
      ";
        // line 11
        if (($context["front_sidebar"] ?? null)) {
            // line 12
            echo "        <main id=\"main\" class=\"frontpage-main main-content\">
      ";
        } else {
            // line 14
            echo "        <main id=\"front-main\" class=\"frontpage-main main-content\">
      ";
        }
        // line 16
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 17)) {
            // line 18
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 18)->display($context);
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div class=\"node-content\">
          ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 23)) {
            // line 24
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 24)->display($context);
            // line 25
            echo "        ";
        }
        // line 26
        echo "      </main>
    ";
        // line 27
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 27))) {
            // line 28
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 28)->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 30))) {
            // line 31
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 31)->display($context);
            // line 32
            echo "    ";
        }
        // line 33
        echo "    </div><!--/main-container -->
\t</div><!--/container -->
  ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 35)) {
            // line 36
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 36)->display($context);
            // line 37
            echo "  ";
        }
        // line 38
        echo "</div><!--/main-wrapper -->
";
        // line 39
        $this->loadTemplate("@ruhi/template-parts/footer.html.twig", "themes/ruhi/templates/layout/page--front.html.twig", 39)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/ruhi/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  131 => 38,  128 => 37,  125 => 36,  123 => 35,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  62 => 11,  58 => 9,  55 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ruhi/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\ventawaydrupal\\themes\\ruhi\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
