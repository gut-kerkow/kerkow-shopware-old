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

/* @Storefront/storefront/component/listing/filter/filter-range.html.twig */
class __TwigTemplate_f7d1945444278d1f04c053e341e6afbd0bf5089136fbbe413cbd36be4467cb63 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_range' => [$this, 'block_component_filter_range'],
            'component_filter_range_toggle' => [$this, 'block_component_filter_range_toggle'],
            'component_filter_range_display_name' => [$this, 'block_component_filter_range_display_name'],
            'component_filter_range_toggle_icon' => [$this, 'block_component_filter_range_toggle_icon'],
            'component_filter_range_dropdown' => [$this, 'block_component_filter_range_dropdown'],
            'component_filter_range_container' => [$this, 'block_component_filter_range_container'],
            'component_filter_range_min' => [$this, 'block_component_filter_range_min'],
            'component_filter_range_min_label' => [$this, 'block_component_filter_range_min_label'],
            'component_filter_range_min_input' => [$this, 'block_component_filter_range_min_input'],
            'component_filter_range_min_currency_symbol' => [$this, 'block_component_filter_range_min_currency_symbol'],
            'component_filter_range_divider' => [$this, 'block_component_filter_range_divider'],
            'component_filter_range_max' => [$this, 'block_component_filter_range_max'],
            'component_filter_range_max_label' => [$this, 'block_component_filter_range_max_label'],
            'component_filter_range_max_input' => [$this, 'block_component_filter_range_max_input'],
            'component_filter_range_max_currency_symbol' => [$this, 'block_component_filter_range_max_currency_symbol'],
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
        if ( !(isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context))) {
            // line 4
            echo "    ";
            $context["currencySymbol"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "activeCurrency", [], "any", false, false, false, 4), "symbol", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["filterRangeActiveMinLabel"]) || array_key_exists("filterRangeActiveMinLabel", $context))) {
            // line 8
            echo "    ";
            $context["filterRangeActiveMinLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMinLabel"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["filterRangeActiveMaxLabel"]) || array_key_exists("filterRangeActiveMaxLabel", $context))) {
            // line 12
            echo "    ";
            $context["filterRangeActiveMaxLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMaxLabel"));
        }
        // line 14
        echo "
";
        // line 15
        if ( !(isset($context["filterRangeErrorMessage"]) || array_key_exists("filterRangeErrorMessage", $context))) {
            // line 16
            echo "    ";
            $context["filterRangeErrorMessage"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeErrorMessage"));
        }
        // line 18
        echo "
";
        // line 19
        $context["filterRangeOptions"] = ["name" =>         // line 20
($context["name"] ?? null), "minKey" =>         // line 21
($context["minKey"] ?? null), "maxKey" =>         // line 22
($context["maxKey"] ?? null), "currencySymbol" =>         // line 23
($context["currencySymbol"] ?? null), "snippets" => ["filterRangeActiveMinLabel" =>         // line 25
($context["filterRangeActiveMinLabel"] ?? null), "filterRangeActiveMaxLabel" =>         // line 26
($context["filterRangeActiveMaxLabel"] ?? null), "filterRangeErrorMessage" =>         // line 27
($context["filterRangeErrorMessage"] ?? null)]];
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('component_filter_range', $context, $blocks);
    }

    public function block_component_filter_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"filter-range filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-filter-range=\"true\"
         data-filter-range-options='";
        // line 34
        echo twig_escape_filter($this->env, json_encode(($context["filterRangeOptions"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 36
        $this->displayBlock('component_filter_range_toggle', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('component_filter_range_dropdown', $context, $blocks);
        // line 121
        echo "    </div>
";
    }

    // line 36
    public function block_component_filter_range_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 39
        if (($context["sidebar"] ?? null)) {
            // line 40
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 41
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 43
            echo "                    data-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 47
        echo ">

                ";
        // line 49
        $this->displayBlock('component_filter_range_display_name', $context, $blocks);
        // line 52
        echo "
                ";
        // line 53
        $this->displayBlock('component_filter_range_toggle_icon', $context, $blocks);
        // line 56
        echo "            </button>
        ";
    }

    // line 49
    public function block_component_filter_range_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 53
    public function block_component_filter_range_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-range.html.twig", 54);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 55
        echo "                ";
    }

    // line 59
    public function block_component_filter_range_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <div class=\"filter-range-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                ";
        // line 63
        $this->displayBlock('component_filter_range_container', $context, $blocks);
        // line 119
        echo "            </div>
        ";
    }

    // line 63
    public function block_component_filter_range_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                    <div class=\"filter-range-container\">

                        ";
        // line 66
        $this->displayBlock('component_filter_range_min', $context, $blocks);
        // line 88
        echo "
                        ";
        // line 89
        $this->displayBlock('component_filter_range_divider', $context, $blocks);
        // line 94
        echo "
                        ";
        // line 95
        $this->displayBlock('component_filter_range_max', $context, $blocks);
        // line 117
        echo "                    </div>
                ";
    }

    // line 66
    public function block_component_filter_range_min($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                            <label class=\"filter-range-min\">

                                ";
        // line 69
        $this->displayBlock('component_filter_range_min_label', $context, $blocks);
        // line 72
        echo "
                                ";
        // line 73
        $this->displayBlock('component_filter_range_min_input', $context, $blocks);
        // line 80
        echo "
                                ";
        // line 81
        $this->displayBlock('component_filter_range_min_currency_symbol', $context, $blocks);
        // line 86
        echo "                            </label>
                        ";
    }

    // line 69
    public function block_component_filter_range_min_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMinLabel"));
        echo "
                                ";
    }

    // line 73
    public function block_component_filter_range_min_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"min-price\"
                                           min=\"0\"
                                           max=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
                                ";
    }

    // line 81
    public function block_component_filter_range_min_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 83
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
    }

    // line 89
    public function block_component_filter_range_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        ";
    }

    // line 95
    public function block_component_filter_range_max($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                            <label class=\"filter-range-max\">

                                ";
        // line 98
        $this->displayBlock('component_filter_range_max_label', $context, $blocks);
        // line 101
        echo "
                                ";
        // line 102
        $this->displayBlock('component_filter_range_max_input', $context, $blocks);
        // line 109
        echo "
                                ";
        // line 110
        $this->displayBlock('component_filter_range_max_currency_symbol', $context, $blocks);
        // line 115
        echo "                            </label>
                        ";
    }

    // line 98
    public function block_component_filter_range_max_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMaxLabel"));
        echo "
                                ";
    }

    // line 102
    public function block_component_filter_range_max_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"max-price\"
                                           min=\"0\"
                                           max=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                                ";
    }

    // line 110
    public function block_component_filter_range_max_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 112
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 112,  393 => 111,  389 => 110,  383 => 107,  377 => 103,  373 => 102,  366 => 99,  362 => 98,  357 => 115,  355 => 110,  352 => 109,  350 => 102,  347 => 101,  345 => 98,  341 => 96,  337 => 95,  330 => 90,  326 => 89,  319 => 83,  316 => 82,  312 => 81,  306 => 78,  300 => 74,  296 => 73,  289 => 70,  285 => 69,  280 => 86,  278 => 81,  275 => 80,  273 => 73,  270 => 72,  268 => 69,  264 => 67,  260 => 66,  255 => 117,  253 => 95,  250 => 94,  248 => 89,  245 => 88,  243 => 66,  239 => 64,  235 => 63,  230 => 119,  228 => 63,  223 => 61,  214 => 60,  210 => 59,  206 => 55,  197 => 54,  193 => 53,  186 => 50,  182 => 49,  177 => 56,  175 => 53,  172 => 52,  170 => 49,  166 => 47,  159 => 43,  154 => 41,  151 => 40,  149 => 39,  141 => 37,  137 => 36,  132 => 121,  130 => 59,  127 => 58,  125 => 36,  120 => 34,  112 => 32,  105 => 31,  102 => 30,  100 => 27,  99 => 26,  98 => 25,  97 => 23,  96 => 22,  95 => 21,  94 => 20,  93 => 19,  90 => 18,  86 => 16,  84 => 15,  81 => 14,  77 => 12,  75 => 11,  72 => 10,  68 => 8,  66 => 7,  63 => 6,  59 => 4,  57 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-range.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-range.html.twig");
    }
}
