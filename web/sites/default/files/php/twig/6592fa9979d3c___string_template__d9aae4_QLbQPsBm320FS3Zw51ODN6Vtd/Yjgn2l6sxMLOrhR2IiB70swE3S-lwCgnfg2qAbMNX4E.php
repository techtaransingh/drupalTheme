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

/* __string_template__d9aae46b620a5f952db1c12d26d3df14 */
class __TwigTemplate_70b247d1206112574f12d2e9e08786be extends \Twig\Template
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
        // line 1
        echo "<ul class=\"default_tag_clouds\">
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Business</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Entertainment</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Sports</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Technology</a>
    </li>
  </ul>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d9aae46b620a5f952db1c12d26d3df14";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<ul class=\"default_tag_clouds\">
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Business</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Entertainment</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Sports</a>
    </li>
      <li class=\"tag_clouds_term\">
      <a href=\"/taxonomy/term/\">Technology</a>
    </li>
  </ul>
", "__string_template__d9aae46b620a5f952db1c12d26d3df14", "");
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
