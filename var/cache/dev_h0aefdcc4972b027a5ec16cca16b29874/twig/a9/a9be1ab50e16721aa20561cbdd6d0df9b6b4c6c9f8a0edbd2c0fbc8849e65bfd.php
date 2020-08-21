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

/* @Storefront/storefront/component/sorting.html.twig */
class __TwigTemplate_e4702424be5d74c780f29e4303a7829f8f9291784e9d4be6eff958e823b828fc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/sorting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/sorting.html.twig"));

        // line 1
        $context["config"] = ["sorting" => ($context["current"] ?? null)];
        // line 2
        echo "
<div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='";
        // line 3
        echo twig_escape_filter($this->env, json_encode(($context["config"] ?? null)), "html", null, true);
        echo "'>
    <select class=\"sorting custom-select\" aria-label=\"";
        // line 4
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sortingLabel")), "html", null, true);
        echo "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
            // line 6
            echo "            ";
            $context["key"] = twig_get_attribute($this->env, $this->source, $context["sorting"], "key", [], "any", false, false, false, 6);
            // line 7
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
            echo "\"";
            if ((($context["key"] ?? null) == ($context["current"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["sorting"], "snippet", [], "any", false, false, false, 7)));
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </select>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  63 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set config = { sorting: current } %}

<div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='{{ config|json_encode }}'>
    <select class=\"sorting custom-select\" aria-label=\"{{ 'general.sortingLabel'|trans|striptags }}\">
        {% for sorting in sortings %}
            {% set key = sorting.key %}
            <option value=\"{{ key }}\"{% if key == current %} selected{% endif %}>{{ sorting.snippet|trans|sw_sanitize }}</option>
        {% endfor %}
    </select>
</div>
", "@Storefront/storefront/component/sorting.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/sorting.html.twig");
    }
}
