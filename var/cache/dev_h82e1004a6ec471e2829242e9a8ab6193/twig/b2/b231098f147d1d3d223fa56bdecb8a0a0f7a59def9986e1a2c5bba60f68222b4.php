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

/* @Storefront/storefront/page/product-detail/review/review-widget.html.twig */
class __TwigTemplate_42b620579c9c5212a3ba133061f7209544548771efd9e3c00eec3599e595d030 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_widget' => [$this, 'block_page_product_detail_review_widget'],
            'page_product_detail_review_info_container' => [$this, 'block_page_product_detail_review_info_container'],
            'page_product_detail_review_info' => [$this, 'block_page_product_detail_review_info'],
            'page_product_detail_review_title' => [$this, 'block_page_product_detail_review_title'],
            'page_product_detail_review_overview' => [$this, 'block_page_product_detail_review_overview'],
            'page_product_detail_review_filter' => [$this, 'block_page_product_detail_review_filter'],
            'page_product_detail_review_filter_csrf' => [$this, 'block_page_product_detail_review_filter_csrf'],
            'page_product_detail_review_filter_box' => [$this, 'block_page_product_detail_review_filter_box'],
            'page_product_detail_review_filter_checkbox' => [$this, 'block_page_product_detail_review_filter_checkbox'],
            'page_product_detail_review_filter_checkbox_input' => [$this, 'block_page_product_detail_review_filter_checkbox_input'],
            'page_product_detail_review_filter_checkbox_label' => [$this, 'block_page_product_detail_review_filter_checkbox_label'],
            'page_product_detail_review_filter_progressbar' => [$this, 'block_page_product_detail_review_filter_progressbar'],
            'page_product_detail_review_filter_share' => [$this, 'block_page_product_detail_review_filter_share'],
            'page_product_detail_review_filter_divider' => [$this, 'block_page_product_detail_review_filter_divider'],
            'page_product_detail_review_form_teaser' => [$this, 'block_page_product_detail_review_form_teaser'],
            'page_product_detail_review_form_teaser_header' => [$this, 'block_page_product_detail_review_form_teaser_header'],
            'page_product_detail_review_form_teaser_text' => [$this, 'block_page_product_detail_review_form_teaser_text'],
            'page_product_detail_review_form_teaser_button' => [$this, 'block_page_product_detail_review_form_teaser_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_review_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget"));

        // line 2
        echo "\t<div class=\"sticky-top product-detail-review-widget\">
\t\t";
        // line 3
        $this->displayBlock('page_product_detail_review_info_container', $context, $blocks);
        // line 136
        echo "
\t\t";
        // line 137
        $this->displayBlock('page_product_detail_review_form_teaser', $context, $blocks);
        // line 180
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_review_info_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info_container"));

        // line 4
        echo "\t\t\t";
        $this->displayBlock('page_product_detail_review_info', $context, $blocks);
        // line 35
        echo "
\t\t\t";
        // line 36
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 37
            echo "\t\t\t\t<hr>
\t\t\t";
        }
        // line 39
        echo "
            ";
        // line 40
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-info", 1 => ".js-review-teaser", 2 => ".js-review-content"], "submitOnChange" => true];
        // line 48
        echo "
\t\t\t";
        // line 49
        $this->displayBlock('page_product_detail_review_filter', $context, $blocks);
        // line 135
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_product_detail_review_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info"));

        // line 5
        echo "\t\t\t\t<div class=\"product-detail-review-info js-review-info\">
\t\t\t\t\t";
        // line 6
        $this->displayBlock('page_product_detail_review_title', $context, $blocks);
        // line 11
        echo "
\t\t\t\t\t";
        // line 12
        $this->displayBlock('page_product_detail_review_overview', $context, $blocks);
        // line 33
        echo "\t\t\t\t</div>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_product_detail_review_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_title"));

        // line 7
        echo "\t\t\t\t\t\t<p class=\"product-detail-review-title h5\">
                            ";
        // line 8
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTitle", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 8), "%total%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 8)]));
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_product_detail_review_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_overview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_overview"));

        // line 13
        echo "\t\t\t\t\t\t<div class=\"product-detail-review-rating\"
\t\t\t\t\t\t\t itemprop=\"aggregateRating\"
\t\t\t\t\t\t\t itemscope
\t\t\t\t\t\t\t itemtype=\"https://schema.org/AggregateRating\">
\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t\t\t\t<meta itemprop=\"ratingCount\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["productReviewCount"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 21
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", 21)->display(twig_array_merge($context, ["points" =>         // line 22
($context["productAvgRating"] ?? null), "style" => "text-primary"]));
        // line 25
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        // line 26
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 27
            echo "\t\t\t\t\t\t\t\t<p class=\"h6\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_round(($context["productAvgRating"] ?? null), 1), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRate"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 28), "maxPoints", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRateElements"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_page_product_detail_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter"));

        // line 50
        echo "                ";
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 51
            echo "                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
\t\t\t\t\t\t  action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 53), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"
\t\t\t\t\t\t  method=\"post\"
\t\t\t\t\t\t  data-form-ajax-submit=\"true\"
\t\t\t\t\t\t  data-form-ajax-submit-options='";
            // line 56
            echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
            echo "'>

                            ";
            // line 58
            $this->displayBlock('page_product_detail_review_filter_csrf', $context, $blocks);
            // line 61
            echo "
\t\t\t\t\t\t";
            // line 62
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "get", [0 => "limit"], "method", false, false, false, 62)) {
                // line 63
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"limit\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "limit"], "method", false, false, false, 63), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 65
            echo "
\t\t\t\t\t\t";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "get", [0 => "language"], "method", false, false, false, 66)) {
                // line 67
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"language\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "language"], "method", false, false, false, 67), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t\t\t";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "get", [0 => "sort"], "method", false, false, false, 70)) {
                // line 71
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sort\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "get", [0 => "sort"], "method", false, false, false, 71), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 73
            echo "
\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 74), "matrix", [], "any", false, false, false, 74));
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
            foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
                // line 75
                echo "\t\t\t\t\t\t\t";
                $this->displayBlock('page_product_detail_review_filter_box', $context, $blocks);
                // line 126
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t</form>
                    </div>

                    ";
            // line 130
            $this->displayBlock('page_product_detail_review_filter_divider', $context, $blocks);
            // line 133
            echo "\t\t\t\t";
        }
        // line 134
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_page_product_detail_review_filter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_csrf"));

        // line 59
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_page_product_detail_review_filter_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_box"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_box"));

        // line 76
        echo "\t\t\t\t\t\t\t\t<div class=\"row product-detail-review-filter\">
\t\t\t\t\t\t\t\t\t";
        // line 77
        $this->displayBlock('page_product_detail_review_filter_checkbox', $context, $blocks);
        // line 105
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 106
        $this->displayBlock('page_product_detail_review_filter_progressbar', $context, $blocks);
        // line 118
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 119
        $this->displayBlock('page_product_detail_review_filter_share', $context, $blocks);
        // line 124
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_page_product_detail_review_filter_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox"));

        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $this->displayBlock('page_product_detail_review_filter_checkbox_input', $context, $blocks);
        // line 95
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        $this->displayBlock('page_product_detail_review_filter_checkbox_label', $context, $blocks);
        // line 102
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_page_product_detail_review_filter_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_input"));

        // line 81
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"custom-control-input\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   id=\"reviewRating";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 83), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"points[]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 85), "get", [0 => "points"], "method", false, false, false, 85)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "get", [0 => "points"], "method", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["points"] == twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 92), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 93) < 1)) {
            echo "disabled";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_page_product_detail_review_filter_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_label"));

        // line 97
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label text-nowrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   for=\"reviewRating";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>";
        // line 99
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 99)) . "PointRatingText")));
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 99), "html", null, true);
        echo ")</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_page_product_detail_review_filter_progressbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_progressbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_progressbar"));

        // line 107
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress product-detail-review-progressbar-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar product-detail-review-progressbar-bar\"
\t\t\t\t\t\t\t\t\t\t\t\t\t role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\t\t style=\"width: ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 111), "html", null, true);
        echo "%;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuenow=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 112), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuemin=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_page_product_detail_review_filter_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_share"));

        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-3 product-detail-review-share\">
\t\t\t\t\t\t\t\t\t\t\t<p><small>";
        // line 121
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 121)), "html", null, true);
        echo "%</small></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_page_product_detail_review_filter_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_divider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_divider"));

        // line 131
        echo "\t\t\t\t\t\t<hr/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_page_product_detail_review_form_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser"));

        // line 138
        echo "\t\t\t<div class=\"product-detail-review-teaser js-review-teaser\">
                ";
        // line 139
        $this->displayBlock('page_product_detail_review_form_teaser_header', $context, $blocks);
        // line 148
        echo "
                ";
        // line 149
        $this->displayBlock('page_product_detail_review_form_teaser_text', $context, $blocks);
        // line 158
        echo "
                ";
        // line 159
        $this->displayBlock('page_product_detail_review_form_teaser_button', $context, $blocks);
        // line 178
        echo "\t\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_page_product_detail_review_form_teaser_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_header"));

        // line 140
        echo "\t\t\t\t\t<p class=\"h4\">
                        ";
        // line 141
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 141)) {
            // line 142
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserTitle"));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 144
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserTitle"));
            echo "
\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t</p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_page_product_detail_review_form_teaser_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_text"));

        // line 150
        echo "\t\t\t\t\t<p>
                        ";
        // line 151
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customerReview", [], "any", false, false, false, 151)) {
            // line 152
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserText"));
            echo "
                        ";
        } else {
            // line 154
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserText"));
            echo "
                        ";
        }
        // line 156
        echo "\t\t\t\t\t</p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_page_product_detail_review_form_teaser_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_button"));

        // line 160
        echo "\t\t\t\t\t<button class=\"btn btn-primary product-detail-review-teaser-btn\"
\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\tdata-toggle=\"collapse\"
\t\t\t\t\t\t\tdata-target=\".multi-collapse\"
\t\t\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\t\t\taria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t";
        // line 167
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 167)) {
            // line 168
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButton"));
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 170
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserButton"));
            echo "
\t\t\t\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t";
        // line 174
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButtonHide"));
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  797 => 174,  793 => 172,  787 => 170,  781 => 168,  779 => 167,  770 => 160,  760 => 159,  749 => 156,  743 => 154,  737 => 152,  735 => 151,  732 => 150,  722 => 149,  711 => 146,  705 => 144,  699 => 142,  697 => 141,  694 => 140,  684 => 139,  673 => 178,  671 => 159,  668 => 158,  666 => 149,  663 => 148,  661 => 139,  658 => 138,  648 => 137,  637 => 131,  627 => 130,  614 => 121,  611 => 120,  601 => 119,  585 => 112,  581 => 111,  575 => 107,  565 => 106,  550 => 99,  546 => 98,  543 => 97,  533 => 96,  519 => 93,  514 => 92,  511 => 91,  505 => 90,  501 => 88,  498 => 87,  493 => 86,  491 => 85,  486 => 83,  482 => 81,  472 => 80,  460 => 102,  458 => 96,  455 => 95,  453 => 80,  449 => 78,  439 => 77,  428 => 124,  426 => 119,  423 => 118,  421 => 106,  418 => 105,  416 => 77,  413 => 76,  403 => 75,  390 => 59,  380 => 58,  370 => 134,  367 => 133,  365 => 130,  360 => 127,  346 => 126,  343 => 75,  326 => 74,  323 => 73,  317 => 71,  315 => 70,  312 => 69,  306 => 67,  304 => 66,  301 => 65,  295 => 63,  293 => 62,  290 => 61,  288 => 58,  283 => 56,  277 => 53,  273 => 51,  270 => 50,  260 => 49,  249 => 31,  237 => 28,  234 => 27,  232 => 26,  229 => 25,  227 => 22,  226 => 21,  221 => 19,  216 => 17,  210 => 13,  200 => 12,  187 => 8,  184 => 7,  174 => 6,  163 => 33,  161 => 12,  158 => 11,  156 => 6,  153 => 5,  143 => 4,  133 => 135,  131 => 49,  128 => 48,  126 => 40,  123 => 39,  119 => 37,  117 => 36,  114 => 35,  111 => 4,  101 => 3,  90 => 180,  88 => 137,  85 => 136,  83 => 3,  80 => 2,  61 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_review_widget %}
\t<div class=\"sticky-top product-detail-review-widget\">
\t\t{% block page_product_detail_review_info_container %}
\t\t\t{% block page_product_detail_review_info %}
\t\t\t\t<div class=\"product-detail-review-info js-review-info\">
\t\t\t\t\t{% block page_product_detail_review_title %}
\t\t\t\t\t\t<p class=\"product-detail-review-title h5\">
                            {{ \"detail.reviewTitle\"|trans({'%count%': reviews.total, '%total%':reviews.totalReviews })|sw_sanitize }}
\t\t\t\t\t\t</p>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block page_product_detail_review_overview %}
\t\t\t\t\t\t<div class=\"product-detail-review-rating\"
\t\t\t\t\t\t\t itemprop=\"aggregateRating\"
\t\t\t\t\t\t\t itemscope
\t\t\t\t\t\t\t itemtype=\"https://schema.org/AggregateRating\">
\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"{{ productAvgRating }}\">
\t\t\t\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t\t\t\t<meta itemprop=\"ratingCount\" content=\"{{ productReviewCount }}\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
\t\t\t\t\t\t\t\t\tpoints: productAvgRating,
\t\t\t\t\t\t\t\t\tstyle: 'text-primary'
\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% if productReviewCount > 0 %}
\t\t\t\t\t\t\t\t<p class=\"h6\">
\t\t\t\t\t\t\t\t\t{{ productAvgRating|round(1) }} {{ \"detail.reviewAvgRate\"|trans|sw_sanitize }} {{ reviews.matrix.maxPoints }} {{ \"detail.reviewAvgRateElements\"|trans }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t{% endblock %}

\t\t\t{% if productReviewCount > 0 %}
\t\t\t\t<hr>
\t\t\t{% endif %}

            {% set formAjaxSubmitOptions = {
                replaceSelectors: [
                    \".js-review-info\",
                    \".js-review-teaser\",
                    \".js-review-content\"
                ],
                submitOnChange: true
            } %}

\t\t\t{% block page_product_detail_review_filter %}
                {% if productReviewCount > 0 %}
                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
\t\t\t\t\t\t  action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
\t\t\t\t\t\t  method=\"post\"
\t\t\t\t\t\t  data-form-ajax-submit=\"true\"
\t\t\t\t\t\t  data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                            {% block page_product_detail_review_filter_csrf %}
                                {{ sw_csrf('frontend.product.reviews') }}
                            {% endblock %}

\t\t\t\t\t\t{% if app.request.get('limit') %}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if app.request.get('language') %}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if app.request.get('sort') %}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% for matrix in reviews.matrix.matrix %}
\t\t\t\t\t\t\t{% block page_product_detail_review_filter_box %}
\t\t\t\t\t\t\t\t<div class=\"row product-detail-review-filter\">
\t\t\t\t\t\t\t\t\t{% block page_product_detail_review_filter_checkbox %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block page_product_detail_review_filter_checkbox_input %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"custom-control-input\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   id=\"reviewRating{{ matrix.points }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   name=\"points[]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('points') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for points in app.request.get('points') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if points == matrix.points %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"{{ matrix.points }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   {%  if matrix.count < 1 %}disabled{% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t\t\t\t{% block page_product_detail_review_filter_checkbox_label %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label text-nowrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   for=\"reviewRating{{ matrix.points }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>{{ \"detail.review#{matrix.points}PointRatingText\"|trans|sw_sanitize }} ({{ matrix.count }})</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t{% block page_product_detail_review_filter_progressbar %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress product-detail-review-progressbar-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar product-detail-review-progressbar-bar\"
\t\t\t\t\t\t\t\t\t\t\t\t\t role=\"progressbar\"
\t\t\t\t\t\t\t\t\t\t\t\t\t style=\"width: {{ matrix.percent }}%;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuenow=\"{{ matrix.percent }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuemin=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t{% block page_product_detail_review_filter_share %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-3 product-detail-review-share\">
\t\t\t\t\t\t\t\t\t\t\t<p><small>{{ matrix.percent|round }}%</small></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</form>
                    </div>

                    {% block page_product_detail_review_filter_divider %}
\t\t\t\t\t\t<hr/>
                    {% endblock %}
\t\t\t\t{% endif %}
\t\t\t{% endblock %}
\t\t{% endblock %}

\t\t{% block page_product_detail_review_form_teaser %}
\t\t\t<div class=\"product-detail-review-teaser js-review-teaser\">
                {% block page_product_detail_review_form_teaser_header %}
\t\t\t\t\t<p class=\"h4\">
                        {% if not reviews.customerReview %}
\t\t\t\t\t\t\t{{ \"detail.reviewTeaserTitle\"|trans|sw_sanitize }}
\t\t\t\t\t\t{% else %}
                            {{ \"detail.reviewExistsTeaserTitle\"|trans|sw_sanitize }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_text %}
\t\t\t\t\t<p>
                        {% if not page.customerReview %}
                            {{ \"detail.reviewTeaserText\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"detail.reviewExistsTeaserText\"|trans|sw_sanitize }}
                        {% endif %}
\t\t\t\t\t</p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_button %}
\t\t\t\t\t<button class=\"btn btn-primary product-detail-review-teaser-btn\"
\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\tdata-toggle=\"collapse\"
\t\t\t\t\t\t\tdata-target=\".multi-collapse\"
\t\t\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\t\t\taria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t{% if not reviews.customerReview %}
\t\t\t\t\t\t\t\t{{ \"detail.reviewTeaserButton\"|trans|sw_sanitize }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ \"detail.reviewExistsTeaserButton\"|trans|sw_sanitize }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t{{ \"detail.reviewTeaserButtonHide\"|trans|sw_sanitize }}
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
                {% endblock %}
\t\t\t</div>
\t\t{% endblock %}
\t</div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-widget.html.twig");
    }
}
