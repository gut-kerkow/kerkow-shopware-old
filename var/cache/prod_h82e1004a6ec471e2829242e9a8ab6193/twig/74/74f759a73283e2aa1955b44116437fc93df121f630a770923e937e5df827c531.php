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

/* @Storefront/storefront/component/delivery-information.html.twig */
class __TwigTemplate_fd570ae42a3fd7649b08374eba248e2453d774a675d90f0223320838f24dc8f3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_delivery_information' => [$this, 'block_component_delivery_information'],
            'component_delivery_information_shipping_free' => [$this, 'block_component_delivery_information_shipping_free'],
            'component_delivery_information_not_available' => [$this, 'block_component_delivery_information_not_available'],
            'component_delivery_information_pre_order' => [$this, 'block_component_delivery_information_pre_order'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_delivery_information', $context, $blocks);
    }

    public function block_component_delivery_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 3);
        // line 4
        echo "
    <div class=\"product-delivery-information\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shippingFree", [], "any", false, false, false, 6)) {
            // line 7
            echo "            ";
            $this->displayBlock('component_delivery_information_shipping_free', $context, $blocks);
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 15)) {
            // line 16
            echo "            ";
            $this->displayBlock('component_delivery_information_not_available', $context, $blocks);
            // line 24
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 24) && (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 24), "U") > twig_date_format_filter($this->env, "now", "U")))) {
            // line 25
            echo "            ";
            $this->displayBlock('component_delivery_information_pre_order', $context, $blocks);
            // line 33
            echo "
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 34
($context["product"] ?? null), "availableStock", [], "any", false, false, false, 34) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 34)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 34))) {
            // line 35
            echo "
            <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-success\"></span>

                ";
            // line 40
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeAvailable", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 41), "translation", [0 => "name"], "method", false, false, false, 41)]));
            // line 42
            echo "
            </p>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 44
($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 44) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 44) < twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 44)))) {
            // line 45
            echo "
            <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-danger\"></span>
                ";
            // line 49
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.soldOut"));
            echo "
            </p>

        ";
        } elseif ((((twig_get_attribute($this->env, $this->source,         // line 52
($context["product"] ?? null), "availableStock", [], "any", false, false, false, 52) < twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "restockTime", [], "any", false, false, false, 52))) {
            // line 53
            echo "
            <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-warning\"></span>
                ";
            // line 57
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeRestock", ["%count%" => twig_get_attribute($this->env, $this->source,             // line 58
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 58), "%restockTime%" => twig_get_attribute($this->env, $this->source,             // line 59
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 59), "%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 60), "translation", [0 => "name"], "method", false, false, false, 60)]));
            // line 61
            echo "
            </p>
        ";
        }
        // line 64
        echo "    </div>
";
    }

    // line 7
    public function block_component_delivery_information_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShippingFree"));
        echo "
                </p>
            ";
    }

    // line 16
    public function block_component_delivery_information_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 21
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryNotAvailable"));
        echo "
                </p>
            ";
    }

    // line 25
    public function block_component_delivery_information_pre_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 30
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShipping"));
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 30), "long", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "locale", [], "any", false, false, false, 30)), "html", null, true);
        echo "
                </p>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/delivery-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  171 => 26,  167 => 25,  160 => 21,  154 => 17,  150 => 16,  143 => 10,  139 => 8,  135 => 7,  130 => 64,  125 => 61,  123 => 60,  122 => 59,  121 => 58,  120 => 57,  114 => 53,  112 => 52,  106 => 49,  100 => 45,  98 => 44,  94 => 42,  92 => 41,  91 => 40,  84 => 35,  82 => 34,  79 => 33,  76 => 25,  73 => 24,  70 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 7,  57 => 6,  53 => 4,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/delivery-information.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/delivery-information.html.twig");
    }
}
