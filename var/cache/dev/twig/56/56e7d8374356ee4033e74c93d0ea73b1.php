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

/* gentle_chef/support.html.twig */
class __TwigTemplate_1f7bcd80ace219084d07557a844f228d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'og_img' => [$this, 'block_og_img'],
            'support' => [$this, 'block_support'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/support.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/support.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/support.html.twig", 1);
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
        echo " | Nous soutenir
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_og_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_img"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_img"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/slider/s4.jpg"), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_support($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "support"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "support"));

        echo "<li class=\"active\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<!-- Start Intro -->
<section id=\"slider\">
\t\t<div class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"agency-website\" id=\"rev_slider_280_1_wrapper\" style=\"background-color:#fff;padding:0px;height:1080px;\">
\t\t\t<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
\t\t\t<div class=\"rev_slider fullscreenbanner\" id=\"rev_slider_nagency\" style=\"display:none;\">
\t\t\t\t\t<ul style=\"display:none;\">

\t\t\t\t\t\t<!-- slider Item 1 -->
\t\t\t\t\t\t<li data-index=\"rs-1\" data-transition=\"fadetotopfadefrombottom\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"N.Agency\" data-description=\"\">
\t\t\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "img/slider/s4.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous soutenir
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\">Aidez notre projet à se développer
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#donate' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- slider Item 2 -->
\t\t\t\t\t\t<li data-index=\"rs-2\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t\t<img alt=\"\" class=\"rev-slidebg\" data-bgparallax=\"3\" data-bgposition=\"center center\" data-duration=\"5000\" data-ease=\"Linear.easeNone\" data-kenburns=\"on\" data-no-retina=\"\" data-offsetend=\"0 0\" data-offsetstart=\"0 0\" data-rotateend=\"0\" data-rotatestart=\"0\" data-scaleend=\"100\" data-scalestart=\"110\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "img/slider/s5.jpg\">

\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-1\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-75','-70','-70','-45']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous rejoindre
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle white-color tp-resizeme rs-parallaxlevel-2\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-2\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\">Devenir membre de l'association
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-3\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['90','90','100','75']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#join' class='btn btn-main btn-transparent-light'>En savoir plus</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t</div>
\t</div>
</section>
<!-- End Intro -->

<!-- Start Support 1 -->
<section id=\"donate\" class=\"p-top-40\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous soutenir</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tLow Production est une association à but non lucratif et c’est <strong>grâce à vous</strong> qu'elle peut avoir une indépendance financière et opérationnelle.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tC'est avec le <strong>soutien financier</strong> de nos mécènes et l'<strong>investissement de nos bénévoles</strong> que nous pouvons <strong>réaliser</strong> des documentaires <strong>engagés</strong> et des <strong>études environnementales</strong>.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tIl est possible de s’engager en <b>adhérant</b>, en <b>participant</b> à nos missions, en organisant des <b>diffusions</b> chez soi ou en faisant une <b>donation</b> à l’association.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<iframe class=\"m-top-30 iframe-helloasso\" id=\"haWidget\" allowtransparency=\"true\" scrolling=\"auto\" src=\"https://www.helloasso.com/associations/low-production/formulaires/1/widget\"></iframe>
\t\t\t\t\t\t\t\t<span>Ouvrir la page <a target=\"_blank\" href=\"https://www.helloasso.com/associations/low-production/formulaires/1/widget\">dans un autre onglet</a>.</span>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 1 -->

";
        // line 197
        if (((array_key_exists("members", $context) &&  !(null === (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 197, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 197, $this->source); })())) > 0))) {
            // line 198
            echo "\t\t<!-- Start Members -->
\t\t<section id=\"members\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url(";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
            echo "img/members-bg.jpg)\" data-stellar-background-ratio=\"0.2\">
\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Paroles de membres</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Testimonials === -->
\t\t\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">
\t\t\t\t\t\t";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 208
                echo "\t\t\t\t\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-desc\">";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["m"], "quote", [], "any", false, false, false, 209);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["m"], "picture", [], "any", false, false, false, 211), "imageFile")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "picture", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-author\">";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 213), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-profession\">";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["m"], "description", [], "any", false, false, false, 214);
                echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Members -->
";
        }
        // line 221
        echo "
<!-- Start Support 2  -->
<section id=\"join-us\" class=\"p-top-30 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous rejoindre</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tVous souhaitez vous mobiliser à nos côtés et aller <strong>encore plus loin dans votre engagement</strong> ?
\t\t\t\t\t\t\t\t\t<br>Les <a target=\"_blank\" href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/pdf/statuts_low_production.pdf"), "html", null, true);
        echo "\">statuts de l'association</a> prévoient plusieurs qualités de membres pour répondre à plusieurs niveaux d'investissement. Faites <b>votre choix</b> !
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\tN'hésitez pas à nous contacter pour <b>en savoir plus</b> sur l'association, avant de franchir le pas :)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/pdf/dossier_candidature_low_production.pdf"), "html", null, true);
        echo "\" class=\"btn btn-main m-top-20 btn-theme wow fadeInLeft\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">Dossier de candidature</a>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 2 -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 245
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 246
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<!-- RS Plugin Extensions -->
\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/visible-jquery.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- Components Plugin -->
\t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
\t<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"";
        // line 259
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
        return "gentle_chef/support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 259,  467 => 258,  463 => 257,  459 => 256,  453 => 253,  449 => 252,  445 => 251,  441 => 250,  437 => 249,  430 => 246,  420 => 245,  402 => 236,  394 => 231,  382 => 221,  376 => 217,  367 => 214,  363 => 213,  356 => 211,  351 => 209,  348 => 208,  344 => 207,  333 => 199,  330 => 198,  328 => 197,  223 => 95,  146 => 21,  135 => 12,  125 => 11,  106 => 9,  85 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Nous soutenir
{% endblock %}

{% block og_img  %} {{ asset('web/img/slider/s4.jpg') }} {% endblock %}

{% block support %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Start Intro -->
<section id=\"slider\">
\t\t<div class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"agency-website\" id=\"rev_slider_280_1_wrapper\" style=\"background-color:#fff;padding:0px;height:1080px;\">
\t\t\t<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
\t\t\t<div class=\"rev_slider fullscreenbanner\" id=\"rev_slider_nagency\" style=\"display:none;\">
\t\t\t\t\t<ul style=\"display:none;\">

\t\t\t\t\t\t<!-- slider Item 1 -->
\t\t\t\t\t\t<li data-index=\"rs-1\" data-transition=\"fadetotopfadefrombottom\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"N.Agency\" data-description=\"\">
\t\t\t\t\t\t\t<img src=\"{{asset('web/')}}img/slider/s4.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-1\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-160','-170','-170','-120']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous soutenir
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-2\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-80','-90','-90','-60']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\">Aidez notre projet à se développer
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\t\tid=\"slide-1-layer-3\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['15','5','5','10']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#donate' class='btn btn-main btn-white'>En savoir plus</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- slider Item 2 -->
\t\t\t\t\t\t<li data-index=\"rs-2\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\">
\t\t\t\t\t\t\t<img alt=\"\" class=\"rev-slidebg\" data-bgparallax=\"3\" data-bgposition=\"center center\" data-duration=\"5000\" data-ease=\"Linear.easeNone\" data-kenburns=\"on\" data-no-retina=\"\" data-offsetend=\"0 0\" data-offsetstart=\"0 0\" data-rotateend=\"0\" data-rotatestart=\"0\" data-scaleend=\"100\" data-scalestart=\"110\" src=\"{{asset('web/')}}img/slider/s5.jpg\">

\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-1\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-75','-70','-70','-45']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['70','60','60','36']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['70','60','60','50']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\tdata-splitin=\"chars\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-elementdelay=\"0.05\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\">Nous rejoindre
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle white-color tp-resizeme rs-parallaxlevel-2\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-2\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-fontsize=\"['28','24','24','20']\"
\t\t\t\t\t\t\t\tdata-lineheight=\"['28','24','36','30']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"1500\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap;\">Devenir membre de l'association
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t<div class=\"tp-caption rs-parallaxlevel-5\"
\t\t\t\t\t\t\t\tid=\"slide-3-layer-3\"
\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['90','90','100','75']\"
\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t\tdata-transform_idle=\"o:1;\"
\t\t\t\t\t\t\t\tdata-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
\t\t\t\t\t\t\t\tdata-style_hover=\"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"
\t\t\t\t\t\t\t\tdata-transform_in=\"y:50px;opacity:0;s:1500;e:Power4.easeInOut;\"
\t\t\t\t\t\t\t\tdata-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
\t\t\t\t\t\t\t\tdata-mask_out=\"x:inherit;y:inherit;\"
\t\t\t\t\t\t\t\tdata-start=\"2000\"
\t\t\t\t\t\t\t\tdata-splitin=\"none\"
\t\t\t\t\t\t\t\tdata-splitout=\"none\"
\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"next\",\"delay\":\"\"}]'
\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\t\tstyle=\"\"><a data-scroll href='#join' class='btn btn-main btn-transparent-light'>En savoir plus</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t</div>
\t</div>
</section>
<!-- End Intro -->

<!-- Start Support 1 -->
<section id=\"donate\" class=\"p-top-40\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous soutenir</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tLow Production est une association à but non lucratif et c’est <strong>grâce à vous</strong> qu'elle peut avoir une indépendance financière et opérationnelle.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tC'est avec le <strong>soutien financier</strong> de nos mécènes et l'<strong>investissement de nos bénévoles</strong> que nous pouvons <strong>réaliser</strong> des documentaires <strong>engagés</strong> et des <strong>études environnementales</strong>.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tIl est possible de s’engager en <b>adhérant</b>, en <b>participant</b> à nos missions, en organisant des <b>diffusions</b> chez soi ou en faisant une <b>donation</b> à l’association.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<iframe class=\"m-top-30 iframe-helloasso\" id=\"haWidget\" allowtransparency=\"true\" scrolling=\"auto\" src=\"https://www.helloasso.com/associations/low-production/formulaires/1/widget\"></iframe>
\t\t\t\t\t\t\t\t<span>Ouvrir la page <a target=\"_blank\" href=\"https://www.helloasso.com/associations/low-production/formulaires/1/widget\">dans un autre onglet</a>.</span>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 1 -->

{% if members is defined and members is not null and members|length > 0 %}
\t\t<!-- Start Members -->
\t\t<section id=\"members\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url({{asset('web/')}}img/members-bg.jpg)\" data-stellar-background-ratio=\"0.2\">
\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Paroles de membres</h2>
\t\t\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- === Testimonials === -->
\t\t\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">
\t\t\t\t\t\t{% for m in members %}
\t\t\t\t\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-desc\">{{m.quote|raw}}</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset(vich_uploader_asset(m.picture, 'imageFile'))}}\" alt=\"{{m.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-author\">{{m.name}}</h5>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"testimonial-profession\">{{m.description|raw}}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End Members -->
{% endif %}

<!-- Start Support 2  -->
<section id=\"join-us\" class=\"p-top-30 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous rejoindre</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tVous souhaitez vous mobiliser à nos côtés et aller <strong>encore plus loin dans votre engagement</strong> ?
\t\t\t\t\t\t\t\t\t<br>Les <a target=\"_blank\" href=\"{{asset('web/img/pdf/statuts_low_production.pdf')}}\">statuts de l'association</a> prévoient plusieurs qualités de membres pour répondre à plusieurs niveaux d'investissement. Faites <b>votre choix</b> !
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\tN'hésitez pas à nous contacter pour <b>en savoir plus</b> sur l'association, avant de franchir le pas :)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{asset('web/img/pdf/dossier_candidature_low_production.pdf')}}\" class=\"btn btn-main m-top-20 btn-theme wow fadeInLeft\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">Dossier de candidature</a>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 2 -->
{% endblock %}

{% block js %}
\t{{parent()}}

\t<!-- RS Plugin Extensions -->
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.carousel.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js')}}\"></script>
\t<script src=\"{{ asset('web/inc/revolution/js/extensions/revolution.extension.migration.min.js')}}\"></script>
\t<script src=\"{{ asset('web/js/visible-jquery.min.js')}}\"></script>

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
", "gentle_chef/support.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\support.html.twig");
    }
}
