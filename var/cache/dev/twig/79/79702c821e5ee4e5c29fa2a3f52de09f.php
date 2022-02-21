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
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["new"], "picture", [], "any", false, false, false, 25), "imageFile")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "picture", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "publication", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>";
            // line 29
            if ((array_key_exists("var", $context) &&  !(null === (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 29, $this->source); })())))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "user", [], "any", false, false, false, 29), "pseudo", [], "any", false, false, false, 29), "html", null, true);
            }
            echo "</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">";
            // line 33
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["new"], "article", [], "any", false, false, false, 33)), 0, 50), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t<!-- PAGINATION A AJOUTER :) -->
\t\t\t\t</div>
\t\t</div>
</section>
<!--End News -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 47
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
        return array (  203 => 47,  193 => 46,  178 => 39,  167 => 34,  163 => 33,  157 => 32,  149 => 29,  145 => 28,  135 => 25,  130 => 22,  126 => 21,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t\t\t\t{% for new in news %}
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{url(\"new\", {\"id\": new.id})}}\"><img src=\"{{asset(vich_uploader_asset(new.picture, 'imageFile'))}}\" alt=\"{{new.picture.name}}\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i>{{new.publication|date(\"d/m/Y\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>{% if var is defined and var is not null %}{{new.user.pseudo}}{% endif %}</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\", {\"id\": new.id})}}\">{{new.name}}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">{{new.article|striptags|slice(0, 50)}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\", {\"id\": new.id})}}\" class=\"read-more\">En savoir plus >></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<!-- PAGINATION A AJOUTER :) -->
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
