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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><img class=\"blog-img-height\" src=\"";
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
            if ((twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", false, false, false, 29)))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["new"], "writer", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
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
            echo twig_escape_filter($this->env, (((twig_striptags(twig_get_attribute($this->env, $this->source, $context["new"], "article", [], "any", false, false, false, 33)) > 100)) ? ((twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["new"], "article", [], "any", false, false, false, 33)), 0, 101), " "), 0,  -1), " ") . "…")) : (twig_striptags(twig_get_attribute($this->env, $this->source, $context["new"], "article", [], "any", false, false, false, 33)))), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("new", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"read-more\">Lire la suite</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<center>
\t\t\t<div class=\"navigation\">
\t\t\t    ";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()));
        echo "
\t\t\t</div>
\t\t</center>
</section>
<!--End News -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 52
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
        return array (  211 => 52,  201 => 51,  185 => 44,  178 => 39,  167 => 34,  163 => 33,  157 => 32,  149 => 29,  145 => 28,  135 => 25,  130 => 22,  126 => 21,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t\t\t\t{% for new in pagination %}
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 m-bottom-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog wow zoomIn\" data-wow-duration=\"0.8s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-media\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\", {\"id\": new.id})}}\"><img class=\"blog-img-height\" src=\"{{asset(vich_uploader_asset(new.picture, 'imageFile'))}}\" alt=\"{{new.picture.name}}\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-info clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"><i class=\"fa fa-calendar\"></i>{{new.publication|date(\"d/m/Y\")}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comments\"><a href=\"#\"><i class=\"fa fa-pencil\"></i>{% if new.writer is defined and new.writer is not null %}{{new.writer.name}}{% endif %}</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-post-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"title\" href=\"{{url(\"new\", {\"id\": new.id})}}\">{{new.name}}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"p-bottom-20\">{{ new.article|striptags > 100 ? new.article|striptags|slice(0, 101)|split(' ')|slice(0, -1)|join(' ') ~ '…' : new.article|striptags }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{url(\"new\", {\"id\": new.id})}}\" class=\"read-more\">Lire la suite</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<center>
\t\t\t<div class=\"navigation\">
\t\t\t    {{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t</center>
</section>
<!--End News -->
{% endblock %}

{% block js %}
\t{{parent()}}
{% endblock %}
", "gentle_chef/news.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\news.html.twig");
    }
}
