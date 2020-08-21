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

/* @Storefront/storefront/component/listing/filter/filter-property-select.html.twig */
class __TwigTemplate_2428b9f44b84dcda8dcc2a51e5654522ba9157161aee88c245b9bd8ea119c7f3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_property_select_preview' => [$this, 'block_component_filter_property_select_preview'],
            'component_filter_property_select_checkox_input' => [$this, 'block_component_filter_property_select_checkox_input'],
            'component_filter_property_select_preview_checkmark' => [$this, 'block_component_filter_property_select_preview_checkmark'],
            'component_filter_property_select_preview_checkmark_icon' => [$this, 'block_component_filter_property_select_preview_checkmark_icon'],
            'component_filter_property_select_preview_list_item_label_element' => [$this, 'block_component_filter_property_select_preview_list_item_label_element'],
            'component_filter_property_select_preview_list_item_label' => [$this, 'block_component_filter_property_select_preview_list_item_label'],
            'component_filter_property_select_preview_list_item' => [$this, 'block_component_filter_property_select_preview_list_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        // line 4
        echo "    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        ";
        // line 5
        if (((($context["displayType"] ?? null) == "color") || (($context["displayType"] ?? null) == "media"))) {
            // line 6
            echo "            ";
            $context["color"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "colorHexCode", [], "any", false, false, false, 6);
            // line 7
            echo "            ";
            $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "media", [], "any", false, false, false, 7), "url", [], "any", false, false, false, 7);
            // line 8
            echo "            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8);
            // line 9
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 9);
            // line 10
            echo "
            ";
            // line 11
            $this->displayBlock('component_filter_property_select_preview', $context, $blocks);
            // line 43
            echo "
            ";
            // line 44
            if ( !($context["hideTitle"] ?? null)) {
                // line 45
                echo "                ";
                $this->displayBlock('component_filter_property_select_preview_list_item_label_element', $context, $blocks);
                // line 52
                echo "            ";
            }
            // line 53
            echo "        ";
        } else {
            // line 54
            echo "            ";
            $this->displayBlock('component_filter_property_select_preview_list_item', $context, $blocks);
            // line 57
            echo "        ";
        }
        // line 58
        echo "    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_component_filter_property_select_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview"));

        // line 12
        echo "                <span class=\"filter-property-select-preview\"
                      title=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                      ";
        // line 14
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 15
            echo "                      style=\"background: ";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                      ";
        }
        // line 17
        echo "                      ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 18
            echo "                      style=\"background-image: url('";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "')\"
                      ";
        }
        // line 19
        echo ">

                    ";
        // line 21
        $this->displayBlock('component_filter_property_select_checkox_input', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('component_filter_property_select_preview_checkmark', $context, $blocks);
        // line 41
        echo "                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_component_filter_property_select_checkox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_checkox_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_checkox_input"));

        // line 22
        echo "                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
                               data-label=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               ";
        // line 26
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 27
            echo "                               data-preview-hex=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 29
        echo "                               ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 30
            echo "                               data-preview-image-url=\"";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 31
        echo ">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_component_filter_property_select_preview_checkmark($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark"));

        // line 35
        echo "                        <span class=\"filter-property-select-preview-checkmark\">
                            ";
        // line 36
        $this->displayBlock('component_filter_property_select_preview_checkmark_icon', $context, $blocks);
        // line 39
        echo "                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_component_filter_property_select_preview_checkmark_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark_icon"));

        // line 37
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 37);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 38
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_component_filter_property_select_preview_list_item_label_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label_element"));

        // line 46
        echo "                    <label class=\"filter-multi-select-item-label\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 47
        $this->displayBlock('component_filter_property_select_preview_list_item_label', $context, $blocks);
        // line 50
        echo "                    </label>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_component_filter_property_select_preview_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label"));

        // line 48
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_component_filter_property_select_preview_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item"));

        // line 55
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 55)->display($context);
        // line 56
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 56,  350 => 55,  340 => 54,  327 => 48,  317 => 47,  306 => 50,  304 => 47,  299 => 46,  289 => 45,  279 => 38,  270 => 37,  260 => 36,  249 => 39,  247 => 36,  244 => 35,  234 => 34,  223 => 31,  217 => 30,  214 => 29,  208 => 27,  206 => 26,  202 => 25,  198 => 24,  194 => 22,  184 => 21,  173 => 41,  171 => 34,  168 => 33,  166 => 21,  162 => 19,  156 => 18,  153 => 17,  147 => 15,  145 => 14,  141 => 13,  138 => 12,  128 => 11,  117 => 58,  114 => 57,  111 => 54,  108 => 53,  105 => 52,  102 => 45,  100 => 44,  97 => 43,  95 => 11,  92 => 10,  89 => 9,  86 => 8,  83 => 7,  80 => 6,  78 => 5,  75 => 4,  65 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' %}

{% block component_filter_multi_select_list_item %}
    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        {% if displayType == 'color' or displayType == 'media' %}
            {% set color = element.colorHexCode %}
            {% set media = element.media.url %}
            {% set name = element.translated.name %}
            {% set id = element.id %}

            {% block component_filter_property_select_preview %}
                <span class=\"filter-property-select-preview\"
                      title=\"{{ name }}\"
                      {% if displayType == 'color' and color %}
                      style=\"background: {{ color }}\"
                      {% endif %}
                      {% if displayType == 'media' and media %}
                      style=\"background-image: url('{{ media }}')\"
                      {% endif %}>

                    {% block component_filter_property_select_checkox_input %}
                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"{{ id }}\"
                               data-label=\"{{ name }}\"
                               {% if displayType == 'color' and color %}
                               data-preview-hex=\"{{ color }}\"
                               {% endif %}
                               {% if displayType == 'media' and media %}
                               data-preview-image-url=\"{{ media }}\"
                               {% endif %}>
                    {% endblock %}

                    {% block component_filter_property_select_preview_checkmark %}
                        <span class=\"filter-property-select-preview-checkmark\">
                            {% block component_filter_property_select_preview_checkmark_icon %}
                                {% sw_icon 'checkmark' style {'pack': 'solid', 'size': 'xs'} %}
                            {% endblock %}
                        </span>
                    {% endblock %}
                </span>
            {% endblock %}

            {% if not hideTitle %}
                {% block component_filter_property_select_preview_list_item_label_element %}
                    <label class=\"filter-multi-select-item-label\" for=\"{{ id }}\">
                        {% block component_filter_property_select_preview_list_item_label %}
                            {{ name }}
                        {% endblock %}
                    </label>
                {% endblock %}
            {% endif %}
        {% else %}
            {% block component_filter_property_select_preview_list_item %}
                {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig' %}
            {% endblock %}
        {% endif %}
    </li>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-property-select.html.twig");
    }
}
