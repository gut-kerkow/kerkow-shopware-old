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
class __TwigTemplate_2d964abf6f97d75e9cf466cdbfa59dcfe1c95b2770c25ef57d9c4c7c01e3ae87 extends \Twig\Template
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
        // line 1
        $this->displayBlock('element_image_gallery', $context, $blocks);
    }

    public function block_element_image_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 47
    public function block_element_image_gallery_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 97
    public function block_element_image_gallery_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 110
    public function block_element_image_gallery_inner_col($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 115
    public function block_element_image_gallery_inner_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 117
    public function block_element_image_gallery_inner_multiple_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 118
    public function block_element_image_gallery_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        ";
        // line 121
        $this->displayBlock('element_image_gallery_inner_items', $context, $blocks);
        // line 149
        echo "                                                    </div>
                                                ";
    }

    // line 121
    public function block_element_image_gallery_inner_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 123
    public function block_element_image_gallery_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 152
    public function block_element_image_gallery_inner_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 156
    public function block_element_image_gallery_inner_control_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 157
    public function block_element_image_gallery_inner_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 160
    public function block_element_image_gallery_inner_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 161);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 162
        echo "                                                                        ";
    }

    // line 166
    public function block_element_image_gallery_inner_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 169
    public function block_element_image_gallery_inner_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 170);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 171
        echo "                                                                        ";
    }

    // line 180
    public function block_element_image_gallery_inner_single($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 212
    public function block_element_image_gallery_slider_dots($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 215
    public function block_element_image_gallery_slider_dots_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 217
    public function block_element_image_gallery_slider_dots_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 219), "html", null, true);
        echo "\"
                                                                    tabindex=\"-1\"></button>
                                                        ";
    }

    // line 231
    public function block_element_image_gallery_inner_thumbnails_col($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 235
    public function block_element_image_gallery_inner_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 238
    public function block_element_image_gallery_inner_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 240
    public function block_element_image_gallery_inner_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                ";
        // line 242
        $this->displayBlock('element_image_gallery_inner_thumbnails_item_inner', $context, $blocks);
        // line 262
        echo "                                                            </div>
                                                        ";
    }

    // line 242
    public function block_element_image_gallery_inner_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 269
    public function block_element_image_gallery_inner_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 286
    public function block_element_image_gallery_inner_zoom_modal_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 289
    public function block_element_image_gallery_inner_zoom_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 294
    public function block_element_image_gallery_inner_zoom_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo "                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    ";
        // line 297
        $this->displayBlock('element_image_gallery_inner_zoom_modal_content', $context, $blocks);
        // line 455
        echo "                                                </div>
                                            ";
    }

    // line 297
    public function block_element_image_gallery_inner_zoom_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 299
    public function block_element_image_gallery_inner_zoom_modal_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 304
    public function block_element_image_gallery_inner_zoom_modal_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 312
    public function block_element_image_gallery_inner_zoom_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 315
    public function block_element_image_gallery_inner_zoom_modal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 320
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    ";
        // line 322
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out_icon', $context, $blocks);
        // line 325
        echo "                                                                                </button>
                                                                            ";
    }

    // line 322
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 323
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 323);
        })())->display(twig_array_merge($context, ["name" => "minus-circle"]));
        // line 324
        echo "                                                                                    ";
    }

    // line 328
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 329
        echo "                                                                                <buton class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    ";
        // line 330
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset_icon', $context, $blocks);
        // line 333
        echo "                                                                                </buton>
                                                                            ";
    }

    // line 330
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 331);
        })())->display(twig_array_merge($context, ["name" => "screen-minimize"]));
        // line 332
        echo "                                                                                    ";
    }

    // line 336
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 337
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    ";
        // line 338
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in_icon', $context, $blocks);
        // line 341
        echo "                                                                                </button>
                                                                            ";
    }

    // line 338
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 339);
        })())->display(twig_array_merge($context, ["name" => "plus-circle"]));
        // line 340
        echo "                                                                                    ";
    }

    // line 346
    public function block_element_image_gallery_inner_zoom_modal_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 347
        echo "                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            ";
        // line 349
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_items', $context, $blocks);
        // line 373
        echo "                                                                        </div>
                                                                    ";
    }

    // line 349
    public function block_element_image_gallery_inner_zoom_modal_slider_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 351
    public function block_element_image_gallery_inner_zoom_modal_slider_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 352
        echo "                                                                                        <div class=\"gallery-slider-item\">
                                                                                            ";
        // line 353
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_zoom_container', $context, $blocks);
        // line 369
        echo "                                                                                        </div>
                                                                                    ";
    }

    // line 353
    public function block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 354
        echo "                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    ";
        // line 356
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_image', $context, $blocks);
        // line 367
        echo "                                                                                                </div>
                                                                                            ";
    }

    // line 356
    public function block_element_image_gallery_inner_zoom_modal_slider_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 376
    public function block_element_image_gallery_inner_zoom_modal_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 380
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 383
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 384
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 384);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 385
        echo "                                                                                        ";
    }

    // line 389
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 392
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 393
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 393);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 394
        echo "                                                                                        ";
    }

    // line 404
    public function block_element_image_gallery_inner_zoom_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 406
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 421
    public function block_element_image_gallery_inner_zoom_modal_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 422
        echo "                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                ";
        // line 424
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_items', $context, $blocks);
        // line 448
        echo "                                                                            </div>
                                                                        ";
    }

    // line 424
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 426
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 427
        echo "                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                ";
        // line 428
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item_inner', $context, $blocks);
        // line 444
        echo "                                                                                            </div>
                                                                                        ";
    }

    // line 428
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image-gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1644 => 442,  1642 => 438,  1641 => 437,  1640 => 431,  1633 => 430,  1630 => 429,  1626 => 428,  1621 => 444,  1619 => 428,  1616 => 427,  1612 => 426,  1608 => 447,  1594 => 446,  1591 => 426,  1573 => 425,  1569 => 424,  1564 => 448,  1562 => 424,  1558 => 422,  1554 => 421,  1547 => 416,  1539 => 415,  1535 => 414,  1531 => 412,  1523 => 411,  1519 => 410,  1514 => 407,  1510 => 406,  1505 => 450,  1503 => 421,  1500 => 420,  1498 => 406,  1495 => 405,  1491 => 404,  1487 => 394,  1478 => 393,  1474 => 392,  1469 => 395,  1467 => 392,  1463 => 391,  1460 => 390,  1456 => 389,  1452 => 385,  1443 => 384,  1439 => 383,  1434 => 386,  1432 => 383,  1428 => 382,  1425 => 381,  1421 => 380,  1417 => 399,  1413 => 397,  1411 => 389,  1408 => 388,  1406 => 380,  1402 => 378,  1399 => 377,  1395 => 376,  1391 => 366,  1389 => 362,  1388 => 361,  1387 => 358,  1379 => 357,  1375 => 356,  1370 => 367,  1368 => 356,  1364 => 354,  1360 => 353,  1355 => 369,  1353 => 353,  1350 => 352,  1346 => 351,  1342 => 372,  1328 => 371,  1325 => 351,  1307 => 350,  1303 => 349,  1298 => 373,  1296 => 349,  1292 => 347,  1288 => 346,  1284 => 340,  1275 => 339,  1271 => 338,  1266 => 341,  1264 => 338,  1261 => 337,  1257 => 336,  1253 => 332,  1244 => 331,  1240 => 330,  1235 => 333,  1233 => 330,  1230 => 329,  1226 => 328,  1222 => 324,  1213 => 323,  1209 => 322,  1204 => 325,  1202 => 322,  1199 => 321,  1195 => 320,  1190 => 343,  1188 => 336,  1185 => 335,  1183 => 328,  1180 => 327,  1178 => 320,  1172 => 316,  1168 => 315,  1163 => 400,  1161 => 376,  1158 => 375,  1156 => 346,  1153 => 345,  1151 => 315,  1147 => 313,  1143 => 312,  1138 => 307,  1130 => 306,  1127 => 305,  1123 => 304,  1118 => 309,  1116 => 304,  1110 => 300,  1106 => 299,  1101 => 453,  1098 => 452,  1095 => 404,  1093 => 403,  1090 => 402,  1088 => 312,  1085 => 311,  1083 => 299,  1076 => 298,  1072 => 297,  1067 => 455,  1065 => 297,  1061 => 295,  1057 => 294,  1052 => 457,  1050 => 294,  1040 => 290,  1036 => 289,  1032 => 461,  1028 => 459,  1026 => 289,  1023 => 288,  1020 => 287,  1016 => 286,  1012 => 280,  1007 => 277,  999 => 276,  995 => 274,  987 => 273,  983 => 271,  980 => 270,  976 => 269,  971 => 260,  969 => 255,  962 => 254,  959 => 253,  956 => 252,  953 => 251,  951 => 250,  948 => 249,  946 => 247,  945 => 246,  944 => 244,  941 => 243,  937 => 242,  932 => 262,  930 => 242,  927 => 241,  923 => 240,  919 => 265,  905 => 264,  902 => 240,  884 => 239,  880 => 238,  875 => 266,  873 => 238,  865 => 236,  861 => 235,  857 => 284,  852 => 281,  850 => 269,  847 => 268,  845 => 235,  835 => 233,  832 => 232,  828 => 231,  821 => 219,  818 => 218,  814 => 217,  810 => 223,  796 => 222,  793 => 217,  775 => 216,  771 => 215,  767 => 226,  763 => 224,  761 => 215,  758 => 214,  755 => 213,  751 => 212,  746 => 207,  743 => 206,  734 => 203,  731 => 202,  729 => 199,  722 => 198,  719 => 197,  716 => 196,  713 => 195,  711 => 194,  708 => 193,  705 => 192,  702 => 191,  700 => 190,  697 => 189,  695 => 187,  694 => 186,  693 => 185,  691 => 183,  689 => 182,  678 => 181,  674 => 180,  670 => 171,  661 => 170,  657 => 169,  652 => 172,  650 => 169,  646 => 168,  637 => 167,  633 => 166,  629 => 162,  620 => 161,  616 => 160,  611 => 163,  609 => 160,  605 => 159,  596 => 158,  592 => 157,  588 => 174,  586 => 166,  583 => 165,  580 => 157,  576 => 156,  572 => 177,  568 => 175,  566 => 156,  558 => 155,  555 => 154,  552 => 153,  548 => 152,  542 => 144,  540 => 142,  533 => 141,  530 => 140,  527 => 139,  524 => 138,  522 => 137,  519 => 136,  516 => 135,  513 => 134,  511 => 133,  508 => 132,  506 => 130,  505 => 129,  504 => 128,  503 => 126,  493 => 125,  490 => 124,  486 => 123,  482 => 148,  468 => 147,  465 => 123,  447 => 122,  443 => 121,  438 => 149,  436 => 121,  432 => 119,  428 => 118,  424 => 178,  422 => 152,  419 => 151,  416 => 118,  412 => 117,  408 => 210,  405 => 209,  402 => 180,  399 => 179,  396 => 117,  393 => 116,  389 => 115,  383 => 227,  381 => 212,  378 => 211,  376 => 115,  363 => 114,  357 => 112,  348 => 111,  344 => 110,  339 => 462,  337 => 286,  334 => 285,  332 => 231,  329 => 230,  327 => 110,  323 => 108,  318 => 107,  315 => 106,  312 => 105,  306 => 103,  303 => 102,  299 => 100,  297 => 99,  290 => 98,  286 => 97,  282 => 468,  278 => 466,  276 => 465,  273 => 464,  271 => 97,  268 => 96,  265 => 95,  262 => 80,  260 => 79,  257 => 78,  255 => 65,  254 => 64,  253 => 63,  252 => 60,  251 => 58,  250 => 57,  249 => 53,  245 => 51,  233 => 49,  230 => 48,  226 => 47,  221 => 469,  219 => 47,  212 => 46,  209 => 45,  206 => 44,  204 => 42,  202 => 41,  200 => 40,  197 => 39,  194 => 38,  191 => 34,  189 => 33,  186 => 32,  184 => 31,  181 => 30,  178 => 29,  175 => 27,  172 => 26,  169 => 25,  167 => 24,  164 => 23,  161 => 22,  158 => 21,  155 => 20,  152 => 19,  149 => 18,  146 => 17,  143 => 16,  140 => 15,  137 => 14,  134 => 13,  131 => 12,  129 => 11,  126 => 10,  120 => 9,  117 => 8,  112 => 7,  110 => 6,  107 => 5,  104 => 4,  101 => 3,  99 => 2,  92 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-image-gallery.html.twig", "/Users/kevin/Sites/kerkow_re/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image-gallery.html.twig");
    }
}
