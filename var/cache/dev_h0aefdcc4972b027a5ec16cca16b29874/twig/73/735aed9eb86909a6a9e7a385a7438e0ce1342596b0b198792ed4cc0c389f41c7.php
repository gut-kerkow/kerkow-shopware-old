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

/* @Storefront/storefront/element/cms-element-image-gallery.html.twig */
class __TwigTemplate_1225a6db35770347de4776595a46ce3d0437b7bc5e86e8aa84248f77e77c1351 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image_gallery' => [$this, 'block_element_image_gallery'],
            'element_image_gallery_alignment' => [$this, 'block_element_image_gallery_alignment'],
            'element_image_gallery_inner' => [$this, 'block_element_image_gallery_inner'],
            'element_image_gallery_inner_col' => [$this, 'block_element_image_gallery_inner_col'],
            'element_image_gallery_inner_wrapper' => [$this, 'block_element_image_gallery_inner_wrapper'],
            'element_image_gallery_inner_multiple_slides' => [$this, 'block_element_image_gallery_inner_multiple_slides'],
            'element_image_gallery_inner_container' => [$this, 'block_element_image_gallery_inner_container'],
            'element_image_gallery_inner_items' => [$this, 'block_element_image_gallery_inner_items'],
            'element_image_gallery_inner_item' => [$this, 'block_element_image_gallery_inner_item'],
            'element_image_gallery_inner_controls' => [$this, 'block_element_image_gallery_inner_controls'],
            'element_image_gallery_inner_control_items' => [$this, 'block_element_image_gallery_inner_control_items'],
            'element_image_gallery_inner_control_prev' => [$this, 'block_element_image_gallery_inner_control_prev'],
            'element_image_gallery_inner_control_prev_icon' => [$this, 'block_element_image_gallery_inner_control_prev_icon'],
            'element_image_gallery_inner_control_next' => [$this, 'block_element_image_gallery_inner_control_next'],
            'element_image_gallery_inner_control_next_icon' => [$this, 'block_element_image_gallery_inner_control_next_icon'],
            'element_image_gallery_inner_single' => [$this, 'block_element_image_gallery_inner_single'],
            'element_image_gallery_slider_dots' => [$this, 'block_element_image_gallery_slider_dots'],
            'element_image_gallery_slider_dots_buttons' => [$this, 'block_element_image_gallery_slider_dots_buttons'],
            'element_image_gallery_slider_dots_button' => [$this, 'block_element_image_gallery_slider_dots_button'],
            'element_image_gallery_inner_thumbnails_col' => [$this, 'block_element_image_gallery_inner_thumbnails_col'],
            'element_image_gallery_inner_thumbnails' => [$this, 'block_element_image_gallery_inner_thumbnails'],
            'element_image_gallery_inner_thumbnails_items' => [$this, 'block_element_image_gallery_inner_thumbnails_items'],
            'element_image_gallery_inner_thumbnails_item' => [$this, 'block_element_image_gallery_inner_thumbnails_item'],
            'element_image_gallery_inner_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_thumbnails_item_inner'],
            'element_image_gallery_inner_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_wrapper' => [$this, 'block_element_image_gallery_inner_zoom_modal_wrapper'],
            'element_image_gallery_inner_zoom_modal' => [$this, 'block_element_image_gallery_inner_zoom_modal'],
            'element_image_gallery_inner_zoom_modal_dialog' => [$this, 'block_element_image_gallery_inner_zoom_modal_dialog'],
            'element_image_gallery_inner_zoom_modal_content' => [$this, 'block_element_image_gallery_inner_zoom_modal_content'],
            'element_image_gallery_inner_zoom_modal_close_button' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_button'],
            'element_image_gallery_inner_zoom_modal_close_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_icon'],
            'element_image_gallery_inner_zoom_modal_body' => [$this, 'block_element_image_gallery_inner_zoom_modal_body'],
            'element_image_gallery_inner_zoom_modal_action_buttons' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_buttons'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon'],
            'element_image_gallery_inner_zoom_modal_slider' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider'],
            'element_image_gallery_inner_zoom_modal_slider_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_items'],
            'element_image_gallery_inner_zoom_modal_slider_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item'],
            'element_image_gallery_inner_zoom_modal_slider_item_zoom_container' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container'],
            'element_image_gallery_inner_zoom_modal_slider_item_image' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_image'],
            'element_image_gallery_inner_zoom_modal_slider_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_controls'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon'],
            'element_image_gallery_inner_zoom_modal_slider_control_next' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next'],
            'element_image_gallery_inner_zoom_modal_slider_control_next_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next_icon'],
            'element_image_gallery_inner_zoom_modal_footer' => [$this, 'block_element_image_gallery_inner_zoom_modal_footer'],
            'element_image_gallery_inner_zoom_modal_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_thumbnails' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails'],
            'element_image_gallery_inner_zoom_modal_thumbnails_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_items'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image-gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image-gallery.html.twig"));

        // line 1
        $this->displayBlock('element_image_gallery', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_image_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", true, true, false, 3) && twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["sliderConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            $context["mediaItems"] = [];
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 7), "sliderItems", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            ";
                $context["mediaItems"] = twig_array_merge(($context["mediaItems"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["item"], "media", [], "any", false, false, false, 8)]);
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
        ";
            // line 11
            $context["zoom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoom", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $context["gutter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "gutter", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $context["magnifierOverGallery"] = true;
            // line 14
            echo "        ";
            $context["zoomModal"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "fullScreen", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14);
            // line 15
            echo "        ";
            $context["minHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
            $context["displayMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
            // line 17
            echo "        ";
            $context["navigationArrows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17);
            // line 18
            echo "        ";
            $context["navigationDots"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18);
            // line 19
            echo "        ";
            $context["galleryPosition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "galleryPosition", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
            // line 20
            echo "        ";
            $context["verticalAlign"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20);
            // line 21
            echo "        ";
            $context["zoomImageContainerSelector"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoomImageContainerSelector", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21);
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ( !(isset($context["fallbackImageTitle"]) || array_key_exists("fallbackImageTitle", $context))) {
            // line 25
            echo "        ";
            $context["fallbackImageTitle"] = "";
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $context["imageCount"] = twig_length_filter($this->env, ($context["mediaItems"] ?? null));
        // line 30
        echo "
    ";
        // line 31
        $context["magnifierOptions"] = [];
        // line 32
        echo "
    ";
        // line 33
        if (($context["magnifierOverGallery"] ?? null)) {
            // line 34
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["magnifierOverGallery" => true, "cursorType" => "crosshair"]);
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (($context["zoomImageContainerSelector"] ?? null)) {
            // line 41
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["zoomImageContainerSelector" =>             // line 42
($context["zoomImageContainerSelector"] ?? null)]);
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    <div class=\"cms-element-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 46), "html", null, true);
        if (((($context["displayMode"] ?? null) == "standard") && ($context["verticalAlign"] ?? null))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 47
        $this->displayBlock('element_image_gallery_alignment', $context, $blocks);
        // line 469
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_element_image_gallery_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_alignment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_alignment"));

        // line 48
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)) {
            // line 49
            echo "                <div class=\"cms-element-alignment";
            if ((($context["verticalAlign"] ?? null) == "center")) {
                echo " align-self-center";
            } elseif ((($context["verticalAlign"] ?? null) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 51
        echo "

                ";
        // line 53
        $context["gallerySliderOptions"] = ["slider" => ["navPosition" => "bottom", "speed" => 500, "gutter" => ((        // line 57
($context["gutter"] ?? null)) ? (($context["gutter"] ?? null)) : (0)), "controls" => ((        // line 58
($context["navigationArrows"] ?? null)) ? (true) : (false)), "autoHeight" => false, "startIndex" => ((        // line 60
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null))], "thumbnailSlider" => ["autoWidth" => (((        // line 63
($context["galleryPosition"] ?? null) == "underneath")) ? (true) : (false)), "controls" => (((        // line 64
($context["galleryPosition"] ?? null) == "underneath")) ? (false) : (true)), "startIndex" => ((        // line 65
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null)), "responsive" => ["xs" => ["enabled" => false, "controls" => false], "sm" => ["enabled" => false, "controls" => false]]]];
        // line 78
        echo "
                ";
        // line 79
        if ((($context["galleryPosition"] ?? null) == "left")) {
            // line 80
            echo "                    ";
            $context["gallerySliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["gallerySliderOptions"] ?? null), ["thumbnailSlider" => ["responsive" => ["md" => ["axis" => "vertical"], "lg" => ["axis" => "vertical"], "xl" => ["axis" => "vertical"]]]]);
            // line 95
            echo "                ";
        }
        // line 96
        echo "
                ";
        // line 97
        $this->displayBlock('element_image_gallery_inner', $context, $blocks);
        // line 464
        echo "
            ";
        // line 465
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 465), "value", [], "any", false, false, false, 465)) {
            // line 466
            echo "                </div>
            ";
        }
        // line 468
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_element_image_gallery_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner"));

        // line 98
        echo "                    <div class=\"row gallery-slider-row";
        if ((($context["imageCount"] ?? null) == 1)) {
            echo " is-single-image";
        }
        echo " js-gallery-zoom-modal-container\"
                            ";
        // line 99
        if (($context["zoom"] ?? null)) {
            // line 100
            echo "                                data-magnifier=\"true\"
                            ";
        }
        // line 102
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["magnifierOptions"] ?? null)) > 0)) {
            // line 103
            echo "                                data-magnifier-options='";
            echo json_encode(($context["magnifierOptions"] ?? null));
            echo "'
                            ";
        }
        // line 105
        echo "                            ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 106
            echo "                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='";
            // line 107
            echo twig_escape_filter($this->env, json_encode(($context["gallerySliderOptions"] ?? null)), "html", null, true);
            echo "'
                            ";
        }
        // line 108
        echo ">

                        ";
        // line 110
        $this->displayBlock('element_image_gallery_inner_col', $context, $blocks);
        // line 230
        echo "
                        ";
        // line 231
        $this->displayBlock('element_image_gallery_inner_thumbnails_col', $context, $blocks);
        // line 285
        echo "
                        ";
        // line 286
        $this->displayBlock('element_image_gallery_inner_zoom_modal_wrapper', $context, $blocks);
        // line 462
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_element_image_gallery_inner_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_col"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_col"));

        // line 111
        echo "                            <div class=\"gallery-slider-col";
        if ((($context["galleryPosition"] ?? null) == "left")) {
            echo " col order-1 order-md-2";
        } elseif ((($context["galleryPosition"] ?? null) == "underneath")) {
            echo " col-12 order-1";
        }
        echo "\"
                                 ";
        // line 112
        if (($context["zoomModal"] ?? null)) {
            echo "data-zoom-modal=\"true\"";
        }
        echo ">
                                ";
        // line 114
        echo "                                <div class=\"base-slider gallery-slider";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " has-nav-outside";
        }
        if ((($context["navigationDots"] ?? null) == "outside")) {
            echo " has-dots-outside";
        }
        if (($context["magnifierOverGallery"] ?? null)) {
            echo " js-magnifier-zoom-image-container";
        }
        echo "\">
                                    ";
        // line 115
        $this->displayBlock('element_image_gallery_inner_wrapper', $context, $blocks);
        // line 211
        echo "
                                    ";
        // line 212
        $this->displayBlock('element_image_gallery_slider_dots', $context, $blocks);
        // line 227
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_element_image_gallery_inner_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_wrapper"));

        // line 116
        echo "                                        ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 117
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_multiple_slides', $context, $blocks);
            // line 179
            echo "                                        ";
        } else {
            // line 180
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_single', $context, $blocks);
            // line 209
            echo "                                        ";
        }
        // line 210
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_element_image_gallery_inner_multiple_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_multiple_slides"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_multiple_slides"));

        // line 118
        echo "                                                ";
        $this->displayBlock('element_image_gallery_inner_container', $context, $blocks);
        // line 151
        echo "
                                                ";
        // line 152
        $this->displayBlock('element_image_gallery_inner_controls', $context, $blocks);
        // line 178
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_element_image_gallery_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_container"));

        // line 119
        echo "                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        ";
        // line 121
        $this->displayBlock('element_image_gallery_inner_items', $context, $blocks);
        // line 149
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_element_image_gallery_inner_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_items"));

        // line 122
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 123
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_item', $context, $blocks);
            // line 147
            echo "                                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_element_image_gallery_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_item"));

        // line 124
        echo "                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-";
        // line 125
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if ((($context["minHeight"] ?? null) && ((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain")))) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                                            ";
        // line 126
        $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 128
($context["image"] ?? null), "translated", [], "any", false, false, false, 128), "alt", [], "any", false, false, false, 128)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 128), "alt", [], "any", false, false, false, 128)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 129
($context["image"] ?? null), "translated", [], "any", false, false, false, 129), "title", [], "any", false, false, false, 129)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 129), "title", [], "any", false, false, false, 129)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source,         // line 130
($context["image"] ?? null), "url", [], "any", false, false, false, 130)];
        // line 132
        echo "
                                                                            ";
        // line 133
        if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
            // line 134
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
            // line 135
            echo "                                                                            ";
        }
        // line 136
        echo "
                                                                            ";
        // line 137
        if (($context["isProduct"] ?? null)) {
            // line 138
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 139
            echo "                                                                            ";
        }
        // line 140
        echo "
                                                                            ";
        // line 141
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 141);
        })())->display(twig_array_merge($context, ["media" =>         // line 142
($context["image"] ?? null), "name" => "gallery-slider-image-thumbnails"]));
        // line 144
        echo "                                                                        </div>
                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_element_image_gallery_inner_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_controls"));

        // line 153
        echo "                                                    ";
        if (($context["navigationArrows"] ?? null)) {
            // line 154
            echo "                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"";
            // line 155
            if (($context["navigationArrows"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\">
                                                            ";
            // line 156
            $this->displayBlock('element_image_gallery_inner_control_items', $context, $blocks);
            // line 175
            echo "                                                        </div>
                                                    ";
        }
        // line 177
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_element_image_gallery_inner_control_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_items"));

        // line 157
        echo "                                                                ";
        $this->displayBlock('element_image_gallery_inner_control_prev', $context, $blocks);
        // line 165
        echo "
                                                                ";
        // line 166
        $this->displayBlock('element_image_gallery_inner_control_next', $context, $blocks);
        // line 174
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_element_image_gallery_inner_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev"));

        // line 158
        echo "                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " is-nav-prev-outside";
        } elseif ((($context["navigationArrows"] ?? null) == "inside")) {
            echo " is-nav-prev-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 159
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                        ";
        // line 160
        $this->displayBlock('element_image_gallery_inner_control_prev_icon', $context, $blocks);
        // line 163
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_element_image_gallery_inner_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev_icon"));

        // line 161
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 161);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 162
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_element_image_gallery_inner_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next"));

        // line 167
        echo "                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " is-nav-next-outside";
        } elseif ((($context["navigationArrows"] ?? null) == "inside")) {
            echo " is-nav-next-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 168
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                        ";
        // line 169
        $this->displayBlock('element_image_gallery_inner_control_next_icon', $context, $blocks);
        // line 172
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_element_image_gallery_inner_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next_icon"));

        // line 170
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 170);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 171
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_element_image_gallery_inner_single($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_single"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_single"));

        // line 181
        echo "                                                <div class=\"gallery-slider-single-image is-";
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if (($context["minHeight"] ?? null)) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                    ";
        // line 182
        if ((($context["imageCount"] ?? null) > 0)) {
            // line 183
            echo "                                                        ";
            $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 185
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 185), "alt", [], "any", false, false, false, 185)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 185), "alt", [], "any", false, false, false, 185)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 186
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 186), "title", [], "any", false, false, false, 186)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 186), "title", [], "any", false, false, false, 186)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 187
($context["mediaItems"] ?? null)), "url", [], "any", false, false, false, 187)];
            // line 189
            echo "
                                                        ";
            // line 190
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 191
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 192
                echo "                                                        ";
            }
            // line 193
            echo "
                                                        ";
            // line 194
            if (($context["isProduct"] ?? null)) {
                // line 195
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
                // line 196
                echo "                                                        ";
            }
            // line 197
            echo "
                                                        ";
            // line 198
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 198);
            })())->display(twig_array_merge($context, ["media" => twig_first($this->env,             // line 199
($context["mediaItems"] ?? null)), "name" => "gallery-slider-image-thumbnails"]));
            // line 202
            echo "                                                    ";
        } else {
            // line 203
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 203);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 206
            echo "                                                    ";
        }
        // line 207
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_element_image_gallery_slider_dots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots"));

        // line 213
        echo "                                        ";
        if (((($context["imageCount"] ?? null) > 1) && ($context["navigationDots"] ?? null))) {
            // line 214
            echo "                                            <div class=\"base-slider-dots\">
                                                ";
            // line 215
            $this->displayBlock('element_image_gallery_slider_dots_buttons', $context, $blocks);
            // line 224
            echo "                                            </div>
                                        ";
        }
        // line 226
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_element_image_gallery_slider_dots_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_buttons"));

        // line 216
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 217
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_slider_dots_button', $context, $blocks);
            // line 222
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
    public function block_element_image_gallery_slider_dots_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_button"));

        // line 218
        echo "                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 219), "html", null, true);
        echo "\"
                                                                    tabindex=\"-1\"></button>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_element_image_gallery_inner_thumbnails_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_col"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_col"));

        // line 232
        echo "                            ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 233
            echo "                                <div class=\"gallery-slider-thumbnails-col";
            if ((($context["galleryPosition"] ?? null) == "left")) {
                echo " col-0 col-md-auto order-2 order-md-1 is-left";
            } elseif ((($context["galleryPosition"] ?? null) == "underneath")) {
                echo " col-12 order-2 is-underneath";
            }
            echo "\">
                                    <div class=\"gallery-slider-thumbnails-container\">
                                        ";
            // line 235
            $this->displayBlock('element_image_gallery_inner_thumbnails', $context, $blocks);
            // line 268
            echo "
                                        ";
            // line 269
            $this->displayBlock('element_image_gallery_inner_thumbnails_controls', $context, $blocks);
            // line 281
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 284
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_element_image_gallery_inner_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails"));

        // line 236
        echo "                                            <div class=\"gallery-slider-thumbnails";
        if ((($context["galleryPosition"] ?? null) == "underneath")) {
            echo " is-underneath";
        }
        echo "\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                ";
        // line 238
        $this->displayBlock('element_image_gallery_inner_thumbnails_items', $context, $blocks);
        // line 266
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 238
    public function block_element_image_gallery_inner_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_items"));

        // line 239
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 240
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_inner_thumbnails_item', $context, $blocks);
            // line 264
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_element_image_gallery_inner_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item"));

        // line 241
        echo "                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                ";
        // line 242
        $this->displayBlock('element_image_gallery_inner_thumbnails_item_inner', $context, $blocks);
        // line 262
        echo "                                                            </div>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 242
    public function block_element_image_gallery_inner_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item_inner"));

        // line 243
        echo "                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        ";
        // line 244
        $context["attributes"] = ["class" => "gallery-slider-thumbnails-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 246
($context["image"] ?? null), "translated", [], "any", false, false, false, 246), "alt", [], "any", false, false, false, 246)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 246), "alt", [], "any", false, false, false, 246)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 247
($context["image"] ?? null), "translated", [], "any", false, false, false, 247), "title", [], "any", false, false, false, 247)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 247), "title", [], "any", false, false, false, 247)) : (($context["fallbackImageTitle"] ?? null)))];
        // line 249
        echo "
                                                                        ";
        // line 250
        if (($context["isProduct"] ?? null)) {
            // line 251
            echo "                                                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 252
            echo "                                                                        ";
        }
        // line 253
        echo "
                                                                        ";
        // line 254
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 254);
        })())->display(twig_array_merge($context, ["media" =>         // line 255
($context["image"] ?? null), "sizes" => ["default" => "200px"], "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 260
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 269
    public function block_element_image_gallery_inner_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls"));

        // line 270
        echo "                                            ";
        if ((($context["galleryPosition"] ?? null) == "left")) {
            // line 271
            echo "                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        ";
            // line 273
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 273);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-up"]));
            // line 274
            echo "                                                    </button>
                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        ";
            // line 276
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 276);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-down"]));
            // line 277
            echo "                                                    </button>
                                                </div>
                                            ";
        }
        // line 280
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 286
    public function block_element_image_gallery_inner_zoom_modal_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_wrapper"));

        // line 287
        echo "                            ";
        if (($context["zoomModal"] ?? null)) {
            // line 288
            echo "                                <div class=\"zoom-modal-wrapper\">
                                    ";
            // line 289
            $this->displayBlock('element_image_gallery_inner_zoom_modal', $context, $blocks);
            // line 459
            echo "                                </div>
                            ";
        }
        // line 461
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 289
    public function block_element_image_gallery_inner_zoom_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal"));

        // line 290
        echo "                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal";
        if ((($context["imageCount"] ?? null) === 1)) {
            echo " no-thumbnails";
        }
        echo "\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            ";
        // line 294
        $this->displayBlock('element_image_gallery_inner_zoom_modal_dialog', $context, $blocks);
        // line 457
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 294
    public function block_element_image_gallery_inner_zoom_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_dialog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_dialog"));

        // line 295
        echo "                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    ";
        // line 297
        $this->displayBlock('element_image_gallery_inner_zoom_modal_content', $context, $blocks);
        // line 455
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_element_image_gallery_inner_zoom_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_content"));

        // line 298
        echo "                                                        <div class=\"modal-content\"";
        if ((($context["imageCount"] ?? null) > 1)) {
            echo " data-modal-gallery-slider=\"true\"";
        }
        echo ">
                                                            ";
        // line 299
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_button', $context, $blocks);
        // line 311
        echo "
                                                            ";
        // line 312
        $this->displayBlock('element_image_gallery_inner_zoom_modal_body', $context, $blocks);
        // line 402
        echo "
                                                            ";
        // line 403
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 404
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_footer', $context, $blocks);
            // line 452
            echo "                                                            ";
        }
        // line 453
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 299
    public function block_element_image_gallery_inner_zoom_modal_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_button"));

        // line 300
        echo "                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    ";
        // line 304
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_icon', $context, $blocks);
        // line 309
        echo "                                                                </button>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 304
    public function block_element_image_gallery_inner_zoom_modal_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_icon"));

        // line 305
        echo "                                                                        <span aria-hidden=\"true\">
                                                                            ";
        // line 306
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 306);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 307
        echo "                                                                        </span>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 312
    public function block_element_image_gallery_inner_zoom_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_body"));

        // line 313
        echo "                                                                <div class=\"modal-body\">

                                                                    ";
        // line 315
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_buttons', $context, $blocks);
        // line 345
        echo "
                                                                    ";
        // line 346
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider', $context, $blocks);
        // line 375
        echo "
                                                                    ";
        // line 376
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_controls', $context, $blocks);
        // line 400
        echo "                                                                </div>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 315
    public function block_element_image_gallery_inner_zoom_modal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_buttons"));

        // line 316
        echo "                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            ";
        // line 320
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out', $context, $blocks);
        // line 327
        echo "
                                                                            ";
        // line 328
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset', $context, $blocks);
        // line 335
        echo "
                                                                            ";
        // line 336
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in', $context, $blocks);
        // line 343
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out"));

        // line 321
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    ";
        // line 322
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out_icon', $context, $blocks);
        // line 325
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 322
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out_icon"));

        // line 323
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 323);
        })())->display(twig_array_merge($context, ["name" => "minus-circle"]));
        // line 324
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 328
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset"));

        // line 329
        echo "                                                                                <buton class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    ";
        // line 330
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset_icon', $context, $blocks);
        // line 333
        echo "                                                                                </buton>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 330
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset_icon"));

        // line 331
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 331);
        })())->display(twig_array_merge($context, ["name" => "screen-minimize"]));
        // line 332
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 336
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in"));

        // line 337
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    ";
        // line 338
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in_icon', $context, $blocks);
        // line 341
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 338
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in_icon"));

        // line 339
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 339);
        })())->display(twig_array_merge($context, ["name" => "plus-circle"]));
        // line 340
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 346
    public function block_element_image_gallery_inner_zoom_modal_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider"));

        // line 347
        echo "                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            ";
        // line 349
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_items', $context, $blocks);
        // line 373
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_element_image_gallery_inner_zoom_modal_slider_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_items"));

        // line 350
        echo "                                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 351
            echo "                                                                                    ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item', $context, $blocks);
            // line 371
            echo "                                                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_element_image_gallery_inner_zoom_modal_slider_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item"));

        // line 352
        echo "                                                                                        <div class=\"gallery-slider-item\">
                                                                                            ";
        // line 353
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_zoom_container', $context, $blocks);
        // line 369
        echo "                                                                                        </div>
                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 353
    public function block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_zoom_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_zoom_container"));

        // line 354
        echo "                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    ";
        // line 356
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_image', $context, $blocks);
        // line 367
        echo "                                                                                                </div>
                                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 356
    public function block_element_image_gallery_inner_zoom_modal_slider_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_image"));

        // line 357
        echo "                                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 357);
        })())->display(twig_array_merge($context, ["media" =>         // line 358
($context["image"] ?? null), "attributes" => ["class" => "gallery-slider-image js-image-zoom-element js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 361
($context["image"] ?? null), "translated", [], "any", false, false, false, 361), "alt", [], "any", false, false, false, 361)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 361), "alt", [], "any", false, false, false, 361)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 362
($context["image"] ?? null), "translated", [], "any", false, false, false, 362), "title", [], "any", false, false, false, 362)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 362), "title", [], "any", false, false, false, 362)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-image-thumbnails"]));
        // line 366
        echo "                                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 376
    public function block_element_image_gallery_inner_zoom_modal_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_controls"));

        // line 377
        echo "                                                                        ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 378
            echo "                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                ";
            // line 380
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev', $context, $blocks);
            // line 388
            echo "
                                                                                ";
            // line 389
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next', $context, $blocks);
            // line 397
            echo "                                                                            </div>
                                                                        ";
        }
        // line 399
        echo "                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 380
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev"));

        // line 381
        echo "                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"";
        // line 382
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 383
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev_icon', $context, $blocks);
        // line 386
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 383
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev_icon"));

        // line 384
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 384);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 385
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 389
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next"));

        // line 390
        echo "                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"";
        // line 391
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 392
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next_icon', $context, $blocks);
        // line 395
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 392
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next_icon"));

        // line 393
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 393);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 394
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 404
    public function block_element_image_gallery_inner_zoom_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_footer"));

        // line 405
        echo "                                                                    <div class=\"modal-footer\">
                                                                        ";
        // line 406
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_controls', $context, $blocks);
        // line 420
        echo "
                                                                        ";
        // line 421
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails', $context, $blocks);
        // line 450
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 406
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_controls"));

        // line 407
        echo "                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"";
        // line 410
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 411
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 411);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 412
        echo "                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"";
        // line 414
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 415
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 415);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 416
        echo "                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_element_image_gallery_inner_zoom_modal_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails"));

        // line 422
        echo "                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                ";
        // line 424
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_items', $context, $blocks);
        // line 448
        echo "                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 424
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_items"));

        // line 425
        echo "                                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 426
            echo "                                                                                        ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item', $context, $blocks);
            // line 446
            echo "                                                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 426
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item"));

        // line 427
        echo "                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                ";
        // line 428
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item_inner', $context, $blocks);
        // line 444
        echo "                                                                                            </div>
                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item_inner"));

        // line 429
        echo "                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        ";
        // line 430
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 430);
        })())->display(twig_array_merge($context, ["media" =>         // line 431
($context["image"] ?? null), "sizes" => ["default" => "200px"], "attributes" => ["class" => "gallery-slider-thumbnails-image js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 437
($context["image"] ?? null), "translated", [], "any", false, false, false, 437), "alt", [], "any", false, false, false, 437)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 437), "alt", [], "any", false, false, false, 437)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 438
($context["image"] ?? null), "translated", [], "any", false, false, false, 438), "title", [], "any", false, false, false, 438)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 438), "title", [], "any", false, false, false, 438)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 442
        echo "                                                                                                    </div>
                                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image-gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2310 => 442,  2308 => 438,  2307 => 437,  2306 => 431,  2299 => 430,  2296 => 429,  2286 => 428,  2275 => 444,  2273 => 428,  2270 => 427,  2260 => 426,  2250 => 447,  2236 => 446,  2233 => 426,  2215 => 425,  2205 => 424,  2194 => 448,  2192 => 424,  2188 => 422,  2178 => 421,  2165 => 416,  2157 => 415,  2153 => 414,  2149 => 412,  2141 => 411,  2137 => 410,  2132 => 407,  2122 => 406,  2111 => 450,  2109 => 421,  2106 => 420,  2104 => 406,  2101 => 405,  2091 => 404,  2081 => 394,  2072 => 393,  2062 => 392,  2051 => 395,  2049 => 392,  2045 => 391,  2042 => 390,  2032 => 389,  2022 => 385,  2013 => 384,  2003 => 383,  1992 => 386,  1990 => 383,  1986 => 382,  1983 => 381,  1973 => 380,  1963 => 399,  1959 => 397,  1957 => 389,  1954 => 388,  1952 => 380,  1948 => 378,  1945 => 377,  1935 => 376,  1925 => 366,  1923 => 362,  1922 => 361,  1921 => 358,  1913 => 357,  1903 => 356,  1892 => 367,  1890 => 356,  1886 => 354,  1876 => 353,  1865 => 369,  1863 => 353,  1860 => 352,  1850 => 351,  1840 => 372,  1826 => 371,  1823 => 351,  1805 => 350,  1795 => 349,  1784 => 373,  1782 => 349,  1778 => 347,  1768 => 346,  1758 => 340,  1749 => 339,  1739 => 338,  1728 => 341,  1726 => 338,  1723 => 337,  1713 => 336,  1703 => 332,  1694 => 331,  1684 => 330,  1673 => 333,  1671 => 330,  1668 => 329,  1658 => 328,  1648 => 324,  1639 => 323,  1629 => 322,  1618 => 325,  1616 => 322,  1613 => 321,  1603 => 320,  1592 => 343,  1590 => 336,  1587 => 335,  1585 => 328,  1582 => 327,  1580 => 320,  1574 => 316,  1564 => 315,  1553 => 400,  1551 => 376,  1548 => 375,  1546 => 346,  1543 => 345,  1541 => 315,  1537 => 313,  1527 => 312,  1516 => 307,  1508 => 306,  1505 => 305,  1495 => 304,  1484 => 309,  1482 => 304,  1476 => 300,  1466 => 299,  1455 => 453,  1452 => 452,  1449 => 404,  1447 => 403,  1444 => 402,  1442 => 312,  1439 => 311,  1437 => 299,  1430 => 298,  1420 => 297,  1409 => 455,  1407 => 297,  1403 => 295,  1393 => 294,  1382 => 457,  1380 => 294,  1370 => 290,  1360 => 289,  1350 => 461,  1346 => 459,  1344 => 289,  1341 => 288,  1338 => 287,  1328 => 286,  1318 => 280,  1313 => 277,  1305 => 276,  1301 => 274,  1293 => 273,  1289 => 271,  1286 => 270,  1276 => 269,  1265 => 260,  1263 => 255,  1256 => 254,  1253 => 253,  1250 => 252,  1247 => 251,  1245 => 250,  1242 => 249,  1240 => 247,  1239 => 246,  1238 => 244,  1235 => 243,  1225 => 242,  1214 => 262,  1212 => 242,  1209 => 241,  1199 => 240,  1189 => 265,  1175 => 264,  1172 => 240,  1154 => 239,  1144 => 238,  1133 => 266,  1131 => 238,  1123 => 236,  1113 => 235,  1103 => 284,  1098 => 281,  1096 => 269,  1093 => 268,  1091 => 235,  1081 => 233,  1078 => 232,  1068 => 231,  1055 => 219,  1052 => 218,  1042 => 217,  1032 => 223,  1018 => 222,  1015 => 217,  997 => 216,  987 => 215,  977 => 226,  973 => 224,  971 => 215,  968 => 214,  965 => 213,  955 => 212,  944 => 207,  941 => 206,  932 => 203,  929 => 202,  927 => 199,  920 => 198,  917 => 197,  914 => 196,  911 => 195,  909 => 194,  906 => 193,  903 => 192,  900 => 191,  898 => 190,  895 => 189,  893 => 187,  892 => 186,  891 => 185,  889 => 183,  887 => 182,  876 => 181,  866 => 180,  856 => 171,  847 => 170,  837 => 169,  826 => 172,  824 => 169,  820 => 168,  811 => 167,  801 => 166,  791 => 162,  782 => 161,  772 => 160,  761 => 163,  759 => 160,  755 => 159,  746 => 158,  736 => 157,  726 => 174,  724 => 166,  721 => 165,  718 => 157,  708 => 156,  698 => 177,  694 => 175,  692 => 156,  684 => 155,  681 => 154,  678 => 153,  668 => 152,  656 => 144,  654 => 142,  647 => 141,  644 => 140,  641 => 139,  638 => 138,  636 => 137,  633 => 136,  630 => 135,  627 => 134,  625 => 133,  622 => 132,  620 => 130,  619 => 129,  618 => 128,  617 => 126,  607 => 125,  604 => 124,  594 => 123,  584 => 148,  570 => 147,  567 => 123,  549 => 122,  539 => 121,  528 => 149,  526 => 121,  522 => 119,  512 => 118,  502 => 178,  500 => 152,  497 => 151,  494 => 118,  484 => 117,  474 => 210,  471 => 209,  468 => 180,  465 => 179,  462 => 117,  459 => 116,  449 => 115,  437 => 227,  435 => 212,  432 => 211,  430 => 115,  417 => 114,  411 => 112,  402 => 111,  392 => 110,  381 => 462,  379 => 286,  376 => 285,  374 => 231,  371 => 230,  369 => 110,  365 => 108,  360 => 107,  357 => 106,  354 => 105,  348 => 103,  345 => 102,  341 => 100,  339 => 99,  332 => 98,  322 => 97,  312 => 468,  308 => 466,  306 => 465,  303 => 464,  301 => 97,  298 => 96,  295 => 95,  292 => 80,  290 => 79,  287 => 78,  285 => 65,  284 => 64,  283 => 63,  282 => 60,  281 => 58,  280 => 57,  279 => 53,  275 => 51,  263 => 49,  260 => 48,  250 => 47,  239 => 469,  237 => 47,  230 => 46,  227 => 45,  224 => 44,  222 => 42,  220 => 41,  218 => 40,  215 => 39,  212 => 38,  209 => 34,  207 => 33,  204 => 32,  202 => 31,  199 => 30,  196 => 29,  193 => 27,  190 => 26,  187 => 25,  185 => 24,  182 => 23,  179 => 22,  176 => 21,  173 => 20,  170 => 19,  167 => 18,  164 => 17,  161 => 16,  158 => 15,  155 => 14,  152 => 13,  149 => 12,  147 => 11,  144 => 10,  138 => 9,  135 => 8,  130 => 7,  128 => 6,  125 => 5,  122 => 4,  119 => 3,  117 => 2,  98 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image_gallery %}
    {# cms element data and configs #}
    {% if element.fieldConfig is defined and element.data is defined %}
        {% set sliderConfig = element.fieldConfig.elements %}

        {% set mediaItems = [] %}
        {% for item in element.data.sliderItems %}
            {% set mediaItems = mediaItems|merge([item.media]) %}
        {% endfor %}

        {% set zoom = sliderConfig.zoom.value %}
        {% set gutter = sliderConfig.gutter.value %}
        {% set magnifierOverGallery = true %}
        {% set zoomModal = sliderConfig.fullScreen.value %}
        {% set minHeight = sliderConfig.minHeight.value %}
        {% set displayMode = sliderConfig.displayMode.value %}
        {% set navigationArrows = sliderConfig.navigationArrows.value %}
        {% set navigationDots = sliderConfig.navigationDots.value %}
        {% set galleryPosition = sliderConfig.galleryPosition.value %}
        {% set verticalAlign = sliderConfig.verticalAlign.value %}
        {% set zoomImageContainerSelector = sliderConfig.zoomImageContainerSelector.value %}
    {% endif %}

    {% if fallbackImageTitle is not defined %}
        {% set fallbackImageTitle = '' %}
    {% endif %}

    {# @var mediaItems \\Shopware\\Core\\Content\\Media\\MediaCollection #}
    {% set imageCount = mediaItems|length %}

    {% set magnifierOptions = [] %}

    {% if magnifierOverGallery %}
        {% set magnifierOptions = magnifierOptions|merge({
            'magnifierOverGallery': true,
            'cursorType': 'crosshair'
        }) %}
    {% endif %}

    {% if zoomImageContainerSelector %}
        {% set magnifierOptions = magnifierOptions|merge({
            'zoomImageContainerSelector': zoomImageContainerSelector
        }) %}
    {% endif %}

    <div class=\"cms-element-{{ element.type }}{% if displayMode == \"standard\" and verticalAlign %} has-vertical-alignment{% endif %}\">
        {% block element_image_gallery_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if verticalAlign == \"center\" %} align-self-center{% elseif verticalAlign == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}


                {% set gallerySliderOptions = {
                    slider: {
                        navPosition: 'bottom',
                        speed: 500,
                        gutter: gutter ? gutter : 0,
                        controls: navigationArrows ? true : false,
                        autoHeight: false,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null
                    },
                    thumbnailSlider: {
                        autoWidth: (galleryPosition == \"underneath\") ? true : false,
                        controls: (galleryPosition == \"underneath\") ? false : true,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null,
                        responsive: {
                            xs: {
                                enabled: false,
                                controls: false
                            },
                            sm: {
                                enabled: false,
                                controls: false
                            }
                        }
                    }
                } %}

                {% if galleryPosition == \"left\" %}
                    {% set gallerySliderOptions = gallerySliderOptions|replace_recursive({
                        thumbnailSlider: {
                            responsive: {
                                md: {
                                    axis: 'vertical'
                                },
                                lg: {
                                    axis: 'vertical'
                                },
                                xl: {
                                    axis: 'vertical'
                                }
                            }
                        }
                    }) %}
                {% endif %}

                {% block element_image_gallery_inner %}
                    <div class=\"row gallery-slider-row{% if imageCount == 1 %} is-single-image{% endif %} js-gallery-zoom-modal-container\"
                            {% if zoom %}
                                data-magnifier=\"true\"
                            {% endif %}
                            {% if magnifierOptions|length > 0 %}
                                data-magnifier-options='{{ magnifierOptions|json_encode|raw }}'
                            {% endif %}
                            {% if imageCount > 1 %}
                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='{{ gallerySliderOptions|json_encode }}'
                            {% endif %}>

                        {% block element_image_gallery_inner_col %}
                            <div class=\"gallery-slider-col{% if galleryPosition == \"left\" %} col order-1 order-md-2{% elseif galleryPosition == \"underneath\" %} col-12 order-1{% endif %}\"
                                 {% if zoomModal %}data-zoom-modal=\"true\"{% endif %}>
                                {# option \"magnifierOverGallery\" shows zoom container over gallery #}
                                <div class=\"base-slider gallery-slider{% if navigationArrows == \"outside\" %} has-nav-outside{% endif %}{% if navigationDots == \"outside\" %} has-dots-outside{% endif %}{% if magnifierOverGallery %} js-magnifier-zoom-image-container{% endif %}\">
                                    {% block element_image_gallery_inner_wrapper %}
                                        {% if imageCount > 1 %}
                                            {% block element_image_gallery_inner_multiple_slides %}
                                                {% block element_image_gallery_inner_container %}
                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        {% block element_image_gallery_inner_items %}
                                                            {% for image in mediaItems %}
                                                                {% block element_image_gallery_inner_item %}
                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-{{ displayMode }} js-magnifier-container\"{% if minHeight and  (displayMode == \"cover\" or displayMode == \"contain\" ) %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                                            {% set attributes = {
                                                                                'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                'title': (image.translated.title ?: fallbackImageTitle),
                                                                                'data-full-image': image.url
                                                                            } %}

                                                                            {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                                                {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                                            {% endif %}

                                                                            {% if isProduct %}
                                                                                {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                            {% endif %}

                                                                            {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                media: image
                                                                            } %}
                                                                        </div>
                                                                    </div>
                                                                {% endblock %}
                                                            {% endfor %}
                                                        {% endblock %}
                                                    </div>
                                                {% endblock %}

                                                {% block element_image_gallery_inner_controls %}
                                                    {% if navigationArrows %}
                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"{% if navigationArrows %}true{% else %}false{% endif %}\">
                                                            {% block element_image_gallery_inner_control_items %}
                                                                {% block element_image_gallery_inner_control_prev %}
                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev{% if navigationArrows == \"outside\" %} is-nav-prev-outside{% elseif navigationArrows == \"inside\" %} is-nav-prev-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_prev_icon %}
                                                                            {% sw_icon 'arrow-head-left' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}

                                                                {% block element_image_gallery_inner_control_next %}
                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next{% if navigationArrows == \"outside\" %} is-nav-next-outside{% elseif navigationArrows == \"inside\" %} is-nav-next-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_next_icon %}
                                                                            {% sw_icon 'arrow-head-right' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}
                                            {% endblock %}
                                        {% else %}
                                            {% block element_image_gallery_inner_single %}
                                                <div class=\"gallery-slider-single-image is-{{ displayMode }} js-magnifier-container\"{% if minHeight %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                    {% if imageCount > 0 %}
                                                        {% set attributes = {
                                                            'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                            'alt': (mediaItems|first.translated.alt ?: fallbackImageTitle),
                                                            'title': (mediaItems|first.translated.title ?: fallbackImageTitle),
                                                            'data-full-image': mediaItems|first.url
                                                        } %}

                                                        {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                            {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                        {% endif %}

                                                        {% if isProduct %}
                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                        {% endif %}

                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                            media: mediaItems|first,

                                                        } %}
                                                    {% else %}
                                                        {% sw_icon 'placeholder' style {
                                                            'size': 'fluid'
                                                        } %}
                                                    {% endif %}
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endblock %}

                                    {% block element_image_gallery_slider_dots %}
                                        {% if imageCount > 1 and navigationDots %}
                                            <div class=\"base-slider-dots\">
                                                {% block element_image_gallery_slider_dots_buttons %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_slider_dots_button %}
                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"{{ loop.index }}\"
                                                                    tabindex=\"-1\"></button>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block element_image_gallery_inner_thumbnails_col %}
                            {% if imageCount > 1 %}
                                <div class=\"gallery-slider-thumbnails-col{% if galleryPosition == \"left\" %} col-0 col-md-auto order-2 order-md-1 is-left{% elseif galleryPosition == \"underneath\" %} col-12 order-2 is-underneath{% endif %}\">
                                    <div class=\"gallery-slider-thumbnails-container\">
                                        {% block element_image_gallery_inner_thumbnails %}
                                            <div class=\"gallery-slider-thumbnails{% if galleryPosition == \"underneath\" %} is-underneath{% endif %}\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                {% block element_image_gallery_inner_thumbnails_items %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_inner_thumbnails_item %}
                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                {% block element_image_gallery_inner_thumbnails_item_inner %}
                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        {% set attributes = {
                                                                            'class': 'gallery-slider-thumbnails-image',
                                                                            'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                            'title': (image.translated.title ?: fallbackImageTitle)
                                                                        } %}

                                                                        {% if isProduct %}
                                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                        {% endif %}

                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                            media: image,
                                                                            sizes: {
                                                                                'default': '200px'
                                                                            }
                                                                        } %}
                                                                    </div>
                                                                {% endblock %}
                                                            </div>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block element_image_gallery_inner_thumbnails_controls %}
                                            {% if galleryPosition == \"left\" %}
                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        {% sw_icon 'arrow-head-up' %}
                                                    </button>
                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        {% sw_icon 'arrow-head-down' %}
                                                    </button>
                                                </div>
                                            {% endif %}
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endblock %}

                        {% block element_image_gallery_inner_zoom_modal_wrapper %}
                            {% if zoomModal %}
                                <div class=\"zoom-modal-wrapper\">
                                    {% block element_image_gallery_inner_zoom_modal %}
                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal{% if imageCount is same as(1) %} no-thumbnails{% endif %}\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            {% block element_image_gallery_inner_zoom_modal_dialog %}
                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    {% block element_image_gallery_inner_zoom_modal_content %}
                                                        <div class=\"modal-content\"{% if imageCount > 1 %} data-modal-gallery-slider=\"true\"{% endif %}>
                                                            {% block element_image_gallery_inner_zoom_modal_close_button %}
                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    {% block element_image_gallery_inner_zoom_modal_close_icon %}
                                                                        <span aria-hidden=\"true\">
                                                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                                                        </span>
                                                                    {% endblock %}
                                                                </button>
                                                            {% endblock %}

                                                            {% block element_image_gallery_inner_zoom_modal_body %}
                                                                <div class=\"modal-body\">

                                                                    {% block element_image_gallery_inner_zoom_modal_action_buttons %}
                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_out %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_out_icon %}
                                                                                        {% sw_icon 'minus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_reset %}
                                                                                <buton class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_reset_icon %}
                                                                                        {% sw_icon 'screen-minimize' %}
                                                                                    {% endblock %}
                                                                                </buton>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_in %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_in_icon %}
                                                                                        {% sw_icon 'plus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider %}
                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            {% block element_image_gallery_inner_zoom_modal_slider_items %}
                                                                                {% for image in mediaItems %}
                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item %}
                                                                                        <div class=\"gallery-slider-item\">
                                                                                            {% block element_image_gallery_inner_zoom_modal_slider_item_zoom_container %}
                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item_image %}
                                                                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-image js-image-zoom-element js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false
                                                                                                        } %}
                                                                                                    {% endblock %}
                                                                                                </div>
                                                                                            {% endblock %}
                                                                                        </div>
                                                                                    {% endblock %}
                                                                                {% endfor %}
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider_controls %}
                                                                        {% if imageCount > 1 %}
                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_prev %}
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_prev_icon %}
                                                                                            {% sw_icon 'arrow-head-left' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}

                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_next %}
                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_next_icon %}
                                                                                            {% sw_icon 'arrow-head-right' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endif %}
                                                                    {% endblock %}
                                                                </div>
                                                            {% endblock %}

                                                            {% if imageCount > 1 %}
                                                                {% block element_image_gallery_inner_zoom_modal_footer %}
                                                                    <div class=\"modal-footer\">
                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_controls %}
                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-left' %}
                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-right' %}
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        {% endblock %}

                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails %}
                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_items %}
                                                                                    {% for image in mediaItems %}
                                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_item %}
                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_item_inner %}
                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            sizes: {
                                                                                                                'default': '200px'
                                                                                                            },
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-thumbnails-image js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false
                                                                                                        } %}
                                                                                                    </div>
                                                                                                {% endblock %}
                                                                                            </div>
                                                                                        {% endblock %}
                                                                                    {% endfor %}
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endblock %}
                                                                    </div>
                                                                {% endblock %}
                                                            {% endif %}
                                                        </div>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}

            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image-gallery.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image-gallery.html.twig");
    }
}
