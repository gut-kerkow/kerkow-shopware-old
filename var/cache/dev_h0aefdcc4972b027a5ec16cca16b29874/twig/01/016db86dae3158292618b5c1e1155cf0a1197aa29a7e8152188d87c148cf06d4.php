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

/* @SwagPayPal/storefront/component/product/card/action.html.twig */
class __TwigTemplate_83f1eba55674ddae4394899b376fadfc23521fdc2eabe06aea14852ddee7ad6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/component/product/card/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/component/product/card/action.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@SwagPayPal/storefront/component/product/card/action.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        // line 4
        echo "    ";
        $this->displayParentBlock("component_product_box_action_form", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        $context["expressSettings"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 7)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
        // line 8
        echo "
    ";
        // line 9
        if (((null === ($context["expressSettings"] ?? null)) && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "extensions", [], "any", false, false, false, 9)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null))) {
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            $context["expressSettings"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "extensions", [], "any", false, false, false, 11)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["expressSettings"] ?? null), "listingEnabled", [], "any", false, false, false, 14)) {
            // line 15
            echo "        ";
            $this->loadTemplate("@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig", "@SwagPayPal/storefront/component/product/card/action.html.twig", 15)->display(twig_array_merge($context, ["button_class" => "pt-3"]));
            // line 16
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/component/product/card/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  95 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  82 => 10,  80 => 9,  77 => 8,  74 => 7,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends \"@Storefront/storefront/component/product/card/action.html.twig\" %}

{% block component_product_box_action_form %}
    {{ parent() }}

    {# @var \\Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutButtonData expressSettings #}
    {% set expressSettings = page.extensions[constant('Swag\\\\PayPal\\\\Checkout\\\\ExpressCheckout\\\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID')] %}

    {% if expressSettings is null and cmsPage.extensions[constant('Swag\\\\PayPal\\\\Checkout\\\\ExpressCheckout\\\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID')] %}
        {# @var \\Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutButtonData expressSettings #}
        {% set expressSettings = cmsPage.extensions[constant('Swag\\\\PayPal\\\\Checkout\\\\ExpressCheckout\\\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID')] %}
    {% endif %}

    {% if expressSettings.listingEnabled %}
        {% sw_include '@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig' with {button_class: 'pt-3'} %}
    {% endif %}
{% endblock %}
", "@SwagPayPal/storefront/component/product/card/action.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/SwagPayPal/src/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
