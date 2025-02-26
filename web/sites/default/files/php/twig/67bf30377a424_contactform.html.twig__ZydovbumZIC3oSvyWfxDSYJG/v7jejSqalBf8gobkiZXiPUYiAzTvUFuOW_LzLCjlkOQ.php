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

/* @gen_pio_theme/templates/layout/contactform.html.twig */
class __TwigTemplate_d18a980bae8a2bbdf9c7aee91dcf4d8a extends Template
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
        yield "<!--contact offer section -->
<section id=\"\" class=\"contact-us common_bg\">
\t<div class=\"container\">
        <div class=\"row\">
        <div class=\"row contact-block\">
            <div class=\"col-md-6 contact-left pe-lg-5\">
                <h3 class=\"mb-sm-4 mb-3\">Contact Info</h3>
                <p class=\"cont-para mb-sm-5 mb-4\">
                We invite you to contact us with your questions or comments. One of our Barangay Staff will respond within 24 hours.
                </p>

                <div class=\"cont-details\">
                    <p><i class=\"fas fa-map-marker-alt\"></i> Washington Street, Pio Del Pilar, Makati City 1230 Metro Manila</p>
                    <p><i class=\"fas fa-phone-alt\"></i> +63 (2) 8 818 5373 / +63 (2) 8 893 3533</p>
                    <p><i class=\"fas fa-envelope-open-text\"></i> <a href=\"mailto:bpiodelpilarsecoffice2020@gmail.com\" class=\"mail\">bpiodelpilarsecoffice2020@gmail.com</a></p>
                </div>
            </div>
      

             <div class=\"col-md-6 contact-right mt-md-0 mt-5 ps-lg-0 ContactPageForm\">
                                                                   <form action=\"https://brgypiodelpilarmakati.com.ph/contact\" class='signin-form' method=\"post\" accept-charset=\"utf-8\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_name\">
                        <label for=\"floatingInput\">Your Name</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <input type=\"email\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_email\">
                        <label for=\"floatingInput\">Your Email address</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_subject\">
                        <label for=\"floatingInput\">Subject</label>
                    </div>
                    <div class=\"form-floating mb-3\">
                        <textarea class=\"form-control\" id=\"floatingTextarea2\" style=\"height: 100px\" required name=\"contact_message\"></textarea>
                        <label for=\"floatingTextarea2\">Type your message here</label>
                    </div>
                    <button class=\"btn btn-info\" name=\"contact_submit\" value=\"Send Message\" type=\"submit\">Send Message</button>
                </form>            </div>
      
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
        return "@gen_pio_theme/templates/layout/contactform.html.twig";
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
        return new Source("", "@gen_pio_theme/templates/layout/contactform.html.twig", "C:\\xampp\\htdocs\\genpio_drupal\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\contactform.html.twig");
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
