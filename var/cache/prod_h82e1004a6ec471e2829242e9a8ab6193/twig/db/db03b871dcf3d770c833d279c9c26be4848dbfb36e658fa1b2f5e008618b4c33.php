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
class __TwigTemplate_7676676033ad13ea298695af5700d720f03e1099279f69eb9d599ebd7bbe16db extends \Twig\Template
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
        // line 1
        $this->displayBlock('page_product_detail_review_widget', $context, $blocks);
    }

    public function block_page_product_detail_review_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 3
    public function block_page_product_detail_review_info_container($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 4
    public function block_page_product_detail_review_info($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 6
    public function block_page_product_detail_review_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t\t\t\t\t<p class=\"product-detail-review-title h5\">
                            ";
        // line 8
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTitle", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 8), "%total%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 8)]));
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t";
    }

    // line 12
    public function block_page_product_detail_review_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 49
    public function block_page_product_detail_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 58
    public function block_page_product_detail_review_filter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                            ";
    }

    // line 75
    public function block_page_product_detail_review_filter_box($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 77
    public function block_page_product_detail_review_filter_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 80
    public function block_page_product_detail_review_filter_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 96
    public function block_page_product_detail_review_filter_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 106
    public function block_page_product_detail_review_filter_progressbar($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 119
    public function block_page_product_detail_review_filter_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-3 product-detail-review-share\">
\t\t\t\t\t\t\t\t\t\t\t<p><small>";
        // line 121
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 121)), "html", null, true);
        echo "%</small></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    // line 130
    public function block_page_product_detail_review_filter_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "\t\t\t\t\t\t<hr/>
                    ";
    }

    // line 137
    public function block_page_product_detail_review_form_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 139
    public function block_page_product_detail_review_form_teaser_header($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 149
    public function block_page_product_detail_review_form_teaser_text($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 159
    public function block_page_product_detail_review_form_teaser_button($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  575 => 174,  571 => 172,  565 => 170,  559 => 168,  557 => 167,  548 => 160,  544 => 159,  539 => 156,  533 => 154,  527 => 152,  525 => 151,  522 => 150,  518 => 149,  513 => 146,  507 => 144,  501 => 142,  499 => 141,  496 => 140,  492 => 139,  487 => 178,  485 => 159,  482 => 158,  480 => 149,  477 => 148,  475 => 139,  472 => 138,  468 => 137,  463 => 131,  459 => 130,  452 => 121,  449 => 120,  445 => 119,  435 => 112,  431 => 111,  425 => 107,  421 => 106,  412 => 99,  408 => 98,  405 => 97,  401 => 96,  393 => 93,  388 => 92,  385 => 91,  379 => 90,  375 => 88,  372 => 87,  367 => 86,  365 => 85,  360 => 83,  356 => 81,  352 => 80,  346 => 102,  344 => 96,  341 => 95,  339 => 80,  335 => 78,  331 => 77,  326 => 124,  324 => 119,  321 => 118,  319 => 106,  316 => 105,  314 => 77,  311 => 76,  307 => 75,  300 => 59,  296 => 58,  292 => 134,  289 => 133,  287 => 130,  282 => 127,  268 => 126,  265 => 75,  248 => 74,  245 => 73,  239 => 71,  237 => 70,  234 => 69,  228 => 67,  226 => 66,  223 => 65,  217 => 63,  215 => 62,  212 => 61,  210 => 58,  205 => 56,  199 => 53,  195 => 51,  192 => 50,  188 => 49,  183 => 31,  171 => 28,  168 => 27,  166 => 26,  163 => 25,  161 => 22,  160 => 21,  155 => 19,  150 => 17,  144 => 13,  140 => 12,  133 => 8,  130 => 7,  126 => 6,  121 => 33,  119 => 12,  116 => 11,  114 => 6,  111 => 5,  107 => 4,  103 => 135,  101 => 49,  98 => 48,  96 => 40,  93 => 39,  89 => 37,  87 => 36,  84 => 35,  81 => 4,  77 => 3,  72 => 180,  70 => 137,  67 => 136,  65 => 3,  62 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-widget.html.twig");
    }
}
