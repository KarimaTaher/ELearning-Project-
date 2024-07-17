<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @edux/template-parts/style.html.twig */
class __TwigTemplate_e41b5392b927e65a967bb44440503e10 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<style>
";
        // line 3
        yield "body {
  font-size: ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_font_size"] ?? null), 4, $this->source), "html", null, true);
        yield "rem;
  line-height: ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_line_height"] ?? null), 5, $this->source), "html", null, true);
        yield ";
}
p {
  margin-bottom: ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_bottom"] ?? null), 8, $this->source), "html", null, true);
        yield "rem;
}
";
        // line 11
        if ( !($context["logo_default"] ?? null)) {
            // line 12
            yield ".site-name {
  font-size: ";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_size"] ?? null), 13, $this->source), "html", null, true);
            yield "rem;
  font-weight: ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_weight"] ?? null), 14, $this->source), "html", null, true);
            yield ";
  text-transform: ";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_transform"] ?? null), 15, $this->source), "html", null, true);
            yield ";
  line-height: ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_height"] ?? null), 16, $this->source), "html", null, true);
            yield ";
}
.site-slogan {
  font-size: ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_size"] ?? null), 19, $this->source), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_transform"] ?? null), 20, $this->source), "html", null, true);
            yield ";
  line-height: ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_height"] ?? null), 21, $this->source), "html", null, true);
            yield ";
  font-style: ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_style"] ?? null), 22, $this->source), "html", null, true);
            yield ";

}
";
        }
        // line 27
        if ( !($context["main_menu_default"] ?? null)) {
            // line 28
            yield ".menu-wrap ul.menu {
  font-size: ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_size"] ?? null), 29, $this->source), "html", null, true);
            yield "rem;
}
.menu-wrap {
  font-weight: ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_weight"] ?? null), 32, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu > li > a {
  text-transform: ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_transform"] ?? null), 35, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu {
  fontweight: ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_weight"] ?? null), 38, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu li {
  font-size: ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_size"] ?? null), 41, $this->source), "html", null, true);
            yield "rem;  
  text-transform: ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_transform"] ?? null), 42, $this->source), "html", null, true);
            yield ";
}
";
        }
        // line 45
        yield "@media (min-width: 1170px) {
  .container {
    max-width: ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width"] ?? null), 47, $this->source), "html", null, true);
        yield "px;
  }
}
";
        // line 51
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 52
            yield ".header-top .container,
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
            yield ".main-wrapper .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 67
            yield ".footer-top footer .container,
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
            yield ".header-container {
  padding-top: ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_top"] ?? null), 78, $this->source), "html", null, true);
            yield "rem;
  padding-bottom: ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_bottom"] ?? null), 79, $this->source), "html", null, true);
            yield "rem;
}
";
        }
        // line 82
        if ( !($context["header_page_default"] ?? null)) {
            // line 83
            yield ".page-header {
  padding-top: ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_top"] ?? null), 84, $this->source), "html", null, true);
            yield "rem;
  padding-bottom: ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_bottom"] ?? null), 85, $this->source), "html", null, true);
            yield "rem; 
}
.region-page-header {
  align-items: ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_content_position"] ?? null), 88, $this->source), "html", null, true);
            yield ";
}
";
        }
        // line 92
        if ( !($context["slider_image_bg"] ?? null)) {
            // line 93
            yield ".slider-image {
  background-color: transparent;
  -webkit-animation: none;
  animation: none;
}
";
        }
        // line 99
        yield "
@media (min-width: 768px) {
  ";
        // line 101
        if ( !($context["headings_default"] ?? null)) {
            // line 102
            yield "  h1 {
    font-size: ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_size"] ?? null), 103, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_weight"] ?? null), 104, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_transform"] ?? null), 105, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_height"] ?? null), 106, $this->source), "html", null, true);
            yield ";
  }
  h2 {
    font-size: ";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_size"] ?? null), 109, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_weight"] ?? null), 110, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_transform"] ?? null), 111, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_height"] ?? null), 112, $this->source), "html", null, true);
            yield ";
  }
  h3 {
    font-size: ";
            // line 115
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_size"] ?? null), 115, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_weight"] ?? null), 116, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 117
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_transform"] ?? null), 117, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 118
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_height"] ?? null), 118, $this->source), "html", null, true);
            yield ";
  }
  h4 {
    font-size: ";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_size"] ?? null), 121, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_weight"] ?? null), 122, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_transform"] ?? null), 123, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 124
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_height"] ?? null), 124, $this->source), "html", null, true);
            yield ";
  }
  h5 {
    font-size: ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_size"] ?? null), 127, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_weight"] ?? null), 128, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_transform"] ?? null), 129, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_height"] ?? null), 130, $this->source), "html", null, true);
            yield ";
  }
  h6 {
    font-size: ";
            // line 133
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_size"] ?? null), 133, $this->source), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 134
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_weight"] ?? null), 134, $this->source), "html", null, true);
            yield ";
    text-transform: ";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_transform"] ?? null), 135, $this->source), "html", null, true);
            yield ";
    line-height: ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_height"] ?? null), 136, $this->source), "html", null, true);
            yield ";
  }
  ";
        }
        // line 139
        yield "  ";
        if ( !($context["sidebar_width_default"] ?? null)) {
            // line 140
            yield "  .sidebar-left #main {
    flex: 1 1 calc(100% - ";
            // line 141
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 141, $this->source), "html", null, true);
            yield "%);
  }
  .sidebar-right #main {
    flex: 1 1 calc(100% - ";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 144, $this->source), "html", null, true);
            yield "%);
  }
  .two-sidebar #main {
    flex: 1 1 calc(100% - ";
            // line 147
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 147, $this->source), "html", null, true);
            yield "% - ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 147, $this->source), "html", null, true);
            yield "%);
  }
  #sidebar-left {
    flex: 0 1 ";
            // line 150
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 150, $this->source), "html", null, true);
            yield "%;
  }
  #sidebar-right {
    flex: 0 1 ";
            // line 153
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 153, $this->source), "html", null, true);
            yield "%;
  }
  ";
        }
        // line 156
        yield "}
";
        // line 157
        if ( !($context["sidebar_block_default"] ?? null)) {
            // line 158
            yield ".sidebar .block {
  padding: ";
            // line 159
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_padding"] ?? null), 159, $this->source), "html", null, true);
            yield "px;
  border-radius: ";
            // line 160
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_radius"] ?? null), 160, $this->source), "html", null, true);
            yield "px;
  margin-bottom: ";
            // line 161
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_margin"] ?? null), 161, $this->source), "html", null, true);
            yield "rem;
}
.sidebar .block-title {
  font-size: ";
            // line 164
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_font_size"] ?? null), 164, $this->source), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 165
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_transform"] ?? null), 165, $this->source), "html", null, true);
            yield ";
}
";
        }
        // line 169
        if ( !($context["page_title_default"] ?? null)) {
            // line 170
            yield ".page-title {
  font-size: ";
            // line 171
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_mobile"] ?? null), 171, $this->source), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 172
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_transform"] ?? null), 172, $this->source), "html", null, true);
            yield ";
}
@media (min-width: 768px) {
  .page-title {
    font-size: ";
            // line 176
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_desktop"] ?? null), 176, $this->source), "html", null, true);
            yield "rem;
  }
}
";
        }
        // line 180
        if (($context["highlight_author_comment"] ?? null)) {
            // line 181
            yield ".comment-by-author {
  box-shadow: 0 0 3px 1px var(--theme-color);
}
";
        }
        // line 185
        yield "
";
        // line 186
        if ( !($context["button_default"] ?? null)) {
            // line 187
            yield "a.button, .button, button, [type=\"button\"], [type=\"reset\"], [type=\"submit\"] {
  padding: ";
            // line 188
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_padding"] ?? null), 188, $this->source), "html", null, true);
            yield ";
  border-radius: ";
            // line 189
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_radius"] ?? null), 189, $this->source), "html", null, true);
            yield "px;
}
";
        }
        // line 192
        yield "</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["body_font_size", "body_line_height", "paragraph_bottom", "logo_default", "site_name_size", "site_name_weight", "site_name_transform", "site_name_height", "slogan_size", "slogan_transform", "slogan_height", "slogan_style", "main_menu_default", "main_menu_top_size", "main_menu_top_weight", "main_menu_top_transform", "main_menu_sub_weight", "main_menu_sub_size", "main_menu_sub_transform", "container_width", "header_width", "main_width", "footer_width", "header_main_default", "header_main_padding_top", "header_main_padding_bottom", "header_page_default", "header_page_padding_top", "header_page_padding_bottom", "header_page_content_position", "slider_image_bg", "headings_default", "h1_size", "h1_weight", "h1_transform", "h1_height", "h2_size", "h2_weight", "h2_transform", "h2_height", "h3_size", "h3_weight", "h3_transform", "h3_height", "h4_size", "h4_weight", "h4_transform", "h4_height", "h5_size", "h5_weight", "h5_transform", "h5_height", "h6_size", "h6_weight", "h6_transform", "h6_height", "sidebar_width_default", "sidebar_width_left", "sidebar_width_right", "sidebar_block_default", "sidebar_padding", "sidebar_radius", "sidebar_margin", "sidebar_title_font_size", "sidebar_title_transform", "page_title_default", "page_title_size_mobile", "page_title_transform", "page_title_size_desktop", "highlight_author_comment", "button_default", "button_padding", "button_radius"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@edux/template-parts/style.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  469 => 192,  463 => 189,  459 => 188,  456 => 187,  454 => 186,  451 => 185,  445 => 181,  443 => 180,  436 => 176,  429 => 172,  425 => 171,  422 => 170,  420 => 169,  414 => 165,  410 => 164,  404 => 161,  400 => 160,  396 => 159,  393 => 158,  391 => 157,  388 => 156,  382 => 153,  376 => 150,  368 => 147,  362 => 144,  356 => 141,  353 => 140,  350 => 139,  344 => 136,  340 => 135,  336 => 134,  332 => 133,  326 => 130,  322 => 129,  318 => 128,  314 => 127,  308 => 124,  304 => 123,  300 => 122,  296 => 121,  290 => 118,  286 => 117,  282 => 116,  278 => 115,  272 => 112,  268 => 111,  264 => 110,  260 => 109,  254 => 106,  250 => 105,  246 => 104,  242 => 103,  239 => 102,  237 => 101,  233 => 99,  225 => 93,  223 => 92,  217 => 88,  211 => 85,  207 => 84,  204 => 83,  202 => 82,  196 => 79,  192 => 78,  189 => 77,  187 => 76,  177 => 67,  175 => 66,  172 => 65,  165 => 60,  163 => 59,  154 => 52,  152 => 51,  146 => 47,  142 => 45,  136 => 42,  132 => 41,  126 => 38,  120 => 35,  114 => 32,  108 => 29,  105 => 28,  103 => 27,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  61 => 11,  56 => 8,  50 => 5,  46 => 4,  43 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/style.html.twig", "C:\\xampp\\htdocs\\ProjectElearning\\web\\themes\\edux\\templates\\template-parts\\style.html.twig");
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
                [],
                $this->source
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