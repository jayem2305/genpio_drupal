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

/* @gen_pio_theme/layout/secondsection.html.twig */
class __TwigTemplate_9ad45c4cd125d3e95de68fdd15b8e1f3 extends Template
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
        yield "<!-- Second section -->
<section id=\"latest-news\" class=\"second-section\">
\t<div class=\"container-xl reveal active\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 zi-2 text-center\">
\t\t\t\t<h2 class=\"text-center h5 mb-5\">Latest News</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4 news d-flex justify-content-center\">
\t\t\t";
        // line 10
        if ((array_key_exists("latest_news", $context) && ($context["latest_news"] ?? null))) {
            // line 11
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["latest_news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 12
                yield "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t<h1>";
                // line 16
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_news_date", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "d"), "html", null, true);
                yield "</h1>
\t\t\t\t\t\t\t\t<h6>";
                // line 17
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_news_date", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "M Y"), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "label", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t\t";
                // line 22
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22))) {
                    // line 23
                    yield "\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source))));
                    yield "</p>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    yield "\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source)));
                    yield "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                yield "\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio.news_detail", ["id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "id", [], "method", false, false, true, 28), 28, $this->source)]), "html", null, true);
                yield "\" role=\"button\">
                                            Read More <i class=\"fas fa-arrow-right\"></i>
                                        </a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['news'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "\t\t\t";
        } else {
            // line 39
            yield "\t\t\t\t<p class=\"text-center\">No news available.</p>
\t\t\t";
        }
        // line 41
        yield "\t\t</div>
\t\t<div class=\"row mt-4 mb-5\">
\t\t\t<div class=\"col-12 news-btn\">
\t\t\t\t<a class=\"btn btn-news-ct\" href=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.all_news"));
        yield "\" role=\"button\">
\t\t\t\t\tSEE MORE NEWS<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t</a>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 zi-2 text-center\">
\t\t\t\t<h2 class=\"text-center h5 mb-5\">Latest Events</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4 news d-flex justify-content-center\">
\t\t\t";
        // line 56
        if ((array_key_exists("latest_events", $context) && ($context["latest_events"] ?? null))) {
            // line 57
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["latest_events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 58
                yield "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<!--";
                // line 60
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_image", [], "any", false, false, true, 60) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_image", [], "any", false, false, true, 60), "entity", [], "any", false, false, true, 60))) {
                    // line 61
                    yield "\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_image", [], "any", false, false, true, 61), "entity", [], "any", false, false, true, 61), "uri", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t";
                }
                // line 62
                yield "-->
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_events_date", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65), 65, $this->source), "d"), "html", null, true);
                yield "</h1>
\t\t\t\t\t\t\t\t\t<h6>";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "field_events_date", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "M Y"), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 71
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source)));
                yield "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\"><a name=\"\" id=\"\" href=\"";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                yield "\" role=\"button\">Read More <i class=\"fas fa-arrow-right\"></i></a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['news'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "\t\t\t";
        } else {
            // line 80
            yield "\t\t\t\t<p class=\"text-center\">No events available.</p>
\t\t\t";
        }
        // line 82
        yield "\t\t</div>
\t\t<div class=\"row  mt-5 mb-5\">
\t\t\t<div class=\"col-12 news-btn\"><a class=\"btn btn-news-ct\" href=\"";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio.all_events"));
        yield "\" role=\"button\">SEE MORE EVENTS<i class=\"fas fa-arrow-circle-right\"></i></a></div>
\t\t</div>
\t</div>
</section>
<!-- Second section end -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["latest_news", "latest_events"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gen_pio_theme/layout/secondsection.html.twig";
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
        return array (  212 => 84,  208 => 82,  204 => 80,  201 => 79,  188 => 72,  184 => 71,  180 => 70,  173 => 66,  169 => 65,  164 => 62,  156 => 61,  154 => 60,  150 => 58,  145 => 57,  143 => 56,  128 => 44,  123 => 41,  119 => 39,  116 => 38,  100 => 28,  97 => 27,  91 => 25,  85 => 23,  83 => 22,  79 => 21,  72 => 17,  68 => 16,  62 => 12,  57 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gen_pio_theme/layout/secondsection.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\secondsection.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 11);
        static $filters = array("escape" => 16, "date" => 16, "raw" => 23, "striptags" => 23, "first" => 23);
        static $functions = array("path" => 28, "file_url" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date', 'raw', 'striptags', 'first'],
                ['path', 'file_url'],
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
