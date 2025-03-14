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

/* @gen_pio_theme/layout/header.html.twig */
class __TwigTemplate_807f9669947aed6070da40d45900451b extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\" prefix=\"og: https://ogp.me/ns#\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link rel=\"canonical\" href=\"https://brgypiodelpilarmakati.com.ph/\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <link rel=\"shortlink\" href=\"https://brgypiodelpilarmakati.com.ph/\" />
    <meta name=\"referrer\" content=\"no-referrer\" />
    <meta name=\"description\" content=\"Barangay Pio del Pilar is one of the seven (7) barangays comprising the Westside Cluster or Cluster 2 in the first district of Makati.\" />
    <meta name=\"keywords\" content=\"official website of barangay pio del pilar makati city, pio del pilar makati city, barangay pio del pilar, official website of barangay pio del pilar, website of barangay pio del pilar, brgy pio del pilar , brgy piodelpilar, brgy pio makati\" />
    <meta property=\"og:site_name\" content=\"OFFICIAL WEBSITE OF BARANGAY PIO DEL PILAR MAKATI CITY\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"https://brgypiodelpilarmakati.com.ph/\" />
    <meta property=\"og:title\" content=\"OFFICIAL WEBSITE OF BARANGAY PIO DEL PILAR MAKATI CITY\" />
    <meta property=\"og:image\" content=\"https://brgypiodelpilarmakati.com.ph/assets/images/PIODELPILAR.png\">
    <meta property=\"og:description\" content=\"Barangay Pio del Pilar is one of the seven (7) barangays comprising the Westside Cluster or Cluster 2 in the first district of Makati.\" />
    <meta name=\"twitter:title\" content=\"OFFICIAL WEBSITE OF BARANGAY PIO DEL PILAR MAKATI CITY\">
    <meta name=\"twitter:description\" content=\"Barangay Pio del Pilar is one of the seven (7) barangays comprising the Westside Cluster or Cluster 2 in the first district of Makati.\">
    <meta name=\"twitter:image\" content=\"https://brgypiodelpilarmakati.com.ph/assets/images/PIODELPILAR.png\">
    <meta name=\"twitter:site\" content=\"https://brgypiodelpilarmakati.com.ph/\">
    <!-- <meta name=\"twitter:creator\" content=\"@USERNAME\"> -->

    <meta name=\"MobileOptimized\" content=\"width\" />
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <title>OFFICIAL WEBSITE OF BARANGAY PIO DEL PILAR MAKATI CITY | HOME</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://brgypiodelpilarmakati.com.ph/assets/images/favicon.ico\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://brgypiodelpilarmakati.com.ph/assets/third_party/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://brgypiodelpilarmakati.com.ph/assets/third_party/fontawesome/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://brgypiodelpilarmakati.com.ph/assets/css/custom_styles.css\">
  \t<!-- Google tag (gtag.js) -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-XKXXKF1PS2\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XKXXKF1PS2');
    </script>
    <script src=\"https://brgypiodelpilarmakati.com.ph/assets/third_party/bootstrap/js/bootstrap.bundle.js\"></script>
    <script type=\"text/javascript\" src=\"https://brgypiodelpilarmakati.com.ph/assets/third_party/js/jquery.js\"></script>
  </head>
<body>
  <div class=\"main print_hide\">
    <!--header -->
    <div class=\"header\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"head-title\"> 
                <img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/pdp_logo.png\" alt=\"\">
                <h1><small>BARANGAY</small> <br>
                PIO DEL PILAR</h1>
            </div>
        </div>
    </div>
</div>
<div class=\"nav-ct\">
    <nav class=\"navbar navbar-expand-lg\">
        <div class=\"container-fluid\">
            <button class=\"d-lg-none navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- <div class=\"toggle-bar\"> -->
                <!-- <div class=\"toggle\"> -->
                <!-- </div> -->
            <!-- </div> -->
            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Home</a>
                    </li>
                  
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle \" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            About Us
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.aboutus"));
        yield "\"><i class=\"fas fa-caret-right\"></i> About Pio Del Pilar</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.brgy_officials"));
        yield "\"><i class=\"fas fa-caret-right\"></i> Barangay Officials</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.brgy_SKofficials"));
        yield "\"><i class=\"fas fa-caret-right\"></i> SK Officials</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle \" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            News & Events
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio_theme.all_news"));
        yield "\"><i class=\"fas fa-caret-right\"></i> News</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("gen_pio.all_events"));
        yield "\"><i class=\"fas fa-caret-right\"></i> Events</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                       <a class=\"nav-link\" href=\"";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => 11]));
        yield "\">Services</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"https://brgypiodelpilarmakati.com.ph/gallery\">Gallery</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => 9]));
        yield "\">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
<div class=\"container-fluid hr-ct\"></div>
    <!--header end -->
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gen_pio_theme/layout/header.html.twig";
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
        return array (  170 => 107,  161 => 101,  154 => 97,  150 => 96,  139 => 88,  135 => 87,  131 => 86,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gen_pio_theme/layout/header.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("path" => 86);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
