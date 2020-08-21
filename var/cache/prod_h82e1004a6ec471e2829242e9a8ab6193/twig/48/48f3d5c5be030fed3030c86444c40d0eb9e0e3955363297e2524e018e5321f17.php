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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_ced644bfcc38cea31b648e8871476d01854a4cd91c4b26378a784684271a5141 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('page_product_detail_not_available', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 174
        echo "
        ";
        // line 175
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 195
        echo "    </div>
";
    }

    // line 3
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 10
        echo "
            ";
        // line 11
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 50
        echo "
            ";
        // line 51
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 55
        echo "        ";
    }

    // line 4
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5), "manufacturer", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <meta itemprop=\"brand\"
                          content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "manufacturer", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
                ";
        }
        // line 9
        echo "            ";
    }

    // line 11
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 12), "ean", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "ean", [], "any", false, false, false, 14), "html", null, true);
            echo "\"/>
                ";
        }
        // line 16
        echo "            ";
    }

    // line 18
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                <meta itemprop=\"mpn\"
                      content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "productNumber", [], "any", false, false, false, 20), "html", null, true);
        echo "\"/>
            ";
    }

    // line 23
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 26), "weight", [], "any", false, false, false, 26), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 28
        echo "            ";
    }

    // line 30
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "height", [], "any", false, false, false, 31)) {
            // line 32
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 33), "height", [], "any", false, false, false, 33), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 35
        echo "            ";
    }

    // line 37
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 38), "width", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 40), "width", [], "any", false, false, false, 40), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 42
        echo "            ";
    }

    // line 44
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 45), "length", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "length", [], "any", false, false, false, 47), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 49
        echo "            ";
    }

    // line 51
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 53), "releaseDate", [], "any", false, false, false, 53), "short", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53)), "html", null, true);
        echo "\"/>
            ";
    }

    // line 57
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "            ";
        // line 59
        echo "        ";
    }

    // line 61
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 64), "calculatedPrices", [], "any", false, false, false, 64)) > 1)) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 156
        echo "
                ";
        // line 157
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 164
        echo "
                ";
        // line 165
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 172
        echo "            </div>
        ";
    }

    // line 65
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 70
        echo "
                    ";
        // line 71
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 90
        echo "
                    ";
        // line 91
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 123
        echo "
                    ";
        // line 124
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 128
        echo "
                    ";
        // line 129
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 149
        echo "
                    ";
        // line 150
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 155
        echo "                ";
    }

    // line 66
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\"/>
                    ";
    }

    // line 71
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                        ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 72), "calculatedPrices", [], "any", false, false, false, 72)) > 1)) {
            // line 73
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 74
            echo "                            ";
            $context["highestPrice"] = false;
            // line 75
            echo "
                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 76), "calculatedPrices", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 77
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 77) < ($context["lowestPrice"] ?? null)))) {
                    // line 78
                    echo "                                    ";
                    $context["lowestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 78);
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 80) > ($context["highestPrice"] ?? null)))) {
                    // line 81
                    echo "                                    ";
                    $context["highestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 81);
                    // line 82
                    echo "                                ";
                }
                // line 83
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 87), "calculatedPrices", [], "any", false, false, false, 87)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 89
        echo "                    ";
    }

    // line 91
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 93), "translated", [], "any", false, false, false, 93), "shortName", [], "any", false, false, false, 93), "html", null, true);
        echo "\"/>
                    ";
    }

    // line 96
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 98
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 98)->display($context);
        // line 99
        echo "                        </div>
                    ";
    }

    // line 102
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 104) == "gross")) {
            // line 105
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 106
            echo "                            ";
        } else {
            // line 107
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 108
            echo "                            ";
        }
        // line 109
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 111
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 120
        echo "                            </p>
                        </div>
                    ";
    }

    // line 111
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 113), "core", [], "any", false, false, false, 113), "basicInformation", [], "any", false, false, false, 113), "shippingPaymentInfoPage", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       data-toggle=\"modal\"
                                       data-url=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 116), "core", [], "any", false, false, false, 116), "basicInformation", [], "any", false, false, false, 116), "shippingPaymentInfoPage", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">
                                        ";
        // line 117
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
    }

    // line 129
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 130), "ratingAverage", [], "any", false, false, false, 130) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 130), "core", [], "any", false, false, false, 130), "listing", [], "any", false, false, false, 130), "showReview", [], "any", false, false, false, 130))) {
            // line 131
            echo "                            <p class=\"product-detail-reviews\">
                                ";
            // line 132
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 132)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 133
($context["page"] ?? null), "product", [], "any", false, false, false, 133), "ratingAverage", [], "any", false, false, false, 133), "style" => "text-primary"]));
            // line 136
            echo "                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 140
            echo twig_escape_filter($this->env, json_encode(($context["remoteClickOptions"] ?? null)), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 143), "totalReviews", [], "any", false, false, false, 143), "html", null, true);
            echo "
                                    ";
            // line 144
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 144), "totalReviews", [], "any", false, false, false, 144)]));
            echo "
                                </a>
                            </p>
                        ";
        }
        // line 148
        echo "                    ";
    }

    // line 150
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 152
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 152)->display($context);
        // line 153
        echo "                        </div>
                    ";
    }

    // line 157
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 158), "parentId", [], "any", false, false, false, 158) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 158)) > 0))) {
            // line 159
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 160
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 160)->display($context);
            // line 161
            echo "                        </div>
                    ";
        }
        // line 163
        echo "                ";
    }

    // line 165
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 166), "active", [], "any", false, false, false, 166)) {
            // line 167
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 168
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 168)->display($context);
            // line 169
            echo "                        </div>
                    ";
        }
        // line 171
        echo "                ";
    }

    // line 175
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 176), "productNumber", [], "any", false, false, false, 176)) {
            // line 177
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 178
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 183
            echo "
                    ";
            // line 184
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 192
            echo "                </div>
            ";
        }
        // line 194
        echo "        ";
    }

    // line 178
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 180
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
    }

    // line 184
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 189), "productNumber", [], "any", false, false, false, 189), "html", null, true);
        echo "
                        </span>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  680 => 189,  674 => 186,  671 => 185,  667 => 184,  660 => 180,  657 => 179,  653 => 178,  649 => 194,  645 => 192,  643 => 184,  640 => 183,  638 => 178,  635 => 177,  632 => 176,  628 => 175,  624 => 171,  620 => 169,  618 => 168,  615 => 167,  612 => 166,  608 => 165,  604 => 163,  600 => 161,  598 => 160,  595 => 159,  592 => 158,  588 => 157,  583 => 153,  581 => 152,  578 => 151,  574 => 150,  570 => 148,  563 => 144,  559 => 143,  553 => 140,  547 => 136,  545 => 133,  544 => 132,  541 => 131,  538 => 130,  534 => 129,  527 => 117,  523 => 116,  518 => 114,  514 => 113,  511 => 112,  507 => 111,  501 => 120,  499 => 111,  495 => 109,  492 => 108,  489 => 107,  486 => 106,  483 => 105,  481 => 104,  478 => 103,  474 => 102,  469 => 99,  467 => 98,  464 => 97,  460 => 96,  454 => 93,  451 => 92,  447 => 91,  443 => 89,  438 => 87,  434 => 86,  430 => 85,  427 => 84,  421 => 83,  418 => 82,  415 => 81,  412 => 80,  409 => 79,  406 => 78,  403 => 77,  399 => 76,  396 => 75,  393 => 74,  390 => 73,  387 => 72,  383 => 71,  377 => 68,  374 => 67,  370 => 66,  366 => 155,  364 => 150,  361 => 149,  359 => 129,  356 => 128,  354 => 124,  351 => 123,  349 => 102,  346 => 101,  344 => 96,  341 => 95,  339 => 91,  336 => 90,  334 => 71,  331 => 70,  328 => 66,  324 => 65,  319 => 172,  317 => 165,  314 => 164,  312 => 157,  309 => 156,  307 => 65,  299 => 64,  295 => 62,  291 => 61,  287 => 59,  285 => 58,  281 => 57,  275 => 53,  272 => 52,  268 => 51,  264 => 49,  259 => 47,  256 => 46,  253 => 45,  249 => 44,  245 => 42,  240 => 40,  237 => 39,  234 => 38,  230 => 37,  226 => 35,  221 => 33,  218 => 32,  215 => 31,  211 => 30,  207 => 28,  202 => 26,  199 => 25,  196 => 24,  192 => 23,  186 => 20,  183 => 19,  179 => 18,  175 => 16,  170 => 14,  167 => 13,  164 => 12,  160 => 11,  156 => 9,  151 => 7,  148 => 6,  145 => 5,  141 => 4,  137 => 55,  135 => 51,  132 => 50,  130 => 44,  127 => 43,  125 => 37,  122 => 36,  120 => 30,  117 => 29,  115 => 23,  112 => 22,  110 => 18,  107 => 17,  105 => 11,  102 => 10,  99 => 4,  95 => 3,  90 => 195,  88 => 175,  85 => 174,  83 => 61,  80 => 60,  78 => 57,  75 => 56,  73 => 3,  70 => 2,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
