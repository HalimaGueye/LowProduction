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

/* gentle_chef/home.html.twig */
class __TwigTemplate_8fc0dc16a8b56beceba70d7a77696f3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'home' => [$this, 'block_home'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        echo "<li class=\"active\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<!-- Start Slider -->
<section id=\"slider\">
\t<div class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"agency-website\" id=\"rev_slider_280_1_wrapper\" style=\"background-color:#fff;padding:0px;height:1080px;\">
\t\t<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
\t\t<div class=\"rev_slider fullscreenbanner\" id=\"rev_slider_nagency\" style=\"display:none;\">
\t\t\t\t<ul style=\"display:none;\">

\t\t\t\t\t<!-- slider Item 1 -->
\t\t\t\t\t<li data-index=\"rs-1\" data-transition=\"fadetotopfadefrombottom\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"N.Agency\" data-description=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/slider/s1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Low Production
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Association de production<br>audiovisuelle engagée</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#service' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</li>

\t\t\t\t\t<!-- slider Item 2 -->
\t\t\t\t\t<li data-index=\"rs-3\" data-transition=\"slideremoveright\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/slider/s2.jpg"), "html", null, true);
        echo "\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme black-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Documentaires engagés
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme black-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Sur les thématiques sociales<br>et environnementales</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#portfolio' class='btn btn-main btn-black'>En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- slider Item 3 -->
\t\t\t\t\t<li data-index=\"rs-2\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t<img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/slider/s3.jpg"), "html", null, true);
        echo "\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous soutenir
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Vous souhaitez rejoindre<br>l'aventure ou nous aider ?</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#join' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t</div>
\t</div>
</section>
<!-- End Slider -->

<!-- Start Service -->
<section id=\"service\" class=\"p-top-80 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Qui sommes-nous ?</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tLow Production est une association de <b>production audiovisuelle</b> engagée dans la <b>transition écologique</b>. Nous mettons en relation des bénévoles et <b>mutualisons des compétences</b> pour réaliser des <b>documentaires</b> sur les thématiques <b>sociales et environnementales</b>, en veillant à <b>minimiser</b> leur impact.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Que vous soyez réalisateur, ingénieur du son, graphiste, musicien... <b>professionnel</b> ou <b>amateur</b>, une place vous attend pour collaborer à la <b>réalisation</b> de projets documentaires <b>libres</b>, <b>collaboratifs</b>, à <b>faible impact</b> et <b>engagés</b>.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Low Production s'oriente autour de <b>quatre axes</b> principaux :
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- Service Item 1 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La réalisation</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Réaliser des documentaires engagés à <b>impact positif</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup1\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 2 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La collaboration</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Collaborer</b> à plusieurs bénévoles et <b>mutualiser</b> des compétences au service d'un projet documentaire <b>commun</b>.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup2\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 3 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La libération</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Créer</b> et <b>diffuser librement</b> nos oeuvres aux fins de les rendre <b>accessibles</b> au plus grand nombre.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup3\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 4 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-leaf\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La réduction</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Réduire</b> continuellement notre <b>impact environnemental</b> en analysant le <b>cycle de vie</b> de nos projets.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup4\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"myGroup\">
\t\t\t\t\t\t<div class=\"accordion-group \">
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup1\">
\t\t\t\t\t\t\t\t\t\t<h5>Réaliser</h5>
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons à nos bénévoles un cadre pour travailler <b>ensemble</b> sur un projet audiovisuel <b>commun</b>. Réalisateurs, ingénieurs du son, scénaristes, photographes, vidéastes, musiciens... forment ainsi un <b>collectif</b> de <b>bénévoles</b> réunit derrière la création de <b>documentaires engagés</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>

\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Proposition de projet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Tout membre peut présenter un projet de documentaire qui sera étudié et validé par l'ensemble de l'association.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Choix du projet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Les membres de l'association choisissent ensemble un projet à réaliser avec l'aide du bureau qui veille à sa faisabilité.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Constitution de l'équipe</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>En utilisant les réseaux de l’association, une équipe de bénévoles est montée pour répondre au projet selectionné.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#4 Préproduction</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Une fois l’équipe constituée, la préproduction peut commencer (écriture, recherche de contenu, recherche de financements, <i>etc.</i>).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#5 Production</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Déplacements et tournage du projet.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#6 Post-production</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Montage, étalonnage, effets spéciaux et mixage du projet.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#7 Communication et diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>L'association se charge de diffuser le documentaire grâce à ses réseaux (diffusion en ligne, ciné-débats et festivals).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup2\">
\t\t\t\t\t\t\t\t\t\t<h5>Collaborer</h5>
\t\t\t\t\t\t\t\t\t\t<p>En réunissant les <b>savoir-faire</b> de nos bénévoles sous un même projet <b>collaboratif</b>, nous disposons de toutes les <b>compétences</b> nécessaires à la réalisation de documentaires <b>qualitatifs</b> dont la seule limite est notre <b>créativité</b>. L'entraide est importante et permet à chacun de <b>transmettre tout en progressant</b>. Nous comptons des débutants, amateurs ou experts parmis nos bénévoles. En quelque sorte, Low Production est une <b>école audiovisuelle</b> par et pour ses participants.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Apprendre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nos bénévoles sont aussi bien amateurs que professionnels. Low Production est une structure idéale pour apprendre les métiers de l'audiovisuel autour d'un projet pratique.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Partager</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Parce que nous pensons que le matériel audiovisuel est inaccessible pour de nombreuses personnes, Low Production le met à disposition gratuitement lors de ses activités. Ainsi partagé entre plusieurs personnes, notre matériel a une véritable utilité et ne reste pas au fond d'un placard.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Transmettre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Chacun peut apporter son expertise, ses conseils et ses expériences. Notre association est un lieu de partage horizontal.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup3\">
\t\t\t\t\t\t\t\t\t\t<h5>Diffuser</h5>
\t\t\t\t\t\t\t\t\t\t<p>Les projets réalisés chez Low Production sont diffusés sous la <b>licence libre</b> Creative Commons <a href=\"https://creativecommons.org/licenses/by-sa/4.0/deed.fr\">CC BY-SA 4.0</a>. Ils peuvent ainsi être <b>partagés</b> et <b>adaptés</b> gratuitement. En travaillant ainsi, nous assurons une <b>équité dans la distribution et la diffusion</b> de nos réalisations. Lorsque la diffusion se fait dans un cadre <b>commercial</b>, nous encourageons les diffuseurs à <b>soutenir</b> l'association afin de <b>financer</b> et <b>encourager</b> de <b>futurs projets</b>. Notre fonctionnement est semblable à un spectacle où l'entrée est à <b>prix libre</b>.</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Le partage et l'adaptation de nos projets sont libres et gratuits, même à des fins commerciales.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Présentation de l'association</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Les ciné-débats se prètent à la diffusion des oeuvres de Low Production puisqu'ils permettent de présenter l'association et les démarches associées à chaque film (collaboration, évaluation environnementale, <i>etc.</i>). N'hésitez pas à vous rapprocher de notre structure pour en savoir davantage ou pour organiser une diffusion avec l'un de nos bénévoles.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Soutien</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Low Production est une association à but non lucratif. La diffusion libre et publique de ses oeuvres leur permet un accès équitable. Dans le cadre d'une diffusion commerciale, nous encourageons les organisateurs à demander une entrée à prix libre pour soutenir l'association et financer ses futurs projets.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup4\">
\t\t\t\t\t\t\t\t\t\t<h5>Réduire</h5>
\t\t\t\t\t\t\t\t\t\t<p>Parce que nous considérons les arts audiovisuels comme une véritable source d'<b>émerveillement</b> et d'<b>engagement</b>, nous lui cherchons une place compatible avec le monde de <b>demain</b>. Low Production est animée par une question : <i>comment conter l'environnement sans l'impacter ?</i>
\t\t\t\t\t\t\t\t\t\t<br><br>Pour <b>répondre</b> à cette question, nous accompagnons nos projets audiovisuels d'une <b>analyse de cycle de vie</b> (ACV). Cette méthode d'<b>évaluation environnementale</b> permet d'étudier selon plusieurs sphères de dommage l'impact de ce qui compose notre projet. Nous sommes alors en mesure d'<b>identifier</b> les composantes à <b>fort impact négatif</b> et ainsi les <b>réduire</b> lors de nos prochains projets.
\t\t\t\t\t\t\t\t\t\tCette méthodologie est <b>au coeur</b> du projet et de son évolution : nous cherchons à réduire continuellement l'impact environnemental de nos réalisations.
\t\t\t\t\t\t\t\t\t\t<br><br>Le <b>défi est de taille</b> mais il s'avère nécessaire. C'est pourquoi nous <b>expérimentons</b> et diffusons en toute <b>transparence</b> nos résultats. Nos études sont ainsi <b>partagées librement</b> et peuvent servir de ressource aux structures souhaitant <b>initier leur transition</b>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Collecte de données</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nous collectons des données tout au long du cycle de vie de nos documentaires (de l'idée à la diffusion).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Analyse de cycle de vie</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Une fois le projet documentaire terminé, nous réalisons une analyse de cycle de vie (ACV) pour cibler les impacts négatifs principaux selon plusieurs sphères de dommage.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Conclusions et pistes de réduction</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>À partir des résultats de l'ACV, nous pouvons proposer des pistes de réduction pour réduire chaque impact négatif identifié.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#4 Mise en oeuvre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Après concertation de l'association, nous mettons en place les solutions précedemment identifiées et réalisables.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#5 Publication</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nous publions les résultats et constats de l'analyse de cycle de vie dans un rapport dedié à chaque projet documentaire afin de rendre accessible ces informations et peut-être aider d'autres acteurs à engager leur transition.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#6 Suivi et recommencement</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Chaque action de réduction mise en oeuvre permet aux projets documentaires futurs d'être de moins en moins impactants. Cela ne doit pas empêcher la réalisation de nouvelles études afin d'orienter son développement vers une réduction continue et ambitieuse de ses impacts environnementaux.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row m-top-50\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<a #id=\"bd-button\" class=\"btn btn-main wow fadeInUp\" href=\"";
        // line 432
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("story");
        echo "\" data-wow-duration=\"1s\" data-wow-delay=\"0.8s\">Découvrir les origines du projet<br>en bande dessinée</a>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Service -->

<!-- Start Video Section -->
<div id=\"join\" class=\"video-bg video-wrapper\">
\t\t<div class=\"video-overlay\"></div>
\t\t<a id=\"vidpause\" class='btn btn-main btn-transparent-light'><i class=\"fa fa-pause\"></i></a>
\t\t<video style=\"width:100%;\" autoplay muted loop id=\"bgvid\">
\t\t\t\t<source src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/video-bg.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
\t\t</video>
\t\t<img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/video-bg.jpg"), "html", null, true);
        echo "\"></img>
\t\t<div class=\"text-video-bg\">
\t\t\t\t<div class=\"video-caption text-center white-color\">
\t\t\t\t\t\t<h2 class=\"p-top-20\">Nous soutenir</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white\"></div>
\t\t\t\t\t\t<h6 class=\"p-20\">Il est possible de nous soutenir en participant à nos missions ou en faisant une donation à l’association. </h6>
\t\t\t\t\t\t<a href='";
        // line 453
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("support");
        echo "' class='m-top-20 btn btn-main btn-white wow fadeInUp animated' data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">En savoir plus</a>
\t\t\t\t</div>
\t\t</div>
</div>
<!-- End Video Section -->

<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center m-bottom-30\">
\t\t\t\t\t\t<h2><strong>Nos derniers films</strong></h2>
\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".done\" class=\"iso-button\">Réalisés</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".doing\" class=\"iso-button\">En cours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".todo\" class=\"iso-button\">À venir</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3 gutter\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item doing\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 482
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie");
        echo "\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/portfolio/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Koméla</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Portfolio Item -->

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item done\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 501
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie");
        echo "\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/portfolio/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Berr(k)e</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Portfolio Item -->

\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Testimonial -->
<section id=\"testimonials\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url(";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial-bg.jpg"), "html", null, true);
        echo "\" data-stellar-background-ratio=\"0.1\">
\t\t<!-- Section Title -->
\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Ils nous soutiennent</h2>
\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t</div>
\t\t<!-- === Testimonials === -->
\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">

\t\t\t\t<!-- === Testimonial item 1 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Residence you satisfied and rapturous certainty two. Procured outweigh as outlived so so. On in bringing graceful proposal blessing of marriage outlived. Son rent face our loud near.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Yann Arthus Bertrand</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe, reporter, réalisateur et militant écologiste</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 2 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Alexis Rosenfeld</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe et explorateur</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 3 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Marie Amiguet</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Réalisatrice spécialisée dans le reportage animalier</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 4 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Julien Wosnitza</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Militant et fondateur de Wings Of The Ocean</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 5 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">René Heuzey</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Plongeur professionnel, réalisateur et producteur de films sous-marins</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 6 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Jérémie Villet</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe animalier</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 7 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/7.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Cyril Dion</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Écrivain, réalisateur et militant écologiste</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 8 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/testimonial/8.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Marie-Monique Robin</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Réalisatrice et journaliste</h5>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Testimonial -->

<!-- Start blog -->
<section id=\"blog\" class=\"p-top-80 p-bottom-80\">
\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Dernières actualités</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Retrouvez ci-dessous nos dernières actualités.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- === blog === -->
\t\t\t\t\t\t<div id=\"owl-blog\" class=\"owl-carousel owl-theme\">

\t\t\t\t\t\t\t\t<!-- === Blog item 1 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 637
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/news/b1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 644
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Le projet Koméla lancé</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 646
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 2 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 653
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/news/b2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 06 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>Claire Monchauzou</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 660
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Berr(k)e primé</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 662
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 3 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 669
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/news/b3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 02 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> Chloé Marzin</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 676
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Bonne année !</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 678
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 4 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 685
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/news/b4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 19 Décembre 2021</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 692
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Nouveaux projets</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 694
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>

<!-- Start client -->
<section id=\"client\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t</div>
\t\t<!-- === Clients === -->
\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div id=\"owl-clients\" class=\"owl-carousel owl-theme client text-center\">

\t\t\t\t\t\t\t\t<!-- === Partner 1 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.arte.tv/fr/\"><img class=\"img-responsive\" src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 2 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.cnc.fr/\"><img class=\"img-responsive\" src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 3 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.ademe.fr/\"><img class=\"img-responsive\" src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 4 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.france.tv/\"><img class=\"img-responsive\" src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 5 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://secoya-ecotournage.com/\"><img class=\"img-responsive\" src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/5.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 6 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.ecoprod.com/fr/\"><img class=\"img-responsive\" src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/6.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 7 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://regionreunion.com/\"><img class=\"img-responsive\" src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/7.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 8 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://regard-du-vivant.fr/\"><img class=\"img-responsive\" src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/partners/8.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End client -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 760
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 761
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<!-- RS Plugin Extensions -->
\t<script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/js/visible-jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/js/video-bg.js"), "html", null, true);
        echo "\"></script>

\t<!-- Components Plugin -->
\t<script src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/smooth-scroll.js\"></script>
\t<script src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/jquery.appear.js\"></script>
\t<script src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/jquery.stellar.min.js\"></script>
\t<script src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 776
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
\t<script src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/wow.min.js\"></script>
\t<script src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "inc/owlcarousel/js/owl.carousel.min.js\"></script>
\t<script src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "inc/revolution/js/jquery.themepunch.revolution.min.js\"></script>

\t<!-- Slider configuration -->
\t<script>
\t\tvar tpj = jQuery;

\t\tvar revapi280;
\t\ttpj(document).ready(function() {
\t\t\t\tif (tpj(\"#rev_slider_nagency\").revolution == undefined) {
\t\t\t\t\t\trevslider_showDoubleJqueryError(\"#rev_slider_nagency\");
\t\t\t\t} else {
\t\t\t\t\t\trevapi280 = tpj(\"#rev_slider_nagency\").show().revolution({
\t\t\t\t\t\t\t\tsliderType: \"standard\",
\t\t\t\t\t\t\t\tsliderLayout: \"fullscreen\",
\t\t\t\t\t\t\t\tdottedOverlay: \"none\",
\t\t\t\t\t\t\t\tdelay: 90000,
\t\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\t\tkeyboardNavigation:\"off\",
\t\t\t\t\t\t\t\t\tkeyboard_direction: \"horizontal\",
\t\t\t\t\t\t\t\t\tmouseScrollNavigation:\"off\",
\t\t\t\t\t\t\t\t\tonHoverStop:\"off\",
\t\t\t\t\t\t\t\t\ttouch:{
\t\t\t\t\t\t\t\t\t\ttouchenabled:\"on\",
\t\t\t\t\t\t\t\t\t\tswipe_threshold: 75,
\t\t\t\t\t\t\t\t\t\tswipe_min_touches: 1,
\t\t\t\t\t\t\t\t\t\tswipe_direction: \"horizontal\",
\t\t\t\t\t\t\t\t\t\tdrag_block_vertical: false
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t,
\t\t\t\t\t\t\t\t\tarrows: {
\t\t\t\t\t\t\t\t\t\t\t\tstyle: \"uranus\",
\t\t\t\t\t\t\t\t\t\t\t\tenable: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_onmobile: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_under: 496,
\t\t\t\t\t\t\t\t\t\t\t\thide_onleave: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_delay: 200,
\t\t\t\t\t\t\t\t\t\t\t\thide_delay_mobile: 1200,
\t\t\t\t\t\t\t\t\t\t\t\ttmp: '',
\t\t\t\t\t\t\t\t\t\t\t\tleft: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_align: \"left\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_align: \"center\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_offset: 20,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_offset: 0
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tright: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_align: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_align: \"center\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_offset: 20,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_offset: 0
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tresponsiveLevels: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tvisibilityLevels: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tgridwidth: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tgridheight: [868, 768, 960, 720],
\t\t\t\t\t\t\t\tlazyType: \"all\",
\t\t\t\t\t\t\t\tparallax: {
\t\t\t\t\t\t\t\t\ttype:\"mouse+scroll\",
\t\t\t\t\t\t\t\t\torigo:\"slidercenter\",
\t\t\t\t\t\t\t\t\tspeed:2000,
\t\t\t\t\t\t\t\t\tlevels:[2,3,4,5,6,7,12,16,10,50],
\t\t\t\t\t\t\t\t\tdisable_onmobile:\"on\"
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tshadow: 0,
\t\t\t\t\t\t\t\tspinner: \"spinner2\",
\t\t\t\t\t\t\t\tautoHeight: \"off\",
\t\t\t\t\t\t\t\tfullScreenAutoWidth: \"off\",
\t\t\t\t\t\t\t\tfullScreenAlignForce: \"off\",
\t\t\t\t\t\t\t\tfullScreenOffsetContainer: \"\",
\t\t\t\t\t\t\t\tfullScreenOffset: \"0\",
\t\t\t\t\t\t\t\tdisableProgressBar: \"on\",
\t\t\t\t\t\t\t\thideThumbsOnMobile: \"off\",
\t\t\t\t\t\t\t\thideSliderAtLimit: 0,
\t\t\t\t\t\t\t\thideCaptionAtLimit: 0,
\t\t\t\t\t\t\t\thideAllCaptionAtLilmit: 0,
\t\t\t\t\t\t\t\tdebugMode: false,
\t\t\t\t\t\t\t\tfallbacks: {
\t\t\t\t\t\t\t\t\t\tsimplifyAll: \"off\",
\t\t\t\t\t\t\t\t\t\tdisableFocusListener: false,
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t}
\t\t}); /*ready*/
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1074 => 780,  1070 => 779,  1066 => 778,  1062 => 777,  1058 => 776,  1054 => 775,  1050 => 774,  1046 => 773,  1042 => 772,  1036 => 769,  1032 => 768,  1028 => 767,  1024 => 766,  1020 => 765,  1016 => 764,  1009 => 761,  999 => 760,  980 => 750,  972 => 745,  964 => 740,  956 => 735,  948 => 730,  940 => 725,  932 => 720,  924 => 715,  900 => 694,  895 => 692,  883 => 685,  873 => 678,  868 => 676,  856 => 669,  846 => 662,  841 => 660,  829 => 653,  819 => 646,  814 => 644,  802 => 637,  769 => 607,  756 => 597,  743 => 587,  730 => 577,  717 => 567,  704 => 557,  691 => 547,  678 => 537,  662 => 524,  638 => 503,  633 => 501,  613 => 484,  608 => 482,  576 => 453,  567 => 447,  562 => 445,  546 => 432,  277 => 166,  201 => 93,  124 => 19,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Accueil
{% endblock %}

{% block home %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Start Slider -->
<section id=\"slider\">
\t<div class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"agency-website\" id=\"rev_slider_280_1_wrapper\" style=\"background-color:#fff;padding:0px;height:1080px;\">
\t\t<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
\t\t<div class=\"rev_slider fullscreenbanner\" id=\"rev_slider_nagency\" style=\"display:none;\">
\t\t\t\t<ul style=\"display:none;\">

\t\t\t\t\t<!-- slider Item 1 -->
\t\t\t\t\t<li data-index=\"rs-1\" data-transition=\"fadetotopfadefrombottom\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"N.Agency\" data-description=\"\">
\t\t\t\t\t\t<img src=\"{{asset('bundles/web/img/slider/s1.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Low Production
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Association de production<br>audiovisuelle engagée</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#service' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</li>

\t\t\t\t\t<!-- slider Item 2 -->
\t\t\t\t\t<li data-index=\"rs-3\" data-transition=\"slideremoveright\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t<img src=\"{{asset('bundles/web/img/slider/s2.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme black-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Documentaires engagés
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme black-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Sur les thématiques sociales<br>et environnementales</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#portfolio' class='btn btn-main btn-black'>En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- slider Item 3 -->
\t\t\t\t\t<li data-index=\"rs-2\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t<img src=\"{{asset('bundles/web/img/slider/s3.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous soutenir
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\"><center>Vous souhaitez rejoindre<br>l'aventure ou nous aider ?</center>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#join' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t</div>
\t</div>
</section>
<!-- End Slider -->

<!-- Start Service -->
<section id=\"service\" class=\"p-top-80 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Qui sommes-nous ?</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tLow Production est une association de <b>production audiovisuelle</b> engagée dans la <b>transition écologique</b>. Nous mettons en relation des bénévoles et <b>mutualisons des compétences</b> pour réaliser des <b>documentaires</b> sur les thématiques <b>sociales et environnementales</b>, en veillant à <b>minimiser</b> leur impact.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Que vous soyez réalisateur, ingénieur du son, graphiste, musicien... <b>professionnel</b> ou <b>amateur</b>, une place vous attend pour collaborer à la <b>réalisation</b> de projets documentaires <b>libres</b>, <b>collaboratifs</b>, à <b>faible impact</b> et <b>engagés</b>.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Low Production s'oriente autour de <b>quatre axes</b> principaux :
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- Service Item 1 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La réalisation</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Réaliser des documentaires engagés à <b>impact positif</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup1\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 2 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La collaboration</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Collaborer</b> à plusieurs bénévoles et <b>mutualiser</b> des compétences au service d'un projet documentaire <b>commun</b>.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup2\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 3 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 m-bottom-20\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La libération</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Créer</b> et <b>diffuser librement</b> nos oeuvres aux fins de les rendre <b>accessibles</b> au plus grand nombre.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup3\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Service Item 4 -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"service wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-leaf\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>La réduction</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"service-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Réduire</b> continuellement notre <b>impact environnemental</b> en analysant le <b>cycle de vie</b> de nos projets.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#myGroup\" data-scroll class=\"btn-more\" data-toggle=\"collapse\" data-target=\"#myGroup4\" data-parent=\"#myGroup\">En savoir plus</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"myGroup\">
\t\t\t\t\t\t<div class=\"accordion-group \">
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup1\">
\t\t\t\t\t\t\t\t\t\t<h5>Réaliser</h5>
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons à nos bénévoles un cadre pour travailler <b>ensemble</b> sur un projet audiovisuel <b>commun</b>. Réalisateurs, ingénieurs du son, scénaristes, photographes, vidéastes, musiciens... forment ainsi un <b>collectif</b> de <b>bénévoles</b> réunit derrière la création de <b>documentaires engagés</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>

\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Proposition de projet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Tout membre peut présenter un projet de documentaire qui sera étudié et validé par l'ensemble de l'association.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Choix du projet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Les membres de l'association choisissent ensemble un projet à réaliser avec l'aide du bureau qui veille à sa faisabilité.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Constitution de l'équipe</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>En utilisant les réseaux de l’association, une équipe de bénévoles est montée pour répondre au projet selectionné.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#4 Préproduction</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Une fois l’équipe constituée, la préproduction peut commencer (écriture, recherche de contenu, recherche de financements, <i>etc.</i>).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#5 Production</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Déplacements et tournage du projet.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#6 Post-production</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Montage, étalonnage, effets spéciaux et mixage du projet.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#7 Communication et diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>L'association se charge de diffuser le documentaire grâce à ses réseaux (diffusion en ligne, ciné-débats et festivals).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup2\">
\t\t\t\t\t\t\t\t\t\t<h5>Collaborer</h5>
\t\t\t\t\t\t\t\t\t\t<p>En réunissant les <b>savoir-faire</b> de nos bénévoles sous un même projet <b>collaboratif</b>, nous disposons de toutes les <b>compétences</b> nécessaires à la réalisation de documentaires <b>qualitatifs</b> dont la seule limite est notre <b>créativité</b>. L'entraide est importante et permet à chacun de <b>transmettre tout en progressant</b>. Nous comptons des débutants, amateurs ou experts parmis nos bénévoles. En quelque sorte, Low Production est une <b>école audiovisuelle</b> par et pour ses participants.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Apprendre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nos bénévoles sont aussi bien amateurs que professionnels. Low Production est une structure idéale pour apprendre les métiers de l'audiovisuel autour d'un projet pratique.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Partager</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Parce que nous pensons que le matériel audiovisuel est inaccessible pour de nombreuses personnes, Low Production le met à disposition gratuitement lors de ses activités. Ainsi partagé entre plusieurs personnes, notre matériel a une véritable utilité et ne reste pas au fond d'un placard.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Transmettre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Chacun peut apporter son expertise, ses conseils et ses expériences. Notre association est un lieu de partage horizontal.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup3\">
\t\t\t\t\t\t\t\t\t\t<h5>Diffuser</h5>
\t\t\t\t\t\t\t\t\t\t<p>Les projets réalisés chez Low Production sont diffusés sous la <b>licence libre</b> Creative Commons <a href=\"https://creativecommons.org/licenses/by-sa/4.0/deed.fr\">CC BY-SA 4.0</a>. Ils peuvent ainsi être <b>partagés</b> et <b>adaptés</b> gratuitement. En travaillant ainsi, nous assurons une <b>équité dans la distribution et la diffusion</b> de nos réalisations. Lorsque la diffusion se fait dans un cadre <b>commercial</b>, nous encourageons les diffuseurs à <b>soutenir</b> l'association afin de <b>financer</b> et <b>encourager</b> de <b>futurs projets</b>. Notre fonctionnement est semblable à un spectacle où l'entrée est à <b>prix libre</b>.</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Le partage et l'adaptation de nos projets sont libres et gratuits, même à des fins commerciales.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Présentation de l'association</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Les ciné-débats se prètent à la diffusion des oeuvres de Low Production puisqu'ils permettent de présenter l'association et les démarches associées à chaque film (collaboration, évaluation environnementale, <i>etc.</i>). N'hésitez pas à vous rapprocher de notre structure pour en savoir davantage ou pour organiser une diffusion avec l'un de nos bénévoles.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Soutien</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Low Production est une association à but non lucratif. La diffusion libre et publique de ses oeuvres leur permet un accès équitable. Dans le cadre d'une diffusion commerciale, nous encourageons les organisateurs à demander une entrée à prix libre pour soutenir l'association et financer ses futurs projets.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"myGroup4\">
\t\t\t\t\t\t\t\t\t\t<h5>Réduire</h5>
\t\t\t\t\t\t\t\t\t\t<p>Parce que nous considérons les arts audiovisuels comme une véritable source d'<b>émerveillement</b> et d'<b>engagement</b>, nous lui cherchons une place compatible avec le monde de <b>demain</b>. Low Production est animée par une question : <i>comment conter l'environnement sans l'impacter ?</i>
\t\t\t\t\t\t\t\t\t\t<br><br>Pour <b>répondre</b> à cette question, nous accompagnons nos projets audiovisuels d'une <b>analyse de cycle de vie</b> (ACV). Cette méthode d'<b>évaluation environnementale</b> permet d'étudier selon plusieurs sphères de dommage l'impact de ce qui compose notre projet. Nous sommes alors en mesure d'<b>identifier</b> les composantes à <b>fort impact négatif</b> et ainsi les <b>réduire</b> lors de nos prochains projets.
\t\t\t\t\t\t\t\t\t\tCette méthodologie est <b>au coeur</b> du projet et de son évolution : nous cherchons à réduire continuellement l'impact environnemental de nos réalisations.
\t\t\t\t\t\t\t\t\t\t<br><br>Le <b>défi est de taille</b> mais il s'avère nécessaire. C'est pourquoi nous <b>expérimentons</b> et diffusons en toute <b>transparence</b> nos résultats. Nos études sont ainsi <b>partagées librement</b> et peuvent servir de ressource aux structures souhaitant <b>initier leur transition</b>.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Collecte de données</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nous collectons des données tout au long du cycle de vie de nos documentaires (de l'idée à la diffusion).</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#2 Analyse de cycle de vie</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Une fois le projet documentaire terminé, nous réalisons une analyse de cycle de vie (ACV) pour cibler les impacts négatifs principaux selon plusieurs sphères de dommage.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#3 Conclusions et pistes de réduction</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>À partir des résultats de l'ACV, nous pouvons proposer des pistes de réduction pour réduire chaque impact négatif identifié.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#4 Mise en oeuvre</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Après concertation de l'association, nous mettons en place les solutions précedemment identifiées et réalisables.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#5 Publication</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nous publions les résultats et constats de l'analyse de cycle de vie dans un rapport dedié à chaque projet documentaire afin de rendre accessible ces informations et peut-être aider d'autres acteurs à engager leur transition.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#6 Suivi et recommencement</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Chaque action de réduction mise en oeuvre permet aux projets documentaires futurs d'être de moins en moins impactants. Cela ne doit pas empêcher la réalisation de nouvelles études afin d'orienter son développement vers une réduction continue et ambitieuse de ses impacts environnementaux.</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row m-top-50\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<a #id=\"bd-button\" class=\"btn btn-main wow fadeInUp\" href=\"{{url(\"story\")}}\" data-wow-duration=\"1s\" data-wow-delay=\"0.8s\">Découvrir les origines du projet<br>en bande dessinée</a>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Service -->

<!-- Start Video Section -->
<div id=\"join\" class=\"video-bg video-wrapper\">
\t\t<div class=\"video-overlay\"></div>
\t\t<a id=\"vidpause\" class='btn btn-main btn-transparent-light'><i class=\"fa fa-pause\"></i></a>
\t\t<video style=\"width:100%;\" autoplay muted loop id=\"bgvid\">
\t\t\t\t<source src=\"{{ asset('bundles/web/img/video-bg.mp4')}}\" type=\"video/mp4\">
\t\t</video>
\t\t<img src=\"{{ asset('bundles/web/img/video-bg.jpg')}}\"></img>
\t\t<div class=\"text-video-bg\">
\t\t\t\t<div class=\"video-caption text-center white-color\">
\t\t\t\t\t\t<h2 class=\"p-top-20\">Nous soutenir</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white\"></div>
\t\t\t\t\t\t<h6 class=\"p-20\">Il est possible de nous soutenir en participant à nos missions ou en faisant une donation à l’association. </h6>
\t\t\t\t\t\t<a href='{{url(\"support\")}}' class='m-top-20 btn btn-main btn-white wow fadeInUp animated' data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">En savoir plus</a>
\t\t\t\t</div>
\t\t</div>
</div>
<!-- End Video Section -->

<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center m-bottom-30\">
\t\t\t\t\t\t<h2><strong>Nos derniers films</strong></h2>
\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".done\" class=\"iso-button\">Réalisés</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".doing\" class=\"iso-button\">En cours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".todo\" class=\"iso-button\">À venir</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3 gutter\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item doing\">
\t\t\t\t\t\t\t\t<a href=\"{{url(\"movie\")}}\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/web/img/portfolio/1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Koméla</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Portfolio Item -->

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item done\">
\t\t\t\t\t\t\t\t<a href=\"{{url(\"movie\")}}\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/web/img/portfolio/2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Berr(k)e</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Portfolio Item -->

\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Testimonial -->
<section id=\"testimonials\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url({{asset('bundles/web/img/testimonial-bg.jpg')}}\" data-stellar-background-ratio=\"0.1\">
\t\t<!-- Section Title -->
\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Ils nous soutiennent</h2>
\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t</div>
\t\t<!-- === Testimonials === -->
\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">

\t\t\t\t<!-- === Testimonial item 1 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Residence you satisfied and rapturous certainty two. Procured outweigh as outlived so so. On in bringing graceful proposal blessing of marriage outlived. Son rent face our loud near.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Yann Arthus Bertrand</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe, reporter, réalisateur et militant écologiste</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 2 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Alexis Rosenfeld</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe et explorateur</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 3 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/3.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Marie Amiguet</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Réalisatrice spécialisée dans le reportage animalier</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 4 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/4.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Julien Wosnitza</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Militant et fondateur de Wings Of The Ocean</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 5 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/5.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">René Heuzey</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Plongeur professionnel, réalisateur et producteur de films sous-marins</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 6 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/6.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Jérémie Villet</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Photographe animalier</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 7 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/7.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Cyril Dion</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Écrivain, réalisateur et militant écologiste</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 8 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/testimonial/8.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Marie-Monique Robin</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Réalisatrice et journaliste</h5>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Testimonial -->

<!-- Start blog -->
<section id=\"blog\" class=\"p-top-80 p-bottom-80\">
\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Dernières actualités</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Retrouvez ci-dessous nos dernières actualités.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- === blog === -->
\t\t\t\t\t\t<div id=\"owl-blog\" class=\"owl-carousel owl-theme\">

\t\t\t\t\t\t\t\t<!-- === Blog item 1 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\")}}\"><img src=\"{{ asset('bundles/web/img/news/b1.jpg')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\")}}\">Le projet Koméla lancé</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\")}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 2 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\")}}\"><img src=\"{{ asset('bundles/web/img/news/b2.jpg')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 06 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>Claire Monchauzou</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\")}}\">Berr(k)e primé</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\")}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 3 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\")}}\"><img src=\"{{ asset('bundles/web/img/news/b3.jpg')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 02 Janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> Chloé Marzin</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\")}}\">Bonne année !</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\")}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Blog item 4 === -->
\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\")}}\"><img src=\"{{ asset('bundles/web/img/news/b4.jpg')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 19 Décembre 2021</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\")}}\">Nouveaux projets</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\")}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>

<!-- Start client -->
<section id=\"client\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t</div>
\t\t<!-- === Clients === -->
\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div id=\"owl-clients\" class=\"owl-carousel owl-theme client text-center\">

\t\t\t\t\t\t\t\t<!-- === Partner 1 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.arte.tv/fr/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/1.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 2 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.cnc.fr/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/2.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 3 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.ademe.fr/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/3.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 4 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.france.tv/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/4.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 5 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://secoya-ecotournage.com/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/5.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 6 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.ecoprod.com/fr/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/6.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 7 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://regionreunion.com/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/7.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- === Partner 8 === -->
\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://regard-du-vivant.fr/\"><img class=\"img-responsive\" src=\"{{ asset('bundles/web/img/partners/8.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End client -->

{% endblock %}

{% block js %}
\t{{parent()}}

\t<!-- RS Plugin Extensions -->
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.carousel.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.migration.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/js/visible-jquery.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/js/video-bg.js')}}\"></script>

\t<!-- Components Plugin -->
\t<script src=\"{{ asset('bundles/web/')}}js/smooth-scroll.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/jquery.appear.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/jquery.stellar.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/isotope.pkgd.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/wow.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}inc/owlcarousel/js/owl.carousel.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}inc/revolution/js/jquery.themepunch.revolution.min.js\"></script>

\t<!-- Slider configuration -->
\t<script>
\t\tvar tpj = jQuery;

\t\tvar revapi280;
\t\ttpj(document).ready(function() {
\t\t\t\tif (tpj(\"#rev_slider_nagency\").revolution == undefined) {
\t\t\t\t\t\trevslider_showDoubleJqueryError(\"#rev_slider_nagency\");
\t\t\t\t} else {
\t\t\t\t\t\trevapi280 = tpj(\"#rev_slider_nagency\").show().revolution({
\t\t\t\t\t\t\t\tsliderType: \"standard\",
\t\t\t\t\t\t\t\tsliderLayout: \"fullscreen\",
\t\t\t\t\t\t\t\tdottedOverlay: \"none\",
\t\t\t\t\t\t\t\tdelay: 90000,
\t\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\t\tkeyboardNavigation:\"off\",
\t\t\t\t\t\t\t\t\tkeyboard_direction: \"horizontal\",
\t\t\t\t\t\t\t\t\tmouseScrollNavigation:\"off\",
\t\t\t\t\t\t\t\t\tonHoverStop:\"off\",
\t\t\t\t\t\t\t\t\ttouch:{
\t\t\t\t\t\t\t\t\t\ttouchenabled:\"on\",
\t\t\t\t\t\t\t\t\t\tswipe_threshold: 75,
\t\t\t\t\t\t\t\t\t\tswipe_min_touches: 1,
\t\t\t\t\t\t\t\t\t\tswipe_direction: \"horizontal\",
\t\t\t\t\t\t\t\t\t\tdrag_block_vertical: false
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t,
\t\t\t\t\t\t\t\t\tarrows: {
\t\t\t\t\t\t\t\t\t\t\t\tstyle: \"uranus\",
\t\t\t\t\t\t\t\t\t\t\t\tenable: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_onmobile: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_under: 496,
\t\t\t\t\t\t\t\t\t\t\t\thide_onleave: true,
\t\t\t\t\t\t\t\t\t\t\t\thide_delay: 200,
\t\t\t\t\t\t\t\t\t\t\t\thide_delay_mobile: 1200,
\t\t\t\t\t\t\t\t\t\t\t\ttmp: '',
\t\t\t\t\t\t\t\t\t\t\t\tleft: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_align: \"left\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_align: \"center\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_offset: 20,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_offset: 0
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tright: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_align: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_align: \"center\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\th_offset: 20,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tv_offset: 0
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tresponsiveLevels: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tvisibilityLevels: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tgridwidth: [1200, 991, 767, 480],
\t\t\t\t\t\t\t\tgridheight: [868, 768, 960, 720],
\t\t\t\t\t\t\t\tlazyType: \"all\",
\t\t\t\t\t\t\t\tparallax: {
\t\t\t\t\t\t\t\t\ttype:\"mouse+scroll\",
\t\t\t\t\t\t\t\t\torigo:\"slidercenter\",
\t\t\t\t\t\t\t\t\tspeed:2000,
\t\t\t\t\t\t\t\t\tlevels:[2,3,4,5,6,7,12,16,10,50],
\t\t\t\t\t\t\t\t\tdisable_onmobile:\"on\"
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tshadow: 0,
\t\t\t\t\t\t\t\tspinner: \"spinner2\",
\t\t\t\t\t\t\t\tautoHeight: \"off\",
\t\t\t\t\t\t\t\tfullScreenAutoWidth: \"off\",
\t\t\t\t\t\t\t\tfullScreenAlignForce: \"off\",
\t\t\t\t\t\t\t\tfullScreenOffsetContainer: \"\",
\t\t\t\t\t\t\t\tfullScreenOffset: \"0\",
\t\t\t\t\t\t\t\tdisableProgressBar: \"on\",
\t\t\t\t\t\t\t\thideThumbsOnMobile: \"off\",
\t\t\t\t\t\t\t\thideSliderAtLimit: 0,
\t\t\t\t\t\t\t\thideCaptionAtLimit: 0,
\t\t\t\t\t\t\t\thideAllCaptionAtLilmit: 0,
\t\t\t\t\t\t\t\tdebugMode: false,
\t\t\t\t\t\t\t\tfallbacks: {
\t\t\t\t\t\t\t\t\t\tsimplifyAll: \"off\",
\t\t\t\t\t\t\t\t\t\tdisableFocusListener: false,
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t}
\t\t}); /*ready*/
\t</script>

{% endblock %}
", "gentle_chef/home.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\home.html.twig");
    }
}
