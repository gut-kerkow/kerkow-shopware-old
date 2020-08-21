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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_d8a559369f55535b30ab0090defd69ae272d836da37b3aa0d12d46c75dbe5e56 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_search', $context, $blocks);
    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "\"
                  method=\"get\"
                  data-search-form=\"true\"
                  data-url=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        echo "?search=\"
                  class=\"header-search-form\">
                ";
        // line 10
        $this->displayBlock('layout_header_search_input_group', $context, $blocks);
        // line 37
        echo "            </form>
        </div>
    </div>
";
    }

    // line 10
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    <div class=\"input-group\">
                        ";
        // line 12
        $this->displayBlock('layout_header_search_input', $context, $blocks);
        // line 23
        echo "
                        ";
        // line 24
        $this->displayBlock('layout_header_search_button', $context, $blocks);
        // line 35
        echo "                    </div>
                ";
    }

    // line 12
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                            <input type=\"search\"
                                   name=\"search\"
                                   class=\"form-control header-search-input\"
                                   autocomplete=\"off\"
                                   autocapitalize=\"off\"
                                   placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 19
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                            >
                        ";
    }

    // line 24
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                            <div class=\"input-group-append\">
                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
        // line 28
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                    <span class=\"header-search-icon\">
                                        ";
        // line 30
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 30);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 31
        echo "                                    </span>
                                </button>
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  132 => 30,  127 => 28,  122 => 25,  118 => 24,  111 => 20,  107 => 19,  103 => 18,  96 => 13,  92 => 12,  87 => 35,  85 => 24,  82 => 23,  80 => 12,  77 => 11,  73 => 10,  66 => 37,  64 => 10,  59 => 8,  53 => 5,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/search.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
