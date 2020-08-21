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

/* @Storefront/storefront/page/product-detail/review/review.html.twig */
class __TwigTemplate_f1a27250a79f63f267892993cacae1ee0c6a4dcd1995958c876834f1b3e500a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'page_product_detail_review_container' => [$this, 'block_page_product_detail_review_container'],
            'page_product_detail_review_tab_pane' => [$this, 'block_page_product_detail_review_tab_pane'],
            'page_product_detail_review_aside' => [$this, 'block_page_product_detail_review_aside'],
            'page_product_detail_review_widget_container' => [$this, 'block_page_product_detail_review_widget_container'],
            'page_product_detail_review_main' => [$this, 'block_page_product_detail_review_main'],
            'page_product_detail_review_alert' => [$this, 'block_page_product_detail_review_alert'],
            'page_product_detail_review_form_container' => [$this, 'block_page_product_detail_review_form_container'],
            'page_product_detail_review_list_container' => [$this, 'block_page_product_detail_review_list_container'],
            'page_product_detail_review_list' => [$this, 'block_page_product_detail_review_list'],
            'page_product_detail_review_list_actions' => [$this, 'block_page_product_detail_review_list_actions'],
            'page_product_detail_review_list_action_language' => [$this, 'block_page_product_detail_review_list_action_language'],
            'page_product_detail_review_list_action_language_csrf' => [$this, 'block_page_product_detail_review_list_action_language_csrf'],
            'page_product_detail_review_list_action_sortby' => [$this, 'block_page_product_detail_review_list_action_sortby'],
            'page_product_detail_review_list_action_sortby_form' => [$this, 'block_page_product_detail_review_list_action_sortby_form'],
            'page_product_detail_review_list_action_sortby_form_csrf' => [$this, 'block_page_product_detail_review_list_action_sortby_form_csrf'],
            'page_product_detail_review_list_action_sortby_label' => [$this, 'block_page_product_detail_review_list_action_sortby_label'],
            'page_product_detail_review_list_action_sortby_select' => [$this, 'block_page_product_detail_review_list_action_sortby_select'],
            'page_product_detail_review_list_content' => [$this, 'block_page_product_detail_review_list_content'],
            'page_product_detail_review_list_paging' => [$this, 'block_page_product_detail_review_list_paging'],
            'page_product_detail_review_list_paging_form' => [$this, 'block_page_product_detail_review_list_paging_form'],
            'page_product_detail_review_list_paging_csrf' => [$this, 'block_page_product_detail_review_list_paging_csrf'],
            'page_product_detail_review_list_empty' => [$this, 'block_page_product_detail_review_list_empty'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayBlock('page_product_detail_review_container', $context, $blocks);
    }

    public function block_page_product_detail_review_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t\t";
        // line 7
        echo "\t\t";
        $context["reviewsPerListPage"] = 10;
        // line 8
        echo "
\t\t";
        // line 10
        echo "\t\t";
        $context["currentListPage"] = 1;
        // line 11
        echo "
\t\t";
        // line 12
        $context["productReviewCount"] = twig_length_filter($this->env, ($context["reviews"] ?? null));
        // line 13
        echo "
\t\t";
        // line 14
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 15
            echo "\t\t\t";
            $context["productAvgRating"] = twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 15), "averageRating", [], "any", false, false, false, 15), 2, "floor");
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "
\t\t";
        // line 19
        echo "\t\t";
        $context["foreignReviewsCount"] = 150;
        // line 20
        echo "
\t\t<div class=\"product-detail-review tab-pane-container\">
\t\t\t";
        // line 22
        $this->displayBlock('page_product_detail_review_tab_pane', $context, $blocks);
        // line 275
        echo "\t\t</div>
\t";
    }

    // line 22
    public function block_page_product_detail_review_tab_pane($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                <div class=\"row product-detail-review-content js-review-container\">
\t\t\t\t\t";
        // line 24
        $this->displayBlock('page_product_detail_review_aside', $context, $blocks);
        // line 31
        echo "
\t\t\t\t\t";
        // line 32
        $this->displayBlock('page_product_detail_review_main', $context, $blocks);
        // line 273
        echo "\t\t\t\t</div>
\t\t\t";
    }

    // line 24
    public function block_page_product_detail_review_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('page_product_detail_review_widget_container', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 26
    public function block_page_product_detail_review_widget_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t";
    }

    // line 32
    public function block_page_product_detail_review_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t\t\t\t<div class=\"col product-detail-review-main js-review-content\">
\t\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('page_product_detail_review_alert', $context, $blocks);
        // line 52
        echo "
\t\t\t\t\t\t\t";
        // line 53
        $this->displayBlock('page_product_detail_review_form_container', $context, $blocks);
        // line 67
        echo "
\t\t\t\t\t\t\t";
        // line 68
        $this->displayBlock('page_product_detail_review_list_container', $context, $blocks);
        // line 271
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 34
    public function block_page_product_detail_review_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "\t\t\t\t\t\t\t\t";
        if ((($context["ratingSuccess"] ?? null) == 1)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 36)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessAlert"))]));
            // line 40
            echo "                                ";
        } elseif ((($context["ratingSuccess"] ?? null) == 2)) {
            // line 41
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 41)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessUpdateAlert"))]));
            // line 45
            echo "\t\t\t\t\t\t\t\t";
        } elseif ((($context["ratingSuccess"] ?? null) ==  -1)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 46)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormErrorAlert"))]));
            // line 50
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t";
    }

    // line 53
    public function block_page_product_detail_review_form_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse ";
        if ((($context["ratingSuccess"] ?? null) ==  -1)) {
            echo "show";
        }
        echo "\"
\t\t\t\t\t\t\t\t\t id=\"review-form\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-form\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-form.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 58)->display($context);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-login\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-login.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 62)->display($context);
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 68
    public function block_page_product_detail_review_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "\t\t\t\t\t\t\t\t<div id=\"review-list\"
\t\t\t\t\t\t\t\t\t class=\"collapse multi-collapse product-detail-review-list ";
        // line 70
        if ((($context["ratingSuccess"] ?? null) !=  -1)) {
            echo "show";
        }
        echo "\"
\t\t\t\t\t\t\t\t\t itemprop=\"review-list\">

                                    ";
        // line 73
        $this->displayBlock('page_product_detail_review_list', $context, $blocks);
        // line 260
        echo "
                                    ";
        // line 261
        if ((($context["productReviewCount"] ?? null) <= 0)) {
            // line 262
            echo "                                        ";
            $this->displayBlock('page_product_detail_review_list_empty', $context, $blocks);
            // line 268
            echo "                                    ";
        }
        // line 269
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 73
    public function block_page_product_detail_review_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                        ";
        $this->displayBlock('page_product_detail_review_list_actions', $context, $blocks);
        // line 200
        echo "
                                        ";
        // line 201
        $this->displayBlock('page_product_detail_review_list_content', $context, $blocks);
        // line 208
        echo "
                                        ";
        // line 209
        $this->displayBlock('page_product_detail_review_list_paging', $context, $blocks);
        // line 259
        echo "                                    ";
    }

    // line 74
    public function block_page_product_detail_review_list_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                            <div class=\"row align-items-center product-detail-review-actions\">
                                                ";
        // line 76
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-container"], "submitOnChange" => true];
        // line 80
        echo "
                                                ";
        // line 81
        $this->displayBlock('page_product_detail_review_list_action_language', $context, $blocks);
        // line 121
        echo "
                                                ";
        // line 122
        $this->displayBlock('page_product_detail_review_list_action_sortby', $context, $blocks);
        // line 181
        echo "                                            </div>

                                            <hr/>

                                            ";
        // line 186
        echo "                                            ";
        $context["listReviewsCount"] = (($context["productReviewCount"] ?? null) - ($context["foreignReviewsCount"] ?? null));
        // line 187
        echo "                                            ";
        // line 188
        echo "                                            ";
        if ((($context["listReviewsCount"] ?? null) < 0)) {
            // line 189
            echo "                                                ";
            $context["listReviewsCount"] = 0;
            // line 190
            echo "                                            ";
        }
        // line 191
        echo "
                                            <p class=\"text-right product-detail-review-counter\">
                                                ";
        // line 193
        if (((($context["listReviewsCount"] ?? null) > 1) && (($context["listReviewsCount"] ?? null) > ($context["reviewsPerListPage"] ?? null)))) {
            // line 194
            echo "                                                    <small><strong>";
            echo twig_escape_filter($this->env, ($context["currentListPage"] ?? null), "html", null, true);
            echo "</strong> - <strong>";
            echo twig_escape_filter($this->env, ($context["reviewsPerListPage"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountBefore"));
            echo " <strong>";
            echo twig_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        } elseif ((        // line 195
($context["listReviewsCount"] ?? null) > 0)) {
            echo " ";
            // line 196
            echo "                                                    <small><strong>";
            echo twig_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        }
        // line 198
        echo "                                            </p>
                                        ";
    }

    // line 81
    public function block_page_product_detail_review_list_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                                    <div class=\"col product-detail-review-language\">
                                                        ";
        // line 83
        if ((($context["foreignReviewsCount"] ?? null) > 0)) {
            // line 84
            echo "                                                            <form class=\"product-detail-review-language-form\"
                                                                  action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 85), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='";
            // line 88
            echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
            echo "'>

                                                                ";
            // line 90
            $this->displayBlock('page_product_detail_review_list_action_language_csrf', $context, $blocks);
            // line 93
            echo "
                                                                ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "get", [0 => "limit"], "method", false, false, false, 94)) {
                // line 95
                echo "                                                                    <input type=\"hidden\" name=\"limit\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 95), "get", [0 => "limit"], "method", false, false, false, 95), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 97
            echo "
                                                                ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "get", [0 => "sort"], "method", false, false, false, 98)) {
                // line 99
                echo "                                                                    <input type=\"hidden\" name=\"sort\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 99), "get", [0 => "sort"], "method", false, false, false, 99), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 101
            echo "
                                                                <div class=\"custom-control custom-switch\">
                                                                    ";
            // line 104
            echo "                                                                    <input type=\"checkbox\"
                                                                           class=\"custom-control-input\"
                                                                           id=\"showForeignReviews\"
                                                                           value=\"filter-language\"
                                                                           name=\"language\"
                                                                            ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 109), "get", [0 => "language"], "method", false, false, false, 109)) {
                // line 110
                echo "                                                                            checked=\"checked\"
                                                                            ";
            }
            // line 111
            echo ">
                                                                    <label class=\"custom-control-label form-label\"
                                                                           for=\"showForeignReviews\">
                                                                        <small>";
            // line 114
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLanguageFilterLabel"));
            echo "</small>
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        ";
        }
        // line 119
        echo "                                                    </div>
                                                ";
    }

    // line 90
    public function block_page_product_detail_review_list_action_language_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
    }

    // line 122
    public function block_page_product_detail_review_list_action_sortby($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                                                    <div class=\"col-12 col-md-auto product-detail-review-sortby\">
                                                        ";
        // line 124
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-info", 1 => ".js-review-teaser", 2 => ".js-review-content"], "submitOnChange" => true];
        // line 132
        echo "
                                                        ";
        // line 133
        $this->displayBlock('page_product_detail_review_list_action_sortby_form', $context, $blocks);
        // line 179
        echo "                                                    </div>
                                                ";
    }

    // line 133
    public function block_page_product_detail_review_list_action_sortby_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                                            <form class=\"form-inline product-detail-review-sortby-form\"
                                                                  action=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 135), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='";
        // line 138
        echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

                                                                ";
        // line 140
        $this->displayBlock('page_product_detail_review_list_action_sortby_form_csrf', $context, $blocks);
        // line 143
        echo "
                                                                ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 144), "get", [0 => "limit"], "method", false, false, false, 144)) {
            // line 145
            echo "                                                                    <input type=\"hidden\" name=\"limit\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 145), "get", [0 => "limit"], "method", false, false, false, 145), "html", null, true);
            echo "\">
                                                                ";
        }
        // line 147
        echo "
                                                                ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 148), "get", [0 => "language"], "method", false, false, false, 148)) {
            // line 149
            echo "                                                                    <input type=\"hidden\" name=\"language\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 149), "get", [0 => "language"], "method", false, false, false, 149), "html", null, true);
            echo "\">
                                                                ";
        }
        // line 151
        echo "
                                                                ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 152), "get", [0 => "points"], "method", false, false, false, 152)) {
            // line 153
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 153), "get", [0 => "points"], "method", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 154
                echo "                                                                        <input type=\"hidden\" name=\"points[]\" value=\"";
                echo twig_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                                                ";
        }
        // line 157
        echo "
                                                                ";
        // line 158
        $this->displayBlock('page_product_detail_review_list_action_sortby_label', $context, $blocks);
        // line 164
        echo "
                                                                ";
        // line 165
        $this->displayBlock('page_product_detail_review_list_action_sortby_select', $context, $blocks);
        // line 177
        echo "                                                            </form>
                                                        ";
    }

    // line 140
    public function block_page_product_detail_review_list_action_sortby_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
    }

    // line 158
    public function block_page_product_detail_review_list_action_sortby_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                                                                    <label class=\"form-label product-detail-review-sortby-label\"
                                                                           for=\"reviewsSortby\">
                                                                        <small>";
        // line 161
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortLabel"));
        echo "</small>
                                                                    </label>
                                                                ";
    }

    // line 165
    public function block_page_product_detail_review_list_action_sortby_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "                                                                    <select class=\"custom-select custom-select-sm\"
                                                                            name=\"sort\"
                                                                            id=\"reviewsSortby\">
                                                                        <option value=\"createdAt\"";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 169), "sorting", [], "any", false, false, false, 169), 0, [], "any", false, false, false, 169), "field", [], "any", false, false, false, 169) == "createdAt")) {
            echo " selected";
        }
        echo ">
                                                                            ";
        // line 170
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortNewLabel"));
        echo "
                                                                        </option>
                                                                        <option value=\"points\"";
        // line 172
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 172), "sorting", [], "any", false, false, false, 172), 0, [], "any", false, false, false, 172), "field", [], "any", false, false, false, 172) == "points")) {
            echo " selected";
        }
        echo ">
                                                                            ";
        // line 173
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortTopRatedLabel"));
        echo "
                                                                        </option>
                                                                    </select>
                                                                ";
    }

    // line 201
    public function block_page_product_detail_review_list_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 203
            echo "                                                <div class=\"product-detail-review-list-content\">
                                                    ";
            // line 204
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-item.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 204)->display($context);
            // line 205
            echo "                                                </div>
                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                                        ";
    }

    // line 209
    public function block_page_product_detail_review_list_paging($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "                                            ";
        $context["criteria"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 210);
        // line 211
        echo "
                                            ";
        // line 212
        $context["totalPages"] = twig_round((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 212) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 212)), 0, "ceil");
        // line 213
        echo "
                                            ";
        // line 214
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 215
            echo "                                                ";
            $context["formAjaxSubmitOptions"] = ["replaceSelectors" => ".js-review-container", "submitOnChange" => true];
            // line 219
            echo "
                                                ";
            // line 220
            $this->displayBlock('page_product_detail_review_list_paging_form', $context, $blocks);
            // line 257
            echo "                                            ";
        }
        // line 258
        echo "                                        ";
    }

    // line 220
    public function block_page_product_detail_review_list_paging_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "                                                    <div class=\"product-detail-review-pagination\">
                                                        <form class=\"product-detail-review-pagination-form\"
                                                              action=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 223)]), "html", null, true);
        echo "\"
                                                              method=\"post\"
                                                              data-form-ajax-submit=\"true\"
                                                              data-form-ajax-submit-options='";
        // line 226
        echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

                                                            ";
        // line 228
        $this->displayBlock('page_product_detail_review_list_paging_csrf', $context, $blocks);
        // line 231
        echo "
                                                            ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 232), "get", [0 => "limit"], "method", false, false, false, 232)) {
            // line 233
            echo "                                                                <input type=\"hidden\" name=\"limit\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 233), "get", [0 => "limit"], "method", false, false, false, 233), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 235
        echo "
                                                            ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 236), "get", [0 => "language"], "method", false, false, false, 236)) {
            // line 237
            echo "                                                                <input type=\"hidden\" name=\"language\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 237), "get", [0 => "language"], "method", false, false, false, 237), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 239
        echo "
                                                            ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 240), "get", [0 => "sort"], "method", false, false, false, 240)) {
            // line 241
            echo "                                                                <input type=\"hidden\" name=\"sort\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 241), "get", [0 => "sort"], "method", false, false, false, 241), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 243
        echo "
                                                            ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 244), "get", [0 => "points"], "method", false, false, false, 244)) {
            // line 245
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 245), "get", [0 => "points"], "method", false, false, false, 245));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 246
                echo "                                                                    <input type=\"hidden\" name=\"points[]\" value=\"";
                echo twig_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                                                            ";
        }
        // line 249
        echo "
                                                            ";
        // line 250
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 250)->display(twig_array_merge($context, ["entities" =>         // line 251
($context["reviews"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 252
($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 252)]));
        // line 254
        echo "                                                        </form>
                                                    </div>
                                                ";
    }

    // line 228
    public function block_page_product_detail_review_list_paging_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 229
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                            ";
    }

    // line 262
    public function block_page_product_detail_review_list_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 263)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewListEmpty"))]));
        // line 267
        echo "                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 267,  820 => 263,  816 => 262,  809 => 229,  805 => 228,  799 => 254,  797 => 252,  796 => 251,  795 => 250,  792 => 249,  789 => 248,  780 => 246,  775 => 245,  773 => 244,  770 => 243,  764 => 241,  762 => 240,  759 => 239,  753 => 237,  751 => 236,  748 => 235,  742 => 233,  740 => 232,  737 => 231,  735 => 228,  730 => 226,  724 => 223,  720 => 221,  716 => 220,  712 => 258,  709 => 257,  707 => 220,  704 => 219,  701 => 215,  699 => 214,  696 => 213,  694 => 212,  691 => 211,  688 => 210,  684 => 209,  680 => 207,  665 => 205,  663 => 204,  660 => 203,  642 => 202,  638 => 201,  630 => 173,  624 => 172,  619 => 170,  613 => 169,  608 => 166,  604 => 165,  597 => 161,  593 => 159,  589 => 158,  582 => 141,  578 => 140,  573 => 177,  571 => 165,  568 => 164,  566 => 158,  563 => 157,  560 => 156,  551 => 154,  546 => 153,  544 => 152,  541 => 151,  535 => 149,  533 => 148,  530 => 147,  524 => 145,  522 => 144,  519 => 143,  517 => 140,  512 => 138,  506 => 135,  503 => 134,  499 => 133,  494 => 179,  492 => 133,  489 => 132,  487 => 124,  484 => 123,  480 => 122,  473 => 91,  469 => 90,  464 => 119,  456 => 114,  451 => 111,  447 => 110,  445 => 109,  438 => 104,  434 => 101,  428 => 99,  426 => 98,  423 => 97,  417 => 95,  415 => 94,  412 => 93,  410 => 90,  405 => 88,  399 => 85,  396 => 84,  394 => 83,  391 => 82,  387 => 81,  382 => 198,  374 => 196,  371 => 195,  358 => 194,  356 => 193,  352 => 191,  349 => 190,  346 => 189,  343 => 188,  341 => 187,  338 => 186,  332 => 181,  330 => 122,  327 => 121,  325 => 81,  322 => 80,  320 => 76,  317 => 75,  313 => 74,  309 => 259,  307 => 209,  304 => 208,  302 => 201,  299 => 200,  296 => 74,  292 => 73,  287 => 269,  284 => 268,  281 => 262,  279 => 261,  276 => 260,  274 => 73,  266 => 70,  263 => 69,  259 => 68,  254 => 65,  250 => 63,  248 => 62,  245 => 61,  241 => 59,  239 => 58,  236 => 57,  234 => 56,  226 => 54,  222 => 53,  218 => 51,  215 => 50,  212 => 46,  209 => 45,  206 => 41,  203 => 40,  200 => 36,  197 => 35,  193 => 34,  188 => 271,  186 => 68,  183 => 67,  181 => 53,  178 => 52,  176 => 34,  173 => 33,  169 => 32,  165 => 28,  162 => 27,  158 => 26,  153 => 29,  151 => 26,  148 => 25,  144 => 24,  139 => 273,  137 => 32,  134 => 31,  132 => 24,  129 => 23,  125 => 22,  120 => 275,  118 => 22,  114 => 20,  111 => 19,  108 => 17,  105 => 16,  102 => 15,  100 => 14,  97 => 13,  95 => 12,  92 => 11,  89 => 10,  86 => 8,  83 => 7,  80 => 5,  72 => 4,  68 => 3,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review.html.twig");
    }
}
