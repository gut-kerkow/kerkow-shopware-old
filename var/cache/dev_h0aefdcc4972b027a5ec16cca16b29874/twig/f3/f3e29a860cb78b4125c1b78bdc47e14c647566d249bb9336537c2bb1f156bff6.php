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
class __TwigTemplate_3739ea4db1f8f7c846eb88f94925719e71742798c61812b366da16263b318894 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/delivery-information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/delivery-information.html.twig"));

        // line 1
        $this->displayBlock('component_delivery_information', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_delivery_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_component_delivery_information_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_shipping_free"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_shipping_free"));

        // line 8
        echo "                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShippingFree"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_delivery_information_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_not_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_not_available"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_component_delivery_information_pre_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_pre_order"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_pre_order"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/delivery-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 30,  225 => 26,  215 => 25,  202 => 21,  196 => 17,  186 => 16,  173 => 10,  169 => 8,  159 => 7,  148 => 64,  143 => 61,  141 => 60,  140 => 59,  139 => 58,  138 => 57,  132 => 53,  130 => 52,  124 => 49,  118 => 45,  116 => 44,  112 => 42,  110 => 41,  109 => 40,  102 => 35,  100 => 34,  97 => 33,  94 => 25,  91 => 24,  88 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 7,  75 => 6,  71 => 4,  68 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_delivery_information %}
    {# @var product \\Shopware\\Core\\Content\\Product\\ProductEntity #}
    {% set product = page.product %}

    <div class=\"product-delivery-information\">
        {% if product.shippingFree %}
            {% block component_delivery_information_shipping_free %}
                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    {{ \"general.deliveryShippingFree\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% endif %}

        {% if not product.active %}
            {% block component_delivery_information_not_available %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    {{ \"general.deliveryNotAvailable\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.releaseDate and product.releaseDate|date('U') > \"now\"|date('U') %}
            {% block component_delivery_information_pre_order %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    {{ \"general.deliveryShipping\"|trans|sw_sanitize }} {{ product.releaseDate|format_date('long', locale=app.request.locale) }}
                </p>
            {% endblock %}

        {% elseif product.availableStock >= product.minPurchase and product.deliveryTime %}

            <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-success\"></span>

                {{ \"detail.deliveryTimeAvailable\"|trans({
                    '%name%': product.deliveryTime.translation('name')
                })|sw_sanitize }}
            </p>
        {% elseif product.isCloseout and product.availableStock < product.minPurchase %}

            <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-danger\"></span>
                {{ \"detail.soldOut\"|trans|sw_sanitize }}
            </p>

        {% elseif product.availableStock < product.minPurchase and product.deliveryTime and product.restockTime %}

            <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
            <p class=\"delivery-information\">
                <span class=\"delivery-status-indicator bg-warning\"></span>
                {{ \"detail.deliveryTimeRestock\"|trans({
                    '%count%': product.restockTime,
                    '%restockTime%': product.restockTime,
                    '%name%': product.deliveryTime.translation('name')
                })|sw_sanitize }}
            </p>
        {% endif %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/delivery-information.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/delivery-information.html.twig");
    }
}
