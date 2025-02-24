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
            'footer' => [$this, 'block_footer'],
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
  <footer>
      ";
            // line 25
            yield from             $this->loadTemplate("@gen_pio_theme/templates/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 25)->unwrap()->yield($context);
            // line 26
            yield "  </footer>
</body>
";
        } else {
            // line 29
            yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">
  
    ";
            // line 33
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 33) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 33)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 33))) {
                // line 34
                yield "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">
        
        ";
                // line 37
                yield "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
                // line 39
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
                // line 49
                yield "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">
              
              ";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                yield "

              ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 54))) {
                    // line 55
                    yield "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                    // line 56
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                    yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                    // line 57
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                    yield "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                    // line 63
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    yield "
                  ";
                    // line 64
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    yield "
                </div>
              ";
                }
                // line 67
                yield "            </div>
          </div>
        </div>
      </header>
    ";
            }
            // line 72
            yield "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "
          <div class=\"main-content__container container\">
            ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            yield "
            ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            yield "

            ";
            // line 82
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 82)) {
                // line 83
                yield "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                yield "
                  ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                yield "
                </main>

                ";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                yield "
              </div>
            ";
            } else {
                // line 92
                yield "              <main role=\"main\">
                ";
                // line 93
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                yield "
                ";
                // line 94
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                yield "
              </main>
            ";
            }
            // line 97
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            yield "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>

    ";
            // line 106
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 115
            yield "
    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "node", "page"]);        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        yield "
         ";
        // line 110
        yield from         $this->loadTemplate("@gen_pio_theme/templates/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 110)->unwrap()->yield($context);
        // line 111
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        yield "
      </div>
    </footer>
    ";
        yield from [];
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
        return array (  267 => 111,  265 => 110,  261 => 109,  257 => 107,  250 => 106,  238 => 115,  236 => 106,  228 => 101,  220 => 97,  214 => 94,  210 => 93,  207 => 92,  201 => 89,  195 => 86,  191 => 85,  187 => 83,  185 => 82,  180 => 80,  176 => 79,  171 => 77,  164 => 72,  157 => 67,  151 => 64,  147 => 63,  138 => 57,  134 => 56,  131 => 55,  129 => 54,  124 => 52,  119 => 49,  107 => 39,  103 => 37,  99 => 34,  97 => 33,  91 => 29,  86 => 26,  84 => 25,  79 => 22,  77 => 21,  70 => 16,  68 => 15,  60 => 9,  58 => 8,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 3, "block" => 106);
        static $filters = array("t" => 39, "escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'block'],
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
