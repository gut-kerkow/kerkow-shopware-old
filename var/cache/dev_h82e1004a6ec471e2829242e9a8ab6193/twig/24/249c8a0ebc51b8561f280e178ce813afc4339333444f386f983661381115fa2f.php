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
class __TwigTemplate_79cb32ca458cf1a07a069b55d57821410f881b5e1ebd85dbc10e61ada5c4d085 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_component_filter_rating_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_component_filter_rating_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        // line 49
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_component_filter_rating_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        // line 53
        echo "                        <span class=\"filter-rating-count\"></span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_component_filter_rating_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        // line 57
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 57);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 58
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_component_filter_rating_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_component_filter_rating_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_component_filter_rating_point_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_component_filter_rating_point_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        // line 75
        echo "                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_component_filter_rating_point_radio_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        // line 82
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 82)->display(twig_array_merge($context, ["type" => "blank"]));
        // line 85
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_component_filter_rating_text_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        // line 91
        echo "                                <div data-rating-text=\"true\"></div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  496 => 91,  486 => 90,  476 => 85,  473 => 82,  463 => 81,  451 => 78,  446 => 75,  436 => 74,  425 => 86,  423 => 81,  420 => 80,  418 => 74,  411 => 72,  406 => 71,  396 => 70,  385 => 93,  383 => 90,  380 => 89,  366 => 88,  364 => 70,  361 => 69,  344 => 68,  341 => 67,  331 => 66,  320 => 95,  318 => 66,  313 => 64,  304 => 63,  294 => 62,  284 => 58,  275 => 57,  265 => 56,  254 => 53,  244 => 52,  231 => 49,  221 => 48,  210 => 59,  208 => 56,  205 => 55,  203 => 52,  200 => 51,  198 => 48,  194 => 46,  187 => 42,  182 => 40,  179 => 39,  177 => 38,  169 => 36,  159 => 35,  147 => 97,  145 => 62,  142 => 61,  140 => 35,  135 => 33,  127 => 31,  124 => 30,  105 => 29,  102 => 28,  100 => 25,  99 => 24,  98 => 23,  97 => 21,  96 => 20,  95 => 19,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  79 => 12,  77 => 11,  74 => 10,  70 => 8,  68 => 7,  65 => 6,  61 => 4,  59 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if maxPoints is not defined %}
    {% set maxPoints = 5 %}
{% endif %}

{% if filterRatingActiveLabelStart is not defined %}
    {% set filterRatingActiveLabelStart = 'listing.filterRatingActiveLabelStart'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEndSingular is not defined %}
    {% set filterRatingActiveLabelEndSingular = 'listing.filterRatingActiveLabelEndSingular'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEnd is not defined %}
    {% set filterRatingActiveLabelEnd = 'listing.filterRatingActiveLabelEnd'|trans|sw_sanitize %}
{% endif %}

{% set filterRatingOptions = {
    name: name,
    maxPoints: maxPoints,
    snippets: {
        filterRatingActiveLabelStart: filterRatingActiveLabelStart,
        filterRatingActiveLabelEndSingular: filterRatingActiveLabelEndSingular,
        filterRatingActiveLabelEnd: filterRatingActiveLabelEnd,
    }
} %}

{% block component_filter_rating %}
    {% if shopware.config.core.listing.showReview %}
        <div class=\"filter-rating filter-panel-item{% if not sidebar %} dropdown{% endif %}\"
             data-filter-rating=\"true\"
             data-filter-rating-options='{{ filterRatingOptions|json_encode }}'>

            {% block component_filter_rating_toggle %}
                <button class=\"filter-panel-item-toggle btn{% if sidebar %} btn-block{% endif %}\"
                        aria-expanded=\"false\"
                        {% if sidebar %}
                            data-toggle=\"collapse\"
                            data-target=\"#{{ filterItemId }}\"
                        {% else %}
                            data-toggle=\"dropdown\"
                            data-boundary=\"viewport\"
                            data-offset=\"0,8\"
                            aria-haspopup=\"true\"
                        {% endif %}>

                    {% block component_filter_rating_display_name %}
                        {{ displayName }}
                    {% endblock %}

                    {% block component_filter_rating_count %}
                        <span class=\"filter-rating-count\"></span>
                    {% endblock %}

                    {% block component_filter_rating_toggle_icon %}
                        {% sw_icon 'arrow-medium-down' style {'pack': 'solid', 'size': 'xs', 'class': 'filter-panel-item-toggle'} %}
                    {% endblock %}
                </button>
            {% endblock %}

            {% block component_filter_rating_dropdown %}
                <div class=\"filter-rating-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                     id=\"{{ filterItemId }}\">

                    {% block component_filter_rating_container %}
                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            {% for point in 1..maxPoints %}

                                {% block component_filter_rating_point_label %}
                                    <label data-review-form-point=\"{{ point }}\"
                                           class=\"filter-rating-star {% if currentPoints >= point %} is-active{% endif %}\">

                                        {% block component_filter_rating_point_radio %}
                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"{{ point }}\">
                                        {% endblock %}

                                        {% block component_filter_rating_point_radio_element %}
                                            {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                                                type: 'blank'
                                            } %}
                                        {% endblock %}
                                    </label>
                                {% endblock %}
                            {% endfor %}

                            {% block component_filter_rating_text_placeholder %}
                                <div data-rating-text=\"true\"></div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating.html.twig");
    }
}
