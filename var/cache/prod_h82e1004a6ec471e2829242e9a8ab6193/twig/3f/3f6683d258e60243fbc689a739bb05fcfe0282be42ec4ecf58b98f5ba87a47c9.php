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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_7e011bcb4a75ccaca2e8a6f8ff4c8355059e9df0c4b8d1d62ede544813b2652e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = json_encode(["page" => ($context["currentPage"] ?? null)]);
        // line 3
        echo "
";
        // line 4
        $context["listingPagination"] = ["sidebar" =>         // line 5
($context["sidebar"] ?? null), "params" =>         // line 6
($context["params"] ?? null), "dataUrl" =>         // line 7
($context["dataUrl"] ?? null), "filterUrl" =>         // line 8
($context["filterUrl"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"))]];
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('product_listing', $context, $blocks);
    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='";
        // line 17
        echo twig_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
         data-listing=\"true\"
         data-listing-options='";
        // line 19
        echo twig_escape_filter($this->env, json_encode(($context["listingPagination"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 21
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 84
        echo "    </div>
";
    }

    // line 21
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <div class=\"cms-element-product-listing\">
                ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 23) > 0)) {
            // line 24
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 42
            echo "                ";
        }
        // line 43
        echo "
                ";
        // line 44
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 73
        echo "
                ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 74) > twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 74))) {
            // line 75
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 81
            echo "                ";
        }
        // line 82
        echo "            </div>
        ";
    }

    // line 24
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 27
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 33
        echo "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 36
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 39
        echo "                            </div>
                        </div>
                    ";
    }

    // line 27
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 28)->display(twig_array_merge($context, ["entities" =>         // line 29
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 30
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 30)]));
        // line 32
        echo "                                ";
    }

    // line 36
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 37)->display(twig_array_merge($context, ["current" => twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 37), "sortings" => twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "sortings", [], "any", false, false, false, 37)]));
        // line 38
        echo "                                ";
    }

    // line 44
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 46) > 0)) {
            // line 47
            echo "                            ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 59
            echo "                        ";
        } else {
            // line 60
            echo "                            ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 70
            echo "                        ";
        }
        // line 71
        echo "                    </div>
                ";
    }

    // line 47
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "                                    <div class=\"cms-listing-col ";
            echo twig_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 50
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 56
            echo "                                    </div>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            ";
    }

    // line 50
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 51)->display(twig_array_merge($context, ["layout" =>         // line 52
($context["boxLayout"] ?? null), "displayMode" =>         // line 53
($context["displayMode"] ?? null)]));
        // line 55
        echo "                                        ";
    }

    // line 60
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 62
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 68
        echo "                                </div>
                            ";
    }

    // line 62
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 63)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 67
        echo "                                    ";
    }

    // line 75
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 76)->display(twig_array_merge($context, ["entities" =>         // line 77
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 78
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 78)]));
        // line 80
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 80,  294 => 78,  293 => 77,  291 => 76,  287 => 75,  283 => 67,  280 => 63,  276 => 62,  271 => 68,  269 => 62,  266 => 61,  262 => 60,  258 => 55,  256 => 53,  255 => 52,  253 => 51,  249 => 50,  245 => 58,  230 => 56,  228 => 50,  223 => 49,  205 => 48,  201 => 47,  196 => 71,  193 => 70,  190 => 60,  187 => 59,  184 => 47,  182 => 46,  179 => 45,  175 => 44,  171 => 38,  168 => 37,  164 => 36,  160 => 32,  158 => 30,  157 => 29,  155 => 28,  151 => 27,  145 => 39,  143 => 36,  138 => 33,  136 => 27,  132 => 25,  128 => 24,  123 => 82,  120 => 81,  117 => 75,  115 => 74,  112 => 73,  110 => 44,  107 => 43,  104 => 42,  101 => 24,  99 => 23,  96 => 22,  92 => 21,  87 => 84,  85 => 21,  80 => 19,  75 => 17,  71 => 15,  64 => 14,  61 => 13,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/listing.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
