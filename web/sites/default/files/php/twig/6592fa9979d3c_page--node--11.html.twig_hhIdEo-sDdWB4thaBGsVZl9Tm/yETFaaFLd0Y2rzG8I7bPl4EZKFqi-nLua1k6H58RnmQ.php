<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/silver/templates/page/page--node--11.html.twig */
class __TwigTemplate_b034e3932a56ad3754517b5d8ef4e316 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3\"
                    style=\"width: calc(100% - 100px); padding-left: 90px;\">
                    <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et
                            sanctus dolor diam eos</a></div>
                    <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem
                            diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
            Monday, January 01, 2045
        </div>
    </div>
    <div class=\"row align-items-center py-2 px-lg-5\">
        <div class=\"col-lg-4\">
            ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_image", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>


";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "

<div class=\"container-fluid\">
    <div class=\"container\">
        <nav class=\"breadcrumb bg-transparent m-0 p-0\">
            <a class=\"breadcrumb-item\" href=\"#\">Home</a>
            <span class=\"breadcrumb-item active\">Contact</span>
        </nav>
    </div>
</div>


<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"bg-light py-2 px-4 mb-3\">
            <h3 class=\"m-0\">Contact Us For Any Queries</h3>
        </div>
        <div class=\"row\">
            <div class=\"col-md-5\">
                <div class=\"bg-light mb-3\" style=\"padding: 30px;\">
                    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "get_in_touch", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"col-md-7\">
                <div class=\"contact-form bg-light mb-3\" style=\"padding: 30px;\">
                    <div id=\"success\"></div>
                    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_form", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 mb-5\">
            ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Categories</h4>
            <div class=\"d-flex flex-wrap m-n1\">
                ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_categories", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Tags</h4>
            <div class=\"d-flex flex-wrap m-n1\">
                ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_tags", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Quick Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_links", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "

            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/silver/templates/page/page--node--11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 88,  142 => 82,  133 => 76,  125 => 71,  109 => 58,  100 => 52,  77 => 32,  68 => 26,  62 => 23,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#contact page #}
<div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3\"
                    style=\"width: calc(100% - 100px); padding-left: 90px;\">
                    <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et
                            sanctus dolor diam eos</a></div>
                    <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem
                            diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
            Monday, January 01, 2045
        </div>
    </div>
    <div class=\"row align-items-center py-2 px-lg-5\">
        <div class=\"col-lg-4\">
            {{page.logo}}
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            {{page.top_image}}
        </div>
    </div>
</div>


{{page.navbar}}

<div class=\"container-fluid\">
    <div class=\"container\">
        <nav class=\"breadcrumb bg-transparent m-0 p-0\">
            <a class=\"breadcrumb-item\" href=\"#\">Home</a>
            <span class=\"breadcrumb-item active\">Contact</span>
        </nav>
    </div>
</div>


<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"bg-light py-2 px-4 mb-3\">
            <h3 class=\"m-0\">Contact Us For Any Queries</h3>
        </div>
        <div class=\"row\">
            <div class=\"col-md-5\">
                <div class=\"bg-light mb-3\" style=\"padding: 30px;\">
                    {{page.get_in_touch}}
                </div>
            </div>
            <div class=\"col-md-7\">
                <div class=\"contact-form bg-light mb-3\" style=\"padding: 30px;\">
                    <div id=\"success\"></div>
                    {{page.contact_form}}
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 mb-5\">
            {{page.footer1}}
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Categories</h4>
            <div class=\"d-flex flex-wrap m-n1\">
                {{page.footer_categories}}
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Tags</h4>
            <div class=\"d-flex flex-wrap m-n1\">
                {{page.footer_tags}}
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"font-weight-bold mb-4\">Quick Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                {{page.quick_links}}

            </div>
        </div>
    </div>
</div>", "themes/custom/silver/templates/page/page--node--11.html.twig", "C:\\laragon\\www\\drupaltheme\\web\\themes\\custom\\silver\\templates\\page\\page--node--11.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
