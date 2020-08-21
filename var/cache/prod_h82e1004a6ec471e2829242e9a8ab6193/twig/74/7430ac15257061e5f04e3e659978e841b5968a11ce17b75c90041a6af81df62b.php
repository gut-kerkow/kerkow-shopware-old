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

/* @Storefront/storefront/component/listing/filter/filter-rating.html.twig */
class __TwigTemplate_7122c5e1c00fa18c4b23f71f3878794f9696b015928ed893907fb8f720f0ead6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_rating' => [$this, 'block_component_filter_rating'],
            'component_filter_rating_toggle' => [$this, 'block_component_filter_rating_toggle'],
            'component_filter_rating_display_name' => [$this, 'block_component_filter_rating_display_name'],
            'component_filter_rating_count' => [$this, 'block_component_filter_rating_count'],
            'component_filter_rating_toggle_icon' => [$this, 'block_component_filter_rating_toggle_icon'],
            'component_filter_rating_dropdown' => [$this, 'block_component_filter_rating_dropdown'],
            'component_filter_rating_container' => [$this, 'block_component_filter_rating_container'],
            'component_filter_rating_point_label' => [$this, 'block_component_filter_rating_point_label'],
            'component_filter_rating_point_radio' => [$this, 'block_component_filter_rating_point_radio'],
            'component_filter_rating_point_radio_element' => [$this, 'block_component_filter_rating_point_radio_element'],
            'component_filter_rating_text_placeholder' => [$this, 'block_component_filter_rating_text_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["maxPoints"]) || array_key_exists("maxPoints", $context))) {
            // line 4
            echo "    ";
            $context["maxPoints"] = 5;
        }
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["filterRatingActiveLabelStart"]) || array_key_exists("filterRatingActiveLabelStart", $context))) {
            // line 8
            echo "    ";
            $context["filterRatingActiveLabelStart"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelStart"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["filterRatingActiveLabelEndSingular"]) || array_key_exists("filterRatingActiveLabelEndSingular", $context))) {
            // line 12
            echo "    ";
            $context["filterRatingActiveLabelEndSingular"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEndSingular"));
        }
        // line 14
        echo "
";
        // line 15
        if ( !(isset($context["filterRatingActiveLabelEnd"]) || array_key_exists("filterRatingActiveLabelEnd", $context))) {
            // line 16
            echo "    ";
            $context["filterRatingActiveLabelEnd"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEnd"));
        }
        // line 18
        echo "
";
        // line 19
        $context["filterRatingOptions"] = ["name" =>         // line 20
($context["name"] ?? null), "maxPoints" =>         // line 21
($context["maxPoints"] ?? null), "snippets" => ["filterRatingActiveLabelStart" =>         // line 23
($context["filterRatingActiveLabelStart"] ?? null), "filterRatingActiveLabelEndSingular" =>         // line 24
($context["filterRatingActiveLabelEndSingular"] ?? null), "filterRatingActiveLabelEnd" =>         // line 25
($context["filterRatingActiveLabelEnd"] ?? null)]];
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('component_filter_rating', $context, $blocks);
    }

    public function block_component_filter_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 30), "core", [], "any", false, false, false, 30), "listing", [], "any", false, false, false, 30), "showReview", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"filter-rating filter-panel-item";
            if ( !($context["sidebar"] ?? null)) {
                echo " dropdown";
            }
            echo "\"
             data-filter-rating=\"true\"
             data-filter-rating-options='";
            // line 33
            echo twig_escape_filter($this->env, json_encode(($context["filterRatingOptions"] ?? null)), "html", null, true);
            echo "'>

            ";
            // line 35
            $this->displayBlock('component_filter_rating_toggle', $context, $blocks);
            // line 61
            echo "
            ";
            // line 62
            $this->displayBlock('component_filter_rating_dropdown', $context, $blocks);
            // line 97
            echo "        </div>
    ";
        }
    }

    // line 35
    public function block_component_filter_rating_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                        aria-expanded=\"false\"
                        ";
        // line 38
        if (($context["sidebar"] ?? null)) {
            // line 39
            echo "                            data-toggle=\"collapse\"
                            data-target=\"#";
            // line 40
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 42
            echo "                            data-toggle=\"dropdown\"
                            data-boundary=\"viewport\"
                            data-offset=\"0,8\"
                            aria-haspopup=\"true\"
                        ";
        }
        // line 46
        echo ">

                    ";
        // line 48
        $this->displayBlock('component_filter_rating_display_name', $context, $blocks);
        // line 51
        echo "
                    ";
        // line 52
        $this->displayBlock('component_filter_rating_count', $context, $blocks);
        // line 55
        echo "
                    ";
        // line 56
        $this->displayBlock('component_filter_rating_toggle_icon', $context, $blocks);
        // line 59
        echo "                </button>
            ";
    }

    // line 48
    public function block_component_filter_rating_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                    ";
    }

    // line 52
    public function block_component_filter_rating_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        <span class=\"filter-rating-count\"></span>
                    ";
    }

    // line 56
    public function block_component_filter_rating_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 57);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 58
        echo "                    ";
    }

    // line 62
    public function block_component_filter_rating_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                <div class=\"filter-rating-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                     id=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                    ";
        // line 66
        $this->displayBlock('component_filter_rating_container', $context, $blocks);
        // line 95
        echo "                </div>
            ";
    }

    // line 66
    public function block_component_filter_rating_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 69
            echo "
                                ";
            // line 70
            $this->displayBlock('component_filter_rating_point_label', $context, $blocks);
            // line 88
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('component_filter_rating_text_placeholder', $context, $blocks);
        // line 93
        echo "                        </div>
                    ";
    }

    // line 70
    public function block_component_filter_rating_point_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                    <label data-review-form-point=\"";
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\"
                                           class=\"filter-rating-star ";
        // line 72
        if ((($context["currentPoints"] ?? null) >= ($context["point"] ?? null))) {
            echo " is-active";
        }
        echo "\">

                                        ";
        // line 74
        $this->displayBlock('component_filter_rating_point_radio', $context, $blocks);
        // line 80
        echo "
                                        ";
        // line 81
        $this->displayBlock('component_filter_rating_point_radio_element', $context, $blocks);
        // line 86
        echo "                                    </label>
                                ";
    }

    // line 74
    public function block_component_filter_rating_point_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\">
                                        ";
    }

    // line 81
    public function block_component_filter_rating_point_radio_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 82)->display(twig_array_merge($context, ["type" => "blank"]));
        // line 85
        echo "                                        ";
    }

    // line 90
    public function block_component_filter_rating_text_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                <div data-rating-text=\"true\"></div>
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 91,  354 => 90,  350 => 85,  347 => 82,  343 => 81,  337 => 78,  332 => 75,  328 => 74,  323 => 86,  321 => 81,  318 => 80,  316 => 74,  309 => 72,  304 => 71,  300 => 70,  295 => 93,  293 => 90,  290 => 89,  276 => 88,  274 => 70,  271 => 69,  254 => 68,  251 => 67,  247 => 66,  242 => 95,  240 => 66,  235 => 64,  226 => 63,  222 => 62,  218 => 58,  209 => 57,  205 => 56,  200 => 53,  196 => 52,  189 => 49,  185 => 48,  180 => 59,  178 => 56,  175 => 55,  173 => 52,  170 => 51,  168 => 48,  164 => 46,  157 => 42,  152 => 40,  149 => 39,  147 => 38,  139 => 36,  135 => 35,  129 => 97,  127 => 62,  124 => 61,  122 => 35,  117 => 33,  109 => 31,  106 => 30,  99 => 29,  96 => 28,  94 => 25,  93 => 24,  92 => 23,  91 => 21,  90 => 20,  89 => 19,  86 => 18,  82 => 16,  80 => 15,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  64 => 8,  62 => 7,  59 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating.html.twig");
    }
}
