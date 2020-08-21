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

/* @Storefront/storefront/page/search/search-pagelet.html.twig */
class __TwigTemplate_a8d69bbf234ac0d4fd94b20ca82f07f146c58376abe761b41d27439f91bc76ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_listing_wrapper' => [$this, 'block_element_product_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/search/search-pagelet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/search/search-pagelet.html.twig"));

        // line 1
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('element_product_listing_wrapper', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_product_listing_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        // line 4
        echo "    <div class=\"cms-element-sidebar-filter\">
        <div id=\"filter-panel-wrapper\"
             class=\"filter-panel-wrapper\"
             data-offcanvas-filter-content=\"true\">
            ";
        // line 8
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/page/search/search-pagelet.html.twig", 8)->display(twig_array_merge($context, ["listing" => twig_get_attribute($this->env, $this->source,         // line 9
($context["page"] ?? null), "listing", [], "any", false, false, false, 9), "sidebar" => false]));
        // line 12
        echo "        </div>

        ";
        // line 14
        $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/page/search/search-pagelet.html.twig", 14)->display(twig_array_merge($context, ["searchResult" => twig_get_attribute($this->env, $this->source,         // line 15
($context["page"] ?? null), "listing", [], "any", false, false, false, 15), "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("widgets.search.pagelet.v2"), "filterUrl" => "", "params" => ["search" => twig_get_attribute($this->env, $this->source,         // line 18
($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 18)], "sidebar" => 0, "boxLayout" => "minimal", "displayMode" => ""]));
        // line 23
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/search/search-pagelet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  83 => 18,  82 => 15,  81 => 14,  77 => 12,  75 => 9,  74 => 8,  68 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set listingColumns = 'col-sm-6 col-lg-4 col-xl-3' %}

{% block element_product_listing_wrapper %}
    <div class=\"cms-element-sidebar-filter\">
        <div id=\"filter-panel-wrapper\"
             class=\"filter-panel-wrapper\"
             data-offcanvas-filter-content=\"true\">
            {% sw_include '@Storefront/storefront/component/listing/filter-panel.html.twig' with {
                listing: page.listing,
                sidebar: false
            } %}
        </div>

        {% sw_include '@Storefront/storefront/component/product/listing.html.twig' with {
            searchResult: page.listing,
            dataUrl: url('widgets.search.pagelet.v2'),
            filterUrl: '',
            params: { search: page.searchTerm },
            sidebar: 0,
            boxLayout: 'minimal',
            displayMode: ''
        } %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/search/search-pagelet.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/search/search-pagelet.html.twig");
    }
}
