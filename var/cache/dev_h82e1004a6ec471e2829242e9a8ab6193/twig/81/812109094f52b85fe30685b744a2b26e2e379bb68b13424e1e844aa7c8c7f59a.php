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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_205898ec7d1fdb11b648e42032286d6a494b6bece31dcb56eb673a376949621e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_rich_snippets' => [$this, 'block_component_product_box_rich_snippets'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_variant_characteristics' => [$this, 'block_component_product_box_variant_characteristics'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box-standard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box-standard.html.twig"));

        // line 1
        $this->displayBlock('component_product_box', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box"));

        // line 2
        echo "    ";
        if (($context["product"] ?? null)) {
            // line 3
            echo "        ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["cover"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["variation"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 6);
            // line 7
            echo "
        <div class=\"card product-box box-";
            // line 8
            echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 9
            $this->displayBlock('component_product_box_content', $context, $blocks);
            // line 123
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_component_product_box_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_content"));

        // line 10
        echo "                <div class=\"card-body\">
                    ";
        // line 11
        $this->displayBlock('component_product_box_badges', $context, $blocks);
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('component_product_box_image', $context, $blocks);
        // line 63
        echo "
                    ";
        // line 64
        $this->displayBlock('component_product_box_info', $context, $blocks);
        // line 121
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_component_product_box_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_badges"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_badges"));

        // line 12
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 12)->display($context);
        // line 13
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_component_product_box_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets"));

        // line 16
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/meta.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 16)->display($context);
        // line 17
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_component_product_box_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image"));

        // line 20
        echo "                        <div class=\"product-image-wrapper\">
                            ";
        // line 22
        echo "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? (($context["displayMode"] ?? null)) : ("standard"));
        // line 23
        echo "
                            ";
        // line 25
        echo "                            ";
        if (((($context["layout"] ?? null) == "image") && (($context["displayMode"] ?? null) == "standard"))) {
            // line 26
            echo "                                ";
            $context["displayMode"] = "cover";
            // line 27
            echo "                            ";
        }
        // line 28
        echo "
                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                               title=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               class=\"product-image-link is-";
        // line 31
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                    ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 34
($context["displayMode"] ?? null)), "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) : (($context["name"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) : (($context["name"] ?? null)))];
            // line 38
            echo "
                                    ";
            // line 39
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 40
                echo "                                        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 41
                echo "                                    ";
            }
            // line 42
            echo "
                                    ";
            // line 43
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 43);
            })())->display(twig_array_merge($context, ["media" =>             // line 44
($context["cover"] ?? null), "sizes" => ["xs" => "501px", "sm" => "315px", "md" => "427px", "lg" => "333px", "xl" => "284px"], "name" => "product-image-thumbnails"]));
            // line 53
            echo "                                ";
        } else {
            // line 54
            echo "                                    <div class=\"product-image-placeholder\">
                                        ";
            // line 55
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 55);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 58
            echo "                                    </div>
                                ";
        }
        // line 60
        echo "                            </a>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_component_product_box_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_info"));

        // line 65
        echo "                        <div class=\"product-info\">
                            ";
        // line 66
        $this->displayBlock('component_product_box_rating', $context, $blocks);
        // line 78
        echo "
                            ";
        // line 79
        $this->displayBlock('component_product_box_name', $context, $blocks);
        // line 86
        echo "
                            ";
        // line 87
        $this->displayBlock('component_product_box_variant_characteristics', $context, $blocks);
        // line 105
        echo "
                            ";
        // line 106
        $this->displayBlock('component_product_box_description', $context, $blocks);
        // line 111
        echo "
                            ";
        // line 112
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 115
        echo "
                            ";
        // line 116
        $this->displayBlock('component_product_box_action', $context, $blocks);
        // line 119
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_component_product_box_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rating"));

        // line 67
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 67), "core", [], "any", false, false, false, 67), "listing", [], "any", false, false, false, 67), "showReview", [], "any", false, false, false, 67)) {
            // line 68
            echo "                                    <div class=\"product-rating\">
                                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 69)) {
                // line 70
                echo "                                            ";
                $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 70)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source,                 // line 71
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 71), "style" => "text-primary"]));
                // line 74
                echo "                                        ";
            }
            // line 75
            echo "                                    </div>
                                ";
        }
        // line 77
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_component_product_box_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_name"));

        // line 80
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                                   class=\"product-name\"
                                   title=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 83
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_component_product_box_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_variant_characteristics"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_variant_characteristics"));

        // line 88
        echo "                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        ";
        // line 90
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 90)) {
            // line 91
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                // line 92
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 92), "html", null, true);
                echo ":
                                                <span class=\"product-variant-characteristics-option\">
                                                    ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 94), "html", null, true);
                echo "
                                                </span>

                                                ";
                // line 97
                if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 97)) != $context["variation"])) {
                    // line 98
                    echo "                                                    ";
                    echo " | ";
                    echo "
                                                ";
                }
                // line 100
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                        ";
        }
        // line 102
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_component_product_box_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_description"));

        // line 107
        echo "                                <div class=\"product-description\">
                                    ";
        // line 108
        echo strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 108), "description", [], "any", false, false, false, 108));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 113
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 113)->display($context);
        // line 114
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_component_product_box_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action"));

        // line 117
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 117)->display($context);
        // line 118
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  548 => 118,  545 => 117,  535 => 116,  525 => 114,  522 => 113,  512 => 112,  499 => 108,  496 => 107,  486 => 106,  474 => 102,  471 => 101,  465 => 100,  459 => 98,  457 => 97,  451 => 94,  445 => 92,  440 => 91,  438 => 90,  434 => 88,  424 => 87,  411 => 83,  407 => 82,  401 => 80,  391 => 79,  381 => 77,  377 => 75,  374 => 74,  372 => 71,  370 => 70,  368 => 69,  365 => 68,  362 => 67,  352 => 66,  341 => 119,  339 => 116,  336 => 115,  334 => 112,  331 => 111,  329 => 106,  326 => 105,  324 => 87,  321 => 86,  319 => 79,  316 => 78,  314 => 66,  311 => 65,  301 => 64,  289 => 60,  285 => 58,  277 => 55,  274 => 54,  271 => 53,  269 => 44,  262 => 43,  259 => 42,  256 => 41,  253 => 40,  251 => 39,  248 => 38,  246 => 36,  245 => 35,  244 => 34,  242 => 33,  240 => 32,  236 => 31,  232 => 30,  228 => 29,  225 => 28,  222 => 27,  219 => 26,  216 => 25,  213 => 23,  210 => 22,  207 => 20,  197 => 19,  187 => 17,  184 => 16,  174 => 15,  164 => 13,  161 => 12,  151 => 11,  140 => 121,  138 => 64,  135 => 63,  133 => 19,  130 => 18,  128 => 15,  125 => 14,  123 => 11,  120 => 10,  110 => 9,  98 => 123,  96 => 9,  92 => 8,  89 => 7,  86 => 6,  83 => 5,  80 => 4,  77 => 3,  74 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box %}
    {% if product %}
        {% set name = product.translated.name %}
        {% set id = product.id %}
        {% set cover = product.cover.media %}
        {% set variation = product.variation %}

        <div class=\"card product-box box-{{ layout }}\">
            {% block component_product_box_content %}
                <div class=\"card-body\">
                    {% block component_product_box_badges %}
                        {% sw_include '@Storefront/storefront/component/product/card/badges.html.twig' %}
                    {% endblock %}

                    {% block component_product_box_rich_snippets %}
                        {% sw_include '@Storefront/storefront/component/product/card/meta.html.twig' %}
                    {% endblock %}

                    {% block component_product_box_image %}
                        <div class=\"product-image-wrapper\">
                            {# fallback if display mode is not set #}
                            {% set displayMode = displayMode ?: 'standard' %}

                            {# set display mode 'cover' for box-image with standard display mode #}
                            {% if layout == 'image' and displayMode == 'standard' %}
                                {% set displayMode = 'cover' %}
                            {% endif %}

                            <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                               title=\"{{ name }}\"
                               class=\"product-image-link is-{{ displayMode }}\">
                                {% if cover.url %}
                                    {% set attributes = {
                                        'class': 'product-image is-'~displayMode,
                                        'alt': (cover.translated.alt ?: name),
                                        'title': (cover.translated.title ?: name)
                                    } %}

                                    {% if displayMode == 'cover' or displayMode == 'contain' %}
                                        {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                    {% endif %}

                                    {% sw_thumbnails 'product-image-thumbnails' with {
                                        media: cover,
                                        sizes: {
                                            'xs': '501px',
                                            'sm': '315px',
                                            'md': '427px',
                                            'lg': '333px',
                                            'xl': '284px'
                                        }
                                    } %}
                                {% else %}
                                    <div class=\"product-image-placeholder\">
                                        {% sw_icon 'placeholder' style {
                                            'size': 'fluid'
                                        } %}
                                    </div>
                                {% endif %}
                            </a>
                        </div>
                    {% endblock %}

                    {% block component_product_box_info %}
                        <div class=\"product-info\">
                            {% block component_product_box_rating %}
                                {% if shopware.config.core.listing.showReview %}
                                    <div class=\"product-rating\">
                                        {% if product.ratingAverage %}
                                            {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                                points: product.ratingAverage,
                                                style: 'text-primary'
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {% block component_product_box_name %}
                                <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                                   class=\"product-name\"
                                   title=\"{{ name }}\">
                                    {{ name }}
                                </a>
                            {% endblock %}

                            {% block component_product_box_variant_characteristics %}
                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        {% if not product.isGrouped %}
                                            {% for variation in product.variation %}
                                                {{ variation.group }}:
                                                <span class=\"product-variant-characteristics-option\">
                                                    {{ variation.option }}
                                                </span>

                                                {% if product.variation|last != variation %}
                                                    {{ \" | \" }}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                            {% endblock %}

                            {% block component_product_box_description %}
                                <div class=\"product-description\">
                                    {{ product.translated.description|striptags|raw }}
                                </div>
                            {% endblock %}

                            {% block component_product_box_price %}
                                {% sw_include '@Storefront/storefront/component/product/card/price-unit.html.twig' %}
                            {% endblock %}

                            {% block component_product_box_action %}
                                {% sw_include '@Storefront/storefront/component/product/card/action.html.twig' %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
