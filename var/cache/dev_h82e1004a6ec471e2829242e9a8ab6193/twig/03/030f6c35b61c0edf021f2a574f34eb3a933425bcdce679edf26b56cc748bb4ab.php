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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_925207ba776f62bc6eb15c2acc6164881d4e1b255ec366330f0d297915218f25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_buy_csrf' => [$this, 'block_component_product_box_action_buy_csrf'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
            'component_product_box_action_meta' => [$this, 'block_component_product_box_action_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/action.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_action_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_action_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_inner"));

        // line 2
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "listing", [], "any", false, false, false, 4), "allowBuyInListing", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"product-action\">
            ";
            // line 6
            $context["isAvailable"] = ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 6) || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 6) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 6)));
            // line 7
            echo "
            ";
            // line 8
            if (((($context["isAvailable"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 8) <= 0))) {
                // line 9
                echo "                ";
                $this->displayBlock('component_product_box_action_buy', $context, $blocks);
                // line 68
                echo "            ";
            } else {
                // line 69
                echo "                ";
                $this->displayBlock('component_product_box_action_detail', $context, $blocks);
                // line 76
                echo "            ";
            }
            // line 77
            echo "        </div>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('component_product_box_action_meta', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_component_product_box_action_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy"));

        // line 10
        echo "                    ";
        // line 11
        echo "                       <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            ";
        // line 16
        $this->displayBlock('component_product_box_action_buy_csrf', $context, $blocks);
        // line 19
        echo "
                            ";
        // line 20
        $this->displayBlock('component_product_box_action_form', $context, $blocks);
        // line 66
        echo "                        </form>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_product_box_action_buy_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_csrf"));

        // line 17
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        // line 21
        echo "
                                ";
        // line 22
        $this->displayBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 33
        echo "
                                ";
        // line 34
        $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 54
        echo "
                                ";
        // line 55
        $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
        // line 60
        echo "
                                <button class=\"btn btn-block btn-buy\"
                                        title=\"";
        // line 62
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
        echo "\">
                                    ";
        // line 63
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
        echo "
                                </button>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_component_product_box_action_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_redirect_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_redirect_input"));

        // line 23
        echo "                                    ";
        // line 24
        echo "                                    <input type=\"hidden\"
                                           name=\"redirectTo\"
                                           value=\"frontend.detail.page\">

                                    <input type=\"hidden\"
                                           name=\"redirectParameters\"
                                           data-redirect-parameters=\"true\"
                                           value='{\"productId\": \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\"}'>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_product_buy_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_product_buy_info"));

        // line 35
        echo "                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 36
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][id]\"
                                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 39
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][referencedId]\"
                                           value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 51
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][quantity]\"
                                           value=\"1\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_meta"));

        // line 56
        echo "                                    <input type=\"hidden\"
                                           name=\"product-name\"
                                           value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_component_product_box_action_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_detail"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_detail"));

        // line 70
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                       class=\"btn btn-block btn-light\"
                       title=\"";
        // line 72
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
        echo "\">
                        ";
        // line 73
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
        echo "
                    </a>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_component_product_box_action_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_meta"));

        // line 81
        echo "        <input type=\"hidden\"
               name=\"product-name\"
               value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  401 => 87,  394 => 83,  390 => 81,  380 => 80,  367 => 73,  363 => 72,  357 => 70,  347 => 69,  335 => 58,  331 => 56,  321 => 55,  308 => 51,  302 => 48,  296 => 45,  290 => 42,  285 => 40,  281 => 39,  276 => 37,  272 => 36,  269 => 35,  259 => 34,  247 => 31,  238 => 24,  236 => 23,  226 => 22,  213 => 63,  209 => 62,  205 => 60,  203 => 55,  200 => 54,  198 => 34,  195 => 33,  193 => 22,  190 => 21,  180 => 20,  167 => 17,  157 => 16,  146 => 66,  144 => 20,  141 => 19,  139 => 16,  130 => 11,  128 => 10,  118 => 9,  108 => 80,  105 => 79,  101 => 77,  98 => 76,  95 => 69,  92 => 68,  89 => 9,  87 => 8,  84 => 7,  82 => 6,  79 => 5,  77 => 4,  74 => 3,  71 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_action_inner %}
    {% set id = product.id %}

    {% if shopware.config.core.listing.allowBuyInListing %}
        <div class=\"product-action\">
            {% set isAvailable = not product.isCloseout or (product.availableStock >= product.minPurchase) %}

            {% if isAvailable and not product.isGrouped and product.childCount <= 0 %}
                {% block component_product_box_action_buy %}
                    {# @var product \\Shopware\\Core\\Content\\Product\\SalesChannel\\SalesChannelProductEntity #}
                       <form action=\"{{ path('frontend.checkout.line-item.add') }}\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            {% block component_product_box_action_buy_csrf %}
                                {{ sw_csrf('frontend.checkout.line-item.add') }}
                            {% endblock %}

                            {% block component_product_box_action_form %}

                                {% block component_product_box_action_buy_redirect_input %}
                                    {# fallback redirect back to detail page is deactivated via js #}
                                    <input type=\"hidden\"
                                           name=\"redirectTo\"
                                           value=\"frontend.detail.page\">

                                    <input type=\"hidden\"
                                           name=\"redirectParameters\"
                                           data-redirect-parameters=\"true\"
                                           value='{\"productId\": \"{{ product.id }}\"}'>
                                {% endblock %}

                                {% block page_product_detail_buy_product_buy_info %}
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][id]\"
                                           value=\"{{ id }}\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][referencedId]\"
                                           value=\"{{ id }}\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][quantity]\"
                                           value=\"1\">
                                {% endblock %}

                                {% block page_product_detail_product_buy_meta %}
                                    <input type=\"hidden\"
                                           name=\"product-name\"
                                           value=\"{{ product.translated.name }}\">
                                {% endblock %}

                                <button class=\"btn btn-block btn-buy\"
                                        title=\"{{ \"listing.boxAddProduct\"|trans|striptags }}\">
                                    {{ \"listing.boxAddProduct\"|trans|sw_sanitize }}
                                </button>
                            {% endblock %}
                        </form>
                {% endblock %}
            {% else %}
                {% block component_product_box_action_detail %}
                    <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                       class=\"btn btn-block btn-light\"
                       title=\"{{ \"listing.boxProductDetails\"|trans|striptags }}\">
                        {{ \"listing.boxProductDetails\"|trans|sw_sanitize }}
                    </a>
                {% endblock %}
            {% endif %}
        </div>
    {% endif %}

    {% block component_product_box_action_meta %}
        <input type=\"hidden\"
               name=\"product-name\"
               value=\"{{ product.translated.name }}\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"{{ id }}\">
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/product/card/action.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
