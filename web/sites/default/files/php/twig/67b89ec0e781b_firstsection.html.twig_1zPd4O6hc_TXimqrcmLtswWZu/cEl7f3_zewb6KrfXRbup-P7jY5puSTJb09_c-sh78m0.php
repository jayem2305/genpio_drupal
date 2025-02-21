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

/* @gen_pio_theme/layout/firstsection.html.twig */
class __TwigTemplate_d74776d0058e682d3c352e5bc286eef0 extends Template
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
        yield "<!-- content -->
    <!--First section -->
<section id=\"\" class=\"first-section\">
\t<div class=\"container intro-ct\">
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<!-- <div class=\"col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 fs-img text-center order-lg-last\">
\t\t\t\t</div> -->
\t\t\t<div class=\"col-12 fs-text\">
\t\t\t\t<div class=\"fs-img\">
\t\t\t\t\t<img src = \"https://brgypiodelpilarmakati.com.ph/assets/images/pdp_logo.png\"/>
\t\t\t\t</div>
\t\t\t\t<h3 class=''>INTRODUCTION</h3>
\t\t\t\t<p class=\"text-indent\">Barangay Pio del Pilar is one of the seven (7) barangays comprising the Westside Cluster or Cluster 2 in the first district of Makati. It has a land area of 880,900 square meters which is 3.2% share to the City’s total land area. Based on the 2015 Census of population released by the Philippine Statistics Authority, Pio del Pilar has a population of 30,732 and a percentage share of 5.27% in the city’s population with a density of 35 persons per 1,000 square meters.</p>
\t\t\t\t<p class=\"text-indent\">Pio del Pilar is bounded by Barangays San Isidro and San Antonio in the north, Barangays Bangkal and San Lorenzo in the south, Barangay San Lorenzo in the east and Pasay City in the west.</p>
\t\t\t\t<p class=\"text-indent\">One of the major means of transportation in Barangay Pio del Pilar is the Pasay Road Station of the Philippine National Railways. Other recognized structures located in the barangay includes Pio del Pilar Elementary School, Koliseyum ng Bayan, Don Bosco Parish Church, Waltermart and Citimotors.</p>
\t\t\t\t<p class=\"text-indent\">Predominant land use of barangay Pio del Pilar is commercial which can be seen through wide arrays of business establishments such as banks, gas stations, restaurants, apartelles, hotels and drug stores among others.</p>
\t\t\t\t<p class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"https://brgypiodelpilarmakati.com.ph/about\" class=\"btn btn-ct-primary\">LEARN MORE<i class=\"fas fa-arrow-circle-right\"></i></a>
\t\t\t\t</p>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--First section end -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gen_pio_theme/layout/firstsection.html.twig";
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
        return new Source("", "@gen_pio_theme/layout/firstsection.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\firstsection.html.twig");
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
