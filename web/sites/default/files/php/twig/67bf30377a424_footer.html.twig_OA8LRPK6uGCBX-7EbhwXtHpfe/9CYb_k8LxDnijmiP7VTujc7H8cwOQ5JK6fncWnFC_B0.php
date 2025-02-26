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

/* @gen_pio_theme/templates/layout/footer.html.twig */
class __TwigTemplate_06fc9c7b4451f74fa4a64f7da15f3a5a extends Template
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
        yield "<section class=\"footer-section\">
  <div class=\"container reveal active\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h2>Get in Touch</h2>
      </div>

      <div class=\"col-md-6\">
        <h5>Social Media Sites</h5>
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item\">
            <a href=\"https://www.facebook.com/piodelpilarpage\" target=\"_blank\">
              <img src=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
        yield "/images/4494479.png\" width=\"50px\" alt=\"Facebook Icon\">
              BARANGAY PIO DEL PILAR
            </a>
          </li>
          <li class=\"list-group-item\">
            <a href=\"https://www.facebook.com/SKPDPOFFICIAL\" target=\"_blank\">
              <img src=\"";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 19, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 19, $this->source)), "html", null, true);
        yield "/images/4494479.png\" width=\"50px\" alt=\"Facebook Icon\">
              SK BARANGAY PIO DEL PILAR
            </a>
          </li>
        </ul>
      </div>

      <div class=\"col-md-6\">
        <h5>Main Office</h5>
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item\">Address: Washington Street, Pio Del Pilar, Makati City 1230 Metro Manila</li>
          <li class=\"list-group-item\">Email: bpiodelpilarsecoffice2020@gmail.com</li>
          <li class=\"list-group-item\">Tel. No.: (02) 8400-7191</li>
        </ul>
      </div>

      <div class=\"col-12\">
        <iframe src=\"https://www.google.com/maps/embed?pb=...\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen></iframe>
      </div>

      <div class=\"col-12 mt-5\">
        <hr />
      </div>

      <div class=\"col-12 text-center\">
        <img src=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
        yield "/images/makati_logo.png\" width=\"75px\" alt=\"Makati Logo\">
        <img src=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
        yield "/images/pdp_logo.png\" width=\"75px\" alt=\"PDP Logo\">
        <img src=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
        yield "/images/sk_pdp_logo.png\" width=\"75px\" alt=\"SK PDP Logo\">
        <p>Copyright © 2025 BARANGAY PIO DEL PILAR</p>
      </div>
    </div>
  </div>
</section>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gen_pio_theme/templates/layout/footer.html.twig";
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
        return array (  103 => 46,  99 => 45,  95 => 44,  67 => 19,  58 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gen_pio_theme/templates/layout/footer.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
