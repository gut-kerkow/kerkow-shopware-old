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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_837118e9c8b80bcc14013a84cf71fd5ecfc59b439420919998435d12a01e2d42 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating' => [$this, 'block_component_filter_panel_item_rating'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"filter-panel-offcanvas-header\">
            <h3 class=\"filter-panel-offcanvas-only\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "</h3>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                ";
        // line 7
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter-panel.html.twig", 7);
        })())->display(twig_array_merge($context, ["size" => "md", "name" => "x"]));
        // line 8
        echo "            </div>
        </div>
    ";
    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            echo " is--sidebar";
        }
        echo "\">
            ";
        // line 15
        $this->displayBlock('component_filter_panel_items_container', $context, $blocks);
        // line 87
        echo "
            ";
        // line 88
        $this->displayBlock('component_filter_panel_active_container', $context, $blocks);
        // line 93
        echo "        </div>
     ";
    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"filter-panel-items-container\">

                    ";
        // line 18
        $this->displayBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 30
        echo "
                    ";
        // line 31
        $this->displayBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 48
        echo "
                    ";
        // line 49
        $this->displayBlock('component_filter_panel_item_price', $context, $blocks);
        // line 63
        echo "
                    ";
        // line 64
        $this->displayBlock('component_filter_panel_item_rating', $context, $blocks);
        // line 74
        echo "
                    ";
        // line 75
        $this->displayBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 85
        echo "                </div>
            ";
    }

    // line 18
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        ";
        // line 20
        echo "                        ";
        $context["manufacturers"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 20), "get", [0 => "manufacturer"], "method", false, false, false, 20);
        // line 21
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 22)->display(twig_array_merge($context, ["elements" => twig_get_attribute($this->env, $this->source,             // line 23
($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 23), "sidebar" =>             // line 24
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName"))]));
            // line 28
            echo "                        ";
        }
        // line 29
        echo "                    ";
    }

    // line 31
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                        ";
        // line 33
        echo "                        ";
        $context["properties"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 33), "get", [0 => "properties"], "method", false, false, false, 33);
        // line 34
        echo "
                        ";
        // line 35
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 35))) {
            // line 36
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 36));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 37
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 37)->display(twig_array_merge($context, ["elements" => twig_get_attribute($this->env, $this->source,                 // line 38
$context["property"], "options", [], "any", false, false, false, 38), "sidebar" =>                 // line 39
($context["sidebar"] ?? null), "name" => "properties", "displayName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 41
$context["property"], "translated", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "displayType" => twig_get_attribute($this->env, $this->source,                 // line 42
$context["property"], "displayType", [], "any", false, false, false, 42), "pluginSelector" => "filter-property-select"]));
                // line 45
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        // line 47
        echo "                    ";
    }

    // line 49
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                        ";
        $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 50), "get", [0 => "price"], "method", false, false, false, 50);
        // line 51
        echo "
                        ";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 52) > 0) && (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 52) > 0))) {
            // line 53
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 53)->display(twig_array_merge($context, ["price" =>             // line 54
($context["price"] ?? null), "sidebar" =>             // line 55
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName"))]));
            // line 61
            echo "                        ";
        }
        // line 62
        echo "                    ";
    }

    // line 64
    public function block_component_filter_panel_item_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                        ";
        $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 65), "get", [0 => "rating"], "method", false, false, false, 65);
        // line 66
        echo "
                        ";
        // line 67
        if ( !twig_test_empty(($context["rating"] ?? null))) {
            // line 68
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 68)->display(twig_array_merge($context, ["name" => "rating", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName"))]));
            // line 72
            echo "                        ";
        }
        // line 73
        echo "                    ";
    }

    // line 75
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                        ";
        $context["shippingFree"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 76), "get", [0 => "shipping-free"], "method", false, false, false, 76);
        // line 77
        echo "
                        ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 78) > 0)) {
            // line 79
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 79)->display(twig_array_merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName"))]));
            // line 83
            echo "                        ";
        }
        // line 84
        echo "                    ";
    }

    // line 88
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 90
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 91
        echo "                </div>
            ";
    }

    // line 90
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 90,  312 => 91,  310 => 90,  307 => 89,  303 => 88,  299 => 84,  296 => 83,  293 => 79,  291 => 78,  288 => 77,  285 => 76,  281 => 75,  277 => 73,  274 => 72,  271 => 68,  269 => 67,  266 => 66,  263 => 65,  259 => 64,  255 => 62,  252 => 61,  250 => 55,  249 => 54,  247 => 53,  245 => 52,  242 => 51,  239 => 50,  235 => 49,  231 => 47,  228 => 46,  214 => 45,  212 => 42,  211 => 41,  210 => 39,  209 => 38,  207 => 37,  189 => 36,  187 => 35,  184 => 34,  181 => 33,  179 => 32,  175 => 31,  171 => 29,  168 => 28,  166 => 24,  165 => 23,  163 => 22,  160 => 21,  157 => 20,  155 => 19,  151 => 18,  146 => 85,  144 => 75,  141 => 74,  139 => 64,  136 => 63,  134 => 49,  131 => 48,  129 => 31,  126 => 30,  124 => 18,  120 => 16,  116 => 15,  111 => 93,  109 => 88,  106 => 87,  104 => 15,  97 => 14,  93 => 13,  87 => 8,  79 => 7,  73 => 4,  70 => 3,  66 => 2,  61 => 13,  58 => 11,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
