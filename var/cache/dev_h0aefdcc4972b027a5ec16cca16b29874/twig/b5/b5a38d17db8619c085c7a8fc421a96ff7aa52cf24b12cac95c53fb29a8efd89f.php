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
class __TwigTemplate_ac258a23c0e85085c6fce178387b0f670c2ac2271fad0f2f56a54c2797a4914f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        echo "\t";
        $this->displayBlock('page_product_detail_review_container', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_page_product_detail_review_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_page_product_detail_review_tab_pane($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_tab_pane"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_tab_pane"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_page_product_detail_review_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_aside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_aside"));

        // line 25
        echo "\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('page_product_detail_review_widget_container', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_page_product_detail_review_widget_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget_container"));

        // line 27
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_page_product_detail_review_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_main"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_page_product_detail_review_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_alert"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_alert"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_product_detail_review_form_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_page_product_detail_review_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_page_product_detail_review_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_page_product_detail_review_list_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_actions"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_page_product_detail_review_list_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_page_product_detail_review_list_action_language_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language_csrf"));

        // line 91
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_page_product_detail_review_list_action_sortby($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_page_product_detail_review_list_action_sortby_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_page_product_detail_review_list_action_sortby_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form_csrf"));

        // line 141
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_page_product_detail_review_list_action_sortby_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_label"));

        // line 159
        echo "                                                                    <label class=\"form-label product-detail-review-sortby-label\"
                                                                           for=\"reviewsSortby\">
                                                                        <small>";
        // line 161
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortLabel"));
        echo "</small>
                                                                    </label>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_page_product_detail_review_list_action_sortby_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_select"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_page_product_detail_review_list_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_content"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_page_product_detail_review_list_paging($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_page_product_detail_review_list_paging_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_form"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 228
    public function block_page_product_detail_review_list_paging_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_csrf"));

        // line 229
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_page_product_detail_review_list_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_empty"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_empty"));

        // line 263
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 263)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewListEmpty"))]));
        // line 267
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1105 => 267,  1102 => 263,  1092 => 262,  1079 => 229,  1069 => 228,  1057 => 254,  1055 => 252,  1054 => 251,  1053 => 250,  1050 => 249,  1047 => 248,  1038 => 246,  1033 => 245,  1031 => 244,  1028 => 243,  1022 => 241,  1020 => 240,  1017 => 239,  1011 => 237,  1009 => 236,  1006 => 235,  1000 => 233,  998 => 232,  995 => 231,  993 => 228,  988 => 226,  982 => 223,  978 => 221,  968 => 220,  958 => 258,  955 => 257,  953 => 220,  950 => 219,  947 => 215,  945 => 214,  942 => 213,  940 => 212,  937 => 211,  934 => 210,  924 => 209,  914 => 207,  899 => 205,  897 => 204,  894 => 203,  876 => 202,  866 => 201,  852 => 173,  846 => 172,  841 => 170,  835 => 169,  830 => 166,  820 => 165,  807 => 161,  803 => 159,  793 => 158,  780 => 141,  770 => 140,  759 => 177,  757 => 165,  754 => 164,  752 => 158,  749 => 157,  746 => 156,  737 => 154,  732 => 153,  730 => 152,  727 => 151,  721 => 149,  719 => 148,  716 => 147,  710 => 145,  708 => 144,  705 => 143,  703 => 140,  698 => 138,  692 => 135,  689 => 134,  679 => 133,  668 => 179,  666 => 133,  663 => 132,  661 => 124,  658 => 123,  648 => 122,  635 => 91,  625 => 90,  614 => 119,  606 => 114,  601 => 111,  597 => 110,  595 => 109,  588 => 104,  584 => 101,  578 => 99,  576 => 98,  573 => 97,  567 => 95,  565 => 94,  562 => 93,  560 => 90,  555 => 88,  549 => 85,  546 => 84,  544 => 83,  541 => 82,  531 => 81,  520 => 198,  512 => 196,  509 => 195,  496 => 194,  494 => 193,  490 => 191,  487 => 190,  484 => 189,  481 => 188,  479 => 187,  476 => 186,  470 => 181,  468 => 122,  465 => 121,  463 => 81,  460 => 80,  458 => 76,  455 => 75,  445 => 74,  435 => 259,  433 => 209,  430 => 208,  428 => 201,  425 => 200,  422 => 74,  412 => 73,  401 => 269,  398 => 268,  395 => 262,  393 => 261,  390 => 260,  388 => 73,  380 => 70,  377 => 69,  367 => 68,  356 => 65,  352 => 63,  350 => 62,  347 => 61,  343 => 59,  341 => 58,  338 => 57,  336 => 56,  328 => 54,  318 => 53,  308 => 51,  305 => 50,  302 => 46,  299 => 45,  296 => 41,  293 => 40,  290 => 36,  287 => 35,  277 => 34,  266 => 271,  264 => 68,  261 => 67,  259 => 53,  256 => 52,  254 => 34,  251 => 33,  241 => 32,  231 => 28,  228 => 27,  218 => 26,  207 => 29,  205 => 26,  202 => 25,  192 => 24,  181 => 273,  179 => 32,  176 => 31,  174 => 24,  171 => 23,  161 => 22,  150 => 275,  148 => 22,  144 => 20,  141 => 19,  138 => 17,  135 => 16,  132 => 15,  130 => 14,  127 => 13,  125 => 12,  122 => 11,  119 => 10,  116 => 8,  113 => 7,  110 => 5,  90 => 4,  80 => 3,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
\t{% block page_product_detail_review_container %}

\t\t{#TODO: replace items per list config value#}
\t\t{% set reviewsPerListPage = 10 %}

\t\t{#TODO: replace current list page value#}
\t\t{% set currentListPage = 1 %}

\t\t{% set productReviewCount = reviews|length %}

\t\t{% if productReviewCount > 0 %}
\t\t\t{% set productAvgRating = reviews.matrix.averageRating|round(2, 'floor')  %}
\t\t{% endif %}

\t\t{# TODO: replace language flag #}
\t\t{% set foreignReviewsCount = 150 %}

\t\t<div class=\"product-detail-review tab-pane-container\">
\t\t\t{% block page_product_detail_review_tab_pane %}
                <div class=\"row product-detail-review-content js-review-container\">
\t\t\t\t\t{% block page_product_detail_review_aside %}
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t{% block page_product_detail_review_widget_container %}
\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-widget.html.twig' %}
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block page_product_detail_review_main %}
\t\t\t\t\t\t<div class=\"col product-detail-review-main js-review-content\">
\t\t\t\t\t\t\t{% block page_product_detail_review_alert %}
\t\t\t\t\t\t\t\t{% if ratingSuccess == 1 %}
\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
\t\t\t\t\t\t\t\t\t\ttype: \"success\",
\t\t\t\t\t\t\t\t\t\tcontent: \"detail.reviewFormSuccessAlert\"|trans|sw_sanitize
\t\t\t\t\t\t\t\t\t} %}
                                {% elseif ratingSuccess == 2  %}
                                    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                        type: \"success\",
                                        content: \"detail.reviewFormSuccessUpdateAlert\"|trans|sw_sanitize
                                    } %}
\t\t\t\t\t\t\t\t{% elseif ratingSuccess == -1  %}
\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
\t\t\t\t\t\t\t\t\t\ttype: \"danger\",
\t\t\t\t\t\t\t\t\t\tcontent: \"detail.reviewFormErrorAlert\"|trans|sw_sanitize
\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t{% block page_product_detail_review_form_container %}
\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse {% if ratingSuccess == -1 %}show{% endif %}\"
\t\t\t\t\t\t\t\t\t id=\"review-form\">
\t\t\t\t\t\t\t\t\t{% if context.customer %}
\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-form\">
\t\t\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-form.html.twig' %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-login\">
\t\t\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-login.html.twig' %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t{% block page_product_detail_review_list_container %}
\t\t\t\t\t\t\t\t<div id=\"review-list\"
\t\t\t\t\t\t\t\t\t class=\"collapse multi-collapse product-detail-review-list {% if ratingSuccess != -1 %}show{% endif %}\"
\t\t\t\t\t\t\t\t\t itemprop=\"review-list\">

                                    {% block page_product_detail_review_list %}
                                        {% block page_product_detail_review_list_actions %}
                                            <div class=\"row align-items-center product-detail-review-actions\">
                                                {% set formAjaxSubmitOptions = {
                                                    replaceSelectors: [\".js-review-container\"],
                                                    submitOnChange: true
                                                } %}

                                                {% block page_product_detail_review_list_action_language %}
                                                    <div class=\"col product-detail-review-language\">
                                                        {% if foreignReviewsCount > 0 %}
                                                            <form class=\"product-detail-review-language-form\"
                                                                  action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                                {% block page_product_detail_review_list_action_language_csrf %}
                                                                    {{ sw_csrf('frontend.product.reviews') }}
                                                                {% endblock %}

                                                                {% if app.request.get('limit') %}
                                                                    <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                                                                {% endif %}

                                                                {% if app.request.get('sort') %}
                                                                    <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
                                                                {% endif %}

                                                                <div class=\"custom-control custom-switch\">
                                                                    {#TODO: set checked and disabled state#}
                                                                    <input type=\"checkbox\"
                                                                           class=\"custom-control-input\"
                                                                           id=\"showForeignReviews\"
                                                                           value=\"filter-language\"
                                                                           name=\"language\"
                                                                            {% if app.request.get('language') %}
                                                                            checked=\"checked\"
                                                                            {% endif %}>
                                                                    <label class=\"custom-control-label form-label\"
                                                                           for=\"showForeignReviews\">
                                                                        <small>{{ \"detail.reviewLanguageFilterLabel\"|trans|sw_sanitize }}</small>
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        {% endif %}
                                                    </div>
                                                {% endblock %}

                                                {% block page_product_detail_review_list_action_sortby %}
                                                    <div class=\"col-12 col-md-auto product-detail-review-sortby\">
                                                        {% set formAjaxSubmitOptions = {
                                                            replaceSelectors: [
                                                                \".js-review-info\",
                                                                \".js-review-teaser\",
                                                                \".js-review-content\"
                                                            ],
                                                            submitOnChange: true
                                                        } %}

                                                        {% block page_product_detail_review_list_action_sortby_form %}
                                                            <form class=\"form-inline product-detail-review-sortby-form\"
                                                                  action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                                {% block page_product_detail_review_list_action_sortby_form_csrf %}
                                                                    {{ sw_csrf('frontend.product.reviews') }}
                                                                {% endblock %}

                                                                {% if app.request.get('limit') %}
                                                                    <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                                                                {% endif %}

                                                                {% if app.request.get('language') %}
                                                                    <input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
                                                                {% endif %}

                                                                {% if app.request.get('points') %}
                                                                    {% for points in app.request.get('points') %}
                                                                        <input type=\"hidden\" name=\"points[]\" value=\"{{ points }}\">
                                                                    {% endfor %}
                                                                {% endif %}

                                                                {% block page_product_detail_review_list_action_sortby_label %}
                                                                    <label class=\"form-label product-detail-review-sortby-label\"
                                                                           for=\"reviewsSortby\">
                                                                        <small>{{ \"detail.reviewSortLabel\"|trans|sw_sanitize }}</small>
                                                                    </label>
                                                                {% endblock %}

                                                                {% block page_product_detail_review_list_action_sortby_select %}
                                                                    <select class=\"custom-select custom-select-sm\"
                                                                            name=\"sort\"
                                                                            id=\"reviewsSortby\">
                                                                        <option value=\"createdAt\"{% if reviews.criteria.sorting.0.field == 'createdAt' %} selected{% endif %}>
                                                                            {{ \"detail.reviewSortNewLabel\"|trans|sw_sanitize }}
                                                                        </option>
                                                                        <option value=\"points\"{% if reviews.criteria.sorting.0.field== 'points' %} selected{% endif %}>
                                                                            {{ \"detail.reviewSortTopRatedLabel\"|trans|sw_sanitize }}
                                                                        </option>
                                                                    </select>
                                                                {% endblock %}
                                                            </form>
                                                        {% endblock %}
                                                    </div>
                                                {% endblock %}
                                            </div>

                                            <hr/>

                                            {# TODO: calculate reviews in current language in list #}
                                            {% set listReviewsCount = productReviewCount - foreignReviewsCount %}
                                            {# TODO: fix if reviews in foreign language are more than in customer language#}
                                            {% if listReviewsCount < 0 %}
                                                {% set listReviewsCount = 0 %}
                                            {% endif %}

                                            <p class=\"text-right product-detail-review-counter\">
                                                {% if (listReviewsCount > 1 and listReviewsCount > reviewsPerListPage) %}
                                                    <small><strong>{{ currentListPage }}</strong> - <strong>{{ reviewsPerListPage }}</strong> {{ \"detail.reviewCountBefore\"|trans|sw_sanitize }} <strong>{{ listReviewsCount }}</strong> {{ \"detail.reviewCountAfter\"|trans({'%count%': listReviewsCount })|sw_sanitize }}</small>
                                                {% elseif listReviewsCount > 0 %} {# TODO fix detail.reviewCountAfter snippet for listReviewsCount = 0#}
                                                    <small><strong>{{ listReviewsCount }}</strong> {{ \"detail.reviewCountAfter\"|trans({'%count%': listReviewsCount })|sw_sanitize }}</small>
                                                {% endif %}
                                            </p>
                                        {% endblock %}

                                        {% block page_product_detail_review_list_content %}
                                            {% for review in reviews %}
                                                <div class=\"product-detail-review-list-content\">
                                                    {% sw_include '@Storefront/storefront/page/product-detail/review/review-item.html.twig' %}
                                                </div>
                                            {% endfor %}
                                        {% endblock %}

                                        {% block page_product_detail_review_list_paging %}
                                            {% set criteria = reviews.criteria %}

                                            {% set totalPages = (reviews.total/criteria.limit)|round(0,'ceil') %}

                                            {% if totalPages > 1 %}
                                                {% set formAjaxSubmitOptions = {
                                                    replaceSelectors: \".js-review-container\",
                                                    submitOnChange: true
                                                } %}

                                                {% block page_product_detail_review_list_paging_form %}
                                                    <div class=\"product-detail-review-pagination\">
                                                        <form class=\"product-detail-review-pagination-form\"
                                                              action=\"{{ path('frontend.product.reviews', { productId: reviews.productId }) }}\"
                                                              method=\"post\"
                                                              data-form-ajax-submit=\"true\"
                                                              data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                            {% block page_product_detail_review_list_paging_csrf %}
                                                                {{ sw_csrf('frontend.product.reviews') }}
                                                            {% endblock %}

                                                            {% if app.request.get('limit') %}
                                                                <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                                                            {% endif %}

                                                            {% if app.request.get('language') %}
                                                                <input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
                                                            {% endif %}

                                                            {% if app.request.get('sort') %}
                                                                <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
                                                            {% endif %}

                                                            {% if app.request.get('points') %}
                                                                {% for points in app.request.get('points') %}
                                                                    <input type=\"hidden\" name=\"points[]\" value=\"{{ points }}\">
                                                                {% endfor %}
                                                            {% endif %}

                                                            {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                                                entities: reviews,
                                                                criteria: reviews.criteria
                                                            }  %}
                                                        </form>
                                                    </div>
                                                {% endblock %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}

                                    {% if productReviewCount <= 0 %}
                                        {% block page_product_detail_review_list_empty %}
                                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                                type: \"info\",
                                                content: \"detail.reviewListEmpty\"|trans|sw_sanitize
                                            } %}
                                        {% endblock %}
                                    {% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t{% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review.html.twig");
    }
}
