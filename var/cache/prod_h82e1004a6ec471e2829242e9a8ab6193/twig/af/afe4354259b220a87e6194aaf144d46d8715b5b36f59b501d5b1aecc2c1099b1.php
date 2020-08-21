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

/* @Storefront/storefront/component/account/login.html.twig */
class __TwigTemplate_a859d0ba5ec8a5d81b1eeecc0ae868581a2ac0cbf90b7d41643ee46685f47c64 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_login' => [$this, 'block_component_account_login'],
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form' => [$this, 'block_component_account_login_form'],
            'component_account_login_form_csrf' => [$this, 'block_component_account_login_form_csrf'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_error' => [$this, 'block_component_account_login_form_error'],
            'component_account_login_form_fields' => [$this, 'block_component_account_login_form_fields'],
            'component_account_login_form_mail' => [$this, 'block_component_account_login_form_mail'],
            'component_account_login_form_mail_label' => [$this, 'block_component_account_login_form_mail_label'],
            'component_account_login_form_mail_input' => [$this, 'block_component_account_login_form_mail_input'],
            'component_account_login_form_password' => [$this, 'block_component_account_login_form_password'],
            'component_account_login_form_password_label' => [$this, 'block_component_account_login_form_password_label'],
            'component_account_login_form_password_input' => [$this, 'block_component_account_login_form_password_input'],
            'component_account_login_password_recover' => [$this, 'block_component_account_login_password_recover'],
            'component_account_login_password_recover_link' => [$this, 'block_component_account_login_password_recover_link'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_account_login', $context, $blocks);
    }

    public function block_component_account_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card login-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_login_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_login_form', $context, $blocks);
        // line 118
        echo "        </div>
    </div>
";
    }

    // line 4
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
    }

    // line 12
    public function block_component_account_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <form class=\"login-form\"
                      action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login");
        echo "\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_login_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_login_form_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_login_form_description', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('component_account_login_form_error', $context, $blocks);
        // line 54
        echo "
                    ";
        // line 55
        $this->displayBlock('component_account_login_form_fields', $context, $blocks);
        // line 97
        echo "
                    ";
        // line 98
        $this->displayBlock('component_account_login_password_recover', $context, $blocks);
        // line 107
        echo "
                    ";
        // line 108
        $this->displayBlock('component_account_login_submit', $context, $blocks);
        // line 116
        echo "                </form>
            ";
    }

    // line 19
    public function block_component_account_login_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.login");
        echo "
                    ";
    }

    // line 23
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
    }

    // line 33
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        <p class=\"login-form-description\">
                            ";
        // line 35
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginFormDescription"));
        echo "
                        </p>
                    ";
    }

    // line 39
    public function block_component_account_login_form_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                        ";
        if (($context["loginError"] ?? null)) {
            // line 41
            echo "                            ";
            if ((($context["errorSnippet"] ?? null) != null)) {
                // line 42
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 42)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 44
($context["errorSnippet"] ?? null)))]));
                // line 46
                echo "                            ";
            } else {
                // line 47
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 47)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginBadCredentials"))]));
                // line 51
                echo "                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "                    ";
    }

    // line 55
    public function block_component_account_login_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                        <div class=\"form-row\">
                            ";
        // line 57
        $this->displayBlock('component_account_login_form_mail', $context, $blocks);
        // line 76
        echo "
                            ";
        // line 77
        $this->displayBlock('component_account_login_form_password', $context, $blocks);
        // line 95
        echo "                        </div>
                    ";
    }

    // line 57
    public function block_component_account_login_form_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 59
        $this->displayBlock('component_account_login_form_mail_label', $context, $blocks);
        // line 65
        echo "
                                    ";
        // line 66
        $this->displayBlock('component_account_login_form_mail_input', $context, $blocks);
        // line 74
        echo "                                </div>
                            ";
    }

    // line 59
    public function block_component_account_login_form_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            ";
        // line 62
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 66
    public function block_component_account_login_form_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                        <input type=\"email\"
                                               class=\"form-control";
        // line 68
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginMail\"
                                               placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"username\"
                                               required=\"required\">
                                    ";
    }

    // line 77
    public function block_component_account_login_form_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 79
        $this->displayBlock('component_account_login_form_password_label', $context, $blocks);
        // line 85
        echo "                                    ";
        $this->displayBlock('component_account_login_form_password_input', $context, $blocks);
        // line 93
        echo "                                </div>
                            ";
    }

    // line 79
    public function block_component_account_login_form_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            ";
        // line 82
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 85
    public function block_component_account_login_form_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                                        <input type=\"password\"
                                               class=\"form-control";
        // line 87
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginPassword\"
                                               placeholder=\"";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"password\"
                                               required=\"required\">
                                    ";
    }

    // line 98
    public function block_component_account_login_password_recover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                        <div class=\"login-password-recover\">
                            ";
        // line 100
        $this->displayBlock('component_account_login_password_recover_link', $context, $blocks);
        // line 105
        echo "                        </div>
                    ";
    }

    // line 100
    public function block_component_account_login_password_recover_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                <a href=\"";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.account.recover.page");
        echo "\">
                                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordRecover"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 108
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                ";
        // line 112
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                            </button>
                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 112,  389 => 109,  385 => 108,  378 => 102,  373 => 101,  369 => 100,  364 => 105,  362 => 100,  359 => 99,  355 => 98,  347 => 89,  340 => 87,  337 => 86,  333 => 85,  326 => 82,  322 => 80,  318 => 79,  313 => 93,  310 => 85,  308 => 79,  305 => 78,  301 => 77,  293 => 70,  286 => 68,  283 => 67,  279 => 66,  272 => 62,  268 => 60,  264 => 59,  259 => 74,  257 => 66,  254 => 65,  252 => 59,  249 => 58,  245 => 57,  240 => 95,  238 => 77,  235 => 76,  233 => 57,  230 => 56,  226 => 55,  222 => 53,  219 => 52,  216 => 51,  213 => 47,  210 => 46,  208 => 44,  206 => 42,  203 => 41,  200 => 40,  196 => 39,  189 => 35,  186 => 34,  182 => 33,  176 => 30,  169 => 26,  165 => 24,  161 => 23,  154 => 20,  150 => 19,  145 => 116,  143 => 108,  140 => 107,  138 => 98,  135 => 97,  133 => 55,  130 => 54,  128 => 39,  125 => 38,  123 => 33,  120 => 32,  118 => 23,  115 => 22,  113 => 19,  105 => 14,  102 => 13,  98 => 12,  94 => 10,  88 => 7,  85 => 6,  82 => 5,  78 => 4,  72 => 118,  70 => 12,  67 => 11,  65 => 4,  61 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/account/login.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/component/account/login.html.twig");
    }
}
