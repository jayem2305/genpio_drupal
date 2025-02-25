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

/* @gen_pio_theme/templates/layout/services.html.twig */
class __TwigTemplate_fd492a1f9e43fbcd38a0136e2a50711f extends Template
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
        yield "<!--Services offer section starts -->
<section id=\"\" class=\"service-offer-banner common_bg\">
  <div class=\"container\">
    <div class=\"row service-offer\">
      <div class=\"col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 service-offer-img text-center\">
        <img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/services/id.svg\" alt=\"\">
      </div>
      <div class=\"col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 service-offer-info\">
        <h5>Barangay ID</h5>
        <p>
          <b>New Applicant</b>
          <ol>
            <li>Must be a Filipino citizen</li>
            <li>6 months residency in the barangay</li>
            <li>Certificate of employment issued by employer (Kasambahay, driver etc.)</li>
          </ol>
          <button type=\"button\" class=\"btn btn-primary\">
            <i class=\"fas fa-file-download\"></i> Download Application Form
          </button>
        </p>
      </div>
    </div>
    <div class=\"row service-offer\">
      <div class=\"col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 service-offer-img text-center order-lg-last\">
        <img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/services/docs.svg\" alt=\"\">
      </div>
      <div class=\"col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 service-offer-info\">
        <h5>Barangay Clearance</h5>
        <p>
          <ol>
            <li>Proof of residency from DVA (for resident)</li>
            <li>Certificate of Employment (Kasambahay, driver etc.)</li>
            <li>Xerox copy of DVA ID or any valid government Id</li>
          </ol>
          <button type=\"button\" class=\"btn btn-primary\">
            <i class=\"fas fa-file-download\"></i> Download Application Form
          </button>
        </p>
      </div>
    </div>
  </div>
</section>
<!--Services offer section end -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gen_pio_theme/templates/layout/services.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gen_pio_theme/templates/layout/services.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
