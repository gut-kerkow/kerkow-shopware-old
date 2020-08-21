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

/* @Storefront/storefront/page/product-detail/headline.html.twig */
class __TwigTemplate_795b55e3b6f633415fc084d7ca1e80084d2e665d1b132ff748d55da3969f5c2a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_headline_inner' => [$this, 'block_page_product_detail_headline_inner'],
            'page_product_detail_name_container' => [$this, 'block_page_product_detail_name_container'],
            'page_product_detail_name' => [$this, 'block_page_product_detail_name'],
            'page_product_detail_manufacturer' => [$this, 'block_page_product_detail_manufacturer'],
            'page_product_detail_manufacturer_inner' => [$this, 'block_page_product_detail_manufacturer_inner'],
            'page_product_detail_manufacturer_link' => [$this, 'block_page_product_detail_manufacturer_link'],
            'page_product_detail_manufacturer_logo' => [$this, 'block_page_product_detail_manufacturer_logo'],
            'page_product_detail_manufacturer_text' => [$this, 'block_page_product_detail_manufacturer_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_headline_inner', $context, $blocks);
    }

    public function block_page_product_detail_headline_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('page_product_detail_name_container', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('page_product_detail_manufacturer', $context, $blocks);
    }

    // line 2
    public function block_page_product_detail_name_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"col product-detail-name-container\">
            ";
        // line 4
        $this->displayBlock('page_product_detail_name', $context, $blocks);
        // line 10
        echo "        </div>
    ";
    }

    // line 4
    public function block_page_product_detail_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <h1 class=\"product-detail-name\"
                    itemprop=\"name\">
                    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
                </h1>
            ";
    }

    // line 13
    public function block_page_product_detail_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "manufacturer", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"col-md-auto product-detail-manufacturer\">
                ";
            // line 16
            $this->displayBlock('page_product_detail_manufacturer_inner', $context, $blocks);
            // line 35
            echo "            </div>
        ";
        }
        // line 37
        echo "    ";
    }

    // line 16
    public function block_page_product_detail_manufacturer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    ";
        $this->displayBlock('page_product_detail_manufacturer_link', $context, $blocks);
        // line 34
        echo "                ";
    }

    // line 17
    public function block_page_product_detail_manufacturer_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                           class=\"product-detail-manufacturer-link\"
                           title=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "manufacturer", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
                            ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 21), "manufacturer", [], "any", false, false, false, 21), "media", [], "any", false, false, false, 21)) {
            // line 22
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_logo', $context, $blocks);
            // line 27
            echo "                            ";
        } else {
            // line 28
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_text', $context, $blocks);
            // line 31
            echo "                            ";
        }
        // line 32
        echo "                        </a>
                    ";
    }

    // line 22
    public function block_page_product_detail_manufacturer_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "manufacturer", [], "any", false, false, false, 23), "media", [], "any", false, false, false, 23)), "html", null, true);
        echo "\"
                                         class=\"product-detail-manufacturer-logo\"
                                         alt=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "manufacturer", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "\"/>
                                ";
    }

    // line 28
    public function block_page_product_detail_manufacturer_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 29), "manufacturer", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "
                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/headline.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 29,  171 => 28,  165 => 25,  159 => 23,  155 => 22,  150 => 32,  147 => 31,  144 => 28,  141 => 27,  138 => 22,  136 => 21,  132 => 20,  126 => 18,  122 => 17,  118 => 34,  115 => 17,  111 => 16,  107 => 37,  103 => 35,  101 => 16,  98 => 15,  95 => 14,  91 => 13,  84 => 7,  80 => 5,  76 => 4,  71 => 10,  69 => 4,  66 => 3,  62 => 2,  58 => 13,  55 => 12,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/headline.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/headline.html.twig");
    }
}
