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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/slider/s1.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/slider/s2.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/slider/s3.jpg"), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t\tLow Production est une association de <b>production audiovisuelle</b> engagée dans la <b>transition écologique</b>. Nous mettons en relation des bénévoles et <b>mutualisons des compétences</b> pour réaliser des <b>documentaires</b> sur les thématiques <b>sociales et environnementales</b>, en veillant à <b>minimiser</b> leur impact. N’ayant pas de but lucratif et fonctionnant principalement sur la base du bénévolat, nous <b>expérimentons</b> et <b>documentons</b> des techniques de production à <b>faible impact environnemental</b> pour imaginer les métiers audiovisuels de <b>demain</b>.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Que vous soyez réalisateur, ingénieur du son, graphiste, musicien... <b>professionnel</b> ou <b>amateur</b>, une place vous attend pour collaborer à la <b>réalisation</b> de projets documentaires <b>libres</b>, <b>collaboratifs</b>, à <b>faible impact environnemental</b> et <b>engagés</b>.
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
\t\t\t\t\t\t\t\t\t\t<h4>La diffusion libre</h4>
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
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons à nos bénévoles un cadre pour travailler <b>ensemble</b> sur un projet audiovisuel <b>commun</b>. Réalisateurs, ingénieurs du son, scénaristes, photographes, vidéastes, musiciens... forment ainsi un <b>collectif</b> de <b>bénévoles</b> réuni derrière la création de <b>documentaires engagés</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>

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
\t\t\t\t\t\t\t\t\t\t<h5>Diffuser librement</h5>
\t\t\t\t\t\t\t\t\t\t<p>Les projets réalisés chez Low Production sont diffusés sous <b>licence libre</b> Creative Commons. Ils peuvent ainsi être <b>partagés</b> et <b>adaptés</b> gratuitement. En travaillant ainsi, nous assurons une <b>équité dans la distribution et la diffusion</b> de nos réalisations. Lorsque la diffusion se fait dans un cadre <b>commercial</b>, nous encourageons les diffuseurs à <b>soutenir</b> l'association afin de <b>financer</b> et <b>encourager</b> de <b>futurs projets</b>. Notre fonctionnement est semblable à un spectacle où l'entrée est à <b>prix libre</b>.</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Le partage et la diffusion de nos projets sont libres et gratuits, même à des fins commerciales.</p>
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
        echo "\" data-wow-duration=\"1s\" data-wow-delay=\"0.8s\">Découvrir les origines du projet</a>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/video-bg.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
\t\t</video>
\t\t<img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/video-bg.jpg"), "html", null, true);
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

";
        // line 459
        if (((array_key_exists("projects", $context) &&  !(null === (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 459, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 459, $this->source); })())) > 0))) {
            // line 460
            echo "\t\t<!-- Start Portfolio -->
\t\t<section id=\"portfolio\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-30\">
\t\t\t\t\t\t\t\t<h2><strong>Nos derniers films</strong></h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t\t\t<ul class=\"pf-filter text-center list-inline\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t\t\t";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 473, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 474
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 474), "html", null, true);
                echo "\" class=\"iso-button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 474), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 476
            echo "\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<!-- Portfolio -->
\t\t\t\t\t\t<div class=\"portfolio portfolio-isotope col-3 gutter\">
\t\t\t\t\t\t\t\t";
            // line 480
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 480, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 481
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pf-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["project"], "state", [], "any", true, true, false, 481) &&  !(null === twig_get_attribute($this->env, $this->source, $context["project"], "state", [], "any", false, false, false, 481)))) {
                    echo "c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "state", [], "any", false, false, false, 481), "id", [], "any", false, false, false, 481), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 482
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 482)]), "html", null, true);
                echo "\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 484
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["project"], "picture", [], "any", false, false, false, 484), "imageFile")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "picture", [], "any", false, false, false, 484), "name", [], "any", false, false, false, 484), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">";
                // line 489
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 489), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Portfolio -->
";
        }
        // line 503
        echo "
";
        // line 504
        if (((array_key_exists("supporters", $context) &&  !(null === (isset($context["supporters"]) || array_key_exists("supporters", $context) ? $context["supporters"] : (function () { throw new RuntimeError('Variable "supporters" does not exist.', 504, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["supporters"]) || array_key_exists("supporters", $context) ? $context["supporters"] : (function () { throw new RuntimeError('Variable "supporters" does not exist.', 504, $this->source); })())) > 0))) {
            // line 505
            echo "\t\t<!-- Start Testimonial -->
\t\t<section id=\"testimonials\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url(";
            // line 506
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/testimonial-bg.jpg"), "html", null, true);
            echo "\" data-stellar-background-ratio=\"0.1\">
\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Ils nous soutiennent</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Testimonials === -->
\t\t\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">
\t\t\t\t\t\t";
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["supporters"]) || array_key_exists("supporters", $context) ? $context["supporters"] : (function () { throw new RuntimeError('Variable "supporters" does not exist.', 514, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["supporter"]) {
                // line 515
                echo "\t\t\t\t\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-desc\">";
                // line 516
                echo twig_get_attribute($this->env, $this->source, $context["supporter"], "quote", [], "any", false, false, false, 516);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 518
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["supporter"], "picture", [], "any", false, false, false, 518), "imageFile")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["supporter"], "picture", [], "any", false, false, false, 518), "name", [], "any", false, false, false, 518), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 520
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supporter"], "url", [], "any", false, false, false, 520), "html", null, true);
                echo "\"><h5 class=\"testimonial-author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supporter"], "name", [], "any", false, false, false, 520), "html", null, true);
                echo "</h5></a>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-profession\">";
                // line 521
                echo twig_get_attribute($this->env, $this->source, $context["supporter"], "profession", [], "any", false, false, false, 521);
                echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supporter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Testimonial -->
";
        }
        // line 528
        echo "
";
        // line 529
        if (((array_key_exists("news", $context) &&  !(null === (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 529, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 529, $this->source); })())) > 0))) {
            // line 530
            echo "\t\t<!-- Start blog -->
\t\t<section id=\"blog\" class=\"p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Dernières actualités</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Retrouvez ci-dessous nos dernières actualités.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<!-- === blog === -->
\t\t\t\t\t\t\t\t<div id=\"owl-blog\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t";
            // line 547
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 547, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 548
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 550
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 550)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["new"], "picture", [], "any", false, false, false, 550), "imageFile")), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i>";
                // line 553
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "publication", [], "any", false, false, false, 553), "d/m/Y"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>";
                // line 554
                if ((twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", true, true, false, 554) &&  !(null === twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", false, false, false, 554)))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", false, false, false, 554), "name", [], "any", false, false, false, 554), "html", null, true);
                }
                echo "</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
                // line 557
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 557)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "name", [], "any", false, false, false, 557), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">";
                // line 558
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["new"], "article", [], "any", false, false, false, 558)), 0, 50), "html", null, true);
                echo "...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 559
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 559)]), "html", null, true);
                echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
";
        }
        // line 568
        echo "
";
        // line 569
        if (((array_key_exists("partners", $context) &&  !(null === (isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 569, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 569, $this->source); })())) > 0))) {
            // line 570
            echo "\t\t<!-- Start client -->
\t\t<section id=\"client\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Clients === -->
\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div id=\"owl-clients\" class=\"owl-carousel owl-theme client text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 580
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 580, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 581
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 582
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 582), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["partner"], "picture", [], "any", false, false, false, 582), "imageFile")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "picture", [], "any", false, false, false, 582), "name", [], "any", false, false, false, 582), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 585
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End client -->
";
        }
        // line 591
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 594
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 595
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<!-- RS Plugin Extensions -->
\t<script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/visible-jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/video-bg.js"), "html", null, true);
        echo "\"></script>

\t<!-- Components Plugin -->
\t<script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
\t<script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
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
        return array (  922 => 609,  918 => 608,  914 => 607,  910 => 606,  904 => 603,  900 => 602,  896 => 601,  892 => 600,  888 => 599,  884 => 598,  877 => 595,  867 => 594,  856 => 591,  848 => 585,  835 => 582,  832 => 581,  828 => 580,  816 => 570,  814 => 569,  811 => 568,  804 => 563,  794 => 559,  790 => 558,  784 => 557,  776 => 554,  772 => 553,  764 => 550,  760 => 548,  756 => 547,  737 => 530,  735 => 529,  732 => 528,  726 => 524,  717 => 521,  711 => 520,  704 => 518,  699 => 516,  696 => 515,  692 => 514,  681 => 506,  678 => 505,  676 => 504,  673 => 503,  666 => 498,  651 => 489,  641 => 484,  636 => 482,  627 => 481,  623 => 480,  617 => 476,  606 => 474,  602 => 473,  587 => 460,  585 => 459,  576 => 453,  567 => 447,  562 => 445,  546 => 432,  277 => 166,  201 => 93,  124 => 19,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t\t\t\t<img src=\"{{asset('web/img/slider/s1.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

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
\t\t\t\t\t\t<img src=\"{{asset('web/img/slider/s2.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

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
\t\t\t\t\t\t<img src=\"{{asset('web/img/slider/s3.jpg')}}\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

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
\t\t\t\t\t\t\t\t\t\t\tLow Production est une association de <b>production audiovisuelle</b> engagée dans la <b>transition écologique</b>. Nous mettons en relation des bénévoles et <b>mutualisons des compétences</b> pour réaliser des <b>documentaires</b> sur les thématiques <b>sociales et environnementales</b>, en veillant à <b>minimiser</b> leur impact. N’ayant pas de but lucratif et fonctionnant principalement sur la base du bénévolat, nous <b>expérimentons</b> et <b>documentons</b> des techniques de production à <b>faible impact environnemental</b> pour imaginer les métiers audiovisuels de <b>demain</b>.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Que vous soyez réalisateur, ingénieur du son, graphiste, musicien... <b>professionnel</b> ou <b>amateur</b>, une place vous attend pour collaborer à la <b>réalisation</b> de projets documentaires <b>libres</b>, <b>collaboratifs</b>, à <b>faible impact environnemental</b> et <b>engagés</b>.
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
\t\t\t\t\t\t\t\t\t\t<h4>La diffusion libre</h4>
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
\t\t\t\t\t\t\t\t\t\t<p>Nous proposons à nos bénévoles un cadre pour travailler <b>ensemble</b> sur un projet audiovisuel <b>commun</b>. Réalisateurs, ingénieurs du son, scénaristes, photographes, vidéastes, musiciens... forment ainsi un <b>collectif</b> de <b>bénévoles</b> réuni derrière la création de <b>documentaires engagés</b> sur les thématiques <b>sociales</b> et <b>environnementales</b>.</p>

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
\t\t\t\t\t\t\t\t\t\t<h5>Diffuser librement</h5>
\t\t\t\t\t\t\t\t\t\t<p>Les projets réalisés chez Low Production sont diffusés sous <b>licence libre</b> Creative Commons. Ils peuvent ainsi être <b>partagés</b> et <b>adaptés</b> gratuitement. En travaillant ainsi, nous assurons une <b>équité dans la distribution et la diffusion</b> de nos réalisations. Lorsque la diffusion se fait dans un cadre <b>commercial</b>, nous encourageons les diffuseurs à <b>soutenir</b> l'association afin de <b>financer</b> et <b>encourager</b> de <b>futurs projets</b>. Notre fonctionnement est semblable à un spectacle où l'entrée est à <b>prix libre</b>.</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-top-20\">Le fonctionnement</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class='timeline-title'>#1 Diffusion</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Le partage et la diffusion de nos projets sont libres et gratuits, même à des fins commerciales.</p>
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
\t\t\t\t\t\t\t\t<a #id=\"bd-button\" class=\"btn btn-main wow fadeInUp\" href=\"{{url(\"story\")}}\" data-wow-duration=\"1s\" data-wow-delay=\"0.8s\">Découvrir les origines du projet</a>
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
\t\t\t\t<source src=\"{{ asset('web/img/video-bg.mp4')}}\" type=\"video/mp4\">
\t\t</video>
\t\t<img src=\"{{ asset('web/img/video-bg.jpg')}}\"></img>
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

{% if projects is defined and projects is not null and projects|length > 0 %}
\t\t<!-- Start Portfolio -->
\t\t<section id=\"portfolio\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-30\">
\t\t\t\t\t\t\t\t<h2><strong>Nos derniers films</strong></h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t\t\t<ul class=\"pf-filter text-center list-inline\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t\t\t{% for c in categories %}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".c{{c.id}}\" class=\"iso-button\">{{c.name}}</a></li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<!-- Portfolio -->
\t\t\t\t\t\t<div class=\"portfolio portfolio-isotope col-3 gutter\">
\t\t\t\t\t\t\t\t{% for project in projects %}
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-item {% if project.state is defined and project.state is not null %}c{{project.state.id}} {% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"movie\", {\"id\": project.id})}}\" class=\"pf-style pf-pointer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(vich_uploader_asset(project.picture, 'imageFile'))}}\" alt=\"{{project.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">{{project.name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Portfolio -->
{% endif %}

{% if supporters is defined and supporters is not null and supporters|length > 0 %}
\t\t<!-- Start Testimonial -->
\t\t<section id=\"testimonials\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url({{asset('web/img/testimonial-bg.jpg')}}\" data-stellar-background-ratio=\"0.1\">
\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Ils nous soutiennent</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Testimonials === -->
\t\t\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">
\t\t\t\t\t\t{% for supporter in supporters %}
\t\t\t\t\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-desc\">{{supporter.quote|raw}}</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset(vich_uploader_asset(supporter.picture, 'imageFile'))}}\" alt=\"{{supporter.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{supporter.url}}\"><h5 class=\"testimonial-author\">{{supporter.name}}</h5></a>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-profession\">{{supporter.profession|raw}}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Testimonial -->
{% endif %}

{% if news is defined and news is not null and news|length > 0 %}
\t\t<!-- Start blog -->
\t\t<section id=\"blog\" class=\"p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t\t\t<!-- Section Title -->
\t\t\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Dernières actualités</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Retrouvez ci-dessous nos dernières actualités.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<!-- === blog === -->
\t\t\t\t\t\t\t\t<div id=\"owl-blog\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t{% for new in news %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\", {\"id\": new.id})}}\"><img src=\"{{asset(vich_uploader_asset(new.picture, 'imageFile'))}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i>{{new.publication|date(\"d/m/Y\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>{% if new.writer is defined and new.writer is not null %}{{new.writer.name}}{% endif %}</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\", {\"id\": new.id})}}\">{{new.name}}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">{{new.article|striptags|slice(0, 50)}}...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\", {\"id\": new.id})}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
{% endif %}

{% if partners is defined and partners is not null and partners|length > 0 %}
\t\t<!-- Start client -->
\t\t<section id=\"client\" class=\"light-bg p-top-80 p-bottom-80\">
\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t\t\t<div class=\"divider-center-small\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Clients === -->
\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div id=\"owl-clients\" class=\"owl-carousel owl-theme client text-center\">
\t\t\t\t\t\t\t\t\t\t{% for partner in partners %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"client-item text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{partner.url}}\"><img class=\"img-responsive\" src=\"{{asset(vich_uploader_asset(partner.picture, 'imageFile'))}}\" alt=\"{{partner.picture.name}}\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End client -->
{% endif %}

{% endblock %}

{% block js %}
\t{{parent()}}

\t<!-- RS Plugin Extensions -->
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.carousel.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.migration.min.js')}}\"></script>
\t<script src=\"{{ asset('web/js/visible-jquery.min.js')}}\"></script>
\t<script src=\"{{ asset('web/js/video-bg.js')}}\"></script>

\t<!-- Components Plugin -->
\t<script src=\"{{ asset('web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{ asset('web/')}}js/isotope.pkgd.min.js\"></script>
\t<script src=\"{{ asset('web/')}}inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"{{ asset('web/')}}inc/revolution/js/jquery.themepunch.revolution.min.js\"></script>

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
