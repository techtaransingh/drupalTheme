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

/* themes/custom/silver/templates/block/block--mainnavigation.html.twig */
class __TwigTemplate_76458c9feedb167f39ecde58ac632c24 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "

    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
                <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mr-auto py-0\">
                   ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                </div>
                <div class=\"input-group ml-auto\" style=\"width: 100%; max-width: 300px;\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Keyword\">
                    <div class=\"input-group-append\">
                        <button class=\"input-group-text text-secondary\"><i
                                class=\"fa fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/silver/templates/block/block--mainnavigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 49,  70 => 48,  56 => 51,  54 => 48,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @ingroup themeable
 */
#}


    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
                <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mr-auto py-0\">
                   {% block content %}
    {{ content }}
  {% endblock %}
                </div>
                <div class=\"input-group ml-auto\" style=\"width: 100%; max-width: 300px;\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Keyword\">
                    <div class=\"input-group-append\">
                        <button class=\"input-group-text text-secondary\"><i
                                class=\"fa fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>", "themes/custom/silver/templates/block/block--mainnavigation.html.twig", "C:\\laragon\\www\\drupaltheme\\web\\themes\\custom\\silver\\templates\\block\\block--mainnavigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 48);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
