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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_e0e5cceba050de21f5e9ea33e63d358d064d01a03877f833b1bb89f1105c8c23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 2
        if ( !(isset($context["load"]) || array_key_exists("load", $context))) {
            // line 3
            echo "    ";
            $context["load"] = true;
        }
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            echo "    ";
            if ((($context["columns"] ?? null) &&  !(isset($context["sizes"]) || array_key_exists("sizes", $context)))) {
                // line 8
                echo "        ";
                // line 9
                echo "        ";
                $context["sizes"] = ["xs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 10
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 10), "breakpoint", [], "any", false, false, false, 10), "sm", [], "any", false, false, false, 10) - 1) . "px"), "sm" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 11
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 11), "breakpoint", [], "any", false, false, false, 11), "md", [], "any", false, false, false, 11) - 1) . "px"), "md" => (twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 12
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 12), "breakpoint", [], "any", false, false, false, 12), "lg", [], "any", false, false, false, 12) - 1) / ($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 13
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 13), "breakpoint", [], "any", false, false, false, 13), "xl", [], "any", false, false, false, 13) - 1) / ($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 15
                echo "
        ";
                // line 17
                echo "        ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 18
                    echo "            ";
                    $context["container"] = 100;
                    // line 19
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 20
                    echo "        ";
                } else {
                    // line 21
                    echo "            ";
                    $context["container"] = 1360;
                    // line 22
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "    ";
            }
            // line 25
            echo "
    ";
            // line 26
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 26)));
            // line 27
            echo "
    ";
            // line 29
            echo "    ";
            ob_start();
            ob_start();
            // line 30
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 30) + 1), "html", null, true);
            echo "w, ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(twig_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 30)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 30), "html", null, true);
                echo "w";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
            $___internal_b12b4dd0534a48a3db8364d9799dc1d303fbb94129630c8a803a1ced59cfb3fc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo twig_spaceless($___internal_b12b4dd0534a48a3db8364d9799dc1d303fbb94129630c8a803a1ced59cfb3fc_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
    ";
            // line 34
            echo "    ";
            ob_start();
            ob_start();
            // line 35
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 36
            echo "
        ";
            // line 38
            echo "        ";
            if (($context["columns"] ?? null)) {
                // line 39
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 40
                echo "        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 42) > twig_first($this->env, twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 42), "breakpoint", [], "any", false, false, false, 42))))) {
                // line 43
                echo "            ";
                $context["maxWidth"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 43);
                // line 44
                echo "        ";
            }
            // line 45
            echo "
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 46), "breakpoint", [], "any", false, false, false, 46)));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (($context["maxWidth"] ?? null)) {
                    echo "(max-width: ";
                    echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
                    echo "px) and ";
                }
                echo "(min-width: ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sizes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "html", null, true);
                $context["maxWidth"] = ($context["value"] - 1);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 46)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo twig_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_8720cf3a8775032828fe8704353c66e8976272b2d774a62b76db34ec63b52179_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo twig_spaceless($___internal_8720cf3a8775032828fe8704353c66e8976272b2d774a62b76db34ec63b52179_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 49
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 50
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 50)) > 0)) {
            // line 51
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 52
            echo "        ";
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sizes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["default"] ?? null) : null)) {
                // line 53
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sizes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((twig_length_filter($this->env,             // line 54
($context["sizes"] ?? null)) > 0)) {
                // line 55
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (($context["value"] != "")) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 59,  280 => 58,  277 => 57,  271 => 55,  269 => 54,  264 => 53,  261 => 52,  250 => 51,  247 => 50,  236 => 49,  232 => 34,  185 => 46,  182 => 45,  179 => 44,  176 => 43,  174 => 42,  171 => 41,  168 => 40,  165 => 39,  162 => 38,  159 => 36,  156 => 35,  152 => 34,  149 => 32,  146 => 29,  143 => 31,  102 => 30,  98 => 29,  95 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 15,  61 => 13,  60 => 12,  59 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
{% if load is not defined %}
    {% set load = true %}
{% endif %}
{# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
{% if media.thumbnails|length > 0 %}
    {% if columns and sizes is not defined %}
        {# set image size for every viewport #}
        {% set sizes = {
            'xs': (shopware.theme.breakpoint.sm - 1) ~'px',
            'sm': (shopware.theme.breakpoint.md - 1) ~'px',
            'md': ((shopware.theme.breakpoint.lg - 1) / columns)|round(0, 'ceil') ~'px',
            'lg': ((shopware.theme.breakpoint.xl - 1) / columns)|round(0, 'ceil') ~'px'
        } %}

        {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
        {% if layout == 'full-width' %}
            {% set container = 100 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
        {% else %}
            {% set container = 1360 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
        {% endif %}
    {% endif %}

    {% set thumbnails = media.thumbnails|sort|reverse %}

    {# generate srcset with all available thumbnails #}
    {% set srcsetValue %}{% apply spaceless %}
        {{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
    {% endapply %}{% endset %}

    {# generate sizes #}
    {% set sizesValue %}{% apply spaceless %}
        {% set sizeFallback = 100 %}

        {# set largest size depending on column count of cms block #}
        {% if columns %}
            {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
        {% endif %}

        {% if thumbnails|first.width > shopware.theme.breakpoint|reverse|first %}
            {% set maxWidth = thumbnails|first.width %}
        {% endif %}

        {% for key, value in shopware.theme.breakpoint|reverse %}{% if maxWidth %}(max-width: {{ maxWidth }}px) and {% endif %}(min-width: {{ value }}px) {{ sizes[key] }}{% set maxWidth = value-1 %}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
    {% endapply %}{% endset %}
{% endif %}
<img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
    {% if media.thumbnails|length > 0 %}
        {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
        {% if sizes['default'] %}
        sizes=\"{{ sizes['default'] }}\"
        {% elseif sizes|length > 0 %}
        sizes=\"{{ sizesValue }}\"
        {% endif %}
    {% endif %}
    {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
/>
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
