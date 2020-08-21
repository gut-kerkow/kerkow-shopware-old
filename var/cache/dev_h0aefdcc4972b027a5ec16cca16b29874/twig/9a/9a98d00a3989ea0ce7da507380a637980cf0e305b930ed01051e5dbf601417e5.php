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

/* @Storefront/storefront/page/product-detail/buy-widget-price.html.twig */
class __TwigTemplate_8cd1ec68f24f8f68efce9505f1cf6fdd2c5e30931c34ed49ccd1b9ff0709fc40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_price_inner' => [$this, 'block_page_product_detail_price_inner'],
            'page_product_detail_price_block' => [$this, 'block_page_product_detail_price_block'],
            'page_product_detail_price_block_table' => [$this, 'block_page_product_detail_price_block_table'],
            'page_product_detail_price_block_table_head' => [$this, 'block_page_product_detail_price_block_table_head'],
            'page_product_detail_price_block_table_head_inner' => [$this, 'block_page_product_detail_price_block_table_head_inner'],
            'page_product_detail_price_block_table_body' => [$this, 'block_page_product_detail_price_block_table_body'],
            'page_product_detail_price_block_table_body_inner' => [$this, 'block_page_product_detail_price_block_table_body_inner'],
            'page_product_detail_price_block_table_body_row' => [$this, 'block_page_product_detail_price_block_table_body_row'],
            'page_product_detail_price_block_table_body_cell_quantity' => [$this, 'block_page_product_detail_price_block_table_body_cell_quantity'],
            'page_product_detail_price_block_table_body_cell_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_price'],
            'page_product_detail_price_block_table_body_cell_reference_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_reference_price'],
            'page_product_detail_price_content' => [$this, 'block_page_product_detail_price_content'],
            'page_product_detail_was_price' => [$this, 'block_page_product_detail_was_price'],
            'page_product_detail_was_price_badge' => [$this, 'block_page_product_detail_was_price_badge'],
            'page_product_detail_was_price_wrapper' => [$this, 'block_page_product_detail_was_price_wrapper'],
            'page_product_detail_price_unit' => [$this, 'block_page_product_detail_price_unit'],
            'page_product_detail_price_unit_label' => [$this, 'block_page_product_detail_price_unit_label'],
            'page_product_detail_price_unit_content' => [$this, 'block_page_product_detail_price_unit_content'],
            'page_product_detail_price_unit_reference_content' => [$this, 'block_page_product_detail_price_unit_reference_content'],
            'page_product_detail_price_unit_refrence_content' => [$this, 'block_page_product_detail_price_unit_refrence_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_price_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 2), "calculatedPrices", [], "any", false, false, false, 2)) > 1)) {
            // line 3
            echo "        ";
            $this->displayBlock('page_product_detail_price_block', $context, $blocks);
            // line 76
            echo "    ";
        } else {
            // line 77
            echo "        ";
            $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 77), "calculatedPrice", [], "any", false, false, false, 77);
            // line 78
            echo "
        ";
            // line 79
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 79), "calculatedPrices", [], "any", false, false, false, 79)) == 1)) {
                // line 80
                echo "            ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 80), "calculatedPrices", [], "any", false, false, false, 80), "first", [], "any", false, false, false, 80);
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        <meta itemprop=\"price\"
              content=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 84), "html", null, true);
            echo "\">

        ";
            // line 86
            $this->displayBlock('page_product_detail_price_content', $context, $blocks);
            // line 110
            echo "
        ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 111), "purchaseUnit", [], "any", false, false, false, 111)) {
                // line 112
                echo "            ";
                $this->displayBlock('page_product_detail_price_unit', $context, $blocks);
                // line 140
                echo "        ";
            }
            // line 141
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_price_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        // line 4
        echo "            <div class=\"product-block-prices\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_price_block_table', $context, $blocks);
        // line 74
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_price_block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        // line 6
        echo "                    <table class=\"table table-sm table-bordered product-block-prices-table\">
                        ";
        // line 7
        $this->displayBlock('page_product_detail_price_block_table_head', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_product_detail_price_block_table_body', $context, $blocks);
        // line 72
        echo "                    </table>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_page_product_detail_price_block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        // line 8
        echo "                            <thead class=\"product-block-prices-head\">
                                ";
        // line 9
        $this->displayBlock('page_product_detail_price_block_table_head_inner', $context, $blocks);
        // line 24
        echo "                            </thead>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_product_detail_price_block_table_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        // line 10
        echo "                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 12
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnQuantity"));
        echo "
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 15
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnPrice"));
        echo "
                                        </th>
                                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 17), "calculatedPrice", [], "any", false, false, false, 17), "referencePrice", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                ";
            // line 19
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnReferencePrice"));
            echo "
                                            </th>
                                        ";
        }
        // line 22
        echo "                                    </tr>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_page_product_detail_price_block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        // line 28
        echo "                            <tbody class=\"product-block-prices-body\">
                                ";
        // line 29
        $this->displayBlock('page_product_detail_price_block_table_body_inner', $context, $blocks);
        // line 70
        echo "                            </tbody>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_page_product_detail_price_block_table_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        // line 30
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 30), "calculatedPrices", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 31
            echo "                                        ";
            $this->displayBlock('page_product_detail_price_block_table_body_row', $context, $blocks);
            // line 68
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_page_product_detail_price_block_table_body_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        // line 32
        echo "                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                ";
        // line 36
        $this->displayBlock('page_product_detail_price_block_table_body_cell_quantity', $context, $blocks);
        // line 52
        echo "
                                                ";
        // line 53
        $this->displayBlock('page_product_detail_price_block_table_body_cell_price', $context, $blocks);
        // line 58
        echo "
                                                ";
        // line 59
        $this->displayBlock('page_product_detail_price_block_table_body_cell_reference_price', $context, $blocks);
        // line 66
        echo "                                            </tr>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_page_product_detail_price_block_table_body_cell_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        // line 37
        echo "                                                    <th scope=\"row\" class=\"product-block-prices-cell\">
                                                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "activeCurrency", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" />
                                                        <meta itemprop=\"price\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoFrom"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>

                                                        ";
        } else {
            // line 47
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoUntil"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                                                        ";
        }
        // line 50
        echo "                                                    </th>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_product_detail_price_block_table_body_cell_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        // line 54
        echo "                                                    <td class=\"product-block-prices-cell\">
                                                        ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 55)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                                                    </td>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_page_product_detail_price_block_table_body_cell_reference_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        // line 60
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 60))) {
            // line 61
            echo "                                                        <td class=\"product-block-prices-cell\">
                                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "price", [], "any", false, false, false, 62)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "referenceUnit", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62), "unitName", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                                        </td>
                                                    ";
        }
        // line 65
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_page_product_detail_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        // line 87
        echo "            ";
        $context["listPrice"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 87), "priceRange", [], "any", false, false, false, 87)) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 87)));
        // line 88
        echo "
            <p class=\"product-detail-price";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 89) > 0)) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 90)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
            </p>

            ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 93) > 0)) {
            // line 94
            echo "                ";
            $this->displayBlock('page_product_detail_was_price', $context, $blocks);
            // line 108
            echo "            ";
        }
        // line 109
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_page_product_detail_was_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_was_price_badge', $context, $blocks);
        // line 99
        echo "
                    ";
        // line 100
        $this->displayBlock('page_product_detail_was_price_wrapper', $context, $blocks);
        // line 107
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_page_product_detail_was_price_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        // line 97
        echo "                        <span class=\"list-price-badge\">&#37;</span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_page_product_detail_was_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        // line 101
        echo "                        <span class=\"product-detail-list-price-wrapper\">
                            <span class=\"list-price-price\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 102)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</span>

                            <span class=\"list-price-percentage\">";
        // line 104
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 104)]));
        echo "</span>
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_page_product_detail_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        // line 113
        echo "                <div class=\"product-detail-price-unit\">
                    ";
        // line 114
        $this->displayBlock('page_product_detail_price_unit_label', $context, $blocks);
        // line 119
        echo "
                    ";
        // line 120
        $this->displayBlock('page_product_detail_price_unit_content', $context, $blocks);
        // line 125
        echo "
                    ";
        // line 126
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 126))) {
            // line 127
            echo "                        ";
            $this->displayBlock('page_product_detail_price_unit_reference_content', $context, $blocks);
            // line 137
            echo "                    ";
        }
        // line 138
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_page_product_detail_price_unit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        // line 115
        echo "                        <span class=\"price-unit-label\">
                            ";
        // line 116
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceUnitName"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_page_product_detail_price_unit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        // line 121
        echo "                        <span class=\"price-unit-content\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 122), "purchaseUnit", [], "any", false, false, false, 122), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 122), "unit", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_page_product_detail_price_unit_reference_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        // line 128
        echo "
                        ";
        // line 130
        echo "                        ";
        $this->displayBlock('page_product_detail_price_unit_refrence_content', $context, $blocks);
        // line 135
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_page_product_detail_price_unit_refrence_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_refrence_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_refrence_content"));

        // line 131
        echo "                            <span class=\"price-unit-reference-content\">
                                (";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "price", [], "any", false, false, false, 132)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "referenceUnit", [], "any", false, false, false, 132), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 132), "unitName", [], "any", false, false, false, 132), "html", null, true);
        echo ")
                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  775 => 132,  772 => 131,  762 => 130,  751 => 135,  748 => 130,  745 => 128,  735 => 127,  720 => 122,  717 => 121,  707 => 120,  694 => 116,  691 => 115,  681 => 114,  670 => 138,  667 => 137,  664 => 127,  662 => 126,  659 => 125,  657 => 120,  654 => 119,  652 => 114,  649 => 113,  639 => 112,  626 => 104,  620 => 102,  617 => 101,  607 => 100,  596 => 97,  586 => 96,  576 => 107,  574 => 100,  571 => 99,  569 => 96,  566 => 95,  556 => 94,  546 => 109,  543 => 108,  540 => 94,  538 => 93,  531 => 90,  525 => 89,  522 => 88,  519 => 87,  509 => 86,  499 => 65,  488 => 62,  485 => 61,  482 => 60,  472 => 59,  458 => 55,  455 => 54,  445 => 53,  434 => 50,  429 => 48,  424 => 47,  418 => 44,  413 => 43,  411 => 42,  405 => 39,  401 => 38,  398 => 37,  388 => 36,  377 => 66,  375 => 59,  372 => 58,  370 => 53,  367 => 52,  365 => 36,  359 => 32,  349 => 31,  339 => 69,  325 => 68,  322 => 31,  304 => 30,  294 => 29,  283 => 70,  281 => 29,  278 => 28,  268 => 27,  257 => 22,  251 => 19,  248 => 18,  246 => 17,  241 => 15,  235 => 12,  231 => 10,  221 => 9,  210 => 24,  208 => 9,  205 => 8,  195 => 7,  184 => 72,  182 => 27,  179 => 26,  177 => 7,  174 => 6,  164 => 5,  153 => 74,  151 => 5,  148 => 4,  138 => 3,  127 => 141,  124 => 140,  121 => 112,  119 => 111,  116 => 110,  114 => 86,  109 => 84,  105 => 82,  102 => 81,  99 => 80,  97 => 79,  94 => 78,  91 => 77,  88 => 76,  85 => 3,  82 => 2,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_price_inner %}
    {% if page.product.calculatedPrices|length > 1 %}
        {% block page_product_detail_price_block %}
            <div class=\"product-block-prices\">
                {% block page_product_detail_price_block_table %}
                    <table class=\"table table-sm table-bordered product-block-prices-table\">
                        {% block page_product_detail_price_block_table_head %}
                            <thead class=\"product-block-prices-head\">
                                {% block page_product_detail_price_block_table_head_inner %}
                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnQuantity\"|trans|sw_sanitize }}
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnPrice\"|trans|sw_sanitize }}
                                        </th>
                                        {% if page.product.calculatedPrice.referencePrice %}
                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                {{ \"detail.dataColumnReferencePrice\"|trans|sw_sanitize }}
                                            </th>
                                        {% endif %}
                                    </tr>
                                {% endblock %}
                            </thead>
                        {% endblock %}

                        {% block page_product_detail_price_block_table_body %}
                            <tbody class=\"product-block-prices-body\">
                                {% block page_product_detail_price_block_table_body_inner %}
                                    {% for price in page.product.calculatedPrices %}
                                        {% block page_product_detail_price_block_table_body_row %}
                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                {% block page_product_detail_price_block_table_body_cell_quantity %}
                                                    <th scope=\"row\" class=\"product-block-prices-cell\">
                                                        <meta itemprop=\"priceCurrency\" content=\"{{ page.header.activeCurrency.id }}\" />
                                                        <meta itemprop=\"price\" content=\"{{ price.unitPrice }}\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        {% if loop.last %}
                                                            {{ \"detail.priceDataInfoFrom\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>

                                                        {% else %}
                                                            {{ \"detail.priceDataInfoUntil\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>
                                                        {% endif %}
                                                    </th>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_price %}
                                                    <td class=\"product-block-prices-cell\">
                                                        {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                                                    </td>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_reference_price %}
                                                    {% if price.referencePrice is not null %}
                                                        <td class=\"product-block-prices-cell\">
                                                            {{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }}
                                                        </td>
                                                    {% endif %}
                                                {% endblock %}
                                            </tr>
                                        {% endblock %}
                                    {% endfor %}
                                {% endblock %}
                            </tbody>
                        {% endblock %}
                    </table>
                {% endblock %}
            </div>
        {% endblock %}
    {% else %}
        {% set price = page.product.calculatedPrice %}

        {% if page.product.calculatedPrices|length == 1 %}
            {% set price = page.product.calculatedPrices.first %}
        {% endif %}

        <meta itemprop=\"price\"
              content=\"{{ price.unitPrice }}\">

        {% block page_product_detail_price_content %}
            {% set listPrice = page.product.priceRange ? null : price.listPrice %}

            <p class=\"product-detail-price{% if listPrice.percentage > 0 %} with-list-price{% endif %}\">
                {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
            </p>

            {% if listPrice.percentage > 0 %}
                {% block page_product_detail_was_price %}

                    {% block page_product_detail_was_price_badge %}
                        <span class=\"list-price-badge\">&#37;</span>
                    {% endblock %}

                    {% block page_product_detail_was_price_wrapper %}
                        <span class=\"product-detail-list-price-wrapper\">
                            <span class=\"list-price-price\">{{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span>

                            <span class=\"list-price-percentage\">{{ \"detail.listPricePercentage\"|trans({'%price%': listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endblock %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% if page.product.purchaseUnit %}
            {% block page_product_detail_price_unit %}
                <div class=\"product-detail-price-unit\">
                    {% block page_product_detail_price_unit_label %}
                        <span class=\"price-unit-label\">
                            {{ \"detail.priceUnitName\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_price_unit_content %}
                        <span class=\"price-unit-content\">
                            {{ page.product.purchaseUnit }} {{ page.product.unit.name }}
                        </span>
                    {% endblock %}

                    {% if price.referencePrice is not null %}
                        {% block page_product_detail_price_unit_reference_content %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_product_detail_price_unit_refrence_content %}
                            <span class=\"price-unit-reference-content\">
                                ({{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }})
                            </span>
                        {% endblock %}

                        {% endblock %}
                    {% endif %}
                </div>
            {% endblock %}
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-price.html.twig");
    }
}
