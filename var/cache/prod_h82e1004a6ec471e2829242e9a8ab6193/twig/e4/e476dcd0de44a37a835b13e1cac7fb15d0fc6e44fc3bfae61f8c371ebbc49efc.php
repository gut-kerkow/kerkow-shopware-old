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

/* @Storefront/storefront/component/listing/filter/filter-multi-select.html.twig */
class __TwigTemplate_890ba8c44dbb81f143b4953bc0b5f87938fa6327b7685c063ddf43888d120641 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_multi_select' => [$this, 'block_component_filter_multi_select'],
            'component_filter_multi_select_toggle' => [$this, 'block_component_filter_multi_select_toggle'],
            'component_filter_multi_select_display_name' => [$this, 'block_component_filter_multi_select_display_name'],
            'component_filter_multi_select_count' => [$this, 'block_component_filter_multi_select_count'],
            'component_filter_multi_select_toggle_icon' => [$this, 'block_component_filter_multi_select_toggle_icon'],
            'component_filter_multi_select_dropdown' => [$this, 'block_component_filter_multi_select_dropdown'],
            'component_filter_multi_select_list' => [$this, 'block_component_filter_multi_select_list'],
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_inner' => [$this, 'block_component_filter_multi_select_list_item_inner'],
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
        if ( !(isset($context["pluginSelector"]) || array_key_exists("pluginSelector", $context))) {
            // line 4
            echo "    ";
            $context["pluginSelector"] = "filter-multi-select";
        }
        // line 6
        echo "
";
        // line 7
        $context["dataPluginSelectorOptions"] = ["name" =>         // line 8
($context["name"] ?? null)];
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('component_filter_multi_select', $context, $blocks);
    }

    public function block_component_filter_multi_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"filter-multi-select filter-multi-select-";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-";
        // line 13
        echo twig_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "=\"true\"
         data-";
        // line 14
        echo twig_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "-options='";
        echo twig_escape_filter($this->env, json_encode(($context["dataPluginSelectorOptions"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 16
        $this->displayBlock('component_filter_multi_select_toggle', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('component_filter_multi_select_dropdown', $context, $blocks);
        // line 63
        echo "    </div>
";
    }

    // line 16
    public function block_component_filter_multi_select_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 19
        if (($context["sidebar"] ?? null)) {
            // line 20
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 21
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 23
            echo "                    data-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 27
        echo ">

                ";
        // line 29
        $this->displayBlock('component_filter_multi_select_display_name', $context, $blocks);
        // line 32
        echo "
                ";
        // line 33
        $this->displayBlock('component_filter_multi_select_count', $context, $blocks);
        // line 36
        echo "
                ";
        // line 37
        $this->displayBlock('component_filter_multi_select_toggle_icon', $context, $blocks);
        // line 42
        echo "            </button>
        ";
    }

    // line 29
    public function block_component_filter_multi_select_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 33
    public function block_component_filter_multi_select_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <span class=\"filter-multi-select-count\"></span>
                ";
    }

    // line 37
    public function block_component_filter_multi_select_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 38);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 41
        echo "                ";
    }

    // line 45
    public function block_component_filter_multi_select_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <div class=\"filter-multi-select-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 48
        $this->displayBlock('component_filter_multi_select_list', $context, $blocks);
        // line 61
        echo "            </div>
        ";
    }

    // line 48
    public function block_component_filter_multi_select_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                    <ul class=\"filter-multi-select-list\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 51
            echo "                            ";
            $this->displayBlock('component_filter_multi_select_list_item', $context, $blocks);
            // line 58
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </ul>
                ";
    }

    // line 51
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                                <li class=\"filter-multi-select-list-item\">
                                    ";
        // line 53
        $this->displayBlock('component_filter_multi_select_list_item_inner', $context, $blocks);
        // line 56
        echo "                                </li>
                            ";
    }

    // line 53
    public function block_component_filter_multi_select_list_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 54)->display($context);
        // line 55
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 55,  280 => 54,  276 => 53,  271 => 56,  269 => 53,  266 => 52,  262 => 51,  257 => 59,  243 => 58,  240 => 51,  223 => 50,  220 => 49,  216 => 48,  211 => 61,  209 => 48,  205 => 47,  196 => 46,  192 => 45,  188 => 41,  179 => 38,  175 => 37,  170 => 34,  166 => 33,  159 => 30,  155 => 29,  150 => 42,  148 => 37,  145 => 36,  143 => 33,  140 => 32,  138 => 29,  134 => 27,  127 => 23,  122 => 21,  119 => 20,  117 => 19,  109 => 17,  105 => 16,  100 => 63,  98 => 45,  95 => 44,  93 => 16,  86 => 14,  82 => 13,  73 => 12,  66 => 11,  63 => 10,  61 => 8,  60 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select.html.twig");
    }
}
