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

/* gentle_chef/studies.html.twig */
class __TwigTemplate_1ff5fac10a2126c1d2b1fc312c25c00c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'studies' => [$this, 'block_studies'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/studies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/studies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/studies.html.twig", 1);
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
        echo " | Nos études
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_studies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "studies"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "studies"));

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
        echo "<!-- Section Title Portfolio -->
<div class=\"section-title-bg text-center\">
\t\t<h2 class=\"wow fadeInDown no-margin\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Nos études</strong></h2>
\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Consultez l'ensemble de nos études environnementales sur cette page.</p>
</div>


<!-- Start Studies -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Toutes</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".acv\" class=\"iso-button\">Analyse</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".general\" class=\"iso-button\">Bilan</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-2 gutter\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item acv\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("study");
        echo "\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "img/studies/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Analyse de cycle de vie #1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item general\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("study");
        echo "\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "img/studies/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">BILAN #1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum.</p>
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
<!-- End Studies -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez contribuer à ces études ? </h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
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

    // line 95
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 96
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/studies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 98,  236 => 97,  231 => 96,  221 => 95,  203 => 86,  169 => 55,  164 => 53,  144 => 36,  139 => 34,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Nos études
{% endblock %}

{% block studies %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Section Title Portfolio -->
<div class=\"section-title-bg text-center\">
\t\t<h2 class=\"wow fadeInDown no-margin\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>Nos études</strong></h2>
\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Consultez l'ensemble de nos études environnementales sur cette page.</p>
</div>


<!-- Start Studies -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Toutes</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".acv\" class=\"iso-button\">Analyse</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".general\" class=\"iso-button\">Bilan</a></li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-2 gutter\">

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item acv\">
\t\t\t\t\t\t\t\t<a href=\"{{url('study')}}\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('web/')}}img/studies/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">Analyse de cycle de vie #1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t<div class=\"pf-item general\">
\t\t\t\t\t\t\t\t<a href=\"{{url('study')}}\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('web/')}}img/studies/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">BILAN #1</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum.</p>
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
<!-- End Studies -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez contribuer à ces études ? </h2>
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
", "gentle_chef/studies.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\studies.html.twig");
    }
}
