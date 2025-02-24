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

/* themes/custom/gen_pio_theme/templates/layout/page--about.html.twig */
class __TwigTemplate_4daf61d5043a5efebcd6bc790a7997dd extends Template
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
        yield from         $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page--about.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<section id=\"\" class=\"title-banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info\">
                <h5 class=\"mt-4\">ABOUT US</h5>                
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section id=\"\" class=\"about-content1 common_bg\">
\t<div class=\"container\">
        <div class=\"row about-data text-center\">
            <h2 class=\"\">BARANGAY PIO DEL PILAR</h2>
            <!-- <small></small> -->
        </div>
        <div class=\"row about-data d-flex justify-content-center\">
            <div class=\"col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 fs-img text-center\">
\t\t\t\t<img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/pdp_logo.png\">
\t\t\t</div>

\t\t\t<div class=\"col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 fs-text text-justify \">
\t\t\t\t<h3 class=\"\">INTRODUCTION</h3>
\t\t\t\t<p class=\"text-indent\">Barangay Pio del Pilar is one of the seven (7) barangays comprising the Westside Cluster or Cluster 2 in the first district of Makati. It has a land area of 880,900 square meters which is 3.2% share to the City’s total land area. Based on the 2015 Census of population released by the Philippine Statistics Authority, Pio del Pilar has a population of 30,732 and a percentage share of 5.27% in the city’s population with a density of 35 persons per 1,000 square meters.</p>
\t\t\t\t<p class=\"text-indent\">Pio del Pilar is bounded by Barangays San Isidro and San Antonio in the north, Barangays Bangkal and San Lorenzo in the south, Barangay San Lorenzo in the east and Pasay City in the west.</p>
\t\t\t\t<p class=\"text-indent\">One of the major means of transportation in Barangay Pio del Pilar is the Pasay Road Station of the Philippine National Railways. Other recognized structures located in the barangay includes Pio del Pilar Elementary School, Koliseyum ng Bayan, Don Bosco Parish Church, Waltermart and Citimotors.</p>
\t\t\t\t<p class=\"text-indent\">Predominant land use of barangay Pio del Pilar is commercial which can be seen through wide arrays of business establishments such as banks, gas stations, restaurants, apartelles, hotels and drug stores among others.</p>

                <h3 class=\" mt-5\">HISTORY</h3>
                <p class=\"text-indent\">Pio del Pilar, formerly known as Culi-Culi was once a vast rice field where fruit trees and vegetables abound. It was not a horse ranch but there were more than a hundred horses used to service calesas or karitelas which was the main transportation then.</p>
                <p class=\"text-indent\">It was renamed Pio del Pilar after the hero, General Pio del Pilar, who was a resident of the place.</p>
                <p class=\"text-indent\">From a red light district, Pio del Pilar was developed into one of the most prestigious and progressive barangays of Makati.</p>
                <p class=\"text-indent\">Presently the Barangay Captain of Pio del Pilar is Mr. Tony P. De Leon. The residence of Gen. Pio del Pilar who was a resident of the place, is located at J. Victor corner Jacinto Streets.</p>
                
                <h3 class=\" mt-5\">MISSION</h3>
                <p class=\"text-indent\">To achieve our vision for Barangay Pio del Pilar, we shall pursue a responsive and integrated development strategy. </p>

                <h3 class=\" mt-5\">VISION</h3>
                <p class=\"text-indent\">We envision Barangay Pio del Pilar free from informal settlers in 5 years time and its residents community oriented, educated and disciplined.</p>
                
                <h3 class=\" mt-5\">FEAST DAYS</h3>
                <p class=\"text-indent\">Last week of January  / 2nd week of March - Feast of Don Bosco / Barangay Day</p>
                
                <h3 class=\" mt-5\">SIGNIFICANT PERSON/s or FAMILIES </h3>
                <p class=\"text-indent\">
                    <b>Tony P. De Leon</b>, as Barangay Captain of Pio del Pilar received various awards such as Oustanding Barangay Chairman, 2000, Kalayaan Award of the National Biographic and Historic Research 2001, Top 30 Most Dynamic Leader Democrat of the Philippines, and 1999 Man of the Year from the Sons and Daughters of Charity.
                </p>
                <p class=\"text-indent\">
                    <b>General Pio del Pilar</b>, Makati's Hero, wasa katipunan revolutionist who formed the Katipunan chapter in Makati. He was an ardent General of Gen. Emilio Aguinaldo and Gen. Antonio Luna who thought the spaniards and Americans. 
                </p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section id=\"\" class=\"profile-content\">
    <div class=\"container reveal active\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                <small>PROFILE</small>   
                <h1>Demographic</h1>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center mt-5\">
            
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <tbody>
                        <tr>
                            <th rowspan=\"4\" width=\"30%\">Barangay Boundaries</th>
                            <td><b>North</b>: San Isidro / San Antonio</td>
                        </tr>
                        <tr>
                            <td><b>South</b>: Bangkal / San Lorenzo</td>
                        </tr>
                        <tr>
                            <td><b>East</b>: San Lorenzo</td>
                        </tr>
                        <tr>
                            <td><b>West</b>: Pasay City</td>
                        </tr>
                        <tr>
                            <th rowspan=\"4\">Street Boundaries</th>
                            <td><b>North</b>: Sen. Gil Puyat Ave. to west end line of South Super Highway</td>
                        </tr>
                        <tr>
                            <td><b>South</b>: Dallas</td>
                        </tr>
                        <tr>
                            <td><b>East</b>: Amorsolo Street</td>
                        </tr>
                        <tr>
                            <td><b>West</b>: Tripa de Gallina</td>
                        </tr>
                        <tr>
                            <th>Land Area</th>
                            <td>68.6 hectares</td>
                        </tr>
                        <tr>
                            <th>Population</th>
                            <td>95,000</td>
                        </tr>
                        <tr>
                            <th>Voting Population</th>
                            <td>24,470 (as of 2004)</td>
                        </tr>
                        <tr>
                            <th>No. of Households</th>
                            <td>6,400 (as of 2002)</td>
                        </tr>
                        <tr>
                            <th>Average Household Size</th>
                            <td>4 persons</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
\t</div>
    <div class=\"container reveal mt-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                <small>PROFILE</small>   
                <h1>Economic</h1>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center mt-5\">
            
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <tbody>
                        <tr>
                            <th class=\"text-end\" width=\"30%\">Predominant Businesses or Products Produced in the Barangay</th>
                            <td>Banks, gas stations, restaurants, flower shops, sari-sari store, convenience stores, garments, barber shops, car dealers, supermarket, food chains, inns, apartelles, beauty parlors.</td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Major Business Establishments</th>
                            <td>Metrobank, St. Patrick Commercial Food Plaza, Citimotors, Esperanza Flower Shop, Waltermart, 7-11 Store, Avon Products, CRISPA, Buendia Shopping Plaza, Cityland Condominium, St. Illian's Inn, Petron and Caltex gas stations, Goldilocks, and Allied Bank.</td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Principal Occupation</th>
                            <td>Office employees, business, teachers and doctors.
                        </td></tr>
                    </tbody>
                </table>
            </div>
        </div>
\t</div>
</section>
<section id=\"\" class=\"others-content common_bg\">
    <div class=\"container reveal active\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                <small>PHYSICAL</small>   
                <h1>Facilities</h1>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center mt-5\">
            
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered table-light\">
                    <tbody>
                        <tr>
                            <th class=\"text-end\" width=\"30%\">Barangay Hall</th>
                            <td>Located at First Circle Washington Street</td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Physician-in-Charge</th>
                            <td>Dr. Rhoda L. Ulangkaya</td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Sports and Recreation</th>
                            <td>Koliseyum ng Bayan Basketball Court</td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Churches/Chapels</th>
                            <td><b>San Ildelfonso Parish Church</b> 
                                <br>Located at Arnaiz Ave. cor M. Reyes Street
                                <br>
                                <br>
                                <b>Don Bosco Parish</b>
                                <br>Located at A. Arnaiz Avenue Iglesia ni Kristo 
                            </td>
                        </tr>
                        <tr>
                            <th class=\"text-end\">Schools</th>
                            <td><b>Pio del Pilar Elementary School (Main)</b> 
                                <br>P. Binay Street corner A. Arnaiz Avenue 
                                <br>No. of Classrooms : 46 
                                <br>Student Population : 3,153 
                                <br>

                                <br>
                                <b>Pio del Pilar Elementary School I</b>
                                <br>Located at Facundo Street
                                <br>No. of Classrooms : 23
                                <br>Student Population : 1,397
                                <br>No. of Personal Computers : 20 units

                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
\t</div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page--about.html.twig";
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
        return array (  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page--about.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
