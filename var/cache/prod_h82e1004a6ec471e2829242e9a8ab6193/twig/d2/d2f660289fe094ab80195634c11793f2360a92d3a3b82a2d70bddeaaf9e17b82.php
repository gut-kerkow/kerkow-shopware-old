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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_df43ee235237af2398191b59a8b8680c873946f3359190079b06370d4c40cabd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["metaInformation"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 3), "core", [], "any", false, false, false, 3), "basicInformation", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["metaDescription"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 4)))), "truncate", [0 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", false, false, false, 4)) : (160)), 1 => "…"], "method", false, false, false, 4);
        // line 5
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 5)));
        // line 6
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 6)));
        // line 7
        echo "
    <head>
        ";
        // line 9
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 78
        echo "
        ";
        // line 79
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 102
        echo "
        ";
        // line 103
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 113
        echo "
        ";
        // line 115
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 118
        echo "    </head>
";
    }

    // line 9
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 18
        echo "
            ";
        // line 19
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 72
        echo "        ";
    }

    // line 10
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                <meta charset=\"utf-8\">
            ";
    }

    // line 14
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
    }

    // line 19
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <meta name=\"author\"
                      content=\"";
        // line 21
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 21)), "html", null, true);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 23
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 25
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 25)), "html", null, true);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 27
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 29
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 23
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 23), "html", null, true);
    }

    // line 27
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
    }

    // line 29
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 32
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                <meta property=\"og:type\"
                      content=\"website\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 40
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 42)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"website\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 47), "html", null, true);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 51
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 53
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 53)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>
            ";
    }

    // line 40
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 51
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 56
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 58), "html", null, true);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 60
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 60)), "html", null, true);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 62)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 64
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 64)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>
            ";
    }

    // line 67
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 69
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 69), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 69), "html", null, true);
            echo "\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            ";
    }

    // line 74
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 76
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 76)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["sw-logo-favicon"] ?? null) : null), "html", null, true);
        echo "\">
        ";
    }

    // line 79
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
        // line 82
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 82)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["sw-logo-share"] ?? null) : null), "html", null, true);
        echo "\">
        ";
    }

    // line 85
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"";
        // line 88
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 88)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["sw-logo-share"] ?? null) : null), "html", null, true);
        echo "\">
            <meta name=\"theme-color\"
                  content=\"";
        // line 90
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 90)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["sw-color-brand-primary"] ?? null) : null), "html", null, true);
        echo "\"/>
        ";
    }

    // line 93
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 95
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "            <title itemprop=\"name\">
                ";
        // line 97
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 100
        echo "            </title>
        ";
    }

    // line 97
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        ob_start(function () { return ''; });
        // line 98
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
        $___internal_7ba38f48bfd0b9277d1850fc1c4a765ef40274804dfb9b2a54dfa1024098d1c4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo twig_spaceless($___internal_7ba38f48bfd0b9277d1850fc1c4a765ef40274804dfb9b2a54dfa1024098d1c4_);
    }

    // line 103
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 105
            echo "                ";
            // line 106
            echo "            ";
        } else {
            // line 107
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 107), "assets", [], "any", false, false, false, 107), "css", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 108
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            ";
        }
        // line 112
        echo "        ";
    }

    // line 115
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 116)->display($context);
        // line 117
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  482 => 117,  479 => 116,  475 => 115,  471 => 112,  468 => 111,  460 => 109,  457 => 108,  452 => 107,  449 => 106,  447 => 105,  444 => 104,  440 => 103,  436 => 97,  430 => 98,  425 => 97,  420 => 100,  418 => 97,  415 => 96,  411 => 95,  405 => 93,  399 => 90,  394 => 88,  390 => 86,  386 => 85,  380 => 82,  376 => 80,  372 => 79,  366 => 76,  363 => 75,  359 => 74,  355 => 71,  344 => 69,  339 => 68,  335 => 67,  329 => 64,  320 => 62,  315 => 60,  310 => 58,  307 => 57,  303 => 56,  296 => 51,  289 => 40,  283 => 53,  278 => 51,  273 => 49,  268 => 47,  260 => 42,  255 => 40,  250 => 38,  245 => 36,  240 => 33,  236 => 32,  229 => 29,  222 => 27,  215 => 23,  209 => 29,  204 => 27,  199 => 25,  194 => 23,  189 => 21,  186 => 20,  182 => 19,  176 => 15,  172 => 14,  167 => 11,  163 => 10,  159 => 72,  157 => 67,  154 => 66,  152 => 56,  149 => 55,  147 => 32,  144 => 31,  142 => 19,  139 => 18,  137 => 14,  134 => 13,  131 => 10,  127 => 9,  122 => 118,  119 => 115,  116 => 113,  114 => 103,  111 => 102,  109 => 95,  106 => 94,  104 => 93,  101 => 92,  99 => 85,  96 => 84,  94 => 79,  91 => 78,  89 => 74,  86 => 73,  84 => 9,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  65 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/meta.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
