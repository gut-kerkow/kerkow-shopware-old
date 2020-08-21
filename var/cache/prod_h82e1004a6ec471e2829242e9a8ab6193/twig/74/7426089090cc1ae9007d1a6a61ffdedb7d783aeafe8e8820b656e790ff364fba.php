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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_52afe3b4321a5a3370563953574e16bf021bf49089053964974e01be331d535b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'base_script_token' => [$this, 'block_base_script_token'],
            'base_script_router' => [$this, 'block_base_script_router'],
            'base_script_breakpoints' => [$this, 'block_base_script_breakpoints'],
            'base_script_csrf' => [$this, 'block_base_script_csrf'],
            'base_script_hmr_mode' => [$this, 'block_base_script_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isHMRMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", [0 => "hot-reload-mode"], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 171
        echo "</html>
";
    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
";
    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">

    ";
        // line 21
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 109
        echo "
    ";
        // line 110
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 169
        echo "    </body>
";
    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "is-ctl-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo " is-act-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
    }

    // line 21
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('base_header', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('base_main', $context, $blocks);
        // line 86
        echo "
        ";
        // line 87
        $this->displayBlock('base_footer', $context, $blocks);
        // line 96
        echo "    ";
    }

    // line 22
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 24)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice"))]));
        // line 28
        echo "            </noscript>
        ";
    }

    // line 31
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <header class=\"header-main\">
                ";
        // line 33
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 38
        echo "            </header>
        ";
    }

    // line 33
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <div class=\"container\">
                        ";
        // line 35
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 35)->display($context);
        // line 36
        echo "                    </div>
                ";
    }

    // line 41
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            <div class=\"nav-main\">
                ";
        // line 43
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 46
        echo "            </div>
        ";
    }

    // line 43
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 44)->display($context);
        // line 45
        echo "                ";
    }

    // line 49
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "navigation", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content\">
                    ";
            // line 52
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 55
            echo "                </div>
            ";
        }
        // line 57
        echo "        ";
    }

    // line 52
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 53)->display(twig_array_merge($context, ["navigation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "navigation", [], "any", false, false, false, 53)]));
        // line 54
        echo "                    ";
    }

    // line 59
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <main class=\"content-main\">
                ";
        // line 61
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 84
        echo "            </main>
        ";
    }

    // line 61
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 63));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 64
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 64)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 65
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                ";
    }

    // line 69
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <div class=\"container\">
                        ";
        // line 71
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 82
        echo "                    </div>
                ";
    }

    // line 71
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                            <div class=\"container-main\">
                                ";
        // line 73
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 78
        echo "
                                ";
        // line 79
        $this->displayBlock('base_content', $context, $blocks);
        // line 80
        echo "                            </div>
                        ";
    }

    // line 73
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                    ";
        if (($context["breadcrumbList"] ?? null)) {
            // line 75
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 75)->display($context);
            // line 76
            echo "                                    ";
        }
        // line 77
        echo "                                ";
    }

    // line 79
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 87
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "            <footer class=\"footer-main\">
                ";
        // line 89
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 94
        echo "            </footer>
        ";
    }

    // line 89
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                    <div class=\"container\">
                        ";
        // line 91
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 91)->display($context);
        // line 92
        echo "                    </div>
                ";
    }

    // line 98
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 99)->display($context);
        // line 100
        echo "    ";
    }

    // line 102
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 103)->display($context);
        // line 104
        echo "    ";
    }

    // line 106
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 107)->display($context);
        // line 108
        echo "    ";
    }

    // line 110
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "        ";
        $this->displayBlock('base_script_token', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        $this->displayBlock('base_script_router', $context, $blocks);
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('base_script_breakpoints', $context, $blocks);
        // line 143
        echo "
        ";
        // line 144
        $this->displayBlock('base_script_csrf', $context, $blocks);
        // line 152
        echo "
        ";
        // line 153
        $this->displayBlock('base_script_hmr_mode', $context, $blocks);
        // line 168
        echo "    ";
    }

    // line 111
    public function block_base_script_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            <script>
                ";
        // line 114
        echo "                window.apiAccessUrl = \"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.api-access");
        echo "\";
            </script>
        ";
    }

    // line 118
    public function block_base_script_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "            ";
        // line 120
        echo "            <script>
                window.activeNavigationId = '";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 121), "navigation", [], "any", false, false, false, 121), "active", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                    'frontend.cookie.offcanvas': '";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                    'frontend.checkout.finish.page': '";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                    'frontend.checkout.info': '";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                    'frontend.menu.offcanvas': '";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                    'frontend.cms.page': '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                    'frontend.cms.navigation.page': '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                    'frontend.account.addressbook': '";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                    'frontend.csrf.generateToken': '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                    'frontend.country.country-data': '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                };
            </script>
        ";
    }

    // line 137
    public function block_base_script_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "            ";
        // line 139
        echo "            <script>
                window.breakpoints = ";
        // line 140
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 140), "breakpoint", [], "any", false, false, false, 140));
        echo ";
            </script>
        ";
    }

    // line 144
    public function block_base_script_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "            <script>
                window.csrf = {
                    'enabled': '";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 147), "html", null, true);
        echo "',
                    'mode': '";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 148), "html", null, true);
        echo "'
                }
            </script>
        ";
    }

    // line 153
    public function block_base_script_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 155
            echo "                ";
            $context["baseUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 155), "getScheme", [], "method", false, false, false, 155) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 155), "getHost", [], "method", false, false, false, 155));
            // line 156
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/vendor-node.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 157
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/vendor-shared.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 158
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/runtime.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 159
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/app.js\"></script>
                ";
            // line 161
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/storefront.js\"></script>
            ";
        } else {
            // line 163
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 163), "assets", [], "any", false, false, false, 163), "js", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 164
                echo "                    <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" async></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            ";
        }
        // line 167
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 167,  675 => 166,  666 => 164,  661 => 163,  655 => 161,  651 => 159,  647 => 158,  643 => 157,  638 => 156,  635 => 155,  632 => 154,  628 => 153,  620 => 148,  616 => 147,  612 => 145,  608 => 144,  601 => 140,  598 => 139,  596 => 138,  592 => 137,  584 => 132,  580 => 131,  576 => 130,  572 => 129,  568 => 128,  564 => 127,  560 => 126,  556 => 125,  552 => 124,  548 => 123,  543 => 121,  540 => 120,  538 => 119,  534 => 118,  526 => 114,  523 => 112,  519 => 111,  515 => 168,  513 => 153,  510 => 152,  508 => 144,  505 => 143,  503 => 137,  500 => 136,  498 => 118,  495 => 117,  492 => 111,  488 => 110,  484 => 108,  481 => 107,  477 => 106,  473 => 104,  470 => 103,  466 => 102,  462 => 100,  459 => 99,  455 => 98,  450 => 92,  448 => 91,  445 => 90,  441 => 89,  436 => 94,  434 => 89,  431 => 88,  427 => 87,  421 => 79,  417 => 77,  414 => 76,  411 => 75,  408 => 74,  404 => 73,  399 => 80,  397 => 79,  394 => 78,  392 => 73,  389 => 72,  385 => 71,  380 => 82,  378 => 71,  375 => 70,  371 => 69,  366 => 66,  352 => 65,  349 => 64,  332 => 63,  329 => 62,  325 => 61,  320 => 84,  318 => 69,  315 => 68,  313 => 61,  310 => 60,  306 => 59,  302 => 54,  299 => 53,  295 => 52,  291 => 57,  287 => 55,  285 => 52,  282 => 51,  279 => 50,  275 => 49,  271 => 45,  268 => 44,  264 => 43,  259 => 46,  257 => 43,  254 => 42,  250 => 41,  245 => 36,  243 => 35,  240 => 34,  236 => 33,  231 => 38,  229 => 33,  226 => 32,  222 => 31,  217 => 28,  215 => 24,  212 => 23,  208 => 22,  204 => 96,  202 => 87,  199 => 86,  197 => 59,  194 => 58,  192 => 49,  189 => 48,  187 => 41,  184 => 40,  182 => 31,  179 => 30,  176 => 22,  172 => 21,  162 => 19,  157 => 169,  155 => 110,  152 => 109,  150 => 106,  147 => 105,  145 => 102,  142 => 101,  140 => 98,  137 => 97,  135 => 21,  129 => 19,  125 => 18,  120 => 15,  116 => 14,  107 => 9,  103 => 8,  98 => 5,  94 => 4,  89 => 171,  87 => 18,  84 => 17,  82 => 14,  79 => 13,  77 => 8,  74 => 7,  72 => 4,  69 => 3,  67 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/base.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
