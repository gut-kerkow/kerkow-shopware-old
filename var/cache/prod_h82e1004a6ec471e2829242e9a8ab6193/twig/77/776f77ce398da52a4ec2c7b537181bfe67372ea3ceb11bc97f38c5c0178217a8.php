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
class __TwigTemplate_04f47f742c0a3bd79fe8dfc3f25bd6e4066883731d7bf33f2f7ed849eeb030aa extends \Twig\Template
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
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
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
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
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
        return array (  290 => 59,  274 => 58,  271 => 57,  265 => 55,  263 => 54,  258 => 53,  255 => 52,  244 => 51,  241 => 50,  230 => 49,  226 => 34,  179 => 46,  176 => 45,  173 => 44,  170 => 43,  168 => 42,  165 => 41,  162 => 40,  159 => 39,  156 => 38,  153 => 36,  150 => 35,  146 => 34,  143 => 32,  140 => 29,  137 => 31,  96 => 30,  92 => 29,  89 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 15,  55 => 13,  54 => 12,  53 => 11,  52 => 10,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/thumbnail.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
