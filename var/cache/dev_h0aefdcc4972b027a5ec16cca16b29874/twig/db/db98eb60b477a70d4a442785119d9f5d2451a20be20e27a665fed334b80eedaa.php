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

/* @Storefront/storefront/layout/header/actions/service-menu-widget.html.twig */
class __TwigTemplate_3906da5341dbe5c145aa097ea8be8487fed7b96055b30b1579fc6fa82f558cef extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_service_menu_widget' => [$this, 'block_layout_header_actions_service_menu_widget'],
            'layout_header_actions_service_menu_list' => [$this, 'block_layout_header_actions_service_menu_list'],
            'layout_header_actions_service_menu_items' => [$this, 'block_layout_header_actions_service_menu_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_service_menu_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_header_actions_service_menu_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_widget"));

        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "serviceMenu", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-menu\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_service_menu_list', $context, $blocks);
            // line 32
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_layout_header_actions_service_menu_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_list"));

        // line 9
        echo "                <div class=\"service-menu dropdown\">
                    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                            type=\"button\"
                            id=\"serviceMenuDropdown-";
        // line 12
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                            data-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                        ";
        // line 16
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig", 16);
        })())->display(twig_array_merge($context, ["name" => "help"]));
        // line 17
        echo "                        <span class=\"top-bar-nav-text\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.indexLinkService"));
        echo "</span>
                    </button>
                    ";
        // line 19
        $this->displayBlock('layout_header_actions_service_menu_items', $context, $blocks);
        // line 30
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_layout_header_actions_service_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_items"));

        // line 20
        echo "                        <div class=\"dropdown-menu dropdown-menu-right\"
                             aria-labelledby=\"serviceMenuDropdown-";
        // line 21
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "serviceMenu", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                                ";
            $context["externalLink"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 23), "externalLink", [], "any", false, false, false, 23);
            // line 24
            echo "                                <a class=\"top-bar-list-item dropdown-item\"
                                   href=\"";
            // line 25
            if (($context["externalLink"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["externalLink"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            }
            echo "\"
                                   title=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 28,  180 => 26,  172 => 25,  169 => 24,  166 => 23,  162 => 22,  158 => 21,  155 => 20,  145 => 19,  134 => 30,  132 => 19,  126 => 17,  118 => 16,  111 => 12,  106 => 9,  96 => 8,  84 => 32,  82 => 8,  79 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_service_menu_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.serviceMenu|length > 0 %}
        <div class=\"top-bar-nav-item top-bar-menu\">
            {% block layout_header_actions_service_menu_list %}
                <div class=\"service-menu dropdown\">
                    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                            type=\"button\"
                            id=\"serviceMenuDropdown-{{ position }}\"
                            data-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                        {% sw_icon 'help' %}
                        <span class=\"top-bar-nav-text\">{{ \"header.indexLinkService\"|trans|sw_sanitize }}</span>
                    </button>
                    {% block layout_header_actions_service_menu_items %}
                        <div class=\"dropdown-menu dropdown-menu-right\"
                             aria-labelledby=\"serviceMenuDropdown-{{ position }}\">
                            {% for category in page.header.serviceMenu %}
                                {% set externalLink = category.translated.externalLink %}
                                <a class=\"top-bar-list-item dropdown-item\"
                                   href=\"{% if externalLink %}{{ externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: category.id }) }}{% endif %}\"
                                   title=\"{{ category.translated.name }}\">{{ category.translated.name }}</a>
                            {% endfor %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/service-menu-widget.html.twig");
    }
}
