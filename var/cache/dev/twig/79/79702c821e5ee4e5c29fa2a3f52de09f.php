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

/* gentle_chef/news.html.twig */
class __TwigTemplate_77671b75685263121d8ee963565833bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'news' => [$this, 'block_news'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/news.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/news.html.twig", 1);
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
        echo " | Nos actualités
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_news($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "news"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "news"));

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
        echo "<!-- Section Title Blog -->
<div class=\"section-title-bg text-center m-bottom-40\">
\t\t<h2 class=\"wow fadeInDown no-margin\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Actualités</strong></h2>
\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous vous tenons informés des actions de l'association sur cette page.</p>
</div>

<!--BLog single section-->
<section class=\"blog-index\">
\t\t<div class=\"container clearfix\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- === Blog item 1 === -->
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/news/b1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 2 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/news/b2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 3 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/news/b3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 4 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/news/b4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new");
        echo "\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xs-12 blog-pagination\">
\t\t\t\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"><i class=\"fa fa-arrow-left\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1 <span class=\"sr-only\">(current)</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"><i class=\"fa fa-arrow-right\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!--End News -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 124
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 124,  278 => 123,  235 => 89,  230 => 87,  218 => 80,  206 => 71,  201 => 69,  189 => 62,  177 => 53,  172 => 51,  160 => 44,  148 => 35,  143 => 33,  131 => 26,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Nos actualités
{% endblock %}

{% block news %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Section Title Blog -->
<div class=\"section-title-bg text-center m-bottom-40\">
\t\t<h2 class=\"wow fadeInDown no-margin\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Actualités</strong></h2>
\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Nous vous tenons informés des actions de l'association sur cette page.</p>
</div>

<!--BLog single section-->
<section class=\"blog-index\">
\t\t<div class=\"container clearfix\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- === Blog item 1 === -->
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url('new')}}\"><img src=\"{{asset('bundles/web/')}}img/news/b1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url('new')}}\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url('new')}}\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 2 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url('new')}}\"><img src=\"{{asset('bundles/web/')}}img/news/b2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url('new')}}\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url('new')}}\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 3 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url('new')}}\"><img src=\"{{asset('bundles/web/')}}img/news/b3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url('new')}}\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url('new')}}\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- === Blog item 4 === -->
\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-40\">
\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url('new')}}\"><img src=\"{{asset('bundles/web/')}}img/news/b4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i> 12 janvier 2022</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i> William Boffy</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url('new')}}\">Working in Cool Head</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. Those an equal point no years do. Depend warmth fat but her but played.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url('new')}}\" class=\"read-more\">Read More >></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xs-12 blog-pagination\">
\t\t\t\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"><i class=\"fa fa-arrow-left\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1 <span class=\"sr-only\">(current)</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"><i class=\"fa fa-arrow-right\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</section>
<!--End News -->
{% endblock %}

{% block js %}
\t{{parent()}}
{% endblock %}
", "gentle_chef/news.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\news.html.twig");
    }
}
