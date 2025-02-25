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

/* themes/custom/gen_pio_theme/templates/layout/page--news.html.twig */
class __TwigTemplate_e642167bfcf22e33b2f5918b3999b70a extends Template
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
        yield from         $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--news.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<section class=\"events-section\">
    <div class=\"container reveal active\">
        <div class=\"row mb-5\">
            <div class=\"col-12 events-back-page\">
                <a class=\"btn btn-events-ct\" href=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.all_news"));
        yield "\" role=\"button\">
                    <i class=\"fas fa-arrow-circle-left\"></i> Back to News
                </a>
            </div>
        </div>
     ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["latest_news_content"] ?? null))) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["latest_news_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 14
                yield "        <div class=\"row events-pages\">
            <!-- Event Image -->
            <div class=\"col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-lg-last pages-img\">
                ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, true, 17) != "MISSING")) {
                    // line 18
                    yield "                    <img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    yield "\" class=\"img-fluid rounded-start\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    yield "\">
                ";
                } else {
                    // line 20
                    yield "                    <img src=\"/themes/custom/gen_pio_theme/images/default-event.jpg\" class=\"img-fluid rounded-start\" alt=\"Default Event Image\">
                ";
                }
                // line 22
                yield "            </div>

            <!-- Event Details -->
            <div class=\"col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 pages-title\">
         
            <div class=\"news-item\">
                <h1>";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "label", [], "any", false, false, true, 28), 28, $this->source));
                yield "</h1> 
                <p>";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, true, 29), 29, $this->source));
                yield "</p>
            </div>
            </div>
        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['news'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "    ";
        } else {
            // line 35
            yield "        <p>No news available.</p>
    ";
        }
        // line 37
        yield "    </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["latest_news_content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page--news.html.twig";
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
        return array (  117 => 37,  113 => 35,  110 => 34,  99 => 29,  95 => 28,  87 => 22,  83 => 20,  75 => 18,  73 => 17,  68 => 14,  63 => 13,  61 => 12,  53 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page--news.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 12, "for" => 13);
        static $filters = array("escape" => 18, "e" => 28, "raw" => 29);
        static $functions = array("path" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'for'],
                ['escape', 'e', 'raw'],
                ['path'],
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
