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

/* @edux/template-parts/header/header.html.twig */
class __TwigTemplate_6c4efb56b77ff82d887744a70819d7b4 extends Template
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
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 1) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 1)) || ($context["header_login_links"] ?? null))) {
            // line 2
            yield "  <div class=\"header-top\">
    <div class=\"container\">
      <div class=\"header-top-container\">
        ";
            // line 5
            yield from             $this->loadTemplate("@thex/template-parts/header/header-top-left.html.twig", "@edux/template-parts/header/header.html.twig", 5)->unwrap()->yield($context);
            // line 6
            yield "        ";
            yield from             $this->loadTemplate("@thex/template-parts/header/header-top-right.html.twig", "@edux/template-parts/header/header.html.twig", 6)->unwrap()->yield($context);
            // line 7
            yield "        ";
            if (($context["header_login_links"] ?? null)) {
                // line 8
                yield "          ";
                yield from                 $this->loadTemplate("@edux/template-parts/header/header-login.html.twig", "@edux/template-parts/header/header.html.twig", 8)->unwrap()->yield($context);
                // line 9
                yield "        ";
            }
            // line 10
            yield "      </div><!-- /header-top-container -->
    </div><!-- /container -->
  </div><!-- /header-top -->
";
        }
        // line 14
        yield "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17)) {
            // line 18
            yield "        <div class=\"site-brand\">
          ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            yield "
        </div> <!--/.site-branding -->
      ";
        }
        // line 22
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 22))) {
            // line 23
            yield "      <div class=\"header-right\">
        ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24)) {
                // line 25
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/header/header-primary-menu.html.twig", "@edux/template-parts/header/header.html.twig", 25)->unwrap()->yield($context);
                // line 26
                yield "        ";
            }
            // line 27
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 27)) {
                // line 28
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@edux/template-parts/header/header.html.twig", 28)->unwrap()->yield($context);
                // line 29
                yield "        ";
            }
            // line 30
            yield "      </div> <!-- /.header-right -->
    ";
        }
        // line 32
        yield "    </div><!-- /header-container -->
  </div><!-- /container -->
</header><!-- /header -->";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_login_links"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@edux/template-parts/header/header.html.twig";
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
        return array (  110 => 32,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  89 => 24,  86 => 23,  83 => 22,  77 => 19,  74 => 18,  72 => 17,  67 => 14,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/header/header.html.twig", "C:\\xampp\\htdocs\\ProjectElearning\\web\\themes\\edux\\templates\\template-parts\\header\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 5);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
