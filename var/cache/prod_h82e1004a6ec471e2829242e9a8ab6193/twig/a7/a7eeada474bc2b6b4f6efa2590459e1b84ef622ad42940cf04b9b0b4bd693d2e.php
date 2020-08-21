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

/* @Storefront/storefront/page/product-detail/buy-widget-form.html.twig */
class __TwigTemplate_da323fd9014f899641159bfc6ad4ab4689dab2bcc5a5042ddd742c0695069078 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_form_inner' => [$this, 'block_page_product_detail_buy_form_inner'],
            'page_product_detail_buy_form_action' => [$this, 'block_page_product_detail_buy_form_action'],
            'page_product_detail_buy_form_inner_csrf' => [$this, 'block_page_product_detail_buy_form_inner_csrf'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_buy_quantity_container' => [$this, 'block_page_product_detail_buy_quantity_container'],
            'page_product_detail_buy_quantity' => [$this, 'block_page_product_detail_buy_quantity'],
            'page_product_detail_buy_redirect_input' => [$this, 'block_page_product_detail_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'page_product_detail_buy_button_container' => [$this, 'block_page_product_detail_buy_button_container'],
            'page_product_detail_buy_button' => [$this, 'block_page_product_detail_buy_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_buy_form_inner', $context, $blocks);
    }

    public function block_page_product_detail_buy_form_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "
    ";
        // line 5
        echo "    ";
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5);
        // line 6
        echo "
    <form
        id=\"productDetailPageBuyProductForm\"
        action=\"";
        // line 9
        $this->displayBlock('page_product_detail_buy_form_action', $context, $blocks);
        echo "\"
        method=\"post\"
        class=\"buy-widget\"
        data-add-to-cart=\"true\">

        ";
        // line 14
        $this->displayBlock('page_product_detail_buy_form_inner_csrf', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context["buyable"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", [], "any", false, false, false, 18) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 18) <= 0)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 18) > 0));
        // line 19
        echo "        ";
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 99
        echo "    </form>
";
    }

    // line 9
    public function block_page_product_detail_buy_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
    }

    // line 14
    public function block_page_product_detail_buy_form_inner_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
        ";
    }

    // line 19
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        if (($context["buyable"] ?? null)) {
            // line 21
            echo "                <div class=\"form-row buy-widget-container\">
                    ";
            // line 22
            $this->displayBlock('page_product_detail_buy_quantity_container', $context, $blocks);
            // line 45
            echo "
                    ";
            // line 46
            $this->displayBlock('page_product_detail_buy_redirect_input', $context, $blocks);
            // line 57
            echo "
                    ";
            // line 58
            $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
            // line 75
            echo "
                    ";
            // line 76
            $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
            // line 84
            echo "
                    ";
            // line 85
            $this->displayBlock('page_product_detail_buy_button_container', $context, $blocks);
            // line 96
            echo "                </div>
            ";
        }
        // line 98
        echo "        ";
    }

    // line 22
    public function block_page_product_detail_buy_quantity_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                        <div class=\"col-4\">
                            ";
        // line 24
        $this->displayBlock('page_product_detail_buy_quantity', $context, $blocks);
        // line 43
        echo "                        </div>
                    ";
    }

    // line 24
    public function block_page_product_detail_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                                <select name=\"lineItems[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "][quantity]\"
                                        class=\"custom-select product-detail-quantity-select\">
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseSteps", [], "any", false, false, false, 27)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
            // line 28
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "\">
                                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "
                                            ";
            // line 30
            if (($context["quantity"] == 1)) {
                // line 31
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "packUnit", [], "any", false, false, false, 31)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "packUnit", [], "any", false, false, false, 31), "html", null, true);
                }
                // line 32
                echo "                                            ";
            } else {
                // line 33
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "packUnitPlural", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "packUnitPlural", [], "any", false, false, false, 34), "html", null, true);
                    echo "
                                                ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 35
($context["product"] ?? null), "packUnit", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "packUnit", [], "any", false, false, false, 36), "html", null, true);
                    echo "
                                                ";
                }
                // line 38
                echo "                                            ";
            }
            // line 39
            echo "                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </select>
                            ";
    }

    // line 46
    public function block_page_product_detail_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                        ";
        // line 48
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"frontend.detail.page\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               data-redirect-parameters=\"true\"
                               value='{\"productId\": \"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\"}'>
                    ";
    }

    // line 58
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "][id]\"
                               value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "][type]\"
                               value=\"product\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "][referencedId]\"
                               value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "][stackable]\"
                               value=\"1\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 72), "html", null, true);
        echo "][removable]\"
                               value=\"1\">
                    ";
    }

    // line 76
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                        <input type=\"hidden\"
                               name=\"product-name\"
                               value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"brand-name\"
                               value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 82), "getName", [], "method", false, false, false, 82), "html", null, true);
        echo "\">
                    ";
    }

    // line 85
    public function block_page_product_detail_buy_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                        <div class=\"col-8\">
                            ";
        // line 87
        $this->displayBlock('page_product_detail_buy_button', $context, $blocks);
        // line 94
        echo "                        </div>
                    ";
    }

    // line 87
    public function block_page_product_detail_buy_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                <button class=\"btn btn-primary btn-block btn-buy\"
                                        title=\"";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
        echo "\"
                                        aria-label=\"";
        // line 90
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
        echo "\">
                                    ";
        // line 91
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct"));
        echo "
                                </button>
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  342 => 91,  338 => 90,  334 => 89,  331 => 88,  327 => 87,  322 => 94,  320 => 87,  317 => 86,  313 => 85,  307 => 82,  301 => 79,  297 => 77,  293 => 76,  286 => 72,  280 => 69,  275 => 67,  271 => 66,  265 => 63,  260 => 61,  256 => 60,  253 => 59,  249 => 58,  243 => 55,  234 => 48,  232 => 47,  228 => 46,  223 => 41,  216 => 39,  213 => 38,  207 => 36,  205 => 35,  200 => 34,  197 => 33,  194 => 32,  188 => 31,  186 => 30,  182 => 29,  177 => 28,  173 => 27,  167 => 25,  163 => 24,  158 => 43,  156 => 24,  153 => 23,  149 => 22,  145 => 98,  141 => 96,  139 => 85,  136 => 84,  134 => 76,  131 => 75,  129 => 58,  126 => 57,  124 => 46,  121 => 45,  119 => 22,  116 => 21,  113 => 20,  109 => 19,  102 => 15,  98 => 14,  91 => 9,  86 => 99,  83 => 19,  81 => 18,  78 => 17,  76 => 14,  68 => 9,  63 => 6,  60 => 5,  57 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-form.html.twig");
    }
}
