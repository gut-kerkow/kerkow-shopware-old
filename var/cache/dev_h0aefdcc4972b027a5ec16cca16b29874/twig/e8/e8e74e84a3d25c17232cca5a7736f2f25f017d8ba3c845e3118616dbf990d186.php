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

/* @SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig */
class __TwigTemplate_31ec285830d97793f7e7bc4e6d6d8a1e0132a28f16b381d1849e7c306e4630a5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_buy_container_paypal' => [$this, 'block_page_product_detail_buy_container_paypal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 4
        echo "    ";
        $this->displayParentBlock("page_product_detail_buy_container", $context, $blocks);
        echo "

    ";
        // line 6
        $this->displayBlock('page_product_detail_buy_container_paypal', $context, $blocks);
        // line 31
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_product_detail_buy_container_paypal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container_paypal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container_paypal"));

        // line 7
        echo "        ";
        $context["buyable"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 7) <= 0)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 7) > 0));
        // line 8
        echo "
        ";
        // line 9
        if (($context["buyable"] ?? null)) {
            // line 10
            echo "            ";
            // line 11
            echo "            ";
            $context["expressSettings"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
            // line 12
            echo "
            ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["expressSettings"] ?? null), "productDetailEnabled", [], "any", false, false, false, 13)) {
                // line 14
                echo "                <div class=\"form-row mt-3 justify-content-end\">
                    ";
                // line 15
                $this->loadTemplate("@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig", "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig", 15)->display(twig_array_merge($context, ["button_class" => "col-8"]));
                // line 16
                echo "                </div>
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        $context["installmentBanner"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 21)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_constant("Swag\\PayPal\\Installment\\Banner\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID")] ?? null) : null);
        // line 22
        echo "
        ";
        // line 23
        if ( !(null === ($context["installmentBanner"] ?? null))) {
            // line 24
            echo "            <div class=\"form-row mt-3 mb-4 justify-content-end\">
                <div class=\"";
            // line 25
            echo ((($context["buyable"] ?? null)) ? ("col-8") : ("col-12"));
            echo "\" data-swag-paypal-installment-banner=\"true\"
                     data-swag-pay-pal-installment-banner-options=\"";
            // line 26
            echo twig_escape_filter($this->env, json_encode(($context["installmentBanner"] ?? null)), "html", null, true);
            echo "\">
                </div>
            </div>
        ";
        }
        // line 30
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 30,  146 => 26,  142 => 25,  139 => 24,  137 => 23,  134 => 22,  131 => 21,  128 => 19,  125 => 18,  121 => 16,  119 => 15,  116 => 14,  114 => 13,  111 => 12,  108 => 11,  106 => 10,  104 => 9,  101 => 8,  98 => 7,  88 => 6,  77 => 31,  75 => 6,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/product-detail/buy-widget-form.html.twig' %}

{% block page_product_detail_buy_container %}
    {{ parent() }}

    {% block page_product_detail_buy_container_paypal %}
        {% set buyable = product.available and product.childCount <= 0 and product.calculatedMaxPurchase > 0 %}

        {% if buyable %}
            {# @var \\Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutButtonData expressSettings #}
            {% set expressSettings = page.extensions[constant('Swag\\\\PayPal\\\\Checkout\\\\ExpressCheckout\\\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID')] %}

            {% if expressSettings.productDetailEnabled %}
                <div class=\"form-row mt-3 justify-content-end\">
                    {% sw_include '@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig' with {button_class: 'col-8'} %}
                </div>
            {% endif %}
        {% endif %}

        {# @var \\Swag\\PayPal\\Installment\\Banner\\BannerData installmentBanner #}
        {% set installmentBanner = page.extensions[constant('Swag\\\\PayPal\\\\Installment\\\\Banner\\\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID')] %}

        {% if installmentBanner is not null %}
            <div class=\"form-row mt-3 mb-4 justify-content-end\">
                <div class=\"{{ buyable ? 'col-8' : 'col-12' }}\" data-swag-paypal-installment-banner=\"true\"
                     data-swag-pay-pal-installment-banner-options=\"{{ installmentBanner|json_encode }}\">
                </div>
            </div>
        {% endif %}
    {% endblock %}

{% endblock %}
", "@SwagPayPal/storefront/page/product-detail/buy-widget-form.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/SwagPayPal/src/Resources/views/storefront/page/product-detail/buy-widget-form.html.twig");
    }
}
