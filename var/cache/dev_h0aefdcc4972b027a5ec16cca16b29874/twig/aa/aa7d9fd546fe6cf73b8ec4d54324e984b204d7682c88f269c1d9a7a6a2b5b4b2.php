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

/* @SwagPayPal/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_cffb3abfe721d602eca982360148f19c9050f0f1d083a08a5b378f310a966922 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/layout/footer/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagPayPal/storefront/layout/footer/footer.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@SwagPayPal/storefront/layout/footer/footer.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context["spbCheckoutMarksData"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 5), "extensions", [], "any", false, false, false, 5)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_constant("Swag\\PayPal\\Checkout\\SPBCheckout\\SPBMarksSubscriber::PAYPAL_SMART_PAYMENT_MARKS_DATA_EXTENSION_ID")] ?? null) : null);
        // line 6
        echo "
    ";
        // line 7
        if (($context["spbCheckoutMarksData"] ?? null)) {
            // line 8
            echo "        <div data-swag-paypal-marks=\"true\"
             data-swag-pay-pal-marks-options=\"";
            // line 9
            echo twig_escape_filter($this->env, json_encode(($context["spbCheckoutMarksData"] ?? null)), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $context["installmentBanner"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 14), "extensions", [], "any", false, false, false, 14)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_constant("Swag\\PayPal\\Installment\\Banner\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID")] ?? null) : null);
        // line 15
        echo "
    ";
        // line 16
        if ( !(null === ($context["installmentBanner"] ?? null))) {
            // line 17
            echo "        <div class=\"col-4 mt-2\"
             data-swag-paypal-installment-banner=\"true\"
             data-swag-pay-pal-installment-banner-options=\"";
            // line 19
            echo twig_escape_filter($this->env, json_encode(($context["installmentBanner"] ?? null)), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->displayParentBlock("layout_footer_payment_logos", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/layout/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  108 => 22,  102 => 19,  98 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 12,  81 => 9,  78 => 8,  76 => 7,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/footer/footer.html.twig' %}

{% block layout_footer_payment_logos %}
    {# @var \\Swag\\PayPal\\Checkout\\SPBCheckout\\SPBMarksData spbCheckoutMarksData #}
    {% set spbCheckoutMarksData = page.footer.extensions[constant('Swag\\\\PayPal\\\\Checkout\\\\SPBCheckout\\\\SPBMarksSubscriber::PAYPAL_SMART_PAYMENT_MARKS_DATA_EXTENSION_ID')] %}

    {% if spbCheckoutMarksData %}
        <div data-swag-paypal-marks=\"true\"
             data-swag-pay-pal-marks-options=\"{{ spbCheckoutMarksData|json_encode }}\">
        </div>
    {% endif %}

    {# @var \\Swag\\PayPal\\Installment\\Banner\\BannerData installmentBanner #}
    {% set installmentBanner = page.footer.extensions[constant('Swag\\\\PayPal\\\\Installment\\\\Banner\\\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID')] %}

    {% if installmentBanner is not null %}
        <div class=\"col-4 mt-2\"
             data-swag-paypal-installment-banner=\"true\"
             data-swag-pay-pal-installment-banner-options=\"{{ installmentBanner|json_encode }}\">
        </div>
    {% endif %}

    {{ parent() }}
{% endblock %}
", "@SwagPayPal/storefront/layout/footer/footer.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/SwagPayPal/src/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
