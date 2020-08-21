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
class __TwigTemplate_7c3b195352e1be59255e1dc56135b46ea37cc59fc88d9e08cff2a367da490c3e extends \Twig\Template
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
        // line 1
        $this->displayBlock('component_review_rating', $context, $blocks);
    }

    public function block_component_review_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function block_component_review_rating_output($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 38,  183 => 37,  169 => 36,  166 => 33,  148 => 32,  146 => 31,  143 => 30,  140 => 29,  137 => 26,  135 => 25,  132 => 24,  129 => 23,  115 => 22,  112 => 19,  94 => 18,  92 => 17,  89 => 16,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/review/rating.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/review/rating.html.twig");
    }
}
