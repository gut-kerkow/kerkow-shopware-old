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

/* @Storefront/storefront/page/product-detail/meta.html.twig */
class __TwigTemplate_18052c3d140b1553335fc63cfed16265d2fde3b4ca34a905826465a05f44d053 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/page/product-detail/meta.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <meta property=\"og:type\"
          content=\"product\"/>
    <meta property=\"og:site_name\"
          content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 7), "core", [], "any", false, false, false, 7), "basicInformation", [], "any", false, false, false, 7), "shopName", [], "any", false, false, false, 7), "html", null, true);
        echo "\"/>
    <meta property=\"og:url\"
          content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"/>
    <meta property=\"og:title\"
          content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>

    <meta property=\"og:description\"
          content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\"
          content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 16), "cover", [], "any", false, false, false, 16), "media", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/>

    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <meta property=\"product:brand\"
              content=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "manufacturer", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"/>
    ";
        }
        // line 22
        echo "    <meta property=\"product:price\"
          content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "calculatedPrice", [], "any", false, false, false, 23), "unitPrice", [], "any", false, false, false, 23)), "html", null, true);
        echo "\"/>
    <meta property=\"product:product_link\"
          content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\"/>

    <meta name=\"twitter:card\"
          content=\"product\"/>
    <meta name=\"twitter:site\"
          content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 30), "core", [], "any", false, false, false, 30), "basicInformation", [], "any", false, false, false, 30), "shopName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:title\"
          content=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:description\"
          content=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:image\"
          content=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 36), "cover", [], "any", false, false, false, 36), "media", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
";
    }

    // line 39
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39)) {
            echo " - ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 39), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 39), "html", null, true);
                if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39)) != $context["variation"])) {
                    echo " | ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 41
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  153 => 41,  130 => 39,  124 => 36,  119 => 34,  114 => 32,  109 => 30,  101 => 25,  96 => 23,  93 => 22,  88 => 20,  85 => 19,  83 => 18,  78 => 16,  73 => 14,  67 => 11,  62 => 9,  57 => 7,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/meta.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/meta.html.twig");
    }
}
