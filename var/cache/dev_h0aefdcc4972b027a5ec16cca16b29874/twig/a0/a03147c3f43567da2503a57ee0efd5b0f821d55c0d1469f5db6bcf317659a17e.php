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
class __TwigTemplate_2afcbf8ea5cd8bcc0d21aba426b8325dbdd200e1daaf1a689fa9da153c8c8d7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/configurator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/configurator.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_configurator', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_configurator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_page_product_detail_configurator_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_form"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_page_product_detail_configurator_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_csrf"));

        // line 11
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.switch");
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_product_detail_configurator_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_groups"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_groups"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_product_detail_configurator_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_page_product_detail_configurator_group_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title"));

        // line 19
        echo "                                    <div class=\"product-detail-configurator-group-title\">
                                        ";
        // line 20
        $this->displayBlock('page_product_detail_configurator_group_title_text', $context, $blocks);
        // line 23
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_page_product_detail_configurator_group_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title_text"));

        // line 21
        echo "                                            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "translated", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_page_product_detail_configurator_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_options"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_page_product_detail_configurator_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option"));

        // line 55
        echo "                                                <div class=\"product-detail-configurator-option\">
                                                    ";
        // line 56
        $this->displayBlock('page_product_detail_configurator_option_radio', $context, $blocks);
        // line 97
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_page_product_detail_configurator_option_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_page_product_detail_configurator_option_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_page_product_detail_configurator_option_radio_label_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_media"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_page_product_detail_configurator_option_radio_label_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_text"));

        // line 91
        echo "                                                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo "
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/configurator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  605 => 91,  595 => 90,  585 => 86,  583 => 83,  582 => 82,  581 => 76,  573 => 75,  563 => 74,  552 => 94,  549 => 93,  546 => 90,  544 => 89,  543 => 88,  541 => 87,  538 => 74,  536 => 73,  531 => 71,  526 => 70,  520 => 68,  518 => 67,  508 => 66,  498 => 65,  488 => 96,  486 => 65,  479 => 63,  475 => 62,  471 => 61,  464 => 60,  460 => 59,  456 => 58,  453 => 57,  443 => 56,  432 => 97,  430 => 56,  427 => 55,  417 => 54,  406 => 100,  392 => 99,  390 => 54,  387 => 53,  384 => 52,  381 => 51,  378 => 50,  375 => 49,  372 => 48,  369 => 47,  366 => 46,  363 => 45,  360 => 44,  357 => 43,  355 => 42,  352 => 41,  349 => 40,  346 => 39,  344 => 38,  341 => 37,  338 => 36,  335 => 35,  333 => 34,  330 => 33,  327 => 32,  324 => 31,  322 => 30,  319 => 29,  302 => 28,  299 => 27,  289 => 26,  276 => 21,  266 => 20,  255 => 23,  253 => 20,  250 => 19,  240 => 18,  229 => 102,  227 => 26,  224 => 25,  222 => 18,  219 => 17,  209 => 16,  199 => 105,  185 => 104,  182 => 16,  164 => 15,  154 => 14,  141 => 11,  131 => 10,  120 => 106,  118 => 14,  115 => 13,  113 => 10,  107 => 8,  97 => 7,  86 => 108,  84 => 7,  81 => 6,  79 => 4,  78 => 3,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_configurator %}
    <div class=\"product-detail-configurator\">
        {% set config = {
            url: url('frontend.detail.switch', { productId: page.product.parentId })
        } %}

        {% block page_product_detail_configurator_form %}
            <form data-variant-switch=\"true\" data-variant-switch-options=\"{{ config|json_encode }}\">

                {% block page_product_detail_configurator_csrf %}
                    {{ sw_csrf('frontend.detail.switch') }}
                {% endblock %}

                {% block page_product_detail_configurator_groups %}
                    {% for group in page.configuratorSettings %}
                        {% block page_product_detail_configurator_group %}
                            <div class=\"product-detail-configurator-group\">
                                {% block page_product_detail_configurator_group_title %}
                                    <div class=\"product-detail-configurator-group-title\">
                                        {% block page_product_detail_configurator_group_title_text %}
                                            {{ group.translated.name }}
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block page_product_detail_configurator_options %}
                                    <div class=\"product-detail-configurator-options\">
                                        {% for option in group.options %}

                                            {% set optionIdentifier = [group.id, option.id]|join('-') %}
                                            {% set isActive = false %}
                                            {% set isCombinableCls = 'is-combinable' %}

                                            {% if option.id in page.product.optionIds %}
                                                {% set isActive = true %}
                                            {% endif %}

                                            {% if not option.combinable %}
                                                {% set isCombinableCls = false %}
                                            {% endif %}

                                            {% if option.configuratorSetting.media %}
                                                {% set displayType = 'media' %}
                                                {% set media = option.configuratorSetting.media %}
                                            {% else %}
                                                {% set displayType = group.displayType %}
                                                {% if option.media %}
                                                    {% set media = option.media %}
                                                {% else %}
                                                    {% set media = false %}
                                                {% endif %}
                                            {% endif %}

                                            {% block page_product_detail_configurator_option %}
                                                <div class=\"product-detail-configurator-option\">
                                                    {% block page_product_detail_configurator_option_radio %}
                                                        <input type=\"radio\"
                                                               name=\"{{ group.id }}\"
                                                               value=\"{{ option.id }}\"
                                                               class=\"product-detail-configurator-option-input{% if isCombinableCls %} {{ isCombinableCls }}{% endif %}\"
                                                               title=\"{{ optionIdentifier }}\"
                                                               id=\"{{ optionIdentifier }}\"
                                                               {% if isActive %}checked=\"checked\"{% endif %}>

                                                        {% block page_product_detail_configurator_option_radio_label %}
                                                            <label class=\"product-detail-configurator-option-label{% if isCombinableCls %} {{ isCombinableCls }}{% endif %} is-display-{{ displayType }}\"
                                                                   {% if displayType == 'color' and option.colorHexCode %}
                                                                   style=\"background-color: {{ option.colorHexCode }}\"
                                                                   {% endif %}
                                                                   title=\"{{ option.translated.name }}\"
                                                                   for=\"{{ optionIdentifier }}\">

                                                                {% if displayType == 'media' and media %}
                                                                    {% block page_product_detail_configurator_option_radio_label_media %}
                                                                        {% sw_thumbnails 'configurator-option-img-thumbnails' with {
                                                                            media: media,
                                                                            sizes: {
                                                                                'default': '52px'
                                                                            },
                                                                            attributes: {
                                                                                'class': 'product-detail-configurator-option-image',
                                                                                'alt': option.translated.name,
                                                                                'title': option.translated.name
                                                                            }
                                                                        } %}
                                                                    {% endblock %}
                                                                {% elseif displayType == 'text' or
                                                                          (displayType == 'media' and not media) or
                                                                          (displayType == 'color' and not option.colorHexCode) %}
                                                                    {% block page_product_detail_configurator_option_radio_label_text %}
                                                                        {{ option.translated.name }}
                                                                    {% endblock %}
                                                                {% endif %}
                                                            </label>
                                                        {% endblock %}
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        {% endfor %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </form>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/configurator.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/configurator.html.twig");
    }
}
