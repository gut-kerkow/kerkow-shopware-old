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

/* @Storefront/storefront/page/product-detail/tabs.html.twig */
class __TwigTemplate_24132eaadbd929f9cee2f4d6cd1a5f3863016c3c47ba40d8d9658a3572a556bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_tabs_inner' => [$this, 'block_page_product_detail_tabs_inner'],
            'page_product_detail_tabs_navigation' => [$this, 'block_page_product_detail_tabs_navigation'],
            'page_product_detail_tabs_navigation_container' => [$this, 'block_page_product_detail_tabs_navigation_container'],
            'page_product_detail_tabs_navigation_description' => [$this, 'block_page_product_detail_tabs_navigation_description'],
            'page_product_detail_tabs_navigation_review' => [$this, 'block_page_product_detail_tabs_navigation_review'],
            'page_product_detail_tabs_content' => [$this, 'block_page_product_detail_tabs_content'],
            'page_product_detail_tabs_content_container' => [$this, 'block_page_product_detail_tabs_content_container'],
            'page_product_detail_tabs_content_description' => [$this, 'block_page_product_detail_tabs_content_description'],
            'page_product_detail_tabs_content_review' => [$this, 'block_page_product_detail_tabs_content_review'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_tabs_inner', $context, $blocks);
    }

    public function block_page_product_detail_tabs_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card card-tabs\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_tabs_navigation', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('page_product_detail_tabs_content', $context, $blocks);
        // line 90
        echo "    </div>
";
    }

    // line 3
    public function block_page_product_detail_tabs_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"card-header product-detail-tab-navigation\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_tabs_navigation_container', $context, $blocks);
        // line 60
        echo "            </div>
        ";
    }

    // line 5
    public function block_page_product_detail_tabs_navigation_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-tabs\"
                        role=\"tablist\">
                        ";
        // line 9
        $this->displayBlock('page_product_detail_tabs_navigation_description', $context, $blocks);
        // line 39
        echo "                        ";
        $this->displayBlock('page_product_detail_tabs_navigation_review', $context, $blocks);
        // line 58
        echo "                    </ul>
                ";
    }

    // line 9
    public function block_page_product_detail_tabs_navigation_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 11
        if (((($context["ratingSuccess"] ?? null) != 1) && (($context["ratingSuccess"] ?? null) !=  -1))) {
            echo "active";
        }
        echo " product-detail-tab-navigation-link\"
                                   id=\"description-tab\"
                                   data-toggle=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#description-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"description-tab-pane\"
                                   aria-selected=\"true\">
                                    <span>";
        // line 19
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsDescription"));
        echo "</span>
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        ";
        // line 21
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 21);
        })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
        // line 22
        echo "                                    </span>
                                    ";
        // line 23
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23)) > 0)) {
            // line 24
            echo "                                        <span class=\"product-detail-tab-preview\">
                                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "description", [], "any", false, false, false, 25))), "truncate", [0 => 125, 1 => "…"], "method", false, false, false, 25), "html", null, true);
            echo "

                                            ";
            // line 31
            echo "                                            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31)) >= 126)) {
                // line 32
                echo "                                                <span class=\"product-detail-tab-preview-more\">";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsPreviewMore"));
                echo "</span>
                                            ";
            }
            // line 34
            echo "                                        </span>
                                    ";
        }
        // line 36
        echo "                                </a>
                            </li>
                        ";
    }

    // line 39
    public function block_page_product_detail_tabs_navigation_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 40), "core", [], "any", false, false, false, 40), "listing", [], "any", false, false, false, 40), "showReview", [], "any", false, false, false, 40)) {
            // line 41
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
            // line 42
            if (((($context["ratingSuccess"] ?? null) == 1) || (($context["ratingSuccess"] ?? null) ==  -1))) {
                echo "active";
            }
            echo " product-detail-tab-navigation-link\"
                                       id=\"review-tab\"
                                       data-toggle=\"tab\"
                                       data-offcanvas-tabs=\"true\"
                                       href=\"#review-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"review-tab-pane\"
                                       aria-selected=\"true\">
                                        ";
            // line 50
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsReview"));
            echo "
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            ";
            // line 52
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 52);
            })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
            // line 53
            echo "                                        </span>
                                    </a>
                                </li>
                            ";
        }
        // line 57
        echo "                        ";
    }

    // line 63
    public function block_page_product_detail_tabs_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            <div class=\"product-detail-tabs-content card-body\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_tabs_content_container', $context, $blocks);
        // line 88
        echo "            </div>
        ";
    }

    // line 65
    public function block_page_product_detail_tabs_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                    <div class=\"tab-content\">
                        ";
        // line 67
        $this->displayBlock('page_product_detail_tabs_content_description', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        $this->displayBlock('page_product_detail_tabs_content_review', $context, $blocks);
        // line 86
        echo "                    </div>
                ";
    }

    // line 67
    public function block_page_product_detail_tabs_content_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                            <div class=\"tab-pane fade show ";
        if (((($context["ratingSuccess"] ?? null) != 1) && (($context["ratingSuccess"] ?? null) !=  -1))) {
            echo "active";
        }
        echo "\"
                                 id=\"description-tab-pane\"
                                 role=\"tabpanel\"
                                 aria-labelledby=\"description-tab\">
                                ";
        // line 72
        $this->loadTemplate("@Storefront/storefront/page/product-detail/description.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 72)->display($context);
        // line 73
        echo "                            </div>
                        ";
    }

    // line 76
    public function block_page_product_detail_tabs_content_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 77), "core", [], "any", false, false, false, 77), "listing", [], "any", false, false, false, 77), "showReview", [], "any", false, false, false, 77)) {
            // line 78
            echo "                                <div class=\"tab-pane fade show ";
            if (((($context["ratingSuccess"] ?? null) == 1) || (($context["ratingSuccess"] ?? null) ==  -1))) {
                echo "active";
            }
            echo "\"
                                     id=\"review-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"review-tab\">
                                    ";
            // line 82
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 82)->display(twig_array_merge($context, ["reviews" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 82)]));
            // line 83
            echo "                                </div>
                            ";
        }
        // line 85
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 85,  285 => 83,  283 => 82,  273 => 78,  270 => 77,  266 => 76,  261 => 73,  259 => 72,  249 => 68,  245 => 67,  240 => 86,  238 => 76,  235 => 75,  233 => 67,  230 => 66,  226 => 65,  221 => 88,  219 => 65,  216 => 64,  212 => 63,  208 => 57,  202 => 53,  194 => 52,  189 => 50,  176 => 42,  173 => 41,  170 => 40,  166 => 39,  160 => 36,  156 => 34,  150 => 32,  147 => 31,  142 => 25,  139 => 24,  137 => 23,  134 => 22,  126 => 21,  121 => 19,  108 => 11,  105 => 10,  101 => 9,  96 => 58,  93 => 39,  91 => 9,  86 => 6,  82 => 5,  77 => 60,  75 => 5,  72 => 4,  68 => 3,  63 => 90,  61 => 63,  58 => 62,  56 => 3,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/tabs.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/tabs.html.twig");
    }
}
