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
\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t<div class=\"pf-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movie", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["project"], "picture", [], "any", false, false, false, 42), "imageFile")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "picture", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 48);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t</div> <!-- Portfolio -->

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
        // line 73
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

    // line 83
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 84
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
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
        return array (  240 => 86,  236 => 85,  231 => 84,  221 => 83,  202 => 73,  184 => 57,  169 => 48,  165 => 47,  155 => 42,  150 => 40,  146 => 38,  142 => 37,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t\t\t\t{% for project in projects %}
\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t<div class=\"pf-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"movie\", {\"id\": project.id})}}\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(vich_uploader_asset(project.picture, 'imageFile'))}}\" alt=\"{{project.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">{{project.name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{project.description|raw}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
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
\t<script src=\"{{asset('web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{asset('web/')}}js/isotope.pkgd.min.js\"></script>

{% endblock %}
", "gentle_chef/movies.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\movies.html.twig");
    }
}
