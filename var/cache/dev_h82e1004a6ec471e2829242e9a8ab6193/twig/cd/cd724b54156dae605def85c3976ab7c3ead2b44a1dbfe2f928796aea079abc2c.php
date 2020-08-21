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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_c6572c13015f334656285bc84096e453710e56bcb27009b0a748b63c8b16bfd7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-block-container.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-block-container.html.twig"));

        // line 1
        $this->displayBlock('section_content_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_section_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block"));

        // line 2
        echo "
    ";
        // line 3
        $context["top"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        echo "    ";
        $context["right"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        echo "    ";
        $context["bottom"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        echo "    ";
        $context["left"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        echo "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            echo "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["blockBgColor"] = twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        echo "    ";
        $context["blockBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 13));
        // line 14
        echo "
    ";
        // line 15
        $context["blockClasses"] = [0 => twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 15), 1 => ("pos-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 15)), 2 => ("cms-block-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 15))];
        // line 16
        echo "
    ";
        // line 17
        if (($context["blockBgImg"] ?? null)) {
            // line 18
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-image"], ($context["blockClasses"] ?? null));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (($context["blockBgColor"] ?? null)) {
            // line 22
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-color"], ($context["blockClasses"] ?? null));
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        $context["columns"] = 3;
        // line 26
        echo "    ";
        $context["isInSidebar"] = (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 26) == "sidebar");
        // line 27
        echo "    ";
        $context["sidebarClasses"] = "";
        // line 28
        echo "
    ";
        // line 29
        if ((($context["isInSidebar"] ?? null) == true)) {
            // line 30
            echo "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    <div class=\"cms-block ";
        // line 33
        echo twig_escape_filter($this->env, twig_join_filter(($context["blockClasses"] ?? null), " "), "html", null, true);
        echo "\"
         style=\"";
        // line 34
        if (($context["blockBgColor"] ?? null)) {
            echo " background-color: ";
            echo twig_escape_filter($this->env, ($context["blockBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["blockBgImg"] ?? null)) {
            echo "background-image: url(";
            echo twig_escape_filter($this->env, ($context["blockBgImg"] ?? null), "html", null, true);
            echo "); background-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 34), "html", null, true);
            echo ";";
        }
        echo "\">

        ";
        // line 36
        $this->displayBlock('section_content_block_container', $context, $blocks);
        // line 47
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        // line 37
        echo "            <div class=\"cms-block-container\"
                 style=\"";
        // line 38
        if (($context["padding"] ?? null)) {
            echo "padding: ";
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                ";
        // line 40
        $this->displayBlock('section_content_block_row', $context, $blocks);
        // line 45
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_section_content_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_row"));

        // line 41
        echo "                    <div class=\"cms-block-container-row row cms-row ";
        echo twig_escape_filter($this->env, ($context["sidebarClasses"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 42
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/block/cms-block-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 42)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 42);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 43
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 43,  233 => 42,  228 => 41,  218 => 40,  207 => 45,  205 => 40,  196 => 38,  193 => 37,  183 => 36,  172 => 47,  170 => 36,  154 => 34,  150 => 33,  147 => 32,  144 => 31,  141 => 30,  139 => 29,  136 => 28,  133 => 27,  130 => 26,  128 => 25,  125 => 24,  122 => 23,  119 => 22,  117 => 21,  114 => 20,  111 => 19,  108 => 18,  106 => 17,  103 => 16,  101 => 15,  98 => 14,  95 => 13,  93 => 12,  90 => 11,  87 => 10,  84 => 9,  82 => 8,  79 => 7,  76 => 6,  73 => 5,  70 => 4,  68 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block section_content_block %}

    {% set top = block.marginTop ? block.marginTop : 0 %}
    {% set right = block.marginRight ? block.marginRight : 0 %}
    {% set bottom = block.marginBottom ? block.marginBottom : 0 %}
    {% set left = block.marginLeft ? block.marginLeft : 0 %}

    {% if top or right or bottom or left %}
        {% set padding = top ~ \" \" ~ right ~ \" \" ~ bottom ~ \" \" ~ left %}
    {% endif %}

    {% set blockBgColor = block.backgroundColor %}
    {% set blockBgImg = block.backgroundMedia|sw_encode_media_url %}

    {% set blockClasses = [block.cssClass, 'pos-' ~ block.position, 'cms-block-' ~ block.type] %}

    {% if blockBgImg %}
        {% set blockClasses = ['bg-image']|merge(blockClasses) %}
    {% endif %}

    {% if blockBgColor %}
        {% set blockClasses = ['bg-color']|merge(blockClasses) %}
    {% endif %}

    {% set columns = 3 %}
    {% set isInSidebar = block.sectionPosition == 'sidebar' %}
    {% set sidebarClasses = '' %}

    {% if isInSidebar == true %}
        {% set sidebarClasses = 'has--sidebar' %}
    {% endif %}

    <div class=\"cms-block {{ blockClasses|join(' ') }}\"
         style=\"{% if blockBgColor %} background-color: {{ blockBgColor }};{% endif %}{% if blockBgImg %}background-image: url({{ blockBgImg }}); background-size: {{ block.backgroundMediaMode }};{% endif %}\">

        {% block section_content_block_container %}
            <div class=\"cms-block-container\"
                 style=\"{% if padding %}padding: {{ padding }};{% endif %}\">

                {% block section_content_block_row %}
                    <div class=\"cms-block-container-row row cms-row {{ sidebarClasses }}\">
                        {% sw_include \"@Storefront/storefront/block/cms-block-\" ~ block.type ~ \".html.twig\" ignore missing %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
