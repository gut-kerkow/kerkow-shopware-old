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

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_a865336ed4b2d68269ee67b36563bdf1aa552f761ea6f1f0a4c9ac8e35c3bc12 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        // line 1
        $this->displayBlock('element_sidebar_filter', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        // line 2
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["slot"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 3), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 3);
        // line 4
        echo "
    <div class=\"cms-element-sidebar-filter\">
        ";
        // line 6
        $this->displayBlock('element_product_listing_filter_button', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('element_sidebar_filter_panel', $context, $blocks);
        // line 30
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_element_product_listing_filter_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        // line 7
        echo "            <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                    type=\"button\"
                    data-offcanvas-filter=\"true\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink"), "html", null, true);
        echo "\">
                ";
        // line 13
        $this->displayBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 16
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "
            </button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_element_product_listing_filter_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        // line 14
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 14);
        })())->display(twig_array_merge($context, ["name" => "sliders-horizontal"]));
        // line 15
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_element_sidebar_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        // line 21
        echo "            <div id=\"filter-panel-wrapper\"
                 class=\"filter-panel-wrapper\"
                 data-offcanvas-filter-content=\"true\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 24)->display(twig_array_merge($context, ["listing" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["slot"] ?? null), "data", [], "any", false, false, false, 25), "listing", [], "any", false, false, false, 25), "sidebar" => (twig_get_attribute($this->env, $this->source,         // line 26
($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 26) == "sidebar")]));
        // line 28
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 28,  177 => 26,  176 => 25,  175 => 24,  170 => 21,  160 => 20,  150 => 15,  141 => 14,  131 => 13,  117 => 16,  115 => 13,  111 => 12,  104 => 7,  94 => 6,  83 => 30,  81 => 20,  78 => 19,  76 => 6,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_sidebar_filter %}
    {% set config = element.fieldConfig.elements %}
    {% set slot = page.cmsPage.firstElementOfType('product-listing') %}

    <div class=\"cms-element-sidebar-filter\">
        {% block element_product_listing_filter_button %}
            <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                    type=\"button\"
                    data-offcanvas-filter=\"true\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"{{ \"general.menuLink\"|trans }}\">
                {% block element_product_listing_filter_button_icon %}
                    {% sw_icon 'sliders-horizontal' %}
                {% endblock %}
                {{ \"listing.filterTitleText\"|trans }}
            </button>
        {% endblock %}

        {% block element_sidebar_filter_panel %}
            <div id=\"filter-panel-wrapper\"
                 class=\"filter-panel-wrapper\"
                 data-offcanvas-filter-content=\"true\">
                {% sw_include '@Storefront/storefront/component/listing/filter-panel.html.twig' with {
                    listing: slot.data.listing,
                    sidebar: block.sectionPosition == 'sidebar'
                } %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
