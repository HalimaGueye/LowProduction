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

/* gentle_chef/movies.html.twig */
class __TwigTemplate_495d41b6ea4b3aab3c9f8ee6d6267baf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'movies' => [$this, 'block_movies'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/movies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/movies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/movies.html.twig", 1);
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
        echo " | Nos films
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_movies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "movies"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "movies"));

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
<!-- Start Films -->
<section id=\"films\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Nos projets</strong></h2>
\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\tRetrouvez l'ensemble des projets documentaires <b>produits, réalisés et diffusés</b> par Low Production.</p>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".done\" class=\"iso-button\">Réalisés</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".doing\" class=\"iso-button\">En cours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".todo\" class=\"iso-button\">À venir</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item doing\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie");
        echo "\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/portfolio/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Koméla</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Située en plein cœur de l’Océan Indien, l’île de La Réunion a longtemps été un espace insulaire, préservé des activités humaines. Avec l’artificialisation de plus en plus intense de son littoral, les espèces indigènes et endémiques qui en faisaient sa particularité deviennent rares. Partons à la rencontre de celles et ceux qui se battent pour les préserver.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item done\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie");
        echo "\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/portfolio/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Berr(k)e</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Depuis avril 2021, l’association Wings of the Ocean travaille à des actions de dépollution plastique autour de l’Étang de Berre. Dans un monde en constante pollution, l’initiative peut sembler désespérée et pourtant, tous les matins, des bénévoles se lèvent avec le sourire et ramassent les déchets des autres.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t</div> <!-- Portfolio -->

\t\t</div> <!-- /.container -->
</section>
<!-- End Films -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez contribuer à ces projets ? </h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
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

    // line 102
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 103
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/movies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 105,  243 => 104,  238 => 103,  228 => 102,  209 => 92,  175 => 61,  170 => 59,  150 => 42,  145 => 40,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Nos films
{% endblock %}

{% block movies %}<li class=\"active\">{% endblock %}

{% block body %}

<!-- Start Films -->
<section id=\"films\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Nos projets</strong></h2>
\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\tRetrouvez l'ensemble des projets documentaires <b>produits, réalisés et diffusés</b> par Low Production.</p>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".done\" class=\"iso-button\">Réalisés</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".doing\" class=\"iso-button\">En cours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".todo\" class=\"iso-button\">À venir</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item doing\">
\t\t\t\t\t\t\t\t<a href=\"{{url('movie')}}\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/portfolio/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Koméla</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Située en plein cœur de l’Océan Indien, l’île de La Réunion a longtemps été un espace insulaire, préservé des activités humaines. Avec l’artificialisation de plus en plus intense de son littoral, les espèces indigènes et endémiques qui en faisaient sa particularité deviennent rares. Partons à la rencontre de celles et ceux qui se battent pour les préserver.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item done\">
\t\t\t\t\t\t\t\t<a href=\"{{url('movie')}}\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('bundles/web/')}}img/portfolio/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Berr(k)e</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Depuis avril 2021, l’association Wings of the Ocean travaille à des actions de dépollution plastique autour de l’Étang de Berre. Dans un monde en constante pollution, l’initiative peut sembler désespérée et pourtant, tous les matins, des bénévoles se lèvent avec le sourire et ramassent les déchets des autres.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t</div> <!-- Portfolio -->

\t\t</div> <!-- /.container -->
</section>
<!-- End Films -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez contribuer à ces projets ? </h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"{{url('support')}}\" class=\"btn btn-main btn-theme wow fadeInUp\" data-wow-delay=\"0.5s\">En savoir plus</a>
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
", "gentle_chef/movies.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\movies.html.twig");
    }
}
