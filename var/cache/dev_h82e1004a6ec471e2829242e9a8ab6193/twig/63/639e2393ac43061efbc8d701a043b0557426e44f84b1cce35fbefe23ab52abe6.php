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

/* @Storefront/storefront/component/review/point.html.twig */
class __TwigTemplate_f312388c44627ae9493786260d7c699af3ffb17cd39fbf474f82c9ef28c333bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_point' => [$this, 'block_component_review_point'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/point.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/point.html.twig"));

        // line 1
        $this->displayBlock('component_review_point', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_point($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_point"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_point"));

        // line 2
        echo "    ";
        if ( !(isset($context["size"]) || array_key_exists("size", $context))) {
            // line 3
            echo "        ";
            $context["size"] = "xs";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    <span class=\"product-review-point\">
        ";
        // line 7
        if ((($context["type"] ?? null) == "half")) {
            // line 8
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 8);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star-half"]));
            // line 9
            echo "        ";
        } elseif ((($context["type"] ?? null) == "blank")) {
            // line 10
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 10);
            })())->display(twig_array_merge($context, ["color" => "light", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 12);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 13
            echo "        ";
        }
        // line 14
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/point.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  111 => 13,  102 => 12,  99 => 11,  90 => 10,  87 => 9,  78 => 8,  76 => 7,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_review_point %}
    {% if size is not defined %}
        {% set size = 'xs' %}
    {% endif %}

    <span class=\"product-review-point\">
        {% if type == 'half' %}
            {% sw_icon 'star-half' style { 'color': 'review', 'size': size, 'pack': 'solid' } %}
        {% elseif type == 'blank' %}
            {% sw_icon 'star' style { 'color': 'light', 'size': size, 'pack': 'solid' } %}
        {% else %}
            {% sw_icon 'star' style { 'color': 'review', 'size': size, 'pack': 'solid' } %}
        {% endif %}
    </span>
{% endblock %}
", "@Storefront/storefront/component/review/point.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/review/point.html.twig");
    }
}
