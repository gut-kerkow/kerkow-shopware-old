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

/* @Storefront/storefront/page/product-detail/configurator.html.twig */
class __TwigTemplate_b18fe3a3ccdafbcfec6a7d91915168646e53e5416181e2c18fea1efc0882cf07 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_configurator' => [$this, 'block_page_product_detail_configurator'],
            'page_product_detail_configurator_form' => [$this, 'block_page_product_detail_configurator_form'],
            'page_product_detail_configurator_csrf' => [$this, 'block_page_product_detail_configurator_csrf'],
            'page_product_detail_configurator_groups' => [$this, 'block_page_product_detail_configurator_groups'],
            'page_product_detail_configurator_group' => [$this, 'block_page_product_detail_configurator_group'],
            'page_product_detail_configurator_group_title' => [$this, 'block_page_product_detail_configurator_group_title'],
            'page_product_detail_configurator_group_title_text' => [$this, 'block_page_product_detail_configurator_group_title_text'],
            'page_product_detail_configurator_options' => [$this, 'block_page_product_detail_configurator_options'],
            'page_product_detail_configurator_option' => [$this, 'block_page_product_detail_configurator_option'],
            'page_product_detail_configurator_option_radio' => [$this, 'block_page_product_detail_configurator_option_radio'],
            'page_product_detail_configurator_option_radio_label' => [$this, 'block_page_product_detail_configurator_option_radio_label'],
            'page_product_detail_configurator_option_radio_label_media' => [$this, 'block_page_product_detail_configurator_option_radio_label_media'],
            'page_product_detail_configurator_option_radio_label_text' => [$this, 'block_page_product_detail_configurator_option_radio_label_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_configurator', $context, $blocks);
    }

    public function block_page_product_detail_configurator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-detail-configurator\">
        ";
        // line 3
        $context["config"] = ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.detail.switch", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["page"] ?? null), "product", [], "any", false, false, false, 4), "parentId", [], "any", false, false, false, 4)])];
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('page_product_detail_configurator_form', $context, $blocks);
        // line 108
        echo "    </div>
";
    }

    // line 7
    public function block_page_product_detail_configurator_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <form data-variant-switch=\"true\" data-variant-switch-options=\"";
        echo twig_escape_filter($this->env, json_encode(($context["config"] ?? null)), "html", null, true);
        echo "\">

                ";
        // line 10
        $this->displayBlock('page_product_detail_configurator_csrf', $context, $blocks);
        // line 13
        echo "
                ";
        // line 14
        $this->displayBlock('page_product_detail_configurator_groups', $context, $blocks);
        // line 106
        echo "            </form>
        ";
    }

    // line 10
    public function block_page_product_detail_configurator_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.switch");
        echo "
                ";
    }

    // line 14
    public function block_page_product_detail_configurator_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 15));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "                        ";
            $this->displayBlock('page_product_detail_configurator_group', $context, $blocks);
            // line 104
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                ";
    }

    // line 16
    public function block_page_product_detail_configurator_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            <div class=\"product-detail-configurator-group\">
                                ";
        // line 18
        $this->displayBlock('page_product_detail_configurator_group_title', $context, $blocks);
        // line 25
        echo "
                                ";
        // line 26
        $this->displayBlock('page_product_detail_configurator_options', $context, $blocks);
        // line 102
        echo "                            </div>
                        ";
    }

    // line 18
    public function block_page_product_detail_configurator_group_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                    <div class=\"product-detail-configurator-group-title\">
                                        ";
        // line 20
        $this->displayBlock('page_product_detail_configurator_group_title_text', $context, $blocks);
        // line 23
        echo "                                    </div>
                                ";
    }

    // line 20
    public function block_page_product_detail_configurator_group_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "translated", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
                                        ";
    }

    // line 26
    public function block_page_product_detail_configurator_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                    <div class=\"product-detail-configurator-options\">
                                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "options", [], "any", false, false, false, 28));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 29
            echo "
                                            ";
            // line 30
            $context["optionIdentifier"] = twig_join_filter([0 => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 30), 1 => twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 30)], "-");
            // line 31
            echo "                                            ";
            $context["isActive"] = false;
            // line 32
            echo "                                            ";
            $context["isCombinableCls"] = "is-combinable";
            // line 33
            echo "
                                            ";
            // line 34
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 34), "optionIds", [], "any", false, false, false, 34))) {
                // line 35
                echo "                                                ";
                $context["isActive"] = true;
                // line 36
                echo "                                            ";
            }
            // line 37
            echo "
                                            ";
            // line 38
            if ( !twig_get_attribute($this->env, $this->source, $context["option"], "combinable", [], "any", false, false, false, 38)) {
                // line 39
                echo "                                                ";
                $context["isCombinableCls"] = false;
                // line 40
                echo "                                            ";
            }
            // line 41
            echo "
                                            ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 42), "media", [], "any", false, false, false, 42)) {
                // line 43
                echo "                                                ";
                $context["displayType"] = "media";
                // line 44
                echo "                                                ";
                $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 44), "media", [], "any", false, false, false, 44);
                // line 45
                echo "                                            ";
            } else {
                // line 46
                echo "                                                ";
                $context["displayType"] = twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "displayType", [], "any", false, false, false, 46);
                // line 47
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                                                    ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 48);
                    // line 49
                    echo "                                                ";
                } else {
                    // line 50
                    echo "                                                    ";
                    $context["media"] = false;
                    // line 51
                    echo "                                                ";
                }
                // line 52
                echo "                                            ";
            }
            // line 53
            echo "
                                            ";
            // line 54
            $this->displayBlock('page_product_detail_configurator_option', $context, $blocks);
            // line 99
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                    </div>
                                ";
    }

    // line 54
    public function block_page_product_detail_configurator_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                                <div class=\"product-detail-configurator-option\">
                                                    ";
        // line 56
        $this->displayBlock('page_product_detail_configurator_option_radio', $context, $blocks);
        // line 97
        echo "                                                </div>
                                            ";
    }

    // line 56
    public function block_page_product_detail_configurator_option_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                                                        <input type=\"radio\"
                                                               name=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "\"
                                                               value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
        echo "\"
                                                               class=\"product-detail-configurator-option-input";
        // line 60
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo "\"
                                                               title=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                               id=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                               ";
        // line 63
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">

                                                        ";
        // line 65
        $this->displayBlock('page_product_detail_configurator_option_radio_label', $context, $blocks);
        // line 96
        echo "                                                    ";
    }

    // line 65
    public function block_page_product_detail_configurator_option_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                                            <label class=\"product-detail-configurator-option-label";
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo " is-display-";
        echo twig_escape_filter($this->env, ($context["displayType"] ?? null), "html", null, true);
        echo "\"
                                                                   ";
        // line 67
        if (((($context["displayType"] ?? null) == "color") && twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 67))) {
            // line 68
            echo "                                                                   style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 68), "html", null, true);
            echo "\"
                                                                   ";
        }
        // line 70
        echo "                                                                   title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "\"
                                                                   for=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\">

                                                                ";
        // line 73
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 74
            echo "                                                                    ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_media', $context, $blocks);
            // line 87
            echo "                                                                ";
        } elseif ((((($context["displayType"] ?? null) == "text") || ((        // line 88
($context["displayType"] ?? null) == "media") &&  !($context["media"] ?? null))) || ((        // line 89
($context["displayType"] ?? null) == "color") &&  !twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 89)))) {
            // line 90
            echo "                                                                    ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_text', $context, $blocks);
            // line 93
            echo "                                                                ";
        }
        // line 94
        echo "                                                            </label>
                                                        ";
    }

    // line 74
    public function block_page_product_detail_configurator_option_radio_label_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/configurator.html.twig", 75);
        })())->display(twig_array_merge($context, ["media" =>         // line 76
($context["media"] ?? null), "sizes" => ["default" => "52px"], "attributes" => ["class" => "product-detail-configurator-option-image", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["option"] ?? null), "translated", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
($context["option"] ?? null), "translated", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83)], "name" => "configurator-option-img-thumbnails"]));
        // line 86
        echo "                                                                    ";
    }

    // line 90
    public function block_page_product_detail_configurator_option_radio_label_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo "
                                                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/configurator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  443 => 91,  439 => 90,  435 => 86,  433 => 83,  432 => 82,  431 => 76,  423 => 75,  419 => 74,  414 => 94,  411 => 93,  408 => 90,  406 => 89,  405 => 88,  403 => 87,  400 => 74,  398 => 73,  393 => 71,  388 => 70,  382 => 68,  380 => 67,  370 => 66,  366 => 65,  362 => 96,  360 => 65,  353 => 63,  349 => 62,  345 => 61,  338 => 60,  334 => 59,  330 => 58,  327 => 57,  323 => 56,  318 => 97,  316 => 56,  313 => 55,  309 => 54,  304 => 100,  290 => 99,  288 => 54,  285 => 53,  282 => 52,  279 => 51,  276 => 50,  273 => 49,  270 => 48,  267 => 47,  264 => 46,  261 => 45,  258 => 44,  255 => 43,  253 => 42,  250 => 41,  247 => 40,  244 => 39,  242 => 38,  239 => 37,  236 => 36,  233 => 35,  231 => 34,  228 => 33,  225 => 32,  222 => 31,  220 => 30,  217 => 29,  200 => 28,  197 => 27,  193 => 26,  186 => 21,  182 => 20,  177 => 23,  175 => 20,  172 => 19,  168 => 18,  163 => 102,  161 => 26,  158 => 25,  156 => 18,  153 => 17,  149 => 16,  145 => 105,  131 => 104,  128 => 16,  110 => 15,  106 => 14,  99 => 11,  95 => 10,  90 => 106,  88 => 14,  85 => 13,  83 => 10,  77 => 8,  73 => 7,  68 => 108,  66 => 7,  63 => 6,  61 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/configurator.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/configurator.html.twig");
    }
}
