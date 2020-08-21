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

/* @PayonePayment/administration/index.html.twig */
class __TwigTemplate_2371bd0c7878b2408caefc492910f0b1107576709bd8cf2cda9ce732784c6ea9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'administration_stylesheets' => [$this, 'block_administration_stylesheets'],
            'administration_scripts' => [$this, 'block_administration_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@SwagMigrationAssistant/administration/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SwagMigrationAssistant/administration/index.html.twig", "@PayonePayment/administration/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_administration_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("administration_stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payonepayment/administration/css/payone-payment.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_administration_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("administration_scripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payonepayment/administration/js/payone-payment.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PayonePayment/administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 10,  63 => 9,  57 => 6,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PayonePayment/administration/index.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/PayonePayment/src/Resources/views/administration/index.html.twig");
    }
}
