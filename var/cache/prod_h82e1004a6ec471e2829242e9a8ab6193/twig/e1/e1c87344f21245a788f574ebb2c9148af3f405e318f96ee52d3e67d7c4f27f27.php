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
class __TwigTemplate_ab6fc6580321e1746f6817cef0a799c5f9a6a12b283526a2c12a55f1eeed474b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@PayonePayment/storefront/page/account/sidebar.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_account_sidebar_menu_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 6
    public function block_page_account_sidebar_link_payone_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        if (twig_in_filter(twig_constant("PayonePayment\\PaymentMethod\\PayoneCreditCard::UUID"), ($context["activePaymentPaymentMethods"] ?? null))) {
            // line 8
            echo "            ";
            ob_start(function () { return ''; });
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
    }

    // line 24
    public function block_page_account_sidebar_link_payone_mandate($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        if (twig_in_filter(twig_constant("PayonePayment\\PaymentMethod\\PayoneDebit::UUID"), ($context["activePaymentPaymentMethods"] ?? null))) {
            // line 26
            echo "            ";
            ob_start(function () { return ''; });
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
        return array (  155 => 40,  149 => 37,  141 => 36,  138 => 35,  135 => 34,  131 => 32,  129 => 31,  123 => 27,  120 => 26,  117 => 25,  113 => 24,  109 => 22,  103 => 19,  95 => 18,  92 => 17,  89 => 16,  85 => 14,  83 => 13,  77 => 9,  74 => 8,  71 => 7,  67 => 6,  63 => 24,  60 => 23,  58 => 6,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PayonePayment/storefront/page/account/sidebar.html.twig", "/Users/kevin/Sites/kerkow_re/custom/plugins/PayonePayment/src/Resources/views/storefront/page/account/sidebar.html.twig");
    }
}
