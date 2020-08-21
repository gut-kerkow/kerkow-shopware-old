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

/* @Storefront/storefront/layout/header/header.html.twig */
class __TwigTemplate_4ed0c1b3ea603fea8bc3de115b43449d0576b5f3b9f8ee5fba4cce4517656110 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_top_bar' => [$this, 'block_layout_top_bar'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_navigation_toggle_tablet' => [$this, 'block_layout_header_navigation_toggle_tablet'],
            'layout_header_navigation_toggle_tablet_button' => [$this, 'block_layout_header_navigation_toggle_tablet_button'],
            'layout_header_navigation_toggle_tablet_button_icon' => [$this, 'block_layout_header_navigation_toggle_tablet_button_icon'],
            'layout_header_actions' => [$this, 'block_layout_header_actions'],
            'layout_header_navigation_toggle' => [$this, 'block_layout_header_navigation_toggle'],
            'layout_header_navigation_toggle_button' => [$this, 'block_layout_header_navigation_toggle_button'],
            'layout_header_navigation_toggle_button_icon' => [$this, 'block_layout_header_navigation_toggle_button_icon'],
            'layout_header_search_toggle' => [$this, 'block_layout_header_search_toggle'],
            'layout_header_actions_account' => [$this, 'block_layout_header_actions_account'],
            'layout_header_actions_cart' => [$this, 'block_layout_header_actions_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/header.html.twig"));

        // line 1
        $this->displayBlock('layout_header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 2
        echo "    ";
        $this->displayBlock('layout_top_bar', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('layout_header_navigation', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_layout_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_top_bar"));

        // line 3
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/header/top-bar.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_layout_header_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        // line 7
        echo "        <div class=\"row align-items-center header-row\">
            ";
        // line 8
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('layout_header_search', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('layout_header_actions', $context, $blocks);
        // line 101
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        // line 9
        echo "                <div class=\"col-12 col-lg-auto header-logo-col\">
                    ";
        // line 10
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 10)->display($context);
        // line 11
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        // line 15
        echo "                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            ";
        // line 18
        $this->displayBlock('layout_header_navigation_toggle_tablet', $context, $blocks);
        // line 32
        echo "                        </div>
                        <div class=\"col\">
                            ";
        // line 34
        $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 34)->display($context);
        // line 35
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_layout_header_navigation_toggle_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet"));

        // line 19
        echo "                                <div class=\"nav-main-toggle\">
                                    ";
        // line 20
        $this->displayBlock('layout_header_navigation_toggle_tablet_button', $context, $blocks);
        // line 30
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_layout_header_navigation_toggle_tablet_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button"));

        // line 21
        echo "                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"";
        // line 24
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\">
                                            ";
        // line 25
        $this->displayBlock('layout_header_navigation_toggle_tablet_button_icon', $context, $blocks);
        // line 28
        echo "                                        </button>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_layout_header_navigation_toggle_tablet_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button_icon"));

        // line 26
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 26);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 27
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_layout_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions"));

        // line 41
        echo "                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row no-gutters\">
                        ";
        // line 43
        $this->displayBlock('layout_header_navigation_toggle', $context, $blocks);
        // line 59
        echo "
                        ";
        // line 60
        $this->displayBlock('layout_header_search_toggle', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        $this->displayBlock('layout_header_actions_account', $context, $blocks);
        // line 83
        echo "
                        ";
        // line 84
        $this->displayBlock('layout_header_actions_cart', $context, $blocks);
        // line 98
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_layout_header_navigation_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle"));

        // line 44
        echo "                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    ";
        // line 46
        $this->displayBlock('layout_header_navigation_toggle_button', $context, $blocks);
        // line 56
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_layout_header_navigation_toggle_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button"));

        // line 47
        echo "                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"";
        // line 50
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\">
                                            ";
        // line 51
        $this->displayBlock('layout_header_navigation_toggle_button_icon', $context, $blocks);
        // line 54
        echo "                                        </button>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_layout_header_navigation_toggle_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button_icon"));

        // line 52
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 52);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 53
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_layout_header_search_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_toggle"));

        // line 61
        echo "                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            data-toggle=\"collapse\"
                                            data-target=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"";
        // line 69
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                        ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 70);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 71
        echo "                                    </button>
                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_layout_header_actions_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account"));

        // line 77
        echo "                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    ";
        // line 79
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/account-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 79)->display($context);
        // line 80
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_layout_header_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart"));

        // line 85
        echo "                            <div class=\"col-auto\">
                                <div class=\"header-cart\"
                                     data-offcanvas-cart=\"true\">
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        echo "\"
                                       data-cart-widget=\"true\"
                                       title=\"";
        // line 91
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\"
                                       aria-label=\"";
        // line 92
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\">
                                        ";
        // line 93
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 93)->display($context);
        // line 94
        echo "                                    </a>
                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  537 => 94,  535 => 93,  531 => 92,  527 => 91,  522 => 89,  516 => 85,  506 => 84,  494 => 80,  492 => 79,  488 => 77,  478 => 76,  465 => 71,  457 => 70,  453 => 69,  443 => 61,  433 => 60,  423 => 53,  414 => 52,  404 => 51,  393 => 54,  391 => 51,  387 => 50,  382 => 47,  372 => 46,  360 => 56,  358 => 46,  354 => 44,  344 => 43,  332 => 98,  330 => 84,  327 => 83,  325 => 76,  322 => 75,  320 => 60,  317 => 59,  315 => 43,  311 => 41,  301 => 40,  291 => 27,  282 => 26,  272 => 25,  261 => 28,  259 => 25,  255 => 24,  250 => 21,  240 => 20,  229 => 30,  227 => 20,  224 => 19,  214 => 18,  201 => 35,  199 => 34,  195 => 32,  193 => 18,  188 => 15,  178 => 14,  167 => 11,  165 => 10,  162 => 9,  152 => 8,  141 => 101,  139 => 40,  136 => 39,  134 => 14,  131 => 13,  129 => 8,  126 => 7,  116 => 6,  106 => 4,  103 => 3,  93 => 2,  83 => 6,  80 => 5,  77 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header %}
    {% block layout_top_bar %}
        {% sw_include '@Storefront/storefront/layout/header/top-bar.html.twig' %}
    {% endblock %}

    {% block layout_header_navigation %}
        <div class=\"row align-items-center header-row\">
            {% block layout_header_logo %}
                <div class=\"col-12 col-lg-auto header-logo-col\">
                    {% sw_include '@Storefront/storefront/layout/header/logo.html.twig' %}
                </div>
            {% endblock %}

            {% block layout_header_search %}
                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            {% block layout_header_navigation_toggle_tablet %}
                                <div class=\"nav-main-toggle\">
                                    {% block layout_header_navigation_toggle_tablet_button %}
                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"{{ \"general.menuLink\"|trans|striptags }}\">
                                            {% block layout_header_navigation_toggle_tablet_button_icon %}
                                                {% sw_icon 'stack' %}
                                            {% endblock %}
                                        </button>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                        <div class=\"col\">
                            {% sw_include '@Storefront/storefront/layout/header/search.html.twig' %}
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block layout_header_actions %}
                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row no-gutters\">
                        {% block layout_header_navigation_toggle %}
                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    {% block layout_header_navigation_toggle_button %}
                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"{{ \"general.menuLink\"|trans|striptags }}\">
                                            {% block layout_header_navigation_toggle_button_icon %}
                                                {% sw_icon 'stack' %}
                                            {% endblock %}
                                        </button>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block layout_header_search_toggle %}
                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            data-toggle=\"collapse\"
                                            data-target=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"{{ \"header.searchButton\"|trans|striptags }}\">
                                        {% sw_icon 'search' %}
                                    </button>
                                </div>
                            </div>
                        {% endblock %}

                        {% block layout_header_actions_account %}
                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    {% sw_include '@Storefront/storefront/layout/header/actions/account-widget.html.twig' %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block layout_header_actions_cart %}
                            <div class=\"col-auto\">
                                <div class=\"header-cart\"
                                     data-offcanvas-cart=\"true\">
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"{{ path('frontend.checkout.cart.page') }}\"
                                       data-cart-widget=\"true\"
                                       title=\"{{ 'checkout.cartTitle'|trans|striptags }}\"
                                       aria-label=\"{{ 'checkout.cartTitle'|trans|striptags }}\">
                                        {% sw_include '@Storefront/storefront/layout/header/actions/cart-widget.html.twig' %}
                                    </a>
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/header/header.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/header/header.html.twig");
    }
}
