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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_bdb664ecc3bbf062bea8adec273738fa9bc7de7897d61e85ae004d37fca5689e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_buy_csrf' => [$this, 'block_component_product_box_action_buy_csrf'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
            'component_product_box_action_meta' => [$this, 'block_component_product_box_action_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_action_inner', $context, $blocks);
    }

    public function block_component_product_box_action_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "listing", [], "any", false, false, false, 4), "allowBuyInListing", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"product-action\">
            ";
            // line 6
            $context["isAvailable"] = ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 6) || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 6) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 6)));
            // line 7
            echo "
            ";
            // line 8
            if (((($context["isAvailable"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 8) <= 0))) {
                // line 9
                echo "                ";
                $this->displayBlock('component_product_box_action_buy', $context, $blocks);
                // line 68
                echo "            ";
            } else {
                // line 69
                echo "                ";
                $this->displayBlock('component_product_box_action_detail', $context, $blocks);
                // line 76
                echo "            ";
            }
            // line 77
            echo "        </div>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('component_product_box_action_meta', $context, $blocks);
    }

    // line 9
    public function block_component_product_box_action_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    ";
        // line 11
        echo "                       <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            ";
        // line 16
        $this->displayBlock('component_product_box_action_buy_csrf', $context, $blocks);
        // line 19
        echo "
                            ";
        // line 20
        $this->displayBlock('component_product_box_action_form', $context, $blocks);
        // line 66
        echo "                        </form>
                ";
    }

    // line 16
    public function block_component_product_box_action_buy_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                            ";
    }

    // line 20
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
                                ";
        // line 22
        $this->displayBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 33
        echo "
                                ";
        // line 34
        $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 54
        echo "
                                ";
        // line 55
        $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
        // line 60
        echo "
                                <button class=\"btn btn-block btn-buy\"
                                        title=\"";
        // line 62
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
        echo "\">
                                    ";
        // line 63
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
        echo "
                                </button>
                            ";
    }

    // line 22
    public function block_component_product_box_action_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                                    ";
        // line 24
        echo "                                    <input type=\"hidden\"
                                           name=\"redirectTo\"
                                           value=\"frontend.detail.page\">

                                    <input type=\"hidden\"
                                           name=\"redirectParameters\"
                                           data-redirect-parameters=\"true\"
                                           value='{\"productId\": \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\"}'>
                                ";
    }

    // line 34
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 36
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][id]\"
                                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 39
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][referencedId]\"
                                           value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 51
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][quantity]\"
                                           value=\"1\">
                                ";
    }

    // line 55
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                                    <input type=\"hidden\"
                                           name=\"product-name\"
                                           value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                                ";
    }

    // line 69
    public function block_component_product_box_action_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                       class=\"btn btn-block btn-light\"
                       title=\"";
        // line 72
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
        echo "\">
                        ";
        // line 73
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
        echo "
                    </a>
                ";
    }

    // line 80
    public function block_component_product_box_action_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "        <input type=\"hidden\"
               name=\"product-name\"
               value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  287 => 87,  280 => 83,  276 => 81,  272 => 80,  265 => 73,  261 => 72,  255 => 70,  251 => 69,  245 => 58,  241 => 56,  237 => 55,  230 => 51,  224 => 48,  218 => 45,  212 => 42,  207 => 40,  203 => 39,  198 => 37,  194 => 36,  191 => 35,  187 => 34,  181 => 31,  172 => 24,  170 => 23,  166 => 22,  159 => 63,  155 => 62,  151 => 60,  149 => 55,  146 => 54,  144 => 34,  141 => 33,  139 => 22,  136 => 21,  132 => 20,  125 => 17,  121 => 16,  116 => 66,  114 => 20,  111 => 19,  109 => 16,  100 => 11,  98 => 10,  94 => 9,  90 => 80,  87 => 79,  83 => 77,  80 => 76,  77 => 69,  74 => 68,  71 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  59 => 4,  56 => 3,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/action.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
