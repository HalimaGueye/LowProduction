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

/* gentle_chef/team.html.twig */
class __TwigTemplate_b57a651ba0342b12e475188cf39e190a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'team' => [$this, 'block_team'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/team.html.twig", 1);
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
        echo " | L'équipe
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_team($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

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
        echo "
<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>L'équipe</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tPour certains de nos <b>bénévoles</b>, l'association a véritablement joué un rôle de <b>tremplin</b>. Pour d'autres, il s'agissait simplement d'une parenthèse. Quelque soit la place de l'audiovisuel dans leur vie actuelle, leurs divers talents <b>ont participé à la construction</b> et au <b>rayonnement</b> de Low Production.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Retrouvez ci-dessous tous les bénévoles qui sont passés par l'association et n'hésitez pas <b>à suivre</b> leurs travaux !
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".bureau\" class=\"iso-button\">Bureau</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a data-filter=\".p\" class=\"iso-button\">Projets documentaires</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<a data-filter=\".p1\" class=\"iso-button\">Berr(k)e</a>
\t\t\t\t\t\t\t\t\t<a data-filter=\".p2\" class=\"iso-button\">Koméla</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-4 gutter\">

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/8.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tRomane Jeunemaître
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendante
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item bureau p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/claire-monchauzou-866088198/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/claire.mcz\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/claire_oz/\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tClaire Monchauzou
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargée de projet (vice-présidente et trésorière)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/franckmithieux/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/franck.mthx\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://instagram.com/_franckm\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFranck Mithieux
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargé de communication
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/15.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tGaëtan Richard
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDessinateur
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item bureau p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/william-boffy-2994a3ba/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/william.boffy/\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWilliam Boffy
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieur et vidéaste (fondateur et président)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/13.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChloé Marzin
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieure
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/william-boffy-2994a3ba/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/laura.bernard.9469\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/5.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLaura Bernard
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tÉtudiante à Science Po
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://wlo.link/@damajira\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://open.spotify.com/artist/5pbB3XwWGUKvwqAhaqcxoP\"><i class=\"fa fa-spotify\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/Damajira\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/12.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDamajira
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tProducteur et auteur-compositeur-interprète.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://manonpoinsot.webador.fr/\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/manonpsnt\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/11.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tManon Poinsot
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPhotographe
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.halima-gueye.online/\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/14.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tHalima Gueye
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDéveloppeuse
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/thomasbousquet_/\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/6.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tThomas Bousquet
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendant
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://victorjanjic8.wixsite.com/victorjanjic\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/victor.janjic\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/7.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVictor Janjic
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendant
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://ginkio.com/mathilde-oudot\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/mathilde_udt\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/9.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMathilde Oudot
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tJournaliste et vidéaste
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/margaux-regnier-92a67331/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/margaux.regnier.5\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMargaux Regnier
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargée d'études environnementales
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/loic.franzini\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/team/10.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLoïc Franzini
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieur du son
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez en faire partie ?</h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 400
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("support");
        echo "\" class=\"btn btn-main btn-theme wow fadeInUp\" data-wow-delay=\"0.5s\">En savoir plus</a>
\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t</div>  <!-- /.row -->
\t\t</div> <!-- /.container -->
</section>
<!-- End Call to Action -->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 411
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 412
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 414,  585 => 413,  580 => 412,  570 => 411,  550 => 400,  519 => 372,  494 => 350,  468 => 327,  442 => 304,  416 => 281,  391 => 259,  366 => 237,  340 => 214,  313 => 190,  287 => 167,  263 => 146,  237 => 123,  213 => 102,  186 => 78,  159 => 54,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | L'équipe
{% endblock %}

{% block team %}<li class=\"active\">{% endblock %}

{% block body %}

<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>L'équipe</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tPour certains de nos <b>bénévoles</b>, l'association a véritablement joué un rôle de <b>tremplin</b>. Pour d'autres, il s'agissait simplement d'une parenthèse. Quelque soit la place de l'audiovisuel dans leur vie actuelle, leurs divers talents <b>ont participé à la construction</b> et au <b>rayonnement</b> de Low Production.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Retrouvez ci-dessous tous les bénévoles qui sont passés par l'association et n'hésitez pas <b>à suivre</b> leurs travaux !
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".bureau\" class=\"iso-button\">Bureau</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a data-filter=\".p\" class=\"iso-button\">Projets documentaires</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<a data-filter=\".p1\" class=\"iso-button\">Berr(k)e</a>
\t\t\t\t\t\t\t\t\t<a data-filter=\".p2\" class=\"iso-button\">Koméla</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-4 gutter\">

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/8.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tRomane Jeunemaître
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendante
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item bureau p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/claire-monchauzou-866088198/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/claire.mcz\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/claire_oz/\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tClaire Monchauzou
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargée de projet (vice-présidente et trésorière)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/franckmithieux/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/franck.mthx\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://instagram.com/_franckm\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFranck Mithieux
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargé de communication
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/15.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tGaëtan Richard
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDessinateur
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item bureau p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/william-boffy-2994a3ba/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/william.boffy/\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWilliam Boffy
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieur et vidéaste (fondateur et président)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/13.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChloé Marzin
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieure
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/william-boffy-2994a3ba/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/laura.bernard.9469\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/5.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLaura Bernard
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tÉtudiante à Science Po
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://wlo.link/@damajira\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://open.spotify.com/artist/5pbB3XwWGUKvwqAhaqcxoP\"><i class=\"fa fa-spotify\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/Damajira\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/12.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDamajira
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tProducteur et auteur-compositeur-interprète.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://manonpoinsot.webador.fr/\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/manonpsnt\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/11.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tManon Poinsot
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPhotographe
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.halima-gueye.online/\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/14.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tHalima Gueye
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDéveloppeuse
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/thomasbousquet_/\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/6.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tThomas Bousquet
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendant
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://victorjanjic8.wixsite.com/victorjanjic\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/victor.janjic\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/7.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVictor Janjic
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVidéaste indépendant
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://ginkio.com/mathilde-oudot\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/mathilde_udt\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/9.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMathilde Oudot
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tJournaliste et vidéaste
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p2\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.linkedin.com/in/margaux-regnier-92a67331/\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/margaux.regnier.5\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMargaux Regnier
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChargée d'études environnementales
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item p p1\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.instagram.com/loic.franzini\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/team/10.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLoïc Franzini
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIngénieur du son
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez en faire partie ?</h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"{{url(\"support\")}}\" class=\"btn btn-main btn-theme wow fadeInUp\" data-wow-delay=\"0.5s\">En savoir plus</a>
\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t</div>  <!-- /.row -->
\t\t</div> <!-- /.container -->
</section>
<!-- End Call to Action -->


{% endblock %}

{% block js %}
\t{{parent()}}
\t<script src=\"{{asset('bundles/web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{asset('bundles/web/')}}js/isotope.pkgd.min.js\"></script>
{% endblock %}
", "gentle_chef/team.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\team.html.twig");
    }
}
