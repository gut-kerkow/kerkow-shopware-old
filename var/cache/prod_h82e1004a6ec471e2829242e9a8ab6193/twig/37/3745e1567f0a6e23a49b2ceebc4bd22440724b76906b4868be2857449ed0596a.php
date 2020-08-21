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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_a0bb2b147f07f9bf507705f3c95d535efa510da1d59b04590d0277422212d9cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2), "isActive", [], "method", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["trackingId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "getTrackingId", [], "method", false, false, false, 3);
            // line 4
            echo "        <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
            echo "\"></script>
        <script>
            window.gtagActive = true;
            window.controllerName = '";
            // line 7
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
            echo "';
            window.actionName = '";
            // line 8
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
            echo "';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 10), "analytics", [], "any", false, false, false, 10), "isTrackOrders", [], "method", false, false, false, 10), "html", null, true);
            echo "';

            function gtag() { dataLayer.push(arguments); }

            ";
            // line 14
            $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
            // line 25
            echo "        </script>
    ";
        }
    }

    // line 14
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                window.gtagCallback = () => {
                    gtag('js', new Date());

                    gtag('config', '";
        // line 18
        echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "', {
                        'anonymize_ip': '";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 19), "analytics", [], "any", false, false, false, 19), "isAnonymizeIp", [], "method", false, false, false, 19), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    });
                };
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  92 => 18,  87 => 15,  83 => 14,  77 => 25,  75 => 14,  68 => 10,  63 => 8,  59 => 7,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/analytics.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
