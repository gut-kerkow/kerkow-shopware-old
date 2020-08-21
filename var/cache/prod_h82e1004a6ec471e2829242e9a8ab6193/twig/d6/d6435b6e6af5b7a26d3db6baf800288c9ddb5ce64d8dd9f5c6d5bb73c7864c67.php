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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_a203c2c4d695a7df30f4e0f9a6dc9d61b23f808ad3a9b8140a54a5474f74dcd6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["styles"] = [0 => ($context["size"] ?? null), 1 => ($context["color"] ?? null), 2 => ($context["rotation"] ?? null), 3 => ($context["flip"] ?? null), 4 => ($context["class"] ?? null)];
        // line 3
        echo "
    ";
        // line 4
        if ( !(isset($context["pack"]) || array_key_exists("pack", $context))) {
            // line 5
            echo "        ";
            $context["pack"] = "default";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ( !(isset($context["namespace"]) || array_key_exists("namespace", $context))) {
            // line 9
            echo "        ";
            $context["namespace"] = "Storefront";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    <span
        class=\"icon icon-";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            if (($context["entry"] != "")) {
                echo " icon-";
                echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
            ";
        // line 14
        echo twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/../app/storefront/dist/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  74 => 13,  70 => 11,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/icon.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
