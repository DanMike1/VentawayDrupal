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

/* @ruhi/template-parts/footer.html.twig */
class __TwigTemplate_05241e92999d03a9848e128ac9ba8c577e2ae4684deaae36c28dca0b20bf627e extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@ruhi/template-parts/footer.html.twig", 2)->display($context);
        }
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@ruhi/template-parts/footer.html.twig", 5)->display($context);
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@ruhi/template-parts/footer.html.twig", 8)->display($context);
        }
        // line 10
        if ((($context["copyright_text"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 10))) {
            // line 11
            echo "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 14
            if (($context["copyright_text"] ?? null)) {
                // line 15
                echo "          ";
                $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@ruhi/template-parts/footer.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "        ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@ruhi/template-parts/footer.html.twig", 17)->display($context);
            // line 18
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 19
                echo "        <div class=\"footer-social\">
          ";
                // line 20
                $this->loadTemplate("@ruhi/template-parts/social-icons.html.twig", "@ruhi/template-parts/footer.html.twig", 20)->display($context);
                // line 21
                echo "        </div>
      ";
            }
            // line 23
            echo "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["scrolltotop_on"] ?? null)) {
            // line 29
            echo "  <div class=\"scrolltop\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_style"] ?? null), 29, $this->source));
            echo "</div>
";
        }
        // line 31
        $this->loadTemplate("@ruhi/template-parts/style.html.twig", "@ruhi/template-parts/footer.html.twig", 31)->display($context);
        // line 32
        if (($context["fontawesome_four"] ?? null)) {
            // line 33
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            echo "
";
        }
        // line 35
        if (($context["fontawesome_five"] ?? null)) {
            // line 36
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            echo "
";
        }
        // line 38
        if (($context["bootstrapicons"] ?? null)) {
            // line 39
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@ruhi/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  122 => 38,  116 => 36,  114 => 35,  108 => 33,  106 => 32,  104 => 31,  98 => 29,  96 => 28,  93 => 27,  87 => 23,  83 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  64 => 14,  59 => 11,  57 => 10,  53 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ruhi/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\ventawaydrupal\\themes\\ruhi\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array("raw" => 29, "escape" => 33);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['raw', 'escape'],
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
