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

/* @Storefront/storefront/page/product-detail/description.html.twig */
class __TwigTemplate_6f05f26d4fa55fc51b5575481aa9f2b6f144b73be331eff65f316cb9f40c47b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'page_product_detail_description_container' => [$this, 'block_page_product_detail_description_container'],
            'page_product_detail_description_title' => [$this, 'block_page_product_detail_description_title'],
            'page_product_detail_description_content' => [$this, 'block_page_product_detail_description_content'],
            'page_product_detail_description_content_text' => [$this, 'block_page_product_detail_description_content_text'],
            'page_product_detail_description_content_properties' => [$this, 'block_page_product_detail_description_content_properties'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/page/product-detail/description.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('page_product_detail_description_container', $context, $blocks);
    }

    public function block_page_product_detail_description_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"product-detail-description tab-pane-container\">
            ";
        // line 6
        $this->displayBlock('page_product_detail_description_title', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_product_detail_description_content', $context, $blocks);
        // line 26
        echo "        </div>
    ";
    }

    // line 6
    public function block_page_product_detail_description_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"h3 product-detail-description-title\">
                    ";
        // line 8
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.descriptionTitle"));
        echo " \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 8), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
                </div>
            ";
    }

    // line 12
    public function block_page_product_detail_description_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                ";
        $this->displayBlock('page_product_detail_description_content_text', $context, $blocks);
        // line 19
        echo "
                ";
        // line 20
        $this->displayBlock('page_product_detail_description_content_properties', $context, $blocks);
        // line 25
        echo "            ";
    }

    // line 13
    public function block_page_product_detail_description_content_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                    <div class=\"product-detail-description-text\"
                         itemprop=\"description\">
                        ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 16), "translated", [], "any", false, false, false, 16), "description", [], "any", false, false, false, 16);
        echo "
                    </div>
                ";
    }

    // line 20
    public function block_page_product_detail_description_content_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 21), "sortedProperties", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/page/product-detail/properties.html.twig", "@Storefront/storefront/page/product-detail/description.html.twig", 22)->display($context);
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 24,  135 => 23,  132 => 22,  129 => 21,  125 => 20,  118 => 16,  114 => 14,  110 => 13,  106 => 25,  104 => 20,  101 => 19,  98 => 13,  94 => 12,  85 => 8,  82 => 7,  78 => 6,  73 => 26,  71 => 12,  68 => 11,  66 => 6,  63 => 5,  55 => 4,  51 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/description.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/description.html.twig");
    }
}
