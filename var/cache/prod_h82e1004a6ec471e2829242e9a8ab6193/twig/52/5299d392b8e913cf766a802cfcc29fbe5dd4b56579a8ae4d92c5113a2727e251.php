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

/* @Administration/administration/index.html.twig */
class __TwigTemplate_387520de8656ec520d7cf793c296dedd5a2dadbcfcc1f7e2afde12085a48dfe1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'administration_favicons' => [$this, 'block_administration_favicons'],
            'administration_templates' => [$this, 'block_administration_templates'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        Shopware Administration (c) shopware AG
    </title>

    ";
        // line 10
        $this->displayBlock('administration_favicons', $context, $blocks);
        // line 20
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/vendors-node.css", "@Administration"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/app.css", "@Administration"), "html", null, true);
        echo "\">

</head>
<body>

<div id=\"app\"></div>

";
        // line 29
        $this->displayBlock('administration_templates', $context, $blocks);
        // line 30
        echo "
<script nonce=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/runtime.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/vendors-node.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/commons.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/app.js", "@Administration"), "html", null, true);
        echo "\"></script>

<script nonce=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
    /*
        root-level domain configuration

        host:               shopware.next
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://shopware.next
        uri:                http://shopware.next/admin
        basePath:
        pathInfo:           /admin

        -----------------------------------------------

        sub-folder domain configuration

        host:               localhost
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://localhost
        uri:                http://localhost/next/web/admin
        basePath:           /next/web
        pathInfo:           /admin
    */
    Shopware.Application.start({
        apiContext: {
            host: '";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "host", [], "any", false, false, false, 62), "html", null, true);
        echo "',
            port: ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "port", [], "any", false, false, false, 63), "html", null, true);
        echo ",
            scheme: '";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "scheme", [], "any", false, false, false, 64), "html", null, true);
        echo "',
            schemeAndHttpHost: '";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "schemeAndHttpHost", [], "any", false, false, false, 65), "html", null, true);
        echo "',
            uri: '";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "uri", [], "any", false, false, false, 66), "html", null, true);
        echo "',
            basePath: '";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "basePath", [], "any", false, false, false, 67), "html", null, true);
        echo "',
            pathInfo: '";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "pathInfo", [], "any", false, false, false, 68), "html", null, true);
        echo "',
            liveVersionId: '";
        // line 69
        echo twig_escape_filter($this->env, ($context["liveVersionId"] ?? null), "html", null, true);
        echo "',
            systemLanguageId: '";
        // line 70
        echo twig_escape_filter($this->env, ($context["systemLanguageId"] ?? null), "html", null, true);
        echo "',
            apiVersion: ";
        // line 71
        echo twig_escape_filter($this->env, ($context["apiVersion"] ?? null), "html", null, true);
        echo ",
            assetPath: '";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
        echo "'
        },
        appContext: {
            features: ";
        // line 75
        echo json_encode(($context["features"] ?? null));
        echo ",
            firstRunWizard: ";
        // line 76
        echo ((($context["firstRunWizard"] ?? null)) ? ("true") : ("false"));
        echo ",
            systemCurrencyId: '";
        // line 77
        echo twig_escape_filter($this->env, ($context["systemCurrencyId"] ?? null), "html", null, true);
        echo "'
        }
    });
</script>

</body>
</html>
";
    }

    // line 10
    public function block_administration_favicons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/apple-touch-icon.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-16x16.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-32x32.png", "@Administration"), "html", null, true);
        echo "\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-192x192.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-256x256.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/mstile-150x150.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
    ";
    }

    // line 29
    public function block_administration_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Administration/administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 29,  219 => 16,  215 => 15,  211 => 14,  207 => 13,  203 => 12,  198 => 11,  194 => 10,  182 => 77,  178 => 76,  174 => 75,  168 => 72,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 65,  136 => 64,  132 => 63,  128 => 62,  99 => 36,  92 => 34,  86 => 33,  80 => 32,  74 => 31,  71 => 30,  69 => 29,  59 => 22,  55 => 21,  52 => 20,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Administration/administration/index.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/administration/Resources/views/administration/index.html.twig");
    }
}
