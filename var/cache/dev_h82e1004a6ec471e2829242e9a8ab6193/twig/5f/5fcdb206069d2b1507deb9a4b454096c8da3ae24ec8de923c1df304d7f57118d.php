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

/* @PayonePayment/storefront/page/account/sidebar.html.twig */
class __TwigTemplate_4a937d9eeb2d242bd0c648be81edc6a1420a2353872b885bc0263b757d2443d7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_sidebar_menu_inner' => [$this, 'block_page_account_sidebar_menu_inner'],
            'page_account_sidebar_link_payone_card' => [$this, 'block_page_account_sidebar_link_payone_card'],
            'page_account_sidebar_link_payone_mandate' => [$this, 'block_page_account_sidebar_link_payone_mandate'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayonePayment/storefront/page/account/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayonePayment/storefront/page/account/sidebar.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@PayonePayment/storefront/page/account/sidebar.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_account_sidebar_menu_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu_inner"));

        // line 4
        echo "    ";
        $this->displayParentBlock("page_account_sidebar_menu_inner", $context, $blocks);
        echo "

    ";
        // line 6
        $this->displayBlock('page_account_sidebar_link_payone_card', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('page_account_sidebar_link_payone_mandate', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_account_sidebar_link_payone_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payone_card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payone_card"));

        // line 7
        echo "        ";
        if (twig_in_filter(twig_constant("PayonePayment\\PaymentMethod\\PayoneCreditCard::UUID"), ($context["activePaymentPaymentMethods"] ?? null))) {
            // line 8
            echo "            ";
            ob_start();
            // line 9
            echo "                list-group-item
                list-group-item-action
                account-aside-item

                ";
            // line 13
            if (((($context["controllerName"] ?? null) === "PayoneAccountCard") && (($context["controllerAction"] ?? null) === "cardOverview"))) {
                // line 14
                echo "                    is-active
                ";
            }
            // line 16
            echo "            ";
            $context["css_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "
            <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payone.card.page");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PayonePayment.cardPage.menuName"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PayonePayment.cardPage.menuName"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 22
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_page_account_sidebar_link_payone_mandate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payone_mandate"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payone_mandate"));

        // line 25
        echo "        ";
        if (twig_in_filter(twig_constant("PayonePayment\\PaymentMethod\\PayoneDebit::UUID"), ($context["activePaymentPaymentMethods"] ?? null))) {
            // line 26
            echo "            ";
            ob_start();
            // line 27
            echo "                list-group-item
                list-group-item-action
                account-aside-item

                ";
            // line 31
            if (((($context["controllerName"] ?? null) === "PayoneAccountMandate") && (($context["controllerAction"] ?? null) === "mandateOverview"))) {
                // line 32
                echo "                    is-active
                ";
            }
            // line 34
            echo "            ";
            $context["css_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payone.mandate.page");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PayonePayment.mandatePage.menuName"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PayonePayment.mandatePage.menuName"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 40
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PayonePayment/storefront/page/account/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  191 => 37,  183 => 36,  180 => 35,  177 => 34,  173 => 32,  171 => 31,  165 => 27,  162 => 26,  159 => 25,  149 => 24,  139 => 22,  133 => 19,  125 => 18,  122 => 17,  119 => 16,  115 => 14,  113 => 13,  107 => 9,  104 => 8,  101 => 7,  91 => 6,  81 => 24,  78 => 23,  76 => 6,  70 => 4,  60 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/sidebar.html.twig' %}

{% block page_account_sidebar_menu_inner %}
    {{ parent() }}

    {% block page_account_sidebar_link_payone_card %}
        {% if constant('PayonePayment\\\\PaymentMethod\\\\PayoneCreditCard::UUID') in activePaymentPaymentMethods %}
            {% set css_class %}
                list-group-item
                list-group-item-action
                account-aside-item

                {% if controllerName is same as('PayoneAccountCard') and controllerAction is same as('cardOverview') %}
                    is-active
                {% endif %}
            {% endset %}

            <a href=\"{{ path('frontend.account.payone.card.page') }}\" title=\"{{ \"PayonePayment.cardPage.menuName\" | trans }}\" class=\"{{ css_class }}\">
                {{ \"PayonePayment.cardPage.menuName\" | trans }}
            </a>
        {% endif %}
    {% endblock %}

    {% block page_account_sidebar_link_payone_mandate %}
        {% if constant('PayonePayment\\\\PaymentMethod\\\\PayoneDebit::UUID') in activePaymentPaymentMethods %}
            {% set css_class %}
                list-group-item
                list-group-item-action
                account-aside-item

                {% if controllerName is same as('PayoneAccountMandate') and controllerAction is same as('mandateOverview') %}
                    is-active
                {% endif %}
            {% endset %}

            <a href=\"{{ path('frontend.account.payone.mandate.page') }}\" title=\"{{ \"PayonePayment.mandatePage.menuName\" | trans }}\" class=\"{{ css_class }}\">
                {{ \"PayonePayment.mandatePage.menuName\" | trans }}
            </a>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@PayonePayment/storefront/page/account/sidebar.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/PayonePayment/src/Resources/views/storefront/page/account/sidebar.html.twig");
    }
}
