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
use Twig\TemplateWrapper;

/* themes/custom/gen_pio_theme/templates/layout/page.html.twig */
class __TwigTemplate_1b7deadbb54d1ac178ed9f889bc04e29 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (($context["logged_in"] ?? null)) {
            // line 2
            yield "<body>
";
            // line 3
            yield from             $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 3)->unwrap()->yield($context);
            // line 4
            yield "

<!--carousel start -->
  <main>
    ";
            // line 8
            yield from             $this->loadTemplate("@gen_pio_theme/layout/carousel.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["node" => ($context["node"] ?? null)]));
            // line 9
            yield "
  </main>
  <!--carousel end -->

<!--First section start -->
  <main>
    ";
            // line 15
            yield from             $this->loadTemplate("@gen_pio_theme/layout/firstsection.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 15)->unwrap()->yield($context);
            // line 16
            yield "  </main>
  <!--First section end -->

  <!--Second section start -->
  <main>
    ";
            // line 21
            yield from             $this->loadTemplate("@gen_pio_theme/layout/secondsection.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 21)->unwrap()->yield($context);
            // line 22
            yield "  </main>
  <!--Second section end -->
</body>
";
        } else {
            // line 26
            yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">
  
    ";
            // line 30
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 30) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 30))) {
                // line 31
                yield "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">
        
        ";
                // line 34
                yield "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
                // line 36
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
                yield "\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
                // line 46
                yield "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">
              
              ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                yield "

              ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 51))) {
                    // line 52
                    yield "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                    // line 53
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                    yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                    yield "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                    // line 60
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    yield "
                  ";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    yield "
                </div>
              ";
                }
                // line 64
                yield "            </div>
          </div>
        </div>
      </header>
    ";
            }
            // line 69
            yield "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            yield "
          <div class=\"main-content__container container\">
            ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            yield "
            ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "

            ";
            // line 79
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 79)) {
                // line 80
                yield "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
                // line 82
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                yield "
                  ";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                yield "
                </main>

                ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                yield "
              </div>
            ";
            } else {
                // line 89
                yield "              <main role=\"main\">
                ";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                yield "
                ";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                yield "
              </main>
            ";
            }
            // line 94
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            yield "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            yield "
        ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            yield "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "node", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  235 => 106,  231 => 105,  221 => 98,  213 => 94,  207 => 91,  203 => 90,  200 => 89,  194 => 86,  188 => 83,  184 => 82,  180 => 80,  178 => 79,  173 => 77,  169 => 76,  164 => 74,  157 => 69,  150 => 64,  144 => 61,  140 => 60,  131 => 54,  127 => 53,  124 => 52,  122 => 51,  117 => 49,  112 => 46,  100 => 36,  96 => 34,  92 => 31,  90 => 30,  84 => 26,  78 => 22,  76 => 21,  69 => 16,  67 => 15,  59 => 9,  57 => 8,  51 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 3);
        static $filters = array("t" => 36, "escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t', 'escape'],
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
