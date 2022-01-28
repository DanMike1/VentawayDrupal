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

/* @ruhi/template-parts/style.html.twig */
class __TwigTemplate_f596ae5e95f16ec7ad4efc6f0151de12da88255c1738c51be1fb466fe5a1431e extends \Twig\Template
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
        echo "<style>
";
        // line 3
        echo "body {
  font-size: ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_font_size"] ?? null), 4, $this->source), "html", null, true);
        echo "rem;
  line-height: ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_line_height"] ?? null), 5, $this->source), "html", null, true);
        echo ";
}
p {
  margin-bottom: ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_bottom"] ?? null), 8, $this->source), "html", null, true);
        echo "rem;
}
";
        // line 11
        if ( !($context["logo_default"] ?? null)) {
            // line 12
            echo ".site-name {
  font-size: ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_size"] ?? null), 13, $this->source), "html", null, true);
            echo "rem;
  font-weight: ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_weight"] ?? null), 14, $this->source), "html", null, true);
            echo ";
  text-transform: ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_transform"] ?? null), 15, $this->source), "html", null, true);
            echo ";
  line-height: ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_height"] ?? null), 16, $this->source), "html", null, true);
            echo ";
}
.site-slogan {
  font-size: ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_size"] ?? null), 19, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_transform"] ?? null), 20, $this->source), "html", null, true);
            echo ";
  line-height: ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_height"] ?? null), 21, $this->source), "html", null, true);
            echo ";
  font-style: ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_style"] ?? null), 22, $this->source), "html", null, true);
            echo ";

}
";
        }
        // line 27
        if ( !($context["main_menu_default"] ?? null)) {
            // line 28
            echo ".menu-wrap ul.menu {
  font-size: ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_size"] ?? null), 29, $this->source), "html", null, true);
            echo "rem;
}
.menu-wrap {
  font-weight: ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_weight"] ?? null), 32, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu > li > a {
  text-transform: ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_transform"] ?? null), 35, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu ul.submenu {
  fontweight: ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_weight"] ?? null), 38, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu ul.submenu li {
  font-size: ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_size"] ?? null), 41, $this->source), "html", null, true);
            echo "rem;  
  text-transform: ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_transform"] ?? null), 42, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 45
        echo "@media (min-width: 1170px) {
  .container {
    max-width: ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width"] ?? null), 47, $this->source), "html", null, true);
        echo "px;
  }
}
";
        // line 51
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 52
            echo ".header-top .container,
.header .container,
.page-header .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 59
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 60
            echo ".main-wrapper .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 65
        echo "
";
        // line 66
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 67
            echo ".footer-top footer .container,
.footer-blocks .container,
.footer-bottom-blocks .container,
.footer-bottom .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 76
        if ( !($context["header_main_default"] ?? null)) {
            // line 77
            echo ".header-container {
  padding-top: ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_top"] ?? null), 78, $this->source), "html", null, true);
            echo "rem;
  padding-bottom: ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_bottom"] ?? null), 79, $this->source), "html", null, true);
            echo "rem;
}
";
        }
        // line 82
        if ( !($context["header_page_default"] ?? null)) {
            // line 83
            echo ".page-header {
  padding-top: ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_top"] ?? null), 84, $this->source), "html", null, true);
            echo "rem;
  padding-bottom: ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_bottom"] ?? null), 85, $this->source), "html", null, true);
            echo "rem; 
}
.region-page-header {
  align-items: ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_content_position"] ?? null), 88, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 91
        echo "
@media (min-width: 768px) {
  ";
        // line 93
        if ( !($context["headings_default"] ?? null)) {
            // line 94
            echo "  h1 {
    font-size: ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_size"] ?? null), 95, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_weight"] ?? null), 96, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_transform"] ?? null), 97, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_height"] ?? null), 98, $this->source), "html", null, true);
            echo ";
  }
  h2 {
    font-size: ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_size"] ?? null), 101, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_weight"] ?? null), 102, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_transform"] ?? null), 103, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_height"] ?? null), 104, $this->source), "html", null, true);
            echo ";
  }
  h3 {
    font-size: ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_size"] ?? null), 107, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_weight"] ?? null), 108, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_transform"] ?? null), 109, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_height"] ?? null), 110, $this->source), "html", null, true);
            echo ";
  }
  h4 {
    font-size: ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_size"] ?? null), 113, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_weight"] ?? null), 114, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_transform"] ?? null), 115, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_height"] ?? null), 116, $this->source), "html", null, true);
            echo ";
  }
  h5 {
    font-size: ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_size"] ?? null), 119, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_weight"] ?? null), 120, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_transform"] ?? null), 121, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_height"] ?? null), 122, $this->source), "html", null, true);
            echo ";
  }
  h6 {
    font-size: ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_size"] ?? null), 125, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_weight"] ?? null), 126, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_transform"] ?? null), 127, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_height"] ?? null), 128, $this->source), "html", null, true);
            echo ";
  }
  ";
        }
        // line 131
        echo "  ";
        if ( !($context["sidebar_width_default"] ?? null)) {
            // line 132
            echo "  .sidebar-left #main {
    flex: 1 1 calc(100% - ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 133, $this->source), "html", null, true);
            echo "%);
  }
  .sidebar-right #main {
    flex: 1 1 calc(100% - ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 136, $this->source), "html", null, true);
            echo "%);
  }
  .two-sidebar #main {
    flex: 1 1 calc(100% - ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 139, $this->source), "html", null, true);
            echo "% - ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 139, $this->source), "html", null, true);
            echo "%);
  }
  #sidebar-left {
    flex: 0 1 ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 142, $this->source), "html", null, true);
            echo "%;
  }
  #sidebar-right {
    flex: 0 1 ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 145, $this->source), "html", null, true);
            echo "%;
  }
  ";
        }
        // line 148
        echo "}
";
        // line 149
        if ( !($context["sidebar_block_default"] ?? null)) {
            // line 150
            echo ".sidebar .block {
  padding: ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_padding"] ?? null), 151, $this->source), "html", null, true);
            echo "px;
  border-radius: ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_radius"] ?? null), 152, $this->source), "html", null, true);
            echo "px;
  margin-bottom: ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_margin"] ?? null), 153, $this->source), "html", null, true);
            echo "rem;
}
.sidebar .block-title {
  font-size: ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_font_size"] ?? null), 156, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_transform"] ?? null), 157, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 161
        if ( !($context["page_title_default"] ?? null)) {
            // line 162
            echo ".page-title {
  font-size: ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_mobile"] ?? null), 163, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_transform"] ?? null), 164, $this->source), "html", null, true);
            echo ";
}
@media (min-width: 768px) {
  .page-title {
    font-size: ";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_desktop"] ?? null), 168, $this->source), "html", null, true);
            echo "rem;
  }
}
";
        }
        // line 172
        if (($context["highlight_author_comment"] ?? null)) {
            // line 173
            echo ".comment-by-author {
  box-shadow: 0 0 6px 1px var(--secondary);
}
";
        }
        // line 177
        if ((($context["scrolltotop_on"] ?? null) &&  !($context["scrolltotop_default"] ?? null))) {
            // line 178
            echo ".scrolltop {
  ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_position"] ?? null), 179, $this->source), "html", null, true);
            echo ": 10px;
  bottom: ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_bottom"] ?? null), 180, $this->source), "html", null, true);
            echo "px;
  font-size: ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_size"] ?? null), 181, $this->source), "html", null, true);
            echo "px;
  border-radius: ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_radius"] ?? null), 182, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 185
        if ( !($context["button_default"] ?? null)) {
            // line 186
            echo "a.button, .button, button, [type=\"button\"], [type=\"reset\"], [type=\"submit\"] {
  padding: ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_padding"] ?? null), 187, $this->source), "html", null, true);
            echo ";
  border-radius: ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_radius"] ?? null), 188, $this->source), "html", null, true);
            echo "px;
}
";
        }
        // line 191
        echo "</style>";
    }

    public function getTemplateName()
    {
        return "@ruhi/template-parts/style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 191,  472 => 188,  468 => 187,  465 => 186,  463 => 185,  457 => 182,  453 => 181,  449 => 180,  445 => 179,  442 => 178,  440 => 177,  434 => 173,  432 => 172,  425 => 168,  418 => 164,  414 => 163,  411 => 162,  409 => 161,  403 => 157,  399 => 156,  393 => 153,  389 => 152,  385 => 151,  382 => 150,  380 => 149,  377 => 148,  371 => 145,  365 => 142,  357 => 139,  351 => 136,  345 => 133,  342 => 132,  339 => 131,  333 => 128,  329 => 127,  325 => 126,  321 => 125,  315 => 122,  311 => 121,  307 => 120,  303 => 119,  297 => 116,  293 => 115,  289 => 114,  285 => 113,  279 => 110,  275 => 109,  271 => 108,  267 => 107,  261 => 104,  257 => 103,  253 => 102,  249 => 101,  243 => 98,  239 => 97,  235 => 96,  231 => 95,  228 => 94,  226 => 93,  222 => 91,  216 => 88,  210 => 85,  206 => 84,  203 => 83,  201 => 82,  195 => 79,  191 => 78,  188 => 77,  186 => 76,  176 => 67,  174 => 66,  171 => 65,  164 => 60,  162 => 59,  153 => 52,  151 => 51,  145 => 47,  141 => 45,  135 => 42,  131 => 41,  125 => 38,  119 => 35,  113 => 32,  107 => 29,  104 => 28,  102 => 27,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 5,  45 => 4,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ruhi/template-parts/style.html.twig", "C:\\xampp\\htdocs\\ventawaydrupal\\themes\\ruhi\\templates\\template-parts\\style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
