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

/* @edux/template-parts/footer.html.twig */
class __TwigTemplate_af20cadeb9d63d24ae53cea07856102d extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@edux/template-parts/footer.html.twig", 2)->unwrap()->yield($context);
        }
        // line 4
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@edux/template-parts/footer.html.twig", 5)->unwrap()->yield($context);
        }
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@edux/template-parts/footer.html.twig", 8)->unwrap()->yield($context);
        }
        // line 10
        if (($context["all_icons_show"] ?? null)) {
            // line 11
            yield "<div class=\"footer footer-social\">
  <div class=\"container text-center\">
    ";
            // line 13
            yield from             $this->loadTemplate("@edux/template-parts/components/social-icons.html.twig", "@edux/template-parts/footer.html.twig", 13)->unwrap()->yield($context);
            // line 14
            yield "  </div><!-- /container -->
</div>
";
        }
        // line 17
        if ((($context["copyright_text"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 17))) {
            // line 18
            yield "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 21
            if (($context["copyright_text"] ?? null)) {
                // line 22
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@edux/template-parts/footer.html.twig", 22)->unwrap()->yield($context);
                // line 23
                yield "        ";
            }
            // line 24
            yield "        ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@edux/template-parts/footer.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 29
        yield "
";
        // line 30
        if (($context["scrolltotop_on"] ?? null)) {
            // line 31
            yield "  <div class=\"scrolltop\"><i class=\"icon-arrow-up\"></i></div>
";
        }
        // line 33
        yield from         $this->loadTemplate("@edux/template-parts/style.html.twig", "@edux/template-parts/footer.html.twig", 33)->unwrap()->yield($context);
        // line 34
        if (($context["fontawesome_four"] ?? null)) {
            // line 35
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 37
        if (($context["fontawesome_five"] ?? null)) {
            // line 38
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 40
        if (($context["bootstrapicons"] ?? null)) {
            // line 41
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "all_icons_show", "copyright_text", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "bootstrapicons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@edux/template-parts/footer.html.twig";
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
        return array (  124 => 41,  122 => 40,  116 => 38,  114 => 37,  108 => 35,  106 => 34,  104 => 33,  100 => 31,  98 => 30,  95 => 29,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  73 => 18,  71 => 17,  66 => 14,  64 => 13,  60 => 11,  58 => 10,  54 => 8,  52 => 7,  48 => 5,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\ProjectElearning\\web\\themes\\edux\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array("escape" => 35);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['attach_library'],
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
