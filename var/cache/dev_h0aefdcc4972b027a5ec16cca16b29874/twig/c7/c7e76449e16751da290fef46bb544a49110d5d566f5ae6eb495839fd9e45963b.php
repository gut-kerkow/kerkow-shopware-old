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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_00441f36ece9ad2022e566133407885353e6f5a64d49c2a0c9d4ca93efc367de extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/navigation.html.twig"));

        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        // line 2
        echo "
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 6
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 92
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_navbar"));

        // line 7
        echo "            <div class=\"container\">
                ";
        // line 8
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 58
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu"));

        // line 9
        echo "                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        ";
        // line 12
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 22
        echo "
                        ";
        // line 23
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 56
        echo "                    </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        // line 13
        echo "                            <a class=\"nav-link main-navigation-link";
        if ((($context["controllerAction"] ?? null) === "home")) {
            echo " active";
        }
        echo " home-link\"
                                href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                                itemprop=\"url\"
                                title=\"";
        // line 16
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")), "html", null, true);
        echo "\">
                                <div class=\"main-navigation-link-text\">
                                    <span itemprop=\"name\">";
        // line 18
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"));
        echo "</span>
                                </div>
                            </a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_items"));

        // line 24
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "navigation", [], "any", false, false, false, 24), "tree", [], "any", false, false, false, 24));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 25
            echo "                                ";
            $context["category"] = twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 25);
            // line 26
            echo "                                ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26);
            // line 27
            echo "                                ";
            $context["categorId"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 27);
            // line 28
            echo "
                                ";
            // line 29
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 54
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        // line 30
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 30) == "folder")) {
            // line 31
            echo "                                        <div class=\"nav-link main-navigation-link\"
                                            ";
            // line 32
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 32)) > 0)) {
                // line 33
                echo "                                                data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, ($context["categorId"] ?? null), "html", null, true);
                echo "\"
                                            ";
            }
            // line 35
            echo "                                              title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 37
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 41
            echo "                                        <a class=\"nav-link main-navigation-link";
            if ((($context["categorId"] ?? null) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 41), "navigation", [], "any", false, false, false, 41), "active", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41))) {
                echo " active";
            }
            echo "\"
                                           href=\"";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "externalLink", [], "any", false, false, false, 42)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "externalLink", [], "any", false, false, false, 42), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["categorId"] ?? null)]), "html", null, true);
            }
            echo "\"
                                           itemprop=\"url\"
                                            ";
            // line 44
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 44)) > 0)) {
                // line 45
                echo "                                                data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, ($context["categorId"] ?? null), "html", null, true);
                echo "\"
                                            ";
            }
            // line 47
            echo "                                           title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </a>
                                    ";
        }
        // line 53
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        // line 62
        echo "            ";
        $context["navigationChildrenCount"] = 0;
        // line 63
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 63), "navigation", [], "any", false, false, false, 63), "tree", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 64
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 64), "childCount", [], "any", false, false, false, 64) > 0)) {
                // line 65
                echo "                    ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
            ";
        // line 69
        if ((($context["navigationChildrenCount"] ?? null) > 0)) {
            // line 70
            echo "                ";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 90
            echo "            ";
        }
        // line 91
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_container"));

        // line 71
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 72
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 88
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyouts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyouts"));

        // line 73
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 73), "navigation", [], "any", false, false, false, 73), "tree", [], "any", false, false, false, 73));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 74
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 74)) > 0)) {
                // line 75
                echo "                                    ";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 85
                echo "                                ";
            }
            // line 86
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        // line 76
        echo "                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
                                            <div class=\"container\">
                                                ";
        // line 79
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 82
        echo "                                            </div>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        // line 80
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 80)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1), "page" => ($context["page"] ?? null)]));
        // line 81
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  533 => 81,  530 => 80,  520 => 79,  508 => 82,  506 => 79,  501 => 77,  498 => 76,  488 => 75,  478 => 87,  464 => 86,  461 => 85,  458 => 75,  455 => 74,  437 => 73,  427 => 72,  416 => 88,  414 => 72,  411 => 71,  401 => 70,  391 => 91,  388 => 90,  385 => 70,  383 => 69,  380 => 68,  374 => 67,  371 => 66,  368 => 65,  365 => 64,  360 => 63,  357 => 62,  347 => 61,  337 => 53,  330 => 49,  324 => 47,  318 => 45,  316 => 44,  307 => 42,  300 => 41,  293 => 37,  287 => 35,  281 => 33,  279 => 32,  276 => 31,  273 => 30,  263 => 29,  253 => 55,  239 => 54,  237 => 29,  234 => 28,  231 => 27,  228 => 26,  225 => 25,  207 => 24,  197 => 23,  183 => 18,  178 => 16,  173 => 14,  166 => 13,  156 => 12,  145 => 56,  143 => 23,  140 => 22,  138 => 12,  133 => 9,  123 => 8,  112 => 58,  110 => 8,  107 => 7,  97 => 6,  86 => 92,  84 => 61,  81 => 60,  79 => 6,  73 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_main_navigation %}

    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        {% block layout_main_navigation_navbar %}
            <div class=\"container\">
                {% block layout_main_navigation_menu %}
                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        {% block layout_main_navigation_menu_home %}
                            <a class=\"nav-link main-navigation-link{% if controllerAction is same as('home') %} active{% endif %} home-link\"
                                href=\"{{ path('frontend.home.page') }}\"
                                itemprop=\"url\"
                                title=\"{{ \"general.homeLink\"|trans|striptags }}\">
                                <div class=\"main-navigation-link-text\">
                                    <span itemprop=\"name\">{{ \"general.homeLink\"|trans|sw_sanitize }}</span>
                                </div>
                            </a>
                        {% endblock %}

                        {% block layout_main_navigation_menu_items %}
                            {% for treeItem in page.header.navigation.tree %}
                                {% set category = treeItem.category %}
                                {% set name = category.translated.name %}
                                {% set categorId = category.id %}

                                {% block layout_main_navigation_menu_item %}
                                    {% if category.type == 'folder' %}
                                        <div class=\"nav-link main-navigation-link\"
                                            {% if treeItem.children|length > 0 %}
                                                data-flyout-menu-trigger=\"{{ categorId }}\"
                                            {% endif %}
                                              title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </div>
                                    {% else %}
                                        <a class=\"nav-link main-navigation-link{% if categorId is same as(page.header.navigation.active.id) %} active{% endif %}\"
                                           href=\"{% if category.externalLink %}{{ category.externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: categorId }) }}{% endif %}\"
                                           itemprop=\"url\"
                                            {% if treeItem.children|length > 0 %}
                                                data-flyout-menu-trigger=\"{{ categorId }}\"
                                            {% endif %}
                                           title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </a>
                                    {% endif %}
                                {% endblock %}
                            {% endfor %}
                        {% endblock %}
                    </nav>
                {% endblock %}
            </div>
        {% endblock %}

        {% block layout_main_navigation_menu_flyout_wrapper %}
            {% set navigationChildrenCount = 0 %}
            {% for treeItem in page.header.navigation.tree %}
                {% if treeItem.category.childCount > 0 %}
                    {% set navigationChildrenCount = navigationChildrenCount + 1 %}
                {% endif %}
            {% endfor %}

            {% if navigationChildrenCount > 0 %}
                {% block layout_main_navigation_menu_flyout_container %}
                    <div class=\"navigation-flyouts\">
                        {% block layout_main_navigation_menu_flyouts %}
                            {% for treeItem in page.header.navigation.tree %}
                                {% if treeItem.children|length > 0 %}
                                    {% block layout_main_navigation_menu_flyout %}
                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"{{ treeItem.category.id }}\">
                                            <div class=\"container\">
                                                {% block layout_main_navigation_menu_flyout_include %}
                                                    {% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {navigationTree: treeItem, level: level+1, page: page} only %}
                                                {% endblock %}
                                            </div>
                                        </div>
                                    {% endblock %}
                                {% endif %}
                            {% endfor %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
