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

/* @Storefront/storefront/page/product-detail/index.html.twig */
class __TwigTemplate_50d7aa869ac2da37f786dd34ec416a9b5c7b47cc891864c918894a111c5a39fa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail' => [$this, 'block_page_product_detail'],
            'page_product_detail_inner' => [$this, 'block_page_product_detail_inner'],
            'page_product_detail_content' => [$this, 'block_page_product_detail_content'],
            'page_product_detail_breadcrumb' => [$this, 'block_page_product_detail_breadcrumb'],
            'page_product_detail_headline' => [$this, 'block_page_product_detail_headline'],
            'page_product_detail_main' => [$this, 'block_page_product_detail_main'],
            'page_product_detail_media' => [$this, 'block_page_product_detail_media'],
            'page_product_detail_buy' => [$this, 'block_page_product_detail_buy'],
            'page_product_detail_tabs' => [$this, 'block_page_product_detail_tabs'],
            'page_product_detail_cross_selling' => [$this, 'block_page_product_detail_cross_selling'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/meta.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayBlock('page_product_detail', $context, $blocks);
    }

    public function block_page_product_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            ";
        // line 13
        $this->displayBlock('page_product_detail_inner', $context, $blocks);
        // line 81
        echo "        </div>
    ";
    }

    // line 13
    public function block_page_product_detail_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        $this->displayBlock('page_product_detail_content', $context, $blocks);
        // line 66
        echo "
                ";
        // line 67
        $this->displayBlock('page_product_detail_tabs', $context, $blocks);
        // line 72
        echo "
                ";
        // line 73
        $this->displayBlock('page_product_detail_cross_selling', $context, $blocks);
        // line 80
        echo "            ";
    }

    // line 14
    public function block_page_product_detail_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    <div class=\"product-detail-content\">
                        ";
        // line 16
        $this->displayBlock('page_product_detail_breadcrumb', $context, $blocks);
        // line 25
        echo "                        ";
        $this->displayBlock('page_product_detail_headline', $context, $blocks);
        // line 30
        echo "
                        ";
        // line 31
        $context["mediaItems"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "media", [], "any", false, false, false, 31), "media", [], "any", false, false, false, 31);
        // line 32
        echo "
                        ";
        // line 33
        $this->displayBlock('page_product_detail_main', $context, $blocks);
        // line 64
        echo "                    </div>
                ";
    }

    // line 16
    public function block_page_product_detail_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            <div class=\"breadcrumb product-breadcrumb container\">
                                ";
        // line 18
        $this->loadTemplate("@Storefront/storefront/component/product/breadcrumb.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 18)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["page"] ?? null), "header", [], "any", false, false, false, 19), "navigation", [], "any", false, false, false, 19), "tree", [], "any", false, false, false, 19), "categoryTree" => twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["page"] ?? null), "product", [], "any", false, false, false, 20), "categoryTree", [], "any", false, false, false, 20)), "product" => twig_get_attribute($this->env, $this->source,         // line 21
($context["page"] ?? null), "product", [], "any", false, false, false, 21)]));
        // line 23
        echo "                            </div>
                        ";
    }

    // line 25
    public function block_page_product_detail_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                            <div class=\"row align-items-center product-detail-headline\">
                                ";
        // line 27
        $this->loadTemplate("@Storefront/storefront/page/product-detail/headline.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 27)->display($context);
        // line 28
        echo "                            </div>
                        ";
    }

    // line 33
    public function block_page_product_detail_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                            <div class=\"row product-detail-main\">
                                ";
        // line 35
        $this->displayBlock('page_product_detail_media', $context, $blocks);
        // line 56
        echo "
                                ";
        // line 57
        $this->displayBlock('page_product_detail_buy', $context, $blocks);
        // line 62
        echo "                            </div>
                        ";
    }

    // line 35
    public function block_page_product_detail_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                                    <div class=\"col-lg-7 product-detail-media\">
                                        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 37), "media", [], "any", false, false, false, 37)) {
            // line 38
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/element/cms-element-image-gallery.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 38)->display(twig_array_merge($context, ["mediaItems" =>             // line 39
($context["mediaItems"] ?? null), "zoom" => true, "zoomModal" => true, "displayMode" => "contain", "gutter" => 5, "minHeight" => "430px", "navigationArrows" => "inside", "navigationDots" => "inside", "galleryPosition" => "left", "isProduct" => true, "fallbackImageTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 49
($context["page"] ?? null), "product", [], "any", false, false, false, 49), "translated", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "startIndexThumbnails" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 50
($context["page"] ?? null), "product", [], "any", false, false, false, 50), "cover", [], "any", false, false, false, 50), "position", [], "any", false, false, false, 50) + 1), "startIndexSlider" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
($context["page"] ?? null), "product", [], "any", false, false, false, 51), "cover", [], "any", false, false, false, 51), "position", [], "any", false, false, false, 51) + 1)]));
            // line 53
            echo "                                        ";
        }
        // line 54
        echo "                                    </div>
                                ";
    }

    // line 57
    public function block_page_product_detail_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                    <div class=\"col-lg-5 product-detail-buy\">
                                        ";
        // line 59
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 59)->display($context);
        // line 60
        echo "                                    </div>
                                ";
    }

    // line 67
    public function block_page_product_detail_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                    <div class=\"product-detail-tabs\">
                        ";
        // line 69
        $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 69)->display($context);
        // line 70
        echo "                    </div>
                ";
    }

    // line 73
    public function block_page_product_detail_cross_selling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                    <div class=\"product-detail-tabs product-detail-cross-selling\">
                        ";
        // line 75
        $this->loadTemplate("@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 75)->display(twig_to_array(["crossSellings" => twig_get_attribute($this->env, $this->source,         // line 76
($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 76)]));
        // line 78
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 78,  249 => 76,  248 => 75,  245 => 74,  241 => 73,  236 => 70,  234 => 69,  231 => 68,  227 => 67,  222 => 60,  220 => 59,  217 => 58,  213 => 57,  208 => 54,  205 => 53,  203 => 51,  202 => 50,  201 => 49,  200 => 39,  198 => 38,  196 => 37,  193 => 36,  189 => 35,  184 => 62,  182 => 57,  179 => 56,  177 => 35,  174 => 34,  170 => 33,  165 => 28,  163 => 27,  160 => 26,  156 => 25,  151 => 23,  149 => 21,  148 => 20,  147 => 19,  146 => 18,  143 => 17,  139 => 16,  134 => 64,  132 => 33,  129 => 32,  127 => 31,  124 => 30,  121 => 25,  119 => 16,  116 => 15,  112 => 14,  108 => 80,  106 => 73,  103 => 72,  101 => 67,  98 => 66,  95 => 14,  91 => 13,  86 => 81,  84 => 13,  78 => 9,  70 => 8,  66 => 7,  61 => 4,  57 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/index.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/index.html.twig");
    }
}
