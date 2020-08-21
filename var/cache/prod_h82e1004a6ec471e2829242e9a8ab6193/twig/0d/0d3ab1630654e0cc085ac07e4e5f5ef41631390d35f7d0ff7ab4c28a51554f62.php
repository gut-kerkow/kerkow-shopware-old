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
class __TwigTemplate_1dd1d5aad3936f8b47ea3d4bfecd69303cdea320d5eb300f54a063b7ff06f9cf extends \Twig\Template
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
        // line 1
        $this->displayBlock('component_product_breadcrumb', $context, $blocks);
    }

    public function block_component_product_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 6
    public function block_component_product_breadcrumb_category($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 9
    public function block_component_product_breadcrumb_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "
                        ";
    }

    // line 14
    public function block_component_product_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 20,  173 => 18,  165 => 17,  162 => 16,  159 => 15,  155 => 14,  148 => 10,  144 => 9,  139 => 12,  137 => 9,  133 => 8,  126 => 7,  122 => 6,  114 => 30,  111 => 29,  108 => 28,  106 => 26,  105 => 25,  103 => 24,  100 => 23,  97 => 22,  83 => 21,  80 => 14,  77 => 6,  59 => 5,  56 => 4,  53 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/breadcrumb.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/breadcrumb.html.twig");
    }
}
