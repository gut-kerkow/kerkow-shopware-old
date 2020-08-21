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

/* @Storefront/storefront/component/product/breadcrumb.html.twig */
class __TwigTemplate_91eba41e464816a9291d30a35f9a3037a26ae215e51f35b36e395d085f2b8697 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_breadcrumb' => [$this, 'block_component_product_breadcrumb'],
            'component_product_breadcrumb_category' => [$this, 'block_component_product_breadcrumb_category'],
            'component_product_breadcrumb_link_name' => [$this, 'block_component_product_breadcrumb_link_name'],
            'component_product_breadcrumb_placeholder' => [$this, 'block_component_product_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('component_product_breadcrumb', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb"));

        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3) == twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryTree", [], "any", false, false, false, 3)))) {
                // line 4
                echo "            ";
                $context["breadcrumb"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 4), "getPlainBreadcrumb", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)], "method", false, false, false, 4), 1);
                // line 5
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 6
                    echo "                ";
                    $this->displayBlock('component_product_breadcrumb_category', $context, $blocks);
                    // line 14
                    echo "                ";
                    $this->displayBlock('component_product_breadcrumb_placeholder', $context, $blocks);
                    // line 21
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            } else {
                // line 23
                echo "            ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "                ";
                    $this->loadTemplate("@Storefront/storefront/component/product/breadcrumb.html.twig", "@Storefront/storefront/component/product/breadcrumb.html.twig", 24)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source,                     // line 25
$context["item"], "children", [], "any", false, false, false, 25), "product" =>                     // line 26
($context["product"] ?? null)]));
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_component_product_breadcrumb_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_category"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_category"));

        // line 7
        echo "                    <a class=\"";
        if ((($context["key"] ?? null) === twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryTree", [], "any", false, false, false, 7)))) {
            echo " is-active";
        }
        echo "\"
                       href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["key"] ?? null)]), "html", null, true);
        echo "\">
                        ";
        // line 9
        $this->displayBlock('component_product_breadcrumb_link_name', $context, $blocks);
        // line 12
        echo "                    </a>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_component_product_breadcrumb_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_link_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_link_name"));

        // line 10
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_component_product_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_placeholder"));

        // line 15
        echo "                    ";
        if ((($context["item"] ?? null) != twig_last($this->env, ($context["breadcrumb"] ?? null)))) {
            // line 16
            echo "                        <div class=\"breadcrumb-placeholder\">
                            ";
            // line 17
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/breadcrumb.html.twig", 17);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 18
            echo "                        </div>
                    ";
        }
        // line 20
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 20,  227 => 18,  219 => 17,  216 => 16,  213 => 15,  203 => 14,  190 => 10,  180 => 9,  169 => 12,  167 => 9,  163 => 8,  156 => 7,  146 => 6,  132 => 30,  129 => 29,  126 => 28,  124 => 26,  123 => 25,  121 => 24,  118 => 23,  115 => 22,  101 => 21,  98 => 14,  95 => 6,  77 => 5,  74 => 4,  71 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_breadcrumb %}
    {% for item in navigationTree %}
        {% if item.category.id == product.categoryTree|last %}
            {% set breadcrumb = item.category.getPlainBreadcrumb(item.category.id)|slice(1) %}
            {% for key, item in breadcrumb %}
                {% block component_product_breadcrumb_category %}
                    <a class=\"{% if key is same as(product.categoryTree|last) %} is-active{% endif %}\"
                       href=\"{{ seoUrl('frontend.navigation.page', { navigationId: key }) }}\">
                        {% block component_product_breadcrumb_link_name %}
                            {{ item }}
                        {% endblock %}
                    </a>
                {% endblock %}
                {% block component_product_breadcrumb_placeholder %}
                    {% if item != breadcrumb|last %}
                        <div class=\"breadcrumb-placeholder\">
                            {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endfor %}
        {% else %}
            {% if item.children|length %}
                {% sw_include '@Storefront/storefront/component/product/breadcrumb.html.twig' with {
                    navigationTree: item.children,
                    product: product
                } only %}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "@Storefront/storefront/component/product/breadcrumb.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/breadcrumb.html.twig");
    }
}
