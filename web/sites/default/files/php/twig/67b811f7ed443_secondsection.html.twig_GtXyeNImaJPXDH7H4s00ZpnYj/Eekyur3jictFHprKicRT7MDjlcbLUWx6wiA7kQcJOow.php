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
        yield "<!--Second section -->
<section id=\"\" class=\"second-section\">
\t<div class=\"container-xl reveal\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 zi-2 text-center\"><h2 class=\"text-center h5 mb-5\">Latest News</h2></div>
\t\t</div>
\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4 news d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col news-col\">
\t\t\t\t\t<div class=\"card mb-3\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t<h1>13</h1>
\t\t\t\t\t\t\t\t<h6>Jan 2025</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\"><h4>Free House-to-House Anti-Rabies Vaccine</h4></div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Magandang araw mga ka-barangay!<br><br>Simula po ngayong Lunes, Enero 13, mag iikot po ang ating Makati Veterinarian Team sa ating barangay upang magbigay ng libreng Anti-Rabies Vaccine sa ating mga alagang aso’t pusa.<br>Mangyari lamang po na ipakita ang vaccination card ng ating mga alaga kapag sila’y binakunahan.<br>Abangan lamang po sila sa ating lugar simula sa Lunes.<br><br>Maraming salamat po!</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\"><a name=\"\" id=\"\" href=\"https://brgypiodelpilarmakati.com.ph/news/page/6512bd43d9caa6e02c990b0a82652dca\" role=\"button\">Read More <i class=\"fas fa-arrow-right\"></i></a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<div class=\"row mt-4 mb-5\">
\t\t\t<div class=\"col-12 news-btn\"><a class=\"btn btn-news-ct\" href=\"https://brgypiodelpilarmakati.com.ph/news\" role=\"button\">SEE MORE NEWS<i class=\"fas fa-arrow-circle-right\"></i></a></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\"><h2 class=\"text-center h5 mb-5 mt-5\">Latest Events</h2></div>
\t\t</div>
\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4 news d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col news-col\">
\t\t\t\t\t<div class=\"card mb-3\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t<h1>25</h1>
\t\t\t\t\t\t\t\t<h6>Jan 2025</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\"><h4>Pio Del Pilar Concert</h4></div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Magandang araw mga ka-barangay!<br><br>Bilang pagdiriwang sa kapistahan ng ating mga patron, San Ildefonso at San Juan Bosco, ang atin pong barangay, sa pangunguna ni Kapitana Popcorn S. Lacia, Kagawad Cesar Parrucho, ang buong konseho kasama na rin ang ating Sangguniang Kabataan, ay inihahandog ang Pio del Pilar Concert Night na gaganapin sa January 25 sa ganap na ika-7 ng gabi sa Evangelista st. Corner Arnaiz Ave!<br><br>Magkita kita po tayo!</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\"><a name=\"\" id=\"\" href=\"https://brgypiodelpilarmakati.com.ph/events/page/d3d9446802a44259755d38e6d163e820\" role=\"button\">Read More <i class=\"fas fa-arrow-right\"></i></a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col news-col\">
\t\t\t\t\t<div class=\"card mb-3\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t<h1>24</h1>
\t\t\t\t\t\t\t\t<h6>Jan 2025</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\"><h4>Little Miss & Mister Pio Del Pilar</h4></div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Search for LITTLE MISS & MISTER PIO DEL PILAR are now open AGE 5yrs old to 9yrs of age.<br>Event will be on Jan 24,2025 at Evangelista cor. Arnaiz ave.<br><br>Pre Orientation po on Jan 17,2025 Friday 6:00pm at Barangay Hall 3rd flr</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\"><a name=\"\" id=\"\" href=\"https://brgypiodelpilarmakati.com.ph/events/page/45c48cce2e2d7fbdea1afc51c7c6ad26\" role=\"button\">Read More <i class=\"fas fa-arrow-right\"></i></a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col news-col\">
\t\t\t\t\t<div class=\"card mb-3\" >
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-3 news-date\">
\t\t\t\t\t\t\t\t<h1>23</h1>
\t\t\t\t\t\t\t\t<h6>Jan 2025</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-9 news-details\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\"><h4>BiGAYtin Queen</h4></div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Get ready to witness a dazzling evening of elegance, beauty, and talent!  Join us as we celebrate the Bigaytin Queen 2025 with stunning performances and memorable moments. <br><br>This event is headed by:<br>Hazel Ann “Popcorn” Lacia – Barangay Captain, Pio del Pilar<br>Cesar “Loloboy” Parrucho – Kagawad In-charge, Committee on Education & Culture<br><br>Together with the Barangay Council and Sangguniang Kabataan Council.<br><br>Mark your calendars and be part of this spectacular night!</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text card-a\"><a name=\"\" id=\"\" href=\"https://brgypiodelpilarmakati.com.ph/events/page/c9f0f895fb98ab9159f51fd0297e236d\" role=\"button\">Read More <i class=\"fas fa-arrow-right\"></i></a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<div class=\"row  mt-5 mb-5\">
\t\t\t<div class=\"col-12 news-btn\"><a class=\"btn btn-news-ct\" href=\"https://brgypiodelpilarmakati.com.ph/events\" role=\"button\">SEE MORE EVENTS<i class=\"fas fa-arrow-circle-right\"></i></a></div>
\t\t</div>
\t</div>
\t
</section>
<!--Second section end -->";
        yield from [];
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
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gen_pio_theme/layout/secondsection.html.twig", "C:\\xampp\\htdocs\\gen_pio_delpilar\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\secondsection.html.twig");
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
