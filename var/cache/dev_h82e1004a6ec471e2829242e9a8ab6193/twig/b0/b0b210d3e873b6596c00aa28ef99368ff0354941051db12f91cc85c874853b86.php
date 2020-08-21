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

/* @Storefront/storefront/layout/header/search-suggest.html.twig */
class __TwigTemplate_c263e607f1f3ef76e65652b5f1cc4c0f6c8cea9ad5b0e8a3783de7049a89e835 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_search_suggest' => [$this, 'block_layout_search_suggest'],
            'layout_search_suggest_container' => [$this, 'block_layout_search_suggest_container'],
            'layout_search_suggest_results' => [$this, 'block_layout_search_suggest_results'],
            'layout_search_suggest_result_product' => [$this, 'block_layout_search_suggest_result_product'],
            'layout_search_suggest_result_link' => [$this, 'block_layout_search_suggest_result_link'],
            'layout_search_suggest_result_image' => [$this, 'block_layout_search_suggest_result_image'],
            'layout_search_suggest_result_name' => [$this, 'block_layout_search_suggest_result_name'],
            'layout_search_suggest_result_price' => [$this, 'block_layout_search_suggest_result_price'],
            'layout_search_suggest_result_total' => [$this, 'block_layout_search_suggest_result_total'],
            'layout_search_suggest_no_result' => [$this, 'block_layout_search_suggest_no_result'],
            'layout_search_suggest_result_total_result' => [$this, 'block_layout_search_suggest_result_total_result'],
            'layout_search_suggest_result_total_link' => [$this, 'block_layout_search_suggest_result_total_link'],
            'layout_search_suggest_result_total_count' => [$this, 'block_layout_search_suggest_result_total_count'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search-suggest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search-suggest.html.twig"));

        // line 1
        $this->displayBlock('layout_search_suggest', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_search_suggest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest"));

        // line 2
        echo "    <div class=\"search-suggest js-search-result\">
        ";
        // line 3
        $this->displayBlock('layout_search_suggest_container', $context, $blocks);
        // line 103
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_layout_search_suggest_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_container"));

        // line 4
        echo "            <ul class=\"search-suggest-container\">
                ";
        // line 5
        $this->displayBlock('layout_search_suggest_results', $context, $blocks);
        // line 65
        echo "
                ";
        // line 66
        $this->displayBlock('layout_search_suggest_result_total', $context, $blocks);
        // line 101
        echo "            </ul>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_layout_search_suggest_results($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_results"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_results"));

        // line 6
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchResult", [], "any", false, false, false, 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "                        ";
            $this->displayBlock('layout_search_suggest_result_product', $context, $blocks);
            // line 63
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_layout_search_suggest_result_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_product"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_product"));

        // line 8
        echo "                            <li class=\"search-suggest-product js-result\">
                                ";
        // line 9
        $this->displayBlock('layout_search_suggest_result_link', $context, $blocks);
        // line 61
        echo "                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_layout_search_suggest_result_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_link"));

        // line 10
        echo "                                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                                       class=\"search-suggest-product-link\">
                                        <div class=\"row align-items-center no-gutters\">
                                            ";
        // line 14
        $this->displayBlock('layout_search_suggest_result_image', $context, $blocks);
        // line 35
        echo "
                                            ";
        // line 36
        $this->displayBlock('layout_search_suggest_result_name', $context, $blocks);
        // line 41
        echo "
                                            ";
        // line 42
        $this->displayBlock('layout_search_suggest_result_price', $context, $blocks);
        // line 58
        echo "                                        </div>
                                    </a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_layout_search_suggest_result_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_image"));

        // line 15
        echo "                                                <div class=\"col-auto search-suggest-product-image-container\">
                                                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 16), "media", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16)) {
            // line 17
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search-suggest.html.twig", 17);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
($context["product"] ?? null), "cover", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "sizes" => ["default" => "100px"], "attributes" => ["class" => "search-suggest-product-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["product"] ?? null), "cover", [], "any", false, false, false, 24), "media", [], "any", false, false, false, 24), "translated", [], "any", false, false, false, 24), "alt", [], "any", false, false, false, 24)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 24), "media", [], "any", false, false, false, 24), "translated", [], "any", false, false, false, 24), "alt", [], "any", false, false, false, 24)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
($context["product"] ?? null), "cover", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25)) : (""))], "name" => "search-suggest-product-image-thumbnails"]));
            // line 28
            echo "                                                    ";
        } else {
            // line 29
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search-suggest.html.twig", 29);
            })())->display(twig_array_merge($context, ["size" => "lg", "name" => "placeholder"]));
            // line 32
            echo "                                                    ";
        }
        // line 33
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_layout_search_suggest_result_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_name"));

        // line 37
        echo "                                                <div class=\"col search-suggest-product-name\">
                                                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_layout_search_suggest_result_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_price"));

        // line 43
        echo "                                                <div class=\"col-auto search-suggest-product-price\">
                                                    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 44)) {
            // line 45
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 45), "from", [], "any", false, false, false, 45), "unitPrice", [], "any", false, false, false, 45)), "html", null, true);
            echo "
                                                        -
                                                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 47), "to", [], "any", false, false, false, 47), "unitPrice", [], "any", false, false, false, 47)), "html", null, true);
            echo "
                                                    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 48
($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 48)) == 1)) {
            // line 49
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), "unitPrice", [], "any", false, false, false, 49)), "html", null, true);
            echo "
                                                    ";
        } else {
            // line 51
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 51), "unitPrice", [], "any", false, false, false, 51)), "html", null, true);
            echo "
                                                    ";
        }
        // line 53
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 53), "referencePrice", [], "any", false, false, false, 53))) {
            // line 54
            echo "                                                        <br><small class=\"search-suggest-product-reference-price\">(";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 54), "referencePrice", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 54), "referencePrice", [], "any", false, false, false, 54), "referenceUnit", [], "any", false, false, false, 54), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 54), "referencePrice", [], "any", false, false, false, 54), "unitName", [], "any", false, false, false, 54), "html", null, true);
            echo ")</small>
                                                    ";
        }
        // line 56
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_layout_search_suggest_result_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total"));

        // line 67
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchResult", [], "any", false, false, false, 67), "total", [], "any", false, false, false, 67) == 0)) {
            // line 68
            echo "                        ";
            $this->displayBlock('layout_search_suggest_no_result', $context, $blocks);
            // line 73
            echo "                    ";
        } else {
            // line 74
            echo "
                        ";
            // line 75
            $this->displayBlock('layout_search_suggest_result_total_result', $context, $blocks);
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_layout_search_suggest_no_result($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_no_result"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_no_result"));

        // line 69
        echo "                            <li class=\"search-suggest-no-result\">
                                ";
        // line 70
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchNoResult"));
        echo "
                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_layout_search_suggest_result_total_result($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_result"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_result"));

        // line 76
        echo "                            <li class=\"js-result search-suggest-total\">
                                <div class=\"row align-items-center no-gutters\">
                                    ";
        // line 78
        $this->displayBlock('layout_search_suggest_result_total_link', $context, $blocks);
        // line 88
        echo "
                                    ";
        // line 89
        $this->displayBlock('layout_search_suggest_result_total_count', $context, $blocks);
        // line 96
        echo "                                </div>
                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_layout_search_suggest_result_total_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_link"));

        // line 79
        echo "                                        <div class=\"col\">
                                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "?search=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 80), "html", null, true);
        echo "\"
                                               title=\"";
        // line 81
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchAllResults")), "html", null, true);
        echo "\"
                                               class=\"search-suggest-total-link\">
                                                ";
        // line 83
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search-suggest.html.twig", 83);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-right"]));
        // line 84
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchAllResults"));
        echo "
                                            </a>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_layout_search_suggest_result_total_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_count"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_search_suggest_result_total_count"));

        // line 90
        echo "                                        <div class=\"col-auto search-suggest-total-count\">
                                            ";
        // line 91
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchResults", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["page"] ?? null), "searchResult", [], "any", false, false, false, 92), "total", [], "any", false, false, false, 92)]));
        // line 93
        echo "
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search-suggest.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  550 => 93,  548 => 92,  547 => 91,  544 => 90,  534 => 89,  519 => 84,  511 => 83,  506 => 81,  500 => 80,  497 => 79,  487 => 78,  475 => 96,  473 => 89,  470 => 88,  468 => 78,  464 => 76,  454 => 75,  441 => 70,  438 => 69,  428 => 68,  418 => 100,  415 => 99,  413 => 75,  410 => 74,  407 => 73,  404 => 68,  401 => 67,  391 => 66,  380 => 56,  369 => 54,  366 => 53,  360 => 51,  354 => 49,  352 => 48,  348 => 47,  342 => 45,  340 => 44,  337 => 43,  327 => 42,  314 => 38,  311 => 37,  301 => 36,  290 => 33,  287 => 32,  278 => 29,  275 => 28,  273 => 25,  272 => 24,  271 => 18,  263 => 17,  261 => 16,  258 => 15,  248 => 14,  236 => 58,  234 => 42,  231 => 41,  229 => 36,  226 => 35,  224 => 14,  218 => 11,  213 => 10,  203 => 9,  192 => 61,  190 => 9,  187 => 8,  177 => 7,  167 => 64,  153 => 63,  150 => 7,  132 => 6,  122 => 5,  111 => 101,  109 => 66,  106 => 65,  104 => 5,  101 => 4,  91 => 3,  80 => 103,  78 => 3,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_search_suggest %}
    <div class=\"search-suggest js-search-result\">
        {% block layout_search_suggest_container %}
            <ul class=\"search-suggest-container\">
                {% block layout_search_suggest_results %}
                    {% for product in page.searchResult %}
                        {% block layout_search_suggest_result_product %}
                            <li class=\"search-suggest-product js-result\">
                                {% block layout_search_suggest_result_link %}
                                    <a href=\"{{ seoUrl('frontend.detail.page', {'productId': product.id}) }}\"
                                       title=\"{{ product.translated.name }}\"
                                       class=\"search-suggest-product-link\">
                                        <div class=\"row align-items-center no-gutters\">
                                            {% block layout_search_suggest_result_image %}
                                                <div class=\"col-auto search-suggest-product-image-container\">
                                                    {% if product.cover.media.url %}
                                                        {% sw_thumbnails 'search-suggest-product-image-thumbnails' with {
                                                            media: product.cover.media,
                                                            sizes: {
                                                                'default': '100px'
                                                            },
                                                            attributes: {
                                                                'class': 'search-suggest-product-image',
                                                                'alt': (product.cover.media.translated.alt ?: ''),
                                                                'title': (product.cover.media.translated.title ?: '')
                                                            }
                                                        } %}
                                                    {% else %}
                                                        {% sw_icon 'placeholder' style {
                                                            'size': 'lg'
                                                        } %}
                                                    {% endif %}
                                                </div>
                                            {% endblock %}

                                            {% block layout_search_suggest_result_name %}
                                                <div class=\"col search-suggest-product-name\">
                                                    {{ product.translated.name }}
                                                </div>
                                            {% endblock %}

                                            {% block layout_search_suggest_result_price %}
                                                <div class=\"col-auto search-suggest-product-price\">
                                                    {% if product.priceRange %}
                                                        {{ product.calculatedListingPrice.from.unitPrice|currency }}
                                                        -
                                                        {{ product.calculatedListingPrice.to.unitPrice|currency}}
                                                    {% elseif product.calculatedPrices|length == 1 %}
                                                        {{ product.calculatedPrices.first.unitPrice|currency }}
                                                    {% else %}
                                                        {{ product.calculatedPrice.unitPrice|currency }}
                                                    {% endif %}
                                                    {% if product.calculatedPrice.referencePrice is not null %}
                                                        <br><small class=\"search-suggest-product-reference-price\">({{ product.calculatedPrice.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ product.calculatedPrice.referencePrice.referenceUnit }}&nbsp;{{ product.calculatedPrice.referencePrice.unitName }})</small>
                                                    {% endif %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    </a>
                                {% endblock %}
                            </li>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}

                {% block layout_search_suggest_result_total %}
                    {% if page.searchResult.total == 0 %}
                        {% block layout_search_suggest_no_result %}
                            <li class=\"search-suggest-no-result\">
                                {{ \"header.searchNoResult\"|trans|sw_sanitize }}
                            </li>
                        {% endblock %}
                    {% else %}

                        {% block layout_search_suggest_result_total_result %}
                            <li class=\"js-result search-suggest-total\">
                                <div class=\"row align-items-center no-gutters\">
                                    {% block layout_search_suggest_result_total_link %}
                                        <div class=\"col\">
                                            <a href=\"{{ path('frontend.search.page') }}?search={{ page.searchTerm }}\"
                                               title=\"{{ \"header.searchAllResults\"|trans|striptags }}\"
                                               class=\"search-suggest-total-link\">
                                                {% sw_icon 'arrow-head-right' style { 'size': 'sm' } %}
                                                {{ \"header.searchAllResults\"|trans|sw_sanitize }}
                                            </a>
                                        </div>
                                    {% endblock %}

                                    {% block layout_search_suggest_result_total_count %}
                                        <div class=\"col-auto search-suggest-total-count\">
                                            {{ \"header.searchResults\"|trans({
                                                '%count%': page.searchResult.total,
                                            })|sw_sanitize }}
                                        </div>
                                    {% endblock %}
                                </div>
                            </li>
                        {% endblock %}
                    {% endif %}
                {% endblock %}
            </ul>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/search-suggest.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/header/search-suggest.html.twig");
    }
}
