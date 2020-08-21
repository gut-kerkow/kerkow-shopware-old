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

/* @Storefront/storefront/component/review/rating.html.twig */
class __TwigTemplate_5cdbddaf2724f4c3621baaf17d1e626e24912f32fd8f5855a4b1e01fc0f11bc9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_rating' => [$this, 'block_component_review_rating'],
            'component_review_rating_output' => [$this, 'block_component_review_rating_output'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/rating.html.twig"));

        // line 1
        $this->displayBlock('component_review_rating', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating"));

        // line 2
        echo "    ";
        $context["full"] = twig_round(($context["points"] ?? null), 0, "floor");
        // line 3
        echo "    ";
        $context["left"] = (($context["points"] ?? null) - ($context["full"] ?? null));
        // line 4
        echo "
    ";
        // line 5
        if (((($context["left"] ?? null) >= 0.25) && (($context["left"] ?? null) < 0.75))) {
            // line 6
            echo "        ";
            $context["half"] = 1;
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ((($context["left"] ?? null) >= 0.75)) {
            // line 10
            echo "        ";
            $context["full"] = (($context["full"] ?? null) + 1);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["blank"] = ((5 - ($context["full"] ?? null)) - ($context["half"] ?? null));
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('component_review_rating_output', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_component_review_rating_output($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating_output"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating_output"));

        // line 16
        echo "        <span class=\"product-review-rating\">
            ";
        // line 17
        if ((($context["full"] ?? null) > 0)) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["full"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 19
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 19)->display(twig_array_merge($context, ["type" => "full"]));
                // line 22
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "
            ";
        // line 25
        if (($context["half"] ?? null)) {
            // line 26
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 26)->display(twig_array_merge($context, ["type" => "half"]));
            // line 29
            echo "            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if ((($context["blank"] ?? null) > 0)) {
            // line 32
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["blank"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 33
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 33)->display(twig_array_merge($context, ["type" => "blank"]));
                // line 36
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 38,  213 => 37,  199 => 36,  196 => 33,  178 => 32,  176 => 31,  173 => 30,  170 => 29,  167 => 26,  165 => 25,  162 => 24,  159 => 23,  145 => 22,  142 => 19,  124 => 18,  122 => 17,  119 => 16,  100 => 15,  97 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 10,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_review_rating %}
    {% set full = points|round(0, 'floor')   %}
    {% set left = points - full  %}

    {% if left >= 0.25 and left<0.75 %}
        {% set half = 1 %}
    {% endif %}

    {% if left >=0.75 %}
        {% set full = full + 1 %}
    {% endif %}

    {% set blank = 5 - full - half  %}

    {% block component_review_rating_output %}
        <span class=\"product-review-rating\">
            {% if full > 0 %}
                {% for star in range(1,full) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'full'
                    } %}
                {% endfor %}
            {% endif %}

            {% if half %}
                {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                    type: 'half'
                } %}
            {% endif %}

            {% if blank > 0 %}
                {% for star in range(1,blank) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'blank'
                    } %}
                {% endfor %}
            {% endif %}
        </span>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/review/rating.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/review/rating.html.twig");
    }
}
