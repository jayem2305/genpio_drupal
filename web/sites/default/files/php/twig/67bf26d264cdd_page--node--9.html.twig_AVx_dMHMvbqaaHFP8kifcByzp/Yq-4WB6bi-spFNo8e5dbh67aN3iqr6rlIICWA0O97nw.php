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

/* themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig */
class __TwigTemplate_da9e42edc2f88d9a94c5b19f90f8745f extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...["This is page--node--9.html.twig"]), "html", null, true);
        yield "
<body>
";
        // line 3
        yield from         $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 19
        yield "</body>";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
  <!-- Title banner start -->
  ";
        // line 8
        yield from         $this->loadTemplate("@gen_pio_theme/layout/title-banner.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "  <!-- Title banner end -->

  <!-- Contact form start -->
        ";
        // line 12
        yield from         $this->loadTemplate("@gen_pio_theme/templates/layout/contactform.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "  <!-- Contact form end -->

  <footer>
      ";
        // line 16
        yield from         $this->loadTemplate("@gen_pio_theme/templates/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "  </footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig";
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
        return array (  89 => 17,  87 => 16,  82 => 13,  80 => 12,  75 => 9,  73 => 8,  69 => 6,  62 => 5,  57 => 19,  55 => 5,  52 => 4,  50 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page--node--9.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page--node--9.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "block" => 5);
        static $filters = array("escape" => 1);
        static $functions = array("dump" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'block'],
                ['escape'],
                ['dump'],
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
