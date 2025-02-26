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
  <main>
";
            // line 4
            yield from             $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 4)->unwrap()->yield($context);
            // line 5
            yield "
  </main>

  <!--carousel start -->
  <main>
    ";
            // line 10
            yield from             $this->loadTemplate("@gen_pio_theme/layout/carousel.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["node" => ($context["node"] ?? null)]));
            // line 11
            yield "  </main>
  <!--carousel end -->

  <!--First section start -->
  <main>
    ";
            // line 16
            yield from             $this->loadTemplate("@gen_pio_theme/layout/firstsection.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 16)->unwrap()->yield($context);
            // line 17
            yield "  </main>
  <!--First section end -->

  <!--Second section start -->
  <main>
    ";
            // line 22
            yield from             $this->loadTemplate("@gen_pio_theme/layout/secondsection.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 22)->unwrap()->yield($context);
            // line 23
            yield "  </main>
  <!--Second section end -->

  <footer>
      ";
            // line 27
            yield from             $this->loadTemplate("@gen_pio_theme/templates/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "  </footer>
</body>
";
        } else {
            // line 31
            yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">
  
    ";
            // line 35
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 35) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 35)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 35))) {
                // line 36
                yield "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">
        
        ";
                // line 39
                yield "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
                // line 41
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
                // line 51
                yield "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">
              
              ";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                yield "

              ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 56) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 56))) {
                    // line 57
                    yield "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                    // line 58
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                    yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                    // line 59
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                    yield "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                    yield "
                  ";
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    yield "
                </div>
              ";
                }
                // line 69
                yield "            </div>
          </div>
        </div>
      </header>
    ";
            }
            // line 74
            yield "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            yield "
          <div class=\"main-content__container container\">
            ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            yield "
            ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            yield "

            ";
            // line 84
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 84)) {
                // line 85
                yield "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                yield "
                  ";
                // line 88
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                yield "
                </main>

                ";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                yield "
              </div>
            ";
            } else {
                // line 94
                yield "              <main role=\"main\">
                ";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                yield "
                ";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                yield "
              </main>
            ";
            }
            // line 99
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            yield "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>

    ";
            // line 108
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 117
            yield "
    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "node", "page"]);        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        yield "    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        yield "
         ";
        // line 112
        yield from         $this->loadTemplate("@gen_pio_theme/templates/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 112)->unwrap()->yield($context);
        // line 113
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
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
        return array (  269 => 113,  267 => 112,  263 => 111,  259 => 109,  252 => 108,  240 => 117,  238 => 108,  230 => 103,  222 => 99,  216 => 96,  212 => 95,  209 => 94,  203 => 91,  197 => 88,  193 => 87,  189 => 85,  187 => 84,  182 => 82,  178 => 81,  173 => 79,  166 => 74,  159 => 69,  153 => 66,  149 => 65,  140 => 59,  136 => 58,  133 => 57,  131 => 56,  126 => 54,  121 => 51,  109 => 41,  105 => 39,  101 => 36,  99 => 35,  93 => 31,  88 => 28,  86 => 27,  80 => 23,  78 => 22,  71 => 17,  69 => 16,  62 => 11,  60 => 10,  53 => 5,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 4, "block" => 108);
        static $filters = array("t" => 41, "escape" => 54);
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
