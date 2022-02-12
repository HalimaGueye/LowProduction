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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<!-- Start Intro -->
<section id=\"slider\">
\t\t<div class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"agency-website\" id=\"rev_slider_280_1_wrapper\" style=\"background-color:#fff;padding:0px;height:1080px;\">
\t\t\t<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
\t\t\t<div class=\"rev_slider fullscreenbanner\" id=\"rev_slider_nagency\" style=\"display:none;\">
\t\t\t\t\t<ul style=\"display:none;\">

\t\t\t\t\t\t<!-- slider Item 1 -->
\t\t\t\t\t\t<li data-index=\"rs-1\" data-transition=\"fadetotopfadefrombottom\" data-slotamount=\"default\" data-easein=\"Power3.easeInOut\" data-easeout=\"Power3.easeInOut\" data-masterspeed=\"1500\" data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"N.Agency\" data-description=\"\">
\t\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
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
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
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
\t\t\t\t\t\t\t\t\tC'est avec le <strong>soutien financier</strong> de nos mécènes et l'<strong>investissement de nos bénévoles</strong> que nous pouvons <strong>réaliser</strong> des documentaires<strong>engagés</strong> et des <strong>études environnementales</strong>.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tIl est possible de s’engager en <b>adhérant</b>, en <b>participant</b> à nos missions, en organisant des <b>diffusions</b> chez soi ou en faisant une <b>donation</b> à l’association.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<iframe class=\"m-top-30 iframe-helloasso\" src=\"https://www.helloasso.com/associations/les-ailes-de-l-ocean/formulaires/3\"></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 1 -->

<!-- Start Members -->
<section id=\"members\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url(";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/members-bg.jpg)\" data-stellar-background-ratio=\"0.2\">
\t\t<!-- Section Title -->
\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Paroles de membres</h2>
\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t</div>
\t\t<!-- === Testimonials === -->
\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">

\t\t\t\t<!-- === Testimonial item 1 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Je suis régulièrement les activités de l'association et me focalise sur la thématique environnementale. J'échange souvent avec le bureau et on peut dire que je suis une membre régulière.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/members/1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Chloé Marzin</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre adhérente spécialisée en études environnementales</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 2 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Photographe, je cherchais à m'investir ponctuellement sur des missions de terrain. J'accompagne les tournages de Low Production pour réaliser des photos de communication.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/members/2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Antoine Ollivier</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre usager et photographe amateur</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 3 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Je passe certains de mes weekends aux côtés de Low Production pour progresser en vidéo tout en participant à un projet documentaire qui fait sens pour moi !</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/members/3.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Cam Pals</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre usager et vidéaste en herbe</h5>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Members -->

<!-- Start Support 2  -->
<section id=\"join-us\" class=\"p-top-30 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous rejoindre</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tVous souhaitez vous mobiliser à nos côtés et aller <strong>encore plus loin dans votre engagement</strong> ?
\t\t\t\t\t\t\t\t\t<br>Les <a target=\"_blank\" href=\"./img/pdf/statuts_low_production.pdf\">statuts de l'association</a> prévoient plusieurs qualités de membres pour répondre à plusieurs niveaux d'investissement. Faites <b>votre choix</b> !
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\tN'hésitez pas à nous contacter pour <b>en savoir plus</b> sur l'association, avant de franchir le pas :)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-main m-top-20 btn-theme wow fadeInLeft\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">Dossier de candidature</button>
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

    // line 260
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 261
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<!-- RS Plugin Extensions -->
\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/js/visible-jquery.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- Components Plugin -->
\t<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
\t<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "inc/revolution/js/jquery.themepunch.tools.min.js\"></script>
\t<script src=\"";
        // line 274
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
        return "gentle_chef/support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 274,  436 => 273,  432 => 272,  428 => 271,  422 => 268,  418 => 267,  414 => 266,  410 => 265,  406 => 264,  399 => 261,  389 => 260,  348 => 228,  335 => 218,  322 => 208,  306 => 195,  201 => 93,  124 => 19,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Nous soutenir
{% endblock %}

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
\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/slider/s4.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

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
\t\t\t\t\t\t\t<img alt=\"\" class=\"rev-slidebg\" data-bgparallax=\"3\" data-bgposition=\"center center\" data-duration=\"5000\" data-ease=\"Linear.easeNone\" data-kenburns=\"on\" data-no-retina=\"\" data-offsetend=\"0 0\" data-offsetstart=\"0 0\" data-rotateend=\"0\" data-rotatestart=\"0\" data-scaleend=\"100\" data-scalestart=\"110\" src=\"{{asset('bundles/web/')}}img/slider/s5.jpg\">

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
\t\t\t\t\t\t\t\t\tC'est avec le <strong>soutien financier</strong> de nos mécènes et l'<strong>investissement de nos bénévoles</strong> que nous pouvons <strong>réaliser</strong> des documentaires<strong>engagés</strong> et des <strong>études environnementales</strong>.
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tIl est possible de s’engager en <b>adhérant</b>, en <b>participant</b> à nos missions, en organisant des <b>diffusions</b> chez soi ou en faisant une <b>donation</b> à l’association.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<iframe class=\"m-top-30 iframe-helloasso\" src=\"https://www.helloasso.com/associations/les-ailes-de-l-ocean/formulaires/3\"></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Support 1 -->

<!-- Start Members -->
<section id=\"members\" class=\"parallax-bg overlay-dark p-top-80 p-bottom-80\" style=\"background-image:url({{asset('bundles/web/')}}img/members-bg.jpg)\" data-stellar-background-ratio=\"0.2\">
\t\t<!-- Section Title -->
\t\t<div class=\"section-title text-center white-color m-bottom-40\">
\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Paroles de membres</h2>
\t\t\t\t<div class=\"divider-center-small divider-white wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t</div>
\t\t<!-- === Testimonials === -->
\t\t<div id=\"owl-testimonials\" class=\"owl-carousel owl-theme testimonial text-center white-color\">

\t\t\t\t<!-- === Testimonial item 1 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Je suis régulièrement les activités de l'association et me focalise sur la thématique environnementale. J'échange souvent avec le bureau et on peut dire que je suis une membre régulière.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('bundles/web/')}}img/members/1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Chloé Marzin</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre adhérente spécialisée en études environnementales</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 2 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Photographe, je cherchais à m'investir ponctuellement sur des missions de terrain. J'accompagne les tournages de Low Production pour réaliser des photos de communication.</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('bundles/web/')}}img/members/2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Antoine Ollivier</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre usager et photographe amateur</h5>
\t\t\t\t</div>

\t\t\t\t<!-- === Testimonial item 3 === -->
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t\t<p class=\"testimonial-desc\">Je passe certains de mes weekends aux côtés de Low Production pour progresser en vidéo tout en participant à un projet documentaire qui fait sens pour moi !</p>
\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{asset('bundles/web/')}}img/members/3.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"testimonial-author\">Cam Pals</h5>
\t\t\t\t\t\t<h5 class=\"testimonial-profession\">Membre usager et vidéaste en herbe</h5>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Members -->

<!-- Start Support 2  -->
<section id=\"join-us\" class=\"p-top-30 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-60\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous rejoindre</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tVous souhaitez vous mobiliser à nos côtés et aller <strong>encore plus loin dans votre engagement</strong> ?
\t\t\t\t\t\t\t\t\t<br>Les <a target=\"_blank\" href=\"./img/pdf/statuts_low_production.pdf\">statuts de l'association</a> prévoient plusieurs qualités de membres pour répondre à plusieurs niveaux d'investissement. Faites <b>votre choix</b> !
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\tN'hésitez pas à nous contacter pour <b>en savoir plus</b> sur l'association, avant de franchir le pas :)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-main m-top-20 btn-theme wow fadeInLeft\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">Dossier de candidature</button>
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
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.carousel.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.kenburn.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/inc/revolution/js/extensions/revolution.extension.migration.min.js')}}\"></script>
\t<script src=\"{{ asset('bundles/web/js/visible-jquery.min.js')}}\"></script>

\t<!-- Components Plugin -->
\t<script src=\"{{ asset('bundles/web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{ asset('bundles/web/')}}js/isotope.pkgd.min.js\"></script>
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
", "gentle_chef/support.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\support.html.twig");
    }
}
