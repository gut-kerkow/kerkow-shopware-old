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

/* @SwagMigrationAssistant/administration/index.html.twig */
class __TwigTemplate_66bbe590f147f5a033fbd070e37787e55c1ae51d99a94e9e17250cbe93ce93ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'administration_scripts' => [$this, 'block_administration_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Administration/administration/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Administration/administration/index.html.twig", "@SwagMigrationAssistant/administration/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_administration_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("administration_scripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagmigrationassistant/administration/js/swag-migration-assistant.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/swagmigrationassistant/administration/css/swag-migration-assistant.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "@SwagMigrationAssistant/administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SwagMigrationAssistant/administration/index.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/SwagMigrationAssistant/Resources/views/administration/index.html.twig");
    }
}
