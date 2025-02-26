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

/* themes/custom/gen_pio_theme/templates/layout/page--all_news.html.twig */
class __TwigTemplate_b495b9123947e9fecfc97d32fb47567e extends Template
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
        // line 2
        yield from         $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--all_news.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "<section id=\"\" class=\"title-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 title-info\">
                <h5 class=\"mt-4\">NEWS</h5>                
            </div>
        </div>
    </div>
</section>
<section id=\"\" class=\"news-section common_bg\">
    <div class=\"container reveal active\">
        <div class=\"row row-cols-1 row-cols-md-2 g-4 news d-flex justify-content-center\">
            ";
        // line 15
        if ((array_key_exists("latest_news_all", $context) && ($context["latest_news_all"] ?? null))) {
            // line 16
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["latest_news_all"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
                // line 17
                yield "                    <div class=\"col news-col\">
                        <div class=\"card mb-3\">
                            <div class=\"row g-0\">
                                <div class=\"col-3 news-date\">
                                    <h1>";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news_item"], "field_news_date", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "d"), "html", null, true);
                yield "</h1>
                                    <h6>";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news_item"], "field_news_date", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "M Y"), "html", null, true);
                yield "</h6>
                                </div>
                                <div class=\"col-9 news-details\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news_item"], "label", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                yield "</h5>
                                        <p class=\"card-text\">";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news_item"], "body", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source)));
                yield "</p>
                                        <p class=\"card-text card-a\">
                                        <a href=\"";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio.news_detail", ["id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news_item"], "id", [], "any", false, false, true, 29), 29, $this->source)]), "html", null, true);
                yield "\" role=\"button\">
                                            Read More <i class=\"fas fa-arrow-right\"></i>
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>\t\t
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['news_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "            ";
        } else {
            // line 40
            yield "                <p class=\"text-center\">No news available.</p>
            ";
        }
        // line 42
        yield "        </div>
    </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["latest_news_all"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page--all_news.html.twig";
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
        return array (  116 => 42,  112 => 40,  109 => 39,  93 => 29,  88 => 27,  84 => 26,  77 => 22,  73 => 21,  67 => 17,  62 => 16,  60 => 15,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page--all_news.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page--all_news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 15, "for" => 16);
        static $filters = array("escape" => 21, "date" => 21, "raw" => 27, "striptags" => 27);
        static $functions = array("path" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'for'],
                ['escape', 'date', 'raw', 'striptags'],
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
