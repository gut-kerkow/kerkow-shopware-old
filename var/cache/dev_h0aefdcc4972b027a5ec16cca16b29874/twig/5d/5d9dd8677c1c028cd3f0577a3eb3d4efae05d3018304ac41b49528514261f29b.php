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
class __TwigTemplate_fe8df3619eb82dfc6211d3ddcc6a75785e7fd066aae66fbf1ce1fe3e440ae969 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter-panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter-panel.html.twig"));

        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel"));

        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_element"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_manufacturer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_manufacturer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_properties"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_properties"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_price"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_component_filter_panel_item_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_rating"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_shipping_free"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_shipping_free"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container"));

        // line 89
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 90
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 91
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container_inner"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  449 => 90,  438 => 91,  436 => 90,  433 => 89,  423 => 88,  413 => 84,  410 => 83,  407 => 79,  405 => 78,  402 => 77,  399 => 76,  389 => 75,  379 => 73,  376 => 72,  373 => 68,  371 => 67,  368 => 66,  365 => 65,  355 => 64,  345 => 62,  342 => 61,  340 => 55,  339 => 54,  337 => 53,  335 => 52,  332 => 51,  329 => 50,  319 => 49,  309 => 47,  306 => 46,  292 => 45,  290 => 42,  289 => 41,  288 => 39,  287 => 38,  285 => 37,  267 => 36,  265 => 35,  262 => 34,  259 => 33,  257 => 32,  247 => 31,  237 => 29,  234 => 28,  232 => 24,  231 => 23,  229 => 22,  226 => 21,  223 => 20,  221 => 19,  211 => 18,  200 => 85,  198 => 75,  195 => 74,  193 => 64,  190 => 63,  188 => 49,  185 => 48,  183 => 31,  180 => 30,  178 => 18,  174 => 16,  164 => 15,  153 => 93,  151 => 88,  148 => 87,  146 => 15,  139 => 14,  129 => 13,  117 => 8,  109 => 7,  103 => 4,  100 => 3,  90 => 2,  79 => 13,  76 => 11,  73 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_filter_panel %}
    {% block component_filter_panel_header %}
        <div class=\"filter-panel-offcanvas-header\">
            <h3 class=\"filter-panel-offcanvas-only\">{{ \"listing.filterTitleText\"|trans }}</h3>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                {% sw_icon 'x' style { 'size': 'md' } %}
            </div>
        </div>
    {% endblock %}

    {# @var listing \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% block component_filter_panel_element %}
        <div class=\"filter-panel{% if sidebar %} is--sidebar{% endif %}\">
            {% block component_filter_panel_items_container %}
                <div class=\"filter-panel-items-container\">

                    {% block component_filter_panel_item_manufacturer %}
                        {# @var manufacturers \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                        {% set manufacturers = listing.aggregations.get('manufacturer') %}
                        {% if not manufacturers.entities is empty %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' with {
                                elements: manufacturers.entities,
                                sidebar: sidebar,
                                name: 'manufacturer',
                                displayName: 'listing.filterManufacturerDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_properties %}
                        {# @var properties \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                        {% set properties = listing.aggregations.get('properties') %}

                        {% if not properties.entities is empty %}
                            {% for property in properties.entities %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-property-select.html.twig' with {
                                    elements: property.options,
                                    sidebar: sidebar,
                                    name: 'properties',
                                    displayName: property.translated.name,
                                    displayType: property.displayType,
                                    pluginSelector: 'filter-property-select'
                                } %}
                            {% endfor %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_price %}
                        {% set price = listing.aggregations.get('price') %}

                        {% if price.min > 0 and price.max > 0 %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-range.html.twig' with {
                                price: price,
                                sidebar: sidebar,
                                name: 'price',
                                minKey: 'min-price',
                                maxKey: 'max-price',
                                displayName: 'listing.filterPriceDisplayName'|trans|sw_sanitize,
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_rating %}
                        {% set rating = listing.aggregations.get('rating') %}

                        {% if not rating is empty %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-rating.html.twig' with {
                                name: 'rating',
                                displayName: 'listing.filterRatingDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_shipping_free %}
                        {% set shippingFree = listing.aggregations.get('shipping-free') %}

                        {% if shippingFree.max > 0 %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-boolean.html.twig' with {
                                name: 'shipping-free',
                                displayName: 'listing.filterFreeShippingDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_filter_panel_active_container %}
                <div class=\"filter-panel-active-container\">
                    {% block component_filter_panel_active_container_inner %}{% endblock %}
                </div>
            {% endblock %}
        </div>
     {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
