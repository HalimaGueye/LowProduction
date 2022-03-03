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

/* gentle_chef/story.html.twig */
class __TwigTemplate_c4b6af2b7188e60ecd0408f7a1f2c71b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'story' => [$this, 'block_story'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/story.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/story.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/story.html.twig", 1);
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
        echo " | Histoire
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_story($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

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
        echo "<!-- Start Story -->
<section id=\"bd\" class=\"p-top-50 p-bottom-20\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>. Afin de vous raconter cette histoire, des bénévoles ont travaillé sur une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Story -->

<!-- Portfolio -->
<section id=\"films\" class=\"p-top-20 p-bottom-80\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comics"]) || array_key_exists("comics", $context) ? $context["comics"] : (function () { throw new RuntimeError('Variable "comics" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t<div class=\"pf-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "url", [], "any", false, false, false, 30), "html", null, true);
            echo "\" target=\"_blank\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["comic"], "picture", [], "any", false, false, false, 32), "imageFile")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comic"], "picture", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Par :</b> ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 38), "html", null, true);
                if (($context["w"] != twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 38)))) {
                    echo ", ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t</div>
\t\t</div>
</section>
<!-- Portfolio -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 55
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/lazyload.min.js\"></script>

\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(function() {
\t\t\t \$(\"img.lazy\").lazyload({
\t\t\t\t\t effect : \"fadeIn\"
\t\t\t });

\t\t});
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/story.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 57,  211 => 55,  201 => 54,  186 => 47,  159 => 38,  155 => 37,  145 => 32,  140 => 30,  137 => 29,  133 => 28,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Histoire
{% endblock %}

{% block story %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Start Story -->
<section id=\"bd\" class=\"p-top-50 p-bottom-20\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>. Afin de vous raconter cette histoire, des bénévoles ont travaillé sur une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Story -->

<!-- Portfolio -->
<section id=\"films\" class=\"p-top-20 p-bottom-80\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">
\t\t\t\t\t\t{% for comic in comics %}
\t\t\t\t\t\t\t\t<div class=\"pf-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{comic.url}}\" target=\"_blank\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(vich_uploader_asset(comic.picture, 'imageFile'))}}\" alt=\"{{comic.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">{{comic.name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Par :</b> {% for w in comic.writers %} {{w.name}}{% if w != comic.writers|last %}, {% endif %} {% endfor %}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t</div>
</section>
<!-- Portfolio -->

{% endblock %}

{% block js %}
\t{{parent()}}

\t<script src=\"{{ asset('web/')}}js/lazyload.min.js\"></script>

\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(function() {
\t\t\t \$(\"img.lazy\").lazyload({
\t\t\t\t\t effect : \"fadeIn\"
\t\t\t });

\t\t});
\t</script>

{% endblock %}
", "gentle_chef/story.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\story.html.twig");
    }
}
