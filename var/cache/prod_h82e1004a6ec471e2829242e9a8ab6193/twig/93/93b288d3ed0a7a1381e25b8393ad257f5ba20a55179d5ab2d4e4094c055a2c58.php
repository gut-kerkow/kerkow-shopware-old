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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_de21771b38fb3cc309a4c1ec2e45b426504e35ab58fc4b4bc522fe0b0f648d39 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_rich_snippets' => [$this, 'block_component_product_box_rich_snippets'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_variant_characteristics' => [$this, 'block_component_product_box_variant_characteristics'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box', $context, $blocks);
    }

    public function block_component_product_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["product"] ?? null)) {
            // line 3
            echo "        ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["cover"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["variation"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 6);
            // line 7
            echo "
        <div class=\"card product-box box-";
            // line 8
            echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 9
            $this->displayBlock('component_product_box_content', $context, $blocks);
            // line 123
            echo "        </div>
    ";
        }
    }

    // line 9
    public function block_component_product_box_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <div class=\"card-body\">
                    ";
        // line 11
        $this->displayBlock('component_product_box_badges', $context, $blocks);
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('component_product_box_image', $context, $blocks);
        // line 63
        echo "
                    ";
        // line 64
        $this->displayBlock('component_product_box_info', $context, $blocks);
        // line 121
        echo "                </div>
            ";
    }

    // line 11
    public function block_component_product_box_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 12)->display($context);
        // line 13
        echo "                    ";
    }

    // line 15
    public function block_component_product_box_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/meta.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 16)->display($context);
        // line 17
        echo "                    ";
    }

    // line 19
    public function block_component_product_box_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        <div class=\"product-image-wrapper\">
                            ";
        // line 22
        echo "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? (($context["displayMode"] ?? null)) : ("standard"));
        // line 23
        echo "
                            ";
        // line 25
        echo "                            ";
        if (((($context["layout"] ?? null) == "image") && (($context["displayMode"] ?? null) == "standard"))) {
            // line 26
            echo "                                ";
            $context["displayMode"] = "cover";
            // line 27
            echo "                            ";
        }
        // line 28
        echo "
                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                               title=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               class=\"product-image-link is-";
        // line 31
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                    ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 34
($context["displayMode"] ?? null)), "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) : (($context["name"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) : (($context["name"] ?? null)))];
            // line 38
            echo "
                                    ";
            // line 39
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 40
                echo "                                        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 41
                echo "                                    ";
            }
            // line 42
            echo "
                                    ";
            // line 43
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 43);
            })())->display(twig_array_merge($context, ["media" =>             // line 44
($context["cover"] ?? null), "sizes" => ["xs" => "501px", "sm" => "315px", "md" => "427px", "lg" => "333px", "xl" => "284px"], "name" => "product-image-thumbnails"]));
            // line 53
            echo "                                ";
        } else {
            // line 54
            echo "                                    <div class=\"product-image-placeholder\">
                                        ";
            // line 55
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 55);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 58
            echo "                                    </div>
                                ";
        }
        // line 60
        echo "                            </a>
                        </div>
                    ";
    }

    // line 64
    public function block_component_product_box_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                        <div class=\"product-info\">
                            ";
        // line 66
        $this->displayBlock('component_product_box_rating', $context, $blocks);
        // line 78
        echo "
                            ";
        // line 79
        $this->displayBlock('component_product_box_name', $context, $blocks);
        // line 86
        echo "
                            ";
        // line 87
        $this->displayBlock('component_product_box_variant_characteristics', $context, $blocks);
        // line 105
        echo "
                            ";
        // line 106
        $this->displayBlock('component_product_box_description', $context, $blocks);
        // line 111
        echo "
                            ";
        // line 112
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 115
        echo "
                            ";
        // line 116
        $this->displayBlock('component_product_box_action', $context, $blocks);
        // line 119
        echo "                        </div>
                    ";
    }

    // line 66
    public function block_component_product_box_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 67), "core", [], "any", false, false, false, 67), "listing", [], "any", false, false, false, 67), "showReview", [], "any", false, false, false, 67)) {
            // line 68
            echo "                                    <div class=\"product-rating\">
                                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 69)) {
                // line 70
                echo "                                            ";
                $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 70)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source,                 // line 71
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 71), "style" => "text-primary"]));
                // line 74
                echo "                                        ";
            }
            // line 75
            echo "                                    </div>
                                ";
        }
        // line 77
        echo "                            ";
    }

    // line 79
    public function block_component_product_box_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                                   class=\"product-name\"
                                   title=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 83
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 87
    public function block_component_product_box_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        ";
        // line 90
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 90)) {
            // line 91
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                // line 92
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 92), "html", null, true);
                echo ":
                                                <span class=\"product-variant-characteristics-option\">
                                                    ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 94), "html", null, true);
                echo "
                                                </span>

                                                ";
                // line 97
                if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 97)) != $context["variation"])) {
                    // line 98
                    echo "                                                    ";
                    echo " | ";
                    echo "
                                                ";
                }
                // line 100
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                        ";
        }
        // line 102
        echo "                                    </div>
                                </div>
                            ";
    }

    // line 106
    public function block_component_product_box_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                                <div class=\"product-description\">
                                    ";
        // line 108
        echo strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 108), "description", [], "any", false, false, false, 108));
        echo "
                                </div>
                            ";
    }

    // line 112
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 113)->display($context);
        // line 114
        echo "                            ";
    }

    // line 116
    public function block_component_product_box_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 117)->display($context);
        // line 118
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  398 => 118,  395 => 117,  391 => 116,  387 => 114,  384 => 113,  380 => 112,  373 => 108,  370 => 107,  366 => 106,  360 => 102,  357 => 101,  351 => 100,  345 => 98,  343 => 97,  337 => 94,  331 => 92,  326 => 91,  324 => 90,  320 => 88,  316 => 87,  309 => 83,  305 => 82,  299 => 80,  295 => 79,  291 => 77,  287 => 75,  284 => 74,  282 => 71,  280 => 70,  278 => 69,  275 => 68,  272 => 67,  268 => 66,  263 => 119,  261 => 116,  258 => 115,  256 => 112,  253 => 111,  251 => 106,  248 => 105,  246 => 87,  243 => 86,  241 => 79,  238 => 78,  236 => 66,  233 => 65,  229 => 64,  223 => 60,  219 => 58,  211 => 55,  208 => 54,  205 => 53,  203 => 44,  196 => 43,  193 => 42,  190 => 41,  187 => 40,  185 => 39,  182 => 38,  180 => 36,  179 => 35,  178 => 34,  176 => 33,  174 => 32,  170 => 31,  166 => 30,  162 => 29,  159 => 28,  156 => 27,  153 => 26,  150 => 25,  147 => 23,  144 => 22,  141 => 20,  137 => 19,  133 => 17,  130 => 16,  126 => 15,  122 => 13,  119 => 12,  115 => 11,  110 => 121,  108 => 64,  105 => 63,  103 => 19,  100 => 18,  98 => 15,  95 => 14,  93 => 11,  90 => 10,  86 => 9,  80 => 123,  78 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  56 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
