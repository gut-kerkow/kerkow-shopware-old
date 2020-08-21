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

/* @Storefront/storefront/page/product-detail/buy-widget-price.html.twig */
class __TwigTemplate_40fb754ea583f4be1ca621c25e8636240153c3f4e780bdc3a1b7a39efbe2fc04 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_price_inner' => [$this, 'block_page_product_detail_price_inner'],
            'page_product_detail_price_block' => [$this, 'block_page_product_detail_price_block'],
            'page_product_detail_price_block_table' => [$this, 'block_page_product_detail_price_block_table'],
            'page_product_detail_price_block_table_head' => [$this, 'block_page_product_detail_price_block_table_head'],
            'page_product_detail_price_block_table_head_inner' => [$this, 'block_page_product_detail_price_block_table_head_inner'],
            'page_product_detail_price_block_table_body' => [$this, 'block_page_product_detail_price_block_table_body'],
            'page_product_detail_price_block_table_body_inner' => [$this, 'block_page_product_detail_price_block_table_body_inner'],
            'page_product_detail_price_block_table_body_row' => [$this, 'block_page_product_detail_price_block_table_body_row'],
            'page_product_detail_price_block_table_body_cell_quantity' => [$this, 'block_page_product_detail_price_block_table_body_cell_quantity'],
            'page_product_detail_price_block_table_body_cell_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_price'],
            'page_product_detail_price_block_table_body_cell_reference_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_reference_price'],
            'page_product_detail_price_content' => [$this, 'block_page_product_detail_price_content'],
            'page_product_detail_was_price' => [$this, 'block_page_product_detail_was_price'],
            'page_product_detail_was_price_badge' => [$this, 'block_page_product_detail_was_price_badge'],
            'page_product_detail_was_price_wrapper' => [$this, 'block_page_product_detail_was_price_wrapper'],
            'page_product_detail_price_unit' => [$this, 'block_page_product_detail_price_unit'],
            'page_product_detail_price_unit_label' => [$this, 'block_page_product_detail_price_unit_label'],
            'page_product_detail_price_unit_content' => [$this, 'block_page_product_detail_price_unit_content'],
            'page_product_detail_price_unit_reference_content' => [$this, 'block_page_product_detail_price_unit_reference_content'],
            'page_product_detail_price_unit_refrence_content' => [$this, 'block_page_product_detail_price_unit_refrence_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_price_inner', $context, $blocks);
    }

    public function block_page_product_detail_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 2), "calculatedPrices", [], "any", false, false, false, 2)) > 1)) {
            // line 3
            echo "        ";
            $this->displayBlock('page_product_detail_price_block', $context, $blocks);
            // line 76
            echo "    ";
        } else {
            // line 77
            echo "        ";
            $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 77), "calculatedPrice", [], "any", false, false, false, 77);
            // line 78
            echo "
        ";
            // line 79
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 79), "calculatedPrices", [], "any", false, false, false, 79)) == 1)) {
                // line 80
                echo "            ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 80), "calculatedPrices", [], "any", false, false, false, 80), "first", [], "any", false, false, false, 80);
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        <meta itemprop=\"price\"
              content=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 84), "html", null, true);
            echo "\">

        ";
            // line 86
            $this->displayBlock('page_product_detail_price_content', $context, $blocks);
            // line 110
            echo "
        ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 111), "purchaseUnit", [], "any", false, false, false, 111)) {
                // line 112
                echo "            ";
                $this->displayBlock('page_product_detail_price_unit', $context, $blocks);
                // line 140
                echo "        ";
            }
            // line 141
            echo "    ";
        }
    }

    // line 3
    public function block_page_product_detail_price_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"product-block-prices\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_price_block_table', $context, $blocks);
        // line 74
        echo "            </div>
        ";
    }

    // line 5
    public function block_page_product_detail_price_block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <table class=\"table table-sm table-bordered product-block-prices-table\">
                        ";
        // line 7
        $this->displayBlock('page_product_detail_price_block_table_head', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_product_detail_price_block_table_body', $context, $blocks);
        // line 72
        echo "                    </table>
                ";
    }

    // line 7
    public function block_page_product_detail_price_block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                            <thead class=\"product-block-prices-head\">
                                ";
        // line 9
        $this->displayBlock('page_product_detail_price_block_table_head_inner', $context, $blocks);
        // line 24
        echo "                            </thead>
                        ";
    }

    // line 9
    public function block_page_product_detail_price_block_table_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 12
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnQuantity"));
        echo "
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 15
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnPrice"));
        echo "
                                        </th>
                                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 17), "calculatedPrice", [], "any", false, false, false, 17), "referencePrice", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                ";
            // line 19
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnReferencePrice"));
            echo "
                                            </th>
                                        ";
        }
        // line 22
        echo "                                    </tr>
                                ";
    }

    // line 27
    public function block_page_product_detail_price_block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                            <tbody class=\"product-block-prices-body\">
                                ";
        // line 29
        $this->displayBlock('page_product_detail_price_block_table_body_inner', $context, $blocks);
        // line 70
        echo "                            </tbody>
                        ";
    }

    // line 29
    public function block_page_product_detail_price_block_table_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 30), "calculatedPrices", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 31
            echo "                                        ";
            $this->displayBlock('page_product_detail_price_block_table_body_row', $context, $blocks);
            // line 68
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                ";
    }

    // line 31
    public function block_page_product_detail_price_block_table_body_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                ";
        // line 36
        $this->displayBlock('page_product_detail_price_block_table_body_cell_quantity', $context, $blocks);
        // line 52
        echo "
                                                ";
        // line 53
        $this->displayBlock('page_product_detail_price_block_table_body_cell_price', $context, $blocks);
        // line 58
        echo "
                                                ";
        // line 59
        $this->displayBlock('page_product_detail_price_block_table_body_cell_reference_price', $context, $blocks);
        // line 66
        echo "                                            </tr>
                                        ";
    }

    // line 36
    public function block_page_product_detail_price_block_table_body_cell_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                                                    <th scope=\"row\" class=\"product-block-prices-cell\">
                                                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "activeCurrency", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" />
                                                        <meta itemprop=\"price\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoFrom"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>

                                                        ";
        } else {
            // line 47
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoUntil"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                                                        ";
        }
        // line 50
        echo "                                                    </th>
                                                ";
    }

    // line 53
    public function block_page_product_detail_price_block_table_body_cell_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                                    <td class=\"product-block-prices-cell\">
                                                        ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 55)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                                                    </td>
                                                ";
    }

    // line 59
    public function block_page_product_detail_price_block_table_body_cell_reference_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 60))) {
            // line 61
            echo "                                                        <td class=\"product-block-prices-cell\">
                                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "price", [], "any", false, false, false, 62)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "referenceUnit", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "unitName", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                                        </td>
                                                    ";
        }
        // line 65
        echo "                                                ";
    }

    // line 86
    public function block_page_product_detail_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        $context["listPrice"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 87), "priceRange", [], "any", false, false, false, 87)) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 87)));
        // line 88
        echo "
            <p class=\"product-detail-price";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 89) > 0)) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 90)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
            </p>

            ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 93) > 0)) {
            // line 94
            echo "                ";
            $this->displayBlock('page_product_detail_was_price', $context, $blocks);
            // line 108
            echo "            ";
        }
        // line 109
        echo "        ";
    }

    // line 94
    public function block_page_product_detail_was_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_was_price_badge', $context, $blocks);
        // line 99
        echo "
                    ";
        // line 100
        $this->displayBlock('page_product_detail_was_price_wrapper', $context, $blocks);
        // line 107
        echo "                ";
    }

    // line 96
    public function block_page_product_detail_was_price_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                        <span class=\"list-price-badge\">&#37;</span>
                    ";
    }

    // line 100
    public function block_page_product_detail_was_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                        <span class=\"product-detail-list-price-wrapper\">
                            <span class=\"list-price-price\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 102)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</span>

                            <span class=\"list-price-percentage\">";
        // line 104
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 104)]));
        echo "</span>
                        </span>
                    ";
    }

    // line 112
    public function block_page_product_detail_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                <div class=\"product-detail-price-unit\">
                    ";
        // line 114
        $this->displayBlock('page_product_detail_price_unit_label', $context, $blocks);
        // line 119
        echo "
                    ";
        // line 120
        $this->displayBlock('page_product_detail_price_unit_content', $context, $blocks);
        // line 125
        echo "
                    ";
        // line 126
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 126))) {
            // line 127
            echo "                        ";
            $this->displayBlock('page_product_detail_price_unit_reference_content', $context, $blocks);
            // line 137
            echo "                    ";
        }
        // line 138
        echo "                </div>
            ";
    }

    // line 114
    public function block_page_product_detail_price_unit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                        <span class=\"price-unit-label\">
                            ";
        // line 116
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceUnitName"));
        echo "
                        </span>
                    ";
    }

    // line 120
    public function block_page_product_detail_price_unit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                        <span class=\"price-unit-content\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 122), "purchaseUnit", [], "any", false, false, false, 122), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 122), "unit", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
        echo "
                        </span>
                    ";
    }

    // line 127
    public function block_page_product_detail_price_unit_reference_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "
                        ";
        // line 130
        echo "                        ";
        $this->displayBlock('page_product_detail_price_unit_refrence_content', $context, $blocks);
        // line 135
        echo "
                        ";
    }

    // line 130
    public function block_page_product_detail_price_unit_refrence_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                            <span class=\"price-unit-reference-content\">
                                (";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "price", [], "any", false, false, false, 132)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "referenceUnit", [], "any", false, false, false, 132), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "unitName", [], "any", false, false, false, 132), "html", null, true);
        echo ")
                            </span>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  529 => 132,  526 => 131,  522 => 130,  517 => 135,  514 => 130,  511 => 128,  507 => 127,  498 => 122,  495 => 121,  491 => 120,  484 => 116,  481 => 115,  477 => 114,  472 => 138,  469 => 137,  466 => 127,  464 => 126,  461 => 125,  459 => 120,  456 => 119,  454 => 114,  451 => 113,  447 => 112,  440 => 104,  434 => 102,  431 => 101,  427 => 100,  422 => 97,  418 => 96,  414 => 107,  412 => 100,  409 => 99,  407 => 96,  404 => 95,  400 => 94,  396 => 109,  393 => 108,  390 => 94,  388 => 93,  381 => 90,  375 => 89,  372 => 88,  369 => 87,  365 => 86,  361 => 65,  350 => 62,  347 => 61,  344 => 60,  340 => 59,  332 => 55,  329 => 54,  325 => 53,  320 => 50,  315 => 48,  310 => 47,  304 => 44,  299 => 43,  297 => 42,  291 => 39,  287 => 38,  284 => 37,  280 => 36,  275 => 66,  273 => 59,  270 => 58,  268 => 53,  265 => 52,  263 => 36,  257 => 32,  253 => 31,  249 => 69,  235 => 68,  232 => 31,  214 => 30,  210 => 29,  205 => 70,  203 => 29,  200 => 28,  196 => 27,  191 => 22,  185 => 19,  182 => 18,  180 => 17,  175 => 15,  169 => 12,  165 => 10,  161 => 9,  156 => 24,  154 => 9,  151 => 8,  147 => 7,  142 => 72,  140 => 27,  137 => 26,  135 => 7,  132 => 6,  128 => 5,  123 => 74,  121 => 5,  118 => 4,  114 => 3,  109 => 141,  106 => 140,  103 => 112,  101 => 111,  98 => 110,  96 => 86,  91 => 84,  87 => 82,  84 => 81,  81 => 80,  79 => 79,  76 => 78,  73 => 77,  70 => 76,  67 => 3,  64 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-price.html.twig");
    }
}
